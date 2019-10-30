-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 08, 2019 at 01:00 AM
-- Server version: 10.3.17-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sing9014_my_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblElectronics`
--

CREATE TABLE `tblElectronics` (
  `Id` int(50) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblElectronics`
--

INSERT INTO `tblElectronics` (`Id`, `Name`, `Price`) VALUES
(1, 'Batman', 34),
(2, 'Gta 5', 50),
(3, 'Dark Souls', 78),
(4, 'OverWatch', 78),
(5, 'Gta 4', 50),
(6, 'PUBG', 11),
(7, 'Killler', 78),
(8, 'Batman', 22);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `Id` int(50) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`Id`, `username`, `password`) VALUES
(1, 'sukhbir', '$2y$10$pcc0DzhIjp55V0yLiazzveZ.NaojMEGBawubjzutX6gLh1z1DsEM.'),
(2, 'sukhbir', '$2y$10$uzvNZGa.K9TSYDlIh7IlkOHWSUxTj1bqbBuZP6TuyCTiGqvXPUZ7a'),
(3, 'sukhbir', '$2y$10$1BECBybEJnEuOZnppS8aFOdb/z0PIED0.7.9aLGY78xZfUrZDlALW'),
(4, 'brar', '$2y$10$OieMY/3AhU2v.SPOqoccF.TmCaEf7I4padQnAG1.N3qY1NR85BuJ.'),
(5, 'sing', '$2y$10$fKyM64TBvG0Eq1lmgqHjVOgCCkIJvyBAb0nAnLxhEj8AzT4oaeIuS'),
(6, '232', '$2y$10$Celwg8oUXnHhouJ0FCVPdOSm9SLof3MarGxtWU7hcB.lMJhEQ4uHi'),
(7, 'brar', '$2y$10$.mIVSxFT4YpKcPj1ifGESODZak5N0S4llywitSR9K7Yf/DjORxAgu'),
(8, 'brar', '$2y$10$9otpm1CoxgOpGn8R05RSku.xX833XeP1w1FhpRFomYk3dyE8jHNgK'),
(9, 'brar', '$2y$10$JxqZypUOYFOSbYb0JLTcz.QvXsQNpWpPX//rL4G3Dh5UmhHHGQHPm'),
(10, 'brar', '$2y$10$FxToE5pKiUxuNPY3ihOY1.U1YnvBMlw6EImvy5MA.AYDPymOVOxeu'),
(11, 'sukhbir', '$2y$10$N28YqXzq7mqhiztz./1houZIFre7Gv9OKqXfcC9JgS/Dxsn0D.z.S'),
(12, '', '$2y$10$eo6CKByX//uKqg/wwVycqe.yOSOlVjRYBrHu7/LhM0FQVef8BB.gG'),
(13, 'kami', '$2y$10$8Pchs2dHAhtVLFTw6cTStOJnOfAcVJhydOkJMQijm0/NXN7YF8vlG'),
(14, 'singh', '$2y$10$il2P5QVW8QvmgnlwDJUJDOSe5VQ9CzLeUFPZ4uMybUjqDecOnVNt2'),
(15, 'karan', '$2y$10$RxStiexEfUChSu7403Xb1.L/pkQeUZ4aa4NE1.bflY3ha9Yx2Y6Vu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblElectronics`
--
ALTER TABLE `tblElectronics`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblElectronics`
--
ALTER TABLE `tblElectronics`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
