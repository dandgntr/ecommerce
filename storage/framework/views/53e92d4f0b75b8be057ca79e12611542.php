<div class="bg-gray-800 text-white w-1/4 h-screen fixed left-0 top-0 pt-16 p-4"> <!-- Menambahkan pt-16 untuk menghindari navbar -->
    <h2 class="text-xl font-semibold mb-4">Sidebar</h2>
    <ul>
        <li><a href="/dashboard" class="text-gray-300 hover:text-white">Dashboard</a></li>
        <li><a href="<?php echo e(route('akun')); ?>" class="text-gray-300 hover:text-white">Akun</a></li>
        <li><a href="/profile" class="text-gray-300 hover:text-white">Produk</a></li>
        <li><a href="/profile" class="text-gray-300 hover:text-white">Penjualan</a></li>
        <!-- Tambahkan link lainnya sesuai kebutuhan -->
    </ul>
</div>
<?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/dash/sidebar.blade.php ENDPATH**/ ?>