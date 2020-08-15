<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = pertanyaan::all();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan.create');
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
            'pertanyaan' => 'required',
            'jawaban' => 'required',
            'email' => 'required'

        ]);

      pertanyaan::create([
          'nama' => $request->nama,
          'pertanyaan' => $request->pertanyaan,
          'jawaban' => $request->jawaban,
          'email' => $request->email,
      ]);

      return redirect('/pertanyaan')->with ('status','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function show(Pertanyaan $pertanyaan)
    {
        return view('pertanyaan.show', compact('pertanyaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pertanyaan $pertanyaan)
    {
        return view('pertanyaan.edit', compact ('pertanyaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pertanyaan $pertanyaan)
    {
        $request->validate([
            'nama' => 'required',
            'pertanyaan' => 'required',
            'jawaban' => 'required',
            'email' => 'required'
        ]);
        
        pertanyaan::where('id' , $pertanyaan->id)
                ->update([
                    'nama' => $request ->nama,
                    'pertanyaan' => $request ->pertanyaan,
                    'jawaban' => $request ->jawaban,
                    'email' => $request ->email,

                ]);
               
                return redirect ('/pertanyaan')->with ('status','Data Berhasil DiUbah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertanyaan $pertanyaan)
    {
        pertanyaan::destroy($pertanyaan->id);
        return redirect ('/pertanyaan')->with ('status','Data Berhasil Dihapus');
    }
}
