


<?php $__env->startSection('konten'); ?>
<!-- START FORM -->
<div class="container mt-4" style="width: 80%;">

    <form action="<?php echo e(url('pegawai')); ?>" method='post' autocomplete="off">
        <?php echo csrf_field(); ?>
        <div class="my-6 p-3 px-5 bg-body rounded shadow-sm">
            <div class="mb-4 text-center">
                <h2>Tambah Data Pegawai</h2>
            </div>
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">id Pegawai</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='id' value="<?php echo e(Session::get('id')); ?>" id="id">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="<?php echo e(Session::get('nama')); ?>" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jns_kelamin" class="col-sm-2 col-form-label">jenis kelamin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jns_kelamin' value="<?php echo e(Session::get('jns_kelamin')); ?>" id="jns_kelamin">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="no_tlp" class="col-sm-2 col-form-label">no Telepon</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='no_tlp' value="<?php echo e(Session::get('no_tlp')); ?>" id="no_tlp">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="username" class="col-sm-2 col-form-label">username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='username' value="<?php echo e(Session::get('username')); ?>" id="username">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='password' value="<?php echo e(Session::get('password')); ?>" id="password">
                </div>
            </div> <br>
            <div class="col-sm-12 text-center">
                <a href="<?php echo e(url('pegawai')); ?>" class="btn btn-secondary mx-2">KEMBALI</a>
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
    </form>

</div>
<!-- AKHIR FORM -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\program\latihan_laravel\resources\views/pegawai/create.blade.php ENDPATH**/ ?>