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

      <div class=" p-6">
    <h1 class="text-3xl font-bold mb-6">Welcome Teacher</h1>

    <!-- Top stat cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
      <div class="bg-white rounded-2xl shadow p-5 flex justify-between items-center">
        <div>
          <div class="text-xs text-gray-500 uppercase">Registered Users</div>
          <div class="text-3xl font-semibold">120</div>
        </div>
        <div class="text-gray-400 text-3xl">👤</div>
      </div>
      <div class="bg-white rounded-2xl shadow p-5 flex justify-between items-center">
        <div>
          <div class="text-xs text-gray-500 uppercase">Pending Complaints</div>
          <div class="text-3xl font-semibold">5</div>
        </div>
        <div class="text-gray-400 text-3xl">📚</div>
      </div>
      <div class="bg-white rounded-2xl shadow p-5 flex justify-between items-center">
        <div>
          <div class="text-xs text-gray-500 uppercase"> Certificates</div>
          <div class="text-3xl font-semibold">44</div>
        </div>
        <div class="text-gray-400 text-3xl">🔗</div>
      </div>
      <div class="bg-white rounded-2xl shadow p-5 flex justify-between items-center">
        <div>
          <div class="text-xs text-gray-500 uppercase"> Feedback Received</div>
          <div class="text-3xl font-semibold">12</div>
        </div>
        <div class="text-gray-400 text-3xl">📝</div>
      </div>
      <div class="bg-white rounded-2xl shadow p-5 flex justify-between items-center">
        <div>
          <div class="text-xs text-gray-500 uppercase">Remove Users</div>
          <div class="text-3xl font-semibold">3</div>
        </div>
        <div class="text-gray-400 text-3xl">💬</div>
      </div>
      <div class="bg-white rounded-2xl shadow p-5 flex justify-between items-center">
        <div>
          <div class="text-xs text-gray-500 uppercase">Complaints Resolved</div>
          <div class="text-3xl font-semibold">78%</div>
        </div>
        <div class="text-gray-400 text-3xl">📈</div>
      </div>
      <div class="bg-white rounded-2xl shadow p-5 flex justify-between items-center col-span-full sm:col-span-2 lg:col-span-1">
        <div>
          <div class="text-xs text-gray-500 uppercase">Active Teacher</div>
          <div class="text-3xl font-semibold">5</div>
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

  </div>

  <script>
    // Simulated live data: "Active Users" line + "Submissions" bar
    function generateInitial(points = 12) {
      const now = new Date();
      const labels = [];
      const submissions = [];
      const activeUsers = [];
      for (let i = points - 1; i >= 0; i--) {
        const d = new Date(now.getTime() - i * 60000);
        labels.push(d.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }));
        submissions.push(Math.round(10 + Math.random() * 60));
        activeUsers.push(Math.round(80 + Math.random() * 80));
      }
      return { labels, submissions, activeUsers };
    }

    const ctx = document.getElementById('combinedChart').getContext('2d');
    let { labels, submissions, activeUsers } = generateInitial();

    const combinedChart = new Chart(ctx, {
      data: {
        labels,
        datasets: [
          {
            type: 'bar',
            label: 'Submissions',
            data: submissions,
            borderRadius: 6,
            barThickness: 14,
            yAxisID: 'y',
          },
          {
            type: 'line',
            label: 'Active Users',
            data: activeUsers,
            tension: 0.35,
            borderWidth: 2,
            pointRadius: 3,
            fill: false,
            yAxisID: 'y',
          },
        ],
      },
      options: {
        responsive: true,
        interaction: { mode: 'index', intersect: false },
        plugins: {
          legend: { position: 'top' },
          tooltip: { enabled: true },
        },
        scales: {
          y: {
            beginAtZero: true,
            ticks: { maxTicksLimit: 5 }
          },
          x: {
            ticks: { autoSkip: true, maxRotation: 0 }
          }
        },
      },
    });

    // Live update every 5 seconds (simulated)
    setInterval(() => {
      const label = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
      const newSubmissions = Math.round(10 + Math.random() * 60);
      const newActiveUsers = Math.round(80 + Math.random() * 80);

      combinedChart.data.labels.push(label);
      combinedChart.data.datasets[0].data.push(newSubmissions);
      combinedChart.data.datasets[1].data.push(newActiveUsers);

      if (combinedChart.data.labels.length > 12) {
        combinedChart.data.labels.shift();
        combinedChart.data.datasets.forEach(ds => ds.data.shift());
      }
      combinedChart.update();
    }, 5000);
  </script>
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
