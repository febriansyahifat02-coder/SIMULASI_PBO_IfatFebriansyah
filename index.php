<?php
// Komentar: Menyertakan file koneksi database dan seluruh kelas yang diperlukan
require_once 'database.php';
require_once 'PendaftaranReguler.php';
require_once 'PendaftaranPrestasi.php';
require_once 'PendaftaranKedinasan.php';

try {
    // Komentar: Mengambil data mentah dari database menggunakan metode statis dari masing-masing kelas anak
    $dataReguler   = PendaftaranReguler::getDaftarReguler($pdo);
    $dataPrestasi  = PendaftaranPrestasi::getDaftarPrestasi($pdo);
    $dataKedinasan = PendaftaranKedinasan::getDaftarKedinasan($pdo);
} catch (PDOException $e) {
    die("Gagal mengambil data antarmuka: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Informasi Pendaftaran Mahasiswa Baru</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f9f9f9; color: #333; }
        h1 { text-align: center; color: #2c3e50; }
        h2 { margin-top: 30px; color: #2980b9; border-bottom: 2px solid #2980b9; padding-bottom: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; background-color: #fff; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #34495e; color: #fff; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h1>Daftar Pendaftaran Mahasiswa Baru</h1>

    <h2>Kategori: Jalur Reguler</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Informasi Spesifik Jalur</th>
                <th>Total Biaya Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataReguler as $row): ?>
                <?php
                // Komentar: Instansiasi objek PendaftaranReguler secara dinamis dari baris data database
                $objekReguler = new PendaftaranReguler(
                    $row['id_pendaftaran'],
                    $row['nama_calon'],
                    $row['asal_sekolah'],
                    $row['nilai_ujian'],
                    $row['biaya_pendaftaran_dasar'],
                    $row['pilihan_prodi'],
                    $row['lokasi_kampus']
                );
                ?>
                <tr>
                    <td><?= htmlspecialchars($row['id_pendaftaran']) ?></td>
                    <td><?= htmlspecialchars($row['nama_calon']) ?></td>
                    <td><?= htmlspecialchars($row['asal_sekolah']) ?></td>
                    <td><?= htmlspecialchars($row['nilai_ujian']) ?></td>
                    <td><?= htmlspecialchars($objekReguler->tampilkanInfoJalur()) ?></td>
                    <td>Rp <?= number_format($objekReguler->hitungTotalBiaya(), 2, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Kategori: Jalur Prestasi</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Informasi Spesifik Jalur</th>
                <th>Total Biaya Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataPrestasi as $row): ?>
                <?php
                // Komentar: Instansiasi objek PendaftaranPrestasi secara dinamis dari baris data database
                $objekPrestasi = new PendaftaranPrestasi(
                    $row['id_pendaftaran'],
                    $row['nama_calon'],
                    $row['asal_sekolah'],
                    $row['nilai_ujian'],
                    $row['biaya_pendaftaran_dasar'],
                    $row['jenis_prestasi'],
                    $row['tingkat_prestasi']
                );
                ?>
                <tr>
                    <td><?= htmlspecialchars($row['id_pendaftaran']) ?></td>
                    <td><?= htmlspecialchars($row['nama_calon']) ?></td>
                    <td><?= htmlspecialchars($row['asal_sekolah']) ?></td>
                    <td><?= htmlspecialchars($row['nilai_ujian']) ?></td>
                    <td><?= htmlspecialchars($objekPrestasi->tampilkanInfoJalur()) ?></td>
                    <td>Rp <?= number_format($objekPrestasi->hitungTotalBiaya(), 2, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Kategori: Jalur Kedinasan</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Informasi Spesifik Jalur</th>
                <th>Total Biaya Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataKedinasan as $row): ?>
                <?php
                // Komentar: Instansiasi objek PendaftaranKedinasan secara dinamis dari baris data database
                $objekKedinasan = new PendaftaranKedinasan(
                    $row['id_pendaftaran'],
                    $row['nama_calon'],
                    $row['asal_sekolah'],
                    $row['nilai_ujian'],
                    $row['biaya_pendaftaran_dasar'],
                    $row['sk_ikatan_dinas'],
                    $row['instansi_sponsor']
                );
                ?>
                <tr>
                    <td><?= htmlspecialchars($row['id_pendaftaran']) ?></td>
                    <td><?= htmlspecialchars($row['nama_calon']) ?></td>
                    <td><?= htmlspecialchars($row['asal_sekolah']) ?></td>
                    <td><?= htmlspecialchars($row['nilai_ujian']) ?></td>
                    <td><?= htmlspecialchars($objekKedinasan->tampilkanInfoJalur()) ?></td>
                    <td>Rp <?= number_format($objekKedinasan->hitungTotalBiaya(), 2, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>