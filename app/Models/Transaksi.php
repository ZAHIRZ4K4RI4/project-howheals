<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table='transaksi';
    protected $primarykey='id';
    public $timestamps=true;
    protected $fillable=[
        'tanggal_masuk','total_bayar','tanggal_bayar'
    ];
}
