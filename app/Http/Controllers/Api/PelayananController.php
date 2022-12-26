<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelayanan;


class PelayananController extends Controller
{
    public function store(Request $request)
    {
    $validateData = $request->validate([
        'type_sepatu' => 'required|max:100',
        'pelayanan' => 'required|max:255',
        'harga' => 'required|max:225',
        'tanggal_masuk' => 'required|max:225',
        'estimasi_selesai' => 'required|max:225',
    ]);

    $new_pelayanan = new Pelayanan($validateData);
    if($new_pelayanan->save()){
        return response()->json([
            'messages' => 'pelayanan added',
            'data' => $new_pelayanan,
            'response_code' => 201
        ],201);
    }else{
        return response()->json([
            'message' => 'Error Occured'
        ],400);
    }
}
}