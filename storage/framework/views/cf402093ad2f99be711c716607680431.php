


<?php $__env->startSection('konten'); ?>
<!-- START FORM -->
<div class="container mt-4" style="width: 80%;">

    <form action="<?php echo e(url('penjualan')); ?>" method='post' autocomplete="off">
        <?php echo csrf_field(); ?>
        <div class="my-6 p-3 px-5 bg-body rounded shadow-sm">
            <div class="mb-4 text-center">
                <h2>Tambah Data Penjualan</h2>
            </div>
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">Id penjualan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='id' value="<?php echo e(Session::get('id')); ?>" id="id">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tgl' value="<?php echo e(Session::get('tgl')); ?>" id="tgl">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="id_mobil" class="col-sm-2 col-form-label">mobil</label>
                <div class="col-sm-10">
                    <select class="form-control" id="id_mobil" name="id_mobil">
                        <option value="Avanza" <?php echo e(old('id_mobil', 'Avanza') == 'Avanza' ? 'selected' : ''); ?>">Avanza</option>
                        <option value="Hr-v" <?php echo e(old('id_mobil', 'Avanza') == 'Hr-v' ? 'selected' : ''); ?>">Hr-v</option>
                        <option value="Creta" <?php echo e(old('id_mobil', 'Avanza') == 'Creta' ? 'selected' : ''); ?>">Creta</option>
                        <option value="Alvez" <?php echo e(old('id_mobil', 'Avanza') == 'Alvez' ? 'selected' : ''); ?>">Alvez</option>
                        <option value="Br-v" <?php echo e(old('id_mobil', 'Avanza') == 'Br-v' ? 'selected' : ''); ?>">Br-v</option>
                        <option value="Xpander" <?php echo e(old('id_mobil', 'Avanza') == 'Xpander' ? 'selected' : ''); ?>">Xpander</option>
                    </select>
                    <!-- <input type="text" class="form-control" name='id_mobil' value="<?php echo e(Session::get('id_mobil')); ?>" id="id_mobil"> -->
                </div>
            </div>

            <div class="mb-3 row">
                <label for="id_pembeli" class="col-sm-2 col-form-label">Pembeli</label>
                <div class="col-sm-10">
                    <select class="form-control" id="id_pembeli" name="id_pembeli">
                        <option value="Tony" <?php echo e(old('id_pembeli', 'Tony') == 'Tony' ? 'selected' : ''); ?>>Tony</option>
                        <option value="Robert" <?php echo e(old('id_pembeli', 'Tony') == 'Robert' ? 'selected' : ''); ?>>Robert</option>
                        <option value="Sansa" <?php echo e(old('id_pembeli', 'Tony') == 'Sansa' ? 'selected' : ''); ?>>Sansa</option>
                        <option value="John" <?php echo e(old('id_pembeli', 'Tony') == 'John' ? 'selected' : ''); ?>>John</option>
                        <option value="Alysa" <?php echo e(old('id_pembeli', 'Tony') == 'Alysa' ? 'selected' : ''); ?>>Alysa</option>
                    </select>
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='harga' value="<?php echo e(Session::get('harga')); ?>" id="harga">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="status" class="col-sm-2 col-form-label">status</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='status' value="<?php echo e(Session::get('status')); ?>" id="harga">
                </div>
            </div>
            <br>
            <div class="col-sm-12 text-center">
                <a href="<?php echo e(url('penjualan')); ?>" class="btn btn-secondary mx-2">KEMBALI</a>
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
    </form>

</div>
<!-- AKHIR FORM -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\program\latihan_laravel\resources\views/penjualan/create.blade.php ENDPATH**/ ?>