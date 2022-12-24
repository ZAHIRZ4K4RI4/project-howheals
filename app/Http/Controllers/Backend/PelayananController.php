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
        return view('backend.pelayanans.view_pelayanan', $data);
    }
  

    //  public function PelayananAdd()
    //  {
    //      // $allData Pelayanan= Pelayanan::all();
    //     $data=Pelayanan::all();
    //     return view('backend.pelayanan.add_pelayanan');
    //  }

    //  public function PelayananStore(Request $request)
    //  {
    //      $data = new Pelayanan();
    //      $data->type_sepatu = $request->type_sepatu;
    //      $data->pelayanan = $request->pelayanan;
    //      $data->harga = $request->harga;
    //      $data->tanggal_masuk = $request->tanggal_masuk;
    //      $data->estimasi_selesai = $request->estimasi_selesai;
    //      $data->save();
    //      return redirect()->route('backendss.pelayanan.view')->with('info', 'Tambah Pelayanan Berhasil');
    //  }

    //  public function PelayananEdit($id)
    //  {
    //      $editData = Pelayanan::find($id);
    //      return view('backendss.pelayanan.edit_pelayanan', compact('editData'));
    //  }

    //  public function PelayananUpdate(Request $request, $id){
    //      $data = Pelayanan::find($id);
    //      $data->type_sepatu = $request->type_sepatu;
    //      $data->pelayanan = $request->pelayanan;
    //      $data->harga = $request->harga;
    //      $data->tanggal_masuk = $request->tanggal_masuk;
    //      $data->estimasi_selesai = $request->estimasi_selesai;
    //      $data->save();

    //      return redirect()->route('backendss.pelayanan.view')->with('info', 'Update Transaksi Berhasil');
    //  }

    //  public function PelayananDelete($id)
    //  {
    //      $deleteData = Pelayanan::find($id);
    //      $deleteData->delete();


    //      return redirect()->route('backendss.pelayanan.view')->with('info', 'Delete Pelayanan Berhasil');
    //  }
}
