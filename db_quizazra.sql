-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 05:45 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_quizazra`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `level` varchar(50) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `unitkerja` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_akun`
--

INSERT INTO `tbl_akun` (`id`, `nama`, `username`, `password`, `level`, `jeniskelamin`, `unitkerja`) VALUES
(1, 'Administrator', 'admin', '$2y$10$Xj5aAl8yrnhMEzxxIIKvRuTBexGIIm3y2..kYZZlpNR9V/cFW4C36', 'administrator', 'Laki - Laki', 'SIMRS'),
(46, 'Ramdhan Alwahdi', 'al_wahdie', '$2y$10$4.PRknjPnuhSa.0ynIyEmuP40QtdHxlg55zHASV5LguLjmasWrzDu', 'administrator', 'Laki - Laki', 'Sumber Daya Manusia\r\n'),
(47, 'Nina Siti Joharoh', 'ninasiti', '$2y$10$I0jiy37Ar1sw4o6NYKTVUOPpDtcVfkyHLrJBj9w1k9swDViL7FfeK', 'user', 'Perempuan', 'Sumber Daya Manusia\r\n'),
(54, 'Khairun Nisa', 'knissa', '$2y$10$zCYASKKL.7iZNTreoF2hRuVc2O2OauOnUQP63/m/1vuh2MCJf1gsm', 'user', 'Perempuan', 'Sumber Daya Manusia\r\n'),
(80, 'Asti kania dewi', 'asti', '$2y$10$Ny9EJLsETsGR3ALXDoj.Hu0RiKSL9BHA9pu.Wc9NoXRbTwKEnH5ue', 'user', 'Perempuan', 'Instalasi Rawat Inap'),
(81, 'Hanna Hervia Beauty Jannah', 'hannaherviabj', '$2y$10$lmuFlBlINQLuYRRRrlaFnORFZtfJfEJY0fd8ppB1D5NSPLGbym6gi', 'user', 'Perempuan', 'Instalasi Rawat Inap'),
(82, 'Siti Robiatul Adawiyah', 'adawiyah', '$2y$10$RESdI1jiIMWNXrzarf8pPeUwMQZFrUFdpXM.4SgrnUG8XP8fQnrLO', 'user', 'Perempuan', 'Instalasi Rawat Jalan'),
(83, 'Rizki Farhan', 'farhan', '$2y$10$jA3T6tMvwOl0lKSV9Jummu7wCND9g7cwFyrHSCHXlPKWAsqr9wk9e', 'user', 'Laki - Laki', 'SIMRS'),
(84, 'Indah marina', 'indahm', '$2y$10$Nhn8ardwISn9Ed9Q83Q68OWTTXuPwGNXhiFmyNx/joNBFGWkmq1Du', 'user', 'Perempuan', 'Instalasi Rawat Inap'),
(85, 'Wahyu Widiyaningsih', 'widiya', '$2y$10$PMelGb31QsrQv0BmdMII5..8cbCYbYFqTCXf//20UsIzMwP6vs4Xy', 'administrator', 'Perempuan', 'Instalasi Rawat Inap'),
(86, 'Ranti ratnasari', 'rantiratnasari', '$2y$10$XaGUbJygF5vTVENn5ZWVkePL1anbqRYPHNlCiztFuAGt6GnoXsL5u', 'user', 'Perempuan', 'Instalasi Rawat Inap'),
(87, 'Sri Lestari Damayanti', 'srilestari', '$2y$10$DLajeTQMyR5lw3eJL5Lc0.5JfMxYOn0mWIx5T1zC223s7nZx0Iooy', 'user', 'Perempuan', 'Instalasi Rawat Inap'),
(88, 'Muhammad lazuardi emmaryana', 'emmaryanalazu', '$2y$10$I3Q/GOW0zKtgQGdo7pYQDuvaimTB70uM9YW.C887t0GRCvqpaCeju', 'user', 'Laki - Laki', 'Instalasi Kamar Operasi & CSSD'),
(89, 'Meilia ratnapuri', 'meilia', '$2y$10$hBVdBJasb.DLOdxUilg3d.SpYblMyWptuxuHh3aC/qCBnswsTVCCi', 'user', 'Perempuan', 'Instalasi Rawat Inap'),
(90, 'Erna Minayatina', 'ernaminayatina', '$2y$10$0hm4HZDxNdTLvZxIpy3tf.sMaAPKpy6FroG8pdUx6m3G8BwhuS1GW', 'user', 'Perempuan', 'Instalasi Rawat Jalan'),
(91, 'Sitah umu hakim', 'sitah umu hakim', '$2y$10$6ts9658lu0TSdZWOoXwJyOYouhMaWDu3VEKV0Pcq48sOEU41oUpKm', 'user', 'Perempuan', 'Komite Keperawatan\r\n'),
(92, 'Ni kadek muryanti dewi', 'nikadek', '$2y$10$FmMGgi/X9UUA25G2u6ZkHu0htFzR1YXVLSvF3XcVJacX.exNQ8aDm', 'user', 'Perempuan', 'NS 8'),
(94, 'Iis masitoh', 'iis', '$2y$10$OoQHtw6uDl4fLgF.7wEjA.5qoJ/v88hQftsHFkmnj9jdjfZZKxsHq', 'user', 'Perempuan', 'Instalasi Rawat Inap'),
(96, 'Tetriarin', 'tetriarin', '$2y$10$5Kn1NnQZUhiNqbBp1zvr8./e2PsN2ZpEHq.m6CwFo0s5rKmy4PWGW', 'user', 'Perempuan', 'Instalasi Gawat Darurat'),
(97, 'Intan teluk', 'intan teluk', '$2y$10$jOsxHkM8dB9WdYAOb9oPCejhcXwkjUJKYJnAeHr5TFRoHh6PX9FQu', 'user', 'Perempuan', 'Instalasi Rawat Jalan'),
(98, 'Lalu haris', 'laluharis', '$2y$10$MgNlH0R4UVK4VU2Jhe3ip.1.guw9BgVnNTMolQyLakz7u2LGwSb9e', 'user', 'Laki - Laki', 'NS 2'),
(99, 'Ratna puri', 'ratna puri', '$2y$10$6G0woILVHnIUe2vZXmvR4ei1uahYEllbE/P9T9FltPz9xJxuzEnym', 'user', 'Perempuan', 'Instalasi Rawat Inap'),
(100, 'Dhika pramestika', 'dhika', '$2y$10$i1FMbgHERZXMIHGa2gKTlOoRMoPUFkuq84Z61rrRAwKiGFalXDjcm', 'user', 'Perempuan', 'Komite Keperawatan\r\n'),
(101, 'Reni cahyanti', 'reni cahyanti', '$2y$10$5pQqlJHwakwPf5ekESGkYuzabKmx9X76dIfpWfYSwGKn3d89NNVSq', 'user', 'Perempuan', 'Instalasi Ruang Persalinan'),
(102, 'KARTIKA NURMALIA ANGGRAENI', 'kartika', '$2y$10$O7MjHsctqrWSH24eTmEZE.yG5HhYotwZjkgAJdt3vEX8ln7IpPPGO', 'user', 'Perempuan', 'Instalasi Rawat Jalan'),
(105, 'Wulan sari', 'wulan', '$2y$10$AyH19oP04JgGBg45gtOV6uqgJbDNdy5NpEWrI83t0f9oiRKLKcgrO', 'user', 'Perempuan', 'Instalasi Rawat Inap'),
(106, 'Vera pertiwi', 'vera', '$2y$10$5id42aETwrThWjBpes1Xdu5O85a7p13k31T766MObMR1YqqpfA5k.', 'user', 'Perempuan', 'Instalasi Rawat Inap'),
(107, 'Muji asriani', 'muji asriani', '$2y$10$3K5LvrncgvI3yPAeazQ2r.9nseiaoe5FzlnWcm6Ke3vQnVnKRHxYu', 'user', 'Perempuan', 'Instalasi Rawat Inap'),
(108, 'Sinta sri agustin', 'sinta', '$2y$10$6VuMt6DQ/VqHAHaJeRzP.eVtYGUoA7UKB2nr2Af3wCKm8dyjejbye', 'user', 'Perempuan', 'Instalasi Rawat Jalan'),
(109, 'Melik Ade suryani', 'melik ade suryani', '$2y$10$nGtVwxk9RRRob9eFo9r8COzOD8rMUJOX2GGmkLYiuu5RniWfvw6z6', 'user', 'Perempuan', 'Instalasi Rawat Inap'),
(110, 'Nandya Rahayu Hakim', 'nandya', '$2y$10$3OWveZecQivIMyfb17Plv.UBv/2IWm2Vt8rToKoDwdk3rro8NTQfW', 'user', 'Perempuan', 'Instalasi Rawat Inap'),
(111, 'Tahera', 'tahera', '$2y$10$IxoiO9qgfwHTMuRtlvK1me85L71wfacHmRv2AX5.mIs4ukjQfmkyK', 'user', 'Perempuan', 'Instalasi Rawat Jalan'),
(112, 'Sintia restu devi', 'devi', '$2y$10$zhpyt1hc9wmdQtnsSXQKtes9KqihkQ73/WalajE4uiUlTGKITAQeK', 'user', 'Perempuan', 'Instalasi Rawat Inap'),
(113, 'Dewi Indriyani ', 'dewi indriyani ', '$2y$10$x.eN3n840Nx8UqcXKWORdeeksgPzv2idiy1DtA3dOoHctbZKQFuNK', 'user', 'Perempuan', 'Instalasi Rawat Jalan'),
(114, 'Dwi tri maryana', 'dwi tri maryana', '$2y$10$OyayGhOlHgzbgPQsuEsTfe55poRQmto2wyLtTo82zExwlvFl8Kn5m', 'user', 'Perempuan', 'Instalasi Rawat Jalan'),
(115, 'Rena', 'rena farhah', '$2y$10$s6sU9V2rAhHkx8k4ltq4v.0JLHtiH9rJxEW5YZwOQ/YjzwX1kupGe', 'user', 'Perempuan', 'Instalasi Rawat Jalan'),
(116, 'Siti delis', 'siti delis', '$2y$10$qilqtEbdjw4J9Mig/Gu7Q.xGu/7GEIJK8BOfpMZ2iWe6jsNjUbwb2', 'user', 'Perempuan', 'Instalasi Rawat Inap'),
(117, 'Ramdhan', 'ramdhan', '$2y$10$JPuPIwlNjUE8MsIpK87n0ebsnHGBxRQDhB0r0SB1VOhMcAe/5jqka', 'user', 'Laki - Laki', 'AP'),
(118, 'Yari Yudianto', 'yari1212', '$2y$10$Lwq/rFBBbNAki5ERxWr/x.cOhBp7ectUQcnxVVbNbOV0xuGAIbIkm', 'user', 'Laki - Laki', 'Instalasi Rawat Inap'),
(119, 'Qori Fadilah', 'qori fadilah', '$2y$10$R92QMf3hEt.3xEZtG2/A0uWNEpQ8k4MxTJd/Nkkc5zCct1Aw5M4Ui', 'user', 'Perempuan', 'Instalasi Ruang Persalinan'),
(120, 'Yoyo Muziyono', 'yoyo muziyono', '$2y$10$43Iguuana6WvFpF1.dwGZub62XvDxTGw4EsCvclJ540NFiyK7OOSG', 'user', 'Laki - Laki', 'Instalasi Gawat Darurat'),
(121, 'Rani Safaria Ningsih', 'ranisn', '$2y$10$ihnCPQbTzmedvG1nL7qQfuVHqFQw70T580EMSxZe/isLqJ5EVsLYu', 'user', 'Perempuan', 'Instalasi Ruang Persalinan'),
(122, 'Nur ulfa dewi', 'ulfa', '$2y$10$8OTS5NmfwCJN5MdwCtVwg.AgbvRpGDTXdaOHER4hlgx.WSvxP/Jb.', 'user', 'Perempuan', 'Instalasi Gawat Darurat'),
(123, 'Risanti', 'risanti', '$2y$10$VSJNHB4.XEZxrrV6HCNkxOd4gHx/z4s1K4elsPIAPcyA6aQhDRpiy', 'user', 'Perempuan', 'Instalasi Gawat Darurat'),
(124, 'tes', 'tes', '$2y$10$Z5bYBbcRc3lPNJvftyjDyeHaHf2IJfg/ycaZEpclGS08bSlMblTye', 'user', 'Laki - Laki', 'AP');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_histori`
--

CREATE TABLE `tbl_histori` (
  `username` varchar(100) NOT NULL,
  `idquiz` text NOT NULL,
  `score` int(11) NOT NULL,
  `jawabandijawab` int(11) NOT NULL,
  `jawabanbenar` int(11) NOT NULL,
  `jawabansalah` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_histori`
--

INSERT INTO `tbl_histori` (`username`, `idquiz`, `score`, `jawabandijawab`, `jawabanbenar`, `jawabansalah`, `tanggal`) VALUES
('al_wahdie', '5e5e984e13ff3', 40, 10, 4, 6, '2020-03-06 03:37:41'),
('al_wahdie', '5e61c6a35290f', 70, 10, 7, 3, '2020-03-06 04:06:23'),
('ninasiti', '5e61c6a35290f', 40, 10, 4, 6, '2020-03-06 04:12:40'),
('knissa', '5e61c6a35290f', 70, 10, 7, 7, '2020-03-09 06:49:47'),
('al_wahdie', '5ed5c83f730e7', 1000, 10, 10, 0, '2020-06-02 04:03:10'),
('Meilia', '5ed5c83f730e7', 1200, 10, 12, 0, '2020-06-03 03:06:46'),
('emmaryanalazu', '5ed5c83f730e7', 400, 10, 4, 6, '2020-06-03 03:06:02'),
('Adawiyah', '5ed5c83f730e7', 1000, 10, 10, 0, '2020-06-03 03:08:03'),
('Indahm', '5ed5c83f730e7', 1000, 10, 10, 0, '2020-06-03 03:08:58'),
('Asti', '5ed5c83f730e7', 1000, 10, 10, 0, '2020-06-03 03:08:22'),
('Sitah umu hakim', '5ed5c83f730e7', 1000, 10, 10, 0, '2020-06-03 03:07:03'),
('rantiratnasari', '5ed5c83f730e7', 900, 10, 9, 1, '2020-06-03 03:09:02'),
('Tetriarin', '5ed5c83f730e7', 1100, 10, 11, 0, '2020-06-03 03:08:49'),
('ErnaMinayatina', '5ed5c83f730e7', 1000, 10, 10, 0, '2020-06-03 03:08:26'),
('Widiya', '5ed5c83f730e7', 400, 10, 4, 6, '2020-06-03 03:08:15'),
('hannaherviabj', '5ed5c83f730e7', 1000, 10, 10, 0, '2020-06-03 03:08:16'),
('Intan teluk', '5ed5c83f730e7', 100, 1, 1, 1, '2020-06-03 04:49:13'),
('Laluharis ', '5ed5c83f730e7', 600, 10, 6, 4, '2020-06-03 03:10:48'),
('farhan', '5ed5c83f730e7', 300, 10, 3, 7, '2020-06-03 03:13:05'),
('srilestari', '5ed5c83f730e7', 0, 2, 0, 2, '2020-06-03 03:10:01'),
('Ratna puri', '5ed5c83f730e7', 1100, 10, 11, 0, '2020-06-03 03:18:33'),
('Reni cahyanti', '5ed5c83f730e7', 1000, 10, 10, 0, '2020-06-03 03:36:32'),
('Kartika', '5ed5c83f730e7', 1000, 10, 10, 0, '2020-06-03 03:56:33'),
('Indahm', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-03 04:51:39'),
('hannaherviabj', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-03 04:52:17'),
('emmaryanalazu', '5ed70c38347c5', 50, 10, 5, 5, '2020-06-03 04:53:27'),
('Laluharis ', '5ed70c38347c5', 60, 10, 6, 4, '2020-06-03 04:52:46'),
('Meilia', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-03 04:50:54'),
('rantiratnasari', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-03 04:52:14'),
('Widiya', '5ed70c38347c5', 40, 10, 4, 6, '2020-06-03 04:50:56'),
('Ratna puri', '5ed70c38347c5', 130, 10, 13, 0, '2020-06-03 04:50:57'),
('Asti', '5ed70c38347c5', 110, 10, 11, 0, '2020-06-03 04:51:38'),
('Iismasitoh', '5ed70c38347c5', 110, 10, 11, 0, '2020-06-03 04:52:31'),
('Tetriarin', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-03 04:52:22'),
('Kartika', '5ed70c38347c5', 110, 10, 11, 0, '2020-06-03 04:51:47'),
('ErnaMinayatina', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-03 04:52:21'),
('srilestari', '5ed70c38347c5', 90, 10, 9, 1, '2020-06-03 04:53:27'),
('Sitah umu hakim ', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-03 04:51:32'),
('Ni kadek muryanti dewi', '5ed70c38347c5', 110, 10, 11, 0, '2020-06-03 04:52:55'),
('Adawiyah', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-03 04:53:09'),
('Reni cahyanti', '5ed70c38347c5', 30, 6, 3, 4, '2020-06-03 04:50:49'),
('Intan teluk', '5ed70c38347c5', 140, 10, 14, 7, '2020-06-03 04:54:06'),
('srilestari', '5ed70c38347c5', 90, 10, 9, 1, '2020-06-03 04:53:27'),
('al_wahdie', '5ed70c38347c5', 80, 10, 8, 2, '2020-06-03 04:53:39'),
('Tahera', '5ed5c83f730e7', 400, 10, 4, 6, '2020-06-04 03:03:00'),
('Dewi Indriyani', '5ed5c83f730e7', 800, 10, 8, 6, '2020-06-04 03:01:22'),
('Nandya', '5ed5c83f730e7', 500, 10, 5, 7, '2020-06-04 04:55:06'),
('Muji asriani', '5ed5c83f730e7', 500, 10, 5, 5, '2020-06-04 03:01:57'),
('Devi', '5ed5c83f730e7', 1000, 10, 10, 0, '2020-06-04 03:01:47'),
('Vera pertiwi', '5ed5c83f730e7', 1000, 10, 10, 0, '2020-06-04 03:01:59'),
('Rena Farhah', '5ed5c83f730e7', 300, 10, 3, 7, '2020-06-04 03:02:04'),
('Wulan', '5ed5c83f730e7', 500, 10, 5, 5, '2020-06-04 03:01:46'),
('Dwi tri maryana', '5ed5c83f730e7', 400, 10, 4, 6, '2020-06-04 03:02:50'),
('ramdhan', '5ed5c83f730e7', 100, 1, 1, 0, '2020-06-04 02:58:51'),
('Siti delis', '5ed5c83f730e7', 400, 10, 4, 6, '2020-06-04 03:03:58'),
('Melik Ade suryani', '5ed5c83f730e7', 1000, 10, 10, 0, '2020-06-04 03:05:53'),
('Sinta', '5ed5c83f730e7', 1000, 10, 10, 0, '2020-06-04 03:02:15'),
('Yari1212', '5ed5c83f730e7', 400, 2, 4, 8, '2020-06-04 04:56:24'),
('Qori Fadilah', '5ed5c83f730e7', 1000, 10, 10, 0, '2020-06-04 03:18:51'),
('Yoyo Muziyono', '5ed5c83f730e7', 1000, 10, 10, 0, '2020-06-04 03:15:48'),
('RaniSN', '5ed5c83f730e7', 1000, 10, 10, 0, '2020-06-04 03:22:27'),
('Risanti', '5ed5c83f730e7', 200, 9, 2, 7, '2020-06-04 03:48:54'),
('Ulfa', '5ed5c83f730e7', 1100, 10, 11, 0, '2020-06-04 04:13:25'),
('Dewi Indriyani', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-04 04:58:23'),
('Dwi tri maryana', '5ed70c38347c5', 10, 2, 1, 1, '2020-06-04 04:55:40'),
('Devi', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-04 04:59:21'),
('Muji asriani', '5ed70c38347c5', 50, 10, 5, 5, '2020-06-04 04:59:14'),
('Tahera', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-04 05:01:26'),
('Ulfa', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-04 05:00:39'),
('Sinta', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-04 04:59:34'),
('Yoyo Muziyono', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-04 04:57:41'),
('Qori Fadilah', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-04 04:58:35'),
('RaniSN', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-04 04:58:09'),
('Melik Ade suryani', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-04 05:02:57'),
('Siti delis', '5ed70c38347c5', 110, 10, 11, 0, '2020-06-04 05:00:04'),
('Yari1212', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-04 05:00:19'),
('Rena Farhah', '5ed70c38347c5', 100, 10, 10, 0, '2020-06-04 05:00:20'),
('Nandya', '5ed70c38347c5', 50, 10, 5, 5, '2020-06-04 04:59:34'),
('Wulan', '5ed70c38347c5', 60, 10, 6, 4, '2020-06-04 05:00:40'),
('Risanti', '5ed70c38347c5', 50, 10, 5, 6, '2020-06-04 05:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jawaban`
--

CREATE TABLE `tbl_jawaban` (
  `idpertanyaan` text NOT NULL,
  `idjawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jawaban`
--

INSERT INTO `tbl_jawaban` (`idpertanyaan`, `idjawaban`) VALUES
('5e5e9aa24a58f', '5e5e9aa252407'),
('5e5e9aa28dad3', '5e5e9aa295fc9'),
('5e5e9aa2c140b', '5e5e9aa2d6fb1'),
('5e5e9aa30b532', '5e5e9aa3139fb'),
('5e5e9aa33c19f', '5e5e9aa34c521'),
('5e5e9aa377d6f', '5e5e9aa37fcba'),
('5e5e9aa3a89d2', '5e5e9aa3b08d3'),
('5e5e9aa3dc39a', '5e5e9aa3e1720'),
('5e5e9aa45c582', '5e5e9aa4722a5'),
('5e5e9aa4b875a', '5e5e9aa4c077e'),
('5e5f6210986bb', '5e5f621098a9f'),
('5e61cba6e51a6', '5e61cba6e6eef'),
('5e61cba6ed4ff', '5e61cba6ee021'),
('5e61cba6f13ac', '5e61cba6f2423'),
('5e61cba702bcb', '5e61cba703792'),
('5e61cba70d234', '5e61cba70f168'),
('5e61cba7162c7', '5e61cba717011'),
('5e61cba71b33a', '5e61cba71bea7'),
('5e61cba724c9a', '5e61cba72599e'),
('5e61cba729452', '5e61cba729f9b'),
('5e61cba72e768', '5e61cba72f839'),
('5ed5ceb34cd7f', '5ed5ceb34e107'),
('5ed5ceb350fe8', '5ed5ceb3517b8'),
('5ed5ceb353ae0', '5ed5ceb354698'),
('5ed5ceb3594ba', '5ed5ceb359c8a'),
('5ed5ceb35cf52', '5ed5ceb35eaab'),
('5ed5ceb3630fc', '5ed5ceb3638cc'),
('5ed5ceb3667ad', '5ed5ceb366f7d'),
('5ed5ceb369e5d', '5ed5ceb36a246'),
('5ed5ceb36d50e', '5ed5ceb36dcde'),
('5ed5ceb370fa7', '5ed5ceb371b5f'),
('5ed70f16084a1', '5ed70f1609ff9'),
('5ed70f160d6aa', '5ed70f160de7a'),
('5ed70f1611913', '5ed70f16120e3'),
('5ed70f16153ac', '5ed70f1615b7c'),
('5ed70f161a99d', '5ed70f161b556'),
('5ed70f1620b47', '5ed70f1623257'),
('5ed70f1627c90', '5ed70f1629019'),
('5ed70f162bef9', '5ed70f162c6ca'),
('5ed70f162e60a', '5ed70f162f1c2'),
('5ed70f16320a3', '5ed70f1632873');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pertanyaan`
--

CREATE TABLE `tbl_pertanyaan` (
  `idquiz` text NOT NULL,
  `idpertanyaan` text NOT NULL,
  `pertanyaan` text NOT NULL,
  `pilihan` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pertanyaan`
--

INSERT INTO `tbl_pertanyaan` (`idquiz`, `idpertanyaan`, `pertanyaan`, `pilihan`, `sn`) VALUES
('5e5e984e13ff3', '5e5e9aa24a58f', 'Siapakah nama presiden yang kedua indonesia?', 4, 1),
('5e5e984e13ff3', '5e5e9aa28dad3', 'Bencana tsunami di aceh terjadi pada tahun?', 4, 2),
('5e5e984e13ff3', '5e5e9aa2c140b', 'Mata uang dari negara malaysia adalah,...', 4, 3),
('5e5e984e13ff3', '5e5e9aa30b532', 'Berikut ini yang artinya tutup/keluar kecuali...', 4, 4),
('5e5e984e13ff3', '5e5e9aa33c19f', 'Perubahan benda padat menjadi gas disebut...', 4, 5),
('5e5e984e13ff3', '5e5e9aa377d6f', 'Pasal 1 UUD 1945 amandemen berisi sebanyak...', 4, 6),
('5e5e984e13ff3', '5e5e9aa3a89d2', 'Angka 123321 merupakan contoh bilangan...', 4, 7),
('5e5e984e13ff3', '5e5e9aa3dc39a', 'Samudera apa yang terbesar di dunia?', 4, 8),
('5e5e984e13ff3', '5e5e9aa45c582', 'Apa cabang ilmu matematika yang mempelajari sudut, segitiga, serta fungsi seperti sin, cosin, dan tangen?', 4, 9),
('5e5e984e13ff3', '5e5e9aa4b875a', 'Apakah 8 + 8 = 16?', 4, 10),
('5e61c6a35290f', '5e61cba6e51a6', 'Apa Yang dimaksud dengan PPI', 4, 1),
('5e61c6a35290f', '5e61cba6ed4ff', 'Berikut ini yang mana contoh dari terjadinya infeksi nosocomial (HAIs)', 4, 2),
('5e61c6a35290f', '5e61cba6f13ac', 'Berikut dampak dari Infeksi nosocomial (HAIs) yaitu kecuali ', 4, 3),
('5e61c6a35290f', '5e61cba702bcb', 'Dibawah ini cara penyebaran infeksi yaitu, kecuali ', 4, 4),
('5e61c6a35290f', '5e61cba70d234', 'Dibawah ini adalah komponen utama ,KEWASPADAAN STANDAR kecuali ', 4, 5),
('5e61c6a35290f', '5e61cba7162c7', 'Berikut adalah pernyataan yang benar tentang Hand Hygiene ', 4, 6),
('5e61c6a35290f', '5e61cba71b33a', 'Durasi mencuci tangan dengan air dan sabun adalah', 4, 7),
('5e61c6a35290f', '5e61cba724c9a', 'Sebutkan salah satu :5 saat (moment) mencuci tangan, kecuali ', 4, 8),
('5e61c6a35290f', '5e61cba729452', 'Dibawah ini yang bukan merupakan langkah 4 langkah mencuci tangan :', 4, 9),
('5e61c6a35290f', '5e61cba72e768', 'Berikut adalah APD yang tidak digunakan di Rumah Sakit ', 4, 10),
('5ed5c83f730e7', '5ed5ceb34cd7f', 'Siapa saja yang termasuk pelanggan Eksternal ?', 4, 1),
('5ed5c83f730e7', '5ed5ceb350fe8', 'Yang tidak termasuk tantangan RS saat ini adalah ?', 4, 2),
('5ed5c83f730e7', '5ed5ceb353ae0', 'Siapa saja yang termasuk pelanggan internal ?', 4, 3),
('5ed5c83f730e7', '5ed5ceb3594ba', 'Apa yang diharus dilakukan untuk menghadapi tantangan RS', 4, 4),
('5ed5c83f730e7', '5ed5ceb35cf52', 'Prinsip - Prinsip Pelayanan Prima', 4, 5),
('5ed5c83f730e7', '5ed5ceb3630fc', 'Perawat memberikan asuhan keperawatan secara komprehensif, salah satunya perawat memberikan pelayanan dengan sikap menghargai, antara lain :', 4, 6),
('5ed5c83f730e7', '5ed5ceb3667ad', 'Apa yang dilakukan perawat pada saat action tindakan pelayanan ?', 4, 7),
('5ed5c83f730e7', '5ed5ceb369e5d', 'Tindakan apa saja yang termasuk dalam gangguan pelayanan', 4, 8),
('5ed5c83f730e7', '5ed5ceb36d50e', 'Langkah langkah apasaja yang termasuk dalam pelayanan prima ?', 4, 9),
('5ed5c83f730e7', '5ed5ceb370fa7', 'Pada saat perawat memberikan asuhan keperawatan kepada pasien, perawat harus berfikir secara positif antara lain :', 4, 10),
('5ed70c38347c5', '5ed70f16084a1', '1. Siapa saja yang termasuk pelanggan eksternal?', 4, 1),
('5ed70c38347c5', '5ed70f160d6aa', '2. Yang  tidak termasuk dalam tantangan RS saat ini adalah', 4, 2),
('5ed70c38347c5', '5ed70f1611913', '3.  Siapa saja yang termasuk pelanggan internal?\r\n', 4, 3),
('5ed70c38347c5', '5ed70f16153ac', '4. Apa yang harus dilakukan untuk menghadapi tantangan RS?', 4, 4),
('5ed70c38347c5', '5ed70f161a99d', '5. Prinsip-prinsip pelayanan prima adalah', 4, 5),
('5ed70c38347c5', '5ed70f1620b47', '6. Perawat memberikan asuhan keperawatan secara komprehensif, salah satunya perawat memberikan pelayanan  dengan sikap menghargai, antara lain', 4, 6),
('5ed70c38347c5', '5ed70f1627c90', '7.  Apa yang dilakakukan perawat pada saat action tindakan pelayanan?\r\n', 4, 7),
('5ed70c38347c5', '5ed70f162bef9', '8. Tindakan apa saja yang termasuk dalam gannguan pelayanan?\r\n', 4, 8),
('5ed70c38347c5', '5ed70f162e60a', '9. Langkah-langkah apa saja yang termasuk dalam pelayanan prima adalah', 4, 9),
('5ed70c38347c5', '5ed70f16320a3', '10. Pada saat perawat memberikan asuhan keperawatan kepada pasien,  perawat harus berpikir secara positif, antara lain : \r\n', 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pilihan`
--

CREATE TABLE `tbl_pilihan` (
  `idpertanyaan` varchar(50) NOT NULL,
  `pilihan` varchar(5000) NOT NULL,
  `idpilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pilihan`
--

INSERT INTO `tbl_pilihan` (`idpertanyaan`, `pilihan`, `idpilihan`) VALUES
('5e5e9aa24a58f', 'BJ. Habibie', '5e5e9aa2523fe'),
('5e5e9aa24a58f', 'Soeharto', '5e5e9aa252407'),
('5e5e9aa24a58f', 'Megawati', '5e5e9aa252409'),
('5e5e9aa24a58f', 'D.N. Aidit', '5e5e9aa25240a'),
('5e5e9aa28dad3', '2003', '5e5e9aa295fbe'),
('5e5e9aa28dad3', '2004', '5e5e9aa295fc9'),
('5e5e9aa28dad3', '2005', '5e5e9aa295fca'),
('5e5e9aa28dad3', '2006', '5e5e9aa295fcc'),
('5e5e9aa2c140b', 'Peso', '5e5e9aa2d6fa4'),
('5e5e9aa2c140b', 'Rupiah', '5e5e9aa2d6faf'),
('5e5e9aa2c140b', 'Euro', '5e5e9aa2d6fb0'),
('5e5e9aa2c140b', 'Ringgit', '5e5e9aa2d6fb1'),
('5e5e9aa30b532', 'Quit', '5e5e9aa3139ee'),
('5e5e9aa30b532', 'Close', '5e5e9aa3139f8'),
('5e5e9aa30b532', 'Exit', '5e5e9aa3139f9'),
('5e5e9aa30b532', 'Stop', '5e5e9aa3139fb'),
('5e5e9aa33c19f', 'Menyublim', '5e5e9aa34c521'),
('5e5e9aa33c19f', 'Menguap', '5e5e9aa34c52b'),
('5e5e9aa33c19f', 'Mengkristal', '5e5e9aa34c52d'),
('5e5e9aa33c19f', 'Membeku', '5e5e9aa34c52e'),
('5e5e9aa377d6f', '5 Ayat', '5e5e9aa37fcad'),
('5e5e9aa377d6f', '4 Ayat', '5e5e9aa37fcb8'),
('5e5e9aa377d6f', '3 Ayat', '5e5e9aa37fcba'),
('5e5e9aa377d6f', '2 Ayat', '5e5e9aa37fcbb'),
('5e5e9aa3a89d2', 'Avogadro', '5e5e9aa3b08c5'),
('5e5e9aa3a89d2', 'Kuadrat', '5e5e9aa3b08d0'),
('5e5e9aa3a89d2', 'Biner', '5e5e9aa3b08d1'),
('5e5e9aa3a89d2', 'Palindrom', '5e5e9aa3b08d3'),
('5e5e9aa3dc39a', 'Samudera Atlantik', '5e5e9aa3e1715'),
('5e5e9aa3dc39a', 'Samudera Pasifik', '5e5e9aa3e1720'),
('5e5e9aa3dc39a', 'Samudera Hindia', '5e5e9aa3e1722'),
('5e5e9aa3dc39a', 'Samudera Artik', '5e5e9aa3e1723'),
('5e5e9aa45c582', 'Topologi', '5e5e9aa47229b'),
('5e5e9aa45c582', 'Trigonometri', '5e5e9aa4722a5'),
('5e5e9aa45c582', 'Geometri', '5e5e9aa4722a6'),
('5e5e9aa45c582', 'Apa ini', '5e5e9aa4722a8'),
('5e5e9aa4b875a', 'Iyaa', '5e5e9aa4c0771'),
('5e5e9aa4b875a', 'Jawaban A benar', '5e5e9aa4c077b'),
('5e5e9aa4b875a', 'Jawaban A dan B benar', '5e5e9aa4c077d'),
('5e5e9aa4b875a', 'Semua jawaban benar', '5e5e9aa4c077e'),
('5e5f6210986bb', '30', '5e5f621098a9a'),
('5e5f6210986bb', '1020', '5e5f621098a9f'),
('5e5f6210986bb', '10', '5e5f621098aa0'),
('5e5f6210986bb', '20', '5e5f621098aa1'),
('5e61cba6e51a6', 'Pencegahan & Pengendalian Infeksi', '5e61cba6e6eef'),
('5e61cba6e51a6', 'Petugas Pencegahan & Pengendalian Infeksi', '5e61cba6e6ef9'),
('5e61cba6e51a6', 'Pengendalian & Pencegahan Infeksi', '5e61cba6e6efb'),
('5e61cba6e51a6', 'Panitia Pencegahan Infeksi', '5e61cba6e6f08'),
('5e61cba6ed4ff', 'Pasien Batuk dan pilek masuk ke IGD', '5e61cba6ee013'),
('5e61cba6ed4ff', 'Pasien DM DF yang akan direncanakan operasi', '5e61cba6ee01f'),
('5e61cba6ed4ff', 'Pasien yang mengalami infeksi daerah operasi', '5e61cba6ee020'),
('5e61cba6f13ac', 'Morbiditas  meningkat', '5e61cba6f2416'),
('5e61cba6f13ac', 'Mutu pelayanan meningkat', '5e61cba6f2420'),
('5e61cba6f13ac', 'Mortalitas meningkat', '5e61cba6f2422'),
('5e61cba6f13ac', 'Length Of stay meningkat', '5e61cba6f2423'),
('5e61cba702bcb', 'Fekal Oral', '5e61cba703783'),
('5e61cba702bcb', 'KontakLangsung', '5e61cba703791'),
('5e61cba702bcb', 'Manatap/Bertatapan', '5e61cba703792'),
('5e61cba702bcb', 'Udara', '5e61cba703793'),
('5e61cba70d234', 'APD', '5e61cba70f15b'),
('5e61cba70d234', 'KESEHATAN DIREKTUR', '5e61cba70f167'),
('5e61cba70d234', 'KEBERSIHAN TANGAN', '5e61cba70f168'),
('5e61cba70d234', 'ETIKA BATUK', '5e61cba70f169'),
('5e61cba7162c7', 'Cuci tangan dengan air dan sabun jika tangan terlihat kotor ', '5e61cba717003'),
('5e61cba7162c7', 'Gosok tangan dengan handrup jika tangan terlihat kotor', '5e61cba717010'),
('5e61cba7162c7', 'Cuci tangan dengan air sabun dengan durasi 20-60 detik', '5e61cba717011'),
('5e61cba7162c7', 'Gosok tangan dengan handrup dengan durasi 30-40 Detik', '5e61cba717012'),
('5e61cba71b33a', '10-20 Detik', '5e61cba71be9c'),
('5e61cba71b33a', '20-40 Detik', '5e61cba71bea6'),
('5e61cba71b33a', '40-60 detik', '5e61cba71bea7'),
('5e61cba71b33a', '60-120 Detik', '5e61cba71bea8'),
('5e61cba724c9a', 'Sebelum kontak dengan alat medis', '5e61cba72599e'),
('5e61cba724c9a', 'Sebelum Kontak dengan Pasien', '5e61cba7259a9'),
('5e61cba724c9a', 'Sebeleum tindak Aseptic', '5e61cba7259aa'),
('5e61cba724c9a', 'Setelah Kontak dengan lingkungan sekita pasien', '5e61cba7259ac'),
('5e61cba729452', 'Gosok ibu jari berputar dalam genggaman tangan lainnya', '5e61cba729f9b'),
('5e61cba729452', 'Gosok sela - sela jari tangan', '5e61cba729fa4'),
('5e61cba729452', 'Gosok pergelangan tangan', '5e61cba729fa6'),
('5e61cba729452', 'Gosok punggung tangan', '5e61cba729fa7'),
('5e61cba72e768', 'Sarung tangan (handscoen)', '5e61cba72f82f'),
('5e61cba72e768', 'Helm', '5e61cba72f839'),
('5e61cba72e768', 'Masker', '5e61cba72f83a'),
('5e61cba72e768', 'Kacamata Gogle', '5e61cba72f83b'),
('5ed5ceb34cd7f', 'A. Pimpinan', '5ed5ceb34e107'),
('5ed5ceb34cd7f', 'B. Kepala', '5ed5ceb34e107'),
('5ed5ceb34cd7f', 'C. Rekan Kerja', '5ed5ceb34e107'),
('5ed5ceb34cd7f', 'D. Pengunjung', '5ed5ceb34e107'),
('5ed5ceb350fe8', 'A. Meningkatkan tuntutan pelanggan', '5ed5ceb3517b8'),
('5ed5ceb350fe8', 'B. Pelanggan dilindungi Hukum', '5ed5ceb3517b8'),
('5ed5ceb350fe8', 'C. Pelanggan semakin pintar', '5ed5ceb3517b8'),
('5ed5ceb350fe8', 'D. Tidak adanya kebijakan berobat gratis di RS / institusi kesehatan dari pemerintah', '5ed5ceb3517b8'),
('5ed5ceb353ae0', 'A. Pimpinan Perusahaan ', '5ed5ceb354698'),
('5ed5ceb353ae0', 'B. Teman Sejawat', '5ed5ceb354698'),
('5ed5ceb353ae0', 'C. Teman Kerja', '5ed5ceb354698'),
('5ed5ceb353ae0', 'D. Semua benar', '5ed5ceb354698'),
('5ed5ceb3594ba', 'A. Memeperbaiki sarana dan prasarana yang kurang', '5ed5ceb359c8a'),
('5ed5ceb3594ba', 'B. Tidak memiliki ketersediaan tenaga medis', '5ed5ceb359c8a'),
('5ed5ceb3594ba', 'C. Memiliki Strategi pengenalan RS yang kreatif & Inovatif', '5ed5ceb359c8a'),
('5ed5ceb3594ba', 'D. Tidak memberikan pelayanan prima / Service Excellent kepada pelanggan', '5ed5ceb359c8a'),
('5ed5ceb35cf52', 'A. Action', '5ed5ceb35eaab'),
('5ed5ceb35cf52', 'B. Asertif', '5ed5ceb35eaab'),
('5ed5ceb35cf52', 'C. Kompetitif', '5ed5ceb35eaab'),
('5ed5ceb35cf52', 'D. Kompetensi', '5ed5ceb35eaab'),
('5ed5ceb3630fc', 'A.Gunakan tutur santunyang lemah', '5ed5ceb3638cc'),
('5ed5ceb3630fc', 'B. Bersikap kurang santun & Ramah', '5ed5ceb3638cc'),
('5ed5ceb3630fc', 'C. Tunjukan sikap empati dan senang bertemu dengan keluhan pelanggan', '5ed5ceb3638cc'),
('5ed5ceb3630fc', 'D. Dengarkan dengan baik setiap saran dan keluhan pelanggan', '5ed5ceb3638cc'),
('5ed5ceb3667ad', 'A. Kemudahan akses dalam pelayanan', '5ed5ceb366f7d'),
('5ed5ceb3667ad', 'B. Kenyamanan dalam pelayanan', '5ed5ceb366f7d'),
('5ed5ceb3667ad', 'C. A dan B Benar', '5ed5ceb366f7d'),
('5ed5ceb3667ad', 'D. A dan B tidak Benar', '5ed5ceb366f7d'),
('5ed5ceb369e5d', 'A. Terjadinya gap antara harapan pelanggan dengan kenyataan performasi pelayanan', '5ed5ceb36a246'),
('5ed5ceb369e5d', 'B. Terjadinya gap antara harapan pelanggan dengan yang diberikan oleh suatu perusahaan', '5ed5ceb36a246'),
('5ed5ceb369e5d', 'C. A dan B Benar', '5ed5ceb36a246'),
('5ed5ceb369e5d', 'D. A dan B Salah', '5ed5ceb36a246'),
('5ed5ceb36d50e', 'A. Galiinformasi yang dibutuhkan, libatkan pihak lain bila perlu', '5ed5ceb36dcde'),
('5ed5ceb36d50e', 'B. Utarakan pemecahan masalah', '5ed5ceb36dcde'),
('5ed5ceb36d50e', 'C. Cek Kepuasan pelanggan', '5ed5ceb36dcde'),
('5ed5ceb36d50e', 'D. Semua jawaban Benar', '5ed5ceb36dcde'),
('5ed5ceb370fa7', 'Melayani pelanggan dengan kurang baik dan menghormatinya', '5ed5ceb371b5f'),
('5ed5ceb370fa7', 'B. Bersikap masa bodoh', '5ed5ceb371b5f'),
('5ed5ceb370fa7', 'C. Tidak memanfaatkan kelemahannya', '5ed5ceb371b5f'),
('5ed5ceb370fa7', 'D. Memberikan pelayanan yang tidak sewajarnya', '5ed5ceb371b5f'),
('5ed70f16084a1', 'a. Pimpinan', '5ed70f1609ff9'),
('5ed70f16084a1', 'b. Kepala', '5ed70f1609ff9'),
('5ed70f16084a1', 'c. Rekan kerja', '5ed70f1609ff9'),
('5ed70f16084a1', 'd. Pengunjung', '5ed70f1609ff9'),
('5ed70f160d6aa', 'a. Meningkatnya tuntutan pelanggan', '5ed70f160de7a'),
('5ed70f160d6aa', 'b.  Pelanggan dilindungi oleh hukum', '5ed70f160de7a'),
('5ed70f160d6aa', 'c.  Pelanggan semakin pintar', '5ed70f160de7a'),
('5ed70f160d6aa', 'd. Tidak adanya kebijakan berobat gratis di RS / institusi kesehatan dari pemerintah', '5ed70f160de7a'),
('5ed70f1611913', 'a. Pimpinan perusahan', '5ed70f16120e3'),
('5ed70f1611913', 'b. Teman sejawat', '5ed70f16120e3'),
('5ed70f1611913', 'c.  Teman bekerja ', '5ed70f16120e3'),
('5ed70f1611913', 'd.  Semua benar', '5ed70f16120e3'),
('5ed70f16153ac', 'a. Memperbaiki sarana dan prasarana yg kurang', '5ed70f1615b7c'),
('5ed70f16153ac', 'b. Tidak memiliki ketersediaan tenaga medis', '5ed70f1615b7c'),
('5ed70f16153ac', 'c. Memiliki strategi pengenalan RS yang kreatif & inovatif', '5ed70f1615b7c'),
('5ed70f16153ac', 'd. Tidak memberikan pelayanan prima / servise exellent pelanggan', '5ed70f1615b7c'),
('5ed70f161a99d', 'a.  Action', '5ed70f161b556'),
('5ed70f161a99d', 'b.  Asertif', '5ed70f161b556'),
('5ed70f161a99d', 'c.  Kompetitif', '5ed70f161b556'),
('5ed70f161a99d', 'd. Kompetensi', '5ed70f161b556'),
('5ed70f1620b47', 'a.  Gunakan tutur Bahasa yang santun yang lemah lembut', '5ed70f1623257'),
('5ed70f1620b47', 'b.  Bersikap kurang santun dan ramah', '5ed70f1623257'),
('5ed70f1620b47', 'c.  Tunjukan sikap simpati dan senang bertemu dengan pelanggan', '5ed70f1623257'),
('5ed70f1620b47', 'd. Dengarkan dengan baik setiap saran dan keluhan pelanggan', '5ed70f1623257'),
('5ed70f1627c90', 'a.  Kemudahan akses  dalam pelayanan', '5ed70f1629019'),
('5ed70f1627c90', 'b. Kenyamanan dalam pelayanan', '5ed70f1629019'),
('5ed70f1627c90', 'c.  A dan B Benar', '5ed70f1629019'),
('5ed70f1627c90', 'd. A dan B Salah', '5ed70f1629019'),
('5ed70f162bef9', 'a.  Terjadinya gap antara harapan pelanggan Dengan performansi pelayanan', '5ed70f162c6ca'),
('5ed70f162bef9', 'b.  Terjadinya gap antara harapan pelanggan Dengan diberikan oleh suatu perusahaan', '5ed70f162c6ca'),
('5ed70f162bef9', 'c.   A dan B Benar', '5ed70f162c6ca'),
('5ed70f162bef9', 'd.  A dan B Salah', '5ed70f162c6ca'),
('5ed70f162e60a', 'a.  Gali informasi yg dibutuhkan, libatkan pihak lain bila perlu', '5ed70f162f1c2'),
('5ed70f162e60a', 'b.  Utarakan pemecahan masalah', '5ed70f162f1c2'),
('5ed70f162e60a', 'c.  Cek kepuasan pelanggan', '5ed70f162f1c2'),
('5ed70f162e60a', 'd.   Semua jawaban benar', '5ed70f162f1c2'),
('5ed70f16320a3', 'a.   Melayani pelanggan dengan kurang baik dan menghormatinya', '5ed70f1632873'),
('5ed70f16320a3', 'b.   bersikap masa bodoh', '5ed70f1632873'),
('5ed70f16320a3', 'c.   Tidak memanfaatkan kelemahannya', '5ed70f1632873'),
('5ed70f16320a3', 'd.   Memberikan pelayanan yang tidak sewajarnya', '5ed70f1632873');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz`
--

CREATE TABLE `tbl_quiz` (
  `idquiz` text NOT NULL,
  `judul` varchar(100) NOT NULL,
  `nilaikalitotal` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_quiz`
--

INSERT INTO `tbl_quiz` (`idquiz`, `judul`, `nilaikalitotal`, `total`, `tanggal`, `status`) VALUES
('5e5e984e13ff3', 'Demo Quiz', 10, 10, '2020-06-02 04:00:06', 'close'),
('5e61c6a35290f', 'Internal Training PPI', 10, 10, '2020-03-18 16:58:49', 'close'),
('5ed5c83f730e7', 'SERVICE EXCELLENT PRE', 100, 10, '2020-06-04 04:17:14', 'close'),
('5ed70c38347c5', 'SERVICE EXCELLENT POST', 10, 10, '2020-06-05 02:10:10', 'close'),
('5edda058a4b23', 'Pre Test PPGD ON', 10, 10, '2020-06-08 02:20:08', 'close');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unitkerja`
--

CREATE TABLE `tbl_unitkerja` (
  `id` int(11) NOT NULL,
  `unitkerja` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_unitkerja`
--

INSERT INTO `tbl_unitkerja` (`id`, `unitkerja`) VALUES
(1, 'Unit 1'),
(2, 'Unit 2'),
(3, 'Unit 3'),
(4, 'Komite Mutu dan Manajemen Risiko'),
(5, 'Komite Pencegahan dan Pengendalian Infeksi'),
(6, 'Rekam Medis'),
(7, 'Gudang'),
(8, 'Unit Praktek I'),
(9, 'Unit Pokja I'),
(10, 'Sekretariat'),
(11, 'SIMRS'),
(12, 'ARK'),
(13, 'AP'),
(14, 'PAP'),
(15, 'PAB'),
(16, 'PKPO'),
(17, 'PMKP'),
(18, 'TKRS'),
(19, 'MFK'),
(20, 'KKS'),
(21, 'HPK'),
(22, 'MKE'),
(23, 'PPI'),
(24, 'SKP'),
(25, 'MIRM'),
(26, 'PROGRAM NASIONAL'),
(28, 'Penurunan angka Kematian Ibu dan Bayi'),
(29, 'Penurunan Angka Kesakitan HIV/AIDS'),
(30, 'Penurunan Angka Kesakitan Tuberculosis (TBC)'),
(31, 'Pengendalian Resistensi Antimikroba'),
(32, 'Pelayanan Geriatri'),
(33, 'Penunjang Medis'),
(34, 'Sumber Daya Manusia\r\n'),
(35, 'Pelayanan Medis'),
(36, 'Instalasi Ruang Persalinan'),
(37, 'PKRS'),
(38, 'Instalasi Kamar Operasi & CSSD'),
(39, 'Rehabilitasi Medik & KTKA\r\n'),
(40, 'Instalasi gizi'),
(41, 'Instalasi Ruang Rawat intensif & Anestesiologi'),
(42, 'Instalasi Rawat Jalan'),
(43, 'Instalasi Rawat Inap'),
(44, 'Instalasi Gawat Darurat'),
(45, 'Penunjang Non Klinis'),
(46, 'Instalasi Farmasi'),
(47, 'Komite PPI'),
(48, 'Komite PMKP'),
(49, 'Komite Keperawatan\r\n'),
(50, 'Penunjang Klinis'),
(52, 'NS 1'),
(53, 'NS 2'),
(54, 'NS 3'),
(55, 'NS 4'),
(56, 'NS 6'),
(57, 'NS 7'),
(58, 'NS 8'),
(59, 'Tidak ada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_unitkerja`
--
ALTER TABLE `tbl_unitkerja`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `tbl_unitkerja`
--
ALTER TABLE `tbl_unitkerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
