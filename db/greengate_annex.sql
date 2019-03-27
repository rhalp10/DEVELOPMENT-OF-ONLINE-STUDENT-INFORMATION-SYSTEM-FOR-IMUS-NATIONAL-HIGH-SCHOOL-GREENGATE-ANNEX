-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 09:56 PM
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
(7, 'Hero', 'R', 'Cabrera', 'luis aguado', '2003-09-20', '09169158798', 1, 'Filipino', NULL, '2019-03-25 21:32:52', 0),
(8, 'Hero', 'R', 'Cabrera', 'luis aguado', '2003-09-20', '09169158798', 1, 'Filipino', NULL, '2019-03-25 21:33:21', 0),
(9, 'Hero', 'R', 'Cabrera', 'luis aguado', '2003-09-20', '09169158798', 1, 'Filipino', NULL, '2019-03-25 21:35:02', 0),
(10, 'Rhalp', 'Darren', 'Cabrera', 'luis aguado', '2019-03-22', '9169158798', 1, 'Filipino', NULL, '2019-03-25 21:35:19', 0);

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
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q_ID` int(11) UNSIGNED NOT NULL,
  `quiz_ID` int(11) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_ID`, `quiz_ID`, `question`) VALUES
(1, 1, 'question 1'),
(2, 1, 'question 2');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_ID` int(11) NOT NULL,
  `quiz_Name` varchar(85) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_ID`, `quiz_Name`) VALUES
(1, 'Quiz 1');

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
  `rsd_LRN` varchar(25) NOT NULL,
  `rsd_FName` varchar(85) NOT NULL,
  `rsd_MName` varchar(85) NOT NULL,
  `rsd_LName` varchar(85) NOT NULL,
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
(1, 2, '304642110001', 'Sample 1', 'Sample 1', 'Sample 1', NULL, 1, 1, '09451658741', 'adress', 1),
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
  `rsd_Sex` int(11) UNSIGNED DEFAULT NULL,
  `religion_ID` int(11) UNSIGNED DEFAULT NULL,
  `rtd_Contact` varchar(11) DEFAULT NULL,
  `rtd_Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_teacher_detail`
--

INSERT INTO `record_teacher_detail` (`rtd_ID`, `rtd_EmpID`, `rtd_FName`, `rtd_MName`, `rtd_LName`, `suffix_ID`, `rsd_Sex`, `religion_ID`, `rtd_Contact`, `rtd_Address`) VALUES
(1, '', 'teacher 1', '', '', NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'teacher 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(4, 'section 4'),
(5, 'section 5'),
(7, 'section6'),
(8, 'section7');

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
(1, 1, NULL, 'rhalp10', '$P$BCAA1YEnm0BZ.DJ2X/cXEil0XJcfVM0', 'rhalpdarrencabrera@gmail.com', '2018-10-20 00:58:10', 1);
INSERT INTO `user_accounts` (`user_ID`, `ulevel_ID`, `user_img`, `user_Name`, `user_Pass`, `user_Email`, `user_Registered`, `user_status`) VALUES
(2, 2, 0xffd8ffe000104a46494600010200000100010000ffed009c50686f746f73686f7020332e30003842494d04040000000000801c026700143558614c4a334a6972754b6f34652d4d686176351c0228006246424d4430313030306163303033303030306637306530303030353331653030303034343231303030303537323430303030353233363030303035663464303030306439353130303030353735353030303063373538303030306231376530303030ffe2021c4943435f50524f46494c450001010000020c6c636d73021000006d6e74725247422058595a2007dc00010019000300290039616373704150504c0000000000000000000000000000000000000000000000000000f6d6000100000000d32d6c636d7300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000a64657363000000fc0000005e637072740000015c0000000b777470740000016800000014626b70740000017c000000147258595a00000190000000146758595a000001a4000000146258595a000001b80000001472545243000001cc0000004067545243000001cc0000004062545243000001cc0000004064657363000000000000000363320000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000074657874000000004642000058595a20000000000000f6d6000100000000d32d58595a20000000000000031600000333000002a458595a200000000000006fa2000038f50000039058595a2000000000000062990000b785000018da58595a2000000000000024a000000f840000b6cf63757276000000000000001a000000cb01c903630592086b0bf6103f15511b3421f1299032183b92460551775ded6b707a0589b19a7cac69bf7dd3c3e930ffffffdb004300090607080706090808080a0a090b0e170f0e0d0d0e1c14151117221e2323211e2020252a352d2527322820202e3f2f3237393c3c3c242d4246413a46353b3c39ffdb0043010a0a0a0e0c0e1b0f0f1b392620263939393939393939393939393939393939393939393939393939393939393939393939393939393939393939393939393939ffc20011080258025803002200011101021101ffc4001b00010002030101000000000000000000000004050102030607ffc400190101000301010000000000000000000000000102030405ffc400190101000301010000000000000000000000000102030405ffda000c03000001110211000001f700000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000004624a82043d763c4c23dbebe1f29fa33cdfa4980000000000000000000000000000000000000000000001832a8a387aca6f33352ef9aca5e66d328f3d0b0aedb00169563dc4ef0faa7ddbcba63d42824a2d9021179885994bdbe7deba166240000000000000000000000000000000002849fe76a6e2269dd2443307a633da2fa183230d7a51d9d66b966756cad69bf5b0828e122553c5b365ce361b758b27af4f34149b6280224f4843da42e32e62ec480000000000000000000000000000000022784fa378a89ad10b8af9b455d2dab2d2bf0dad31aef498d5d321f4e1bebb75b4638479f5d79cee59ce7a52f6ef7ce647c6b7a6f2b8f5a691469881b7b8f0b7d2f522600000000000000000000000000000000000f0bafa3f275b5ad15fd2d6f650a569cfb63b68224693c7a70671ca2d999124d6db716f6cf18c696ae5d2467ac98b3a152d1c6fce3263af21f42ebe53d5cc0480000000000000000000000000000000028a8e3cfe6e9a5d3d0d544c889db54f5df9758887cba73e8c38ba6f16d3bf2e935cf1cee9d7ae734d3b4e8bcf0d35cd3daef9f39bc625a96d57655f35d44d73ee3cd5ecad84c0000000000000000000000000000000007857adf0fcfd165cbaeb86b55d62f5df3979d368466b9d72ce9d3498db4744ba639d34db7d7ac4d8d05ed1676e3df6d77c7a39cdada6d65fd0699e3382b9f59e4a69ee98cda0000000000000000000000000000000011097f2ff534996b3b7adbae4e8a0edda2ef9ba73e928fb73edae48fb7389ebdb188b63a63486f2a3c289e86bae38db3d227bc6939cb6bba2ce6f5e2b1adbe2e9cf27ba99516f301200000000000000000000000000000069bf129fcf4ea8e7e8b3e6d31bf7aab3adb467bf2def68ddb1c35c3976d7a1d71a22ce9cb69a716eb46bb667d6794ceb0b9ba385f799f4bd18d0ccb4d61590ad396994007a3f49e4bd6cc048000000000000000000000000000001e67d3227c3ceef53c7d4dfaf0ac4193ac5d189b5f6b28189116d1c35da46b9699db59ab974da2dcf6d6d33ba443c73eb9a99169bd2a65cba8b45b42d36be51fd1d07a02836d3698b3f6de2bdacc04c0000000000000000000000000000000864ca0bfd2b3e0fbdff93e6e8eb0ad2ba517bebd75cfb72c6e69be79daac379af5e1690b9fa3af5b5d39b6a9efd64dab595ddf1d39e6be745d33b4ebb4ccef0b7ad91ae505b689f4bea296ead4098000000000000000000000000000000e3e0bd273e6dec257859dad33889c71d6756d975a5a9d754bbe3d5a75b35c6dcd1acce56549da14ddf977b249e9cd102ba779ae8d38dbe953b52e365de99c6f3dcba5ebd2bfd5f95b52470d6d53ea2c7cedfdb3e824000000000000000000000000000001e578a173756b5569ca5d7bd54daa477c75c274d35ca7589e9e9ad585c2d34d55d7d477758832eaafb2bdc671cb93383e4ace27769734d276b45ad572edd3cf1a14de596b611f10ef5ef771bd05f3f29edfe6ff0045250b54000000000000000000000000000003c941f59e1f1dfaebac64ac234a2c62e719b7b6833f92f1bbcca6a4d6c6edcbd0cf8f6e7d6d48b69cf6a5fbf1c6f9df581db869163ceeb9a7cf4fb8a8d71ae9986578dcf336c93e8a96d74cbc5fd0be77f4498962d500000000000000000000000000000053dc21e473eb7ce45fc8e24c6cf5efda0f74d95bd3eb9c4f87d22676e1bedaef126276eb573db6c1b42ef0d3d75ebbcacfad0da52f714d6922d979b8d72d69439bb819e9e92c3e7de875c62fafc74b5761300000000000000000000000000000002013bc0eb4f4d6745e93f3be60cbd6266d65940db1bda8bf89cfbd16f8c5e25f39bcb1d3976de1a3d0c7837986b45bde72479fb193c349a39f178f473fb2f39c7a5f3e11ac6b652fad7ed49f5b7de43d86d984d400000000000000000000000000001530a8a174cf6c74d7da10abad3c75f3b9aef434596b339d6f3bd7d5f4a9b3cefac7974f969e97c82c76cabfb4f56d163c88586de8e24df354a5df9f9dcb5bb5db8ed8c9ceb2a69caabaceb4c3e32f159d3dbf97e30f7ce1dfa39c000000000000000000000000000050df4789f2143edaa32dab7e8fe33d9de94de33daf902fe87b4aa5e346baadcef1ee693b6b4e0b2eb134f9edbc5ba49ce738d6baff003cfad8796bea09889e9fcbd876e2856bd2628ee61caacd3ca8dd93610acf4ace9ac7ce5a7a9b68f23b38c2600000000000000000000000000000000f1b1e05a65bd359c78b16ef2b7e758e7ca7c6972db9c8acf3efc27d91759f8caf67b47aee6d7ad159c4eac7333687b53963be22b233c33168baca8ebeb322e61df5edeaaf9da0d7000000000000000000000000000000001c7b47878149aecba7bb8fa239524d9270bcf29d497ac5d626cad2a7a5a9df155df0d26c1edca93bedc647467b45b0ce57a3e92acaf5ed1ba55deb8eba58ccf48957deb6b2b5f13bcd3e948f236c00000000000000000000000000000000515ef9dadbca5b54df67bf09f47694d2b7a59f3c74e5987db6c3af3afb08ad74693234a4093c2c0edbebc39f6cda418d7acc8171073bcdd69e66d59fcad2ab9ef033ded6d7a3b597cb3bd25d41afe9cbe843ab840000000000000000000000000000000796f53e5eb6812aab7c7a34b9e0e5ebb1c73ce74ed55d77b4d1631d3b38f7b4a8b8cad4123a71df3b2e3aedcfb6b220f398ece59d28ef26b2da4eb6f33d2ab199cb965acfc674e7d2253cfc7565eeb2767000000000000000000000000000000000f1fec3cc45a274833bcef527ebac9cb3819ce2d6df687d266bf336bf5e7d35eddb4cf68d1a54b593c748b7489bee8892e4ed34e5274e316e1d7b5934e18da661a6d0a544ced4be8625475e3f44633d7c4000000000000000000000000000000042a39de5e9a4599692b8bbb9f5ef13133ce42dc313b5442a7f47c6f5a9d63ba318ad2de6fa6baaa81239f2d2b7d269e3e17b6e7ce5abcb6b4e9968cf5d33ac3d7ba6f4f2f6aee9cfdea9ae7b7882600000000000000000000000000000628bca52feebc471bbcb7498ddf93b2747d35a576eb1b694d73e95a37c2228e25cd4f456beeebe7de7af59b9e6d21e92725740ba8da5eb654397a73de778361cb396715cf4c71da6f8aa9f4fa6d8f77e17dd7a5e705e80000000000000000000000000000785edea6939fab4e50f6c3a3b663704d9f6a1e8adc2b7a2276f03135b58dc556fcb2baa56fa5f3dba70ce76972aa38566f62d64a8d3872d33a57d04da87345c6955a226e6ba35b4b1aadf9696b7f53e27db7779c16a8000000000000000000000000000000006320000c679433a781b4c3a3d46de5e3cbd5edf369b7afb9e9f39b53dce4d31c6423f3988983b4c22266508789a31924000000000000000000000000000000000000001e7a653d8e7af9e83734fcfdb7d178c2b535b6c77be5e7ae1989f6e3a3900000000000000000000000000000000000000000000000018c8a6e12e2e7b6614fe513cadab7656cb7ccab502f5000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000fffc400311000020201030205030403000203000000020301040005111213211014223150202332152433344142602590303543ffda0008010000010502ff00d3ccced8769018ab8969ff00c231ea56335308c2d49d39372c4e1111f8d2bdff0002d72d58dd4c631b6dcdc15a6b04dfb0783c6e87d356e1a302e20f3dff00f8266233946df2333110dd41218dbee667be040a5437926b5aced32368886cd6b16f81cfd3d215c45d6655bae2a23a99e0ea6191a8d79c8bb5e70b501f316dfe5c0581690d035169ec9656f8f1b496cdc866de0a58c034cece5757599bc461ceca3ef95ddd0272b862c0984e43538b593489a15a784b0b685a91ff00d67d2e64b66abe50db890b0ad27788f8ed42d8c0e5774304c2566857531cc2b8db530015638ab1d3e92f798f4d3b1d19d45a2b0a56a40aebc2b8ac3866d220f2e080eda7aeab598d34232202ed2fa34f6c317416496fc6da9384788c79c5dc741caa0422279d8f6f07fe5ee5863c8699814da4f45a0bdb023bb5b018452588bac521a6e7e28024b4f92533e819912acc1787c75e58858f0b43e5aaa30bd21523b7f81f764ee43e01eecdb980ed9ef8c642e2008b20623c6af73adfd5fa7493d9bf1f6d3d17a6b35d88670ce128b4cfc2a6d833b4c4faa7dffdb0a7882a237c92e39b784f84472c5c71557ef47e959cad8b38607c76a29eae0dcb312cb156d2acb46c58ff00f34f68cff3393ee1913c8c7bb27223c37cf6c0591c80f22b1310ad3fd49fab4cb1c0fe3b58774ead75c42095238bd84cbb0414c1cf8977c2f48edd97f9f84faa72076cda4606214178bb693fcc312527d3a909155c5fd14ddd74fc6deb116ad72f56f9655b0897510a8e45bf60f181f51fb07b67e5311bf87f95eec65d39e453bce966b4b4eec0420363d387ff00265f9785131ead2ac55e7e3756afd1787dc089991fc86b6fb8766647e5383918583d87de76f0e5bce578e59659cda2b29c8008cdf3bf1d2b61c98da7c22769ab6e5ccf8db88f315ea4f68fcfda24ba6d33e45be464e4f81614ef911e13eacf68547265a6f4962303e133b646f3853090a6314ea7bfd083e11f1cd9e9d949896146d360769318c1ed933db23c20b7c18ef93dfc3df04a10bef339bef9b6d91b2f0f764ea6de9c834df3e313e8a67ceb7c5db325d7d32f936417d7c56f5cce37c677c0eeafcb3fd67b646327bc7bc7689cfc637df3b0c14f22cf7c88db0224b08388521ea5d79f52ed88dd7762267c74b2deafc590c10d7d3e1195d9d126844e562919746e025b1fe279fed33c47fc864f6c8ed93de630e648a232723b42d5cb3688c7b7d3a4261601eab061ce6cb6185e3a417c63582a06df7ba590d29572e9b077851f2cb01c0ff318f6dbd53ea32c0f7df2672327b7888ce25139338d2f4aa21ce8b75ac15a42dac8a2d5abca80e5aad288f0d2a7f71f17ac25accaad82838ce72b9ff5fe3633eea513db6c39c88e3939bcce6d9b466f9c7b0f7c121e516477eaef8e66d0452c989096309050cbddcdb61b841b0fbe8b1e1a5cfeefe32ee9fca576b8e3220e158c5f2851ed913d266d8511b3676181c88f1dbbb3b4a67d52b1df844c4a4a60524d759582ed730af5c99d73ede0cfc1db06931939a50ef6fe36ed1eac8998cfe5047eb76dca7d58a74867383cdb964784f82e319195158fe40405193b8ca9bd07cba4cc3be0fe608c69ac202b44cea32733e1a30f7f8b0b0b3b193db2e2176739b1264733045e9e239c63063c67c223b70e2a08e6d88ed21d8eb41488465e918398ed8bf4303ad6c98a1d3c586444ab1e860f02cd2876a9f14e3852854ce146d8da5be374df714c5510982ef3c3932636c89fa90bf5b7f8aa2f932232472631adda6e47711172c551134502f3b0e8a8bf34f585a4f4e3026086624651308a31f15ac9ed5a23887526b59bb6e6c31232c15cc8cc1472486d61c8e7251dc4b7cdbc0b171132b881c7cfdaa3f80c64c658df3d5d67239d7aaee94891592631746a732dea8c32deabea478574f9c8d54f82d7f87c4ead3bda6cf32318e23bace27696abf72613d4e52272ce04d5c321c8de3bedc671d1b404722db6cb45e9a7cb23c2e9705afb0c4ec1756232eb035d7a84cf9a587a993c5e3aa3a07ccaec13d2483d197eabadeb351dd1f13ab4ed7e6677c2182cf52f040ca459ca4c6362de623d1230240c1e9b04a27181139548419cb7cb271944b92f18c10879cbcb688c63f88c088cbec756c6abe8bbce20521045213187b62ce2d69f447a34b2aff5be275d1eecf7c9c6ce549d82081f8eeb80d7f52d6ae223c906e883122e9149c964c6f9d56c07af78b6439e70a639739c61ec49a8ee9cd4b1184397ddd5031812aaf105c975723b6520e372e142a94f79a9fd5f89ba8f315819b091c0e1324a56be38a35ac64ed1aeab324fa167abb17a5825cabcb0b9980f518426bc8fa79ef8e1c1b2d25c167043dd751b623a6e09ad384129350c3068219e57541e54f2a7f5be2af500b508d23bddd2fbc430f0c60679ce03ba66c9fdc1fe0bb1d3cb1625d21f8a4e14f65aea000cc4478444ce38bd418e8990ec235242c1033944f5ab58b1524721ec8c7bf9c4b622bf6b5453dd65a733cca83a6bf8cd61d30127b4323685472376d24e25b575faccc7731c25f02e3c636c8db36dbc224443935d8c54a0e23b2fd72c631b9a58c0095ce715e48b1ace167f517acb56859a54691015c99d47979783e6b1df8fc5fb65fb227766760e3332baf2227ea66a1102eca046d59f5ea8edbe7391cf30ae4764323aedc952eb6092cc5ca16c453ef65246300e60cae3a70a15b01f6294d76adaabedeab8f76538de42b7ba9fe56d50bd361beff1766daab0dab8eb793b4491891ada808379ba496ca8db6b99c01232a2a984d91eb4101231bc2544b04a8ecac416c708b99e65d5378688ef9c736c2ed8c30565ab536215d46e04b29b6e0c6f5079423f1de409850c8d16572df8ab7a99116ddf699ca15a2cd9bab5af10bd3dd3a9d705317ca474d78c458804668bfc0d19dc0768f20b936538627be0880c02e590d9e8c2dc612e7f4c42cfdc7ef21b18e798f4016d1cbaa2bde69e9ffccb8e0c28df067811ae5794ecc585fc46a8721487b2fd2bc33860d0ade551aab7a69cb9fb8d3d33ba583e808d868308103a824b3ced58c6dd730bacddfcfc96563435dd63632f70eb0ed0530166bb0b94576ce39e266c60b7c103b3151d4a31323366c0b9031261010cca9e99822a3612d07afe1f5a9fd95700e25ea620caa363bc6a3b1a334b3e69425938c590e6d3115dcda64c52eda7e85f25ad2120fbc20271da636e3687a96b799cab09654bb54b9c34623a8459a67f571b1054d6c0786e3cc660e6eff1e961c29fc3bd20f0fd26bef734e2512f4f7be63b45e31117074ce937a566dc742f04488ba7897192c4326abec2ba929ac218563792012021e5a6d5389b055fa961951738450a53276b31f95469d7b4364aa3d3351a7fcb34a7853c5325666aa36b35145742a72e320955c7823e31a70574947b611f99425bb61aa70448b1c3b657b1614b8435b3d2119d3362b06331455300f89db39f6b51d45940c82e09b8b1f2f3106e39f54ef3060c4f4246467c16d8e0dac4988dacd9f8d69726589e686c418e57917974eae469ce6c152b95f3aec1c8b8386d5668c89267672d556064fb67991cab2644e5f42c698304c2858cc9930636089ddf69f5595f3b9d6f1aed351aa8a9567e31dbf4857b13a467127c089650caf59eaf0a367cb375263043ce30b20eb160af4e99032713091e662caf77475805a711bf44af9a89ea018458aa2003cd983b9656a6caf976d98da7d963e28a45ec9769aac20a8f94d614c2351438fe31ac8545cb2560f3db2193e553a85a09b12169792644043c27135790d9b256078a63258b9c111986264b124a4e22bc036c4f98c497daf2e801b6b09ab2c9a4010c793082bb6a39167217d1bacad078c632608fa808e709f8bd63faf952ac303cf2532ad4ebeeb9eadbea7937ac957f378a39e70430ec5c09b36cec9f79cdb161831b6117184a8ee31b22879dc2285ba464482045bc17555c048b86a14e77cb4ac00635d1e91b23ce34868987c66b33f6f187b695586388a60e16800c6d7e50c592cf91d87b4b9b22c7a5823362d8eccc4fb6d396fd23046a42572d9921886089858e5d0b1311e0fdd160923fa971df36c38de32a1f97bbf19abf236869e5961d51552a0cc404f60f6e5c8a76cb0332b866e2395bfb364618ac0ed8b3ef6ffb570b93099011ef8cfe164fd8820629436432aac62c4cfeec0b08b3b964cf76f7747b7c5eb2f25e0542288a519c72636c0ec110233de664648571df6c1f4e4ec5063dc77198ef964658051e6226097905be10f2c348b6866d805205692452a64108063bd98d05e6989973fe335c1fba2c9e2339023b48e4c7a637da27226232e7db7b578beea0648644c14146d380de32e4ed85624c179cc72b58851ca10cc3512c9559adc4b3cbad2ac9c33de1c8223d3ad8f1f8cb5336a8d668c840ef0aed184639febbce416347ac9a67c803653cd119ea0286610ed9cbb4ed82b89c844e740f3cb4ce1d728c1b04ac65a87a803c0b27bf81172647b7c55b674d3a85984ac52c2851be216b29261765f19c219c15ef04bdb04b68b23d273b67294e92c6916f1cd65c7b16d305c8314d1c53038f59718eb13b426591e5072bd62594614f8d96c446975e0e7e2eecfee87eedc398c05c478363036e31e323bc31104b57db63236cea4f5238b8216d564bb08ca73a2c9c140446dc1a3dc6aceeb8cdb2230b247217be32a2e7189e94e9d6a6c07c4ef197215d3867ef314711e063be47688ef919db38e6d96d7ce55f702462180303191119c63386104c6580e40b2de29ced231911e25b4444ef05865ca74e395dff0088d55f035814e9128616251009db6c15ef1024393bf86f9ca27237c89ce518d8f5b82625bb39550a0838c6708cdb6cef93851dc23a5611e9b30791313e2e9c1ec26c81c22cd2879dcf88b2ae1757129cea44e494cccef9d49dbbcf84f8894c614f28da337c360464970243044c6d88e79cc17ef9d4ce6132e9c707502a949b1611b7816f9c769938c328cb11b068bc3e26c575d809d3583929b8330bb78e0b239b3607a8ecfdcce445bce95ac9af70f3c8db9cf216a73f4e7e7e9afcfd31d9fa63f3f4d7e7e9efcf24d8cf28c8c31309123c04bd90c53832b898c958159cdd564df4c67ea0a9c2bab989b4bc8b0ac658120d1c67cd7cb731c272c33aeadbaabdbcd57c2b0902f375f01c9617d1d15e4d544e793ad9e56be796467964679546454af191111f2cdfe3f2d6827abe652a49cd372ad0247f3d43fbbd260868dfdaff00819d4c79d7b5166bb608844f8635dfb4e64504130ed52b92dd24ce1a48feeffe058ab7d6a62e5d20b4d917c7dc784869b51e4834ea168cecd8b3e69e4f94e96c22b9ff000531bc3d75d101d0316b05923d121924ad9db65c0b817590a2ff0083bca23c051c8c553e5e4f856755630a156a149967feb1bfffc40029110002020104020202010501000000000000010211210310123140411322325120041450617071ffda0008010211013f01ff00a5d118592d3558fe0a2d95e7c638b160d4793b38bab230b3a1f6579b08ef3ec87e45676722c7f8e7cc4ac85d8fbda5d905592c72bda30fd9a9d799a4a91c6b23d9f637e862fd2146b69e48c2c92a7e569bfe10fd88ed8b69b4b073fd10bed8fbf2a09a7bd1ea878542543742faa3b12bc21fd50a1f5f2a09fbd9fef658c9ec6e8e5437628de049449bb39e3c94e88cf90f64365962fd8a1ef67dd1c8b1dd6cfc74e84f91274722ef751e8a38925ec591b8c3a2dbd9f8da31b4385322ab69478b2b68444722e91d3351ae9092a1791a5f8922232b9183860d38d2dab69c9091d6114863f1b4e5824538a15a3ff0ec6a4d97288a62659f049f67171791269da229f225964bc6ba136ded5688c95165d31dcbb14492a568d35827aafa88f4a556c536852bc8e38b2fc78aa286fd2db4a36b038b4557b2cbc092aa3eb1591d31aac0ba239544b0fc64bd225f5581101e1d909f19325a97e8fb3ec4edf5b72a274d58d36c7d64581c736894792bf1576734f06a55e08212a9128d8d0a6590ecb1c703fb448cda25d147c87a1f8f54559cbd339214513a4b0462fb306abc5a2ef0244bb164e3649b8e1f90ac6e84dfb382bb382634bd11d4e2a86f91379169d8d380b396872c60869bab4c6b977e3c3f224cfeded5b6705c389f1b4e86a287d10cedeec53c939f364d7d7041dc08d2547f510f7e3c7b3e193ec4a950d0e38262ea8a684ed1223d90568707d59a524e35b6bc95578f174c4d3563da89c7d0d3a15897e89291f6be85685294b085151226b41578fa71e4ce0a22ec67264f25d3211e435fb15fa24a51c90cbc9845966a45c90d578b1d37234b4da76328ade7134b039167e4a84b24af6ac10ff66a77e2e96b28e18b5607cb1e87ab13e689f3445a887aa853498f510a68538a1cd3764b3b2af64a51a27df98b46c5a2abb3e343d355bd96597e634bd12bfc886a7fa3ece5649545dff838cb07d51637ff0050ffc400281100020202020202010403010000000000000102110321123110401341512022326142507052ffda0008010111013f01ff00a64a492b219393fd1745fbf296e91376cc4b5e2c6e87fb9fbf2742e9bf105a25d163230af0bf97b8f44ba3fc7c2e897e0a12af1299877bf7333fa233bd3175e17425e5b256dd18d71439509daf6b32fb115bf12fc78ebc3eacc4adf2289ba17b536a87a62faf1f62dec625635cb474374476c72a7ed64a7a3bd10fc3f0f7e12284894947b3939320a870b7ed64c6d3b47f677b2447cb253ad0d222925671bfd0bd768942ba31a388a35e5cfb673dd8e4883d0f428ca5b91d7b19e7c6a852b464da14b8a213535e724ab437512cc51b3f9474624fb65bbf6722b91125e13e3b31e5164d99a56cc8aa1e30ae28c7077632ff00c98a56217ad916ec47f2293325d8b64292b6529128a7d9c1212a3e6429297437192a90da5122a90bd7692423ecc98dc9da16349eca4d0aa3d0d917bd9396c8e2ff00d0b2463a438a6497114bebd87b1ba237dbf1964f953e8e4989df48db7fd0ff00633e57762729f42b5b6477bf0ed4ac5eb5fe48efc6416cc9072488e27f6c518ae89fed5d8ba31c14b44138e88d511fe5a3b392ad909d4b8bf5941ad90bfb244af8e886413389466ba14d25461d3b16a438d917bf0b1d15fb97b3d1c3ed1c64394fe885becc935d0a366255a2a86ff04152196249efd862563fe8e47265fe494393b16b441523e614949d1fd096f64a693a65d75ebcba223cdc4f97f759f22ab394ab4296e89e91db1b5c688d7e08e350d98a5792d9925c264a7c99865f5ebb3e58a24edf85a224ff009597c91552125d0c931349dd19a3bbf1863ebb24abcd10952b1357b2aba1ec492ec728fe4e71e8d2db32646f4230cdfaf3748964fc976fc7264674c4ad5127c44c75f6714c92e2b4737e2cc538a17ab29a465c8a8624579c7232bb5659646544f687e6088f5eae4c4df47c2d1c0f899f0c8f8647c2c5859c59f08f08b13383e343833e397e058e4462d323ee4b2ca23c8fe8e472f35efab23f81c0d2445dbd7fa368d8e36456bfea1fffc4003f1000010204030506040404050501000000010002031112211031411322325161042042507191233352816272a1b1146082c124304392a253637390d1f1ffda0008010000063f02ff00d3cdd5e2b7eca96bafd7f9177de02dc613eaad4b57cc2b79c4fae34463e8efe41df780be1b27d4abbe4390422f6accf0c35f06135b0dba4917c265315bc4c1afa77a93bcce4ad100f5b7f933365398f3299320b777cf456340e987f11104fe869f115b48b09bb4670cb54634636fdd5ac108acc8e89b1e17044fd0f7aaed0ea7f08cd51d92106379e6a2447905cd74815bd0da56f437059b87d97cd09ac6f04eee41d637c93a839897a2d9bf44279b6de605ad89228888f2e2c77e9898d1be537fe49d19d66b720afc233521927605af154276610734d50ddc2e54b1a495bed92a58265510be246d5fa0f4537dc947d13bff002779a4e60490769aa06627e12a2b4e87cbdd058778e7d30d8c6e526b8a2d7661173cd309bc4e41ad14c26e439210daa5d6f806e17461461541766397550e140dd86e1325a8428c6a84fb5d1ecdd9b88f1397544f8b4546a5307d510953a696f375949876cfe7e10b68d681159cbba7b344cb451a1bb3b5f9f973cc3e2ee35a4fc66ebcda9bd9a07ca6ff00c8a93517e8dba9f3eef55b08dc2784fd251861c1d2e4aa766a7c975533994d870e1366df115f16293d106119aed0340c33ee870cc2114015647cbc8860cb10d64fe20de77f65eb64e47a994f0089471dd5376784866a6eee55c976989ab881de7b3ea1e60e6e99844b1b64eecbda1bb8efd1184ed1c8a75434541fb2181c3a95d7090cff00653ee7444a7f4703de6bc66107b723e5f0ce40711e411742796c36e9a04d74589b38a33b20580fa9d7089d7bbe8aa287a2b636c434277b2ed2cfc13efec9dc2ecbd7cbe919beca93e2cd4884d272c94bbd29f12e88e3d15b0d412a67ee983eea2b7ea8650004caf8927c6ffa7a0f54f30dbb38adf0cec7ba1de2c8f977fdb6d82965cb09b7eeaaf10b14e1cc607d319bb03dd0509de4a8d33c1d162ba9686c951d9185bf8ce6556eb94ea38648fae3b37b452f1251266c72f2eda306ebff007535d57421168e49c398c3ec709e227dc90c0b8ea9c55ecb9e16cce4a2c30d94622c54b19857b0cbcb9ccd744f69d2e9deeaca6ce255ca44604f4c00e584b9f725800a96f1b9733dca8f17842dbc4f98ecbba5df4b9a7cbe253f5141df55b098cc26b87884d528e33392eb8cb1da66e3668553aee3848613226fe48037738a84c02a8806ba2d944bc4f09feddc70e6a1bba7963dece2016ca35dd98728913ea7afc07197d064a7c910a5853c94f090cf19953f6ee5b087c81519c79c826c56f135438a3fd46ccfaf725c8f96169c8a88673885b205186e0ba1461bb3d15411e4e4473c67dcbe78db2c2584dd92b2905b5766eb35441ad49bd9d999b9e8806703052dee446fdfcb0bde64023b105ade8aa7cc9e65742a638864bd6ea6325f6c7a052454fd975eef32aa89ed86720a710d30c6684320b03781d3c906c576ce3f85c3c6a8648bdfc6f9af89da613535e1c1ec76b891cdbe58d70bb1ba2a254b82eaad91cc29a98c8f72489c243257c2415ca9213b8520c595d4c9fb2be4a576c3429dd7266c593730483dcb7e2946e5327a7ff7168e87cb76b02cfe4a98ad330aa191461bafc9102cbf752765813241baf780e58752a456e94d8405cad936cc84c4df86d7c689bf7f0842a0d1e82589509bf5633e427e5db58767feea878de0ad67053331cd54d2baa91c974089399eecd7aaacaa9baa960f8bc9864ab8c0bde9d12219bdd84df92a653fc2107f6b76cda72626cc498db003188ffb7963e08e26e78966519b70b66f170be5813eaa93cd65fe41e680d30c94e725752672408c2b970945b0049babca05acae21ff0051da29b8ccad9c51533f50a598d0f3c27f51f2b7c43e11343b4b1c76bc4a793c6613fd1408ad3225b9841e4873cf35354e12ef7a2729e83b92d4a6bb9841ecb153785da21b86e731a26f66ecfc7fb22c266d26f3bcd4388db36209cb961b377f49e488362131c720d9f958863388e920392dbc3e19dc2a21ba50e48c13c4dbb552a853e8896e7c9494b5ee5d59147b8e2e94e5a1406a2e1107856ca07f53be95266961d4a27388ed542871783928521ae25b393d833e6a1c109be9e55d99bf75483eabd706456e6d29bc9d7465cec98553a298cca0409382be788035c005616c4945367c907b754d83d9db417042178610c3f2a952c1f6528d0c37f1b152efb1e69f13959176a26143fca3caa01e9fdd1c2ea9d0a68199c906c4127735bcaae4bf0f256ba36b61bd92de392c885f742d296137144f84204fb2e6fd02abb5ba6eff00a6d4d7d3486ca4157a382dc9172330e773215ac3aa9cae9cc3f3215c7a26fa547085f947954289f6408c9c2788e6a2cc6f0948a945dd7e8f441136b754e6cd4c89922f35c268d54c2b0532b91e6a9cd032c96442e2929ceaf5c27c907861311f9745f28e1d9679537443550fb4956ebab82a9d293ec8da62c248da4a17e51e54e87ae616ca259cc36572a4d537669f11fbd5d9ade6ac1819f480ab36a6cf1d1501a2475e6110e5d0a91e13ae148d02df16e7dccb0fed25b4d27c90dec26f61bf55121b6fb233fb15bd67859843914f9e4a2c6c9cf1213e48cb433c217e51e5750dd89cd4e33fec16d2010d03304acedcd0ba0d07251ab1c6c97dd4085f4817fd55c49c17f642604b9604bb8485210b3e6af8c82a273e6a699d4ae8110d371a2f8104970d4d82da476cc3b8baadac125d0ce4e0a54cfd152584108b1a779d9a0c84f02c019ad9c4e2167230dbc1f514d64e7489796b20338a22a4583575c026ed016466b6ce19154b62fd8941bda194fe392fda4b2c6798c2a7197f7528428673404e60ab992db3ad0d99232b3792776973b2dda50a4b41e856f4dc0e7344f643ea00b2df84d9fa4942ed22553bf5576489cd52c32e5341f9c483baf1cdaab872331642763e5b58de0cc97325755d506b6f2b26b3e9600708ac8aeaa0cb545be1d0abe7cd653595bd17c36a9321868f441f1e711c5070949496f3c91c900cc868831cda00d56cf26c9511458e4e0aceae175557676c8b8ef7456330d129affc27f4281cd13994e74aa0e1ee8c37303794bcb37dd7fa7552e087c9596a00b2ebce4b6709a4556f5526b856c151e89bda05d916fe8506b44c94f0d735f7f0aa0da4ae2a6f30aa6ba7d107ba18213a88643f49b554d788a3569cd364089685380e0ee66be29fe91995210835a392a42dab2401b1084667044bfa15da1bff0068a92a82986d2fd7aa7971f8ba0e9e56617661fd6aa79da3cf3c25fe9b6e5329ecb0df39cecb230ddf492a0860a1a547738cdd923d963f03b29a30213a65dc4ee9c944033a91278b09807d1161398461457d2e6d8872bc662f85c3e27ad9b3eea61c9a699d592a223689a34718c917c5865dd4ace4392c916939e8a331de02084e6fd6c2116bf74e1cc26c785c39fa29f8c663ca624b5b2681adcadfcf920c85771cd53e23772a466fb60c8ba8ba8ab24576873330415f15ae07dd1203dc559d40e4d53da3bdd7c5830e27a8548ec909ba929ae6da1175218b773d50244d5bedd150fcc596c9fc4323cd36193f0c672d506b6c1ab754f4d576988332ecba2983229a23b3e268f1fdd4f270e7aa9649f05faa0e1c083d86c7ca3fa8269982e97b23ea844a0394d44691766f0c22c0f64f63640b4dd49c17545cd02ebf888024ff001b3bb5b48062cd83d3550984ce575ba378dce16c93e9d05d09710c8adac3810cc4198217f10d6d709f7b69810d6aed43f0e0d78e286647d14a7756709a6d5c4322a447a14ceb7f28a22098563100e5340c06b9ed4dda8d9b35bdd4907fd26977a2969a263b4c8a89a3626aa55543aae1bf25377b2111b96a108dd9d8e30e25ec322b69dacd0dfa752a7b28747292dac29d3a839850a237384eba27f0aadc7779298dd404f2d4a6bc5c3b3c26d15362588516171c3a8d939eeeced643609933511ed12110c9a3a2ed67ed854247a1d554d76c1fa8508c2199e29ab1098359dd436f26f96c686fe07997a1d16c2209446ddbd70a5df35997e20a87b8fbaa9b70ac14a73e724e6c23204a9c47cfd54aa0e09f04f0b9a426ccee98a81160e18909ae6f16a106436d4f3fa2db47956de1675ea8ea4dc95b161ddcdc542870809e89dd9ea74cba7b495895239e3b28a2a847f4f45b4866b84750a0300f5f2e7bb9950a3189f15bba79adb37fa8723816c6607da756457c3ed112174705b9da18e6fe6566cc7e1bade03f6576b954d3f64e8e6c059bea8c2c9ad32920e738bb03981cd1173ea9ecd3451c3be5d3bc51a9f6d06aa8637670d52c50e143b688b1e26dd1c135e7c269ee0a4d8e63428c66fb683cb5f489ba565be0b40ce69a43a76cb92bf01b382a06f1d25aa7b9d0cf0e1f81d9a851613c86f45f11ac89f99ab7fb2cbf2b94c98a3a14cd83767d9e1734f88c89ba45d4ab4435d75419487455b32d5a51dab5d5eb2365f1c6cfb39d353d56d7b397168cc382fc2a88226efab40a4dcce6f5f09f2a6c856448724eafe5b45caa641df69aff000f1831df4b918bda6c1a6c39aa2ed7693d7cb4174809accd13cb173bb10deabee02ceb1a82bf888624e1c6dfef835a4d9b9293ac70dac570642ebaad9401b380dd4eab7dce88549b09ab865e8559d3f55f1a14ddccadaf683360150fc48550627af2543c4f45f11ee2276098c8429717708f12105af317b41d09b353a144de8d3982b670e108cf19b9c9f01d0f62f77d3aa30cef48caea6cb15b27975b450a186fc46dac982271cafe58dfcd83a34534c26feaa4ceccd975cd6f42a0f39288f02ce42201307308b434418da11914016571cfb05289d919395a41561ad68e400b205f90d0619acd6681e68cacc1e2e4a4fe16b7751d9c232e657c59ada3b21aa776c70b9dd84156fbc47dca63c785bbc9e3c53550b3d6d9f9a9aafc415240adb91f2d863ae1080c89baaf52a6e46486b7c9088c12216da200d0d462693b2ca68087e25ea31b2006ab88b1ba342ae2124755499289c9a26bb3fd25b97dd76261f974838323433bcedd2de6a2002c2eaf8495d3794e47cb6143634b8c8d829c78ac84394ee8f66866b289c26ad97357469549181e817e218cd43e49b0d4b5d0299cd19d9419fd47fb2d8c69c870b868a50e232237d507478ad7463c2d1a28e75a95fb840e7e5ac86db55995517c94eb9fdb11245f2b95345a332139a73186d0660a046aaf9fef85ac557ab507378c0910b7992c083c94288dce1d9d887373175fc5c0136b85c29a99c399559160664f96c2769929494b092a67257c5b1c6b9aa9bc270a730a617453570b6d00fd952e0ae56beca539437712f81187e57293c48add6db9945b0be238f8bc214cff00fb84912354d80f6d0e16f5f2d8ce2db35db8550eb3c29e39299c5ccd7308c239b7245a785d92eaac64b7c7dc298c78c7dd59c168b30b21f64045688b0fae8a965987bd536cafe576e276e85fc343c809153fdd0b541073e425a02a535d70bd95b01159add0785438ef0d553acd0aac14c6584b452269f55c63dd7cc0be1fbaa9d1099ae22892663bb48372b68e948643cb3b28d2a4f2fd0cd594f5c26b2bf7248b4a30deba8b855eb39ab8476666d3a2de83756629d3642a132a9d0e5fe4ce4ab844b48443fe6373ebe5754421b4dc1e49ee68dc79c0f7f3c091984478dbfaa1570a90cbbd3e481f74f6f76ea78b47d563e52e636200fe5aaad8549c0aa0c8f3c26558accf7b3456d61f105b56e9c416f68b2ef50781ea205256c6589e683b95fca5ec89944bb5c80e585b2c253ef591b6f6a158abc829d416d21da79b57e12a53abecacd57903c95d6627875192738e725338d94ce16ba73b9a8841bf94d311b35f0e3cc681c17ca9fa05780e555243138baab5b256255aaff6ae17ff00b5703fd970b970ff00c95e5fee59b7dd787dd785783dd64df75c0be5b97ca7a91ac1592935b7e672537daf2cd4c31e7d0293e76d0059ae227ed86647d9667d9667d910013353d25e6fc416f3da3d4a0768d91caea75892f9ccf754ba2b01e44af9d0fdd49b11ae3d0f74ee833e6be4b3d97c867b2f92cf65f299ecbe533d97c967b2f94df65612f367fa2dc87147a05b370009fd0a63683535e578e809beaa37aa1169347352e9fc84f90dd0dddb6a9c47101756266103eea138b88de2b8891ea85b54630b87fe85504ba8e5a269139526ff00c851ae382e69cfa23b432dddd12b85f34a33c8a815e65c4844b4ca624a55365aeea88c6469006c24be35511bec1341c834dbf90e47242982ca8f346a870dd626c135b12035cc9c85fa4d37fc243add295f9a309dd9980800dbd539ec630cf5e69d5c30378892a990dad3fc880804891699677515d2739ce981314e6a72b8363d2950836154f98ac4f355865376484fdd184048372be7bc9c1f0e9b9bcf3ffd637fffc4002b100100020202010206020301010100000001001121314151617181105091a1b1f0c1d120e1f1603090ffda0008010000013f21ff00f1e405a03cce5a74aff12e5ba52aff00f0bbc6eaf3f4984f3381357f48b9bf2f402396df95fc0c64dc5b3d79fcc3393ff003df89bccc037b525b0fe824c84670dbeb2f5de19610466681effc9596fd51e91ba43a9082c6cffe02a8036b30b09d37f326420e565e97fa4facc50f4eff0058aab555e58ace35f5c7a47c7661cfd466ca7fe0f10ac00f04aebb2de3e938a067ee9fe41ec3b377fa861e42d9eeb04a3146f507f60522fec08cd87a89d587ad93135c5fd52913596d29e213ec90ed45208f1e3da5e6b4bbf3031fac5fe2f7318046f16b23f93e38a2e0e57446714d1e83a89eb07100003012d5ed0603acce0507f39e676f7873fee7a38294ab874dd90ab5663ce8fd17bcca6b357b650cadaea63e43f8ff00274d42bda733783d90281f5fe25424431d7ed7cbec61899f02fa95e99e185123530d6f0ff17acd649f53fb984a3a97dcb2f81feba2fa086aed06f41fd44728eea8e25ad276079878d2e273e97045b0146e7b21507827eaa02a1dea18930d3951ff0049cb5652b5fe393746fd75321390eacfcb8f9b263fc0a845ab7d47d23e1977f72719b6bdcbe8bb29f8942796debf05af404dbeb37996a86108df7d0ed3f86218ab0fe12f6c9bacd4136e5e88c2b70cb72567db16b3fa6097d1d585a6bdf1c7f8aa34d630f82be73c7cbef5065c607e2c71663fc21173c8f44a20e9819b058f6305af662512796793162fba712d163f3fbc5a35fe301544d8c842cabfacd79f5f82c0af01b9611fdbeffc858ec3dbe618273fa309b21cad13312cacf38b0382fb82c7c4182c0627ac65f55764abd79ba020710d112a3c7311bddf879976f495bc33f055eb3cb13c394377167da58672df73fcb7a2dc7f2c6fe5eb432588c20315b0e20b9e2d37288d00e5a1b8dedd423972f07a7fd9cc2e8cda63eb945a75b4baf6bd23c1350daada5195b795f839553d62fa99ca2e560c7e2073aaa13f6061ff003c8d93d9f2f5db67fa39868326fdd1d52a69a8b92aaae27ac18652b822acc39f48c190cca0af6f045d38b6a649e3e180b5a25add0d10b7105e4c737c51e22b4a6ad40adc98477d411632e821337dab44df4768b7a1fe174d9896b69f57e5c4ab1b0e7b99da7f211b1090bd11c36a3c916bf1f4202c7271162fde33cc556eebaf81b9db3016cb6c75c13d8400289900d5371a0dd929384b798e56ac01280ed5896f18727f5442dade7308b4512d4a61d5be2228703cf7fc4aeb5f13aefe5dac99b1c420439d89c34472d51b1f58fbc27a88b3b89b893bba22d25a4055f46a7e528b9e0b86d748fb508d406c3cc30f71b0c5b8ea01fa5c7a4ca61ed9c02fcc105147a137e6bd435b4215fb4445b30fc501291b2612b12be697f8f970746b7d31cdd6afb3383a42130e12b01044c46f03bf4858b34cfa27f0e74ebe016537f84b12a3e1c4d7702183ef97d21db7101c4ccfbb1577070dbd40f5a213fd86e39d2e2efc1154aedcbfe1fb6a5c1b04d3f2e556141f7889de1ecfda9eef3d52098f30184c96df1e6501e3306dba82601d0992f273e259e8f82553dd860f132a2e510b7b721f8367dc811dc67911675f58dba8608160363cbed397a67dfeb89a69f8d5e12239bc1f6c7cb29f328b8d170616fbb97d8323ed1515b5fa4217bea12d664c31a0dca7b5c904ad32a39ec4c14e6882f12f035b7acc9f8661f5237c880649925d87047bbde1d7c17435f9f804ac51dcce0b776f994e33f85989c4bd918fe2683296930878afbbfc28bb67f3f2cd4894c2b2ab805c06e0bfa30cef5c50d41bf24ec90825e13da0896b23e097e9c4165b752ad2c175e73152e72e4e272665425686329ced8dd36c0668e40af3e658c2a10f934cc6136dcf7fbe21b8692dce60f6bc3b67deba077fe1f6bf969e08308630fe6297e6ec9cc5721eb1030e550f1ac7d279257065a8813de12ef993e8c6fd209c3bb367ac42ecb2794171531b9c4d1332853a9a57a47b4435fb9ee734a3d1d1356dd696fe25fa5c0b1ec89f910a51d116d21d0dcd3448fc6aef1f93e5990e2c8e1ed25da3806996155e11e50d9226b40e962a1dd9e1957a7357e8c6a9c0c684b1a34f2c11ec10e4a726e59a9af1dc172fa40b889345c6c54bbdc6e2ca4dda0e4084b30e2f13036a9b1c412038b040ab4bd1508b01eebeb2b0792aa8f32cb1dddbeb5c4e22f572c574bbdb2c4738ea57dc0f969ea2ca717e91126605ad4d91dd08d3a19b7303260eb888e9e3025cfacfee55046c84d81cd6e29465996997da086abe25a8732bd2a565ed8659aa63425d450e8ed95085af49452a2ded72b288b6c0d9c1156e177b90460837682d4b5d588b97d2bf3368aa5176ff0087f3f2d61def2a7eb71555c1d33162752f728a49e3cf715676f647836b4acc3777e32e5ad66c4703fe082b118afe1ca9916b69b03c1285b0698acb03f6670163b843e555bbba8e538ee87d60a5de98b8f6252d06d84b23885f216372faf880e25e28ff00b02e659ede3e5850f18fc08c96894a212cecfea29aafaa973102c5fba3844c74dcc99857204a55aa84a8b0bd42eb3b9686ccb551b774213fea82684268da213a7412e83bc7d6142a37f399491c660dc4866059830fc0228ef2417822a6bed6096ce509f662e4585870ee0e2a79eabfc7f1f2bd24240ce2caf335b7fd1c609bbd44ed58ecb198089bd235172cb7ad58bb4ab2ff000704de396214735cc3f467bc897c5ad4033a3cc0a5dded14ad893c82193ccda0de0398f3f4f32dd43dae947f2f59508ce0a2e7700034f5cbaf85cb02ed797f4c22d452335d2d7e62b07bf953b8c0f67ed402f008529f80869c16c7310d687c8727f3145aa27b8c4b1a61b9eb3984df6f494d840a717c4aaa676f43b9780739944c14737280971080ad4fa08595289d50530ab6724b93be1c0fee123b70e1b7f21710822b6d9c3888c6760e8a895f076759eae07fb96af65a783515b763e55d4a387bff00a8e7ac43ab760cfac594625a8c065618181e8c36a394686328cc93166978212c5a1ee61d36c95453caa085d31b214ee26c8a71752aeeb995179096c388c1b4cd6255cbb7dd9c4ed200956c9dc28a22a1abfcb287b021e5ee757d08a6d5ab50152f4389b77d624f53998e08e4f42229d0ac3b56ea78a1c4563bfc1f2aba340fca09c6af7f022a2ecb5cb273980cb610610cd0cdc052ef4fa47d5679fe20a5d3b8966d6b1ea2945c0576153341cea8bb9cd538be633067699bd46bd65c46009af1a2e592ad383dcaac598086bab6e3d7a98a5481d0c29a31e250d065bd4fc84ea6e18dcf1830c9b626829f5e056d0bf5998b76bcccbf4b1f2a5066ad7e7fb95e0808c503033781e710d660c37dc3d60e46839b3bf48ef327010e8a7022c12c697750138f98cc0663982e15136e9062deaea52078e56010e26c3ed44d86bdd168cd01a94fb5307960325e5d3bbee585fb34b13df921511c8f374fe203d8196f169af32cb917abd4ab5a17ed52c2e2d31d897e6065559d7d231050b83a9fa6ebe555d7f762553596eba9d91d4a02e7eb047fc902d4a0f8c39f496fda8042e82f50c40d02d1e4d4491aac95ccac9c8711d66db100d558ce23a7908bd7a4427700e3e016e44503a886b78e325c6d5350614ced1177cc5bb6efb96370414e50035a46f7c9fc4c28434a3b88e8e2e5b13bc988dc3352d5e3cd8aeceaf6fc3f5dd7caf10475dfd63f96f57de51435a2af372d0ba5a6d8808d9fc45ec405be6109351f6660d91132b953fb4aa5bb50b1ee509e755e90e28384dcf98f9a41f7024fb532d2f88fd199a908e3f884bb4cb1c35e7f59ca6826013ddcdcba7071b1ee1b86e99585dce5f0707c333582a989799920b586887fc3a925ab046ae1f3ef1784dcd55fdc01a80b77f2dddc19f4800482b05fbb042f9fd620e706e3b5f4602170c81ac5cd617d3fe615e840c0f58f4208e57225c0b54c939ea54da455704d24726260ceebfa4af7f9ded8a0a0dd42d415b61f1c0f707b0e182d4d53cbb94802ef8253d94c3223b46796b7752c0f10a71d10415fae25154546ae5bc5cc384da39237fea857994b699a09464387e58a055a085e91521c3fac0bde9c32d6bd79810e5d4de2569cb015bf5b7c112056b26dea723debabd21ca7911877fc6ce57a8e47f7349979c618fd77bfb332f8fd89989352ebc74f51dda7786e1d9e1427986d694f48962f1b10c2397540474643e1631ca834e02f6ee62eedb6bf4e7f32e5c3ee458f80b3bf32ff00b6e08a84c5c0402647e5776f146d12f6279f5ee1a19042cb480f48aa95f7d0d5e193bf08d1dc40b2320c59fd88a8b488060ab6b17c90b3857de27573ec4a8b25ab6c879f55e333050b88128f09c41e91d2413c1027f64f336931116d62335df2878b9c99bfaa5ddce325253c0065583390c58c5994787d425d9cff000c56b90c34237f495156dbbfb257219e0f479f9538cb3552c3b5fa7f7283e425587f73bfbdbe209a7e07af78bd22c1bd1e60fca783ecca9d04b3b81f4a5d72b2bbf93a7a466d3fa725c60851a8b398296089a480401775d45bb7f418ae8ed2150ca7a2b79fb4459bc928f43b8658f16b960d451c710854b4688a81ad33cc48d5081d9e33a2e7007a054b239373904b4ea3fb25a6e98bc90fd6669692fbf3323149b23672dd8c5d696c8779af8ffa5f294654d3ea6607c9f5238edde9c4071f72f4860a9ce1dcd8dcee8e7e18fe695f861a39b82a5b51155cd4727ebbcccff4d3089780055468ae91ab10226c32652883dde482b6a417412ca14ab05772cc8e35d63a401c9dcea47ea4e3ace887f8252ee0f7d88ff35525472d2badd4a14e8fa084ff00157a0805c0d89c4040f8d6a36072c5066e97f3c3d45ec90f32d7d5af4e49786ee3e51433b09aba970efaedc4674ef5ff0063a3b170d20a97b39fe7e17cd5d2dbce22b80080559728717495cc60de9988a4b0ff001a740d835c90da0be1af5814a32371d2a58328150a62a1219774bc1267bfd3f7302ba4bfa509b3fa04e3c567d2669d5beb4c257c7d7ad306d35323b25f4678730a305f53c460ae0a7819ee2fca1b7d6e39fec863d719ed19b9b6f91ed00034621adbc6797e8cb51b6578966349f6194054d91c5f3f58492a71b40c14a68cb7c06a2ddb89f24e3f11ea443f13d362ca2aba13efb9989347eb5263159fa9ff009141c10a978471aed13daf1a9a9135016e053ca24bc06b501e5e2578a42eebd25ca70939e0a968254c2b09677eb27c019702181d30006be03fa99ea500b0cd333a4d30c962c0ec9e243e5aeb72bd1b403aafd175fd7c00db1d7e0fa92d02863384261b7acc6e95f3c4c5aeac33c44e3132b876ab98101d105391497c80f6a83a61229897ce29eeb2456ebe8184d52bafe5107a57b7b748ee6d2b4796729dba0c78546da25b373fd12a313a1f12b6b2e8dbee0270c6af7e9891c1601e339f9779317ef08740a0d91c4a9016d17d4f461636349011c627e53705cdbf67ee4c1e7a6c9007cbbfa335be82d17495f19250456fba63882ddadc2e82e53c677eb088068633a06d9622b81361079f29e555da6081fa4f78b145f0659fc4f424797cbdc558cf70582aacf5db2ed1b25c40237969b2ae57c2a14674173ec408d14a3f13e5b4dc59a1dc6c31dd1d44324b34fa7cb030ec7c83f731413d05d386562858696f1c44e12232db88ff0031e1bddb77a88e8bf145beb9cfb4ac6bf6d4a6c45de23084b23817fcc481f6625697a1df88078c22215eaefbf1302b050b87da0008d8bb7fe529d887244af775c9962abef83fbcc6413f7fda6b00dab4b027700144b4156aeaf487d7bd4fee99503bc1f496ae555ca54efb27e5a7b93455aac318055b0be1664ea5c8b608d32ad5a9a3a9c61f901745c718dde8b8819106bc3378230813976f44a65c47145dbfb0e5160fb25bb2cb3df9e8e22a69b5ed19180cb7775055c726b0b9a45b6eee0521b4251f800abdd0194ec57347cd6f0efdb98b71b4b65f410508b48a8ff78350b011308fe183731db88759bd1e44291607cb0b1767f0fc178f43707ba1970f2f174b4e5987eace40a3b7b8b7f4a28c2b98b37a7a3b835115a8df8dca8599d3251a8146899bc1ab99edce955b987579a01b56f5078f71facc33ab8baff73a08243ef5e1e3e9115189214e00f13b632f205dca52aa6068a9591ceecd188c89cc18058b436e26e88f4bb7da36ebd335f2df5b37edf0e6eb1fa2c7354b7d260257550906adb89d05ad1cd33204c762a3119d1d5e8200513305b9629d85d6bb946f01532678631f2945d1432d4766c9e264a199395f2cea480b72dc02b51fba06520ad84f2b7fa8e61062eaef3f056418416060ebfad7cb28a8591cace658e8f12b60888ba7f5df2dce4128b8d3c800c585ce5e1eee31569c042c74928e4b82a0e3b5cf8270b20b2ba6fda576568fdf6829c69e2014778661072935e916c6a5406f92617f4fcc4b6c6d81867811b4e652a12cb3ebe2378d4fa40da0979cff00aca5e35c7f9c937acc767fbcb15feb98b9e661c626ecd1130788b9cd65a97baf965a1b8c1b4ea1d5a7352c7037702bf3dd47d888a2810ed66652cc416905c740f1b297e312e03eaf6751a46058933f116935fed052e25338289d3c44a9369fe49b13ca36498e89ef04f5809e243f9f83189e5a4099145c77296129a46581bba97a6ea15b7a65ec78dafaf96b5adcfca000d3172da78b6030a659a6fed1ad60ec8e8e702680812b8ffb7da0539b27b7107ac5fd65eac2e3c4b31738aca68a2e2012d5cf9867d5bd25f1dfe6303ec42ac90eaa815788eddd7c1f7974be6995ab9e225b776935e81cce61736f94542cc8b0fe61c6265b8e1b84a285fdfcb76c23e0b828bf225961359e7e1714b47c2f114cc2acc124c3ea4f3a2b72724a82896de18e3181f788bd0c5cb7014fa1365c47a25ae0726c9ab2f4446ccfd8c36ac8a6cf3840c6590da15050a739f4f1311d40c5465658f7ad466d55657acb539567e5779c9f7584a92cbfc4c2d5c968d154e6e9811f0ac7d615c650ee6fa3340ccbe539623e7911311170317b1e67ec51940a3011689731f79ba51e75141cde3c4c1d53d92d5b2b5007be460ab5de1894f3f56269af3fd619a42fb8b18bbd20314e08689468897962477c1b1c422cb2d995efe5998f67dc9c8032f5b88aa42059fc210b075aa96fdd4be2f517e00d489c65e7a65ae05b536cee629786e799d48f1d4f22628fa23c0496a227a407a7ca150f26585aaf6201bccc074c388409b85d7710c44c9c112a67ce63782bb2b7bec9dfca84d23323cc9ed4168d91e2e6b33206a08cceca7e20aad31d46693a3a81acb5de10a5f99562bef447b0dd251cbb7da0a3f81466356a37d138465a0de52adda7b185cb8e25a79864af867242a4745cbabd6aa00341fdbdbe52daaa0974876c78bcc5f31e46514b3386e3a185da4c01a7994b9f802204a1a7cc162cc772d51c37532d56e7bd4d3cca84151a7d8c302ce104d88b982a2f7a6e00c83037994f830359a1ea05ad84cdc084657f0ba874728e91271d6f53b1fd23f005fd7d7e53865b879f32c1d8acc69d98f333c540ed6c0742a025ac15c4c73f89875f05f2df12d062d0e65a5c00791dc4368f3070da1e23a6b0e78805aae2a3329e56148ed05c258fa887606f996c79a324c80cd50bf8983c1f014d3de2cec79b9a3728b414b72eea63f7a81525400f1f29c5b384d9e90f471e5bef1b8af707da11cc3c10448c5ad6bd652bcfa6370d5f450e129ff7cc11bfc28c0ebd5ba9ce3ef052504ee1e55f823f6b3c90479fd228dfd093b54e107a12b530d2b28029f2c0093a9549bdd1ee264637d461270eda93013ea27e2d4791f495af690d839522673c350688e5bebe5f41a3ff0080ba5f78509af8272dea54a595fbfef12e68cfe31e09ec233fe367846b6328ebe0d5d3f00b945b4b9b68008c2d7d1cff00979ff0f17dc0859303403a0f9b052056f83d209be4108583255c2fa56656a243473c627da3f33f47c4b62e60e37287759cff00e089ca44ab7cbc4c1f63ea81ae27636196154e703b955b40b1730c03de4ccd5c9707982e2ec510a5a3363b8c14a834c5ff00e0939d5dd51e9e6556d31a987981a91acc410572f98081023c40e6b312ea064562d482e2d01afb4b665af200fe6331a01a3ff060c168a49bc0f5a00655f04a2e1e2c166ccfa90c9d0bc178a122bb634ab571e26453098540fe67209b2db5d6616d259734cc679ab0ff00c2035c34d82990e752933007c56fd880bec12cf03f78aa0276d40e3333561a868d3f1326bd6067959d62e39c12aa105e3ffcc6ffda000c03000001110211000010f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3b968e3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf38dc0fc91ff00bd6ebbce07fcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3ca1ceca4776cbde5e75fcfafcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cb3f225657e383b7a82ff00fa3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cb15ddb854732e255bcffbff00ff003cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3ce15e6c15ec6540aa84357ffcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf024bb11fe88b5d3225b0beff003cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3ce7bbbfec07b49d14112583fb5bcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf13d5f6fdbf09d0022b4b7f7ffcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3ce8e9e517a56661a6b5d8a5c5f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf415adac658317616c8081c65bcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c0d71380b4fa5a381697a95cadfcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c053c13a93e7d81ef8a9e57597bcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c6620271e2a1fa4ae3126e4977fcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cbe8298a2b0539b5c151e8807abcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf743b5d3cb5914cfe56b4dcb53cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2fb616f3dc0c1ab2d5b1327dd28b4f3cf3cf3cf3cf3cf3cf3cf3cf3cf3a8681520420eb2e7751b1dac3376f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf383792f5b5e5459e0181d2b75cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3f95d39ce7920f11ec57011afcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2fb70d8f6ef2e4248a216908bcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3e90a100331db3aada3b6e29dcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf203982f16b5e617d1efbdb0674f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf05c8c781018812f1b51496f29cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cbe9c667800176042ac590cc3bf7f3cf3cf3cf3cf3cf3cf3cf3cf3cf3c3a3f41b1943c7e6f5d5b3a3e2bff003cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c33cf3ceecf8e92c30c7ef7dcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf28189f317bcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cb0c3811bcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cffc400291101010100020202010206030100000000010011213140411051617181205070a1b1c191d1f0e1ffda0008010211013f10fe93e3659fc87235c4ab189f67f07492872cb3e13c82ccf8cf48e24ce7d499d3b848ee36830bba506be59f04bacf61f0f5a5d4452875092fb093f33e4bf588c438bf0b9dcc7643599e167af77b67abf813c8ed276c4f933e34f1fbb9c1eae784160a081b2c33ae6d00f87c8dcc66de2de6e0afd475bd4750030b75c851329e0453a753159f0f8e1ae4e2dd27752d736f11ee265fdec97efe5ccf6caad64718c489fcbe5f188aecdc6ec0839fc476af5c166e1bac770ba772c67880c26e0413277f2f7e368d88730de23ea49d44f277707894bcc786030d24b0604ce2fc4b81bf73dddfc605996918b046f9272cb92c562c174c85ea5e44f99709c9946bf1dbc6145bf49b9849a833fe0b53c5b72c33997b205fb9f77bbf388097996dd4fdf8cb21d6e3cacb1230cee44e48704096f109644c1f508c6e69005a6e2736c318e1e3752d3d4e4c875eadfd8f377df76686538cc4e965e08e62b0c32e0d1bb199c374f184b48e4e25b5d78e2e01f572e4b4091f822285c33ee54b53c65975c59e1d4a7c605e0b76bdc3e88a0b795cc8495c8919c7705e5250320d5ff9fa59382e262e482c688981e286b92ef4fe6465da4e773d39fcc486933bff0099171a95b4edf5ab04d95cac1dc4be88a50de9d4a4724f8af0324c712700f7161e987b593a1cc39cc1f761c3dc60cbb2dbd485c8ae9f770308da0929a65aaf8fd01384e382d8cd92f2c33cca7de41cb023b2e1e586593cc870b0c6ce1903f678e7705cb6de223c786580bb4447397fa8307a872da4479bff00511d73681c42638f09373e97ccf8dd53001ee00f62d359ddbc4864734750d63061c5cf2c9d1908e897640212389d4498f1f79cb56c3089bc5932e1dc336bbbf0017a8a2d8d87ee59e8897b919b842cbc7c96c5248c1ed9a6aaf72c67765ca4672f3fc5e81b00d4ddb897009bf7ff00b9b45395ed87b97af7e3e6904d148fb491d8db6c1fccbd9f706b1e7d4c74c917da0044942e269726092646458f8a469f1065398c3c33a9e3b95604df4cf90c30cea7114c65ee23e0e06186cc75f14ec66f4c83af9429c30fd974f8b50323d92f86e4d61e2d2ee0fccd762d10619e58e58760f5276f2fdae6cd849debe75f76beed5afbf3020fe111c00fd39ff561b8395ff32181dec80edfc8d3b3fde54e3afd7ffb638e7fbcdb9bc7f543ffc40026110101010002020201030501000000000001001121314041105161718191205070b1f0c1ffda0008010111013f10ff0013e96db0ff0060d96d5274d38fe84f680db6fc0f90dbbf1c284fc659b7ed8e2c0e5d626811d423c796fc669647a2c8970d4f19af1eec167a9730ebe4f251dac30e1125d52de129723e4db0039252bdff0040ef90aa0b1d1c7bea782e1caf647dce1cb2b603fd5b108871643f0791c38f83a5f4d9c5cb3ed2e174d655e590252b63f48fbc030396081bf078ec6d37edd968af65f66e4d4b5bf616ff00a400c201addb9c4f5f278e8e06153cda5e2580978db4efa9d40426c74984ca2af07c9d78c9a67c681331fbc61c764b1d96f164012e43e312efc0ce82b67dc66f1174f1b627b9d6cd5d9098c0f6eed0b542e7b4ae6e3ec1e52ba6400c3e0ebc65427236f89b512fce2d239b32274639c3cd85e4f249deb941f5265dc78dcefd5c48fa277a6478eed387d49da600ea4e882ed7bbf109710b5e99868f1f0ede32a0403bb452fc3b23c593d7e6594e647a7370a2ddc174924b80807575892de1d498be3937e009b40e1198d88c65218709bdb1395fb596bea0c5ab07dddfc2003605fb419e32e4f19ea51b8ac17c6001080761fde0c9d7b67fdb7aac28521c2d7a7eb21a59e1d87e567a78ab84eb9fe16debc139b68ebf1fee48cb36733f88eae3fa4067186aba88ed3bb611cc93980e666c011d278e30c89a1fb1f93c54d2754edc1127535aec4cb968632b67e90e53ac88260a881c9128b41eade6e523c5be0ea0c3c7ddd866b75b076f5124d9c95ea5e616e77d7fedc9b9b7ae72392c7230c883d78ed8383e00139750c32c2166f09b60f3ff007b89cd16928342fa93fdc80a1e585e4e6c831c79d1f1fb202f31acc836ae7dce244095da6cf908e026a300274b63bb97e60b9025d9f2267399e317356771deed8e89393ea4f04f32c8287058a2584729f5e8c66e126ef8e74cb5a24a8c75ccd401eb87f4868eac95ab48079e62b575f8946334ed6969c42e3a8c871f1f59b53847625476e4d8b663fc1eac469c5abc73687a5bdc58a2e79b6f318b20969be2f63071f76739b078675264ecb81f5700fe269110c85cfd6d9f01c4adbede2a3b3e95b4e6dec218e6ce073ccb188c97d7c5a38904a4fa8ef8aec8e712d3cb7ab014e2da038b79b0d433e71616161e625dc879dc673d5b95612f5fec67bc11bee61c7fa88e98ff00943fffc4002b10010002010401030403010101010100000100112131415161718191a150b1c1d110e1f0f120609030ffda0008010000013f10ff00f1e53956aaa25a081c8fdd1b915b0be9deaf5ffc29ed4bbbd8ccbaedff00ee7ed3426ed5f2fe228e53fd8116b16ebf77f0942206c469194875a73b8fdfde200822589bff00f01d044acbc065978fb65f80cbf12c82ff0098cbeac70926a1de3f78e6f48e8dd8094ed7ec41b7f6399b5b37a9fe529a6c4ffcb7d867dd7e34f10e30ec3f2710c093446c7ffe044cad14072b3d00629f0fd4b5504080f59708bb63ef7e2e5db074fb99f6a8c75c496beb2f25be401c75efef4c28328d017869cde92e53ecb56f8042c6380a0082f846890ebd2cf98efab09ad0d4e1d1f77ff3ab416b82a2c325309f6687b60c8d942dadf00f684324899ee0ae5949da3f7cb9ee8dfa99f3877e2e20093c7ee108556337bc1e0359de259079053c1ada538696e409923822c26d0efd19724a21b5ad3e13e9ea02a806ac2195480b79d08120730a1f0f4d4c1e3f960165031b3fccff008ab7130c64a0704a6a4c038e3cb00f2d0d02677ca53d710b088307d258455e571c079954206c438781c418a7b1baf2edeb0469e8423c59362d21a072bb11a81dc0b5dc0eaf69aa185d2f22ef11b0447a34d08ebf1fd73fc7f237fcdb7c29dec5faebe56132dc7fddf26b296bc55013a5b8624f3cbd55227d3ce4897781b97ca63ab9b547e13a5baa9b8b04764957d50fde56c6dcc51c3b445e5afa73bda00f6558dcd73110c341548d68f89770c0d1cfbd8fb30bfdb2ff00c8516b58e47694a9eb6db6df92a561757d42ce51bf13318c1ac6017a67598feb580bdbcb6e8ee622af5763c40aef19c5dfcc07602d6da9aabe5fbc6eee1f607dccd2065ae939ce596bfa7d537f6e25664a13ba2d10d9327735ff00c55a37935dc3b353fa84c005b5ba27e9db1c05a86e9ca1752ef2aab9577fe4a4115af9139ff359470ac97c8ddc3fbe2110d02f55305b81698c5bd699b575d0d1e5fee20cc4ff0098bfcc72763ecfeee20845d6906f8711deb7993c25bf689a8ef9e657c2b670fe5d6630aa8d82e8f7dc3ac1cd4eeed1cbf31d5fd4bec0b7f078956815362c5a315af733002c7a7c063e23880acbcd79da3bca7d6ca35ebb5f9814571ff879651b648220f71d5f0bc9f4fa4ce0ef6f283c6fd5ff000e099ba03eb5bc6865be660a754ec8fd849549c37c4ace25c03ec5a5f926637a8eab10a3689f32d0dd7ccdc99bbf30c0f10a49a56662e41c03ecf584603d7fcd7b8042d74961bc7cc57905ab950ec6bce4c7e652a71bcad54c45f79716c63d297fe9a3a43bdb59ecfc7d3d044411c231884259cbd0f4c9e9343894c8f02eacc5262715f44eaf37eb3160254aa0e1f5c40e659f10ca0a8e32abf0c5c2daff001b5d23268c73d3b8afaa77a0fbe62b6ea670af44d8e60f4a8b360e0fe2a0f437ce681db0cb5b62b75fdff18e55ada2d658ad64dcb77a252217ae812de5867a4fbd5ffad28d939e4f5312bfc839391ec71f4fc4852a6896afb60e60388e358e089efcb981ba2ad8370c66f5389582ba8d2ad5bb4461392fdf02a05379a5b18a0e5db1a47680237899796661bb0af5814948f884c900d01b70868c4a2f32e1016eed33d0edea1605c7baa033bafa802dcad7ac0406ab46b5f8fbc7a80ebd20205fcf32daf5027a9ffbbaa369afa1ebf7f3f4fc2e53f35cafb1eb33b2b8bd1ec54b3f0a37139b20fea281a9ba7e62a33b437512610bbb4e1a5f6a1f7940b6e44d2dc4fc4d55c01076882e450db63f716edb03b1dc1c095f98b6cd867e6202bf573cb02d02eeec446cb5ddd7d21fc9680a1ff36814320ed3372deee1aafb3312e29fd498dbe8ed5829e50add8cd5ea61288a3e8e4e3a53ff00186aa111bc8c17468a71dfd70fafd3568b748a6d487826f2f5fb10ba15ab1c5063c97a4c05798d381c9e95ccc34f04b67cff0072f6750b8b861f7250949d317052fe5a8b2bdb175568668de55cb8bc781114397486aced7a116d1411a01a417756e4dfc4040010586f49bc77f373d00d31e602f504796d2fc8aa2dba38856609b5430065c0fc4d3e2de975fe7a4b031285ea5e580f94f314863ddf89e941e2dfe6f954e0dbba4bbd2e15a92ad7a22d45d2e1cd575f4e7202ae0c16befafbc0722c9697da6330535b07f1bfacc044a44edff310196c2fd19c9d8c792a175eff00a99ea0e177a8e51a28fb475e52e7f2865aadd7265809ab9e268616d5e731a577474e5986b7757a9815a046b650b469150a146e9d1958108c280711c1ba3e2c1f680dc2f95f482e391d3ed29001c04c4887235b8216dee2c355699cdf5d40451d0764c3fc561d251a19384c934131a6ef2deafd38d9a1d86ce9faf597a02596c7eca8f0ab175e29fb12d4ca0d7515b96d753db7254ae86f82d5bd3ed29d2c2c61aff05a2648416464b6b7fe2f7b3e86bfa8b49a684a877da0cb5af1eb2445ad6eef2f00169d8111128dd86ef4542415baf43c7ee236959b8381acb129f14657d610260dda8d55bc5c0d4ce16873ea6af51cbb651dd7ff0009ccbf812fc309c5858fd39a6b7a7584828a119a8b5a7dd1b428d32d0a9ee3735a8f29b66aaccfcc5a080ba683a948bafdc9b7c0597bf128bddd2e5e1a1b7bea207c602b46c4c93a7ddfc307ae2dbaf3007781a10e857c42ccb16757758b56bb7fb1c1fc3d8d73fa4bf558cf99a2f232ebcfe903a04d36dbd2366b2c1628c1c5f6d3d66f393809d54ee3ec71a3114044691323fc82fd3e8ff72946f8dcafd3e982f2c05619d6bad655547804968a62cad61dc00af1b9c7aa4b52115771bf9dbd60a1412d109082d0ee3a3e23307c73f217023c855ea3bcd2c564b59d26222ab27065fb46a6e6031cd7dbfa4409b5572ed2907565f3055d074730e7ab3bf6cb9d66fed05806466ec107021ac46dd5694d570422ad5bc684c1d1a32fd437f3a4063aa5bb5f6ca5200e34ac9f6f98ae2df66c94802c1fc24c95ecd7bc0a8ac1d850bd6fef1fe070f70ac73ef7fdbe984f5bcb912980e5551559319d74b7b9a29b54ce922463a0ad1b3d4bee8aec701fefb4062b460df93e20d017d5dc3aff00b9989871b6ceb12c4e4990b1a61dc62ab040ae4142def2d175573fde90d15bb01aaf1051de346dd7894356df8266b5bd2b8ff67d659c5b45e97cf70f33dbc78981df56c4018158c7da2e5d7ad517540aa84765859ae729ed0ca2f4aa7723cd7b2837e77c05b9718a7a11e5f40f884450ecd4355e7ff1aa3c67b8fe3e9843019775d80dd62e84a36beab7f1312a5a8c3984b2a514bec74dc669456d6f8865301a1fecdc899316db0eb508c0e65c267f7156baa85ace239a805986cfc876caa876bfef1357c140fcb077c180fde214b2caced32e93bbff0079f7808507a1cb028177514b9f01cb14a56cd2fd202b49a854f081e0272181df8e875045e36194e06ebfdc73ac1702c0e31a0d6c98be6c5cd9a6e6fc76544407d09db673aad75294d6b6a79d2a52e6c2d652cc5b84de0def72e71c7c24fa60d6cfa9cbe41545ed99ae119a4f27ea18a4abb87c5cb401eb154d6a3b31534895901c2bab1f8a5c9a7e962c8c29370d9f925d56e69c77f334ccd73303b07267426a4d1a1ea2355c8ee04289918f575139cbc621eb2e6ad7a8b718c2ae5ad26659a5376348246d0e379812f564b06e15150df825f11ca20945eaabed1b808d0325e7988bd50175e0dd98a2c022835c375899588299dea6e789d060cbb8d29e5b65bd87cb5ec62024a0bcb89842c227a67da3cc6b4b23433daff1f4c731008dd00b9e0f516a4d0b28e498c47ad94f66cc54205fb17f7898dc7354bb6cc0e956bda6baca60af1474e07a4e59c2b4481b20f05b60e65e0897c918c615b69a9db09874544a6a2de0d39860616cb0d200b5aeff00a94c0e9539bb8ed4bc10c9afc43a705447abb18085b2028a165455c6a75a6ebd042834c9ae407752a6fc13fa2ac6ea66bbcc09baa99cac10e2080506c110036a4304d401516f6cbc00acf25b7f6af78abaca1e4c4c7d635f4d3447223e18cd1ebe0cd5b4965a708e1fbca1302c040fd920023148c5e0f882696078f5ae1848d40819e8bdf12b5ede5cc81668aea0d05ef8960128c70342636c348a89728d37fe08aa2d77e25e2a5b47042ab8a72fcb1d28a1d5e9fef887f122f7bf0c545a2a1c65460901437302fd60f83850aad950c99aa2b12ce3085e47f471080f21060aa6e8d7d23dc0bcd7cf1eb06d1ea155ebb8e4bf135e8e5385bdc008f49a8c658c73143909628d06f9b5fc7d32d0b6c252bb1cd62f8b8e9004166ac74acaca539e7674c314b44e4f5dcde3dbf63efc08f0235a0c9d2dd688b34bc0d407255ad413058c868cb277006d9881c5a5d4c0c4a67cc5da416cbdc008649d6499dcb58f9af887403c10952de891ecdb01d5f72d299e0297e9729b96ca045a50df10f219960404d4bcfc5c570456307077d19f13589391c06c3e7dd99065aed89dfc4316bab52f34e8989812069cba0fd6c89b4564f52836d6c61f4b568dd2f7a3046ec0a350ab6738db7194e0385da3c3a65ef5b1b5bac4529e5a82069f373500d8c8dcceaf7bc4585671a05d1f012cf87eb1f328c0da5c046e68b3068dff00344a69e623705e00e5806940d36788c0738fb910596aa76bda61357c10b6d1f300ba8e576452c54f8e89aa322fb17f64272936a85226d0501246622e70155d1405a5d3f7975f46f21dddb5eb5e218ea2f80d65a8d20098a17a176dcc8979a7f8bc14b447d45f7b869e62a12099126277b694c3d5674607e954b8a8f232fcfca5390e5f005421492a7029c9e1f860612270ba6fe34ae9941e06b66b077b3c24b200e1fc449447cb653682e15161b134f6848b7aef7707a8eca139c315b2b0056bdcb02ae7f8d7b90f795faeb72950d21712e676340f748e16333ea4a96b02861d1559abd5859ba8092ae1adf1a407e647db9a7dea68901b50dcfd42d66b6aacfdd6c40ac8df2faaf2ddaf788d7ddbbd6db5079e5f499b236b259b79b48fa8d553429e9a91e97bff0006a40b8bdbf01af06b8815c956e10f97da767af83e94ec67c81442a7045de00e6000ea5560e078c42eb3a5ece49a3001373fdf79b0a6aef583dd62126a28e2ed8dce993d16150161636357cafb4568c84d385f9ad66081a832e34ee2741c1a2e698d75a4642857ca2a48004daf781096c144af1d1fbabed0dd68aba016b040efaff06f80b0f6e90d366e41f01eac62b143cb010a50b45adca4bc242b2a9d726ae9f676ae5ba80be4a99ea6b52b5e5f3d4bc0a8b0974a9f79aa17aa679de3c35d054f2f81cef0fd2facf387f12d08f325a5f6a3de648ddaea971ec5b392f79de6be1f4ab0549dbb6a44209a5372f48e9282784d48029e81ff0069119ac640d1f798b521a2d398449ec1dcd234526b6a2f99cf837a82eaf0968c4c273ebdcd6eb728bbcec6af1bf1d429281ab4bdfd18c8c08decd2172a82e8cd7528d1ea3360dc86ce95e87de28312718ed035ac14ab97fd715aedda3a3cca76c8dc2d0f300d55eadebe360d63082cd77c9d3c6ee65f5e455732eecb0e2426f457e20a256a2dcbe3880066a557f6941759685872677a89a289546c6aa710a16e33b1ad3e2caf12d110cb8b1abd2bda33d4257cb15bff0074fa53ac45e5607da036ad239b22881dc628a341165eb36aef907ee0f20c0942d8fde08445501a07ec835c17675cfa3f7877100802b431ac35b7d8faa13f30696981ad44a7a55e6a6b50d520f60ad6d30b19401d5d344ece60ab8d1dc99bbed859b1b03e7795459e4cbe61a446aec3e23d611ffaea0d69abb44b5f421bed50577d68b437d5e264053517b01b990520c214dc05ccd4338ae7acbd63612b19d79622598d1c5cedbccd87c1e078095f53568c13adf1d46650fb5965fc90d068ad0641b192ed00b288b605c1e91dff008b0fa51543011d8e4f7c9eb08b0142b2d5763a46a88e0cb006d039788eab6b6db8875a1865cd699028772dc614c81d09af966693430c390d6d4e13c44f67225ea29efaef52d593485a6feb168a6a0aac778c1c805f7afc4a4684e4d3cffb6810dd8d375d3f72f26ce02c944721c9199015026b30323acb5b402ddaa61442098bcb928ea35a1a36237559c6264014d056469702ac5ef2cdcb9cb0b2a957456bbc13d71b803dd3f280a32567130bdd411bb9a05c36a69634b94842d974d7c972c20fba0bee1a7821654683861f86ff008cb6bf43e96968ec063af3f3b4d308619e9dad2621057054d1f75ca06f60acf07318468df08f130c9ab6f48e33f2005ea4b455e33f141a12e98a5b574bbdc65145adbb1dfc3a8230aa239c6b7ccaedad94711cf1f2179e25bb9b514b47823330e177283060835016b02255b198c5f064b0572807b42c14c0636d68375ec801007157402341db5d2c2eefb9b7c8dd0d53be740bc712969554c0859b98a3a2260c350470991399462778552f5a33226f5f262b4a26075e85e35fd4c65e1e14002b8baf589c0b8322940e87e4da06b456987a1d8c95d5c62408f8157f4d621d08d68e0f57ed2a7c5380baf72e63fa29573a39842a73a78e2542d2db647885cbf6a2b51a96564d3e232da78cb7adfe906b9dc9d54c5787135aa32b3693981609bd4ef3f3316859c12f303756508e934d0b743fdca2e8359aa20b394700cfbcbcde835e57f04d0b6d88be21159a8ad01bb3bd59d5ecd6edfe0da5c206e8335dcaa062192d64b8aafcf12d99482722aabfdb440208d19eb8ee27b0e9e61aec53d70f3029fabee05fda0f0535c8abaf391045f85bbfe4a119957b17f3179596d6875f3b3c3cc13aa4d49b0bb4695495d6519077fa619605aad0128edd7040513d5f12b23669caeab1398106ad87ad39d168f6cc3614395eedf69596bc1c07f09fc5cc27ea01392aafda64851a4b2fbadb1b4aa8a0d076ea38598ef583921783402204dc6afd5008d8e083ce4084374d985f0ac019eca5cc405018155d547760bb0d5730952853429a5cae9d869fb1bf8862e7d3988bba18569df6cb42fd6c7a69e9b46a4cd82cae9d997b80980937eb874d614a5d72ee2abc5b5e92feed42de0bf431519729e4387795349c239068adf189653686a0393e6afd62c06982555613c6fd472c0589b9f4baa6b179be8ec76e227cd1cac0e57fc4628e05deaf3054a6d341ab8dd6e534e500f1daaf062503dac05db1d020305e64630599693684d2158ddc65be6ebc56d14aa507cbd1dcb1f2b76812d754c3c3788c32406b34e49484ab0b3fa78611303a2c19b38ee0ee8012a5ddf597c1aa07b58f7cc36562039b623d96b41576b100a0e11d7e65808fdf01ec447cd4cea159088b542a41b59b7b7d21bb70645305ba7c6d16ec706af8a9773d98dc5379abd1f32c3e4781f9f3eb0b483bd451f24cbfaa0ea1254ad66efd4b44ced2a9a67a735e26142c852156f2b6bd7afd29014002d5da59e84b0172ae81dbfb83fcab51dddebf8f32ad206ea35435f4972378eee34f53e2e0002e08006c1a1965a4f3523784fd90a865dd42eaae5d4875e4bd0df2f822d8ef594175b6d7a8f3196e32abd60a738b7788d3a35790c63ed15da5914310eaf3631c788af78e73ef5d40ba502e7747d1a8228ca61ac08e8cc05d957b7dc4a39a25efecca83e642ce47965ce35b7c8f103c7993226ecb7000f474b8c66a4bbdf7156cdb2ecddd97cc43600c0d3d623562cd97bf10d8034320d3e778152de9dca5ea27b4ebc5f28b0f88a39861d06c06d7f1328e84d00528a1589b90cfd02f3768f27f984b0500f81d3f4973c2b469001f8b8318354d5ab43d011eb96605a3b986993aa56e0f9628296c5c03a0c7bbbcada1a66839f7587fc9e30ecc35dcb3c7f6e7d25e81597b54040ae391dfd2326ef6f1886c4302582f63d23124931a0f8d1f89acc02d5e2ee53d3e083b3aac3457b16cfab2a4b1554f959ed2f3a00c3316aa351bbec1bd0607566a0000d89a577ccacc62ad784315a0c93231186d59bb58bf24702a0a8e87e62a2c01cf17f7e6014618996801c429ea2bec7ccd388cf602e029c76d4887cafa431065a95b24790adab41ac3bce9c5e2106074241d2fb99d66d61ea3f0c63355b1e16ff1ef2c03ac0eadcbf8f48c72f56044d44fa47faa857f103500ced85d79896c399e583a0bab6bc876a5cc3d54538b8fcc5ad730f83e25c44aa962ca16f41a7d650c1ef73be6b7d12000425a58fac055711ad220a562442eeb9251d95c96e873e35f3065ff00150e6c9115565d9d03d651107038263ddf6999c1b875d31b6ec10c014772e67a10814530e3c20956946397b82ab57437789590a84aa720e2cc9e91f98415d94f00697ef994ac8302c912a86476d89acfbcb9cd6370a50b95be499adb7e215252402e22065ec970518761888002fb394b8d411cdd9f8b814f54af36d1f01f487f6b141a44dc4d252eb0242bdcb8f6a6c59c535588a545610e3d018382f4ee69a883c10c062bcb4965725cb1b9c59b15929e293e27358be341f6c3e90b68ef299fb2d1f270d991ce73936880070b781e6f6256a835869eb2d68f21ada9f9386391221aa0d20699fcc460c9aa4f066be7c4608a4980e01abbb8b552a22ae96984d2f9c30aa01cad5953eb98a15a7f9157960ad0106a82b3c12b4720a0e62adcc5128af2089ccf5c4c048369d75f31d551156348ec7e162a348128aeacd61c932cf49e4d00a339d9d2002aca02ba03d0f98ae32a1795fd9fc55acd58cd43718ca20b3d5a3e09ea45339652156ba8be386372b1ca2c7cc2d40f083ecdeb3085214ee8bfa6d1506f860f45c3d2cbac267bd752efbbea38fe11e2d5ab7fec3b0669a2cb4ae9e9f68e58cd176b988e9a68d3cb172925b6a1a77e92da8c04cbbd5c4084dab4f2ff0071afc39c45f12c1944daac4f6d48bc2fd3a635bd6fda65c8a361bfc30cbad6331272c5115908f3a6916c20d3803738b966cc6341bab68ae3c8f38156820d4b94558da9a040934c84a43175c19a1e61126acda2e57bcfde14298801341dfcf5de3416d23fed3b8903132002eae65cf5a30bae46b3d1fb92be840cea0bdc01a955f4c712ed77ff002985a2b93b225d90caf29005003a85d8795386ce23021162348f244fe2d03486c6edc63f7f3560676e180a8fa1e80a0c311cd9b01f1aa7b4a61006457c9dc4c4e55203bdae5db09ba227d628cac1e60e40c797a830701a6e1a2dc32bbdc5e3b67a2f66bc1076a916753440118c5f352d18652c16d9ecda5e2d6a0d44baf9235cbe5b4593dd86031b787658bd95739ea1715f68d5e472bb706c13320b0eacf6ef28b483e5cafd2200ce2a15c787a87ded06162077489eb5b7f0aec97654506ca0b595173747563abbb3f97e9a98e60a68d7cca2a0194c6a33de26832828255cbd45e5c4417344d5773b1a1d909da726b1900d911810978360a306f6985709844a46123483d4ad0767da5dcc85560148ea50c284a5529f72986355a96f73f994029baaefab0b5eb1ac7ef1635f85f7b5984610885cbabdd971dc377ad0aa2c5761c144f8432425105778875296f09e79871f722050b4eda68a5e1b2315011626e415958dcaad0982dca06e89617df16466a76113dda655612613416285797a41836ac4a9b85e9f277e9f8c3eb354d8e1ad3de0a43b928eef72de112625d17e8be91422d13afabf702feca00e9f32a4f255d591c6a7074dc6291a087408d5f5f4dc6949e0b2fb7155dc61246307631b51f97c06f2e14d114778ec09c85b402ec2dc19d634a6eaafab0913e20dd06c39365fd4669955e3a98c92aeca59e318f5879012dcd163d636d605b51740cb32d248421c83dc809502262d0f1d657787275653fdf594700ec59ed07758a09ef33f1068abddbc07a8883d5161a8cf349d56e3aae151eaf11cb32bcaa705866b4f4864a1d20dd5e76989961a0aed45abeb107e5b4135b65a336e92fc4352e655e3adde8c45350a5d75052b41e8cf33225341ef1e31cb7005df0af928ac0e3ef16432b5bc6a9ccb8a9e68d5fa8164353296dc2191a11d6d306abfed60aa04c6f35f7fa653ff003afe0b899def0d6b836ed9457d8dd1caa31ab094350f343504b2e5037b03ccbe18acd1b43d387c917c6151e8fe37ff0091eb4d576ad390ee93104d283c8b59050228a1d855fac0e85d959dda777f51c5b4de307825f5d3830460b082c14e250682a8c6a7faa15b05aaf5165e90d24a0bba395c6d28a73feda05a9cb4f15b4b9eb3239c687ee08056361e699f31bd67457974aed8a68c9ca2db7dbe2b7968c9d6c5e42fefdc16bcef3914b5b162cce8650e5bdfdee607b97390655ece605e18054c2d36bd61be925a9159035137dc4a16ab439dc97ae17d93e9b47f453fb7f0ba0907629f287b41856652d1c46ecaf420dd44e61b5e8bf888d41040601fc90da89a2a4d1225997420a2f39edfc4b49a09d7620b871303baede20b04b8345cfb23027da18fd4aa3c09587415e91b9c240d0e495dd494e06fe58503a61506ba99d6a6536e657d6ed0083e0a8a262c1716c9fb80722de0002f6d6e955aac35357d42e6b999636f86a4f83dae6230ee4500e2bb5c710a6439a7799859d533e099b6f52f7a861183a5e822afb53e9f4db880142ca1b7883351da03de8f7666716ae45cdf02f809e0c4c3dc50bd1a45f99860b621da17d4d5a7a0eafa4b8a9b37626ccad1a81cd75ac214082051457f9e6066551d2e8657858f5622ac8356e86a7b4de25ada355ed68f33656c7211080507f2880a608bcb02f2aa471f6260cea9fc1d46890045eabfbbf1280af16edfd970984e459751375d666d67eee0784782591b021356b8c6047ba0517b81423decdb56f0f068dd852cabaaeef51b8f7876fee167074390fdcf132fcfd31b4537148e2dad5de21b93a52df7b990ab2f71f3311840180b0c1821c299d18797596df3bc4275a55539bd1d33c4bbe12daf129e407912b4ad6965a692bad60443dcd2b6f68168a5a6fe1fbbd6291c80cd4a86ed60af4f6e44c059381d20bd1d5c40c2571a6539946404aaea143b7ba2bde68e2967f8cca7730ff2fec7ac6b289dce5b7dcdf87a80b32e6bda2200be41b8820a3ad5c8dcb36d1b97126e00caae5b22da1a602cdd3a47c51684dfb8798bcccad61e734f8fa69066cdbb2cfc301ba8a5a5b65e8a74b8029dbadc2a95590f2949d826e9e20f02a529a3dc01b675a226ab6b6c45263072143d6099f014d04647534b3380e895f720d6541de41c43033b9c792589d6e273268a2d84016aa1608228d62b48dffe314194ca60f222950e325269f10ad598a90a0f7dd8e76f562359b0d7f02d7d63fe2c187b1dc98183a9afd77f497993945f767c833ccdb6599d51b57d6599b172e49b0b2a38e1a023c4d2a0f427468be7e98b5d4d67a7956418f4bb7bea6d360b87bff52e172714dfbca2b52aeaa280ab405acb49ed756f3305450c5b2b14c90d89c25983c56bc34fd7acb62661dcea787e1ea3f844e69f5c7b42434948e9da080276628bc51ac7c8fbaf51a934817ddd461586b6e6620058ad0933dd0a7de01ecece16bcca963e45dc76a00bb2dff63ecf141f13f86121a2cc87845b868e87510ab1056003965e300b06ec38984c3637ab87ed36f62c34bdfe96c5aa43f4efd0b7d233e085ad569ed32bdcd4db56863188508217cefea443064a65556b03ac7ea45253920a81004d290c06b52faac05692aecaf2ee444645b1ee14cd52bd17fb665d2a0d43d62166200ca9b5f304a61da61b69db7169a52d95e60a0334aec4f3fede217629ecc6aca955633af8f10a12860147da2d0c42991c930a9af35f68b16896a67d0c7b306ea7bca2f9b3506c8d186fb46181b84abd5bc44e45de10e206342c3f7afc545b9f87792360ef783f4b67984774405a8a8e6d7e128d90debe268685e745fc0cb0325db984b5937f3282c5b5e6055899de3873ab0480e3a661685ee03462061f737a3c9c46b3a081d6b526d800d96fe205e46a5395c8c18512a85a78fd425011428cb461b2d83c2668507f70c083202fe61ebc4bb6ce3f517746d67335f5e23d4ffb04cb563260b847282299d047b0cc2ac18c732b357b902cb60ebce57861a41c2a509a53d29fefe948a286a0dc5b46db60e4ae7218de5b1268e6aaccf9808c7035702c36b97134c46e0d096d45ce5f68c046eb5d900b58222b1794a4128327517a1f0ae21596aab5609ce16361f98ccbaad5db69d979206a2e54d65fa81c01a77ddc02f1998556070d5dcd32ad6d36db174eb10435a2b5adff00709e5e18371bf7b18821cde156fee09e72caf100dfde04da20ea0b1ea207165c32146842557d016b1a94be14da316a4dc9b7c8fa49959d366e40dbf573301dd0ff00a4654bd57a7bdc6494a9859d35e2312fc6cb772e8a5701b132426c324b5403b5e266eeea6747da0cb3f1c4ad59bf97a42a3050731af9ac05caaaa683882115731cbfb255126cb5e69d6f2fb0f7570d69ee4cdd07a9ac2f51929a03a8bd0ba6096adef861b15c52fce89373a3e8c12ea827a918c8b3961b68189ac4aad588136b29d4ba0135cc233aba1f9942cb0b5a2fc923bcb4cfa57dc7d25b3c8879b57f2c4a81ae52afb954556aec8d0a27189ae5eb556d08041518ccb94cb6b7aca0b29db028c1183099bc4446911e1942c1b85dcb5269c03390607d81d204ae8464e4e650239900dfa419409436764dc66a13a8fd3312660687acc8b4d9659be610585682b989810d1d1605b1e2da56e60bbb36f58e8d88e5c7ea003dad2ecfed0a431ec7f160a0f31504ad967300287a9881b9bc102b9a836bbbd6a3da39c8269ad7debdbe934e00dba9f950b9a3a3b828e3da53797753c2a10b6f4a7cc2e3a45de596d01ba0a480b34b58c57bc6685b017f117dc73f88c0053a0fc4bf1fc38512bae67c9850c01b2929f76241450da9ed17b86b9fea0dabe97384f5ff0059719a7857ea699e21f996b07aafcc008fa83f0cb77e40fc4cd2b281a98664a2db89ca2a39395d659749dcc297a1b541642a04a4d2d84816f5077dc12853576284b844ec257cc3f0aa8feb94b5adf79a7fbf976ca74e12cca2e876838b56b9062adf3f6fa6a088963aca38d61a40f07fed405701acb0c034d16a361ca110beb35baa2d43507763731e9fca0622aa0333ef34f4880f49feabf3308974946ba4ea7b4a9602152c12ff00daca8f5ef5bd5d758bdb57a914b2dec33405e21fe6bf13fc57e27dac9203b7390fde1935d281f566668cd45b60ee0139a4649dd6f06a835de1d2cdb27ccc3bba59db707206d10a6f1ad49fe9f09fede9288eca8cb23537b1f68836b5cb38ac779ffe05685e20de846e8e836b6f2f91109a0b53a9898fb2c19ba825fcbf29d242a240334e16a63c4680123314002e0a750ca7b21c19bae8b3fa9505b03439c838bcb1c0fd1503341ffe05ba6b595ed0a58bf0c2e0d6a25162c65ba8ea385a81bf150a2534dbd9ef99c3539c8c5fa67d62d64aa0dc34f89c2b0005e6168a61a0a3fccc309a388da2816f8254e48c40a343ff00832b8923447596aea5a5eb7ce036cb83795b98d0a2280b1a4f58c0ea976b1a34c26b28431f771567233c378c92d8e860345d1639a8ac5b54a501581cd7da1101b0ba203ea530404a159a75ff00e100870000ca2608b2f22c3ee52a822a55a3a3062e36311c71b5dfcb31f2119d8442a805c0633323c3b706965edeeac4221a82d814d419875b944c50b50001b2cd9fff0031bfffd9, '304642110001 ', 'M8+Cpt+zltZs3QpomFLRjEFCGvI0VGC+jjJzXH32Mtw=', '', '2019-02-19 17:13:44', 0);
INSERT INTO `user_accounts` (`user_ID`, `ulevel_ID`, `user_img`, `user_Name`, `user_Pass`, `user_Email`, `user_Registered`, `user_status`) VALUES
(3, 2, NULL, '304642110002', 'M8+Cpt+zltZs3QpomFLRjEFCGvI0VGC+jjJzXH32Mtw=', '', '2019-02-19 17:21:46', 0),
(4, 1, NULL, 'admin', 'QrUgcNdRjaE74hfEIeThKa/RaqA9N/KpBI+X7VeiyfE=', 'admin@gmail.com', '2019-02-28 16:37:27', 0),
(5, 3, NULL, 'parent', 'sK+bJ3GIl7A9SO6vuD45oK8pw+SP1RllEsy1Y17HClc=', 'parent@gmail.com', '2019-03-18 17:10:48', 0),
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
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`q_ID`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_ID`);

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
  MODIFY `admission_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `q_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
