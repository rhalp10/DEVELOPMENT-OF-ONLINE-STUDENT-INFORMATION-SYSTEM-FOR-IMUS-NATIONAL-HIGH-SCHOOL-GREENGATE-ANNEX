-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 12:46 PM
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
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`admission_ID`, `admission_FName`, `admission_MName`, `admission_LName`, `admission_LSch`, `admission_Bday`, `admission_MNum`, `sex_ID`, `admission_Ctzen`, `admission_Email`, `admission_Date`, `admission_Status`) VALUES
(7, 'admission ', 'R', 'Admission', 'luis aguado', '2003-09-20', '09169158798', 1, 'Filipino', NULL, '2019-03-25 21:32:52', 0),
(8, 'admission ', 'R', 'Admission', 'luis aguado', '2003-09-20', '09169158798', 1, 'Filipino', NULL, '2019-03-25 21:33:21', 0),
(9, 'admission ', 'R', 'Admission', 'luis aguado', '2003-09-20', '09169158798', 1, 'Filipino', NULL, '2019-03-25 21:35:02', 0),
(10, 'user', 'user', 'user', 'luis aguado', '2019-03-22', '9169158798', 1, 'Filipino', NULL, '2019-03-25 21:35:19', 1),
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
(1, 1, 5, 'nanay ', 'n.', 'mo', NULL, 2, NULL, '09450133392', 'addresss'),
(2, 2, 5, 'nanay ', 'n.', 'mo', NULL, 2, NULL, '09450133392', 'addresss');

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
(1, 2, '304642110001', 'Sample 2', 'Sample 1', 'Sample 1', NULL, 1, 1, '09451658741', 'adress', 1),
(2, 3, '304642110002', 'Sample 1', 'Sample 1', 'Sample 1', NULL, 1, 1, '09651658743', NULL, 1);

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
(1, '9999', 'teacher 1', 'asdasd', 'asd', NULL, 1, NULL, '09999999', 'adddds'),
(3, '848484', 'teacher 2', 'sd', 'asd', NULL, 1, NULL, '09999999', 'dds');

-- --------------------------------------------------------

--
-- Table structure for table `record_teacher_subject`
--

CREATE TABLE `record_teacher_subject` (
  `rts_ID` int(11) UNSIGNED NOT NULL,
  `user_ID` int(11) UNSIGNED DEFAULT NULL,
  `subject_ID` int(11) UNSIGNED DEFAULT NULL,
  `sem_ID` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_teacher_subject`
--

INSERT INTO `record_teacher_subject` (`rts_ID`, `user_ID`, `subject_ID`, `sem_ID`) VALUES
(1, 7, 1, 1),
(2, 7, 1, 1);

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
-- Table structure for table `ref_school_level`
--

CREATE TABLE `ref_school_level` (
  `slvl_ID` int(11) UNSIGNED NOT NULL,
  `slvl_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_school_level`
--

INSERT INTO `ref_school_level` (`slvl_ID`, `slvl_Name`) VALUES
(1, 'KINDER / DAY CARE'),
(2, 'ELEMENTARY SCHOOL'),
(3, 'HIGH SCHOOL'),
(4, 'SENIOR HIGH SCHOOL'),
(5, 'COLLEGE');

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
(1, 'section 1'),
(2, 'section 2'),
(3, 'section 3'),
(5, 'section 5'),
(7, 'section6'),
(8, 'section7'),
(9, 'tata SECTIOn'),
(10, '4234234');

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
(1, '201922423', 'Filipino', 'dfgdfgdfg'),
(2, '201922424', 'English', NULL),
(3, '201922425', 'Mathematics', NULL),
(4, '201922426', 'Science', NULL),
(5, '201922427', 'Araling Panlipunan', NULL),
(6, '201922428', 'EPP', 'Edukasyong Pantahanan at Pangkabuhayan'),
(7, '201922429', 'MAPEH', 'Music,Arts,Physical Education,Health'),
(8, '201922430', 'TLE', 'Technology and Livelihood Education'),
(9, '20131311', 'HUMN10', 'Rizal\'s xxx');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject_assign`
--

CREATE TABLE `teacher_subject_assign` (
  `tsa_ID` int(11) UNSIGNED NOT NULL,
  `rtd_ID` int(11) UNSIGNED DEFAULT NULL,
  `subject_ID` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_subject_assign`
--

INSERT INTO `teacher_subject_assign` (`tsa_ID`, `rtd_ID`, `subject_ID`) VALUES
(1, 1, 1),
(2, 2, 1);

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
(1, 1, NULL, 'rhalp10', '$P$BCAA1YEnm0BZ.DJ2X/cXEil0XJcfVM0', 'rhalpdarrencabrera1@gmail.com', '2018-10-20 00:58:10', 1);
INSERT INTO `user_accounts` (`user_ID`, `ulevel_ID`, `user_img`, `user_Name`, `user_Pass`, `user_Email`, `user_Registered`, `user_status`) VALUES
(2, 2, 0xffd8ffe000104a46494600010200000100010000ffed009c50686f746f73686f7020332e30003842494d04040000000000801c02670014736c4b55386271714f75657564776e5a6a6a5f4a1c0228006246424d4430313030306162653033303030306565306330303030333131383030303064323138303030306161313930303030383932383030303034643363303030306263343030303030313834323030303039343433303030303337363430303030ffe2021c4943435f50524f46494c450001010000020c6c636d73021000006d6e74725247422058595a2007dc00010019000300290039616373704150504c0000000000000000000000000000000000000000000000000000f6d6000100000000d32d6c636d7300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000a64657363000000fc0000005e637072740000015c0000000b777470740000016800000014626b70740000017c000000147258595a00000190000000146758595a000001a4000000146258595a000001b80000001472545243000001cc0000004067545243000001cc0000004062545243000001cc0000004064657363000000000000000363320000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000074657874000000004642000058595a20000000000000f6d6000100000000d32d58595a20000000000000031600000333000002a458595a200000000000006fa2000038f50000039058595a2000000000000062990000b785000018da58595a2000000000000024a000000f840000b6cf63757276000000000000001a000000cb01c903630592086b0bf6103f15511b3421f1299032183b92460551775ded6b707a0589b19a7cac69bf7dd3c3e930ffffffdb004300090607080706090808080a0a090b0e170f0e0d0d0e1c14151117221e2323211e2020252a352d2527322820202e3f2f3237393c3c3c242d4246413a46353b3c39ffdb0043010a0a0a0e0c0e1b0f0f1b392620263939393939393939393939393939393939393939393939393939393939393939393939393939393939393939393939393939ffc20011080258025803002200011101021101ffc4001b00010002030101000000000000000000000004060203050107ffc4001801010101010100000000000000000000000001020304ffc4001801010101010100000000000000000000000001020304ffda000c03000001110211000001bc00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000d308e9abfa0b3ab1e96657259d868de0000000000000000000000000000000000000000000000e01dde3d6764b222777021ca8b1e2c3b6b7b0b0ebe0e52f460ca9e55fdb56a58763a9c1d66f6e2f6ac00000000000000000000000000000000000000001ae3d10eaf2a06996646c463b991ee5ea3cf4af3d6669d7bc49ef5574c7d2a1d26cf2c2dd60e255af2a45db59f40000000000000000000000000000000000000c72a995a8d9792e2f7d3dcbcf0c9afd37fbab3327be07981b7cc3232f1e468f2469a9776f9def8b5c7edf1a5b7abb62de40000000000000000000000000000000000022fcd2c35a95e7928892bab3d7892fa9be38b3ec12e2b323ba889eca1063f5712b3c9bdf87cd17daee9c68fb35d9ee3e8937df9d75e175e2f2eaf62c0000000000000000000000000000000004693562a5ab3ef4baac3bbccdd7a7afbe2ad9d8e1d6bea737a11978469e576a2549f781d4253dc65f7c6245a5fd034d7cd3debf277962f0b7f3e3f6a5e876a8b7ad64000000000000000000000000000000001f3efa0fcf5573d12f9d8daa279561f71667878a8d2063b22604c3158fcfeb47237539f1ecec356d97cf58c6aa7dcf0af9af936174cecfa2fcdbe99148fa0d1ac55dc16000000000000000000000000000000011295dec65eec49757c581d28fcbd6bbddce3ec93b7e73f2ca7791751d0e6eaf6b29fc1d876fc8d846bcfde7d74b2e6f5492e67b1ba4c6e7d6aa6fd43e69a987d1fe79f464acc8d1aedbc8b9000000000000000000000000000000029ddae176b1a9755b7d1e5e4fb867bccbb2d452dffcaaf565e9b5ee8f3cd50aba1c197aacf67d474177c699e965f76f6e56adecab537a5854ea1dcb876716f35fee15bc3a1074bc0b90000000000000000000000000000001814aeff06cf8d48a07d068471b6ead9a9b1e7a618edf4d7967e1afdcfc3161899e1ef80f4936da4cd96fd9717b58ad3bf097573ba3cad4912a2e6468f875b73b82e40000000000000000000000000000018e428b63abdb71a974eb3738a46cd6d4dcd036e6f0f3c6278c465ef83df7c1ef9e0f376a160992b4675dacab9d8cb6723abcbd3a30f7413977da75db590b00000000000000000000000000000000a0f73973f3aea61c3db156c3adc8d4f7de8dc33aa7f52d6cde0e5da4b1b6eff235f9b3d21c6ea2b83cfb7787cee1fd378fa672b44f66149d5e91e148e7693785e625f66533bb73d61600000000000000000000000000000001c8e05da932f5b973f4cb022e739ab2ec89b797490d3eb3bbdd3e26ef2089de44cd643462b23187197a1cf81074b448dfc8bc7ce46ce669339f22798f2fbdc06babd3af5de749637e700000000000000000000000000000001a770a0cdb4d36593c593265812e16c5e96ce56335dbd95cc8b5c6ab6a2cf178f1d3bb1a2ecb3df3779663d1e7d9224f03c8461dec65cba3b3cbe9448788e04aeaf0352d4379000000000000000000000000000000000021542f95e2afbba361968ab6f24d95af26ac44bd71a5e6cb32c73d51668712f7555d5afae70bdbc54965671b2cd9f262631d468f63773766ab2c63a6400000000000000000000000000000000000397f3fef7125e9d92b773e7d39d5cbad59399a6441de75edd0b24e9f0617aa2fd1ce3daa2c9b3da5dd2952e5e7bb25971a4e996465ac6cc34c8b2c235900000000000000000000000000000000000544f2b7220cb26772f296c3079c95a98eb2ddbfe887cc70df89e5daa1acb7d8fe6df47b3287338c56bcbdfcfa5eee7c6e84be6f89e1d4d9c9b7d998b000000000000000000000000000000000007cb3ea743381df8972cdf9e31cebcf71de79ee4893d4ade159f9ee46e69d918c88b22be9b4a97e165e5c9a9a5b7a15db1542acdcc63900000000000000000000000000000000000002af68ae94bb2ebe4cb0b2f3d1b75e71979e62618e4af72f7a92edb3d0704e8cbe1f44cf3e1fb6cf8b2b18cbe93f31fa75816000000000000000000000000000000000002212da369969e65489dc1911e5621967af233f309a419bdfc3379329173d3a7075f2778dbabcdd7394bd32a57be6511fb3c5d1a9f511600000000000000000000000000000000001861b2b459a9967f9f9aa6c3c33a9f170d27befb6338732d5ae5d12a16a8d91b4707537c2d9e59d0e6fbecbb72f09b6573f359f0e45a8e05ca4359000000000000000000000000000000000000c6b965e3c72f85dee84b4d81d483585938c96ed138fbe597add19ae749eae39d732579cad48103cec6f961aafeb28522ea2b5d5e80000000000000000000000000000000000000000000a357be99f3794f3c367babd2f33be7f65c74ec47e1f0d6c15df3dd616aaadaee6d42c00000000000000000000000000000000000000000000071bb23e5787d1e812c6c760b45baa16fb217cebea5c328c25596b7d62fc2c00000000000000000000000000000000000000000000001ce93c32a1875e3e3766b0d4badacf5c594fadfd4be752c2ea72ec85c058000000000000000000000000000000000000000000000e648e0473644fdfcfb429daf1ceb6713bb9470ee5c7c3b71b055ac32359f9f58fbc34ee0000000000000000000000000000000000000000000000000010675122db8d4752dcbca3cb2e1856f965e3a1f35fa124a14000000000000000000000000000000000000000000000000a35e51f33936ba9cb9459d0c95223c0255efe75f44a962c00000000000000000000000000000000000000000000000002172e6c18f30f46fd6f0ea4ee7f4680000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000fffc4002e1000020201030302050403010100000000020301040005111210135014212022313234152430602333419042ffda0008010000010502ff00cc526ac30afd61c2d5d119fabc67ead9fab646aeac0d4ab962dcb679f9981876a485e3752b0c814bec6069f38143229c467a51cf4a19284c61a8270a984e1d421c1b17519575503c89898f356b5205e113ad12d3bc8452acb2d5d1185abb272751b3381a890cfeaac99fd5270751af816e91e0f64f38c461240b1f5b164fa99575153bcc198ac6c5a65c29e0ac3b04592533fc1b648c67198c4de7af13a9a4f07631622271d5fdea5e3ae425063e52cd95560b571960898723d36cdba47f010f2cff00aa6b1255b5403c200683d1956c1d2644c4c792298187349cdebb7f246146f13edd2b5a657243556d7651b450b33559e4b59b5f0474e519cb3df3fc9910cce2dcd8f279672cde3e191e8871a1959e16d57ebc0e6956794790b2e84248a48ba8a0ca06914e1565ac4077c0aee2cf4762722814cc565464d75e7a55e1d15ce1e9838ca2c0c9e4390513d3de267e6e95dc75dbfe3b75cc4d674ec459478fd62c736f45d733c52a55d238e23b4a951f73f89d556ccb1a7946172594fc1a6da9aedd44601d51de92d78eb0deca48b79fae53a527831c470c3bb1d995e6d3255e3833a977205574c4a2778f85d5c1a36a99d73f810cf5545e1c874a7f7ab78dd6dbed1124542a7397cf15c0f225ab8616f311bf03aab2c8362320a0a3ab922d99eed7343c5df04fd31aa1705cad20c9f6eba5b3b776d238169ce95def1baa4c95eaa999810801746ebac512df87b7c244e0be06814e1254ec079a67ebf0b570d1bb54973d00b89dc1ee56b43232a3ee2fc65c3f53790985f47b77b6ab1e9ac6fedf0b837c4bb94e4f462e665670c8959ab16c16474fa60141c397dc0b89ec3fa22795721924e8edee53f17699daafa7af93606232d3e2baac4f6d7bc5b4d732191644fc4e5c1629f33913bc74b31b4a5c2d825c4e43243ab00a0c0a183ab57895e47d69fe1ccc72d22785af17acb365696ad808b6cd40b89a8810a55ae0fe22e803f78998ceeb37efc6159f7edc4e709cb03232ab0339dc9ce659ccf189f986c92e627089aa91b81bfabad8771206e1e6a68f06247936a7e1efb4d22db53f17aacf2b80520c9cd5fd9b3b9cf18c4ba526ab0b7ac4236e25f06f185b16360abb1364321839dc1cee46c6f5e56974163562d5c57986822572bdb86a4be1674d5932c57fc5ff00eab7bea7e2ff00dbab2a395c3cd58b7b7cb2273eb8244129bbb605d89c1b2259de8c2b2b8c9ba8dfd6acb0ac0331c1b141146775982cf7a64b9088dbab57dc11d8a04a459ac0e505f6a9aa76ae6313943e6d4fc5e9bf35aad1316cfedd4ff3307ac8e719cf9b391e7be770873ba79ce7394f5db10d959d7b1b88cc175db692fb752d988a3f3549f6414ed1a28f26f8a3fb34bfbd5122f9f78d53f2f2336ebbe6f9be6fd263a6d3f0a1843952c2ce7a4e17d2cfe253f969ba7e7b65c53a3af854f145f6e9bf73467d404f21d64367e0fc5ef9bce6f39bce7be6f39bfc0b2e24c49b0116c86166263387853bd34fb55f79cb65dc6a83b6bf1757e592fb973c0f585724f4db3e9d77cdfe3df37eba77cf5c523de78b5135c9a6a6fdcfd8107330971f6c34a4f76c78c9d95760ce0638321663692c1903e910458ad3de781a4960e9891c0453991aeadbb4b8ce019db5e1564164e9f5a70b4b4ce334a2c65372f369cd223f6fb7ee6c8f35a6241333c89b1cccd9f334c9e755115d1e33550eddda85b83c562f25941de8e65be55a4cb195eaa911d0844c60463f8672d21651a447ece63e79fc8716c1bc0e72dcdecdf2bcb44fd5de4e50bbeae3c5ea75fd457d25dfe6b0ae302649863145885077e236fe5e51927960b8ab4f1e344a711f3b6cb3bec368c41336145091ae1f6582991d147f6de3352afe9ecaaefcad142f2c2b8cd078f183cee6772339c6738ce718565625ea5590f19c12291e53933392518761618778318e27e04711ef6e2e7704c149ccd79e6aa4b60c26e041ac96711361b55115d3e31ca172c84e9b478e4ac661abed98b1a38371b1917e73d7c67af5645e44e4584e7ae58616a8191a9e4df74e4bde593dc2c15fcdb471d397ddb37ddc06cd8f9442764ab8053e24591931be5ca4339a5be7c73d20f07d2b15646dcc614aecac3e9ff7da6276da4823223d9b1b16d8111bfd2659b42c88a582e547db8cf9734fe28a4732e398e65c445b60b8a698f14fc1706556bc7baaa1d96aa95326fccf62de89ee86492b9dbb08466e40726473be6f9b74022433506c3914ea32d0dfa6a429eeee96f9584bd60fe5dcff004abd8227a6f9be5bf77790d68f8d6a9a693b3d755ddba8529c6ea091982e33c3628199976d33191d1994dabd902009ba676af2b4a8d94852713f9c05fb8b53c999b17383cdf14de725f36a3e47527426a0465205cb1715cc4e92081aa2ae7f2cc1fdb05d4a77c9cd164a6ae9eb84ea1d23db510fac46cfcaed968ef9bc641410d7f9b56f23ae1ef60328108dbe9aa24fbd0d09964f29f874e0e149e85be23da32f81235057d23fdd8a0858f4a61229d37e6b5e475c4cf289e8ab8f5646a87962db6c64fb752020e9f5ce339a75a08a31aa89d8e96ab8595301f4485dfb809de307bdc4796288619a38ed4fc85dd56608ee58667fdde737e9ca32672728a3d4597256f5bc216d1fa61654e3ea44a0a31d7e1774c0581651d8b604c9677198568473d58710536f1000ac3c838381e58a1daa5f071c28de34e7c56b4fd60e67eec8f6e9f5cf6caa927bf0d72fa0a2e6abd518d752ad15939715dfacba565ac18818f23aaabb77284885dba30d547bf498c8ea5f5dbde2336ce53bf039c2891c4b9a89f5feaabde784570b55e2b58d46c3674cbc4ff2dadb17c4b2bdde51f17d7223df3df7d2c55cdac5405f7f79a74a3b15da948ee3666c3fbbd294f1b9e5753a26f25e90e2cb8a143e3ac749ea05c49830eae0a36648719caef852beec08de768c30c54f6ec7956b01216f54633e08f7eb33d2ba7bcc58f698bfdb588964a2f909ce7dd203cf0860622768e33861be6997e467c85ab01596a6774666061ba9d50cb0e6dd6c8f08eb1ed9bf445573f13a62c72fad2a138e425312b74cf1ee7bfb9e6dec3f4f7c199de7193218a5cb99e3f94726a81a311b46b4f926ac794edb64ed393c3a08f39ec3205341ecc4d142b0ec80e4b1edc304a809ff0027cd80d0957519c0c2288996ce54d3d8f9521498f1e53c44756f645a53e2e1f72dee111ca708a67378d8166dca9598b8528064acae30a5acc2252a09cf6c304f974db23a8cfbf7271356c599aba72d3e48a390e9811e96ce9a132faf09c20ec4729c85ce54ad5a42220626c0e489b30dca4e08587e451544491004c29eab35c5795d2561a5a4d98cfd2ed6469b6f07487ce2f475c62a9575795b558fb925a8b72a69e292d57f3e3a0976ca1ca29f543bc22cbb135529e933b746bc52f7389e5a28ef6bceeb69e362267379ce539ca739ce54b23617925925962e0061c930b342f3d72bc5941012cfa6f1d140d99546a25978edd6c263599b75d0e3dbcf6a1462c89090166d19c73422f9b2dd71b2935928fae865b33cfdaa8ab42f49a1bd3438f9fa6a953bebeba516d77fa05daa3694624079a2af8d7ebaad3e13d34c8def79f7396802d5a265e8b2f6fa37605eb08146a35dd3d2620a2e23d358cd117bb7cf5cb815a23fc8531b4a9f3805058d1e40411035ed15495301a19a82ec5bcfd3ede521b08507737f39625f11fa7d9370e9ce8cfd3d98741d9e8ede7a3b39144f19a7c94274e34e2d7c3fa432dd759c5caf20376b194deab13ebeae7acaf21ebeae7afab825043fd0b52fce5fe0d4fca3ff006053b0c02435144008c8a2626a7e2ff42d4627d6f19ca9f94697770824657f83a5fe6dafc9a9f8bfd0f56fc2a931eaceed8e6c69348263d06f19bc654fc5fe87699000878cc8591331b30424f85b3bf1b2454d18f68fe877d44c05a99b2e9b56df45234ceab48bb167b7561a13ff0098bfffc40026110002010205040203000000000000000000011102121020405060032130311351417080ffda0008010211013f01fd9b19a08d9a785c7025e77a7583ede57c31eccf54a9c249c7b167d6574b5ef4eb0a54b1a643219041696972592976b3afd5be2351384b2f65ecbcb9973e10bd0f32c8f5725cfc4f82a5b2a2206a36159246e719d7da24554c6c8aafb2f43aa784dac6b6342ae947c887d4a59547e3f917ffc4002411000201030304030100000000000000000001110210401220503031416003137021ffda0008010111013f01fd47fb6d44f0b0409f0d0279d24da4926ec59923bc5d3cc6f7cec4e2cf218b645a08bc1022ac865378d9040dda443c8653d276479163b174e042c8777541a9937935315679cd7dba0a9d9dca5465e946946934a23648ec9f0cbbe5d42e92cc8e92f459e164ee2d8b3649208db194c5782491708e934fa56a44f08e967d62f8ea429f3e9ebf76ffc400461000010203040509060305070501000000010002031121123141511022326171041320234250528191336272a1b1d13060c1148292e1f0243440435363907383a2a3b2f1ffda0008010000063f02ff008c5d688d1c4af693e015038aa413eabfbbbbd7f92f60e5563c2bdcde216a3daee07bfe64c82d59bf85cbaa01833537467bc6e9b97b28878b805ec618e266b684b705b6e5b4e5571f557cc2a4be8a8e3e6b6891beaacc7161d9e0a62a3bee50a4e39e0a6f71f3fd02d514ff0051ff00a0439c734b878aa7c82935911df25a905a3899ada03e1929d988f3ef44fe481e69b4deb5a0fcd6b3228e0415edacfc41757118fe055cae91dcb585a1e20a709d36646e41afeadfbee3df05ce3268461c212862f40cc39dc6e5970fc1b95ca8a56ed0c9f5528ad2c398a856a1b839b98536eab91a597659ae6e34cc3f9b50734cc1c7bd6d443c06254df46e0d0acce4dc87e3c8ab50dc5a5598edb27317298d66e04293aec1cacbeb08dfbb784083307bcc92640274575eeff05bb44da6988cd4dbfbcd2b366792e6229ea8dc72fe5de7fb3378bfedd2bf44e4b656caf66bd995b27a74d01ec350ad36fed372531469f915fb3c4db6dd3c4778ba21c2e45ce3326a7a13bb795ace587ef192d4864fc2c5ecde3d15d0c717216de00c998f9a9d816b35768c151507a2a89f42ed02233ffd531b2e1e8a6291611c10882fb88c8f787342e65fc74d18e3e4b5a0b86f94d5c55663827169a9339b9b5472cff0ae91cc298aef0acb94fa01ae3d53efddbd35fe2196214cfb2897f77be2641126a4e80f7519f5400d166cda57bc0f0b906c316a7e524048ddd03664e3345bca1806f6e01020cc1c474acb8021486b63e5d118c581f354b9db2ac9da653bb99073d62a4b9c70d4170cd5a960ac82899cc94646454a259271c9535575baccf10c14c198e803739b715a82988ec9fb295cfc5a7a1432d161f77d113eb91e83327eaa204ec44d996055696e878f77449e12084b69e643f528345c14a4ace21b33bba56a1d336e0553cfa1698758618156a45ae06f6d082acf28ab708bf754e8c8f922654d2d70c0cd44e131c508ada4ebe698f1da13eed7cae9d91c14f7591a21b67aadff00e93e145a31dac1df7e9db69b2f18fdd5870944187dba16d9489f23b8a38114734e0a706ef065c3eca97e5a69764a9c0ee45b8a737b386984736856710837166af763df88144df5f4fe725244f6b04c60da15fba6bc11ce311e6f56bad0cddfc95687a52ba556917856626d0be4b31a4446d220c7096fdca9438b4a98a1cd75b778869e7a16df69be31f741cdb8ae700aceba60fc013fe377d546878113eec63333356f7487eba1a5d53b47ecb9e8ced770a6651731a1ad38211213acbc7f522ac3c5989967c33542b65ae1e8555910794fe880870dce24de44805ac5ce39cd7b47f999ae7048118a9d5857d960ae569bd5bb75c54a30fdec14c2261c2e701c2e5662b1f09fbf15ed9a38ae7213ed4cebb4035dfc511b939a9a141ffa613efdb7632c78a6efa7763197c80a26c2f0c39fcff9686ef6a9b8cce8d52a511a3ea16d1f35774483715685d8afb192be22c55ca45cce17a94286e30bdfa0f2d058f142b9b310b72a4d4c3ed71a290c114db387c942f8029e6f389cca87dd84e4e51b73583ea8223c2d015da68519d09559792a3d6d2d67aed79053e6e23775ea56227c96aecaa1216dbbd56b8b5c50c06ee87bc2ade2ad0c50f0ba9e683d5a37c53f250e7835338ace53eec2e5ca67933445f2fa7e06d1f5d3b47d55e7d7a37a192a693ea8fa84c2ded1125067d928700112a2c4dddd6ee0bf78051b23228a7701f8b774757d15926c44dfd167b87f5478b906e0d477ab5e333eeb2bfee35738d3221b650210398fc3bfa60e4adb434f3665bd6bd46e569a6634055ba47ea53674ed153379418de09ac1d912eec8bb8844a9765c9b10760fd7fc1b86f9fc95891b32247c902c32c2d371e29d6e56a721a2ea050e1135b22d29e382e74ecb3ebddb181ba6543204c0a38290703684c553e13a8ed970c516baf06ba64151beab59ed53719a931b0dc460bd934792d81e8b602d80ab09be8bd9c952d0f35a8f9f15563bcaba1c7377e811f87f541b8970926037caa9d926c3ecf6be117a2f7d268340a9c13618f3e3ddb6b07843f85dc47f252789432754f84fd8a3103dd6f35cee276b8e7a2675599a935be674d970982a8d03cbf0892dc3cd0de538e6983204ff005f35bdd40836f29ce9d2ed16e151de4a6e94bde6274d965edbfbb3546bb6a158c220979a2d7d611d927b2722ac9697b30cdbb9193ef171099a85ed264437eaa5f8b7aa27cfc25411eecd12a21df2f44eff004c506f45ac999e2552e5139447150c25acc93b3b4a64cc068154e7625dddad8cd9886f35960558e52db4255701f50873718163ee04febf754f309ac9c9c30581572c7a165e4b0e16b15ed1beab566ee01024007100cf4deaae1e65526780421816438806b529ad180511d2d507577a101a45aff31c14982d26b49b4f760a61ae193ed29c28a5edc591aabad63a1b772e661bed07769c5361833963ddae86fd92b9a8b56f65cad7cd4b0cb0565d5c8e6a4221f3aaa869f92ac33ea1561bfd176bd16d11c429db6faa93a2db3eeb5518e3f25264203cd50342daf92d6738f9a92e2a78304ffaf9ae6c1d67dfb820d66cb6f2a6fa64dcd005b6573989c7a05f62d7c213b934433743d939b7bbac3c4c2b4c9b99985aed9f0565a75af13cd4f1178d1c7f52aec26afc512a5212d151b96f54f540358e73b2684db50ec5aa09a74970463bae719f95c139ee3226f3835321b6e25358c16412269eedc9a3a3c9e3b2f2fb27bc35e18e2bc504dc5070366d4ab91528905db8b6e57ff524c2e74e1cf5804793726830cf88b84c295c54cdc2ee8b5ec32736e5c97943766d555ab5cdc3cf1726b21cdd1a21902e2990e17b28746fdd06b7ad8980c0221d52c9af2280f13821c3a3c91bfeecfbc58d96d3d5ae500b21e0cc4a973ecf5527759fb935fd9b92b03bc4e6c96677a24ce7ef5e7829bb53090bd5a18f4027c08f3e66257814c6c2d8028ac43af65a873f10bbdd6d02ead81ab94f13f5568f854368bb407738643b2aba1c0b0b0b735c95b934bbbc9f3bde2c8554e2f95903145a21cc7c0acb61cb7ae69efc355d92b30e6e7139239e27a1c3419dd6a8a332251fd8de34c71c514d3a1c4e72d3309ffedc203bc9acc1adfae805d2adda79dbd847a2b6e1d60c91e9421989a16c546cb85ed404e7bf4738da0882638e8e0345919cf4b1ae1233b972c899becf793634b56564a1a28fb43272ac16ff001291935bb95fa5b69a45a131bf45344e23acd8365321c38736b9d299d361fe47256626b30dc53acdce14e325bf1d036663c46f5acaa4505af256bc6f2eef12ce4f876cfe88da8ce20de3a55d0c86766f770562236613d80cecba53e8419ba5af324a9b48237686f27b3aa6f7644dc8b1e039a704e86d9902a1168825e5be0ac957927281fbb35acc8ade2d56ac3e5e480b0e87c9f17789063449a2e1de2f6785c468644264f035874c39db32915d534346fa953e8b61b66332301a395f2ac5eeb6de0131d989a871a0b9ad7b44b5959bde6ae766743d82fc135915b621b71a200500ef22eecc4aa844b67332aa30f31d31d1c4f052224ad43796ae65ba919faa720312872485aa1c0366706ae75aeea9b4b94dae30998017ae6a29eb0541cfbd990a538b78dc340b77f69d3e9cf4d6f511f16cd252994245be442a6cb0486f4d88c36cb9b6a58233bca3230e132f73ddb49ac68b305946374413efcbbd845852b729119aeb1ec6f0aa7426ccd99555fd0a5556aaba0145e000f877cb244b5b302a4e0148b6ba1d379046c8c3d14ee0a4149b863a21b9d735e09ef62f88e0d6856614e1b3e67f06cce4888976c3f72b2ebae3c13b90b3698ec7c09a6444495da372da905857242edcaaa534204634b9ae386eef1b6ff219a0fb3269130a64c80cd51f6cfb826ad1b85c306a94a64f46ed1a8ca788d029c57179c850205ae6b220d96041f7ce85004eb036668446e522aab21a28a92e2b79f9a905726c3c5c65de167194d5988d0e0a42e42083aad133c5495f21a37eed126024ee568890de64a64736dcddf65322dbb377d9191b6464afe6c7bbf75336471c51643d957a36b1e84960a654820e78b10d010d807781270569d01c186e33536baebc1515d3982ea14313a321a28d2773423d89e57ab4d6cdde2352a4deb1deeddeab59d65be16aa9038a3cc4332f115d6dab5bff00028a6019788ab4fd77fcbbc88cd182edb86e2d70538648f75758f96e95575a35c89861c379fb2a29bd070eb0efc16007a05282ce70e773575cf2e1e1140a53ae4153a96666ae46f738de5c981f3710769a2ef25f22dc8a9834421b6409cd7f967cd6cb7f896cb7f896b4460f9ad78ae770a2d5843cebdebfb472721b165220dcf56590042cccd73b14f3b1b33828bc47d348736f5388e75af7c2b30c17b8dd82d77736dc9ab55b5ccf40ba664e6542b46ec0648bbc2defe117078f98e8e445c57be36868a6890d63922e7de7446f2efe30ee37b4e451638488bc69bf44e13621231605584c1bdc649b6dccd6f085acf32e8463c077fda6d228f9a2d7021c2f074d1466f03a0c334378391461bc49c3a1159989fe40d71ad8385e118712f1f3d314ee1a6db0758cf98e837783f906cdce1b272458f1270bc68744f19e81e510f64ed0d30f77e40b515e1a14a0c07bcefa27457430d2ec26b6100fe4adb029ab452b561d93b4906a0a743ecdede1a2244c84bbfe57c53b2d5cf477973f78bb8056f6549ec3c55139b4ae68322366d02414813120658841ec75a69d0d2ce4a459b89709af63ff00904218e4cd19974446d868184bbf7a86b1c7de324f8cf890dae76555edd838317f793fc2b52383f1357b760f255e57ff00ad5794ba7b8203f6989be68f37ca9cd0726855717bb33f920b1f10070c139e228b2dbca0d6c5049b94b9e6af6cd45fce8b20c895ed9abdb350734cc1a8fc8713cbe8b947c4d507e309ff0011faa0f6439b4dd50a2f3adb337b6555658d2e390441a10a0fc03f21c4d576186e532d3e8a0fc613fa98bb47b0549ec2d3bc4947f8da9bc0a8df19507e01f911dc47d541af6c270e7ced1c95a88fb4547f8daaf57a83f00fc88016871719006e53e6e0b860e63652329c9327c9a1d975999c66e134dfec90ad3ec96d73f24609e4f0e7269a5d7c9177ec8cb13d53fbd66a89e65824e736ec8c9487e4469682e94c102f9112a28912cbdeec038065652fd131d2136160b53c2522a10e6ad449b79c05d7c90708619230c86cf2bc230a42c34cefdad79fd13d8e8726da7383a77ccffc637fffc4002b1001000201030205040301010100000000010011213141516171108191a1f050b1c1d120e1f1603090ffda0008010000013f21ff00e62fb75a4beb3dc3352ff23f339dfc7497dbd645773f37f52ed7a64d5be0769e87993ebee4c1aab412d0b27c2e2a17358dd79b89f1b09da08cfc21acca79d89ca0a9c30de872fa84f6b71863b8fee696f246689c7f79a3f4fd628078baff005012099137fadda54b56e3fb831436a42ade3eb97eff009463f9a4749db51804f783ff00488e43d1f95cb33ca1f4045433aca72a6c33c785e06fc5c210fa2b7b066899aeeb1981a784c91d776a57e8dbb91015ba0bd07eb045f58b1f17aaf7fd44cb4567275eb30434f2df9cd47b7302da8005103c42fc1e43d2275f44516aeb9d66a687c9bca8f9906f2b1ab44b233e41b3310f21690128d8ce7f610a09ac0e1faae006f473d82589c99d83e733454f48947859e84010254fe0171d3c5721c9326819ce88ad1ee6f033cc32fc908a0f945d76653bbb2995cbb07c1d4f89360589a27d4c4b0ad5d88a8db7a1b11f139ffe2b70f1150c0eb6f9466b7cd5d3e398a6bbd365f3982a369a6e735387368ff6f6fa9ee3d5fb7e5fc156d99de5109dae0de8df282bfa45ed666abca751941f8e75093a9e17e3b9e99d37945ee6d1387a4d198c266dd7a758350338f81151d3bf70797d46ae30c397697287675f0b265d251587063e7946740eb2dea3960afe768fcf9d2b2e93c9f77e7db151bcb3f87e7bba0fd49b5dd2b963524a62774576f681e9e8a99954ecdcde8f7fa43b60d5369a03e0a8a96d19f373beb1c0c984741b8cbb6af9efec4e7de535ea153069f502289fe47cf38c7307119e30993ac2dd27a42ef7384cc56a7d7a63c995e8e11d3ccda3adc365d3fc98f820e12fbcc9bea498d7a073e9faf4816349326095e194a945ddb4530338eae0f65f48ba5e0e9e1f2fb7d3c9ce975768ce945ac2dd1322758e7b7f70c1506d16ba41baceb45fdc8acccf57d1667237bc5a9ccb54956a7f04a6ca12b1325e6c35134b38ea79d54124058963fc58992367f0ed3200360ad7a39792612cf178da3642bb791557e9ee4c0e5910343ad68794a84dd76dbf5e5f4eaccfc01f99486ac3fbfb3fa97d92957e088343396b686db94ad0942b830a5d3da066c46932f266f97ae327a43e857d6f342264d13f82cef4cfda5b604dea60e0ceec9e7706a622d19ee72753f815d435bf06a1c84d5727583e01d69c9a9edd982d4f8d76eac7e7a7bd423c2e7ccebf279c201dbebe35fbfd3a932142f8a8ce5c9f8fd042a682896d63bf68243780790beff8fe17e19baad0f80c272c981b8f5f1624629adc3f87ac069ab977eeb2d89b794763b3d74826a0f6f150ca81d7c1eeb6ee3fa8284ebedafebc5b5c11f26180cbe9d9201f6a0a2abd040d3427ccfa6a3b46d746feb72f70b074835f7fb78682ee31a61bfb4ac7807db14fb358042223a24bf07c6870512ece06e4b7a92dbdd9cadcf7977156d1565a908ab747e19da53c7500b87e6665169cbe3eced09ab46514fa787bca686581d1d6e2c5e8d0eab860395834b1a99b37dbe04b7f39fe918aa7069b98e2584dafa36f6fb7d32bff00c83822ab5a7ec7e43d60064d153512b4f5fd4048a8ae6ef27bba405a508bb3d7a335e02ba33f1a98657f927f8d7499c5a5b93c92e28df7dfdbed0ec1218b899d6696ed35b5c4ebddb6b2cdeb00fe62773c29a3afbef59a96647c2b0625598e0ecd9f28d0df91ebc3313c7cdf95fc0604542b53bfafe27c541fefe99dc99d8ff6502ac52eb77ee806dcbc11155457b51a7ba2652409f1a849839be0e60331ab913ec70ed2f1d77d3ad7c749afc74da50af65050fb8fb43e337aa695216c1cbfa8e5f33b1f6d275338c0f9f9816e2c6c7a3de122ee748216277ca23a5fcaa59b3bcc9a17547a87ea10ac6c73eafdcb4130e892c6473729dbde08bd681b3b135886bdf2a68fa0e9ad31a3dcf296f037b333a78e2700ad4143f1a20f3c0b650d5d12ea36157a7778fa60d63508df57f5089caeed3f29965d58b5b7ae7665839b960ae95d65d943b61f2942c2f7d5e476d1e2308270abf7de25d5d3329351f0a78601aca40d948eac78b8e7e7044e2fcad9e5f36892e9ef03d2de51c61d76a993d6ad0554f5313ab7ed2ab497e4f69e660e330c0f65f5f53699aa3f2c4c4e82698c3f3ed514873bd9563f7e52bd3fc641e11e5be411369bf35d9e7e996ea5607963f12c2fe032f0be0059fcc2176d1294cb7a0c4cc597618f49a7d69974c1853b38672084ec7781e3aeb334aa97a0b56fafacd30268a61ef2c90f42693db75a8d1f9336c9e1ac10316b40cc0c02bc7121be71fdb4f3883a02e778d743a7a83e84b79b1fa81cd32b50e3ed75dc8c6015d87499984841b774f6afa5ad16cb2b96ee01f20e8538f6f7863dd7d8878b0e359c0ca74827771d65bafaa9d8c340a4b9b6dbb8dbc30b6aaf77c5e8842d779cb387ea096bfaf1294d169e7afbdfacdb6a7a8649dcd67584da1bce9c7e1f2222f6e4f3960ec4bd76a7abfd7d2fde26a75f692d2d70bd56b3e5808697487cd4f62113a1ef3a9bf1ec9d92fe0c3c43327a4a7867512936f0b9acb2d5baf7ed2d54f15bfa319b4d2475e795d6350f2440f4b44c4747de57b7c2640657c9a7d2c58748abb3f44cc5b07535871182ff00a7c34785cb951783d628d0276bd276bd27512f933a92dccd75cc47c307dd86b988320f8da0bdf5d212075722b9e4808cbb90dd37a6dccd47ac1bb716faa4238d128f3b828ea36c7cca9a756068e0fa62e53567a3320385b9957e8631c6e97b7f6af04bd769496aad61516b72523869e167240ea7acf33d49ae934d4481e62259c4bcca8c64367a899f0028691bdddefe302f8bb152b6c378ccc14d56637dbe1360d88d4181a74259aae297a1a58e8eb1dc777f0fdfd358a3918e2ff4c5e97c5ab51028655a8d925fbd0a346d70aca61dc6b01498eaf68c534bb133ea1caa9b7ddb301b75e58df585a9f49f8a5869bd14ff00362dafa735671b43b149ad20167b08b0c237fd137aec9c9289571ecbdffa4c43740abd1bfb0cc61e6ef72fde3f378c6bf349fe7664fc0f380a596eba6c4d0b580fb4cd826573bbe9b40cd73f67f1eb2d6da6c6da4f9d20d159a986ebb27a3341988914a35bdf15de53d4d1ae9d0e8cd34658f88eea8172bcc7c5d0f5c3bc3c0a0ac03ff123a970446a54d1e7286ad77d894eed0791fec57c8cf3c43906b5131fec74e6371d1a1ceebf9ae91553ae8febe6b444c94ef5f94445a5a621ec908582d2ec6f8f4fa65ae4f3fe481579b6ecb4f6bf686c04d7f8e1e7e352d5aa7fb097daafb40cb4bc360de17484000071e07fe4bce223fa4bb03cd84bd5f8a7ca8bcc2bd820726de678e1e7719c3978e839f57ec4261b5b67bcd415b03d75f5f59449611c30bfadbed9862c2a336805ba7fb08a796791f1fa69e4495afa7f7f59756b52c07e0e90c7626502bdbb7e52b548e55d4eb5c7b4036b93ab3a9cc7d981cbdf3a11d77d275fda759f4995209f72578687c5f87fbe929257400f173a9370b3827b66680600d7e5c7ab0304d19404400401b4ba3d11a6afef88b88da460770964e8c5ba11ab33aa60211b86a31f2230452be663d20f6df942d769993171f27629abf4d0e2c699525d50e33ed997350d347ee5345799e8dbcaa36804be17ee60576af87595fe40b1f8a53f50db1e4fdc3741e78d53d5a84560bd6901a3b7e150bab75a8a3afe801f69f9b462dd5c75cd489973b0839aacff003f71a95d7ead1ed34cfdc568f62047a45e6fae9e7d20b890b0e7fd8ab144b2d601333dd2debd2683565e8e3da6f16e4148ef190cce48377c49aff47d397f0c773b450bf0364c5d2e54a810f09212a18b39042beecaba6ce0f50fc303447c1f6828793eefea2409d5a77fd13c80efd0fdc0419186bca65bb0a40a776d7bc0d13b2354b4d4732940f163431f79af6c5bb71d3ce552c5a5cbd0afbb33038d97d0fee67e1b2e761e7f98fcd97761d8efc79b00c553c47407235405cbbea4e5e28781172cd25c5c4c0483b4edf7fa85a5f5d461f526b253d53bcc59d76cd0bed3246302b5af1de1a782374f4a12e0aa0ba6aaa0bb45583c6757be92f28ef109d9a18407694da166e515925e005f54e28a1c2eded2d5d8e16976d79fda1025ec8fcb495404f2b86b17fc1e71175d34b2dcf7866f0cf474995f863d43f1196765e997ed15180b065f8293bdbd8afdfd473010878d1626156e60ebc7dfb42de698e1eb33c7a83de59389ca760991af6d7cbcc05829b51e40d2e2ac15295e5a01b79c2e247273bef0dc152e642de03994353dcf9b4ae07496f1284dc703b66f3c6b34b7f49fdc22bab067d60ae55a697a003dd96f045b8dd71076d88a1076814f9eb2e363b12ac56b8aeaea33a73e57a7d4b7610ef74f8c2c8362bb400fca972ca0eb9a3e75516dcea0c231894bb6e08e784dd99232869ba8bacaba9cc1972e6348bd892c35867b26f26b7df753cabdfc583378fbc60b74d83ef296f95fec338982a0643a4293595a086d6cb49da7cd5a7f7f525b6d4f9afea502f99a509493460acb9755ac3580e93734b38c5b6cdaa05364b5de56db4339da095b2fbb982591bc04e4615448356af81342e04c6149f6f58af3d7459a79bf62186e5ad515972f80d66ae5cd757e69d3621ed7f52a3acac70de3ef08a44129981f343fb95f31e4a7e201db9941a953bc1b7a4b71376ec8a1ab15c339db8503695fa910700deb5e9e2b8fa8eab921b0300747f4f49966206f0a7bae978101a85726bf69a94056ca6e8e203ad72b741bcd437f7aafc7d44560b52176f47e594838ac008f423b21de8175c4b39221a6659952de50045a7c86bf83ce3826cf4ea44b450adea69c21aba687686c0546000333a98a57e09ed017740f9ccc58415bca54c5379ad75820b4bb5b3b2fcc957b443ec784d036f7fea6f68935e8f9fa842cb41b7d47e3d0cb9acf0f597fb993acbefe00ba406f99e43043c9565d0ff61181ceb33f5154a6d5b5eb15ba30d331d167947882c4b6e6d55c8cd2302fcbaf47b5c75753f51133d95709f2e02bddf04382165f712b1ec10e55d9d6097428383ea4e5186bdf47f7e70f160382e2e5e3ca5f4e26e4aeacc5aac14578dceb6b1b509462006cd6274c77836aa056e2368a143a9a8f797aad59c3d5edef1f42e82bad38096d8d362e33e197ea630990d8d7f7f56b3322efbdde58a7886baf23dd50d5796fc1c8c34f05a22dbd929ca5bb46b4d2e6274545635bbd65c381c621ef292a7587579430f5a82a98c079ccf877aaecd4ff002347ce18b76d5605ac3c9eef58de8914ec61eac7e7ead696162d53a4a74de2ccfb44f44856ab57f9947877f0c733412dd9686b62e9b4c5f021cbab1856ab79a25cfbbe3ecc1d1059d0eacc5e074f0b488ab2e8ebfdb12acc2a4577a43188833ce36012f59a15ec25fd5b56002cb1ea8f954d73af82b39a007331c40a956dbe92b1e4bc794a6182d3cb44f696b1bbddcadfd7ef2802fd2b1b8bfb45a512e98eb9fb787a5f799b81eb7bc10896dab290a91a3b3bd4c9761df7652737e623e5fe50fa8e4339a0d54a910566ad91e9b295504c0a717dc691660dff0007e587c0ab7c2e6b3d0968b75d2663e5ccefe5283e061bb19328e0bd7b73fecba2ebceddc34ab95b6e7ac0ebcd3edcf9c059cdeb38bbbcca1430420698da5a2857456e6c4c6e0233fb459fb704ab0ba59018d8d7e7ea1839df636ef373c34c02000501b4c4720f2b4bec7de58bbe95bcb2a0e857ea54bb29c677874dd7992b3d2374c8ca3503ce9daf594204ee7e52b2add93ec9544d50f4eeed394bb6af8e91466db510ed83643b4777a0862b9d70e90cbd3c2b02b8819050692fd97ce7acc7528afeba4688067438fccb4259efd8f9e72a2bee19f5fa80e8216cbc2ca86df88f69a2f0108209668d10c12c39034d236deb3d35a9558c9d237476f63d58e2a2a959038f84eaa0a7b91ccbc1f7347a5cfb271eaeafcc4b17bd9ec44678d9fb132764726d2e5388a9f074cca6d5894690799786ec4f9da57d1d630f2fa9744550a6c275ecbada286c70b27625634f011f1af54b8d87bc6f171bc020d4457e8993a7ec11f9258d8f9efe50daf88d37f39988e8ed83881baa76369a3dd4ab5844d10f5946bc352f0979b19e4856f9bc43c35bd054d09edb3f13fc64e15e49ec1771e81429289b26f93dfeaabab3b18e1eb1868b851ecbf8974299d73b3f72e93f23097a60971b000e13525f23a87ed88d2d3a029ef3485fb9eb349def9f0f3bc4711d014035534fba4d03f92138797dfebcc31f01ed5e9361995684c14833a47ac0112d160e8cbde987f21d2639f0446f6c11eced3cdfd456ef63c3e3f3faf3398819dba9367c16b6609a095393f018f32528057f485c40540a3c5b660996b6b853c7cfbf73ebf8b80c2e8386626eba83c14d4986a494724f01d9fec64def34fd74fe1d14bd1feffc0562827cc7b424ab49341c9e37f1c3e7a78b1dcd20f43c42e55f89edff000373565f2bf52d536b83c1d4d71f631fbfe1503262d9e7c5fbc3ecff00c077e47bf6e65da4d37feeca12c58f24c36b4e253d1832a9e770a67fa7efa789160291de2e4371cf81113147cffcfafe4b0babaf0bc1d66b90d2df24355ac35dff00d83a676e7e7154d06f7b733122a56164cb680abd3edf685b72be5fd416da0496412e360e87a5fe66bfcfeb32da799eb8189bd9714abd5fd7bfd742f2cbff0009761f6d1aedbd4471d665fbc282eedfe5810b6ec42ebb8b76296143e43f72ab7f65210781d21bfd4a3ebe995eb72b18e66bfc7fc46aa1c510a58381748c76e8672c50ac1a759f3981bd3b80ba4f9ccf9ccabc31393fe0fe174465565b59e7e08f9fe52a926d557ef086d3b037e92cc0e772026e123b33e0f8ff00837b886e1bb22181eab3c18e42a7d41e92fc266997bc015786ff0085e67c5f07fc22acf5fad340bb90063003cdda1ca2942d6935813e83d63468f59f17c1ff0009671d3d5b5b5d8017ca01480ac55c8138cdcaa129b0a6c159f58c7481345342dd1a4cd1c02c94f0daee65f629cb86c61cdd6631f648753f0800000c01ff0009950930242cb72ee3f0b71a28375743fd4be7121b32d662e2d016c67159d20260a4604fa024e3b561952fd2ad348b99b9298ecfff0031bfffda000c03000001110211000010f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf30d7de74f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cc3a851a5a4ca37cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3dbe7d1ec3862355167cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf4b008625e7d3369273f4f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c58781a88e2358ec9005c1d3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf398c9fb8c19b3510cc3579657cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf280fd8e1f7ff003a8c089e6dd3fcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2d05cf3a2862970a0174f1933cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf27494290fd83437c4c53455f7cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3ca3220c90047db74f3e77619483cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cb2f42432413af709329bb1005bcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf23759ee79cb2fddff0080d216cfcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3e458a101ef5a4b9886d6dc91cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2c1775c20788a7152352c583bcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3d5db0361679b7532bdb0fcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2c493ed8a499997b94bc33cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c5ee3884b1251e1757967cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf29dd9d43ef99e942bf4df3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf395790dfb6dcfbd26dbcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf38d3964c4493efd01a6177cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3944acb260a2657a332ab7cf2cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf1f9df5801a30a377d77cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3a84554998ef3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2c7b0d79f34f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3ce4a5bca84f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3b2d0dae37d73cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cfdc2240fcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cbc376393cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3377753cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cffc400221101000202020202030100000000000000010011103121402041506130517071ffda0008010211013f10fe554ca653f00173ed3fcc5be07ba0b9752fcad8420c4aed05fe31a882478ec9c18a952e739a239112fb04ab9a972f35e09713044e7b023af2af04bc1d869807b78dcbcdcbad479e6134eb871178c0cbf0b972af152a0475d8f5e56e472c3534eb847f09818e175c63cc659cb283d409ea5965bfb97296c9460c82f04d4baebd4b814384fea9f54130f4829436c414433ce3038940760c02d3967e9894f7371c04309676462fea5c095865d12eb706d9eb2ebb44f492d5a8e5d459b7869d9ac08d64bc244841b9785d921f802171835da20f8d86372e547b61735e001e6344b95830f64212e2c1cf310c2c53b894c0c616fb23514c13705ee090c59165cb96f74c8d455a8dbc75f03bc3b83f060ba9f5c41e4c0fc082f98054fbd9b4dc4db8d4bf830b95289444af821a83797fbb7fffc4002111010101000202030003010000000000000100111021314020415051617030ffda0008010111013f10ff004ddb5fabbb1822a4403f8a8659d97d0fe067c90c838fb4f1b6ccddada8701e46cb4f6573b976df8027dcff000e71e7c3ece9075ced9f7c11364ce3471e3b1ebac21ac7726d96a0c9df65a83aee47eed7d427a67d65e11ebbbcb84d956302c0963861d5b7627dce3d8f97c77e09a4318e19bec1d5bcbfe4bbd338ef808f5c4044116b4fdf3afe603eeecc67a53df505990efae9a5974e9c6db63c6c0be24dd6f2c1deda138309f7bec246920f9bfa26831003c1c3e20099e7c7d4fb2d964b6f03ca7567649647da32ee7ae30490470f8e721dfb4c9be608e87c079c91b1867b2cbdfcb2259f77379ce1c79936cb0b63dbdb77e0eba218f4de178d7b68b04e2dbe2ede62067880384d8f683483f733df1492d9ac719ef3c64bbd47f3803c47e0e72f07e0edfda407c70c7e03fd497765be2f03757e2972db5b5877f0936cc7f1ddff00a97fffc4002a1001000103030304030101010101000000011100213141516171819150a1b1c110d1f0e1f1602090ffda0008010000013f10ff00f315444cc887bb40c90d24bb847bd4c1d185f6f6a55b16f3fa552e5140d4ce2aac2dd417f294dc6dd327cab3ed13011d4c9ebe50fe46072b53475a312eacf526a38a41e4471b8a2d91a1918ed25bd9a13d609f007cd409039c3b433e6b4186814f9888ad51e8149fcf2faa5e0eec0bec532b349136e415388d77abdaded589ab8243a19a208d693675c8772b0e653aa7337ef939a33e22520708fad2812d82a1ed9a1ba31f1839a9c8dbed0d8818be92c4daf7a1cf2b49492a10c5b10d05ca5100a9041ab32131666006226f45c90b0f9c64f15843dd8f01494eb10cf64d36d109fb3a9ad16849712e0c365cf5a945752a2f7bd31665bdafe9a80ba6c7ef11ef45aa068bc42d6a48d1ff00699646d6f7186804d0903a9a9de4a93b4cb3ae8657275a560d8944f1bd18787d60ff000ce31fb740d6af3fd4b10e7f05eaec3bf448223258200d349328d1ab9724ae10cabb32f978acd0c64aa36bda388ab75835a8d0148969a8b54548898a8873342e47656141dec6864fdc603a34f02d86d7b2d9d9a039117722cf0f5a58a9229dcb76a5d0e6b23b5a753c51a17282d6f6f9299180948fa26bc77431311431ad2a07089eab7df482c9dbecb06a94ee012b33cbabbf504140a5c4df56e6addbb2f35d45ddab473b5104eab440160d0fba9350eb410184d669cfe27b52614a12502e2a28c205a275a070ecaeb52ffdcbd94b77141871c2f2a3e09ab2a6ceb907f6e55adeac3847e9e1b340ed98149372cffd4bd05051f945c44c9ea69d84f4004aaed4c210419e336034a96b7e69a09602571401a9db4a09a9fc0304ed5d6809be2989b58a14648a5b122997bc31f85a50e19266752acfb16a3ad0d4f6abedadef98d1e17a94f40cb37736741678468c3627dedfbd70d138d29d74e4744f2e17d4d988e200db3dcb2e20d5a6eae294c5593145284ab55cd0746d4d9a278bd4db13d2998a32e148302d99fe6cf8a027b0923fa293495d4267e29cc8ea1f3404c1d57d520cef250d8075b56942315348e4f15a904df63d2b55083239a903d8812ac86ab53a2420d3c8cd3f24d372d3570884d4914d417566d026017c50d21bec072d7e1d1f5195f302b9f0f39e25a7a88a72a65a95a715d78a15c2379b1de8a0a8972438d57a52663bc19f1fb4a112d4800896fe95da6219c867457908df0e2d25f460c68e547383b9109241251607085221604248dd652ccdda032cb7f94ea0da40260735301b414369dab40ba3fe56a97a86987cef83f548936ed1f08d36ac4ca53cadfb3442caa008ad9323c3404c1c347b50f5d7bcb6699800350b5223108598a88cdf6b9f01f641d28972224618ce309fd0d5e240b1085c05c2237712694309da464e971384f50392ef41b2b3e0b7568e5a4a8259d0d68aa748b784c4f568464ba268661911d23e6a71320ba0ee1a40151812b7d4a082648a5d06938697a1c512475010de4df92ad53f89a59696cd2b45668d8436135758640d03bedc32714b21e09dc2cf5a27c02f6b3d4fe69e310e21929de346aca862694805c03801b4403c7429ee6bb8dc0af71c0da8c031c220338792e26e730508825c7d382b1990e12c3ba94fc88c6eade5a0c2830ba1441244898b63a72b6d390729e0182b767298a792716084b8e879a81134165db4f66697e40c58c1836656045d69f4fba95d5e96fc4d2d4c0095a8f4b374ded3f311b41a015de640e62cc24a0e543016e226469bf5a48fc8992c8e4d1ac86434ddf22e4a54c12504a2eb013b844c234427b35739ac501950ab34bc8c80e4860ccb7466938cc8fcb2829424b0b429a153a4c1367fa1f4e259a6426c7b1f42818dc038ff007e28900686f70d9b6af194923212d2e38054a3f33d6ac95f36a2a4e09460c0675bd02eba4662b2c898749a856281c4d611b70ad0b2c8c0b177963b252156a990e0de3e3768b14ca244fcbc532d373e1072b71f66e54911580ce0ab7192d22e230abf989a20c485b6ec6f0da926a3f11e53400118d1351d4b3b2559a692a4520f87d07f8d9a8d0bb680501683366a26225102e34b34d2a085d8a7d9f2a1d903b41942462f68d2180a134267803d434938d25e9c211491a0b6e155abf94b9639e424b9852524125d0c7df5abd65408590c93de283f3c2a72036325074553f8597f0c36a08a9dc805dc31c840ebbd3fc9c92364346a734c8d5c530e2131e44c71e83a326366e527cc0b1d45cc30d106d624c66c0b712ea1d41125525c93e7f20dc009505ec7bd5c68d90236664e8eea09358350680fa908cc655dd48cb4b4eb2ff5bf0c943eec83f5423069e26067f21d452ae69814042696cdb668ea834d804f9f4d61d400bc2c3dc97729629c423b60bbcf1058eb76cd1cf54ea6490830808bcc3de8c6520ac91b889e86b05e83738a244751d4a638a9a553431cd4430f118ff84f26446b30517adefd6c215032334b6ead5aca406c540cf04b0b674d85d624914f7431eea8308e8e05125f34764b32703695745a508ef84148f7bbfd8fc209080d924a22080195eebc99b68ed4ad2f8501c868e1e444911a87020248490c9a8967ad404254e8b03d30f253425f35a840ee335090a984b2ba386fad2cacf95f5fbc1e986690917f45d289e5dc1724879e80d0dc815dac6bf751d41a7c87616f635a9e1b04a82919217c9b4521765d063886dc3b752a541ac7b2508ba958c84c39a1405b508f25bf0e7f226e27ee9c9b19ad1c9e11b259a388ecccc4c04cabca91b9704b7a8cff00ca180589d5a8ac32612f5bce80d895d2b4456984d5c20b08116412dc1324386a021dccbdff0079a1a2e200a09b11093ac4508085c08c8f47f06e506281e12d8b9375599233bd852423081b822237111a5770c8d0813da145ece4b3588a92db29e0a79b1cd90a54d270827411ecfd323e6ea53a38f23c505ae488ca5b7420751a4c0c1266697620624a4170a0972b34df541c4170d9625b5b55ab710bca4d0391d4c6d144f0d3640c0174382fa36a7b57b7ec1d188898be6456153bbc1a9f24fb24a0c0e5207caa4830ab517641b6992ed5199c55478100d82c5632c50496185be8e566533052d12136112e19005f4904daa44119174308a49222231d314188d880d2983d4be693906970593de8c2a0a2d5d19624bdd0df5a94af66c9dd8e90ead008a13a82896028b09bfc9133c6307ed6ebb276dcda90463667e1299c540a8583d907881b88270268507581d4d279ada4b8dcd3d91a07981a626278ac7dabd6a4a67435c1126966e14416a8199be3b8357d30d8615ca9503a9489c7be8033dce6692899b8ad4e64011774277161ecd58520567160e851190f618a5e80d9bf62667b23d714b20588a4ba321dc144466baa0d29eeee9796a005a8985f4ad22ea55db12f4a826c465869884c6a976900527430e951cfef01326d16cc413cec55b6ae40b45f520edaeade87443a36942516252d5a18e2c055b584849bc13e29bbd0992aee07371c15190a41b3bd03c8cdc98b0391a56946c084ccc98661331341c4588c246d170e99c7b542fc9363991bcf7f9ad2a5b742df2a4d152a65c21bd1c395625250a55789c5b10609983b4b4c28cb4ba8b207c9e998abd821f6a660765827bb586c240f14f90203b35c440adb36a66c80eb3469812a7596a39ebbd27a849256f383feb49061226f04d9b599d4b50342c1280b811d6cd200cb74b4d309c79194f69a6432c4c8bb0301ade69b628b11102e8445e00e8c9798a6c60409b4264691d3724c889d41c3e63c64a90ba68bf0a0cadcdf63cd187049109c2b67db1508b64a372bc16cc3a9d2808038d7f75151450a989f08609dae5c50446219b37d1e7ee81d84528b825f413aef50902c7f61f1e2b385022d0aeec1b1dea5e0211611838305301d02fa839f766a31db844b0e4c5b53d2c1920095a77782b959690f9508d84eab9a64ec8d73235ba146f3b520b4333b7e24d502a5d8d04aff0001a58b7a1d1fd7a428822214fba5375399a52fff00daf8a424400ca44c3d4ab52b48814623e14e9587ee47ef83c52de89d2678a1730f66ac41b429b45a60c916758c5c2ad046b09c6f2fe294cc0c890f51f9d5462db21ee502ba0319c0c7b80776a2e5ad0d24df6b5ea5508adb568e9340450b01d587faf6a1799efc5308c45e66fef3e96648d7e0a04ce10e8ba3fc9f46121c011c3bd409aa8a8d6f45486d57b1ef3a2aecdc5b1e2b4a9bdff144c2ad102fb152d54a508646cd5e123412d0ff00aabfe052cba3a9531bd02934308c8ecd5e8bd3c91d8fcd4ccda420e23af7284318a095b8d0b9b3151399447cd29aa4e8e005c70279ade15ff3ad4e8613d647b1f75193a3effcd298898eb0b3e17bfa5f3133da95b0087bff00aa8d54006093dc267669e291b3d4a5b9833c93e02a22fbd6aeeef524c493480d2a3389ae6bcd6c1e55963d267e699990539c767e23fed57268ddd2a742941790201d2869ec239b0329df1456148249517604ad0da4bd1851964613868793789251ebc0824ecc6b4d71094d9128bf6fbabf772f8a5a64a11227c0254a7410ca0ce75883bd5f793d66a4bed53518f9b5438456d98227d31124b126209a7da8131423b8e3dab4630edfebfaa410b4e20b52f679bdaf2930cc54704ba281223dea32487065a56040ece4ed462e1def4e9caf4a494229e53ba501fb2a427ca0a48cff0037340e09e8cfc523ee01282e114e2044eb56303bd58626e76a4de224377779b8dfe314fc391a064cc858627514a00b964ac0808b17917698025e44440b82e65449a32720096756a688b4d20cdf8b1d68b4184230588ebf1421037b0bf61ef14ac6d89c2b0edee0dfd36015b0d13ca9a833da80e0e9d2e3762e1ab1519db012b8598e634a49831fead8e1d4b494220246064f70d00620dda618976b0f340496048af8a1c6fd31fdd12fbc85a43859481e0cd5ee008826f267da873013632fb57c330f83f1fb0a29e5621faac1b3fa21a96ed8df9a9910d02fe4fd55c82e271fb1dca89010628032c82ad0942c6e803481b3984b26c6745f19a9c90ba2219f7978abe90105648cf818733458048ae2277eeb4052ef0dcd07b1b4f5a72ea0eb82dbab7e78a8c1143d6cbe8e03d349a01a459b07ec9a2cf0a40b9c7c91e46961de18aca42f288889ba2d4082b420108640333009961a681a323808360024708dd91a750d87051044d944f42819baee50321f8238518c366a06fc0406d6a8b46d8a48ff00e5a8a1083a8c529458888099351c334cec303ad87dc6823bda049eeaa1f8893e961f6284c4df7cb12f6095742696e092121e4d85c6fa62b61d78b6ab38b58ba074255dcbeedbc3218740b91a683249b44d9bda30f5bb5fb92e2094912d1c34a1506eb25ad9f4c5cd0885ecb3d4f70a1136cd24451dc968750430c98472d00b81b83400c14bdf5bb5a6061d9d1558201cb7642219717cd2621a86d02c207328b646e9136890008038a0fc8fc2c77fccd4953c50191d4d6543e55164ff001a526ab25e2ffba547295d53f6adb65ef1490b5b4b2009c272e46a12909961129dae5b26cb203c95991892cab1617ea966268132d9846522ddb229aa5e684387a269dcbda8525b00e5b97a9f4d916802f2aaa737ab5320e811eef9517f4c8e00b0994a8c4e1c9c0a76118b95218338ba470548730d58a43ab0110e8a943c8585593416c1264919a769a528293b8b99a5e85e6a1094e9fb51b2761fba1343ad393e5f8e4bd289004d5491733092497a468224261397a80774a7f6c720435452f8074290488e58282dd9dcf6a9c93e13d8968c7a3fd9148063c88b2de002096858b11000c52b4431984126f2c1e2ac0632445d7aaaabd6a0f44c03db63a5de291190aca8e42ff71310a519a84c92de1483a746a474b825b82f6672734def2427a92ce995ef56b286f94824842f3a04da90a19a9059558d33e9b68bd064d44d9184e4a5400c359102dc949917522485758012320b1a8bf4a64571c72e535396b9a3065b34419e830f41d68c0558084bc5a6e5fd95601a4aad10bc9a50867428a0db342a12bac9f158c3d7bfde824aff006c451126880cb1b4d1f1ca1520d06e1799ec50a259cb0f757da8425a5be0595835377ad0e92bb29a6d1b9448b1c229bc0bb3ad446e393c3631d6d414c42202659fb7b2b232a44ec1f22a4d5d9a96b23ada75a6b8032328e7c387193aaa604c80b6d34912ec30e915ae869a5c05e27cb968944de20089816d404adaf762a4a6b8baa1ecf352dcb2f3568b9d6a04045d0a7c84c1041d60c874a1100c832b13cc83a26cfa71524b859775a3ff00192a576161583ce75b9cd47031da3faa74b684c4697b2330c3a9b548002468c09d46921124ed41f64a50e2016d53e950989ed2447cd0bbed449823a96fd941a897124481f2e81da67318557ea36ae4cd860a4e13537d88bb71869d4566068e9e6acc4232b29e998f14518018b12505f327a54ba8898b6e745e4c9407ab05a56d3e78ad1488c5242475578a94a937a2046ac0437a95a07453c3702c22eb0434f5214d8017916eda6fde8f6452eeb352ec9493109ea363dda38ed15f8faaba09cb9a81860b74a6fa16e8ae2b360c22b7225c7a86cf1ccfe06a6b64d0957486bece486410cdbb9466a17c066f96808e2218802e1353a3c5180ab408701d669661a66dd22d74898331044cd2234621d50b4e550b7640806dd0835b988c7b501acad0dd705a55579686b2b0dc4a51043346e82f68a1a16223b6d4a0a569c36784b3deb5bad0dc975d1653648ac710771602c9bde116ab173237216c0584c6176a864a95d8421182046ba4ea221eca015acc06fcd97780a8b58bd916ec72b52d312cdbf6542ca5df697c43bd682009ef76a6404a47343be9565d6f426b7a7a9320dc12f515f40146801d5420e286e100a3692b875d5d94a212c9613e307b3463125a0f2021a080184cfb85ea9de8e56724242c97946f438394fc5124b13789b453100440ae40763a378a815a9b24940635fb6afb2050a9cf5a06f50d0121d3356f702965888ae4c5e06e2d13495051c37433ad3e5421010824632aec94c92548bcfe7aad571e086e072aef9a8fad81d27fba26ff003145f2d66f15bb057ecf9a8925094aad05940de196a4d024892c6b53a06faae9566b6578598059c69b9766a3352bbbc87a8d2735379407057133a012ba6f14a416e1daed2a3aef6401a5d9b36c4dafbd0c10c00d795d9a1beccdf21397bd10c5817917c5e11882388bd38b7530322d8d32e714b848c44de1c4eb5051497463ad1a0c88ea5144d4e679a7720601da841862b82131c4abd56a11e2162c2aeb004670d1fc80053b1bfeed0803139eafeeb440821d59a490225a28c2c5c25c6b3500226902004ac56fe400dc622df141b39e834fb3d49a6b39cc1f63e5a81c900a18fe68b40dcd496b3a331574551ef46c6a302890651911df8ac8de022cc0c4c085afff0034c4b2304b315006e34a59045d46935d278a031b98a84c2ba276a831977dd7898ed4ca49d1b2e89b1c31712840e06194d58025e00fc23594b220e39baaf0922c6d5273d04eb504f296b5ccb1e21ef4a0d8cd2e4e763324b11a50ef4ab202437e29642d68915ba5b114a289e017fb1ea485021cc4996c360ee46a5112b7205dcd299008e9450a12018f9fda828dc487857cd7760b49d5fa0a12a038356956f0fa28e06cb7a28849b02dc4f25b2492135800a4524617fda0a33b6060283c4e5ddd832d988366a460497744807df3c7e57089ee98fac26690cbc1bd31ce4bb989a0638b1880087dcec53ba2010940f13a57ce9d69dc0914534809882467111156a6cca25a84eae5988c55815400e423628d2649290b7993a1f51329a5bd187413b0e8366835af10a21100846ac4b0dca1c0a037cd6a05e68d5239686b17e0a4552d16457275a554874291dda0cd1df42cc2689b94755d52424562d33b7b628062cb4200734f248454d9fefba208993be8bba478a0ac18007b9f807493f0bab188b5ff00468c59c2c82940c84cfb216d89767341ae810085c10b0e730d279e918f668b9bb4467776a46c9708972c0c983f54de4c9c021b1d7331a11376800804581ea24b4a98eb023e2ac0b2ce0095e94914134d058d9203bc69a9704b752ba076ab682f66a5e106f4446e189a2e4b8a608374880887fc4b4198d83ea2063a2fd69cba48ca99569c489488d9a692901e6b718322fba614d50182915d2e9124098b58e52940aa0195a94ccb16f2cff368ab4b2fea0fdd082a24593090371721cf178f8435cf96fa1838e57f072886b128213a4c44f349feda0bb2455be0ce6c8f518f80203d4a340140b4487d8a098633acc8750a475d334c68cb8be3293a83daa7a474a9d4927a05a80b2db63f1139c5494366c6af813b36a8d0b6ea5da27242e6d4718f400b4bcb760dbaff00b496cd9463f7519468802600e72f9ab7353779a35602442c88ce52538632c8b32086b74962e4a9d786436400574b5492845c06f04cbb1075cb1288a087990b42d8c8e2cfab2905a060c4bbac80e2748509a8ac9fdc53db01318ae962fcc78a6b1a3f0020095315284e62f5a5032a014da08d5480e51350d966d89a452492410bd6988947d655891700be4177a628ce0e2e5640152b7225495654994805f04eb47269c8c88c89dcb3275a417b9cecc91621f225d281c0d8170ba1551aabf55125e76416e779769de5604852484d3b2a94f17cf1eac4685dac1514d86ee6dc91799964a5c068f769895822b0b040584714d56164c4aa46a20ca0e298c521169a5acbb063bd400486f910d271f3da86e5971fd54ef90978a4489d81292258d5ab180c705f443310ad0cc1e2400554b16319e2a501c288c248d62815e981891b25090c37d14bf7550d53f543e528116ebc4669cec00fad9b06d5812408b889cd1c9109b02af8f56ce541f8032ae81769e98ac17bd27b4bf3a52324a9655655dda8a216cf5c5485a9c9ad4ec37541c8ee4d180cce9bd482c9a526dec011324aee90331949a181e2b4321d144ba346f44158c7d9123ca8f8684144ce9d0519c1bd189411205f0289312cd998a9a30eaddddb74a964b32580e7c485ba344805433a1be038f9a9f84c881636fa0995be0c931e4588aaf199798a81045618b4af0e999f2d26931295605d4d074c3a47a82f8261728d0ec2cf14ca19ec801b86226337be90a6af2180dd5c52e866a07c3dd5112eb970b1d5d5cb820a4d12977e3a539e34a60e678a92c6dd7152940701a0a23ca95948756a11d3caf855fb0d75a259fbfb874a8002e314dc05f918b8df44d88ab903615730dba26d514e1f21d327a31d29c08521515606b0049e1a9c13660b3cf0d4d89eaacf02b014116d29ae0848fb79a174404926a05efaa05e2f6a880a80210443c9b602d1e70156f30bf21af572f4a3170b416cbda92c281650525e25edea09e600068042f80ca40b2de30d33484838771c8f4a29ea0200600d0ab4512e1cc374027768534d330917dc4e99bb7e8b4a71b4012113d569de66eb36a8d2c320308818d884b70d16640c8987d521520cacb98ace62606114e0798224f610574a288a9ba2381777839a750b8b6a6e60ef2f3582071216825a853038443944bd875a9d30085dd1957cbbd48316162703a58357cd5e989301678a90224b53664f721ea54d10bac4ebcd006222a2c0130b18a7ab00791aff00734804a9a223646443240500028810ba58e744c4e2d42d5524a0681d56eb19d29982ae88466f4f96dad0d846c194e572577f509b69f16c12d3b2a60e433904dc926d41cbb8c93a27229cd22775530503a901469058196ebf5cb334a4b3821bd8c1356424c84b4e5dd6f4ea4501a9a6e2f905f0147a3d003f75c25bacb4b958687ecfac1c085335131208793c8938a9789f7426df600d0d4ea51571d8bbd8a3321fd483babc539c973065f39a770743f0555dd2c369a095a1904b8d3812b189ac9c812dad2cb22fa9288b45a584e1db8974a7a20b8de78d4f2f503d489250569a491413855420cc8c6a261e2d495aaa012789b7653bd305cc93e0dc17550eb42eb0e48bc87359d45bc02153441aa4aa04935b3906f182a1c8323764c477b50101f541e3014b46885dcd91ec33bd498a66087847d95671241da3063bc562894503c1fcbd28cb3b8ae6fa7118a990ceea018948382c474b4242898622c262dbe2e2317a4681c0240c69c317d4e9427804b009662fc77ac36739eff7a8dcfd2a5b107760f6a544473263d8f9ad0af45f73ef4827c53c9be50f4f553710896b8e168db4b91248db0d90ee86dc87ad4ed90994f55d795f68c52c32847043516365201676acb7a3462580270b68e1a9cfc5d40e8cbc02a5f3a105637bbc1503a81659cabf88a144dddbe3bf14cb96f422f778fda95d2c05e6b2c212277c60b487636ac042c2f61baeaebd22961dc872803c4f8f5e5548e5ec3e5c3aaa6603eab13dca950c75186a0d4d9b2a0b9b324991a096180e8e9c8d3c64a6193444973bb4b33a8b5da4c0960590f07c4bb66a66225041c1d0dbe6a2db532db4aa378f5e8e2904e8e1e974785a47cbf11f23323844dcfc4abb1b97f6acf8e30d4a2488eb5360d0a37de1b04ecd18d7c047babd8ed4132f2906132be611c7c5342fb49a3db1458e77d6b1f8e27e6027d93d7d15bd7f6568e94a39202139fde1c9506d58d1e75a0dca74a90258ad8891f93c7e1144908948621a9744d45c54fbfc6523456ab47e223ff8bed8736543e63e3ff013471561dcd4e5250e9b815de389f664fce61f9957f241c1605f33cdd4ee6b433f89112169a69e811f27e43ff02b165a3df61e584e8e429f04bebcbecc23a89f816516f3b6f7ff00e11ab706cda785cf37d6c7e2179897d3ff00012224b0bbad8175c03406cc1206810b8750a950503b406199b546260b8614f9a3b42140500161d352906acadb5d892bb33f950241a40d9136abb82be664c1d4b8f49fc5a01d135536edeef5f9fa711129b2713e5461898a29b8a0401c0c4f977bac598d88089e2f74e0a58d14c241c274b5d8c75b50a32cd8561881bb81bebc52a037832eca59ced7a23f11614d425dc379ba26464a9c4cb928f138e22ec59668055cfc64c89a8dcac972d5268e4512e38b037971408272e1c1413a93115b130d3582743ad13ae81d26c88029160c6ef5d577f3100c44429d66e523cca0f8040d08029f40a68e80482770013830f2d5c085c85d916a7d4d0599f69a1f8d77141cfe2f1cf25d7c948588444b88b04433be68b8045c08c3bdbef8a95900002a4ca00099d0d0dbff0011137788c9249a6c950e00f31886dad080a949260c508a38a2c46131b95ff03f4a607840c6031ad7fc0fd2a03e8fd281202384247c7fe0df8ea0900d224b64c1afe590190632c3c212960912cc20e4d1221202e0cb4ba45cf0646bf99b7ff06fe91110f20545852c183ba7e10b00988822c250f83a0f06f00b5aa02055fccd8afe56effc29626305d96a700aba0a2f36d160303b0a541336124b160d56a416c9992bfcc854a6ceca62a5c7ff0008c423a4900b50c8461d82c14d413e0009112e036b849317f49680a1440c8b0758ad612fbe74286f01b39a3108785b05ccc0862586c668c75dc0806185ac8640e22ad3442f2ed8d6e8e6860380400600ff00c25f66220fb05a014904ca549e0b38f54200a2400589320004b326cd1d1d9276a077b090d29a449596bb6a656c051524b421b304629485ee5e31b4c008b75b0c4d5955c880746e726dff00e637ffd9, '304642110001 ', 'M8+Cpt+zltZs3QpomFLRjEFCGvI0VGC+jjJzXH32Mtw=', 'rhalpdarrencabrera@gmail.com', '2019-02-19 17:13:44', 1);
INSERT INTO `user_accounts` (`user_ID`, `ulevel_ID`, `user_img`, `user_Name`, `user_Pass`, `user_Email`, `user_Registered`, `user_status`) VALUES
(3, 2, NULL, '304642110002', 'M8+Cpt+zltZs3QpomFLRjEFCGvI0VGC+jjJzXH32Mtw=', '', '2019-02-19 17:21:46', 0),
(4, 1, 0xffd8ffe000104a46494600010200000100010000ffed009c50686f746f73686f7020332e30003842494d04040000000000801c02670014534b6137465a5f4c4c6e5276396732434166596a1c0228006246424d4430313030306162653033303030306563306230303030633431323030303034303133303030303064313430303030616331613030303066373235303030303637326130303030366132623030303062643263303030306134343030303030ffe2021c4943435f50524f46494c450001010000020c6c636d73021000006d6e74725247422058595a2007dc00010019000300290039616373704150504c0000000000000000000000000000000000000000000000000000f6d6000100000000d32d6c636d7300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000a64657363000000fc0000005e637072740000015c0000000b777470740000016800000014626b70740000017c000000147258595a00000190000000146758595a000001a4000000146258595a000001b80000001472545243000001cc0000004067545243000001cc0000004062545243000001cc0000004064657363000000000000000363320000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000074657874000000004642000058595a20000000000000f6d6000100000000d32d58595a20000000000000031600000333000002a458595a200000000000006fa2000038f50000039058595a2000000000000062990000b785000018da58595a2000000000000024a000000f840000b6cf63757276000000000000001a000000cb01c903630592086b0bf6103f15511b3421f1299032183b92460551775ded6b707a0589b19a7cac69bf7dd3c3e930ffffffdb004300090607080706090808080a0a090b0e170f0e0d0d0e1c14151117221e2323211e2020252a352d2527322820202e3f2f3237393c3c3c242d4246413a46353b3c39ffdb0043010a0a0a0e0c0e1b0f0f1b392620263939393939393939393939393939393939393939393939393939393939393939393939393939393939393939393939393939ffc20011080258025803002200011101021101ffc4001b00010002030101000000000000000000000001020304060507ffc4001801010101010100000000000000000000000001020304ffc4001801010101010100000000000000000000000001020304ffda000c03000001110211000001ee0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000044800000000000000000000000000000000000000000000000001ada87a8f075eba672b8ceb798f1f46d8dbd7c75f5072d5cceadc754ecdc6673ac737bb1ebb5f60000000000000000000000000000000000000011cb7815da791cedadded3855264252445ed18a9b30b48bcd9829b555c0cd9a4d6658ac4c988f53bbf0bddcc08000000000000000000000000000000000035b9ad2f2b56d68b297b986f9045a241226645ab30899223258d64c530e5c462c987a94e92c6600000000000000000000000000000000000d4dbe50e67263cfaaae5ceb8e7158b26c566c2b390517a8c94464b53228ac460c986cc7af5bd95ded28afa5e5e17b9c4900000000000000000000000000000000003e79de7cdad64ace97dad4dc9512296092d098811682a5696a0b404c4c15c59e4d265ad98baae66a7d39a3bd88000000000000000000000000000000001e1f19d0f81aa2d4d9d5baec463c71b56c37259518af15ab54113508a9763832b14199860ac4cd8a64836fbff96f652740320000000000000000000000000000000387f336b57762d7c72d66b3666aacb4bc419f26ae58d6c9b388adab5ab526488b425912a2a50944cc2c1062cb8f793bccb8f2620000000000000000000000000000000a9f38c556ee6e87c5ea3976e7bccf47477cd9b064d499a5844c19b2e8ecc5b0e6a9826d4b2d3152eac16ac952826260ac2c997bec7b79810000000000000000000000000000000d6d9d03e7f2beefa5eff91ebf0f4791e4f5bcd6b3a137c7d78e7c72966b17a9cbadb3024ad32418324e3b129548452f42d13529d2733d149d70cc00000000000000000000000000000001e77a3a67cf6d56ef4be86a6df9bd35d1f5b69397a7b7bdac7cef63dcf27af3d1c9ee78c639859b51adb0b6a8462cb8ea662402b58b0c592915f73c3f513bc198000000000000000000000000000000001c4f8dd0f83abeb7a3a1abcfb74193c2f3f37a9dce2ba28f72697ce27cef415c2eaf65c7769130d636231645566a45f0e7a8ada918f260cf55ace349f431faf1d68cc000000000000000000000000000000000e7794eeb83d5f6b6757d2e7dbd6e63d6cfcef8dbde9a6e7368ecb9e54123c6f6b1af00e8f9ef473adf14dce7c338adcf7a5c62cb8a36753a8e573ab56deaef1d6ee188000000000000000000000000000000000053e63f51f9d56efb7cdf49cfbb629979ea66262d35ba4cc56cbb576d29afb759785d6edf95ef8d17b7e56a572e0cd636b4a65def3abb758fbfaedcc0400000000000000000000000000000000000e3bb1f1ab8bf47cccb75d0edf27931d3abbf37b58d7bb7f2f63377793f6796e9ca36263ae3d4f4798c78d76bafcc5f1d3a3f0b4b1eb317c73d39c5b7fb98e63a9c8cc000000000000000000000000000000000000015b0f99bacf47574fda966715e676dc96aeae49a55f05774c5359b26105715eb2c6ff9df458e076badf4231662400000000000000000000000000000000000000000001e7edfcdea62d4d36336c629aaeaee52cd5a65a598f2ce23b9f53c2f7b980000000000000000000000000000000000000000000000d0e03a0f03565931ea6d65c7696c052e34ebb38accbf42f98f7f96f8c8000000000000000000000000000000000000000000060cfcb9cd5ab6e97363cf8133df1d96e888ba8230e48b35fa4e77723be1800000000000000000000000000000000000000000000f9c76bc26ab73166ac5595969892cac8216b69aa6b5660fa565f1bd9e60000000000000000000000000000000000000000000393f03735b772de16609c794998908128131152b4b0f7facf9ff00d03008000000000000000000000000000000000000000015b79c703b3adb3d19551af970e717a4934b408063bd0448c7f48f9bf7597a83200000000000000000000000000000000000000001e0fbdccd72fb5a7b7b0935b361d8009804c0c704018fabe57db3b21800000000000000000000000000000000000000000e4bade2ebc2cd8f2e9958f256b6c60cd1614031df0961098931efe8debe92398000000000000000000000000000000000000000072bd56b1f37c9eaf91b65be1b5532e3b4655649463326158902605715d5f45d9e7fa0e600000000000000000000000000000000000000000060ce3c3e77bed3af9d64ad3573462de35273ea99670932bdfce7315ecb7a5e0fddeb2d262ca400000000000000000000000000000000000000000000319cb735d8eb6af2fd76bee25390fa0724799b1b1e81d935f2e5700000000000000000000000000000000000000000000000003165f24cd3c5df4eca9cfe08e9efc1fa15d76e71bd94040000000000000000000000000000000000000000000000003c9f587ce2bf49f9f69d5d2fe2c797eaa2abd9719d9c0400000000000000000000000000000000000000000000000001ade6e6d2ad8c3846ed30c1ebee79de8c00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000001fffc4003010000103020404050403010101000000000100020304110510123113202150223032344114152360243342904043ffda0008010000010502ff0086f7fd249b0acc4d75bc7532c6efd05d3c2c4ec4294238ac08e2ed47172beed22a9ab96a7268be51e28d64271772fbb4cbeeb50beeb509b8b3d3716626e254e5473c527759710a68d498b393abaa9e9ee9245a1695a5695a42b6611174472695a559750b0d88c957dcaa3152a5965995b2babad4aebc4ace5a5cb86b861685a4ad2acb421eae1ea45af007508ac222d14fdc269e281b538a17b47281e669e995ee3624a823334cd686b7b86272f16af3b2b7996565f045b379cb0787a770aa9b8107c90836edbe920dfcbe8afc87273ed9d2d4be9a48ded919dbf1a97c5947bb802b410afcb65d395bbe5708b93baf2e1f55f4f20ebdbeb5fc4ab4dd8747676cf7565b736a289bf21682b41cad9615557edd3c9c28464ddb9c741e73bd59025a68ea05441db3187e9a4c87a50dae81be56ff00c3bab6455054fd34ddb31a7de5b64c1772694e2878503740d9037560adce4ab95772bb96a72d45175c72e1353c48fb5e2aed55bfe9fd09b3597bf2b5d7c8f8c1bab595ce5e35a9cae79b7e529ca9e530cb148d963ed55a75569dddbee4e4dcc8ba0ecba381691c97e67656e52a9295d52f63046ced523b54c56ad4e899c38eaa36b50d87427901d3934a737cfbd952d3bea258626c31f6a26c19b3b68580d45aeaacdea08e89a51cf757d395ca3d51199bf95146f9e5a681b4f176ba936a66addd482f32af8aed1d46c56e01cdb63ca45d6cbe3946656096bf6caff64133fb2807851da68782e7f509a9c10397a4f42390f38d9128ac17fb7b6623ec821bd20b4593dfa50a68e65361cf6341575f3be40e83d390f31436c8ac1cdaabb65631d2528e8553ff005a8db728d3b232d3718851973a0a69263f6d75a489d11c81d3e51d86c723b6187f9ddb71616ad284e235f511d995202356d0a59c150bd8fcac06553082aa60e09c81b72df329d91c8ac3cdab7b6e34dfcadeafa6f1434d4fc47d4d170e310a6c3a861ec6980724b0870918617e4d36cca6f5cfe4a1b1dd45493ca29b0d99b376dc69b7859d1d49bb7f1cfa1b2b343a9d0746d5406d1ea17cc8b8ac838ac234e6d3939336c8a753914cdce8d863a6edd89375d12a7fee740c7264018786c57575a0ea6f46e6f0a7a525f231d13b2d5d1376cb4eb75616883e4ac3a9f8d376f7b75b05c2a5f5e924c61edf2ac14b0b656d442e81ead7210dd15462f3d6cba8a8217cf253c2d822ee158dd3554efd2f07a6a087339c18d8ea21979248db236a295f0ba3a51c191ba4a1b12a395d1b55353c952fa6a7653b3b8e311e99da7a4733e351d447220b515ad07a3231ad6c91b956cbae7b5d453cd1266232051d6c322d69de224868acb14323d48bb9d4d85b9c98c6c6dee58b47ae906e096971e21d52c65b5523536b58993c4f47aa9a67359f0058100ab2364d92460fa992c647b8a089543486a648a28e21dd1cd0e6c8c3148d0e7ba8284408804625a1b3334a2c4269582499f221cb6ce8e91f54fa888c32d151bea4c51b226776aea17cf2d2d2474cdcaaa8e3a93574afa57b1e2d26e3603c3a74e7709cbe0aa5b7d34d450cd30e9df6b2682363ac493d00b06ec45f2baeb944581cca0a4b6ddfa57688c92f217fa826685b94e6dd6939b8596113eb87bf5738368d0f51f5336e42d056c8aa2978155dfb179f5489ab73cd20c9c150cbc6a5ef9348218ae5ce4d1e166e8729c9eb0597bee33320ac5c9de966433baf8f929fb61cfe1d677ca9978d38b9205849e96ed90e4b788a25750a27f123ef5884bc1a403ac7ba9761e4fcac25faa8fbd63327e46ecde8d527a8794560cfb3fbd620fd758ddb27fac79073a17f0eabbcb9c1ad24b90ccfac796542fe245de311769a23ea432ff7ce7970c76aa1ef18c1b530f52f95ff00d1be9e63be6560aefc3de31a3d1beabaf95fef98f41c8560cfb54f78c68fe51be6ef5f33b94ac34e9aeef18c1fe5b7d4864ff50e6f9e472a7769a8ef18cb3c5f20e726eddb95bb723b2a6938d0777a885b511cf874f1a3bdd5d3b66ed9ea5bf3390e8b0671307799228e50fc2e9caada434ae40abad5c97575757c991b9e60c2dee5146d899deeae01510b8169ca9699f52ea981f4f266dc25e47da426e17004da3a76a003477ec6200d76582b7f1e3315e2ca9dbae7fd09e1c5b2e1f34a3ed057da1ca1a2a881541bc630faa29d4352d3474b510ccc90b934dff43924644c15b4c4bab29dae3574e19f5d4cbeba993aae9d8a2aa86577e878a7b387fbea7dc8a7967a2750d435aaafa2c2bde7e878a7b3d2ecb0bf678ac9a296267165c5bdd615ef3f45aa3fcac2fd962d2eaa9c259aea317f75857bcfd1279784d64d1bdd15636e2a98f1f52227baa98e306870fd12be32f6c6c728e9a5649f48e6d249048e7f0ea3854badbff31bffc4002411000202010205050000000000000000000001021131105003202140411213518090ffda0008010211013f01fb5fc3259d9618271f3b2ac1290d5ab28ad8ada1272f034d2d64ab618f5446d3b252721ad17c0e35cb255ddc7aa12ae5b250a1c5ad1646efbb4e85c43d48abc12d14da3dc44a77b0dd19fce7ffc4002411000201030304030100000000000000000001110240501020300312314121607013ffda0008010111013f01fcaa08234820822ee08e37731f4b5865cef3dd4653e395bb8afc9455eb91dcd5e4477b477289134f028691148d2d68aa7008abc92b678f929aa76d0e55d22b1bdd4d72273a3f02503772863e99d8c83a6bd903e9a67f329a6349bc9d16e64dfa5a4fce116eab0cefd619703c3557ab85deafa74ed9249c12c2c1040f0699ecf63fddbfffc4003e10000103010407040806010305000000000100021103101221312022415051617130325281133340427291a1b1042360628292c11490d173a2e1f0f1ffda0008010000063f02ff00680928b3f0ff00dd5ec678a0ef4950c198bdfa0b5aab07572f5a0f412b06d43e4b0a27ccac280fecbd537e6a1d837c22d84c6fa3739c04158501fd97aba6bbb4fe4577297d56345a7a396b5170e865625cdead50ca8c71e477af7ef9fdb8afcba407c457ac23e110b5dee7752b67b135d2753589de7141bfc9cbf31e5dd72d3caccd7796d5868eb2c0c15881a17ce6f3bc66a3c3516516403ef3bd962d6d31b4a0d190de244cb69e03fcfb3c58eae76e0378bea70cbada08b30f608b236db23bbb420f699077853a5c358da42c96aac703a79761969438fe5bb3e4b0ddf55dce2d074338ecf3d1c560743d03ff008eee7d4f089d19d28f6204182107fbd93b76ddf1ba3b0c7d9a4fab760eddb499c04a1647b0f77eabbbf55ddfaac82c82cb4bd0bbbcccb98dd84785a026d98f7f668c85cec8060a8767cd6182d96606563f65b3e5dab6ab736fd535edc8eebabf120ba23b4ed522c8d083643971f62ba306ed3c1358dc9a2375bddc5c4d9c106c47153f2d3e5641f61badf33c1063061bac9b40d96069c80c14f0b23470f610c60d62831be678eecaa7830d8dea9c6cf48336d916c1b67b53a15b8e1bb6b7c26c6a9b4b998d3fb2916468485232f60a8396edadf0d9e5a0702381397cd0734dcbca699bf164ac2d95232edc8e2dddb518d12e2d441c0a2a2c9e161753045ed9b14af4d45b24f79bfe5441016aba391467cf95bcbb31a14f9ceee9e2d08a133d6305de1d1460564ef9200b5c23ded8b51c0f1839687a4feca4777ed6f2d18ec68f5ff1bba93b8b48439a13c1398e3dd5e901984ce68f24c791ada370f922d3b2d8ed2f3291238ca63dee600d33863bba9bf8390ea8b7990afecda88cdae08d3ac0dd0707ec59fc822d8235a7159e8c81aedfaa918b6d8b234455f38d0a6d39c6efabc85ef9587c8af3958b9e70dabb8d3d44db37b57842034255e60c1dde6a820dbcf45ac19b8a73464d6a1649ee3713bc0b4ed10b9a73b9c232ed5d81b84f528b23541d5713b167d95d728f774e7c217a26ecef5971831418dffeef1acdfdd2b93beeb88ec0b9c61a36ad4aad278685d72c01730e4a0f7b39e68683833376de1643461b4f0575be678ef26d4f1858891b5677d9c566b059acacbce700160f13c13c49ba164b52ab8725f994e79b577a0f03663648d0bad1278057ab9ba3c215d60006f32edac37acd54219adcb35049078382d6695ac0858382faa7b9edee8c0f15ccdb82c42d47958927cd625626de14c778a8a6c6b7a0dea5a72382730e6d30835a092782befc6afd941c422c6536b22311b56d2b2583e473401d98abdb3b0e14c66e4e6784c29eed3f17fc20c608037bdfa65a27395ab8bb6bad0e25cd3960b8b763941c0a3642e56e766db2940005d192156a024f09c161bf4b6b633eeed2b5440d92a165e5a7f98096ed00a04520eea677fb9fc04abce32e399b5f781d644f13a7e88e6cfb6ffac4f87b463b66477f8a232662eeb613d84db4dc73883bf5d51d93422e76671360ecea51fe437eb280f89d67247b08b699e3abbf6a54e270e8a0281d8cdb23309af1ef09df6f23bc75428e09c6c1da01e031bee9d3e02f2942c6f68f67884efbaa786aa1dbd33fba3e7be8b8e4149cce287b031fe213be6af311f3f62a5cb0df2d1c5fa3e68769519c1d3be688e64e89ed5edf1377cd26f069d13a606953e7237c81fb07f9ed0e95277078df34ea71d5ff00dfae8843b5a75388df171ea5b151bcb350703c0f618762f69c9aec37d454635dd42d5bece850d6bcd391d1c7b086b492bf35d7072cd06304346fc2cdbb1169c08b4b584081b55c7c4c4e1a026b01fc56358ff55897b96149be78a80206ff0015c7bd81b6a3f8984cabe1306da6de2efd07a8e0d77122543ff165d8ce2c5ebffecffcaf5e3faafcbfc561c2e2344d3a952445e017aafa85ea5de49b55d4090365e12b1a4f6f585911d7f41df7986a0055127045a6a804669af3545d76457ae0bd73536f5502f0bc3a2baca81cefd08eea3eea9fc63eeaafc4550f46260ba71e68b8b400313ad67e1ffe8b57f13fa11dd47dd775df2b1bd4fdd5ddaf30994fc46137e05fc4fe86ad8fbe537a9fba0c9ee0faa2ff00004df83fe57f03fa1660b9c4c340da56b52a264121cc75e4c68a3758ebb88d848941dfe945f75d232c651a7e82eba1a481ccc225df879f093b75a11736986c38b7e463f42b4898120c0938889551f0e7f068a6598c46de8986e1969a633c3282a96a3dd5356f8bd8c0e0839b4dc0034f02718da8d1f45aad74f5d79c3c93d8ea6e1aee37b083adfed8dfffc4002b10010002010204050501010101000000000100112131411051617120508191a1b1c1d1e1f060f13090ffda0008010000013f21ff00e1bd152cb36ff1208801956152ba3c9dbf30050ee51cfbc519012689bdc3393fc0e31fe813eaf2fa21be8e3eacde7ec93663bfeb1ab17f7ca743d35fcc0aef2e29bc77f44519ba580b36b7bfeb1d90f78ed1ff001ce1bc9e9f94fabc0fb477c55f84f9b7bea44f0d5d1af9a2816b412d4c4d8fd5a45e3ab59f07e66d77907ed3e4a3614d012fce579ca703b6e3bc5bc19980103ba513375110b74817b92dcc97e647ae7214ecc2e0681f4f33b89cdbf0911be9ebe8d25251cb83d3c17d87da65a39d925db665aa83eb6f58e18ce9c16f2bd62530e61741bfacc961f56267dc4592aa21ab14b10d47a1fcf98d4b0e83abd88fa4b5b9e84150952a54dd4801a04be2421c1e1472235b0f15586c95825cd4d513da21234741d3cc5cff0090bf9f1346f80e43760e53978ce2473073be569658ae22757d380e22fd19bf98939a8c39ec82d55b5d5e72c22641ce19359dc601b5e0a94ca95c4d663290cf103944a6a158660e777c0c3daf5e56e959e6160741eb687de38383af53302e1d62cb50da7e8700ae3d6cc378e9881a97e034d662d65c5520abcf6959a70f816c9b4faa200a11d13cbf9718fb188e932317b33c12b5d7836d12ed7c2a0655b62f87a08db33c5603ba2eaf0692f5896e1d6223499e04a952ec9afede5dd6e60359cbce54c7d712e0dd0e08f0b831810abbf818ff00e392e0910b22c498954c1c9f2dea10f419fb4315c0fca5e232b51a100d8e1962e598bda64d785c2aadf697ff00a6a600e7efc04a95f84e4fa796f5857eb8fb332af3785c6d49a59ca54d45d82a355877200b2268611ebca3da8d77895e065c4342fd674d1d247491ff004a7fd489461d6e1c5d268a4b87c797f3a7e3cb3fa20cfde1f24c9e4e610382cd3699ef775f022732681c40d364b7a2786f9d1a6af680d57b27557a41bdebd620d01d489e80814d44166f0f0397486878432cc96269c9b92c0ebb2fcaef3d9ec07da629d484a2962f7e916c75904f65878663eae210c7d5e1f4533517bbc169e9c6e0c58ae709671c5c70d75ef1522468c151441e57fc783344566c3a6d2aed0f7415554eadfb477d9150ce734e2971356635ed2d857934892e1e1b26ae780ebc778fa909630cbe8253807baf37caeecd8b9907a70b49212e3b91887cd7395d7d0f6e182d30e22688a7c8ed352e05d4e4ccd7552cef069a780be1c4baefe1bcd71bacb2f19ec8737a4cb9ee9aae6f9675acfc43589542396f75fded0883cd3d378ce832ac7b692eb3ca2687a4ee9cf838650c327c7813801b6639f1352ebc1e01628e774cf96ba8dbe7b3cccae7cc349938e014d4dff582bdadc9df523fc25d9de59de6bac1610ffc33c0c364ba955e067d6e0175c0fd15f2df96e154de4e52706116d83151bcb925b3254d73dc49db9eaa66e1aca57246f2d46b50697c1e864dc8d816d70be1a3c4fe269c5a178689d76fea79680a680bab96008348948c5a7b2529bb8663a46a5391d465e2b64e979d6d18776fde5c468adfa3ef2a6d4d53335c4a09030354e2b9d5af81e071d333073e14d3c4aba01f1e5c6437df290da3a4bed5609cc42eb63c8e5848ebabb19f669b151457a29f30d70fcc7aa14c2e51ab6f066874ece7133b9e4fe69c6fd3fa781d65078b979c7909ca6de08aab972798f979755faa09f986af312a016544e7b4bfa34f7fec407a7591342596bd7cba42cda7a25edadcdc23514be17d311ae8565d394b6fcbfe71d774d9e2e8586d9db8b1937321325da6bac1e83a201f30f6258958f2eeca5ee7fc8ecf2330e43ef2659d1aaf1c9fb7b4595c235ca6093a89c9b966e66c5d6fa6f09f45c01bccae94bf062bda6b9cb4e5e5f89cf8e8f2e0e9375e9c1da1f02b0b174ea5d728aac66d7bb020b542c9caf3e5f4adfee1f686e4d1dea8cb5135f4179470b387e739b434d07bc173a96e7162283b8bde5d06d385f0c15db58cc4ef959e677fac5060733497c605e66b77e0e065b6509a865254396558fca3b1e601a1994d0ba30f78c7b03b0132c4b6a90f73d0a838e61c75f35cd4c9f799bdc76aff00c56e914d0f25348a11abda5c302e60d3ac75d0f0d32ff6fcce3f3085319777297509585abc8e734123579b9f98ece67eecfde190f4fea23829e4437b128e99f007028c4b56847ab980d3eccae9c1c171905939fa41ac41c6f435fd2339ae4f076263b97c06b7d8eb34c4d319aba451dcbabaf992b6d297b9fa7e205cb1d1f73ac0aedca19f521982315e55f6603f9439fd906f47d63c0ad6e294ce661f66390cda5e3129864f29a059b9b3d986811e657c4a107d865762e009d1ad4cd3132430bf3b9159d617a4583621139742b5945ee01eec3e57a0799d00617a347e198d25d977218331ee33d1924cd58766feb17f4098dbdcae009d103c98b4eb63a6e84cf57c902a26a85c6a64bd196434a2f79be2e78c64aac6f549a926c1bca367fe14eb2971ec5f9a92b6763a4fab5e759853300cb012b6f6ed88804d9887fe61a6ff0069dc3e09bf44e64fae8105494b00acc1bb435ebe048d26adedb45a970d67ea3ac42dda5b99b7c541d9eef3f4fca72dbaf37aef8156969bfb7d2624b4c9abf838893259ae4f5994657fedd6638ea7387d42e1cdda1819b648a666f641b8bd17b4204683aeb0acb9b94177572f660d5a34818501b8ee4000001a079ead203a73fc738db7dbd4aeb1c16b7e9310d9d7744b65b942a2d769d07bb1ec998133fd01a840d6a29680000a0f3eeaf7ec8f109b4de52177bd6e7a8d02ecad265729bab801ebce27b5f6e1b4b16692cd797dfa7b69ede7ec8d163d5c4aa6b94ca8e95356639efe1e9af3956a7132dee5e2d37d37f74f9fdeff009ad87f732056bac386e752afeacd20df87437f0c89b691155fbc987cf77ec1dfa45f36ebf359b60c1306e8659987d7c676f4894d706a5cfed3f6f7f3dd41afb1b7dfda68b609d3072b1d43ede0a984bae0bd12c56e273c1194319bd7f75e7b9971ed98201e2c6bca116813eacc389663af15546954cd11152f12d4c390ee40d3c23d7ced5350faae3f7e90e83481dc35c160e6cd1e0b5f02e6a567de3f49cc95fbcf87ceecdab2eee0fbcc541c8efc34934f03c17c56db87797bec1ee61fa9e77506881e87e6e1e23b334f16e5cbe2f6e0e9392793b61f8f3ad250b638ebb6eee663c1b70f41c2f131c36e3ab7c1d258d35826ecfb8f39b29afd8bef32e0589716fd7c48f81e3c0e93b00fb5af39ce5a5f02fda67389c9d23373cbc01b7fe1ee97ee3db27e9f39fea8c7ee2a902d0cad5c1f93c6ac794d55f0b24e2df51fdbe736f383dd3f1c1ea6d352f8612d7c4f3ea3e2f44fd03e728d0c147bf00684558e1f4fc6bb6f4f0ec9666963dfce6b36d5fd48e625f875e033248b2787af88d04ab127350d7beff3e70b6ead44d465b80bb7d9f88295c3a8527a4b6f995e75330d9c3b972f11ef42f566557855e26826a660d4ddb77ca7bfd7ceabc5ee54ccbf513e6e6850dd159e5c2ae93fb51f446dd5e936c428dc94e929cf82ced2de73a5920b80db7228fe04d9ff004f3c43f53e4c126d523b714715cba2657900e84fe385f4e0c5745a6cf986f2edfb4f9cc6a6bebf8de5717202bcfe914b57d7678d7cbfec3f72a833e90fec38f2ec87b5ff00836a6c0c07a46001c1a0fbce961fd3fcc31005bac7b5c6ca660d7798a59dff0034082ddc3f79c8128075d63e94e6bf898a6de97fc19d0cb16c66b4019cb1f15d0ce1820289cead67f6b3fb19a609ea2d1983e17472ff0009fdde48b2edf651db9a4aa0f5752031dd94c12f170b42527de9fc5d4ff0814415d92f64ff00a59558aaada7f379a58170bd3abf4f99d10d76dfe2e7c4fd59a1fd64ff000c1a0ee4774ff2a050ab3f77eaa1e1d3e77f43105c9a7eb0c704fd87f8503fe454777d23868c08a85d2d14d66399ea01544c456352570dc1bf486ba3a0d8a7a592998baa4d68fb6597c9e08373ecff000a7e3d0b02d06f57179405db0ce37d8f947de441902e574e7ac35ae6d4b319635da2f6601342d1ced866ac190b33a072d32d65dc2ed60292b37a3cbff98dffda000c03000001110211000010f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3ad75905479e7bf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf49e5db7b39570f64d77cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2078a8a73d11db6e92b773cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3caf3206ce5c71ee44a32d5ff00cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cd9160146bbd7b6dd55a79874f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cab5112e4bb5177c18e49f4e9f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cb6a15060cdb4f3563cbe4e1473cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c7725c08046ae4e1344d1556df3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2a7465a12b89b3ab7b005307fcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3af63d109e3bca4d0a00e327bcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c9aa9aeab02233cbe3f639bbcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cb310d4970e802e4d36aa573cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c2c368d27ce371e278f935f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3ca6935d77b4bb1a7a723fcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cb10b9055d8470b93bcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf0d4d8fbd377f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2e776d2c875f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cff00c168592c43f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3ca36871444979dbcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3ca0567ded32f8f7cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2834556decf8511fcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3925b871e6b0dffbcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2dcfbcc105d0e3f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3bec1ffbce72e709ef3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3d938ab7b723dcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf28e1d55bd3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cab0a9cd3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf8bc875bcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf383a6f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cffc400231101000202020300020301000000000000010011104021312030415051708081a1ffda0008010211013f10fe2aa6530314ca65329dba952bcea561d90f63b27b92b60c1ec4bd83ac1e8bf175fe7b6b07ef5dea1ed95bd4323e862ebb0519cd48e4f43ae60d0221c1000105751460e70f8bb1f2042b9b8d35ff005fe429c70c4870dced1d608c3031d92063c3257dfc81f254e45a345c5c30d95b442513f6b0c608c13c46e47500b6118058ead8b7b244e44fd907881ca712becbc009d928556165edde060ba31556e422cbdf09728ab8e08fe00ebc9e77cf261be79fddf7af363bcf7e8f9ba77e93add3bf49dee92a5799dc7786338c54e2592ff01f31f21fd43fffc4002111010002020300030101010000000000000100111031202140304150705161ffda0008010111013f10fe534cb4bc29bc5a5e5e5bd63fb942752f172f172f2adf483e1bc1168bf485b1e37970637129f47fbf92e112faf46984952a5f1a952b0c3f7e735c520f3b8cd1dfa28a25a971ca42f992cf31bc3b9b8b73df1d3ce6e7dc56e20dcb1d3048691e07175e8d23eefea355dca7d3a841ad4a74ef265957140f46910769475040c8aa900f5832b73347ab71b967d64889b874d90babb82a8c15410054b3d2a9807701d44a747b9dac36dcff00852c698aaef0822afae9516e21ea20ee006b2c5447dfb30251506a5e1bbeff0000f58780fbf785b83358167bce0e247a7dc3ac1c487bf690e4e07b7687c1dcf6eff0a59ed1a60dc1e7f5129f70b172e5ca4ac5bf80255452a2ea5fe185b2b7292b053f8434cb205c5c6ff86554a2511dff0050ffc4002a1001000201030303050003010100000000010011213141516171811091a150b1c1d1f060e1f12090ffda0008010000013f10ff00e1b82adac1c9fe12181d4280355664614b663b2eaf56381d65412f952fce570f06a1b3602b62591004b12c4dff00c05241b512f96598b4dacbd8c4d38c423ec3f105a37f355c4fba5b3795365a1f681950c2a3f2ae574dbbe60e5b37e3fbc3de2500b6ed60de1ab3265758fc23648528dae6af48af909fb089f905fe488fb9120701d0bf383fea4e54428ae7ee4c065c3a63fb09f3361b050728367d51d1816ab404707f8b3f647d1378737d8a869b673463cd3f29a51f06fb2d46f804b35f690dc50ebfbce84c1a10daf1ec9f99c977b880f9347bc7de1c15a1f92131982116516d7762babb36480e805d8bd65322da2377dbf7302ac5aabc907cfc93f898835460e7efa101429432ed67add3d2fea6a380a8ac72966e4708af89aefd6501d8d0f681eaaf6c40748bf0451aa254dc7b12ed57681fb83107dbbccdc07620b51ec452acf0894aa01d9fdc0f63d2e52b29d08b62c4b453b2cc3d18bd0a598b29bf6362671768dfc8801e1bee959627520ad1ade599d0d6b82255949ed1f3f2fa898bc172d4d832ebb440c169554a50d1e15f129642fa6d05e67717e82fcbda0dd03b96b11c0ec4b4b85ba1e855a4c936953083da285283d26c3386748b8974565e636355e92a0687cb2dd410a1a195f00be207e24db0283ea2b5848d146163c81169aecf6f47439d0398a73895e85eacc9d253ae202ca81e82b3eba607417da27528eac3cdd08e2ff944b1e1e7d131709a6b2fb25d639d61ee8a9d8a0e4f0ae3b1d7ea3514d56dcc0f74f1718d90d9aa757de58f3352cd834449ad362b01af3a332487c9de54aa87696e19d082e21ea1746c2f30e43ce653baf144c7658752054d61b665c9fea22ee1ac4e967ad8effa96a524e55de231803c15c1fc26cfe2e0e6b63ee3c2384fa823bcc1e558fdf5da1a6b51f98374f3996169a7f3f881646d15a798cb3f87f3cc711fd6d5d98ca99d61e861604ad64c05ac0e5962cab2537628bae21be5463a7a2815006ecbd216b63596d81d5d22e15d5b2ef0450774753fb31969a92b17b43d7856a5b409f7e4e68825185162727d3d6d84bcb8ff008d7cc168deb1fdff0008adf054e08bf03139969301b33a4d9432500f7180ba10e71911856d97026abe08d727ab16be910152fd12f0d54d03c99fbc4cb8d681820cdfd343576184f334c38b17de5801c19d95da228e56cd537357ef4f26c7d3814a6b87450c1e5a2312da6ddcbbb0b0de0e39eeef321bb2e4a09ce92b22af224eac15752fc7a149b9ac165b5bbbef3701da57a29ccd5359ff0083c7fe2a3cecd35ed125c43e045a913230114c07675f0e13bfd3698391791fda799a9d95f4cc4be66da4b0210158186022e00b619b418609582709a4d5213da22e08cb8523b106b4b65843afa38967f13131d6625cb97073107391b629636eb14f99edb31a00701bf95af45e9f4da12fe6807f5bc2db6b05c34a7530c7328ccefb44526a91ee32fb04650ab4d573100e9ad8bff72fcaf23a938238da6c3a6abef15b5ba47d80eb88ee9abe8cbe65fa3ce34f46a9b1ce004796f1fd4febfea3fbaf406bd65d1857393c4144ac5fa6a44b5c9716e10adae81e551d9dd7f4c4da3ef7f866108b1fc358af2d379fe95acc874683aeff00b8348f116c2b46312d13a7ea0e2f30ef1011134624a35c7757e21b5b9454ae63401d69e3d9c4035ee2bf661f23a7ed19578d800928cea6a4f865b385abf7006a5dd75625321eb571e8e0609acde0597b6dd7d7003772cb3b57074cab7ab716f53d9a768cd23d4a4e89c9f4bcf77187654ae4b206cb6fc9e909c56324aec704aa0c23c1c7a540d4c221e7d002f09a26a444f0739c23d4462986dd8c37d38661eb5e2b4bdfac4f414d14eccc34b6752e2dec3b40832c4b3a4a39b576828eacc41bb9e92a98988a9d5d23adaf99bf2df8707f7e23515276e8a37576e8bb66a00878028fa5ff00dab9bf98db65d6e1453438d42b39e5a94b16b00a159479e3c420c8a5797556b5fdbca81d708bacd6a7498566597f72c68bd4c7a00a4118a55f9772082c454a189bc0bbf4664daef1da3ba33169b1897b4b97e8c7435652aecc40a25c576c7a316fb712fe01a62f9961544eb56ef2b9a37ec29ad10ab9dd26ebfe8a03e965a099788ec3543ef1a62e5688c30596e0a5951a0decc65063f9376f72bc4a026d03d5a3e1fbfa66660c9db72059ae1b20d8288f1e843a8d194fa2177d20d1441347698db802caada07103a468c4a0a9ae91c16b6a5d5759a05d8368abafb4a6051e80b0d4cbe8c41d82010d35e8b54e1bf380ca42ab0c365ebfc600343e98a46a0786ca1d00468fb898f2c55e1fd468b861b7dc0d5fe0e7de62793c92dde0724b306b942ccd4b51b88e0b6b07660d0c5e9d21d45855f957fe2ec9ac21c26913092b5212e25e840b812b11d267d93d897161ed1d9d075966621299e0eda7d36c1d2f72a6e402ce895e250cbbb65d7fefa04034a3812ec7523c90b12d7f3d5b6f01d59ab2639f1056c15ac7e7b4d75dff002878b67bcab4e9d7acd15ee87350d4d9202d561377c4d26ba7a1e21834590428f699ad6da87a94aeba4dee53f3e8059f562d38ba253cef9df4db62969672750f6a85da07dffd4349e26378c69e83b568d9ad6b03c540145ab40b1c3557e6667015c49c05b67cf79625c074764d4fc41cd2d73b3085902ecbc730e8567d2aadb8db4980036727466928cc439c7582a661a7adad6c689f7ff79d0095cebccd2ef0577447713ed7f4d49607c8761e78bdf8810804c06111c8f4961e93e656070a5ed5e96616941cb35840502c4ea4a69b2dc61c775318c60c450636b8ddfbf31f308debd00e761bebcdbca4b004741d0eaf8b95b5f7516fcd4088b0422ba9c759779f45df749c7597608d8963ea8711c4d1eab47811dce90d0744555e5af4d6ee4aaffd2bf8fa71200af46a9f64110b6970f02c1ea76a1c1a2c5d152c0f42af523e1640fade8e75cc5296cd7e4c2140c699f8b45f818cd4e1259aeb0d347da7812e00361cb02a554680558e8f66fd22e04e8b9bba572b676f3044b26b335e6e1e5e8bb45869177d606a5b71e657a2c1c9f12cb38bb60503a11e479f4bfa2f886d287df19f4e71bf703f39d341ee24a94644580b47c45b11229c81dbc2bb329f2baba75bcfb4d30a61ac0c93ce1220d1359b5f1140122d6162d5d5d1e0ae662ae20896910e10a291dc86e8b436ef776ff70e7d137ad3abb3f782209104a7231326deb6dd18eac6720182071b33aaefeaed70151656971d8e93c446bbb352f24769b6dd7af488b5421d55a017a5dfd3a84d6ff66fc917ae8dbf333dd3e5a9f7804e3a064ac4bb63e4e21126b78a3e18bb4b6549761b1bcd6cd9a55bf58b3644c53916d8ec44538425ab2262b4bd216d20d3c5f170d338972e1d969d570c64b8454ceabdfbf56378990aab94dd0fb3ed077b298ad09ac472e77732e26a85cf7600b805aa9f8f43293bfa211130285b423ce8c308d331512e465c27bc55c1ab54ac78bfa7a845d3791f6a8543c3a929511856e253f696300e4a1dd36dd73593a4500851d37776a0cec6805620957e9512494d36820040d8c04b354f761a835a4395aad0aac05f5842c0a5d2fb1b12e7541b9bc2fe0e65cb32ec146f63273c65bb4e26b7c7a18425f78b10986fb778d64b6cd6de55670fa3f0aa1a3506b6b6aff3010013c6801f620aee998ad87b35c574fc827b0f27d43e39304a7ef281600ddb0c3f242ed962cdab3eeb1757309d80f2b5c2d959a9a686569415968c60200e8d7ab75d1d74d7e38c90837087ae3f733b4ae499220dc17eb648e89541bbb717c70c384b2c58b7f12c9a494d7c0fa7dc8f5396df181fce25e11c437d9e3abd7b4413776229c4dbe9bc9d8ff9aa419ef2d74a6abfb001b7d45dc3423a638b8728b700aee25278e6380b9938c7723742fb7ea3ca81c999442189a17096d992d04ca24ac8fb50b146a8efe99dc218541052f0fe266ea63d8e89f98288445193afb2b79598bd0c7f6e7895624b2bae8c216cda5c6b16ec2f4773974da50699d6f376eeb36083697e5e87ed33bd524c9d783836eeabf5130608af9f5f21004540be9c689b0e60f2864c0fdc794cc0aef135afc9e48469f55df69a0a7a651ab5baafdc4828be18f895f1c134cad018cdba54d95258fc63f11b6ff3bad015a55e7c92c0d6d82de3f1f330189baceccc1a3b4e4219bf2acf98d29cd2b76398d36c79da5e05577157af10403460ab526caba3635d273acaf6ce535868eb35275b99858ffb52239bd778fc41e2fc4216f43a3bf57afd4f2e0028ceaf947c44a728eb11d5d1949a2022d5802b5fbca209df7bcd30c29b9a8f8fda56700ab3f646459ef17ed32a0d240d0d89d488a2b2c4c551adaba56833056f2393fdd610ab4cbcb341d6cee798c4bdbe53c267ef05855d4c90501da580ed7a788675a2b287c57e62241aeafde1d401a11d682f313adaba440efca30bf99cec781094c8212a72eabd5faa876655ba2925d92b4d6cd3c8a7cc46ef962707e5d032a1995f31b366edc9e5f06f660c290b1f12c42ac005dd14033b5a9a9a2b467610a03bae262b6b5c332c0b408c3bb9f9981962930a1d7356b104d827629abfbe62e2c864bf407521311a5852f26cf98382bdb580a8d3515a7bfc9d0df3841c56c771f94939b8b5cfcc6dd87576d8754a82e0f40d5775775ddfab9304ec160050ee07b25512b8fe03a9b1e6dcfade4be633dd3474cd3b5ef0a17c7061e9c3fe8de90096dbb7bbaf594d3c495df40d29aa6f505b37dd2eb1886d8b19e83f39980195da502d00b516116385d5cbe69197047a00e18c03bf31de458d5eb1028b050b0e22103ad562a726ba68ef704a100280e0faee1ef80ee00c99d30a772567559078b0c5f69a0009d918d8985558ad8eb2a55db91b97fe57c566fe34995aab1832c13b2f623da786b2c89a6f935886072a6e47535adf4892081c46a395121960500501f5ec0438b74c17f12c2e69ca8761da694a16a76e2645ae2269034e80dbe6e5d8ea7c30079c5be8c301f37797b98d57295a3b401e43cca4b05f0cc86b99b96cf907a0397d7f1543f50a1e543cc325a8a7bffa82acd62860c7cfbc28a02d66e2aca0abc3ff009b875f669e60929461b7462aa5bb283e2e7294dd18cb7a1ec3ebf96c52add3e21bfd12b0ab6db6db7dbfdf882628a0ec7fb858564420500db046b2c3d2fd05d8d09c9cfe25c0b0656bb335d22972bd8f74bf3f5dce321974ad8755a3cc0417a156adae97f04b068519a31e73f77c4c3541f9ebe6649d54b9bc977097e8156b4a965ab8868b3709d420eca03e117d75e2a470b0f96de1005c2973c7ce2fc30f850823e0ff00552efa59479810b833281db78ecb8b49572f5b5c759adfc42a24117a8c1a458fa4b990ef52b8f87b3ebba8c78ebfec00f961a056cded1fdb1068ad2b8ebbbf061a7abf68292e514d997534d1bc26f18b00793599456e0568ae398311a0bc259f330da6dc007f3f5ba8082de77c76160cc01510401801d82ff31d255fc0c4fbcc1a837e8d4b6ea69ff8015391bdbc67fbe258abc3b38979dd8f3b5fd84f1f5b6396bbbc28fb41ef991712a5a92dddccd63bec1f9ff5347cca8ab52ee38bb83e987597bdc5cab52ec15730756258ec657a2fb89ecfd6cda2f6e087e5188dd6e66b2dbbb5acbc4ec543e20a2fa2503b334330ca5af88bc7a60397a659732cc680cd583e36af1f5a42696fc016c4595efca5bef30f40429ec46e34fbbf69a2e9194db7b54aa5db5b11331307730fa68e62d9cb4ede9a9158ba461364c9f6953d55e6d435f3f5954154fe44b043455894cd0ef1016ca9eef925563d1666a8e123a7484a29bb895e9578e666587985b87177d81f5950e94d393ee421f09f9226c828762bde0b975b0cbec46b75dd66fbfa5cbb0b1a4ccd71c40a8ed740f5de0a070c17dd10e05f9fac9dedec8114b7a283ef0bd85e911d40a3d1d1f4b3000627dbd0d26d0828974bae65aad0bc7a1198af5cc646984e455f1f599f64f61106c1d65226255c10068c257c0fc32ecf7ffd5bfc434fee9ea7a044cad90d2b4abe58f90faca13dc4d686c74167c68f6d8c1c10535dc4561d43ff002b3cbe9d8869ff008fc8426948ae891f87eb39805a7a9f8a11340f498951b3ac5a49703ef1709553b10fb41bf5b9759603372e95d5b61e81e98f722cc514c3c42b41a476ad0f163eb15cc689d0b44f77de72fe9a5eaf5f25e929e274a77cb240b07f2829aba1841129d9b8ed1b8e214f4244dd1d658d0bf3b4a2a9e4062103d08b52d0368ad4142db4ab419f4c00764bf5a1a10d2a5d8ea788aa86b4f88908ea43751caceb91eb7d2583744c8d2cde3496b70a6d83186a9c2f3bc4b81ad3618ff641c841fd47e58ecc59bd63cdee95ec893659b001d58b629e20d78dd2f63305b7739fbfc9d885c01419eaaae5572aeafd728fc59bb7a3db67a2c5a296b88c24b96f7964a04a6aa0c0e75f680998ad50a6e19b5f12fa4a409ad5459898daaac97aab4bc4c6a6e00fca53ac6e08f82fe63e281d7f718607b4103c1f5fa95001bd57c80df6398eb0d48ae6cbdaefbb8d6521038f2f6f711c7a0aa586762fe2ff00c0d972ac2b2cea2f1d651a483264d28d6ba188d7877acbfef64fee35415decb388ef20ca84ea3239a378860a0d9cf85ed10289621fb90fd7dc2d025068eae1482624746f42dcc42986b05bd70bfe06c0d05a42b47ca4175f2321a0d394887e2d2c1a9a4640281a6aa98d99ff0017f49ff13f4960c8447886346a64be6b374ab74ea7f82a8a9480755c040120a611b1ccccefe856d56bae8c61614e20b5f69c8a2af32e181a3a8c687f826e8f3d32ec1161173fbda65ba7828a4e95b7a7ac2004a73f815487305281b5ed7b14002001487f83e34e08a6a75424a135891eb100a154afc3decd2110474c67f0d61c01dd643453a23fe0a888a120585ab700022e8273a40d4dc11c3997061b074acd2730e0d422b9a537975219aab05c22c47a4aa3a814b55214b6af7255cba654a592eb683a97a371ddfa625b46c345bd7f82a11c1731d14834652eadc219ef5a02c567ca6ad03c8530b9aa34d9c229b6f18d78cce58b2022a846baca87ea808ab5a2ecb746565d92a1e59a32a58d06e88c1f8b6b12856a1c8dff00f98dffd9, 'admin', 'QrUgcNdRjaE74hfEIeThKa/RaqA9N/KpBI+X7VeiyfE=', 'admin@gmail.com', '2019-02-28 16:37:27', 0),
(5, 3, NULL, 'parent', 'sK+bJ3GIl7A9SO6vuD45oK8pw+SP1RllEsy1Y17HClc=', 'parent@gmail.com', '2019-03-18 17:10:48', 1),
(6, 2, NULL, '304642110003', 'M8+Cpt+zltZs3QpomFLRjEFCGvI0VGC+jjJzXH32Mtw=', 'student@gmail.com', '2019-03-18 17:11:32', 0),
(7, 4, NULL, 'teacher', '6Bgzqn4mnCPjx432mpfOVbU87Mi3sy29KRe8A1l+2X0=', 'teacher@gmail.com', '2019-03-18 17:23:29', 1);

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
(4, 'Grade 10'),
(5, 'Grade 11'),
(6, 'Grade 12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
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
-- Indexes for table `record_teacher_subject`
--
ALTER TABLE `record_teacher_subject`
  ADD PRIMARY KEY (`rts_ID`);

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
-- Indexes for table `ref_school_level`
--
ALTER TABLE `ref_school_level`
  ADD PRIMARY KEY (`slvl_ID`);

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
  MODIFY `rsd_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `record_teacher_detail`
--
ALTER TABLE `record_teacher_detail`
  MODIFY `rtd_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `record_teacher_subject`
--
ALTER TABLE `record_teacher_subject`
  MODIFY `rts_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `section_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
  MODIFY `subject_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `teacher_subject_assign`
--
ALTER TABLE `teacher_subject_assign`
  MODIFY `tsa_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `user_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `year_level`
--
ALTER TABLE `year_level`
  MODIFY `yl_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
