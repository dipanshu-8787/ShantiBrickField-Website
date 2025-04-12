

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Shanti Brick Field to buy high-quality bricks at the best prices in India. Reach out for inquiries, purchases, or dealership opportunities.">
    <meta name="keywords" content="Shanti Brick Field, contact, bricks, buy bricks, India, brickfield contact, quality bricks, construction material">
    <title>Contact Us - Shanti Brick Field | Buy Bricks Online in India</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
</head>
<body>
    
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

    
    <div class="p-6 bg-white shadow-lg rounded-lg max-w-lg w-full mx-auto my-10">
        <h2 class="text-4xl font-bold text-center mb-4 text-gray-800 border-b-4 border-yellow-900 pb-2">
            Get in Touch with Us
        </h2>
        <p class="text-lg text-center text-gray-600 mb-6 leading-relaxed">
            Have a question? Need assistance? Fill out the form below, and we'll get back to you as soon as possible!
        </p>

        
        <form id="contactForm" class="space-y-4">
            
            <div>
                <label for="name" class="block font-medium text-gray-700 pb-1">Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            </div>

            
            <div>
                <label for="email" class="block font-medium text-gray-700 pb-1">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            </div>

            
            <div>
                <label for="phone" class="block font-medium text-gray-700 pb-1">Phone Number</label>
                <input type="tel" name="phone" id="phone" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            </div>

            
            <div>
                <label for="message" class="block font-medium text-gray-700 pb-1">Message</label>
                <textarea name="message" id="message" rows="4" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required></textarea>
            </div>

            
            <div>
                <button type="submit" class="mt-2 w-full bg-yellow-900 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded transition">
                    Send Message
                </button>
            </div>
            <div id="formMessage" class="text-center mt-4"></div>
        </form>

    </div>
    
<!-- <footer id="call" class=" text-white bg-yellow-900">
    <div class="container mx-auto py-6 px-4">
        <div class="grid md:grid-cols-3 gap-6 text-center md:text-left">
            
            <div class="flex flex-col items-center pl-20 md:items-start">
                <img src="images/logo.png" alt="Shanti Brick Field Logo" class="w-24 mb-3">
                <p class="text-gray-300">Building Trust with Quality Bricks</p>
            </div>

           
            <div class="flex flex-col items-center pl-40 md:items-start">
                <h3 class="text-2xl font-semibold">🏢 Head Office</h3>
                <p class="mt-2 text-gray-300">Main Street, ABC Town, India</p>
                <p class="text-gray-300">Operating Hours: 9 AM - 6 PM</p>
            </div>

            
            <div class="flex flex-col items-center pl-40 md:items-start">
                <h3 class="text-2xl font-semibold">📞 Contact Us</h3>
                <p class="mt-2 text-gray-300">Phone: +91-9876543210</p>
                <p class="text-gray-300">Email: info@shantibrickfield.com</p>
            </div>
        </div>
    </div>

    
    <div class=" text-center py-4 text-gray-400">
        <p>© 2025 Shanti Brick Field. All rights reserved.</p>
    </div>
</footer> -->
<?php include 'footer.php'; ?>

    
    <script>
    $(document).ready(function() {
        $("#contactForm").submit(function(event) {
            event.preventDefault(); 

            $.ajax({
                url: "contact_back.php",
                type: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function(response) {
                    if (response.status === "success") {
                        $("#formMessage").html("<p class='text-green-600 font-semibold'>" + response.message + "</p>");
                        $("#contactForm")[0].reset(); 
                    } else {
                        $("#formMessage").html("<p class='text-red-600 font-semibold'>" + response.message + "</p>");
                    }
                },
                error: function() {
                    $("#formMessage").html("<p class='text-red-600 font-semibold'>Something went wrong. Please try again.</p>");
                }
            });
        });
    });
    </script>
</body>
</html>



