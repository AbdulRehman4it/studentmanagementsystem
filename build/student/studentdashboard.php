<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Responsive Dashboard</title>
 <link rel="stylesheet" href="../assets/css/style.css">
  <style>
    .card {
      filter: drop-shadow(0 10px 15px rgba(0,0,0,0.08));
    }
  </style>
</head>
<body class="bg-gray-50 font-sans antialiased">
  <div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside id="sidebar" class="fixed inset-y-0 left-0 z-20 w-64 bg-white border-r border-gray-200 px-4 py-6 transform -translate-x-full transition-transform duration-300 ease-in-out md:translate-x-0">
      <div class="items-center mb-8">

        <img src="../assets/img/logodashboard.png" class="w-36" alt="">
 
      </div>
      <div class="space-y-2">
        <a href="./studentdashboard.html" class="flex items-center px-3 py-2 rounded-md active">
          <span class="mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h7v7H3V3zm11 0h7v4h-7V3zm0 6h7v11h-7V9zm-11 9h7v2H3v-2z" />
            </svg>
          </span>
          Dashboard
        </a>
        <a href="./playlist.html" class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100">
          <span class="mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 4H7a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v10a2 2 0 01-2 2z" />
            </svg>
          </span>
          Playlist
        </a>
        <a href="./assignment.html" class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100">
          <span class="mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 4H7a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v10a2 2 0 01-2 2z" />
            </svg>
          </span>
          Assignments
        </a>
        <a href="./certificate.html" class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100">
          <span class="mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 4H7a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v10a2 2 0 01-2 2z" />
            </svg>
          </span>
          Certificates
        </a>
        <a href="./faqs.html" class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100">
          <span class="mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M5 5h14v14H5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
            </svg>
          </span>
          Faqs
        </a>
        <a href="./feedback.html" class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100">
          <span class="mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M12 4.354a4 4 0 110 7.292M12 16v2m0 4h.01" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
            </svg>
          </span>
          Feedback
        </a>
        <div class="mt-6">
          <a href="../index.html" class="flex items-center px-3 py-2 rounded-md text-red-600 hover:bg-red-50">
            <span class="mr-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M17 16l4-4m0 0l-4-4m4 4H7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
              </svg>
            </span>
            Logout
          </a>
        </div>
      </div>
    </aside>

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
      <div class="flex-1 overflow-y-auto">
        <!-- hero/banner -->
        <section class="px-4 py-6">
          <h1 class="text-4xl pb-10 font-bold">Dashboard</h1>
          <div class="rounded-xl bg-neutral-900 text-white p-6 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div class="flex-1">
              <div class="text-sm uppercase tracking-wide mb-1">Online Course</div>
              <h2 class="text-3xl font-bold leading-tight">Every expert was once a beginner — start your journey now.</h2>
            </div>
            <div class="mt-4 md:mt-0">
              <button class="inline-flex items-center gap-2 bg-white text-black px-6 py-3 rounded-full font-medium shadow">
                Join Now
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
              </button>
            </div>
          </div>
        </section>

        <!-- cards grid -->
        <main class="px-4 pb-8">
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- card example -->
            <div class="card bg-white rounded-2xl overflow-hidden relative">
              <div class="h-32 bg-[url('https://images.unsplash.com/photo-1581091012184-7d70c6b6d0f6?auto=format&fit=crop&w=600&q=60')] bg-cover bg-center"></div>
              <div class="p-4">
                <div class="text-xs uppercase font-semibold text-gray-500 mb-1">Trader</div>
                <h3 class="font-medium text-base mb-2">Beginner’s Guide To Becoming A Professional In Finance</h3>
                <div class="flex items-center space-x-2 mb-3">
                  <img src="https://via.placeholder.com/28" alt="author" class="w-7 h-7 rounded-full object-cover"/>
                  <div class="text-xs">
                    <div class="font-semibold">Muhammad Fiaz</div>
                    <div class="text-gray-400">Stock Trader</div>
                  </div>
                </div>
                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="w-1/3 h-full bg-gray-400"></div>
                </div>
              </div>
            </div>

             <div class="card bg-white rounded-2xl overflow-hidden relative">
              <div class="h-32 bg-[url('https://images.unsplash.com/photo-1581091012184-7d70c6b6d0f6?auto=format&fit=crop&w=600&q=60')] bg-cover bg-center"></div>
              <div class="p-4">
                <div class="text-xs uppercase font-semibold text-gray-500 mb-1">Trader</div>
                <h3 class="font-medium text-base mb-2">Beginner’s Guide To Becoming A Professional In Finance</h3>
                <div class="flex items-center space-x-2 mb-3">
                  <img src="https://via.placeholder.com/28" alt="author" class="w-7 h-7 rounded-full object-cover"/>
                  <div class="text-xs">
                    <div class="font-semibold">Muhammad Fiaz</div>
                    <div class="text-gray-400">Stock Trader</div>
                  </div>
                </div>
                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="w-1/3 h-full bg-gray-400"></div>
                </div>
              </div>
            </div>


             <div class="card bg-white rounded-2xl overflow-hidden relative">
              <div class="h-32 bg-[url('https://images.unsplash.com/photo-1581091012184-7d70c6b6d0f6?auto=format&fit=crop&w=600&q=60')] bg-cover bg-center"></div>
              <div class="p-4">
                <div class="text-xs uppercase font-semibold text-gray-500 mb-1">Trader</div>
                <h3 class="font-medium text-base mb-2">Beginner’s Guide To Becoming A Professional In Finance</h3>
                <div class="flex items-center space-x-2 mb-3">
                  <img src="https://via.placeholder.com/28" alt="author" class="w-7 h-7 rounded-full object-cover"/>
                  <div class="text-xs">
                    <div class="font-semibold">Muhammad Fiaz</div>
                    <div class="text-gray-400">Stock Trader</div>
                  </div>
                </div>
                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="w-1/3 h-full bg-gray-400"></div>
                </div>
              </div>
            </div>

             <div class="card bg-white rounded-2xl overflow-hidden relative">
              <div class="h-32 bg-[url('https://images.unsplash.com/photo-1581091012184-7d70c6b6d0f6?auto=format&fit=crop&w=600&q=60')] bg-cover bg-center"></div>
              <div class="p-4">
                <div class="text-xs uppercase font-semibold text-gray-500 mb-1">Trader</div>
                <h3 class="font-medium text-base mb-2">Beginner’s Guide To Becoming A Professional In Finance</h3>
                <div class="flex items-center space-x-2 mb-3">
                  <img src="https://via.placeholder.com/28" alt="author" class="w-7 h-7 rounded-full object-cover"/>
                  <div class="text-xs">
                    <div class="font-semibold">Muhammad Fiaz</div>
                    <div class="text-gray-400">Stock Trader</div>
                  </div>
                </div>
                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="w-1/3 h-full bg-gray-400"></div>
                </div>
              </div>
            </div>

            <!-- more cards (copy/paste or dynamically render) -->
            <div class="card bg-white rounded-2xl overflow-hidden relative">
              <div class="h-32 bg-[url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=60')] bg-cover bg-center"></div>
              <div class="p-4">
                <div class="text-xs uppercase font-semibold text-gray-500 mb-1">Developer</div>
                <h3 class="font-medium text-base mb-2">Beginner’s Guide To Becoming A Professional Frontend Developer</h3>
                <div class="flex items-center space-x-2 mb-3">
                  <img src="https://via.placeholder.com/28" alt="author" class="w-7 h-7 rounded-full object-cover"/>
                  <div class="text-xs">
                    <div class="font-semibold">Muhammad Sufyan</div>
                    <div class="text-gray-400">Web Developer</div>
                  </div>
                </div>
                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="w-1/2 h-full bg-gray-400"></div>
                </div>
              </div>
            </div>

            <div class="card bg-white rounded-2xl overflow-hidden relative">
              <div class="h-32 bg-[url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=60')] bg-cover bg-center"></div>
              <div class="p-4">
                <div class="text-xs uppercase font-semibold text-gray-500 mb-1">Designer</div>
                <h3 class="font-medium text-base mb-2">Step-By-Step Guide To Start Your Career In UI/UX Designer</h3>
                <div class="flex items-center space-x-2 mb-3">
                  <img src="https://via.placeholder.com/28" alt="author" class="w-7 h-7 rounded-full object-cover"/>
                  <div class="text-xs">
                    <div class="font-semibold">Ali Raza</div>
                    <div class="text-gray-400">Skill</div>
                  </div>
                </div>
                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="w-1/4 h-full bg-gray-400"></div>
                </div>
              </div>
            </div>

            <div class="card bg-white rounded-2xl overflow-hidden relative">
              <div class="h-32 bg-[url('https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&fit=crop&w=600&q=60')] bg-cover bg-center"></div>
              <div class="p-4">
                <div class="text-xs uppercase font-semibold text-gray-500 mb-1">Finance</div>
                <h3 class="font-medium text-base mb-2">Beginner’s Guide To Becoming A Professional In Finance</h3>
                <div class="flex items-center space-x-2 mb-3">
                  <img src="https://via.placeholder.com/28" alt="author" class="w-7 h-7 rounded-full object-cover"/>
                  <div class="text-xs">
                    <div class="font-semibold">Rooh Ul Hussnain</div>
                    <div class="text-gray-400">Finance</div>
                  </div>
                </div>
                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="w-2/3 h-full bg-gray-400"></div>
                </div>
              </div>
            </div>

            <!-- additional duplicates as needed -->
          </div>
        </main>
      </div>
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
