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
