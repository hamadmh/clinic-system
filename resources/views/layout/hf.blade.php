<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Clinic</title>
   
</head>
<body>




    @yield('content')






 <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /* Navbar hover background */
        #navbar ul li a:hover {
            background-color: #E0F2F1; /* light teal */
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
<nav id="navbar" class="bg-white shadow-md w-full z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <a href="home" class="text-2xl font-bold text-teal-600">
            <i class="fa fa-l-square"></i> Life Clinic
        </a>

        <ul class="hidden md:flex gap-8 font-medium">
            <li><a href="home" class="px-3 py-2 rounded transition">Home</a></li>
            <li><a href="about" class="px-3 py-2 rounded transition">About Us</a></li>
            <li><a href="staff" class="px-3 py-2 rounded transition">Our Staff</a></li>
            <li><a href="news" class="px-3 py-2 rounded transition">News</a></li>
            <li><a href="contact" class="px-3 py-2 rounded transition">Contact</a></li>
        </ul>

        <a href="appointment" class="hidden md:block bg-teal-600 text-white px-5 py-2 rounded-lg hover:bg-teal-700">
            Make an appointment
        </a>
    </div>
</nav>

<!-- Add top padding so content doesn’t hide under navbar -->
<div id="content" class="pt-0 lg:pt-0"></div>

<!-- NEWS DETAIL -->
<section class="max-w-7xl mx-auto px-4 py-16 grid grid-cols-1 lg:grid-cols-3 gap-10">

</header>