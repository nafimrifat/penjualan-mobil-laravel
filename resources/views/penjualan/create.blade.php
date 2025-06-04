@extends('layout.template')


@section('konten')
<!-- START FORM -->
<div class="container mt-4" style="width: 80%;">

    <form action="{{ url('penjualan') }}" method='post' autocomplete="off">
        @csrf
        <div class="my-6 p-3 px-5 bg-body rounded shadow-sm">
            <div class="mb-4 text-center">
                <h2>Tambah Data Penjualan</h2>
            </div>
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">Id penjualan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='id' value="{{ Session::get('id') }}" id="id">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tgl' value="{{ Session::get('tgl') }}" id="tgl">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="id_mobil" class="col-sm-2 col-form-label">mobil</label>
                <div class="col-sm-10">
                    <select class="form-control" id="id_mobil" name="id_mobil">
                        <option value="Avanza" {{ old('id_mobil', 'Avanza') == 'Avanza' ? 'selected' : '' }}">Avanza</option>
                        <option value="Hr-v" {{ old('id_mobil', 'Avanza') == 'Hr-v' ? 'selected' : '' }}">Hr-v</option>
                        <option value="Creta" {{ old('id_mobil', 'Avanza') == 'Creta' ? 'selected' : '' }}">Creta</option>
                        <option value="Alvez" {{ old('id_mobil', 'Avanza') == 'Alvez' ? 'selected' : '' }}">Alvez</option>
                        <option value="Br-v" {{ old('id_mobil', 'Avanza') == 'Br-v' ? 'selected' : '' }}">Br-v</option>
                        <option value="Xpander" {{ old('id_mobil', 'Avanza') == 'Xpander' ? 'selected' : '' }}">Xpander</option>
                    </select>
                    <!-- <input type="text" class="form-control" name='id_mobil' value="{{ Session::get('id_mobil') }}" id="id_mobil"> -->
                </div>
            </div>

            <div class="mb-3 row">
                <label for="id_pembeli" class="col-sm-2 col-form-label">Pembeli</label>
                <div class="col-sm-10">
                    <select class="form-control" id="id_pembeli" name="id_pembeli">
                        <option value="Tony" {{ old('id_pembeli', 'Tony') == 'Tony' ? 'selected' : '' }}>Tony</option>
                        <option value="Robert" {{ old('id_pembeli', 'Tony') == 'Robert' ? 'selected' : '' }}>Robert</option>
                        <option value="Sansa" {{ old('id_pembeli', 'Tony') == 'Sansa' ? 'selected' : '' }}>Sansa</option>
                        <option value="John" {{ old('id_pembeli', 'Tony') == 'John' ? 'selected' : '' }}>John</option>
                        <option value="Alysa" {{ old('id_pembeli', 'Tony') == 'Alysa' ? 'selected' : '' }}>Alysa</option>
                    </select>
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='harga' value="{{ Session::get('harga') }}" id="harga">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="status" class="col-sm-2 col-form-label">status</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='status' value="{{ Session::get('status') }}" id="harga">
                </div>
            </div>
            <br>
            <div class="col-sm-12 text-center">
                <a href="{{ url('penjualan') }}" class="btn btn-secondary mx-2">KEMBALI</a>
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
    </form>

</div>
<!-- AKHIR FORM -->
@endsection