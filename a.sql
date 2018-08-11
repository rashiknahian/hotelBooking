-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 11, 2018 at 05:29 PM
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
(1, 'admin@gmail.com', '$2y$10$Hy/Ys8knxX3nyJgNw0yu1O184YaD4.WxWeZ1q.7TSSxeVYpn31Fae'),
(2, 'amari@gmail.com', '$2y$10$nliXM8vq6460GbEOVuJmgu7FRuJdp.tm8Q/dRPMxlARwlgv4HtTCm'),
(3, 'westin@gmail.com', '$2y$10$XMDOSlbXxaxDA.gRfjdjRutyE5Or1yOz0FJ50V5jaZ0RQNLY4VTcW');

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


-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `user_id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`user_id`, `email`, `password`) VALUES
(1, 'amari@gmail.com', '$2y$10$Ttrklzc3PdKhzx.4dDDy9u4PHLsy7ZUHCs/fWea8SnP.UB2wVTYwe');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `mobile` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `gender`, `address`, `mobile`, `email`, `password`) VALUES
(1, 'Mehedi Khan', 'male', 'Dhaka,1207', '01611111111111', 'mehedi@gmail.com', '$2y$10$kBbbMvm9hzYwsqF8NXY.hu0Ctftnwh5HmZTl7qhkwNV7g29RNm3AG');

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
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

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
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;