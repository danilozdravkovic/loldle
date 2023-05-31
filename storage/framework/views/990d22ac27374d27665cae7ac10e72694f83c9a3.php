<?php $__env->startSection('title'); ?>Loldle - About Author <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?>lol,quiz,game,league,of,legends,guess,champion <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> League of legends game quiz. <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="mt-5 text-white text-center">Danilo Zdravković</h1>
                </div>
                <div class="col-12 align-items-lg-center">
                    <p id="aboutMe">Hello user.I am from Serbia ,and I am full-stack web developer.I study at "visoka ICT skola" university.I enjoy making websites and applications and making my clients dream become true.Im passionate about my job and i like it very much.</p>
                </div>
                <div class="col-12 ">
                    <img src="assets/img/me.jpg" class="img-fluid bg-dark" alt="author" />
                </div>
                <div class="col-12 mt-3">
                    <a class="text-white" href="assets/documentacion.pdf" target="_blank">Documentation</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\C\Desktop\loldle\resources\views/pages/aboutAuthor.blade.php ENDPATH**/ ?>