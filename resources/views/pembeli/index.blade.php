@extends('layout.template')



@section('konten')
<!-- START DATA -->

<div class="my-3 px-4 p-3 bg-body rounded shadow-sm">
    <div class="mb-4 mt-3">
        <h2>Data Pembeli</h2>
    </div>
    <div class="d-flex justify-content-between mt-4" >

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pl-4 pb-3">
            <a href="{{ url('pembeli/create') }}" class="btn btn-outline-primary">+ Tambah Data</a>
        </div>

        <!-- FORM PENCARIAN -->
        <div class="pb-2">
            <form class="d-flex" action="{{ url('pembeli') }}" method="get" autocomplete="off">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Cari" aria-label="Search" style="width: 200px;">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>
    </div>
    <hr>

    @if($data->count() > 0)
    <table class="table table-striped text-center  align-middle"> <!--text-center--> 
        <thead>
            <tr>
                <th class="col">No</th>
                <th class="col">id pembeli</th>
                <th class="col">nama</th>
                <th class="col">nik</th>
                <th class="col">jenis kelamin</th>
                <th class="col">usia</th>
                <th class="col">alamat</th>
                <th class="col">no telepon</th>
                <th class="col">email</th>
                <th class="col">pekerjaan</th>
                <th class="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php $i = $data->firstitem() ?>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $i }}</td> <!-- (cara lain looping nomer)  <td>{{ $loop->iteration }}</td> -->
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->jns_kel }}</td>
                    <td>{{ $item->usia }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->no_tlp }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->pekerjaan }}</td>
                    
                    <td>
                        <a href="{{ url('pembeli/'.$item->id.'/edit')  }}" class="btn btn-warning btn-sm  ">Ubah</a>
                        <form onsubmit="return confirm('Yakin menghapus data pembeli?')" class="d-inline" action="{{ url('pembeli/'.$item->id) }}" method="post">
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