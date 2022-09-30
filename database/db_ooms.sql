-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 30, 2022 at 11:42 AM
-- Server version: 10.6.7-MariaDB-2ubuntu1.1
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ooms`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_calendar`
--

CREATE TABLE `academic_calendar` (
  `hd_id` int(11) NOT NULL,
  `adate` date DEFAULT NULL COMMENT 'leave start date',
  `adate2` date DEFAULT NULL COMMENT 'leave end date',
  `academic_id` tinyint(4) DEFAULT NULL COMMENT 'academic year id',
  `org_id` smallint(6) NOT NULL,
  `atext` varchar(250) NOT NULL,
  `file_path` varchar(1000) DEFAULT NULL,
  `file_names` varchar(1000) DEFAULT NULL,
  `approval_status` tinyint(1) DEFAULT NULL COMMENT '1=approved, 0 = not approved',
  `added_on` datetime DEFAULT NULL,
  `added_by` decimal(5,0) NOT NULL COMMENT 'user_id',
  `edited_on` datetime DEFAULT NULL,
  `edited_by` decimal(5,0) DEFAULT NULL COMMENT 'user_id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Academic Calendar';

--
-- Dumping data for table `academic_calendar`
--

INSERT INTO `academic_calendar` (`hd_id`, `adate`, `adate2`, `academic_id`, `org_id`, `atext`, `file_path`, `file_names`, `approval_status`, `added_on`, `added_by`, `edited_on`, `edited_by`) VALUES
(11, NULL, NULL, 7, 3, 'A', 'upl/n_n_m/20220509_1652052760.pdf', NULL, 1, '2022-05-07 14:36:02', '1010', '2022-05-09 12:31:50', '1000');

--
-- Triggers `academic_calendar`
--
DELIMITER $$
CREATE TRIGGER `academic_calendar_hd_id` BEFORE INSERT ON `academic_calendar` FOR EACH ROW BEGIN
	declare max_id int(11);
	select max(hd_id) into max_id from academic_calendar;
	  if max_id is not null then
	    set new.hd_id = max_id+1;
	  else
	    set new.hd_id = 11;
	  end if;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `academic_calendar_details`
--

CREATE TABLE `academic_calendar_details` (
  `dtl_id` bigint(20) DEFAULT NULL,
  `hd_id` int(11) DEFAULT NULL,
  `holiday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Triggers `academic_calendar_details`
--
DELIMITER $$
CREATE TRIGGER `academic_calendar_details_dtl_id` BEFORE INSERT ON `academic_calendar_details` FOR EACH ROW BEGIN
	declare max_id bigint(20);
	select max(dtl_id) into max_id from academic_calendar_details;
	  if max_id is not null then
	    set new.dtl_id = max_id+1;
	  else
	    set new.dtl_id = 11;
	  end if;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `assets_register`
--

CREATE TABLE `assets_register` (
  `asset_reg_id` int(11) UNSIGNED NOT NULL,
  `asset_id` int(11) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `warranty_month` int(11) DEFAULT NULL,
  `warranty_end_date` date DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `outlet_id` int(11) DEFAULT NULL,
  `asset_condition` tinyint(4) DEFAULT 1 COMMENT '1=Service Mode, 2= Repare Mode, 3=Damage, 4= Destroy, 5=Sales',
  `com_id` int(11) DEFAULT NULL,
  `user_comment` varchar(100) COLLATE utf8mb3_swedish_ci DEFAULT NULL,
  `photo_path` varchar(100) COLLATE utf8mb3_swedish_ci DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

--
-- Dumping data for table `assets_register`
--

INSERT INTO `assets_register` (`asset_reg_id`, `asset_id`, `purchase_date`, `warranty_month`, `warranty_end_date`, `supplier_id`, `outlet_id`, `asset_condition`, `com_id`, `user_comment`, `photo_path`, `added_by`, `added_on`, `update_by`, `update_on`) VALUES
(5, 11, '2022-08-01', NULL, NULL, 1, 6, 2, NULL, NULL, '1659318615-11.jpg', NULL, NULL, NULL, NULL),
(6, 9, '2022-08-01', NULL, NULL, 2, 6, 2, NULL, NULL, '1659318794-9.webp', NULL, NULL, NULL, NULL),
(7, 9, '2022-08-01', NULL, NULL, 1, 6, 2, NULL, NULL, '1659318953-9.webp', NULL, NULL, NULL, NULL),
(8, 9, '2022-08-01', NULL, NULL, 1, 9, 2, NULL, NULL, '1659330904-9.webp', NULL, NULL, NULL, NULL),
(9, 9, '2022-08-05', NULL, NULL, 1, 7, 2, NULL, NULL, '1659702150-9.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `asset_group`
--

CREATE TABLE `asset_group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(50) COLLATE utf8mb3_swedish_ci DEFAULT NULL,
  `added_by` int(20) DEFAULT NULL,
  `added_on` timestamp NULL DEFAULT current_timestamp(),
  `update_by` int(11) DEFAULT NULL,
  `update_on` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

--
-- Dumping data for table `asset_group`
--

INSERT INTO `asset_group` (`group_id`, `group_name`, `added_by`, `added_on`, `update_by`, `update_on`) VALUES
(9, 'Electrical', NULL, '2022-07-31 19:02:42', NULL, NULL),
(10, 'Electronics', NULL, '2022-07-31 19:05:23', NULL, NULL),
(11, 'General', NULL, '2022-07-31 19:07:38', NULL, NULL),
(15, NULL, NULL, '2022-09-23 09:33:02', NULL, NULL),
(16, NULL, NULL, '2022-09-23 09:36:14', NULL, NULL),
(17, 'sdfdsfdf', NULL, '2022-09-23 10:32:46', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `asset_list`
--

CREATE TABLE `asset_list` (
  `asset_id` int(11) NOT NULL,
  `asset_name` varchar(50) DEFAULT NULL,
  `sub_group_id` int(11) DEFAULT NULL,
  `model_no` varchar(50) DEFAULT NULL,
  `brand_name` varchar(20) DEFAULT NULL,
  `com_id` int(11) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_on` timestamp NULL DEFAULT current_timestamp(),
  `update_by` int(11) DEFAULT NULL,
  `update_on` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset_list`
--

INSERT INTO `asset_list` (`asset_id`, `asset_name`, `sub_group_id`, `model_no`, `brand_name`, `com_id`, `added_by`, `added_on`, `update_by`, `update_on`) VALUES
(9, 'General Ac 1.5 Ton', 20, 'ASGA18FMTA', 'General', NULL, NULL, '2022-07-31 19:20:31', NULL, NULL),
(10, 'General 2 Ton', 20, 'ASGA24ABC', 'General', NULL, NULL, '2022-07-31 19:23:11', NULL, NULL),
(11, 'Power Generator', 32, 'IMPULSE 1200', 'Walton', NULL, NULL, '2022-08-01 01:48:49', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `asset_parts`
--

CREATE TABLE `asset_parts` (
  `parts_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `group_id` int(11) DEFAULT NULL COMMENT 'Asset sub group id',
  `parts_name` varchar(50) COLLATE utf8mb3_swedish_ci DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_on` timestamp NULL DEFAULT current_timestamp(),
  `update_by` int(11) DEFAULT NULL,
  `update_on` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

--
-- Dumping data for table `asset_parts`
--

INSERT INTO `asset_parts` (`parts_id`, `group_id`, `parts_name`, `added_by`, `added_on`, `update_by`, `update_on`) VALUES
(0000000001, 21, 'Panto nex', NULL, '2022-09-09 08:22:08', NULL, NULL),
(0000000002, 21, 'Bantonex', NULL, '2022-09-09 08:22:20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `asset_sub_group`
--

CREATE TABLE `asset_sub_group` (
  `sub_group_id` int(11) NOT NULL,
  `sub_group_name` varchar(50) COLLATE utf8mb3_swedish_ci DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_on` timestamp NULL DEFAULT current_timestamp(),
  `update_by` int(11) DEFAULT NULL,
  `update_on` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

--
-- Dumping data for table `asset_sub_group`
--

INSERT INTO `asset_sub_group` (`sub_group_id`, `sub_group_name`, `group_id`, `added_by`, `added_on`, `update_by`, `update_on`) VALUES
(20, 'AC', 9, NULL, '2022-07-31 19:08:08', NULL, NULL),
(21, 'Light', 9, NULL, '2022-07-31 19:08:34', NULL, NULL),
(22, 'Fan', 9, NULL, '2022-07-31 19:08:51', NULL, NULL),
(23, 'Shutter', 11, NULL, '2022-07-31 19:09:11', NULL, NULL),
(24, 'Furniture & Decoration', 11, NULL, '2022-07-31 19:09:44', NULL, NULL),
(25, 'Ceiling', 11, NULL, '2022-07-31 19:10:09', NULL, NULL),
(26, 'Tiles', 11, NULL, '2022-07-31 19:10:38', NULL, NULL),
(27, 'Bathroom fittings', 11, NULL, '2022-07-31 19:11:29', NULL, NULL),
(30, 'Door Lock', 11, NULL, '2022-07-31 19:13:02', NULL, NULL),
(31, 'IPS', 9, NULL, '2022-07-31 19:13:19', NULL, NULL),
(32, 'Generator', 9, NULL, '2022-07-31 19:13:34', NULL, NULL),
(33, 'Iron', 9, NULL, '2022-07-31 19:13:56', NULL, NULL),
(34, 'Iron Table', 11, NULL, '2022-07-31 19:14:45', NULL, NULL),
(35, 'dsd', 10, NULL, '2022-09-23 09:47:37', NULL, NULL),
(38, 'dfdfdf', 9, NULL, '2022-09-23 09:48:49', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `emp_attendance`
--

CREATE TABLE `emp_attendance` (
  `attend_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `attend_date` date NOT NULL,
  `in_time` varchar(10) NOT NULL,
  `out_time` varchar(10) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_attendance`
--

INSERT INTO `emp_attendance` (`attend_id`, `emp_id`, `attend_date`, `in_time`, `out_time`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 3, '1975-09-25', '07:53', '02:21', 1, '2022-09-26 18:00:00', 1, '2022-09-26 18:00:00'),
(2, 4, '2008-01-11', '23:05', '21:31', 1, '2022-09-27 18:00:00', 1, '2022-09-27 18:00:00'),
(3, 4, '2016-08-18', '13:27', '16:41', 1, '2022-09-27 18:00:00', 1, '2022-09-27 18:00:00'),
(4, 5, '2010-11-24', '08:05', '00:41', 1, '2022-09-27 18:00:00', 1, '2022-09-27 18:00:00'),
(5, 5, '1974-10-23', '20:04', '08:35', 1, '2022-09-27 18:00:00', 1, '2022-09-27 18:00:00'),
(6, 2, '2002-12-09', '07:11', '13:40', 1, '2022-09-27 18:00:00', 1, '2022-09-27 18:00:00'),
(7, 2, '1976-12-29', '01:17', '05:19', 1, '2022-09-27 18:00:00', 1, '2022-09-27 18:00:00'),
(10, 1, '2022-09-30', '02:13', '16:05', 1, '2022-09-27 18:00:00', 1, '2022-09-27 18:00:00'),
(12, 3, '1996-08-07', '12:19', '05:33', 1, '2022-09-27 18:00:00', 1, '2022-09-27 18:00:00'),
(17, 13, '2022-09-30', '14:02', '11:32', 1, '2022-09-29 18:00:00', 1, '2022-09-29 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `emp_designation`
--

CREATE TABLE `emp_designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(250) DEFAULT NULL,
  `post_level` int(11) DEFAULT NULL,
  `grade_id` int(11) DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `edited_on` datetime DEFAULT NULL,
  `edited_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_designation`
--

INSERT INTO `emp_designation` (`designation_id`, `designation_name`, `post_level`, `grade_id`, `added_on`, `added_by`, `edited_on`, `edited_by`) VALUES
(11, 'Manager', 1001, 11, '2022-09-22 18:42:55', 11, '2022-09-22 18:43:01', NULL),
(12, 'Salesman', 1231, 10, '2022-09-24 05:34:26', NULL, '2022-09-24 05:34:26', NULL),
(13, 'Asst. Manage', 1002, 9, '2022-09-25 05:23:09', NULL, '2022-09-25 05:23:09', NULL),
(14, 'Storekeeper', 2001, 12, '2022-09-25 05:23:09', NULL, '2022-09-25 05:23:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `emp_education`
--

CREATE TABLE `emp_education` (
  `edu_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `degree_name` varchar(255) NOT NULL,
  `major` varchar(100) DEFAULT NULL,
  `institute` varchar(100) DEFAULT NULL,
  `board` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `result` varchar(10) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_education`
--

INSERT INTO `emp_education` (`edu_id`, `emp_id`, `degree_name`, `major`, `institute`, `board`, `year`, `result`, `created_by`, `created_on`) VALUES
(1, 2, 'Degree', 'Bangla', 'BM', 'Barishal', 1990, '3', 1, '2022-09-27 11:14:40'),
(4, 3, 'Wynter Boone', 'Ex rem velit volupta', 'Molestiae ipsam anim', 'BOU', 2005, '3', 1, '2022-09-27 11:15:07'),
(5, 5, 'Alexa Greer', 'Minus anim sed quia', 'Fugiat occaecat bea', 'Mymensingh', 1996, '1', 1, '2022-09-28 04:20:59'),
(6, 1, 'tttt', 'Hic non explicabo Q', 'Eu et labore ut mole', 'BOU', 1991, '5', 1, '2022-09-28 07:30:01'),
(8, 2, 'SSC', 'Computer', 'BKTTC', 'Technical', 2009, '5', 1, '2022-09-28 09:14:10'),
(9, 2, 'Education', 'English', 'SPI', 'Mymensingh', 1996, '2', 1, '2022-09-30 05:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `emp_info`
--

CREATE TABLE `emp_info` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(30) COLLATE utf8mb3_unicode_ci NOT NULL,
  `emp_dob` date NOT NULL,
  `contact_no` varchar(16) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email_id` varchar(30) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `present_address` text COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `permanent_address` text COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `photo_path` varchar(222) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `outlet_id` int(11) DEFAULT NULL,
  `active_status` smallint(6) DEFAULT NULL COMMENT '1=active, 0=inactive',
  `last_rec_id` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `emp_info`
--

INSERT INTO `emp_info` (`emp_id`, `emp_name`, `emp_dob`, `contact_no`, `email_id`, `present_address`, `permanent_address`, `joining_date`, `photo_path`, `designation_id`, `outlet_id`, `active_status`, `last_rec_id`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Bertha Snow', '1984-03-20', '79', 'dysasyc@mailinator.com', 'Dolorem optio sint', 'In fuga Est eveniet', '2021-05-23', '16642768316332d95f3f26e.jpg', 11, 6, NULL, NULL, 1, '2022-09-27 11:07:11', NULL, '2022-09-27 11:07:11'),
(2, 'Karen Hewitt', '1984-11-18', '48', 'qezisepon@mailinator.com', 'Accusantium asperior', 'Quidem ut corrupti', '1999-10-20', '16642772396332daf70580c.png', 11, 6, NULL, NULL, 1, '2022-09-27 11:13:59', NULL, '2022-09-27 11:13:59'),
(3, 'Shaine Price', '1980-11-12', '83', 'mofisakomu@mailinator.com', 'Officia rem neque co', 'Veritatis amet eu q', '1970-07-04', '16642772486332db008b300.png', 11, 6, NULL, NULL, 1, '2022-09-27 11:14:08', NULL, '2022-09-27 11:14:08'),
(4, 'Victor Johnston', '1981-09-17', '40', 'noqicem@mailinator.com', 'Non consequat Sed e', 'Ratione culpa distin', '2019-04-01', '16642774316332dbb7abe43.png', 11, 6, NULL, NULL, 1, '2022-09-27 11:17:11', NULL, '2022-09-27 11:17:11'),
(5, 'Eden Woods', '1997-12-07', '50', 'bycusafid@mailinator.com', 'Animi molestiae mag', 'Proident vero at ip', '1980-06-08', '16642775656332dc3d63122.jpg', 11, 6, NULL, NULL, 1, '2022-09-27 11:19:26', NULL, '2022-09-27 11:19:26'),
(6, 'Daniel Golden', '2013-06-29', '90', 'fysel@mailinator.com', 'Minim dolore natus e', 'Laborum Vel ad solu', '2009-05-22', '16642775756332dc47cf51c.jpg', 11, 6, NULL, NULL, 1, '2022-09-27 11:19:36', NULL, '2022-09-27 11:19:36'),
(7, 'Lee Osborn', '1994-07-27', '51', 'juxubuh@mailinator.com', 'Exercitationem fugia', 'Eu labore et molesti', '1981-11-30', '16642775956332dc5b26029.jpg', 11, 6, NULL, NULL, 1, '2022-09-27 11:19:55', NULL, '2022-09-27 11:19:55'),
(8, 'Clare Sellers', '1985-04-13', '32', 'licijany@mailinator.com', 'Eligendi ipsa conse', 'Soluta molestiae aut', '1983-02-11', '16642777416332dced3cbc5.jpg', 14, 7, NULL, NULL, 1, '2022-09-27 11:22:21', NULL, '2022-09-27 11:22:21'),
(9, 'Luke Wynn', '1973-06-04', '80', 'juguhit@mailinator.com', 'Quis quo accusantium', 'Accusantium et sit d', '2010-12-01', '1664357814633415b6c20bb.jpg', 14, 6, NULL, NULL, 1, '2022-09-28 09:36:54', NULL, '2022-09-28 09:36:54'),
(10, 'Oscar Cortez', '1995-01-11', '100', 'lofybafal@mailinator.com', 'Illum dicta consequ', 'Voluptatem quia eius', '1982-05-09', '166443365263353df4a1e94.jpg', 11, 7, NULL, NULL, 1, '2022-09-29 06:40:53', NULL, '2022-09-29 06:40:53'),
(11, 'Yoshio Booth', '2005-07-12', '14', 'pytoxyv@mailinator.com', 'Reprehenderit ut ve', 'Commodi assumenda ea', '2004-06-05', '1664434425633540f9c5276.png', 14, 8, NULL, NULL, 1, '2022-09-29 06:53:45', NULL, '2022-09-29 06:53:45'),
(12, 'Roary Maldonado', '1996-03-01', '4', 'hyrake@mailinator.com', 'Aliquid est est co', 'Quam excepteur alias', '1998-06-23', '16644348136335427d36c53.jpg', 13, 8, NULL, NULL, 1, '2022-09-29 07:00:13', NULL, '2022-09-29 07:00:13'),
(13, 'Ainsley Wiley', '2006-10-31', '87', 'korylyqil@mailinator.com', 'Voluptatem dolores q', 'Culpa praesentium no', '1980-06-06', '16645135896336763536709.jpg', 12, 7, NULL, NULL, 1, '2022-09-30 04:53:09', NULL, '2022-09-30 04:53:09');

-- --------------------------------------------------------

--
-- Table structure for table `emp_leave_apps`
--

CREATE TABLE `emp_leave_apps` (
  `ela_id` int(11) NOT NULL,
  `rec_id` int(11) DEFAULT NULL COMMENT 'employee record id',
  `responsible_emp_id` int(11) DEFAULT NULL COMMENT 'Responsible person rec id',
  `lTypeId` int(11) DEFAULT NULL,
  `leave_start` date DEFAULT NULL,
  `leave_end` date DEFAULT NULL,
  `leave_dates` text NOT NULL,
  `total_days` float NOT NULL,
  `leave_description` text NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `academic_id` tinyint(4) NOT NULL,
  `lStatus` tinyint(1) NOT NULL COMMENT '0=Not Approve, 1=Approve',
  `created_at` date NOT NULL,
  `added_by` decimal(5,0) DEFAULT NULL,
  `edited_by` decimal(5,0) DEFAULT NULL,
  `edited_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `emp_leave_apps_details`
--

CREATE TABLE `emp_leave_apps_details` (
  `dt_id` bigint(20) NOT NULL,
  `ela_id` int(11) DEFAULT NULL,
  `leavedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `emp_record_info`
--

CREATE TABLE `emp_record_info` (
  `emp_rec_id` bigint(20) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `emp_type` smallint(6) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `outlet_id` int(11) NOT NULL,
  `joining_date` date NOT NULL,
  `subordinate_id` int(11) DEFAULT NULL COMMENT 'fk emplpyee id',
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `emp_record_info`
--

INSERT INTO `emp_record_info` (`emp_rec_id`, `emp_id`, `emp_type`, `designation_id`, `outlet_id`, `joining_date`, `subordinate_id`, `created_by`, `created_on`) VALUES
(5, 5, 1, 11, 10, '2013-01-27', 1, 1, '2022-09-28 04:20:42'),
(6, 1, 1, 11, 10, '2022-09-28', 1, 1, '2022-09-28 07:01:26'),
(9, 3, 1, 14, 9, '2005-10-18', 1, 1, '2022-09-28 07:05:39'),
(10, 1, 1, 14, 8, '2015-05-05', 1, 1, '2022-09-28 07:06:39'),
(12, 1, 1, 14, 6, '1990-01-02', 1, 1, '2022-09-28 07:07:09'),
(13, 1, 1, 14, 8, '1997-12-19', 1, 1, '2022-09-28 07:06:59'),
(15, 2, 1, 13, 8, '1978-11-12', 1, 1, '2022-09-28 07:10:02'),
(16, 2, 1, 13, 9, '2022-09-28', 1, 1, '2022-09-28 07:12:17'),
(17, 1, 1, 14, 10, '1972-12-27', 1, 1, '2022-09-28 09:08:30'),
(19, 13, 1, 12, 6, '2022-09-30', 1, 1, '2022-09-30 04:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `hr_leave_type`
--

CREATE TABLE `hr_leave_type` (
  `lTypeId` int(11) NOT NULL,
  `leave_type_name` varchar(100) DEFAULT NULL,
  `leave_days` int(11) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT NULL,
  `create_at` date DEFAULT NULL,
  `update_at` date DEFAULT NULL,
  `user_id` decimal(5,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `hr_leave_type`
--

INSERT INTO `hr_leave_type` (`lTypeId`, `leave_type_name`, `leave_days`, `status`, `create_at`, `update_at`, `user_id`) VALUES
(2, 'Casual Leave', 12, 'Active', '2017-08-20', '2021-09-03', '1000'),
(3, 'Medical Leave', 30, 'Active', '2017-08-20', '2021-04-06', '1010'),
(6, 'Leave without pay', 22, 'Active', '2017-08-20', '2021-09-03', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `outlet_agreement`
--

CREATE TABLE `outlet_agreement` (
  `agreement_id` int(11) NOT NULL,
  `outlet_id` int(11) NOT NULL,
  `agreement_start_date` date NOT NULL,
  `agreement_expire_date` date DEFAULT NULL,
  `agreement_month` int(11) DEFAULT NULL COMMENT 'total month of agreement',
  `land_owner_name` varchar(30) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `owner_contact` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `owner_nid` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `outlet_size` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `rent_amount` decimal(14,2) DEFAULT NULL COMMENT 'rent per month',
  `rent_increase_month` int(11) DEFAULT NULL,
  `increase_percentage` smallint(6) DEFAULT NULL,
  `current_status` smallint(6) DEFAULT NULL COMMENT '0=druft,1=approved,2=cencel',
  `approved_date` date DEFAULT NULL,
  `cancel_date` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `outlet_info`
--

CREATE TABLE `outlet_info` (
  `outlet_id` int(11) NOT NULL,
  `outlet_name` varchar(30) COLLATE utf8mb3_unicode_ci NOT NULL,
  `outlet_type` tinyint(4) NOT NULL DEFAULT 0,
  `outlet_size` varchar(30) COLLATE utf8mb3_unicode_ci NOT NULL,
  `outlet_address` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `district_id` int(11) NOT NULL DEFAULT 0,
  `area_id` int(11) NOT NULL DEFAULT 0,
  `manager_id` int(11) DEFAULT NULL COMMENT 'fk employee id',
  `agreement_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `outlet_info`
--

INSERT INTO `outlet_info` (`outlet_id`, `outlet_name`, `outlet_type`, `outlet_size`, `outlet_address`, `district_id`, `area_id`, `manager_id`, `agreement_id`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(6, 'BASHUNDHARA CITY MEGA MALL.', 1, '3000', 'Panthapath, Dhaka 1215', 1, 4, NULL, NULL, NULL, '2022-08-01 01:20:47', NULL, '2022-08-01 01:20:47'),
(7, 'Jamuna Future Park MEGA MALL', 1, '4000', 'KA-244, Kuril, Progoti Shoroni, Dhaka', 1, 3, NULL, NULL, NULL, '2022-08-01 01:33:19', NULL, '2022-08-01 01:33:19'),
(8, 'Dhanmondi Outlet', 3, '2000', 'Dhanmondi 27, dhaka', 1, 4, NULL, NULL, NULL, '2022-08-01 01:36:00', NULL, '2022-08-01 01:36:00'),
(9, 'Infinity Mirpur Mega Mall', 1, '5000', 'Mirpur, Dhaka', 1, 1, NULL, NULL, NULL, '2022-08-01 04:55:15', NULL, '2022-08-01 04:55:15'),
(10, 'Wyatt Mosley', 1, 'Quo cupidatat optio', 'Ullamco id sint aut', 1, 1, NULL, NULL, NULL, '2022-09-25 11:21:55', NULL, '2022-09-25 11:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `outlet_info2`
--

CREATE TABLE `outlet_info2` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

--
-- Dumping data for table `outlet_info2`
--

INSERT INTO `outlet_info2` (`id`, `name`) VALUES
(1, 'BB Megamall'),
(2, 'BB Megamall'),
(3, 'BB Megamall'),
(4, 'BB Megamall');

-- --------------------------------------------------------

--
-- Table structure for table `problem_list`
--

CREATE TABLE `problem_list` (
  `problem_id` int(11) NOT NULL,
  `problem_name` varchar(50) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL COMMENT 'asset sub group id',
  `display_status` tinyint(4) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_on` date DEFAULT current_timestamp(),
  `update_by` int(11) DEFAULT NULL,
  `update_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem_list`
--

INSERT INTO `problem_list` (`problem_id`, `problem_name`, `group_id`, `display_status`, `added_by`, `added_on`, `update_by`, `update_on`) VALUES
(1, 'Moter Damage', 22, NULL, NULL, '2022-09-09', NULL, NULL),
(2, 'Color fede', 22, NULL, NULL, '2022-09-09', NULL, NULL),
(3, 'Compreser Lick', 20, NULL, NULL, '2022-09-15', NULL, NULL),
(4, 'Coper pipe Lick', 20, NULL, NULL, '2022-09-15', NULL, NULL),
(5, 'test', 21, NULL, NULL, '2022-09-25', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `problem_solution_list`
--

CREATE TABLE `problem_solution_list` (
  `solution_id` int(11) NOT NULL,
  `solution_name` varchar(100) COLLATE utf8mb3_swedish_ci DEFAULT NULL,
  `problem_id` int(11) DEFAULT NULL,
  `display_status` tinyint(4) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_on` timestamp NULL DEFAULT current_timestamp(),
  `update_by` int(11) DEFAULT NULL,
  `update_on` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

--
-- Dumping data for table `problem_solution_list`
--

INSERT INTO `problem_solution_list` (`solution_id`, `solution_name`, `problem_id`, `display_status`, `added_by`, `added_on`, `update_by`, `update_on`) VALUES
(1, 'Tem con ban', 2, NULL, NULL, '2022-09-09 08:21:05', NULL, NULL),
(2, 'Kam kOn', 1, NULL, NULL, '2022-09-09 08:21:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_maintenance`
--

CREATE TABLE `service_maintenance` (
  `token_id` int(11) NOT NULL,
  `request_id` int(11) DEFAULT NULL,
  `service_start_date` date DEFAULT NULL,
  `tentative_delivery_date` date DEFAULT NULL,
  `service_status` tinyint(4) DEFAULT 0 COMMENT '0=Under Maintenance, 1= Done, 2=Damage',
  `user_comment` varchar(150) COLLATE utf8mb3_swedish_ci DEFAULT NULL,
  `service_type` tinyint(4) DEFAULT 0 COMMENT '0=Unscheduled Service 1=Schedule Service',
  `additional_parts` tinyint(4) DEFAULT 0 COMMENT '0=No, 1=Yes',
  `servicing_by` varchar(30) COLLATE utf8mb3_swedish_ci DEFAULT NULL,
  `view_status` tinyint(4) DEFAULT 0 COMMENT '0=Unseen, 1=Seen',
  `seen_by` int(11) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_on` timestamp NULL DEFAULT current_timestamp(),
  `update_by` int(11) DEFAULT NULL,
  `update_on` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

--
-- Dumping data for table `service_maintenance`
--

INSERT INTO `service_maintenance` (`token_id`, `request_id`, `service_start_date`, `tentative_delivery_date`, `service_status`, `user_comment`, `service_type`, `additional_parts`, `servicing_by`, `view_status`, `seen_by`, `added_by`, `added_on`, `update_by`, `update_on`) VALUES
(5, 5, '2022-08-26', '2022-08-26', 0, 'sdfds sd sdf', 0, 0, NULL, 0, NULL, NULL, '2022-08-26 10:35:00', NULL, NULL),
(6, 4, '2022-08-31', '2022-08-31', 0, 'erw we rewr wer we', 0, 0, NULL, 0, NULL, NULL, '2022-08-26 10:43:12', NULL, NULL),
(7, 7, '2022-09-10', '2022-09-10', 0, 'tyyt ytttytyty tyy  tyty yty y', 0, 0, NULL, 0, NULL, NULL, '2022-08-26 11:09:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_problem_identify`
--

CREATE TABLE `service_problem_identify` (
  `problem_identifi_id` int(11) NOT NULL,
  `problem_id` int(11) DEFAULT NULL,
  `token_id` int(11) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_on` timestamp NULL DEFAULT current_timestamp(),
  `update_by` int(11) DEFAULT NULL,
  `update_on` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

--
-- Dumping data for table `service_problem_identify`
--

INSERT INTO `service_problem_identify` (`problem_identifi_id`, `problem_id`, `token_id`, `added_by`, `added_on`, `update_by`, `update_on`) VALUES
(5, 3, 6, NULL, '2022-09-14 19:47:31', NULL, NULL),
(6, 4, 5, NULL, '2022-09-14 19:56:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_problem_solution`
--

CREATE TABLE `service_problem_solution` (
  `action_id` int(11) NOT NULL,
  `problem_identifi_id` int(11) NOT NULL DEFAULT 0,
  `solution_id` int(11) DEFAULT NULL,
  `token_id` int(11) DEFAULT NULL,
  `comment` varchar(50) COLLATE utf8mb3_swedish_ci DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_on` timestamp NULL DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_request`
--

CREATE TABLE `service_request` (
  `request_id` int(11) NOT NULL,
  `asset_reg_id` int(11) DEFAULT NULL,
  `problem_date` date DEFAULT NULL,
  `outlet_id` int(11) DEFAULT NULL,
  `com_id` int(11) DEFAULT NULL,
  `user_comment` varchar(150) COLLATE utf8mb3_swedish_ci DEFAULT NULL,
  `token_id` int(11) DEFAULT NULL,
  `view_status` tinyint(4) DEFAULT 0 COMMENT '0=Unseen,1=Seen',
  `seen_by` int(11) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_on` timestamp NULL DEFAULT current_timestamp(),
  `update_by` int(11) DEFAULT NULL,
  `update_on` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

--
-- Dumping data for table `service_request`
--

INSERT INTO `service_request` (`request_id`, `asset_reg_id`, `problem_date`, `outlet_id`, `com_id`, `user_comment`, `token_id`, `view_status`, `seen_by`, `added_by`, `added_on`, `update_by`, `update_on`) VALUES
(4, 9, '2022-08-26', 7, NULL, NULL, 6, 1, NULL, NULL, '2022-08-26 10:28:15', NULL, '2022-08-26 10:43:12'),
(5, 8, NULL, 9, NULL, NULL, 5, 1, NULL, NULL, '2022-08-26 10:29:17', NULL, '2022-08-26 10:35:00'),
(6, 7, '2022-08-26', 6, NULL, 'sdad adasdad', NULL, 1, NULL, NULL, '2022-08-26 10:41:48', NULL, '2022-08-26 11:08:52'),
(7, 5, '2022-08-26', 6, NULL, 'gfgdgdggdg gfdgfdgdg gfd gdgd gfdgdg dfsdfsd fsdfsdf\nsdfsdfsdf sdfsdfsdfsdfsdf sdf sdf sdfsdfsdf sdfsdf', 7, 1, NULL, NULL, '2022-08-26 11:08:37', NULL, '2022-08-26 11:09:22'),
(8, 6, '2022-09-02', 6, NULL, NULL, NULL, 1, NULL, NULL, '2022-09-02 09:32:47', NULL, '2022-09-02 16:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `staff_attendance`
--

CREATE TABLE `staff_attendance` (
  `att_id` decimal(60,0) NOT NULL,
  `att_date` datetime DEFAULT NULL,
  `academic_id` tinyint(4) DEFAULT NULL COMMENT 'Year or Session ID',
  `reg_id` decimal(10,0) DEFAULT NULL COMMENT 'Employee id',
  `att_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 absent , 1 present',
  `reporting_id` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Triggers `staff_attendance`
--
DELIMITER $$
CREATE TRIGGER `staff_attendance_att_id` BEFORE INSERT ON `staff_attendance` FOR EACH ROW begin
	declare max_id decimal(60,0);
    select max(att_id) into max_id from staff_attendance;
    if max_id is not null then
    	set new.att_id = max_id + 1;
    else
		set new.att_id = 1;
	end if;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Oscar Cortez', 'Oscar Cortez', 'lofybafal@mailinator.com', '$2y$10$MCAxd/in39ceR5YcZGjb5.O6xO4MuigGcLrjuIPOuYXNnA0PbWEEO', 1, NULL, '2022-09-29 00:40:53', '2022-09-29 00:40:53'),
(2, 'Yoshio Booth', 'Yoshio Booth', 'pytoxyv@mailinator.com', '$2y$10$k4dQMFy0kX1EwhI7ZAuqmOV8VuxRvv54.rL0jJ/BVYNFpCYvfiAZ.', 1, NULL, '2022-09-29 00:53:45', '2022-09-29 00:53:45'),
(3, 'Roary Maldonado', 'Roary Maldonado', 'hyrake@mailinator.com', '$2y$10$Y0j74B79ESbW8YWXVWt2LOeYrzA59jAqD36yj.RuWiurGKsDc/XQa', 1, NULL, '2022-09-29 01:00:13', '2022-09-29 01:00:13'),
(4, 'Ainsley Wiley', 'Ainsley Wiley', 'korylyqil@mailinator.com', '$2y$10$TXbycl19ubpb6SR1MbDuEeNqixuP9fsQ1FErVni3cELCQ8ijAfMyq', 1, NULL, '2022-09-29 22:53:09', '2022-09-29 22:53:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_calendar`
--
ALTER TABLE `academic_calendar`
  ADD PRIMARY KEY (`hd_id`);

--
-- Indexes for table `academic_calendar_details`
--
ALTER TABLE `academic_calendar_details`
  ADD KEY `hd_id` (`hd_id`);

--
-- Indexes for table `assets_register`
--
ALTER TABLE `assets_register`
  ADD PRIMARY KEY (`asset_reg_id`);

--
-- Indexes for table `asset_group`
--
ALTER TABLE `asset_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `asset_list`
--
ALTER TABLE `asset_list`
  ADD PRIMARY KEY (`asset_id`);

--
-- Indexes for table `asset_parts`
--
ALTER TABLE `asset_parts`
  ADD PRIMARY KEY (`parts_id`);

--
-- Indexes for table `asset_sub_group`
--
ALTER TABLE `asset_sub_group`
  ADD PRIMARY KEY (`sub_group_id`);

--
-- Indexes for table `emp_attendance`
--
ALTER TABLE `emp_attendance`
  ADD PRIMARY KEY (`attend_id`);

--
-- Indexes for table `emp_designation`
--
ALTER TABLE `emp_designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `emp_education`
--
ALTER TABLE `emp_education`
  ADD PRIMARY KEY (`edu_id`);

--
-- Indexes for table `emp_info`
--
ALTER TABLE `emp_info`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `emp_leave_apps`
--
ALTER TABLE `emp_leave_apps`
  ADD PRIMARY KEY (`ela_id`);

--
-- Indexes for table `emp_leave_apps_details`
--
ALTER TABLE `emp_leave_apps_details`
  ADD PRIMARY KEY (`dt_id`),
  ADD KEY `ela_id` (`ela_id`);

--
-- Indexes for table `emp_record_info`
--
ALTER TABLE `emp_record_info`
  ADD PRIMARY KEY (`emp_rec_id`);

--
-- Indexes for table `hr_leave_type`
--
ALTER TABLE `hr_leave_type`
  ADD PRIMARY KEY (`lTypeId`);

--
-- Indexes for table `outlet_agreement`
--
ALTER TABLE `outlet_agreement`
  ADD PRIMARY KEY (`agreement_id`);

--
-- Indexes for table `outlet_info`
--
ALTER TABLE `outlet_info`
  ADD PRIMARY KEY (`outlet_id`);

--
-- Indexes for table `outlet_info2`
--
ALTER TABLE `outlet_info2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem_list`
--
ALTER TABLE `problem_list`
  ADD PRIMARY KEY (`problem_id`);

--
-- Indexes for table `problem_solution_list`
--
ALTER TABLE `problem_solution_list`
  ADD PRIMARY KEY (`solution_id`);

--
-- Indexes for table `service_maintenance`
--
ALTER TABLE `service_maintenance`
  ADD PRIMARY KEY (`token_id`);

--
-- Indexes for table `service_problem_identify`
--
ALTER TABLE `service_problem_identify`
  ADD PRIMARY KEY (`problem_identifi_id`);

--
-- Indexes for table `service_problem_solution`
--
ALTER TABLE `service_problem_solution`
  ADD PRIMARY KEY (`action_id`);

--
-- Indexes for table `service_request`
--
ALTER TABLE `service_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `staff_attendance`
--
ALTER TABLE `staff_attendance`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_calendar`
--
ALTER TABLE `academic_calendar`
  MODIFY `hd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `assets_register`
--
ALTER TABLE `assets_register`
  MODIFY `asset_reg_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `asset_group`
--
ALTER TABLE `asset_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `asset_list`
--
ALTER TABLE `asset_list`
  MODIFY `asset_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `asset_parts`
--
ALTER TABLE `asset_parts`
  MODIFY `parts_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `asset_sub_group`
--
ALTER TABLE `asset_sub_group`
  MODIFY `sub_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `emp_attendance`
--
ALTER TABLE `emp_attendance`
  MODIFY `attend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `emp_designation`
--
ALTER TABLE `emp_designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `emp_education`
--
ALTER TABLE `emp_education`
  MODIFY `edu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `emp_info`
--
ALTER TABLE `emp_info`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `emp_leave_apps`
--
ALTER TABLE `emp_leave_apps`
  MODIFY `ela_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_leave_apps_details`
--
ALTER TABLE `emp_leave_apps_details`
  MODIFY `dt_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_record_info`
--
ALTER TABLE `emp_record_info`
  MODIFY `emp_rec_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `outlet_info`
--
ALTER TABLE `outlet_info`
  MODIFY `outlet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `outlet_info2`
--
ALTER TABLE `outlet_info2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `problem_list`
--
ALTER TABLE `problem_list`
  MODIFY `problem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `problem_solution_list`
--
ALTER TABLE `problem_solution_list`
  MODIFY `solution_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_maintenance`
--
ALTER TABLE `service_maintenance`
  MODIFY `token_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service_problem_identify`
--
ALTER TABLE `service_problem_identify`
  MODIFY `problem_identifi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_problem_solution`
--
ALTER TABLE `service_problem_solution`
  MODIFY `action_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_request`
--
ALTER TABLE `service_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
