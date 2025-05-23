<!DOCTYPE html>
<html lang="id">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANSOS KMEANS - Menu Utama</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
        <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Roboto', Arial, sans-serif;
            background: #f4f6fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            display: flex;
            flex: 1;
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
            margin: 0;
        }

        .sidebar ul li {
            padding: 15px 30px;
            font-size: 1.1rem;
        }

        .sidebar ul li a {
            color: inherit;
            text-decoration: none;
            display: block;
            transition: background 0.2s;
        }

        .sidebar ul li a:hover,
        .sidebar ul li.active a {
            background: rgba(255, 255, 255, 0.1);
            font-weight: bold;
        }

        .main-content {
            flex: 1;
            padding: 40px 20px 80px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #f4f6fa;
        }

        .main-card,
        .info-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.07);
            min-width: 400px;
            max-width: 600px;
            text-align: center;
            margin-bottom: 32px;
        }

        .main-card {
            padding: 32px 40px;
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
            font-size: 1.15rem;
        }

        .info-card {
            padding: 28px 32px;
        }

        .info-card h2 {
            font-size: 1.2rem;
            color: #374151;
            margin-bottom: 18px;
        }

        .info-card input[type="text"] {
            padding: 10px 14px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 1rem;
            width: 60%;
            margin-right: 10px;
        }

        .info-card button {
            padding: 10px 22px;
            background: #2563eb;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s;
        }

        .info-card button:hover {
            background: #1d4ed8;
        }

        footer {
            width: 100%;
            text-align: center;
            padding: 10px 0;
            font-size: 0.85rem;
            color: #6b7280;
            background: #e5e7eb;
        }

        @media (max-width: 600px) {

            .main-card,
            .info-card {
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
                padding: 10px;
                font-size: 0.9rem;
            }
        }
        </style>
    </head>

<body>
    <div class="wrapper" style="display:flex; flex-direction:column; min-height:100vh;">
        <div class="container" style="flex: 1;">
            <nav class="sidebar">
                <h2>BANSOS<span style="font-weight:400;">KMEANS</span></h2>
                <ul>
                    <li class="{{ request()->is('/') ? 'active' : '' }}">
                        <a href="/">MENU UTAMA</a>
                    </li>
                    <li class="{{ request()->is('informasi') ? 'active' : '' }}">
                        <a href="/informasi">INFORMASI</a>
                    </li>
                    <li class="{{ request()->is('login') ? 'active' : '' }}">
                        <a href="/login">LOGIN</a>
                    </li>
                </ul>
            </nav>

            <main class="main-content">
                <div class="main-card">
                    <img src="/images/tabalong.png" alt="Tabalong Logo"
                        onerror="this.onerror=null;this.src='https://upload.wikimedia.org/wikipedia/commons/6/65/Lambang_Kabupaten_Tabalong.png';">
                    <h1>Menu Utama</h1>
                    <p>
                        SELAMAT DATANG<br>
                        PENGELOMPOKKAN PENERIMA BANTUAN SOSIAL BERAS<br>
                        UNTUK MASYARAKAT MISKIN DI DESA BURUM KABUPATEN TABALONG
                    </p>
                </div>

                <div class="info-card">
                    <h2>LIHAT INFORMASI PENERIMAAN BANTUAN BERAS</h2>
                    <form method="GET" action="#">
                        <label for="nik" style="display:none;">NIK</label>
                        <input type="text" id="nik" name="nik" placeholder="Input NIK" required>
                        <button type="submit">Cari</button>
                    </form>
                </div>
            </main>
        </div>

        <footer>
            Copyright © Pengelompokkan Penerima Bantuan Sosial Beras Untuk Masyarakat Miskin
            Di Desa Burum Kabupaten Tabalong Menggunakan Metode K-Means
        </footer>
        </div>
    </body>

</html>