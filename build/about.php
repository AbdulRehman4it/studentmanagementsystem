<?php require_once "inc/header.php"; ?>
<body class="bg-[#FBFBFB]">
<nav class="bg-black py-6 xl:px-20 lg:px-10 px-5">
  <div class="flex justify-between items-center text-white">
    <div class="flex items-center space-x-4">
      <img src="" alt="">
      <h1 class="md:text-2xl text-xl font-bold">Learning Hub</h1>
    </div>

    <!-- Menu -->
    <div class="hidden lg:flex">
      <ul class="flex space-x-8 items-center">

        <li><a href="./index.html" class="font-medium text-base">Home</a></li>

        <!-- Courses Dropdown (Desktop Hover) -->
        <li class="relative group">
          <a href="./courses.html" class="font-medium text-base flex items-center space-x-1">
            <span>Courses</span>
            <i class="fas fa-chevron-down transition-transform duration-300 group-hover:rotate-180"></i>
          </a>

          <ul class="absolute bg-white text-black rounded shadow-lg w-44 hidden group-hover:block">
            <li><a href="./web.html" class="block px-4 py-2 hover:bg-black hover:text-white">Web Development</a></li>
            <li><a href="./game.html" class="block px-4 py-2 hover:bg-black hover:text-white">Game Development</a></li>
            <li><a href="./graphics.html" class="block px-4 py-2 hover:bg-black hover:text-white">Graphic Design</a></li>
            <li><a href="./digital.html" class="block px-4 py-2 hover:bg-black hover:text-white">Digital Marketing</a></li>
          </ul>
        </li>

        <li><a href="./about.html" class="font-medium text-base">About Us</a></li>
        <li><a href="./contact.html" class="font-medium text-base">Contact Us</a></li>

        <!-- Login Dropdown (Desktop Hover) -->
        <li class="relative group">
          <a href="./login.html" class="font-medium text-base flex items-center space-x-1">
            <span>Log In</span>
         
          </a>
        </li>

      </ul>
    </div>

    <!-- Mobile Menu Button -->
    <div class="lg:hidden">
      <button id="menu-btn">
        <i class="fas fa-bars text-2xl"></i>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="lg:hidden mt-5 text-white hidden text-center items-center">
    <ul class="space-y-4">
      <li><a href="#" class="block font-medium text-base">Home</a></li>

      <!-- Courses Dropdown (Mobile Click) -->
      <li>
        <button onclick="toggleDropdown('courses-mobile', 'courses-icon-mobile')" class="flex justify-center items-center space-x-2 font-medium text-base w-full">
          <span>Courses</span>
          <i id="courses-icon-mobile" class="fas fa-chevron-down transition-transform duration-300"></i>
        </button>
        <ul id="courses-mobile" class="ml-4 mt-2 space-y-2 hidden">
          <li><a href="#" class="block text-base">Web Development</a></li>
          <li><a href="#" class="block text-base">Graphic Design</a></li>
          <li><a href="#" class="block text-base">Digital Marketing</a></li>
          <li><a href="#" class="block text-base">AI & ML Basics</a></li>
        </ul>
      </li>

      <li><a href="#" class="block font-medium text-base">About Us</a></li>
      <li><a href="#" class="block font-medium text-base">Contact Us</a></li>

      <!-- Login Dropdown (Mobile Click) -->
      <li>
        <button onclick="toggleDropdown('login-mobile', 'login-icon-mobile')" class="flex justify-center items-center space-x-2 font-medium text-base w-full">
          <span>Log In</span>
        
        </button>
    
      </li>
    </ul>
  </div>
</nav>

<script>
  // Mobile Menu Toggle with icon change
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const menuIcon = menuBtn.querySelector('i');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    
    if (mobileMenu.classList.contains('hidden')) {
      menuIcon.classList.remove('fa-times');
      menuIcon.classList.add('fa-bars');
    } else {
      menuIcon.classList.remove('fa-bars');
      menuIcon.classList.add('fa-times');
    }
  });

  // Dropdown Toggle for Mobile only
  function toggleDropdown(menuId, iconId) {
    const dropdowns = [
      {menu: 'courses-mobile', icon: 'courses-icon-mobile'},
      {menu: 'login-mobile', icon: 'login-icon-mobile'},
    ];

    dropdowns.forEach(item => {
      const menu = document.getElementById(item.menu);
      const icon = document.getElementById(item.icon);

      if (item.menu === menuId) {
        menu.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
      } else {
        menu.classList.add('hidden');
        icon.classList.remove('rotate-180');
      }
    });
  }
</script>



<section class="h-96 bg-fixed bg-center bg-no-repeat bg-cover" style="background-image: url('./assets/img/about.png');">
  <div class="h-96 flex items-center justify-center bg-black bg-opacity-80">
    <h1 class="md:text-4xl text-2xl font-bold text-white">About us</h1>
  </div>
</section>

<!-- about us  -->
<section class="xl:px-20 lg:px-10 px-5 xl:py-20 py-10 ">
    <div class="flex justify-between gap-20 items-center"> 
    <div class="lg:w-1/2 w-full">
        <h1 class="text-4xl font-semibold">About Us</h1>
        <h2 class="text-2xl font-medium pt-2">Learn, Create, and Grow with Us</h2>
        <p class="2xl:text-lg text-base leading-7 text-[#666666] pt-6">At Learning, we believe in empowering individuals with the skills they need to succeed in the digital world. Whether you want to learn Web Development, explore Creative Designing, or master Digital Marketing, our expert led courses are designed for all levels—beginners to advanced learners.</p>
    </div>
    <div class="lg:w-1/2 w-full">
        <img src="./assets/img/aboutimg.avif" alt="">
    </div>
   </div>
   
</section>

<section class="xl:px-20 lg:px-10 px-5 xl:py-20 py-10 ">
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-10">
        <div class="text-center bg-white p-6 rounded-lg shadow-md hover:bg-black hover:text-white transition duration-300 group">
            <i class="fa fa-pencil text-4xl"></i>
            <h2 class="xl:text-3xl text-2xl pt-2">Achievement</h2>
            <p class="2xl:text-lg lg:text-base text-sm leading-6 lg:leading-7 2xl:leading-8 text-[#666666] pt-2">We are proud of our achievements in the field of online learning. With over 5000+ satisfied students trained in web development, designing, and digital marketing, our platform has become a trusted name for learners across the globe.</p>
        </div>

        <div class="text-center bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group hover:text-white">
            <i class="fa fa-book text-4xl"></i>
            <h2 class="xl:text-3xl text-2xl pt-2">Achievement</h2>
            <p class="2xl:text-lg lg:text-base text-sm leading-6 lg:leading-7 2xl:leading-8 text-[#666666] pt-2">Our vision is to empower individuals worldwide by providing accessible, high-quality digital education. We aim to break barriers of location and background, making advanced tech skills available to everyone.</p>
        </div>

        <div class="text-center bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group hover:text-white">
            <i class="fa fa-globe text-4xl"></i>
            <h2 class="xl:text-3xl text-2xl pt-2">Achievement</h2>
            <p class="2xl:text-lg lg:text-base text-sm leading-6 lg:leading-7 2xl:leading-8 text-[#666666] pt-2">Our mission is to deliver practical, skill-based training in the fields of web development, creative designing, and digital marketing. We strive to create a supportive learning environment where students not only gain knowledge but also build careers.</p>
        </div>
    </div>
</section>
<!-- testimonials  -->
<section class="xl:py-20 py-10 xl:px-20 lg:px-10 px-5">
  <h2 class="text-4xl font-bold text-center text-black mb-12">Testimonials</h2>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    
    <!-- Testimonial Card -->
    <div class="bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group">
      <p class="text-[#666666] group-hover:text-[#666666] mb-6 text-sm">
        "Learn2Earn Hub made me a confident frontend developer. The instructors are amazing and the content is very practical!"
      </p>
      <div class="flex items-center space-x-4">
        <img src="https://via.placeholder.com/60" alt="User" class="w-14 h-14 rounded-full object-cover border-2 border-white">
        <div>
          <h4 class="text-lg font-semibold text-black group-hover:text-white">Mahmoud Mohamed</h4>
          <p class="text-sm text-gray-400 group-hover:text-[#666666]">Frontend Developer</p>
        </div>
      </div>
    </div>

    <!-- Repeat for other testimonials -->

    <div class="bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group">
      <p class="text-[#666666] group-hover:text-[#666666] mb-6 text-sm">
        "The graphic designing course helped me build a strong portfolio. Highly recommend for creative learners!"
      </p>
      <div class="flex items-center space-x-4">
        <img src="https://via.placeholder.com/60" alt="User" class="w-14 h-14 rounded-full object-cover border-2 border-white">
        <div>
          <h4 class="text-lg font-semibold text-black group-hover:text-white">Sara Ahmed</h4>
          <p class="text-sm text-gray-400 group-hover:text-[#666666]">Graphic Designer</p>
        </div>
      </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group">
      <p class="text-[#666666] group-hover:text-[#666666] mb-6 text-sm">
        "With Learn2Earn's digital marketing course, I grew my freelance career. Great mentorship and support!"
      </p>
      <div class="flex items-center space-x-4">
        <img src="https://via.placeholder.com/60" alt="User" class="w-14 h-14 rounded-full object-cover border-2 border-white">
        <div>
          <h4 class="text-lg font-semibold text-black group-hover:text-gray-300">Usman Raza</h4>
          <p class="text-sm text-gray-400 group-hover:text-gray-300">Digital Marketer</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- footer  -->
 
<footer class="bg-black lg:py-20 py-10 xl:px-20 lg:px-10 px-5">
  <div class="flex md:justify-between justify-center items-center md:flex-row flex-col">
    <div class="flex flex-col justify-center">
      <img src="./assets/img/" alt="">
      <h1 class="text-2xl font-bold text-white">Learning Hub</h1>
    </div>
    <div class="pt-5 md:pt-0">
       <h1 class="md:text-2xl text-xl font-bold text-white">Quick Links</h1>
      <div class="flex flex-col justify-center items-center pt-6 space-y-4">
        <a href="index.html" class="text-white font-medium text-base hover:underline">Home</a>
        <a href="courses.html" class="text-white font-medium text-base hover:underline">Course</a>
        <a href="about.html" class="text-white font-medium text-base hover:underline">About</a>
        <a href="contact.html" class="text-white font-medium text-base hover:underline">Contact</a>
        </div>
    </div>
    
    <div class="space-y-4 flex flex-col justify-center items-center pt-5 md:pt-0">
      <h1 class="md:text-2xl text-xl font-bold text-white">Contact Info</h1>
      <p class="text-white text-base "><i class="fa-solid fa-location-dot"></i>&nbsp; Lahore, Pakistan</p>
      <p class="text-white text-base "><i class="fa-solid fa-envelope"></i>&nbsp; learninghub@gmail.com</p>
      <p class="text-white text-base "><i class="fa-solid fa-phone"></i>&nbsp; 0562929978</p>
    </div>
  </div>
</footer>


  <script src="https://kit.fontawesome.com/a2ada4947c.js" crossorigin="anonymous"></script>


</body>
</html>