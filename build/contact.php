<?php require_once "inc/header.php"; ?>

<?php require_once "inc/nav.php"; ?>

<body>
<script>
  // Mobile Menu Toggle with icon change
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const menuIcon = menuBtn.querySelector('i');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    
    if (mobileMenu.classList.contains('hidden')) {
      menuIcon.classList.remove('fa-times');
      menuIcon.classList.add('fa-bars');
    } else {
      menuIcon.classList.remove('fa-bars');
      menuIcon.classList.add('fa-times');
    }
  });

  // Dropdown Toggle for Mobile only
  function toggleDropdown(menuId, iconId) {
    const dropdowns = [
      {menu: 'courses-mobile', icon: 'courses-icon-mobile'},
      {menu: 'login-mobile', icon: 'login-icon-mobile'},
    ];

    dropdowns.forEach(item => {
      const menu = document.getElementById(item.menu);
      const icon = document.getElementById(item.icon);

      if (item.menu === menuId) {
        menu.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
      } else {
        menu.classList.add('hidden');
        icon.classList.remove('rotate-180');
      }
    });
  }
</script>


<!-- 
<section class="h-96 bg-fixed bg-center bg-no-repeat bg-cover" style="background-image: url('./assets/img/about.png');">
  <div class="h-96 flex items-center justify-center bg-black bg-opacity-50">
    <h1 class="md:text-4xl text-2xl font-bold text-white">About us</h1>
  </div>
</section> -->

<section class="lg:py-20 py-10 xl:px-20 lg:px-10 px-5">

    <div class="flex lg:flex-row flex-col items-center">
            
        <div class="space-y-4 lg:w-1/2 w-full">
            <h1 class="text-4xl font-semibold">Contact</h1> 
            <p class="text-black text-lg "><i class="fa-solid fa-location-dot"></i>&nbsp; Lahore, Pakistan</p>
            <p class="text-black text-lg "><i class="fa-solid fa-envelope"></i>&nbsp; learninghub@gmail.com</p>
            <p class="text-black text-lg "><i class="fa-solid fa-phone"></i>&nbsp; 0562929978</p>
            <p class="text-black text-lg "><i class="fa-solid fa-clock"></i>&nbsp; Mon - Fri 8:00 AM to 5:00 PM</p>
        </div>

        <div class="lg:w-1/2 w-full">
             <form action="your-server-endpoint" method="POST" class="space-y-4">
      <div>
        <input type="text" name="name" placeholder="Your Name" required 
               class="w-full px-4 py-4 border border-black rounded-md focus:outline-none focus:ring-1 focus:ring-black">
      </div>
      <div>
        <input type="email" name="email" placeholder="Your Email" required 
               class="w-full px-4 py-4 border border-black rounded-md focus:outline-none focus:ring-1 focus:ring-black">
      </div>
      <div>
        <input type="text" name="subject" placeholder="Subject" required 
               class="w-full px-4 py-4 border border-black rounded-md focus:outline-none focus:ring-1 focus:ring-black">
      </div>
      <div>
        <textarea name="message" rows="5" placeholder="Your Message" required 
                  class="w-full px-4 py-4 border border-black rounded-md focus:outline-none focus:ring-1 focus:ring-black"></textarea>
      </div>
      <button type="submit" 
              class="w-full bg-black hover:bg-white border border-black text-white py-3 rounded-sm hover:text-black transition duration-300">
        Send Message
      </button>
    </form>
        </div>
    </div>
</section>

<?php require_once "inc/footer.php"; ?>

</body>
</html>