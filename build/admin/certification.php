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

  

  <script src="https://kit.fontawesome.com/a2ada4947c.js" crossorigin="anonymous"></script>
</body>
</html>
