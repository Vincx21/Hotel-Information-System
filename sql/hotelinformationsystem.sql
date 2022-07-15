-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2022 at 12:20 PM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18800056_assignmentse123`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(5) NOT NULL,
  `admin` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `admin`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Full_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Residential_ID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Phone_Number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Reservation_ID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Full_Name`, `Residential_ID`, `Phone_Number`, `Reservation_ID`, `Gender`) VALUES
('Vincent Timothy Lim', '1234567890', '087880800284', 'abcde12345', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `address`, `salary`) VALUES
(1, 'Roland Mendel', 'C/ Araquil, 67, Madrid', 5000),
(2, 'Victoria Ashworth', '35 King George, London', 6500),
(3, 'Martin Blank', '25, Rue Lauriston, Paris', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `custname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roomsize` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roomnumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `Customer_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Reservation_ID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Room_Size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Room_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `Id` int(5) NOT NULL,
  `RoomName` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `Availability` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `Price` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Images` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`Id`, `RoomName`, `Type`, `Availability`, `Price`, `Images`) VALUES
(1, 'Standard', 'Single', 'Yes', 'Rp300.000', 'Standard-S.jpg'),
(2, 'Standard', 'Double', 'Yes', 'Rp450.000', 'Standard-D.jpg'),
(3, 'Standard', 'Triple', 'Yes', 'Rp800.000', 'Standard-T.jpg'),
(4, 'Standard', 'Quad', 'Yes', 'Rp1.000.000', 'Standard-Q.jpg'),
(5, 'Standard', 'Queen', 'Yes', 'Rp500.000', 'Standard-Queen.jpg'),
(6, 'Standard', 'King', 'Yes', 'Rp600.000', 'Standard-King.jpg'),
(7, 'Standard', 'Twin', 'Yes', 'Rp900.000', 'Standard-Twin.jpg'),
(8, 'Standard', 'Double-Double', 'Yes', 'Rp1.000.000', 'Standard-DD.jpg'),
(9, 'Standard', 'Studio', 'Yes', 'Rp1.200.000', 'Standard-Studio.jpg'),
(10, 'Superior', 'Single', 'Yes', 'Rp450.000', 'Superior-S.jpg'),
(11, 'Superior', 'Double', 'Yes', 'Rp600.000', 'Superior-D.jpg'),
(12, 'Superior', 'Triple', 'Yes', 'Rp900.000', 'Superior-T.jpg'),
(13, 'Superior', 'Quad', 'Yes', 'Rp1.200.000', 'Superior-Q.jpg'),
(14, 'Superior', 'Queen', 'Yes', 'Rp1.500.000', 'Superior-Queen.jpg'),
(15, 'Superior', 'King', 'Yes', 'Rp1.600.000', 'Superior-King.jpg'),
(16, 'Superior', 'Twin', 'Yes', 'Rp1.200.000', 'Superior-Twin.jpg'),
(17, 'Superior', 'Double-Double', 'Yes', 'Rp1.300.000', 'Superior-DD.jpg'),
(18, 'Superior', 'Studio', 'Yes', 'Rp3.200.000', 'Superior-Studio.jpg'),
(20, 'Presidential Suite', 'King Kong', 'Yes', '123456', 'monke.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Customer_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Reservation_ID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Check_In_Date` date NOT NULL,
  `Check_Out_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Customer_Name`, `Reservation_ID`, `Check_In_Date`, `Check_Out_Date`) VALUES
('Vincent Timothy Lim', 'abcde12345', '2022-04-23', '2022-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(3, 'raihan', 'raihan', 'raihan@gmail.com', '$2y$10$Pj6fKpd1fjwY0m7N//euZOQvpLNclNEMVCe3LV51tY57Eg.PmPwS6'),
(4, '', 'tonoo', 'ton@gmail.com', '$2y$10$V7TpwmYe5hoGNtRyrLMr7O/sPMcvAjMLFrg.yOYN2sHMJSXzv.7W6'),
(5, 'erwin', 'erwin', 'erwin@gmail.com', '$2y$10$RDXxaz064wWLqD2ZUiVW2edaPZ7C0UYQSgOKXmVf.tGmyRIdVLPES'),
(6, 'example', 'example', 'example@gmail.com', '$2y$10$c0eYTTRkkRJiIMNpZpfhauu9mITTbabpw4EProP8wM7irVV8pRRT.'),
(7, 'aaa', 'aaa', 'aaa@gmail.com', '$2y$10$MpKMBgpwwwUyMj/iW7WE6ex4S5NKsKfGvYPoxYKdMPPb5x6.Xe2Da');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `username`, `email`, `password`) VALUES
(1, 'Niagahoster Tutorial', 'nhtutorial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0'),
(2, 'yo', 'yo@gmail.com', '6d0007e52f7afb7d5a0650b0ffb8a4d1'),
(3, 'raihan', 'raihan@gmail.com', 'd62046a8518b1d0fcb16ca2edd71dfd7'),
(4, 'kaoricicak', 'cicak@gmail.com', '1350ea97b605bee6e42f7e459d61db1f'),
(5, 'vincent', 'vincentlim0107@gmail.com', 'd8073fe069614c744d843680886e98b0'),
(6, 'admin', 'vincenttl21x@gmail.com', '0192023a7bbd73250516f069df18b500'),
(7, 'student', 'teellstore@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f');

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`Customer_Name`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
