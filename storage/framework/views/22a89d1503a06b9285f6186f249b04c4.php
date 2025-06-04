<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .link-effect {
            transition: transform 0.2s ease-out;
            display: inline-block;
        }

        /* Efek ketika dihover */
        .link-effect:hover {
            transform: translateY(-3px);
        }

        /* Efek ketika diklik */
        .link-effect:active {
            transform: translateY(3px);
        }
    </style>

</head>

<body class="bg-light">
    <main class="  d-flex">

        <!-- ini sidebar -->
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 240px; height: 100vh; box-shadow: 5px 20px 10px rgba(0, 0, 0, 0.1);">
            <a href="#" class="d-flex align-items-center fs-4 fw-semibold mb-3 px-5 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <i class="fa-solid fa-car"></i>
                <span class=" px-2">
                    <h3>ABCD</h3>
                </span>
            </a>

            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="mb-2">
                    <a href="#" class="nav-link link-body-emphasis">
                        <i class="fa-solid fa-gauge"></i>
                        Dashboard
                    </a>
                </li>
                <li class=" mb-2">
                    <a href="<?php echo e(url('mobil')); ?>" class="nav-link d-flex align-items-center gap-2 link-effect <?php echo e(Request::is('mobil') ? 'active' : ''); ?>" aria-current="page">
                        <i class="fa-solid fa-car"></i>
                        Mobil
                    </a>
                </li>

                <li class="mb-2">
                    <a href="<?php echo e(url('pembeli')); ?>" class="nav-link d-flex align-items-center gap-2 link-effect <?php echo e(Request::is('pembeli') ? 'active' : ''); ?>" aria-current="page">
                        <i class="fa-solid fa-users"></i>
                        Data Pembeli
                    </a>
                </li>
                <!-- <?php echo e(url('pegawai') ? 'active' : ''); ?> -->
                <li class="mb-2">
                    <a href="<?php echo e(url('pegawai')); ?>" class="nav-link d-flex align-items-center gap-2 link-effect  <?php echo e(Request::is('pegawai') ? 'active' : ''); ?>" aria-current="page">
                        <i class="fa-solid fa-user"></i>
                        Data Pegawai
                    </a>
                </li>

                <li class="mb-2">
                    <a href="<?php echo e(url('penjualan')); ?>" class="nav-link d-flex align-items-center gap-2 link-effect <?php echo e(Request::is('penjualan') ? 'active' : ''); ?>" aria-current="page">
                        <i class="fa-solid fa-file-lines"></i>
                        Data Penjualan
                    </a>
                </li>

                <li class="mb-2">
                    <a href="<?php echo e(url('bayar')); ?>" class="nav-link d-flex align-items-center gap-2 link-effect <?php echo e(Request::is('bayar') ? 'active' : ''); ?>" aria-current="page">
                        <i class="fa-solid fa-money-check-dollar"></i>
                        Pembayaran
                    </a>
                </li>
                <li class="mb-2">
                    <a href="<?php echo e(url('pembelian')); ?>" class="nav-link d-flex align-items-center gap-2 link-effect  <?php echo e(Request::is('pembelian') ? 'active' : ''); ?>" aria-current="page">
                        <i class="fa-solid fa-car-side"></i>
                        Pembelian
                    </a>
                </li>


            </ul>
            <hr>
        </div>

        <!-- end sidebar -->

        <div class="container" style="width: 100%;">
            <?php echo $__env->make('komponen.pesan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->yieldContent('konten'); ?>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH E:\program\latihan_laravel\resources\views/layout/template.blade.php ENDPATH**/ ?>