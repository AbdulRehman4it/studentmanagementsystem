
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

      <div class=" p-6">
    <h1 class="text-3xl font-bold mb-6">Welcome Teacher</h1>

    <!-- Top stat cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
      <div class="bg-white rounded-2xl shadow p-5 flex justify-between items-center">
        <div>
          <div class="text-xs text-gray-500 uppercase">Total Students</div>
          <div class="text-3xl font-semibold">120</div>
        </div>
        <div class="text-gray-400 text-3xl">👤</div>
      </div>
      <div class="bg-white rounded-2xl shadow p-5 flex justify-between items-center">
        <div>
          <div class="text-xs text-gray-500 uppercase">Active Courses</div>
          <div class="text-3xl font-semibold">5</div>
        </div>
        <div class="text-gray-400 text-3xl">📚</div>
      </div>
      <div class="bg-white rounded-2xl shadow p-5 flex justify-between items-center">
        <div>
          <div class="text-xs text-gray-500 uppercase">Materials Shared</div>
          <div class="text-3xl font-semibold">44</div>
        </div>
        <div class="text-gray-400 text-3xl">🔗</div>
      </div>
      <div class="bg-white rounded-2xl shadow p-5 flex justify-between items-center">
        <div>
          <div class="text-xs text-gray-500 uppercase">Pending Grading</div>
          <div class="text-3xl font-semibold">12</div>
        </div>
        <div class="text-gray-400 text-3xl">📝</div>
      </div>
      <div class="bg-white rounded-2xl shadow p-5 flex justify-between items-center">
        <div>
          <div class="text-xs text-gray-500 uppercase">Live Chat Requests</div>
          <div class="text-3xl font-semibold">3</div>
        </div>
        <div class="text-gray-400 text-3xl">💬</div>
      </div>
      <div class="bg-white rounded-2xl shadow p-5 flex justify-between items-center">
        <div>
          <div class="text-xs text-gray-500 uppercase">Monthly Progress %</div>
          <div class="text-3xl font-semibold">78%</div>
        </div>
        <div class="text-gray-400 text-3xl">📈</div>
      </div>
      <div class="bg-white rounded-2xl shadow p-5 flex justify-between items-center col-span-full sm:col-span-2 lg:col-span-1">
        <div>
          <div class="text-xs text-gray-500 uppercase">Assignments Submitted</div>
          <div class="text-3xl font-semibold">89</div>
        </div>
        <div class="text-gray-400 text-3xl">📥</div>
      </div>
      <div class="bg-white rounded-2xl shadow p-5 flex justify-between items-center">
        <div>
          <div class="text-xs text-gray-500 uppercase">Active User Today</div>
          <div class="flex items-baseline gap-1">
            <div class="text-3xl font-semibold">1,39</div>
            <div class="text-xs text-green-600">Excellent</div>
          </div>
        </div>
        <div class="relative w-16 h-16">
          <svg class="w-full h-full text-gray-200" viewBox="0 0 36 36">
            <path stroke="currentColor" stroke-width="4" fill="none"
              d="M18 2.0845a 15.9155 15.9155 0 0 1 0 31.831a 15.9155 15.9155 0 0 1 0 -31.831" />
          </svg>
          <svg class="absolute top-0 left-0 w-full h-full text-indigo-600" viewBox="0 0 36 36">
            <path stroke="currentColor" stroke-width="4" fill="none" stroke-dasharray="70,100"
              d="M18 2.0845a 15.9155 15.9155 0 0 1 0 31.831a 15.9155 15.9155 0 0 1 0 -31.831" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Main grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
      <!-- Recent Activity with single live user graph -->
      <div class="col-span-2 bg-white rounded-2xl shadow p-6">
        <div class="flex justify-between items-center mb-4">
          <h2 class="text-xl font-semibold">Recent Activity</h2>
          <div class="text-sm text-gray-500">Live Users & Submissions</div>
        </div>
        <div class="min-h-[260px]">
          <canvas id="combinedChart"></canvas>
        </div>
      </div>

      <!-- Student Activity Sidebar -->
      <div class="bg-white rounded-2xl shadow p-6">
        <h2 class="text-xl font-semibold mb-4">Student Activity</h2>
        <div class="space-y-3 text-sm">
          <div class="flex justify-between">
            <div>Most Active Student</div>
            <div class="text-gray-500">Ali Raza</div>
          </div>
          <div class="flex justify-between">
            <div>Weekly Student Growth</div>
            <div class="text-gray-500">75%</div>
          </div>
          <div class="flex justify-between bg-gray-50 rounded p-2">
            <div>Top Scorer</div>
            <div class="text-gray-500">Zainab Ahmed</div>
          </div>
          <div class="flex justify-between">
            <div>Flagged Submissions</div>
            <div class="text-gray-500">(3)</div>
          </div>
          <div class="flex justify-between">
            <div>Total Uploaded Materials</div>
            <div class="text-gray-500">(34)</div>
          </div>
          <div class="flex justify-between">
            <div>Course Completion</div>
            <div class="text-gray-500">(34)</div>
          </div>
          <div class="flex justify-between">
            <div>Students Blocked</div>
            <div class="text-gray-500">(4)</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Activities list -->
    <div class="mt-8 bg-white rounded-2xl shadow p-6">
      <h2 class="text-xl font-semibold mb-4">Activities</h2>
      <ul class="space-y-4">
        <li class="flex justify-between items-center">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">R</div>
            <div>
              <div class="font-medium">Roh_ul_Hussnain</div>
              <div class="text-xs text-gray-500">59 minutes ago</div>
            </div>
          </div>
          <div class="text-green-600 font-semibold">Active</div>
        </li>
        <li class="flex justify-between items-center">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">M</div>
            <div>
              <div class="font-medium">Muhammad Ali</div>
              <div class="text-xs text-gray-500">31 minutes ago</div>
            </div>
          </div>
          <div class="text-green-600 font-semibold">Active</div>
        </li>
        <li class="flex justify-between items-center">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">H</div>
            <div>
              <div class="font-medium">Hamza Rajpoot</div>
              <div class="text-xs text-gray-500">1 hour 32 minutes ago</div>
            </div>
          </div>
          <div class="text-gray-400 font-semibold">Inactive</div>
        </li>
        <li class="flex justify-between items-center">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">M</div>
            <div>
              <div class="font-medium">Muhammad Bilal</div>
              <div class="text-xs text-gray-500">53 minutes ago</div>
            </div>
          </div>
          <div class="text-green-600 font-semibold">Active</div>
        </li>
        <li class="flex justify-between items-center">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">I</div>
            <div>
              <div class="font-medium">M. Iftikhar Ahmad</div>
              <div class="text-xs text-gray-500">41 minutes ago</div>
            </div>
          </div>
          <div class="text-gray-400 font-semibold">Inactive</div>
        </li>
      </ul>
    </div>
  </div>

    </div>
  </div>

  



  <script src="https://kit.fontawesome.com/a2ada4947c.js" crossorigin="anonymous"></script>
</body>
</html>
