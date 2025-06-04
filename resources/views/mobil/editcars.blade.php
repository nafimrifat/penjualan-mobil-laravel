@extends('layout.template')


@section('konten')
<div class="container mt-4" style="width: 80%;">
    <!-- START FORM -->
    <form action="{{ url('mobil/'.$data->kode) }}" method='post' autocomplete="off">
        @csrf
        @method('PUT')
        <div class="my-6 p-3 px-5 bg-body rounded shadow-sm">
            <div class="mb-4 text-center">
                <h2>Ubah Data Mobil</h2>
            </div>
            <div class="mb-3 row">
                <label for="kode" class="col-sm-2 col-form-label">kode</label>
                <div class="col-sm-10">
                    {{ $data->kode }}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="merek" class="col-sm-2 col-form-label">merek</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='merek' value="{{ $data->merek }}" id="merek">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tipe" class="col-sm-2 col-form-label">tipe</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='tipe' value="{{ $data->tipe }}" id="tipe">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="warna" class="col-sm-2 col-form-label">warna</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='warna' value="{{ $data->warna }}" id="warna">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="seat" class="col-sm-2 col-form-label">seat</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='seat' value="{{ $data->seat }}" id="seat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tahun" class="col-sm-2 col-form-label">tahun</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='tahun' value="{{ $data->tahun }}" id="tahun">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bbm" class="col-sm-2 col-form-label">bbm</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='bbm' value="{{ $data->bbm }}" id="bbm">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='harga' value="{{ $data->harga }}" id="harga">
                </div>
            </div><br>

            <div class="col-sm-12 text-center">
                <a href="{{ url('mobil') }}" class="btn btn-secondary mx-2">KEMBALI</a>
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
        </div>
    </form>
    <!-- AKHIR FORM -->
</div>
@endsection