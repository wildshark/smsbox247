-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 04:31 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smsbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `creditID` int(11) NOT NULL,
  `userID` varchar(50) DEFAULT NULL,
  `tranDate` datetime DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `paid` double(11,2) DEFAULT '0.00',
  `spend` double(11,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`creditID`, `userID`, `tranDate`, `details`, `ref`, `paid`, `spend`) VALUES
(1, '4a6a98a46823c6d66fd200ab49ebe8f3', '2019-03-26 23:43:52', 'FREE SMS', 'FREE', 5.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `addressID` int(11) NOT NULL,
  `userID` varchar(100) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile1` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_account`
-- (See below for the actual view)
--
CREATE TABLE `get_account` (
`creditID` int(11)
,`userID` varchar(50)
,`tranDate` datetime
,`paid` double(11,2)
,`spend` double(11,2)
,`balance` double(19,2)
,`ref` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_address`
-- (See below for the actual view)
--
CREATE TABLE `get_address` (
`addressID` int(11)
,`name` varchar(50)
,`email` varchar(50)
,`mobile1` varchar(20)
,`userID` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_balance`
-- (See below for the actual view)
--
CREATE TABLE `get_balance` (
`userID` varchar(50)
,`bal` double(19,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_delete`
-- (See below for the actual view)
--
CREATE TABLE `get_delete` (
`smsID` int(11)
,`userID` varchar(50)
,`tran_due` datetime
,`s_date` date
,`sms_to` varchar(20)
,`sms_msg` varchar(200)
,`statusID` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_message`
-- (See below for the actual view)
--
CREATE TABLE `get_message` (
`smsID` int(11)
,`userID` varchar(50)
,`tran_due` datetime
,`s_date` date
,`sms_to` varchar(20)
,`sms_msg` varchar(200)
,`statusID` int(3)
,`sms_sender` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_notifications`
-- (See below for the actual view)
--
CREATE TABLE `get_notifications` (
`type` varchar(50)
,`icon` varchar(50)
,`typeID` int(11)
,`userID` varchar(50)
,`notificationsID` int(11)
,`statusID` int(11)
,`notifications` varchar(255)
,`note_date` datetime
,`ttime` time
,`ddate` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_sms_hash`
-- (See below for the actual view)
--
CREATE TABLE `get_sms_hash` (
`hashID` int(11)
,`userID` varchar(200)
,`new_hash` decimal(11,0)
,`user_hash` decimal(11,0)
,`use_date` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_sms_hash_bal`
-- (See below for the actual view)
--
CREATE TABLE `get_sms_hash_bal` (
`bal` decimal(34,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_sms_task`
-- (See below for the actual view)
--
CREATE TABLE `get_sms_task` (
`taskID` int(11)
,`time` time
,`task` varchar(200)
,`statusID` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_spend`
-- (See below for the actual view)
--
CREATE TABLE `get_spend` (
`total_spend` bigint(21)
,`total_use` decimal(32,0)
,`date` varchar(10)
,`userID` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_total_deposit`
-- (See below for the actual view)
--
CREATE TABLE `get_total_deposit` (
`tranDate` varchar(10)
,`total` double(19,2)
,`userID` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_user_account`
-- (See below for the actual view)
--
CREATE TABLE `get_user_account` (
`userID` int(11)
,`date_created` datetime
,`full_name` varchar(50)
,`username` varchar(50)
,`passwd` varchar(50)
,`mobile` varchar(20)
,`email` varchar(100)
,`api_key` varchar(200)
,`photo` varchar(255)
,`statusID` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `icon_label_type`
--

CREATE TABLE `icon_label_type` (
  `typeID` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icon_label_type`
--

INSERT INTO `icon_label_type` (`typeID`, `type`, `icon`) VALUES
(1, 'paid', 'fa-shopping-cart '),
(2, 'mail', 'fa-envelope '),
(3, 'delete', 'fa-trash'),
(4, 'sent', 'fa-location-arrow '),
(5, 'add', ' fa-check'),
(6, 'profile', ' fa-user');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `smsID` int(11) NOT NULL,
  `userID` varchar(50) DEFAULT NULL,
  `tran_due` datetime DEFAULT NULL,
  `s_date` date DEFAULT NULL,
  `sms_to` varchar(20) DEFAULT NULL,
  `sms_msg` varchar(200) DEFAULT NULL,
  `sms_sender` varchar(20) DEFAULT NULL,
  `statusID` int(3) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`smsID`, `userID`, `tran_due`, `s_date`, `sms_to`, `sms_msg`, `sms_sender`, `statusID`) VALUES
(1, '4a6a98a46823c6d66fd200ab49ebe8f3', '2019-03-26 23:52:11', '2019-03-26', '2312,123123,123,123,', 'dfsdfsd', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notificationsID` int(11) NOT NULL,
  `userID` varchar(50) DEFAULT NULL,
  `note_date` datetime DEFAULT NULL,
  `notifications` varchar(255) DEFAULT NULL,
  `typeID` int(11) DEFAULT NULL,
  `statusID` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notificationsID`, `userID`, `note_date`, `notifications`, `typeID`, `statusID`) VALUES
(1, '4a6a98a46823c6d66fd200ab49ebe8f3', '2019-03-26 23:45:01', 'update profile', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sms_hash`
--

CREATE TABLE `sms_hash` (
  `hashID` int(11) NOT NULL,
  `userID` varchar(200) DEFAULT NULL,
  `use_date` datetime DEFAULT NULL,
  `new_hash` decimal(11,0) DEFAULT '0',
  `user_hash` decimal(11,0) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_hash`
--

INSERT INTO `sms_hash` (`hashID`, `userID`, `use_date`, `new_hash`, `user_hash`) VALUES
(1, '1', '2018-09-29 14:01:22', '10000', '0'),
(2, '1', '2018-10-01 02:06:32', '11', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sms_task`
--

CREATE TABLE `sms_task` (
  `taskID` int(11) NOT NULL,
  `time` time DEFAULT NULL,
  `task` varchar(200) DEFAULT NULL,
  `statusID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `userID` int(11) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `passwd` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `api_key` varchar(200) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `statusID` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`userID`, `date_created`, `full_name`, `username`, `passwd`, `mobile`, `email`, `api_key`, `photo`, `statusID`) VALUES
(1, '2019-03-26 00:00:00', 'Andrew Quyae', 'iquipe', 'passwd', '233548263738', 'iquipe@outlook.com', '4a6a98a46823c6d66fd200ab49ebe8f3', NULL, 1);

-- --------------------------------------------------------

--
-- Structure for view `get_account`
--
DROP TABLE IF EXISTS `get_account`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_account`  AS  select `account`.`creditID` AS `creditID`,`account`.`userID` AS `userID`,`account`.`tranDate` AS `tranDate`,`account`.`paid` AS `paid`,`account`.`spend` AS `spend`,(`account`.`paid` - `account`.`spend`) AS `balance`,`account`.`ref` AS `ref` from `account` order by `account`.`creditID` desc ;

-- --------------------------------------------------------

--
-- Structure for view `get_address`
--
DROP TABLE IF EXISTS `get_address`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_address`  AS  select `address`.`addressID` AS `addressID`,`address`.`name` AS `name`,`address`.`email` AS `email`,`address`.`mobile1` AS `mobile1`,`address`.`userID` AS `userID` from `address` order by `address`.`addressID` desc ;

-- --------------------------------------------------------

--
-- Structure for view `get_balance`
--
DROP TABLE IF EXISTS `get_balance`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_balance`  AS  select `get_account`.`userID` AS `userID`,sum(`get_account`.`balance`) AS `bal` from `get_account` group by `get_account`.`userID` ;

-- --------------------------------------------------------

--
-- Structure for view `get_delete`
--
DROP TABLE IF EXISTS `get_delete`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_delete`  AS  select `message`.`smsID` AS `smsID`,`message`.`userID` AS `userID`,`message`.`tran_due` AS `tran_due`,`message`.`s_date` AS `s_date`,`message`.`sms_to` AS `sms_to`,`message`.`sms_msg` AS `sms_msg`,`message`.`statusID` AS `statusID` from `message` where (`message`.`statusID` = 2) ;

-- --------------------------------------------------------

--
-- Structure for view `get_message`
--
DROP TABLE IF EXISTS `get_message`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_message`  AS  select `message`.`smsID` AS `smsID`,`message`.`userID` AS `userID`,`message`.`tran_due` AS `tran_due`,`message`.`s_date` AS `s_date`,`message`.`sms_to` AS `sms_to`,`message`.`sms_msg` AS `sms_msg`,`message`.`statusID` AS `statusID`,`message`.`sms_sender` AS `sms_sender` from `message` where (`message`.`statusID` = 1) order by `message`.`smsID` desc ;

-- --------------------------------------------------------

--
-- Structure for view `get_notifications`
--
DROP TABLE IF EXISTS `get_notifications`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_notifications`  AS  select `icon_label_type`.`type` AS `type`,`icon_label_type`.`icon` AS `icon`,`notifications`.`typeID` AS `typeID`,`notifications`.`userID` AS `userID`,`notifications`.`notificationsID` AS `notificationsID`,`notifications`.`statusID` AS `statusID`,`notifications`.`notifications` AS `notifications`,`notifications`.`note_date` AS `note_date`,cast(`notifications`.`note_date` as time) AS `ttime`,cast(`notifications`.`note_date` as date) AS `ddate` from (`icon_label_type` join `notifications` on((`icon_label_type`.`typeID` = `notifications`.`typeID`))) order by `notifications`.`notificationsID` desc ;

-- --------------------------------------------------------

--
-- Structure for view `get_sms_hash`
--
DROP TABLE IF EXISTS `get_sms_hash`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_sms_hash`  AS  select `sms_hash`.`hashID` AS `hashID`,`sms_hash`.`userID` AS `userID`,`sms_hash`.`new_hash` AS `new_hash`,`sms_hash`.`user_hash` AS `user_hash`,`sms_hash`.`use_date` AS `use_date` from `sms_hash` ;

-- --------------------------------------------------------

--
-- Structure for view `get_sms_hash_bal`
--
DROP TABLE IF EXISTS `get_sms_hash_bal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_sms_hash_bal`  AS  select sum((`get_sms_hash`.`new_hash` - `get_sms_hash`.`user_hash`)) AS `bal` from `get_sms_hash` ;

-- --------------------------------------------------------

--
-- Structure for view `get_sms_task`
--
DROP TABLE IF EXISTS `get_sms_task`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_sms_task`  AS  select `sms_task`.`taskID` AS `taskID`,`sms_task`.`time` AS `time`,`sms_task`.`task` AS `task`,`sms_task`.`statusID` AS `statusID` from `sms_task` ;

-- --------------------------------------------------------

--
-- Structure for view `get_spend`
--
DROP TABLE IF EXISTS `get_spend`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_spend`  AS  select count(`account`.`spend`) AS `total_spend`,sum(`account`.`creditID`) AS `total_use`,date_format(`account`.`tranDate`,'%Y-%m-%d') AS `date`,`account`.`userID` AS `userID` from `account` group by `account`.`userID` ;

-- --------------------------------------------------------

--
-- Structure for view `get_total_deposit`
--
DROP TABLE IF EXISTS `get_total_deposit`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_total_deposit`  AS  select date_format(`account`.`tranDate`,'%Y-%m-%d') AS `tranDate`,sum(`account`.`paid`) AS `total`,`account`.`userID` AS `userID` from `account` group by `account`.`tranDate`,`account`.`userID` ;

-- --------------------------------------------------------

--
-- Structure for view `get_user_account`
--
DROP TABLE IF EXISTS `get_user_account`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_user_account`  AS  select `user_account`.`userID` AS `userID`,`user_account`.`date_created` AS `date_created`,`user_account`.`full_name` AS `full_name`,`user_account`.`username` AS `username`,`user_account`.`passwd` AS `passwd`,`user_account`.`mobile` AS `mobile`,`user_account`.`email` AS `email`,`user_account`.`api_key` AS `api_key`,`user_account`.`photo` AS `photo`,`user_account`.`statusID` AS `statusID` from `user_account` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`creditID`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addressID`);

--
-- Indexes for table `icon_label_type`
--
ALTER TABLE `icon_label_type`
  ADD PRIMARY KEY (`typeID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`smsID`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notificationsID`);

--
-- Indexes for table `sms_hash`
--
ALTER TABLE `sms_hash`
  ADD PRIMARY KEY (`hashID`);

--
-- Indexes for table `sms_task`
--
ALTER TABLE `sms_task`
  ADD PRIMARY KEY (`taskID`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `creditID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addressID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `icon_label_type`
--
ALTER TABLE `icon_label_type`
  MODIFY `typeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `smsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notificationsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sms_hash`
--
ALTER TABLE `sms_hash`
  MODIFY `hashID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sms_task`
--
ALTER TABLE `sms_task`
  MODIFY `taskID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
