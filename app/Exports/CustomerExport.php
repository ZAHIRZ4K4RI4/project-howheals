<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
class CustomerExport implements FromQuery, WithMapping, ShouldAutoSize, WithHeadings
{
    use Exportable;
    public function query()
    {
        return Customer::query();
    }

    public function map($customers): array
    {
        return [
            $customers->nama,
            $customers->telepon,
            $customers->alamat,
            $customers->email,
            $customers->kode_customer,
        ];
    }

    public function headings(): array
    {
        return [
            'NAMA',
            'TELEPON',
            'ALAMAT',
            'EMAIL',
            'KODE CUSTOMER',
        ];
    }
}
