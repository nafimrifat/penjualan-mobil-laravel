<?php

namespace App\Http\Controllers;

use App\Models\Bayar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class bayarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request )
    {
        $katakunci = $request->katakunci;
        $jmlbaris = 20;
        if (strlen($katakunci)) {
            $data = Bayar::where('id', 'like', "%$katakunci%")
                ->orWhere('id_penjualan', 'like', "%$katakunci%")
                ->orWhere('tgl', 'like', "%$katakunci%")
                ->orWhere('bayar', 'like', "%$katakunci%")
                ->orWhere('metode', 'like', "%$katakunci%")
                ->orWhere('status', 'like', "%$katakunci%")
                ->paginate($jmlbaris);
        } else {
            $data = Bayar::orderBy('id', 'asc')->paginate($jmlbaris);
            // $data = Pembeli::paginate($jmlbaris);
        }
        return view('bayar.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bayar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('id', $request->id);
        Session::flash('id_penjualan', $request->id_penjualan);
        Session::flash('tgl', $request->tgl);
        Session::flash('bayar', $request->bayar);
        Session::flash('metode', $request->metode);
        Session::flash('status', $request->status);

        //validasi/mengecek apakah sudah terisi 
        $request->validate(
            [
                'id' => 'required|numeric|unique:bayar,id',
                'id_penjualan' => 'required',
                'tgl' => 'required',
                'bayar' => 'required',
                'metode' => 'required',
                'status' => 'required',
            ],
            [
                'id.required' => 'id wajib diisi',
                'id.numeric' => 'id wajib dalam angka',
                'id.unique' => 'id yang dimasukan sudah ada',
                'id_penjualan.required' => 'id penjualan wajib diisi',
                'tgl.required' => 'tanggal wajib diisi',
                'bayar.required' => 'bayar wajib diisi',
                'metode.required' => 'metode wajib diisi',
                'status.required' => 'status wajib diisi',
            ]
        );

        $data = [
            'id' => $request->id,
            'id_penjualan' => $request->id_penjualan,
            'tgl' => $request->tgl,
            'bayar' => $request->bayar,
            'metode' => $request->metode,
            'status' => $request->status,
        ];
        Bayar::create($data);
        return redirect()->to('bayar')->with('success', 'Berhasil menambah data pembayaran');
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
        $data = Bayar::where('id', $id)->first();
        return view('bayar.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validasi/mengecek apakah sudah terisi 
        $request->validate(
            [
                'id_penjualan' => 'required',
                'tgl' => 'required',
                'bayar' => 'required',
                'metode' => 'required',
                'status' => 'required',
            ],
            [
                'id_penjualan.required' => 'id penjualan wajib diisi',
                'tgl.required' => 'tanggal wajib diisi',
                'bayar.required' => 'bayar wajib diisi',
                'metode.required' => 'metode wajib diisi',
                'status.required' => 'status wajib diisi',
            ]
        );

        $data = [
            'id_penjualan' => $request->id_penjualan,
            'tgl' => $request->tgl,
            'bayar' => $request->bayar,
            'metode' => $request->metode,
            'status' => $request->status,
        ];
        Bayar::where('id', $id)->update($data);
        return redirect()->to('bayar')->with('success', '*Berhasil mengubah data pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Bayar::where('id', $id)->delete();
        return redirect()->to('bayar')->with('success', '*Berhasil menghapus data pembayaran');
    }
}
