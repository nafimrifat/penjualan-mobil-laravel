@extends('layout.template')



@section('konten')
<!-- START DATA -->

<div class="my-3 px-5 p-3 bg-body rounded shadow-sm ">
    <div class=" mb-4 mt-3">
        <h2>Data Mobil</h2>
    </div>
    <div class="d-flex justify-content-between mt-4">

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pl-6 pb-2 ">
            <a href="{{ url('mobil/create') }}" class="btn btn-outline-primary">+ Tambah Data</a>
        </div>

        <!-- FORM PENCARIAN -->
        <div class="pb-2">
            <form class="d-flex" action="{{ url('mobil') }}" method="get" autocomplete="off">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Cari" aria-label="Search" style="width: 200px;">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>
    </div>
    <hr>

    @if($data->count() > 0)
    <table class="table table-striped text-center align-middle"> <!--text-center-->
        <thead>
            <tr>
                <th class="col">No</th>
                <th class="col">kode</th>
                <th class="col">merek</th>
                <th class="col">tipe</th>
                <th class="col">warna</th>
                <th class="col">seat</th>
                <th class="col">tahun</th>
                <th class="col">bbm</th>
                <th class="col">harga</th>
                <th class="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $i = $data->firstitem() ?>
            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td> <!-- (cara lain looping nomer)  <td>{{ $loop->iteration }}</td> -->
                <td>{{ $item->kode }}</td>
                <td>{{ $item->merek }}</td>
                <td>{{ $item->tipe }}</td>
                <td>{{ $item->warna }}</td>
                <td>{{ $item->seat }}</td>
                <td>{{ $item->tahun }}</td>
                <td>{{ $item->bbm }}</td>
                <td>{{ $item->harga }}</td>
                <td>
                    <a href="{{url('mobil/'.$item->kode.'/edit') }}" class="btn btn-warning btn-sm">Ubah</a>
                    <form onsubmit="return confirm('Yakin menghapus data mobil?')" class="d-inline" action="{{ url('mobil/'.$item->kode) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm ">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
    </table>
    {{ $data->withQueryString()->links() }}
    @else
    <p class="text-center mt-4 fs-6">Tidak ada hasil pencarian untuk "{{ Request::get('katakunci') }}".</p>
    @endif
</div>
<!-- AKHIR DATA -->
@endsection