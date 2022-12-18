<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function TransaksiView()
    {
        $allDataTransaksi=transaksi::all();
        $data=transaksi::all();
        return view('backends.transaksi.view_transaksi', compact('data'));
    }
  

     public function TransaksiAdd()
     {
         // $allData Transaksi= Transaksi::all();
        $data=Transaksi::all();
        return view('backends.transaksi.add_transaksi');
     }

     public function TransaksiStore(Request $request)
     {
         $validateData = $request->validate([
             'email' => 'required|unique:Transaksi',
             'textNama' => 'required',
         ]);

         $data = new Transaksi();
         $data->Transaksitype = $request->selectTransaksi;
         $data->name = $request->textNama;
         $data->email = $request->email;
         $data->password = bcrypt($request->password);
         $data->save();

         return redirect()->route('backends.transaksi.view')->with('info', 'Tambah Transaksi Berhasil');
     }

     public function TransaksiEdit($id)
     {
         $editData = Transaksi::find($id);
         return view('backends.transaksi.edit', compact('editData'));
     }

     public function TransaksiUpdate(Request $request, $id)
     {
         $validateData = $request->validate([
             'email' => 'required|unique:Transaksi',
             'textNama' => 'required',
         ]);

         $data = Transaksi::find($id);
         $data->Transaksitype = $request->selectTransaksi;
         $data->name = $request->textNama;
         $data->email = $request->email;
          if($request->password!=""){
              $data->password=bcrypt($request->password);
          }

         $data->save();

         return redirect()->route('backends.transaksi.view')->with('info', 'Update Transaksi Berhasil');
     }

     public function TransaksiDelete($id)
     {
         $deleteData = Transaksi::find($id);
         $deleteData->delete();


         return redirect()->route('backends.transaksi.view')->with('info', 'Delete Transaksi Berhasil');
     }
}
