<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANSOS KMEANS - Informasi</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', Arial, sans-serif;
            background: #f4f6fa;
        }
        .container {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            background: linear-gradient(180deg, #3b82f6 0%, #2563eb 100%);
            color: #fff;
            display: flex;
            flex-direction: column;
            padding-top: 30px;
        }
        .sidebar h2 {
            text-align: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 40px;
            letter-spacing: 1px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 15px 30px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.2s;
        }
        .sidebar ul li:hover, .sidebar ul li.active {
            background: rgba(255,255,255,0.1);
        }
        .main-content {
            flex: 1;
            padding: 40px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #f4f6fa;
        }
        .main-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.07);
            padding: 32px 40px;
            min-width: 400px;
            max-width: 800px;
            margin-bottom: 32px;
            text-align: center;
        }
        .main-card img {
            width: 100px;
            margin-bottom: 20px;
        }
        .main-card h1 {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #374151;
        }
        .main-card p {
            color: #6b7280;
            font-size: 1.1rem;
            margin-bottom: 0;
        }
        .info-section {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.07);
            padding: 28px 32px;
            min-width: 400px;
            max-width: 800px;
            text-align: center;
            margin-bottom: 24px;
        }
        .info-section h2 {
            font-size: 2rem;
            color: #888fa6;
            margin-bottom: 18px;
            font-weight: 400;
            letter-spacing: 1px;
        }
        .info-section p {
            color: #888fa6;
            font-size: 1.1rem;
            margin-bottom: 0;
        }
        .criteria-section {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.07);
            padding: 28px 32px;
            min-width: 400px;
            max-width: 800px;
            text-align: center;
        }
        .criteria-section h3 {
            font-size: 1.5rem;
            color: #888fa6;
            margin-bottom: 18px;
            font-weight: 400;
        }
        .criteria-section ol {
            text-align: left;
            color: #888fa6;
            font-size: 1.1rem;
            margin: 0 auto;
            max-width: 90%;
        }
        .criteria-section li {
            margin-bottom: 6px;
        }
        @media (max-width: 600px) {
            .main-card, .info-section, .criteria-section {
                min-width: unset;
                max-width: 95vw;
                padding: 18px 8px;
            }
            .sidebar {
                width: 100px;
                padding-top: 10px;
            }
            .sidebar h2 {
                font-size: 1rem;
                margin-bottom: 20px;
            }
            .sidebar ul li {
                padding: 10px 10px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <nav class="sidebar">
        <h2>BANSOS<span style="font-weight:400;">KMEANS</span></h2>
        <ul style="list-style: none; padding: 0; margin: 0;">
    <li style="{{ request()->is('/') ? 'font-weight: bold;' : '' }}">
        <a href="/" style="text-decoration: none; color: inherit;">MENU UTAMA</a>
    </li>
    <li style="{{ request()->is('informasi') ? 'font-weight: bold;' : '' }}">
        <a href="/informasi" style="text-decoration: none; color: inherit;">INFORMASI</a>
    </li>
    <li style="{{ request()->is('login') ? 'font-weight: bold;' : '' }}">
        <a href="/login" style="text-decoration: none; color: inherit;">LOGIN</a>
    </li>
</ul>
    </nav>
    <main class="main-content">
        <div class="main-card">
            <h1>Informasi</h1>
            <img src="/images/tabalong.png" alt="Tabalong Logo" onerror="this.onerror=null;this.src='https://upload.wikimedia.org/wikipedia/commons/6/65/Lambang_Kabupaten_Tabalong.png';">
        </div>
        <div class="info-section">
            <h2>PROGRAM RASKIN</h2>
            <p>Bantuan sosial beras masyarakat miskin (Raskin) adalah salah satu program pemerintah untuk membantu masyarakat yang miskin dan rawan pangan agar mereka mendapatkan beras untuk kebutuhan rumah tangganya. Program raskin tersebut adalah salah satu program penanggulangan kondisi kemiskinan termasuk dalam kluster I tentang bantuan perlindungan sosial. Program Raskin merupakan program nasional yang bertujuan membantu memenuhi kecukupan pangan dan mengurangi beban finansial rumah tangga miskin (RTM) melalui penyediaan beras bersubsidi. Sejak 2007, Menteri Koordinator Kesejahteraan Rakyat menjadi koordinator pelaksanaan Program Raskin. Untuk pendistribusian beras, Bagian Badan Urusan Logistik (Bulog) bertanggung jawab mendistribusikan beras hingga titik distribusi, dan pemerintah daerah bertanggung jawab menyalurkan beras dari titik distribusi kepada rumah tangga miskin (RTM)</p>
        </div>
        <div class="criteria-section">
            <h3>Kriteria Program Raskin</h3>
            <ol>
                <li>1. Warga Negara Indonesia yang bertempat tinggal/berdomisili di wilayah Desa Burum Kabupaten Tabalong;</li>
                <li>2. Memiliki kartu tanda penduduk (KTP) dan kartu keluarga (KK) yang masih berlaku;</li>
                <li>3. Memiliki kartu perlindungan sosial (KPS) : 15%;</li>
                <li>4. Status perkawinan janda/duda : 5%;</li>
                <li>5. Umur : 10%;</li>
                <li>6. Jumlah tanggungan keluarga : 10%;</li>
                <li>7. Pekerjaan : 10%;</li>
                <li>8. Penghasilan : 10%;</li>
                <li>9. Status kepemilikan rumah : 10%;</li>
                <li>10. Luas Bangunan : 10%;</li>
                <li>11. Kondisi rumah : 5%;</li>
                <li>12. Jaringan listrik : 5%;</li>
                <li>13. Sumber air : 5%;</li>
                <li>14. Kepemilikan harta berharga lainnya seperti kendaraan bermotor atau sepeda dan lainnya : 5%.</li>
            </ol>
        </div>
    </main>
</div>
</body>
</html>
