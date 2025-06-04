


<?php $__env->startSection('konten'); ?>
<!-- START FORM -->
<div class="container mt-4" style="width: 80%;">

    <form action="<?php echo e(url('pembelian/'.$data->kode)); ?>" method='post' autocomplete="off">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="my-6 p-3 px-5 bg-body rounded shadow-sm">
            <div class="mb-4 text-center">
                <h2>Ubah Data Pembelian</h2>
            </div>
            <div class="mb-3 row">
                <label for="kode" class="col-sm-2 col-form-label">kode</label>
                <div class="col-sm-10">
                    <?php echo e($data->kode); ?>       
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tgl' value="<?php echo e($data->tgl); ?>" id="tgl">
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="pabrikan" class="col-sm-2 col-form-label">Pabrikan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='pabrikan' value="<?php echo e($data->pabrikan); ?>" id="pabrikan">
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="mobil" class="col-sm-2 col-form-label">Mobil</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='mobil' value="<?php echo e($data->mobil); ?>" id="mobil">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='harga' value="<?php echo e($data->harga); ?>" id="harga">
                </div>
            </div>
            <br>
            <div class="col-sm-12 text-center">
                <a href="<?php echo e(url('pembelian')); ?>" class="btn btn-secondary mx-2">KEMBALI</a>
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
    </form>

</div>
<!-- AKHIR FORM -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\program\latihan_laravel\resources\views/pembelian/edit.blade.php ENDPATH**/ ?>