<?php $__env->startSection('title'); ?> Admin Panel - Users <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> lol,league,of,legends,admin,panel <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Admin panel for loldle <?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptsHead'); ?> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <h1 class="mt-5">Users</h1>
        <table id="userTable" >
            <?php if(count($users)): ?>
                <thead id="userTableHead">
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody id="userTableBody">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="dataRows">
                        <td><?php echo e($user->username); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->password); ?></td>
                        <td><?php echo e($user->value); ?></td>


                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <h2>There is no users currently at database</h2>
                <?php endif; ?>

                </tbody>
        </table>
    </div>
    <div class="row">
        <h1 class="mt-5">Add new user</h1>
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <form method="POST"  action="<?php echo e(route('addUser')); ?>">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Name:</label>
                <input type="text" name="username" value="<?php echo e(old('username')); ?>" class="form-control" id="exampleFormControlInput2">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Email:</label>
                <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control" id="exampleFormControlInput3">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput4" class="form-label">Password:</label>
                <input type="password" name="password" value="<?php echo e(old('password')); ?>" class="form-control" id="exampleFormControlInput4">
            </div>
            <select class="form-select mb-5" name="roleSelect">
                <option value="0">Choose role</option>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($role->id); ?>"><?php echo e($role->value); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <input class="btn btn-primary mb-5" type="submit" value="Add User">
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

<?php echo $__env->make('adminPanel/adminPanelLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ICT\III godina\Web\Web programiranje PHP 2\loldle\resources\views/adminPanel/pages/users.blade.php ENDPATH**/ ?>