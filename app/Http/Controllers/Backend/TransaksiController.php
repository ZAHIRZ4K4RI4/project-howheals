<?php

namespace App\Http\Controllers\Backend;

use App\Exports\TransaksiExport;
use App\Http\Controllers\Controller;
use App\Models\Pelayanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function TransaksiView()
    {
        $data['allDataTransaksi'] = Transaksi::all();
        return view('backends.transaksi.view_transaksi', $data);
    }
  

     public function TransaksiAdd()
     {
         // $allData Transaksi= Transaksi::all();
        $data=Pelayanan::all();
        return view('backends.transaksi.add_transaksi',compact('data'));
     }

     public function TransaksiStore(Request $request)
     {
         $data = new Transaksi();
         $data->tanggal_masuk = $request->tanggal_masuk;
         $data->total_bayar = $request->total_bayar;
         $data->tanggal_bayar = $request->tanggal_bayar;
         $data->id_pelayanans = $request->id_pelayanans;
         $data->save();
         return redirect()->route('backends.transaksi.view')->with('info', 'Tambah Transaksi Berhasil');
     }

     public function TransaksiEdit($id)
     {
         $editData = Transaksi::find($id);
         return view('backends.transaksi.edit_transaksi', compact('editData'));
     }

     public function TransaksiUpdate(Request $request, $id){
         $data = Transaksi::find($id);
         $data->tanggal_masuk = $request->tanggal_masuk;
         $data->total_bayar = $request->total_bayar;
         $data->tanggal_bayar = $request->tanggal_bayar;
         $data->id_pelayanans = $request->id_pelayanans;
         $data->save();

         return redirect()->route('backends.transaksi.view')->with('info', 'Update Transaksi Berhasil');
     }

     public function TransaksiDelete($id)
     {
         $deleteData = Transaksi::find($id);
         $deleteData->delete();


         return redirect()->route('backends.transaksi.view')->with('info', 'Delete Transaksi Berhasil');
     }

     public function export()
     {
        return (new TransaksiExport)->download('data_transaksis.xlsx');
     }
}