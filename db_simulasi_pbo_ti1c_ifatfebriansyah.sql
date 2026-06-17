-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2026 at 05:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simulasi_pbo_ti1c_ifatfebriansyah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftaran`
--

CREATE TABLE `tabel_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nilai_ujian` decimal(5,2) NOT NULL,
  `biaya_pendaftaran_dasar` decimal(10,2) NOT NULL,
  `jalur_pendaftaran` enum('Reguler','Prestasi','Kedinasan') NOT NULL,
  `pilihan_prodi` varchar(50) DEFAULT NULL,
  `lokasi_kampus` varchar(50) DEFAULT NULL,
  `jenis_prestasi` varchar(50) DEFAULT NULL,
  `tingkat_prestasi` varchar(30) DEFAULT NULL,
  `sk_ikatan_dinas` varchar(50) DEFAULT NULL,
  `instansi_sponsor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_pendaftaran`
--

INSERT INTO `tabel_pendaftaran` (`id_pendaftaran`, `nama_calon`, `asal_sekolah`, `nilai_ujian`, `biaya_pendaftaran_dasar`, `jalur_pendaftaran`, `pilihan_prodi`, `lokasi_kampus`, `jenis_prestasi`, `tingkat_prestasi`, `sk_ikatan_dinas`, `instansi_sponsor`) VALUES
(1, 'Ahmad Fauzi', 'SMAN 1 Jakarta', 85.50, 250000.00, 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(2, 'Budi Utomo', 'SMAN 3 Bandung', 78.25, 250000.00, 'Reguler', 'Sistem Informasi', 'Kampus Utama', NULL, NULL, NULL, NULL),
(3, 'Citra Lestari', 'MAN 2 Kebumen', 90.00, 250000.00, 'Reguler', 'Ilmu Komputer', 'Kampus Kota B', NULL, NULL, NULL, NULL),
(4, 'Dedi Setiadi', 'SMKN 1 Surabaya', 82.10, 250000.00, 'Reguler', 'Teknik Elektro', 'Kampus Utama', NULL, NULL, NULL, NULL),
(5, 'Eka Putri', 'SMAN 5 Yogyakarta', 88.75, 250000.00, 'Reguler', 'Manajemen Informatika', 'Kampus Kota B', NULL, NULL, NULL, NULL),
(6, 'Fajar Nugroho', 'SMAN 1 Semarang', 79.90, 250000.00, 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(7, 'Gita Permata', 'SMAN 8 Malang', 84.60, 250000.00, 'Reguler', 'Sistem Informasi', 'Kampus Kota B', NULL, NULL, NULL, NULL),
(8, 'Hendra Wijaya', 'SMAN 2 Surakarta', 92.00, 150000.00, 'Prestasi', NULL, NULL, 'Olimpiade Matematika', 'Nasional', NULL, NULL),
(9, 'Indah Permatasari', 'SMAN 1 Medan', 89.50, 150000.00, 'Prestasi', NULL, NULL, 'Futsal', 'Provinsi', NULL, NULL),
(10, 'Joko Susilo', 'SMAN 3 Monowari', 86.00, 150000.00, 'Prestasi', NULL, NULL, 'Karya Ilmiah Remaja', 'Nasional', NULL, NULL),
(11, 'Kurniawati', 'MAN 1 Palembang', 94.20, 150000.00, 'Prestasi', NULL, NULL, 'Hafizh Al-Quran', 'Internasional', NULL, NULL),
(12, 'Laksana Tri', 'SMKN 2 Pengasih', 87.80, 150000.00, 'Prestasi', NULL, NULL, 'Lomba Kompetensi Siswa', 'Nasional', NULL, NULL),
(13, 'Mega Utami', 'SMAN 1 Denpasar', 91.10, 150000.00, 'Prestasi', NULL, NULL, 'Penyanyi Solo', 'Provinsi', NULL, NULL),
(14, 'Naufal Hadi', 'SMAN 4 Balikpapan', 83.40, 350000.00, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-990/IK/2026', 'Kementerian Kominfo'),
(15, 'Olivia Zalianty', 'SMAN 1 Makassar', 86.70, 350000.00, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-112/IK/2026', 'Badan Siber dan Sandi Negara'),
(16, 'Putra Perdana', 'SMAN 7 Penajam', 81.50, 350000.00, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-404/IK/2026', 'Pemerintah Provinsi Kaltim'),
(17, 'Qori Sandria', 'MAN 2 Pontianak', 88.00, 350000.00, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-765/IK/2026', 'Kementerian Perhubungan'),
(18, 'Rian Hidayat', 'SMKN 1 Cilacap', 85.20, 350000.00, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-321/IK/2026', 'PT. Kereta Api Indonesia'),
(19, 'Siti Aminah', 'SMAN 1 Banda Aceh', 89.90, 350000.00, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-889/IK/2026', 'Kementerian Keuangan'),
(20, 'Taufik Hidayat', 'SMAN 3 Padang', 84.15, 350000.00, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-102/IK/2026', 'Badan Meteorologi Klimatologi Geofisika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
