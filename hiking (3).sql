-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 01:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hiking`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(255) NOT NULL,
  `groupName` varchar(255) NOT NULL,
  `groupDesc` varchar(255) NOT NULL,
  `groupPhoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `groupName`, `groupDesc`, `groupPhoto`) VALUES
(15, 'dahab', 'dahab neek', ''),
(16, 'aloo', '', ''),
(17, 'sina', 'A trip to sina', 'bike.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `joined`
--

CREATE TABLE `joined` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `group_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joined`
--

INSERT INTO `joined` (`id`, `user_id`, `group_id`) VALUES
(1, 38, 15),
(2, 38, 16),
(4, 38, 15),
(6, 38, 17);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productDesc` varchar(255) NOT NULL,
  `productPrice` int(255) NOT NULL,
  `productPhoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `productDesc`, `productPrice`, `productPhoto`) VALUES
(2, 'makana', 'makana gamda', 88, ''),
(3, 'malek', 'kawyneek', 200, ''),
(4, 'zeby', 'kbeer', 999999, ''),
(5, 'ali', 'akakak', 99, ''),
(6, 'producttest', 'this is a desc', 99, ''),
(7, 'producttest', 'this is a desc', 99, ''),
(8, 'producttest', 'this is a desc', 99, ''),
(10, 'producttest', 'this is a desc', 99, 'C:/xampp/htdocs/Hikingbike.jpg'),
(11, 'lolo', '123', 955, 'C:/xampp/htdocsbike.jpg'),
(12, 'lolo', '123', 955, 'C:/xampp/htdocs/Hiking/bike.jpg'),
(13, '', '', 0, 'C:/xampp/htdocs/Hiking/'),
(14, 'producttest', '123', 955, 'C:/xampp/htdocs/Hiking/download.jpg'),
(15, 'mmm', '111', 111, 'C:/xampp/htdocs/Hiking/png-transparent-29er-mountain-bike-bicycle-specialized-stumpjumper-cycling-bicycle-bicycle-frame-bicycle-mountain-biking.png'),
(16, 'mmm', '111', 111, 'upload/png-transparent-29er-mountain-bike-bicycle-specialized-stumpjumper-cycling-bicycle-bicycle-frame-bicycle-mountain-biking.png'),
(17, 'mmm', '111', 111, 'C:/xampp/htdocs/png-transparent-29er-mountain-bike-bicycle-specialized-stumpjumper-cycling-bicycle-bicycle-frame-bicycle-mountain-biking.png'),
(18, 'mmm', '111', 111, 'png-transparent-29er-mountain-bike-bicycle-specialized-stumpjumper-cycling-bicycle-bicycle-frame-bicycle-mountain-biking.png'),
(19, 'alwef', '32323', 232323, '68f07c27-dc7d-4120-a4fa-1f38170e6c4f.jpg'),
(20, 'alwef', '32323', 232323, '68f07c27-dc7d-4120-a4fa-1f38170e6c4f.jpg'),
(21, 'alwef', '32323', 232323, '68f07c27-dc7d-4120-a4fa-1f38170e6c4f.jpg'),
(22, 'zebyyyyyyyyyy', '12', 12, '855e954b-a35c-46d5-8b84-2868dc5697ca.jpg'),
(23, 'zebyyyyyyyyyy', '12', 12, '855e954b-a35c-46d5-8b84-2868dc5697ca.jpg'),
(24, 'zebyyyyyyyyyy', '12', 12, '855e954b-a35c-46d5-8b84-2868dc5697ca.jpg'),
(25, 'zebyyyyyyyyyy', '12', 12, '855e954b-a35c-46d5-8b84-2868dc5697ca.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `placephoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`id`, `name`, `email`, `place`, `placephoto`) VALUES
(1, 'malek', 'malek@email.com', 'ST. Catherine', ''),
(2, 'amir', 'amir@email.com', 'ST. Catherine', ''),
(3, 'lolo', 'lolo@email.com', 'ST. Catherine', ''),
(4, 'miko', 'miko@email.com', 'ST. Catherine', ''),
(5, 'malek2', 'malek2@email.com', 'ST. Catherine', 'bike.jpg'),
(6, 'alo', 'alo@email.com', 'ST. Catherine', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `claim` int(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `claim`, `phone`, `photo`) VALUES
(38, 'meso', '123456', 'meso@email.com', 0, '0111111111111', ''),
(41, 'miko', '123', 'miko@email.com', 1, '01231341341', 'bike.jpg'),
(42, 'lok', '123', 'lok@email.com', 1, '0123123412341', '68f07c27-dc7d-4120-a4fa-1f38170e6c4f.jpg'),
(43, 'youssef', '123456', 'karam@email.com', 0, '01234121234', '68f07c27-dc7d-4120-a4fa-1f38170e6c4f.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joined`
--
ALTER TABLE `joined`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupJoin` (`user_id`),
  ADD KEY `groupJoin2` (`group_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `joined`
--
ALTER TABLE `joined`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `joined`
--
ALTER TABLE `joined`
  ADD CONSTRAINT `groupJoin` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `groupJoin2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
