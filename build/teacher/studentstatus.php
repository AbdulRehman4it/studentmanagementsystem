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
  <div class=" p-6">
    <div class="bg-white rounded-2xl shadow overflow-hidden">
      <div class="px-6 py-5 border-b">
        <h1 class="text-2xl font-bold">Student Status Overview</h1>
      </div>
      <div class="w-full overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-100">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-semibold uppercase text-gray-600 whitespace-nowrap">Student Name</th>
              <th class="px-6 py-3 text-left text-xs font-semibold uppercase text-gray-600 whitespace-nowrap">Status</th>
              <th class="px-6 py-3 text-left text-xs font-semibold uppercase text-gray-600 whitespace-nowrap">Last Active</th>
              <th class="px-6 py-3 text-left text-xs font-semibold uppercase text-gray-600 whitespace-nowrap">Enrolled Course</th>
              <th class="px-6 py-3 text-left text-xs font-semibold uppercase text-gray-600 whitespace-nowrap">Completion %</th>
              <th class="px-6 py-3 text-left text-xs font-semibold uppercase text-gray-600 whitespace-nowrap">Grade</th>
              <th class="px-6 py-3 text-left text-xs font-semibold uppercase text-gray-600 whitespace-nowrap">Certificate</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200 text-sm">
            <!-- Row template -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">Ahmad Raza</td>
              <td class="px-6 py-4 whitespace-nowrap flex items-center gap-2">
                <span class="inline-block w-3 h-3 rounded-full bg-green-500"></span>
                <span>Online</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">3 mins ago</td>
              <td class="px-6 py-4 whitespace-nowrap">UIUX101</td>
              <td class="px-6 py-4 whitespace-nowrap">100%</td>
              <td class="px-6 py-4 whitespace-nowrap">A</td>
              <td class="px-6 py-4 whitespace-nowrap flex items-center gap-1">
                <span class="text-green-600">✅</span>
                <span class="text-gray-700">Issued</span>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">Sana Iqbal</td>
              <td class="px-6 py-4 whitespace-nowrap flex items-center gap-2">
                <span class="inline-block w-3 h-3 rounded-full bg-red-500"></span>
                <span>Offline</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">Today, 1:30 PM</td>
              <td class="px-6 py-4 whitespace-nowrap">WD202</td>
              <td class="px-6 py-4 whitespace-nowrap">85%</td>
              <td class="px-6 py-4 whitespace-nowrap">A</td>
              <td class="px-6 py-4 whitespace-nowrap flex items-center gap-1">
                <span class="text-red-500">✖</span>
                <span class="text-gray-700">Not Yet</span>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">Bilal Khan</td>
              <td class="px-6 py-4 whitespace-nowrap flex items-center gap-2">
                <span class="inline-block w-3 h-3 rounded-full bg-green-500"></span>
                <span>Online</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">10 secs ago</td>
              <td class="px-6 py-4 whitespace-nowrap">UIUX101</td>
              <td class="px-6 py-4 whitespace-nowrap">100%</td>
              <td class="px-6 py-4 whitespace-nowrap">F</td>
              <td class="px-6 py-4 whitespace-nowrap flex items-center gap-1">
                <span class="text-green-600">✅</span>
                <span class="text-gray-700">Issued</span>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">Hina Shah</td>
              <td class="px-6 py-4 whitespace-nowrap flex items-center gap-2">
                <span class="inline-block w-3 h-3 rounded-full bg-green-500"></span>
                <span>Online</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">Yesterday, 9:00 PM</td>
              <td class="px-6 py-4 whitespace-nowrap">JS303</td>
              <td class="px-6 py-4 whitespace-nowrap">43%</td>
              <td class="px-6 py-4 whitespace-nowrap">F</td>
              <td class="px-6 py-4 whitespace-nowrap flex items-center gap-1">
                <span class="text-red-500">✖</span>
                <span class="text-gray-700">Not Yet</span>
              </td>
            </tr>
            <!-- repeat similar rows -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">Sana Iqbal</td>
              <td class="px-6 py-4 whitespace-nowrap flex items-center gap-2">
                <span class="inline-block w-3 h-3 rounded-full bg-red-500"></span>
                <span>Offline</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">Today, 11:10 AM</td>
              <td class="px-6 py-4 whitespace-nowrap">WD202</td>
              <td class="px-6 py-4 whitespace-nowrap">85%</td>
              <td class="px-6 py-4 whitespace-nowrap">C</td>
              <td class="px-6 py-4 whitespace-nowrap flex items-center gap-1">
                <span class="text-red-500">✖</span>
                <span class="text-gray-700">Not Yet</span>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">Ahmad Raza</td>
              <td class="px-6 py-4 whitespace-nowrap flex items-center gap-2">
                <span class="inline-block w-3 h-3 rounded-full bg-red-500"></span>
                <span>Offline</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">3 mins ago</td>
              <td class="px-6 py-4 whitespace-nowrap">WD202</td>
              <td class="px-6 py-4 whitespace-nowrap">72%</td>
              <td class="px-6 py-4 whitespace-nowrap">A+</td>
              <td class="px-6 py-4 whitespace-nowrap flex items-center gap-1">
                <span class="text-red-500">✖</span>
                <span class="text-gray-700">Not Yet</span>
              </td>
            </tr>
            <!-- more rows as needed -->
          </tbody>
        </table>
      </div>
      <div class="py-4 flex justify-center items-center border-t text-sm text-gray-500">
        <div class="flex items-center gap-6">
          <button class="p-2 rounded-full bg-gray-100 hover:bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
          </button>
          <div>Page 1 of 10</div>
          <button class="p-2 rounded-full bg-gray-100 hover:bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
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

  <script src="https://kit.fontawesome.com/a2ada4947c.js" crossorigin="anonymous"></script>
</body>
</html>
