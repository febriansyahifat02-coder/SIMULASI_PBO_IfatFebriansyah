<?php
// Komentar: Definisi abstract class untuk pendaftaran mahasiswa baru
abstract class Pendaftaran {
    // Atribut Terenkapsulasi (protected) sesuai dengan kolom tabel
    protected $id_pendaftaran;
    protected $nama_calon;
    protected $asal_sekolah;
    protected $nilai_ujian;
    protected $biayaPendaftaranDasar;

    // Komentar: Constructor untuk menginisialisasi properti objek dari data database
    public function __construct($id, $nama, $sekolah, $nilai, $biayaDasar) {
        $this->id_pendaftaran = $id;
        $this->nama_calon = $nama;
        $this->asal_sekolah = $sekolah;
        $this->nilai_ujian = $nilai;
        $this->biayaPendaftaranDasar = $biayaDasar;
    }

    // Metode Abstrak: Wajib diimplementasikan (overriding) oleh kelas anak
    
    // Komentar: Menghitung total biaya berdasarkan formula spesifik masing-masing jalur
    abstract public function hitungTotalBiaya();

    // Komentar: Menampilkan informasi detail mengenai jalur pendaftaran yang diambil
    abstract public function tampilkanInfoJalur();
}
?>