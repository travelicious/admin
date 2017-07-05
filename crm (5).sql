-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2017 at 07:21 AM
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
-- Table structure for table `chat_ids`
--

CREATE TABLE `chat_ids` (
  `id` int(255) NOT NULL,
  `emp_id_one` int(255) NOT NULL,
  `emp_id_two` int(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `id` int(255) NOT NULL,
  `chat_id` int(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  `emp_recieved_id` int(255) NOT NULL,
  `chat_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(5, 1, 'Next follow-up date:20/07/2017', 4, '2017-06-29 11:44:08'),
(6, 1, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum ', 4, '2017-06-29 11:46:35'),
(7, 1, 'Next follow-up date:07/06/2017', 4, '2017-06-29 11:46:42'),
(8, 1, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum ', 4, '2017-06-29 11:56:34'),
(9, 1, 'Next follow-up date:07/09/2017', 4, '2017-06-29 11:56:52'),
(10, 1, 'he standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum ', 4, '2017-06-29 13:09:16'),
(11, 1, 'Next follow-up date:16/06/2017', 4, '2017-06-29 13:09:42'),
(12, 1, 'Next follow-up date:15/09/2017', 4, '2017-06-29 13:09:47'),
(13, 3, 'dfsdds', 1, '2017-06-30 07:53:36'),
(14, 3, 'dfsfds', 1, '2017-06-30 07:53:38'),
(15, 3, 'rfgdf', 1, '2017-06-30 07:53:46'),
(16, 3, 'fsdg', 1, '2017-06-30 07:53:49'),
(17, 3, 'Next follow-up date:08/06/2017', 1, '2017-06-30 07:53:53'),
(18, 3, 'Next follow-up date:02/06/2017', 1, '2017-06-30 07:53:55'),
(19, 3, 'Next follow-up date:09/06/2017', 1, '2017-06-30 07:53:57'),
(20, 3, 'Next follow-up date:09/06/2017', 1, '2017-06-30 07:53:59'),
(21, 3, 'Next follow-up date:23/06/2017', 1, '2017-06-30 07:54:01'),
(22, 3, 'Next follow-up date:08/06/2017', 1, '2017-06-30 07:54:09'),
(23, 3, 'Next follow-up date:30/06/2017', 1, '2017-06-30 07:54:16'),
(24, 3, 'fdsgfdsg', 1, '2017-06-30 07:54:29'),
(25, 3, 'fsdgdfsgfsd', 1, '2017-06-30 07:54:34'),
(26, 1, 'hello ', 4, '2017-06-30 08:08:32'),
(27, 5, 'hello', 4, '2017-06-30 10:08:03'),
(28, 5, 'Next follow-up date:22/06/2017', 4, '2017-06-30 10:08:08'),
(29, 5, 'Next follow-up date:29/06/2017', 4, '2017-06-30 10:08:11'),
(30, 13, 'Next follow-up date:09/06/2017', 4, '2017-06-30 10:12:27'),
(31, 13, 'Next follow-up date:07/07/2017', 4, '2017-06-30 10:12:31'),
(32, 13, 'I would like to inform that kindly change the Hotel of Delhi The Moments 3 Star Hotel to ROCKWELL PLAZA on the same cost. I would like to inform that kindly change the Hotel of Delhi The Moments 3 Star Hotel to ROCKWELL PLAZA on the same cost.I would like to inform that kindly change the Hotel of Delhi The Moments 3 Star Hotel to ROCKWELL PLAZA on the same cost', 4, '2017-06-30 10:15:55'),
(33, 13, 'I would like to inform that kindly change the Hotel of Delhi The Moments 3 Star Hotel to ROCKWELL PLAZA on the same cost', 4, '2017-06-30 10:16:14'),
(34, 13, 'I would like to inform that kindly change the Hotel of Delhi The Moments 3 Star Hotel to ROCKWELL PLAZA on the same cost', 4, '2017-06-30 10:16:19'),
(35, 13, 'I would like to inform that kindly change the Hotel of Delhi The Moments 3 Star Hotel to ROCKWELL PLAZA on the same cost', 4, '2017-06-30 10:16:22'),
(36, 13, 'I would like to inform that kindly change the Hotel of Delhi The Moments 3 Star Hotel to ROCKWELL PLAZA on the same cost', 4, '2017-06-30 10:16:25'),
(37, 27, 'hdfhdfhdf', 4, '2017-06-30 11:02:46'),
(38, 27, 'Next follow-up date:21/07/2017', 4, '2017-06-30 11:02:52'),
(39, 27, 'Next follow-up date:29/06/2017', 4, '2017-06-30 12:13:27'),
(40, 27, 'Next follow-up date:01/06/2017', 4, '2017-06-30 12:14:57'),
(41, 27, 'Next follow-up date:09/06/2017', 4, '2017-06-30 12:14:59'),
(42, 27, 'Next follow-up date:16/06/2017', 4, '2017-06-30 12:15:01'),
(43, 27, 'Next follow-up date:16/06/2017', 4, '2017-06-30 12:15:04'),
(44, 27, 'Next follow-up date:16/06/2017', 4, '2017-06-30 12:15:06'),
(45, 27, 'I would like to inform that kindly change the Hotel of Delhi The Moments 3 Star Hotel to ROCKWELL PLAZA on the same cost', 4, '2017-06-30 12:15:35'),
(46, 27, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum', 4, '2017-06-30 12:15:42'),
(47, 22, 'hhhhhhhhhhhh hhhhhhhhhhhhhhh hhhhhhhhhhhhhhhh hhhhhhhhhhhh', 4, '2017-07-01 08:20:13'),
(48, 22, 'Next follow-up date:20/07/2017', 4, '2017-07-01 08:20:19'),
(49, 22, 'gjkfgjkfg', 4, '2017-07-03 05:41:23'),
(50, 22, 'Next follow-up date:08/09/2017', 4, '2017-07-03 05:41:29'),
(51, 27, 'My task is finished', 4, '2017-07-03 06:15:35'),
(52, 27, 'My task is finished now', 4, '2017-07-03 06:16:40'),
(53, 27, 'My task is finished now ok', 4, '2017-07-03 06:17:03'),
(54, 27, 'My task is finished now ok ok ok ', 4, '2017-07-03 06:24:14'),
(55, 27, 'My task is finished now ok ok ok okl', 4, '2017-07-03 06:25:13'),
(56, 27, 'kghkhkghkghkghkghk', 4, '2017-07-03 06:59:51'),
(57, 27, 'fgjdfjdfjdfjd', 4, '2017-07-03 07:01:24'),
(58, 6, 'jdjjfgj', 1, '2017-07-03 09:16:04'),
(59, 6, 'jdjjfgj ', 1, '2017-07-03 09:16:40'),
(60, 13, 'Next follow-up date:18/07/2017', 4, '2017-07-03 10:38:08'),
(61, 13, 'Next follow-up date:19/07/2017', 4, '2017-07-03 10:39:20'),
(62, 27, 'My task completed', 4, '2017-07-03 23:33:01'),
(63, 13, 'My task is finished', 4, '2017-07-03 23:34:19'),
(64, 27, 'ghkghkh', 4, '2017-07-03 23:47:02'),
(65, 13, 'kghkhgkg', 4, '2017-07-03 23:48:08'),
(66, 27, 'Next follow-up date:19/07/2017', 4, '2017-07-04 01:18:31'),
(67, 27, 'Next follow-up date:2017-07-30', 4, '2017-07-04 01:23:39'),
(68, 27, 'sfhsfh', 4, '2017-07-04 01:33:56'),
(69, 5, 'fhfg', 1, '2017-07-04 06:25:26'),
(70, 15, 'sdfhdhfj       fgjd gf', 5, '2017-07-04 06:28:17'),
(71, 27, 'kldjzsg', 3, '2017-07-04 07:02:56'),
(72, 27, 'fine', 3, '2017-07-04 07:03:09'),
(73, 27, 'Sorry , I postpond your journey', 3, '2017-07-04 07:04:42'),
(74, 27, 'Sorry,  Iwant cancel your journey', 3, '2017-07-04 07:07:07'),
(75, 31, 'Next follow-up date:2017-07-15', 2, '2017-07-04 07:48:11'),
(76, 31, 'Next follow-up date:2017-07-22', 2, '2017-07-04 07:49:15'),
(77, 32, 'Next follow-up date:2017-07-29', 2, '2017-07-04 07:54:51'),
(78, 31, 'Next follow-up date:2017-07-12', 2, '2017-07-04 07:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` text NOT NULL,
  `phone` text NOT NULL,
  `destination` varchar(500) NOT NULL,
  `arrival_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `duration` int(11) NOT NULL,
  `no_of_adults` int(11) NOT NULL,
  `no_of_kids` int(11) NOT NULL,
  `hotel_category` varchar(20) NOT NULL,
  `domain` varchar(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `customer_requirement` varchar(500) NOT NULL,
  `assign_to` int(11) DEFAULT NULL,
  `next_followup` date NOT NULL,
  `status` int(11) NOT NULL,
  `postpond_status` int(11) NOT NULL DEFAULT '0',
  `cancel_status` int(11) NOT NULL DEFAULT '0',
  `complete_status` int(11) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '1',
  `enquiry_type` varchar(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `country`, `phone`, `destination`, `arrival_date`, `duration`, `no_of_adults`, `no_of_kids`, `hotel_category`, `domain`, `source`, `customer_requirement`, `assign_to`, `next_followup`, `status`, `postpond_status`, `cancel_status`, `complete_status`, `flag`, `enquiry_type`, `created_date`) VALUES
(5, 'Shahnawaz12345', 'shahnawaz@traveliciousholiday.in', 'india', '9087', '', '2017-07-04 01:38:19', 0, 0, 0, '', '', '', '', 4, '0000-00-00', 0, 0, 0, 0, 1, '', '2017-06-16 10:06:20'),
(6, 'suvindera', 'shahnawaz@traveliciousholiday.in', 'asf', '346', '', '2017-07-04 01:38:19', 0, 0, 0, '', '', '', '', NULL, '0000-00-00', 1, 0, 0, 0, 1, '', '2017-06-26 10:06:20'),
(12, 'cxg', 'shahnawaz@traveliciousholiday.in', 'fdgh', '657', '', '2017-07-04 01:38:19', 0, 0, 0, '', '', '', '', 4, '0000-00-00', 0, 0, 0, 0, 0, '', '2017-06-27 10:06:20'),
(13, 'xcg', 'shahnawaz@traveliciousholiday.in', 'vcb', '46', 'america', '2017-07-04 01:38:19', 0, 0, 0, '', 'http://www.google.com', 'Please Select Source', '', 4, '2017-07-11', 0, 0, 0, 0, 1, '', '2017-06-27 10:06:20'),
(14, 'akshya 1213', 'shahnawaz@traveliciousholiday.in', 'df', '3425', '', '2017-07-04 01:38:19', 0, 0, 0, '', '', '', '', NULL, '0000-00-00', 0, 0, 0, 0, 1, '', '2017-06-28 10:06:20'),
(15, 'dcfhhhhhhhhhhhhhhhh', 'shahnawaz@traveliciousholiday.in', 'fsdg', 'fg', '', '2017-07-04 01:38:19', 0, 0, 0, '', '', '', '', 5, '0000-00-00', 0, 0, 0, 0, 0, '', '2017-06-28 10:06:20'),
(16, 'fcgh', 'shahnawaz@traveliciousholiday.in', 'asf', 'asf', '', '2017-07-04 01:38:19', 0, 0, 0, '', '', '', '', NULL, '0000-00-00', 0, 0, 0, 0, 1, '', '2017-06-30 10:06:20'),
(17, 'shjahrukh', 'shahnawaz@traveliciousholiday.in', 'sdg', 'sdg', '', '2017-07-04 01:38:19', 0, 0, 0, '', '', '', '', NULL, '0000-00-00', 0, 0, 0, 0, 1, '', '2017-06-30 10:06:20'),
(18, 'akshay kumar', 'shahnawaz@traveliciousholiday.in', 'grh', '457', '', '2017-07-04 01:38:19', 0, 0, 0, '', '', '', '', NULL, '0000-00-00', 0, 0, 0, 0, 1, '', '2017-06-30 10:06:20'),
(19, 'akshay kumar12343', 'shahnawaz@traveliciousholiday.in', 'grh', '457', '', '2017-07-04 01:38:19', 0, 0, 0, '', '', '', '', NULL, '0000-00-00', 0, 0, 0, 0, 1, '', '2017-06-30 10:06:20'),
(20, 'salman khan', 'shahnawaz@traveliciousholiday.in', 'asf', '346', '', '2017-07-04 01:38:19', 0, 0, 0, '', '', '', '', NULL, '0000-00-00', 0, 0, 0, 0, 1, '', '2017-06-30 10:06:20'),
(21, 'sunil', 'shahnawaz@traveliciousholiday.in', 'fghft', 'fghdf', '', '2017-07-04 01:38:19', 0, 0, 0, '', '', '', '', 5, '0000-00-00', 0, 0, 0, 0, 0, '', '2017-06-30 10:06:20'),
(22, 'sanjay', 'shahnawaz@traveliciousholiday.in', 'fdgh', 'we5t', '', '2017-07-04 01:38:19', 0, 0, 0, '', '', '', '', 4, '0000-00-00', 0, 0, 0, 0, 0, '', '2017-06-30 10:06:20'),
(23, 'Anil kapoor', 'shahnawaz@traveliciousholiday.in', 'adsf', '2w5', '', '2017-07-04 01:38:19', 0, 0, 0, '', '', '', '', 2, '0000-00-00', 0, 0, 0, 0, 0, '', '2017-06-30 10:06:20'),
(24, 'amit', 'shahnawaz@traveliciousholiday.in', '346', '436', '', '2017-07-04 01:38:19', 0, 0, 0, '', '', '', '', 2, '0000-00-00', 0, 0, 0, 0, 0, '', '2017-06-30 10:06:20'),
(25, 'amit', 'shahnawaz@traveliciousholiday.in', 'india', '346456', 'goa', '2017-07-04 01:38:19', 0, 0, 0, '', 'http://www.google.com', 'Facebook...', '', 5, '0000-00-00', 0, 0, 0, 0, 1, '', '2017-06-30 10:06:20'),
(26, 'dfgfsd', 'shahnawaz@traveliciousholiday.in', 'sdaf', 'sdg', 'sgd', '2017-07-04 01:38:19', 0, 0, 0, '', 'http://www.google.com', 'Adword...', '', 3, '0000-00-00', 0, 0, 0, 0, 0, '', '2017-06-30 10:06:20'),
(27, 'ram', 'shahnawaz@traveliciousholiday.in', 'sdfg', 'zdf', 'asdf', '2017-07-04 01:38:19', 0, 0, 0, '', 'http://www.google.com', 'Adword...', '', 4, '2017-07-30', 0, 1, 1, 0, 1, '', '2017-06-30 10:06:20'),
(28, 'alam,gir', 'dfhs@dthf', 'albania', 'zxcfbh', 'cxb', '2017-07-03 18:30:00', 2, 2, 21, '3Star', 'agratourbookings.com', 'adword', '  fgsrjsey', NULL, '0000-00-00', 0, 0, 0, 0, 1, '', '2017-07-04 06:07:22'),
(29, 'dfsh', 'shh@cvb', 'afghanistan', '4535', 'df', '2017-07-18 18:30:00', 3, 3, 3, '3Star', 'tajmahalindiatrip.com', 'facebook', '  ggdgf', NULL, '0000-00-00', 0, 0, 0, 0, 1, '', '2017-07-04 07:24:25'),
(30, 'dsg', 'g@gmail.com', 'australia', '4444', ' vbn', '2017-07-14 18:30:00', 3, 3, 3, '5Star', 'traveliciousholiday.com', 'adword', '  3333dfhh', NULL, '0000-00-00', 0, 0, 0, 0, 1, '', '2017-07-04 07:27:15'),
(31, 'dsg', 'g@gmail.com', 'australia', '4444', ' vbn', '2017-07-14 18:30:00', 3, 3, 3, '5Star', 'traveliciousholiday.com', 'adword', '  3333dfhh', 2, '2017-07-12', 0, 0, 0, 0, 1, '', '2017-07-04 07:27:24'),
(32, 'MAH', 'm@gmail.com', 'india', '786', 'Eng', '2017-07-19 18:30:00', 5, 5, 5, '5Star', 'agratourbookings.com', 'adword', '  hfdshfsdkfkasdfna jklhdah,mnkjhfs,nh;ofhasd  .', 2, '2017-07-29', 0, 0, 0, 0, 1, '', '2017-07-04 07:51:26'),
(33, 'dg', 'gf@n', 'afghanistan', 'gf', 'g', '2017-07-25 18:30:00', 3, 3, 3, '3Star', 'agratourbookings.com', 'adword', '  33', 2, '0000-00-00', 0, 0, 0, 0, 1, '', '2017-07-04 09:20:53');

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
(2, 'Executive', 'exec@exec.com', '', 'c3284d0f94606de1fd2af172aba15bf3', 'exe', '21232f297a57a5a743894a0e4a801fc3', '', 0, 0, '2017-06-27 10:46:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'manager', 'manager@manager.com', '', 'c3284d0f94606de1fd2af172aba15bf3', 'mgr', '21232f297a57a5a743894a0e4a801fc3', '', 0, 0, '2017-06-27 10:46:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Aditya', 'aditya@exec.com', '213455612034', 'c3284d0f94606de1fd2af172aba15bf3', 'exe', 'c3284d0f94606de1fd2af172aba15b', 'New Ashok Nagar', 0, 0, '2017-06-27 10:47:00', '2017-07-04 06:25:59', '0000-00-00 00:00:00'),
(5, 'Admin', 'admin@admin.com', '7531836300', 'c3284d0f94606de1fd2af172aba15bf3', 'adm', '', 'Noida', 0, 0, '2017-07-04 06:26:53', '2017-07-04 06:27:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `to_do_list`
--

CREATE TABLE `to_do_list` (
  `id` int(50) NOT NULL,
  `emp_id` tinyint(50) NOT NULL,
  `title` varchar(500) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1',
  `flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `to_do_list`
--

INSERT INTO `to_do_list` (`id`, `emp_id`, `title`, `created_date`, `status`, `flag`) VALUES
(4, 3, 'test3', '2017-06-30 11:42:50', 1, 1),
(5, 4, 'test4', '2017-06-30 11:42:50', 1, 1),
(6, 7, 'pta nahi', '2017-06-30 12:54:38', 1, 1),
(7, 8, 'kl krna h ', '2017-06-30 12:54:38', 1, 1),
(8, 8, 'aaj ye kaam hona chahiye', '2017-06-30 12:55:28', 1, 1),
(9, 10, 'ye kaam kyo nahi huaa', '2017-06-30 12:55:28', 1, 1),
(10, 12, 'us vaale customer kaa kaam huaa yaa nahi ', '2017-06-30 12:56:40', 1, 1),
(11, 13, 'us vaale customer kaaa kaam kb tk complate hoga', '2017-06-30 12:56:40', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_ids`
--
ALTER TABLE `chat_ids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `chat_ids`
--
ALTER TABLE `chat_ids`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
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
