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
        $curl = curl_init();

        curl_setopt_array($curl, array(
        'nama' => $request->nama,
        'telepon' => $request->telepon,
        'alamat' => $request->alamat,
        'email' => $request->email,
      ),
      CURLOPT_HTTPHEADER => array(
        'Accept: application/json'
      ),
    );

    $response = curl_exec($curl);

    curl_close($curl);
    echo "<pre>";
    echo $response;
    echo "</pre>";

      
      
        //  $data = new Transaksi();
        //  $data->tanggal_masuk = $request->tanggal_masuk;
        //  $data->total_bayar = $request->total_bayar;
        //  $data->tanggal_bayar = $request->tanggal_bayar;
        //  $data->save();
        //  return redirect()->route('backends.transaksi.view')->with('info', 'Tambah Transaksi Berhasil');
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
