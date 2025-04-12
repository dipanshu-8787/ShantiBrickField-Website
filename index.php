
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Shanti Brick Field is a trusted brick manufacturer in Kannauj, delivering high-quality bricks with over 15 years of experience.">
    <title>Shanti Brick Field - Home</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            scroll-behavior: smooth; 
        }
        

    </style>
</head>
<body class="bg-gray-100">
<script>
  window.addEventListener('load', function () {
    setTimeout(() => {
      window.scrollTo(0, 0);
    }, 0);
  });
</script>

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

<section class="h-screen  bg-no-repeat bg-top bg-cover relative" style="background-image: url('img8.png');">
        <div class="absolute inset-0 bg-black opacity-40"></div>
        <div class="absolute inset-0 flex items-center justify-center text-white text-center">
            <div>
                <h1 class="text-8xl font-bold">Welcome to Shanti Brick Field</h1>
                <p class="mt-4 text-4xl">Providing high-quality bricks for over 15 years in the region.</p>
            </div>
        </div>
</section>

    
<section class="bg-white py-12">
        <div class="container mx-auto flex justify-around text-center ">
            <div>
                <h2 class="text-6xl font-bold text-red-500 ">15+</h2>
                <p class="mt-2">Years of Experience</p>
            </div>
            <div>
                <h2 class="text-6xl font-bold text-red-500">5,000+</h2>
                <p class="mt-2">Bricks Sold Per Day</p>
            </div>
            <div>
                <h2 class="text-6xl font-bold text-red-500">100 km</h2>
                <p class="mt-2">Service Coverage</p>
            </div>
        </div>
</section>

<section  class="bg-gray-100 py-16">
        <div class="container mx-auto grid grid-cols-3 gap-10 ">
            <div class="p-4 bg-white shadow-md hover:scale-110 transition">
                <h3 class="text-xl font-bold">Largest Brick Producer</h3>
                <p class="mt-2 text-gray-600">We have a reputation as the largest producer of high-quality bricks in the region.</p>
            </div>
            <div class="p-4 bg-white shadow-md hover:scale-110 transition">
                <h3 class="text-xl font-bold">Multiple Brick Types</h3>
                <p class="mt-2 text-gray-600">Choose from red clay bricks, fly ash bricks, hollow bricks, and more.</p>
            </div>
            <div class="p-4 bg-white shadow-md hover:scale-110 transition">
                <h3 class="text-xl font-bold">Certified Quality</h3>
                <p class="mt-2 text-gray-600">All our bricks undergo rigorous quality checks to meet industry standards.</p>
            </div>
        </div>
</section>

<section class="relative h-[600px] w-full flex items-stretch overflow-hidden bg-white">
  <div class="w-1/2 relative m-5 ">
      <img src="img1.1.png" alt="Brick Kiln" class="w-full h-full object-cover rounded-lg shadow-lg" />
  </div>

  <div class="w-1/2  p-10 overflow-y-auto">
    <h2 class="text-4xl font-bold mb-6 text-gray-800">Why Choose <span class="text-red-600">Shanti Brick Field</span></h2>
    
    <ul class="space-y-5 text-lg text-gray-700">
      <li class="flex items-start">
        <span class="text-green-600 text-xl mr-3">✔</span>
        <p><strong>Trusted by 100+ Companies</strong> — Proven reliability across Kannauj.
        Backed by years of experience and satisfied clients in both urban and rural projects.</p>
    </li>
    <li class="flex items-start">
      <span class="text-green-600 text-xl mr-3">✔</span>
      <p><strong>Premium-Quality Bricks</strong> — Fired Using Coal & Wood for Maximum Durability.
      Traditional firing methods ensure stronger, longer-lasting bricks.</p>
    </li>
    <li class="flex items-start">
      <span class="text-green-600 text-xl mr-3">✔</span>
      <p><strong>Sustainable Practices</strong> — We care for the environment and use eco-friendly production methods.</p>
    </li>
      <li class="flex items-start">
        <span class="text-green-600 text-xl mr-3">✔</span>
        <p><strong>Fast & Reliable Delivery</strong> — On-time, every time. We value your schedule.</p>
      </li>
      <li class="flex items-start">
        <span class="text-green-600 text-xl mr-3">✔</span>
        <p><strong>Custom Orders Accepted</strong> — Get bricks that match your project perfectly.</p>
      </li>
      <li class="flex items-start">
        <span class="text-green-600 text-xl mr-3">✔</span>
        <p><strong>Competitive Pricing</strong> — Affordable quality with transparent pricing.</p>
      </li>
      <li class="flex items-start">
        <span class="text-green-600 text-xl mr-3">✔</span>
        <p><strong>Local & Regional Reach</strong> — Serving both local projects and large-scale regional developments.</p>
      </li>
    </ul>
  </div>
</section>

<div class="my-10 flex justify-center">
  <div class="w-full max-w-3xl aspect-[16/10] overflow-hidden rounded-xl shadow-lg">
    <video controls autoplay muted loop poster="thumbnail.jpg" class="w-full h-full object-cover">
      <source src="video1.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
</div>




<section id="about" class="min-h-screen bg-fixed bg-cover bg-top relative " style="background-image: url('img_p1.png');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="absolute inset-0 overflow-y-auto">
        <!-- <div class="max-w-4xl ml-20 mt-20 p-6"> -->
          <div class="max-w-4xl mx-auto mt-10 p-4 ml-20 sm:p-6 lg:p-8">

            <h1 class="text-5xl font-bold text-red-500">About Shanti Brick Field</h1>
            <p class="mt-6 text-lg text-gray-200 leading-relaxed space-y-4">
                <strong>Shanti Brick Field – Building the Future, Rooted in Tradition</strong><br><br>
                Nestled in the historic heartland of Kannauj, Uttar Pradesh, Shanti Brick Field has been a cornerstone of quality brick manufacturing for over one-half decades. What began as a modest venture has grown into one of the region’s most respected names in the industry, known for its commitment to strength, reliability, and innovation.<br><br>
                Spread across extensive land and powered by a dedicated, multi-generational workforce, we specialize in the production of fired clay bricks—delivering over 2.5 lakh bricks weekly through advanced kiln technology and modern infrastructure.<br><br>
                Our journey is defined by more than just numbers. At Shanti Brick Field, we take pride in being builders of trust, crafting not just bricks but the very foundations on which dreams stand tall. From residential homes to industrial landmarks, our bricks carry the stamp of durability and excellence.<br><br>
                With deep roots in tradition and an eye toward the future, Shanti Brick Field continues to set benchmarks in quality and customer satisfaction—making us a name synonymous with strength, craftsmanship, and legacy in Uttar Pradesh and beyond.
            </p>
        </div>
    </div>
</section>


<section id="location" class="bg-white py-10">
  <h2 class="text-center text-5xl font-bold text-black mb-4">📍Visit Our Brick Field</h2>
  <p class="text-center text-lg font-semibold text-gray-700 mb-8">
    Find us easily with the map below:
  </p>
  
  <div class="flex justify-center">
    <div class="w-4.5/5 max-w-4xl rounded-2xl overflow-hidden shadow-lg">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107371.68351060273!2d79.88100229929618!3d26.889691045719946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399e7903aaa392f7%3A0x5d661b9568b51bfd!2sShanti%20Brick%20Field!5e0!3m2!1sen!2sin!4v1744309061744!5m2!1sen!2sin" 
      width="800" height="450" 
      style="border:0;" 
      allowfullscreen=" " 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

<section id="gallery" class="bg-gradient-to-br from-yellow-100 to-red-100 py-12 px-4">
  <h2 class="text-center text-5xl font-extrabold text-red-800 mb-8 ">
    Our Brick Gallery
  </h2>

  <div class="flex justify-center">
    <div class="relative w-[90%] max-w-3xl rounded-lg overflow-hidden shadow-2xl group">
      
      <img id="galleryImage"
           src="img_p.png"
           class="w-full h-[600px] object-cover transition-all duration-[1500ms]  group-hover:scale-125"
           alt="Gallery Image">

      
      <button onclick="prevImage()" class="text-3xl absolute top-1/2 left-4 transform -translate-y-1/2 bg-white text-black hover:bg-black hover:text-white rounded-full p-2 shadow-lg transition">
      &#10094;
      </button>

      <button onclick="nextImage()" class="text-3xl absolute top-1/2 right-4 transform -translate-y-1/2 bg-white text-black hover:bg-black hover:text-white rounded-full p-2 shadow-lg transition">
      &#10095;
      </button>
    </div>
  </div>
</section>


<script>
  const images = [
    "img_p.png", 
    "img5.png",
    "img7.png",
    "img6.png",
    "img4.png",
    "img8.png",
    "img2.png",
    "img1.1.png",
    "img1.png",
    "img_p1.png",
    "img3.png",
    "img8.png",
    "img.png",
    
  ];

  let index = 0;
  function showImage(i) {
    const galleryImage = document.getElementById("galleryImage");
    galleryImage.style.opacity = 0;
    setTimeout(() => {
      galleryImage.src = images[i];
      galleryImage.style.opacity = 1;
    }, 300);
  }

  function nextImage() {
    index = (index + 1) % images.length;
    showImage(index);
  }

  function prevImage() {
    index = (index - 1 + images.length) % images.length;
    showImage(index);
  }
</script>



 <div class="bg-white">
<section class="bg-yellow-200 text-yellow-900 px-6 py-10  shadow-inner ">
  <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left">
    <div>
      <h3 class="text-3xl font-bold text-yellow-900">Need Bricks for Your Next Project?</h3>
      <p class="mt-2 text-md text-yellow-800">Order premium quality bricks directly from Shanti Brick Field — fast delivery & fair pricing guaranteed.</p>
    </div>
    <a href="purchase.php" class="bg-yellow-900 text-white text-lg font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-yellow-800 transition duration-300">
      Order Now!
    </a>
  </div>
</section>
    </div>

    
<?php include 'footer.php'; ?>
    


<a href="https://wa.me/919170087965" target="_blank" 
   class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-2xl z-50 p-4 group transition-transform transform hover:scale-110">
    <div class="relative flex items-center justify-center">
        
        <span class="absolute w-full h-full rounded-full bg-green-400 opacity-75 animate-ping z-0"></span>
        
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-7 h-7 z-10 relative" viewBox="0 0 24 24">
            <path d="M20.52 3.48A11.75 11.75 0 0012 0C5.37 0 0 5.37 0 12a11.94 11.94 0 001.66 6.14L0 24l6.3-1.65A11.85 11.85 0 0012 24c6.63 0 12-5.37 12-12a11.75 11.75 0 00-3.48-8.52zM12 22a9.93 9.93 0 01-5.07-1.37l-.36-.21-3.74.98 1-3.66-.24-.38A9.94 9.94 0 1122 12c0 5.52-4.48 10-10 10zm5.4-7.6c-.29-.14-1.72-.85-1.99-.94s-.46-.14-.66.14-.76.94-.93 1.14-.34.21-.63.07a8.23 8.23 0 01-2.42-1.5 9.16 9.16 0 01-1.7-2.1c-.18-.31 0-.48.14-.63s.32-.38.48-.57a2.1 2.1 0 00.29-.48.52.52 0 000-.5c-.07-.14-.63-1.52-.86-2.08-.23-.55-.46-.48-.66-.49l-.57-.01a1.1 1.1 0 00-.79.37 3.3 3.3 0 00-1 2.43 5.7 5.7 0 001.2 2.62 12.8 12.8 0 004.94 4.4c.7.3 1.24.48 1.67.62a4 4 0 001.83.12 3.2 3.2 0 002.1-1.48 2.58 2.58 0 00.18-1.48c-.08-.14-.26-.21-.54-.35z"/>
        </svg>
    </div>
</a>

  

<button id="scrollTopBtn"
class="fixed bottom-6 left-1/2 transform -translate-x-1/2 bg-yellow-600  text-gray-900 text-xl px-5 py-3 rounded-full shadow-xl z-50 opacity-0 pointer-events-none transition-all duration-500">
<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 15l7-7 7 7" />
    </svg>
</button>

<script>
    const scrollBtn = document.getElementById("scrollTopBtn");
    let scrollTimeout;

    window.addEventListener("scroll", () => {
        
        scrollBtn.classList.remove("opacity-0", "pointer-events-none");

        
        clearTimeout(scrollTimeout);

        scrollTimeout = setTimeout(() => {
            scrollBtn.classList.add("opacity-0", "pointer-events-none");
        }, 1000);
    });

    scrollBtn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>

</body>
</html>
