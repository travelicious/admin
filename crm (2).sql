-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2017 at 02:45 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `task_id`, `comments`, `emp_id`, `created_date`) VALUES
(1, 2, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, '2017-06-29 10:25:48'),
(2, 1, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, '2017-06-29 10:26:16'),
(3, 1, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum ', 4, '2017-06-29 10:30:09'),
(4, 1, 'Next follow-up date:15/06/2017', 4, '2017-06-29 10:58:56'),
(7, 3, 'Hi', 3, '2017-06-29 11:49:56'),
(8, 3, 'sdfzgfh', 3, '2017-06-29 11:51:40'),
(9, 1, 'xfghgf', 3, '2017-06-29 11:53:21'),
(10, 1, 'xn', 3, '2017-06-29 11:53:32'),
(11, 26, 'Hi, How are you?', 1, '2017-07-01 12:39:24'),
(12, 23, 'Hi, How are you Anil?', 1, '2017-07-01 12:41:01'),
(13, 23, 'I am fine Admin', 2, '2017-07-01 12:41:47'),
(14, 23, 'How are you?', 2, '2017-07-01 12:42:06'),
(15, 23, 'pty', 2, '2017-07-01 12:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `country` text NOT NULL,
  `phone` text NOT NULL,
  `destination` varchar(500) NOT NULL,
  `domain` varchar(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `customer_requirement` text NOT NULL,
  `assign_to` int(11) DEFAULT NULL,
  `next_followup` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '1',
  `enquiry_type` varchar(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `address`, `country`, `phone`, `destination`, `domain`, `source`, `customer_requirement`, `assign_to`, `next_followup`, `status`, `flag`, `enquiry_type`, `created_date`) VALUES
(5, 'Shahnawaz12345', 'shahnawaz@traveliciousholiday.in', 'bhajanpura', 'india', '9087', '', '', '', '', 5, '', 0, 0, '', '2017-06-30 11:51:09'),
(6, 'suvindera', 'shahnawaz@traveliciousholiday.in', 'asf', 'asf', '346', '', '', '', '', NULL, '', 0, 1, '', '2017-06-30 11:51:09'),
(12, 'cxg', 'shahnawaz@traveliciousholiday.in', 'cxb', 'fdgh', '657', '', '', '', '', 4, '', 0, 0, '', '2017-06-30 11:51:09'),
(13, 'cartoon', 'shahnawaz@traveliciousholiday.in', 'cvb', 'vcb', '46', 'america', 'http://www.google.com', 'Please Select Source', 'dffh', 4, '05/06/2017', 0, 1, '', '2017-06-30 11:51:09'),
(14, 'akshya 1213', 'shahnawaz@traveliciousholiday.in', 'edr', 'df', '3425', '', '', '', '', NULL, '', 0, 1, '', '2017-06-30 11:51:09'),
(15, 'dcfhhhhhhhhhhhhhhhh', 'shahnawaz@traveliciousholiday.in', 'arf', 'fsdg', 'fg', '', '', '', '', 5, '', 0, 0, '', '2017-06-30 11:51:09'),
(16, 'fcgh', 'shahnawaz@traveliciousholiday.in', 'asddf', 'asf', 'asf', '', '', '', '', NULL, '', 0, 1, '', '2017-06-30 11:51:09'),
(17, 'shjahrukh', 'shahnawaz@traveliciousholiday.in', 'ed', 'sdg', 'sdg', '', '', '', '', NULL, '', 0, 1, '', '2017-06-30 11:51:09'),
(18, 'akshay kumar', 'shahnawaz@traveliciousholiday.in', 'rty', 'grh', '457', '', '', '', '', NULL, '', 0, 1, '', '2017-06-30 11:51:09'),
(19, 'akshay kumar12343', 'shahnawaz@traveliciousholiday.in', 'rty', 'grh', '457', '', '', '', '', NULL, '', 0, 1, '', '2017-06-30 11:51:09'),
(20, 'salman khan', 'shahnawaz@traveliciousholiday.in', 'sadf', 'asf', '346', '', '', '', '', NULL, '', 0, 1, '', '2017-06-30 11:51:09'),
(21, 'sunil', 'shahnawaz@traveliciousholiday.in', '5465', 'fghft', 'fghdf', '', '', '', '', 5, '', 0, 0, '', '2017-06-30 11:51:09'),
(22, 'sanjay', 'shahnawaz@traveliciousholiday.in', '346', 'fdgh', 'we5t', '', '', '', '', 4, '', 0, 0, '', '2017-06-30 11:51:09'),
(23, 'Anil kapoor', 'shahnawaz@traveliciousholiday.in', 'sdf ', 'adsf', '2w5', '', '', '', '', 2, '07/06/2017', 0, 0, '', '2017-06-30 11:51:09'),
(24, 'amit', 'shahnawaz@traveliciousholiday.in', 'sadf', '346', '436', '', '', '', '', 2, '', 0, 0, '', '2017-06-30 11:51:09'),
(25, 'amit', 'shahnawaz@traveliciousholiday.in', 'mayur vihar', 'india', '346456', 'goa', 'http://www.google.com', 'Facebook...', '', 5, '', 0, 1, '', '2017-06-30 11:51:09'),
(26, 'dfgfsd', 'shahnawaz@traveliciousholiday.in', 'adsf', 'sdaf', 'sdg', 'sgd', 'http://www.google.com', 'Adword...', '', 3, '', 0, 0, '', '2017-06-30 11:51:09'),
(27, 'ram', 'shahnawaz@traveliciousholiday.in', 'patel nagar', 'sdfg', 'zdf', 'asdf', 'http://www.google.com', 'Adword...', '', 4, '', 0, 1, '', '2017-06-30 11:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `time` varchar(55) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `time`, `status`) VALUES
(1, '7:00PM', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `user_type` varchar(500) NOT NULL,
  `d_password` varchar(500) NOT NULL COMMENT 'Defaut Password for troublsehoot. No need to ask password to the user.',
  `address` varchar(500) NOT NULL,
  `active` int(255) NOT NULL DEFAULT '0' COMMENT 'User status for active. 0 for no active and 1 means active. Active user can only login through dashboard.',
  `locked_status` int(255) NOT NULL DEFAULT '0' COMMENT 'for security purpose. Account wiib be locked after some interval of trails.',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `contact`, `password`, `user_type`, `d_password`, `address`, `active`, `locked_status`, `created_date`, `modified_date`, `last_login`) VALUES
(1, 'Gaurav', 'admin@admin.com', '1424', 'c3284d0f94606de1fd2af172aba15bf3', 'adm', '21232f297a57a5a743894a0e4a801fc3', 'Noida', 0, 0, '2017-06-27 10:46:03', '2017-06-29 13:28:40', '0000-00-00 00:00:00'),
(2, 'Executive', 'exec@exec.com', '123', 'c3284d0f94606de1fd2af172aba15bf3', 'exe', '21232f297a57a5a743894a0e4a801fc3', 'Luxmi Nagar', 0, 0, '2017-06-27 10:46:42', '2017-06-29 13:45:38', '0000-00-00 00:00:00'),
(3, 'Alamgir', 'manager@manager.com', '7531836300', 'c3284d0f94606de1fd2af172aba15bf3', 'mgr', '21232f297a57a5a743894a0e4a801fc3', 'New Ashok Nagar', 0, 0, '2017-06-27 10:46:56', '2017-06-29 13:20:07', '0000-00-00 00:00:00'),
(4, 'Alam', 'alam@exec.com', '786', 'c3284d0f94606de1fd2af172aba15bf3', 'exe', 'c3284d0f94606de1fd2af172aba15b', 'New delhi', 0, 0, '2017-06-27 10:47:00', '2017-07-01 10:43:26', '0000-00-00 00:00:00'),
(5, 'Aaditya Kumar', 'adi@gmail.com', '9870166251', '202cb962ac59075b964b07152d234b70', 'mgr', '', 'New delhi', 0, 0, '2017-07-01 11:50:13', '2017-07-01 11:50:13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `to_do_list`
--

CREATE TABLE `to_do_list` (
  `id` int(50) NOT NULL,
  `emp_id` tinyint(50) NOT NULL,
  `title` varchar(500) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `to_do_list`
--

INSERT INTO `to_do_list` (`id`, `emp_id`, `title`, `created_date`, `status`) VALUES
(1, 1, 'test ', '2017-06-30 11:42:16', 1),
(2, 2, 'test2', '2017-06-30 11:42:16', 1),
(4, 3, 'test3', '2017-06-30 11:42:50', 1),
(5, 4, 'test4', '2017-06-30 11:42:50', 1),
(6, 7, 'pta nahi', '2017-06-30 12:54:38', 1),
(7, 8, 'kl krna h ', '2017-06-30 12:54:38', 1),
(8, 8, 'aaj ye kaam hona chahiye', '2017-06-30 12:55:28', 1),
(9, 10, 'ye kaam kyo nahi huaa', '2017-06-30 12:55:28', 1),
(10, 12, 'us vaale customer kaa kaam huaa yaa nahi ', '2017-06-30 12:56:40', 1),
(11, 13, 'us vaale customer kaaa kaam kb tk complate hoga', '2017-06-30 12:56:40', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assign_to` (`assign_to`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `to_do_list`
--
ALTER TABLE `to_do_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `to_do_list`
--
ALTER TABLE `to_do_list`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
