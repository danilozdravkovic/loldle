<?php $__env->startSection('title'); ?> AdminPanle - ActivityLog <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> lol,league,of,legends,admin,panel <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Admin panel for loldle <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <h1 class="mt-5">Champions</h1>
        <table id="champTable" >
            <?php if(count($data['activityLogs'])): ?>
                <thead id="tableHead">
                <tr>
                    <th>Log Type</th>
                    <th>Time</th>
                    <th>User</th>
                </tr>
                </thead>
                <tbody id="tableBody">
                <?php $__currentLoopData = $data['activityLogs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activityLog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="dataRows">
                        <td><?php echo e($activityLog->name); ?></td>
                        <td><?php echo e($activityLog->dateTime); ?></td>
                        <td><?php echo e($activityLog->user); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <h2>There is no champions currently at database</h2>
                <?php endif; ?>

                </tbody>
        </table>
        <nav aria-label="Page navigation example" class="mt-3">
            <ul class="pagination">
                <?php for($i=1;$i<=$data['numberOfPages'];$i++): ?>
                    <li class="page-item"><a class="page-link" href="activityLog?page=<?php echo e($i); ?>"><?php echo e($i); ?></a></li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminPanel/adminPanelLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ICT\III godina\Web\Web programiranje PHP 2\loldle\resources\views/adminPanel/pages/activityLog.blade.php ENDPATH**/ ?>