<?php

namespace App\Exports;

use App\Models\User;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Events\AfterSheet;

class UsersExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }

    public function map($data): array
    {

        $total_tagihan = env('HARGA_EVENT', 0) + $data->id;

        return array(
            $data->id,
            $data->name,
            $data->email,
            $data->gel,
            // $data->jenis_kelamin == 1 ? "Perempuan" : "Laki-laki",
            $data->hp,
            $data->instansi,
            // $data->kota,
            $data->ref,
            $data->ref_by,
            $data->status_pembayaran == 1 ? "PAID" : "UNPAID",
            $total_tagihan
        );
    }

    public function headings(): array
    {
        return [
            'id',
            'name',
            'email',
            'gelombang',
            // 'jenis_kelamin',
            'hp',
            'profesi',
            // 'kota',
            'ref',
            'ref by',
            'status pembayaran',
            'total tagihan',
        ];
    }

    public function registerEvents(): array
    {
        return array(
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->setAutoFilter('A1:'.$event->sheet->getDelegate()->getHighestColumn().'1');
            }
        );
    }
}
