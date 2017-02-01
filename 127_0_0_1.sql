-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2017 at 10:25 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yesido`
--
CREATE DATABASE IF NOT EXISTS `yesido` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `yesido`;

-- --------------------------------------------------------

--
-- Table structure for table `createiv`
--

CREATE TABLE `createiv` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `groom_text` varchar(10000) NOT NULL,
  `bride_text` varchar(10000) NOT NULL,
  `cbm` varchar(100) NOT NULL,
  `bride_m` varchar(1000) NOT NULL,
  `bm` varchar(100) NOT NULL,
  `groom_m` varchar(1000) NOT NULL,
  `phone` int(11) NOT NULL,
  `time` time NOT NULL,
  `reception` varchar(1000) NOT NULL,
  `hotel` varchar(1000) NOT NULL,
  `hotel_notice` varchar(2000) NOT NULL,
  `gift` varchar(10000) NOT NULL,
  `user_image1` varchar(255) NOT NULL,
  `user_image2` varchar(255) NOT NULL,
  `user_image3` varchar(255) NOT NULL,
  `user_image4` varchar(255) NOT NULL,
  `user_image5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `createiv`
--

INSERT INTO `createiv` (`id`, `user_id`, `groom_text`, `bride_text`, `cbm`, `bride_m`, `bm`, `groom_m`, `phone`, `time`, `reception`, `hotel`, `hotel_notice`, `gift`, `user_image1`, `user_image2`, `user_image3`, `user_image4`, `user_image5`) VALUES
(24, 37, 'Nick almost breaks a full smile when the men around him laugh aloud. &#34;I don&#39;t kiss on the cheek.&#34; He said smoothly giving her the opportunity to end it there, but instead, she drags the bride over to him and asks again.', 'Remember, whoever holds the purse strings for the wedding has the control. Don&#39;t accept a cent from anyone else if possible. Then you and him will be the only ones calling the shots. All the decisionswill be yours and the rest of them will just have to go along with it.', 'Cynthia Abayomi', 'Dolapo Ajayi, Adebayo Tinuke, Timbayo Sandra', 'Samson Christine', 'Alao Ahmed, Adams Afobaje, Ayo Sunday', 2147483647, '09:00:00', '12 Alao estate, Off Adams swart road. Yaba. Lagos State', 'D kings Hotel, Yaba', 'Special rate is available from 20th February 2017', 'Fridge, Car, House, Land', 'Array', 'Array', 'Array', 'Array', 'Array');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `groom_fname` varchar(255) NOT NULL,
  `groom_lname` varchar(255) NOT NULL,
  `bride_fname` varchar(255) NOT NULL,
  `bride_lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_pass` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `groom_fname`, `groom_lname`, `bride_fname`, `bride_lname`, `username`, `password`, `confirm_pass`, `date`, `address`, `city`, `state`) VALUES
(33, 'delsam94@yahoo.com', 'Dele', 'Olorunsola', 'Onaniyi', 'Tomilayo', 'delux', 'futarian18.', 'futarian18.', '2017-02-09', '10 alara street', 'Maryland', 'Lagos'),
(34, 'onyinye@switch.ng', 'Dele', 'Samspon', 'Folakemi', 'Ayodele', 'Sams', '123456', '123456', '2017-02-02', '', '', 'State'),
(37, '\r\nNotice:  Undefined index: email in C:x', 'Adebayo', 'Alao', 'Folake', 'Adeyemi', 'Adefola2017', '123456', '123456', '2017-02-20', '10 alara street', 'Yaba', 'Lagos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `createiv`
--
ALTER TABLE `createiv`
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
-- AUTO_INCREMENT for table `createiv`
--
ALTER TABLE `createiv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
