

<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startSection('content'); ?>
  <div class="relative w-full overflow-hidden">
  <!-- Carousel container -->
  <div id="carousel" class="relative flex transition-transform duration-500 ease-out w-full">
    <!-- Slide 1 -->
    <div class="w-full flex-shrink-0">
      <img src="<?php echo e(asset('image/banner2.png')); ?>" alt="Slide 1" class="w-full max-w-[1920px] max-h-[672px] object-cover">
    </div>
    <!-- Slide 2 -->
    <div class="w-full flex-shrink-0">
      <img src="<?php echo e(asset('image/banner3.png')); ?>" alt="Slide 2" class="w-full max-w-[1920px] max-h-[672px] object-cover">
    </div>
    <!-- Slide 3 -->
    <div class="w-full flex-shrink-0">
      <img src="<?php echo e(asset('image/banner.jpeg')); ?>" alt="Slide 3" class="w-full max-w-[1920px] max-h-[672px] object-cover">
    </div>
  </div>

  <!-- Left and Right Buttons -->
  <button id="prevBtn" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-30 text-white w-10 h-10 flex items-center justify-center hover:bg-opacity-50 focus:outline-none">
    &lt;
  </button>
  <button id="nextBtn" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-30 text-white w-10 h-10 flex items-center justify-center hover:bg-opacity-50 focus:outline-none">
    &gt;
  </button>
</div>

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Spesial Deal
        <br class="hidden lg:inline-block">ROG Swift OLED PG27AQDP
      </h1>
      <p class="mb-8 leading-relaxed">Rasakan pengalaman gaming yang lebih maksimal! Dapatkan diskon besar untuk alat-alat gaming pilihan, performa tinggi dengan harga terjangkau. Buruan, jangan sampai kehabisan!</p>
      <div class="flex justify-center">
        <a href="<?php echo e(route('detail')); ?>" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Quick View</a>
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="<?php echo e(asset('image/Monitor.jpg')); ?>">
    </div>
  </div>
</section>

  <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Master Gear Gaming Sekiro</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Menjual Berbagai kebutuhan anda, Dari Monior, Headset, Mouse, Keyboard, Dll. kami menjual semuanya</p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="<?php echo e(asset('image/600 x 360.png')); ?>">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">KEYBOARD</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Rexus Keyboard Mechanical Daiva D87</h1>
            <p class="leading-relaxed">Keyboard Rexus Daiva kini memiliki layout TKL 87 tombol dengan desain compact dan fitur unggulan.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="<?php echo e(asset('image/601 x 361.png')); ?>">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">MOUSE</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Rexus Mouse Gaming Xierra X16</h1>
            <p class="leading-relaxed">Xierra X16 didukung oleh 7 tombol Huano yang awet. Tipe tombol ini memiliki durabilitas hingga 10 juta klik.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="<?php echo e(asset('image/602 x 362.jpg')); ?>">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">HEADSET</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Rexus Headset Gaming Thundervox HX35</h1>
            <p class="leading-relaxed">Nikmati audio premium dengan Headset Thundervox HX35 yang dilengkapi dengan fitur unggulan. </p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="<?php echo e(asset('image/603 x 363.jpg')); ?>">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">MOUSEPAD</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Rexus Mousepad Gaming Kvlar T5</h1>
            <p class="leading-relaxed">Bahan Rexus KVLAR T5 berkualitas tinggi sehingga fleksibel, kuat, awet, dan tak mudah sobek.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="<?php echo e(asset('image/605 x 365.jpg')); ?>">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">GAMEPAD</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Rexus Gamepad Daxa Borion AX8</h1>
            <p class="leading-relaxed">Daxa Borion Gamepad adalah kombinasi sempurna antara teknologi canggih dan desain elegan.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="<?php echo e(asset('image/606 x 366.jpg')); ?>">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">MICROPHONE</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">HyperX QuadCast 2 - USB Microphone (Black)</h1>
            <p class="leading-relaxed">QuadCast 2 menyempurnakan sesuatu yang membuat versi orisinal menjadi favorit di kalangan gamer.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- JavaScript for Carousel -->
<script>
  const carousel = document.getElementById('carousel');
  const slides = Array.from(carousel.children);
  let currentIndex = 0;
  const totalSlides = slides.length;

  function updateCarousel() {
    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
  }

  function goToNextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateCarousel();
  }

  function goToPrevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateCarousel();
  }

  // Auto-slide every 3 seconds
  setInterval(goToNextSlide, 3000);

  // Event listeners for navigation buttons
  document.getElementById('nextBtn').addEventListener('click', goToNextSlide);
  document.getElementById('prevBtn').addEventListener('click', goToPrevSlide);
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('homelayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/home.blade.php ENDPATH**/ ?>