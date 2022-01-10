-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 03:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'Ilham', '$2y$10$U4/qPW2j25anqXV55md94uA07ZZ/lECSQPvaDYalJIX9Oxj7H4INy', 'Ilham', 'Hidayat', 'profile.jpg', '2021-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `aset`
--

CREATE TABLE `aset` (
  `id` int(11) NOT NULL,
  `name` varchar(150) CHARACTER SET latin1 NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aset`
--

INSERT INTO `aset` (`id`, `name`, `amount`) VALUES
(5, 'Gelas', 100),
(15, 'Piring', 100);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `status` int(1) NOT NULL,
  `time_out` time NOT NULL,
  `num_hr` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `employee_id`, `date`, `time_in`, `status`, `time_out`, `num_hr`) VALUES
(90, 8, '2021-11-14', '23:53:23', 1, '00:00:00', 0),
(92, 8, '2021-11-18', '20:46:37', 0, '00:00:00', 0),
(93, 8, '2021-11-01', '01:15:00', 1, '23:15:00', 8),
(94, 8, '2021-11-17', '23:15:00', 0, '23:15:00', 6.25),
(95, 8, '2021-11-16', '23:15:00', 0, '23:15:00', 6.25),
(99, 8, '2021-11-24', '13:23:37', 0, '00:00:00', 0),
(101, 8, '2021-12-05', '19:45:00', 0, '19:45:00', 3.75),
(102, 19, '2021-12-13', '16:52:15', 0, '16:52:58', 0.86666666666667),
(103, 20, '2022-01-03', '19:34:28', 0, '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(150) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'Kopi'),
(3, 'Susu'),
(13, 'Teh');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(8) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `birthdate` date NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `position_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `firstname`, `lastname`, `address`, `birthdate`, `contact_info`, `gender`, `position_id`, `schedule_id`, `photo`, `created_on`) VALUES
(7, 'asdasdas', 'ILHAM', 'BISA3', 'Jalan tan malaka no 22', '2021-11-09', 'a', 'Female', 1, 1, '', '2021-11-13'),
(8, 'Ilham981', 'Ilhamasd', 'Mahli', 'Jalan tan malaka no 22', '2021-11-09', 'a', 'Female', 1, 1, 'Screenshot (8).png', '2021-11-13'),
(10, 'b9718564', 'b', 'b', '', '0000-00-00', '', 'Male', 1, 1, '', '2021-11-15'),
(11, 'c4920758', 'c', 'c', '', '0000-00-00', '', 'Male', 1, 2, '', '2021-11-15'),
(12, 'd1832794', 'd', 'd', '', '0000-00-00', '', 'Male', 1, 1, '', '2021-11-15'),
(13, 'e6725103', 'e', 'e', '', '0000-00-00', '', 'Male', 1, 1, '', '2021-11-15'),
(14, 'f4197085', 'f', 'f', '', '0000-00-00', '', 'Male', 1, 1, '', '2021-11-15'),
(15, 'g8943705', 'g', 'g', '', '0000-00-00', '', 'Male', 1, 1, '', '2021-11-15'),
(18, 'ilham469', 'ilham', 'hidayat', 'Jalan tan malaka no 22', '2021-11-16', 'a', 'Male', 1, 1, '', '2021-11-22'),
(19, 'ilham802', 'ilham', 'hidayat', 'Jalan tan malaka no 22', '2021-11-09', 'a', 'Male', 1, 1, '', '2021-12-06'),
(20, 'Arjuna51', 'Arjuna', 'Omar', 'Dunia', '2022-01-04', 'a', 'Male', 18, 1, '', '2022-01-03'),
(21, 'Arjuna37', 'Arjuna', 'Omar', 'Dunia', '2022-01-04', 'a', 'Male', 18, 4, '', '2022-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `position` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `position`) VALUES
(1, 'Barista'),
(18, 'Satpam');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `date_product` date DEFAULT NULL,
  `name_product` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `container_name` varchar(50) NOT NULL,
  `container_weight` double NOT NULL,
  `opening_product` double NOT NULL,
  `add_product` double NOT NULL,
  `closing_product` double NOT NULL,
  `warning_product` double NOT NULL,
  `status_product` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `date_product`, `name_product`, `category_id`, `container_name`, `container_weight`, `opening_product`, `add_product`, `closing_product`, `warning_product`, `status_product`) VALUES
(37, '2021-12-01', 'Kopi Manis', 2, '', 0, 100, 1, 0, 10, 1),
(38, '2021-12-02', 'Susu Pahit', 2, '', 0, 1000, 0, 101, 100, 0),
(41, '2022-01-04', 'Kopi Asin', 2, '', 0, 200, 0, 10, 100, 0),
(42, '2022-01-05', 'Kopi asam', 2, '', 0, 100, 0, 9, 10, 0),
(43, '2021-12-29', 'a', 2, '', 0, 1, 0, 0, 1, 0),
(44, '2022-01-11', 'a edit', 2, '', 0, 1, 0, 0, 1, 0),
(45, '2022-01-01', 'a', 2, '', 0, 1, 0, 1, 1, 0),
(46, '2022-01-04', 'a', 3, '', 0, 1, 1, 0, 1, 0),
(47, '2022-01-04', 'a', 3, '', 0, 1, 1, 1, 1, 0),
(48, '2022-01-01', 'a', 3, '', 0, 1, 1, 1, 1, 0),
(49, '2022-01-01', 'a', 3, '', 0, 1, 1, 1, 1, 0),
(50, '2022-01-15', 'Kopian', 2, '', 0, 12, 0, 0, 1, 0),
(51, '2022-01-10', '123', 2, '', 0, 123, 0, 50, 1000, 0),
(52, '2022-01-10', 'Teh Sarimi', 13, 'abc', 0, 100, 0, 1, 100, 1),
(53, '2022-01-10', 'Susu Tetangga', 3, 'asd', 50, 100, 50, 0, 100, 0),
(54, '2021-11-01', '123', 2, 'qwe', 123, 123, 123, 123, 1232, 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `time_in`, `time_out`) VALUES
(1, '07:00:00', '16:00:00'),
(2, '08:00:00', '17:00:00'),
(3, '09:00:00', '18:00:00'),
(4, '10:00:00', '19:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aset`
--
ALTER TABLE `aset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aset`
--
ALTER TABLE `aset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
