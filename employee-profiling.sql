-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 10:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(11) NOT NULL,
  `e_firstname` varchar(50) NOT NULL,
  `e_lastname` varchar(50) NOT NULL,
  `e_title` varchar(50) NOT NULL,
  `e_reportsTo` varchar(50) NOT NULL,
  `e_birthdate` date NOT NULL,
  `e_hiredate` date NOT NULL,
  `e_address` varchar(300) NOT NULL,
  `e_city` varchar(50) NOT NULL,
  `e_state` varchar(50) NOT NULL,
  `e_country` varchar(50) NOT NULL,
  `e_postal` int(10) NOT NULL,
  `e_phone` varchar(30) NOT NULL,
  `e_fax` varchar(20) NOT NULL,
  `e_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `e_firstname`, `e_lastname`, `e_title`, `e_reportsTo`, `e_birthdate`, `e_hiredate`, `e_address`, `e_city`, `e_state`, `e_country`, `e_postal`, `e_phone`, `e_fax`, `e_email`) VALUES
(1, 'Dan', 'Super', 'Manager', '', '1980-05-01', '2020-05-08', 'Unit, Street, Village', 'Distric City', 'Amazing State', 'Philippines', 1234, '+63930322332', '32421', 'employee@sampleapp.com'),
(2, 'Mike', 'Smith', 'Staff', 'Dan Super', '1990-05-02', '2020-05-15', '2, Tall Building', 'Distric City', 'Amazing State', 'Philippines', 1234, '+63930322331', '32422', 'msmith@sampleapp.com'),
(3, 'Andrew', 'Stew', 'Staff', 'Dan Super', '1990-05-01', '2020-05-15', 'Unit 4, Tall Building', 'Distric City', 'Amazing State', 'Philippines', 1234, '+63921234521352', '3454653', 'astew@sampleapp.com'),
(4, 'Andrea', 'Stew', 'Staff', 'Dan Super', '1990-05-01', '2020-05-15', 'Unit 4, Tall Building', 'Distric City', 'Amazing State', 'Philippines', 1234, '+63921234521352', '3454653', 'astew@sampleapp.com'),
(5, 'Andres', 'Stew', 'Staff', 'Dan Super', '1990-05-01', '2020-05-15', 'Unit 4, Tall Building', 'Distric City', 'Amazing State', 'Philippines', 1234, '+63921234521352', '3454653', 'astew@sampleapp.com'),
(6, 'Anton', 'Leuk', 'Staff', 'Dan Super', '2020-06-03', '2020-06-03', 'Unit 4, Tall Building', 'Distric City', 'Amazing State', 'Philippines', 1234, '+63921234521352', '3454653', 'astew@sampleapp.com'),
(7, 'Ann', 'Hay', 'Crew', 'Dan Super', '2020-06-03', '2020-06-09', 'Unit 4, Tall Building', 'Distric City', 'Amazing State', 'Philippines', 1234, '+63921234521352', '3454653', 'ahay@sampleapp.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_type` varchar(30) NOT NULL,
  `u_employeeId` int(11) NOT NULL,
  `u_username` varchar(50) NOT NULL,
  `u_password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_type`, `u_employeeId`, `u_username`, `u_password`) VALUES
(1, 'admin', 1, 'admin', 'password'),
(2, 'user', 7, 'ahay', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
