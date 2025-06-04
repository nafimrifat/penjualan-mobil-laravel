



<?php $__env->startSection('konten'); ?>
<!-- START DATA -->

<div class="my-3 px-5 p-3 bg-body rounded shadow-sm">
    <div class="mb-4 mt-3">
        <h2>Data Pembelian Mobil</h2>
    </div>
    <div class="d-flex justify-content-between mt-4" >

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pl-4 pb-3">
            <a href="<?php echo e(url('pembelian/create')); ?>" class="btn btn-outline-primary">+ Tambah Data</a>
        </div>

        <!-- FORM PENCARIAN -->
        <div class="pb-2">
            <form class="d-flex" action="<?php echo e(url('pembelian')); ?>" method="get" autocomplete="off">
                <input class="form-control me-1" type="search" name="katakunci" value="<?php echo e(Request::get('katakunci')); ?>" placeholder="Cari" aria-label="Search" style="width: 200px;">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>
    </div>
    <hr>

    <?php if($data->count() > 0): ?>
    <table class="table table-striped text-center  align-middle"> <!--text-center--> 
        <thead>
            <tr>
                <th class="col">No</th>
                <th class="col">kode</th>
                <th class="col">tgl</th> 
                <th class="col">pabrikan</th>
                <th class="col">mobil</th>
                <th class="col">harga</th>
                <th class="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php $i = $data->firstitem() ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i); ?></td> <!-- (cara lain looping nomer)  <td><?php echo e($loop->iteration); ?></td> -->
                    <td><?php echo e($item->kode); ?></td>
                    <td><?php echo e($item->tgl); ?></td>
                    <td><?php echo e($item->pabrikan); ?></td>
                    <td><?php echo e($item->mobil); ?></td>
                    <td><?php echo e($item->harga); ?></td>
                    
                    <td>
                        <a href="<?php echo e(url('pembelian/'.$item->kode.'/edit')); ?>" class="btn btn-warning btn-sm  ">Ubah</a>
                        <form onsubmit="return confirm('Yakin menghapus data pembelian?')" class="d-inline" action="<?php echo e(url('pembelian/'.$item->kode)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" name="submit" class="btn btn-danger btn-sm ">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($data->withQueryString()->links()); ?>

    <?php else: ?>
    <p class="text-center mt-4 fs-6">Tidak ada data <?php echo e(Request::get('katakunci')); ?>.</p>
    <?php endif; ?>
</div>
<!-- AKHIR DATA -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\program\latihan_laravel\resources\views/pembelian/index.blade.php ENDPATH**/ ?>