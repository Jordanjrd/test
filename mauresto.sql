-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 01:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mauresto`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ID` int(11) NOT NULL,
  `foodName` text NOT NULL,
  `price` decimal(50,0) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `foodName`, `price`, `description`, `photo`, `category`) VALUES
(1, 'macaroni', '1200', 'this is a macaroni ', 'food1.jpg', 'bestseller'),
(2, 'Food Two', '1800', 'this is food Two', 'food2.jpg', 'bestseller'),
(3, 'Food Three', '1500', 'this is food Three', 'food3.jpg', 'bestseller'),
(4, 'Food Four', '1200', 'this is food four', 'food4.jpg', 'bestseller'),
(5, 'Food Five', '2000', 'this is food Five', 'food5.jpg', 'bestseller'),
(6, 'Food Six', '1500', 'this is food Six', 'food6.jpg', ''),
(7, 'Food Eight', '1350', 'this is food Eight', 'food8.jpg', ''),
(8, 'Food Seven', '1600', 'this is food Seven', 'food7.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_num` int(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `name`, `phone_num`, `email`, `pwd`) VALUES
(8, 'Jordan Conciano ', 57421408, 'jordanconciano@gmail.com', '$2y$10$VrFW.lEk9VbrI/eUhgmAFO1TKPAPY0WCpf6XHhUnarIQSz1CirzHu'),
(9, 'user7 new', 121212, '7@7.com', '$2y$10$Tc9vFh4DZ31mppMKMJjrHeFHxOG2Vwz.7Oh9P8cJH4yCFhccFkA1a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
