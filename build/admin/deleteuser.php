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
    <h2 class="text-2xl font-semibold mb-4">Delete User</h2>

    <div class="overflow-x-auto">
      <table class="min-w-full bg-white shadow rounded-lg text-sm">
        <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
          <tr>
            <th class="p-4 text-left">Course Code</th>
            <th class="p-4 text-left">Username</th>
            <th class="p-4 text-left">Email</th>
            <th class="p-4 text-left">Role</th>
            <th class="p-4 text-left">Title / Designation</th>
            <th class="p-4 text-left">Status</th>
            <th class="p-4 text-left">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <!-- Row Example Start -->
          <tr>
            <td class="p-4">UIUX101</td>
            <td class="p-4">
              <div class="flex items-center gap-2">
                <img class="w-8 h-8 rounded-full" src="https://randomuser.me/api/portraits/men/11.jpg" alt="jack99">
                <span>jack99</span>
              </div>
            </td>
            <td class="p-4">ali@email.com</td>
            <td class="p-4">User</td>
            <td class="p-4">Grade 9 Student</td>
            <td class="p-4">Active</td>
            <td class="p-4">
              <button class="text-red-500 hover:text-red-700">
                🗑️
              </button>
            </td>
          </tr>

              <tr>
            <td class="p-4">UIUX101</td>
            <td class="p-4">
              <div class="flex items-center gap-2">
                <img class="w-8 h-8 rounded-full" src="https://randomuser.me/api/portraits/men/11.jpg" alt="jack99">
                <span>jack99</span>
              </div>
            </td>
            <td class="p-4">ali@email.com</td>
            <td class="p-4">User</td>
            <td class="p-4">Grade 9 Student</td>
            <td class="p-4">Active</td>
            <td class="p-4">
              <button class="text-red-500 hover:text-red-700">
                🗑️
              </button>
            </td>
          </tr>


              <tr>
            <td class="p-4">UIUX101</td>
            <td class="p-4">
              <div class="flex items-center gap-2">
                <img class="w-8 h-8 rounded-full" src="https://randomuser.me/api/portraits/men/11.jpg" alt="jack99">
                <span>jack99</span>
              </div>
            </td>
            <td class="p-4">ali@email.com</td>
            <td class="p-4">User</td>
            <td class="p-4">Grade 9 Student</td>
            <td class="p-4">Active</td>
            <td class="p-4">
              <button class="text-red-500 hover:text-red-700">
                🗑️
              </button>
            </td>
          </tr>

              <tr>
            <td class="p-4">UIUX101</td>
            <td class="p-4">
              <div class="flex items-center gap-2">
                <img class="w-8 h-8 rounded-full" src="https://randomuser.me/api/portraits/men/11.jpg" alt="jack99">
                <span>jack99</span>
              </div>
            </td>
            <td class="p-4">ali@email.com</td>
            <td class="p-4">User</td>
            <td class="p-4">Grade 9 Student</td>
            <td class="p-4">Active</td>
            <td class="p-4">
              <button class="text-red-500 hover:text-red-700">
                🗑️
              </button>
            </td>
          </tr>
              <tr>
            <td class="p-4">UIUX101</td>
            <td class="p-4">
              <div class="flex items-center gap-2">
                <img class="w-8 h-8 rounded-full" src="https://randomuser.me/api/portraits/men/11.jpg" alt="jack99">
                <span>jack99</span>
              </div>
            </td>
            <td class="p-4">ali@email.com</td>
            <td class="p-4">User</td>
            <td class="p-4">Grade 9 Student</td>
            <td class="p-4">Active</td>
            <td class="p-4">
              <button class="text-red-500 hover:text-red-700">
                🗑️
              </button>
            </td>
          </tr>
              <tr>
            <td class="p-4">UIUX101</td>
            <td class="p-4">
              <div class="flex items-center gap-2">
                <img class="w-8 h-8 rounded-full" src="https://randomuser.me/api/portraits/men/11.jpg" alt="jack99">
                <span>jack99</span>
              </div>
            </td>
            <td class="p-4">ali@email.com</td>
            <td class="p-4">User</td>
            <td class="p-4">Grade 9 Student</td>
            <td class="p-4">Active</td>
            <td class="p-4">
              <button class="text-red-500 hover:text-red-700">
                🗑️
              </button>
            </td>
          </tr>
              <tr>
            <td class="p-4">UIUX101</td>
            <td class="p-4">
              <div class="flex items-center gap-2">
                <img class="w-8 h-8 rounded-full" src="https://randomuser.me/api/portraits/men/11.jpg" alt="jack99">
                <span>jack99</span>
              </div>
            </td>
            <td class="p-4">ali@email.com</td>
            <td class="p-4">User</td>
            <td class="p-4">Grade 9 Student</td>
            <td class="p-4">Active</td>
            <td class="p-4">
              <button class="text-red-500 hover:text-red-700">
                🗑️
              </button>
            </td>
          </tr>
          <!-- Row Example End -->

          <!-- You can copy and paste the <tr> block to add more users -->
        </tbody>
      </table>

      <!-- Pagination -->
      <div class="flex items-center justify-between mt-4 px-2 text-sm text-gray-600">
        <button class="hover:text-black">&larr;</button>
        <span>Page 1 of 10</span>
        <button class="hover:text-black">&rarr;</button>
      </div>
    </div>
  </div>


    </div>
  </div>

  


  <script src="https://kit.fontawesome.com/a2ada4947c.js" crossorigin="anonymous"></script>
</body>
</html>
