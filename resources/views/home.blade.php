<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Life Clinic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="assets/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="assets/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="icon" href="assets/favicon.png" type="image/png">
<link rel="icon" href="favicon.ico" type="image/x-icon">


    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /* Navbar hover background */
        #navbar ul li a:hover {
            background-color: #E0F2F1; /* light teal */
        }

        .sticky {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
        }
    </style>

    
</head>






<body class="bg-gray-50 text-gray-700">

<!-- HEADER TOP -->
<header id="header-top" class="bg-teal-600 text-white text-sm">
    <div class="max-w-7xl mx-auto px-4 py-3 flex flex-col md:flex-row justify-between gap-2">
        <p>Welcome to a Professional Health Care</p>
        <div class="flex flex-wrap gap-4">
            <span><i class="fa fa-phone mr-1"></i>+964-770-060-0160</span>
            <span><i class="fa fa-calendar mr-1"></i>6:00 AM – 10:00 PM</span>
            <span><i class="fa fa-envelope mr-1"></i>lifeclinic73@company.com</span>
        </div>
    </div>
</header>

<!-- NAVBAR -->
<nav id="navbar" class="bg-white shadow-md w-full z-50 transition-all duration-300 sticky-nav">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <a class="text-2xl font-bold text-teal-600">
            <i class="fa fa-l-square"></i> Life Clinic
        </a>

        <ul class="hidden md:flex gap-8 font-medium">
            <li><a href="#top" class="px-3 py-2 rounded transition scroll-smooth">Home</a></li>
            <li><a href="#about" class="px-3 py-2 rounded transition scroll-smooth">About Us</a></li>
            <li><a href="#team" class="px-3 py-2 rounded transition scroll-smooth">Our Doctors</a></li>
            <li><a href="#service" class="px-3 py-2 rounded transition scroll-smooth">Services</a></li>
            <li><a href="#news" class="px-3 py-2 rounded transition scroll-smooth">News</a></li>
            <li><a href="#contact" class="px-3 py-2 rounded transition scroll-smooth">Contact</a></li>
        </ul>

        <a href="#appoiment" class="hidden md:block bg-teal-600 text-white px-5 py-2 rounded-lg hover:bg-teal-700">
            Make an appointment
        </a>
    </div>
</nav>

<!-- ================= SLIDESHOW ================= -->
<section class="relative w-full overflow-hidden mt-[7px]">

    <!-- Images -->
    <div class="relative h-[450px]">
        <div class="slide absolute inset-0 w-full h-full transition-opacity duration-700 opacity-100">
            <img src="{{ asset('storage/images/slider1.jpg') }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-teal-600/30 via-teal-600/15 to-transparent pointer-events-none"></div>
            <div class="absolute bottom-16 left-8 text-white">
                <h2 class="text-3xl font-bold">Welcome to Life Clinic</h2>
                <p class="mt-2 text-lg max-w-md">Providing professional health care for over a decade.</p>
            </div>
        </div>
        <div class="slide absolute inset-0 w-full h-full transition-opacity duration-700 opacity-0">
            <img src="{{ asset('storage/images/slider2.jpg') }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-teal-600/30 via-teal-600/15 to-transparent pointer-events-none"></div>
            <div class="absolute bottom-16 left-8 text-white">
                <h2 class="text-3xl font-bold">Expert Medical Staff</h2>
                <p class="mt-2 text-lg max-w-md">Our doctors and nurses provide personalized care to all patients.</p>
            </div>
        </div>
        <div class="slide absolute inset-0 w-full h-full transition-opacity duration-700 opacity-0">
            <img src="{{ asset('storage/images/slider3.jpg') }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-teal-600/30 via-teal-600/15 to-transparent pointer-events-none"></div>
            <div class="absolute bottom-16 left-8 text-white">
                <h2 class="text-3xl font-bold">State-of-the-Art Facilities</h2>
                <p class="mt-2 text-lg max-w-md">Modern equipment and comfortable environment for better treatment.</p>
            </div>
        </div>
        <div class="slide absolute inset-0 w-full h-full transition-opacity duration-700 opacity-0">
            <img src="{{ asset('storage/images/slider22.jpg') }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-teal-600/30 via-teal-600/15 to-transparent pointer-events-none"></div>
            <div class="absolute bottom-16 left-8 text-white">
                <h2 class="text-3xl font-bold">Holistic Health Approach</h2>
                <p class="mt-2 text-lg max-w-md">We focus on both physical and mental well-being of our patients.</p>
            </div>
        </div>
    </div>

    <!-- Arrows -->
    <button id="prev" class="absolute top-1/2 left-4 -translate-y-1/2 text-white text-3xl font-bold px-3 py-1 bg-teal-700/50 rounded hover:bg-teal-600 transition">&#10094;</button>
    <button id="next" class="absolute top-1/2 right-4 -translate-y-1/2 text-white text-3xl font-bold px-3 py-1 bg-teal-700/50 rounded hover:bg-teal-600 transition">&#10095;</button>

    <!-- Dots -->
    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-3">
        <button class="dot w-3 h-3 rounded-full bg-teal-700 shadow-lg shadow-teal-700/70"></button>
        <button class="dot w-3 h-3 rounded-full bg-white/60"></button>
        <button class="dot w-3 h-3 rounded-full bg-white/60"></button>
        <button class="dot w-3 h-3 rounded-full bg-white/60"></button>
    </div>
</section>

<!-- Add top padding so content doesn’t hide under navbar -->
<div id="content" class="pt-0 lg:pt-0"></div>

<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- ABOUT SECTION -->
<section class="w-full bg-white py-20" id="about">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

    <!-- Left Side -->
    <div data-aos="fade-right">
      <h2 class="text-4xl font-bold text-gray-800 leading-tight">
        Welcome to <span class="text-teal-600">Life Clinic</span>
      </h2>

      <div class="w-20 h-1 bg-teal-600 mt-4 mb-6 rounded"></div>

      <p class="text-gray-600 leading-relaxed mb-6">
        Life Clinic is a modern healthcare center dedicated to providing
        high-quality medical services with compassion and care.
        Our experienced doctors and medical staff use advanced technology
        to ensure accurate diagnosis, effective treatment, and personalized care.
      </p>

      <p class="text-gray-500 leading-relaxed">
        Your health, comfort, and safety are our top priorities.
        We strive to deliver excellence in every aspect of patient care.
      </p>
    </div>

    <!-- Right Side Boxes -->
    <div class="grid grid-cols-2 gap-6">

      <!-- Box -->
      <div data-aos="zoom-in" data-aos-delay="100"
        class="bg-gray-50 p-6 rounded-xl shadow-sm 
               hover:shadow-xl hover:-translate-y-2 
               transition duration-300 cursor-pointer">

        <i class="fa-solid fa-hand-holding-heart text-teal-600 text-2xl mb-3 transition transform hover:scale-125"></i>
        <h3 class="font-semibold text-gray-800">Our Mission</h3>
        <p class="text-sm text-gray-500 mt-2">
          Providing compassionate, high-quality healthcare.
        </p>
      </div>

      <!-- Box -->
      <div data-aos="zoom-in" data-aos-delay="200"
        class="bg-gray-50 p-6 rounded-xl shadow-sm 
               hover:shadow-xl hover:-translate-y-2 
               transition duration-300 cursor-pointer">

        <i class="fa-solid fa-clock-rotate-left text-teal-600 text-2xl mb-3 transition transform hover:scale-125"></i>
        <h3 class="font-semibold text-gray-800">Our History</h3>
        <p class="text-sm text-gray-500 mt-2">
          Years of trusted service and medical excellence.
        </p>
      </div>

      <!-- Box -->
      <div data-aos="zoom-in" data-aos-delay="300"
        class="bg-gray-50 p-6 rounded-xl shadow-sm 
               hover:shadow-xl hover:-translate-y-2 
               transition duration-300 cursor-pointer">

        <i class="fa-solid fa-eye text-teal-600 text-2xl mb-3 transition transform hover:scale-125"></i>
        <h3 class="font-semibold text-gray-800">Our Vision</h3>
        <p class="text-sm text-gray-500 mt-2">
          Becoming a leading healthcare provider.
        </p>
      </div>

      <!-- Box -->
      <div data-aos="zoom-in" data-aos-delay="400"
        class="bg-gray-50 p-6 rounded-xl shadow-sm 
               hover:shadow-xl hover:-translate-y-2 
               transition duration-300 cursor-pointer">

        <i class="fa-solid fa-trophy text-teal-600 text-2xl mb-3 transition transform hover:scale-125"></i>
        <h3 class="font-semibold text-gray-800">Our Success</h3>
        <p class="text-sm text-gray-500 mt-2">
          Thousands of satisfied patients every year.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- AOS Script -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 900,
    once: true
  });
</script>



<section
    id="about"
    data-aos="fade-up"
    style="background-image: url('{{ asset('storage/images/about-bg.jpg') }}');"
    class="bg-cover bg-top py-36 overflow-hidden"
>

    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <!-- Content -->
            <div data-aos="fade-right">

                <h2 class="text-4xl font-bold mb-6 text-teal-600/70">
                    Life Clinic
                </h2>

                <p class="text-gray-600 mb-4">
                    Life Clinic is a modern healthcare center dedicated to providing high-quality medical services
                    with compassion and care.
                </p>

                <p class="text-gray-600 mb-8">
                    We believe in a holistic approach to health, addressing physical and mental well-being.
                </p>

                <!-- Profile -->
                <figure class="flex items-center gap-4" data-aos="fade-up" data-aos-delay="200">
                    <img 
                        src="{{ asset('storage/images/author-image.jpg') }}"
                        alt="Dr. Neil Jackson"
                        class="w-16 h-16 rounded-full object-cover"
                    >

                    <figcaption>
                        <h3 class="font-semibold text-lg">Dr. Neil Jackson</h3>
                        <p class="text-gray-500 text-sm">General Principal</p>
                    </figcaption>
                </figure>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="flex justify-center" data-aos="zoom-in" data-aos-delay="300">
                <img
                    src="{{ asset('images/about-doctor.png') }}"
                    alt="Doctor"
                    class="max-w-full h-auto"
                >
            </div>

        </div>
    </div>
</section>








<!-- TEAM -->
<section id="team" class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Title -->
    <div class="mb-12" data-aos="fade-up">
      <h2 class="text-3xl font-bold text-gray-800">Our Doctors</h2>
    </div>

    <!-- Grid -->
    <div class="grid md:grid-cols-3 gap-8">

      <!-- Doctor Card -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden group transform transition duration-500 hover:-translate-y-3 hover:shadow-xl"
           data-aos="fade-up" data-aos-delay="100">

        <img src="{{ asset('storage/images/team-image1.jpg') }}" 
             class="w-full h-82 object-cover" alt="Doctor">

        <div class="p-6 text-center">
          <h3 class="text-lg font-semibold">Nate Baston</h3>
          <p class="text-gray-500 mb-4">General Principal</p>

          <div class="border-t pt-4 text-sm text-gray-600 space-y-1">
            <p><i class="fa fa-phone mr-2"></i>774-020-0120</p>
            <p><i class="fa fa-envelope-o mr-2"></i>nate01@company.com</p>
          </div>

          <!-- Social Icons -->
          <div class="flex justify-center gap-3 mt-6 
                      opacity-0 translate-y-6 
                      group-hover:opacity-100 
                      group-hover:translate-y-0 
                      transition duration-500">

            <a href="#"
     class="w-10 h-10 flex items-center justify-center bg-white border rounded-full shadow 
            text-gray-700 hover:bg-blue-600 hover:text-white transition">
    <i class="fa-brands fa-linkedin-in"></i>
  </a>

            <a href="#" class="w-10 h-10 flex items-center justify-center bg-white border rounded-full shadow hover:bg-red-600 hover:text-white transition">
              <i class="fa fa-envelope"></i>
            </a>
          </div>
        </div>
      </div>


      <!-- Doctor Card -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden group transform transition duration-500 hover:-translate-y-3 hover:shadow-xl"
           data-aos="fade-up" data-aos-delay="200">

        <img src="{{ asset('storage/images/team-image2.jpg') }}" 
             class="w-full h-82 object-cover" alt="Doctor">

        <div class="p-6 text-center">
          <h3 class="text-lg font-semibold">Jason Stewart</h3>
          <p class="text-gray-500 mb-4">Pregnancy</p>

          <div class="border-t pt-4 text-sm text-gray-600 space-y-1">
            <p><i class="fa fa-phone mr-2"></i>751-070-0170</p>
            <p><i class="fa fa-envelope-o mr-2"></i>jason21@company.com</p>
          </div>

          <div class="flex justify-center gap-3 mt-6 opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition duration-500">
             <a href="#"
     class="w-10 h-10 flex items-center justify-center bg-white border rounded-full shadow 
            text-gray-700 hover:bg-blue-700 hover:text-white transition">
    <i class="fa-brands fa-facebook-f"></i>
  </a>
            <a href="#" class="w-10 h-10 flex items-center justify-center bg-white border rounded-full shadow hover:bg-red-600 hover:text-white transition">
              <i class="fa fa-envelope"></i>
            </a>
          </div>
        </div>
      </div>


      <!-- Doctor Card -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden group transform transition duration-500 hover:-translate-y-3 hover:shadow-xl"
           data-aos="fade-up" data-aos-delay="300">

        <img src="{{ asset('storage/images/team-image3.jpg') }}" 
             class="w-full h-82 object-cover" alt="Doctor">

        <div class="p-6 text-center">
          <h3 class="text-lg font-semibold">Miasha Nakahara</h3>
          <p class="text-gray-500 mb-4">Cardiology</p>

          <div class="border-t pt-4 text-sm text-gray-600 space-y-1">
            <p><i class="fa fa-phone mr-2"></i>771-040-0140</p>
            <p><i class="fa fa-envelope-o mr-2"></i>miasha@company.com</p>
          </div>

         <div class="flex justify-center gap-3 mt-6 opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition duration-500">
  <a href="#"
     class="w-10 h-10 flex items-center justify-center bg-white border rounded-full shadow 
            text-gray-700 hover:bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-600 
            hover:text-white transition">
    <i class="fa-brands fa-instagram"></i>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  </a>



</a>


            </a>
            <a href="#" class="w-10 h-10 flex items-center justify-center bg-white border rounded-full shadow hover:bg-red-600 hover:text-white transition">
              <i class="fa fa-envelope"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<

<!-- Tailwind & Font Awesome CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<!-- NEWS SECTION -->
<section id="news" class="bg-gray-100 py-16">
  <div class="container mx-auto px-4">
    <!-- Section Title -->
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold mb-2 animate-fadeIn">Latest News</h2>
      <div class="w-24 h-1 bg-teal-600 mx-auto rounded-full animate-fadeIn delay-150"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- News Card 1 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:-translate-y-2 hover:shadow-teal-400/50 animate-fadeIn delay-200">
        <a href="news-detail.html">
          <img src="{{ asset('storage/images/news-image1.jpg') }}" alt="News 1" class="w-full h-56 object-cover">
        </a>
        <div class="p-5">
          <span class="text-sm text-gray-500">January 08, 2026</span>
          <h3 class="text-xl font-semibold mt-2 hover:text-teal-600 transition">
            <a href="news-detail.html">About Amazing Technology</a>
          </h3>
          <p class="text-gray-700 mt-2">transforming the way we live, work, and connect.</p>
          <div class="flex items-center mt-4">
            <img src="{{ asset('storage/images/d1.jpg') }}" alt="Author" class="w-10 h-10 rounded-full mr-3 object-cover">
            <div>
              <h5 class="text-sm font-semibold">Jeremie Carlson</h5>
              <p class="text-xs text-gray-500">CEO / Founder</p>
            </div>
          </div>
        </div>
      </div>

      <!-- News Card 2 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:-translate-y-2 hover:shadow-teal-400/50 animate-fadeIn delay-300">
        <a href="news-detail.html">
          <img src="{{ asset('storage/images/news-image3.jpg') }}" alt="News 2" class="w-full h-56 object-cover">
        </a>
        <div class="p-5">
          <span class="text-sm text-gray-500">February 2, 2026</span>
          <h3 class="text-xl font-semibold mt-2 hover:text-teal-600 transition">
            <a href="news-detail.html">Introducing a new healing process</a>
          </h3>
          <p class="text-gray-700 mt-2">breakthrough healing process that accelerates recovery naturally and restores balance to your body.</p>
          <div class="flex items-center mt-4">
            <img src="{{ asset('storage/images/d2.jpg') }}" alt="Author" class="w-10 h-10 rounded-full mr-3 object-cover">
            <div>
               <h5 class="text-sm font-semibold">Andrio Abero</h5>
              <p class="text-xs text-gray-500">Online Advertising</p>
            </div>
          </div>
        </div>
      </div>

      <!-- News Card 3 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:-translate-y-2 hover:shadow-teal-400/50 animate-fadeIn delay-400">
        <a href="news-detail.html">
          <img src="{{ asset('storage/images/news-image2.jpg') }}" alt="News 3" class="w-full h-56 object-cover">
        </a>
        <div class="p-5">
          <span class="text-sm text-gray-500">september 27, 2025</span>
          <h3 class="text-xl font-semibold mt-2 hover:text-teal-600 transition">
            <a href="news-detail.html">Review Annual Medical Research</a>
          </h3>
          <p class="text-gray-700 mt-2">insights shaping the future of healthcare.</p>
          <div class="flex items-center mt-4">
            <img src="{{ asset('storage/images/news-image2.jpg') }}" alt="Author" class="w-10 h-10 rounded-full mr-3 object-cover">
            <div>
              <h5 class="text-sm font-semibold">Jason Stewart</h5>
              <p class="text-xs text-gray-500">General Director</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- ================= MAIN CONTENT ================= -->

    <!-- TAGS -->
    <div class="bg-white shadow rounded-lg p-6">
      <h4 class="font-bold mb-4">Tags</h4>
      <div class="flex flex-wrap gap-2">
        <span class="px-3 py-1 bg-gray-200 rounded-full text-sm">Medical</span>
        <span class="px-3 py-1 bg-gray-200 rounded-full text-sm">Doctors</span>
        <span class="px-3 py-1 bg-gray-200 rounded-full text-sm">Health</span>
      </div>
    </div>
</section>

<!-- Tailwind Animation -->
<style>
@keyframes fadeIn {
  0% { opacity: 0; transform: translateY(20px); }
  100% { opacity: 1; transform: translateY(0); }
}

.animate-fadeIn {
  animation: fadeIn 0.8s ease forwards;
}

.animate-fadeIn.delay-150 { animation-delay: 0.15s; }
.animate-fadeIn.delay-200 { animation-delay: 0.2s; }
.animate-fadeIn.delay-300 { animation-delay: 0.3s; }
.animate-fadeIn.delay-400 { animation-delay: 0.4s; }
</style>




















<section id="service" class="hero-section" id="department">

  <!-- Services Section -->
  <section class="shop-section bg-gray-50 py-24">
    <!-- Section Title -->
    <div class="text-center mb-16">
      <h2 class="text-4xl font-extrabold mb-4 animate-slideUp">
        Our <span class="text-teal-600">Services</span>
      </h2>
      <div class="w-24 h-1 bg-teal-600 mx-auto rounded-full animate-slideUp delay-150"></div>
      <p class="mt-4 text-gray-600 max-w-2xl mx-auto animate-slideUp delay-200">
        Discover the high-quality services we provide to ensure your health and wellbeing.
      </p>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 max-w-[1280px] w-full mx-auto px-4">
      
      <!-- Card Template -->
      <div class="service-card bg-white rounded-3xl p-6 flex flex-col cursor-pointer transform transition duration-500 hover:-translate-y-5 hover:shadow-2xl hover:shadow-teal-400/40 animate-slideUp">
        <!-- Optional icon -->
        <div class="w-12 h-12 flex items-center justify-center bg-teal-100 rounded-full mb-4">
          <i class="fa-solid fa-ambulance text-teal-600 text-xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-4 text-gray-800 hover:text-teal-600 transition">
          Emergency
        </h3>
        <div class="overflow-hidden rounded-lg mb-6">
          <img src="{{ asset('storage/images/OIPpppp.webp') }}" alt="Emergency" class="w-full h-64 object-cover transform transition duration-500 hover:scale-105">
        </div>
        <a href="http://127.0.0.1:5500/clinic.html" class="mt-auto inline-block px-5 py-2 bg-teal-600 text-white font-semibold rounded-full shadow hover:bg-teal-700 hover:shadow-lg transition duration-300">
          See More
        </a>
      </div>

      <div class="service-card bg-white rounded-3xl p-6 flex flex-col cursor-pointer transform transition duration-500 hover:-translate-y-5 hover:shadow-2xl hover:shadow-teal-400/40 animate-slideUp delay-150">
        <div class="w-12 h-12 flex items-center justify-center bg-teal-100 rounded-full mb-4">
          <i class="fa-solid fa-procedures text-teal-600 text-xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-4 text-gray-800 hover:text-teal-600 transition">Operation Theater</h3>
        <div class="overflow-hidden rounded-lg mb-6">
          <img src="{{ asset('storage/images/operat.webp') }}" alt="Operation Theater" class="w-full h-64 object-cover transform transition duration-500 hover:scale-105">
        </div>
        <a href="http://127.0.0.1:5500/clinic.html" class="mt-auto inline-block px-5 py-2 bg-teal-600 text-white font-semibold rounded-full shadow hover:bg-teal-700 hover:shadow-lg transition duration-300">
          See More
        </a>
      </div>

      <div class="service-card bg-white rounded-3xl p-6 flex flex-col cursor-pointer transform transition duration-500 hover:-translate-y-5 hover:shadow-2xl hover:shadow-teal-400/40 animate-slideUp delay-200">
        <div class="w-12 h-12 flex items-center justify-center bg-teal-100 rounded-full mb-4">
          <i class="fa-solid fa-user-doctor text-teal-600 text-xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-4 text-gray-800 hover:text-teal-600 transition">Qualified Doctors</h3>
        <div class="overflow-hidden rounded-lg mb-6">
          <img src="{{ asset('storage/images/doc.jpg') }}" alt="Qualified Doctors" class="w-full h-64 object-cover transform transition duration-500 hover:scale-105">
        </div>
        <a href="http://127.0.0.1:5500/clinic.html" class="mt-auto inline-block px-5 py-2 bg-teal-600 text-white font-semibold rounded-full shadow hover:bg-teal-700 hover:shadow-lg transition duration-300">
          See More
        </a>
      </div>

      <div class="service-card bg-white rounded-3xl p-6 flex flex-col cursor-pointer transform transition duration-500 hover:-translate-y-5 hover:shadow-2xl hover:shadow-teal-400/40 animate-slideUp delay-250">
        <div class="w-12 h-12 flex items-center justify-center bg-teal-100 rounded-full mb-4">
          <i class="fa-solid fa-pills text-teal-600 text-xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-4 text-gray-800 hover:text-teal-600 transition">Medicine</h3>
        <div class="overflow-hidden rounded-lg mb-6">
          <img src="{{ asset('storage/images/med.webp') }}" alt="Medicine" class="w-full h-64 object-cover transform transition duration-500 hover:scale-105">
        </div>
        <a href="http://127.0.0.1:5500/clinic.html" class="mt-auto inline-block px-5 py-2 bg-teal-600 text-white font-semibold rounded-full shadow hover:bg-teal-700 hover:shadow-lg transition duration-300">
          See More
        </a>
      </div>

      <!-- Second Row -->
      <div class="service-card bg-white rounded-3xl p-6 flex flex-col cursor-pointer transform transition duration-500 hover:-translate-y-5 hover:shadow-2xl hover:shadow-teal-400/40 animate-slideUp delay-300">
        <div class="w-12 h-12 flex items-center justify-center bg-teal-100 rounded-full mb-4">
          <i class="fa-solid fa-tooth text-teal-600 text-xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-4 text-gray-800 hover:text-teal-600 transition">Teeth Clinic</h3>
        <div class="overflow-hidden rounded-lg mb-6">
          <img src="{{ asset('storage/images/teeth.jpg') }}" alt="Teeth Clinic" class="w-full h-64 object-cover transform transition duration-500 hover:scale-105">
        </div>
        <a href="http://127.0.0.1:5500/clinic.html" class="mt-auto inline-block px-5 py-2 bg-teal-600 text-white font-semibold rounded-full shadow hover:bg-teal-700 hover:shadow-lg transition duration-300">
          See More
        </a>
      </div>

      <div class="service-card bg-white rounded-3xl p-6 flex flex-col cursor-pointer transform transition duration-500 hover:-translate-y-5 hover:shadow-2xl hover:shadow-teal-400/40 animate-slideUp delay-350">
        <div class="w-12 h-12 flex items-center justify-center bg-teal-100 rounded-full mb-4">
          <i class="fa-solid fa-hospital text-teal-600 text-xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-4 text-gray-800 hover:text-teal-600 transition">Clinic Reception</h3>
        <div class="overflow-hidden rounded-lg mb-6">
          <img src="{{ asset('storage/images/res.png') }}" alt="Clinic Reception" class="w-full h-64 object-cover transform transition duration-500 hover:scale-105">
        </div>
        <a href="http://127.0.0.1:5500/clinic.html" class="mt-auto inline-block px-5 py-2 bg-teal-600 text-white font-semibold rounded-full shadow hover:bg-teal-700 hover:shadow-lg transition duration-300">
          See More
        </a>
      </div>

      <div class="service-card bg-white rounded-3xl p-6 flex flex-col cursor-pointer transform transition duration-500 hover:-translate-y-5 hover:shadow-2xl hover:shadow-teal-400/40 animate-slideUp delay-400">
        <div class="w-12 h-12 flex items-center justify-center bg-teal-100 rounded-full mb-4">
          <i class="fa-solid fa-ear-listen text-teal-600 text-xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-4 text-gray-800 hover:text-teal-600 transition">Ear Clinic</h3>
        <div class="overflow-hidden rounded-lg mb-6">
          <img src="{{ asset('storage/images/ear.webp') }}" alt="Ear Clinic" class="w-full h-64 object-cover transform transition duration-500 hover:scale-105">
        </div>
        <a href="http://127.0.0.1:5500/clinic.html" class="mt-auto inline-block px-5 py-2 bg-teal-600 text-white font-semibold rounded-full shadow hover:bg-teal-700 hover:shadow-lg transition duration-300">
          See More
        </a>
      </div>

      <div class="service-card bg-white rounded-3xl p-6 flex flex-col cursor-pointer transform transition duration-500 hover:-translate-y-5 hover:shadow-2xl hover:shadow-teal-400/40 animate-slideUp delay-450">
        <div class="w-12 h-12 flex items-center justify-center bg-teal-100 rounded-full mb-4">
          <i class="fa-solid fa-heart-pulse text-teal-600 text-xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-4 text-gray-800 hover:text-teal-600 transition">Heart Clinic</h3>
        <div class="overflow-hidden rounded-lg mb-6">
          <img src="{{ asset('storage/images/news-image.jpg') }}" alt="Heart Clinic" class="w-full h-64 object-cover transform transition duration-500 hover:scale-105">
        </div>
        <a href="http://127.0.0.1:5500/clinic.html" class="mt-auto inline-block px-5 py-2 bg-teal-600 text-white font-semibold rounded-full shadow hover:bg-teal-700 hover:shadow-lg transition duration-300">
          See More
        </a>
      </div>

    </div>
  </section>

</section>

<!-- Tailwind animation -->
<style>
@keyframes slideUp {
  0% { opacity: 0; transform: translateY(30px); }
  100% { opacity: 1; transform: translateY(0); }
}
.animate-slideUp { animation: slideUp 0.8s ease-out forwards; }
.animate-slideUp.delay-150 { animation-delay: 0.15s; }
.animate-slideUp.delay-200 { animation-delay: 0.2s; }
.animate-slideUp.delay-250 { animation-delay: 0.25s; }
.animate-slideUp.delay-300 { animation-delay: 0.3s; }
.animate-slideUp.delay-350 { animation-delay: 0.35s; }
.animate-slideUp.delay-400 { animation-delay: 0.4s; }
.animate-slideUp.delay-450 { animation-delay: 0.45s; }
</style>




    












<!-- CONTACT SECTION -->
<section id="appoiment" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center px-6">
    <div class="flex justify-center">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d811.4708952535926!2d45.4307454!3d35.5565773!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40002c2060416a37%3A0x5825c5c73e673272!2sQaiwan%20tower!5e0!3m2!1sen!2siq!4v1770120550062!5m2!1sen!2siq" width="515" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div>
      <h2 class="text-4xl font-bold mb-8 text-gray-800">Make an appointment</h2>
      <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-medium mb-2">Name</label>
          <input type="text" placeholder="Full Name" class="w-full bg-gray-100 p-4 rounded outline-none">
        </div>
        <div>
          <label class="block text-sm font-medium mb-2">Email</label>
          <input type="email" placeholder="Your Email" class="w-full bg-gray-100 p-4 rounded outline-none">
        </div>
        <div>
          <label class="block text-sm font-medium mb-2">Select Date</label>
          <input type="date" class="w-full bg-gray-100 p-4 rounded outline-none">
        </div>
        <div>
          <label class="block text-sm font-medium mb-2">Select Department</label>
          <select class="w-full bg-gray-100 p-4 rounded outline-none">
            <option>General Health</option>
            <option>Cardiology</option>
            <option>Dental</option>
            <option>Medical Research</option>
          </select>
        </div>
        <div class="md:col-span-2">
          <label class="block text-sm font-medium mb-2">Phone Number</label>
          <input type="tel" placeholder="Phone" class="w-full bg-gray-100 p-4 rounded outline-none">
        </div>
        <div class="md:col-span-2">
          <label class="block text-sm font-medium mb-2">Additional Message</label>
          <textarea rows="4" placeholder="Message" class="w-full bg-gray-100 p-4 rounded outline-none"></textarea>
        </div>
        <div class="md:col-span-2">
          <button type="submit" class="w-full bg-teal-600 text-white py-4 rounded font-semibold text-lg hover:bg-teal-700 transition">make appointment</button>
        </div>
      </form>
    </div>
  </div>
</section>








<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-400 pt-20 pb-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

      <!-- Contact Info -->
      <div class="space-y-4 animate-slideUp"
      id="contact">
        <h4 class="text-xl font-semibold text-white mb-2">Contact Info</h4>
        <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>
        <div class="space-y-2 mt-4">
          <p class="flex items-center">
            <span class="w-9 h-9 flex items-center justify-center bg-teal-600 rounded-full mr-3"><i class="fa fa-phone text-white"></i></span>
            +964-770-060-0160
          </p>
          <p class="flex items-center">
            <span class="w-9 h-9 flex items-center justify-center bg-teal-600 rounded-full mr-3"><i class="fa fa-envelope text-white"></i></span>
            <a href="https://www.gmail.com/" class="hover:text-teal-500 transition">lifeclinic73@company.com</a>
          </p>
        </div>
      </div>

      <!-- Latest News -->
      <div class="space-y-6 animate-slideUp delay-150">
        <h4 class="text-xl font-semibold text-white mb-4">Latest News</h4>

        <div class="flex items-center gap-4">
          <img src="{{ asset('storage/images/news-image.jpg') }}" alt="News" class="w-16 h-16 rounded-full object-cover">
          <div>
            <a href="#" class="text-white font-medium hover:text-teal-500 transition"><h5>Amazing Technology</h5></a>
            <span class="text-gray-400 text-sm">January 08, 2025</span>
          </div>
        </div>

        <div class="flex items-center gap-4">
          <img src="{{ asset('storage/images/news-image3.jpg') }}" alt="News" class="w-16 h-16 rounded-full object-cover">
          <div>
            <a href="#" class="text-white font-medium hover:text-teal-500 transition"><h5>New Healing Process</h5></a>
            <span class="text-gray-400 text-sm">February 20, 2025</span>
          </div>
        </div>
      </div>

      <!-- Opening Hours & Social -->
      <div class="space-y-4 animate-slideUp delay-200">
        <h4 class="text-xl font-semibold text-white mb-2">Opening Hours</h4>
        <p>Monday - Friday <span class="font-medium text-white">06:00 AM - 10:00 PM</span></p>
        <p>Saturday <span class="font-medium text-white">09:00 AM - 08:00 PM</span></p>
        <p>Sunday <span class="font-medium text-white">Closed</span></p>

        <!-- Social Icons -->
        <ul class="flex gap-4 mt-4">
          <li>
            <a href="https://www.facebook.com/" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-blue-600 text-white transition">
              <i class="fa-brands fa-facebook-f"></i>
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-blue-500 text-white transition">
              <i class="fa-brands fa-linkedin-in"></i>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-pink-500 text-white transition">
              <i class="fa-brands fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Bottom Section -->
    <div class="mt-12 border-t border-gray-700 pt-6 flex flex-col md:flex-row items-center justify-between gap-4">
      
      <!-- Copyright -->
      <p class="text-gray-500 text-sm">&copy; @all rights reserved  | @ahdco 2026 <a href="https://www.facebook.com/tooplate" target="_blank" class="hover:text-teal-500 transition"></a></p>
<br>
      <!-- Quick Links -->
      <div class="flex flex-wrap gap-4">
        <a href="#" class="text-gray-400 text-sm hover:text-teal-500 transition">Laboratory Tests</a>
        <a href="#" class="text-gray-400 text-sm hover:text-teal-500 transition">Departments</a>
        <a href="#" class="text-gray-400 text-sm hover:text-teal-500 transition">Insurance Policy</a>
        <a href="#" class="text-gray-400 text-sm hover:text-teal-500 transition">Careers</a>
      </div>

      <!-- Back to Top -->
      <a href="#top" class="w-10 h-10 flex items-center justify-center bg-gray-800 hover:bg-teal-500 text-white rounded-full transition transform hover:-translate-y-1">
        <i class="fa fa-angle-up"></i>
      </a>
    </div>
  </div>
</footer>

<!-- Tailwind SlideUp Animation -->
<style>
  @keyframes slideUp {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
  }
  .animate-slideUp { animation: slideUp 0.8s ease-out forwards; }
  .animate-slideUp.delay-150 { animation-delay: 0.15s; }
  .animate-slideUp.delay-200 { animation-delay: 0.2s; }
</style>

<!-- Font Awesome 6 CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">





<!-- ================= SLIDESHOW SCRIPT ================= -->
<script>
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const prev = document.getElementById('prev');
    const next = document.getElementById('next');
    let current = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.opacity = i === index ? '1' : '0';
            
            dots[i].classList.toggle('bg-teal-700', i === index);
            dots[i].classList.toggle('shadow-lg', i === index);
            dots[i].classList.toggle('shadow-teal-700/70', i === index);
            dots[i].classList.toggle('bg-white/60', i !== index);
        });
        current = index;
    }

    // Dot click
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => showSlide(index));
    });

    // Arrows
    prev.addEventListener('click', () => {
        current = (current - 1 + slides.length) % slides.length;
        showSlide(current);
    });
    next.addEventListener('click', () => {
        current = (current + 1) % slides.length;
        showSlide(current);
    });

    // Auto slide
    setInterval(() => {
        current = (current + 1) % slides.length;
        showSlide(current);
    }, 5000);
</script>

<!-- ================= END SCRIPT ================= -->

<!-- JS for sticky navbar below header -->
<script>
    const navbar = document.getElementById('navbar');
    const headerTop = document.getElementById('header-top');

    window.addEventListener('scroll', () => {
        if (window.scrollY > headerTop.offsetHeight) {
            navbar.classList.add('sticky');
        } else {
            navbar.classList.remove('sticky');
        }
    });
</script>



<!-- Tailwind Config -->
<script>
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      keyframes: {
        fadeUp: {
          '0%': { opacity: '0', transform: 'translateY(30px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
      },
      animation: {
        'fade-up': 'fadeUp 0.8s ease-out forwards',
      },
    },
  },
  plugins: [],
}


</script>

</body>
</html>