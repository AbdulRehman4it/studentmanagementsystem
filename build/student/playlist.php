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

      <!-- scrollable content -->
       <div class="flex gap-10 justify-between overflow-y-auto px-6 py-6">

        <div class="lg:w-2/3 w-full">
          <div class="card bg-white rounded-2xl overflow-hidden">
            <div class="h-60 sm:h-72 bg-[url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1600&q=80')] bg-center bg-cover"></div>
            <div class="p-6">
              <div class="flex items-start gap-4 mb-2">
                <h1 class="text-2xl font-bold flex-1">Freelancing 101: Building a Successful UX Design Career . . .</h1>
              </div>
              <div class="flex items-center gap-4 mb-4">
                <div class="flex items-center gap-3">
                  <img src="https://via.placeholder.com/40" alt="author" class="w-10 h-10 rounded-full object-cover" />
                  <div>
                    <div class="font-semibold">Rooh ul Hussnain</div>
                    <div class="text-gray-500 text-xs">Web Designer</div>
                  </div>
                </div>
                <div class="ml-auto">
                  <button class="flex items-center gap-2 border rounded-full px-4 py-2 text-sm">
                    Follow with 889k
                    <span class="inline-flex items-center justify-center bg-black text-white rounded-full w-6 h-6">+</span>
                  </button>
                </div>
              </div>
              <p class="text-gray-600 leading-relaxed mb-6 text-sm">
                In this video, we’ll guide you step by step — from learning the right programming languages to building real-world projects that get you hired or help you freelance. Whether you're just starting out or leveling up your skills, this guide is designed for you. We’ll cover front-end vs back-end, essential tools, portfolio tips, and career paths. Start building your future today — your journey to becoming a pro developer begins here!
              </p>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <div class="font-semibold mb-2">🚀 What You’ll Learn:</div>
                  <ul class="list-disc list-inside text-gray-700 space-y-1 text-sm">
                    <li>Top programming languages to learn in 2025.</li>
                    <li>Front-end vs Back-end – what’s best for you.</li>
                    <li>Tools and platforms every developer must know.</li>
                    <li>How to build a powerful portfolio.</li>
                    <li>Freelancing, remote jobs, and full-time roles.</li>
                    <li>Developer mindset and productivity tips.</li>
                  </ul>
                </div>
                <div>
                  <div class="font-semibold mb-2 invisible">placeholder</div>
                  <ul class="list-disc list-inside text-gray-700 space-y-1 text-sm">
                    <li>Top programming languages to learn in 2025.</li>
                    <li>Front-end vs Back-end – what’s best for you.</li>
                    <li>Tools and platforms every developer must know.</li>
                    <li>How to build a powerful portfolio.</li>
                    <li>Freelancing, remote jobs, and full-time roles.</li>
                    <li>Developer mindset and productivity tips.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

             <aside class="hidden lg:flex flex-col  inset-y-0 right-0 w-1/3 bg-white border-l border-gray-200 px-4 py-6 playlist-scroll">
      <div class="flex items-start justify-between mb-4">
        <div>
          <h2 class="text-xl font-bold">Playlist</h2>
          <p class="text-gray-500 text-xs mt-1">Feel the rhythm, live the moment. This playlist is your perfect companion for every mood.</p>
        </div>
        <button class="text-xs px-3 py-1 border rounded-md self-start">See More</button>
      </div>
      <div class="space-y-3">
        <div class="flex items-center bg-white rounded-xl overflow-hidden shadow">
          <div class="flex-1 p-3">
            <p class="text-xs">Feel the rhythm, live the moment. This playlist is your perfect companion for every mood.</p>
          </div>
          <div class="w-24 h-16 flex-shrink-0">
            <img src="https://images.unsplash.com/photo-1581091012184-7d70c6b6d0f6?auto=format&fit=crop&w=200&q=60" alt="thumb" class="object-cover w-full h-full" />
          </div>
        </div>
        <div class="flex items-center bg-gray-100 rounded-xl overflow-hidden">
          <div class="flex-1 p-3">
            <p class="text-xs">Feel the rhythm, live the moment. This playlist is your perfect companion for every mood.</p>
          </div>
          <div class="w-24 h-16 flex-shrink-0">
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=200&q=60" alt="thumb" class="object-cover w-full h-full" />
          </div>
        </div>
        <div class="flex items-center bg-white rounded-xl overflow-hidden shadow">
          <div class="flex-1 p-3">
            <p class="text-xs">Feel the rhythm, live the moment. This playlist is your perfect companion for every mood.</p>
          </div>
          <div class="w-24 h-16 flex-shrink-0">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=200&q=60" alt="thumb" class="object-cover w-full h-full" />
          </div>
        </div>
        <div class="flex items-center bg-gray-100 rounded-xl overflow-hidden">
          <div class="flex-1 p-3">
            <p class="text-xs">Feel the rhythm, live the moment. This playlist is your perfect companion for every mood.</p>
          </div>
          <div class="w-24 h-16 flex-shrink-0">
            <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&fit=crop&w=200&q=60" alt="thumb" class="object-cover w-full h-full" />
          </div>
        </div>
      </div>
    </aside>
      </div> <!-- end central scrollable -->
    </div>
  </div>

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
</body>
</html>
