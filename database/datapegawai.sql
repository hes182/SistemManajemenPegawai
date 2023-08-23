-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2023 pada 14.46
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_anak`
--

CREATE TABLE `data_anak` (
  `id_anak` int(11) NOT NULL,
  `nip_anak` varchar(30) NOT NULL,
  `nama_anak` varchar(40) NOT NULL,
  `tmpt_lhr_anak` varchar(30) NOT NULL,
  `tgl_lhr_anak` date NOT NULL,
  `status_anak` varchar(35) NOT NULL,
  `anak_dari` varchar(25) NOT NULL,
  `anak_ke` int(5) NOT NULL,
  `tunjangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `nip` varchar(30) NOT NULL,
  `jenis_jab` varchar(30) NOT NULL,
  `nama_jab` varchar(100) NOT NULL,
  `jenjang_jab` varchar(100) NOT NULL,
  `eselon` varchar(10) NOT NULL,
  `sk_jab_terakhir` varchar(35) NOT NULL,
  `tgl_sk_jab_terakhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_lain`
--

CREATE TABLE `data_lain` (
  `nip` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `karpeg` varchar(30) NOT NULL,
  `karis_karsu` varchar(50) NOT NULL,
  `akses` varchar(30) NOT NULL,
  `taspen` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `bank` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ortu`
--

CREATE TABLE `data_ortu` (
  `id_ortu` int(11) NOT NULL,
  `nip_ortu` varchar(30) NOT NULL,
  `ortu` varchar(10) NOT NULL,
  `nama_ortu` varchar(40) NOT NULL,
  `tmpt_lhr` varchar(30) NOT NULL,
  `tgl_lhr` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `nip` varchar(30) NOT NULL,
  `sk_cpns` varchar(35) NOT NULL,
  `tgl_sk_cpns` date NOT NULL,
  `tmt_cpns` date NOT NULL,
  `gol_ruang_cpns` varchar(10) NOT NULL,
  `sk_pns` varchar(35) NOT NULL,
  `tgl_sk_pns` date NOT NULL,
  `tmt_pns` date NOT NULL,
  `gol_ruang_pns` varchar(10) NOT NULL,
  `sumpah` varchar(10) NOT NULL,
  `thn_sumpah` varchar(8) NOT NULL,
  `sk_gol_terakhir` varchar(35) NOT NULL,
  `tgl_sk_gol_terakhir` date NOT NULL,
  `tmt_sk_gol_terakhir` text NOT NULL,
  `gol_ruang_terakhir` varchar(8) NOT NULL,
  `kedudukan` varchar(50) NOT NULL,
  `jenis_pegawai` varchar(50) NOT NULL,
  `unit_kerja` varchar(100) NOT NULL,
  `sub_unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pendidikan`
--

CREATE TABLE `data_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `tingkat` varchar(10) NOT NULL,
  `sekolah_pt` varchar(50) NOT NULL,
  `alamat_sek` varchar(100) NOT NULL,
  `jurusan` varchar(45) NOT NULL,
  `tgl_ijasah` date NOT NULL,
  `no_ijasah` varchar(35) NOT NULL,
  `kepsek` varchar(40) NOT NULL,
  `gel_depan` varchar(8) NOT NULL,
  `gel_belakang` varchar(8) NOT NULL,
  `pertama` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_suami_istri`
--

CREATE TABLE `data_suami_istri` (
  `id_nikah` int(11) NOT NULL,
  `nip_pas` varchar(30) NOT NULL,
  `nama_suami_istri` varchar(45) NOT NULL,
  `tempt_lhr_suami_istri` varchar(30) NOT NULL,
  `tgl_lhr_suami_istri` date NOT NULL,
  `tgl_nikah` date NOT NULL,
  `akta_nikah` int(5) NOT NULL,
  `tunjangan_nikah` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_pegawai`
--

CREATE TABLE `profil_pegawai` (
  `nip` varchar(25) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `jenkel` varchar(15) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `pendidikan` varchar(8) NOT NULL,
  `gelar_depan` varchar(5) NOT NULL,
  `gelar_belakang` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  `nama_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'adminku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_session`
--

CREATE TABLE `user_session` (
  `id` varchar(70) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_session`
--

INSERT INTO `user_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('1g80165ckhvfqluhgr84vgato99ve14a', '::1', 1573045722, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333034353732323b69645f757365727c733a313a2231223b757365725f6e616d657c733a353a2261646d696e223b757365725f706173737c733a33323a223031393230323361376262643733323530353136663036396466313862353030223b757365725f6e616d617c733a373a2261646d696e6b75223b),
('oj500l6v9tleiespvg2u6iq2doiojrb2', '::1', 1573046212, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333034363231323b69645f757365727c733a313a2231223b757365725f6e616d657c733a353a2261646d696e223b757365725f706173737c733a33323a223031393230323361376262643733323530353136663036396466313862353030223b757365725f6e616d617c733a373a2261646d696e6b75223b),
('8h05bruuoecvmqgmlu6up3i6ih7dtpqb', '::1', 1573046518, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333034363531383b69645f757365727c733a313a2231223b757365725f6e616d657c733a353a2261646d696e223b757365725f706173737c733a33323a223031393230323361376262643733323530353136663036396466313862353030223b757365725f6e616d617c733a373a2261646d696e6b75223b),
('45dvar1kvt7725rh3qb9605r75tc0nut', '::1', 1573048365, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333034383336353b69645f757365727c733a313a2231223b757365725f6e616d657c733a353a2261646d696e223b757365725f706173737c733a33323a223031393230323361376262643733323530353136663036396466313862353030223b757365725f6e616d617c733a373a2261646d696e6b75223b),
('dlvgs7curspld1v7jd0fkrfdtd2knmu0', '::1', 1573048710, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333034383731303b69645f757365727c733a313a2231223b757365725f6e616d657c733a353a2261646d696e223b757365725f706173737c733a33323a223031393230323361376262643733323530353136663036396466313862353030223b757365725f6e616d617c733a373a2261646d696e6b75223b),
('ge597fk4kta1thut38ca7s1ljldsd2hu', '::1', 1573050430, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333035303433303b69645f757365727c733a313a2231223b757365725f6e616d657c733a353a2261646d696e223b757365725f706173737c733a33323a223031393230323361376262643733323530353136663036396466313862353030223b757365725f6e616d617c733a373a2261646d696e6b75223b),
('5f65cdcof4selkpkjfqa2t7cb0q03ad9', '::1', 1573050491, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333035303433303b69645f757365727c733a313a2231223b757365725f6e616d657c733a353a2261646d696e223b757365725f706173737c733a33323a223031393230323361376262643733323530353136663036396466313862353030223b757365725f6e616d617c733a373a2261646d696e6b75223b);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_anak`
--
ALTER TABLE `data_anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indeks untuk tabel `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `data_lain`
--
ALTER TABLE `data_lain`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD PRIMARY KEY (`id_ortu`),
  ADD KEY `nip` (`nip_ortu`);

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `data_suami_istri`
--
ALTER TABLE `data_suami_istri`
  ADD PRIMARY KEY (`id_nikah`);

--
-- Indeks untuk tabel `profil_pegawai`
--
ALTER TABLE `profil_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_anak`
--
ALTER TABLE `data_anak`
  MODIFY `id_anak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_ortu`
--
ALTER TABLE `data_ortu`
  MODIFY `id_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_suami_istri`
--
ALTER TABLE `data_suami_istri`
  MODIFY `id_nikah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
