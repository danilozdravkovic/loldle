<?php $__env->startSection('title'); ?>Loldle <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?>lol,quiz,game,league,of,legends,guess,champion <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> League of legends game quiz. <?php $__env->stopSection(); ?>
<?php $__env->startSection('menu'); ?>
    <?php if(session()->has('user') || session()->has('admin') ): ?>
        <ul>
            <?php if(session()->get('user')): ?>
                <li><p><?php echo e(session()->get('user')->username); ?></p></li>
                <?php endif; ?>
                <?php if(session()->get('admin')): ?>
                    <li><p class="text-danger"><?php echo e(session()->get('admin')->username); ?> as ADMIN</p></li>
                <?php endif; ?>
            <li><a class="text-white" href="<?php echo e(route('logout')); ?>">Log Out</a></li>
        </ul>
    <?php else: ?>
        <ul>
            <li><a class="text-white" href="<?php echo e(route('loginForm')); ?>">Log In</a></li>
            <li><a class="text-white" href="<?php echo e(route('registerForm')); ?>">Register</a></li>
            <li><a class="text-white" href="<?php echo e(route('aboutAuthor')); ?>">About Author</a></li>
        </ul>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <p class="text-center">Guess League of Legends champions</p>
    </div>
    <div class="row">
        <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="buttonImg">
                <a href="<?php echo e(route($link->href)); ?>"><img src="<?php echo e(asset('assets/img/'.$link->src)); ?>" alt="<?php echo e($link->alt); ?>"/></a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\C\Desktop\loldle\resources\views/pages/home.blade.php ENDPATH**/ ?>