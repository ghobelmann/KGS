-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 07, 2021 at 01:49 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sub2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_logins`
--

DROP TABLE IF EXISTS `data_logins`;
CREATE TABLE IF NOT EXISTS `data_logins` (
  `uid` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `last_login` varchar(80) DEFAULT NULL,
  `total_logins` int(8) NOT NULL DEFAULT '0',
  `permissions` text,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3474 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_logins`
--

INSERT INTO `data_logins` (`uid`, `name`, `username`, `password`, `email`, `last_login`, `total_logins`, `permissions`) VALUES
(3459, 'Greg', 'grhobe', 'ee843e746224ec53cb0264715ee7bec4', '', '1607634604', 514, 'superadmin'),
(3462, 'Steve', 'smcnary', '3824795e4e1fbf0f72f1cf99ee90d861', 'smcnary@usd237.com', '1307138466', 13, 'admin'),
(3463, 'Barbara Wilson', 'bawilson', '66f4b449b3a98abf87f2521e35513542', 'admin', '1612991708', 505, 'admin'),
(3464, 'Linda Robinson', 'lrobinson', 'ccdecd52b7387fc8f7a91cbc15453b3d', 'lrobinson@usd237.com', '1308776187', 6, 'admin'),
(3465, 'Gayle Ballhorst', 'gayle', '6c29e9cc4042d972b15ff0304e636886', 'gayle@usd237.com', '1431448253', 1095, 'admin'),
(3466, 'Susan Panter', 'spanter', 'c378985d629e99a4e86213db0cd5e70d', 'spanter@usd237.com', '1612976621', 785, 'admin'),
(3467, 'Greg Koelsch', 'grkoel', 'ad2950ddc2ea802276c770c171e1d6a6', 'gkoelsch@usd237.com', '1461254925', 27, 'admin'),
(3470, 'Michelle Stamm', 'mstamm', '2345f10bb948c5665ef91f6773b3e455', 'mstamm@usd237.com', '1358345519', 6, 'admin'),
(3471, 'Lora Harris', '', 'd41d8cd98f00b204e9800998ecf8427e', '', NULL, 0, 'admin'),
(3472, 'Theresa Rentschler', 'trentschler', 'd85dfd9005feb7b0a83e25e0e1e82b36', 'trentschler@usd237.com', '1554549609', 854, 'admin'),
(3473, 'Tamra Frank', 'tfrank', 'f4d74a4f50745d3ce58786ca1fb90724', 'tfrank@usd237.com', '1613769820', 390, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `dept_id` int(2) NOT NULL AUTO_INCREMENT,
  `department` varchar(30) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `department`) VALUES
(1, 'Grade School'),
(2, 'High School'),
(3, 'Secretarial'),
(4, 'Custodial'),
(5, 'Transportaion'),
(6, 'Food Service');

-- --------------------------------------------------------

--
-- Table structure for table `leavetype`
--

DROP TABLE IF EXISTS `leavetype`;
CREATE TABLE IF NOT EXISTS `leavetype` (
  `lv_id` int(4) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`lv_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leavetype`
--

INSERT INTO `leavetype` (`lv_id`, `type`) VALUES
(1, 'Sick Day'),
(2, 'Personal Day'),
(3, 'Professional Day'),
(4, 'Bereavement');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

DROP TABLE IF EXISTS `pay`;
CREATE TABLE IF NOT EXISTS `pay` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `pay` decimal(11,2) NOT NULL,
  `spam` int(11) NOT NULL DEFAULT '1',
  `job` varchar(30) NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`pay_id`, `pay`, `spam`, `job`) VALUES
(1, '99.01', 1, 'Reg Ed Teacher Full Day'),
(2, '49.50', 1, 'Reg Ed Teacher Half Day'),
(3, '99.00', 1, 'Spec Ed Teacher Full Day	'),
(4, '49.50', 1, 'Spec Ed Teacher Half Day'),
(5, '82.50', 1, 'Para 7.5 Full Day'),
(6, '41.25', 1, 'Para 7.5 Half Day'),
(7, '77.00', 1, 'Para 7.0 Full Day'),
(8, '38.50', 1, 'Para 7.0 Half Day'),
(9, '74.25', 1, 'Para 6.75 Full Day'),
(10, '37.18', 1, 'Para 6.75 Half Day'),
(11, '0.25', 1, 'Teacher Cover'),
(12, '0.00', 1, 'ELL');

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

DROP TABLE IF EXISTS `personnel`;
CREATE TABLE IF NOT EXISTS `personnel` (
  `sub_name` varchar(30) NOT NULL,
  `address` varchar(20) DEFAULT '216 S Jefferson',
  `city` varchar(20) NOT NULL DEFAULT 'Smith Center',
  `state` varchar(10) NOT NULL DEFAULT 'KS',
  `zip` varchar(7) NOT NULL DEFAULT '66967',
  `certified` varchar(2) NOT NULL DEFAULT '0',
  `noncertified` varchar(2) NOT NULL DEFAULT '0',
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `cellphone` varchar(30) DEFAULT NULL,
  `sub_id` int(4) NOT NULL AUTO_INCREMENT,
  `building` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB AUTO_INCREMENT=306 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`sub_name`, `address`, `city`, `state`, `zip`, `certified`, `noncertified`, `email`, `phone`, `cellphone`, `sub_id`, `building`) VALUES
('No Sub Needed', '', '', '', '', '', '', '', '', '', 1, 0),
('Denyse Kattenberg', '515 N. Monroe', '', 'KS', '66967', 'X', '', '(c) 785-282-0833', '686-4279', '', 7, 2),
('Rosemary Linn', '511 Jarvis', '', 'KS', '66967', 'X', '', '', '282-0914', '', 9, 1),
('Dianna Rice', '19031 I Road', '', 'KS ', '66932', 'X', '', '(c) 476-8007', '695-2399', '', 12, 0),
('Kristi Rothchild', '18041 M. Rd', '', 'KS ', '66967', 'X', '', '', '282-6777', '', 13, 0),
('Annette Wingerson', '21042 Hwy. 281', '', 'KS ', '66967', 'X', '', '', '282-3844', '', 14, 1),
('Susan Buckley', '520 W. New York St.', '', 'KS', '66967', 'X', 'X', '(c) 620-7517', '282-6402', '', 21, 0),
('Lynda Devlin', '515 E. Kansas', '', 'KS', '66967', 'X', 'X', '', '282-6329', '', 22, 0),
('Tracy Hall', '411 N. Brandon', '', 'Kansas', '66967', '', 'X', '', '785-620-7429', '', 27, 0),
('Monica Wagner', '11041 70 Road', '', 'Kansas', '66967', 'X', '', '', '785-695-2294', '785-476-5643', 29, 2),
('Sherrill Sasse', '', '', '', '', 'X', '', '', '', '', 36, 0),
('Kelli Jones', '', '', '', '', '', 'X', '', '', '', 37, 0),
('Adam Rentschler', '', '', '', '', 'X', '', '', '', '', 41, 0),
('Karen Baetz', '', '', '', '', '', 'X', '', '', '', 43, 1),
('Emily Montgomery', '', '', '', '', '', 'X', '', '', '', 44, 0),
('J.A. Hall', '', '', '', '', '', 'X', '', '', '', 45, 0),
('Matraca Baetz', '', '', '', '', 'X', 'X', '', '', '', 46, 1),
('Lori Barnes', '', '', '', '', '', 'X', '', '', '', 47, 0),
('Lori Atwood', '', '', '', '', '', '', '', '', '', 48, 1),
('Ellie Albert', '', '', '', '', 'X', 'X', '', '', '', 49, 1),
('Amanda Williams', '', '', '', '', '', 'X', '', '', '', 50, 1),
('Saige Ryan', '', '', '', '', '', 'X', '', '', '', 52, 0),
('Vicki St. Clair', '', '', '', '', '', 'X', '', '', '', 54, 1),
('Sherri Frieling', '', '', '', '', 'X', 'X', '', '', '', 56, 0),
('Rebecca Long', '', '', '', '', '', 'X', '', '', '', 59, 1),
('Jenilynn Wessling', '', '', '', '', '', 'X', '', '', '', 61, 0),
('Liz Phy', '', '', '', '', '', 'X', '', '', '', 64, 1),
('Matt Haack', '', '', '', '', 'X', 'X', '', '', '', 65, 0),
('Sharon Brown', '', '', '', '', '', 'X', '', '', '', 69, 1),
('Sheila Schenk', '', '', '', '', '', 'X', '', '', '', 71, 0),
('Kathleen Lange', '', '', '', '', '', 'X', '', '', '', 72, 0),
('Katrina Long', '22051 Highway 181', '', 'KS', '66952', 'X', '', '', '', '', 76, 0),
('Stacey Jennings', '', '', '', '', 'X', '', '', '', '', 79, 0),
('Sena Bailey', '', '', '', '', '', 'X', '', '', '', 82, 0),
('Katie Lange', '', '', '', '', 'X', 'X', '', '', '', 84, 0),
('Haleigh Holt', '', '', '', '', '', 'X', '', '', '', 85, 1),
('Emily Hoshko', '801 E Kansas', '', 'KS', '66967', 'X', 'X', '', '', '785-226-9988', 88, 0),
('Scott Panter', '', '', '', '', 'X', '', '', '', '', 94, 0),
('Nadine Holmes', '', '', '', '', '', 'X', '', '', '', 96, 0),
('Peyton Buckmaster', '', '', '', '', '', 'X', '', '', '', 98, 0),
('Lynne Wagner', '', '', '', '', '', 'X', '', '', '', 100, 0),
('Janet Barnes', '', '', '', '', '', 'X', '', '', '', 101, 0),
('Dana Frey', '', '', '', '', 'X', '', '', '', '', 102, 1),
('Pat Baetz', '', '', '', '', '', 'X', '', '', '', 107, 1),
('JANET BARNES', '121 MAIN STREET', '', 'KANSAS', '67621', '', 'X', '', '785-476-5450', '', 108, 1),
('Darianne Allen', '', '', '', '', '', 'X', '', '', '', 109, 1),
('Risa Overmiller', '', '', 'Kansas', '', 'X', '', '', '', '', 110, 1),
('Arthur Befort', '314 N Main', '', 'KS', '66967', 'X', 'X', '', '785-686-4027', '785-686-4732', 111, 1),
('Tangie Hileman', '23062 R Road', '', 'KS', '66967', '', 'X', '', '', '785-620-7041', 112, 1),
('Latham Kahrs', '', '', '', '', 'X', '', '', '', '', 113, 1),
('Kareena Herredsberg', '', '', '', '', '', 'X', '', '', '', 116, 1),
('Brent Garretson', '210 East St', '', 'Kansas', '66967', 'X', '', '', '', '719-332-0794', 120, 1),
('Alex Hobelmann', '', '', '', '', 'X', '', '', '', '', 121, 1),
('Todd Haven', '', '', '', '', '', '', '', '', '', 122, 1),
('Barbara J Kluver', '1204 N Kansas Ave', '', 'NE', '68901', '', '', '', '', '402-984-4250', 124, 1),
('Elizabeth Phy', '', '', '', '', '', 'X', '', '', '', 125, 1),
('Courtney Schmidt', '', '', '', '', 'X', 'X', '', '', '', 127, 1),
('Mona Marler', '', '', '', '', '', 'X', '', '', '', 128, 1),
('Denise Sasse', '', '', '', '', 'X', '', '', '', '', 130, 1),
('Darlene Morgan', '', '', '', '', '', '', '', '', '', 133, 1),
('Carol Nichols', '', '', 'KS', '', 'X', '', '', '', '', 134, 1),
('Cherie Herredsberg', '', '', '', '', 'X', '', '', '', '', 135, 1),
('Sarah Chadek', '', '', '', '', '', 'X', '', '', '', 136, 1),
('Lauryn Tegethoff', '', '', '', '', '', 'X', '', '', '', 138, 1),
('Casi Conaway', '', '', '', '', '', 'X', '', '', '', 140, 1),
('Ross Ifland', '', '', '', '', '', 'X', '', '', '', 143, 1),
('Tianne McCoy', '', '', '', '', '', 'X', '', '', '', 144, 1),
('Courtney Panter', '', '', '', '', '', 'X', '', '', '', 145, 1),
('Jeremy Carr', '', '', '', '', '', '', '', '', '', 146, 1),
('Bette McNary', '', '', '', '', '', 'X', '', '', '', 147, 1),
('Kayla Murphy', '', '', '', '', '', 'X', '', '', '', 148, 1),
('Kelly Allen', '', '', '', '', 'X', '', '', '', '', 149, 1),
('JALEN LAMBERT', ' 111 Park Street', '', 'Kansas', '66967', 'X', '', '', '785-282-4137', '', 150, 1),
('Casey Borger', '', '', '', '', '', 'X', '', '', '', 151, 1),
('Lara Cox', '', '', '', '', '', 'X', '', '', '', 152, 1),
('Corrina Abney', '', '', '', '', '', 'X', '', '', '', 153, 1),
('Arla Homburg', '', '', '', '', 'X', '', '', '', '', 154, 1),
('Holly Nixon', '', '', '', '', '', 'X', '', '', '', 156, 1),
('Becky Attwood', '', '', '', '', '', 'X', '', '', '', 157, 1),
('Larry  Burgess', '', '', '', '', 'X', '', '', '', '', 158, 1),
('Michelle Elliott', '202 Park Street', '', 'Kanss', '66967', 'X', '', 'melliott@usd237.com', '', '785-280-0714', 160, 1),
('ben hoshko', '', '', '', '', '', '', '', '', '', 161, 1),
('Ashlie Hrabe', '', '', '', '', '', '', '', '', '', 162, 1),
('Courtney Moss', '', '', '', '', '', 'X', '', '', '', 163, 1),
('Allysa Respess', '', '', '', '', '', 'X', '', '', '', 164, 1),
('Jenna Schoenberger', '', '', '', '', 'X', '', '', '', '', 165, 1),
('Cierra Wallgren', '', '', '', '', 'X', '', '', '', '', 166, 1),
('Sherry Weatherholt', '', '', '', '', '', 'X', '', '', '', 167, 1),
('Amy Timmons', '', '', '', '', '', 'X', '', '', '', 168, 1),
('Jessica Hommon', '', '', '', '', 'X', '', '', '', '', 169, 1),
('Allaire Homburg', '', '', '', '', '', 'X', '', '', '', 170, 1),
('Denyse Kattenberg', '', '', 'Ks', '66967', '', 'X', '', '', '', 171, 1),
('Kristy Howard', '', '', '', '', '', 'X', '', '', '', 172, 1),
('Mark Nebel', '', '', 'KS.', '66967', 'X', '', '', '', '', 174, 1),
('Nicole Crawford', '', '', '', '', '', 'X', '', '', '', 175, 1),
('Jesse Staples', '', '', '', '', '', 'X', '', '', '', 178, 1),
('Seth Topel', '', '', '', '', '', 'X', '', '', '', 179, 1),
('NO SUB NEEDED', '111', '', 'Ks', '66967', '', '', 'school', '', '', 180, 1),
('NO SUB NEEDED', '111', '', 'Ks', '66967', '', 'X', 'school', '', '', 181, 1),
('No Sub Needed', '111', '', 'Ks', '66967', '', 'X', '', '785-282-6609', '785-282-6609', 182, 1),
('Colbie Lewis', '', '', 'Ks', '669867', '', 'X', '', '', '', 183, 1),
('Lauryn Davis', '', '', '', '', 'X', '', '', '', '', 184, 1),
('Sharon Topel', '', '', '', '', '', 'X', '', '', '', 185, 1),
('Wanda Dietz', '', '', '', '', '', 'X', 'wdietz@usd237com', '', '', 186, 1),
('Colton Hutchinson', '', '', '', '', '', '', '', '', '', 187, 1),
('Bree Frieling', '', '', '', '', '', 'X', '', '', '', 189, 1),
('Rachel Coomes', '', '', '', '', 'X', '', '', '', '', 190, 1),
('David Edell', '', '', '', '', '', 'X', '', '', '', 191, 1),
(' select-sub', '', '', '', '', '', '', '', '', '', 192, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sickdays`
--

DROP TABLE IF EXISTS `sickdays`;
CREATE TABLE IF NOT EXISTS `sickdays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL DEFAULT '2021-06-01',
  `name_id` int(4) NOT NULL,
  `dept_id` varchar(15) NOT NULL DEFAULT 'GS',
  `type` varchar(20) NOT NULL DEFAULT '1',
  `pay` int(11) DEFAULT NULL,
  `length` varchar(20) NOT NULL DEFAULT '1',
  `sub_needed` varchar(3) NOT NULL DEFAULT '0',
  `sub_id` varchar(30) NOT NULL DEFAULT 'none',
  `notes` varchar(200) NOT NULL DEFAULT 'No Notes Typed',
  `spam` tinyint(1) NOT NULL DEFAULT '1',
  `duration` time NOT NULL DEFAULT '08:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sickdays`
--

INSERT INTO `sickdays` (`id`, `date`, `name_id`, `dept_id`, `type`, `pay`, `length`, `sub_needed`, `sub_id`, `notes`, `spam`, `duration`) VALUES
(95, '2021-06-28', 89, '2', '1', 1, '2', '', '121', '', 1, '00:00:00'),
(97, '2021-06-28', 57, '2', '1', 2, '1', '', '100', '', 1, '00:00:00'),
(101, '2021-08-04', 70, '1', '1', 2, '2', '', '101', '', 1, '00:00:00'),
(102, '2021-08-04', 89, '1', '1', 1, '1', '0', '121', '', 1, '00:00:00'),
(103, '2021-08-05', 44, '1', '1', 4, '2', '', '121', '', 1, '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

DROP TABLE IF EXISTS `time`;
CREATE TABLE IF NOT EXISTS `time` (
  `time_id` int(4) NOT NULL AUTO_INCREMENT,
  `duration` int(4) NOT NULL,
  `length` varchar(30) NOT NULL,
  PRIMARY KEY (`time_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`time_id`, `duration`, `length`) VALUES
(1, 8, 'Full Day'),
(2, 4, 'Half Day'),
(3, 1, '1 Hour'),
(4, 2, '2 Hours'),
(5, 3, '3 Hours'),
(6, 5, '5 Hours'),
(7, 6, '6 Hours'),
(8, 7, '7 Hours');

-- --------------------------------------------------------

--
-- Table structure for table `total_sick`
--

DROP TABLE IF EXISTS `total_sick`;
CREATE TABLE IF NOT EXISTS `total_sick` (
  `tsick_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `sickdays` varchar(15) NOT NULL DEFAULT '0',
  `perdays` varchar(15) NOT NULL DEFAULT '0',
  `profdays` varchar(15) NOT NULL DEFAULT '0',
  `bereavdays` varchar(15) NOT NULL DEFAULT '0',
  `spam` varchar(1) NOT NULL DEFAULT '1',
  `building` varchar(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`tsick_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_sick`
--

INSERT INTO `total_sick` (`tsick_id`, `name`, `sickdays`, `perdays`, `profdays`, `bereavdays`, `spam`, `building`) VALUES
(12, 'Kelly Allen', '14', '5', '0', '0', '1', '1'),
(13, 'Lori Atwood', '45.0', '3.0', '', '', '1', '1'),
(15, 'Patricia Baetz', '50', '3.0', '', '', '1', '5'),
(19, 'Janeil Baxter', '17.5', '4.0', '', '', '1', '1'),
(20, 'Michelle Benoit', '13.5', '4.0', '', '', '1', '1'),
(22, 'Chris Goedert', '14', '4.0', '', '', '1', '2'),
(24, 'Rob Buckmaster', '70', '4.0', '', '', '1', '2'),
(25, 'Staci Buckmaster ', '47.5', '4.0', '', '', '1', '1'),
(28, 'Debbie Conrad', '50.0', '3.0', '', '', '1', '2'),
(32, 'Patrick Miller', '14', '4.0', '', '', '1', '2'),
(36, 'Ron Gibble', '50.0', '3.0', '', '', '1', '5'),
(37, 'Katie Grabast', '10.0', '4.0', '', '', '1', '1'),
(38, 'Barbara L. Wilson', '60', '3', '0', '', '1', '3'),
(41, 'Tod Hartman', '60.0', '3.0', '', '', '1', '4'),
(43, 'Greg Hobelmann', '70', '4', '', '', '1', '2'),
(44, 'Brock Hutchinson', '70', '4.0', '', '', '1', '2'),
(45, 'Lori Ifland', '31.0', '4.0', '', '', '1', '1'),
(47, 'Sharon Kattenberg', '50', '3.0', '', '', '1', '6'),
(48, 'Greg Koelsch', '70', '4.0', '', '', '1', '2'),
(49, 'Thelma Koops', '70', '4.0', '', '', '1', '2'),
(51, 'Amanda Lehmann', '13.0', '4.0', '', '', '1', '1'),
(53, 'Nicholas Linn', '70', '4.0', '', '', '1', '2'),
(54, 'Rosemary Linn', '37.5', '3.0', '', '', '1', '1'),
(56, 'Sheryl Macklin', '50', '3.0', '', '', '1', '6'),
(57, 'Julie Molzahn', '70', '4.0', '', '', '1', '2'),
(58, 'Jolene Moss', '36.5', '4.0', '', '', '1', '1'),
(59, 'Brenda McNary', '50', '3.0', '', '', '1', '5'),
(60, 'Steve McNary', '58.5', '3.0', '', '', '1', '5'),
(63, 'Risa Overmiller', '14', '4.0', '', '', '1', '1'),
(64, 'Susan Panter', '10.0', '3.0', '', '', '1', '1'),
(65, 'Teresa Pruden', '35.0', '3.0', '', '', '1', '6'),
(66, 'Glenda Ratliff', '43.5', '3.0', '', '', '1', '6'),
(68, 'Dennis Reinert', '50', '3.0', '', '', '1', '5'),
(69, 'Stacey Rempe', '36.5', '4.0', '', '', '1', '1'),
(70, 'Alana Respess', '39.5', '4.0', '', '', '1', '1'),
(71, 'Linda Robinson', '59.5', '3.0', '', '', '1', 'boe'),
(72, 'Cally Rogers', '23.0', '4.0', '', '', '1', '1'),
(73, 'Michael Rogers', '69.0', '4.0', '', '', '1', '1'),
(74, 'Ann Rust', '24.5', '4.0', '', '', '1', '1'),
(75, 'Darren Sasse', '69.0', '4.0', '', '', '1', '2'),
(76, 'Denise Sasse', '8.5', '2.0', '', '', '1', '2'),
(77, 'MIchelle Stamm', '62', '4.0', '', '', '1', '1'),
(81, 'Amy Terrill', '64', '4.0', '', '', '1', '2'),
(85, 'Bree Wilson', '15.0', '4.0', '', '', '1', '1'),
(86, 'Tim Wilson', '46.0', '4.0', '', '', '1', '2'),
(87, 'Kelli Schmidt', '49.5', '4.0', '', '', '1', '2'),
(88, 'Annette Wingerson', '27.0', '1.5', '', '', '1', '1'),
(89, 'Anita Wolters', '10.0', '4.0', '', '', '1', '1'),
(90, 'Kelli Armknecht', '42.5', '4.0', '', '', '1', '2'),
(93, 'Rhonda Overmiller', '0.0', '0.0', '', '', '1', '1'),
(94, 'Gina Brooks', '0.0.', '0.0\n', '', '', '1', '1'),
(95, 'Marsha Allen', '0', '0', '0', '0', '1', '2'),
(103, 'Wanda Dietz', '0', '0', '0', '0', '1', '2'),
(105, 'Julie Hutchinson', '0', '0', '0', '0', '1', '2'),
(107, 'Shelly Strine', '0', '0', '0', '0', '1', '2'),
(109, 'Debra Ward', '0', '0', '0', '0', '1', '1'),
(111, 'Mindy Wolfe', '0', '0', '0', '0', '1', '1'),
(116, 'Elizabeth Phy', '0', '0', '0', '0', '1', '1'),
(117, 'Darlene Morgan', '0', '0', '0', '0', '1', '1'),
(123, 'Kellee Murphy', '0.0', '0.0', '', '', '1', '2'),
(124, 'Shelly Montgomery', '0.0', '0.0', '', '', '1', '1'),
(125, 'AJ Kuhlmann', '21.0', '3.0', '', '', '1', ''),
(126, 'Judi Johnson', '19.0', '3.0', '', '', '1', ''),
(127, 'Sandra Cox', '6.0', '3.0', '', '', '1', ''),
(141, 'Haliegh Holt', '', '', '', '', '1', '1'),
(142, 'Karen Baetz', '', '', '', '', '1', '1'),
(143, 'Matraca Baetz ', '10', '4', '4', '4', '1', '1'),
(146, 'Kelli Jones', '12', '4', '', '', '1', '1'),
(148, 'Lori Barnes', '12', '4', '', '', '1', '1'),
(153, 'Don Wick', '14', '', '', '', '1', ''),
(157, 'Vickie St. Clair', '', '', '', '', '1', '1'),
(160, 'Katie Lange', '5', '5', '', '', '1', '1'),
(163, 'Colbie Lewis', '', '', '', '', '1', '1'),
(165, 'Tammy Frank', '', '', '', '', '1', '1'),
(167, 'Teri Overmiller', '15', '', '', '', '1', '2'),
(171, 'Heather Sasse', '12', '', '', '', '1', '1'),
(172, 'Janet Barnes', '', '', '', '', '1', '1'),
(174, 'Kim Terrell', '10', '4', '', '', '1', '1'),
(176, 'Rebekah Miller', '', '', '', '', '1', '2'),
(178, 'Miranda Christner', '', '', '', '', '1', '2'),
(179, 'Tamra Frank', '', '', '', '', '1', '2'),
(180, 'Monica Wagner', '', '', '', '', '1', '2'),
(181, 'Latham Kahrs', '12', '4', '', '', '1', '1'),
(183, 'Darian Allen', '12', '4', '', '', '1', '1'),
(184, 'Ellie Stansbury', '12', '4', '', '', '1', '1'),
(186, 'Alicia Vigil ', '12', '4', '', '', '1', '1'),
(187, 'John Lambert', '', '', '', '', '1', '1'),
(189, 'Kareena Herredsberg', '', '', '', '', '1', ''),
(196, 'Jennifer Herredsberg', '', '', '', '', '1', '1'),
(199, 'Peggy Hobelmann', '', '', '', '', '1', '1'),
(200, 'Travis Elliott', '', '', '', '', '1', '1'),
(204, 'Kendall Allen', '', '', '', '', '1', '1'),
(205, 'Michelle Elliott', '12', '', '', '', '1', '2'),
(207, 'Sherri Frieling', '12', '', '', '', '1', '2'),
(209, 'Miranda Attwood', '12', '', '', '', '1', '2'),
(218, 'Arla Homburg', '', '', '', '', '1', '1'),
(219, 'Shelli Younger', '', '', '', '', '1', '1'),
(220, 'Allaire Homburg', '', '', '', '', '1', '1'),
(221, 'Jenna Schoenberger', '', '', '', '', '1', '1'),
(222, 'Madison Prochaska', '', '', '', '', '1', '1'),
(223, 'Alicia Brown', '', '', '', '', '1', '1'),
(226, 'Denyse Kattenberg', '12', '', '', '', '1', '2'),
(230, 'Rachel Harvey', '12', '12', '', '', '1', '2'),
(231, 'Charlene Harvey', '12', '12', '', '', '1', '2'),
(240, 'NO SUB NEEDED', '12', '12', '', '', '1', '2'),
(243, ' select-teacher', '', '', '', '', '1', '1'),
(245, 'Frazier Crane', '12', '1', '0', '0', '1', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
