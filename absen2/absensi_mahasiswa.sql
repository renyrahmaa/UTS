-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2023 pada 05.53
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
-- Database: `absensi_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblabsen`
--

CREATE TABLE `tblabsen` (
  `idabsen` int(5) NOT NULL,
  `tglabsen` date DEFAULT NULL,
  `masuk` time DEFAULT NULL,
  `keluar` time DEFAULT NULL,
  `kodedosen` varchar(5) DEFAULT NULL,
  `sesi` char(1) DEFAULT NULL,
  `kelassesi` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblabsen`
--

INSERT INTO `tblabsen` (`idabsen`, `tglabsen`, `masuk`, `keluar`, `kodedosen`, `sesi`, `kelassesi`) VALUES
(2, '2021-05-27', '08:26:00', '10:26:00', 'B-Neh', 'B', 'Dua'),
(3, '2021-05-27', '09:27:00', '11:27:00', 'K-Nah', 'C', 'Tiga'),
(4, '2021-05-27', '10:27:00', '12:28:00', 'M-Yeh', 'D', 'Empat'),
(5, '2021-05-27', '11:28:00', '13:28:00', 'P-Ima', 'E', 'Lima'),
(6, '2021-05-27', '12:29:00', '14:29:00', 'S-Ani', 'F', 'Enam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldosen`
--

CREATE TABLE `tbldosen` (
  `kodedosen` varchar(5) NOT NULL,
  `nidn` varchar(12) DEFAULT NULL,
  `nip` varchar(12) DEFAULT NULL,
  `namadosen` varchar(80) DEFAULT NULL,
  `kodeprodi` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbldosen`
--

INSERT INTO `tbldosen` (`kodedosen`, `nidn`, `nip`, `namadosen`, `kodeprodi`) VALUES
('A-Zef', '48297', '79027', 'Zefanya', 'A'),
('B-Neh', '83928', '47283', 'Nehemia', 'B'),
('D-Sar', '37289', '84724', 'Sari', 'D'),
('K-Nah', '29403', '48201', 'Nahum', 'K'),
('M-Yeh', '18392', '92371', 'Yehezkiel', 'M'),
('P-Ima', '93821', '75843', 'Imanuel', 'P'),
('S-Ani', '12345', '67891', 'Anita', 'S');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbljadwal`
--

CREATE TABLE `tbljadwal` (
  `id` int(11) NOT NULL,
  `jadwalid` int(4) DEFAULT NULL,
  `kodedosen` varchar(5) DEFAULT NULL,
  `hari` varchar(8) DEFAULT NULL,
  `thnakademik` varchar(10) DEFAULT NULL,
  `semester` varchar(6) DEFAULT NULL,
  `kodemk` varchar(12) DEFAULT NULL,
  `sesi` char(1) DEFAULT NULL,
  `jammasuk` time DEFAULT NULL,
  `jamkeluar` time DEFAULT NULL,
  `kelas` varchar(5) DEFAULT NULL,
  `ruang` varchar(10) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `kelassesi` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbljadwal`
--

INSERT INTO `tbljadwal` (`id`, `jadwalid`, `kodedosen`, `hari`, `thnakademik`, `semester`, `kodemk`, `sesi`, `jammasuk`, `jamkeluar`, `kelas`, `ruang`, `status`, `kelassesi`) VALUES
(3, 1, 'K-Nah', 'Kamis', '2021', '4', 'PA', 'C', '09:27:00', '11:27:00', 'Tiga', '201', 1, 'Tiga'),
(4, 1, 'M-Yeh', 'Kamis', '2021', '4', 'MP', 'D', '10:27:00', '12:28:00', 'Empat', '203', 1, 'Empat'),
(5, 1, 'P-Ima', 'Kamis', '2021', '4', 'BD', 'E', '11:28:00', '13:28:00', 'Lima', '106', 1, 'Lima'),
(6, 1, 'S-Ani', 'Kamis', '2021', '4', 'PI2', 'F', '12:29:00', '14:29:00', 'Enam', '107', 1, 'Enam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmkuliah`
--

CREATE TABLE `tblmkuliah` (
  `kodemk` varchar(15) NOT NULL,
  `namamk` varchar(60) DEFAULT NULL,
  `sks` int(2) DEFAULT NULL,
  `smt` int(1) DEFAULT NULL,
  `kodeprodi` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblmkuliah`
--

INSERT INTO `tblmkuliah` (`kodemk`, `namamk`, `sks`, `smt`, `kodeprodi`) VALUES
('AP', 'Akuntansi Publik', 4, 4, 'A'),
('BD', 'Basis Data', 4, 4, 'P'),
('EB', 'E-Business', 4, 4, 'B'),
('MP', 'Manajemen Perusahaan', 4, 4, 'M'),
('PA', 'Pencatatan Akuntansi', 4, 4, 'K'),
('PI2', 'Pemrograman Internet 2', 4, 4, 'S');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblprodi`
--

CREATE TABLE `tblprodi` (
  `kodeprodi` varchar(1) NOT NULL,
  `namaprodi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblprodi`
--

INSERT INTO `tblprodi` (`kodeprodi`, `namaprodi`) VALUES
('', ''),
('A', 'Akuntansi (S1)'),
('B', 'Manajemen Bisnis (D3)'),
('D', 'Desain Komunikasi Visual (S1)'),
('K', 'Komputerisasi Akuntansi (D3)'),
('M', 'Manajemen (S1)'),
('P', 'Manajemen Informatika-WP (D3)'),
('S', 'Sistem Informasi (S1)'),
('T', 'Teknik Informatika (S1)');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tblabsen`
--
ALTER TABLE `tblabsen`
  ADD PRIMARY KEY (`idabsen`),
  ADD UNIQUE KEY `masuk` (`masuk`),
  ADD UNIQUE KEY `keluar` (`keluar`),
  ADD UNIQUE KEY `sesi` (`sesi`),
  ADD UNIQUE KEY `kelassesi` (`kelassesi`),
  ADD KEY `kodedosen` (`kodedosen`);

--
-- Indeks untuk tabel `tbldosen`
--
ALTER TABLE `tbldosen`
  ADD PRIMARY KEY (`kodedosen`),
  ADD KEY `kodeprodi` (`kodeprodi`);

--
-- Indeks untuk tabel `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sesi` (`sesi`),
  ADD UNIQUE KEY `kelassesi` (`kelassesi`),
  ADD KEY `kodedosen` (`kodedosen`),
  ADD KEY `kodemk` (`kodemk`),
  ADD KEY `id` (`id`),
  ADD KEY `jammasuk` (`jammasuk`),
  ADD KEY `jamkeluar` (`jamkeluar`);

--
-- Indeks untuk tabel `tblmkuliah`
--
ALTER TABLE `tblmkuliah`
  ADD PRIMARY KEY (`kodemk`),
  ADD KEY `kodeprodi` (`kodeprodi`);

--
-- Indeks untuk tabel `tblprodi`
--
ALTER TABLE `tblprodi`
  ADD PRIMARY KEY (`kodeprodi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tblabsen`
--
ALTER TABLE `tblabsen`
  MODIFY `idabsen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2019114005;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tblabsen`
--
ALTER TABLE `tblabsen`
  ADD CONSTRAINT `tblabsen_ibfk_1` FOREIGN KEY (`kodedosen`) REFERENCES `tbldosen` (`kodedosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbldosen`
--
ALTER TABLE `tbldosen`
  ADD CONSTRAINT `tbldosen_ibfk_1` FOREIGN KEY (`kodeprodi`) REFERENCES `tblprodi` (`kodeprodi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD CONSTRAINT `tbljadwal_ibfk_1` FOREIGN KEY (`kodedosen`) REFERENCES `tbldosen` (`kodedosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbljadwal_ibfk_2` FOREIGN KEY (`kodemk`) REFERENCES `tblmkuliah` (`kodemk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbljadwal_ibfk_3` FOREIGN KEY (`id`) REFERENCES `tblabsen` (`idabsen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbljadwal_ibfk_4` FOREIGN KEY (`jammasuk`) REFERENCES `tblabsen` (`masuk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbljadwal_ibfk_5` FOREIGN KEY (`jamkeluar`) REFERENCES `tblabsen` (`keluar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbljadwal_ibfk_6` FOREIGN KEY (`sesi`) REFERENCES `tblabsen` (`sesi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbljadwal_ibfk_7` FOREIGN KEY (`kelassesi`) REFERENCES `tblabsen` (`kelassesi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tblmkuliah`
--
ALTER TABLE `tblmkuliah`
  ADD CONSTRAINT `tblmkuliah_ibfk_1` FOREIGN KEY (`kodeprodi`) REFERENCES `tblprodi` (`kodeprodi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
