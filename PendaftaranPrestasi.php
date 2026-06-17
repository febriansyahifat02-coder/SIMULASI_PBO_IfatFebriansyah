<?php
require_once 'Pendaftaran.php';

// Komentar: Kelas anak untuk merepresentasikan jalur pendaftaran prestasi
class PendaftaranPrestasi extends Pendaftaran {
    // Komentar: Atribut spesifik untuk pendaftaran jalur prestasi
    protected $jenisPrestasi;
    protected $tingkatPrestasi;

    // Komentar: Constructor untuk menginisialisasi atribut induk dan atribut spesifik prestasi
    public function __construct($id, $nama, $sekolah, $nilai, $biayaDasar, $jenis, $tingkat) {
        parent::__construct($id, $nama, $sekolah, $nilai, $biayaDasar);
        $this->jenisPrestasi = $jenis;
        $this->tingkatPrestasi = $tingkat;
    }

    // Komentar: Mengambil semua data pendaftaran yang memiliki jalur prestasi dari database
    public static function getDaftarPrestasi($db) {
        $query = "SELECT id_pendaftaran, nama_calon, asal_sekolah, nilai_ujian, biaya_pendaftaran_dasar, jalur_pendaftaran, jenis_prestasi, tingkat_prestasi FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Prestasi'";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // Komentar: Implementasi wajib metode hitungTotalBiaya dari kelas induk
    public function hitungTotalBiaya() {
        // Logika akan diimplementasikan pada tahap berikutnya
        return $this->biayaPendaftaranDasar;
    }

    // Komentar: Implementasi wajib metode tampilkanInfoJalur dari kelas induk
    public function tampilkanInfoJalur() {
        // Logika akan diimplementasikan pada tahap berikutnya
        return "Jalur Pendaftaran: Prestasi";
    }
}
?>