<?php $__env->startSection('title'); ?>Loldle <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?>lol,quiz,game,league,of,legends,guess,champion <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> League of legends game quiz. <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form class="mt-5 mb-5" method="POST" action="<?php echo e(route('registerValidation')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="email" class="form-label text-white">Email address:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value="<?php echo e(old('email')); ?>">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label text-white">Username:</label>
            <input type="text" name="username"  value="<?php echo e(old('username')); ?>" class="form-control" id="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label text-white">Password:</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <input class="btn btn-primary" type="submit" value="Register">
    </form>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\C\Desktop\loldle\resources\views/authentication/registerForm.blade.php ENDPATH**/ ?>