<?php $__env->startSection('title'); ?>Loldle <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?>lol,quiz,game,league,of,legends,guess,champion <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> League of legends game quiz. <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if(session()->has('user') || session()->has('admin') ): ?>
        <div class="alert alert-success mt-5" role="alert">
            You are already logged in!
        </div>
            <a href="<?php echo e(route('logout')); ?>">
                <div class="alert alert-primary" role="alert">
                    Log Out
                </div>
            </a>

    <?php else: ?>
    <form class="mt-5 mb-5" method="POST" action="<?php echo e(route('performLogin')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="email" class="form-label text-white">Email address:</label>
            <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control" id="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label text-white">Password:</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <input class="btn btn-primary" type="submit" value="Log In">
    </form>
    <?php if(session('error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\C\Desktop\loldle\resources\views/authentication/loginForm.blade.php ENDPATH**/ ?>