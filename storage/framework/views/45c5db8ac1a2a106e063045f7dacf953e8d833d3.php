<?php echo $__env->make('fixed/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<div id="wrapper" class="container-fluid">
    <div class="container d-flex flex-row" id="main">
        <div class="row mainChild">
            <?php echo $__env->yieldContent('menu'); ?>
        </div>
        <div class="row d-flex justify-content-center mainChild" >
            <?php echo $__env->make('fixed.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->make('fixed.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\C\Desktop\loldle\resources\views/layouts/layout.blade.php ENDPATH**/ ?>