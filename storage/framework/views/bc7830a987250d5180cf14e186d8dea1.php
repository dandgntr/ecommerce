

<?php $__env->startSection('title', 'Akun'); ?>

<?php $__env->startSection('content'); ?>
<div class="font-sans overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-100 whitespace-nowrap">
          <tr>
            <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
              Name
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
              Email
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
              Role
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
              Joined At
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
              Actions
            </th>
          </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200 whitespace-nowrap">
          <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td class="px-4 py-4 text-sm text-gray-800">
              <?php echo e($user['name']); ?>

            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              <?php echo e($user['email']); ?>

            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              <?php echo e($user['role']); ?>

            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              <?php echo e($user['joined_at']); ?>

            </td>
            <td class="px-4 py-4 text-sm text-gray-800">
              <button class="text-blue-600 mr-4">Edit</button>
              <button class="text-red-600">Delete</button>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('homedash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/dash/akun.blade.php ENDPATH**/ ?>