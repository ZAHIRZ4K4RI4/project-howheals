<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table='transaksis';
    protected $primarykey='id';
    public $timestamps=true;
    protected $fillable=[
        'tanggal_masuk','total_bayar','tanggal_bayar','id_pelayanans'
    ];
    public function pelayanans(){
        return $this->belongsTo(Pelayanan::class, 'id_pelayanans','id');
    }
}
