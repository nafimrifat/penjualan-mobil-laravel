@extends('layout.template')


@section('konten')
<!-- START FORM -->
<div class="container mt-4" style="width: 80%;">

    <form action="{{ url('pembeli/'.$data->id) }}" method='post' autocomplete="off">
        @csrf
         @method('PUT')
        <div class="my-6 p-3 px-5 bg-body rounded shadow-sm">
            <div class="mb-4 text-center">
                <h2>Ubah Data Pembeli</h2>
            </div>
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">Id Pembeli</label>
                <div class="col-sm-10">
                    {{ $data->id }} 
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='nik' value="{{ $data->nik }}" id="nik">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="jns_kel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jns_kel' value="{{ $data->jns_kel }}" id="jns_kel">
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="usia" class="col-sm-2 col-form-label">Usia</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='usia' value="{{ $data->usia }}" id="usia">
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='alamat' value="{{ $data->alamat }}" id="alamat">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="no_tlp" class="col-sm-2 col-form-label">No Telepon</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='no_tlp' value="{{ $data->no_tlp }}" id="no_tlp">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='email' value="{{ $data->email }}" id="email">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="pekerjaan" class="col-sm-2 col-form-label">pekerjaan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='pekerjaan' value="{{ $data->pekerjaan }}" id="pekerjaan">
                </div>
            </div> <br>
            <div class="col-sm-12 text-center">
                <a href="{{ url('pembeli') }}" class="btn btn-secondary mx-2">KEMBALI</a>
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
    </form>

</div>
<!-- AKHIR FORM -->
@endsection