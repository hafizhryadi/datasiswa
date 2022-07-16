<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
       return view('siswa.index', compact(['siswa']));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view_data['page_title'] = 'Create Data';
        return view('siswa.create')-> with($view_data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nisn' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        Siswa::create([
            'nama' => $request->nama,
            'nisn' => $request->nisn,
            'jurusan' => $request->jurusan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
        ]);

        return redirect('/siswa')->with('status', 'Data berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa )
    {
        return view('siswa.detail', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required',
            'nisn' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
        ]);

        Siswa::where('id',$siswa->id)->update([
            'nama' => $request->nama,
            'nisn' => $request->nisn,
            'jurusan' => $request->jurusan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
        ]);


        return redirect('/siswa')->with('success', 'Data berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        
        return redirect()->route('siswa.index')->with('success', 'Data berhasil dihapus.');
    }
}
