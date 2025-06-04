@extends('layout.template')


@section('konten')
<!-- START FORM -->
<div class="container mt-4" style="width: 80%;">

    <form action="{{ url('bayar') }}" method='post' autocomplete="off">
        @csrf
        <div class="my-6 p-3 px-5 bg-body rounded shadow-sm">
            <div class="mb-4 text-center">
                <h2>Tambah Data Pembayaran</h2>
            </div>
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">Id bayar</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='id' value="{{ Session::get('id') }}" id="id">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="id_penjualan" class="col-sm-2 col-form-label">Id penjualan</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='id_penjualan' value="{{ Session::get('id_penjualan') }}" id="id_penjualan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tgl' value="{{ Session::get('tgl') }}" id="tgl">
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="bayar" class="col-sm-2 col-form-label">Bayar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='bayar' value="{{ Session::get('bayar') }}" id="bayar">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="metode" class="col-sm-2 col-form-label">Metode</label>
                <div class="col-sm-10">
                    <select class="form-control" id="metode" name="metode">
                        <option value="Tunai" {{ old('metode', 'Tunai') == 'Tunai' ? 'selected' : '' }}">Tunai</option>
                        <option value="Transfer" {{ old('metode', 'Tunai') == 'Transfer-v' ? 'selected' : '' }}">Transfer</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-control" id="status" name="status">
                        <option value="Belum Lunas" {{ old('status', 'Belum Lunas') == 'Belum Lunas' ? 'selected' : '' }}>Belum Lunas</option>
                        <option value="Lunas" {{ old('status', 'Belum Lunas') == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="col-sm-12 text-center">
                <a href="{{ url('bayar') }}" class="btn btn-secondary mx-2">KEMBALI</a>
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
    </form>

</div>
<!-- AKHIR FORM -->
@endsection