-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 08:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `ID` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`ID`, `Amount`, `Time`) VALUES
(1, 220, '2023-03-29 20:33:01'),
(2, 260, '2023-03-31 00:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `deposit_record`
--

CREATE TABLE `deposit_record` (
  `ID` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deposit_record`
--

INSERT INTO `deposit_record` (`ID`, `Amount`, `Time`) VALUES
(2, 100, '2023-03-31 00:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `Name`, `Email`, `Message`) VALUES
(0, 'a', 'jain47031@gmail.com', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Date` datetime NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`ID`, `Name`, `Date`, `Type`, `Amount`, `Balance`) VALUES
(2, 'Charu Jain', '2023-03-31 00:10:12', 'Deposit', 100, 280),
(2, 'Charu Jain', '2023-03-31 00:10:24', 'Withdrawal', 20, 260),
(1, 'Devesh Jain', '2023-03-31 00:13:21', 'Withdrawal', 290, 220);

-- --------------------------------------------------------

--
-- Table structure for table `transfer_record`
--

CREATE TABLE `transfer_record` (
  `ID` int(11) NOT NULL,
  `REmail` varchar(50) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE `user_db` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`ID`, `Name`, `Email`, `Phone`, `Password`, `Type`, `Time`) VALUES
(1, 'Devesh Jain', 'jain47031@gmail.com', '', '1234', 'Current', '2023-03-29 20:32:25'),
(2, 'C Jain', 'devesh.jain@somaiya.edu', '9594936666', '123', 'Current', '2023-03-31 00:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal_record`
--

CREATE TABLE `withdrawal_record` (
  `ID` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `withdrawal_record`
--

INSERT INTO `withdrawal_record` (`ID`, `Amount`, `Time`) VALUES
(2, 20, '2023-03-31 00:10:24'),
(1, 290, '2023-03-31 00:13:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_db`
--
ALTER TABLE `user_db`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
