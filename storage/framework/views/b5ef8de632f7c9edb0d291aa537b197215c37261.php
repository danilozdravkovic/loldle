<?php $__env->startSection('title'); ?> Admin Panel - Change Champion <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> lol,league,of,legends,admin,panel <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Admin panel for loldle <?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptsHead'); ?> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <h1 class="mt-5">Change existing champion</h1>
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('updateChampion')); ?>" enctype="multipart/form-data">
            <?php echo method_field("patch"); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Name:</label>
                <input type="text" name="name" value="<?php echo e($champion[0]->name); ?>" class="form-control" id="exampleFormControlInput2">
            </div>
            <input type="hidden" name="idChamp" value="<?php echo e($champion[0]->id); ?>">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <select class="form-select mt-4" name="<?php echo e(substr(array_search($table, $data,$strict=true),0,strlen(array_search($table, $data))-1)); ?>Select"  aria-label="Default select example">
                    <option value="0" selected>Choose <?php echo e(substr(array_search($table, $data),0,strlen(array_search($table, $data))-1)); ?></option>
                    <?php $__currentLoopData = $table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($column = substr(array_search($table, $data),0,strlen(array_search($table, $data))-1).'_id'); ?>

                        <?php if($champion[0]->$column==$value->id): ?>
                        <option selected value="<?php echo e($value->id); ?>"><?php echo e($value->value); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($value->id); ?>"><?php echo e($value->value); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="mb-3 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Quote:</label>
                <input type="text" value="<?php echo e($champion[0]->quote); ?>"  name="quote" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Release year:</label>
                <input type="text" value="<?php echo e($champion[0]->releaseYear); ?>"  name="year" class="form-control" id="exampleFormControlInput3">
            </div>
            <input class="btn btn-primary mb-5" type="submit" value="Change champion data">
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
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminPanel/adminPanelLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ICT\III godina\Web\Web programiranje PHP 2\loldle\resources\views/adminPanel/pages/editChamp.blade.php ENDPATH**/ ?>