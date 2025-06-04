

<?php if(Session::has('success')): ?>
    <div class="pt-1">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(Session::get('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>


<?php endif; ?>


<?php if($errors->any()): ?>
<div class="pt-3">
    <div class="alert alert-danger  mx-auto alert-dismissible fade show" role="alert" style="width: 80%;">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($item); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<?php endif; ?><?php /**PATH E:\program\latihan_laravel\resources\views/komponen/pesan.blade.php ENDPATH**/ ?>