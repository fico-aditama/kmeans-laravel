<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data Penduduk</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ccc; padding: 8px; font-size: 13px; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body onload="window.print()">
    <h2 style="text-align:center;">Data Penduduk</h2>
    <table>
        <thead>
            <tr>
                <th>NIK</th><th>Nama</th><th>Tahun</th><th>Periode</th>
                <th>KPS</th><th>Status Perkawinan</th><th>Umur</th>
                <th>Tanggungan</th><th>Pekerjaan</th><th>Penghasilan</th>
                <th>Status Rumah</th><th>Luas</th><th>Kondisi</th>
                <th>Listrik</th><th>Air</th><th>Kendaraan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penduduks as $p)
            <tr>
                <td>{{ $p->nik }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->tahun }}</td>
                <td>{{ $p->periode }}</td>
                <td>{{ $p->kps }}</td>
                <td>{{ $p->status_perkawinan }}</td>
                <td>{{ $p->umur }}</td>
                <td>{{ $p->jumlah_tanggungan }}</td>
                <td>{{ $p->pekerjaan }}</td>
                <td>{{ $p->penghasilan }}</td>
                <td>{{ $p->status_kepemilikan_rumah }}</td>
                <td>{{ $p->luas_bangunan }}</td>
                <td>{{ $p->kondisi_rumah }}</td>
                <td>{{ $p->jaringan_listrik }}</td>
                <td>{{ $p->sumber_air }}</td>
                <td>{{ $p->kepemilikan_kendaraan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
