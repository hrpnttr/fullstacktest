<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bahan;
use App\Models\harga;
use App\Models\biaya;
use Illuminate\Support\Facades\DB;

class BiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bahans = DB::table('bahans')->get();

        // Ambil nilai gula, tepung, dan coklat dari tabel produk
        $hargas = DB::table('hargas')->get();

        $r = [];
        foreach ($bahans as $b){         
            // Hitung jumlah maksimum snak yang dapat diproduksi
            $ba = $b->jumlah;
            // $j = floor($hargas->harga / $jumlah_snak_gula);
            // echo $bahan->bahan;                
            $r[] = $ba;
        }

        $t = [];
        $ta = [];
        foreach ($hargas as $h){         
            // Hitung jumlah maksimum snak yang dapat diproduksi
            $ha = $h->jumlah;
            $hb = $h->harga;
            $t[] = $ha;
            $ta[] = $hb;
        }


        // $mergedItems = $r->concat($t); // Combine the two collections using the zip() method
        // The zip() method matches records based on the order they are fetched

        $ra = [];

        foreach ($r as $index => $value) {
            // Your code for each iteration
            // if (isset($item->bahan)) {
            //     // Field1 exists (from the first database)
            // }
            // $jumlah = floor($r / $t);
            // $biaya = floor($item[1]->harga / $jumlahs);

            $divisionResult = $t[$index] / $value; // Perform the division between corresponding elements
            // echo $item.' ';

            // dump($jumlah);
            // return $jumlah;

            // return response()->json([
            //     'jumlah' => $jumlah
            // ]);
            $ra[] = $divisionResult;
        }

        $rb = [];
        // $result = [];
        foreach ($ra as $index => $value) {
            $divisionResult =$ta[$index] / $value; // Perform the division between corresponding elements
            $decimalNumber = intval($divisionResult);
            $rb[] = $decimalNumber;
            $sum = array_sum($rb);
            $result = $sum;
        }

        return response()->json([
            'jumlah' => $result
        ]);

        

        // $jsonResult = json_encode($result);

        // return $jsonResult;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('biaya');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
