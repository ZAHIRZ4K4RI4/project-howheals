<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function store(Request $request)
    {
    $validateData = $request->validate([
        'tanggal_masuk' => 'required|max:100',
        'total_bayar' => 'required|max:255',
        'tanggal_bayar' => 'required|max:225',
        'id_pelayanans' => 'required|max:225',
    ]);

    $new_transaksi = new Transaksi($validateData);
    if($new_transaksi->save()){
        return response()->json([
            'messages' => 'transaksi added',
            'data' => $new_transaksi,
            'response_code' => 201
        ],201);
    }else{
        return response()->json([
            'message' => 'Error Occured'
        ],400);
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'localhost:8000/api/transaksi',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
}
}