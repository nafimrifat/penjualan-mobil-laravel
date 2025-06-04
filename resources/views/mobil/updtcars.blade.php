@extends('layout.template')


@section('konten')
<!-- START FORM -->
<div class="container mt-4 " style="width: 80%;">

    <form action="{{ url('mobil') }}" method='post' autocomplete="off">
        @csrf
        <div class="my-6 p-3 px-5 bg-body rounded shadow-sm">
            <div class="mb-4 text-center">
                <h2>Tambah Data Mobil</h2>
            </div>
            <div class="mb-3 row ">
                <label for="kode" class="col-sm-2 col-form-label">kode</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='kode' value="{{ Session::get('kode') }}" id="kode">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="merek" class="col-sm-2 col-form-label">merek</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='merek' value="{{ Session::get('merek') }}" id="merek">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tipe" class="col-sm-2 col-form-label">tipe</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='tipe' value="{{ Session::get('tipe') }}" id="tipe">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="warna" class="col-sm-2 col-form-label">warna</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='warna' value="{{ Session::get('warna') }}" id="warna">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="seat" class="col-sm-2 col-form-label">seat</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='seat' value="{{ Session::get('seat') }}" id="seat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tahun" class="col-sm-2 col-form-label">tahun</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='tahun' value="{{ Session::get('tahun') }}" id="tahun">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bbm" class="col-sm-2 col-form-label">bbm</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='bbm' value="{{ Session::get('bbm') }}" id="bbm">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='harga' value="{{ Session::get('harga') }}" id="harga">
                </div>
            </div>
            <br>
            <!-- <div class="col-sm-10 mx-auto"> 
                <a href="{{ url('mobil') }}" class="btn btn-secondary mr-2">KEMBALI</a>
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div> -->

            <div class="col-sm-12 text-center">
                <a href="{{ url('mobil') }}" class="btn btn-secondary mx-2">KEMBALI</a>
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>

        </div>
    </form>

</div>
<!-- AKHIR FORM -->
@endsection