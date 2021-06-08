-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 05:20 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `role` text NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_email`, `a_name`, `a_password`, `role`) VALUES
(1, 'admin@m.com', 'Admin', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking_request`
--

CREATE TABLE `booking_request` (
  `b_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `d_first_name` varchar(255) NOT NULL,
  `d_last_name` varchar(255) NOT NULL,
  `cu_id` int(11) NOT NULL,
  `cu_first_name` varchar(255) NOT NULL,
  `cu_last_name` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `b_date` date NOT NULL,
  `b_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_request`
--

INSERT INTO `booking_request` (`b_id`, `d_id`, `d_first_name`, `d_last_name`, `cu_id`, `cu_first_name`, `cu_last_name`, `p_name`, `b_date`, `b_time`) VALUES
(4, 6, 'Baswana', 'jat', 2, 'Abc', '', 'qwe', '2021-06-04', '10:00'),
(5, 4, 'Gehlot', '', 2, 'Abc', '', 'Lokesh', '2021-06-04', '06:00'),
(6, 6, 'Baswana', '', 2, 'Abc', '', 'Pawan', '2021-06-03', '10:00'),
(7, 6, 'Baswana', '', 2, 'Abc', '', 'daku', '2021-06-05', '05:00'),
(8, 4, 'Gehlot', '', 2, 'Abc', '', 'aman', '2021-06-01', '12:00'),
(9, 4, 'Gehlot', '', 2, 'Abc', '', 'anjali', '2021-06-05', '12:00'),
(10, 3, 'Sharma', '', 2, 'Abc', '', 'patient name', '2021-06-08', '07:00'),
(11, 5, 'Thapa', '', 2, 'Abc', 'Abc', 'Lokesh', '2021-06-08', '07:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `cu_id` int(11) NOT NULL,
  `cu_mail` varchar(255) NOT NULL,
  `cu_first_name` varchar(255) NOT NULL,
  `cu_last_name` varchar(255) NOT NULL,
  `cu_contact` int(10) NOT NULL,
  `cu_gender` varchar(255) NOT NULL,
  `cu_blood` varchar(5) NOT NULL,
  `cu_diseases` varchar(255) NOT NULL,
  `cu_password` varchar(255) NOT NULL,
  `cu_balance` int(11) NOT NULL DEFAULT 0,
  `status` varchar(10) NOT NULL DEFAULT 'Active',
  `role` text NOT NULL DEFAULT 'patient'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`cu_id`, `cu_mail`, `cu_first_name`, `cu_last_name`, `cu_contact`, `cu_gender`, `cu_blood`, `cu_diseases`, `cu_password`, `cu_balance`, `status`, `role`) VALUES
(1, 'asdasd@s.cm', 'a', 'a', 1234567890, 'male', 'A+', '', '11', 0, 'Active', 'patient'),
(2, 'abc@mail.com', 'abc', 'abc', 1234567890, 'female', 'B+', 'no', '12345678', 0, 'Active', 'patient'),
(3, 'abcd@mail.com', 'abc', 'abc', 1234567890, 'male', 'AB+', 'no', '12345678', 0, 'Active', 'patient'),
(4, 'abcde@mail.com', 'abc', 'abc', 1234567890, 'male', 'AB+', 'no', '123456789', 0, 'Active', 'patient'),
(5, 'harry@m.com', 'Harry', 'Potter', 934, 'male', 'O+', 'no', 'harry', 0, 'Active', 'patient'),
(9, 'ron@m.com', 'Ron', 'Wisly', 1234, 'male', 'A+', 'fear', 'ron', 0, 'Active', 'patient');

-- --------------------------------------------------------

--
-- Table structure for table `doc_info`
--

CREATE TABLE `doc_info` (
  `d_id` int(11) NOT NULL,
  `d_req_id` int(11) NOT NULL,
  `d_mail` varchar(255) NOT NULL,
  `d_first_name` varchar(255) NOT NULL,
  `d_last_name` varchar(255) NOT NULL,
  `d_password` varchar(255) NOT NULL,
  `d_address` varchar(255) NOT NULL,
  `d_clinic_address` varchar(255) NOT NULL,
  `d_contact` int(10) NOT NULL,
  `d_specialist` varchar(255) NOT NULL,
  `licence_no` int(11) NOT NULL,
  `d_balance` int(11) NOT NULL DEFAULT 0,
  `self_status` varchar(10) NOT NULL DEFAULT 'A',
  `admin_permission` varchar(10) NOT NULL DEFAULT 'G',
  `role` varchar(6) NOT NULL DEFAULT 'doctor'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_info`
--

INSERT INTO `doc_info` (`d_id`, `d_req_id`, `d_mail`, `d_first_name`, `d_last_name`, `d_password`, `d_address`, `d_clinic_address`, `d_contact`, `d_specialist`, `licence_no`, `d_balance`, `self_status`, `admin_permission`, `role`) VALUES
(2, 4, 'kashyap@mail.com', 'Ambikesh ', '', 'Ambikesh@123', 'mhow', 'mhow', 123456789, 'Child Specialist', 121456789, 0, 'A', 'G', 'doctor'),
(3, 7, 'sharma@mail.com', 'Sharma', '', 'sharma@123', 'indore', 'indore', 145632879, 'Cancer Specialist', 145236987, 0, 'A', 'G', 'doctor'),
(4, 5, 'gehlot@mail.com', 'Gehlot', '', 'gehlot@123', 'ikkavan', 'marimata', 454689123, 'Woman Specialist', 145632987, 0, 'A', 'G', 'doctor'),
(5, 3, 'thapa@mail.com', 'Thapa', '', 'thapa@123', 'Sangam ', 'Sangam', 145632546, 'Cancer Specialist', 456456456, 0, 'A', 'G', 'doctor'),
(6, 9, 'jat@mail.com', 'Baswana', 'jat', 'jat@123', '155', '155', 123789789, 'Cancer Specialist', 123123123, 0, 'A', 'G', 'doctor'),
(7, 6, 'gupta@mail.com', 'Gupta', '', 'gupta@123', 'ikkavan', 'marimata', 456123456, 'Women Specialist', 478965478, 0, 'A', 'G', 'doctor'),
(11, 8, 'ajay@mail.com', 'Ajay', '', '123456789', 'App 1, abc colony', 'App 1, abc colony', 1212312, 'General Doctor', 123456789, 0, 'NA', 'G', 'doctor'),
(21, 20, 'ajay@mail.co', 'aaa', '', '1111', 'sasd', 'sfs', 1111111111, 'General Doctor', 1234567890, 0, 'A', 'G', 'doctor'),
(22, 24, 'albus@m.com', 'Albus', 'Dubmledore', 'albus', 'Station 9 3/4', 'Hogwarts school of witchcraft', 934, 'General Doctor', 934, 0, 'A', 'G', 'doctor'),
(23, 26, 'snape@m.com', 'Albus', 'Snape', 'snape', 'Station 9 3/4', 'Hogwarts school of witchcraft', 1234, 'Child Specialist', 734, 0, 'A', 'G', 'doctor'),
(24, 25, 'strange@m.com', 'Steven', 'Strange', 'strange', 'marvel', 'avenger', 10000000, 'Cancer Specialist', 10000000, 0, 'A', 'G', 'doctor'),
(25, 28, 'albu@m.com', 'Albus', 'Ron', '123', 'Hogwarts', 'Hogwarts school of witchcraft', 1234, 'Women Specialist', 934, 0, 'A', 'G', 'doctor'),
(26, 27, 'alb@m.com', 'Albus', 'Albus', '123', 'Station 9 3/4', 'Hogwarts school of witchcraft', 1234, 'General Doctor', 734, 0, 'A', 'G', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `doc_reg_req`
--

CREATE TABLE `doc_reg_req` (
  `d_req_id` int(11) NOT NULL,
  `d_mail` varchar(255) NOT NULL,
  `d_first_name` varchar(255) NOT NULL,
  `d_last_name` varchar(255) NOT NULL,
  `d_contact` int(11) NOT NULL,
  `d_local_address` varchar(255) NOT NULL,
  `d_clinic_address` varchar(255) NOT NULL,
  `d_specialist` varchar(255) NOT NULL,
  `license_no` int(11) NOT NULL,
  `d_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_no` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `f_email` varchar(255) NOT NULL,
  `f_feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_no`, `f_name`, `f_email`, `f_feedback`) VALUES
(1, 'asdasd', 'ajay@mail.com', 'asas'),
(6, 'abc', 'ajay@mail.co', 'aaaaa'),
(12, 'Abc', 'abc@mail.com', 'ha  bhai'),
(13, 'Abc', 'abc@mail.com', 'ha  bhai'),
(14, 'Abc', 'abc@mail.com', 'ha  bhai'),
(15, 'Abc', 'abc@mail.com', 'ha  bhai'),
(16, 'Abc', 'abc@mail.com', 'ha  bhai'),
(17, 'Abc', 'abc@mail.com', 'ha  bhai'),
(18, 'Abc', 'abc@mail.com', 'ha  bhai'),
(19, 'Abc', 'abc@mail.com', 'ha  bhai'),
(20, 'Abc', 'abc@mail.com', 'ha  bhai'),
(21, 'Abc', 'abc@mail.com', 'ha  bhai');

-- --------------------------------------------------------

--
-- Table structure for table `footer_contact_info`
--

CREATE TABLE `footer_contact_info` (
  `contact_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `local_no` varchar(11) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `whatsapp_no` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer_contact_info`
--

INSERT INTO `footer_contact_info` (`contact_id`, `email`, `local_no`, `mobile_no`, `whatsapp_no`, `facebook`, `twitter`, `google`, `insta`) VALUES
(1, 'info@docapp.com', '0731-000000', 999999999, 999999999, 'fb-link', 'tw-link', 'ggle-link', 'inst-link');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `a_name` (`a_name`),
  ADD UNIQUE KEY `a_email` (`a_email`);

--
-- Indexes for table `booking_request`
--
ALTER TABLE `booking_request`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`cu_id`),
  ADD UNIQUE KEY `cu_mail` (`cu_mail`);

--
-- Indexes for table `doc_info`
--
ALTER TABLE `doc_info`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `d_mail` (`d_mail`);

--
-- Indexes for table `doc_reg_req`
--
ALTER TABLE `doc_reg_req`
  ADD PRIMARY KEY (`d_req_id`),
  ADD UNIQUE KEY `d_mail` (`d_mail`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_no`);

--
-- Indexes for table `footer_contact_info`
--
ALTER TABLE `footer_contact_info`
  ADD PRIMARY KEY (`contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_request`
--
ALTER TABLE `booking_request`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `cu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doc_info`
--
ALTER TABLE `doc_info`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `doc_reg_req`
--
ALTER TABLE `doc_reg_req`
  MODIFY `d_req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `footer_contact_info`
--
ALTER TABLE `footer_contact_info`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
