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
    }
}
}