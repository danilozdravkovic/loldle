<?php echo $__env->make('adminPanel/fixedAdmin/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<div class="container-fluid">
    <div class="row">
        <?php echo $__env->make('adminPanel/fixedAdmin/nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-10">
            <?php echo $__env->make('adminPanel/fixedAdmin/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="row" id="adminMain">
                <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</div>
</div>
<?php echo $__env->yieldContent('scriptsBody'); ?>
</body>
</html>

<?php /**PATH C:\Users\C\Desktop\loldle\resources\views/adminPanel/adminPanelLayout.blade.php ENDPATH**/ ?>