-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 10:59 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpacalculate`
--

-- --------------------------------------------------------

--
-- Table structure for table `cgpa`
--

CREATE TABLE `cgpa` (
  `sl_no` bigint(20) UNSIGNED NOT NULL,
  `dept` varchar(30) NOT NULL,
  `s_id` varchar(30) NOT NULL,
  `trimester` varchar(30) NOT NULL,
  `cgpa` varchar(30) NOT NULL,
  `totcredit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Sl_no` int(11) NOT NULL,
  `Course_code` varchar(15) NOT NULL,
  `Course_name` varchar(25) NOT NULL,
  `Credit_hours` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Sl_no`, `Course_code`, `Course_name`, `Credit_hours`) VALUES
(2, 'CSE-101', 'English', 2),
(3, 'CSE-102', 'Bangla', 3),
(4, 'CSE-103', 'Chemistry', 4),
(5, 'CSE-104', 'Math', 5),
(6, 'CSE-121', 'Advance Electronics', 3);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `u_id` varchar(30) NOT NULL,
  `User_name` varchar(25) NOT NULL,
  `User_password` varchar(25) NOT NULL,
  `User_type` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`u_id`, `User_name`, `User_password`, `User_type`, `user_email`) VALUES
('1', 'ayesha', 'ayesha', 'Admin', 'ayesha.suchi123@gmail.com'),
('102', 'mun', 'mun', 'Admin', 'a@gmail.com'),
('103', 'ayesha', 'ayesha', 'Teacher', 'a@gmail.com'),
('122', 'koli', 'koli', 'Teacher', 'ayesha.suchi123@gmail.com'),
('1234', 'kobir', 'kobir', 'Teacher', 'k@gmail.com'),
('2002', 'Maksudul khan', 'mim', 'Teacher', 'maksud@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `sl_no` bigint(20) UNSIGNED NOT NULL,
  `s_id` varchar(30) NOT NULL,
  `trimester` varchar(30) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `assignment` varchar(30) NOT NULL,
  `mid` varchar(30) NOT NULL,
  `final` varchar(30) NOT NULL,
  `attendence` varchar(30) NOT NULL,
  `classTest` varchar(30) NOT NULL,
  `presentation` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `grade` varchar(30) NOT NULL,
  `gradepoint` varchar(30) NOT NULL,
  `c_id` varchar(30) NOT NULL,
  `credit` varchar(30) NOT NULL,
  `totalcr` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`sl_no`, `s_id`, `trimester`, `dept`, `assignment`, `mid`, `final`, `attendence`, `classTest`, `presentation`, `total`, `grade`, `gradepoint`, `c_id`, `credit`, `totalcr`) VALUES
(18, '1', 'FALL-201', 'Science', '8', '20', '30', '10', '10', '5', '83', 'A', '4', 'CSE-101', '2', '8'),
(19, '1', 'FALL-201', 'Science', '10', '15', '27', '10', '10', '5', '77', 'A-', '3.75', 'CSE-102', '3', '11.25'),
(20, '1', 'FALL-201', 'Science', '10', '10', '30', '10', '11', '5', '76', 'A-', '3.75', 'CSE-103', '3', '11.25'),
(21, '1', 'FALL-201', 'Science', '10', '10', '35', '10', '5', '3', '73', 'B+', '3.5', 'CSE-104', '2', '7'),
(22, '1', 'Spring-2017', 'CSE', '10', '20', '30', '10', '10', '5', '85', 'A', '4', 'CSE-101', '2', '8'),
(23, '1', 'Spring-2017', 'Science', '10', '10', '30', '8', '10', '3', '71', 'B+', '3.5', 'CSE-101', '2', '7'),
(24, '121', 'FALL-2017', 'CSE', '10', '15', '20', '5', '10', '4', '64', 'B-', '2.75', 'CSE-101', '2', '5.5'),
(25, '121', 'FALL-2017', 'CSE', '10', '15', '30', '10', '10', '3', '78', 'A-', '3.75', 'CSE-102', '3', '11.25');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Sl_no` int(11) NOT NULL,
  `Student_ID` varchar(18) NOT NULL,
  `GPA` varchar(5) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `trimester` varchar(30) NOT NULL,
  `TotalCr` varchar(30) NOT NULL,
  `gpaTota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Sl_no`, `Student_ID`, `GPA`, `dept`, `trimester`, `TotalCr`, `gpaTota`) VALUES
(136, '121', '3.35', 'CSE', 'FALL-2017', '5', '16.75');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Sl_no` int(11) NOT NULL,
  `ID` varchar(25) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Department` varchar(12) NOT NULL,
  `Semester` varchar(20) NOT NULL,
  `Contact_address` varchar(50) NOT NULL,
  `Phone_no` varchar(25) NOT NULL,
  `course1` varchar(30) NOT NULL,
  `course2` varchar(30) NOT NULL,
  `course3` varchar(30) NOT NULL,
  `course4` varchar(30) NOT NULL,
  `course1Name` varchar(30) NOT NULL,
  `course2Name` varchar(30) NOT NULL,
  `course3Name` varchar(30) NOT NULL,
  `course4Name` varchar(30) NOT NULL,
  `course1Credit` varchar(30) NOT NULL,
  `course2Credit` varchar(30) NOT NULL,
  `course3Credit` varchar(30) NOT NULL,
  `course4Credit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Sl_no`, `ID`, `Name`, `Department`, `Semester`, `Contact_address`, `Phone_no`, `course1`, `course2`, `course3`, `course4`, `course1Name`, `course2Name`, `course3Name`, `course4Name`, `course1Credit`, `course2Credit`, `course3Credit`, `course4Credit`) VALUES
(13, '1', 'Willsy', 'Science', 'FALL-201', 'Maniknagar', '01989958008', 'CSE-101', 'CSE-102', 'CSE-103', 'CSE-104', 'English', 'Bangla', 'Chemistry', 'Math', '2', '3', '3', '2'),
(15, '121', 'Moni', 'CSE', 'FALL-2017', 'ersersem', '009898', 'CSE-101', 'CSE-102', 'CSE-103', 'CSE-104', 'English', 'Bangla', 'Chemistry', 'Math', '2', '3', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Sl_no` int(11) NOT NULL,
  `ID` varchar(25) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Department` varchar(25) NOT NULL,
  `Post` varchar(25) NOT NULL,
  `E_mail` varchar(50) NOT NULL,
  `Contact_address` varchar(80) NOT NULL,
  `Phone_no` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `Sl_no` int(11) NOT NULL,
  `Trimester` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`Sl_no`, `Trimester`) VALUES
(1, 'Spring'),
(2, 'Summer'),
(3, 'Fall');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cgpa`
--
ALTER TABLE `cgpa`
  ADD UNIQUE KEY `sl_no` (`sl_no`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Sl_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD UNIQUE KEY `sl_no` (`sl_no`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`Sl_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Sl_no`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Sl_no`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`Sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cgpa`
--
ALTER TABLE `cgpa`
  MODIFY `sl_no` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `sl_no` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `Sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Sl_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `Sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
