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

   <div class="max-w-full px-4 py-6">
  <div class="text-2xl font-bold mb-4">Course Grading Overview</div>

  <div class="overflow-x-auto rounded-xl shadow">
    <table class="min-w-[800px] w-full text-left bg-white border-collapse">
      <thead class="bg-gray-100 text-sm font-semibold text-gray-700">
        <tr>
          <th class="p-4"><input type="checkbox" /></th>
          <th class="p-4">Course Code</th>
          <th class="p-4">Username</th>
          <th class="p-4">Total Marks</th>
          <th class="p-4">Obtained Marks</th>
          <th class="p-4">Percentage</th>
          <th class="p-4">Grade</th>
          <th class="p-4">Status</th>
        </tr>
      </thead>
      <tbody class="text-sm text-gray-800">
        <!-- Row 1 -->
        <tr class="border-b">
          <td class="p-4"><input type="checkbox" /></td>
          <td class="p-4">UIUX101</td>
          <td class="p-4 flex items-center gap-2">
            <img src="https://i.pravatar.cc/30?img=1" class="w-6 h-6 rounded-full" />
            jack99
          </td>
          <td class="p-4">100</td>
          <td class="p-4">88</td>
          <td class="p-4">88%</td>
          <td class="p-4">A</td>
          <td class="p-4 text-green-600 font-medium">Passed ✅</td>
        </tr>

         <tr class="border-b">
          <td class="p-4"><input type="checkbox" /></td>
          <td class="p-4">UIUX101</td>
          <td class="p-4 flex items-center gap-2">
            <img src="https://i.pravatar.cc/30?img=1" class="w-6 h-6 rounded-full" />
            jack99
          </td>
          <td class="p-4">100</td>
          <td class="p-4">88</td>
          <td class="p-4">88%</td>
          <td class="p-4">A</td>
          <td class="p-4 text-green-600 font-medium">Passed ✅</td>
        </tr>

         <tr class="border-b">
          <td class="p-4"><input type="checkbox" /></td>
          <td class="p-4">UIUX101</td>
          <td class="p-4 flex items-center gap-2">
            <img src="https://i.pravatar.cc/30?img=1" class="w-6 h-6 rounded-full" />
            jack99
          </td>
          <td class="p-4">100</td>
          <td class="p-4">88</td>
          <td class="p-4">88%</td>
          <td class="p-4">A</td>
          <td class="p-4 text-green-600 font-medium">Passed ✅</td>
        </tr>

         <tr class="border-b">
          <td class="p-4"><input type="checkbox" /></td>
          <td class="p-4">UIUX101</td>
          <td class="p-4 flex items-center gap-2">
            <img src="https://i.pravatar.cc/30?img=1" class="w-6 h-6 rounded-full" />
            jack99
          </td>
          <td class="p-4">100</td>
          <td class="p-4">88</td>
          <td class="p-4">88%</td>
          <td class="p-4">A</td>
          <td class="p-4 text-green-600 font-medium">Passed ✅</td>
        </tr>
        <!-- Add more rows similarly... -->

        <!-- Example Failed Row -->
        <tr class="border-b">
          <td class="p-4"><input type="checkbox" /></td>
          <td class="p-4">WD202</td>
          <td class="p-4 flex items-center gap-2">
            <img src="https://i.pravatar.cc/30?img=2" class="w-6 h-6 rounded-full" />
            tom_dev
          </td>
          <td class="p-4">100</td>
          <td class="p-4">52</td>
          <td class="p-4">52%</td>
          <td class="p-4">A</td>
          <td class="p-4 text-red-600 font-medium">Failed ❌</td>
        </tr>

        <tr class="border-b">
          <td class="p-4"><input type="checkbox" /></td>
          <td class="p-4">WD202</td>
          <td class="p-4 flex items-center gap-2">
            <img src="https://i.pravatar.cc/30?img=2" class="w-6 h-6 rounded-full" />
            tom_dev
          </td>
          <td class="p-4">100</td>
          <td class="p-4">52</td>
          <td class="p-4">52%</td>
          <td class="p-4">A</td>
          <td class="p-4 text-red-600 font-medium">Failed ❌</td>
        </tr>


        <tr class="border-b">
          <td class="p-4"><input type="checkbox" /></td>
          <td class="p-4">WD202</td>
          <td class="p-4 flex items-center gap-2">
            <img src="https://i.pravatar.cc/30?img=2" class="w-6 h-6 rounded-full" />
            tom_dev
          </td>
          <td class="p-4">100</td>
          <td class="p-4">52</td>
          <td class="p-4">52%</td>
          <td class="p-4">A</td>
          <td class="p-4 text-red-600 font-medium">Failed ❌</td>
        </tr>


        <tr class="border-b">
          <td class="p-4"><input type="checkbox" /></td>
          <td class="p-4">WD202</td>
          <td class="p-4 flex items-center gap-2">
            <img src="https://i.pravatar.cc/30?img=2" class="w-6 h-6 rounded-full" />
            tom_dev
          </td>
          <td class="p-4">100</td>
          <td class="p-4">52</td>
          <td class="p-4">52%</td>
          <td class="p-4">A</td>
          <td class="p-4 text-red-600 font-medium">Failed ❌</td>
        </tr>


        <tr class="border-b">
          <td class="p-4"><input type="checkbox" /></td>
          <td class="p-4">WD202</td>
          <td class="p-4 flex items-center gap-2">
            <img src="https://i.pravatar.cc/30?img=2" class="w-6 h-6 rounded-full" />
            tom_dev
          </td>
          <td class="p-4">100</td>
          <td class="p-4">52</td>
          <td class="p-4">52%</td>
          <td class="p-4">A</td>
          <td class="p-4 text-red-600 font-medium">Failed ❌</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Pagination -->
  <div class="flex justify-between items-center mt-4 text-sm text-gray-600">
    <button class="p-2 rounded-full hover:bg-gray-200">&larr;</button>
    <span>Page 1 of 10</span>
    <button class="p-2 rounded-full hover:bg-gray-200">&rarr;</button>
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
