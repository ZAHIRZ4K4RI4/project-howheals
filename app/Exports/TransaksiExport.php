<?php

namespace App\Exports;

use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
class TransaksiExport implements FromQuery, WithMapping, ShouldAutoSize, WithHeadings
{
    use Exportable;
    public function query()
    {
        return Transaksi::query();
    }

    public function map($transaksis): array
    {
        return [
            $transaksis->tanggal_masuk,
            $transaksis->total_bayar,
            $transaksis->tanggal_bayar,
            $transaksis->id_pelayanans,
        ];
    }

    public function headings(): array
    {
        return [
            'TANGGAL MASUK',
            'TOTAL BAYAR',
            'TANGGAL BAYAR',
            'CUSTOMER',
        ];
    }
}
