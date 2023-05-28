<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bahan;
use Illuminate\Support\Facades\DB;

class BahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bahan = DB::table('bahans')->get();
        // dump ($data);
        return view('bahan.index', compact('bahan'));
    }
    /**

     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('bahan.create');
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
            'jumlah' => 'required'
        ]);

        Bahan::create($request->all());

        // return $request;
        return redirect('/bahan')->with('status', 'Data Tersimpan!');
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
    public function edit(Bahan $bahan)
    {
        return view('bahan.edit', compact('bahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bahan $bahan)
    {
        $request->validate([
            'bahan' => 'required',
            'jumlah' => 'required'
        ]);

        Bahan::where('id', $bahan -> id)
            -> update([
                'bahan' => $request->bahan,
                'jumlah' => $request->jumlah
            ]);

        return redirect('/bahan')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bahan $bahan)
    {
        Bahan::destroy($bahan -> id);
        return redirect('/bahan')->with('status', 'Data Terhapus!');;

        // $data = DB::table('bahans')->get();
        // $data = bahan::all();
        // dump($data);
        // return $bahan;
    }
}
