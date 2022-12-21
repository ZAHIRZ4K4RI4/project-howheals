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
         $validateData = $request->validate([
             'email' => 'required|unique:customers',
             'textNama' => 'required',
         ]);

         $data = new Customer();
         $data->customertype = $request->selectCustomer;
         $data->nama = $request->nama;
         $data->telepon = $request->telepon;
         $data->alamat = $request->alamat;
         $data->email = $request->email;

         $data->password = bcrypt($request->password);
         $data->save();

         return redirect()->route('backend.customer.view')->with('info', 'Tambah Customer Berhasil');
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

         return redirect()->route('view.customers')->with('info', 'Update Customer Berhasil');
     }

     public function CustomerDelete($id)
     {
         $deleteData = Customer::find($id);
         $deleteData->delete();


         return redirect()->route('backend.customers.view')->with('info', 'Delete Customer Berhasil');
     }
}

