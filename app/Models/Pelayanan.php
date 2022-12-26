<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    use HasFactory;
    protected $table='pelayanans';
    protected $primarykey='id';
    public $timestamps=true;
    protected $fillable=[
        'type_sepatu','pelayanan','harga','tanggal_masuk','estimasi_selesai'
    ];
}