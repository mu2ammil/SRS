-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 01:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srs`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_quantity` int(20) NOT NULL,
  `prod_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `testing_id` varchar(255) NOT NULL,
  `prod_id` varchar(255) NOT NULL,
  `testing_performed` varchar(255) NOT NULL,
  `result` varchar(225) NOT NULL,
  `testing_remarks` varchar(255) NOT NULL,
  `testing_revised` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testing_types`
--

CREATE TABLE `testing_types` (
  `type_id` varchar(225) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testing_types`
--

INSERT INTO `testing_types` (`type_id`, `type_name`) VALUES
('1', 'Earth continuity test'),
('2', 'Motor rotation speed test'),
('3', 'Noise level measurement'),
('4', 'Performance test'),
('5', 'Stability test'),
('6', 'Standby consumption test'),
('7', 'Working current/voltage check');

-- --------------------------------------------------------

--
-- Table structure for table `test_data`
--

CREATE TABLE `test_data` (
  `id` int(11) NOT NULL,
  `prod_name` varchar(225) NOT NULL,
  `test_type_id` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_data`
--

INSERT INTO `test_data` (`id`, `prod_name`, `test_type_id`) VALUES
(1, 'Motor Capacitors', '5 6 7'),
(2, 'Switch gears', '3 7 2'),
(3, 'Fuses', '1 4'),
(4, 'Resistors', '1 6'),
(5, 'Loudspeaker', '4 5'),
(6, 'Sensors', '7 3'),
(7, 'Buzzer', '4 5'),
(8, 'Microphone', '1 2 4'),
(9, 'Power cord', '6 3 7'),
(10, 'Switch', '1 2 5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_role` varchar(200) NOT NULL,
  `user_pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_role`, `user_pass`) VALUES
(1, 'Admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Lab', 'Lab', '081c49b8c66a69aad79f4bca8334e0ef'),
(3, 'Manufacturer', 'Manufacturer', 'c2904bca62b22443d6cf5e9d89cab204');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`testing_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `testing_types`
--
ALTER TABLE `testing_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `test_data`
--
ALTER TABLE `test_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test_data`
--
ALTER TABLE `test_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `testing`
--
ALTER TABLE `testing`
  ADD CONSTRAINT `testing_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `products` (`prod_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
