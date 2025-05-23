<?php

namespace App\Exports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PendudukExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Penduduk::select([
            'nik', 'nama', 'alamat', 'tahun', 'periode', 'kps',
            'status_perkawinan', 'umur', 'jumlah_tanggungan', 'pekerjaan',
            'penghasilan', 'status_kepemilikan_rumah', 'luas_bangunan',
            'kondisi_rumah', 'jaringan_listrik', 'sumber_air', 'kepemilikan_kendaraan'
        ])->get();
    }

    public function headings(): array
    {
        return [
            'NIK', 'Nama', 'Alamat', 'Tahun', 'Periode', 'KPS',
            'Status Perkawinan', 'Umur', 'Jumlah Tanggungan', 'Pekerjaan',
            'Penghasilan', 'Status Kepemilikan Rumah', 'Luas Bangunan',
            'Kondisi Rumah', 'Jaringan Listrik', 'Sumber Air', 'Kepemilikan Kendaraan'
        ];
    }
}
