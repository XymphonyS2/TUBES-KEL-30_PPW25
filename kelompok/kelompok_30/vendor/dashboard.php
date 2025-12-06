<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Vendor - MBG System</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="container">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h2>🍱 Dashboard Vendor Catering</h2>
        <span>Halo, <strong>CV. Berkah Gizi</strong></span>
    </div>

    <div class="stats-grid">
        <div class="card" style="border-left-color: #27ae60;">
            <h3>Target Terpenuhi</h3>
            <p>15 Sekolah</p>
        </div>
        <div class="card" style="border-left-color: #f39c12;">
            <h3>Menu Belum Dikirim</h3>
            <p>3 Menu</p>
        </div>
        <div class="card" style="border-left-color: #c0392b;">
            <h3>Komplain Masuk</h3>
            <p>0 Laporan</p>
        </div>
    </div>

    <div style="margin-bottom: 20px;">
        <h3>Aksi Cepat</h3>
        <a href="menu_create.php" class="btn btn-primary">+ Buat Menu Harian Baru</a>
    </div>

    <h3>📅 Jadwal Pengiriman Hari Ini</h3>
    <table>
        <thead>
            <tr>
                <th>Sekolah Tujuan</th>
                <th>Waktu Makan</th>
                <th>Menu Utama</th>
                <th>Status Gizi</th>
                <th>Status Pengiriman</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>SDN 01 Teladan</td>
                <td>Siang</td>
                <td>Nasi + Ayam Teriyaki</td>
                <td><span style="color: green;">✔ Sesuai (650 kkal)</span></td>
                <td>Dikirim</td>
            </tr>
            <tr>
                <td>SMP N 3 Lampung</td>
                <td>Siang</td>
                <td>Nasi + Ikan Fillet</td>
                <td><span style="color: green;">✔ Sesuai (600 kkal)</span></td>
                <td>Proses Masak</td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>