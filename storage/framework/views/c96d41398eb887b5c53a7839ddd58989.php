


<?php $__env->startSection('konten'); ?>
<!-- START FORM -->
<div class="container mt-4" style="width: 80%;">

    <form action="<?php echo e(url('bayar')); ?>" method='post' autocomplete="off">
        <?php echo csrf_field(); ?>
        <div class="my-6 p-3 px-5 bg-body rounded shadow-sm">
            <div class="mb-4 text-center">
                <h2>Tambah Data Pembayaran</h2>
            </div>
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">Id bayar</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='id' value="<?php echo e(Session::get('id')); ?>" id="id">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="id_penjualan" class="col-sm-2 col-form-label">Id penjualan</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='id_penjualan' value="<?php echo e(Session::get('id_penjualan')); ?>" id="id_penjualan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tgl' value="<?php echo e(Session::get('tgl')); ?>" id="tgl">
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="bayar" class="col-sm-2 col-form-label">Bayar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='bayar' value="<?php echo e(Session::get('bayar')); ?>" id="bayar">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="metode" class="col-sm-2 col-form-label">Metode</label>
                <div class="col-sm-10">
                    <select class="form-control" id="metode" name="metode">
                        <option value="Tunai" <?php echo e(old('metode', 'Tunai') == 'Tunai' ? 'selected' : ''); ?>">Tunai</option>
                        <option value="Transfer" <?php echo e(old('metode', 'Tunai') == 'Transfer-v' ? 'selected' : ''); ?>">Transfer</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-control" id="status" name="status">
                        <option value="Belum Lunas" <?php echo e(old('status', 'Belum Lunas') == 'Belum Lunas' ? 'selected' : ''); ?>>Belum Lunas</option>
                        <option value="Lunas" <?php echo e(old('status', 'Belum Lunas') == 'Lunas' ? 'selected' : ''); ?>>Lunas</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="col-sm-12 text-center">
                <a href="<?php echo e(url('bayar')); ?>" class="btn btn-secondary mx-2">KEMBALI</a>
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
    </form>

</div>
<!-- AKHIR FORM -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\program\latihan_laravel\resources\views/bayar/create.blade.php ENDPATH**/ ?>