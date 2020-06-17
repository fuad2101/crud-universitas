<?php

namespace App\Http\Controllers;

use App\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Jurusan $jurusans)
    {
        return view('jurusan')->with('jurusans',$jurusans->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validatedRequest =  $request->validate([
                            'nama_jurusan'=>'required|string',
                            'nama_dekan'=>'required|string',
                            'jumlah_mahasiswa'=>'required|min:0',
                        ]);

        Jurusan::create([
            'nama_jurusan'=> $validatedRequest['nama_jurusan'],
            'nama_dekan'=> $validatedRequest['nama_dekan'],
            'jumlah_mahasiswa'=> $validatedRequest['jumlah_mahasiswa'],
        ]);

        return redirect('/')->with('pesan','Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(Jurusan $jurusan)
    {
        return view('show',['jurusan'=>$jurusan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jurusan $jurusan)
    {
        return view('edit',['jurusan'=>$jurusan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        $validatedRequest =  $request->validate([
            'nama_jurusan'=>'required|string',
            'nama_dekan'=>'required|string',
            'jumlah_mahasiswa'=>'required|min:0',
        ]);

        Jurusan::where('id',$jurusan->id)->update([
        'nama_jurusan'=> $validatedRequest['nama_jurusan'],
        'nama_dekan'=> $validatedRequest['nama_dekan'],
        'jumlah_mahasiswa'=> $validatedRequest['jumlah_mahasiswa'],
        ]);

        return redirect('/')->with('pesan','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurusan $jurusan)
    {
        Jurusan::where('id',$jurusan->id)->delete();
        return redirect('/')->with('pesan','Data berhasil dihapus');
    }
}
