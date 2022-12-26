<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Pelayanan;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    public function PelayananView()
    {
        $data['allDataPelayanan'] = Pelayanan::all();
        return view('bakendss.pelayanan.view_pelayanan', $data);
    }
  
     public function PelayananAdd()
     {
         // $allData Pelayanan= Pelayanan::all();
        $data=Pelayanan::all();
        return view('bakendss.pelayanan.add_pelayanan');
     }

     public function PelayananStore(Request $request)
     {
         $data = new PelayananController();
         $data->type_sepatu = $request->type_sepatu;;
         $data->pelayanan = $request->pelayanan;
         $data->harga = $request->harga;
         $data->tanggal_masuk = $request->tanggal_masuk;
         $data->estimasi_selesai = $request->stimasi_selesai;
         $data->save();
         return redirect()->route('bakendss.pelayanan.view_pelayanan')->with('info', 'Tambah Pelayanan Berhasil');
     }

     public function PelayananEdit($id)
     {
         $editData = Pelayanan::find($id);
         return view('bakendss.pelayanan.edit_pelayanan', compact('editData'));
     }

     public function PelayananUpdate(Request $request, $id){
         $data = Pelayanan::find($id);
         $data->type_sepatu = $request->type_sepatu;
         $data->pelayanan = $request->pelayanan;
         $data->harga = $request->harga;
         $data->tanggal_masuk = $request->tanggal_masuk;
         $data->estimasi_selesai = $request->testimasi_selesai;
         $data->save();

         return redirect()->route('bakendss.pelayanan.view_pelayanan')->with('info', 'Update Pelayanan Berhasil');
     }

     public function PelayananDelete($id)
     {
         $deleteData = Pelayanan::find($id);
         $deleteData->delete();


         return redirect()->route('bakendss.pelayanan.view_pelayanan')->with('info', 'Delete Pelayanan Berhasil');
     }
}
