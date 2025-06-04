@extends('layout.template')


@section('konten')
<!-- START FORM -->
<div class="container mt-4" style="width: 80%;">

    <form action="{{ url('pembelian') }}" method='post' autocomplete="off">
        @csrf
        <div class="my-6 p-3 px-5 bg-body rounded shadow-sm">
            <div class="mb-4 text-center">
                <h2>Tambah Data Pembelian</h2>
            </div>
            <div class="mb-3 row">
                <label for="kode" class="col-sm-2 col-form-label">kode</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='kode' value="{{ Session::get('kode') }}" kode="id">
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tgl' value="{{ Session::get('tgl') }}" id="tgl">
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="pabrikan" class="col-sm-2 col-form-label">Pabrikan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='pabrikan' value="{{ Session::get('pabrikan') }}" id="pabrikan">
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="mobil" class="col-sm-2 col-form-label">Mobil</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='mobil' value="{{ Session::get('mobil') }}" id="mobil">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='harga' value="{{ Session::get('harga') }}" id="harga">
                </div>
            </div>
            <br>
            <div class="col-sm-12 text-center">
                <a href="{{ url('pembelian') }}" class="btn btn-secondary mx-2">KEMBALI</a>
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
    </form>

</div>
<!-- AKHIR FORM -->
@endsection