<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;
use Illuminate\Support\Facades\Session;


class JmobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jmlbaris = 20;
        if (strlen($katakunci)) {
            $data = mobil::where('kode', 'like', "%$katakunci%")
                ->orWhere('merek', 'like', "%$katakunci%")
                ->orWhere('tipe', 'like', "%$katakunci%")
                ->orWhere('warna', 'like', "%$katakunci%")
                ->orWhere('seat', 'like', "%$katakunci%")
                ->orWhere('tahun', 'like', "%$katakunci%")
                ->orWhere('bbm', 'like', "%$katakunci%")
                ->orWhere('harga', 'like', "%$katakunci%")
                ->paginate($jmlbaris);
        } else {
            $data = Mobil::orderBy('kode', 'asc')->paginate($jmlbaris);
        }
        return view('mobil.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mobil.updtcars');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Session::flash('kode', $request->kode);
        Session::flash('merek', $request->merek);
        Session::flash('tipe', $request->tipe);
        Session::flash('warna', $request->warna);
        Session::flash('seat', $request->seat);
        Session::flash('tahun', $request->tahun);
        Session::flash('bbm', $request->bbm);
        Session::flash('harga', $request->harga);

        //validasi
        $request->validate(
            [
                'kode' => 'required|unique:mobil,kode',
                'merek' => 'required',
                'tipe' => 'required',
                'warna' => 'required',
                'seat' => 'required|numeric',
                'tahun' => 'required|numeric',
                'bbm' => 'required',
                'harga' => 'required'
            ],
            [
                'kode.required' => 'Kode wajib diisi',
                'kode.unique' => 'Kode yang dimasukan sudah ada',
                'merek.required' => 'Merek wajib diisi',
                'tipe.required' => 'Tipe wajib diisi',
                'warna.required' => 'Warna wajib diisi',
                'seat.required' => 'Seat wajib diisi',
                'tahun.required' => 'Tahun wajib diisi',
                'bbm.required' => 'Bbm wajib diisi',
                'harga.required' => 'Harga wajib diisi'
            ]
        );

        $data = [
            'kode' => $request->kode,
            'merek' => $request->merek,
            'tipe' => $request->tipe,
            'warna' => $request->warna,
            'seat' => $request->seat,
            'tahun' => $request->tahun,
            'bbm' => $request->bbm,
            'harga' => $request->harga
        ];
        Mobil::create($data);
        return redirect()->to('mobil')->with('success', 'Berhasil menambah data mobil');
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
        $data = Mobil::where('kode', $id)->first();
        return view('mobil.editcars')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'merek' => 'required',
            'tipe' => 'required',
            'warna' => 'required',
            'seat' => 'required|numeric',
            'tahun' => 'required|numeric',
            'bbm' => 'required',
            'harga' => 'required'
        ], [
            'merek.required' => 'Merek wajib diisi',
            'tipe.required' => 'Tipe wajib diisi',
            'warna.required' => 'Warna wajib diisi',
            'seat.required' => 'Seat wajib diisi',
            'tahun.required' => 'Tahun wajib diisi',
            'bbm.required' => 'Bbm wajib diisi',
            'harga.required' => 'Harga wajib diisi'
        ]);

        $data = [
            'merek' => $request->merek,
            'tipe' => $request->tipe,
            'warna' => $request->warna,
            'seat' => $request->seat,
            'tahun' => $request->tahun,
            'bbm' => $request->bbm,
            'harga' => $request->harga
        ];
        Mobil::where('kode', $id)->update($data);
        return redirect()->to('mobil')->with('success', '*Berhasil mengubah data mobil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mobil::where('kode', $id)->delete();
        return redirect()->to('mobil')->with('success', '*Berhasil menghapus data mobil');
    }
}
