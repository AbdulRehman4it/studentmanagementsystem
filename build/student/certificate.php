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

      <!-- certificate content  -->
    <div class="md:p-20 p-6 w-full grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Left info panel -->
    <div class="space-y-4">
      <div class="border rounded-lg p-3 flex items-center gap-3">
        <div class="text-2xl">👤</div>
        <div>
          <div class="text-xs font-semibold text-gray-700">Name:</div>
          <div class="text-sm text-gray-600">Rooh_ul_Hussnain</div>
        </div>
      </div>
      <div class="border rounded-lg p-3 flex items-center gap-3">
        <div class="text-2xl">📘</div>
        <div>
          <div class="text-xs font-semibold text-gray-700">Course:</div>
          <div class="text-sm text-gray-600">UI/UX Design Basics</div>
        </div>
      </div>
      <div class="border rounded-lg p-3 flex items-center gap-3">
        <div class="text-2xl">📅</div>
        <div>
          <div class="text-xs font-semibold text-gray-700">Date:</div>
          <div class="text-sm text-gray-600">Aug 01, 2025</div>
        </div>
      </div>
      <div class="border rounded-lg p-3 flex items-center gap-3">
        <div class="text-2xl">📎</div>
        <div>
          <div class="text-xs font-semibold text-gray-700">Certificate ID:</div>
          <div class="text-sm text-gray-600">UXD-2025-01</div>
        </div>
      </div>
      <div class="border border-dashed rounded-lg p-6 flex flex-col items-center text-center">
        <div class="text-4xl mb-1">📥</div>
        <div class="font-semibold mb-2">Download</div>
        <button
          onclick="downloadCertificate()"
          class="mt-2 px-4 py-2 bg-red-600 text-white rounded-md shadow hover:bg-red-700 transition"
        >
          Download PNG
        </button>
      </div>
    </div>

    <!-- Right certificate panel -->
    <div id="certificate-panel" class="md:col-span-2 bg-white border rounded-xl p-8 flex flex-col justify-between">
      <div>
        <div class="flex justify-center">
          <div class="text-red-600 text-4xl">📖</div>
        </div>
        <div class="mt-4 text-center">
          <div class="text-2xl font-bold text-gray-800">UI/UX Design Certificate</div>
        </div>
        <div class="mt-4 text-center">
          <div class="text-lg font-semibold text-red-600">Rooh_ul_Hussnain</div>
        </div>
        <div class="mt-6 text-center text-gray-600 text-sm space-y-1">
          <p>
            This is to proudly certify that Ayaz Ahmed has successfully completed the course titled UI/UX Design Basics demonstrating a solid understanding of user-centered design principles wireframing prototyping and interface best practices.
          </p>
        </div>
      </div>
      <div class="mt-8 flex items-center justify-between">
        <div class="text-sm text-gray-600">UXD-2025-01</div>
        <div class="flex flex-col items-end">
          <div class="italic text-xs text-gray-400">Signature Placeholder</div>
          <div class="text-xs text-gray-500 mt-1">Rooh_ul_Hussnain</div>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>


<!-- side bar menu  -->
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

   <script>
    function downloadCertificate() {
      const cert = document.getElementById('certificate-panel');
      if (!cert) return;
      // Use html2canvas to snapshot the certificate panel
      html2canvas(cert, { scale: 2 }).then(canvas => {
        canvas.toBlob(blob => {
          if (!blob) return;
          const link = document.createElement('a');
          link.download = 'certificate.png';
          link.href = URL.createObjectURL(blob);
          document.body.appendChild(link);
          link.click();
          URL.revokeObjectURL(link.href);
          link.remove();
        }, 'image/png');
      }).catch(err => {
        console.error('Capture failed:', err);
        alert('Failed to capture certificate. Please try again.');
      });
    }
  </script>


</body>
</html>
