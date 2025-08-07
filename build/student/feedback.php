<?php require_once "inc/header.php"; ?>
<body class="bg-gray-50 font-sans antialiased">
  <div class="min-h-screen flex">
  <?php require_once "inc/sidebar.php"; ?>

    <!-- Overlay for mobile when sidebar open -->
    <div id="overlay" class="fixed inset-0 bg-black/30 z-10 hidden md:hidden"></div>

    <!-- Main content area -->
    <div class="flex-1 flex flex-col ml-0 md:ml-64 overflow-hidden">
      <!-- top bar -->
      <header class="px-4 py-4 border-b border-gray-200 bg-white">
        <div class="flex justify-between items-center space-x-4">
          <img src="./assets/img/logodashboard.png" class="w-20 md:hidden block" alt="">
          <button id="menu-btn" class="md:hidden p-2 rounded-md border border-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        
        </div>

        <div class="flex md:flex-row flex-col-reverse justify-between items-center space-x-4 pt-10 md:pt-0">
          <div class="relative w-full lg:w-1/2">
            <input type="text" placeholder="Search" class="pl-3 pr-10 py-2 border rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-indigo-400" />
            <div class="absolute right-2 top-1/2 -translate-y-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z"/>
              </svg>
            </div>
          </div>


         <div class="relative" x-data="{ open: false }">
  <button id="user-menu-btn" aria-haspopup="true" aria-expanded="false" class="flex items-center gap-2 px-3 py-2" onclick="toggleUserMenu()">

      <img src="https://via.placeholder.com/32" alt="avatar" class="w-8 h-8 rounded-full object-cover"/>
    <span class="text-sm">Roh_ul_Hussnain</span>
  
    <svg id="chevron" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
    </svg>
  </button>

  <!-- dropdown -->
  <div id="user-menu" class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg py-1 hidden z-30" role="menu" aria-label="User menu">
    <div class="px-4 py-2 text-xs text-gray-500">Signed in as</div>
    <div class="px-4 pb-2">
      <div class="font-semibold text-sm">Roh_ul_Hussnain</div>
      <div class="text-gray-400 text-xs">Finance</div>
    </div>
    <div class="border-t border-gray-100 my-1"></div>
    <button onclick="handleLogout()" class="w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-2" role="menuitem">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7"/>
      </svg>
      <span class="text-sm text-red-600">Logout</span>
    </button>
  </div>
</div>
<!-- drop down profile log out  -->
<script>
  const userMenuBtn = document.getElementById('user-menu-btn');
  const userMenu = document.getElementById('user-menu');
  const chevron = document.getElementById('chevron');

  function toggleUserMenu() {
    const open = !userMenu.classList.contains('hidden');
    if (open) {
      userMenu.classList.add('hidden');
      chevron.style.transform = 'rotate(0deg)';
      userMenuBtn.setAttribute('aria-expanded', 'false');
    } else {
      userMenu.classList.remove('hidden');
      chevron.style.transform = 'rotate(180deg)';
      userMenuBtn.setAttribute('aria-expanded', 'true');
    }
  }

  // close when clicking outside
  document.addEventListener('click', (e) => {
    if (!userMenu.contains(e.target) && !userMenuBtn.contains(e.target)) {
      if (!userMenu.classList.contains('hidden')) {
        userMenu.classList.add('hidden');
        chevron.style.transform = 'rotate(0deg)';
        userMenuBtn.setAttribute('aria-expanded', 'false');
      }
    }
  });

  function handleLogout() {
    // replace with real logout logic
    alert('Logging out...');
  }
</script>

        </div>
      </header>


      <div class="lg:p-20 py-8">
  <!-- Heading -->
  <h1 class="text-3xl font-bold mb-6">Your Feedback</h1>

  <!-- Select Course -->
  <div class="flex gap-4 mb-6">
    <div class="relative inline-block">
      <button onclick="toggleDropdown()" class="bg-gray-200 px-4 py-2 rounded-md shadow text-sm font-medium focus:outline-none">
        Select Course ▼
      </button>
      <ul id="dropdown" class="absolute mt-2 w-48 bg-white border rounded shadow-lg hidden z-10">
        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">UI/UX Design Basics</li>
        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Figma for Beginners</li>
        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Motion UI Fundamentals</li>
      </ul>
    </div>
    <button class="text-gray-400 font-semibold">Review Feedback</button>
  </div>

  <!-- Feedback Card -->
  <div class="border rounded-xl p-4 mb-4 shadow-sm">
    <div class="flex items-center mb-3 gap-4">
      <img src="https://via.placeholder.com/100x60" class="w-28 rounded-md" alt="Course" />
      <div>
        <h3 class="text-lg font-bold">UI/UX Design Basics</h3>
        <p class="text-sm text-gray-600">Foundations of Modern Interface & User Experience.<br>Total videos: 12</p>
      </div>
    </div>

    <!-- Star Rating -->
    <div class="text-yellow-500 text-lg mb-2">★★★★☆</div>

    <p class="text-sm text-gray-700">
      As someone completely new to UI/UX design👋, I found this course incredibly helpful💡...
      <br><span class="font-semibold">— Fiaz Ali, Beginner Designer</span>
    </p>

    <button class="bg-black text-white mt-4 px-4 py-2 rounded-md hover:bg-gray-900">Upload feedback</button>
  </div>

  <!-- Accordion Questions -->
  <div class="space-y-4">

    <!-- What did you enjoy? -->
    <details class="border rounded-xl p-4">
      <summary class="font-semibold text-lg cursor-pointer">What did you enjoy about this course?</summary>
      <p class="text-sm mt-2 text-gray-600">"Tell us what you liked most — teaching style, structure, content, or overall experience."</p>
    </details>

    <!-- What could be improved? -->
    <details class="border rounded-xl p-4">
      <summary class="font-semibold text-lg cursor-pointer">What could be improved?</summary>
      <p class="text-sm mt-2 text-gray-600">"Suggest any improvements in content, pace, clarity, or anything else."</p>
    </details>

  </div>

  <!-- Recommendation -->
  <div class="mt-6 border rounded-xl p-4 text-center">
    <h2 class="text-lg font-semibold mb-2">Would you recommend this course to others?</h2>
    <p class="text-sm text-gray-600 mb-4">Let us know if you'd suggest this course to your friends, classmates, or colleagues.</p>
    <div class="flex justify-center gap-4">
      <button class="bg-black text-white px-6 py-2 rounded-md hover:bg-gray-900">Yes</button>
      <button class="bg-white border px-6 py-2 rounded-md hover:bg-gray-100">No</button>
    </div>
  </div>

 

  </div>
    </div>
  </div>

  <!-- sidebar menu  -->
  <script>
    const sidebar = document.getElementById('sidebar');
    const menuBtn = document.getElementById('menu-btn');
    const overlay = document.getElementById('overlay');

    function openSidebar() {
      sidebar.classList.remove('-translate-x-full');
      overlay.classList.remove('hidden');
    }
    function closeSidebar() {
      sidebar.classList.add('-translate-x-full');
      overlay.classList.add('hidden');
    }

    menuBtn.addEventListener('click', () => {
      if (sidebar.classList.contains('-translate-x-full')) {
        openSidebar();
      } else {
        closeSidebar();
      }
    });

    overlay.addEventListener('click', closeSidebar);
  </script>


 <!-- Script for dropdown -->
  <script>
    function toggleDropdown() {
      const dropdown = document.getElementById('dropdown');
      dropdown.classList.toggle('hidden');
    }

    window.addEventListener('click', function(e) {
      const dropdown = document.getElementById('dropdown');
      if (!e.target.matches('button')) {
        dropdown.classList.add('hidden');
      }
    });
  </script>

</body>
</html>
