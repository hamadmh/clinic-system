<!DOCTYPE html>
<html lang="ku" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>کلینیکی ژیان - Life Clinic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="assets/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="assets/favicon.png" type="image/png">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@400;700&display=swap');
        
        body {
            font-family: 'Noto Sans Arabic', sans-serif;
        }

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

<header id="header-top" class="bg-teal-600 text-white text-sm">
    <div class="max-w-7xl mx-auto px-4 py-3 flex flex-col md:flex-row justify-between gap-2">
        <p>بەخێربێن بۆ چاودێری تەندروستی پڕۆفیشناڵ</p>
        <div class="flex flex-wrap gap-4">
            <span><i class="fa fa-phone ml-1"></i>+964-770-060-0160</span>
            <span><i class="fa fa-calendar ml-1"></i>6:00 بەیانی – 10:00 شەو</span>
            <span><i class="fa fa-envelope ml-1"></i>lifeclinic73@company.com</span>
        </div>
        <div>
            <select class="w-full bg-teal-600 rounded outline-none" onchange="location = this.value;">
                <option value="{{ asset('homekrd') }}">کوردی</option>
                <option value="{{ asset('home') }}">English</option>
            </select>
        </div>
    </div>
</header>

<nav id="navbar" class="bg-white shadow-md w-full z-50 transition-all duration-300 sticky-nav">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <a class="text-2xl font-bold text-teal-600">
            <i class="fa fa-l-square"></i> کلینیکی ژیان
        </a>

        <ul class="hidden md:flex gap-8 font-medium">
            <li><a href="#top" class="px-3 py-2 rounded transition scroll-smooth">سەرەتا</a></li>
            <li><a href="#about" class="px-3 py-2 rounded transition scroll-smooth">دەربارەی ئێمە</a></li>
            <li><a href="#team" class="px-3 py-2 rounded transition scroll-smooth">پزیشکەکانمان</a></li>
            <li><a href="#service" class="px-3 py-2 rounded transition scroll-smooth">خزمەتگوزارییەکان</a></li>
            <li><a href="#news" class="px-3 py-2 rounded transition scroll-smooth">هەواڵەکان</a></li>
            <li><a href="#contact" class="px-3 py-2 rounded transition scroll-smooth">پەیوەندی</a></li>
        </ul>

        <a href="#appoiment" class="hidden md:block bg-teal-600 text-white px-5 py-2 rounded-lg hover:bg-teal-700">
            وەرگرتنی نۆرە
        </a>
    </div>
</nav>

<section class="relative w-full overflow-hidden mt-[7px]">
    <div class="relative h-[450px]">
        <div class="slide absolute inset-0 w-full h-full transition-opacity duration-700 opacity-100">
            <img src="{{ asset('storage/images/slider1.jpg') }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-teal-600/30 via-teal-600/15 to-transparent pointer-events-none"></div>
            <div class="absolute bottom-16 right-8 text-white text-right">
                <h2 class="text-3xl font-bold">بەخێربێن بۆ کلینیکی ژیان</h2>
                <p class="mt-2 text-lg max-w-md">دابینکردنی چاودێری تەندروستی پڕۆفیشناڵ بۆ ماوەی زیاتر لە دە ساڵ.</p>
            </div>
        </div>
        <div class="slide absolute inset-0 w-full h-full transition-opacity duration-700 opacity-0">
            <img src="{{ asset('storage/images/slider2.jpg') }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-teal-600/30 via-teal-600/15 to-transparent pointer-events-none"></div>
            <div class="absolute bottom-16 right-8 text-white text-right">
                <h2 class="text-3xl font-bold">ستافی پزیشکی شارەزا</h2>
                <p class="mt-2 text-lg max-w-md">پزیشک و پەرستارەکانمان چاودێرییەکی تایبەت بۆ هەموو نەخۆشەکان دابین دەکەن.</p>
            </div>
        </div>
        <div class="slide absolute inset-0 w-full h-full transition-opacity duration-700 opacity-0">
            <img src="{{ asset('storage/images/slider3.jpg') }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-teal-600/30 via-teal-600/15 to-transparent pointer-events-none"></div>
            <div class="absolute bottom-16 right-8 text-white text-right">
                <h2 class="text-3xl font-bold">ئامێری پێشکەوتوو</h2>
                <p class="mt-2 text-lg max-w-md">ئامێری مۆدێرن و ژینگەیەکی ئارام بۆ چارەسەرێکی باشتر.</p>
            </div>
        </div>
        <div class="slide absolute inset-0 w-full h-full transition-opacity duration-700 opacity-0">
            <img src="{{ asset('storage/images/slider22.jpg') }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-teal-600/30 via-teal-600/15 to-transparent pointer-events-none"></div>
            <div class="absolute bottom-16 right-8 text-white text-right">
                <h2 class="text-3xl font-bold">تەندروستی گشتگیر</h2>
                <p class="mt-2 text-lg max-w-md">ئێمە جەخت لەسەر باشبوونی جەستەیی و دەروونی نەخۆشەکانمان دەکەینەوە.</p>
            </div>
        </div>
    </div>
    <button id="prev" class="absolute top-1/2 left-4 -translate-y-1/2 text-white text-3xl font-bold px-3 py-1 bg-teal-700/50 rounded hover:bg-teal-600 transition">❮</button>
    <button id="next" class="absolute top-1/2 right-4 -translate-y-1/2 text-white text-3xl font-bold px-3 py-1 bg-teal-700/50 rounded hover:bg-teal-600 transition">❯</button>

    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-3">
        <button class="dot w-3 h-3 rounded-full bg-teal-700 shadow-lg shadow-teal-700/70"></button>
        <button class="dot w-3 h-3 rounded-full bg-white/60"></button>
        <button class="dot w-3 h-3 rounded-full bg-white/60"></button>
        <button class="dot w-3 h-3 rounded-full bg-white/60"></button>
    </div>
</section>

<div id="content" class="pt-0 lg:pt-0"></div>

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<section class="w-full bg-white py-20" id="about">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

    <div data-aos="fade-left">
      <h2 class="text-4xl font-bold text-gray-800 leading-tight">
        بەخێربێن بۆ <span class="text-teal-600">کلینیکی ژیان</span>
      </h2>

      <div class="w-20 h-1 bg-teal-600 mt-4 mb-6 rounded"></div>

      <p class="text-gray-600 leading-relaxed mb-6">
        کلینیکی ژیان ناوەندێکی تەندروستی مۆدێرنە کە تەرخانکراوە بۆ پێشکەشکردنی خزمەتگوزاری پزیشکی کوالێتی بەرز بە میهرەبانی و چاودێرییەوە. 
        پزیشکە بە ئەزموونەکانمان و ستافی پزیشکی تەکنەلۆژیای پێشکەوتوو بەکاردەهێنن بۆ دڵنیابوون لە دەستنیشانکردنی ورد، چارەسەری کاریگەر، و چاودێری تایبەت.
      </p>

      <p class="text-gray-500 leading-relaxed">
        تەندروستی، ئارامی و سەلامەتی ئێوە لە پێشینەی کارەکانمانە. ئێمە هەوڵدەدەین بۆ گەیشتن بە باشترین لە هەموو لایەنەکانی چاودێری نەخۆش.
      </p>
    </div>

    <div class="grid grid-cols-2 gap-6">
      <div data-aos="zoom-in" data-aos-delay="100" class="bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300 cursor-pointer text-right">
        <i class="fa-solid fa-hand-holding-heart text-teal-600 text-2xl mb-3"></i>
        <h3 class="font-semibold text-gray-800">پەیاممان</h3>
        <p class="text-sm text-gray-500 mt-2">دابینکردنی چاودێری تەندروستی بە سۆز و کوالێتی بەرز.</p>
      </div>

      <div data-aos="zoom-in" data-aos-delay="200" class="bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300 cursor-pointer text-right">
        <i class="fa-solid fa-clock-rotate-left text-teal-600 text-2xl mb-3"></i>
        <h3 class="font-semibold text-gray-800">مێژوومان</h3>
        <p class="text-sm text-gray-500 mt-2">ساڵانێکی زۆر لە خزمەتگوزاری جێی متمانە و نایاب.</p>
      </div>

      <div data-aos="zoom-in" data-aos-delay="300" class="bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300 cursor-pointer text-right">
        <i class="fa-solid fa-eye text-teal-600 text-2xl mb-3"></i>
        <h3 class="font-semibold text-gray-800">دیدگامان</h3>
        <p class="text-sm text-gray-500 mt-2">بوون بە پێشەنگ لە دابینکردنی خزمەتگوزاری تەندروستی.</p>
      </div>

      <div data-aos="zoom-in" data-aos-delay="400" class="bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300 cursor-pointer text-right">
        <i class="fa-solid fa-trophy text-teal-600 text-2xl mb-3"></i>
        <h3 class="font-semibold text-gray-800">سەرکەوتنمان</h3>
        <p class="text-sm text-gray-500 mt-2">هەزاران نەخۆشی ڕازی لە هەر ساڵێکدا.</p>
      </div>
    </div>
  </div>
</section>

<section class="w-full bg-teal-50 py-16">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold">ڕای نەخۆشەکان</h2>
      <div class="w-24 h-1 bg-teal-500 mx-auto mt-3"></div>
    </div>
    <div class="relative">
      <div id="reviewCarousel" class="flex gap-6 overflow-hidden scroll-smooth">
        <div class="review-card bg-white p-6 rounded-2xl shadow-lg text-center min-w-[32%]">
          <img src="https://i.pravatar.cc/100?img=1" class="w-16 h-16 mx-auto rounded-full mb-4">
          <h3 class="font-semibold">ئەحمەد عەلی</h3>
          <div class="text-yellow-400 text-lg">★★★★★</div>
          <p class="text-gray-600 mt-3">خزمەتگوزارییەکی نایاب و پزیشکی زۆر پڕۆفیشناڵ.</p>
        </div>
        <div class="review-card bg-white p-6 rounded-2xl shadow-lg text-center min-w-[32%]">
          <img src="https://i.pravatar.cc/100?img=5" class="w-16 h-16 mx-auto rounded-full mb-4">
          <h3 class="font-semibold">سارا محەمەد</h3>
          <div class="text-yellow-400 text-lg">★★★★★</div>
          <p class="text-gray-600 mt-3">کلینیکێکی پاک و ستافێکی زۆر میهرەبان.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="team" class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6">
    <div class="mb-12" data-aos="fade-up">
      <h2 class="text-3xl font-bold text-gray-800 text-right">پزیشکەکانمان</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white rounded-xl shadow-md overflow-hidden group transform transition duration-500 hover:-translate-y-3" data-aos="fade-up">
        <img src="{{ asset('storage/images/team-image1.jpg') }}" class="w-full h-82 object-cover">
        <div class="p-6 text-center">
          <h3 class="text-lg font-semibold">نەیت باستن</h3>
          <p class="text-gray-500 mb-4">بەڕێوەبەری گشتی</p>
          <div class="border-t pt-4 text-sm text-gray-600">
            <p><i class="fa fa-phone ml-2"></i>774-020-0120</p>
            <p><i class="fa fa-envelope-o ml-2"></i>nate01@company.com</p>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-xl shadow-md overflow-hidden group transform transition duration-500 hover:-translate-y-3" data-aos="fade-up" data-aos-delay="100">
        <img src="{{ asset('storage/images/team-image2.jpg') }}" class="w-full h-82 object-cover">
        <div class="p-6 text-center">
          <h3 class="text-lg font-semibold">جەیسن ستیوارت</h3>
          <p class="text-gray-500 mb-4">پزیشکی دووگیانی</p>
          <div class="border-t pt-4 text-sm text-gray-600">
            <p><i class="fa fa-phone ml-2"></i>774-040-0140</p>
            <p><i class="fa fa-envelope-o ml-2"></i>jason@company.com</p>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md overflow-hidden group transform transition duration-500 hover:-translate-y-3" data-aos="fade-up" data-aos-delay="200">
        <img src="{{ asset('storage/images/team-image3.jpg') }}" class="w-full h-82 object-cover">
        <div class="p-6 text-center">
          <h3 class="text-lg font-semibold">میاشا ڕێنا</h3>
          <p class="text-gray-500 mb-4">کارتیۆلۆژی (دڵ)</p>
          <div class="border-t pt-4 text-sm text-gray-600">
            <p><i class="fa fa-phone ml-2"></i>774-060-0160</p>
            <p><i class="fa fa-envelope-o ml-2"></i>miasha@company.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="news" class="bg-gray-100 py-16">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold mb-2">دوایین هەواڵەکان</h2>
      <div class="w-24 h-1 bg-teal-600 mx-auto rounded-full"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:-translate-y-2">
        <img src="{{ asset('storage/images/news-image1.jpg') }}" class="w-full h-56 object-cover">
        <div class="p-5 text-right">
          <span class="text-sm text-gray-500">٨ی کانوونی دووەمی ٢٠٢٦</span>
          <h3 class="text-xl font-semibold mt-2 hover:text-teal-600 transition">دەربارەی تەکنەلۆژیای سەرسوڕهێنەر</h3>
          <p class="text-gray-700 mt-2 line-clamp-3">تەکنەلۆژیا چۆن شێوازی چارەسەری پزیشکی لە کلینیکەکەمان دەگۆڕێت...</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:-translate-y-2">
        <img src="{{ asset('storage/images/news-image2.jpg') }}" class="w-full h-56 object-cover">
        <div class="p-5 text-right">
          <span class="text-sm text-gray-500">١٠ی کانوونی دووەمی ٢٠٢٦</span>
          <h3 class="text-xl font-semibold mt-2 hover:text-teal-600 transition">ناوەندێکی نوێی توێژینەوە</h3>
          <p class="text-gray-700 mt-2 line-clamp-3">کردنەوەی بەشێکی نوێ بۆ توێژینەوەی نەخۆشییە دەگمەنەکان...</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:-translate-y-2">
        <img src="{{ asset('storage/images/news-image3.jpg') }}" class="w-full h-56 object-cover">
        <div class="p-5 text-right">
          <span class="text-sm text-gray-500">١٢ی کانوونی دووەمی ٢٠٢٦</span>
          <h3 class="text-xl font-semibold mt-2 hover:text-teal-600 transition">تاقیکردنەوەی دەرمانی نوێ</h3>
          <p class="text-gray-700 mt-2 line-clamp-3">سەرکەوتنی کلینیکەکەمان لە دۆزینەوەی چارەسەری نوێ بۆ نەخۆشانی شەکرە...</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="service" class="bg-gray-50 py-24">
  <div class="text-center mb-16" data-aos="fade-up">
    <h2 class="text-4xl font-extrabold mb-4 text-gray-800">خزمەتگوزارییە <span class="text-teal-600">کانمان</span></h2>
    <div class="w-24 h-1 bg-teal-600 mx-auto mb-4 rounded-full"></div>
    <p class="text-gray-600 max-w-2xl mx-auto">ئێمە باشترین خزمەتگوزاری پزیشکی پێشکەش دەکەین بە بەکارهێنانی نوێترین تەکنەلۆژیا و لەژێر چاودێری پزیشکی پسپۆڕ.</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 max-w-[1280px] mx-auto px-4">
    
    <div class="service-card bg-white rounded-3xl p-6 text-center shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2" data-aos="zoom-in">
      <div class="w-20 h-20 bg-teal-100 text-teal-600 rounded-2xl flex items-center justify-center mx-auto mb-6 rotate-3 group-hover:rotate-0 transition">
        <i class="fa-solid fa-ambulance text-3xl"></i>
      </div>
      <h3 class="text-xl font-bold mb-3 text-gray-800">فریاکەوتنی خێرا</h3>
      <p class="text-gray-500 text-sm mb-6">خزمەتگوزاری فریاکەوتنی ٢٤ کاتژمێری بۆ هەر بارودۆخێکی کتوپڕ.</p>
      <img src="{{ asset('storage/images/OIPpppp.webp') }}" class="rounded-2xl mb-6 w-full h-40 object-cover shadow-sm">
      <a href="#" class="inline-block w-full bg-teal-600 text-white py-3 rounded-xl font-semibold hover:bg-teal-700 transition shadow-md shadow-teal-100">زیاتر بخوێنەوە</a>
    </div>

    <div class="service-card bg-white rounded-3xl p-6 text-center shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2" data-aos="zoom-in" data-aos-delay="100">
      <div class="w-20 h-20 bg-teal-100 text-teal-600 rounded-2xl flex items-center justify-center mx-auto mb-6 -rotate-3 group-hover:rotate-0 transition">
        <i class="fa-solid fa-bed-pulse text-3xl"></i>
      </div>
      <h3 class="text-xl font-bold mb-3 text-gray-800">نەشتەرگەری گشتی</h3>
      <p class="text-gray-500 text-sm mb-6">ئەنجامدانی وردترین نەشتەرگەرییەکان بە ئامێری زۆر پێشکەوتوو.</p>
      <img src="{{ asset('storage/images/OIPkkk.webp') }}" class="rounded-2xl mb-6 w-full h-40 object-cover shadow-sm">
      <a href="#" class="inline-block w-full bg-teal-600 text-white py-3 rounded-xl font-semibold hover:bg-teal-700 transition shadow-md shadow-teal-100">زیاتر بخوێنەوە</a>
    </div>

    <div class="service-card bg-white rounded-3xl p-6 text-center shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2" data-aos="zoom-in" data-aos-delay="200">
      <div class="w-20 h-20 bg-teal-100 text-teal-600 rounded-2xl flex items-center justify-center mx-auto mb-6 rotate-3 group-hover:rotate-0 transition">
        <i class="fa-solid fa-tooth text-3xl"></i>
      </div>
      <h3 class="text-xl font-bold mb-3 text-gray-800">پزیشکی ددان</h3>
      <p class="text-gray-500 text-sm mb-6">چارەسەرکردنی هەموو کێشەکانی ددان و جوانکاری بە کوالێتی بەرز.</p>
      <img src="{{ asset('storage/images/OIP (1).webp') }}" class="rounded-2xl mb-6 w-full h-40 object-cover shadow-sm">
      <a href="#" class="inline-block w-full bg-teal-600 text-white py-3 rounded-xl font-semibold hover:bg-teal-700 transition shadow-md shadow-teal-100">زیاتر بخوێنەوە</a>
    </div>

    <div class="service-card bg-white rounded-3xl p-6 text-center shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2" data-aos="zoom-in" data-aos-delay="300">
      <div class="w-20 h-20 bg-teal-100 text-teal-600 rounded-2xl flex items-center justify-center mx-auto mb-6 -rotate-3 group-hover:rotate-0 transition">
        <i class="fa-solid fa-heart-pulse text-3xl"></i>
      </div>
      <h3 class="text-xl font-bold mb-3 text-gray-800">نەخۆشییەکانی دڵ</h3>
      <p class="text-gray-500 text-sm mb-6">پشکنین و چارەسەری نەخۆشییەکانی دڵ لەژێر دەستی باشترین پزیشکەکان.</p>
      <img src="{{ asset('storage/images/OIP.webp') }}" class="rounded-2xl mb-6 w-full h-40 object-cover shadow-sm">
      <a href="#" class="inline-block w-full bg-teal-600 text-white py-3 rounded-xl font-semibold hover:bg-teal-700 transition shadow-md shadow-teal-100">زیاتر بخوێنەوە</a>
    </div>

  </div>
</section>

<section id="appoiment" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 px-6 items-center">
    
    <div class="order-2 md:order-1 h-full min-h-[450px]" data-aos="fade-right">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1612.3942071661332!2d44.02022833878037!3d36.1960237731771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400723004812f84b%3A0x6b490f2b904c6326!2sLife%20Clinic!5e0!3m2!1sen!2siq!4v1738766157053!5m2!1sen!2siq" 
        width="100%" height="100%" style="border:0; border-radius: 1.5rem;" allowfullscreen="" loading="lazy">
      </iframe>
    </div>

    <div class="order-1 md:order-2 text-right" data-aos="fade-left">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">وەرگرتنی نۆرەی پزیشک</h2>
      <p class="text-gray-500 mb-8">تکایە زانیارییەکانت بنووسە بۆ ئەوەی کاتەکەت بۆ جێگیر بکەین.</p>
      
      <form action="#" method="post" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">ناوی تەواو</label>
          <input type="text" placeholder="بۆ نموونە: ئەحمەد عەلی" class="w-full bg-gray-100 p-4 rounded-xl border-none focus:ring-2 focus:ring-teal-600 text-right">
        </div>
        
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">ئیمەیڵ</label>
          <input type="email" placeholder="email@example.com" class="w-full bg-gray-100 p-4 rounded-xl border-none focus:ring-2 focus:ring-teal-600 text-right">
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">بەرواری نۆرە</label>
          <input type="date" class="w-full bg-gray-100 p-4 rounded-xl border-none focus:ring-2 focus:ring-teal-600 text-right">
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">بەشی مەبەست</label>
          <select class="w-full bg-gray-100 p-4 rounded-xl border-none focus:ring-2 focus:ring-teal-600 text-right">
            <option>تەندروستی گشتی</option>
            <option>دڵ و دەمار</option>
            <option>ددان</option>
            <option>نەشتەرگەری</option>
          </select>
        </div>

        <div class="md:col-span-2">
          <label class="block text-sm font-medium text-gray-700 mb-2">ژمارەی تەلەفۆن</label>
          <input type="tel" placeholder="07XX XXX XXXX" class="w-full bg-gray-100 p-4 rounded-xl border-none focus:ring-2 focus:ring-teal-600 text-right">
        </div>

        <div class="md:col-span-2">
          <label class="block text-sm font-medium text-gray-700 mb-2">نامە یان تێبینی</label>
          <textarea rows="4" placeholder="چۆن دەتوانین هاوکارت بین؟" class="w-full bg-gray-100 p-4 rounded-xl border-none focus:ring-2 focus:ring-teal-600 text-right"></textarea>
        </div>

        <button type="submit" class="md:col-span-2 bg-teal-600 text-white py-4 rounded-xl font-bold text-lg hover:bg-teal-700 transition duration-300 shadow-lg shadow-teal-200">
          ناردنی داواکاری
        </button>
      </form>
    </div>
  </div>
</section>
<section id="contact" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-8">
            
            <div class="bg-white p-8 rounded-2xl shadow-sm text-center border-b-4 border-teal-600 hover:shadow-xl transition duration-300" data-aos="zoom-in">
                <div class="w-16 h-16 bg-teal-100 text-teal-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fa fa-map-marker text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">ناونیشانمان</h3>
                <p class="text-gray-600">عێراق، هەرێمی کوردستان،<br>سلێمانی، شەقامی بازنەیی مەلیک مەحموود</p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm text-center border-b-4 border-teal-600 hover:shadow-xl transition duration-300" data-aos="zoom-in" data-aos-delay="100">
                <div class="w-16 h-16 bg-teal-100 text-teal-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fa fa-phone text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">پەیوەندیمان پێوە بکەن</h3>
                <p class="text-gray-600" dir="ltr">+964-770-060-0160</p>
                <p class="text-gray-600" dir="ltr">+964-750-123-4567</p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm text-center border-b-4 border-teal-600 hover:shadow-xl transition duration-300" data-aos="zoom-in" data-aos-delay="200">
                <div class="w-16 h-16 bg-teal-100 text-teal-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fa fa-envelope text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">پۆستی ئەلیکترۆنی</h3>
                <p class="text-gray-600">lifeclinic73@company.com</p>
                <p class="text-gray-600">info@lifeclinic.com</p>
            </div>

        </div>
    </div>
</section>

<footer class="bg-gray-900 text-gray-400 pt-20 pb-10 text-right">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
        
        <div class="space-y-6">
            <h4 class="text-2xl font-bold text-white">کلینیکی <span class="text-teal-500">ژیان</span></h4>
            <p class="leading-relaxed">
                ئێمە لێرەین بۆ پێشکەشکردنی باشترین خزمەتگوزارییە پزیشکییەکان بە بەکارهێنانی نوێترین تەکنەلۆژیا و لەژێر دەستی لێهاتووترین پزیشکەکاندا.
            </p>
            <div class="flex gap-4 justify-end">
                <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-teal-600 hover:text-white transition"><i class="fa fa-facebook"></i></a>
                <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-teal-600 hover:text-white transition"><i class="fa fa-instagram"></i></a>
                <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-teal-600 hover:text-white transition"><i class="fa fa-twitter"></i></a>
            </div>
        </div>

        <div>
            <h4 class="text-xl font-bold text-white mb-6">بەستەرە خێراکان</h4>
            <ul class="space-y-4">
                <li><a href="#top" class="hover:text-teal-500 transition">سەرەتا</a></li>
                <li><a href="#about" class="hover:text-teal-500 transition">دەربارەی ئێمە</a></li>
                <li><a href="#service" class="hover:text-teal-500 transition">خزمەتگوزارییەکان</a></li>
                <li><a href="#team" class="hover:text-teal-500 transition">پزیشکەکانمان</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-xl font-bold text-white mb-6">کاتەکانی کارکردن</h4>
            <ul class="space-y-4">
                <li class="flex justify-between border-b border-gray-800 pb-2">
                    <span>شەممە - چوارشەممە:</span>
                    <span class="text-teal-500">٠٦:٠٠ ب - ١٠:٠٠ ش</span>
                </li>
                <li class="flex justify-between border-b border-gray-800 pb-2">
                    <span>پێنجشەممە:</span>
                    <span class="text-teal-500">٠٩:٠٠ ب - ٠٨:٠٠ ش</span>
                </li>
                <li class="flex justify-between">
                    <span>هەینی:</span>
                    <span class="text-red-500 font-bold">داخراوە</span>
                </li>
            </ul>
        </div>

        <div>
            <h4 class="text-xl font-bold text-white mb-6">هەواڵنامە</h4>
            <p class="mb-4">بۆ وەرگرتنی نوێترین هەواڵ و ڕێنمایی تەندروستی، ئیمەیڵەکەت بنووسە.</p>
            <form class="flex flex-col gap-3">
                <input type="email" placeholder="ئیمەیڵەکەت بنووسە" class="bg-gray-800 p-3 rounded-lg border-none focus:ring-2 focus:ring-teal-500 text-right">
                <button class="bg-teal-600 text-white py-3 rounded-lg font-bold hover:bg-teal-700 transition">بەشداری بکە</button>
            </form>
        </div>

    </div>

    <div class="max-w-7xl mx-auto px-6 border-t border-gray-800 mt-16 pt-8 text-center">
        <p>© هەموو مافەکان پارێزراوە بۆ <span class="text-white font-bold">کلینیکی ژیان ٢٠٢٦</span> | دیزاین کراوە لەلایەن ستافی تەکنیکی</p>
    </div>
</footer>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    // چالاککردنی ئەنیمەیشنەکان
    AOS.init({
        duration: 1000,
        once: true,
        easing: 'ease-in-out',
    });
</script>

<script>
    // سکرێپتی سلاایدەری وێنەکان (Slideshow Logic)
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');
    let currentSlide = 0;

    function showSlide(index) {
        // گەڕانەوە بۆ سەرەتا یان کۆتایی ئەگەر لە سنوور دەرچوو
        if (index >= slides.length) currentSlide = 0;
        else if (index < 0) currentSlide = slides.length - 1;
        else currentSlide = index;

        // شاردنەوەی هەموو وێنەکان
        slides.forEach(slide => {
            slide.classList.remove('opacity-100');
            slide.classList.add('opacity-0');
        });

        // لادانی ڕەنگی خاڵەکان (Dots)
        dots.forEach(dot => {
            dot.classList.remove('bg-teal-700', 'shadow-lg', 'shadow-teal-700/70');
            dot.classList.add('bg-white/60');
        });

        // پیشاندانی وێنەی چالاک
        slides[currentSlide].classList.remove('opacity-0');
        slides[currentSlide].classList.add('opacity-100');
        
        // چالاککردنی خاڵی پەیوەندیدار
        dots[currentSlide].classList.add('bg-teal-700', 'shadow-lg', 'shadow-teal-700/70');
        dots[currentSlide].classList.remove('bg-white/60');
    }
    // دوگمەی داهاتوو و پێشوو
    nextBtn.addEventListener('click', () => showSlide(currentSlide + 1));
    prevBtn.addEventListener('click', () => showSlide(currentSlide - 1));

    // کلیک کردن لەسەر خاڵەکان (Dots)
    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => showSlide(i));
    });

    // گۆڕینی ئۆتۆماتیکی وێنەکان هەموو ٥ چرکە جارێک
    setInterval(() => {
        showSlide(currentSlide + 1);
    }, 5000);

    // سکرێپتی ناڤباری جێگیر (Sticky Navbar Logic)
    window.onscroll = function() { fixNavbar() };

    const navbar = document.getElementById("navbar");
    const headerTop = document.getElementById("header-top");
    const sticky = navbar.offsetTop;

    function fixNavbar() {
        if (window.pageYOffset > sticky) {
            navbar.classList.add("sticky");
            navbar.classList.add("shadow-xl");
            // کەمکردنەوەی بەرزی ناڤبار کاتێک سکرۆڵ دەکرێت بۆ جوانی زیاتر
            navbar.querySelector('.max-w-7xl').classList.remove('py-4');
            navbar.querySelector('.max-w-7xl').classList.add('py-2');
        } else {
            navbar.classList.remove("sticky");
            navbar.classList.remove("shadow-xl");
            navbar.querySelector('.max-w-7xl').classList.add('py-4');
            navbar.querySelector('.max-w-7xl').classList.remove('py-2');
        }
    }

    // سکرۆڵی نەرم بۆ بەستەرە ناوخۆییەکان (Smooth Scroll)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // سکرێپتی کارۆسێلی ڕای نەخۆشەکان (Review Carousel)
    const carousel = document.getElementById('reviewCarousel');
    let isDown = false;
    let startX;
    let scrollLeft;

    carousel.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - carousel.offsetLeft;
        scrollLeft = carousel.scrollLeft;
    });
    carousel.addEventListener('mouseleave', () => {
        isDown = false;
    });
    carousel.addEventListener('mouseup', () => {
        isDown = false;
    });
    carousel.addEventListener('mousemove', (e) => {
        if(!isDown) return;
        e.preventDefault();
        const x = e.pageX - carousel.offsetLeft;
        const walk = (x - startX) * 2;
        carousel.scrollLeft = scrollLeft - walk;
    });

    // نامەی سەرکەوتنی ناردنی فۆڕم (بۆ تاقیکردنەوە)
    const appointmentForm = document.querySelector('#appoiment form');
    if(appointmentForm) {
        appointmentForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('سوپاس! داواکارییەکەت بە سەرکەوتوویی ناردرا. بەم زووانە پەیوەندیت پێوە دەکەینەوە.');
            appointmentForm.reset();
        });
    }

</script>

</body>
</html>



