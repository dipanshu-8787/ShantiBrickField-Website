
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

$response = ["status" => "error", "message" => "Something went wrong!"];


$host = "localhost"; 
$username = "root";  
$password = "";  
$database = "shanti_brick_db"; 

$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($phone)) {
        $errors[] = "Phone number is required.";
    } elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
        $errors[] = "Invalid phone number! Must be 10 digits.";
    }

    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    if (empty($errors)) {
        

        
        $stmt = $conn->prepare("INSERT INTO contact_form (name, email, phone, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phone, $message);
        
        if ($stmt->execute()) {
            
            $mail = new PHPMailer(true);
            try {

                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; 
                $mail->SMTPAuth = true;
                
                $mail->Username = $_ENV['EMAIL_USERNAME']; 

                $mail->Password = $_ENV['EMAIL_PASSWORD']; 

                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom($_ENV['EMAIL_USERNAME'], 'Your Name');
                $mail->addAddress($_ENV['EMAIL_USERNAME'], 'Admin');
                $mail->Subject = 'New Contact Form Submission';
                $mail->isHTML(true);
                $mail->Body = "
                    <h3>New Contact Form Submission</h3>
                    <p><strong>Name:</strong> $name</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Phone:</strong> $phone</p>
                    <p><strong>Message:</strong> $message</p>
                ";

                if ($mail->send()) {
                    $response = ["status" => "success", "message" => "Your message has been sent successfully!"];
                } else {
                    $response = ["status" => "error", "message" => "Email could not be sent."];
                }

            } 
            catch (Exception $e) {
                $response = ["status" => "error", "message" => "Error: {$mail->ErrorInfo}"];
            }
        }
        else {
            $response = ["status" => "error", "message" => "Failed to store data in the database."];
        }

        $stmt->close();
    } else {
        $response = ["status" => "error", "message" => implode("<br>", $errors)];
    }
}

$conn->close();
echo json_encode($response);
?>
