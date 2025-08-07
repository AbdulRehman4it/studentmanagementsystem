<?php require_once "inc/header.php"; ?>
<body class="bg-gray-50 font-sans antialiased">
  <div class="min-h-screen flex">
  <?php require_once "inc/sidebar.php"; ?>

    <!-- Overlay for mobile when sidebar open -->
    <div id="overlay" class="fixed inset-0 bg-black/30 z-10 hidden md:hidden"></div>

    <!-- Main content area -->
    <div class="flex-1 flex flex-col ml-0 md:ml-64 overflow-hidden">
      <!-- top bar -->
        <?php require_once "inc/topbar.php"; ?>
   <div class="p-6">
    <div class="flex items-center justify-between mb-6">
      <h1 class="text-3xl font-bold">Material</h1>
      <div class="mt-3 sm:mt-0">
        <button class="inline-flex items-center gap-2 bg-black hover:bg-white hover:text-black text-white text-sm font-medium px-4 py-2 rounded-lg shadow">
          + Add Material
        </button>
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <!-- Card template -->
      <div class="relative bg-white border border-gray-300 rounded-2xl shadow p-5 flex flex-col">
        <!-- More options -->
        <div class="absolute top-4 right-4 flex flex-col items-center gap-1">
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
        </div>

        <!-- Icon -->
        <div class="mt-6 mb-3 flex justify-center">
          <div class="w-20 h-20 rounded-full border border-gray-300 flex items-center justify-center shadow-sm bg-white">
            <!-- Placeholder for app icon -->
            <img src="https://via.placeholder.com/60" alt="app icon" class="w-12 h-12 object-contain" />
          </div>
        </div>

        <!-- Title & timestamp -->
        <div class="mt-2">
          <div class="font-semibold text-lg">App School.Fig</div>
          <div class="text-xs text-gray-500 mt-1">10:08 PM, 10 Oct</div>
        </div>

        <div class="flex-1"></div>

        <!-- Size -->
        <div class="mt-4 self-end text-sm font-medium text-gray-700">
          2 GB
        </div>
      </div>

      <!-- Duplicate cards for demonstration -->
      <div class="relative bg-white border border-gray-300 rounded-2xl shadow p-5 flex flex-col">
        <div class="absolute top-4 right-4 flex flex-col items-center gap-1">
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
        </div>
        <div class="mt-6 mb-3 flex justify-center">
          <div class="w-20 h-20 rounded-full border border-gray-300 flex items-center justify-center shadow-sm bg-white">
            <img src="https://via.placeholder.com/60" alt="app icon" class="w-12 h-12 object-contain" />
          </div>
        </div>
        <div class="mt-2">
          <div class="font-semibold text-lg">App School.Fig</div>
          <div class="text-xs text-gray-500 mt-1">10:08 PM, 10 Oct</div>
        </div>
        <div class="flex-1"></div>
        <div class="mt-4 self-end text-sm font-medium text-gray-700">
          2 GB
        </div>
      </div>

      <div class="relative bg-white border border-gray-300 rounded-2xl shadow p-5 flex flex-col">
        <div class="absolute top-4 right-4 flex flex-col items-center gap-1">
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
        </div>
        <div class="mt-6 mb-3 flex justify-center">
          <div class="w-20 h-20 rounded-full border border-gray-300 flex items-center justify-center shadow-sm bg-white">
            <img src="https://via.placeholder.com/60" alt="app icon" class="w-12 h-12 object-contain" />
          </div>
        </div>
        <div class="mt-2">
          <div class="font-semibold text-lg">App School.Fig</div>
          <div class="text-xs text-gray-500 mt-1">10:08 PM, 10 Oct</div>
        </div>
        <div class="flex-1"></div>
        <div class="mt-4 self-end text-sm font-medium text-gray-700">
          2 GB
        </div>
      </div>

      <div class="relative bg-white border border-gray-300 rounded-2xl shadow p-5 flex flex-col">
        <div class="absolute top-4 right-4 flex flex-col items-center gap-1">
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
        </div>
        <div class="mt-6 mb-3 flex justify-center">
          <div class="w-20 h-20 rounded-full border border-gray-300 flex items-center justify-center shadow-sm bg-white">
            <img src="https://via.placeholder.com/60" alt="app icon" class="w-12 h-12 object-contain" />
          </div>
        </div>
        <div class="mt-2">
          <div class="font-semibold text-lg">App School.Fig</div>
          <div class="text-xs text-gray-500 mt-1">10:08 PM, 10 Oct</div>
        </div>
        <div class="flex-1"></div>
        <div class="mt-4 self-end text-sm font-medium text-gray-700">
          2 GB
        </div>
      </div>

      <!-- add more cards as needed -->
    </div>

     <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
      <!-- Card template -->
      <div class="relative bg-white border border-gray-300 rounded-2xl shadow p-5 flex flex-col">
        <!-- More options -->
        <div class="absolute top-4 right-4 flex flex-col items-center gap-1">
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
        </div>

        <!-- Icon -->
        <div class="mt-6 mb-3 flex justify-center">
          <div class="w-20 h-20 rounded-full border border-gray-300 flex items-center justify-center shadow-sm bg-white">
            <!-- Placeholder for app icon -->
            <img src="https://via.placeholder.com/60" alt="app icon" class="w-12 h-12 object-contain" />
          </div>
        </div>

        <!-- Title & timestamp -->
        <div class="mt-2">
          <div class="font-semibold text-lg">App School.Fig</div>
          <div class="text-xs text-gray-500 mt-1">10:08 PM, 10 Oct</div>
        </div>

        <div class="flex-1"></div>

        <!-- Size -->
        <div class="mt-4 self-end text-sm font-medium text-gray-700">
          2 GB
        </div>
      </div>

      <!-- Duplicate cards for demonstration -->
      <div class="relative bg-white border border-gray-300 rounded-2xl shadow p-5 flex flex-col">
        <div class="absolute top-4 right-4 flex flex-col items-center gap-1">
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
        </div>
        <div class="mt-6 mb-3 flex justify-center">
          <div class="w-20 h-20 rounded-full border border-gray-300 flex items-center justify-center shadow-sm bg-white">
            <img src="https://via.placeholder.com/60" alt="app icon" class="w-12 h-12 object-contain" />
          </div>
        </div>
        <div class="mt-2">
          <div class="font-semibold text-lg">App School.Fig</div>
          <div class="text-xs text-gray-500 mt-1">10:08 PM, 10 Oct</div>
        </div>
        <div class="flex-1"></div>
        <div class="mt-4 self-end text-sm font-medium text-gray-700">
          2 GB
        </div>
      </div>

      <div class="relative bg-white border border-gray-300 rounded-2xl shadow p-5 flex flex-col">
        <div class="absolute top-4 right-4 flex flex-col items-center gap-1">
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
        </div>
        <div class="mt-6 mb-3 flex justify-center">
          <div class="w-20 h-20 rounded-full border border-gray-300 flex items-center justify-center shadow-sm bg-white">
            <img src="https://via.placeholder.com/60" alt="app icon" class="w-12 h-12 object-contain" />
          </div>
        </div>
        <div class="mt-2">
          <div class="font-semibold text-lg">App School.Fig</div>
          <div class="text-xs text-gray-500 mt-1">10:08 PM, 10 Oct</div>
        </div>
        <div class="flex-1"></div>
        <div class="mt-4 self-end text-sm font-medium text-gray-700">
          2 GB
        </div>
      </div>

      <div class="relative bg-white border border-gray-300 rounded-2xl shadow p-5 flex flex-col">
        <div class="absolute top-4 right-4 flex flex-col items-center gap-1">
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
        </div>
        <div class="mt-6 mb-3 flex justify-center">
          <div class="w-20 h-20 rounded-full border border-gray-300 flex items-center justify-center shadow-sm bg-white">
            <img src="https://via.placeholder.com/60" alt="app icon" class="w-12 h-12 object-contain" />
          </div>
        </div>
        <div class="mt-2">
          <div class="font-semibold text-lg">App School.Fig</div>
          <div class="text-xs text-gray-500 mt-1">10:08 PM, 10 Oct</div>
        </div>
        <div class="flex-1"></div>
        <div class="mt-4 self-end text-sm font-medium text-gray-700">
          2 GB
        </div>
      </div>

      <!-- add more cards as needed -->
    </div>

     <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
      <!-- Card template -->
      <div class="relative bg-white border border-gray-300 rounded-2xl shadow p-5 flex flex-col">
        <!-- More options -->
        <div class="absolute top-4 right-4 flex flex-col items-center gap-1">
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
        </div>

        <!-- Icon -->
        <div class="mt-6 mb-3 flex justify-center">
          <div class="w-20 h-20 rounded-full border border-gray-300 flex items-center justify-center shadow-sm bg-white">
            <!-- Placeholder for app icon -->
            <img src="https://via.placeholder.com/60" alt="app icon" class="w-12 h-12 object-contain" />
          </div>
        </div>

        <!-- Title & timestamp -->
        <div class="mt-2">
          <div class="font-semibold text-lg">App School.Fig</div>
          <div class="text-xs text-gray-500 mt-1">10:08 PM, 10 Oct</div>
        </div>

        <div class="flex-1"></div>

        <!-- Size -->
        <div class="mt-4 self-end text-sm font-medium text-gray-700">
          2 GB
        </div>
      </div>

      <!-- Duplicate cards for demonstration -->
      <div class="relative bg-white border border-gray-300 rounded-2xl shadow p-5 flex flex-col">
        <div class="absolute top-4 right-4 flex flex-col items-center gap-1">
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
        </div>
        <div class="mt-6 mb-3 flex justify-center">
          <div class="w-20 h-20 rounded-full border border-gray-300 flex items-center justify-center shadow-sm bg-white">
            <img src="https://via.placeholder.com/60" alt="app icon" class="w-12 h-12 object-contain" />
          </div>
        </div>
        <div class="mt-2">
          <div class="font-semibold text-lg">App School.Fig</div>
          <div class="text-xs text-gray-500 mt-1">10:08 PM, 10 Oct</div>
        </div>
        <div class="flex-1"></div>
        <div class="mt-4 self-end text-sm font-medium text-gray-700">
          2 GB
        </div>
      </div>

      <div class="relative bg-white border border-gray-300 rounded-2xl shadow p-5 flex flex-col">
        <div class="absolute top-4 right-4 flex flex-col items-center gap-1">
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
        </div>
        <div class="mt-6 mb-3 flex justify-center">
          <div class="w-20 h-20 rounded-full border border-gray-300 flex items-center justify-center shadow-sm bg-white">
            <img src="https://via.placeholder.com/60" alt="app icon" class="w-12 h-12 object-contain" />
          </div>
        </div>
        <div class="mt-2">
          <div class="font-semibold text-lg">App School.Fig</div>
          <div class="text-xs text-gray-500 mt-1">10:08 PM, 10 Oct</div>
        </div>
        <div class="flex-1"></div>
        <div class="mt-4 self-end text-sm font-medium text-gray-700">
          2 GB
        </div>
      </div>

      <div class="relative bg-white border border-gray-300 rounded-2xl shadow p-5 flex flex-col">
        <div class="absolute top-4 right-4 flex flex-col items-center gap-1">
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
          <div class="w-1.5 h-1.5 bg-gray-400 rounded-full"></div>
        </div>
        <div class="mt-6 mb-3 flex justify-center">
          <div class="w-20 h-20 rounded-full border border-gray-300 flex items-center justify-center shadow-sm bg-white">
            <img src="https://via.placeholder.com/60" alt="app icon" class="w-12 h-12 object-contain" />
          </div>
        </div>
        <div class="mt-2">
          <div class="font-semibold text-lg">App School.Fig</div>
          <div class="text-xs text-gray-500 mt-1">10:08 PM, 10 Oct</div>
        </div>
        <div class="flex-1"></div>
        <div class="mt-4 self-end text-sm font-medium text-gray-700">
          2 GB
        </div>
      </div>

      <!-- add more cards as needed -->
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
