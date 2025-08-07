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
          <img src="../assets/img/logodashboard.png" class="w-20 md:hidden block" alt="">
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
  <div class="p-6">
    <h1 class="text-2xl font-bold mb-6">Provide Certification</h1>

    <!-- List of Courses -->
    <div class="space-y-4">
      <!-- Card Item -->
      <div class="bg-white rounded-2xl shadow flex items-center justify-between p-6">
        <p class="font-semibold text-sm sm:text-base">INTRODUCTION TO FINANCIAL MARKETS</p>
        <button class="bg-black text-white px-4 py-2 rounded-md text-sm hover:bg-gray-800 transition">
          + Upload Certificate
        </button>
      </div>

      <!-- Repeat for other courses -->
      <div class="bg-white rounded-2xl shadow flex items-center justify-between p-6">
        <p class="font-semibold text-sm sm:text-base">WEB DEVELOPMENT WITH HTML, CSS & JAVASCRIPT</p>
        <button class="bg-black text-white px-4 py-2 rounded-md text-sm hover:bg-gray-800 transition">
          + Upload Certificate
        </button>
      </div>

      <div class="bg-white rounded-2xl shadow flex items-center justify-between p-6">
        <p class="font-semibold text-sm sm:text-base">GRAPHIC DESIGN WITH ADOBE PHOTOSHOP</p>
        <button class="bg-black text-white px-4 py-2 rounded-md text-sm hover:bg-gray-800 transition">
          + Upload Certificate
        </button>
      </div>

      <div class="bg-white rounded-2xl shadow flex items-center justify-between p-6">
        <p class="font-semibold text-sm sm:text-base">SEO CRASH COURSE: RANK #1 ON GOOGLE</p>
        <button class="bg-black text-white px-4 py-2 rounded-md text-sm hover:bg-gray-800 transition">
          + Upload Certificate
        </button>
      </div>

      <div class="bg-white rounded-2xl shadow flex items-center justify-between p-6">
        <p class="font-semibold text-sm sm:text-base">PUBLIC SPEAKING & CONFIDENCE BUILDING</p>
        <button class="bg-black text-white px-4 py-2 rounded-md text-sm hover:bg-gray-800 transition">
          + Upload Certificate
        </button>
      </div>

      <div class="bg-white rounded-2xl shadow flex items-center justify-between p-6">
        <p class="font-semibold text-sm sm:text-base">INSTAGRAM REELS & SHORTS CREATION</p>
        <button class="bg-black text-white px-4 py-2 rounded-md text-sm hover:bg-gray-800 transition">
          + Upload Certificate
        </button>
      </div>
    </div>

    <!-- Pagination -->
    <div class="flex justify-between items-center mt-8 text-sm text-gray-600">
      <button class="hover:text-black">&larr;</button>
      <span>Page 1 of 10</span>
      <button class="hover:text-black">&rarr;</button>
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

  <script src="https://kit.fontawesome.com/a2ada4947c.js" crossorigin="anonymous"></script>
</body>
</html>
