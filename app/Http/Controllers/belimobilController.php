<?php

namespace App\Http\Controllers;

use App\Models\BeliMobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class belimobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jmlbaris = 20;
        if (strlen($katakunci)) {
            $data = BeliMobil::where('kode', 'like', "%$katakunci%")
                ->orWhere('tgl', 'like', "%$katakunci%")
                ->orWhere('pabrikan', 'like', "%$katakunci%")
                ->orWhere('mobil', 'like', "%$katakunci%")
                ->orWhere('harga', 'like', "%$katakunci%")
                ->paginate($jmlbaris);
        } else {
            $data = BeliMobil::orderBy('kode', 'asc')->paginate($jmlbaris);
            // $data = Pembeli::paginate($jmlbaris);
        }
        return view('pembelian.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembelian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('kode', $request->kode);
        Session::flash('tgl', $request->tgl);
        Session::flash('pabrikan', $request->pabrikan);
        Session::flash('mobil', $request->mobil);
        Session::flash('harga', $request->harga);

        //validasi/mengecek apakah sudah terisi 
        $request->validate(
            [
                'kode' => 'required|numeric|unique:beli_mobil,kode',
                'tgl' => 'required',
                'pabrikan' => 'required',
                'mobil' => 'required',
                'harga' => 'required',
            ],
            [
                'kode.required' => 'kode wajib diisi',
                'kode.numeric' => 'kode wajib dalam angka',
                'kode.unique' => 'kode yang dimasukan sudah ada',
                'tgl.required' => 'tanggal wajib diisi',
                'pabrikan.required' => 'pabrikan wajib diisi',
                'mobil.required' => 'mobil wajib diisi',
                'harga.required' => 'harga wajib diisi',
            ]
        );

        $data = [
            'kode' => $request->kode,
            'tgl' => $request->tgl,
            'pabrikan' => $request->pabrikan,
            'mobil' => $request->mobil,
            'harga' => $request->harga,
        ];
        BeliMobil::create($data);
        return redirect()->to('pembelian')->with('success', 'Berhasil menambah data pembelian');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = BeliMobil::where('kode', $id)->first();
        return view('pembelian.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validasi/mengecek apakah sudah terisi 
        $request->validate([
                'tgl' => 'required',
                'pabrikan' => 'required',
                'mobil' => 'required',
                'harga' => 'required',
            ],
            [
                'tgl.required' => 'tanggal wajib diisi',
                'pabrikan.required' => 'pabrikan wajib diisi',
                'mobil.required' => 'mobil wajib diisi',
                'harga.required' => 'harga wajib diisi',
            ]
        );

        $data = [
            'tgl' => $request->tgl,
            'pabrikan' => $request->pabrikan,
            'mobil' => $request->mobil,
            'harga' => $request->harga,
        ];
        BeliMobil::where('kode', $id)->update($data);
        return redirect()->to('pembelian')->with('success', '*Berhasil mengubah data pembelian');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BeliMobil::where('kode', $id)->delete();
        return redirect()->to('pembelian')->with('success', '*Berhasil menghapus data pembelian');
    }
}
