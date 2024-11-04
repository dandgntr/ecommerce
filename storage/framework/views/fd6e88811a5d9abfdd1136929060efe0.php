

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<div class="bg-cover bg-center flex items-center justify-center h-screen" style="background-image: url('<?php echo e(asset('image/background.jpg')); ?>');">

    <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">

            <!-- Notifikasi Berhasil -->
            <?php if(session('success')): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                    <span class="block sm:inline"><?php echo e(session('success')); ?></span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none';">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M14.348 14.849a1 1 0 0 1-1.415 0L10 11.415l-2.933 2.934a1 1 0 1 1-1.414-1.415l2.934-2.933-2.934-2.934a1 1 0 0 1 1.414-1.414L10 8.586l2.933-2.934a1 1 0 0 1 1.415 1.414L11.415 10l2.933 2.933a1 1 0 0 1 0 1.415z"/>
                        </svg>
                    </span>
                </div>
            <?php endif; ?>

            <!-- Notifikasi Gagal -->
            <?php if(session('error')): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                    <span class="block sm:inline"><?php echo e(session('error')); ?></span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none';">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M14.348 14.849a1 1 0 0 1-1.415 0L10 11.415l-2.933 2.934a1 1 0 1 1-1.414-1.415l2.934-2.933-2.934-2.934a1 1 0 0 1 1.414-1.414L10 8.586l2.933-2.934a1 1 0 0 1 1.415 1.414L11.415 10l2.933 2.933a1 1 0 0 1 0 1.415z"/>
                        </svg>
                    </span>
                </div>
            <?php endif; ?>
            
        <div class="flex justify-center mb-6">
            <span class="inline-block bg-gray-200 rounded-full p-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
            </span>
        </div>
        <h2 class="text-2xl font-semibold text-center mb-4">Create an account</h2>
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email Address *</label>
                <input type="email" id="email" name="email" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="hello@alignui.com">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password *</label>
                <input type="password" id="password" name="password" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="••••••••">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Login</button>
            <p class="text-gray-600 text-xs text-center mt-4">
                Don't have an account? <a href="<?php echo e(route('register')); ?>" class="text-blue-500 hover:underline">Register here</a>.
            </p>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('homelayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/auth/login.blade.php ENDPATH**/ ?>