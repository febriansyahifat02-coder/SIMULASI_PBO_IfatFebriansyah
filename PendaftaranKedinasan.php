<?php
require_once 'Pendaftaran.php';

// Komentar: Kelas anak untuk merepresentasikan jalur pendaftaran kedinasan
class PendaftaranKedinasan extends Pendaftaran {
    // Komentar: Atribut spesifik untuk pendaftaran jalur kedinasan
    protected $skIkatanDinas;
    protected $instansiSponsor;

    // Komentar: Constructor untuk menginisialisasi atribut induk dan atribut spesifik kedinasan
    public function __construct($id, $nama, $sekolah, $nilai, $biayaDasar, $skDinas, $sponsor) {
        parent::__construct($id, $nama, $sekolah, $nilai, $biayaDasar);
        $this->skIkatanDinas = $skDinas;
        $this->instansiSponsor = $sponsor;
    }

    // Komentar: Mengambil semua data pendaftaran yang memiliki jalur kedinasan dari database
    public static function getDaftarKedinasan($db) {
        $query = "SELECT id_pendaftaran, nama_calon, asal_sekolah, nilai_ujian, biaya_pendaftaran_dasar, jalur_pendaftaran, sk_ikatan_dinas, instansi_sponsor FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Kedinasan'";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // Komentar: Overriding metode hitungTotalBiaya untuk jalur Kedinasan (Surcharge tambahan 25%)
    public function hitungTotalBiaya() {
        return $this->biayaPendaftaranDasar * 1.25;
    }

    // Komentar: Implementasi wajib metode tampilkanInfoJalur dari kelas induk
    public function tampilkanInfoJalur() {
        return "Jalur Pendaftaran: Kedinasan (Sponsor: " . $this->instansiSponsor . ", No SK: " . $this->skIkatanDinas . ")";
    }
}
?>