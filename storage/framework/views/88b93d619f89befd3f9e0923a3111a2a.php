<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mobil</title>
    <style>
        img {
            max-width: 30%;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="hstack gap-3 ">
            <div class="p-2">
                <h2 class="text-secondary-emphasis">Data Mobil</h2>
            </div>
            <div class="p-2 ms-auto">
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-center align-middle border border-2 border-secondary ">
                <thead class="align-middle">
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col" class="col-1">kode mobil</th>
                        <th scope="col">merek</th>
                        <th scope="col">type</th>
                        <th scope="col">warna</th>
                        <th scope="col">harga</th>
                        <th scope="col" class="col-1">gambar</th>
                        <th scope="col">opsi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider ">
                    <tr>
                        <th scope="row">1</th>
                        <td>1001</td>
                        <td>Honda</td>
                        <td>Jazz</td>
                        <td>Putih</td>
                        <td>Rp 200.000.000</td>
                        <td><img src="images/jazz.jpg" class="img-fluid" alt="..."></td>

                        <td>detail |
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                            </svg>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td>1002</td>
                        <td>Daihatsu</td>
                        <td>Xenia</td>
                        <td>Silver</td>
                        <td>Rp 150.000.000</td>
                        <td><img src="images/xna.png" class="img-fluid" alt="..."></td>
                        <td>detail |
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                            </svg>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td>1003</td>
                        <td>Daihatsu</td>
                        <td>Ayla</td>
                        <td>Merah</td>
                        <td>Rp 150.000.000</td>
                        <td><img src="https://imgcdn.oto.com/large/gallery/color/7/1731/daihatsu-ayla-color-203812.jpg" class="img-fluid" alt="..."></td>
                        <td>detail |
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                            </svg>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">4</th>
                        <td>1004</td>
                        <td>Toyota</td>
                        <td>Avanza</td>
                        <td>Putih</td>
                        <td>Rp 210.000.000</td>
                        <td><img src="images/avz.png" class="img-fluid" alt="..."></td>
                        <td>detail |
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                            </svg>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">5</th>
                        <td>1005</td>
                        <td>Honda</td>
                        <td>Cr-z</td>
                        <td>Merah</td>
                        <td>Rp 280.000.000</td>
                        <td><img src="images/crz.png" class="img-fluid" alt="..."></td>
                        <td>detail |
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                            </svg>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">6</th>
                        <td>1006</td>
                        <td>Honda</td>
                        <td>Brio</td>
                        <td>Putih</td>
                        <td>Rp 150.000.000</td>
                        <td><img src="https://promohondajabodetabek.net/wp-content/uploads/2020/07/Honda-Brio-Black.png" class="img-fluid" alt="..."></td>
                        <td>detail |
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                            </svg>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>

        <div class="vstack gap-2 col-md-2 mx-auto mb-5">
            <button type="button" class="btn btn-outline-secondary">Tambah Data Mobil</button>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH E:\program\latihan_laravel\resources\views/datamobil.blade.php ENDPATH**/ ?>