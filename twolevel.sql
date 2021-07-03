-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2021 at 09:40 AM
-- Server version: 5.7.32
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `twolevel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blacklistedIp`
--

CREATE TABLE `blacklistedIp` (
  `id` int(11) NOT NULL,
  `ipaddress` varchar(342) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blacklistedIp`
--

INSERT INTO `blacklistedIp` (`id`, `ipaddress`) VALUES
(1, '192.168.10.100');

-- --------------------------------------------------------

--
-- Table structure for table `FailureAttempts`
--

CREATE TABLE `FailureAttempts` (
  `id` int(11) NOT NULL,
  `CustId` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FailureAttempts`
--

INSERT INTO `FailureAttempts` (`id`, `CustId`, `date`) VALUES
(28, '86860089', '2016-02-17'),
(29, '86860089', '2016-02-17'),
(30, '86860089', '2016-02-17'),
(31, '7898120', '2016-02-17'),
(32, '7898120', '2016-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `Transactions`
--

CREATE TABLE `Transactions` (
  `T_Id` int(11) NOT NULL,
  `U_Id` int(11) NOT NULL,
  `Transaction_Num` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Transactions`
--

INSERT INTO `Transactions` (`T_Id`, `U_Id`, `Transaction_Num`, `amount`, `Status`, `Date`) VALUES
(1, 1, '26845091', 0, 'Success', '2016-02-16'),
(2, 1, '73406591', 0, 'Success', '2016-02-16'),
(3, 1, '06972843', 0, 'Success', '2016-02-16'),
(4, 1, '23879164', 0, 'Success', '2016-02-16'),
(5, 1, '56921403', 0, 'Success', '2016-02-16'),
(6, 1, '76425089', 0, 'Success', '2016-02-16'),
(7, 1, '86149025', 0, 'Success', '2016-02-16'),
(8, 1, '76031845', 0, 'Success', '2016-02-16'),
(9, 1, '84276035', 0, 'Success', '2016-02-17'),
(10, 2, '45268370', 0, 'Success', '2016-02-17'),
(11, 2, '47651093', 0, 'Failed', '2016-02-17'),
(12, 2, '87402936', 6868, 'Success', '2016-02-17'),
(13, 2, '09253786', 1000, 'Success', '2016-02-17'),
(14, 2, '03598416', 0, 'Failed', '2016-02-17'),
(15, 1, '72143968', 7979, 'Success', '2016-02-17'),
(16, 1, '43058217', 79, 'Failed', '2016-02-17'),
(17, 1, '57296104', 99, 'Success', '2016-02-17'),
(18, 1, '12389047', 86868, 'Failed', '2016-02-17'),
(19, 1, '10267845', 1000, 'Success', '2016-02-17'),
(20, 1, '61873594', 998, 'Success', '2016-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `Trans_table`
--

CREATE TABLE `Trans_table` (
  `id` int(11) NOT NULL,
  `OTP` varchar(100) NOT NULL,
  `Flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Trans_table`
--

INSERT INTO `Trans_table` (`id`, `OTP`, `Flag`) VALUES
(79, '8J0G', 1),
(80, 'NT8L', 0),
(81, 'CGBA', 0),
(82, '5YD9', 0),
(83, 'IHU9', 0),
(84, 'OXUI', 1),
(85, 'FKCA', 1),
(86, '238T', 0),
(87, 'UF98', 0),
(88, 'IAH9', 1),
(89, 'R6SD', 1),
(90, '425V', 1),
(91, 'MHYK', 1),
(92, 'ZD1C', 0),
(93, 'NJZP', 0),
(94, 'Y0CO', 0),
(95, '2MCP', 1),
(96, '0IFG', 1),
(97, 'Z0TC', 1),
(98, 'F5VI', 0),
(99, 'DSIG', 0),
(100, 'O975', 0),
(101, 'WNYS', 0),
(102, '4HKX', 0),
(103, 'ASBW', 0),
(104, 'CEMY', 0),
(105, 'LOMG', 0),
(106, '7R1Q', 0),
(107, 'A5CO', 0),
(108, 'YVBR', 0),
(109, 'XTEI', 0),
(110, 'UVX1', 1),
(111, 'IDS0', 1),
(112, 'BKGW', 1),
(113, 'RG49', 1),
(114, 'GNMF', 1),
(115, 'RMHT', 0),
(116, 'OVFY', 1),
(117, 'YPAH', 1),
(118, 'G604', 0),
(119, 'DPB9', 0),
(120, '7AQE', 1),
(121, 'LKHX', 0),
(122, 'K6BS', 1),
(123, 'PKL6', 1),
(124, 'PHWQ', 1),
(125, '9CL5', 1),
(126, '4CMQ', 0),
(127, '7580', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `CustomerName` varchar(100) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `AccNumber` int(11) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `IMEI` varchar(100) NOT NULL,
  `AccountBalance` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `card_number` varchar(33) NOT NULL,
  `cvv` varchar(33) NOT NULL,
  `expiry_mm` varchar(33) NOT NULL,
  `expiry_yy` varchar(21) NOT NULL,
  `card_type` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `CustomerName`, `CustomerId`, `AccNumber`, `Phone`, `IMEI`, `AccountBalance`, `Email`, `password`, `card_number`, `cvv`, `expiry_mm`, `expiry_yy`, `card_type`) VALUES
(1, 'SURUJ', 7898120, 5464747, '9496873618', '1', 12903, 'anish.vilayil.s@gmail.com', 'Sooraj@123', '', '', '', '', ''),
(2, 'ANISH_S_NAIR', 86860089, 6868, '828138886', '1', 500, 'A@GMAIL.COM', 'KHKHK', '', '', '', '', ''),
(3, 'RAHUL', 12334, 22425255, '9526674440', '8686868968696969669', 300098, 'sso@gmail.com', 'abcd', '', '', '', '', ''),
(4, 'ANISH', 701, 875756, '9526674440', '6789689689', 8000, 'a@g.com', 'Dev@12345', '101001', '123', '01', '77', 'Basic'),
(5, 'ADHITHYAN', 1009, 1009, '9744255085', '678', 8000, 'a@g.com', '12345', '233431414', '34', '12', '21', 'Basic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blacklistedIp`
--
ALTER TABLE `blacklistedIp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `FailureAttempts`
--
ALTER TABLE `FailureAttempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Transactions`
--
ALTER TABLE `Transactions`
  ADD PRIMARY KEY (`T_Id`);

--
-- Indexes for table `Trans_table`
--
ALTER TABLE `Trans_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blacklistedIp`
--
ALTER TABLE `blacklistedIp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `FailureAttempts`
--
ALTER TABLE `FailureAttempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `Transactions`
--
ALTER TABLE `Transactions`
  MODIFY `T_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `Trans_table`
--
ALTER TABLE `Trans_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;