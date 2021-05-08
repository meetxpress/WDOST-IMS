-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 08:54 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `pdate` varchar(10) NOT NULL,
  `price` int(6) NOT NULL,
  `qty` int(6) NOT NULL,
  `relevel` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`pid`, `uid`, `pname`, `category`, `descrip`, `pdate`, `price`, `qty`, `relevel`) VALUES
(1, 1, 'ABC', 'Solid Product', 'ABCD', '2021-04-02', 120, 12, 4),
(2, 1, 'ABC', 'Solid Product', 'ABCD', '2021-04-02', 120, 12, 4),
(3, 1, 'ABC', 'Solid Product', 'ABCD', '2021-04-02', 120, 12, 4),
(4, 1, 'ABC', 'Solid Product', 'ABCD', '2021-04-02', 120, 12, 4),
(5, 1, 'ABC', 'Solid Product', 'ABCD', '2021-04-02', 120, 12, 4),
(6, 1, 'ABC', 'Solid Product', 'ABCD', '2021-04-02', 120, 12, 4),
(7, 1, 'ABC', 'Solid Product', 'ABCD', '2021-04-02', 120, 12, 4),
(8, 1, 'PQR', 'Liquid Product', 'asdfghjkl', '2021-04-14', 120, 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `uid` int(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `uadd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`uid`, `uname`, `username`, `pass`, `email`, `phno`, `uadd`) VALUES
(1, 'Meet Patel', 'aaa', '1122', 'pmeet7895@gmail.com', '7621993011', 'SF-202, Sooraj Avenue,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproducts`
--
ALTER TABLE `tblproducts`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
