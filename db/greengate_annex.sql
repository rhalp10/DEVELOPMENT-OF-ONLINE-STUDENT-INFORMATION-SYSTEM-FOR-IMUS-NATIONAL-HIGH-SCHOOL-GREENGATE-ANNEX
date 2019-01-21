-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 09:15 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greengate_annex`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_record`
--

CREATE TABLE `attendance_record` (
  `attendR_ID` int(11) UNSIGNED NOT NULL,
  `attendR_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_record`
--

INSERT INTO `attendance_record` (`attendR_ID`, `attendR_time`) VALUES
(1, '2019-01-21 06:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `grading_level`
--

CREATE TABLE `grading_level` (
  `grading_ID` int(11) UNSIGNED NOT NULL,
  `grading_Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grading_level`
--

INSERT INTO `grading_level` (`grading_ID`, `grading_Name`) VALUES
(1, 'First'),
(2, 'Second'),
(3, 'Third'),
(4, 'Fourth');

-- --------------------------------------------------------

--
-- Table structure for table `guide_for_rating`
--

CREATE TABLE `guide_for_rating` (
  `gfr_ID` int(11) UNSIGNED NOT NULL,
  `gfr_Char` varchar(1) NOT NULL,
  `gfr_Def` varchar(11) NOT NULL,
  `gfr_Range` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide_for_rating`
--

INSERT INTO `guide_for_rating` (`gfr_ID`, `gfr_Char`, `gfr_Def`, `gfr_Range`) VALUES
(1, 'A', 'Outstanding', '95 - 100'),
(2, 'B', 'Very Good', '88 - 94'),
(3, 'C', 'Good', '83 - 87'),
(4, 'D', 'Fair', '77 - 82'),
(5, 'E', 'Poor', '70 - 76');

-- --------------------------------------------------------

--
-- Table structure for table `record_student_contact`
--

CREATE TABLE `record_student_contact` (
  `rsc_ID` int(11) UNSIGNED NOT NULL COMMENT 'contact_ID',
  `rsd_ID` int(11) UNSIGNED NOT NULL COMMENT 'student_ID',
  `rsc_number` varchar(100) NOT NULL DEFAULT '{ "Home":"", "Work":"", "Mobile":""}' COMMENT 'student_contact_number'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_student_contact`
--

INSERT INTO `record_student_contact` (`rsc_ID`, `rsd_ID`, `rsc_number`) VALUES
(1, 0, '{ \"Home\":\"\", \"Work\":\"\", \"Mobile1\":\"\", \"Mobile2\":\"\" }');

-- --------------------------------------------------------

--
-- Table structure for table `record_student_details`
--

CREATE TABLE `record_student_details` (
  `rsd_ID` int(11) UNSIGNED NOT NULL,
  `rsd_FName` varchar(85) NOT NULL,
  `rsd_MName` varchar(85) NOT NULL,
  `rsd_LName` varchar(85) NOT NULL,
  `suffix_ID` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_student_details`
--

INSERT INTO `record_student_details` (`rsd_ID`, `rsd_FName`, `rsd_MName`, `rsd_LName`, `suffix_ID`) VALUES
(1, 'Sample 1', 'Sample 1', 'Sample 1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ref_suffixname`
--

CREATE TABLE `ref_suffixname` (
  `suffix_ID` int(11) UNSIGNED NOT NULL COMMENT 'Primary Key',
  `suffix` varchar(10) DEFAULT NULL COMMENT 'suffix name position on the last name ',
  `suffix_Name` varchar(50) DEFAULT NULL COMMENT 'suffix description'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_suffixname`
--

INSERT INTO `ref_suffixname` (`suffix_ID`, `suffix`, `suffix_Name`) VALUES
(1, 'N/A', 'Not Applicable'),
(2, 'CFRE', 'Certified Fund Raising Executive'),
(3, 'CLU', 'Chartered Life Underwriter'),
(4, 'CPA', 'Certified Public Accountant'),
(5, 'C.S.C.', 'Congregation of Holy Cross'),
(6, 'C.S.J.', 'Sisters of St. Joseph'),
(7, 'D.C.', 'Doctor of Chiropractic'),
(8, 'D.D.', 'Doctor of Divinity'),
(9, 'D.D.S.', 'Doctor of Dental Surgery'),
(10, 'D.M.D.', 'Doctor of Dental Medicine'),
(11, 'D.O.', 'Doctor of Osteopathy'),
(12, 'D.V.M.', 'Doctor of Veterinary Medicine'),
(13, 'Ed.D.', 'Doctor of Education'),
(14, 'Esq.', 'Esquire'),
(15, 'II', 'The Second'),
(16, 'III', 'The Third'),
(17, 'IV', 'The Fourth'),
(18, 'Inc.', 'Incorporated'),
(19, 'J.D.', 'Juris Doctor'),
(20, 'Jr.', 'Junior'),
(21, 'LL.D.', 'Doctor of Laws'),
(22, 'Ltd.', 'Limited'),
(23, 'M.D.', 'Doctor of Medicine'),
(24, 'O.D.', 'Doctor of Optometry'),
(25, 'O.S.B.', 'Order of St Benedict'),
(26, 'P.C.', 'Past Commander, Police Constable, Post Commander'),
(27, 'P.E.', 'Protestant Episcopal'),
(28, 'Ph.D.', 'Doctor of Philosophy'),
(29, 'Ret.', 'Retired'),
(30, 'R.G.S', 'Sisters of Our Lady of Charity of the Good Shepher'),
(31, 'R.N.', 'Registered Nurse'),
(32, 'R.N.C.', 'Registered Nurse Clinician'),
(33, 'S.H.C.J.', 'Society of Holy Child Jesus'),
(34, 'S.J.', 'Society of Jesus'),
(35, 'S.N.J.M.', 'Sisters of Holy Names of Jesus & Mary'),
(36, 'Sr.', 'Senior'),
(37, 'S.S.M.O.', 'Sister of Saint Mary Order'),
(38, 'USA', 'United States Army'),
(39, 'USAF', 'United States Air Force'),
(40, 'USAFR', 'United States Air Force Reserve'),
(41, 'USAR', 'United States Army Reserve'),
(42, 'USCG', 'United States Coast Guard'),
(43, 'USMC', 'United States Marine Corps'),
(44, 'USMCR', 'United States Marine Corps Reserve'),
(45, 'USN', 'United States Navy'),
(46, 'USNR', 'United States Navy Reserve');

-- --------------------------------------------------------

--
-- Table structure for table `room_section`
--

CREATE TABLE `room_section` (
  `rs_ID` int(11) UNSIGNED NOT NULL,
  `rs_Name` varchar(25) NOT NULL,
  `rs_Level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject_list`
--

CREATE TABLE `subject_list` (
  `subject_ID` int(11) UNSIGNED NOT NULL,
  `subject_Name` varchar(85) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_list`
--

INSERT INTO `subject_list` (`subject_ID`, `subject_Name`) VALUES
(1, 'English'),
(2, 'Mathematics'),
(3, 'Science and Health'),
(4, 'Filipino'),
(5, 'Makabayan');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `acc_ID` int(11) UNSIGNED NOT NULL,
  `acc_Name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `level_ID` tinyint(11) UNSIGNED NOT NULL,
  `level_Name` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`level_ID`, `level_Name`) VALUES
(5, 'Admin'),
(1, 'Guest'),
(3, 'Parent'),
(2, 'Student'),
(4, 'Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_record`
--
ALTER TABLE `attendance_record`
  ADD PRIMARY KEY (`attendR_ID`);

--
-- Indexes for table `grading_level`
--
ALTER TABLE `grading_level`
  ADD PRIMARY KEY (`grading_ID`);

--
-- Indexes for table `guide_for_rating`
--
ALTER TABLE `guide_for_rating`
  ADD PRIMARY KEY (`gfr_ID`),
  ADD UNIQUE KEY `gfr_Char` (`gfr_Char`);

--
-- Indexes for table `record_student_contact`
--
ALTER TABLE `record_student_contact`
  ADD PRIMARY KEY (`rsc_ID`);

--
-- Indexes for table `record_student_details`
--
ALTER TABLE `record_student_details`
  ADD PRIMARY KEY (`rsd_ID`),
  ADD KEY `suffix_ID` (`suffix_ID`);

--
-- Indexes for table `ref_suffixname`
--
ALTER TABLE `ref_suffixname`
  ADD PRIMARY KEY (`suffix_ID`);

--
-- Indexes for table `room_section`
--
ALTER TABLE `room_section`
  ADD PRIMARY KEY (`rs_ID`);

--
-- Indexes for table `subject_list`
--
ALTER TABLE `subject_list`
  ADD PRIMARY KEY (`subject_ID`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`acc_ID`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`level_ID`),
  ADD UNIQUE KEY `level_Name` (`level_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_record`
--
ALTER TABLE `attendance_record`
  MODIFY `attendR_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `grading_level`
--
ALTER TABLE `grading_level`
  MODIFY `grading_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `guide_for_rating`
--
ALTER TABLE `guide_for_rating`
  MODIFY `gfr_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `record_student_contact`
--
ALTER TABLE `record_student_contact`
  MODIFY `rsc_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'contact_ID', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `record_student_details`
--
ALTER TABLE `record_student_details`
  MODIFY `rsd_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ref_suffixname`
--
ALTER TABLE `ref_suffixname`
  MODIFY `suffix_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `room_section`
--
ALTER TABLE `room_section`
  MODIFY `rs_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subject_list`
--
ALTER TABLE `subject_list`
  MODIFY `subject_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `acc_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `level_ID` tinyint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `record_student_details`
--
ALTER TABLE `record_student_details`
  ADD CONSTRAINT `record_student_details_ibfk_1` FOREIGN KEY (`suffix_ID`) REFERENCES `ref_suffixname` (`suffix_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
