<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function CustomerView()
    {
        // $allDataCustomer=Customer::all();
        $data['allDataCustomer'] = Customer::all();
        return view('backend.customers.view_customer', $data);
    }

        /**
         * kita nambahkan perintah curl untuk akses ke API
         * CURL_OPT => '10.252.36.29:8000/api/customer'
         * 
         */

       
  

     public function CustomerAdd()
     {
         // $allData Customer= Customer::all();
        $data=Customer::all();
        return view('backend.customers.add_customer');
     }

     public function CustomerStore(Request $request)
     {
        

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'localhost:8000/api/customer',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array(
          'nama' => $request->nama,
          'telepon' => $request->telepon,
          'alamat' => $request->alamat,
          'email' => $request->email,
        ),
        CURLOPT_HTTPHEADER => array(
          'Accept: application/json'
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      echo "<pre>";
      echo $response;
      echo "</pre>";

         $data = new Customer();
         $data->nama = $request->nama;
         $data->telepon = $request->telepon;
         $data->alamat = $request->alamat;
         $data->email = $request->email;
         $data->save();

         return redirect()->route('backend.customers.view')->with('info', 'Tambah Customer Berhasil');

     }

     public function CustomerEdit($id)
     {
         $editData = Customer::find($id);
         return view('backend.customers.edit_customer', compact('editData'));
     }

     public function CustomerUpdate(Request $request, $id){
         $data = Customer::find($id);
         $data->nama = $request->nama;
         $data->telepon = $request->telepon;
         $data->alamat = $request->alamat;
         $data->email = $request->email;
         $data->save();

         return redirect()->route('backend.customers.view')->with('info', 'Update Customer Berhasil');
     }

     public function CustomerDelete($id)
     {
         $deleteData = Customer::find($id);
         $deleteData->delete();


         return redirect()->route('backend.customers.view')->with('info', 'Delete Customer Berhasil');
     }
}

