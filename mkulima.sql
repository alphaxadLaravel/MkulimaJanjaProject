-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 09:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mkulima`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidhaa`
--

CREATE TABLE `bidhaa` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jina_bidhaa` varchar(50) NOT NULL,
  `bei` bigint(20) NOT NULL,
  `kipimo_bei` varchar(20) NOT NULL,
  `maelezo` longtext NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `kipimo_quantity` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `picha` varchar(200) NOT NULL,
  `status` text NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bidhaa`
--

INSERT INTO `bidhaa` (`id`, `user_id`, `jina_bidhaa`, `bei`, `kipimo_bei`, `maelezo`, `quantity`, `kipimo_quantity`, `category`, `picha`, `status`) VALUES
(5, 7, 'Cabage', 1000, 'kwa Kilogram', 'cabbage hii ni supa kwa bei poa wazee', 12, 'kilogram', 'mazao', '../upload/1656461922cabage.jpg', 'available'),
(6, 7, 'Nyanya', 2000, 'kwa Fungu', 'Kuna fungu zipo kumin atano kwaajili yako', 15, 'Mafungu', 'mazao', '../upload/1656464065product-1.jpg', 'available'),
(7, 7, 'Nyanya za Mboga', 1000, 'kwa Fungu', 'hizi i special kwa mboga ya kuunga harusini 😋', 15, 'Debe', 'mazao', '../upload/1656468063tom.webp', 'available'),
(8, 7, 'Mbolea Safi', 1000, 'kwa Ndoo', 'Hii mbolea mbona Safi tuuu yani', 15, 'Ndoo', 'mbolea', '../upload/1656469877mbolea-2.jpg', 'available'),
(9, 7, 'Mchele wa mbeya', 12000, 'kwa kilogram', 'Kuna mcele mzuri wa kutumia njoo uchuke kutoka kwangu', 15, 'Gunia', 'mazao', '../upload/1656620921rice.jpg', 'available'),
(10, 7, 'Kahawa Supa', 3000, 'kwa kilogram', 'Hii kahawa ni supa kwa matumizi  ya kijiweni wahi sasa', 200, 'kilogram', 'mazao', '../upload/1656622153kahawa.jpg', 'available'),
(11, 8, 'Mbolea Kavu', 3000, 'kwa Debe', 'hii mbolea ni Supa na iko vzr kwa matumizi ya shamba lako..', 45, 'Ndoo', 'mbolea', '../upload/1656622556mbolea.jpeg', 'available'),
(12, 8, 'Mbolea ya kisasa', 4500, 'kwa Debe', 'hii mbolea ni debe ila balaa shambani kwako..ijaribu leo🌟', 14, 'Debe', 'mbolea', '../upload/1656622720mbolea3.png', 'available'),
(13, 12, 'Chemical Trix', 6500, 'kwa Chupa', 'Hii dawa ni kali wazee Njoo uione kwa matumizi ya shamba lako', 14, 'Chupa', 'madawa', '../upload/1656623684dawa3.jpeg', 'available'),
(14, 12, 'Nduturu Dawa kali', 3000, 'kwa Katoni', 'dawa iko poa kwa matumizi ya ki shamba shamba', 34, 'Katoni', 'madawa', '../upload/1656623859dawa1.png', 'available'),
(15, 18, 'Kisuma', 3000, 'kwa Chupa', 'hii dawa inatumika kuongeza nguvu za kiume', 45, 'Chupa', 'madawa', '../upload/1656674379daw3.jpg', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `brellah`
--

CREATE TABLE `brellah` (
  `id` int(11) NOT NULL,
  `jina_kamili` varchar(30) NOT NULL,
  `tin_number` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brellah`
--

INSERT INTO `brellah` (`id`, `jina_kamili`, `tin_number`, `status`) VALUES
(1, 'Michael Mbuto', 'TIN123', 'active'),
(2, 'Philimon Philbert', 'TIN555', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bidhaa_id` int(11) NOT NULL,
  `added_quantity` bigint(20) NOT NULL,
  `status` varchar(23) NOT NULL DEFAULT 'added'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `bidhaa_id`, `added_quantity`, `status`) VALUES
(15, 8, 6, 7, 'added'),
(20, 9, 7, 7, 'added'),
(21, 10, 7, 2, 'added'),
(25, 7, 9, 10, 'added'),
(31, 12, 14, 3, 'added'),
(32, 12, 13, 4, 'added'),
(36, 7, 13, 3, 'added'),
(37, 18, 7, 29, 'added'),
(40, 18, 6, 8, 'added'),
(45, 18, 13, 1, 'added'),
(46, 19, 13, 4, 'added'),
(47, 7, 10, 3, 'added'),
(48, 8, 10, 4, 'added');

-- --------------------------------------------------------

--
-- Table structure for table `money_branches`
--

CREATE TABLE `money_branches` (
  `id` int(11) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `money_branches`
--

INSERT INTO `money_branches` (`id`, `phone`, `amount`, `password`, `branch`) VALUES
(1, '0743196599', 100000, '1234', 'T-Pesa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `jina_kamili` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `simu` varchar(15) NOT NULL,
  `tin_number` varchar(34) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user',
  `profiles` varchar(200) NOT NULL DEFAULT '../profiles/avatar.png',
  `status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `jina_kamili`, `username`, `password`, `simu`, `tin_number`, `role`, `profiles`, `status`) VALUES
(7, 'alphaxad kakulu', 'alpha', '5555', '0743196599', 'TIN123', 'mazao', '../profiles/1656630751IMG-20201107-WA0012.jpg', 'active'),
(8, 'Juma Khan', 'khan', '1234', '0743196595', 'TIN123', 'mbolea', '../profiles/avatar.png', 'active'),
(9, 'juma15443', 'juma23', '1234', '0743196599', 'TIN123', 'mbolea', '../profiles/avatar.png', 'active'),
(10, 'johari khan', 'johari', '1234', '0743196587', '', 'user', '../profiles/avatar.png', 'active'),
(11, 'admin', 'admin', '1234', '', '', 'admin', '../profiles/avatar.png', 'active'),
(12, 'philimon philbert', 'philimon', '1234', '0743196587', 'TIN123', 'madawa', '../profiles/avatar.png', 'active'),
(14, 'Michael Mbuto', 'alpha', '12345', '0743196587', 'TIN555', 'mazao', '../profiles/avatar.png', 'active'),
(18, 'Michael Mbuto', 'alphae', '1234', '0743196589', 'TIN123', 'madawa', '../profiles/avatar.png', 'active'),
(19, 'johari khan', 'johari1', '1234', '0743196587', '', 'user', '../profiles/1656673846IMG_20220528_171335_089_120050.jpg', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidhaa`
--
ALTER TABLE `bidhaa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brellah`
--
ALTER TABLE `brellah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `money_branches`
--
ALTER TABLE `money_branches`
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
-- AUTO_INCREMENT for table `bidhaa`
--
ALTER TABLE `bidhaa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `brellah`
--
ALTER TABLE `brellah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `money_branches`
--
ALTER TABLE `money_branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
