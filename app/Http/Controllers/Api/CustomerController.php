<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:100',
            'telepon' => 'required|max:255',
            'alamat' => 'required|max:225',
            'email' => 'required|max:255',
        ]);
    
        $new_customer = new Customer($validateData);
        if($new_customer->save()){
            return response()->json([
                'messages' => 'customer added',
                'data' => $new_customer,
                'response_code' => 201
            ],201);
        }else{
            return response()->json([
                'message' => 'Error Occured'
            ],400);
        }
    }
}
