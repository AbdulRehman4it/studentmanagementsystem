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

      <div class="w-full max-w-6xl bg-white rounded-2xl shadow-lg p-8 grid grid-cols-1 lg:grid-cols-12 gap-8">
    <!-- FAQ list -->
    <div class="lg:col-span-8 space-y-6">
      <div>
        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">Frequently<br />asked questions</h1>
      </div>
      <div class="space-y-4">
        <!-- Accordion item -->
        <div class="border rounded-xl border-gray-300 overflow-hidden">
          <button aria-expanded="true" class="w-full flex justify-between items-center p-5 text-left" data-accordion-target>
            <div class="space-y-1">
              <div class="font-bold text-lg text-gray-900">How can I access the course I enrolled in?</div>
            </div>
            <div class="text-2xl font-bold" aria-hidden="true">+</div>
          </button>
          <div class="px-5 pb-5" data-accordion-content>
            <p class="text-sm text-gray-600">
              Each Course Card Includes The Course Title, Progress Status (Like 30% Or Completed), And A “Continue Learning” Or “View Details” Button. This Makes It Easy For You To Resume Where You Left Off Or Review Completed Material.
            </p>
          </div>
        </div>
        <!-- Repeatable items -->
        <div class="border rounded-xl border-gray-300 overflow-hidden">
          <button aria-expanded="false" class="w-full flex justify-between items-center p-5 text-left" data-accordion-target>
            <div class="space-y-1">
              <div class="font-bold text-lg text-gray-900">Can I Retake A Course After Completing It?</div>
            </div>
            <div class="text-2xl font-bold" aria-hidden="true">+</div>
          </button>
          <div class="px-5 pb-5 hidden" data-accordion-content>
            <p class="text-sm text-gray-600">
              Yes, you can retake any course. Go to your dashboard, locate the course, and click “Retake” or “Restart” depending on availability and policy.
            </p>
          </div>
        </div>
        <div class="border rounded-xl border-gray-300 overflow-hidden">
          <button aria-expanded="false" class="w-full flex justify-between items-center p-5 text-left" data-accordion-target>
            <div class="space-y-1">
              <div class="font-bold text-lg text-gray-900">How Can I Enroll In New Courses?</div>
            </div>
            <div class="text-2xl font-bold" aria-hidden="true">+</div>
          </button>
          <div class="px-5 pb-5 hidden" data-accordion-content>
            <p class="text-sm text-gray-600">
              Browse the course catalog from the main menu, select a course you’re interested in, and click “Enroll” to get started.
            </p>
          </div>
        </div>
        <div class="border rounded-xl border-gray-300 overflow-hidden">
          <button aria-expanded="false" class="w-full flex justify-between items-center p-5 text-left" data-accordion-target>
            <div class="space-y-1">
              <div class="font-bold text-lg text-gray-900">Will I Get A Certificate After Completing A Course?</div>
            </div>
            <div class="text-2xl font-bold" aria-hidden="true">+</div>
          </button>
          <div class="px-5 pb-5 hidden" data-accordion-content>
            <p class="text-sm text-gray-600">
              Yes, upon successful completion you will receive a downloadable certificate visible in your certificates section.
            </p>
          </div>
        </div>
        <!-- Another repeat -->
        <div class="border rounded-xl border-gray-300 overflow-hidden">
          <button aria-expanded="false" class="w-full flex justify-between items-center p-5 text-left" data-accordion-target>
            <div class="space-y-1">
              <div class="font-bold text-lg text-gray-900">How can I access the course I enrolled in?</div>
            </div>
            <div class="text-2xl font-bold" aria-hidden="true">+</div>
          </button>
          <div class="px-5 pb-5 hidden" data-accordion-content>
            <p class="text-sm text-gray-600">
              Duplicate question used as placeholder; behavior is identical to the first item.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Side info card -->
    <div class="lg:col-span-4 flex">
      <div class="w-full border rounded-xl border-gray-300 p-6 flex flex-col">
        <div class="flex justify-center mb-4">
          <!-- Placeholder icon -->
          <div class="w-16 h-16 flex items-center justify-center bg-gray-100 rounded-lg">
            <svg class="w-10 h-10 text-gray-800" fill="currentColor" viewBox="0 0 24 24">
              <path d="M4 4h16v16H4V4zm8 2a3 3 0 100 6 3 3 0 000-6zm0 8c-2.7 0-5.2 1.3-6.8 3.4.1 1 1 1.6 2 1.6h9.6c1 0 1.9-.6 2-1.6A8.97 8.97 0 0012 14z"/>
            </svg>
          </div>
        </div>
        <h2 class="text-xl font-bold mb-2 text-center">Do you have more question</h2>
        <p class="text-xs text-gray-700 leading-relaxed mb-6 text-center">
          Each Course Card In Your Dashboard Provides A Complete Overview Of Your Learning Progress. It Includes The Course Title To Help You Quickly Identify Which Subject You're Working On, Along With A Clearly Displayed Progress Bar Or Percentage Indicator (Such As 30%, 75%, Or Completed).
        </p>
        <div class="mt-auto">
          <button class="w-full px-4 py-3 bg-black text-white rounded-lg font-medium hover:opacity-90 transition">
            Send Question
          </button>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>




<!-- faqs js  -->
  <script>
    // Basic accordion logic (only one open at a time)
    document.querySelectorAll('[data-accordion-target]').forEach(btn => {
      btn.addEventListener('click', () => {
        const isOpen = btn.getAttribute('aria-expanded') === 'true';
        // close all
        document.querySelectorAll('[data-accordion-target]').forEach(b => {
          b.setAttribute('aria-expanded', 'false');
          b.querySelector('[aria-hidden]').textContent = '+';
          b.nextElementSibling.classList.add('hidden');
        });
        if (!isOpen) {
          btn.setAttribute('aria-expanded', 'true');
          btn.querySelector('[aria-hidden]').textContent = '−';
          btn.nextElementSibling.classList.remove('hidden');
        }
      });
    });
  </script>

</body>
</html>
