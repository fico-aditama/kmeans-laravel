<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penduduk;
use Illuminate\Support\Facades\DB;

class PendudukSeeder extends Seeder
{
    public function run()
    {
        $file = database_path('seeders/data/dummy_penduduk_50.csv');
        
        if (!file_exists($file) || !is_readable($file)) {
            $this->command->error("File dummy_penduduk_50.csv tidak ditemukan atau tidak bisa dibaca.");
            return;
        }

        $header = null;
        $data = [];

        if (($handle = fopen($file, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, ',')) !== false) {
                if (!$header) {
                    $header = $row;
                    continue;
                }

                // Cocokkan data row dengan kolom DB
                $data[] = [
                    'nik' => $row[0],
                    'nama' => $row[1],
                    'tahun' => (int)$row[2],
                    'periode' => (int)$row[3],
                    'kps' => $row[4],  // "Memiliki kartu perlindungan sosial (KPS)" di csv jadi 'kps'
                    'status_perkawinan' => $row[5],
                    'umur' => $row[6],
                    'jumlah_tanggungan' => is_numeric($row[7]) ? (int)$row[7] : 0,
                    'pekerjaan' => $row[8],
                    'penghasilan' => $row[9],
                    'status_kepemilikan_rumah' => $row[10],
                    'luas_bangunan' => $row[11],
                    'kondisi_rumah' => $row[12],
                    'jaringan_listrik' => $row[13],
                    'sumber_air' => $row[14],
                    'kepemilikan_kendaraan' => $row[15],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            fclose($handle);
        }

        // Insert ke DB (gunakan insert batch supaya cepat)
        if (!empty($data)) {
            Penduduk::insert($data);
            $this->command->info(count($data) . ' data penduduk berhasil diimport.');
        } else {
            $this->command->warn('Tidak ada data untuk diimport.');
        }
    }
}
