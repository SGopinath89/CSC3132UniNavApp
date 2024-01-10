-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 07:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vavuniya_uni`
--

-- --------------------------------------------------------

--
-- Table structure for table `addimage`
--

CREATE TABLE `addimage` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) DEFAULT NULL,
  `b_img` varchar(100) DEFAULT NULL,
  `mar_l` float DEFAULT NULL,
  `mar_t` float DEFAULT NULL,
  `img_1` varchar(100) DEFAULT NULL,
  `img_2` varchar(100) DEFAULT NULL,
  `img_3` varchar(100) DEFAULT NULL,
  `img_4` varchar(100) DEFAULT NULL,
  `img_5` varchar(100) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addimage`
--

INSERT INTO `addimage` (`id`, `heading`, `b_img`, `mar_l`, `mar_t`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `description`) VALUES
(1, 'BS Faculty', '2', 290, 235, 'IMG_20231231_171601', 'IMG_20231231_171646', 'IMG_20231231_171653', 'IMG_20231231_171601', 'IMG_20231231_171601', 'faculty of business studies'),
(2, 'IT Centre', '5', 140, 402, 'IMG_20231231_161933', 'IMG_20231231_161926', 'IMG_20231231_161943', 'IMG_20231231_162013', 'IMG_20231231_161943', 'It centre is mainly control administrative site of uov'),
(3, 'BS canteen', '7', 386, 269, 'IMG_20231231_130236', 'IMG_20231231_130236', 'IMG_20231231_130236', 'IMG_20231231_130236', 'IMG_20231231_130236', 'canteen of business studies'),
(4, 'Library', '8', 425, 222, 'IMG_20231231_171059', 'IMG_20231231_171244', 'IMG_20231231_171215', 'IMG_20231231_171258', 'IMG_20231231_171323', 'A library is a place that houses a collection of books, periodicals, and other materials for reading, research, or borrowing. Libraries are essential institutions for education, providing access to a wide range of information resources. They often include study areas, computer facilities, and may offer various services to support learning and research.'),
(5, 'Faculty of Applied Science', '2', 189, 525, 'IMG_20231231_161556', 'IMG_20231231_161844', 'IMG_20231231_161619', 'IMG_20231231_161652', 'IMG_20231231_161800', 'It has two departments ,there are physical science, biological science. physical science department has two courses one is Applied mathematics and computing ,IT. '),
(6, 'Smart lecture hall', '1', 269, 590, 'IMG_20231231_161425', 'IMG_20231231_161445', 'IMG_20231231_161448', 'IMG_20231231_161425', 'IMG_20231231_161448', 'conducted meeting and lectures in scheduled time and also have more facilities such as smart board,....'),
(7, 'Lacture hall 4', '1', 330, 570, 'IMG_20231231_161158', 'IMG_20231231_161158', 'IMG_20231231_161158', 'IMG_20231231_161158', 'IMG_20231231_161158', 'Physical science lecture hall 4 with Air conditioned'),
(8, 'Electronics Lab', '3', 369, 585, 'IMG_20231231_160932', 'IMG_20231231_160932', 'IMG_20231231_160932', 'IMG_20231231_160932', 'IMG_20231231_160932', 'It has two room .one is electronics lab and another is computer lab'),
(9, 'Tech Faculty', '1', 437, 580, 'IMG_20231231_160632', 'IMG_20231231_160632', 'IMG_20231231_160632', 'IMG_20231231_160632', 'IMG_20231231_160632', 'This building is Tecnology faculty and it has department office and Lecture hall 1,2 computer lab etc.'),
(10, 'Lecture hall (Bio)', '1', 348, 526, 'IMG_20231231_163247', 'IMG_20231231_163247', 'IMG_20231231_163247', 'IMG_20231231_163247', 'IMG_20231231_163247', 'the biology building has lecture hall 1,2,3 and 1 computer lab and 2 big chemistry lab'),
(11, 'Applied canteen', '7', 298, 510, 'IMG_20231231_162215', 'IMG_20231231_162231', 'IMG_20231231_162303', 'IMG_20231231_162231', 'IMG_20231231_162215', 'very good food very good service');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Uname` varchar(40) DEFAULT NULL,
  `id` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `createpwd` varchar(30) DEFAULT NULL,
  `confirmpwd` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Uname`, `id`, `email`, `createpwd`, `confirmpwd`) VALUES
('nithu', '2000', 'kuttymaa@gmail.com', 'kutty', 'kutty'),
('sanjee', '2019/ASP/72', 'sanjee@gmail.com', '112', '112'),
('sanjee', '2019/ASP/73', 'sanjee@gmail.com', '113', '113'),
('shapesh', '2019/asp/87', 'shapesh@uv19', '2000', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `buildingicon`
--

CREATE TABLE `buildingicon` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buildingicon`
--

INSERT INTO `buildingicon` (`id`, `name`) VALUES
(1, 'Lecture hall'),
(2, 'Faculty office'),
(3, 'Computer Lab'),
(4, 'Vehicle Park'),
(5, 'Office'),
(6, 'Medical Center'),
(7, 'Canteen'),
(8, 'Library'),
(9, 'Rest Room'),
(10, 'Security Booth'),
(11, 'Chemistry Lab'),
(12, 'Garden'),
(13, 'ATM');

-- --------------------------------------------------------

--
-- Table structure for table `cor`
--

CREATE TABLE `cor` (
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cor`
--

INSERT INTO `cor` (`x`, `y`) VALUES
(298, 510),
(0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sum`
--

CREATE TABLE `sum` (
  `sum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addimage`
--
ALTER TABLE `addimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buildingicon`
--
ALTER TABLE `buildingicon`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
