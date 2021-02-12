-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 09:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` bigint(100) NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `message`, `name`, `email`, `number`, `added_on`) VALUES
(11, 'Hello this is dinesh soni and i am having some problem regardiing categories', 'Dinesh Soni', 'soni.dineshds2000@gmail.com', 7597241244, '2021-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `headlines`
--

CREATE TABLE `headlines` (
  `id` int(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `headline` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `uploadon` date DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headlines`
--

INSERT INTO `headlines` (`id`, `image`, `headline`, `description`, `category`, `uploadon`, `author`) VALUES
(207, 'farmers.jpg', 'Farmers’ Tractor Rally Violence: One Held For Raising Flag At Red Fort', 'One person has been arrested for the raising a Sikh religious flag, identified as the Nishan Sahib at the Red Fort last week, amid violent clashes between farmers and police during the tractor rally held in Delhi on January 26.\r\n\r\n\r\nThe arrested person has been identified as Dharmendra Singh.\r\nHis role in hoisting a religious flag at Red Fort on January 26 is also being ascertained, police said.\r\nThousands of protesters had clashed with the police during the tractor parade called by farmer unions on January 26 to highlight their demand for repeal of the Centre\'s three farm laws.', 'Start-ups', '2021-02-04', 'Dinesh soni'),
(208, 'news1.jpg', 'A massive pension, pay and allowances bill has eaten horribly into the armed forces’ war-fighting ability and crucial modernisation', 'In the March 2001 edition of the Harvard Business Review, Paul Levy describes the management lessons learnt from the operations of a sewage treatment plant at Nut Island, close to Boston, where a professional team ran it for 30 years. \r\n\r\n“They were every manager’s dream team. They performed difficult, dirty, dangerous work without complaint, put in thousands of hours of unpaid overtime, and they even dipped into their own pockets to buy spare parts.... (And) yet, in one six-month period in 1982…they released 3.7 billion gallons of raw sewage into the harbour. Other routine procedures to keep the harbour clean, such as dumping massive amounts of chlorine into otherwise untreated sewage, worsened its alr­eady dreadful water quality”.', 'Education', '2021-02-03', 'Dinesh soni'),
(209, 'news.jpg', 'Sasikala Set To Return To Tamil Nadu On February 7; Here\'s How It Will Change Things', 'Ahead of the upcoming Tamil Nadu Assembly Elections 2021, expelled AIADMK leader VK Sasikala is set to return to the state on February 7, 2021, and the course of action she now takes would be watched keenly.\r\nSasikala was admitted to the Victoria Hospital after she tested positive for Covid-19 recently while under judicial custody. On the advice of doctors, she remained in the hospital and was discharged on Sunday (January 31) after her latest test reports came negative for coronavirus.', 'Entertainment', '2021-02-02', 'Dinesh soni'),
(210, 'news2.jpg', 'Actor Sonu Sood Moves SC To Challenge HC Order On Illegal Construction Notice', 'The actor\'s petition stated that his application for conversion has been approved by the Municipal CommissionerThe actor\'s petition stated that his application for conversion has been approved by the Municipal CommissionerThe actor\'s petition stated that his application for conversion has been approved by the Municipal Commissioner', 'Entertainment', '2021-02-05', 'Dinesh soni');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headlines`
--
ALTER TABLE `headlines`
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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `headlines`
--
ALTER TABLE `headlines`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
