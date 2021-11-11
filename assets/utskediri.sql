-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2021 at 12:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utskediri`
--

-- --------------------------------------------------------

--
-- Table structure for table `covid`
--

CREATE TABLE `covid` (
  `id` int(4) NOT NULL,
  `nama kec` varchar(250) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid`
--

INSERT INTO `covid` (`id`, `nama kec`, `jumlah`) VALUES
(1, 'PURWOSARI', 2356),
(2, 'PAPAR', 7531),
(3, 'KUNJANG', 3462),
(4, 'PARE', 2368),
(5, 'PAGU', 2789),
(6, 'GURAH', 4657),
(7, 'BADAS', 6532),
(8, 'KANDANGAN', 5437),
(9, 'KEPUNG', 3625),
(10, 'PUNCU', 2156),
(11, 'NGANCAR', 5327),
(12, 'GAMPANGREJO', 3724),
(13, 'NGASEM', 1986),
(14, 'TAROKAN', 4577),
(15, 'RANYAKAN', 2021),
(16, 'GROGOL', 5643),
(17, 'MOJO', 3451),
(18, 'KRAS', 6542),
(19, 'PLOSOKLATEN', 5418),
(20, 'WATES', 5142),
(21, 'KANDAT', 9864),
(22, 'RINGINREJO', 6978);

-- --------------------------------------------------------

--
-- Table structure for table `faskes`
--

CREATE TABLE `faskes` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `lat` float NOT NULL,
  `lng` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faskes`
--

INSERT INTO `faskes` (`id`, `nama`, `alamat`, `lat`, `lng`) VALUES
(1, 'Puskesmas Ranyakan', 'Jl.Tegalrejo, Ranyakan, Ngablak, Kec.Ranyakan', -7.75237, '111.99297'),
(2, 'Puskesmas Tarokan', 'Jl.Raya Kediri Nganjuk no. 22 002/001, Kedungsari, Tarokan', -7.91845, '111.97477'),
(3, 'Puskesmas Grogol', 'Jl.Raya Senorejo, Ds.Sonorejo, Kec. Grogol', -7.76888, '112.23943'),
(4, 'Puskesmas Mojo', 'Jl. Raya Mojo N0 201, Kec. Mojo', -7.81146, '112.00631'),
(5, 'Puskesmas Kras', 'Jl. Kenanga,Krenceng, Kec. Kepung', -7.7781, '112.22362'),
(6, 'Puskesmas Ringinrejo', 'Jl. Raya Setya Bakti 222, Ds. Kras Kec. Kras', -7.82489, '112.09045'),
(7, 'Puskesmas Kandat', 'Jl. Sikatan , Kec. Kandat', -7.88448, '111.98277'),
(8, 'Puskesmas Wates', 'Jl. Raya Pare - Wates No. 74 RT 002 RW 001 Ds. Wates, Kec. Wates', -7.86705, '111.97901'),
(9, 'Puskesmas Ngancar', 'Jl. Kelud No 128 RT 008 RW 001 Ds. Wates, Kec. Ngancar', -7.81024, '112.05547'),
(10, 'Puskesmas Puncu', 'Jl. Puncak No. 7 RT 002 RW 005 Ds.Puncu, Kec. Puncu', -7.68202, '112.19298'),
(11, 'Puskesmas Plosoklaten', 'Jl. Raya Brenggolo No 204 Ds. Brenggolo Kec. Plosoklaten', -7.94875, '111.95351'),
(12, 'Puskesmas Ngasem', 'Jl. Pamenang 516 Ds. Ngasem, Kec. Ngasem', -7.78091, '112.00763'),
(13, 'Gampangrejo', 'Jl. Gampangrejo, Tegowangi, Kec. Gampangrejo', -7.73225, '112.15872'),
(14, 'Puskesmas Pagu', 'Jl. Supriyadi 98 Ds.Pagu, Kec. Pagu', -7.9568, '112.0727'),
(15, 'Puskesmas Gurah', 'Jl. Seruji No.10. RT 003 RW 003 Ds.Gurah, Kec. Gurah', -7.77262, '112.09027'),
(16, 'Puskesmas Kepung', 'Jl. Harinjing 23, Ds. Kepung Kec. Kepung', -7.95961, '112.02954'),
(17, 'Puskesmas Pare', 'Jl. Welirang 4 Ds.Pare, Kec. Pare', -7.81321, '112.26823'),
(18, 'Puskesmas Badas', 'Jl. Sumberagung, Krecek, Kec. Badas', -7.6303, '112.1099'),
(19, 'Puskesmas Papar', 'Jl. Kedungmalang, Kec. Papar', -7.70622, '112.11854');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `covid`
--
ALTER TABLE `covid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faskes`
--
ALTER TABLE `faskes`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
