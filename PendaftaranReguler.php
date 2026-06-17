<?php
require_once 'Pendaftaran.php';

// Komentar: Kelas anak untuk merepresentasikan jalur pendaftaran reguler
class PendaftaranReguler extends Pendaftaran {
    // Komentar: Atribut spesifik untuk pendaftaran jalur reguler
    protected $pilihanProdi;
    protected $lokasiKampus;

    // Komentar: Constructor untuk menginisialisasi atribut induk dan atribut spesifik reguler
    public function __construct($id, $nama, $sekolah, $nilai, $biayaDasar, $prodi, $kampus) {
        parent::__construct($id, $nama, $sekolah, $nilai, $biayaDasar);
        $this->pilihanProdi = $prodi;
        $this->lokasiKampus = $kampus;
    }

    // Komentar: Mengambil semua data pendaftaran yang memiliki jalur reguler dari database
    public static function getDaftarReguler($db) {
        $query = "SELECT id_pendaftaran, nama_calon, asal_sekolah, nilai_ujian, biaya_pendaftaran_dasar, jalur_pendaftaran, pilihan_prodi, lokasi_kampus FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Reguler'";
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
        return "Jalur Pendaftaran: Reguler";
    }
}
?>