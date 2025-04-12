<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer-master/PHPMailer.php'; 
require 'PHPMailer-master/SMTP.php';
require 'PHPMailer-master/Exception.php';

$host = "localhost"; 
$username = "root";  
$password = "";  
$database = "shanti_brick_db"; 

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($conn->real_escape_string($_POST['name']));
    $phone = trim($conn->real_escape_string($_POST['phone']));
    $address = trim($conn->real_escape_string($_POST['address']));
    $type = trim($conn->real_escape_string($_POST['type']));
    $quantity = intval($_POST['quantity']);

    if (empty($name)) {
        header("Location: purchase.php?success=0&error=Name+is+required");
        exit;
    }

    if (empty($phone) || !preg_match('/^[0-9]{10}$/', $phone)) {
        header("Location: purchase.php?success=0&error=Invalid+phone+number+(must+be+10+digits)");
        exit;
    }

    if (empty($address)) {
        header("Location: purchase.php?success=0&error=Address+is+required");
        exit;
    }

    if (empty($type)) {
        header("Location: purchase.php?success=0&error=Brick+type+is+required");
        exit;
    }

    if ($quantity <= 0) {
        header("Location: purchase.php?success=0&error=Quantity+must+be+greater+than+0");
        exit;
    }

    if (!isset($_FILES['payment']) || $_FILES['payment']['error'] !== 0) {
        header("Location: purchase.php?success=0&error=Payment+image+upload+failed");
        exit;
    }

    
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
    $fileType = mime_content_type($_FILES['payment']['tmp_name']);
    if (!in_array($fileType, $allowedTypes)) {
        header("Location: purchase.php?success=0&error=Only+image+files+(JPG,+PNG,+GIF,+WEBP)+are+allowed");
        exit;
    }

    
    $paymentName = basename($_FILES['payment']['name']);
    $paymentTmp = $_FILES['payment']['tmp_name'];
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    $uploadedPath = $uploadDir . time() . '_' . $paymentName;
    move_uploaded_file($paymentTmp, $uploadedPath);

    
    $sql = "INSERT INTO purchase_orders (name, phone, address, type, quantity, payment_image)
            VALUES ('$name', '$phone', '$address', '$type', $quantity, '$uploadedPath')";

    if ($conn->query($sql) === TRUE) {
        
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username = $_ENV['EMAIL_USERNAME'];
            $mail->Password = $_ENV['EMAIL_PASSWORD'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom($_ENV['EMAIL_USERNAME'], 'Shanti Brick Field');
            $mail->addAddress($_ENV['EMAIL_USERNAME']);
            $mail->addAttachment($uploadedPath);

            $mail->isHTML(true);
            $mail->Subject = 'New Brick Order Placed';
            $mail->Body = "
                <h3>Order Details</h3>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Address:</strong> $address</p>
                <p><strong>Brick Type:</strong> $type</p>
                <p><strong>Quantity:</strong> $quantity</p>
                <p><strong>Payment Screenshot:</strong> Attached</p>
            ";

            $mail->send();
            $success = true;
        } catch (Exception $e) {
            $success = false;
        }
    }

    $conn->close();

    header("Location: purchase.php?success=" . ($success ? "1" : "0"));
    exit;
}
?>
