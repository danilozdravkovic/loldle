<?php $__env->startSection('title'); ?> Admin Panel - Champions <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> lol,league,of,legends,admin,panel <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Admin panel for loldle <?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptsHead'); ?> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <h1 class="mt-5">Champions</h1>
        <table id="champTable" >

                <?php if(count($champions)): ?>
                    <thead id="tableHead">
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Position</th>
                        <th>Specie</th>
                        <th>Resource</th>
                        <th>Range type</th>
                        <th>Region</th>
                        <th>Release year</th>
                        <th>Quote</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
            <tbody id="tableBody">
                <?php $__currentLoopData = $allChampions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $champion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="dataRows">
                        <td><img class="champImg" src="<?php echo e(asset('assets/img/champions/'.$champion->src)); ?>" alt="<?php echo e($champion->alt); ?>" /> </td>
                        <td><?php echo e($champion->name); ?></td>
                        <td><?php echo e($champion->gender); ?></td>
                        <td><?php echo e($champion->position); ?></td>
                        <td><?php echo e($champion->specie); ?></td>
                        <td><?php echo e($champion->resource); ?></td>
                        <td><?php echo e($champion->range); ?></td>
                        <td><?php echo e($champion->region); ?></td>
                        <td><?php echo e($champion->releaseYear); ?></td>
                        <td><?php echo e(stripslashes($champion->quote)); ?></td>
                        <td><a href="<?php echo e(route('showChampion',['id'=>$champion->id])); ?>"><button type="button" class="btn btn-primary">Edit</button></a></td>
                        <td><button type="button" onclick="deleteChampion(<?php echo e($champion->id); ?>)" class="btn btn-danger btnDelete">Delete</button></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <h2>There is no champions currently at database</h2>
            <?php endif; ?>

            </tbody>
        </table>
    </div>
    <div class="row">
        <h1 class="mt-5">Add new champion</h1>
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('addChampion')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Name:</label>
                <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control" id="exampleFormControlInput2">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">Upload champion picture:</label>
                <input type="file" name="img"  class="form-control" id="inputGroupFile01" >
            </div>
            <?php $__currentLoopData = $champions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <select class="form-select mt-4" name="<?php echo e(substr(array_search($data, $champions, $strict = true),0,strlen(array_search($data, $champions))-1)); ?>Select" aria-label="Default select example">
                    <option value="0" selected>Choose <?php echo e(substr(array_search($data, $champions),0,strlen(array_search($data, $champions))-1)); ?></option>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($gender->id); ?>"><?php echo e($gender->value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="mb-3 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Quote:</label>
                <input type="text"  name="quote" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Release year:</label>
                <input type="text"  name="year" class="form-control" id="exampleFormControlInput3">
            </div>
            <input class="btn btn-primary mb-5" type="submit" value="Add Champion">
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
<?php $__env->startSection('scriptsBody'); ?>
    <script src="<?php echo e(asset('assets/scripts/main.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminPanel/adminPanelLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ICT\III godina\Web\Web programiranje PHP 2\loldle\resources\views/adminPanel/pages/champions.blade.php ENDPATH**/ ?>