<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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
        $data=Transaksi::all();
        return view('backends.transaksi.add_transaksi');
     }

     public function TransaksiStore(Request $request)
     {
         $data = new Transaksi();
         $data->Transaksitype = $request->selectTransaksi;
         $data->typesepatu = $request->type_sepatu;
         $data->pelayanan = $request->pelayanan;
         $data->tanggalmasuk = $request->tanggal_masuk;
         $data->estimasiselesai = $request->estimasi_selesai;
         $data->totalbayar = $request->total_bayar;
         $data->tanggalbayar = $request->tanggal_bayar;
         $data->save();
         return redirect()->route('backends.transaksi.view')->with('info', 'Tambah Transaksi Berhasil');
     }

     public function TransaksiEdit($id)
     {
         $editData = Transaksi::find($id);
         return view('backends.transaksi.edit', compact('editData'));
     }

     public function TransaksiUpdate(Request $request, $id){
         $data = Transaksi::find($id);
         $data->name = $request->type_sepatu;
         $data->pelayanan = $request->pelayanan;
         $data->tanggalmasuk = $request->tanggal_masuk;
         $data->estimasiselesai = $request->estimasi_selesai;
         $data->totalbayar = $request->total_bayar;
         $data->tanggalbayar = $request->tanggal_bayar;
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
