-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 15, 2018 at 02:56 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `hotelbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '$2y$10$Hy/Ys8knxX3nyJgNw0yu1O184YaD4.WxWeZ1q.7TSSxeVYpn31Fae');

-- --------------------------------------------------------

--
-- Table structure for table `chattogramHotel`
--

CREATE TABLE `chattogramHotel` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `rent` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chattogramHotelRent`
--

CREATE TABLE `chattogramHotelRent` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hotelName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chkin` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `chkout` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noAdults` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `noChild` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coxbazarHotel`
--

CREATE TABLE `coxbazarHotel` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `rent` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coxbazarHotelRent`
--

CREATE TABLE `coxbazarHotelRent` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hotelName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chkin` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `chkout` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noAdults` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `noChild` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dhakaHotel`
--

CREATE TABLE `dhakaHotel` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `rent` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dhakaHotel`
--

INSERT INTO `dhakaHotel` (`id`, `username`, `name`, `email`, `phone`, `address`, `rent`, `room`, `created`) VALUES
(3, 'amari@gmail.com', 'Amari Dhaka', 'amari@gmail.com', '02-55059620', 'House no. 47, Rd No 41, Dhaka 1212', '14429', '22', '2018-08-15 14:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `dhakaHotelRent`
--

CREATE TABLE `dhakaHotelRent` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hotelName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chkin` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `chkout` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noAdults` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `noChild` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dhakaHotelRent`
--

INSERT INTO `dhakaHotelRent` (`id`, `username`, `hotelName`, `chkin`, `chkout`, `noAdults`, `noChild`, `room`, `name`, `gender`, `address`, `mobile`, `created`) VALUES
(3, 'mehedi@gmail.com', 'Amari Dhaka', '1/2/2', '2/2/2', '1', '1', '20', 'Mehedi Khan', 'male', 'Gulshan 2', '01611001321', '2018-08-15 14:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `user_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'Amari Dhaka', 'amari@gmail.com', '$2y$10$0CCnXoelIGNNI2/RG5H2Buc8OfWNNpJBM/7fAFNpPHNsNPdWBDsXm');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscribe`
--



-- --------------------------------------------------------

--
-- Table structure for table `sylhetHotel`
--

CREATE TABLE `sylhetHotel` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `rent` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sylhetHotelRent`
--

CREATE TABLE `sylhetHotelRent` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hotelName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chkin` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `chkout` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noAdults` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `noChild` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`) VALUES
(1, 'mehedi@gmail.com', '$2y$10$EeHM6bhcnHqbR2zhvH45Vuf7ME.wBiHa0ffC4rORSbxJtWyS91aiq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `chattogramHotel`
--
ALTER TABLE `chattogramHotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chattogramHotelRent`
--
ALTER TABLE `chattogramHotelRent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coxbazarHotel`
--
ALTER TABLE `coxbazarHotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coxbazarHotelRent`
--
ALTER TABLE `coxbazarHotelRent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dhakaHotel`
--
ALTER TABLE `dhakaHotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dhakaHotelRent`
--
ALTER TABLE `dhakaHotelRent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `sylhetHotel`
--
ALTER TABLE `sylhetHotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sylhetHotelRent`
--
ALTER TABLE `sylhetHotelRent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `chattogramHotel`
--
ALTER TABLE `chattogramHotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `chattogramHotelRent`
--
ALTER TABLE `chattogramHotelRent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coxbazarHotel`
--
ALTER TABLE `coxbazarHotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `coxbazarHotelRent`
--
ALTER TABLE `coxbazarHotelRent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dhakaHotel`
--
ALTER TABLE `dhakaHotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dhakaHotelRent`
--
ALTER TABLE `dhakaHotelRent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sylhetHotel`
--
ALTER TABLE `sylhetHotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sylhetHotelRent`
--
ALTER TABLE `sylhetHotelRent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;