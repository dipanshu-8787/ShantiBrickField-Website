
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us - Shanti Brick Field</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
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

    <main class="container mx-auto p-5">
        <h1 class="text-4xl font-bold text-center pt-5 pb-5">About Shanti Brick Field</h1>
        <h1 class="text-6xl text-red-500 font-semibold mt-6">Built to Last. Made for You.</h1>
        <div class="flex flex-col md:flex-row items-center mt-6 gap-4">
            <img src="img_a1.png" alt="Quality Bricks" class="w-full md:w-1/2 mt-10 rounded-lg shadow-lg">
            <div class="md:ml-8  md:mt-0">
            <h1 class="text-4xl text-center font-bold pb-5">The Visionary Who Started It All</h1>
                <p class="text-lg text-black-100 text-justify">
                Born into a modest family, <strong>Mr. Vijay Dwivedi</strong> is a living example of what sheer determination, honesty, and relentless effort can achieve. 
                With no financial backing or external support, he started his journey from the ground level—turning small steps into a legacy of success. 
                What began as a struggle rooted in limited means has today transformed into a growing business empire that inspires many.<br>
                Guided by the powerful belief – <q><strong>Vyapaar bhi, Vyavhaar ke Saath</strong></q> (Business with values) – Mr. Dwivedi has always emphasized that success should never come at the cost of ethics. 
                He firmly believes that trust, transparency, and customer satisfaction are the real pillars of any sustainable business. 
                His philosophy has not only helped him earn the loyalty of customers but has also become the foundation on which his companies are built.<br>
                For over 15 years, Shanti Brick Field has been a trusted name in the region, consistently delivering high-quality bricks while prioritizing the needs of every customer. 
                Under his leadership, the business continues to evolve—focusing on expanding product variety, improving service standards, and meeting the growing demands of a competitive market.<br>
                But Mr. Dwivedi’s vision goes far beyond bricks.<br>
                He is also the proud owner of a <strong>Petrol Pump</strong>, ensuring reliable fuel service to the local community with the same honesty and commitment. 
                In addition, he leads <strong>Shanti Constructions</strong>, a company focused on building quality infrastructure and contributing to regional development. 
                His involvement in multiple sectors shows his ability to diversify while staying rooted in strong moral and business principles.<br>
                Mr. Vijay Dwivedi stands as an inspiration not only to aspiring entrepreneurs but also to his own children, whom he continues to guide with the same values that brought him this far. 
                His journey is a testament to the idea that no dream is too big if you believe in yourself and work with integrity.<br>
                Looking ahead, he envisions even greater growth—introducing new products, expanding into more areas, and most importantly, enhancing customer satisfaction at every step.<br>
                </p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center gap-10 mt-14">
            
            <div class="md:ml-3 mt-10 md:mt-5">
                <h1 class="text-4xl text-center font-bold pb-5">The Mind Behind Our Growth</h1>
                <p class="text-lg text-black-100 text-justify ">
                At the helm of Shanti Brick Field and Shanti Constructions stands a bold, young visionary — <strong>Mr. Yash Dwivedi.</strong> Armed with an MBA and a heart deeply rooted in tradition, Yash brings a rare balance of professionalism, passion, and purpose to everything he does.
                Growing up in Kannauj, Uttar Pradesh, amidst the warmth of family legacy and the hum of brick kilns, Yash was exposed early on to the values of hard work, resilience, and integrity. 
                Watching his father build Shanti Brick Field from the ground up, he learned that business is not just about numbers—it's about people, trust, and legacy.
                After completing his MBA, Yash chose to forgo the predictable path of corporate comfort and instead embraced the challenges of entrepreneurship. 
                With a clear vision and a strong desire to honor his father’s legacy, he stepped into the leadership of the family business with energy, innovation, and a long-term mindset.
                Under his dynamic leadership, Shanti Brick Field has undergone a remarkable transformation—from a traditional brick kiln to a modern, efficient, and quality-focused manufacturing unit. 
                With strategic investments in automated systems, environmentally conscious processes, and advanced kiln technologies, he has scaled up production while maintaining the timeless strength and quality the brand is known for.
                But Yash's ambitions don’t stop at bricks.
                With the launch of Shanti Constructions, he has expanded the brand’s footprint into the world of infrastructure and real estate. His vision is to create not just buildings, but meaningful spaces—residences, offices, and landmarks that reflect quality, comfort, and lasting value. 
                His leadership in this sector is already earning recognition for combining traditional construction wisdom with modern design and sustainability practices.
                What truly makes Mr. Dwivedi’s leadership inspiring is his unwavering commitment to his people. He believes that a strong company is built by stronger communities. 
                That’s why he places immense importance on employee welfare, local employment opportunities, and skill development programs—ensuring that growth is inclusive and community-driven.
                Today, Shanti Brick Field and Shanti Constructions are not just business ventures—they are symbols of a family’s commitment to excellence and a new generation’s vision for the future. 
                With every brick laid and every structure built, Mr. Yash Dwivedi is not just continuing a legacy—he’s reimagining it for generations to come.
                His journey is a powerful reminder that when tradition meets innovation, the possibilities are limitless.
                </p>
            </div>
            <img src="img_a2.png" alt="Quality Bricks" class="w-full md:w-1/2 rounded-lg shadow-lg">
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
