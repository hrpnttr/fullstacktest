<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\harga;
use Illuminate\Support\Facades\DB;

class HargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $harga = DB::table('hargas')->get();
        return view('harga.index', compact('harga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('harga.create');
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
            'bahan' => 'required',
            'jumlah' => 'required',
            'harga' => 'required'
        ]);

        Harga::create($request->all());

        // return $request;
        return redirect('/harga')->with('status', 'Data Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Harga $harga)
    {
        return view('harga.edit', compact('harga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Harga $harga)
    {
        $request->validate([
            'bahan' => 'required',
            'jumlah' => 'required',
            'harga' => 'required'
        ]);

        Harga::where('id', $harga -> id)
            -> update([
                'bahan' => $request->bahan,
                'jumlah' => $request->jumlah,
                'harga' => $request->harga
            ]);

        return redirect('/harga')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Harga $harga)
    {
        Harga::destroy($harga -> id);
        return redirect('/harga')->with('status', 'Data Terhapus!');;
    }
}
