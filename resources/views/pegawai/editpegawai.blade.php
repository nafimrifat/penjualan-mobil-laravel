@extends('layout.template')


@section('konten')
<!-- START FORM -->
<div class="container mt-4" style="width: 80%;">

    <form action="{{ url('pegawai/'.$data->id) }}" method='post' autocomplete="off">
        @csrf
         @method('PUT')
        <div class="my-6 p-3 px-5 bg-body rounded shadow-sm">
            <div class="mb-4 text-center">
                <h2>Ubah Data Pegawai</h2>
            </div>
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">id Pegawai</label>
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
                <label for="jns_kelamin" class="col-sm-2 col-form-label">jenis kelamin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jns_kelamin' value="{{ $data->jns_kelamin }}" id="jns_kelamin">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="no_tlp" class="col-sm-2 col-form-label">no tlp</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='no_tlp' value="{{ $data->no_tlp }}" id="no_tlp">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="username" class="col-sm-2 col-form-label">username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='username' value="{{ $data->username }}" id="username">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='password' value="{{ $data->password }}" id="password">
                </div>
            </div> <br>
            <div class="col-sm-12 text-center">
                <a href="{{ url('pegawai') }}" class="btn btn-secondary mx-2">KEMBALI</a>
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
    </form>

</div>
<!-- AKHIR FORM -->
@endsection