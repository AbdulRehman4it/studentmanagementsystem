<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}
?>
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
      <div class="flex-1 overflow-y-auto">
        <!-- hero/banner -->
        <section class="px-4 py-6">
          <h1 class="text-4xl pb-10 font-bold">Dashboard</h1>
          <div class="rounded-xl bg-neutral-900 text-white p-6 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div class="flex-1">
              <div class="text-sm uppercase tracking-wide mb-1">Online Course</div>
              <h2 class="text-3xl font-bold leading-tight">Every expert was once a beginner — start your journey now.</h2>
            </div>
            <div class="mt-4 md:mt-0">
              <button class="inline-flex items-center gap-2 bg-white text-black px-6 py-3 rounded-full font-medium shadow">
                Join Now
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
              </button>
            </div>
          </div>
        </section>

        <!-- cards grid -->
        <main class="px-4 pb-8">
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- card example -->
            <div class="card bg-white rounded-2xl overflow-hidden relative">
              <div class="h-32 bg-[url('https://images.unsplash.com/photo-1581091012184-7d70c6b6d0f6?auto=format&fit=crop&w=600&q=60')] bg-cover bg-center"></div>
              <div class="p-4">
                <div class="text-xs uppercase font-semibold text-gray-500 mb-1">Trader</div>
                <h3 class="font-medium text-base mb-2">Beginner’s Guide To Becoming A Professional In Finance</h3>
                <div class="flex items-center space-x-2 mb-3">
                  <img src="https://via.placeholder.com/28" alt="author" class="w-7 h-7 rounded-full object-cover"/>
                  <div class="text-xs">
                    <div class="font-semibold">Muhammad Fiaz</div>
                    <div class="text-gray-400">Stock Trader</div>
                  </div>
                </div>
                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="w-1/3 h-full bg-gray-400"></div>
                </div>
              </div>
            </div>

             <div class="card bg-white rounded-2xl overflow-hidden relative">
              <div class="h-32 bg-[url('https://images.unsplash.com/photo-1581091012184-7d70c6b6d0f6?auto=format&fit=crop&w=600&q=60')] bg-cover bg-center"></div>
              <div class="p-4">
                <div class="text-xs uppercase font-semibold text-gray-500 mb-1">Trader</div>
                <h3 class="font-medium text-base mb-2">Beginner’s Guide To Becoming A Professional In Finance</h3>
                <div class="flex items-center space-x-2 mb-3">
                  <img src="https://via.placeholder.com/28" alt="author" class="w-7 h-7 rounded-full object-cover"/>
                  <div class="text-xs">
                    <div class="font-semibold">Muhammad Fiaz</div>
                    <div class="text-gray-400">Stock Trader</div>
                  </div>
                </div>
                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="w-1/3 h-full bg-gray-400"></div>
                </div>
              </div>
            </div>


             <div class="card bg-white rounded-2xl overflow-hidden relative">
              <div class="h-32 bg-[url('https://images.unsplash.com/photo-1581091012184-7d70c6b6d0f6?auto=format&fit=crop&w=600&q=60')] bg-cover bg-center"></div>
              <div class="p-4">
                <div class="text-xs uppercase font-semibold text-gray-500 mb-1">Trader</div>
                <h3 class="font-medium text-base mb-2">Beginner’s Guide To Becoming A Professional In Finance</h3>
                <div class="flex items-center space-x-2 mb-3">
                  <img src="https://via.placeholder.com/28" alt="author" class="w-7 h-7 rounded-full object-cover"/>
                  <div class="text-xs">
                    <div class="font-semibold">Muhammad Fiaz</div>
                    <div class="text-gray-400">Stock Trader</div>
                  </div>
                </div>
                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="w-1/3 h-full bg-gray-400"></div>
                </div>
              </div>
            </div>

             <div class="card bg-white rounded-2xl overflow-hidden relative">
              <div class="h-32 bg-[url('https://images.unsplash.com/photo-1581091012184-7d70c6b6d0f6?auto=format&fit=crop&w=600&q=60')] bg-cover bg-center"></div>
              <div class="p-4">
                <div class="text-xs uppercase font-semibold text-gray-500 mb-1">Trader</div>
                <h3 class="font-medium text-base mb-2">Beginner’s Guide To Becoming A Professional In Finance</h3>
                <div class="flex items-center space-x-2 mb-3">
                  <img src="https://via.placeholder.com/28" alt="author" class="w-7 h-7 rounded-full object-cover"/>
                  <div class="text-xs">
                    <div class="font-semibold">Muhammad Fiaz</div>
                    <div class="text-gray-400">Stock Trader</div>
                  </div>
                </div>
                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="w-1/3 h-full bg-gray-400"></div>
                </div>
              </div>
            </div>

            <!-- more cards (copy/paste or dynamically render) -->
            <div class="card bg-white rounded-2xl overflow-hidden relative">
              <div class="h-32 bg-[url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=60')] bg-cover bg-center"></div>
              <div class="p-4">
                <div class="text-xs uppercase font-semibold text-gray-500 mb-1">Developer</div>
                <h3 class="font-medium text-base mb-2">Beginner’s Guide To Becoming A Professional Frontend Developer</h3>
                <div class="flex items-center space-x-2 mb-3">
                  <img src="https://via.placeholder.com/28" alt="author" class="w-7 h-7 rounded-full object-cover"/>
                  <div class="text-xs">
                    <div class="font-semibold">Muhammad Sufyan</div>
                    <div class="text-gray-400">Web Developer</div>
                  </div>
                </div>
                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="w-1/2 h-full bg-gray-400"></div>
                </div>
              </div>
            </div>

            <div class="card bg-white rounded-2xl overflow-hidden relative">
              <div class="h-32 bg-[url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=60')] bg-cover bg-center"></div>
              <div class="p-4">
                <div class="text-xs uppercase font-semibold text-gray-500 mb-1">Designer</div>
                <h3 class="font-medium text-base mb-2">Step-By-Step Guide To Start Your Career In UI/UX Designer</h3>
                <div class="flex items-center space-x-2 mb-3">
                  <img src="https://via.placeholder.com/28" alt="author" class="w-7 h-7 rounded-full object-cover"/>
                  <div class="text-xs">
                    <div class="font-semibold">Ali Raza</div>
                    <div class="text-gray-400">Skill</div>
                  </div>
                </div>
                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="w-1/4 h-full bg-gray-400"></div>
                </div>
              </div>
            </div>

            <div class="card bg-white rounded-2xl overflow-hidden relative">
              <div class="h-32 bg-[url('https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&fit=crop&w=600&q=60')] bg-cover bg-center"></div>
              <div class="p-4">
                <div class="text-xs uppercase font-semibold text-gray-500 mb-1">Finance</div>
                <h3 class="font-medium text-base mb-2">Beginner’s Guide To Becoming A Professional In Finance</h3>
                <div class="flex items-center space-x-2 mb-3">
                  <img src="https://via.placeholder.com/28" alt="author" class="w-7 h-7 rounded-full object-cover"/>
                  <div class="text-xs">
                    <div class="font-semibold">Rooh Ul Hussnain</div>
                    <div class="text-gray-400">Finance</div>
                  </div>
                </div>
                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="w-2/3 h-full bg-gray-400"></div>
                </div>
              </div>
            </div>

            <!-- additional duplicates as needed -->
          </div>
        </main>
      </div>
    </div>
  </div>

</body>
</html>
