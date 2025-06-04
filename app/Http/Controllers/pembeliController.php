<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class pembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jmlbaris = 20;
        if (strlen($katakunci)) {
            $data = Pembeli::where('id', 'like', "%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('nik', 'like', "%$katakunci%")
                ->orWhere('jns_kel', 'like', "%$katakunci%")
                ->orWhere('alamat', 'like', "%$katakunci%")
                ->orWhere('no_tlp', 'like', "%$katakunci%")
                ->orWhere('email', 'like', "%$katakunci%")
                ->paginate($jmlbaris);
        } else {
            $data = Pembeli::orderBy('id', 'asc')->paginate($jmlbaris);
            // $data = Pembeli::paginate($jmlbaris);
        }
        return view('pembeli.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('id', $request->id);
        Session::flash('nama', $request->nama);
        Session::flash('nik', $request->nik);
        Session::flash('jns_kel', $request->jns_kel);
        Session::flash('usia', $request->usia);
        Session::flash('alamat', $request->alamat);
        Session::flash('no_tlp', $request->no_tlp);
        Session::flash('email', $request->email);
        Session::flash('pekerjaan', $request->pekerjaan);

        //validasi/mengecek apakah sudah terisi 
        $request->validate(
            [
                'id' => 'required|unique:pembeli,id',
                'nama' => 'required',
                'nik' => 'required',
                'jns_kel' => 'required',
                'usia' => 'required',
                'alamat' => 'required',
                'no_tlp' => 'required',
                'email' => 'required',
                'pekerjaan' => 'required',

            ],
            [
                'id.required' => 'id wajib diisi',
                'id.unique' => 'id yang dimasukan sudah ada',
                'nama.required' => 'nama wajib diisi',
                'nik.required' => 'NIK wajib diisi',
                'jns_kel.required' => 'jenis kelamin wajib diisi',
                'usia.required' => 'usia wajib diisi',
                'alamat.required' => 'alamat wajib diisi',
                'no_tlp.required' => 'no telepon wajib diisi',
                'email.required' => 'email wajib diisi',
                'pekerjaan.required' => 'pekerjaan wajib diisi'
            ]
        );
        $data = [
            'id' => $request->id,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'jns_kel' => $request->jns_kel,
            'usia' => $request->usia,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'email' => $request->email,
            'pekerjaan' => $request->pekerjaan,
        ];
        Pembeli::create($data);
        return redirect()->to('pembeli')->with('success', 'Berhasil menambah data pembeli');
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
        $data = Pembeli::where('id', $id)->first();
        return view('pembeli.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama' => 'required',
                'nik' => 'required',
                'jns_kel' => 'required',
                'usia' => 'required',
                'alamat' => 'required',
                'no_tlp' => 'required',
                'email' => 'required',
                'pekerjaan' => 'required',

            ],
            [
                'nama.required' => 'nama wajib diisi',
                'nik.required' => 'NIK wajib diisi',
                'jns_kel.required' => 'jenis kelamin wajib diisi',
                'usia.required' => 'usia wajib diisi',
                'alamat.required' => 'alamat wajib diisi',
                'no_tlp.required' => 'no telepon wajib diisi',
                'email.required' => 'email wajib diisi',
                'pekerjaan.required' => 'pekerjaan wajib diisi'
            ]
        );

        $data = [
            'nama' => $request->nama,
            'nik' => $request->nik,
            'jns_kel' => $request->jns_kel,
            'usia' => $request->usia,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'email' => $request->email,
            'pekerjaan' => $request->pekerjaan,
        ];
        pembeli::where('id', $id)->update($data);
        return redirect()->to('pembeli')->with('success', '*Berhasil mengubah data pembeli');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pembeli::where('id', $id)->delete();
        return redirect()->to('pembeli')->with('success', '*Berhasil menghapus data pembeli');
    }
}
