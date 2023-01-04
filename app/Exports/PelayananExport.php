<?php

namespace App\Exports;

use App\Models\Pelayanan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
class PelayananExport implements FromQuery, WithMapping, ShouldAutoSize, WithHeadings
{
    use Exportable;
    public function query()
    {
        return Pelayanan::query();
    }

    public function map($pelayanans): array
    {
        return [
            $pelayanans->type_sepatu,
            $pelayanans->pelayanan,
            $pelayanans->status,
            $pelayanans->tanggal_masuk,
            $pelayanans->estimasi_selesai,
            $pelayanans->id_customers,
        ];
    }

    public function headings(): array
    {
        return [
            'TYPE_SEPATU',
            'PELAYANAN',
            'STATUS',
            'TANGGAL MASUK',
            'ESTIMASI SELESAI',
            'CUSTOMER',
        ];
    }
}
