-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 08:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hopital`
--

-- --------------------------------------------------------

--
-- Table structure for table `coordonee`
--

CREATE TABLE `coordonee` (
  `id` int(11) NOT NULL,
  `nom_hopital` varchar(200) NOT NULL,
  `ville` varchar(200) NOT NULL,
  `date_creation` date NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `boite_postal` varchar(20) NOT NULL,
  `types_soin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coordonee`
--

INSERT INTO `coordonee` (`id`, `nom_hopital`, `ville`, `date_creation`, `telephone`, `boite_postal`, `types_soin`) VALUES
(1, 'districque logbaba', 'Douala', '2022-01-05', '693738627', '225', 'radio ,scaner'),
(2, 'rail', 'Douala', '2021-12-28', '693738627', '5245', 'acouchement, radio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coordonee`
--
ALTER TABLE `coordonee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coordonee`
--
ALTER TABLE `coordonee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
