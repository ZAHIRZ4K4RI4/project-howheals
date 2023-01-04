<?php

namespace App\Http\Controllers\Backend;

use App\Exports\CustomerExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;

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
        $akun = new User();
        $akun->name = $request->nama;
        $akun->email = $request->kode_customer;
        $akun->password = bcrypt($request->telepon);
        $akun->save();

         $data = new Customer();
         $data->nama = $request->nama;
         $data->telepon = $request->telepon;
         $data->alamat = $request->alamat;
         $data->email = $request->email;
         $data->kode_customer = $request->kode_customer;
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
         $data->kode_customer = $request->kode_customer;
         $data->save();

         return redirect()->route('backend.customers.view')->with('info', 'Update Customer Berhasil');
     }

     public function CustomerDelete($id)
     {
         $deleteData = Customer::find($id);
         $deleteData->delete();


         return redirect()->route('backend.customers.view')->with('info', 'Delete Customer Berhasil');
     }

     public function export()
     {
        return (new CustomerExport)->download('data_customers.xlsx'); 
     }
}

