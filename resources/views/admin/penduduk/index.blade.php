@extends('layouts.admin')

@section('title', 'Data Penduduk - BANSOS KMEANS')

@section('content')
<div style="background:#fff; border-radius:12px; box-shadow:0 2px 12px rgba(0,0,0,0.07); padding:32px 40px; max-width:100%; margin:0 auto;">

    <h1 style="font-size:2rem; color:#888fa6; font-weight:400; margin-bottom:24px;">Data Penduduk</h1>

    @if(session('success'))
    <div style="margin-bottom:18px; color:#22c55e; background:#ecfdf5; padding:12px 16px; border-radius:6px;">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <script>alert("{{ session('error') }}");</script>
@endif
    <div style="display:flex; flex-wrap:wrap; justify-content:space-between; align-items:center; gap:12px; margin-bottom:18px;">
        <form method="GET" action="{{ route('penduduk.index') }}" style="display:flex; gap:8px;">
            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari nama atau NIK..."
                   style="padding:7px 12px; border:1px solid #d1d5db; border-radius:6px; font-size:1rem;">
            <button type="submit" style="background:#2563eb; color:#fff; border:none; border-radius:6px; padding:7px 16px; font-size:1rem;">Cari</button>
        </form>

        <div style="display:flex; gap:8px;">
            <form method="POST" action="{{ route('penduduk.import') }}" enctype="multipart/form-data">
            @csrf
                <input type="file" name="file" required>
                <button type="submit" style="background:#2563eb; color:#fff; border:none; border-radius:6px; padding:7px 14px;">Import</button>
            </form>
            <a href="{{ route('penduduk.format') }}" style="background:#f59e0b; color:#fff; padding:6px 12px;">Download Format Excel</a>
            <a href="{{ route('penduduk.export') }}" style="background:#22c55e; color:#fff; border:none; border-radius:6px; padding:7px 14px; text-decoration:none;">Export</a>
            <a href="{{ route('penduduk.create') }}" style="background:#10b981; color:#fff; border:none; border-radius:6px; padding:7px 14px; text-decoration:none;">Tambah Data</a>
            <a href="{{ route('penduduk.cetak') }}" target="_blank" style="background:#2563eb; color:#fff; padding:6px 12px;">Cetak PDF</a>
        </div>
    </div>

    <div style="overflow-x:auto;">
        <table style="width:100%; border-collapse:collapse; text-align:left; font-size:0.95rem;">
            <thead style="background:#f4f6fa; color:#888fa6;">
                <tr>
                    <th style="padding:10px; border-bottom:1px solid #e5e7eb;">NIK</th>
                    <th style="padding:10px; border-bottom:1px solid #e5e7eb;">Nama</th>
                    <th style="padding:10px; border-bottom:1px solid #e5e7eb;">Tahun</th>
                    <th style="padding:10px; border-bottom:1px solid #e5e7eb;">Periode</th>
                    <th style="padding:10px; border-bottom:1px solid #e5e7eb;">Memiliki kartu perlindungan sosial (KPS)</th>
                    <th style="padding:10px; border-bottom:1px solid #e5e7eb;">Status Perkawinan</th>
                    <th style="padding:10px; border-bottom:1px solid #e5e7eb;">Umur</th>
                    <th style="padding:10px; border-bottom:1px solid #e5e7eb;">Tanggungan</th>
                    <th style="padding:10px; border-bottom:1px solid #e5e7eb;">Pekerjaan</th>
                    <th style="padding:10px; border-bottom:1px solid #e5e7eb;">Penghasilan</th>
                    <th style="padding:10px; border-bottom:1px solid #e5e7eb;">Status Kepemilikan Rumah</th>
                    <th style="padding:10px; border-bottom:1px solid #e5e7eb;">Luas Bangunan</th>
                    <th style="padding:10px; border-bottom:1px solid #e5e7eb;">Kondisi Rumah</th>
                    <th style="padding:10px; border-bottom:1px solid #e5e7eb;">Jaringan Listrik</th>
                    <th style="padding:10px; border-bottom:1px solid #e5e7eb;">Sumber Air</th>
                    <th style="padding:10px; border-bottom:1px solid #e5e7eb;">Kepemilikan Kendaraan</th>
                    <th style="padding:10px; border-bottom:1px solid #e5e7eb;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($penduduks as $p)
                    <tr>
                        <td style="padding:10px; border-bottom:1px solid #e5e7eb;">{{ $p->nik }}</td>
                        <td style="padding:10px; border-bottom:1px solid #e5e7eb;">{{ $p->nama }}</td>
                        <td style="padding:10px; border-bottom:1px solid #e5e7eb;">{{ $p->tahun }}</td>
                        <td style="padding:10px; border-bottom:1px solid #e5e7eb;">{{ $p->periode }}</td>
                        <td style="padding:10px; border-bottom:1px solid #e5e7eb;">{{ $p->kps }}</td>
                        <td style="padding:10px; border-bottom:1px solid #e5e7eb;">{{ $p->status_perkawinan }}</td>
                        <td style="padding:10px; border-bottom:1px solid #e5e7eb;">{{ $p->umur }}</td>
                        <td style="padding:10px; border-bottom:1px solid #e5e7eb;">{{ $p->jumlah_tanggungan }}</td>
                        <td style="padding:10px; border-bottom:1px solid #e5e7eb;">{{ $p->pekerjaan }}</td>
                        <td style="padding:10px; border-bottom:1px solid #e5e7eb;">{{ $p->penghasilan }}</td>
                        <td style="padding:10px; border-bottom:1px solid #e5e7eb;">{{ $p->status_kepemilikan_rumah }}</td>
                        <td style="padding:10px; border-bottom:1px solid #e5e7eb;">{{ $p->luas_bangunan }}</td>
                        <td style="padding:10px; border-bottom:1px solid #e5e7eb;">{{ $p->kondisi_rumah }}</td>
                        <td style="padding:10px; border-bottom:1px solid #e5e7eb;">{{ $p->jaringan_listrik }}</td>
                        <td style="padding:10px; border-bottom:1px solid #e5e7eb;">{{ $p->sumber_air }}</td>
                        <td style="padding:10px; border-bottom:1px solid #e5e7eb;">{{ $p->kepemilikan_kendaraan }}</td>
                        <td style="padding:10px; border-bottom:1px solid #e5e7eb;">
                            <a href="{{ route('penduduk.edit', $p->id) }}" style="background:#2563eb; color:#fff; border:none; border-radius:4px; padding:6px 10px; text-decoration:none; margin-right:6px;">Ubah</a>
                            <form action="{{ route('penduduk.destroy', $p->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button type="submit" style="background:#ef4444; color:#fff; border:none; border-radius:4px; padding:6px 10px;" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="17" style="padding:10px; text-align:center; color:#888fa6;">Tidak ada data penduduk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div style="margin-top:24px;">
        {{ $penduduks->links('pagination::simple-tailwind') }}
    </div>
</div>
@endsection
