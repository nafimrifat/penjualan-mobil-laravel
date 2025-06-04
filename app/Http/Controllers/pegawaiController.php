<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class pegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jmlbaris = 20;
        if (strlen($katakunci)) {
            $data = Pegawai::where('id', 'like', "%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('jns_kelamin', 'like', "%$katakunci%")
                ->orWhere('no_tlp', 'like', "%$katakunci%")
                ->paginate($jmlbaris);
        } else {
            $data = Pegawai::orderBy('id', 'asc')->paginate($jmlbaris);
        }
        return view('pegawai.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Session::flash('id', $request->id);
        Session::flash('nama', $request->nama);
        Session::flash('jns_kelamin', $request->jns_kelamin);
        Session::flash('no_tlp', $request->no_tlp);
        Session::flash('username', $request->username);
        Session::flash('password', $request->password);


        //validasi/mengecek apakah sudah terisi 
        $request->validate(
            [
                'id' => 'required|unique:pegawai,id',
                'nama' => 'required',
                'jns_kelamin' => 'required',
                'no_tlp' => 'required',
                'username' => 'required ',
                'password' => 'required '

            ],
            [
                'id.required' => 'id wajib diisi',
                'id.unique' => 'id yang dimasukan sudah ada',
                'nama.required' => 'nama wajib diisi',
                'jns_kelamin.required' => 'jenis kelamin wajib diisi',
                'no_tlp.required' => 'no telepon wajib diisi',
                'username.required' => 'username wajib diisi',
                'password.required' => 'password wajib diisi'
            ]
        );

        $data = [
            'id' => $request->id,
            'nama' => $request->nama,
            'jns_kelamin' => $request->jns_kelamin,
            'no_tlp' => $request->no_tlp,
            'username' => $request->username,
            'password' => $request->password,
        ];
        pegawai::create($data);
        return redirect()->to('pegawai')->with('success', 'Berhasil menambah data pegawai');
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
        $data = pegawai::where('id', $id)->first();
        return view('pegawai.editpegawai')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama' => 'required',
                'jns_kelamin' => 'required',
                'no_tlp' => 'required',
                'username' => 'required ',
                'password' => 'required '

            ],
            [
                'nama.required' => 'nama wajib diisi',
                'jns_kelamin.required' => 'jenis kelamin wajib diisi',
                'no_tlp.required' => 'no telepon wajib diisi',
                'username.required' => 'username wajib diisi',
                'password.required' => 'password wajib diisi'
            ]
        );

        $data = [
            'nama' => $request->nama,
            'jns_kelamin' => $request->jns_kelamin,
            'no_tlp' => $request->no_tlp,
            'username' => $request->username,
            'password' => $request->password,
        ];
        pegawai::where('id', $id)->update($data);
        return redirect()->to('pegawai')->with('success', '*Berhasil mengubah data pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        pegawai::where('id', $id)->delete();
        return redirect()->to('pegawai')->with('success', '*Berhasil menghapus data pegawai');
    }
}
