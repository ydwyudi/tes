<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = pegawai::all();//
        return view('posts.index',[
            'pegawais'=>$pegawai
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nip = $request->input('nip');
        $nama = $request->input('nama');
        $jabatan = $request->input('jabatan');

        $pegawai = new pegawai();
        $pegawai->nip = $nip;
        $pegawai->nama = $nama;
        $pegawai->jabatan = $jabatan;
        $pegawai->save();

        session()->flash('success','Data berhasil ditambah');

        return redirect('/posts');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pegawais = pegawai::find($id);
        return view('posts.edit',['pegawai' =>$pegawais]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pegawais = pegawai::find($id);
        $pegawais->update($request->all());
        // pegawai::where('id', $pegawai->id)
        // ->update([
        //     'nip'=>$request->nip,
        //     'nama'=>$request->nama,
        //     'jabatan'=>$request->jabatan,
        // ]);
        session()->flash('success','Data berhasil diedit');
        return redirect('/posts');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        pegawai::find($id)->delete();
        session()->flash('success','Data berhasil dihapus');
        return redirect('/posts');

    }
}
