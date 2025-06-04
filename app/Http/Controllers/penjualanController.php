<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class penjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jmlbaris = 20;
        if (strlen($katakunci)) {
            $data = Penjualan::where('id', 'like', "%$katakunci%")
                ->orWhere('tgl', 'like', "%$katakunci%")
                ->orWhere('id_mobil', 'like', "%$katakunci%")
                ->orWhere('id_pembeli', 'like', "%$katakunci%")
                ->orWhere('harga', 'like', "%$katakunci%")
                ->orWhere('status', 'like', "%$katakunci%")
                ->paginate($jmlbaris);
        } else {
            $data = Penjualan::orderBy('id', 'asc')->paginate($jmlbaris);
            // $data = Pembeli::paginate($jmlbaris);
        }
        return view('penjualan.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('id', $request->id);
        Session::flash('tgl', $request->tgl);
        Session::flash('id_mobil', $request->id_mobil);
        Session::flash('id_pembeli', $request->id_pembeli);
        Session::flash('harga', $request->harga);
        Session::flash('status', $request->status);

        //validasi/mengecek apakah sudah terisi 
        $request->validate(
            [
                'id' => 'required|numeric|unique:penjualan,id',
                'tgl' => 'required',
                'id_mobil' => 'required',
                'id_pembeli' => 'required',
                'harga' => 'required',
                'status' => 'required',
            ],
            [
                'id.required' => 'id wajib diisi',
                'id.numeric' => 'id wajib dalam angka',
                'id.unique' => 'id yang dimasukan sudah ada',
                'id_mobil.required' => 'mobil wajib diisi',
                'tgl.required' => 'tanggal wajib diisi',
                'id_pembeli.required' => 'pembeli wajib diisi',
                'harga.required' => 'harga wajib diisi',
                'status.required' => 'status wajib diisi',
            ]
        );

        $data = [
            'id' => $request->id,
            'tgl' => $request->tgl,
            'id_mobil' => $request->id_mobil,
            'id_pembeli' => $request->id_pembeli,
            'harga' => $request->harga,
            'status' => $request->status,
        ];
        Penjualan::create($data);
        return redirect()->to('penjualan')->with('success', 'Berhasil menambah data penjualan');
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
        $data = Penjualan::where('id', $id)->first();
        return view('penjualan.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
        //validasi/mengecek apakah sudah terisi 
        $request->validate(
            [
                'tgl' => 'required',
                'id_mobil' => 'required',
                'id_pembeli' => 'required',
                'harga' => 'required',
                'status' => 'required',
            ],[
                'id_mobil.required' => 'mobil wajib diisi',
                'tgl.required' => 'tanggal wajib diisi',
                'id_pembeli.required' => 'pembeli wajib diisi',
                'harga.required' => 'harga wajib diisi',
                'status.required' => 'status wajib diisi',
            ]);

        $data = [
            'tgl' => $request->tgl,
            'id_mobil' => $request->id_mobil,
            'id_pembeli' => $request->id_pembeli,
            'harga' => $request->harga,
            'status' => $request->status
        ];
        Penjualan::where('id', $id)->update($data);
        return redirect()->to('penjualan')->with('success', '*Berhasil mengubah data penjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Penjualan::where('id', $id)->delete();
        return redirect()->to('penjualan')->with('success', '*Berhasil menghapus data penjualan');
    }
}
