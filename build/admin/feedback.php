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
    <h1 class="text-2xl font-bold mb-6">Review Feedback</h1>

    <!-- Expandable Comment Card -->
    <div class="space-y-4">

      <!-- Single Hoverable Comment -->
      <div class="bg-white rounded-2xl shadow group transition-all duration-300 overflow-hidden p-4 hover:p-6">
        <div class="flex justify-between items-start">
          <div class="flex gap-4">
            <img src="https://randomuser.me/api/portraits/men/11.jpg" class="w-10 h-10 rounded-full" alt="user"/>
            <div>
              <p class="font-semibold">roh_ul</p>
              <p class="text-sm text-gray-700">Mobile UX Fundamentals → Base topic ya foundation?</p>
            </div>
          </div>
          <p class="text-sm text-gray-500 whitespace-nowrap">2 day ago</p>
        </div>

        <!-- Hidden feedback, shows on hover -->
        <div class="mt-4 max-h-0 opacity-0 group-hover:max-h-[500px] group-hover:opacity-100 transition-all duration-500 text-sm text-gray-700">
          <p>
            Hey everyone, <br />
            As someone completely new to UI/UX design 🧑‍🎨, I found this topic incredibly helpful 💡.
            It introduces the base principles like mobile-first thinking, touch targets, consistency, and performance, 
            which are the foundation of good mobile UX.
          </p>
        </div>
      </div>

      <!-- Copy this block for each comment -->
      <div class="bg-white rounded-2xl shadow group transition-all duration-300 overflow-hidden p-4 hover:p-6">
        <div class="flex justify-between items-start">
          <div class="flex gap-4">
            <img src="https://randomuser.me/api/portraits/men/11.jpg" class="w-10 h-10 rounded-full" alt="user"/>
            <div>
              <p class="font-semibold">roh_ul</p>
              <p class="text-sm text-gray-700">Strategies for SEO, Social Media, and Online Growth?</p>
            </div>
          </div>
          <p class="text-sm text-gray-500 whitespace-nowrap">2 day ago</p>
        </div>

        <div class="mt-4 max-h-0 opacity-0 group-hover:max-h-[500px] group-hover:opacity-100 transition-all duration-500 text-sm text-gray-700">
          <p>
            This section dives into how SEO strategies align with UX. It also shows how social media platforms impact 
            content design decisions and how growth loops are part of modern UX thinking. Super insightful!
          </p>
        </div>
      </div>

       <div class="bg-white rounded-2xl shadow group transition-all duration-300 overflow-hidden p-4 hover:p-6">
        <div class="flex justify-between items-start">
          <div class="flex gap-4">
            <img src="https://randomuser.me/api/portraits/men/11.jpg" class="w-10 h-10 rounded-full" alt="user"/>
            <div>
              <p class="font-semibold">roh_ul</p>
              <p class="text-sm text-gray-700">Strategies for SEO, Social Media, and Online Growth?</p>
            </div>
          </div>
          <p class="text-sm text-gray-500 whitespace-nowrap">2 day ago</p>
        </div>

        <div class="mt-4 max-h-0 opacity-0 group-hover:max-h-[500px] group-hover:opacity-100 transition-all duration-500 text-sm text-gray-700">
          <p>
            This section dives into how SEO strategies align with UX. It also shows how social media platforms impact 
            content design decisions and how growth loops are part of modern UX thinking. Super insightful!
          </p>
        </div>
      </div>

       <div class="bg-white rounded-2xl shadow group transition-all duration-300 overflow-hidden p-4 hover:p-6">
        <div class="flex justify-between items-start">
          <div class="flex gap-4">
            <img src="https://randomuser.me/api/portraits/men/11.jpg" class="w-10 h-10 rounded-full" alt="user"/>
            <div>
              <p class="font-semibold">roh_ul</p>
              <p class="text-sm text-gray-700">Strategies for SEO, Social Media, and Online Growth?</p>
            </div>
          </div>
          <p class="text-sm text-gray-500 whitespace-nowrap">2 day ago</p>
        </div>

        <div class="mt-4 max-h-0 opacity-0 group-hover:max-h-[500px] group-hover:opacity-100 transition-all duration-500 text-sm text-gray-700">
          <p>
            This section dives into how SEO strategies align with UX. It also shows how social media platforms impact 
            content design decisions and how growth loops are part of modern UX thinking. Super insightful!
          </p>
        </div>
      </div>

       <div class="bg-white rounded-2xl shadow group transition-all duration-300 overflow-hidden p-4 hover:p-6">
        <div class="flex justify-between items-start">
          <div class="flex gap-4">
            <img src="https://randomuser.me/api/portraits/men/11.jpg" class="w-10 h-10 rounded-full" alt="user"/>
            <div>
              <p class="font-semibold">roh_ul</p>
              <p class="text-sm text-gray-700">Strategies for SEO, Social Media, and Online Growth?</p>
            </div>
          </div>
          <p class="text-sm text-gray-500 whitespace-nowrap">2 day ago</p>
        </div>

        <div class="mt-4 max-h-0 opacity-0 group-hover:max-h-[500px] group-hover:opacity-100 transition-all duration-500 text-sm text-gray-700">
          <p>
            This section dives into how SEO strategies align with UX. It also shows how social media platforms impact 
            content design decisions and how growth loops are part of modern UX thinking. Super insightful!
          </p>
        </div>
      </div>

    </div>

    <!-- Back Button -->
    <div class="mt-8 text-right">
      <button class="bg-black text-white py-2 px-6 rounded-full hover:bg-gray-800">
        Back
      </button>
    </div>
  </div>



    </div>
  </div>


  <script src="https://kit.fontawesome.com/a2ada4947c.js" crossorigin="anonymous"></script>
</body>
</html>
