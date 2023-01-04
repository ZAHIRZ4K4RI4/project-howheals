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
            'kode_customer' => 'required|max:255',
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
            
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'localhost:8000/api/customer',
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
