


<?php $__env->startSection('konten'); ?>
<!-- START FORM -->
<div class="container mt-4" style="width: 80%;">

    <form action="<?php echo e(url('pembeli/'.$data->id)); ?>" method='post' autocomplete="off">
        <?php echo csrf_field(); ?>
         <?php echo method_field('PUT'); ?>
        <div class="my-6 p-3 px-5 bg-body rounded shadow-sm">
            <div class="mb-4 text-center">
                <h2>Ubah Data Pembeli</h2>
            </div>
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">Id Pembeli</label>
                <div class="col-sm-10">
                    <?php echo e($data->id); ?>

                </div>
            </div>

            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="<?php echo e($data->nama); ?>" id="nama">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='nik' value="<?php echo e($data->nik); ?>" id="nik">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="jns_kel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jns_kel' value="<?php echo e($data->jns_kel); ?>" id="jns_kel">
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="usia" class="col-sm-2 col-form-label">Usia</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='usia' value="<?php echo e($data->usia); ?>" id="usia">
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='alamat' value="<?php echo e($data->alamat); ?>" id="alamat">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="no_tlp" class="col-sm-2 col-form-label">No Telepon</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='no_tlp' value="<?php echo e($data->no_tlp); ?>" id="no_tlp">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='email' value="<?php echo e($data->email); ?>" id="email">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="pekerjaan" class="col-sm-2 col-form-label">pekerjaan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='pekerjaan' value="<?php echo e($data->pekerjaan); ?>" id="pekerjaan">
                </div>
            </div> <br>
            <div class="col-sm-12 text-center">
                <a href="<?php echo e(url('pembeli')); ?>" class="btn btn-secondary mx-2">KEMBALI</a>
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
    </form>

</div>
<!-- AKHIR FORM -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\program\latihan_laravel\resources\views/pembeli/edit.blade.php ENDPATH**/ ?>