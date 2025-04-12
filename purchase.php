
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Order high-quality bricks online from Shanti Brick Field. Fast delivery, multiple types like Aval, Doyam, Sheedha Khajad, and Clay bricks. Easy payment process.">
    <meta name="keywords" content="buy bricks online, Shanti Brick Field, Aval bricks, Doyam bricks, Sheedha Khajad bricks, sun-dried clay bricks, brick purchase India">
    <title>Buy Bricks Online - Shanti Brick Field | Easy Brick Purchase</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-fixed bg-cover bg-center bg-no-repeat m-0" style="background-image: url('img_p1.png');">
<header class="bg-yellow-900 p-4 shadow-lg w-full z-10">
    <div class="container mx-auto flex justify-between items-center">
        <div class="logo text-white">
            <img src="logo.png" alt="Shanti Brick Field Logo" class="w-20">
        </div>

        <button id="menu-toggle" class="text-white text-3xl md:hidden focus:outline-none">
            ☰
        </button>

        <nav id="nav-links" class="hidden md:flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-6 text-2xl font-semibold text-white transition-all duration-300">
            <a href="index.php" class="hover:underline hover:text-yellow-300">Home</a>
            <a href="product.php" class="hover:underline hover:text-yellow-300">Products</a>
            <a href="about.php" class="hover:underline hover:text-yellow-300">About</a>
            <a href="purchase.php" class="hover:underline hover:text-yellow-300">Purchase</a>
            <a href="contact.php" class="hover:underline hover:text-yellow-300">Contact</a>
            <a href="tel:+919170087965" class="hover:underline hover:text-yellow-300">Call</a>
        </nav>
    </div>
</header>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
        const navLinks = document.getElementById('nav-links');
        navLinks.classList.toggle('hidden');
    });
</script>

    
    <div class="flex justify-center items-center flex-grow w-full my-10">
        <div class="bg-white p-8 rounded-xl shadow-lg max-w-lg w-full">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Buy Bricks</h2>
            <?php
                if (isset($_GET['success'])) {
                    if ($_GET['success'] == '1') {
                        echo '<p class="text-green-700 text-center font-semibold bg-green-100 p-2 rounded mb-4">🎉 Your order placed successfully!</p>';
                    } else {
                        $error = $_GET['error'] ?? '❌ Failed to place your order. Please try again.';
                    echo '<p class="text-red-700 text-center font-semibold bg-red-100 p-2 rounded mb-4">Error: ' . htmlspecialchars($error) . '</p>';
                    }
                }
            ?>

    
            <form class="space-y-5" action="purchase_backend.php" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="name" class="block text-gray-700 font-semibold">Name:</label>
                    <input type="text" id="name" name="name" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-400">
                </div>

                <div>
                    <label for="phone" class="block text-gray-700 font-semibold">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-400">
                </div>

                <div>
                    <label for="address" class="block text-gray-700 font-semibold">Address:</label>
                    <input type="text" id="address" name="address" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-400">
                </div>

                <div>
                    <label for="type" class="block text-gray-700 font-semibold">Brick Type:</label>
                    <select id="type" name="type" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-400">
                        <option value="red">Aval</option>
                        <option value="flyash">Doyam</option>
                        <option value="cement">Sheedha Khajad</option>
                        <option value="clay">Sun-Dried Clay Brick</option>
                    </select>
                </div>

                <div>
                    <label for="quantity" class="block text-gray-700 font-semibold">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-400">
                </div>

                <div>
                    <label for="payment" class="block text-gray-700 font-semibold">Upload Payment Screenshot:</label>
                    <input type="file" id="payment" name="payment" accept="image/*" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-400">
                </div>

                <div class="text-center mt-4">
                    <p class="text-gray-700 font-semibold">Scan to Pay:</p>
                    <img src="qr.png" alt="QR Code for Payment" class="mx-auto w-42 h-42 shadow-md border border-gray-300 rounded-lg">
                </div>

                <button type="submit" class="w-full bg-red-500 text-white py-3 rounded-lg font-semibold text-lg hover:bg-red-600 transition duration-300">
                    Submit Order
                </button>               

            </form>
            

        </div>
    </div>
    <?php include 'footer.php'; ?>   
</body>
</html>
