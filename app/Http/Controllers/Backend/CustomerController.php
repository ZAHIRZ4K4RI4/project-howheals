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
        $data=Customer::all();
        return view('backend.customers.view_customer', compact('data'));
    }
  

     public function CustomerAdd()
     {
         // $allData Customer= Customer::all();
         //$data['allData Customer']= Customer::all();
        return view('backend.customer.add_customer');
     }

     public function CustomerStore(Request $request)
     {
         $validateData = $request->validate([
             'email' => 'required|unique:customers',
             'textNama' => 'required',
         ]);

         $data = new Customer();
         $data->customertype = $request->selectCustomer;
         $data->name = $request->textNama;
         $data->email = $request->email;
         $data->password = bcrypt($request->password);
         $data->save();

         return redirect()->route('customer.view')->with('info', 'Tambah Customer Berhasil');
     }

     public function CustomerEdit($id)
     {
         $editData = Customer::find($id);
         return view('backend.customer.edit_customer', compact('editData'));
     }

     public function CustomerUpdate(Request $request, $id)
     {
         $validateData = $request->validate([
             'email' => 'required|unique:customers',
             'textNama' => 'required',
         ]);

         $data = Customer::find($id);
         $data->Customertype = $request->selectCustomer;
         $data->name = $request->textNama;
         $data->email = $request->email;
          if($request->password!=""){
              $data->password=bcrypt($request->password);
          }

         $data->save();

         return redirect()->route('customer.view')->with('info', 'Update Customer Berhasil');
     }

     public function CustomerDelete($id)
     {
         $deleteData = Customer::find($id);
         $deleteData->delete();


         return redirect()->route('customer.view')->with('info', 'Delete Customer Berhasil');
     }
}

