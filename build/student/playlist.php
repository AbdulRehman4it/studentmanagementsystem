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

      <!-- scrollable content -->
       <div class="flex gap-10 justify-between overflow-y-auto px-6 py-6">

        <div class="lg:w-2/3 w-full">
          <div class="card bg-white rounded-2xl overflow-hidden">
            <div class="h-60 sm:h-72 bg-[url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1600&q=80')] bg-center bg-cover"></div>
            <div class="p-6">
              <div class="flex items-start gap-4 mb-2">
                <h1 class="text-2xl font-bold flex-1">Freelancing 101: Building a Successful UX Design Career . . .</h1>
              </div>
              <div class="flex items-center gap-4 mb-4">
                <div class="flex items-center gap-3">
                  <img src="https://via.placeholder.com/40" alt="author" class="w-10 h-10 rounded-full object-cover" />
                  <div>
                    <div class="font-semibold">Rooh ul Hussnain</div>
                    <div class="text-gray-500 text-xs">Web Designer</div>
                  </div>
                </div>
                <div class="ml-auto">
                  <button class="flex items-center gap-2 border rounded-full px-4 py-2 text-sm">
                    Follow with 889k
                    <span class="inline-flex items-center justify-center bg-black text-white rounded-full w-6 h-6">+</span>
                  </button>
                </div>
              </div>
              <p class="text-gray-600 leading-relaxed mb-6 text-sm">
                In this video, we’ll guide you step by step — from learning the right programming languages to building real-world projects that get you hired or help you freelance. Whether you're just starting out or leveling up your skills, this guide is designed for you. We’ll cover front-end vs back-end, essential tools, portfolio tips, and career paths. Start building your future today — your journey to becoming a pro developer begins here!
              </p>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <div class="font-semibold mb-2">🚀 What You’ll Learn:</div>
                  <ul class="list-disc list-inside text-gray-700 space-y-1 text-sm">
                    <li>Top programming languages to learn in 2025.</li>
                    <li>Front-end vs Back-end – what’s best for you.</li>
                    <li>Tools and platforms every developer must know.</li>
                    <li>How to build a powerful portfolio.</li>
                    <li>Freelancing, remote jobs, and full-time roles.</li>
                    <li>Developer mindset and productivity tips.</li>
                  </ul>
                </div>
                <div>
                  <div class="font-semibold mb-2 invisible">placeholder</div>
                  <ul class="list-disc list-inside text-gray-700 space-y-1 text-sm">
                    <li>Top programming languages to learn in 2025.</li>
                    <li>Front-end vs Back-end – what’s best for you.</li>
                    <li>Tools and platforms every developer must know.</li>
                    <li>How to build a powerful portfolio.</li>
                    <li>Freelancing, remote jobs, and full-time roles.</li>
                    <li>Developer mindset and productivity tips.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

             <aside class="hidden lg:flex flex-col  inset-y-0 right-0 w-1/3 bg-white border-l border-gray-200 px-4 py-6 playlist-scroll">
      <div class="flex items-start justify-between mb-4">
        <div>
          <h2 class="text-xl font-bold">Playlist</h2>
          <p class="text-gray-500 text-xs mt-1">Feel the rhythm, live the moment. This playlist is your perfect companion for every mood.</p>
        </div>
        <button class="text-xs px-3 py-1 border rounded-md self-start">See More</button>
      </div>
      <div class="space-y-3">
        <div class="flex items-center bg-white rounded-xl overflow-hidden shadow">
          <div class="flex-1 p-3">
            <p class="text-xs">Feel the rhythm, live the moment. This playlist is your perfect companion for every mood.</p>
          </div>
          <div class="w-24 h-16 flex-shrink-0">
            <img src="https://images.unsplash.com/photo-1581091012184-7d70c6b6d0f6?auto=format&fit=crop&w=200&q=60" alt="thumb" class="object-cover w-full h-full" />
          </div>
        </div>
        <div class="flex items-center bg-gray-100 rounded-xl overflow-hidden">
          <div class="flex-1 p-3">
            <p class="text-xs">Feel the rhythm, live the moment. This playlist is your perfect companion for every mood.</p>
          </div>
          <div class="w-24 h-16 flex-shrink-0">
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=200&q=60" alt="thumb" class="object-cover w-full h-full" />
          </div>
        </div>
        <div class="flex items-center bg-white rounded-xl overflow-hidden shadow">
          <div class="flex-1 p-3">
            <p class="text-xs">Feel the rhythm, live the moment. This playlist is your perfect companion for every mood.</p>
          </div>
          <div class="w-24 h-16 flex-shrink-0">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=200&q=60" alt="thumb" class="object-cover w-full h-full" />
          </div>
        </div>
        <div class="flex items-center bg-gray-100 rounded-xl overflow-hidden">
          <div class="flex-1 p-3">
            <p class="text-xs">Feel the rhythm, live the moment. This playlist is your perfect companion for every mood.</p>
          </div>
          <div class="w-24 h-16 flex-shrink-0">
            <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&fit=crop&w=200&q=60" alt="thumb" class="object-cover w-full h-full" />
          </div>
        </div>
      </div>
    </aside>
      </div> <!-- end central scrollable -->
    </div>
  </div>

 
</body>
</html>
