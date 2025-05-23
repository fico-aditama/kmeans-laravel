<?php
namespace App\Imports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none'); // disable auto snake_case header

class PendudukImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;

    public function model(array $row)
    {
        return new Penduduk([
            'nik' => $row['nik'],
            'nama' => $row['nama'],
            'alamat' => $row['alamat'] ?? null,
            'tahun' => $row['tahun'],
            'periode' => $row['periode'],
            'kps' => $row['kps'],
            'status_perkawinan' => $row['status_perkawinan'],
            'umur' => $row['umur'],
            'jumlah_tanggungan' => $row['jumlah_tanggungan'] ?? null,
            'pekerjaan' => $row['pekerjaan'],
            'penghasilan' => $row['penghasilan'],
            'status_kepemilikan_rumah' => $row['status_kepemilikan_rumah'],
            'luas_bangunan' => $row['luas_bangunan'],
            'kondisi_rumah' => $row['kondisi_rumah'],
            'jaringan_listrik' => $row['jaringan_listrik'],
            'sumber_air' => $row['sumber_air'],
            'kepemilikan_kendaraan' => $row['kepemilikan_kendaraan'],
        ]);
            }

    public function rules(): array
    {
        return [
            'NIK' => 'required|numeric|digits:12|unique:penduduks,nik',
            'Nama' => 'required|string|max:255',
            'Tahun' => 'required|integer',
            'Periode' => 'required|integer',
            'KPS' => 'required|string',
            'Status Perkawinan' => 'required|string',
            'Umur' => 'required|string',
            'Jumlah Tanggungan' => 'nullable|string',
            'Pekerjaan' => 'required|string',
            'Penghasilan' => 'required|string',
            'Status Kepemilikan Rumah' => 'required|string',
            'Luas Bangunan' => 'required|string',
            'Kondisi Rumah' => 'required|string',
            'Jaringan Listrik' => 'required|string',
            'Sumber Air' => 'required|string',
            'Kepemilikan Kendaraan' => 'required|string',
        ];
    }
}
