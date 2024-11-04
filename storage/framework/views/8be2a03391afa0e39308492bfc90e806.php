

<?php $__env->startSection('title', 'All Products'); ?>

<?php $__env->startSection('content'); ?>
<style>
  /* Zoom effect styling */
  .zoom-effect {
    overflow: hidden;
    position: relative;
    transition: transform 0.3s ease;
  }

  .zoom-effect img {
    transition: transform 0.3s ease;
  }

  .zoom-effect:hover img {
    transform: scale(1.1);
  }
</style>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a href="<?php echo e(route('detail')); ?>" class="block relative h-72 rounded overflow-hidden zoom-effect">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="<?php echo e(asset('image/MonitorGaming.jpg')); ?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">MONITOR</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">ROG Swift OLED PG27AQDP</h2>
          <p class="mt-1">Rp 2.000.000</p>
        </div>
      </div>

      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-72 rounded overflow-hidden zoom-effect">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="<?php echo e(asset('image/Keyboard.png')); ?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">KEYBOARD</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Rexus Keyboard Mechanical Daiva D87</h2>
          <p class="mt-1">Rp 585.000</p>
        </div>
      </div>

      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-72 rounded overflow-hidden zoom-effect">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="<?php echo e(asset('image/Mouse.png')); ?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">MOUSE</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Rexus Mouse Gaming Xierra X16</h2>
          <p class="mt-1">Rp 175.000</p>
        </div>
      </div>

      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-72 rounded overflow-hidden zoom-effect">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="<?php echo e(asset('image/Headset.jpg')); ?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">HEADSET</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Rexus Headset Gaming Thundervox HX35</h2>
          <p class="mt-1">Rp. 369.000</p>
        </div>
      </div>

      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-72 rounded overflow-hidden zoom-effect">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="<?php echo e(asset('image/Mousepad.png')); ?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">MOUSEPAD</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Rexus Mousepad Gaming Kvlar T5</h2>
          <p class="mt-1">Rp 25.000</p>
        </div>
      </div>

      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-72 rounded overflow-hidden zoom-effect">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="<?php echo e(asset('image/Gamepad.png')); ?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">GAMEPAD</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Rexus Gamepad Daxa Borion AX8</h2>
          <p class="mt-1">Rp 589.000</p>
        </div>
      </div>

      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-72 rounded overflow-hidden zoom-effect">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="<?php echo e(asset('image/Microphone.jpg')); ?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">MICROPHONE</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">HyperX QuadCast 2 - USB Microphone (Black)</h2>
          <p class="mt-1">Rp 350.000</p>
        </div>
      </div>

      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-72 rounded overflow-hidden zoom-effect">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="<?php echo e(asset('image/GamingChair.png')); ?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">GAMING CHAIR</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Rexus Gaming Chair Edisi Akatsuki</h2>
          <p class="mt-1">Rp 2.999.000</p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('homelayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/product.blade.php ENDPATH**/ ?>