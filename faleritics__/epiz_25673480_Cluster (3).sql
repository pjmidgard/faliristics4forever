-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql301.byetcluster.com
-- Generation Time: May 15, 2020 at 09:45 AM
-- Server version: 5.6.47-87.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_25673480_Cluster`
--

-- --------------------------------------------------------

--
-- Table structure for table `IP`
--

CREATE TABLE `IP` (
  `IP` varchar(20) NOT NULL,
  `joined_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IP`
--

INSERT INTO `IP` (`IP` , `joined_on`) VALUES
('37.228.248.57', '14:51:00');
-- --------------------------------------------------------

--
-- Table structure for table `Members`
--

CREATE TABLE `Members` (
  `student_id` varchar(10) NOT NULL,
  `sport_id` varchar(3) NOT NULL,
  `joined_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Members`
--

INSERT INTO `Members` (`student_id`, `sport_id`, `joined_on`) VALUES
('20101234', 'RBY', '2020-04-30 15:27:04'),
('20124568', 'RBY', '2020-04-30 15:27:04'),
('20134321', 'RBY', '2020-04-30 15:27:04'),
('20134321', 'TEN', '2020-04-30 15:27:04'),
('20101234', 'TEN', '2020-04-30 15:27:04'),
('20134321', 'TBT', '2020-04-30 15:27:04'),
('20098989', 'TBT', '2020-04-30 15:27:04'),
('20121524', 'TBT', '2020-04-30 15:27:04'),
('20121524', 'FUT', '2020-04-30 15:27:04'),
('20124568', 'TBT', '2020-04-30 15:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `Adminid` varchar(10) NOT NULL,
  `img1` varchar(500) NOT NULL,
  `img2` varchar(500) NOT NULL,
  `img3` varchar(500) NOT NULL,
  `Name_of_Product` varchar(500) NOT NULL,
  `Price` varchar(11) NOT NULL,
  `password` varchar(500) NOT NULL,
  `admin` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`Adminid`, `img1`, `img2`, `img3`, `Name_of_Product`, `Price`, `password`, `admin`) VALUES
('20098990', '<img src=\"IMG_2436.JPG\" width=\"422\" height=\"344\" hspace=\"15\" vspace=\"15\">', '<img src=\"IMG_2437.JPG\" width=\"422\" height=\"344\" hspace=\"15\" vspace=\"15\">', '<img src=\"IMG_2438.JPG\" width=\"422\" height=\"344\" hspace=\"15\" vspace=\"15\">', 'ORIGINAL USSR MEDAL 1945 FOR THE VICTORY OVER  GERMANY', '€46.50', '', 0),
('20098989', '<img src=\"IMG_2433.JPG\" width=\"422\" height=\"344\" hspace=\"15\" vspace=\"15\">', '<img src=\"IMG_2434.JPG\" width=\"422\" height=\"344\" hspace=\"15\" vspace=\"15\">', '<img src=\"IMG_2435.JPG\" width=\"422\" height=\"344\" hspace=\"15\" vspace=\"15\">', 'ORIGINAL USSR MEDAL 1945 FOR THE VICTORY OVER JAPAN', '€45.00', '', 0),
('20098991', '<img src=\"IMG_2439.JPG\" width=\"422\" height=\"344\" hspace=\"15\" vspace=\"15\">', '<img src=\"IMG_2440.JPG\" width=\"422\" height=\"344\" hspace=\"15\" vspace=\"15\">', '<img src=\"IMG_2441.JPG\" width=\"422\" height=\"344\" hspace=\"15\" vspace=\"15\">', 'USSR ORIGINAL SILVER MEDAL 20Y SERVICE', '€58.50', '', 0),
('2009892', '<img src=\"IMG_2442.JPG\" width=\"422\" height=\"344\" hspace=\"15\" vspace=\"15\">', '<img src=\"IMG_2443.JPG\" width=\"422\" height=\"344\" hspace=\"15\" vspace=\"15\">', '<img src=\"IMG_2444.JPG\" width=\"422\" height=\"344\" hspace=\"15\" vspace=\"15\">', 'USSR ORIGINAL MEDAL 1945 FOR THE VICTORY OVER GERMANY (MILITARY,SOLDERED EYE)', '€60.50', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `student_id` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `admin` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`student_id`, `first_name`, `last_name`, `email`, `password`, `admin`) VALUES
('29999998', 'Sever', 'Ugas', 'pj.midgard@yahoo.com', '$2y$10$WbSZLEyrxuLGwL2nTEh2aOI.W7u53T4hIEOoQettBlIZkIwb6bf4u', 0),
('29999991', 'Jurijus', 'Pacalovas', 'pj.midgard@yahoo.com', '$2y$10$9D.Jp72yn0cMfO1C8RexvetDxFUK46uD3esMcNNbGcwohZwe2JNs2', 0),
('20098989', 'John', 'Smith', 'lelkamoja@yahoo.com', '$2y$10$kb8OtwmcxMzLKeHQe/s.HOVwyN89XDLRJpcY7Ok0Oadb5g6CppmjK', 1),
('29999994', 'furijus', 'Smithw', 'j.pacalovas@mail.ru', '$2y$10$nqrlJlQLSMVu0fo4ONqp/eMCpkNs5AmsJ6M.lYc9z65ajFp4uVtTa', 0),
('299994', 'Johns', 'Smiths', 'j.pacalovas@mail.ru', '$2y$10$nAvIK2bGPdtcW9.7MSBcresoQCAkrAlzavzIc.f940wnqgzgPN3nC', 0),
('28999999', 'furijus', 'Ugas', 'Smith@cctstudent', '$2y$10$B2ILu5a4RtXC/dwJqUTjDOe/pkB4rbK.eeN6M73RJ8j5pYzwTzKZS', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Members`
--
ALTER TABLE `Members`
  ADD PRIMARY KEY (`student_id`,`sport_id`),
  ADD KEY `sport_id` (`sport_id`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`Adminid`);

--
-- Indexes for table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
