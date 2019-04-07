-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 09:19 PM
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
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `admission_ID` int(11) UNSIGNED NOT NULL,
  `admission_Name` varchar(85) DEFAULT NULL,
  `admission_bday` date DEFAULT NULL,
  `admission_age` int(11) DEFAULT NULL,
  `admission_gender` varchar(25) DEFAULT NULL,
  `admission_height` varchar(25) DEFAULT NULL,
  `admission_bmistat` varchar(25) DEFAULT NULL,
  `admission_weight` varchar(25) DEFAULT NULL,
  `admission_address` varchar(255) DEFAULT NULL,
  `admission_house` varchar(25) DEFAULT NULL,
  `admission_parent` varchar(85) DEFAULT NULL,
  `admission_contact` varchar(11) DEFAULT NULL,
  `admission_altcontact` varchar(11) DEFAULT NULL,
  `admission_parentWork` varchar(85) DEFAULT NULL,
  `admission_living` varchar(25) DEFAULT NULL,
  `admission_FeedProgReason` varchar(85) DEFAULT NULL,
  `admission_DewormingReason` varchar(85) DEFAULT NULL,
  `admission_medDecease` varchar(255) DEFAULT NULL,
  `admission_medDeceaseDate` varchar(255) DEFAULT NULL,
  `admission_Status` tinyint(4) DEFAULT '0',
  `yl_ID` int(11) NOT NULL,
  `admission_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`admission_ID`, `admission_Name`, `admission_bday`, `admission_age`, `admission_gender`, `admission_height`, `admission_bmistat`, `admission_weight`, `admission_address`, `admission_house`, `admission_parent`, `admission_contact`, `admission_altcontact`, `admission_parentWork`, `admission_living`, `admission_FeedProgReason`, `admission_DewormingReason`, `admission_medDecease`, `admission_medDeceaseDate`, `admission_Status`, `yl_ID`, `admission_Date`) VALUES
(1, 'asdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2019-04-07 17:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `admission11`
--

CREATE TABLE `admission11` (
  `admission_ID` int(11) UNSIGNED NOT NULL,
  `admission_FName` varchar(85) DEFAULT NULL,
  `admission_MName` varchar(85) DEFAULT NULL,
  `admission_LName` varchar(85) DEFAULT NULL,
  `admission_LSch` varchar(85) DEFAULT NULL,
  `admission_Bday` date DEFAULT NULL,
  `admission_MNum` varchar(11) DEFAULT NULL,
  `sex_ID` int(11) UNSIGNED DEFAULT NULL,
  `admission_Ctzen` varchar(85) DEFAULT NULL,
  `admission_Email` varchar(85) DEFAULT NULL,
  `admission_Date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `admission_Status` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission11`
--

INSERT INTO `admission11` (`admission_ID`, `admission_FName`, `admission_MName`, `admission_LName`, `admission_LSch`, `admission_Bday`, `admission_MNum`, `sex_ID`, `admission_Ctzen`, `admission_Email`, `admission_Date`, `admission_Status`) VALUES
(7, 'Vic', 'B.', 'Aurino', 'TMCNHS', '2003-09-20', '09169158798', 1, 'Filipino', NULL, '2019-03-25 21:32:52', 0),
(8, 'Isay', 'F.', 'Senarillos', 'INHS', '2003-09-20', '09169158798', 2, 'Filipino', NULL, '2019-03-25 21:33:21', 0),
(9, 'Robin', 'E.', 'Amargo', 'FMNHS', '2003-09-20', '09169158798', 1, 'Gambian', NULL, '2019-03-25 21:35:02', 0),
(10, 'Clarinda', 'M.', 'Fortunato', 'LANHS', '2019-03-22', '9169158798', 1, 'Filipino', NULL, '2019-03-25 21:35:19', 1),
(11, 'Xander', 'Senior', 'Grande', 'CVSU', '1999-01-05', '09123456', 1, 'Brazilian', 'Xander@Xander.com', '2019-03-28 00:39:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guide_for_rating`
--

CREATE TABLE `guide_for_rating` (
  `gfr_ID` int(11) UNSIGNED NOT NULL,
  `gfr_Char` varchar(1) NOT NULL,
  `gfr_Name` varchar(11) NOT NULL,
  `gfr_Range` varchar(10) NOT NULL,
  `gfr_Def` varchar(85) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide_for_rating`
--

INSERT INTO `guide_for_rating` (`gfr_ID`, `gfr_Char`, `gfr_Name`, `gfr_Range`, `gfr_Def`) VALUES
(1, 'A', 'Outstanding', '95 - 100', 'Outstanding'),
(2, 'B', 'Very Good', '88 - 94', 'Very Satisfactory '),
(3, 'C', 'Good', '83 - 87', 'Satisfactory'),
(4, 'D', 'Fair', '77 - 82', 'Fairly Satisfactory '),
(5, 'E', 'Poor', '70 - 76', 'Did Not Meet Expectations ');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_ID` int(10) UNSIGNED NOT NULL,
  `news_Title` varchar(85) DEFAULT NULL,
  `news_Content` text,
  `news_Pub` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_ID`, `news_Title`, `news_Content`, `news_Pub`) VALUES
(1, 'Title1', 'Sixteen students from the Nagoya University for Foreign Studies (NUFS) in Japan graduated from a three-week Mobility Program in Adamson in colorful ceremonies held at the Miraculous Medal Garden last March 1, 2019. The program included a short course in English, immersion in offices and communities, participation in university activities, and tours of historical sites. University President Fr. Marcelo V. Manimtim, CM delivered a short message. “I hope you had a good ', '2019-03-21 04:05:05'),
(2, 'Title2', 'Sixteen students from the Nagoya University for Foreign Studies (NUFS) in Japan graduated from a three-week Mobility Program in Adamson in colorful ceremonies held at the Miraculous Medal Garden last March 1, 2019. The program included a short course in English, immersion in offices and communities, participation in university activities, and tours of historical sites. University President Fr. Marcelo V. Manimtim, CM delivered a short message. “I hope you had a good ', '2019-03-21 04:05:08'),
(3, 'Title3', 'Sixteen students from the Nagoya University for Foreign Studies (NUFS) in Japan graduated from a three-week Mobility Program in Adamson in colorful ceremonies held at the Miraculous Medal Garden last March 1, 2019. The program included a short course in English, immersion in offices and communities, participation in university activities, and tours of historical sites. University President Fr. Marcelo V. Manimtim, CM delivered a short message. “I hope you had a good ', '2019-03-21 04:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `page_content`
--

CREATE TABLE `page_content` (
  `page_ID` int(11) UNSIGNED NOT NULL,
  `page_title` varchar(50) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_content`
--

INSERT INTO `page_content` (`page_ID`, `page_title`, `content`) VALUES
(1, 'admin_office', '<h1 itemprop=\"name\"><strong>admin_office</strong></h1>\r\n\r\n<hr />\r\n'),
(2, '404', '\r\n\r\n					<!-- Error title -->\r\n					<div class=\"text-center content-group\">\r\n						<h1 class=\"error-title\">404</h1>\r\n						<h5>Oops, an error has occurred. Page not found!</h5>\r\n					</div>\r\n					<!-- /error title -->\r\n\r\n\r\n					<!-- Error content -->\r\n					<div class=\"row\">\r\n						<div class=\"col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3\">\r\n\r\n								<div class=\"row\">\r\n									<div class=\"col-sm-12\">\r\n										<a href=\"index\" class=\"btn btn-primary btn-block content-group\"><i class=\"icon-circle-left2 position-left\"></i> Go to dashboard</a>\r\n									</div>\r\n								</div>\r\n						</div>\r\n					</div>\r\n					<!-- /error wrapper -->\r\n'),
(3, 'admission_guidelines', '<h1 itemprop=\"name\"><strong>admission_guidelines</strong></h1>\r\n\r\n<hr />\r\n'),
(4, 'admission_requirements', '<h1 itemprop=\"name\"><strong>admission_requirements</strong></h1>\r\n\r\n<hr />\r\n'),
(5, 'boardlist', '<h1 itemprop=\"name\"><strong>Board of Directors and Officers</strong></h1>\r\n\r\n<hr />\r\n<div class=\"panel panel-flat\">\r\n	<div class=\"panel-heading\">\r\n		<h6 class=\"panel-title\"></h6>\r\n	</div>\r\n	\r\n	<div class=\"panel-body\">\r\n		<table class=\"table\">\r\n			<thead>\r\n				<th>\r\n					Name\r\n				</th>\r\n				<th>\r\n					Position\r\n				</th>\r\n			</thead>\r\n			<tbody>\r\n				<tr>\r\n					<td>Rhalp Darren Cabrera</td>\r\n					<td>ADMIN</td>\r\n				</tr>\r\n				<tr>\r\n					<td>Rhalp Darren Cabrera</td>\r\n					<td>ADMIN</td>\r\n				</tr>\r\n				<tr>\r\n					<td>Rhalp Darren Cabrera</td>\r\n					<td>ADMIN</td>\r\n				</tr>\r\n				<tr>\r\n					<td>Rhalp Darren Cabrera</td>\r\n					<td>ADMIN</td>\r\n				</tr>\r\n			</tbody>\r\n\r\n		</table>\r\n	</div>\r\n</div>'),
(6, 'canteen', '<h1 itemprop=\"name\"><strong>canteen</strong></h1>\r\n\r\n<hr />\r\n'),
(7, 'clinic', '<h1 itemprop=\"name\"><strong>clinic</strong></h1>\r\n\r\n<hr />\r\n'),
(8, 'computer_lab', '<h1 itemprop=\"name\"><strong>computer_lab</strong></h1>\r\n\r\n<hr />\r\n'),
(9, 'contact', '<h1 itemprop=\"name\"><strong>Contact</strong></h1>\r\n\r\n<hr />\r\n'),
(10, 'downloadable_forms', '<h1 itemprop=\"name\"><strong>downloadable_forms</strong></h1>\r\n\r\n<hr />\r\n'),
(11, 'enrollment_schedule', '<h1 itemprop=\"name\"><strong>enrollment_schedule</strong></h1>\r\n\r\n<hr />\r\n'),
(12, 'faculty', '<h1 itemprop=\"name\"><strong>faculty</strong></h1>\r\n\r\n<hr />\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `record_parent_details`
--

CREATE TABLE `record_parent_details` (
  `parent_ID` int(11) UNSIGNED NOT NULL,
  `rsd_ID` int(11) UNSIGNED DEFAULT NULL,
  `user_ID` int(11) UNSIGNED DEFAULT NULL,
  `parent_FName` varchar(85) NOT NULL,
  `parent_MName` varchar(85) DEFAULT NULL,
  `parent_LName` varchar(85) DEFAULT NULL,
  `suffix_ID` int(11) UNSIGNED DEFAULT NULL,
  `sex_ID` int(11) UNSIGNED DEFAULT NULL,
  `religion_ID` int(11) UNSIGNED DEFAULT NULL,
  `parent_Contact` varchar(11) DEFAULT NULL,
  `parent_Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_parent_details`
--

INSERT INTO `record_parent_details` (`parent_ID`, `rsd_ID`, `user_ID`, `parent_FName`, `parent_MName`, `parent_LName`, `suffix_ID`, `sex_ID`, `religion_ID`, `parent_Contact`, `parent_Address`) VALUES
(1, 1, 5, 'Amando', 'T.', 'Simson', 16, 1, NULL, '09450133392', 'Carmona Cavite'),
(2, 2, 5, 'Carmelita', 'L.', 'Kingking', 1, 2, NULL, '09450133392', 'addresss1');

-- --------------------------------------------------------

--
-- Table structure for table `record_section`
--

CREATE TABLE `record_section` (
  `recs_ID` int(11) NOT NULL,
  `yl_ID` int(11) DEFAULT NULL,
  `section_ID` int(11) DEFAULT NULL,
  `user_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_section`
--

INSERT INTO `record_section` (`recs_ID`, `yl_ID`, `section_ID`, `user_ID`) VALUES
(1, 4, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `record_student_attendance`
--

CREATE TABLE `record_student_attendance` (
  `attendR_ID` int(11) UNSIGNED NOT NULL,
  `rsd_ID` int(11) UNSIGNED DEFAULT NULL,
  `attendR_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `attendR_Status` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_student_attendance`
--

INSERT INTO `record_student_attendance` (`attendR_ID`, `rsd_ID`, `attendR_time`, `attendR_Status`) VALUES
(1, NULL, '2019-01-21 06:53:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `record_student_details`
--

CREATE TABLE `record_student_details` (
  `rsd_ID` int(11) UNSIGNED NOT NULL,
  `user_ID` int(11) UNSIGNED DEFAULT NULL,
  `rsd_LRN` varchar(25) DEFAULT NULL,
  `rsd_FName` varchar(85) DEFAULT NULL,
  `rsd_MName` varchar(85) DEFAULT NULL,
  `rsd_LName` varchar(85) DEFAULT NULL,
  `suffix_ID` int(11) UNSIGNED DEFAULT NULL,
  `sex_ID` int(11) UNSIGNED DEFAULT NULL,
  `religion_ID` int(11) UNSIGNED DEFAULT NULL,
  `rsd_Contact` varchar(11) DEFAULT NULL,
  `rsd_Address` varchar(255) DEFAULT NULL,
  `ethnic_ID` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_student_details`
--

INSERT INTO `record_student_details` (`rsd_ID`, `user_ID`, `rsd_LRN`, `rsd_FName`, `rsd_MName`, `rsd_LName`, `suffix_ID`, `sex_ID`, `religion_ID`, `rsd_Contact`, `rsd_Address`, `ethnic_ID`) VALUES
(1, 2, '304642110001', 'Jay', 'Laurence', 'Matulac', 1, 1, 1, '09451658894', 'Carmona Cavite', 1),
(2, 3, '304642110002', 'Jones', 'Louie', 'Fetilo', 1, 1, 1, '09651658756', 'Phase1 Extention Malagasang Imus Cavite', 1),
(3, NULL, '304642110456', 'Kristyan', 'C.', 'Saktima', 6, 1, NULL, '09566947823', 'Blk14Lot7 Brgy Aguado Trece', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `record_teacher_detail`
--

CREATE TABLE `record_teacher_detail` (
  `rtd_ID` int(11) UNSIGNED NOT NULL,
  `rtd_EmpID` varchar(25) DEFAULT NULL,
  `rtd_FName` varchar(85) DEFAULT NULL,
  `rtd_MName` varchar(85) DEFAULT NULL,
  `rtd_LName` varchar(85) DEFAULT NULL,
  `suffix_ID` int(11) UNSIGNED DEFAULT NULL,
  `sex_ID` int(11) UNSIGNED DEFAULT NULL,
  `religion_ID` int(11) UNSIGNED DEFAULT NULL,
  `rtd_Contact` varchar(11) DEFAULT NULL,
  `rtd_Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_teacher_detail`
--

INSERT INTO `record_teacher_detail` (`rtd_ID`, `rtd_EmpID`, `rtd_FName`, `rtd_MName`, `rtd_LName`, `suffix_ID`, `sex_ID`, `religion_ID`, `rtd_Contact`, `rtd_Address`) VALUES
(3, '304642110023', 'Antonia', 'Isca', 'Lirico', 6, 2, NULL, '09556947810', 'Imus Cavite');

-- --------------------------------------------------------

--
-- Table structure for table `ref_employee_type`
--

CREATE TABLE `ref_employee_type` (
  `ret_ID` int(11) NOT NULL,
  `ret_Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_employee_type`
--

INSERT INTO `ref_employee_type` (`ret_ID`, `ret_Name`) VALUES
(3, 'Canteen Staff'),
(2, 'CSU'),
(4, 'Office Clerk'),
(1, 'Teacher'),
(5, 'Utility');

-- --------------------------------------------------------

--
-- Table structure for table `ref_ethnic_group`
--

CREATE TABLE `ref_ethnic_group` (
  `ethnic_ID` int(11) UNSIGNED NOT NULL,
  `ethnic_Name` varchar(85) NOT NULL COMMENT 'By Race/Ethnicity'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_ethnic_group`
--

INSERT INTO `ref_ethnic_group` (`ethnic_ID`, `ethnic_Name`) VALUES
(16, 'American Indian/Alaska Native'),
(19, 'Asian  two or more'),
(9, 'Black'),
(8, 'Chinese'),
(2, 'Filipino'),
(18, 'Guamanian/Chamorro'),
(7, 'Hispanic'),
(12, 'Indo-Chinese'),
(4, 'Japanese'),
(13, 'Korean'),
(5, 'Micronesian'),
(11, 'Multiple'),
(1, 'Native Hawaiian'),
(17, 'Other Asian'),
(15, 'Other Pacific Islander'),
(20, 'Pacific Islander two or more'),
(10, 'Portuguese'),
(6, 'Samoan'),
(14, 'Tongan'),
(3, 'White'),
(21, 'White two or more');

-- --------------------------------------------------------

--
-- Table structure for table `ref_grading_level`
--

CREATE TABLE `ref_grading_level` (
  `grading_ID` int(11) UNSIGNED NOT NULL,
  `grading_Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_grading_level`
--

INSERT INTO `ref_grading_level` (`grading_ID`, `grading_Name`) VALUES
(1, 'First'),
(2, 'Second'),
(3, 'Third'),
(4, 'Fourth');

-- --------------------------------------------------------

--
-- Table structure for table `ref_marital_status`
--

CREATE TABLE `ref_marital_status` (
  `marital_ID` int(11) UNSIGNED NOT NULL COMMENT 'Primary Key',
  `marital_Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_marital_status`
--

INSERT INTO `ref_marital_status` (`marital_ID`, `marital_Name`) VALUES
(1, 'Single'),
(2, 'Married'),
(3, 'Widow/er'),
(4, 'Legally Separated'),
(5, 'Annullued');

-- --------------------------------------------------------

--
-- Table structure for table `ref_religion`
--

CREATE TABLE `ref_religion` (
  `religion_ID` int(11) UNSIGNED NOT NULL COMMENT 'Primary Key',
  `religion_Name` varchar(50) DEFAULT NULL COMMENT 'Religion Name'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_religion`
--

INSERT INTO `ref_religion` (`religion_ID`, `religion_Name`) VALUES
(1, 'Ang Dating Daan'),
(2, 'Baptist'),
(3, 'Born Again'),
(4, 'Buddhism'),
(5, 'Roman Catholic'),
(6, 'Christian Protestant'),
(7, 'Iglesia Ni Kristo'),
(8, 'Islam'),
(9, 'Jehovah Witness'),
(10, '\r\n\r\nSeventh Day Adventist'),
(11, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `ref_report`
--

CREATE TABLE `ref_report` (
  `report_ID` int(11) UNSIGNED NOT NULL,
  `report_Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ref_section`
--

CREATE TABLE `ref_section` (
  `section_ID` int(11) UNSIGNED NOT NULL,
  `section_Name` varchar(85) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_section`
--

INSERT INTO `ref_section` (`section_ID`, `section_Name`) VALUES
(1, 'Section 1'),
(2, 'Section 2'),
(3, 'Section 3'),
(4, 'section 4'),
(5, 'Section 5'),
(6, 'section 6'),
(7, 'Section 6'),
(8, 'Section 7');

-- --------------------------------------------------------

--
-- Table structure for table `ref_sex`
--

CREATE TABLE `ref_sex` (
  `sex_ID` int(11) UNSIGNED NOT NULL COMMENT 'Primary Key',
  `sex_Name` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_sex`
--

INSERT INTO `ref_sex` (`sex_ID`, `sex_Name`) VALUES
(1, 'Male'),
(2, 'Female');

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
-- Table structure for table `ref_user_level`
--

CREATE TABLE `ref_user_level` (
  `ulevel_ID` tinyint(11) UNSIGNED NOT NULL,
  `ulevel_Name` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_user_level`
--

INSERT INTO `ref_user_level` (`ulevel_ID`, `ulevel_Name`) VALUES
(1, 'Admin'),
(2, 'Student'),
(3, 'Parent'),
(4, 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `room_section`
--

CREATE TABLE `room_section` (
  `rs_ID` int(11) UNSIGNED NOT NULL,
  `rs_Name` varchar(25) NOT NULL,
  `rs_Level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_section`
--

INSERT INTO `room_section` (`rs_ID`, `rs_Name`, `rs_Level`) VALUES
(1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_ID` int(11) UNSIGNED NOT NULL,
  `semester_start` date NOT NULL,
  `semester_end` date NOT NULL,
  `semester_stat` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_ID`, `semester_start`, `semester_end`, `semester_stat`) VALUES
(1, '2019-02-01', '2020-02-01', 1),
(2, '2020-02-01', '2021-02-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_ID` int(11) UNSIGNED NOT NULL,
  `subject_code` varchar(85) DEFAULT NULL,
  `subject_TItle` varchar(85) DEFAULT NULL,
  `Abbreviation` varchar(85) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_ID`, `subject_code`, `subject_TItle`, `Abbreviation`) VALUES
(1, '201922423', 'Filipino', NULL),
(2, '201922424', 'English', NULL),
(3, '201922425', 'Mathematics', NULL),
(4, '201922426', 'Science', NULL),
(5, '201922427', 'Araling Panlipunan', NULL),
(6, '201922428', 'EPP', 'Edukasyong Pantahanan at Pangkabuhayan'),
(7, '201922429', 'MAPEH', 'Music,Arts,Physical Education,Health'),
(8, '201922430', 'TLE', 'Technology and Livelihood Education');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject_assign`
--

CREATE TABLE `teacher_subject_assign` (
  `tsa_ID` int(11) UNSIGNED NOT NULL,
  `rtd_ID` int(11) UNSIGNED DEFAULT NULL,
  `subject_ID` int(11) UNSIGNED DEFAULT NULL,
  `semester_ID` int(11) UNSIGNED DEFAULT NULL,
  `section_ID` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_subject_assign`
--

INSERT INTO `teacher_subject_assign` (`tsa_ID`, `rtd_ID`, `subject_ID`, `semester_ID`, `section_ID`) VALUES
(1, 1, 1, 1, 1),
(2, 2, 1, 1, 2),
(7, 2, 2, 2, 3),
(9, 3, 8, 1, 4),
(10, 3, 3, 2, 5),
(11, 3, 1, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `user_ID` bigint(20) UNSIGNED NOT NULL,
  `ulevel_ID` tinyint(11) UNSIGNED DEFAULT NULL COMMENT 'user level',
  `user_img` longblob,
  `user_Name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_Pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_Registered` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`user_ID`, `ulevel_ID`, `user_img`, `user_Name`, `user_Pass`, `user_Email`, `user_Registered`, `user_status`) VALUES
(2, 2, 0xffd8ffe000104a46494600010200000100010000ffed009c50686f746f73686f7020332e30003842494d04040000000000801c02670014736c4b55386271714f75657564776e5a6a6a5f4a1c0228006246424d4430313030306162653033303030306565306330303030333131383030303064323138303030306161313930303030383932383030303034643363303030306263343030303030313834323030303039343433303030303337363430303030ffe2021c4943435f50524f46494c450001010000020c6c636d73021000006d6e74725247422058595a2007dc00010019000300290039616373704150504c0000000000000000000000000000000000000000000000000000f6d6000100000000d32d6c636d7300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000a64657363000000fc0000005e637072740000015c0000000b777470740000016800000014626b70740000017c000000147258595a00000190000000146758595a000001a4000000146258595a000001b80000001472545243000001cc0000004067545243000001cc0000004062545243000001cc0000004064657363000000000000000363320000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000074657874000000004642000058595a20000000000000f6d6000100000000d32d58595a20000000000000031600000333000002a458595a200000000000006fa2000038f50000039058595a2000000000000062990000b785000018da58595a2000000000000024a000000f840000b6cf63757276000000000000001a000000cb01c903630592086b0bf6103f15511b3421f1299032183b92460551775ded6b707a0589b19a7cac69bf7dd3c3e930ffffffdb004300090607080706090808080a0a090b0e170f0e0d0d0e1c14151117221e2323211e2020252a352d2527322820202e3f2f3237393c3c3c242d4246413a46353b3c39ffdb0043010a0a0a0e0c0e1b0f0f1b392620263939393939393939393939393939393939393939393939393939393939393939393939393939393939393939393939393939ffc20011080258025803002200011101021101ffc4001b00010002030101000000000000000000000004060203050107ffc4001801010101010100000000000000000000000001020304ffc4001801010101010100000000000000000000000001020304ffda000c03000001110211000001bc00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000d308e9abfa0b3ab1e96657259d868de0000000000000000000000000000000000000000000000e01dde3d6764b222777021ca8b1e2c3b6b7b0b0ebe0e52f460ca9e55fdb56a58763a9c1d66f6e2f6ac00000000000000000000000000000000000000001ae3d10eaf2a06996646c463b991ee5ea3cf4af3d6669d7bc49ef5574c7d2a1d26cf2c2dd60e255af2a45db59f40000000000000000000000000000000000000c72a995a8d9792e2f7d3dcbcf0c9afd37fbab3327be07981b7cc3232f1e468f2469a9776f9def8b5c7edf1a5b7abb62de40000000000000000000000000000000000022fcd2c35a95e7928892bab3d7892fa9be38b3ec12e2b323ba889eca1063f5712b3c9bdf87cd17daee9c68fb35d9ee3e8937df9d75e175e2f2eaf62c0000000000000000000000000000000004693562a5ab3ef4baac3bbccdd7a7afbe2ad9d8e1d6bea737a11978469e576a2549f781d4253dc65f7c6245a5fd034d7cd3debf277962f0b7f3e3f6a5e876a8b7ad64000000000000000000000000000000001f3efa0fcf5573d12f9d8daa279561f71667878a8d2063b22604c3158fcfeb47237539f1ecec356d97cf58c6aa7dcf0af9af936174cecfa2fcdbe99148fa0d1ac55dc16000000000000000000000000000000011295dec65eec49757c581d28fcbd6bbddce3ec93b7e73f2ca7791751d0e6eaf6b29fc1d876fc8d846bcfde7d74b2e6f5492e67b1ba4c6e7d6aa6fd43e69a987d1fe79f464acc8d1aedbc8b9000000000000000000000000000000029ddae176b1a9755b7d1e5e4fb867bccbb2d452dffcaaf565e9b5ee8f3cd50aba1c197aacf67d474177c699e965f76f6e56adecab537a5854ea1dcb876716f35fee15bc3a1074bc0b90000000000000000000000000000001814aeff06cf8d48a07d068471b6ead9a9b1e7a618edf4d7967e1afdcfc3161899e1ef80f4936da4cd96fd9717b58ad3bf097573ba3cad4912a2e6468f875b73b82e40000000000000000000000000000018e428b63abdb71a974eb3738a46cd6d4dcd036e6f0f3c6278c465ef83df7c1ef9e0f376a160992b4675dacab9d8cb6723abcbd3a30f7413977da75db590b00000000000000000000000000000000a0f73973f3aea61c3db156c3adc8d4f7de8dc33aa7f52d6cde0e5da4b1b6eff235f9b3d21c6ea2b83cfb7787cee1fd378fa672b44f66149d5e91e148e7693785e625f66533bb73d61600000000000000000000000000000001c8e05da932f5b973f4cb022e739ab2ec89b797490d3eb3bbdd3e26ef2089de44cd643462b23187197a1cf81074b448dfc8bc7ce46ce669339f22798f2fbdc06babd3af5de749637e700000000000000000000000000000001a770a0cdb4d36593c593265812e16c5e96ce56335dbd95cc8b5c6ab6a2cf178f1d3bb1a2ecb3df3779663d1e7d9224f03c8461dec65cba3b3cbe9448788e04aeaf0352d4379000000000000000000000000000000000021542f95e2afbba361968ab6f24d95af26ac44bd71a5e6cb32c73d51668712f7555d5afae70bdbc54965671b2cd9f262631d468f63773766ab2c63a6400000000000000000000000000000000000397f3fef7125e9d92b773e7d39d5cbad59399a6441de75edd0b24e9f0617aa2fd1ce3daa2c9b3da5dd2952e5e7bb25971a4e996465ac6cc34c8b2c235900000000000000000000000000000000000544f2b7220cb26772f296c3079c95a98eb2ddbfe887cc70df89e5daa1acb7d8fe6df47b3287338c56bcbdfcfa5eee7c6e84be6f89e1d4d9c9b7d998b000000000000000000000000000000000007cb3ea743381df8972cdf9e31cebcf71de79ee4893d4ade159f9ee46e69d918c88b22be9b4a97e165e5c9a9a5b7a15db1542acdcc63900000000000000000000000000000000000002af68ae94bb2ebe4cb0b2f3d1b75e71979e62618e4af72f7a92edb3d0704e8cbe1f44cf3e1fb6cf8b2b18cbe93f31fa75816000000000000000000000000000000000002212da369969e65489dc1911e5621967af233f309a419bdfc3379329173d3a7075f2778dbabcdd7394bd32a57be6511fb3c5d1a9f511600000000000000000000000000000000001861b2b459a9967f9f9aa6c3c33a9f170d27befb6338732d5ae5d12a16a8d91b4707537c2d9e59d0e6fbecbb72f09b6573f359f0e45a8e05ca4359000000000000000000000000000000000000c6b965e3c72f85dee84b4d81d483585938c96ed138fbe597add19ae749eae39d732579cad48103cec6f961aafeb28522ea2b5d5e80000000000000000000000000000000000000000000a357be99f3794f3c367babd2f33be7f65c74ec47e1f0d6c15df3dd616aaadaee6d42c00000000000000000000000000000000000000000000071bb23e5787d1e812c6c760b45baa16fb217cebea5c328c25596b7d62fc2c00000000000000000000000000000000000000000000001ce93c32a1875e3e3766b0d4badacf5c594fadfd4be752c2ea72ec85c058000000000000000000000000000000000000000000000e648e0473644fdfcfb429daf1ceb6713bb9470ee5c7c3b71b055ac32359f9f58fbc34ee0000000000000000000000000000000000000000000000000010675122db8d4752dcbca3cb2e1856f965e3a1f35fa124a14000000000000000000000000000000000000000000000000a35e51f33936ba9cb9459d0c95223c0255efe75f44a962c00000000000000000000000000000000000000000000000002172e6c18f30f46fd6f0ea4ee7f4680000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000fffc4002e1000020201030302050403010100000000020301040005111210135014212022313234152430602333419042ffda0008010000010502ff00cc526ac30afd61c2d5d119fabc67ead9fab646aeac0d4ab962dcb679f9981876a485e3752b0c814bec6069f38143229c467a51cf4a19284c61a8270a984e1d421c1b17519575503c89898f356b5205e113ad12d3bc8452acb2d5d1185abb272751b3381a890cfeaac99fd5270751af816e91e0f64f38c461240b1f5b164fa99575153bcc198ac6c5a65c29e0ac3b04592533fc1b648c67198c4de7af13a9a4f07631622271d5fdea5e3ae425063e52cd95560b571960898723d36cdba47f010f2cff00aa6b1255b5403c200683d1956c1d2644c4c792298187349cdebb7f246146f13edd2b5a657243556d7651b450b33559e4b59b5f0474e519cb3df3fc9910cce2dcd8f279672cde3e191e8871a1959e16d57ebc0e6956794790b2e84248a48ba8a0ca06914e1565ac4077c0aee2cf4762722814cc565464d75e7a55e1d15ce1e9838ca2c0c9e4390513d3de267e6e95dc75dbfe3b75cc4d674ec459478fd62c736f45d733c52a55d238e23b4a951f73f89d556ccb1a7946172594fc1a6da9aedd44601d51de92d78eb0deca48b79fae53a527831c470c3bb1d995e6d3255e3833a977205574c4a2778f85d5c1a36a99d73f810cf5545e1c874a7f7ab78dd6dbed1124542a7397cf15c0f225ab8616f311bf03aab2c8362320a0a3ab922d99eed7343c5df04fd31aa1705cad20c9f6eba5b3b776d238169ce95def1baa4c95eaa999810801746ebac512df87b7c244e0be06814e1254ec079a67ebf0b570d1bb54973d00b89dc1ee56b43232a3ee2fc65c3f53790985f47b77b6ab1e9ac6fedf0b837c4bb94e4f462e665670c8959ab16c16474fa60141c397dc0b89ec3fa22795721924e8edee53f17699daafa7af93606232d3e2baac4f6d7bc5b4d732191644fc4e5c1629f33913bc74b31b4a5c2d825c4e43243ab00a0c0a183ab57895e47d69fe1ccc72d22785af17acb365696ad808b6cd40b89a8810a55ae0fe22e803f78998ceeb37efc6159f7edc4e709cb03232ab0339dc9ce659ccf189f986c92e627089aa91b81bfabad8771206e1e6a68f06247936a7e1efb4d22db53f17aacf2b80520c9cd5fd9b3b9cf18c4ba526ab0b7ac4236e25f06f185b16360abb1364321839dc1cee46c6f5e56974163562d5c57986822572bdb86a4be1674d5932c57fc5ff00eab7bea7e2ff00dbab2a395c3cd58b7b7cb2273eb8244129bbb605d89c1b2259de8c2b2b8c9ba8dfd6acb0ac0331c1b141146775982cf7a64b9088dbab57dc11d8a04a459ac0e505f6a9aa76ae6313943e6d4fc5e9bf35aad1316cfedd4ff3307ac8e719cf9b391e7be770873ba79ce7394f5db10d959d7b1b88cc175db692fb752d988a3f3549f6414ed1a28f26f8a3fb34bfbd5122f9f78d53f2f2336ebbe6f9be6fd263a6d3f0a1843952c2ce7a4e17d2cfe253f969ba7e7b65c53a3af854f145f6e9bf73467d404f21d64367e0fc5ef9bce6f39bce7be6f39bfc0b2e24c49b0116c86166263387853bd34fb55f79cb65dc6a83b6bf1757e592fb973c0f585724f4db3e9d77cdfe3df37eba77cf5c523de78b5135c9a6a6fdcfd8107330971f6c34a4f76c78c9d95760ce0638321663692c1903e910458ad3de781a4960e9891c0453991aeadbb4b8ce019db5e1564164e9f5a70b4b4ce334a2c65372f369cd223f6fb7ee6c8f35a6241333c89b1cccd9f334c9e755115d1e33550eddda85b83c562f25941de8e65be55a4cb195eaa911d0844c60463f8672d21651a447ece63e79fc8716c1bc0e72dcdecdf2bcb44fd5de4e50bbeae3c5ea75fd457d25dfe6b0ae302649863145885077e236fe5e51927960b8ab4f1e344a711f3b6cb3bec368c41336145091ae1f6582991d147f6de3352afe9ecaaefcad142f2c2b8cd078f183cee6772339c6738ce718565625ea5590f19c12291e53933392518761618778318e27e04711ef6e2e7704c149ccd79e6aa4b60c26e041ac96711361b55115d3e31ca172c84e9b478e4ac661abed98b1a38371b1917e73d7c67af5645e44e4584e7ae58616a8191a9e4df74e4bde593dc2c15fcdb471d397ddb37ddc06cd8f9442764ab8053e24591931be5ca4339a5be7c73d20f07d2b15646dcc614aecac3e9ff7da6276da4823223d9b1b16d8111bfd2659b42c88a582e547db8cf9734fe28a4732e398e65c445b60b8a698f14fc1706556bc7baaa1d96aa95326fccf62de89ee86492b9dbb08466e40726473be6f9b74022433506c3914ea32d0dfa6a429eeee96f9584bd60fe5dcff004abd8227a6f9be5bf77790d68f8d6a9a693b3d755ddba8529c6ea091982e33c3628199976d33191d1994dabd902009ba676af2b4a8d94852713f9c05fb8b53c999b17383cdf14de725f36a3e47527426a0465205cb1715cc4e92081aa2ae7f2cc1fdb05d4a77c9cd164a6ae9eb84ea1d23db510fac46cfcaed968ef9bc641410d7f9b56f23ae1ef60328108dbe9aa24fbd0d09964f29f874e0e149e85be23da32f81235057d23fdd8a0858f4a61229d37e6b5e475c4cf289e8ab8f5646a87962db6c64fb752020e9f5ce339a75a08a31aa89d8e96ab8595301f4485dfb809de307bdc4796288619a38ed4fc85dd56608ee58667fdde737e9ca32672728a3d4597256f5bc216d1fa61654e3ea44a0a31d7e1774c0581651d8b604c9677198568473d58710536f1000ac3c838381e58a1daa5f071c28de34e7c56b4fd60e67eec8f6e9f5cf6caa927bf0d72fa0a2e6abd518d752ad15939715dfacba565ac18818f23aaabb77284885dba30d547bf498c8ea5f5dbde2336ce53bf039c2891c4b9a89f5feaabde784570b55e2b58d46c3674cbc4ff2dadb17c4b2bdde51f17d7223df3df7d2c55cdac5405f7f79a74a3b15da948ee3666c3fbbd294f1b9e5753a26f25e90e2cb8a143e3ac749ea05c49830eae0a36648719caef852beec08de768c30c54f6ec7956b01216f54633e08f7eb33d2ba7bcc58f698bfdb588964a2f909ce7dd203cf0860622768e33861be6997e467c85ab01596a6774666061ba9d50cb0e6dd6c8f08eb1ed9bf445573f13a62c72fad2a138e425312b74cf1ee7bfb9e6dec3f4f7c199de7193218a5cb99e3f94726a81a311b46b4f926ac794edb64ed393c3a08f39ec3205341ecc4d142b0ec80e4b1edc304a809ff0027cd80d0957519c0c2288996ce54d3d8f9521498f1e53c44756f645a53e2e1f72dee111ca708a67378d8166dca9598b8528064acae30a5acc2252a09cf6c304f974db23a8cfbf7271356c599aba72d3e48a390e9811e96ce9a132faf09c20ec4729c85ce54ad5a42220626c0e489b30dca4e08587e451544491004c29eab35c5795d2561a5a4d98cfd2ed6469b6f07487ce2f475c62a9575795b558fb925a8b72a69e292d57f3e3a0976ca1ca29f543bc22cbb135529e933b746bc52f7389e5a28ef6bceeb69e362267379ce539ca739ce54b23617925925962e0061c930b342f3d72bc5941012cfa6f1d140d99546a25978edd6c263599b75d0e3dbcf6a1462c89090166d19c73422f9b2dd71b2935928fae865b33cfdaa8ab42f49a1bd3438f9fa6a953bebeba516d77fa05daa3694624079a2af8d7ebaad3e13d34c8def79f7396802d5a265e8b2f6fa37605eb08146a35dd3d2620a2e23d358cd117bb7cf5cb815a23fc8531b4a9f3805058d1e40411035ed15495301a19a82ec5bcfd3ede521b08507737f39625f11fa7d9370e9ce8cfd3d98741d9e8ede7a3b39144f19a7c94274e34e2d7c3fa432dd759c5caf20376b194deab13ebeae7acaf21ebeae7afab825043fd0b52fce5fe0d4fca3ff006053b0c02435144008c8a2626a7e2ff42d4627d6f19ca9f94697770824657f83a5fe6dafc9a9f8bfd0f56fc2a931eaceed8e6c69348263d06f19bc654fc5fe87699000878cc8591331b30424f85b3bf1b2454d18f68fe877d44c05a99b2e9b56df45234ceab48bb167b7561a13ff0098bfffc40026110002010205040203000000000000000000011102121020405060032130311351417080ffda0008010211013f01fd9b19a08d9a785c7025e77a7583ede57c31eccf54a9c249c7b167d6574b5ef4eb0a54b1a643219041696972592976b3afd5be2351384b2f65ecbcb9973e10bd0f32c8f5725cfc4f82a5b2a2206a36159246e719d7da24554c6c8aafb2f43aa784dac6b6342ae947c887d4a59547e3f917ffc4002411000201030304030100000000000000000001110210401220503031416003137021ffda0008010111013f01fd47fb6d44f0b0409f0d0279d24da4926ec59923bc5d3cc6f7cec4e2cf218b645a08bc1022ac865378d9040dda443c8653d276479163b174e042c8777541a9937935315679cd7dba0a9d9dca5465e946946934a23648ec9f0cbbe5d42e92cc8e92f459e164ee2d8b3649208db194c5782491708e934fa56a44f08e967d62f8ea429f3e9ebf76ffc400461000010203040509060305070501000000010002031121123141511022326171041320234250528191336272a1b1d13060c1148292e1f0243440435363907383a2a3b2f1ffda0008010000063f02ff008c5d688d1c4af693e015038aa413eabfbbbbd7f92f60e5563c2bdcde216a3daee07bfe64c82d59bf85cbaa01833537467bc6e9b97b28878b805ec618e266b684b705b6e5b4e5571f557cc2a4be8a8e3e6b6891beaacc7161d9e0a62a3bee50a4e39e0a6f71f3fd02d514ff0051ff00a0439c734b878aa7c82935911df25a905a3899ada03e1929d988f3ef44fe481e69b4deb5a0fcd6b3228e0415edacfc41757118fe055cae91dcb585a1e20a709d36646e41afeadfbee3df05ce3268461c212862f40cc39dc6e5970fc1b95ca8a56ed0c9f5528ad2c398a856a1b839b98536eab91a597659ae6e34cc3f9b50734cc1c7bd6d443c06254df46e0d0acce4dc87e3c8ab50dc5a5598edb27317298d66e04293aec1cacbeb08dfbb784083307bcc92640274575eeff05bb44da6988cd4dbfbcd2b366792e6229ea8dc72fe5de7fb3378bfedd2bf44e4b656caf66bd995b27a74d01ec350ad36fed372531469f915fb3c4db6dd3c4778ba21c2e45ce3326a7a13bb795ace587ef192d4864fc2c5ecde3d15d0c717216de00c998f9a9d816b35768c151507a2a89f42ed02233ffd531b2e1e8a6291611c10882fb88c8f787342e65fc74d18e3e4b5a0b86f94d5c55663827169a9339b9b5472cff0ae91cc298aef0acb94fa01ae3d53efddbd35fe2196214cfb2897f77be2641126a4e80f7519f5400d166cda57bc0f0b906c316a7e524048ddd03664e3345bca1806f6e01020cc1c474acb8021486b63e5d118c581f354b9db2ac9da653bb99073d62a4b9c70d4170cd5a960ac82899cc94646454a259271c9535575baccf10c14c198e803739b715a82988ec9fb295cfc5a7a1432d161f77d113eb91e83327eaa204ec44d996055696e878f77449e12084b69e643f528345c14a4ace21b33bba56a1d336e0553cfa1698758618156a45ae06f6d082acf28ab708bf754e8c8f922654d2d70c0cd44e131c508ada4ebe698f1da13eed7cae9d91c14f7591a21b67aadff00e93e145a31dac1df7e9db69b2f18fdd5870944187dba16d9489f23b8a38114734e0a706ef065c3eca97e5a69764a9c0ee45b8a737b386984736856710837166af763df88144df5f4fe725244f6b04c60da15fba6bc11ce311e6f56bad0cddfc95687a52ba556917856626d0be4b31a4446d220c7096fdca9438b4a98a1cd75b778869e7a16df69be31f741cdb8ae700aceba60fc013fe377d546878113eec63333356f7487eba1a5d53b47ecb9e8ced770a6651731a1ad38211213acbc7f522ac3c5989967c33542b65ae1e8555910794fe880870dce24de44805ac5ce39cd7b47f999ae7048118a9d5857d960ae569bd5bb75c54a30fdec14c2261c2e701c2e5662b1f09fbf15ed9a38ae7213ed4cebb4035dfc511b939a9a141ffa613efdb7632c78a6efa7763197c80a26c2f0c39fcff9686ef6a9b8cce8d52a511a3ea16d1f35774483715685d8afb192be22c55ca45cce17a94286e30bdfa0f2d058f142b9b310b72a4d4c3ed71a290c114db387c942f8029e6f389cca87dd84e4e51b73583ea8223c2d015da68519d09559792a3d6d2d67aed79053e6e23775ea56227c96aecaa1216dbbd56b8b5c50c06ee87bc2ade2ad0c50f0ba9e683d5a37c53f250e7835338ace53eec2e5ca67933445f2fa7e06d1f5d3b47d55e7d7a37a192a693ea8fa84c2ded1125067d928700112a2c4dddd6ee0bf78051b23228a7701f8b774757d15926c44dfd167b87f5478b906e0d477ab5e333eeb2bfee35738d3221b650210398fc3bfa60e4adb434f3665bd6bd46e569a6634055ba47ea53674ed153379418de09ac1d912eec8bb8844a9765c9b10760fd7fc1b86f9fc95891b32247c902c32c2d371e29d6e56a721a2ea050e1135b22d29e382e74ecb3ebddb181ba6543204c0a38290703684c553e13a8ed970c516baf06ba64151beab59ed53719a931b0dc460bd934792d81e8b602d80ab09be8bd9c952d0f35a8f9f15563bcaba1c7377e811f87f541b8970926037caa9d926c3ecf6be117a2f7d268340a9c13618f3e3ddb6b07843f85dc47f252789432754f84fd8a3103dd6f35cee276b8e7a2675599a935be674d970982a8d03cbf0892dc3cd0de538e6983204ff005f35bdd40836f29ce9d2ed16e151de4a6e94bde6274d965edbfbb3546bb6a158c220979a2d7d611d927b2722ac9697b30cdbb9193ef171099a85ed264437eaa5f8b7aa27cfc25411eecd12a21df2f44eff004c506f45ac999e2552e5139447150c25acc93b3b4a64cc068154e7625dddad8cd9886f35960558e52db4255701f50873718163ee04febf754f309ac9c9c30581572c7a165e4b0e16b15ed1beab566ee01024007100cf4deaae1e65526780421816438806b529ad180511d2d507577a101a45aff31c14982d26b49b4f760a61ae193ed29c28a5edc591aabad63a1b772e661bed07769c5361833963ddae86fd92b9a8b56f65cad7cd4b0cb0565d5c8e6a4221f3aaa869f92ac33ea1561bfd176bd16d11c429db6faa93a2db3eeb5518e3f25264203cd50342daf92d6738f9a92e2a78304ffaf9ae6c1d67dfb820d66cb6f2a6fa64dcd005b6573989c7a05f62d7c213b934433743d939b7bbac3c4c2b4c9b99985aed9f0565a75af13cd4f1178d1c7f52aec26afc512a5212d151b96f54f540358e73b2684db50ec5aa09a74970463bae719f95c139ee3226f3835321b6e25358c16412269eedc9a3a3c9e3b2f2fb27bc35e18e2bc504dc5070366d4ab91528905db8b6e57ff524c2e74e1cf5804793726830cf88b84c295c54cdc2ee8b5ec32736e5c97943766d555ab5cdc3cf1726b21cdd1a21902e2990e17b28746fdd06b7ad8980c0221d52c9af2280f13821c3a3c91bfeecfbc58d96d3d5ae500b21e0cc4a973ecf5527759fb935fd9b92b03bc4e6c96677a24ce7ef5e7829bb53090bd5a18f4027c08f3e66257814c6c2d8028ac43af65a873f10bbdd6d02ead81ab94f13f5568f854368bb407738643b2aba1c0b0b0b735c95b934bbbc9f3bde2c8554e2f95903145a21cc7c0acb61cb7ae69efc355d92b30e6e7139239e27a1c3419dd6a8a332251fd8de34c71c514d3a1c4e72d3309ffedc203bc9acc1adfae805d2adda79dbd847a2b6e1d60c91e9421989a16c546cb85ed404e7bf4738da0882638e8e0345919cf4b1ae1233b972c899becf793634b56564a1a28fb43272ac16ff001291935bb95fa5b69a45a131bf45344e23acd8365321c38736b9d299d361fe47256626b30dc53acdce14e325bf1d036663c46f5acaa4505af256bc6f2eef12ce4f876cfe88da8ce20de3a55d0c86766f770562236613d80cecba53e8419ba5af324a9b48237686f27b3aa6f7644dc8b1e039a704e86d9902a1168825e5be0ac957927281fbb35acc8ade2d56ac3e5e480b0e87c9f17789063449a2e1de2f6785c468644264f035874c39db32915d534346fa953e8b61b66332301a395f2ac5eeb6de0131d989a871a0b9ad7b44b5959bde6ae766743d82fc135915b621b71a200500ef22eecc4aa844b67332aa30f31d31d1c4f052224ad43796ae65ba919faa720312872485aa1c0366706ae75aeea9b4b94dae30998017ae6a29eb0541cfbd990a538b78dc340b77f69d3e9cf4d6f511f16cd252994245be442a6cb0486f4d88c36cb9b6a58233bca3230e132f73ddb49ac68b305946374413efcbbd845852b729119aeb1ec6f0aa7426ccd99555fd0a5556aaba0145e000f877cb244b5b302a4e0148b6ba1d379046c8c3d14ee0a4149b863a21b9d735e09ef62f88e0d6856614e1b3e67f06cce4888976c3f72b2ebae3c13b90b3698ec7c09a6444495da372da905857242edcaaa534204634b9ae386eef1b6ff219a0fb3269130a64c80cd51f6cfb826ad1b85c306a94a64f46ed1a8ca788d029c57179c850205ae6b220d96041f7ce85004eb036668446e522aab21a28a92e2b79f9a905726c3c5c65de167194d5988d0e0a42e42083aad133c5495f21a37eed126024ee568890de64a64736dcddf65322dbb377d9191b6464afe6c7bbf75336471c51643d957a36b1e84960a654820e78b10d010d807781270569d01c186e33536baebc1515d3982ea14313a321a28d2773423d89e57ab4d6cdde2352a4deb1deeddeab59d65be16aa9038a3cc4332f115d6dab5bff00028a6019788ab4fd77fcbbc88cd182edb86e2d70538648f75758f96e95575a35c89861c379fb2a29bd070eb0efc16007a05282ce70e773575cf2e1e1140a53ae4153a96666ae46f738de5c981f3710769a2ef25f22dc8a9834421b6409cd7f967cd6cb7f896cb7f896b4460f9ad78ae770a2d5843cebdebfb472721b165220dcf56590042cccd73b14f3b1b33828bc47d348736f5388e75af7c2b30c17b8dd82d77736dc9ab55b5ccf40ba664e6542b46ec0648bbc2defe117078f98e8e445c57be36868a6890d63922e7de7446f2efe30ee37b4e451638488bc69bf44e13621231605584c1bdc649b6dccd6f085acf32e8463c077fda6d228f9a2d7021c2f074d1466f03a0c334378391461bc49c3a1159989fe40d71ad8385e118712f1f3d314ee1a6db0758cf98e837783f906cdce1b272458f1270bc68744f19e81e510f64ed0d30f77e40b515e1a14a0c07bcefa27457430d2ec26b6100fe4adb029ab452b561d93b4906a0a743ecdede1a2244c84bbfe57c53b2d5cf477973f78bb8056f6549ec3c55139b4ae68322366d02414813120658841ec75a69d0d2ce4a459b89709af63ff00904218e4cd19974446d868184bbf7a86b1c7de324f8cf890dae76555edd838317f793fc2b52383f1357b760f255e57ff00ad5794ba7b8203f6989be68f37ca9cd0726855717bb33f920b1f10070c139e228b2dbca0d6c5049b94b9e6af6cd45fce8b20c895ed9abdb350734cc1a8fc8713cbe8b947c4d507e309ff0011faa0f6439b4dd50a2f3adb337b6555658d2e390441a10a0fc03f21c4d576186e532d3e8a0fc613fa98bb47b0549ec2d3bc4947f8da9bc0a8df19507e01f911dc47d541af6c270e7ced1c95a88fb4547f8daaf57a83f00fc88016871719006e53e6e0b860e63652329c9327c9a1d975999c66e134dfec90ad3ec96d73f24609e4f0e7269a5d7c9177ec8cb13d53fbd66a89e65824e736ec8c9487e4469682e94c102f9112a28912cbdeec038065652fd131d2136160b53c2522a10e6ad449b79c05d7c90708619230c86cf2bc230a42c34cefdad79fd13d8e8726da7383a77ccffc637fffc4002b1001000201030205040301010100000000010011213141516171108191a1f050b1c1d120e1f1603090ffda0008010000013f21ff00e62fb75a4beb3dc3352ff23f339dfc7497dbd645773f37f52ed7a64d5be0769e87993ebee4c1aab412d0b27c2e2a17358dd79b89f1b09da08cfc21acca79d89ca0a9c30de872fa84f6b71863b8fee696f246689c7f79a3f4fd628078baff005012099137fadda54b56e3fb831436a42ade3eb97eff009463f9a4749db51804f783ff00488e43d1f95cb33ca1f4045433aca72a6c33c785e06fc5c210fa2b7b066899aeeb1981a784c91d776a57e8dbb91015ba0bd07eb045f58b1f17aaf7fd44cb4567275eb30434f2df9cd47b7302da8005103c42fc1e43d2275f44516aeb9d66a687c9bca8f9906f2b1ab44b233e41b3310f21690128d8ce7f610a09ac0e1faae006f473d82589c99d83e733454f48947859e84010254fe0171d3c5721c9326819ce88ad1ee6f033cc32fc908a0f945d76653bbb2995cbb07c1d4f89360589a27d4c4b0ad5d88a8db7a1b11f139ffe2b70f1150c0eb6f9466b7cd5d3e398a6bbd365f3982a369a6e735387368ff6f6fa9ee3d5fb7e5fc156d99de5109dae0de8df282bfa45ed666abca751941f8e75093a9e17e3b9e99d37945ee6d1387a4d198c266dd7a758350338f81151d3bf70797d46ae30c397697287675f0b265d251587063e7946740eb2dea3960afe768fcf9d2b2e93c9f77e7db151bcb3f87e7bba0fd49b5dd2b963524a62774576f681e9e8a99954ecdcde8f7fa43b60d5369a03e0a8a96d19f373beb1c0c984741b8cbb6af9efec4e7de535ea153069f502289fe47cf38c7307119e30993ac2dd27a42ef7384cc56a7d7a63c995e8e11d3ccda3adc365d3fc98f820e12fbcc9bea498d7a073e9faf4816349326095e194a945ddb4530338eae0f65f48ba5e0e9e1f2fb7d3c9ce975768ce945ac2dd1322758e7b7f70c1506d16ba41baceb45fdc8acccf57d1667237bc5a9ccb54956a7f04a6ca12b1325e6c35134b38ea79d54124058963fc58992367f0ed3200360ad7a39792612cf178da3642bb791557e9ee4c0e5910343ad68794a84dd76dbf5e5f4eaccfc01f99486ac3fbfb3fa97d92957e088343396b686db94ad0942b830a5d3da066c46932f266f97ae327a43e857d6f342264d13f82cef4cfda5b604dea60e0ceec9e7706a622d19ee72753f815d435bf06a1c84d5727583e01d69c9a9edd982d4f8d76eac7e7a7bd423c2e7ccebf279c201dbebe35fbfd3a932142f8a8ce5c9f8fd042a682896d63bf68243780790beff8fe17e19baad0f80c272c981b8f5f1624629adc3f87ac069ab977eeb2d89b794763b3d74826a0f6f150ca81d7c1eeb6ee3fa8284ebedafebc5b5c11f26180cbe9d9201f6a0a2abd040d3427ccfa6a3b46d746feb72f70b074835f7fb78682ee31a61bfb4ac7807db14fb358042223a24bf07c6870512ece06e4b7a92dbdd9cadcf7977156d1565a908ab747e19da53c7500b87e6665169cbe3eced09ab46514fa787bca686581d1d6e2c5e8d0eab860395834b1a99b37dbe04b7f39fe918aa7069b98e2584dafa36f6fb7d32bff00c83822ab5a7ec7e43d60064d153512b4f5fd4048a8ae6ef27bba405a508bb3d7a335e02ba33f1a98657f927f8d7499c5a5b93c92e28df7dfdbed0ec1218b899d6696ed35b5c4ebddb6b2cdeb00fe62773c29a3afbef59a96647c2b0625598e0ecd9f28d0df91ebc3313c7cdf95fc0604542b53bfafe27c541fefe99dc99d8ff6502ac52eb77ee806dcbc11155457b51a7ba2652409f1a849839be0e60331ab913ec70ed2f1d77d3ad7c749afc74da50af65050fb8fb43e337aa695216c1cbfa8e5f33b1f6d275338c0f9f9816e2c6c7a3de122ee748216277ca23a5fcaa59b3bcc9a17547a87ea10ac6c73eafdcb4130e892c6473729dbde08bd681b3b135886bdf2a68fa0e9ad31a3dcf296f037b333a78e2700ad4143f1a20f3c0b650d5d12ea36157a7778fa60d63508df57f5089caeed3f29965d58b5b7ae7665839b960ae95d65d943b61f2942c2f7d5e476d1e2308270abf7de25d5d3329351f0a78601aca40d948eac78b8e7e7044e2fcad9e5f36892e9ef03d2de51c61d76a993d6ad0554f5313ab7ed2ab497e4f69e660e330c0f65f5f53699aa3f2c4c4e82698c3f3ed514873bd9563f7e52bd3fc641e11e5be411369bf35d9e7e996ea5607963f12c2fe032f0be0059fcc2176d1294cb7a0c4cc597618f49a7d69974c1853b38672084ec7781e3aeb334aa97a0b56fafacd30268a61ef2c90f42693db75a8d1f9336c9e1ac10316b40cc0c02bc7121be71fdb4f3883a02e778d743a7a83e84b79b1fa81cd32b50e3ed75dc8c6015d87499984841b774f6afa5ad16cb2b96ee01f20e8538f6f7863dd7d8878b0e359c0ca74827771d65bafaa9d8c340a4b9b6dbb8dbc30b6aaf77c5e8842d779cb387ea096bfaf1294d169e7afbdfacdb6a7a8649dcd67584da1bce9c7e1f2222f6e4f3960ec4bd76a7abfd7d2fde26a75f692d2d70bd56b3e5808697487cd4f62113a1ef3a9bf1ec9d92fe0c3c43327a4a7867512936f0b9acb2d5baf7ed2d54f15bfa319b4d2475e795d6350f2440f4b44c4747de57b7c2640657c9a7d2c58748abb3f44cc5b07535871182ff00a7c34785cb951783d628d0276bd276bd27512f933a92dccd75cc47c307dd86b988320f8da0bdf5d212075722b9e4808cbb90dd37a6dccd47ac1bb716faa4238d128f3b828ea36c7cca9a756068e0fa62e53567a3320385b9957e8631c6e97b7f6af04bd769496aad61516b72523869e167240ea7acf33d49ae934d4481e62259c4bcca8c64367a899f0028691bdddefe302f8bb152b6c378ccc14d56637dbe1360d88d4181a74259aae297a1a58e8eb1dc777f0fdfd358a3918e2ff4c5e97c5ab51028655a8d925fbd0a346d70aca61dc6b01498eaf68c534bb133ea1caa9b7ddb301b75e58df585a9f49f8a5869bd14ff00362dafa735671b43b149ad20167b08b0c237fd137aec9c9289571ecbdffa4c43740abd1bfb0cc61e6ef72fde3f378c6bf349fe7664fc0f380a596eba6c4d0b580fb4cd826573bbe9b40cd73f67f1eb2d6da6c6da4f9d20d159a986ebb27a3341988914a35bdf15de53d4d1ae9d0e8cd34658f88eea8172bcc7c5d0f5c3bc3c0a0ac03ff123a970446a54d1e7286ad77d894eed0791fec57c8cf3c43906b5131fec74e6371d1a1ceebf9ae91553ae8febe6b444c94ef5f94445a5a621ec908582d2ec6f8f4fa65ae4f3fe481579b6ecb4f6bf686c04d7f8e1e7e352d5aa7fb097daafb40cb4bc360de17484000071e07fe4bce223fa4bb03cd84bd5f8a7ca8bcc2bd820726de678e1e7719c3978e839f57ec4261b5b67bcd415b03d75f5f59449611c30bfadbed9862c2a336805ba7fb08a796791f1fa69e4495afa7f7f59756b52c07e0e90c7626502bdbb7e52b548e55d4eb5c7b4036b93ab3a9cc7d981cbdf3a11d77d275fda759f4995209f72578687c5f87fbe929257400f173a9370b3827b66680600d7e5c7ab0304d19404400401b4ba3d11a6afef88b88da460770964e8c5ba11ab33aa60211b86a31f2230452be663d20f6df942d769993171f27629abf4d0e2c699525d50e33ed997350d347ee5345799e8dbcaa36804be17ee60576af87595fe40b1f8a53f50db1e4fdc3741e78d53d5a84560bd6901a3b7e150bab75a8a3afe801f69f9b462dd5c75cd489973b0839aacff003f71a95d7ead1ed34cfdc568f62047a45e6fae9e7d20b890b0e7fd8ab144b2d601333dd2debd2683565e8e3da6f16e4148ef190cce48377c49aff47d397f0c773b450bf0364c5d2e54a810f09212a18b39042beecaba6ce0f50fc303447c1f6828793eefea2409d5a77fd13c80efd0fdc0419186bca65bb0a40a776d7bc0d13b2354b4d4732940f163431f79af6c5bb71d3ce552c5a5cbd0afbb33038d97d0fee67e1b2e761e7f98fcd97761d8efc79b00c553c47407235405cbbea4e5e28781172cd25c5c4c0483b4edf7fa85a5f5d461f526b253d53bcc59d76cd0bed3246302b5af1de1a782374f4a12e0aa0ba6aaa0bb45583c6757be92f28ef109d9a18407694da166e515925e005f54e28a1c2eded2d5d8e16976d79fda1025ec8fcb495404f2b86b17fc1e71175d34b2dcf7866f0cf474995f863d43f1196765e997ed15180b065f8293bdbd8afdfd473010878d1626156e60ebc7dfb42de698e1eb33c7a83de59389ca760991af6d7cbcc05829b51e40d2e2ac15295e5a01b79c2e247273bef0dc152e642de03994353dcf9b4ae07496f1284dc703b66f3c6b34b7f49fdc22bab067d60ae55a697a003dd96f045b8dd71076d88a1076814f9eb2e363b12ac56b8aeaea33a73e57a7d4b7610ef74f8c2c8362bb400fca972ca0eb9a3e75516dcea0c231894bb6e08e784dd99232869ba8bacaba9cc1972e6348bd892c35867b26f26b7df753cabdfc583378fbc60b74d83ef296f95fec338982a0643a4293595a086d6cb49da7cd5a7f7f525b6d4f9afea502f99a509493460acb9755ac3580e93734b38c5b6cdaa05364b5de56db4339da095b2fbb982591bc04e4615448356af81342e04c6149f6f58af3d7459a79bf62186e5ad515972f80d66ae5cd757e69d3621ed7f52a3acac70de3ef08a44129981f343fb95f31e4a7e201db9941a953bc1b7a4b71376ec8a1ab15c339db8503695fa910700deb5e9e2b8fa8eab921b0300747f4f49966206f0a7bae978101a85726bf69a94056ca6e8e203ad72b741bcd437f7aafc7d44560b52176f47e594838ac008f423b21de8175c4b39221a6659952de50045a7c86bf83ce3826cf4ea44b450adea69c21aba687686c0546000333a98a57e09ed017740f9ccc58415bca54c5379ad75820b4bb5b3b2fcc957b443ec784d036f7fea6f68935e8f9fa842cb41b7d47e3d0cb9acf0f597fb993acbefe00ba406f99e43043c9565d0ff61181ceb33f5154a6d5b5eb15ba30d331d167947882c4b6e6d55c8cd2302fcbaf47b5c75753f51133d95709f2e02bddf04382165f712b1ec10e55d9d6097428383ea4e5186bdf47f7e70f160382e2e5e3ca5f4e26e4aeacc5aac14578dceb6b1b509462006cd6274c77836aa056e2368a143a9a8f797aad59c3d5edef1f42e82bad38096d8d362e33e197ea630990d8d7f7f56b3322efbdde58a7886baf23dd50d5796fc1c8c34f05a22dbd929ca5bb46b4d2e6274545635bbd65c381c621ef292a7587579430f5a82a98c079ccf877aaecd4ff002347ce18b76d5605ac3c9eef58de8914ec61eac7e7ead696162d53a4a74de2ccfb44f44856ab57f9947877f0c733412dd9686b62e9b4c5f021cbab1856ab79a25cfbbe3ecc1d1059d0eacc5e074f0b488ab2e8ebfdb12acc2a4577a43188833ce36012f59a15ec25fd5b56002cb1ea8f954d73af82b39a007331c40a956dbe92b1e4bc794a6182d3cb44f696b1bbddcadfd7ef2802fd2b1b8bfb45a512e98eb9fb787a5f799b81eb7bc10896dab290a91a3b3bd4c9761df7652737e623e5fe50fa8e4339a0d54a910566ad91e9b295504c0a717dc691660dff0007e587c0ab7c2e6b3d0968b75d2663e5ccefe5283e061bb19328e0bd7b73fecba2ebceddc34ab95b6e7ac0ebcd3edcf9c059cdeb38bbbcca1430420698da5a2857456e6c4c6e0233fb459fb704ab0ba59018d8d7e7ea1839df636ef373c34c02000501b4c4720f2b4bec7de58bbe95bcb2a0e857ea54bb29c677874dd7992b3d2374c8ca3503ce9daf594204ee7e52b2add93ec9544d50f4eeed394bb6af8e91466db510ed83643b4777a0862b9d70e90cbd3c2b02b8819050692fd97ce7acc7528afeba4688067438fccb4259efd8f9e72a2bee19f5fa80e8216cbc2ca86df88f69a2f0108209668d10c12c39034d236deb3d35a9558c9d237476f63d58e2a2a959038f84eaa0a7b91ccbc1f7347a5cfb271eaeafcc4b17bd9ec44678d9fb132764726d2e5388a9f074cca6d5894690799786ec4f9da57d1d630f2fa9744550a6c275ecbada286c70b27625634f011f1af54b8d87bc6f171bc020d4457e8993a7ec11f9258d8f9efe50daf88d37f39988e8ed83881baa76369a3dd4ab5844d10f5946bc352f0979b19e4856f9bc43c35bd054d09edb3f13fc64e15e49ec1771e81429289b26f93dfeaabab3b18e1eb1868b851ecbf8974299d73b3f72e93f23097a60971b000e13525f23a87ed88d2d3a029ef3485fb9eb349def9f0f3bc4711d014035534fba4d03f92138797dfebcc31f01ed5e9361995684c14833a47ac0112d160e8cbde987f21d2639f0446f6c11eced3cdfd456ef63c3e3f3faf3398819dba9367c16b6609a095393f018f32528057f485c40540a3c5b660996b6b853c7cfbf73ebf8b80c2e8386626eba83c14d4986a494724f01d9fec64def34fd74fe1d14bd1feffc0562827cc7b424ab49341c9e37f1c3e7a78b1dcd20f43c42e55f89edff000373565f2bf52d536b83c1d4d71f631fbfe1503262d9e7c5fbc3ecff00c077e47bf6e65da4d37feeca12c58f24c36b4e253d1832a9e770a67fa7efa789160291de2e4371cf81113147cffcfafe4b0babaf0bc1d66b90d2df24355ac35dff00d83a676e7e7154d06f7b733122a56164cb680abd3edf685b72be5fd416da0496412e360e87a5fe66bfcfeb32da799eb8189bd9714abd5fd7bfd742f2cbff0009761f6d1aedbd4471d665fbc282eedfe5810b6ec42ebb8b76296143e43f72ab7f65210781d21bfd4a3ebe995eb72b18e66bfc7fc46aa1c510a58381748c76e8672c50ac1a759f3981bd3b80ba4f9ccf9ccabc31393fe0fe174465565b59e7e08f9fe52a926d557ef086d3b037e92cc0e772026e123b33e0f8ff00837b886e1bb22181eab3c18e42a7d41e92fc266997bc015786ff0085e67c5f07fc22acf5fad340bb90063003cdda1ca2942d6935813e83d63468f59f17c1ff0009671d3d5b5b5d8017ca01480ac55c8138cdcaa129b0a6c159f58c7481345342dd1a4cd1c02c94f0daee65f629cb86c61cdd6631f648753f0800000c01ff0009950930242cb72ee3f0b71a28375743fd4be7121b32d662e2d016c67159d20260a4604fa024e3b561952fd2ad348b99b9298ecfff0031bfffda000c03000001110211000010f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf30d7de74f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cc3a851a5a4ca37cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3dbe7d1ec3862355167cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf4b008625e7d3369273f4f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c58781a88e2358ec9005c1d3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf398c9fb8c19b3510cc3579657cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf280fd8e1f7ff003a8c089e6dd3fcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2d05cf3a2862970a0174f1933cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf27494290fd83437c4c53455f7cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3ca3220c90047db74f3e77619483cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cb2f42432413af709329bb1005bcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf23759ee79cb2fddff0080d216cfcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3e458a101ef5a4b9886d6dc91cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2c1775c20788a7152352c583bcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3d5db0361679b7532bdb0fcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2c493ed8a499997b94bc33cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c5ee3884b1251e1757967cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf29dd9d43ef99e942bf4df3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf395790dfb6dcfbd26dbcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf38d3964c4493efd01a6177cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3944acb260a2657a332ab7cf2cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf1f9df5801a30a377d77cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3a84554998ef3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2c7b0d79f34f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3ce4a5bca84f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3b2d0dae37d73cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cfdc2240fcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cbc376393cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3377753cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cffc400221101000202020202030100000000000000010011103121402041506130517071ffda0008010211013f10fe554ca653f00173ed3fcc5be07ba0b9752fcad8420c4aed05fe31a882478ec9c18a952e739a239112fb04ab9a972f35e09713044e7b023af2af04bc1d869807b78dcbcdcbad479e6134eb871178c0cbf0b972af152a0475d8f5e56e472c3534eb847f09818e175c63cc659cb283d409ea5965bfb97296c9460c82f04d4baebd4b814384fea9f54130f4829436c414433ce3038940760c02d3967e9894f7371c04309676462fea5c095865d12eb706d9eb2ebb44f492d5a8e5d459b7869d9ac08d64bc244841b9785d921f802171835da20f8d86372e547b61735e001e6344b95830f64212e2c1cf310c2c53b894c0c616fb23514c13705ee090c59165cb96f74c8d455a8dbc75f03bc3b83f060ba9f5c41e4c0fc082f98054fbd9b4dc4db8d4bf830b95289444af821a83797fbb7fffc4002111010101000202030003010000000000000100111021314020415051617030ffda0008010111013f10ff004ddb5fabbb1822a4403f8a8659d97d0fe067c90c838fb4f1b6ccddada8701e46cb4f6573b976df8027dcff000e71e7c3ece9075ced9f7c11364ce3471e3b1ebac21ac7726d96a0c9df65a83aee47eed7d427a67d65e11ebbbcb84d956302c0963861d5b7627dce3d8f97c77e09a4318e19bec1d5bcbfe4bbd338ef808f5c4044116b4fdf3afe603eeecc67a53df505990efae9a5974e9c6db63c6c0be24dd6f2c1deda138309f7bec246920f9bfa26831003c1c3e20099e7c7d4fb2d964b6f03ca7567649647da32ee7ae30490470f8e721dfb4c9be608e87c079c91b1867b2cbdfcb2259f77379ce1c79936cb0b63dbdb77e0eba218f4de178d7b68b04e2dbe2ede62067880384d8f683483f733df1492d9ac719ef3c64bbd47f3803c47e0e72f07e0edfda407c70c7e03fd497765be2f03757e2972db5b5877f0936cc7f1ddff00a97fffc4002a1001000103030304030101010101000000011100213141516171819150a1b1c110d1f0e1f1602090ffda0008010000013f10ff00f315444cc887bb40c90d24bb847bd4c1d185f6f6a55b16f3fa552e5140d4ce2aac2dd417f294dc6dd327cab3ed13011d4c9ebe50fe46072b53475a312eacf526a38a41e4471b8a2d91a1918ed25bd9a13d609f007cd409039c3b433e6b4186814f9888ad51e8149fcf2faa5e0eec0bec532b349136e415388d77abdaded589ab8243a19a208d693675c8772b0e653aa7337ef939a33e22520708fad2812d82a1ed9a1ba31f1839a9c8dbed0d8818be92c4daf7a1cf2b49492a10c5b10d05ca5100a9041ab32131666006226f45c90b0f9c64f15843dd8f01494eb10cf64d36d109fb3a9ad16849712e0c365cf5a945752a2f7bd31665bdafe9a80ba6c7ef11ef45aa068bc42d6a48d1ff00699646d6f7186804d0903a9a9de4a93b4cb3ae8657275a560d8944f1bd18787d60ff000ce31fb740d6af3fd4b10e7f05eaec3bf448223258200d349328d1ab9724ae10cabb32f978acd0c64aa36bda388ab75835a8d0148969a8b54548898a8873342e47656141dec6864fdc603a34f02d86d7b2d9d9a039117722cf0f5a58a9229dcb76a5d0e6b23b5a753c51a17282d6f6f9299180948fa26bc77431311431ad2a07089eab7df482c9dbecb06a94ee012b33cbabbf504140a5c4df56e6addbb2f35d45ddab473b5104eab440160d0fba9350eb410184d669cfe27b52614a12502e2a28c205a275a070ecaeb52ffdcbd94b77141871c2f2a3e09ab2a6ceb907f6e55adeac3847e9e1b340ed98149372cffd4bd05051f945c44c9ea69d84f4004aaed4c210419e336034a96b7e69a09602571401a9db4a09a9fc0304ed5d6809be2989b58a14648a5b122997bc31f85a50e19266752acfb16a3ad0d4f6abedadef98d1e17a94f40cb37736741678468c3627dedfbd70d138d29d74e4744f2e17d4d988e200db3dcb2e20d5a6eae294c5593145284ab55cd0746d4d9a278bd4db13d2998a32e148302d99fe6cf8a027b0923fa293495d4267e29cc8ea1f3404c1d57d520cef250d8075b56942315348e4f15a904df63d2b55083239a903d8812ac86ab53a2420d3c8cd3f24d372d3570884d4914d417566d026017c50d21bec072d7e1d1f5195f302b9f0f39e25a7a88a72a65a95a715d78a15c2379b1de8a0a8972438d57a52663bc19f1fb4a112d4800896fe95da6219c867457908df0e2d25f460c68e547383b9109241251607085221604248dd652ccdda032cb7f94ea0da40260735301b414369dab40ba3fe56a97a86987cef83f548936ed1f08d36ac4ca53cadfb3442caa008ad9323c3404c1c347b50f5d7bcb6699800350b5223108598a88cdf6b9f01f641d28972224618ce309fd0d5e240b1085c05c2237712694309da464e971384f50392ef41b2b3e0b7568e5a4a8259d0d68aa748b784c4f568464ba268661911d23e6a71320ba0ee1a40151812b7d4a082648a5d06938697a1c512475010de4df92ad53f89a59696cd2b45668d8436135758640d03bedc32714b21e09dc2cf5a27c02f6b3d4fe69e310e21929de346aca862694805c03801b4403c7429ee6bb8dc0af71c0da8c031c220338792e26e730508825c7d382b1990e12c3ba94fc88c6eade5a0c2830ba1441244898b63a72b6d390729e0182b767298a792716084b8e879a81134165db4f66697e40c58c1836656045d69f4fba95d5e96fc4d2d4c0095a8f4b374ded3f311b41a015de640e62cc24a0e543016e226469bf5a48fc8992c8e4d1ac86434ddf22e4a54c12504a2eb013b844c234427b35739ac501950ab34bc8c80e4860ccb7466938cc8fcb2829424b0b429a153a4c1367fa1f4e259a6426c7b1f42818dc038ff007e28900686f70d9b6af194923212d2e38054a3f33d6ac95f36a2a4e09460c0675bd02eba4662b2c898749a856281c4d611b70ad0b2c8c0b177963b252156a990e0de3e3768b14ca244fcbc532d373e1072b71f66e54911580ce0ab7192d22e230abf989a20c485b6ec6f0da926a3f11e53400118d1351d4b3b2559a692a4520f87d07f8d9a8d0bb680501683366a26225102e34b34d2a085d8a7d9f2a1d903b41942462f68d2180a134267803d434938d25e9c211491a0b6e155abf94b9639e424b9852524125d0c7df5abd65408590c93de283f3c2a72036325074553f8597f0c36a08a9dc805dc31c840ebbd3fc9c92364346a734c8d5c530e2131e44c71e83a326366e527cc0b1d45cc30d106d624c66c0b712ea1d41125525c93e7f20dc009505ec7bd5c68d90236664e8eea09358350680fa908cc655dd48cb4b4eb2ff5bf0c943eec83f5423069e26067f21d452ae69814042696cdb668ea834d804f9f4d61d400bc2c3dc97729629c423b60bbcf1058eb76cd1cf54ea6490830808bcc3de8c6520ac91b889e86b05e83738a244751d4a638a9a553431cd4430f118ff84f26446b30517adefd6c215032334b6ead5aca406c540cf04b0b674d85d624914f7431eea8308e8e05125f34764b32703695745a508ef84148f7bbfd8fc209080d924a22080195eebc99b68ed4ad2f8501c868e1e444911a87020248490c9a8967ad404254e8b03d30f253425f35a840ee335090a984b2ba386fad2cacf95f5fbc1e986690917f45d289e5dc1724879e80d0dc815dac6bf751d41a7c87616f635a9e1b04a82919217c9b4521765d063886dc3b752a541ac7b2508ba958c84c39a1405b508f25bf0e7f226e27ee9c9b19ad1c9e11b259a388ecccc4c04cabca91b9704b7a8cff00ca180589d5a8ac32612f5bce80d895d2b4456984d5c20b08116412dc1324386a021dccbdff0079a1a2e200a09b11093ac4508085c08c8f47f06e506281e12d8b9375599233bd852423081b822237111a5770c8d0813da145ece4b3588a92db29e0a79b1cd90a54d270827411ecfd323e6ea53a38f23c505ae488ca5b7420751a4c0c1266697620624a4170a0972b34df541c4170d9625b5b55ab710bca4d0391d4c6d144f0d3640c0174382fa36a7b57b7ec1d188898be6456153bbc1a9f24fb24a0c0e5207caa4830ab517641b6992ed5199c55478100d82c5632c50496185be8e566533052d12136112e19005f4904daa44119174308a49222231d314188d880d2983d4be693906970593de8c2a0a2d5d19624bdd0df5a94af66c9dd8e90ead008a13a82896028b09bfc9133c6307ed6ebb276dcda90463667e1299c540a8583d907881b88270268507581d4d279ada4b8dcd3d91a07981a626278ac7dabd6a4a67435c1126966e14416a8199be3b8357d30d8615ca9503a9489c7be8033dce6692899b8ad4e64011774277161ecd58520567160e851190f618a5e80d9bf62667b23d714b20588a4ba321dc144466baa0d29eeee9796a005a8985f4ad22ea55db12f4a826c465869884c6a976900527430e951cfef01326d16cc413cec55b6ae40b45f520edaeade87443a36942516252d5a18e2c055b584849bc13e29bbd0992aee07371c15190a41b3bd03c8cdc98b0391a56946c084ccc98661331341c4588c246d170e99c7b542fc9363991bcf7f9ad2a5b742df2a4d152a65c21bd1c395625250a55789c5b10609983b4b4c28cb4ba8b207c9e998abd821f6a660765827bb586c240f14f90203b35c440adb36a66c80eb3469812a7596a39ebbd27a849256f383feb49061226f04d9b599d4b50342c1280b811d6cd200cb74b4d309c79194f69a6432c4c8bb0301ade69b628b11102e8445e00e8c9798a6c60409b4264691d3724c889d41c3e63c64a90ba68bf0a0cadcdf63cd187049109c2b67db1508b64a372bc16cc3a9d2808038d7f75151450a989f08609dae5c50446219b37d1e7ee81d84528b825f413aef50902c7f61f1e2b385022d0aeec1b1dea5e0211611838305301d02fa839f766a31db844b0e4c5b53d2c1920095a77782b959690f9508d84eab9a64ec8d73235ba146f3b520b4333b7e24d502a5d8d04aff0001a58b7a1d1fd7a428822214fba5375399a52fff00daf8a424400ca44c3d4ab52b48814623e14e9587ee47ef83c52de89d2678a1730f66ac41b429b45a60c916758c5c2ad046b09c6f2fe294cc0c890f51f9d5462db21ee502ba0319c0c7b80776a2e5ad0d24df6b5ea5508adb568e9340450b01d587faf6a1799efc5308c45e66fef3e96648d7e0a04ce10e8ba3fc9f46121c011c3bd409aa8a8d6f45486d57b1ef3a2aecdc5b1e2b4a9bdff144c2ad102fb152d54a508646cd5e123412d0ff00aabfe052cba3a9531bd02934308c8ecd5e8bd3c91d8fcd4ccda420e23af7284318a095b8d0b9b3151399447cd29aa4e8e005c70279ade15ff3ad4e8613d647b1f75193a3effcd298898eb0b3e17bfa5f3133da95b0087bff00aa8d54006093dc267669e291b3d4a5b9833c93e02a22fbd6aeeef524c493480d2a3389ae6bcd6c1e55963d267e699990539c767e23fed57268ddd2a742941790201d2869ec239b0329df1456148249517604ad0da4bd1851964613868793789251ebc0824ecc6b4d71094d9128bf6fbabf772f8a5a64a11227c0254a7410ca0ce75883bd5f793d66a4bed53518f9b5438456d98227d31124b126209a7da8131423b8e3dab4630edfebfaa410b4e20b52f679bdaf2930cc54704ba281223dea32487065a56040ece4ed462e1def4e9caf4a494229e53ba501fb2a427ca0a48cff0037340e09e8cfc523ee01282e114e2044eb56303bd58626e76a4de224377779b8dfe314fc391a064cc858627514a00b964ac0808b17917698025e44440b82e65449a32720096756a688b4d20cdf8b1d68b4184230588ebf1421037b0bf61ef14ac6d89c2b0edee0dfd36015b0d13ca9a833da80e0e9d2e3762e1ab1519db012b8598e634a49831fead8e1d4b494220246064f70d00620dda618976b0f340496048af8a1c6fd31fdd12fbc85a43859481e0cd5ee008826f267da873013632fb57c330f83f1fb0a29e5621faac1b3fa21a96ed8df9a9910d02fe4fd55c82e271fb1dca89010628032c82ad0942c6e803481b3984b26c6745f19a9c90ba2219f7978abe90105648cf818733458048ae2277eeb4052ef0dcd07b1b4f5a72ea0eb82dbab7e78a8c1143d6cbe8e03d349a01a459b07ec9a2cf0a40b9c7c91e46961de18aca42f288889ba2d4082b420108640333009961a681a323808360024708dd91a750d87051044d944f42819baee50321f8238518c366a06fc0406d6a8b46d8a48ff00e5a8a1083a8c529458888099351c334cec303ad87dc6823bda049eeaa1f8893e961f6284c4df7cb12f6095742696e092121e4d85c6fa62b61d78b6ab38b58ba074255dcbeedbc3218740b91a683249b44d9bda30f5bb5fb92e2094912d1c34a1506eb25ad9f4c5cd0885ecb3d4f70a1136cd24451dc968750430c98472d00b81b83400c14bdf5bb5a6061d9d1558201cb7642219717cd2621a86d02c207328b646e9136890008038a0fc8fc2c77fccd4953c50191d4d6543e55164ff001a526ab25e2ffba547295d53f6adb65ef1490b5b4b2009c272e46a12909961129dae5b26cb203c95991892cab1617ea966268132d9846522ddb229aa5e684387a269dcbda8525b00e5b97a9f4d916802f2aaa737ab5320e811eef9517f4c8e00b0994a8c4e1c9c0a76118b95218338ba470548730d58a43ab0110e8a943c8585593416c1264919a769a528293b8b99a5e85e6a1094e9fb51b2761fba1343ad393e5f8e4bd289004d5491733092497a468224261397a80774a7f6c720435452f8074290488e58282dd9dcf6a9c93e13d8968c7a3fd9148063c88b2de002096858b11000c52b4431984126f2c1e2ac0632445d7aaaabd6a0f44c03db63a5de291190aca8e42ff71310a519a84c92de1483a746a474b825b82f6672734def2427a92ce995ef56b286f94824842f3a04da90a19a9059558d33e9b68bd064d44d9184e4a5400c359102dc949917522485758012320b1a8bf4a64571c72e535396b9a3065b34419e830f41d68c0558084bc5a6e5fd95601a4aad10bc9a50867428a0db342a12bac9f158c3d7bfde824aff006c451126880cb1b4d1f1ca1520d06e1799ec50a259cb0f757da8425a5be0595835377ad0e92bb29a6d1b9448b1c229bc0bb3ad446e393c3631d6d414c42202659fb7b2b232a44ec1f22a4d5d9a96b23ada75a6b8032328e7c387193aaa604c80b6d34912ec30e915ae869a5c05e27cb968944de20089816d404adaf762a4a6b8baa1ecf352dcb2f3568b9d6a04045d0a7c84c1041d60c874a1100c832b13cc83a26cfa71524b859775a3ff00192a576161583ce75b9cd47031da3faa74b684c4697b2330c3a9b548002468c09d46921124ed41f64a50e2016d53e950989ed2447cd0bbed449823a96fd941a897124481f2e81da67318557ea36ae4cd860a4e13537d88bb71869d4566068e9e6acc4232b29e998f14518018b12505f327a54ba8898b6e745e4c9407ab05a56d3e78ad1488c5242475578a94a937a2046ac0437a95a07453c3702c22eb0434f5214d8017916eda6fde8f6452eeb352ec9493109ea363dda38ed15f8faaba09cb9a81860b74a6fa16e8ae2b360c22b7225c7a86cf1ccfe06a6b64d0957486bece486410cdbb9466a17c066f96808e2218802e1353a3c5180ab408701d669661a66dd22d74898331044cd2234621d50b4e550b7640806dd0835b988c7b501acad0dd705a55579686b2b0dc4a51043346e82f68a1a16223b6d4a0a569c36784b3deb5bad0dc975d1653648ac710771602c9bde116ab173237216c0584c6176a864a95d8421182046ba4ea221eca015acc06fcd97780a8b58bd916ec72b52d312cdbf6542ca5df697c43bd682009ef76a6404a47343be9565d6f426b7a7a9320dc12f515f40146801d5420e286e100a3692b875d5d94a212c9613e307b3463125a0f2021a080184cfb85ea9de8e56724242c97946f438394fc5124b13789b453100440ae40763a378a815a9b24940635fb6afb2050a9cf5a06f50d0121d3356f702965888ae4c5e06e2d13495051c37433ad3e5421010824632aec94c92548bcfe7aad571e086e072aef9a8fad81d27fba26ff003145f2d66f15bb057ecf9a8925094aad05940de196a4d024892c6b53a06faae9566b6578598059c69b9766a3352bbbc87a8d2735379407057133a012ba6f14a416e1daed2a3aef6401a5d9b36c4dafbd0c10c00d795d9a1beccdf21397bd10c5817917c5e11882388bd38b7530322d8d32e714b848c44de1c4eb5051497463ad1a0c88ea5144d4e679a7720601da841862b82131c4abd56a11e2162c2aeb004670d1fc80053b1bfeed0803139eafeeb440821d59a490225a28c2c5c25c6b3500226902004ac56fe400dc622df141b39e834fb3d49a6b39cc1f63e5a81c900a18fe68b40dcd496b3a331574551ef46c6a302890651911df8ac8de022cc0c4c085afff0034c4b2304b315006e34a59045d46935d278a031b98a84c2ba276a831977dd7898ed4ca49d1b2e89b1c31712840e06194d58025e00fc23594b220e39baaf0922c6d5273d04eb504f296b5ccb1e21ef4a0d8cd2e4e763324b11a50ef4ab202437e29642d68915ba5b114a289e017fb1ea485021cc4996c360ee46a5112b7205dcd299008e9450a12018f9fda828dc487857cd7760b49d5fa0a12a038356956f0fa28e06cb7a28849b02dc4f25b2492135800a4524617fda0a33b6060283c4e5ddd832d988366a460497744807df3c7e57089ee98fac26690cbc1bd31ce4bb989a0638b1880087dcec53ba2010940f13a57ce9d69dc0914534809882467111156a6cca25a84eae5988c55815400e423628d2649290b7993a1f51329a5bd187413b0e8366835af10a21100846ac4b0dca1c0a037cd6a05e68d5239686b17e0a4552d16457275a554874291dda0cd1df42cc2689b94755d52424562d33b7b628062cb4200734f248454d9fefba208993be8bba478a0ac18007b9f807493f0bab188b5ff00468c59c2c82940c84cfb216d89767341ae810085c10b0e730d279e918f668b9bb4467776a46c9708972c0c983f54de4c9c021b1d7331a11376800804581ea24b4a98eb023e2ac0b2ce0095e94914134d058d9203bc69a9704b752ba076ab682f66a5e106f4446e189a2e4b8a608374880887fc4b4198d83ea2063a2fd69cba48ca99569c489488d9a692901e6b718322fba614d50182915d2e9124098b58e52940aa0195a94ccb16f2cff368ab4b2fea0fdd082a24593090371721cf178f8435cf96fa1838e57f072886b128213a4c44f349feda0bb2455be0ce6c8f518f80203d4a340140b4487d8a098633acc8750a475d334c68cb8be3293a83daa7a474a9d4927a05a80b2db63f1139c5494366c6af813b36a8d0b6ea5da27242e6d4718f400b4bcb760dbaff00b496cd9463f7519468802600e72f9ab7353779a35602442c88ce52538632c8b32086b74962e4a9d786436400574b5492845c06f04cbb1075cb1288a087990b42d8c8e2cfab2905a060c4bbac80e2748509a8ac9fdc53db01318ae962fcc78a6b1a3f0020095315284e62f5a5032a014da08d5480e51350d966d89a452492410bd6988947d655891700be4177a628ce0e2e5640152b7225495654994805f04eb47269c8c88c89dcb3275a417b9cecc91621f225d281c0d8170ba1551aabf55125e76416e779769de5604852484d3b2a94f17cf1eac4685dac1514d86ee6dc91799964a5c068f769895822b0b040584714d56164c4aa46a20ca0e298c521169a5acbb063bd400486f910d271f3da86e5971fd54ef90978a4489d81292258d5ab180c705f443310ad0cc1e2400554b16319e2a501c288c248d62815e981891b25090c37d14bf7550d53f543e528116ebc4669cec00fad9b06d5812408b889cd1c9109b02af8f56ce541f8032ae81769e98ac17bd27b4bf3a52324a9655655dda8a216cf5c5485a9c9ad4ec37541c8ee4d180cce9bd482c9a526dec011324aee90331949a181e2b4321d144ba346f44158c7d9123ca8f8684144ce9d0519c1bd189411205f0289312cd998a9a30eaddddb74a964b32580e7c485ba344805433a1be038f9a9f84c881636fa0995be0c931e4588aaf199798a81045618b4af0e999f2d26931295605d4d074c3a47a82f8261728d0ec2cf14ca19ec801b86226337be90a6af2180dd5c52e866a07c3dd5112eb970b1d5d5cb820a4d12977e3a539e34a60e678a92c6dd7152940701a0a23ca95948756a11d3caf855fb0d75a259fbfb874a8002e314dc05f918b8df44d88ab903615730dba26d514e1f21d327a31d29c08521515606b0049e1a9c13660b3cf0d4d89eaacf02b014116d29ae0848fb79a174404926a05efaa05e2f6a880a80210443c9b602d1e70156f30bf21af572f4a3170b416cbda92c281650525e25edea09e600068042f80ca40b2de30d33484838771c8f4a29ea0200600d0ab4512e1cc374027768534d330917dc4e99bb7e8b4a71b4012113d569de66eb36a8d2c320308818d884b70d16640c8987d521520cacb98ace62606114e0798224f610574a288a9ba2381777839a750b8b6a6e60ef2f3582071216825a853038443944bd875a9d30085dd1957cbbd48316162703a58357cd5e989301678a90224b53664f721ea54d10bac4ebcd006222a2c0130b18a7ab00791aff00734804a9a223646443240500028810ba58e744c4e2d42d5524a0681d56eb19d29982ae88466f4f96dad0d846c194e572577f509b69f16c12d3b2a60e433904dc926d41cbb8c93a27229cd22775530503a901469058196ebf5cb334a4b3821bd8c1356424c84b4e5dd6f4ea4501a9a6e2f905f0147a3d003f75c25bacb4b958687ecfac1c085335131208793c8938a9789f7426df600d0d4ea51571d8bbd8a3321fd483babc539c973065f39a770743f0555dd2c369a095a1904b8d3812b189ac9c812dad2cb22fa9288b45a584e1db8974a7a20b8de78d4f2f503d489250569a491413855420cc8c6a261e2d495aaa012789b7653bd305cc93e0dc17550eb42eb0e48bc87359d45bc02153441aa4aa04935b3906f182a1c8323764c477b50101f541e3014b46885dcd91ec33bd498a66087847d95671241da3063bc562894503c1fcbd28cb3b8ae6fa7118a990ceea018948382c474b4242898622c262dbe2e2317a4681c0240c69c317d4e9427804b009662fc77ac36739eff7a8dcfd2a5b107760f6a544473263d8f9ad0af45f73ef4827c53c9be50f4f553710896b8e168db4b91248db0d90ee86dc87ad4ed90994f55d795f68c52c32847043516365201676acb7a3462580270b68e1a9cfc5d40e8cbc02a5f3a105637bbc1503a81659cabf88a144dddbe3bf14cb96f422f778fda95d2c05e6b2c212277c60b487636ac042c2f61baeaebd22961dc872803c4f8f5e5548e5ec3e5c3aaa6603eab13dca950c75186a0d4d9b2a0b9b324991a096180e8e9c8d3c64a6193444973bb4b33a8b5da4c0960590f07c4bb66a66225041c1d0dbe6a2db532db4aa378f5e8e2904e8e1e974785a47cbf11f23323844dcfc4abb1b97f6acf8e30d4a2488eb5360d0a37de1b04ecd18d7c047babd8ed4132f2906132be611c7c5342fb49a3db1458e77d6b1f8e27e6027d93d7d15bd7f6568e94a39202139fde1c9506d58d1e75a0dca74a90258ad8891f93c7e1144908948621a9744d45c54fbfc6523456ab47e223ff8bed8736543e63e3ff013471561dcd4e5250e9b815de389f664fce61f9957f241c1605f33cdd4ee6b433f89112169a69e811f27e43ff02b165a3df61e584e8e429f04bebcbecc23a89f816516f3b6f7ff00e11ab706cda785cf37d6c7e2179897d3ff00012224b0bbad8175c03406cc1206810b8750a950503b406199b546260b8614f9a3b42140500161d352906acadb5d892bb33f950241a40d9136abb82be664c1d4b8f49fc5a01d135536edeef5f9fa711129b2713e5461898a29b8a0401c0c4f977bac598d88089e2f74e0a58d14c241c274b5d8c75b50a32cd8561881bb81bebc52a037832eca59ced7a23f11614d425dc379ba26464a9c4cb928f138e22ec59668055cfc64c89a8dcac972d5268e4512e38b037971408272e1c1413a93115b130d3582743ad13ae81d26c88029160c6ef5d577f3100c44429d66e523cca0f8040d08029f40a68e80482770013830f2d5c085c85d916a7d4d0599f69a1f8d77141cfe2f1cf25d7c948588444b88b04433be68b8045c08c3bdbef8a95900002a4ca00099d0d0dbff0011137788c9249a6c950e00f31886dad080a949260c508a38a2c46131b95ff03f4a607840c6031ad7fc0fd2a03e8fd281202384247c7fe0df8ea0900d224b64c1afe590190632c3c212960912cc20e4d1221202e0cb4ba45cf0646bf99b7ff06fe91110f20545852c183ba7e10b00988822c250f83a0f06f00b5aa02055fccd8afe56effc29626305d96a700aba0a2f36d160303b0a541336124b160d56a416c9992bfcc854a6ceca62a5c7ff0008c423a4900b50c8461d82c14d413e0009112e036b849317f49680a1440c8b0758ad612fbe74286f01b39a3108785b05ccc0862586c668c75dc0806185ac8640e22ad3442f2ed8d6e8e6860380400600ff00c25f66220fb05a014904ca549e0b38f54200a2400589320004b326cd1d1d9276a077b090d29a449596bb6a656c051524b421b304629485ee5e31b4c008b75b0c4d5955c880746e726dff00e637ffd9, '304642110001 ', 'M8+Cpt+zltZs3QpomFLRjEFCGvI0VGC+jjJzXH32Mtw=', 'marksebastian@gmail.com', '2019-02-19 17:13:44', 1);
INSERT INTO `user_accounts` (`user_ID`, `ulevel_ID`, `user_img`, `user_Name`, `user_Pass`, `user_Email`, `user_Registered`, `user_status`) VALUES
(3, 2, NULL, '304642110002', 'M8+Cpt+zltZs3QpomFLRjEFCGvI0VGC+jjJzXH32Mtw=', '1', '2019-02-19 17:21:46', 0);
INSERT INTO `user_accounts` (`user_ID`, `ulevel_ID`, `user_img`, `user_Name`, `user_Pass`, `user_Email`, `user_Registered`, `user_status`) VALUES
(4, 1, 0xffd8ffe000104a46494600010200000100010000ffed009c50686f746f73686f7020332e30003842494d04040000000000801c026700146e49433636594e53636f7a4b48422d4245516b4a1c0228006246424d4430313030306162653033303030303530306530303030316231633030303064383164303030303433316630303030653733313030303065333463303030303530353130303030623235333030303034323536303030303264383930303030ffe2021c4943435f50524f46494c450001010000020c6c636d73021000006d6e74725247422058595a2007dc00010019000300290039616373704150504c0000000000000000000000000000000000000000000000000000f6d6000100000000d32d6c636d7300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000a64657363000000fc0000005e637072740000015c0000000b777470740000016800000014626b70740000017c000000147258595a00000190000000146758595a000001a4000000146258595a000001b80000001472545243000001cc0000004067545243000001cc0000004062545243000001cc0000004064657363000000000000000363320000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000074657874000000004642000058595a20000000000000f6d6000100000000d32d58595a20000000000000031600000333000002a458595a200000000000006fa2000038f50000039058595a2000000000000062990000b785000018da58595a2000000000000024a000000f840000b6cf63757276000000000000001a000000cb01c903630592086b0bf6103f15511b3421f1299032183b92460551775ded6b707a0589b19a7cac69bf7dd3c3e930ffffffdb004300090607080706090808080a0a090b0e170f0e0d0d0e1c14151117221e2323211e2020252a352d2527322820202e3f2f3237393c3c3c242d4246413a46353b3c39ffdb0043010a0a0a0e0c0e1b0f0f1b392620263939393939393939393939393939393939393939393939393939393939393939393939393939393939393939393939393939ffc20011080258025803002200011101021101ffc4001b00010002030101000000000000000000000004050203060107ffc4001801010101010100000000000000000000000001020304ffc4001801010101010100000000000000000000000001020304ffda000c03000001110211000001ee0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000d66c55433a1725acec5c7e475ce5249d12a2c4dc0000000000000000000000000000000000000000000005396b47cb6165956c8d9517d95e1a5b3130f321e649d2c58f65e10ec61443afb9f9d7a7d19ccf47198000000000000000000000000000000000002bf289cd7b29a5c492a1da5854195bf3c585aecbcaadca47b66bf647b9d45d56191ce47ea605953eebc7536c693ac8967055be3dee29636df39eae2db79280000000000000000000000000000000068f7c8125b14b6d0cdafbca918d5dd6358ec317c7beaeaf3679679efbe9e6665e78f2b5f3bd361a9c5e76753d73b424fb3e7652d851f475927533787ee25000000000000000000000000000000000e6a965cbbd2357c8da479dae4cef0ba7e73a3cf9cd79f3be807b0d5b7caf7113c30acf18f22b1e63a2e7f6839cdc368f69a3cbd37cda9bb9c399ed39e49d90940000000000000000000000000000000f9ee76d235aa2ca2cc591b61e0eb36fe3ede5cb0d90e4c6d78cbd3c3d7822c98733479ee31e78f29437b0f72a74eff003b6f66a81ecc5a4ca2e9733de63a4a099fa06557692800000000000000000000000000000186638becbe7b57d3f5ecc6b2d6ca3d85841d4b9d866eccb4e59bb3cf3133622333e6b73a953cd497af2884af75e650cab5c35396f2ea935171533e597066e9895d3f15daa0280000000000000000000000000001af2cb9c2d38fea39cb2fbdd68cf3d458555b356a7412aba573d6ecb4fa6ec4963c3dd2ec8951d1d16a45cb293753fca696cc9b1a6b7cb2f3d461ce74d03528a5c4cf56df1cb1883ddf03df4000000000000000000000000000000014b41d073d65d1ea790bd88de1afa385cfae5aa04ae9c26ec8f9c92da364d675767a48955694fa58cda6f71d6feb61fb0bea6b2de25bc6739619615cd7b3e074e7b2c2bac2581def09dde740a00000000000000000000000000000159c8f79f3babdcbc8640e9a832c749712e664727774fb7a73bbaa995c5d7b5d399cd864903d9d54d5af372f5dcdd69f2db977a7c32d5bccb95127b3e619e1269a3e8b9fd4cf7e30b589bdb72dd4e3a02800000000000000000000000000000381edb8b2f23eeae5d9beafa0c74f69e6c5d718763967657da5a7bcbb53d6761aaca0c65e9dc8707a18173262c994e55bd150dfe3bc5e53b2e32adecb1cae586cc131acb2c74e63dc6d6ba79c6680000000000000000000000000000001ce42f24d9b292c6bacb9f36c1e3e8b18d7d437849c33971358c0c75b161980286f7cb981ef9a6f3c6d73f27587498d8f5c6cf70f6ccf0627be3cae7ef6a2e4e884a0000000000000000000000000000000713615d95653e07accedf5161c7d5b67d5ef66cbcc33c32f7ccac04f71f713df3cd72b0c30bd35d7cca3de6cf74693dbcfee58670780682a6ff9fba5e9440000000000000000000000000000001a2848516da8ea6799c6b8f6d2972cf5e8b7d04ee7dadf3add98b61956f8965e504db99da6ae9778ebf5d649cf5dd1fcd76c4c744ce9c7191af1d7395b6bb327fb8631b2178a8336b325fa10c80000000000000000000000000000039781e6cd6e1ea9de34f64ec4af877f2b18e6e25bc5a8d23357b8c5daca4fb0925c6cf2df3c320d3b23cecf6d1635d2c91e45989e69d91566e71f49ee5ae29271919c9d34de7fa0940000000000000000000000000000038bd5dce8ae3ab2c2711a45a576757d59b7772e9c94addbfa62b3cf266f3036f9e5c69c33912c6990e5eb9ebcb5353cc32b0c748f1fa1e7f3bdbbf4e1a49c3df1d2caa24e041b0955f396f995d772c3eb785ee900000000000000000000000000000035f0dd9f185b4cabf65b3a1df5d5325d6eb9ac6c61ddcd7336713474e39e3b75d9b33d7ee75aa6c29dae71f1f374d7436d4d3fcfde4f3b751979bd38ecefc7199127ae5b71ca27d54bd6575ed0de143f40e03bf4000000000000000000000000000000709ddf164883aa7ad7ebea20594fa71f2ade063ecad7b246f8eb658a44f33d99eb235ecd17123646dd9e985b50659ddcd5e9f6cc72d9a35cf39d5d66d79bb1872da7bee39b57695b36ccfade5fa86414000000000000000000000000000054db0e77a206198e0ebbe9b456727ee995a99ef8daef291e48886bdb97b9ebb634cd7be1a3dd1b31e8c7dc73b3c918eed70d30e6c7cf5912c9d1af6e26c85b76cbecac244903b2e27b6405000000000000000000000000000000035ecacb3873fd072550abefe1db0367bb75cb7c09b0ae64fbab7677b31df8efcd53e4a859f467eeac9a93ef9bd234ac66cd6197b9358bdf0f0c237e59c367675f417f28000000000000000000000000000000a82259f2db2e3aecab2de6dc975b1ce6b542b1581a36c7d636e19789b6446929bf1f1bf2c19d51613b6f8b2fcbce05a5458e7d5b7df59dbdf14f32f4d7863a92c6a2cba3936ed2500000000000000000000000000000056598e273dd656d5760e4a67abcb83df57fc9f4fa65e6b248de3561eea9764c89298ddae461af3d5a5429e8b4d3a70bcbd970e54ef318eacf493ec1cad63bf1d67446b2871d9cb39828000000000000000000000000000000003ce4ba1e4ecb48163e66c5b6a1e9ade1a5cda4de2747c3d1b34fb12bd8d86b9cdd5a339a61bfd9a852a35c35af28bbdacf091299a0998da9596b32345fd4f2f263b5d9437c00000000000000000000000000000000042e4bba1c06ee8f537aadf3f58a4e5be8fc7d546cba919e9cf69e8ab6caed9d0515c12a7e774de747b33be56d37f41be3c84ea79f6cfcb548cd8123cadd67bce2fb2f9e47535fb214f47513a349be70000000000000000000000000000000000006390545bd594f674bd171ef851749cb6b3dac498df2e16fe572f37d1f9232e5d391ed397bbedca5f3fd4ae7858df438672b02675a4ca1be1c45bf4000000000000000000000000000000000000000873018670ce32cf3d4d20d968babab7aab59cf4f17d0f38d4f9b5da1bd9d5f1fd54c6e931a4dc80000000000000000000000000000000000000000000000d1be9d2c159816ca916cacd45beda4b3260500000000000000000000000000000000000000000000000053dc139eced2aab7c7d9ae2469cf598dad55a134280000000000000000000000000000000000000000000000001aa2ef8899f9ab619b5e66fdf1a580a000000000000000000000001e1aa338d59339f599ba9b6d96a3a73000000000000000000000000000000000000000000000000000f29ee28f9f59f477147cbd369861b6e2e33d7b3bf90280000000000000000000000000000000000000000000000000f28ef2bf1bf354c819e9223c99f664f1d38faf3d0c323d783d783d000000000000000000000000000000000000000000000a8b78445d12f5c9a329ba0d5b256aa8fee7b8d70a7e71163cff0008de4bc4b0d90e65a00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000007ffc4003010000201030302050403010002030000000102030004110512131021142022315023323334152460302535417090ffda0008010000010502ff00f311995036a16ab4dab4028eb06bf9792bf979286aef4358a5d5a034ba95a1a8e44907ce92009f54823a9351b8929833b6d15e9f3040d5c645346c29269a3a8f54996a2d4addebdfe66f2fa3b7a9e792e0aab350865a104b5c32d714b5c6f5b0d76a03343dfabad114109114b25b9b7d554d290c3e524758d2eb51794c3684d476c895b735b0631d02e682571d71669ed51a9ed9804340e7ab50cad46125592d08a82796d9ad2fe2b9e9146b10f8cbb98c11dacc664560c2a4758d279a4be96181502ae3a6de8699734ab8e98ea40353db07a756421ba37b118a46e365391246b2096231b69d79cebf1b246b2a222c6bd352b9e792da0e3455c526ed83fe9246b20b8b668ce7a0a3dead24a02ae230e8bba37b59c5cc3f1923ac696f7f0ced5a9dc70c1a7c3bdde78a1a4bb90dc794d62b158f3300c2ead4e41eaadb24732e5183a5d4556171c371f19ad498885a33436ba9b462e666b9910bbd470ac2b18fed7fc3277f988045d71b499c127151a72c8fddad0ed765dc255daf612f35afc5ea2796fe12155d1669e608ac92fa9fed87bde54b82bede41e67ddb618b8fa4c8648ad91668e4b4c542881a7f598db72b92947157d1ee8f47976cdf17c9bae0dd1c5abfd49987329ec7bd58fae6a2ff005079e1f4379a55e0bc3083451a3a055a9085638c5a36eb6c034a4dbcc3bfc5c9a40df3c70d8da451b954b376a6596da94b5c18a311266a13bfce6a5f44be6bc879a0864deb2be297d8e4d44139400b45f6d5d2e1f4d9392cbe2f559392e6d93d1d12348eb762ae58ac28360a5f35caf2436f2f345d49efd2ee1e2923b4c2cebb64db8a6191bb9455e0f468ade9f8af6a42659a3fb689e92ccc5a69f957ae7ae6b34f2a4351dc18aa2699e966f5e6ae4fd3560ebd6f22de80f6ab4fc3530ca68edfdaf8872428abd6d969663d71d03dcd66ad3f56691a6bab6984c9d474965e3a1e2a7a8ed224a953373b0a5453fd757069fba5a376ea454d1f1c95687ead37dba676bef89b8df2ddeabfa36543ae714c592a41b6a6898b4132cf1b529eb7c0b5aab8914d4bfb52b6da4b6c47b5e2a49f7884e2e4792e937c7511db3fb13eda6feffc56affa365f6f5b89b65085ea521e185f74730e195c91703b7936c96e5af63aded24f02470d78b86be9ca27b43957c4c3dfafb1950c7205c541e994fb69bfbff15ab7e858f5b898462da32ee17157104721b594c54d20b85bcf52a38912b3d663371ee90b787ec9144f42178cf3cb353ab4b62adb94792f5693d9bd21fdb4effd87c56a2bbac6d1b6ba3b3dc5c4c231ea69225586292f89a6b966566398242e951b70cde4bb0ed5a746925c6aa7e903c4e154d4d0ef160fe9b439b691885405474986638fd2d20cc7bb745a40dd7bf14ebbd21cabdb0fa0d130a45918ee96e6aded365496f12a2bf752606dfd8446716f3e573e48ee38659e5e6936d69adba3c55e270b5a7ebb1ea7dea4055dbd29b8ac3a247dbe2ef936dea7a52ece12d7e95be9c988e69b82ae6e9ae0f1e56ce3135a3432415a7a87b4b9b32c56731b72d72353c98a0dbdec6347b69a1e392c7d3795729c9146eeb1d9866eadd2f63c8f7123135690f87b7f8a9e410c36c0cb337bea07d536ecd99dd06abfad6f1e679e3fada59f53206a58d54d491ac8ada6435fc60a8b4f890ca9ff009248cc522c7564375ed49da3881ca80abd0f491772376ad261e59fe2f5a936c166bb53381336e9274df6fa53e63d4d37da2832208f15a70ccde7d4e320c3865b82238b4e88a47574e23b7b18b62f9af1313e8c3d1f17ac9cdcc6309767117b8808e303c2dd60108458c8f76af56b0f8783352ca44cbede5303447c219653d2e18dec959f35e7e5d1bf0fc5eaa7fbcbf65dfdd6e8bb6e115d5c06a0a772beea1dbfe39ae4028cd4f3328ba9e42b10503cf75deb46fd5f8bd5ff0076390a89dbd423889b3c538948123388cc802e7fe38a31f628451645084c8d09ea3c92b769fecd15be9fc5eb23fb11f75604c2920a87d148c40595a96515c8b41d6b70acd6e19dc29a54458eea29179c573d199a98e6af0e235181dd6b9a91f70f26771b8f6d25f6dd7c4cb22c51c5aa297d5d772c0d41b6d48814310c8b33a52dd2d2cd1b5065ea4850155cc6fbc5d9dc632c863b8490d1228c8a29984973d3158a8dfd428b76dcd8f6a94d44c619fe275a970ab6cacbc5287dae25e20441da29238f0ad10262714c05775af58a12ce29a79a549e35c2de48177b494e486eccb9703731a118ab6ecd9efd077301dc947b9ddbd99fd56abcb7178b89ecdf92dbe235639bc4976d40ff00d895c1b9926558d00b682dadf91a79a7862999daad62e596f9624901cafde646f40fa713271d467b3fa910150734fde853820aec9951ca9a7f425b829524823a25a58db11d6fcd69fe993501df476cc1f11ab44c2e23b4b998f859e0949c3c0ad713cff52e0631a946f2407ea55ab18e08e11e1a1078e75dad09daed92739a9138e9c62b35914e03188ed6c8a6fa6c791ea291f8d03494dbe296087696cc722005d46d16fe9bbbf1fd7d25b13fc4c922c4971712df496f6bc7436ad5bfeec532b812035a8411c6b3aac56464338a9fef1eaadeec62959198ee12f5240ab4b2f122e34d8cc6802d0c56ccc90f7432132aa54a44725c5b82b1920c9e9aba1982c5b6dcfc433055bcbb3752dbc71c4bd19dbc65d64dc78a8c899da76b959248812aceeaa8012c846071d7d1147f14dd0d5adac512d66b528c1a03d527dab96a8a28c578381aa2b448e4abb8bb679621ebb580e24f88b95df6f69dc6d158a738a95b0fb3b33e2add4bbcb2adbc7ffc2e4926a418a0335814e3b4d9a5dcf5c7e8b59731f28ae4153ede2036d1fba207113ab028a686e5a12363de97f342716b66374df1300e2b93ecd718ae54a2c8efe90cc684c114b927dab05a9bec3ed8aed48993b84b4e7b1ecb6d3b454b77190d794f23487382ded1b6c91a3048775a5991baa77959b65868d1e5fe27545e2bd9273567a7196bf8bb6ab9d2e88c362b391406fac51ef21502850ada2bd998d67b6369cb5773d1576d27b63d28729570a2b8c55cb08a28c6d8ef47f5b456f8ad42d4dcc765a708ba9ee27b292027b10d9a209a5615ed517b4bd940a4f7c54b5d88ce4487b05246c6a8c2a54dea7f61143d4e316d32f87dde2668d7924bc1ba0d24ff006fe3f57456b5a1dfa1a03026f7d94a3d74e297d853fd8050340549f740bba4ea4669618c57602daa5fc5a4fed7c61381d3586fa2620d6c32b5bd6a1f5357dd2d0fbe9bd9fb38268fb2b566865699aa04da9e6b7f6b96c5be90bfd9f8cb4b93375d61fea85fa63da724b290a99f4a7dd51fdd58a9a3ed9e98ab6447af0f42d86ef3376118db1deb76d1e3c41f152ea6b1cfe2edf6c6caea0922b5987d7049c91b8c34e314ded1fe28fdaa2f7a3e90d3b9a5f66ee08c187d13f98f4dbc8d34ab1ac51bdd4a8a113e26faf05b0815d5fc2c489a595365d268d668bea5accc43a7792463920e238feda88d77ada297daddb294cb9a9461e17e44f2fb531a3731a545a6cb2b43047027c55eda25da44658ee259d611a309165eb7d6be212373131ee1132277df40115dea37da80e6b9305fb18dca361a8cd8a625aad3f0f92491d4beec70266e54036cc64b7f8cd5e3613e9f686115abbbf345712d99f17792d6952b4b6daadb830c38c1ef4eb901a90e5ad72623b56bc428a94898d459454180ded6d222c5c89869d05724af4a9debb1351a789baf90d67bcb0daef5d9b6b4a9c44750b792e21438eae94a680f56d03a11d99d371932779a2dd983c2ead1356f881e5535c8d523313cf1d738c68d061370c7f256dbd5830f8cba9d6de1803492abb2087d22f517659c8f2daeb51812015b9eb7495b49aee2b2f5deb8e846b4215a30ae1c76d4cfd344aec296291e840a2af9712d9d95bcf6ff00c65ad6acfc369f5545c5ab45168cb8b4f8cba816e618eceeea2dd69713ee96716b6f631c1272c3ac2e6dc1adeb59159a38a18ebbc0ae6a3239a8e292e1f5542949eba8c3475c8f5c957abba3d165e9a94be2a640b5a8b131dbaadbc5f1d7b662e45859787a78d64a0bb6bdeb52b5113c189c1b28da8e9e9575188923d311e0b9b66b7922b54655b24a16f18ada0568fdee2ea05b98583dbbc775426535daa44c0b36e1bd6cedb693864db1ba4d3a99846864f913dfa6abfa3a601c5cca1f353af8abfab9816e23fab653c1324c8ee1150f2a106c6ea37595268639965d205369f751d335c415cc78a38e4b896aeb4d4989d3260d6ba708cfca6a4bbacb4d7eeb42315a6dcac52f4bdb71730593aacfc4051ad4bdb4d1fd1eb7302dc449a75c17b7b78edd3e5629b924e84645c44d6738b9b8928dbb495751471d6981c59d48e23445f1770cb34356f78263aa355ba71c092abc9f3b2f3e6eac67b8916caed4784bca92c2ea4110bae9a929f0b1c73a1ccb52a4af4eb3cd3413f318a248bfc034a8a79531cd1d73462b9a3a12a1ae78eb9e2a560e3fc15cfe54fc69f7bfde55808fda981536bf8bfc15cfe5c527df3444310455b8dcc63606ad7f17f83b9fc29f7bbb6f2d9a88d6f6a27356bf8bfc1b9015586ee55a3228a2e128ba829b5a8003fc24a0ed8d7bf1be0c4763a332b07a8f21fe109c51b98852488ffe224708a392e985a47525a62ad672dfe1ef9bbb1f0f033b31b49896bb1c72a9c8ff000b79f9ef7f0d59a132df1cba0c2ff85bcfcf7bf86df8789ee2345b68cbbff869a0e49278f953c1d25ac6be6c8ff0571119278790c9c388553ea05ecab2d3ed69245159b81507b4a8cc442cd3c28780a3ee900cab061f372b481f7cf4cf2e19a4adf363326cdd26f8de528cd281ba5ca3494ad28a0f30a7925c8924d96e58a7ff0042ff00ffc400281100020201040103040301000000000000000102111203102140311320502230324104517060ffda0008010211013f01ff0073c4c4a28c4af87adf16fb3a70c8f4cd3824acfdfd851c99e9bba15456249576149a337547abf4fd94e875566449df656cdfbac7ec5d9b2f645eec51b1c6bbd18db25a7c1e0658c429b43926355bcdb20ed76288bc472679146f7439722e50f792b469f6b51f3469b69d1e3c0f93125c21bb469f825baecdf2489c79b231e7d8d5988b8437dc53c1f265c5949955eca14626a5571dd946cd39ff0065a6628c08ab2524a542a7b49dbedc2af93144d25e0a3f7b4a6c849d0dfd5c8a74f813beed91e58e228887cbda6acc5115b22a344aab8ece27833685e39d96d2f2246263dcbddbb252a22f68bd94da1c9b13befb8591e644bc117ced2273669f8ef513e11a48d4f059195a2c71b22abb6e54ebd8f9226afe22270a5c117445f1dcbbf3ec644d5f0222ed51890f1b50d95d967a12251c4a298d5a3062d3315b65bd95d9cdd56f8186ca0cf4f7a45089f0bb8bc1396d19517c9254fe062ffb24e35c6d1abe4963e51276ff00c1308afc8705571f84d1fc8fe3a4d5b1a4b5781fc1e9c9465c919470a6c7349547fec3ffc40026110002020202020202020300000000000000011011024012212031415003303270425160ffda0008010111013f01feabafa2afd15bafa391c8e47267262cbe81f51659729d6e7c433f27e8c6121fbd8b8e8cbb2bcf18b1bd84384a2a52b471145c316ba28a8654e23750e1397aca1f42cfb9a143c531268f708c463d65192b3a8f52fd18ae87d33118843d750cc692b32778d8f2b4639d1cd18e56cf5919fb3085b89f47275df862e99fe56376cc552dc78da28efcf05ba8cb11e32d0b0b451425b697453b8e45c7143484ba2b76e1b174c6e3e2312c6c4ec4515d6df11f822c7662fbf17b49094b878a62c52deb8b3e0528a439adb4218bdc38bdcaf1628b87bd5e0bc1c5143d945b4e2e6ce4728b2cb2ef711cd0b24e1e48e6bc515dee65ecc14658dc2ed45efd2629e3684a97f42726fd0b2ff7f499fa3f23f817f0ec5f4792b434eec58b7eff00ec3fffc400421000010301050407050703030305000000010002112103123141511022617113203250528191334262a1b10423306072c1f092d1e114438224a2f134707390b2ffda0008010000063f02ff00eb125ce00715ed81fd355bacb477942ddb1039b97b367a95ec9aab62dfea55fb3fa3956ced4792f6b77f50214b1ed77233dfd24c0516736a7860b74860f855e7993a9aaa95975bb1e6151e7cd49634f1852db5b4039c85bc1b683d0a8713647e3fefdf44021d69e19c39afbd7cf0c951a4af667d5761beabb0c5ecdabd8b556c48e4560f1e4b75c0a8cfa9229c957d54b4cf05f76f2ce197a28fb436e9f10c14b4820e9dea5ef30d19ab9612c6eb99feca5cbb13cd56214c752b80589d9bd66d2b71d7c785ca27c8e3d596e1a282b72ab70c6ad381577b169e13b086889327bb41004b9d744e08df65c7b4dd70e2a4191b0bde61a1068a3721a712b7479e67ad40abd5c3643abc7355f5d7a9391f9295bc3cd41f22ba3b4f6ad1fd5c7bb8b1e25a506b0401b6e33b0d3fd4546671e3b01780d7683f161c3cd1bbe6355fca2c561b2e1c42c3608745a36ad3aa16829a8d0f7697bdd0d1895744b5d90767b2e83befa057a30c15d2e97e8dc531a5ad0c7e5a7e3c152dedff00fa5fb69b58fc8631a2ff005126f4cdcc80d135edc0a91e481f72d28ee07bb6cd9a99f441cd327c2aedb4bf439f9abee11952b0ae594b5a89cd588d1a7f060f975e0e085a59da35d7b3dad644666745f34eb2381de1fba8441c0a638f6b0773eecb993607eea0a70c818e69ac837056067fc95745986018dec760f859b0b5dd976ea8ebceddc80ed4e48d6763d80c170a237bb4a587046f7680f441cc174b705790b418b0de54c310af8c5a9d6593ea39f765adaea4aa36a9c489e49a6f6081415a3c78a3d3606f093f816965e0323f49fe1eb9f05b2d1caf03788d54b70fa2709c6aaa559f017541c0a073b377767ddda5d668461c93ae30173f725d9add95881c82a8bf67f4571a2eb732ae810a13ad3c669cb01f81676997b33e787cfebd720769b50ab8ad7966a84839ac559df12cbd055c0008c96a54f89599cc6ef767479329e650d369b8d024cecb476709adf088fc0b56e65a9aed44f5cda344b1deef1579c7efbe4382d27610996be36c9e79ec07456d67a19fe7a7765ecddbdeaa34ea39b6365d21650926004db22c2c7df01cd397e0deb4786f345b654139af6d77e6ae3bb62b4cf64b7b40c841c3035ea18c4546d737c0ff00affe36fea677492d178c506bb2d8fc28f502b3d5d5e6507b3198692b0baf6f69ba7589366e2d0249fd94d2c2cce98945d573b52ad68322a586392bef8c2eaa14539be13d5232c7639be367d3614cff0090eea759f4aeb1701365a3b5569e5f54e3d49569f67031320f05671ee95d2d952d87fdcafb69911a756d036a71e685a3707546c7fe90a055ca0d49a95bb51a6c8f137ab7a2adfa6cb1768fd855979fd3badfcc7d51ea52af380d38abd5e971939a2450b4d4689ae5fea59d9752d07eeae97e546c754f42d0fb235367a725bccb561d0b538b1b048f795e79aea576c2c8f1579860ab32f171cd35eb3980724778d50a117c22acbcfe9dd769e5f54e1b752701aa2f756ab8aed065afd51b3731d43eeae8d80dc71df246010b4676d86420f6e07ab68ebe5b77b21ba6aaf025eebaafdabfd51b8fc14b1de8aaf206967457dc24ddc535de213d50f0a8af784ca299ff002eebb61c2514403b8d6a8c5c701aaacde2a49000cd7ddb37757287d934b574ac05adc0d6536f76a1551b33d9757aad6c1e8f3bb8ab470ad9b00038a6b67b47042d0098c46a148820e0a73faa77d96d34dc3a8565c04211893963e4b79d27e9b4f0aa733cd3c7053c02274693dd6e69c1c210071eca73da379daa73ccf329efb2996528837a473c68af3a0bb45271c8a1d2c3da6924542b8e34f75c8f8b44e702019dd950441188d3a9457d8d70bded2ce3e61748ec08a464361b338d91f96c16831068b93ca686d1ee313a6bd561cfb08df21bcd347056b69c6eff003d7bb2d18df78cf24d6e8100ba4ce2f2e91d573aa98f2372f43a1080596790cca34e1545b68260dd5106d2cf518856511d957eccc5a7d55cb46dc7685764aa05bcf4eba4b4479946ad78b4c40f77828617b84567229c3566c213834802f668dabff437f7ea93e2faa0f24927542924e5f44cb3c48c79f75bed0fba2539cea9cff7d9773c13d8e7b9acc5a060535378da042fc88ab78950d7cdeab9be15f6867107f9e9b244cecbaf6870e2b76f33915db79e6e556029e0fbc01f97f857ecaed6843b3515ac9aab43a3763b9220768ba070e2834500ea91e89cd46d1d5167873eec6d9f88d7cb65e380aa6bb3c53da2b490aea747bbbc9a5b1784384a384b8c985f6bb41817ddfe7afe059fda5bfedd1dc90737345c484fb4750da19f2cb65a38e10ba47769f5ebd33569cfbb2cd9f0feeb9a6b7c455e30d1a94cde1314579ad26cce9eead42e8ad4fdd1ab1dfb2b9f666f4b699460136ce65d893a9d97030bb3a65d79fb38601ef35d82bf6f763c0dc0f3dad8f600d3e2e3f80d3a18569fabbb070684de499226eb0ba3541e087b88ed7f3051fee7ba73054112137ef0eec472cfd541ac2a7e162a81525c4a3637a3a431c9ab7040fc071f893bf59eecff00885188564f18410ab66d57c5d65faf92258e008ec8f1f35b964e1af49403f72ab76f4fbb82afe09d4aa6ced0f2c93ed4fbca3cfaf7754e56acd1d3fcf4eec69f83f7ff003b0c76986f8409c1744ec5bf30a868bdd2bb31c962b10b10b1445e121621171750555e63a7cb05815d959055aa0c18be8a0295815a75494e4e6f8dbdd4eb47765a2545ad9f463599856369eecddf5574abd310ba467b3c7f4a1f223255dee21568a8e5da1b4b8d00aa7dbd9bda1d3477ece5258e61988726584c749577241ec8074d54761fe176cc562a460d1d522440d930aaed91aa638d2e3abdd4cb219ef1f240604669df676bc96e300c0505b0fe29c5c6f903d1308a5117c747a96d140353eaaf5ab0d987e05df4530855c3915ed5ca96fea13985edb99ba135edde6604f141b8ab4b4f79d166386aa065f35c1435e79396f3eeaad79a72839e1c7a97bc449da1c0ee33fee5755ecacebe69ff0010bcacddc3ba5dc1a028c5aad8913284fb88ee9e5aadff0071bbcba6b5689f75b9351b47b5971b8dc7555fb6007819fb9d54112183d539b6422043a30940adea01926f8734cb3b8d26d3c5821be1dc95cd17c4dc3fb23231c94813c14cecbedc9544fecae5a65ef6c73b40aee4421492700138c5d6b68ee7a2bad346e67f9aab9679e69ecf865593bc9399e17774dfbbb8f18f15373a31aba89c0618df3d98fd96e3efce718a05ed86d9d63529967146fde3bf654c16e54b0debbe25d2874f35f69b41db695696ef26ee0cf89c87aa6b86255e9dd02aafbf1358d16ed4a23362f29ea5dd57684a969827253badcab55372f01a1a85bd6ee17b21826349e92f640555f7d6d0fcb804e6de3bd5a287ca802159f1dd53e129edf109eea2f7baeb466ae341b9933f72b7bcf8add681c97da3f4b57ddb81e0864ad6d41209cb2956ad680040c158d8c4358d8fee76598577dded3913bbe8ab507214568ed537f48db52afb89167947bcbee775e3e69d3b8462a8a26244a8d289c3a4ba6ec5163795939d8607929d1746fc47cd078f76aad394ab13e5dd25ce30054a0010db30776f53ccabac7b5c4e2671db79942e1038a696dd369675278e8ab79b1f0e0b0e0d6a0f880cde2af0c95fc670579d8a21d38d617b478f2089e91ce3927724390d804c4985d9bceccbb6bad1a21cccd18cd63855487dc4ee9aa495bae3e455f25ce230bd96c17798e08ae767fb2b13f10faf74dab3c4d213cf2580d989f54cac4661345d8070aaba1c7a345f8019a0d003ad1d837f992214134180d97bd7662aeb6b7b2578886ebaadc6f99c117b5d79e2a0ff0064d70ad1605609e5e60625340906260eabe13546e8de66235d982ddb43e6aa02ae69e35129a7e02ac47c53dd56d65a2a62a0b4b7e6b1567a4d56eb618ea11aabaef384059439df26a30e25c7b4f39ecbc137293b300162aeb4057df79cfc034e016f1bfa3460af5a1a0c828ba48c6992ade07f4afbbb33cdf4525d78ea701c82078a1c28b81a29ecbb50a1edbc356aa386d7bb4a29d5b09f6b9345d1dd42d3c6162afdb821990cddcd7bff00d481b0aea1ce4450c68b828146fd7670d91e00a614ea873537427375a840e455dcb45da3192edaa99d97ad0726a23822744d274d97f4c534f87045d9e0b8e2acdba47d15b59f1bddd4db8407b0c8941f6d0eb4990321b615dbae7b727347d54189d161b34e6a4e02a89389da3cf64e88840a0a8e1e8b252778af2d979e2b90da6704dbee0dbb49271578fb36601007994ff547e267784fbc08843e5b4372d806cf2dbca89c3cd152abb7836bd48382ec2a084f3e4ad3f494dfd1ddb81f2db66df8a7e499a80aa0858abdd43cb6fea5398d953b29e8a4e257c4eaf5de729568784271f0b23bb5c1f6658e15f2dac6e8c27f9e880e1b033006aa4d15e08ec7f96da730b02aab04f0e6d466b76d5c3e6a5cfbdf80de354c66bbc53ad4ff00b87bacb3a32e6368e77153d333d55e6105a7308188e1b1b6bee9170f040fbc2851f5566fcbb29a3cd5a712029d969cf612725ba00408342276414064ea7e0ddc862afbbc86aaefbceed1f08418dc053baae8adabb00ad0db367a4c53e85c60e2acc34c96d1dcf6bacdfd97220f69b8fc4135ed344f73dd0d61f45380d1018126f576bff52d173415df0fd36550aef057a23afda0de2725164cbe7c455ffb45a5d3a0c7fc2bb66dba3bac03470c1c8fd9ed4874201f24b93c41e8cb6b4ea4b7dab70fec88321b838689c7117e55e70ddc878bfc225d89340b1d95755dbd40b0b4fe85d932a814e1345ed3fa4286cbf892aabcfab204b576882e77a2ccf35a021593ce2e683ddb676ac0e976eee8cd1b4b5adb3f1e1c3636caf96d99024054ad9f84e1fe14b5d7479046f38ba1d894eb76d1edc788441008e2a4ec840268d28b79ed0a9279218b5f91767c119a463c113830e03fb28d90e7c29e959eaa9bcb7406852eabbd760ce2bb037dd263c8778d9b5b57918224ba3928a0837611fb3da6e97196a863b0addc9ca30385561b25a814f1c561b2b82bc60bb55a9da03b0a1fd414cb09e214de6aa5e7726aa308f250e2546f7a23743af649d6daeeb792bd2235576f103c51452d208d4776979f21a94fb67d5e4a21a479e49d22f39c9a0901e30566f7b4871098f02ae0678aa48589d9382a15daf92ed95559acd506cfb2ff00f1cfd14b840d3554002d07155aa9f104cb437e4e3bcbb0efea29966cdd0e310345fe9a771d0e842d2675089f13c9eed366ef23a154639bff00384e6da535fee859b2b950e2ba578beefa9e09969748bc260a6ba3b2e5113c962b1d98aae3d4a2a3481c95c60bce5f670700cbb282ec37cd7b31eaa5cc2d40856965ff0031b059598a3293a9408825bbb29966d178b8e4acec6f0bd1ebdde08376d0607f645ef8369c3008070983239a27339aaa6becc5d6be9c8a0440d5540f4548f45c6744c25cf6da11255d75743aa0e9bd2aa150299ba15b1cff00ca3667c8e85163db074d5453cd544290a78e099a4ddf546314d7386143c116c8b874298e6ef8b3334ccae9aeefc44f7a5a718faae255c76e9ca73d8cb21d91dafdff006d971de4745115d327abcc3cc68afbdc03466af39900e00e881649cc711a20f61969576d181c17dd5a91c1d5546cfe97287748c9d4237ad2f039c202cc6fe3fa7617b1d71e71cc151d1b0f1bc83ed5d788c1a301deb6bc04a2de33b304e75a505a7bda7f27696fbd8b4a1d25277791586cb33a1565ebd4366ef23a2ba5a1bf1cd3c95cb31ccebded6ac8ec18db0705030c5bc42dd16765c4afbdb67bd0b9e6997893384e43639eea35a24ab47bc5d1e10af595bbf938ca366f6dcb5faa60f3566cf0b40568c6cee63dfdf76d611f13a17485b66d381df99f9289b33e6bfdaf555e8fd55d2db2b260195763dac63dee791857f9823ff4f698ce0bff004969e8811f67b56b85410159bed3ecf6902261a88e8ad591e36c275c1da327f204174144dec315da0aae0bb611876155db0bb6148323f21f92b5f24de613b9a0e22855a7e8d9068579fe43c0e0b04de61480482aa08e69c356a8ba7c82acf9af3fc88e4de613b7ce3aaab89e655a7e95ed0faaa995e7f9124aec331c8cc2f67cfd51fbac27cd56cea414efbba04edd1454fc894ac19859981e18985d933138f14f306f498f55bad2374e2ad1a1b4749f9276e9ae7e5dcb55db5bae07f241715a356254d992ae3f1fc8ed6f9aa64a4b8ab8e329af081fc8cde4bcf65ec826b42034fc8cde4bcd0bf7678adcaf25d2bff23875e85130bdafc95778f580d7f211803b1da39724ee92ccdcb4ad532ed902ebe684735657848b83164a1f76ee9ef76a3f74c264b03e788c5175a59b9ed23768ad2f59b9d684ee903d392780264e3a20e33f76c0dfee9ce1673378d47244d2846f9c70400175f22a19089b56de6dedebb9d134b2cdc1a069f105227cc77e0bb31cb9a06ee18add2ff4ff000ace048157714d0ebe352d6a6e326987cd62fc70bb4c56f9b41aeeff0084c204ee92442f7a7317689d781a614c543c19d405be0d31ba27308968372294aca321d314ddff000b7a6673ff00c0ff00d86fffc4002c1001000201030205050101010003000000010011213141516171108191a1f050b1c1d1e1f12060307090ffda0008010000013f21ff00f312b39eaaa2254afa1fb6e5e776a0f767ca9f913e79f89feab05aaec8fc4e5bd5fb84a413ed7ecc441bbe6d929cfe4bebc6420d5769681c9c7d7fab97e70616fabfa25e9f3b6f79d6200d20f29e72facb59926b15be84fb6d9934966cd1e641c04f92ec9f2257a47c50e147e1ef0402363bfd64611ecff04b652bb0e0763fd8e53fdbf717f909073f5ff38efbf94d859e9118c20d7bbb43d6bc40a594b4b959f0d3494b7af7600c1e80980a38b4a67b9de6c4a9f393e9d4f782f358558fd544092d5177a07fadefda6ca1ae7e5b32859c898ab033da6c6aed1a71e529e238b123a50ec6f3a7ce97c1a483798efeb1d1ea6fac5bc8fa4ecef0346a6a712fc08361863742f7728582f71e65daa9c44ff3bbb778c0fbf6bd9de259575d6530899aed757e9ae2044741777a47bb1f8638f5257d5898e469fb781a92dab31d1e5743f72163bab56064ebf68e74d603bc034315c4cb5061ec3a44b5218d277431e1ab7a21f756f3bccd82683475399a7633a1d3f47c32a2d5c5d5ed10ed4dea80437f694ebfa35258a6aecf519dfa4f0f8cfd38b3eb061b5c603c575eac57a92a96733e5fa2052d97a11aa5d416f4f0a8165c4abf034f0ade11f0f258dc459cd7c8c37db47ac6a2145d18d4b68f1016130ed1917bc1df87e7112aed51509747a9035718074db4f583e9a3e0b69b4cdefa1af278696bc90ddf9ccdf60e1f3e6233eab97ebce078a70cb4dee06257fc0bef19ef8757fd529c74d4ed30f9ba8c1dbc3d25590c187740ee38f0b92eeeb6e7ed08686227e01bcd149bedd254f9bddb90906aaf687e9b56f3fb7f490136ef5748c4cc316fe3f68f680aae97bf304c9356140b25af59440b8edff44a952c03f6eabc6a1feffcbf6f04416a60ad551a6f94ea7da17b145d271005ae2320c5d5c1310762d39fcf7f67e612bdf4786575ad5e8cb6560d6bc30fefcfe99d30fb36fb9102566c580a0346e5af9618b0a6b26ce9de132e464dda608f339420f88cbe00b142d5c38fcc00030051ff0002e5ccfcde08806c4b3af8d8848c193bab7ed3712bc2b78dd7aaeafe3c19f52aebc79e9e71e0a869bac4a5e58973229b4fe9389391ac0a055e29dab69c778ebc9e937b27e83a4b80dc7a92c871f90fe7dbe99acb0a178bc7b10d505eee87ee2db921a3cae0dbc09c7c22343cbf51633d195cf0697a0fec2505d4fc63ecc57ff463494034f710f469e47fc2cb97bcb83825edc9ebf787701572b5fe4c9c4307cb35bf4329681d4f68daa039664edad6e6948dd0bc0cfdec644011b1c9f4b485d1cdeafc6f2a15f916e5e2adac693796ea8d7ac12913b5beb30f59b9aff32df93bdd8850542b1b749511397da153de7b1f80bf3f03c465f815d6a6de0d4f207897c1f0a017e77c9e64115717ac1006a706a71d648d9bfccc1810d633357e815ad71f7a9850e343483a0ab6e238acd33de594e1b7963e98959c057cc5f4a87757410c6930ea0f79add655cc40b4b96b756a52ba0fa0f058ae25cbebe2c517515df53dc94ab9052de7c6839cbb7cefe035a6b2a85251d7763e6f11c56e3478fee59a94ceb877fdcc557a41e7043a431cc951e4f710ad36976f55cedc4f995f49179c3e0a057422b5a8aeea502341e15462445640b8bdd82d3fa9efb472af3e028dc325e63920f3344a54d2959ad4f944ac13a466af1894ab573abd34999585a141e4d71323151ca166e8bfdc9e734c141dbc2d346bc2e43e454641f2a5c5aacd9e43f6bc2fce6cf6fe4a91cbea27d268f2a6dab7172d45e1de77d61e78996e31ed3457425ab8da2bed0a14d768c12b51751cb351b1dd1398bb815d5fea261978bba9e5154758e6b0c52af61fbd08c4b660bd8737afb12e4282d99b865c0507164bf7deff00c4d96aa9347e66666861a328ed5ece4f7bff008b08d4d5a1faf0f4bbdd5fdae54cfd48e9727c3d3e958652135354f3c5455d7a7b21c759fc454772bc2e692da6a64a4e7999bc3f8c06f46ce8e1e7e6f080727abe26145cb8a7697e07c5340e86d3da2f9670d0f66688de74b58c51f68949dd372eddf97f885a9619ea40ada39e8d9f763b3fe0506edebba698d674d01ece1fbc45076c4f6d351cbf7be97f13c27dd7dffe0480019b6728f2ad0f58dc7bc051ca1aec95339a885ab07dc5af35bf2d8c8d9757075be75c456b823a4be933b41d3859697baff131e8bd5c714962b42f58d64f6841f5f7bf535760ec82c23a3fb89a5067447164c3d9e3b41c9c32d680aa788d52c60860653502116f264fccf653dc7defa58be82fdb17c3b78e127fba768d55f772cd73982798284727a9bcb6f626975e5013e0b028471e950b44d41f6fc79cd293b2f6e906a56b32f0bae22db9214f77938372e5cf9579c0f59d49a67e6658c01cbd7f732857557f65dff5fe1d669ce8e6b60e7f1d21bba24ea37f695c6c7b22b21e0eac7b05a17deb53d2513a8d0961d297bff4cc3a70794fd8fd2ea0dbdacfe2749623b4c8ae5ba3f30174475fe251ef6f5d312b09f2b625df9a2ae2876e144ed771cb5726cf3bf296f6ea5eb1a44d094cbf03ae3677ff009341137ad8dde3471ef09d019ae5995f5d7a0cdf3c1e731a0fcb20808168dcda5d834d61aa7ef38f4d1996f73b1ba793fada329d7d8a92e0250371d81cf7c1aed2bb67969c741d3efaf86ecebcc10526861da77530216d599fe9249f4b3d74179cd0464bbc7430b874a181edae3783df2b4eb334680a96bcd73163dd65861ee07ceb0581a429644f6831d4db055f3e52c6d42016f6da16a97cdf66054d01aa639e0c695a676b6e700826ff00d4ec970cc6dfd21be9c3e5fb3d999eb00391762dd95f9895dee065b44eab4f7b94c94532d7d155d7fa58f622bc31f11ef12df818d4eabd09874c78611870e8e26060155e9d3de5197227f1cccc95829285703e597e38fa61a1d1c7919fdf9c174e81da6df5ff00bf88ed460bbefe12f7759ef9f7fd462a230568535ef2aceea6bb8d0ef41d66a2e8c8f424c998abd923cb034c87d4dc94981aab7dbf131cf73a1eb2c0bb48f6652acf522db306f59d2ff115e848a68707797d083643f220f70b7c00f68fcdef27c053f2f9dea3c4767835fcfb46cb4d51c72f5a3c9ff81280347b25170b5aae988e4a4d37e1e6c3b9a16f9597dfe979421e9cf48f5dce5cbafe91daccbf9df77c63bdc8d0001a77c4251b87dbf90e1d82fa3007972bd38aff001bcc9cb5a0615aded6d61d733b23d79506d384d1368a33252debf2a54e86245c436e5adb4f86d2d543b39b846cb10b322958d65871bc72f0895d5cb3887efb8fb32a64786c63f798eedd7682ad3a0f1e1e1446baf74ecf7642d0850eeb7f20f7e9f4ca69deeccbef5336eb47be5fc4a32d0598eadb6e8da6fd1e73586fc74eda9f77d22af533ca6becb177b0bd1673ee79c76ab201ab61d02a0ae85c57fd9236ff0047c9fbcd6c7d9285439c660c0840dea6af77cfc18da157cf1f983d56741cd7e7c2e31f0b98b1455255db1f4ce2a3eefe25479a79b1f633fa8972e0e7a30df9c7089d8586e5c63c8941a2fed6fbf4825659ee47ae32931ddd4fef32f1ae382ba8aed0fde023584187543b052eace6352baffc5ce8e8c2ae98522e12aea179bd5af46966ace95df8997781788377bfe46bf89e72e16d48c1bf163ed8f64397b7dbe999df8962b477128a51ebdf1ed1393337f60d9d2325542cbb479ab96634c53bc7b56024d83766f381f183802177585edb446200e02a5c25cbff008ba88372f62205ceb8889a1d582320a00d5eaed1b21a1a33b8bdeba47edb62af6307ff0002d4dea27dede87d3050797f7606ea69f9885676bf36a677dd6ea3a6496158e83c83de3ca8b12f5689d2f83cd999a55ab74bfe13a0714b63b3bcc16f2edc43fe2fc589cb40ab855351cef02bd63ab0a2dd9cae1934aa0e0e3ed30be578e52fc68a35d5da1ab366e75907a8afa63bf4fb28b1301c7aab9267eeaedcc6f96bee13758db5252aa0e2aa08a50f3417f99fd14b7f7406c3d6774017927fad08587675a25bc0dcb0f711db9af6f5b13a79044d77b99ba1bd1f2a52060c41406d3013d26123a8d6d8225888f8f763d6b1df62651c1a773e3f4a626ac276dd5eb31044a5249c0c7da317b12ee0d4b742569179067fcf596466baee826d43c94be531556ea54d119b7f39853a23da5748c483b3c12873c681541cb96fb619721561647a72758e551906c7e7b4f60b61c32e9b4f33b3a3111d20b51320c5e8bae77f8c0af0e896b9aec6a6b518af2364aeab71d62eb49c4d1da37558267015f4f3ed7f4a77959f6741eadf94a1896abaafe604520741dc51d2515cb0e92f9bfd45105514a30d8da36e88d44be072147cb4f49e8a62a94776826b5a5352facc8a286bbc3a894b865363cc0617828e185c28dae206a58eb3956d03cb5287169d664d545070377a7de692da39f8c41ce2d6ccd108d12fd38972ad7153536ef4a0929d3b6650080e85f9bc349884163ba7afe8274d98f4152ab3320c65be7d3d7de02afa7bc145f99b3e749d2e5fbfe665fce2f730fdbe93f19f97f31dd9a9aae3b472c8a794555605476bdbd23ea4055345a540b7a030e74a23f5fafa3df962db51967b882d14b45b2f9376654e62572704aeb32af47b1af73acead85cb54e929a2086dc3478f4cf9c4e6457a2dae6bcbd23baa9f44d190e8de148abf506f0e39114b6e5600d8154fe516543b7698815b42616ea39220e0edcff51d3e703626d7fb951ec56bed1d598c9d135f9d21164fad533355d1bcbb3b3e6cc446494621acfbaf68e80a8057cc4165ab5793fd9e6f5fcf365ece7d87fb7f49cda40545c367da6fe3bfd0d777889dcc302bacaecf37bcc82ef3a1cf0edd71e52a83aef26c77fe45436b2b35ac098d731c57130aa43e87eb58eb65b9cfda34e004bdb187dd9510a2779b35eb9fcf1156efec9a944a4e60b5a2966e71eb196d5f3360e2a38cb0680445d6af980cce11ea9df31759747d633ad30f3da5f81380e60ec11cdf944562930ccfea1accdde9a6c8ccba7b01eda6694729413c7f62696294d07d8fbc4404a8a5ab926479ac5bbc1a00e08aded7f512f5c17f138dfd97fafd28af0ed50c956f93f09ae777a073e6da13a358d53a80769bd9b3a11ea6a452d56d1bb1ecc1c517542df7eb500480c35b42e0aa940bbdbec7cccec506dc47d765f9e908ada3cf0d0fbc5a299ba6d0c71d59f84bd3930e9e3edf8e969de756cdabf8980b52474c49ba7d75982a806c6d0481ed0d1d758a9dd0d3a65d05efaba6b0a9bb9d69bbfdc09b151ea98f1e55b7522dd0ac7844ee08f430eae8fee9d6c6de89f9fa49601d8ec4d64a4a9f0f49b5e7055ca7867797aa9f56e3bf69588f1c434396b1c3d336c4739d2f77ac165480eee95e59600eb3b905da9a1ccb856f2ca022ef697ef05f3d5592c4011a20666198cad266f4fdaf0b3560eeed70fa07d15bfc96515a74f03b58051bf33282aba72ed05db57b12f6dd90f9dbd60a2b6974d7ac13ace830168583d5368622a7d571d9814552949c31659ba09f69f49530b7d5895e62fed3fce9868d768b866e2d12a2791a84a09ca14d5ce469636505beec3c6c0fd3afccc0481934eef47f2200515d76f6dbb4567baa400b732d06045de3bcab5a79cb2c89d01b6e0168c00f4a71ccd2dc1ae212b70e9095c3e691b5e0af5f03e25e70918b68fa441e4400cc36b969d9da5fac4ed6f0f7213a7a7fb3548a383d3226112f27ea565a9d5715036fcd094f85c53f5a7906ff001f4ae17487938f665ad41a605ab8790f9b3ec9d4fa4b89695b18a98023297bab6a965600728c0e5bbfbdcbd233a2dea2003c04319a4d0e66e0b5e9d8fec41921de515a21d25537693188b8d87d65ca7543838f2de08045b1a1e5fb96aab94d2e9de00dadefde3a4f5c628cd887b03cb57da5f716815f0358869b773361576f26a7dfda56ab595f3bca917d53b9bcce8ee7ea44c1cfa279329d6b1029b74333a7a34dba8f9bfa9661baf9d5fc7afd2942ba26fa987daa5740f5bd0ebf3519909b36d75b81d229fde6f51a689d47f12fca525ab31bdcaddad09865f7e0a34c130a0801edf71f8451d4e63515aab82f45d93f2c430b0ce90b35af7d1b1642b3b3f2e3a8ce8e1516616b969d270af3097ed6d2586ace5d70df7665c4b7a3fd94509d1cc6d60f81808bd1d6416aae86959aa3ce29ead81cc531c2cbbb2bd3083de29cb800f3c3f63e95d0e0b9e4e9fc98bc2832bcf57afa788b2c966a6b0ae2f9b71c0348b0286aac488eb5779b815c73342e7055b49b42ef4db1d9f3e6b30106336b7d8fdcc88100eb0a3b4724ef33fd9b46f77c4bc222ec3ee8a04ecf04b58e383b412c5e90b17865743bcd72f86276b3da16f9b6d5d93ede52d515ac7e7ac0d0cbe419658b713dff00d9596df94fa85860df7bb4fb4041525e54401e625c1a2a2ca6d52808efadf9f896ba12574eff0078620b87448d32d5da3af47f9f9d27e641d0a3c933830ebb7f20135ab826a39ff07805c059590b4533214f3858001b0425ee807cff00c9449d1fb1327ebfa6dcb6570cbe356e9f697f20a982a31ae334713e320b918fc1fd952f26a7f7f90d66b7a0f017d9983b42028e5b7de3ba855e2995940273bc0316af1cbf1c44075cba253af22551702bc6b7989df068f59d6cf72743079b1fa7e9a988811dd5d767089d3c49b25fac7fa98d713dbc0b2343cdf2a366a5d4ab7471866b78c4b86ec2ea9ed2a3b88d632aff00099a823c56932eef496e47720f6d52069a8d342e122819d155737b88c08ca8c56be52b7b8bf9e9ec10327579069f988429b4ec7c7e9646774352d5a7178f992863b9d37e90ade8ad0631134b56a74c78261faa19a7ddf6970e3d46538d1c22a53529f2c7e63ec563c8c079727c3da0f6f066ca5d5e5ed04b17872bfa88b35210625ecf12e3257bce941fd7ec43278051e04adbc58196a3e3a46592f01bf823cbdbdedc0f4a301f4a3f86748eafccca130b9f7b56690362d81ac4cb147435bf7f4af1102c29fdcdc7c076d87e692f881d788b6018bd8f437588c0e25b77eb2c515ea2b1587aed0503c28f96d32f8b8662b85b3cd4b97aba3bb27e7c2b00a766250ae42b6f951c55974d7fc91c2d73b12bd6c6ed039828e1c6899f77da25be7541c5e9e4b950db95abdddfe96a0ededbf9113030ebb599ed0990da0e3ac346a0282c715efe02259e06751a9e7aa13286dfbbb9306770f5cca8b9adbe7f683b34388efb40abdd140aa63304aed9b358c6dd2085a9efcc4a181b34423899cd2e488aa01651420ce70d44e9f5b85647bce07acc933a01f2e1f7e346bbe21702685b83965251e8d6bd1fdc7b23056180ec8bd50855666b6ade6b934f4fa6aea153235c9ecbe91bff0030af57dff9e0bb1ab02ed4cf3a1887ce3dd9f6f8ed10b82dd193b5e62a2480b6d50fe60e943faa58e528991b44b52d77977eb173c222554b510079b31e6f308e1e3f1c414a263490bac16c030d81b8357a894eb588ba240e476b91f9b4168a2751f7983d5952dc6e16fbe2556ba8b67bbfa9ac445360ec302da26f7dc7acfafe7ea35c90ce8c94fde60cce0e535573c6ff00a86d3653ba9a7b6212aebb3f457edf2912ec169823b8f9905ab59e0d7b9328ecfa4dfb87f3de1a030b605825b98d146eebe31bc14729bbbc7683d635ef4e025eba8a4d28dbcb1eb08b6f280b1691bcadd4733cdd152cce5b4b130258fdeb48000c4c42817c524a2e07789d1abe6fda0b53577621716c8b240ed7a258fd3407b740f208c9e02cd2f7aec6084b7bd0b8035cf95d3ac2e9515e6a6644cbdfaf9eb07f023e8aafbc4d487465383cdcce85f94b2a33da03de6eb2fd49da29eb10394b3750ad5ecb845a8758588058cb0dd946ca06cd33dd07ece4cabdcfd66b17a742539288230c285b098668e4f9730ba4d26269f620e63843a673e9c86e4d3488375f9b4023403edf8fa6e1137dcd8602f2cb7403d66a81837f6eaff65b746014d9cba797a46a924a52dd8a730c90d4d495e59c8f053f9a8e6b9f35438e7783e81f395e661d5e4cb8ca875f0b0d59ce943443af900a3cc339a03995e2fa1eca98aad5f3cc49a67959236ddbda468f54199752f0a26ff333236f5f61fc7865a91f70f2262a21e856a45878737269f78f7a5a6f2b553e9e7d30e9b139724c82cc1b4e97cc283af76c1b186acbd45ab10082c70dcd7a8a1a6a9e4fe21c91182689a937cbd0c08b98da7350b036d6efb7de0a70d2d96e74637c2724557a7584c07717e90f903ca69ef9c4fa26aae222ef03eebf4443e9734df1339682b4ea22a16b18a397ce631bde42c0823a240a2b5970ef1b9af4f47bd4ed735de1bc50eb754300a6742aefdff339c20f1c17e902538ed321c74d7ea40c12fc294723ec8054192de7329dd52de8e91e7a759a2ef12b15e0fbbd94f3f05fdf0d57329085f5d87270cb6ee1357c31764a29d233e41a797abbcafb0c0bafafc7030ec96c49dc686ddb88cb40e3fbbfd9b37f96b528905705ca19b7206383aca6a584ec765f4f0b2d5bc3d06d2a83f0c7d121ba5d869bf3f55531a87a5bfc4112d551d47fb3712f8f3800d31796d73d1dde38075ec188a1191baef747ef040b64c97b7809c8a7d655d41f52bf9ff8dcb73b8b64876bee6841d1afad4c4cf2655cbf56d2475d9c0f15bf88305a293997330cafa0cd241d323f3ca663a65b536d6b166efa462cc13e44f4fbf83ff609d26633cbcbc3f9eac5305d33d195b30b0343bd4a8dccfa0fec47f553c897e0583ac5bb7d79018f644a7a0dcb00261606dae10f031cbfd4a743d5fd4101dfa3fd4555600b5f60c1e08c1262d2abd084b2d7f87dfc3e8a2f6dc3001c415cd36d7799578bd13d98a3416ceb6ffe0286b520e0155b71044065688a1048d3e19862d2dd0f140e388ffc1ebf64f8bd67cb733ddfef2921a4deb3dea02a06ab44a630fbcffc186dc0d096d57e64f9ee63742de0ba668cdd0905bbaa311b27add29888d00faa7de7fe13ecbef19aff00ed0035d3f744c04ee4c0872370e93fd9cb576b959f7dff0084763671577c4ae1d8624fae31a4753332ac6344d02ac0e3434cc6529515b6de739d2978ca1752c0aae1a741fcc02801d3ff0008c08b075298a0c9962fa8ad77ccd6605072ce9e6332880bd9b63bc725300216efbbae6757618ce8aef7298d487456839e9f45016803762548f22e6a81ff0088d060810ad1e87ee08cabde21cd1b3afac476ba7fe1da9c06068a3bcb603de04607459a295cf9900cd12fff000ded1f7668767802a7566a110fbff93a3c0ffc37b47dd9a3d92cd177785eb2bd45b1a26ce2ecbddffc3edc45554e13b77572bc3e3bc66df734f498d3c2fc52512f41ccb392597579823a232e59f5dc3ca850de6faa694ae02c3a3c62b58e618ae0a185ca9a98edb2b71d22d1b93ded7a2b686cc0553469e929be78b6b1a7465a2f4bcd383c20baf542df45bd9cf9c783a688add0fe12bca617d86175ce1951e89a1bd0d3bc02fa7508ceeef2dad0205d301aee690566255f934f286ca8f20fbfd7284234b56b357d895ea2cd535b5aaed89ac1c96eb30f57d9831380b4cdb18c6bbed0e055b5723b539ba226ba0b705d14d1741a82fab58c56f003942c5d31b15fcc7a2b9134af3ce9361b9c06d4d6ae3d667954b1c990f2d21d6075b46338ee63b9150bd92a08f4385f4990729929aaeab4da12e2deb36e7a3a6a1175df02be1dbffa1bffda000c03000001110211000010f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf38d2ab96d30c34f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3893de411756854ac638d3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf1ac12913a16db89b50e876d73cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf0b91017751985f14721d76f0bcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3ca23fbed74c1a43bed989bbd3074f3cf3cf3cf3cf3cf3cf3cf3cf3cf3ca182fdf3d3f56d8dced35cf2774f3cf3cf3cf3cf3cf3cf3cf3cf3cf38f1cdb7b3b3ef2d6ec91b58666f7f3cf3cf3cf3cf3cf3cf3cf3cf3cf2c125350843953fed42eaf395494ef3cf3cf3cf3cf3cf3cf3cf3cf3cf3c33fe74b7dada5840ab72f214ccbf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf08caae926a70fc3bd73d8da41bf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf16fbbede75c38ef2cbf2c38c74f3cf3cf3cf3cf3cf3cf3cf3cf3cf3ce3b706db251a09f64f2ed53c2dcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cb2ac6745661f34f35a60ab3cb5cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c13f6cbc54e58b1025e951abd614f3cf3cf3cf3cf3cf3cf3cf3cf3cf28c8427779db86f234796ee029d48f3cf3cf3cf3cf3cf3cf3cf3cf3cf285378585b0c9f2ecc2fb432cf8aaf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cbe647cf85d1a89ebea1f65e91ccf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c5d7e449855da1a9fb83e8ba3aabf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c224635f77082a5d23f1954556dbf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf200a4da880d03f02069032ece0f3cf3cf3cf3cf3cf3cf3cf3cf3cf3ca00418d83ec3790b80784e1d774f3cf3cf3cf3cf3cf3cf3cf3cf3cf3ce398c9cb45e6c069f9f9aa3e9bcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf1cf02cdd5ab5d6b4c7e011fad8f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c62e810b0cdbf08aa56c73788f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf188082ec988d10e066c883cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2c53498520206602c33cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf0c7630e3cccf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cc69c979fcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf1176187cf3cf3cf3cf3cf3cf3cf3cf3ceaf5fcf3cf3cf3cf3cf3cf3cf0c30c33cf3cf3cf3cf3cf3cf3cf3cf3cbbc441f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3ce69534e38c30f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2f5fd147cf773cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cffc400221101010100020300030100030000000000010011213110404120505161607071ffda0008010211013f10ff00b482cf7c1607d982de60e40945b37f90fb61ac01c419659f821933c00523f9ec06b613afc96f6939f8cfc18eb993020369a7fa9143beb9bc41500c43f58763c8fcf0e92ad24b0ee7ee5a187b00c84db463a86db65c6cec848b53c2e6798f5c444096996372dbb61ccfd645cf9ce63863d77a876e2a03442ac6e0e91b96732179b80084e483a78601c7b0044c1c7776567ec9b812270f85963311c78f0da25bc7d81de25143f96b94cd5a2d867fee3cc41c13fbb3be1ea591c75ebbd5a0041e12d00b2d58ed9cf8219183226168db2ef83d7cd8f8501d0eef8881d271f01019bdc8623e49f5cbbd6264056877233b8526f81336968788e1b2c60cbefae8a9a31c1387306e0851e1ba65bccb29cc946b259e31ee0c9d1f5872165f5da18596ac3ec5c20030891348713c103ec7626b23ab324d3d60d6d41ad846ddaaeedc1973be3ab27536e7d13fd4f11cd9647ac38cff0012a96cf0f8581ccf06c4bcf8e3aef5817110b661ac387b392e40b4f01639483a490e2098dccf82d5327f91eca12f8a4de658e3945d921844233f07bf5f941e474b0a3cacb22e62162cd87e0b91eba008d49708463893b900309a55fe41bac8a310811fd45b842cd7d94e710a1c48b367500f12616ddc03051c4a49ced6132526424df642f39c776706d938db79ab26308996d3888a6c4c4f71ef18130f0eb1b970f30292afbc239d25f173e18841d6e4bf42db6db0fe8936ccf1f398fd31e902b85d35cff93b569fa41c596173b603ae73605cfd1ec23384e64df5fbfaacff00837fffc4002111010101010003010100020300000000000100112110314041502051606170ffda0008010111013f10ff00ca41b1b563fc00d880176df0b0c033fe9227d2780591150c919c9d27681f76439e533e8c63acb9c22aecbacac819625d89d761120b15e43f9263f3e26ac092392bf3c906476406ce6b1d364dd8e44d3e7c665c3add765ae4809f01d93f63b12c603f6c644c3ae7ce3b3772c72c67ace9839637019441dc932da643a43970cfbf94bd274df880218cf106470d930fb423d21df184f48f9debe1075b5ea4de90726080094d594e30e2cf0c2471f9cb909b698cb8419c941db3f64c82f17a7fb27081eee1f078ddb2ebf3b31b8163a71649306418c2418102caf8db92eb7b471979f3872e2761d119c611e8a3b1e3a962f4e49a784cfc833c3ebe71e4d912c73671fb2afb8f0db6bf968ebe1f049cf98163a4b3969d24244fc8b1366d272f48b9165eec827a7cdf92022ffb93b8471ac627a8f6648e361c494d490187c6f8f76f64efca20b524c593a42805d8c353bee485a88eb0fa585ecade5c6a119e33efe53d5bb069612588059b272cb120393d3b21c44ae5ae408f8bf286c01ee12080ec9eecd8f71e6d9297e0499e30875c935c9f97725df02f5118327910b2699264084bda3c0067dcfbf9f3b1ee574cf91f01d812312eff0081fee7dfcb9be43676385e91ed9c85bd861df3b64a667cfa0475970e390497b5ad8905cb109f7002c07d23b0e6cbfb1a2d1841b27e4eaeb92f7c176827d1603967ce2973ddb2c907194c2118574e5b23f92a43a4213afacf71cbfa44036f47a9a0b0a5ff006b43d42cafd9ec30c7dcfb8392306e07f04ed961649cfe10e43a46ddd9f5fc32e5cf8d40d6fc4e4bb9c7f11b504125d4d61fc36c0899125bfc53ff000bffc4002b10010100020202020201050003010101000111002131415161718191a1b11050c1d1f060e1f1207090ffda0008010000013f10ff00fcc3b8cb898e1f2a8191d778ff00c918e88fc053f13fac60f25a5167c44fce6ce6c044de9cbadf826bf78a6b7fe3af37e99e9c045012e9fef5fc60447d4007da07ef1609f230fb17fa9f9fef62f0556003caf0640217600fcf49ec61e51d9a6f86dfaf933440c050074294fce006cda6d87ef38c37da3fe720e08f4196787ab84f63e1c51caf8ddce4dd0e4411fa6985900a0a8f94bfb0c48c878bf66e7e3145ced20fb721f732603a3647c41f132481b4eb7fc957e0f9c523102dbcf05fcc3eb0eb0a81d27ac3fbc697d920516a2c46c95a4254b99ac55ee45452f2d7bc34b028134396a2e12110780ff02601a1f2377f0e3fc6b7fe5c1709e927e9c0da17451fd8e3ac0e55e9f5ac5899e5c1f8b81292e469fc3b3eccd413014afaf3f5914da9aaf3893fde2bc88f0a31cd422d4cdf4a1a7de490001a339793ae4f90c9a0a54447ef4f3eb1a41b5e7f3505ed01f78b1ada928ef9dbc3d3b50c39a1180f22693fa7effb771ffe6da74b00ff006e80efef01f6d01a5c28bab3cb7872d61c42caa42ad5f2ab6e87cb8402f000fa3fddcd4d0390cf8007573cd2746ca597d71c63a748eb87eb12168041a4c4c042c594ff008c26aa2d60a78addc8e20b178009fe30ad20dd358daa0eb60be8223f0f38e206aed01d00aa74c5f5de04e886ed8f9387cdf932ed242847e47f9d9ef3eee3be347bc1600644d5ecc6608dbe81d9ef0980462b17b3a474c8e4643dafc7deff003f9ca23b50aa3ca94ad1a23a39358042a2b54855901017818340c64a2480e4ce526609d517b5dff6d575feef3682826e1f836228a29481abb110f9d29179b6055280fa51f5fd3a38098f07b560073665585b724d48e618079872ab0055d31f217af8207ef2280f59c7c3cbef0a26c9279700b66d3d3ee39230e8884f8c11a5f60e38407618bece8c3602c006e8ef5f385a448758576af24c3b72dc1b79d73ac11036dba23e715f274268f9439f9378ce03781f9243e44f49870b470b1bc37f13a7a7ac594ec367786c52838abe8e3f388840a52acc3681d6f1d2fc3c39530052bb5c23ec44fac420da1a17c89ce190494105b364448224f3a4d3b3011d1075074d91d289a49fdb67edbca8d37c8e8d9b30ae0141e0e55daf9555ed7faef2386a9b4f44383cd5e12082bc2721d1f243cedef3580582ce0f5e0ffb8c75192e0dd857960578792098e0a20dbefc6063228af9d65dd86e9f5970e3d673fc671750eb0ca0edebbc5b11d279e4c5b5247d641bd3d2634028d0367c9335542e99c1648bec9e1079290211ab0f0bca6bebf805036a977efc984209da3b3fc380148c4104f066a1003e13f6047d8f38ed83d2a33ef2aa68206f929ece4fb3bc48c71f81b37e9289d8a3edf722b5a94a79974cd88c2e1bfed8ea9dc08fe6fa39bdb8691ca333d28516756f3ad3fd12a1ab0c4cb7ea085e443d6435bf474b60bf77f2c674c597c6868fb41858a50d5051395a020047452e695aa97f3846baf78903ccdff4593d19353638f678c40268757abd9844e1e618ca69079c871d1c67178e3cff0045cbc7597210d15178aba7f49a69970c5404473b709cae7a6470c2a115089630e4d8d3af4d3090028a238b7de04c5004086c2e94120f293bcd9e1aa63419c55b628af795201916ab857b111f8f788071567d7f9214f8cb0820b0ecef0562eb4abc19c5fed94f22f3e12b1fbbf594d095a8c3cbe078d6be7acd103fcd1c1283781475bab7192936c2ce900295d77c7463ed14565021419e7b9be6d1a3286b540cfdff00ea67302b5f9e3fcb8807945fc606fdf4624d6b3f8f1fd0cfcaea38c5ecc0911800558ae38500ed4f432cdf062d5645eb067c679f1825f281f4a58f8d47ef2c1c14c0a8b02568f492deb2245654088a0624508a123a7928a9f7ed3c96f1cf39288480f35f01dbf186ca2322f64eea84f7e98f7654f35587f97385821e81c1e2803e3db9ade760e8e13ef2521503c5b69f0a27a716b0d4a5767cc3e03cff006bef14e5ac3aec7e03eb09415312dd27e8c2653082aa529d140f6ef7312454f992a068542c8a135acb4170ac9a229a542aa1c7499ffca45a9fac8cf08fa6bfc196af60c2e41d017176f749ae5d7b75860422bc068f9d0673fef06de74cdeb004f67f194436f44e73b4d9d388a4483512a23037a6c6ef89dd058010681289e449f9cbcf8c5ffbc65c1c0080bb3d81b1416542e06f41960a8f0a9aa15804003bbf18bf9c4651113e115e446243108ae81c6800265d8115707e42ebe38f18e30a3556a326080f273af6642c074d4c80868253979de2a42e736743e9e5dc05de499461e03b3d2bf581358447b2abf09974172070697e41fd7acbe1a72b00dc38a86beb871fdad1e5d82d4894ac00ff005728d432c81e0e5072e8f93952c110145616cd02d7ddf3864140e37482338daef8f9b2c2502aba74a2e629c70c8e73228af022c03c76fac2ac1e2d8c8a3c2519afd172c34626f42bf92bf4759b4709b1f261bc9fc60cc3573f8c4a1d11a7a70d2829bc6c11f02674178ce3071ddf27794f838c69f3f18234511a2758554209a13afa15f8384f69112c4e4d4655749f385ed2452f699c822f6fe665d818137c9ec11df647bc910253116a772d832de709d38d484e12b39173491a0360c7de83350c12f23a7f4e6e23b5e8625f66bef07b0283a4e9fed6c747b9a54a12c6015adab23af221eb98e8340823692dc21b74a541b08975be4e7e31a151d04af6840fcb8255c24d178bdfb3af67181c1805195e8d0a1273cd80e11e011c41c07b0dabcaabe32f05000383dbe316a81d77facabf279649cf38afc3b339fac32dcf216f9c299c78de2d741e3ce1e98d8b4b14e3437a163aa3a4623d60dbb38c97ca69c0f78262f5fbcdd6048368d07fc50c232046594f0fcbfce028b22e7a0078df3bff006894061c05d1ae220c3402109685bb6ef9ef39550c08a1a220248747ce13b4a6221dc0f7bbe5f78930e3074bdbfe39f8c9ba9c47615bfbfd64405be5ad17da03f7fdb375647a007b527eabe5cd0612b0e3c33e00c308213f3800000d0027e1cdc064f2a830e03468863242e02f2e1bb4023cba3f9c3d441fc01fc996ef8ca3e4aefc3855f98fac06a837e7065889eb2e6e9e647267a3bf00a7c80fd6110250352953e4547e3de52704ef2db5bf3965d5d64ca41513b64b0ec22f8a79c1b712150344d4f8c530fa9b6280090413ce9198662566c321e1f7e44e36aba05511e0fde7d9cd1094057b3d64ca1501b49a4f743f19c4078d0052fcafd98c1d396bac130d21f031fd3974a4bee659f553f7fda55500305ef434fbd75fd18a0055ea77940b673b110fa103c06489001f1312ced7c62879df1e0f9fce2abe5f1bc8aa03158b64404a1a2edeb1785f1bd088c150ad4383911503eed6fa5c586f459904d3c79a64494159705a6c4d391bcbc6b102f275e7352edf019540a023e40055bf1311461d79a41b06908d3f1b73416d46bc6909ae61e3bc065e5514e4da03a45a27091c39457b1ffa60006fc708e97c054f0fb0c6955a5e68a5f61a7d983700344f314ce2ceb0486b69b10dfb08bf8c6272022bf43e4447d98707b30da55817ac9f8fc8c1de78b12fcaa7ef15de28f902fd2fe7fb47fbc61e70190529a2baaeb795948e8341f9d5f999d3a9f3811fb4cb742475a13feb355c375f8cde988b4e8ffee1b2703549734c5611e50ff8cbcc81d6a8daf029bf12759230dac0d029e458efa4359314eb3c841ded4f0f5b1d9ba7a8a7e7ff00791b00795758a20409b5bb736bb1dbfef1d49416970983c212400d5576a81b55d6449910d52815d875e4358bc832ad1e793b7499300cc6800e8395477f381291b429f6b93d9bc99a7b6e8b455d1ad06727ce40142e9dcf9c6034809f234cbb68b0f170fa8fd60f3ef3ac4d7186d60a1b4e1387feeb2eaadf48b1fa21f87ce71f0ef0c74dde890fdd6349e1e1c1f0807c8f3ff79c957103d053fb512a362a1cd16a4363a058d73e5dfcd97b430fd3281e15faff0006071d0bce15f1ef13bf4900799b9fac150180d1bc1d9b77e97cdc1908a47b452fcb309930f29d85d1209dca685420854a8cab7b3b1ec479a045d0287aff008cbbb1e2f93ac29f18eaf78a60136c133d22f99305b1cd781e47c2344e91c73a3a3eb35b82b449b14d7d26562a6772aea277b2ce2ce521a5ad0084f50e43c9dd4d4c744955459e546ff1bf2386ca48841e8d9d9ecfe7596209346d4ff47e4c93c29a7fc65a3e31d4f0e27e1d65590257a889e82fc1f3885d41b1b69d37bce200a6614d9ea2b971224292830fd66de0afc4717fc1d6fed5fc669873bf3fec3fd6717b4cb4f8e1c582ac036f8c45067600d3e9ba0edf4346a8d03c9aab48147a301109bebb427337a7d79b92a900bf5ac09941e35001e00ebb7e2db2b2009c97b60ae105e9c9a22ce1efce137a723c9873da54f78206a328bd23a710e2c9baecb40c1aa538ef01038d903e06c7e71f334004930f1643566e54c0a2018a23eaee6df6d7814684339460fb830d2208288be2945f4ef1350289a5ff00937fbe335084d78c93846f1d7be9d875ba3de18bf9316fb08e4f20f20f09d8fa4a7de1004c8a176436ca3d697256e93082268dc12f3d1e31f204ed3246aed017bc713ca3f2383e80fc17f6ba387f058d8f02ebeffdb06de8b817fee30d0147b46abc07f2e8f22abe7a2ca84ea08ce801f185c44e5e8f47fbc5619c0745aa49414dcf303114976a5aa474528c4f3c6130d8f5c14c15a00ddd9aa36aa7ea3bd2bb8bb7a7974110725daf63a7e31909a4ef0b1a1f01cfc642041493bcb1c0cd9e6f8fddc888811e00e62821100282e0101c0ea562a90d23b53797c0915852a1177f4e3d19b91204a4bc288518ecd60311588553b1683d57d171009416328aaaaa02a9e114d38681c30abb44e289f7b7de5d545af943fcae4ae686c9fbc15cf3f79fbd7264c493909f623f18b6e004f2413ee25fbc7a553939844d7b3e8c5d1d109912362be357f9fed6c715d3f9986d5cd4fc345fa638000c664608f6ac41e32304ea9d9c6fc0795f82b82e41967411815d0843d1f41a80b21eef2ac039741b7646aec08f96093e2fc985417633f9400fb0fb30f060b7d02292afa6866f7bd4fbb8d04e4f7c5f6e1d90c0f224d7bde57144f47d0f9afda78c351a3d89b13cfbc5abc6cbac19ebc263df661886c6f211c081077a4189800200c34857b8073dce24ca3c0c6928516422684231b480deb00e1340bdc89e10708e14a010a8f911f59360156c8205241554e5550c72b0a322140391474ecaa98d8c255e991f4061b8005d2891a2c5dd08a1462a43ea8b402f5401b6aaadb019f1de5d0e91b9441bcf74b4fb1737318aaf7684f4a9f8f19e22772f82ff00266e514af02853f4df9c056c15f623f4bf8fed748b4573023fce00480175028dfb31a8647ae8886d1b0253c8373523850510026803a08668228085b608d0a68da595d2e3084303c2d095d365e040b0de704dd6eeb459cf9c8b5206d21128096879d9e335a98e0a01a0e4f0d9c9c6d292278023b6e0e7bd0be11ce7652a6ef93c95be71198ea43681ba03c880bc65a7366a20c44f619e38ce6c09355de0cbef69d628d59dfac035344456f5971a442245d9204579014631064061d694168056cd93605769a1385f3ac619f900ad7a01f898b1a0224e4c4588cbcf0df5203b53cde6a9841e45bf4a1fac9323ebed08f334a70d2f58a8f02a81d19cfc6723a42ff1fe303c00abe1d6226acf02d13e030ad81eb96200369d30b2fac93aa68454d1ef6c7eb2741abfc563e5060fed5c609c68aaaac5f0edf80f380b0220f40d1e8087d66f5e053c0aafd1fce6ea120e84941fa063a6676f3b297dadbea3ac30c2424c10294d2cac346dc4321d4a3724791016d2f218d105358d1a0e91a3d0987866036501bcd89bc2a18c1a26437ee2cdf126460260518b4a76a97b321a864ea385b2c02a6c0bc0828039b83cee27e47cbce0c121e1023f65ca2017c8affac22266f72fc0dbf8cd2900408aa1a369f0175a50046290146f345558d4400daa354311a2000b5b019df2034441613b0453cf3f9c81b808f330d8174514aa4bea162a0a950d34236243e57cb0d20c12408fa147c857078f193049e999b9e7a73860dbe828fd81f87124045e02a85e0ef15c403b94c07b543f26408483d857ad533c13fb580ba44c58281f2ba3db865d34c82343c1d3c087581ca6817abde3b1a004ec603f42fb31a4065420252a1035ed75aa631cb0e080fd2bf196f248f15fe4316434d21976da427469deb62884a6d4d098a08e428e1736022c7a55cfb3f9c294ded25faea7ac262131ea002962800652be5a45defe31edd34417c8f23ec8e3950f4c07d3735cf6c347e8c0c7284442f6ac4f53097d06594809c6851f583767dc0123a30a935465f1a0d83aa556ba0aa01a84e66de18d6b3b23f44c39f67f384db901f105ff0019770ebb803bdd0457b61cb8104373500eded5aaf6af3ce0df79c0f99ac76f29df9c183df0e48d64b786cfcf1f78c3a05b86e78f5497e27bc73e0054320be443c874ff006c2c32fee947dbfadf384e15937cf23f4fac6c432b80055fd648255514c070aca9c56619013eba2204f684fbcd021223db71f3905c55e0569bfd23eb08219165c511504a417a64c6a0d85558058582d7556e6c44af06ca7de23fe703fe3261811f9fe939d62c5469e934e7c3375c27830c8015be6723ec7f34f380b7c770f22de895f00b8f14e7c24874b50e8031a01cce0fbc3a8a273c807cba180080f75ae83ed627e0eb6b2f4b845f3941ef8c703a702def58a386236f8c08a083a2f3fbc249b0be7817fce71fdab8c4eb0bf987f59d86d4bf43a3f41f9ce7290dbd9fca0fb705042020a902ca5e8ae38845e48900029ae64f91168289c22a521c876f431d0a2843444a351113bb13e71179ab18355060697b80941e102f5c78b00ce1e75ca0c982a31ed2eb5745e8313577ec306f3dca280297790747958c51e429ea9f9d7f559872c822020889447913b1301d3be4fcc54e24921a85157915931a0410e0a852001b3ca71df22e331bb643819e22b3daede418e00d9a38f83d63a61577353141e2fbca9ab5e2bac5b4bc778bfc6717bd7396ea7d421fe571a83575f01ff3fbfed8c201d53edfe5cd4015b3d87fef1a04ac520809360c54eaf9c0d240810a57886e82100b5aaeef18089213408af016e0851ad20111e2272f112eb25a790886642e254001e6955971c2d814563c6dd32f6910c022137ad1c557edf39b2fbcdcbcef05254fbc118372cb979c4797d64428cb4dcf8e61708869115dfaff00a62a2e644e3ebcfac2e652fa8830100b55e0195263203129547d6a5201031af0e2581495103c10383b57973f6dc189deff003fd0671c9819ce05a74972b08165b4b0fd06315ed6f97fa67f6ce489f09a7fc61f2505cd3883f2f8b82ae094888897862fff0031d412a68a0d7420f79201ead21a81080802bda8b9a9cac800631a44080d52c374d42f93805475a03aa8e035f9ed9a44b6536c2ddc889d04588794f9ef0dfbc09ffbc0bfe3027ce69e8f38877c79fe877ea5c6b06847338278e7180d639447bfc71fef0d403b4ebf335eff008c571980d02a91ad1745afde3a0da6b3787e07d3e7253f153d3a4fe1fbcb6ffac199b13885cdbde5f9b8baf8c81c2fd3c3ed3f03e71c30a1437bbfc605b386f811fcbfb5cc53a243f33f43174a92af8cb9808f81afc40fd387b8a4ae555183c6c7c2278c4185d25a5a89de9bec47cc203a5b7c9f0d07e267caa68bef68fccc9f0b5100fe1ce3b63a51fe3177bbcc61c297c31fa4fc617d152662eca5a59abce367f898f49a2d00abae7251e9b04f4911f6e9e970b687dc3fce3380f75fe0c29f80d1fde2763ecb33eb83eb38e0301d045fca8f85cdfe082f7eff00cfde498aa8f5f18500338045f9767ef141210e8078459aff0038400144689eb2ccb8a150036af01db960d2a0761d1f80c93e847e21fcb8484193dc10fc3f8ff6a776d29ca1d076bd1db0c5556165a773543ca58f3aa8dba89d205539298f94f384d829d784d3fe3f18a50595827bba44d4ef1840aad27e397a9c24144145ac328792d04a554188d92a356393008ed5a676c12ef78ea0dc2dfc28f1eb09143d8167e2b91e8acba15fb992fb9a87f8c63481f64c770159402afbd6063aa8236120071b2a0ac98ae3634025a14a301a663844236f71e78a8bff00b603065d96b7b17685f54e12e0e4e1141fd27e11f58a0509cd227d602c6fa6bf830850076807ed324c1883af27f2bf064c6a322605bd9ddc63c3b9817020e85e70c3428b6b77789ad85d98c1000b6d0ff58eea49a272ebebbf8f9c9003080036c0d1da865baf02b8e1d9410daad87bb0fbc25d5c8e42d1f51c3fb4effe0aed858f090f7971042d682b475b3df1c5ca58d181d8115061cb399706ea5177e805a253c921b72c61713149e95edafbc95914292d74f11bc77b379aa23b37d0ba15e81f18a40a0243f40417e88e028f6834163db0c62a70836a2010022fb29c7d638b642e81d0026a29b6df5968223380fd62a01cd601e551866d754a658ed1b16102b66ae4dd628a0115a5275def86d91071903453b5085ec8f370696a0f3105df00676e1386103ac40a303c0e29cb7c6138eaa762722749814914509e92f4e9d7bc507920b5fcf13ef1dcd895475e40c018344248afd54fd62ce7236c82c13535deee7eeef17e439e02a86ff6e2002aa088e80fb3f20c9a6a40670fcf9c391482a5fae03ffb8df2b45d0020390482e974eb0d100561c0516f8a27b993492d3cacfa1cfc8f39b3946fb4ff00631644a2fdbb0fcafed30d0963e55bf8e35a0369774d9ea8eb8d6a76b8869061c03f013eb2ea1808289459055e97ce20b311281053b5d71efa718913a34d391caa43cade1c610c292f889df079974684417d6900a0c0c76e811e8ae54094e47abb6240e83701de54245960a059c0d57e1f741a86495a3a3629b0a28692ba81e638647f6396e2cad89be57bf9f7ac26a028482a0a59205e77dcc10af2da2b67914d08911bc01434284736a6f7bd2dfa4b927c8a4037b576ab02bf1e32c22eb7b391f0c13d984c870f506bc05341eab35867428253762f2f532040028e1ed23b3af95fbc341107278261a0146e3dff0006be87ac2e21a274d371360d3f439140e2748b4bab19c288c4ddba8bd71de22aeb6f845fe67e70901b2acc47c236f759a7c966def7d15e77b74380cd01c98d028d282e95742400c320762672ab64e091971b714445012874e5af9759c58101ba85fd2fc6110505bc8c430a80be0f407f217f68f58ae7bc414345453421761b1a38044897b5b37b9a90fbe1cbceae401b5c7b28e8d9152fa0d91635022bb696c2a001668bb602455e1773708e5dd8a20f63d84db1aeef2638d002d53c23fe7028010062b41cad41bb12589e31381826c2ec4acdc47d9881b07709087706074a1d622f1196e225905aadad302a6124a10e12a7df7f661d22042a091f98cfa3c650313526c179a80bf58fb32141f016823c1bd6fbc245011f55520138cd26904f2e2adf638da58fd474b27d981670f49c61c842888c27c3de0ad8a0220897befef1c32de81d9e8787e4f18a5166867db475906cc10af506d3f09d38c954855ad47503c47ada6ea686380962ecd00d22ea73335816ca877208e90af28f6e57046d12c2b8075568169a2d2c1c125d76702ed76aaeb582291c64342dae9f9bc98511549c0a5df096bde9e56dcb609a84afbf3f780e691bdd21f94c7236fd3b57ed337e1193ca849f5f8b0fed1e73a90494389e555000554015cdd492a041b5b292c59a72950d5267e2840c7c55f2738a5815042f9f2cf78f80641b48161def10a7885d92a8b12d6265c318991f242791dcea3822f80c6d135caa8306bc283987f02d45daaddb5718802806956045000d82edc01ad0001d0e0fd60a4e02fa161fcbf187626dc6409f7a27d3eb118a3018bb391f3facd5e224758b681d4e3bbbcd92ba6b509a3e8d6484aa0bd74ff181ff00bc98a9657428bf5961cb5a90d52f02699beb5b785795a0fa29bbe16ce38c240576a578ad50b7440f745696a0210a2f1e513fe30984c1144d5f0b11df579ca355f88d534277b2264d027a242ad0f4508b39266d4942f12e94555be5bea101d81062b00a06d05eade36b17e0219d9f32e83b389e37904241baeb45e743ef48ec69ba05d3a411fc0e4d7580bc0207f0194bb3f340bf63f19f3fda114352800aaf80321412361c6e916b0643d2b08446fae002b0e83e79727388ee392704eab8c461404448811146b92091c4327c31e93bda0b2d04d9704a040ac180512701c5d184b63b78c23d146d7a00e0b95b33c6a1441e4a8a6a81de1221624348cafa763f3901076f17e17a9dbd4f2982514a3ec801d01d75a31482a14138111a35e9fce5f6e9156475a151df3324b9978421c06b7cbc7ce1114a15536b0fd98ba147ae3fe530fde181320a894b35665e8884538404413a3a7bbb0f500000903410e0c39eb478724c2a1bee1f811fa7cea401d50001bfc8535ca18c601a80945450e786d9d6153129228a6a73baba35fd32d0735db7106c275ae7d61a46b81bfc25c35270805740ed3aba16f311668c7ce080358b1eefa04f0878dec012691364ebff007eb3d9119eff00f633b8387f93f8fed331029e550fe71cf156c074b66fd8e1a34a34668f9b39c0c517549fc39cc12da69fbd66e9b1b8ca883d71cfbb40c061e4947d2e472d558bc5ce27155e0256721d74150379605178285d85d2925741d2d631592ad879e74e0bdf0b58fe5518007c0340d00d06bce1000ab2856b0eb717ca578c7544a0072ab0fe720450001ccf27b3fc615a53a4131e40bd8cba52124a2d3a1e6f513890474035240a9e0c526e37bc0ef027e407bf8dbeb08c53a6895e80a3b6aa24c83515b3c14f0889f53e05e9f687fbc13c8ef87eab80c1a9a2a2a76a8c02ae832f9034708087431d7bf8c141a02a800051cac6789f1924640bba10f60cf30e5b44090e4aaade02a8dfce21a6dda113fe984908e375f4f1857d2f70b797863cf2044aadf384420c81a862fab73740089ce807e359b5e4df80ff004ffb55e440f4da3abecdc25cd2520bc2ee5f31c646b2ab43d2b5f286082883be75c89422c958b76aece27788103b4815d15c94479275b32a633c8d01450f7bc399c0c28bc3120487c561cd8d28058d4134070400341de31900aaea79713750ac6c8ff9fde2b5681e4a33f23184800aa07e71f9d845f273be26b13302a228414bae78c7b0343b036edd3c6d983c1eab03401c9003c951636e2b033b0da55694775c68d38d444399bd17b2ce746540300b685390ad699b39de0b61692bfc021f4a648646d9f6a3d9ad3de1b4aad87c50d2fb57db8a002d5ab4457f27e30214115e4ae2fa6635087d20b07e80fdb8eccb4857d38387ce6b98e0e8f963f8c693b48b478608e2834432f57e7ef082802e9c817fc668d0203796d43e23f9cdc800a3db1fe4e56d9181b714f7117d8fed53b4e031d063d6ccf7f193c4c56006d56b40d03a1c2348e5314e7bb9970117b81151f5ebfdf8a7112cb6ba60fb15e93846e360dad2220519a6146f7826a25516afbbc7388639ec35e4f81fcbfcc1200baeb08536ac3841efcef001e031845950e1614fa23e9c900e80b70f278d7de6e410df9e3f8cedcc6252151f803f39105484238510086304b53ee23e8c46820048742a6cd21f8726422714f43e8ebb35931b91d0c6d5217bb37809b2591dfe3196829600fc86bf371a50f2d7f9c1d026f28d234e34e8e7579981a94135f31fc2312a84c4c95441e352fc0cae158865139e87ec07ef38df666e198402ab2ef94ff5e31424042d0b2010906d1d1f08c6a50ced733f5bf5976c2abc9c97dc0c5d50c2594dfd37376d1d79614ffae70fed325108901111076a23188f78e0ea991b8a63df5a1e04a9fd0dea02b05d69e9c3a501ac5a80d026dd3d3c85743a8361d8877d261910852d5f5d61c8c0e82fc15ff182966d0083f09a7f58c4b154f06c3edc76edec9dbbff0021f59ef5149e643f788970006b01ea2bf281fafd30a3c713ce13fbeebb29fe67d2e5c285d273b9f91fa70f08bb0e1343f25fb3188940aaaaeb4eb7904082aa3eb966c4fabc261c107911ff00bc323769413c876fb78e839c42044d4bc9efeb1db052c36a0d9f9c2140025f021e5ec3f3e05528aad5795cf185311b1bd46dff003f3878bea022d0555068077a73a4f4361255e3e4953a00f6dc95dd2b60fb81f78c81574ea43fa59c994bf621fabfdaa4cfe3ff00caa38cc168057a52cf20f466861ac25065fa4ffae11611b0e9ecff00bce413cf3787e72ca168d746f8eaa1c63a1a437aef97f9c6e728a1d86dfdb8750820adbc6fe778ef57b13a60fd1fbc3b7ef087990ffdf784ae293d2cbf90fc649a48cd383807d470ef6244fbb8c8064511bfc65922b026de29caf5c787acd8f2f0a75f19a02a80978ffae44852baeadd27cefe9cb6f977e6e254e0edd1953a2cdf9c321481748f38fa1580ad57e55c234e50417e0efde19691cec12afe098793097d893f619ee853f2675fdb1ec9e053a03f7debb6186eff0042ee14791bfcb8210640d54bbf9b1ffd18a44aec683e9edfe49895d29d0abf532fc0d80f5e4f9fe18da78ff7851cc68fa53fc0c7c395d603ca2ebd55c0979d1b87195272a3d9dffdeb287533e29a7f91fbc765488b41223e91fde584005155e6eb809edf8eaca4a2ad1f226ae1af0d22511c8d056b7a3f2f87c61287908a100fc6350aa57a3a3f0dfbf58be433acf810c778e10bd9d6f156a0dd498d9960a3aa14fe27e7365231fb504fc2e562ab19c263fe3cff006ce7151b94b584d0456073428e8eff00a34c22eed581fafc99c9ca4de58c247295045e9c202153553be7d1a079de1a09b41806800abdbffcc5802a6da5dcfdf5ce1f3950f3601fef1e5d1eb036846be29fe5cf939354a88c98c21a1a396c47963fa31402c142fb30a7de349d9a073e78de0f549ec00f57166256c95134c4a0ec79ca93c0947deb080736b20785ac35e366055b59cf8c44d2dd643dbde1bbf18c6de315f8ceba5d1e76ebf8b94f2404e3a3f23ef153b69f658af95fc32821f77983f6fd2679fed4aaacbc02516a034a578d4709d3300c07b5b1f2211d38b8512452a2d3d8df8c21774455e55229dc535a5fe8dd8574f3bee82bc27966ac4246a020ce8429ec4eb3440d7f81627d3fc98e80b81a153fb7e98fcc2c74590fe5c33a42071595f98efe329ce59bf2affac78cdf9f5fad72fd64c88821a0b02debd1ef1b2394a87a1442bd6f7ce3100488112879634dbd656409ba6d7af5c6b1e41a2a583c9633de2378522f9dd7dfe4c9ff00277888cddf5de48edef165ce7ee634fcb0c975ab89fef09c12c9c0e0f93bf8fa70d052ad14e0bc10af41ec1d34018b4701c1ad05e83ca18bf1a4043fb5058567146cf8ee80da81368c5080918c0102af0222922063b96c9c028010a436de39c4204a916d1d75687b4bbc3fa2cc4fcc781cc4623d21883e49c4470f3060f747a4789942d21d22748ca7bbb116004545e02f81079678861b22e5500415da0abdbae030ee16255a0ba0a6c67a1007f19ceb9cb055de81c6931dd21f3cff00a1fbc6f290b4ab44e7edcd29c007e4d3fc673717e451fc0a3ecce2f10c07062cb67fb3d6120bc9688a8af4e909dfd610e540b4a729e06d9d62c9e70fd65df5ef065f64c08f866126a8a9cbefe335c5db4006d5e5f01b5758e63502dd02a5288731ae79bc512e9f08d8bd0e5c980e91552be52abdb7fb5a836a92b728976a1aa7044c553139cb1240a3569c9ceb7544530884a97435905d3e3246d18820d202a373a0b2170820894469fd080177f5ed3c3d787d5191907230c41d6c75cc4d8e9053086208a0878d23bd97d608b27242c794e40f2f84355c0db615502d7811021b6dd1737800ba029f389e00521b00ac3878c754c90f080088a1b7b7b864200907f6981f7e721d54aa83d12ae01014eea2b741a7af8ef1c501105a2847486f105f50047a45346f838fcc40a9ac1e20835ae003f3726ba8ac2063b7b5ede32c6f00ff000ff9c62502817b5e0fd6046b5f393efe7138e6e134fe79c5eaa0a6260af24783adc49b1dc8bc403b4bbb01f8b3ac94d9b5d5fc4cdb40c6851083ae0be70eb40779a85fdff6da1d40815880d50ef536d60ac396a2d30767428d500a073ac78e87092d44440d837b1d62948308f22b8acda8136dec1346e051bea558cdbf266e3ef4106bdca0f4193e8ec9a0413d8363ea3d2491c0d4da194a898eca6ab987007001a03466b168d016cbb9df3c778c4109a0ef5f3dff00a9ef22c2bc391127ef1bc09558045957d3c7af5823e8891fdb5fc60db7d013f660fe7378183033cb4583d2f7f2e082463a151c8dc5a0542a3a33900b2d846f5b68046d0def10a08363b39ff4e58412082a05426eb295e76c1fae5fc60aa84d2e9bf017e8c03d0013f30cfdb2b503568a70804390006b98622fb762d79f1fbeb1c0a48df037bdb166992eb58c54558600fa362c773ae0627d30fc7f705bb11ec166f15017c3e1c6734a0045b1a375475ca766b19b29842c0aa138273ece5b866d05c0416dee15c352d96e28659219c8118ad9428c1c4c070004e9b01006fbee634024a53abab8b5d53e7140153a0363fe9fd5f0b350220a790ecc31c0b20a51d967a59bf0aea815c1d2bdf9c64d2d8e0fe70940e5284727820e16fc39ba23bd8fc9533acbe787d18b180951140d1fac24048c8c05ad2d35282385c3444aaa96d8843c1b8065105d117a0959ae0980ac06aa4be2a0632d288b6efa04065e5eb19b2c08416806886e37e70b822012b0d6e32e3dc28d821056b039fac6dee971cac0f85fa2e6e20980c1cb789ef2718625f388acf681dd9bce244200f4f0ff006d44c4de8b70fcbdf40bd61fa6d8313362a080785e5aae0036351394112cee8ce31fd0048ed61ec15abdcea18d85cee5f2eb6031ac34eebbd6181319509e8000f0f7ce4acb925493394117940380818ee0832befaf1ff4c1e2427041fc60c2489ba767eae16a48d082cdb1e2b8ec14152e9384f3f789741dc8c6aa47a14fe1c70f9035fde20686ba43fc3852a059a3f7ac4a0014a957c61c580a1341851d6c76283f81c9c47161a0d3af1dcefbd4322403b01f89922ae85109eb93f8c934cd09fd06dfb70c0062040435038e1fc65433d91a401214507a7008617b3bcf81e720592c62d533814438451d2e114c756206848d2bc07422aa80011560a14e0db3c29cf38272023e087fb6de852cc69707c547c8a7795e70ac914eca8ca3363787013955d4c4a4a69b77e84a4c98105a0028aa92af00978d812728020154532554e6cc2659e243b2ce9367a4e31db0b61a506fa41aeacc6750749a0ee49e5fdcc43c1bc69f5bc31447b04cf087ef196809a0557f6e5829222cbec2e41f1f4e04d0f9430f209c44cb76ade2adfe33b505a29f28ff0039b0085514a295d953cadd5cbe48436b70f350a5e63e19bc08802d1c25e0deb262274613b046cfa338511b115fbb82060da84f70dcfac324dcca423a4e74e2a9720ce99f8517dff49894777424f405ed59a0560500216c80f511be23ef157081541a1e793f43c0e1bda0260b48c52aba34387f6e262aa6cda8894e4dd1d9ca28fb25cf2da1556d5e8038548d9c189404e113eca34531a2986af8034042c807daae1b4120288f4fac0c1d432747404800235bc175dc152021e05a1ad39b64f90bf8972c94288b5f55c988e90200b53d3ac43ea00fb949e2cd2718016fcd4e5ed05d9b96ec457a3ba901ec0222776bf064849e0a7f6b849b07704fc4c8a1488802f6b03e71966522ed16a79391f679c71524d41b13b9c2528a5de6ea92a98717ec6726fa4a411ce4503e4a2beff59214bdcfb3c9f8706d232f4fd98d44210605a20e95419cfde733ad51e7557c25f581822c9df0d7ef1881ba762f4ed1e4f17c66969987b1ad5456f688ef08d6cb481a01756141d101b9bf98a82d5818ecae87cf10fedd3fa880008ecd51a618836506f9777c9cfd6280924370c2fc09ff000620a88986b1aa214151d2088e36346d059c734eb1d14621d045538ecf03181ffac0b52bd03e07e78eca6136ed4671abd1f916346269004d0f32259ce9e138e1c2e05a102cef9aa01b5605c0b8d1e0492d1d166804372a0207ca341df22697b476654331addecf48e91d888e2d67e03b5e51b5ec471f401a85f00443e4c248467273f092fd62ad48060ce62916174f078c4505e5de805526eba9ae68f093a8e451e468395276c31d9559b5bb6852ed44dd515cdd83d2c3f204fabf796e1cc05c2aed8822c0f141feea12afd0097e960554b47861fa07e4c46c9cdd97d77f3fbcd42796ebae7178f472a7f2136e885d2a1af9fe82000d46cfdf4323f37a314d8ac57e88394246821e4a12569c9a3841393a79cd77b5dab71121007b00d3e347e0c46bd6df027ff80230d4147bf687f3b1a28d1124bcd808962808b19a50c82b55ed8edfd1c10fff0001fdc8486c37aec1607815537ab3fa968591b03c8fa7396055a8ec65bd0c5d79392077974bcfd0b2fc8fac7e95dd87d4100faf19a99207e459e9a035f3e30c5d68aa309e5204f1a7006185c6827036fdeb8ef2e2be9855a10e50da3944866b9a652cbd14a7c44f786429ba98697488b2ba48a884a2a589bd207ec64c9265c501fd98e874654b0f684a75a3ff00c27f7a57b60d6ae91889c8849cb749c0f0285d00b2bc5b781aab51a831f8bbcf57ef00204f1abf1838100101b25f62b3e70232fadb808000396f446a931a67810492b5920420ad8aae0ef76c49be425110bf8e302e695689ef5cbe30a3d28c5b3f67ff007850b39a7301a36011e3d995638b60b480a535451deac62e5e86cd556a83b4d4d01d19c7f7d9fd1a1a021b63ff00c7135c974530fca383f8c05dab2625d306f49a4fd7f4c0904f1ba395cff91ff59ff03feb21751a38a67e7ff02fc8fe57168b2905e62b33e5eefd31ff00cfdb11cc360ec29a1a685de7ff004784d2882f2ba0f5b4c56d00528c1e3629d67fcfefff000364909544e5ecc43421da81f69acff85e1896e5ce33519d6e8fd755146d2102f82eb8c70421a8b14198d3372c074883e99b475d63e010607e14779ff3fbff00c1185e49fc19c00bab6786190410190106ba0c1c0068201e295e76e111219d8bc89c63bffe4fbca89401a943dbf78c7447c6fbff00c11b69c398940076aa07b99130357ac018d98d2ee75b1fbfb0c026fbd97e32a5d825c1fc4d44bc99306c6ca817634c0fc4de5a830262afd09aaea9f146e1974ddd4fd3eb3d00a10ffc11b9c3c14828542c19ee71ce46eee2b496cc29b7a50e0e59627004a440640ec69786c7048ea933a858402f7f18b07d25850bd082ba18cc288288d809037486e920ef6669bad2a136395abaf187f62ebfa372b6d2063141f70fc99a688e0779f8fec07f6744506c397c1f795eefc3e986ab7cff001a3227cc901f47594d5b440fa09ff778ad3cc48b3913c9ff008338e49e1479561fc39aa8a14395dbf7b7152836d01f01a3eb0e83b66c76cbd9afd6213383f67fecb9c2d21f7bff00c1f27fd0f0ff004212dcb1a5449fbb9392b2076c431bb6ed3e00ff001ff829fd1a6bff00069c1bf7c64d9ef7c38abaf8b4f97898dcd7814f13f01c7febff0006323e58f2d62b793cfeb38de0a435ea9e70ff004191341704fe1fed708d210e0ca1366f46f10728575be71410a6f8cb7008ad6771b66499b3c5ddc1203d2ef3f480dc8decd73bce2d9b29be4fefb1c26aa4bd838e994eb1c5ea0248400bb1a8364c40ce05784c6a205d6ceb018801b035139943764c34a90972f27c2c26dc6a5cda764c8a084aa113b3ad3a08815c5bb405655acd26c98a510309e0f5c16a6ebbb8c6112a04c277489a8df38f45446e7aa2ab278b4714898ac410d10d018a1adcc214de0052681211aeaba7104e11deaa9491564273a702e0320230b6851dbad219a6cb1248a914a242707184c8cc342d6c027e3fbe322f1758113ba806f943bd80d585d14020360d91d9e5b08a4efd09b00182871d1b2e5d376e10d04a8da22d042cc1222948844e00084f7aba328a6b9c90741d9c6fd66aa0742e297c1146974c6ed882d1b6cecd0ba61d765b85520202c807336256e27b24b69b50015505851595a268c6eb642ba8ef65f971768ef362dd0aa035f05db6422961092940a0595be71a66b6910d892688a3b9ae2da6add82c2c8749f01e547a085d0438ba3eddede0ff00f82fffd9, 'admin', 'QrUgcNdRjaE74hfEIeThKa/RaqA9N/KpBI+X7VeiyfE=', 'admin@gmail.com', '2019-02-28 16:37:27', 1);
INSERT INTO `user_accounts` (`user_ID`, `ulevel_ID`, `user_img`, `user_Name`, `user_Pass`, `user_Email`, `user_Registered`, `user_status`) VALUES
(5, 3, NULL, 'parent', 'sK+bJ3GIl7A9SO6vuD45oK8pw+SP1RllEsy1Y17HClc=', 'parent@gmail.com', '2019-03-18 17:10:48', 1),
(6, 2, NULL, '304642110003', 'M8+Cpt+zltZs3QpomFLRjEFCGvI0VGC+jjJzXH32Mtw=', 'student@gmail.com', '2019-03-18 17:11:32', 0),
(7, 4, NULL, '304642110023', '6Bgzqn4mnCPjx432mpfOVbU87Mi3sy29KRe8A1l+2X0=', 'janemasaksi23@gmail.com', '2019-03-18 17:23:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `year_level`
--

CREATE TABLE `year_level` (
  `yl_ID` int(11) NOT NULL,
  `yl_Name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_level`
--

INSERT INTO `year_level` (`yl_ID`, `yl_Name`) VALUES
(1, 'Grade 7'),
(2, 'Grade 8'),
(3, 'Grade 9'),
(4, 'Grade 10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`admission_ID`);

--
-- Indexes for table `admission11`
--
ALTER TABLE `admission11`
  ADD PRIMARY KEY (`admission_ID`);

--
-- Indexes for table `guide_for_rating`
--
ALTER TABLE `guide_for_rating`
  ADD PRIMARY KEY (`gfr_ID`),
  ADD UNIQUE KEY `gfr_Char` (`gfr_Char`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_ID`);

--
-- Indexes for table `page_content`
--
ALTER TABLE `page_content`
  ADD PRIMARY KEY (`page_ID`),
  ADD UNIQUE KEY `page_title` (`page_title`);

--
-- Indexes for table `record_parent_details`
--
ALTER TABLE `record_parent_details`
  ADD PRIMARY KEY (`parent_ID`);

--
-- Indexes for table `record_section`
--
ALTER TABLE `record_section`
  ADD PRIMARY KEY (`recs_ID`);

--
-- Indexes for table `record_student_attendance`
--
ALTER TABLE `record_student_attendance`
  ADD PRIMARY KEY (`attendR_ID`);

--
-- Indexes for table `record_student_details`
--
ALTER TABLE `record_student_details`
  ADD PRIMARY KEY (`rsd_ID`),
  ADD UNIQUE KEY `rsd_LRN` (`rsd_LRN`),
  ADD KEY `suffix_ID` (`suffix_ID`);

--
-- Indexes for table `record_teacher_detail`
--
ALTER TABLE `record_teacher_detail`
  ADD PRIMARY KEY (`rtd_ID`),
  ADD UNIQUE KEY `rtd_EmpID` (`rtd_EmpID`);

--
-- Indexes for table `ref_employee_type`
--
ALTER TABLE `ref_employee_type`
  ADD PRIMARY KEY (`ret_ID`),
  ADD UNIQUE KEY `ret_Name` (`ret_Name`);

--
-- Indexes for table `ref_ethnic_group`
--
ALTER TABLE `ref_ethnic_group`
  ADD PRIMARY KEY (`ethnic_ID`),
  ADD UNIQUE KEY `ethnic_Name` (`ethnic_Name`);

--
-- Indexes for table `ref_grading_level`
--
ALTER TABLE `ref_grading_level`
  ADD PRIMARY KEY (`grading_ID`);

--
-- Indexes for table `ref_marital_status`
--
ALTER TABLE `ref_marital_status`
  ADD PRIMARY KEY (`marital_ID`);

--
-- Indexes for table `ref_religion`
--
ALTER TABLE `ref_religion`
  ADD PRIMARY KEY (`religion_ID`);

--
-- Indexes for table `ref_report`
--
ALTER TABLE `ref_report`
  ADD PRIMARY KEY (`report_ID`);

--
-- Indexes for table `ref_section`
--
ALTER TABLE `ref_section`
  ADD PRIMARY KEY (`section_ID`);

--
-- Indexes for table `ref_sex`
--
ALTER TABLE `ref_sex`
  ADD PRIMARY KEY (`sex_ID`);

--
-- Indexes for table `ref_suffixname`
--
ALTER TABLE `ref_suffixname`
  ADD PRIMARY KEY (`suffix_ID`);

--
-- Indexes for table `ref_user_level`
--
ALTER TABLE `ref_user_level`
  ADD PRIMARY KEY (`ulevel_ID`);

--
-- Indexes for table `room_section`
--
ALTER TABLE `room_section`
  ADD PRIMARY KEY (`rs_ID`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_ID`);

--
-- Indexes for table `teacher_subject_assign`
--
ALTER TABLE `teacher_subject_assign`
  ADD PRIMARY KEY (`tsa_ID`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`user_ID`),
  ADD UNIQUE KEY `user_Name` (`user_Name`),
  ADD KEY `user_login_key` (`user_Name`),
  ADD KEY `user_email` (`user_Email`);

--
-- Indexes for table `year_level`
--
ALTER TABLE `year_level`
  ADD PRIMARY KEY (`yl_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `admission_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admission11`
--
ALTER TABLE `admission11`
  MODIFY `admission_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `guide_for_rating`
--
ALTER TABLE `guide_for_rating`
  MODIFY `gfr_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `page_content`
--
ALTER TABLE `page_content`
  MODIFY `page_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `record_parent_details`
--
ALTER TABLE `record_parent_details`
  MODIFY `parent_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `record_section`
--
ALTER TABLE `record_section`
  MODIFY `recs_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `record_student_attendance`
--
ALTER TABLE `record_student_attendance`
  MODIFY `attendR_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `record_student_details`
--
ALTER TABLE `record_student_details`
  MODIFY `rsd_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `record_teacher_detail`
--
ALTER TABLE `record_teacher_detail`
  MODIFY `rtd_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ref_employee_type`
--
ALTER TABLE `ref_employee_type`
  MODIFY `ret_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ref_ethnic_group`
--
ALTER TABLE `ref_ethnic_group`
  MODIFY `ethnic_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `ref_grading_level`
--
ALTER TABLE `ref_grading_level`
  MODIFY `grading_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ref_section`
--
ALTER TABLE `ref_section`
  MODIFY `section_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ref_suffixname`
--
ALTER TABLE `ref_suffixname`
  MODIFY `suffix_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `ref_user_level`
--
ALTER TABLE `ref_user_level`
  MODIFY `ulevel_ID` tinyint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `room_section`
--
ALTER TABLE `room_section`
  MODIFY `rs_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `teacher_subject_assign`
--
ALTER TABLE `teacher_subject_assign`
  MODIFY `tsa_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `user_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `year_level`
--
ALTER TABLE `year_level`
  MODIFY `yl_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
