
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover high-quality, durable bricks for your construction projects at Shanti Brick Field. Browse our collection of clay, fly ash, and concrete bricks.">
    <meta name="keywords" content="Shanti Brick Field, quality bricks, clay bricks, Aval bricks, Doyam blocks, construction materials, eco-friendly bricks">
    <title>Our Bricks - Shanti Brick Field | Quality Bricks for Your Projects</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    
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
     
<section class="text-center py-10">
        <h1 class="text-4xl sm:text-5xl md:text-6xl text-red-500 font-bold">Welcome to Shanti Brick Field</h1>
        <p class=" text-2xl mt-2">Providing high-quality, durable bricks for your dream projects!</p>
</section>

    
<section class="container mx-auto py-8 px-6">
        <h2 class="text-3xl font-bold text-gray-800 text-center">Why Choose Our Bricks?</h2>
        <div class="flex flex-col md:flex-row items-center mt-6">
            <img src="img_p.png" alt="Quality Bricks" class="w-full md:w-1/2 rounded-lg shadow-lg">
            <div class="md:ml-8 mt-4 md:mt-0">
                <p class="text-lg text-gray-600 text-justify font-semibold">
                    🏗 Superior Strength - Perfect for long-lasting construction.<br>
                    🌿 Eco-Friendly - Our bricks are made with sustainable materials. <br> 
                    💰 Cost-Effective - High durability means lower maintenance costs.<br>  
                    🌞 Weather Resistant - Withstands all weather conditions. <br>
                    🔥 High-Quality Material - Carefully manufactured for reliability.<br>
                </p>
            </div>
        </div>
</section>

 
<section class="container mx-auto px-6 pb-16">
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-center text-gray-800 my-6 mb-8">Our Brick Collection</h2>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="bg-white p-4 rounded-lg shadow-lg hover:scale-105 transition">
                <img src="img_t_1.png" alt="Clay Brick" class="w-full rounded-lg">
                <h3 class="text-xl font-bold mt-4">Aval</h3>
                <p class="text-gray-600 mt-2">Traditional red clay bricks known for strength, durability and longevity. Used for load-bearing walls.</p>
                <p class="text-red-600 font-bold mt-2">₹8.5 per brick</p>
            </div>

            
            <div class="bg-white p-4 rounded-lg shadow-lg hover:scale-105 transition">
                <img src="img_t_2.png" alt="Fly Ash Brick" class="w-full rounded-lg">
                <h3 class="text-xl font-bold mt-4">Doyam</h3>
                <p class="text-gray-600 mt-2">Used for internal walls, partitions and structures where appearance and strength are less critical.</p>
                <p class="text-red-600 font-bold mt-2">₹7.5 per brick</p>
            </div>

            
            <div class="bg-white p-4 rounded-lg shadow-lg hover:scale-105 transition">
                <img src="img_t_3.png" alt="Concrete Block" class="w-full rounded-lg">
                <h3 class="text-xl font-bold mt-4">Seedha Khajad</h3>
                <p class="text-gray-600 mt-2">A highly burnt, strong brick ideal for making the foundations and base construction for its strength.</p>
                <p class="text-red-600 font-bold mt-2">₹7.5 per block</p>
            </div>

            
            <div class="bg-white p-4 rounded-lg shadow-lg hover:scale-105 transition">
                <img src="img_t_4.png" alt="Hollow Brick" class="w-full rounded-lg">
                <h3 class="text-xl font-bold mt-4">Sun-Dried Clay Brick</h3>
                <p class="text-gray-600 mt-2">Unburnt bricks are eco-friendly and cost-effective, ideal for temporary and non-load-bearing structures.</p>
                <p class="text-red-600 font-bold mt-2">₹4 per brick</p>
            </div>
        </div>
</section>
<?php include 'footer.php'; ?>


</body>
</html>
