-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 07:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kis`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataa`
--

CREATE TABLE `dataa` (
  `pn` varchar(1000) NOT NULL,
  `pp` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `idp` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataa`
--

INSERT INTO `dataa` (`pn`, `pp`, `id`, `idp`) VALUES
('aa', 'x234', 'xx', 4),
('aa', 'ssssss', 'gg', 5),
('aa', 'xxxaaa', 'xx', 6),
('aa', 'x25', 'xx', 7),
('sss', 'sss', 'gg', 9),
('a', 'a', 'gg', 10),
('testbook', 'sstty55579', 'testman', 13),
('555', '5431', 'xx', 14);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
('1234', 'admin', 'admin'),
('12345', 'ad', '68053af2923e00204c3ca7c6a3150cf7'),
('cc', 'cc', 'e0323a9039add2978bf5b49550572c7c'),
('gg', 'gg', '73c18c59a39b18382081ec00bb456d43'),
('pp', 'pp', 'c483f6ce851c9ecd9fb835ff7551737c'),
('test777', 'test', 'f1c1592588411002af340cbaedd6fc33'),
('testman', 'test', '098f6bcd4621d373cade4e832627b4f6'),
('xoxo', 'xoxo', '8cd0fee89585a5d46ed73fc3b25dbc11'),
('xx', 'xx', '9336ebf25087d91c818ee6e9ec29f8c1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataa`
--
ALTER TABLE `dataa`
  ADD PRIMARY KEY (`idp`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataa`
--
ALTER TABLE `dataa`
  MODIFY `idp` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dataa`
--
ALTER TABLE `dataa`
  ADD CONSTRAINT `dataa_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
