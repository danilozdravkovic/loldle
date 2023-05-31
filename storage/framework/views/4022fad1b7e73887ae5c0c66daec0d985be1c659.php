<?php $__env->startSection('title'); ?>Loldle - Classic <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?>lol,quiz,game,league,of,legends,guess,champion <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> League of legends game quiz. <?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptsHead'); ?> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<?php $__env->stopSection(); ?>
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
        </ul>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <h4 class="text-white">Guess today's League of Legends champion!</h4>
        <p>Type any champion to begin.</p>
    </div>
    <div class="row">
        <form>
            <div class="mb-3">
                <input id="inputChampName" class="form-control" type="text" onfocus="getAllChampion()" onkeyup="filterChampions()" >
            </div>
        </form>
        <div id="listOfChampions">

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/scripts/scriptClassic.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\C\Desktop\loldle\resources\views/pages/classic.blade.php ENDPATH**/ ?>