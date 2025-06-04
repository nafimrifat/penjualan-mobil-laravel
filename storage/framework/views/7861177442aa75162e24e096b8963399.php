<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Penjualan</title>
  <style>
    img {
      max-width: 30%;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <div class="hstack gap-3 mb-2">
      <div class="p-2">
        <h2 class="text-secondary-emphasis">Data Penjualan</h2>
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
      <table class="table table-bordered table-sm table-hover text-center align-middle">
        <thead class="align-middle ">
          <tr>
            <th scope="col">id penjualan</th>
            <th scope="col">tgl</th>
            <th scope="col">id pembeli</th>
            <th scope="col">nama pembeli</th>
            <th scope="col">telepon</th>
            <th scope="col">kode mobil</th>
            <th scope="col">type</th>
            <th scope="col">warna</th>
            <th scope="col">harga</th>
            <th scope="col">bayar</th>
            <th scope="col">keterangan</th>
            <th scope="col"></th>

          </tr>
        </thead>
        <tbody class="fw-light">
          <tr>
            <td>rz-312</td>
            <td>12-07-20</td>
            <td c>AB-253</td>
            <td>John F. Kennedy</td>
            <td>085318408274</td>
            <td>1012</td>
            <td>Ford Lincoln</td>
            <td>hitam</td>
            <td>Rp 324.230.410</td>
            <td>Online Banking</td>
            <td>lunas</td>
            <td>
              <button type="button" class="btn btn-outline-secondary vstack">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                </svg>
              </button>

            </td>
          </tr>

          <tr>
            <td>rz-313</td>
            <td>22-08-20</td>
            <td c>AB-254</td>
            <td>Jordan Belfort</td>
            <td>085172405442</td>
            <td>1024</td>
            <td>Mercedes-Benz A-200</td>
            <td>putih</td>
            <td>Rp 607.000.000</td>
            <td>Online Banking</td>
            <td>lunas</td>
            <td>
              <button type="button" class="btn btn-outline-secondary vstack">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                </svg>
              </button>

            </td>
          </tr>

          <tr>
            <td>rz-314</td>
            <td>19-08-20</td>
            <td c>AB-223</td>
            <td>Mark Hanna</td>
            <td>089367236123</td>
            <td>1070</td>
            <td>audi A6</td>
            <td>silver</td>
            <td>Rp 1.459.000.000</td>
            <td>Online Banking</td>
            <td>lunas</td>
            <td>
              <button type="button" class="btn btn-outline-secondary vstack">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                </svg>
              </button>
            </td>
          </tr>

          <tr>
            <td>rz-315</td>
            <td>09-09-20</td>
            <td c>AB-204</td>
            <td>John Wick</td>
            <td>085318408274</td>
            <td>1098</td>
            <td>Ford Mustang 1969</td>
            <td>hitam</td>
            <td>Rp 778.000.000</td>
            <td>Online Banking</td>
            <td>lunas</td>
            <td>
              <button type="button" class="btn btn-outline-secondary vstack"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                </svg></button>

            </td>
          </tr>


          <tr>
            <td>rz-316</td>
            <td>30-09-20</td>
            <td c>AB-235</td>
            <td>Peter Griffin</td>
            <td>081923067258</td>
            <td>1029</td>
            <td>Nissan Serena 2016</td>
            <td>hitam</td>
            <td>Rp 150.000.000</td>
            <td>kredit</td>
            <td>lunas</td>
            <td>
              <button type="button" class="btn btn-outline-secondary vstack">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                </svg>
              </button>
            </td>
          </tr>

          <tr>
            <td>rz-317</td>
            <td>03-10-20</td>
            <td c>AB-271</td>
            <td>Joel Drucman</td>
            <td>085137754231</td>
            <td>1011</td>
            <td>Toyota Rush</td>
            <td>hitam</td>
            <td>Rp 270.000.000</td>
            <td>kredit</td>
            <td>lunas</td>
            <td>
              <button type="button" class="btn btn-outline-secondary vstack">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                </svg>
              </button>
            </td>
          </tr>

          


        </tbody>

      </table>
    </div>

    <div class="vstack gap-2 col-md-3 mx-auto mb-5">
      <button type="button" class="btn btn-outline-secondary">Tambah Data Penjualan</button>
    </div>

  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH E:\program\latihan_laravel\resources\views/datapenjualan.blade.php ENDPATH**/ ?>