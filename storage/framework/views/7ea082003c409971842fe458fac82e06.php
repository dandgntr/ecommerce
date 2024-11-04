<header class="text-gray-600 body-font sticky top-0 bg-white z-50 shadow-md">
  <div class="container mx-auto flex flex-wrap py-3 px-5 md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900">
      <img src="<?php echo e(asset('image/logo1.png')); ?>" alt="Logo" class="w-10 h-10 rounded-full">
      <span class="ml-3 text-xl">Sekiro</span>
    </a>

    <nav class="md:mr-auto md:ml-6 md:py-1 md:pl-4 md:border-l md:border-gray-400 flex flex-wrap items-center text-base justify-center space-x-5">
      <a href="<?php echo e(route('home')); ?>" class="hover:text-gray-900">Home</a>
      <a href="<?php echo e(route('product')); ?>" class="hover:text-gray-900">Product</a>
      <a href="<?php echo e(route('contact')); ?>" class="hover:text-gray-900">Contact</a>
      <a href="#" class="hover:text-gray-900">Fourth Link</a>
    </nav>

    <div class="flex space-x-4 items-center ml-auto">
      <!-- Tampilkan Login dan Register jika pengguna belum login -->
      <?php if(auth()->guard()->guest()): ?>
        <a href="<?php echo e(route('login')); ?>" class="inline-flex items-center bg-indigo-500 text-white border-0 py-1 px-3 focus:outline-none hover:bg-indigo-600 rounded text-base">Login</a>
        <a href="<?php echo e(route('register')); ?>" class="inline-flex items-center bg-gray-100 text-gray-900 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base">Register</a>
      <?php endif; ?>

      <!-- Tampilkan dropdown dan logout jika pengguna sudah login -->
      <?php if(auth()->guard()->check()): ?>
        <div class="relative ml-3" x-data="{ open: false }">
          <button @click="open = !open" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
            <span class="sr-only">Open user menu</span>
            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User profile photo">
          </button>

          <!-- Dropdown menu -->
          <div x-show="open" @click.away="open = false" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Logout</a>
            <!-- Form Logout -->
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
              <?php echo csrf_field(); ?>
            </form>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</header>

<!-- Alpine.js untuk toggle dropdown -->

<?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/navbar.blade.php ENDPATH**/ ?>