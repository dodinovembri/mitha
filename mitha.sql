-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2019 pada 03.03
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitha`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `alternatif` varchar(30) NOT NULL,
  `k1_bing` int(11) NOT NULL,
  `s_k1_bing` enum('belum','sudah') NOT NULL,
  `k2a_bing` int(11) NOT NULL,
  `s_k2a_bing` enum('belum','sudah') NOT NULL,
  `k3_bing` int(11) NOT NULL,
  `s_k3_bing` enum('belum','sudah') NOT NULL,
  `k1_psiko` int(11) NOT NULL,
  `s_k1_psiko` enum('belum','sudah') NOT NULL,
  `k2b_psiko` int(11) NOT NULL,
  `s_k2b_psiko` enum('belum','sudah') NOT NULL,
  `k3_psiko` int(11) NOT NULL,
  `s_k3_psiko` enum('belum','sudah') NOT NULL,
  `k1_akademik` int(11) NOT NULL,
  `s_k1_akademik` enum('belum','sudah') NOT NULL,
  `k2c_akademik` int(11) NOT NULL,
  `s_k2c_akademik` enum('belum','sudah') NOT NULL,
  `k3_akademik` int(11) NOT NULL,
  `s_k3_akademik` enum('belum','sudah') NOT NULL,
  `k1_kebudayaan` int(11) NOT NULL,
  `s_k1_kebudayaan` enum('belum','sudah') NOT NULL,
  `k2d_kebudayaan` int(11) NOT NULL,
  `s_k2d_kebudayaan` enum('belum','sudah') NOT NULL,
  `k3_kebudayaan` int(11) NOT NULL,
  `s_k3_kebudayaan` enum('belum','sudah') NOT NULL,
  `k1_kepemudaan` int(11) NOT NULL,
  `s_k1_kepemudaan` enum('belum','sudah') NOT NULL,
  `k2e_kepemudaan` int(11) NOT NULL,
  `s_k2e_kepemudaan` enum('belum','sudah') NOT NULL,
  `k3_kepemudaan` int(11) NOT NULL,
  `s_k3_kepemudaan` enum('belum','sudah') NOT NULL,
  `jk` enum('','L','P') NOT NULL,
  `k1` int(11) NOT NULL,
  `k2` int(11) NOT NULL,
  `k3` int(11) NOT NULL,
  `s_alternatif` enum('belum','sudah') NOT NULL,
  `user` varchar(30) NOT NULL,
  `tolak` enum('no','yes') NOT NULL,
  `ket` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`alternatif`, `k1_bing`, `s_k1_bing`, `k2a_bing`, `s_k2a_bing`, `k3_bing`, `s_k3_bing`, `k1_psiko`, `s_k1_psiko`, `k2b_psiko`, `s_k2b_psiko`, `k3_psiko`, `s_k3_psiko`, `k1_akademik`, `s_k1_akademik`, `k2c_akademik`, `s_k2c_akademik`, `k3_akademik`, `s_k3_akademik`, `k1_kebudayaan`, `s_k1_kebudayaan`, `k2d_kebudayaan`, `s_k2d_kebudayaan`, `k3_kebudayaan`, `s_k3_kebudayaan`, `k1_kepemudaan`, `s_k1_kepemudaan`, `k2e_kepemudaan`, `s_k2e_kepemudaan`, `k3_kepemudaan`, `s_k3_kepemudaan`, `jk`, `k1`, `k2`, `k3`, `s_alternatif`, `user`, `tolak`, `ket`) VALUES
('1', 315, 'sudah', 94, 'sudah', 310, 'sudah', 330, 'sudah', 77, 'sudah', 320, 'sudah', 320, 'sudah', 81, 'sudah', 320, 'sudah', 305, 'sudah', 93, 'sudah', 310, 'sudah', 305, 'sudah', 90, 'sudah', 310, 'sudah', 'L', 315, 87, 314, 'sudah', '10', 'no', 'diterima'),
('2', 305, 'sudah', 82, 'sudah', 325, 'sudah', 295, 'sudah', 75, 'sudah', 310, 'sudah', 310, 'sudah', 83, 'sudah', 310, 'sudah', 305, 'sudah', 93, 'sudah', 325, 'sudah', 315, 'sudah', 88, 'sudah', 320, 'sudah', 'P', 306, 84, 318, 'sudah', '10', 'no', 'diterima'),
('3', 315, 'sudah', 86, 'sudah', 315, 'sudah', 285, 'sudah', 87, 'sudah', 310, 'sudah', 305, 'sudah', 91, 'sudah', 305, 'sudah', 310, 'sudah', 95, 'sudah', 300, 'sudah', 315, 'sudah', 88, 'sudah', 310, 'sudah', 'L', 306, 89, 308, 'sudah', '10', 'no', NULL),
('4', 290, 'sudah', 91, 'sudah', 320, 'sudah', 295, 'sudah', 86, 'sudah', 315, 'sudah', 315, 'sudah', 91, 'sudah', 315, 'sudah', 310, 'sudah', 80, 'sudah', 325, 'sudah', 300, 'sudah', 88, 'sudah', 310, 'sudah', 'P', 302, 87, 317, 'sudah', '10', 'no', NULL),
('5', 315, 'sudah', 90, 'sudah', 310, 'sudah', 300, 'sudah', 83, 'sudah', 320, 'sudah', 310, 'sudah', 80, 'sudah', 310, 'sudah', 300, 'sudah', 90, 'sudah', 305, 'sudah', 315, 'sudah', 88, 'sudah', 315, 'sudah', 'L', 308, 86, 312, 'sudah', '10', 'no', NULL),
('6', 305, 'sudah', 90, 'sudah', 315, 'sudah', 280, 'sudah', 89, 'sudah', 310, 'sudah', 310, 'sudah', 88, 'sudah', 310, 'sudah', 315, 'sudah', 83, 'sudah', 330, 'sudah', 310, 'sudah', 88, 'sudah', 315, 'sudah', 'P', 304, 88, 316, 'sudah', '10', 'yes', NULL),
('7', 305, 'sudah', 93, 'sudah', 325, 'sudah', 310, 'sudah', 87, 'sudah', 325, 'sudah', 325, 'sudah', 94, 'sudah', 330, 'sudah', 315, 'sudah', 98, 'sudah', 325, 'sudah', 320, 'sudah', 93, 'sudah', 310, 'sudah', 'L', 315, 93, 323, 'sudah', '10', 'yes', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `kepentingan` varchar(50) NOT NULL,
  `user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `kepentingan`, `user`) VALUES
(1, 'dinamika kelompok', '3', '1'),
(2, 'tes wawancara', '5', '1'),
(3, 'presentasi program kerja', '4', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `no_peserta` varchar(11) NOT NULL,
  `nilai` float NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`no_peserta`, `nilai`, `rank`) VALUES
('1', 0.335198, 1),
('2', 0.49743, 2),
('3', 0.33379, 2),
('4', 0.50257, 1),
('5', 0.331012, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyisihan`
--

CREATE TABLE `penyisihan` (
  `alternatif` varchar(30) NOT NULL,
  `test_tertulis` int(11) NOT NULL,
  `status_juri_tertulis` enum('belum','sudah') NOT NULL,
  `psikotest` int(11) NOT NULL,
  `status_juri_psikotest` enum('belum','sudah') NOT NULL,
  `wii` int(11) NOT NULL,
  `status_juri_wii` enum('belum','sudah') NOT NULL,
  `jk` enum('','L','P') NOT NULL,
  `total` int(11) NOT NULL,
  `tolak` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyisihan`
--

INSERT INTO `penyisihan` (`alternatif`, `test_tertulis`, `status_juri_tertulis`, `psikotest`, `status_juri_psikotest`, `wii`, `status_juri_wii`, `jk`, `total`, `tolak`) VALUES
('1', 53, 'sudah', 22, 'sudah', 4, 'sudah', 'L', 26, 'no'),
('2', 47, 'sudah', 22, 'sudah', 4, 'sudah', 'P', 24, 'no'),
('3', 48, 'sudah', 19, 'sudah', 4, 'sudah', 'L', 24, 'no'),
('4', 53, 'sudah', 22, 'sudah', 4, 'sudah', 'P', 26, 'no'),
('5', 52, 'sudah', 22, 'sudah', 4, 'sudah', 'L', 26, 'no'),
('6', 52, 'sudah', 20, 'sudah', 4, 'sudah', 'P', 25, 'yes'),
('7', 54, 'sudah', 23, 'sudah', 5, 'sudah', 'L', 27, 'yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `nim` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `jk` enum('','L','P') NOT NULL,
  `universitas` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `s_juri_tertulis` enum('belum','sudah') NOT NULL,
  `s_juri_psikotest` enum('belum','sudah') NOT NULL,
  `s_juri_wii` enum('belum','sudah') NOT NULL,
  `s_juri_bing` enum('belum','sudah') NOT NULL,
  `s_juri_psiko` enum('belum','sudah') NOT NULL,
  `s_juri_akademik` enum('belum','sudah') NOT NULL,
  `s_juri_kebudayaan` enum('belum','sudah') NOT NULL,
  `s_juri_kepemudaan` enum('belum','sudah') NOT NULL,
  `s_final` enum('belum','sudah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`nim`, `nama`, `alamat`, `jk`, `universitas`, `fakultas`, `jurusan`, `s_juri_tertulis`, `s_juri_psikotest`, `s_juri_wii`, `s_juri_bing`, `s_juri_psiko`, `s_juri_akademik`, `s_juri_kebudayaan`, `s_juri_kepemudaan`, `s_final`) VALUES
('1', 'Dodi Novembri', 'Jakarta Selatan', 'L', 'Universitas Sriwijaya', 'Ilmu Komputer', 'Sistem Informasi', 'sudah', 'sudah', 'sudah', 'belum', 'belum', 'belum', 'belum', 'belum', 'sudah'),
('2', 'Mitha Arsita', 'Prabumulih', 'P', 'Universitas Sriwijaya', 'Ilmu Komputer', 'Sistem Informasi', 'sudah', 'sudah', 'sudah', 'belum', 'belum', 'belum', 'belum', 'belum', 'sudah'),
('3', 'Budi Jaya', 'Indralaya', 'L', 'Universitas Sriwijaya', 'Ilmu Komputer', 'Sistem Informasi', 'sudah', 'sudah', 'sudah', 'belum', 'belum', 'belum', 'belum', 'belum', 'sudah'),
('4', 'Tri Ratna Sari', 'Lampung', 'P', 'Universitas Sriwijaya', 'Ilmu Komputer', 'Sistem Informasi', 'sudah', 'sudah', 'sudah', 'belum', 'belum', 'belum', 'belum', 'belum', 'sudah'),
('5', 'Robby', 'Palembang', 'L', 'Universitas Sriwijaya', 'Ilmu Komputer', 'Sistem Informasi', 'sudah', 'sudah', 'sudah', 'belum', 'belum', 'belum', 'belum', 'belum', 'sudah'),
('6', 'Nia', 'Palembang', 'P', 'Universitas Sriwijaya', 'Ilmu Komputer', 'Sistem Informasi', 'sudah', 'sudah', 'sudah', 'belum', 'belum', 'belum', 'belum', 'belum', 'sudah'),
('7', 'Bobby', 'Palembang', 'L', 'Universitas Sriwijaya', 'Ilmu Komputer', 'Sistem Informasi', 'sudah', 'sudah', 'sudah', 'belum', 'belum', 'belum', 'belum', 'belum', 'sudah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'juri bahasa inggris'),
(3, 'dpo'),
(4, 'juri psikologi'),
(5, 'juri akademik'),
(6, 'juri kebudayaan'),
(7, 'juri kepemudaan'),
(8, 'juri tertulis'),
(9, 'juri psikotest'),
(10, 'juri walk in interview');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `nama`, `jabatan`, `photo`, `password`, `id_role`) VALUES
('1', 'Dodi Novembri', 'administrator', '3x4triformal copy.jpg', 'dc82a0e0107a31ba5d137a47ab09a26b', 1),
('10', 'ds', '', '', 'dc82a0e0107a31ba5d137a47ab09a26b', 10),
('1234', 'william', '', 'Dodi Wisuda.jpg', 'fd820a2b4461bddd116c1518bc4b0f77', 3),
('2', 'dodi', 'as', '3x4triformal copy.jpg', 'dc82a0e0107a31ba5d137a47ab09a26b', 2),
('3', 'Dodi Novembri', 'dpo', 'dodi job.jpg', 'dc82a0e0107a31ba5d137a47ab09a26b', 3),
('323', 'Dodi Novembri', '', '', '7694f4a66316e53c8cdd9d9954bd611d', 4),
('4', 'tri', 'sdf', '3x4triformal copy.jpg', 'dc82a0e0107a31ba5d137a47ab09a26b', 4),
('5', 'tri', 'ksdf', '3x4triformal copy.jpg', 'dc82a0e0107a31ba5d137a47ab09a26b', 5),
('6', 'Tri Ratna Sari', 'juri', '3x4triformal copy.jpg', 'dc82a0e0107a31ba5d137a47ab09a26b', 6),
('7', 'dodi', 'w', '3x4triformal copy.jpg', 'dc82a0e0107a31ba5d137a47ab09a26b', 7),
('8', 'dfs', 'kk', '3x4triformal copy.jpg', 'dc82a0e0107a31ba5d137a47ab09a26b', 8),
('9', 'dodi', 'kk', '3x4triformal copy.jpg', 'dc82a0e0107a31ba5d137a47ab09a26b', 9),
('99', 'Dodi Novembri', '', '', '6f8f57715090da2632453988d9a1501b', 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`alternatif`),
  ADD KEY `user` (`user`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD KEY `user` (`user`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`no_peserta`);

--
-- Indeks untuk tabel `penyisihan`
--
ALTER TABLE `penyisihan`
  ADD PRIMARY KEY (`alternatif`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD CONSTRAINT `alternatif_ibfk_1` FOREIGN KEY (`alternatif`) REFERENCES `peserta` (`nim`),
  ADD CONSTRAINT `alternatif_ibfk_2` FOREIGN KEY (`user`) REFERENCES `user` (`username`);

--
-- Ketidakleluasaan untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD CONSTRAINT `kriteria_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`username`);

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`no_peserta`) REFERENCES `alternatif` (`alternatif`);

--
-- Ketidakleluasaan untuk tabel `penyisihan`
--
ALTER TABLE `penyisihan`
  ADD CONSTRAINT `penyisihan_ibfk_1` FOREIGN KEY (`alternatif`) REFERENCES `peserta` (`nim`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
