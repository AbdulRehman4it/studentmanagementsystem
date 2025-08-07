<?php require_once "inc/header.php"; ?>
<body class="bg-gray-50 font-sans antialiased">
  <div class="min-h-screen flex">
   <?php require_once "inc/sidebar.php"; ?>

    <!-- Overlay for mobile when sidebar open -->
    <div id="overlay" class="fixed inset-0 bg-black/30 z-10 hidden md:hidden"></div>

    <!-- Main content area -->
    <div class="flex-1 flex flex-col ml-0 md:ml-64 overflow-hidden">

  <?php require_once "inc/topbar.php"; ?>
      <!-- Assignment content -->
       <div class="flex gap-10 justify-between overflow-y-auto px-6 py-6">

        <div class=" w-full p-6 bg-white rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-6">Assignment</h1>

    <!-- Tabs -->
    <div class="flex space-x-4 mb-6">
      <button class="px-4 py-2 rounded-md bg-gray-100 text-black font-semibold">All Assignment</button>
      <button class="px-4 py-2 rounded-md text-gray-500">Pending Assignment</button>
      <button class="px-4 py-2 rounded-md text-gray-500">Upload Assignment</button>
    </div>

    <!-- Assignment List -->
    <div id="assignment-list" class="space-y-4">
      <!-- Example Assignment -->
      <div class="flex items-center justify-between border rounded-lg p-4">
        <div class="flex items-center space-x-4">
          <img src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/svg/1f4c4.svg" class="w-8 h-8" />
          <div>
            <p class="font-semibold">Introduction_to_Marketing.pdf</p>
            <div class="flex items-center space-x-2 text-sm text-gray-500">
              <span>📅 6 day left</span>
              <span class="text-red-500">• Pending</span>
            </div>
          </div>
        </div>
        <div class="flex space-x-2">
          <button class="px-4 py-2 border rounded-md">Download</button>
          <button class="upload-btn px-4 py-2 bg-black text-white rounded-md">Upload</button>
          <input type="file" class="hidden file-input" />
        </div>
      </div>

      <!-- Another Example Assignment -->
      <div class="flex items-center justify-between border rounded-lg p-4">
        <div class="flex items-center space-x-4">
          <img src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/svg/1f4c4.svg" class="w-8 h-8" />
          <div>
            <p class="font-semibold">Introduction_to_UI_UX.svg</p>
            <div class="flex items-center space-x-2 text-sm text-gray-500">
              <span>📅 1 day left</span>
              <span class="text-blue-500">• Submitted</span>
            </div>
          </div>
        </div>
        <div class="flex space-x-2">
          <button class="px-4 py-2 border rounded-md">Download</button>
          <button class="upload-btn px-4 py-2 bg-gray-300 text-gray-500 rounded-md cursor-not-allowed" disabled>Upload</button>
        </div>
      </div>
    </div>

    <!-- Pagination -->
    <div class="flex items-center justify-center mt-6 space-x-6 text-gray-500">
      <button class="text-xl">&larr;</button>
      <span>Page 1 of 10</span>
      <button class="text-xl">&rarr;</button>
    </div>
  </div>


      </div> <!-- end central scrollable -->
    </div>
  </div>

 


</body>
</html>
