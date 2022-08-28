-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Agu 2022 pada 12.52
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hemodialisa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dialisis_book`
--

CREATE TABLE `dialisis_book` (
  `db_id` int(11) NOT NULL,
  `db_idpasien` varchar(16) NOT NULL,
  `db_tanggal` date NOT NULL,
  `db_hd` varchar(100) NOT NULL,
  `db_hf` varchar(5) NOT NULL,
  `db_pre_beratbadan` decimal(5,2) NOT NULL,
  `db_post_beratbadan` decimal(5,2) NOT NULL,
  `db_pre_tdarah` varchar(7) NOT NULL,
  `db_post_tdarah` varchar(7) NOT NULL,
  `db_pre_bun` decimal(5,2) NOT NULL,
  `db_post_bun` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dialisis_book`
--

INSERT INTO `dialisis_book` (`db_id`, `db_idpasien`, `db_tanggal`, `db_hd`, `db_hf`, `db_pre_beratbadan`, `db_post_beratbadan`, `db_pre_tdarah`, `db_post_tdarah`, `db_pre_bun`, `db_post_bun`) VALUES
(0, '183705', '2022-07-21', '404', 'baru', '52.40', '51.10', '160/82', '164/78', '0.00', '0.00'),
(20, '183705', '2022-07-25', '405', 'baru', '53.00', '50.60', '160/82', '164/78', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hemodialis`
--

CREATE TABLE `hemodialis` (
  `h_id` int(11) NOT NULL,
  `h_idpasien` varchar(16) NOT NULL,
  `h_nama_pasien` varchar(100) NOT NULL,
  `h_umur` int(11) NOT NULL,
  `h_jkelamin` varchar(20) NOT NULL,
  `h_alamat` text NOT NULL,
  `h_diagnosa` varchar(100) NOT NULL,
  `h_pertama` date NOT NULL,
  `h_terakhir` date NOT NULL,
  `h_frekuensi` varchar(10) NOT NULL,
  `h_mesin` varchar(25) NOT NULL,
  `h_dialiser` varchar(25) NOT NULL,
  `h_dialisat` varchar(100) NOT NULL,
  `h_aliran_dialisat` varchar(100) NOT NULL,
  `h_aliran_darah` varchar(15) NOT NULL,
  `h_lama` varchar(10) NOT NULL,
  `h_ultrafiltrasi` varchar(30) NOT NULL,
  `h_uf_profiling` varchar(30) NOT NULL,
  `h_heparinisasi` varchar(100) NOT NULL,
  `h_akses_faskuler` varchar(100) NOT NULL,
  `h_hbsag` varchar(10) NOT NULL,
  `h_antihcv` varchar(10) NOT NULL,
  `h_antihiv` varchar(10) NOT NULL,
  `h_tglceklab` date NOT NULL,
  `h_penyulit_hd` varchar(50) NOT NULL,
  `h_beratbadan_kering` varchar(100) NOT NULL,
  `h_beratbadan_akhir` varchar(100) NOT NULL,
  `h_tekanan_darah` varchar(8) NOT NULL,
  `h_lab_HB` int(4) NOT NULL,
  `h_lab_ureum` int(4) NOT NULL,
  `h_lab_kreatinin` int(4) NOT NULL,
  `h_lab_natrium` int(4) NOT NULL,
  `h_lab_kalium` int(4) NOT NULL,
  `h_lab_prot/total` int(4) NOT NULL,
  `h_lab_albumin` int(4) NOT NULL,
  `h_obat` varchar(100) NOT NULL,
  `h_tranfusi_terakhir` date NOT NULL,
  `h_goldar` varchar(2) NOT NULL,
  `h_reaksi_transfusi` varchar(50) NOT NULL,
  `h_keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hemodialis`
--

INSERT INTO `hemodialis` (`h_id`, `h_idpasien`, `h_nama_pasien`, `h_umur`, `h_jkelamin`, `h_alamat`, `h_diagnosa`, `h_pertama`, `h_terakhir`, `h_frekuensi`, `h_mesin`, `h_dialiser`, `h_dialisat`, `h_aliran_dialisat`, `h_aliran_darah`, `h_lama`, `h_ultrafiltrasi`, `h_uf_profiling`, `h_heparinisasi`, `h_akses_faskuler`, `h_hbsag`, `h_antihcv`, `h_antihiv`, `h_tglceklab`, `h_penyulit_hd`, `h_beratbadan_kering`, `h_beratbadan_akhir`, `h_tekanan_darah`, `h_lab_HB`, `h_lab_ureum`, `h_lab_kreatinin`, `h_lab_natrium`, `h_lab_kalium`, `h_lab_prot/total`, `h_lab_albumin`, `h_obat`, `h_tranfusi_terakhir`, `h_goldar`, `h_reaksi_transfusi`, `h_keterangan`) VALUES
(6, '109365', 'Teguh', 63, 'Laki-laki', 'Jl. Teuku Umar Berbas Pantai', 'ESRD', '2022-08-29', '2022-08-29', '1x/minggu', 'Fresinius', 'fix', 'Bicarbonat', '500 ml/menit', '+250 ml/menit', '+4 jam', 'fix', 'fix', 'on', 'Femoral', 'Positif', 'Positif', 'Positif', '2022-08-29', 'fix', '100', '100', '100/100', 100, 100, 100, 100, 100, 100, 100, 'fix', '2022-08-29', 'a', 'fix', 'fix');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hemodialis_old`
--

CREATE TABLE `hemodialis_old` (
  `h_idpasien` varchar(16) NOT NULL,
  `h_id` varchar(5) NOT NULL,
  `h_diagnosa` decimal(5,2) NOT NULL,
  `h_pertama` date NOT NULL,
  `h_terakhir` date NOT NULL,
  `h_frekuensi` varchar(10) NOT NULL,
  `h_mesin` varchar(25) NOT NULL,
  `h_dialiser` varchar(25) NOT NULL,
  `h_dialisat` varchar(11) NOT NULL,
  `h_aliran_dialisat` varchar(15) NOT NULL,
  `h_aliran_darah` varchar(15) NOT NULL,
  `h_lama` varchar(10) NOT NULL,
  `h_ultrafiltrasi` varchar(30) NOT NULL,
  `h_uf_profiling` varchar(30) NOT NULL,
  `h_heparinisasi` varchar(11) NOT NULL,
  `h_akses_faskuler` varchar(11) NOT NULL,
  `h_hbsag` varchar(10) NOT NULL,
  `h_antihcv` varchar(10) NOT NULL,
  `h_antihiv` varchar(10) NOT NULL,
  `h_tglceklab` date NOT NULL,
  `h_penyulit_hd` varchar(50) NOT NULL,
  `h_beratbadan_kering` decimal(5,1) NOT NULL,
  `h_beratbadan_akhir` decimal(5,1) NOT NULL,
  `h_tekanan_darah` varchar(8) NOT NULL,
  `h_lab` int(4) NOT NULL,
  `h_lab_HB` int(4) NOT NULL,
  `h_lab_ureum` int(4) NOT NULL,
  `h_lab_kreatinin` int(4) NOT NULL,
  `h_lab_natrium` int(4) NOT NULL,
  `h_lab_kalium` int(4) NOT NULL,
  `h_lab_prot/total` int(4) NOT NULL,
  `h_lab_albumin` int(4) NOT NULL,
  `h_obat` varchar(100) NOT NULL,
  `h_tranfusi_terakhir` date NOT NULL,
  `h_goldar` varchar(2) NOT NULL,
  `h_reaksi_transfusi` varchar(50) NOT NULL,
  `h_keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `j_idpasien` varchar(16) NOT NULL,
  `j_hari` varchar(10) NOT NULL,
  `j_tgl` date NOT NULL,
  `j_shift` varchar(10) NOT NULL,
  `j_keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`j_idpasien`, `j_hari`, `j_tgl`, `j_shift`, `j_keterangan`) VALUES
('109365', 'Senin', '2022-08-01', 'Pagi', 'Rutin 2x/minggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `p_id` varchar(16) NOT NULL,
  `p_nama` varchar(50) NOT NULL,
  `p_tempatlahir` varchar(30) NOT NULL,
  `p_tgllahir` date NOT NULL,
  `p_umur` int(11) NOT NULL,
  `p_jkelamin` varchar(1) NOT NULL,
  `p_alamat` varchar(50) NOT NULL,
  `p_telpon` varchar(12) NOT NULL,
  `p_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`p_id`, `p_nama`, `p_tempatlahir`, `p_tgllahir`, `p_umur`, `p_jkelamin`, `p_alamat`, `p_telpon`, `p_password`) VALUES
('109365', 'Teguh', '', '1959-06-27', 63, 'L', 'Jl. Teuku Umar Berbas Pantai', '081258034468', '12345'),
('154914', 'Ani', 'Bontang', '1980-08-22', 0, 'P', 'Jl. Jend. Soedirman', '081350984466', '12345'),
('173290', 'Rusli Ramli', '', '1969-03-18', 53, 'L', 'Jl. Tomat', '', '12345'),
('178024', 'Lindawati', '', '1975-10-10', 47, 'P', 'Jl. MT. Haryono', '', '12345'),
('183705', 'Subani ', '', '1964-07-08', 58, 'L', 'Jln. Keladi 1 Tj. Limau', '081258034468', '12345'),
('209532', 'Susiyanti', '', '1964-05-10', 58, 'P', 'Jl. Mulawarman', '', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `keterangan1` varchar(128) NOT NULL,
  `keterangan2` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id`, `gambar`, `keterangan1`, `keterangan2`) VALUES
(4, 'slider1.jpg', 'SELAMAT DATANG DI RSUD TAMAN HUSADA BONTANG', 'Sistem Pelayanan Pasien Hemodialisa'),
(6, 'slider2.jpeg', 'Kegiatan Hemodialisa di RSUD Taman Husada Bontang', 'Ruang Pasien Hemodialisa'),
(7, 'slider3.jpeg', 'Layanan profesionalisme sesuai bidang keahlian Hemodialisa\r\n', 'Dokter dan Perawat Pasien Hemodialisa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_namauser` varchar(15) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_level` varchar(10) NOT NULL,
  `user_foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_namauser`, `user_password`, `user_level`, `user_foto`) VALUES
('admin', 'admin', 'admin', 'admin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dialisis_book`
--
ALTER TABLE `dialisis_book`
  ADD PRIMARY KEY (`db_id`),
  ADD KEY `db_idpasien` (`db_idpasien`);

--
-- Indeks untuk tabel `hemodialis`
--
ALTER TABLE `hemodialis`
  ADD PRIMARY KEY (`h_id`);

--
-- Indeks untuk tabel `hemodialis_old`
--
ALTER TABLE `hemodialis_old`
  ADD PRIMARY KEY (`h_idpasien`,`h_id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`j_idpasien`,`j_tgl`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`p_id`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_namauser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dialisis_book`
--
ALTER TABLE `dialisis_book`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `hemodialis`
--
ALTER TABLE `hemodialis`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
