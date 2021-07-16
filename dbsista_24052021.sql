-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 09:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsista_24052021`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_penilaian`
--

CREATE TABLE `detail_penilaian` (
  `id` int(11) NOT NULL,
  `penilaian_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `seminar_id` int(11) DEFAULT NULL,
  `nilai` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nidn` varchar(10) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nidn`, `nama`) VALUES
(1, '084020211', 'AMALIA RAHMAH, S.T, S.T, M.T'),
(2, '084040200', 'BACHTIAR FIRDAUS, S.T, M.P'),
(3, '084151108', 'KURNIAWAN DWI PRASETYO, S.T, M.T'),
(4, '084201001', 'MUHAMMAD BINTANG, S.Kom'),
(5, '084310911', 'NUGROHO DWI SAPUTRA, S.Kom, M.Ti'),
(6, '084290607', 'REZA ALDIANSYAH, S.T, M.Ti'),
(7, '084230787', 'RUSMANTO, M.M., Drs'),
(8, '084260989', 'SAPTO WALUYO, S.Sos, M.Sc.'),
(9, '0860696', 'SUHENDI, M.M.S.I, S.T'),
(10, '084010195', 'WARSONO, S.Kom, M.Ti'),
(11, '084241010', 'YEKTI WIRANI, S.T, M.Ti'),
(12, '084080200', 'DEDY ACHMADI, S.T, M.T'),
(13, '084071314', 'MISNA ASQIA, S.Kom, M.Kom'),
(14, '084050315', 'NURUL JANAH, S.IIP, M.HUM'),
(15, '084300500', 'EDI WIBOWO, S.E, M.M'),
(16, '084131310', 'AHMAD RIO ADRIANSYAH, S.Si, M.Si'),
(17, '084260511', 'APRIL RUSTIANTO, S.Kom, M.T'),
(18, '084070998', 'HENRY SAPTONO, S.Si, M.Kom'),
(19, '084111208', 'HILMY ABIDZAR TAWAKAL, S.T, M.Kom'),
(20, '084211202', 'LUKMAN ROSYIDI, S.T, M.M., M.T'),
(21, '084270601', 'REZA PRIMARDIANSYAH, S.T, M.Kom'),
(22, '084240913', 'SALMAN EL FARISI, S.Kom, M.Kom'),
(23, '084290398', 'SIGIT PUSPITO WIGATI JAROT,PhD'),
(24, '084140495', 'SIROJUL MUNIR, S.Si, M.Kom'),
(25, '084100915', 'TUBAGUS RIZKY DHARMAWAN, S.T, M.Sc.'),
(26, '084260907', 'ZAKI IMADUDDIN, S.T, M.Kom'),
(27, '084281214', 'ADITYA PUTRA, S.T, M.T'),
(28, '084101104', 'NASRUL, S.Kom, M.Kom'),
(29, '084200914', 'TIFANI NABARIAN, S.Kom, M.T.I'),
(30, '084301213', 'PUDY PRIMA, S.T, M.Kom'),
(31, '084240795', 'EFRIZAL ZAIDA, S.KOM, M.M, M.KOM'),
(32, '0899902010', 'TEGUH RAHARJO, S.Kom, M.Kom'),
(33, '084290906', 'ISHOM MUHAMMAD DREHEM,S.Kom, M.Kom'),
(34, '084141310', 'IMAM HAROMAIN, S.Si, M.Kom');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_seminar`
--

CREATE TABLE `kategori_seminar` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori_seminar`
--

INSERT INTO `kategori_seminar` (`id`, `nama`) VALUES
(1, 'Seminar Proposal'),
(2, 'Seminar Hasil'),
(3, 'Sidang Skripsi');

-- --------------------------------------------------------

--
-- Table structure for table `login_session`
--

CREATE TABLE `login_session` (
  `uid` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_session`
--

INSERT INTO `login_session` (`uid`, `username`, `password`, `level`) VALUES
(1, 'admin', '25d55ad283aa400af464c76d713c07ad', 'admin'),
(2, 'member', 'a510166163833c79aa703646f59c04bb', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id`, `nama`, `keterangan`) VALUES
(1, 'Presentasi', 'pembukaan, intonasi, kesopanan, kerapihan pakaian'),
(2, 'Penguasaan Materi', 'cukup jelas'),
(3, 'Penulisan Dokumen', 'cukup jelas');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_seminar`
--

CREATE TABLE `peserta_seminar` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `seminar_id` int(11) NOT NULL,
  `kehadiran` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peserta_seminar`
--

INSERT INTO `peserta_seminar` (`id`, `nim`, `nama`, `seminar_id`, `kehadiran`) VALUES
(1, '123901', 'Joko Anwar', 1, 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `seminar_ta`
--

CREATE TABLE `seminar_ta` (
  `id` int(11) NOT NULL,
  `semester` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `kategori_seminar_id` int(11) NOT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `nama_mahasiswa` varchar(45) DEFAULT NULL,
  `judul` text DEFAULT NULL,
  `pembimbing_id` int(11) NOT NULL,
  `penguji1_id` int(11) DEFAULT NULL,
  `penguji2_id` int(11) DEFAULT NULL,
  `nilai_pembimbing` double DEFAULT NULL,
  `nilai_penguji1` double DEFAULT NULL,
  `nilai_penguji2` double DEFAULT NULL,
  `lokasi` varchar(40) DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seminar_ta`
--

INSERT INTO `seminar_ta` (`id`, `semester`, `tanggal`, `jam`, `kategori_seminar_id`, `nim`, `nama_mahasiswa`, `judul`, `pembimbing_id`, `penguji1_id`, `penguji2_id`, `nilai_pembimbing`, `nilai_penguji1`, `nilai_penguji2`, `lokasi`, `nilai_akhir`) VALUES
(1, 1, '2021-07-01', '18:28:34', 2, '123901', 'Joko Anwar', 'Menganalisis Masyarakat yang Makar', 1, 1, 2, 90, 80, 90, 'Kampus STTNF', 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_penilaian`
--
ALTER TABLE `detail_penilaian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detail_penilaian_penilaian1_idx` (`penilaian_id`),
  ADD KEY `fk_detail_penilaian_dosen1_idx` (`dosen_id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_seminar`
--
ALTER TABLE `kategori_seminar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_session`
--
ALTER TABLE `login_session`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta_seminar`
--
ALTER TABLE `peserta_seminar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_peserta_seminar_mahasiswa_seminar1_idx` (`seminar_id`);

--
-- Indexes for table `seminar_ta`
--
ALTER TABLE `seminar_ta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mahasiswa_seminar_kategori_seminar_idx` (`kategori_seminar_id`),
  ADD KEY `fk_mahasiswa_seminar_dosen1_idx` (`pembimbing_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_penilaian`
--
ALTER TABLE `detail_penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `kategori_seminar`
--
ALTER TABLE `kategori_seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_session`
--
ALTER TABLE `login_session`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peserta_seminar`
--
ALTER TABLE `peserta_seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seminar_ta`
--
ALTER TABLE `seminar_ta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_penilaian`
--
ALTER TABLE `detail_penilaian`
  ADD CONSTRAINT `fk_detail_penilaian_dosen1` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detail_penilaian_penilaian1` FOREIGN KEY (`penilaian_id`) REFERENCES `penilaian` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `peserta_seminar`
--
ALTER TABLE `peserta_seminar`
  ADD CONSTRAINT `fk_peserta_seminar_mahasiswa_seminar1` FOREIGN KEY (`seminar_id`) REFERENCES `seminar_ta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `seminar_ta`
--
ALTER TABLE `seminar_ta`
  ADD CONSTRAINT `fk_mahasiswa_seminar_dosen1` FOREIGN KEY (`pembimbing_id`) REFERENCES `dosen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mahasiswa_seminar_kategori_seminar` FOREIGN KEY (`kategori_seminar_id`) REFERENCES `kategori_seminar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
