# addtech-Assignment

Create a form to insert more than one employee based on department (department should be in dropdown and values should fetch from department table) on single save. 
Display list of employees with basic search and pagination.
Show monthly salary list based on department.
Create database tables accordingly. 


Mysql Query 
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2018 at 12:36 PM
-- Server version: 5.7.11-0ubuntu6
-- PHP Version: 7.0.29-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) UNSIGNED NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`) VALUES
(1, 'Trainer'),
(2, 'Software Engneer'),
(3, 'Sr Software Engneer'),
(4, 'Team Lead'),
(5, 'Project Manager'),
(6, 'CTO'),
(7, 'CEO');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` float(5,2) NOT NULL,
  `salary` float(10,2) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `dept_id`, `experience`, `salary`, `status`) VALUES
(1, 'testing', '', 0.00, 0.00, 0),
(2, 'testing 2', '', 0.00, 0.00, 0),
(3, 'ravi1', '', 0.00, 0.00, 0),
(4, 'ravi2 ', '', 0.00, 0.00, 0),
(5, 'ravi3', '', 0.00, 0.00, 0),
(6, 'test1', 'dept1', 1.50, 2000.00, 1),
(7, 'ttt1', 'dept1', 5.70, 25000.00, 0),
(8, 'ravi', 'sr developer', 4.50, 4000.00, 1),
(9, 'test1', 'dept1', 3.00, 1000.00, 1),
(10, 'rQQQQ', 'dept1', 4.00, 20000.00, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
