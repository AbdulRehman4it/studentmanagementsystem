<?php
session_start();
require_once "../inc/db.php"; // your DB connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = intval($_POST['user_id']);

    // ✅ Toggle Status Logic
    if (isset($_POST['toggle_status'])) {
        $currentStatus = $_POST['current_status'];
        $newStatus = $currentStatus === 'approved' ? 'pending' : 'approved';

        $stmt = $conn->prepare("UPDATE users SET verify_status = ? WHERE id = ?");
        $stmt->bind_param("si", $newStatus, $user_id);

        if ($stmt->execute()) {
            $_SESSION['message'] = "Status updated successfully.";
        } else {
            $_SESSION['error'] = "Failed to update status.";
        }

        $stmt->close();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ✅ Assign Role
    if (isset($_POST['assign_role']) && isset($_POST['user_id']) && isset($_POST['role'])) {
        $userId = intval($_POST['user_id']);
        $role = $_POST['role']; // 'student' or 'teacher'

        $stmt = $conn->prepare("UPDATE users SET role = ? WHERE id = ?");
        $stmt->bind_param("si", $role, $userId);
       if ($stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Role updated successfully');</script>";
    } else {
        echo "<script>alert('Query ran but no rows were updated. User ID may not exist or role was already the same.');</script>";
    }
} else {
    echo "<script>alert('Failed to update role: " . $stmt->error . "');</script>";
}
    }
}


// 📥 Fetch all users
$users = $conn->query("SELECT * FROM users");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Responsive Dashboard</title>
 <link rel="stylesheet" href="../assets/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body class="bg-gray-50 font-sans antialiased">
  <div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside id="sidebar" class="fixed inset-y-0 left-0 z-20 w-64 bg-white border-r border-gray-200 px-4 py-6 transform -translate-x-full transition-transform duration-300 ease-in-out md:translate-x-0">
      <div class="items-center mb-8">

        <img src="../assets/img/logodashboard.png" class="w-36" alt="">

      </div>
      <div class="space-y-2">
        <a href="./admindashboard.html" class="flex items-center px-3 py-2 rounded-md  hover:bg-gray-100">
          <span class="mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h7v7H3V3zm11 0h7v4h-7V3zm0 6h7v11h-7V9zm-11 9h7v2H3v-2z" />
            </svg>
          </span>
          Dashboard
        </a>
        <a href="./adduser.html" class="flex items-center gap-4 px-3 py-2 rounded-md  active">
         <i class="fa-solid fa-user-plus"></i>
          Add User
        </a>
        <a href="./deleteuser.html" class="flex items-center px-3 py-2 gap-4 rounded-md hover:bg-gray-100 ">
         <i class="fa-solid fa-user-minus"></i>
          Delete User
        </a>
        <a href="./complaints.html" class="flex items-center px-3 py-2 gap-4 rounded-md hover:bg-gray-100">
        <i class="fa-brands fa-searchengin"></i>
          View Complaints
        </a>
        <a href="./certification.html" class="flex items-center px-3 py-2 gap-4 rounded-md hover:bg-gray-100">
       <i class="fa-solid fa-certificate"></i>
         Provide certification
        </a>
        <a href="./feedback.html" class="flex items-center px-3 py-2 gap-4 rounded-md hover:bg-gray-100">
        <i class="fa-solid fa-thumbs-up"></i>
          Feedback
        </a>
        <div class="mt-6">
          <a href="../index.html" class="flex items-center px-3 py-2 gap-4 rounded-md text-red-600 hover:bg-red-50">
          <i class="fa-solid fa-arrow-right-from-bracket text-xl"></i>
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
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-2xl font-semibold">Add User</h2>
    <button class="bg-black text-white px-4 py-2 rounded">+ Add User</button>
  </div>

  <div class="overflow-x-auto rounded-lg shadow">
<table class="min-w-full bg-white">
  <thead>
    <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
      <th class="py-3 px-6 text-left">User ID</th>
      <th class="py-3 px-6 text-left">Student Name</th>
      <th class="py-3 px-6 text-left">Email</th>
      <th class="py-3 px-6 text-left">Role</th>
      <th class="py-3 px-6 text-left">Signup Date</th>
      <th class="py-3 px-6 text-left">Status</th>
      <th class="py-3 px-6 text-center">Actions</th>
    </tr>
  </thead>
 <tbody class="text-gray-700 text-sm">
  <?php while($row = $users->fetch_assoc()): ?>
  <tr class="border-b border-gray-200 hover:bg-gray-50">
    <td class="py-3 px-6 text-left"><?= htmlspecialchars($row['id']) ?></td>
    <td class="py-3 px-6 text-left"><?= htmlspecialchars($row['name']) ?></td>
    <td class="py-3 px-6 text-left"><?= htmlspecialchars($row['email']) ?></td>
    <td class="py-3 px-6 text-left"><?= htmlspecialchars($row['role']) ?></td>
    <td class="py-3 px-6 text-left"><?= date("d M Y", strtotime($row['created_at'])) ?></td>
    <td class="py-3 px-6 text-left"><?= ucfirst($row['verify_status']) ?></td>
    <td class="py-3 px-6 text-center relative">
      <div class="relative inline-block text-left group">
        <button class="p-1 rounded hover:bg-gray-200">
          <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zm0 5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zm0 5a1.5 1.5 0 110 3 1.5 1.5 0 010-3z" />
          </svg>
        </button>
        <!-- Dropdown -->
        <div class="absolute right-0 z-10 w-36 origin-top-right bg-white border border-gray-200 rounded-md shadow-lg hidden group-hover:block">
          <div class="py-1">

            <!-- Toggle Status Form -->
            <form method="POST" action="#">
              <input type="hidden" name="user_id" value="<?= $row['id'] ?>">
              <input type="hidden" name="current_status" value="<?= $row['verify_status'] ?>">
              <button type="submit" name="toggle_status" class="flex items-center w-full px-4 py-2 text-sm text-blue-600 hover:bg-gray-100">
                <?= $row['verify_status'] === 'approved' ? '❌ Set Pending' : '✅ Approve' ?>
              </button>
            </form>

<!-- Assign Role Buttons -->
  <!-- Assign Student Role -->
    <form method="POST" style="display:inline;">
      <input type="hidden" name="user_id" value="<?= $row['id'] ?>">
      <input type="hidden" name="role" value="student">
      <button type="submit" name="assign_role" class="px-2 py-1 bg-blue-500 text-white rounded">Make Student</button>
    </form>

    <!-- Assign Teacher Role -->
    <form method="POST" style="display:inline;">
      <input type="hidden" name="user_id" value="<?= $row['id'] ?>">
      <input type="hidden" name="role" value="teacher">
      <button type="submit" name="assign_role" class="px-2 py-1 bg-green-600 text-white rounded">Make Teacher</button>
    </form>

          </div>
        </div>
      </div>
    </td>
  </tr>
  <?php endwhile; ?>
</tbody>

</table>
  </div>

  <!-- Pagination -->
  <div class="flex justify-between items-center mt-4 text-sm text-gray-500">
    <button class="p-2 rounded-full hover:bg-gray-100">
      <span>&larr;</span>
    </button>
    <span>Page 1 of 10</span>
    <button class="p-2 rounded-full hover:bg-gray-100">
      <span>&rarr;</span>
    </button>
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
