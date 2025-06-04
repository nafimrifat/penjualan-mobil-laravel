


<?php $__env->startSection('konten'); ?>
<div class="container mt-4" style="width: 80%;">
    <!-- START FORM -->
    <form action="<?php echo e(url('mobil/'.$data->kode)); ?>" method='post' autocomplete="off">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="my-6 p-3 px-5 bg-body rounded shadow-sm">
            <div class="mb-4 text-center">
                <h2>Ubah Data Mobil</h2>
            </div>
            <div class="mb-3 row">
                <label for="kode" class="col-sm-2 col-form-label">kode</label>
                <div class="col-sm-10">
                    <?php echo e($data->kode); ?>

                </div>
            </div>
            <div class="mb-3 row">
                <label for="merek" class="col-sm-2 col-form-label">merek</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='merek' value="<?php echo e($data->merek); ?>" id="merek">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tipe" class="col-sm-2 col-form-label">tipe</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='tipe' value="<?php echo e($data->tipe); ?>" id="tipe">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="warna" class="col-sm-2 col-form-label">warna</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='warna' value="<?php echo e($data->warna); ?>" id="warna">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="seat" class="col-sm-2 col-form-label">seat</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='seat' value="<?php echo e($data->seat); ?>" id="seat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tahun" class="col-sm-2 col-form-label">tahun</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='tahun' value="<?php echo e($data->tahun); ?>" id="tahun">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bbm" class="col-sm-2 col-form-label">bbm</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='bbm' value="<?php echo e($data->bbm); ?>" id="bbm">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='harga' value="<?php echo e($data->harga); ?>" id="harga">
                </div>
            </div><br>

            <div class="col-sm-12 text-center">
                <a href="<?php echo e(url('mobil')); ?>" class="btn btn-secondary mx-2">KEMBALI</a>
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
        </div>
    </form>
    <!-- AKHIR FORM -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\program\latihan_laravel\resources\views/mobil/editcars.blade.php ENDPATH**/ ?>