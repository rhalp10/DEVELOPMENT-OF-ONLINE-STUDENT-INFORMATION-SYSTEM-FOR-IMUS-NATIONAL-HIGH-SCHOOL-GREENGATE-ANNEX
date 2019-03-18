-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 06:43 PM
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
-- Table structure for table `record_guardian_details`
--

CREATE TABLE `record_guardian_details` (
  `guardian_ID` int(11) UNSIGNED NOT NULL,
  `guardian_FName` int(11) NOT NULL,
  `guardian_MName` int(11) NOT NULL,
  `guardian_LName` int(11) NOT NULL,
  `suffix_ID` int(11) UNSIGNED DEFAULT NULL,
  `rsd_ID` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_guardian_details`
--

INSERT INTO `record_guardian_details` (`guardian_ID`, `guardian_FName`, `guardian_MName`, `guardian_LName`, `suffix_ID`, `rsd_ID`) VALUES
(1, 0, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `record_student_address`
--

CREATE TABLE `record_student_address` (
  `rsa_ID` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `record_student_attendance`
--

CREATE TABLE `record_student_attendance` (
  `attendR_ID` int(11) UNSIGNED NOT NULL,
  `attendR_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `person_ID` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_student_attendance`
--

INSERT INTO `record_student_attendance` (`attendR_ID`, `attendR_time`, `person_ID`) VALUES
(1, '2019-01-21 06:53:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `record_student_contact`
--

CREATE TABLE `record_student_contact` (
  `rsc_ID` int(11) UNSIGNED NOT NULL COMMENT 'contact_ID',
  `rsd_ID` int(11) UNSIGNED DEFAULT NULL COMMENT 'student_ID',
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
  `user_ID` int(11) UNSIGNED DEFAULT NULL,
  `rsd_LRN` varchar(25) NOT NULL,
  `rsd_FName` varchar(85) NOT NULL,
  `rsd_MName` varchar(85) NOT NULL,
  `rsd_LName` varchar(85) NOT NULL,
  `suffix_ID` int(11) UNSIGNED DEFAULT NULL,
  `rsd_Sex` int(11) DEFAULT NULL,
  `user_status` int(11) UNSIGNED DEFAULT '0',
  `religion_ID` int(11) UNSIGNED DEFAULT NULL,
  `ethnic_ID` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_student_details`
--

INSERT INTO `record_student_details` (`rsd_ID`, `user_ID`, `rsd_LRN`, `rsd_FName`, `rsd_MName`, `rsd_LName`, `suffix_ID`, `rsd_Sex`, `user_status`, `religion_ID`, `ethnic_ID`) VALUES
(1, 2, '19874546', 'Sample 1', 'Sample 1', 'Sample 1', NULL, 1, 1, 1, 1),
(2, 3, '19874548', 'Sample 1', 'Sample 1', 'Sample 1', NULL, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `record_teacher_detail`
--

CREATE TABLE `record_teacher_detail` (
  `rtd_ID` int(11) UNSIGNED NOT NULL,
  `rtd_EmpID` varchar(25) NOT NULL,
  `rtd_FName` varchar(85) NOT NULL,
  `rtd_MName` varchar(85) NOT NULL,
  `rtd_LName` varchar(85) NOT NULL,
  `suffix_ID` int(11) UNSIGNED DEFAULT NULL,
  `rsd_Sex` int(11) UNSIGNED DEFAULT NULL,
  `religion_ID` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(4, 'Teacher'),
(5, 'Guest');

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
-- Table structure for table `semester_subject`
--

CREATE TABLE `semester_subject` (
  `semester_ID` int(11) UNSIGNED NOT NULL,
  `subject_parameter` mediumtext COMMENT 'list of subject in the whole semester',
  `semester_start` date NOT NULL,
  `semester_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester_subject`
--

INSERT INTO `semester_subject` (`semester_ID`, `subject_parameter`, `semester_start`, `semester_end`) VALUES
(1, '{\r\n  \"subject_list\": [\r\n    {\r\n      \"subject_ID\": \"1\",\r\n      \"subject_Name\": \"Mother Tongue\",\r\n      \"Abbreviation\": null\r\n    },\r\n    {\r\n      \"subject_ID\": \"2\",\r\n      \"subject_Name\": \"Filipino\",\r\n      \"Abbreviation\": null\r\n    },\r\n    {\r\n      \"subject_ID\": \"3\",\r\n      \"subject_Name\": \"English\",\r\n      \"Abbreviation\": null\r\n    },\r\n    {\r\n      \"subject_ID\": \"4\",\r\n      \"subject_Name\": \"Mathematics\",\r\n      \"Abbreviation\": null\r\n    },\r\n    {\r\n      \"subject_ID\": \"5\",\r\n      \"subject_Name\": \"Science\",\r\n      \"Abbreviation\": null\r\n    },\r\n    {\r\n      \"subject_ID\": \"6\",\r\n      \"subject_Name\": \"Araling Panlipunan\",\r\n      \"Abbreviation\": null\r\n    },\r\n    {\r\n      \"subject_ID\": \"7\",\r\n      \"subject_Name\": \"EPP\",\r\n      \"Abbreviation\": \"Edukasyong Pantahanan at Pangkabuhayan\"\r\n    },\r\n    {\r\n      \"subject_ID\": \"8\",\r\n      \"subject_Name\": \"MAPEH\",\r\n      \"Abbreviation\": \"Music,Arts,Physical Education,Health\"\r\n    },\r\n    {\r\n      \"subject_ID\": \"9\",\r\n      \"subject_Name\": \"TLE\",\r\n      \"Abbreviation\": \"Technology and Livelihood Education\"\r\n    }\r\n  ]\r\n}', '2019-02-01', '2020-02-01'),
(2, '{\r\n  \"subject_list\": [\r\n    {\r\n      \"subject_ID\": \"1\",\r\n      \"subject_Name\": \"Mother Tongue\",\r\n      \"Abbreviation\": null\r\n    },\r\n    {\r\n      \"subject_ID\": \"2\",\r\n      \"subject_Name\": \"Filipino\",\r\n      \"Abbreviation\": null\r\n    },\r\n    {\r\n      \"subject_ID\": \"3\",\r\n      \"subject_Name\": \"English\",\r\n      \"Abbreviation\": null\r\n    },\r\n    {\r\n      \"subject_ID\": \"4\",\r\n      \"subject_Name\": \"Mathematics\",\r\n      \"Abbreviation\": null\r\n    },\r\n    {\r\n      \"subject_ID\": \"5\",\r\n      \"subject_Name\": \"Science\",\r\n      \"Abbreviation\": null\r\n    },\r\n    {\r\n      \"subject_ID\": \"6\",\r\n      \"subject_Name\": \"Araling Panlipunan\",\r\n      \"Abbreviation\": null\r\n    },\r\n    {\r\n      \"subject_ID\": \"7\",\r\n      \"subject_Name\": \"EPP\",\r\n      \"Abbreviation\": \"Edukasyong Pantahanan at Pangkabuhayan\"\r\n    },\r\n    {\r\n      \"subject_ID\": \"8\",\r\n      \"subject_Name\": \"MAPEH\",\r\n      \"Abbreviation\": \"Music,Arts,Physical Education,Health\"\r\n    },\r\n    {\r\n      \"subject_ID\": \"9\",\r\n      \"subject_Name\": \"TLE\",\r\n      \"Abbreviation\": \"Technology and Livelihood Education\"\r\n    }\r\n  ]\r\n}', '2020-02-01', '2021-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `user_ID` bigint(20) UNSIGNED NOT NULL,
  `ulevel_ID` tinyint(11) UNSIGNED DEFAULT NULL COMMENT 'user level',
  `user_Name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_Pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_Registered` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`user_ID`, `ulevel_ID`, `user_Name`, `user_Pass`, `user_Email`, `user_Registered`, `user_status`) VALUES
(1, 1, 'rhalp10', '$P$BCAA1YEnm0BZ.DJ2X/cXEil0XJcfVM0', 'rhalpdarrencabrera@gmail.com', '2018-10-20 00:58:10', 1),
(2, 2, '19874546', 'XnCOFXzvzFGHXS/GZ5kVEZ9PAE2N+oCeqydK87yGuwo=', '', '2019-02-19 17:13:44', 0),
(3, 2, '19874548', 'Yl1K09d95jpJ1DheIeAi/61UUccd9tATJ9GKkAXiAX8=', '', '2019-02-19 17:21:46', 0),
(4, 1, 'admin', 'QrUgcNdRjaE74hfEIeThKa/RaqA9N/KpBI+X7VeiyfE=', 'admin@gmail.com', '2019-02-28 16:37:27', 0),
(5, 3, 'parent', 'sK+bJ3GIl7A9SO6vuD45oK8pw+SP1RllEsy1Y17HClc=', 'parent@gmail.com', '2019-03-18 17:10:48', 0),
(6, 1, '123456', 'M8+Cpt+zltZs3QpomFLRjEFCGvI0VGC+jjJzXH32Mtw=', 'student@gmail.com', '2019-03-18 17:11:32', 0),
(7, 4, 'teacher', '6Bgzqn4mnCPjx432mpfOVbU87Mi3sy29KRe8A1l+2X0=', 'teacher@gmail.com', '2019-03-18 17:23:29', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guide_for_rating`
--
ALTER TABLE `guide_for_rating`
  ADD PRIMARY KEY (`gfr_ID`),
  ADD UNIQUE KEY `gfr_Char` (`gfr_Char`);

--
-- Indexes for table `page_content`
--
ALTER TABLE `page_content`
  ADD PRIMARY KEY (`page_ID`),
  ADD UNIQUE KEY `page_title` (`page_title`);

--
-- Indexes for table `record_guardian_details`
--
ALTER TABLE `record_guardian_details`
  ADD PRIMARY KEY (`guardian_ID`);

--
-- Indexes for table `record_student_address`
--
ALTER TABLE `record_student_address`
  ADD PRIMARY KEY (`rsa_ID`);

--
-- Indexes for table `record_student_attendance`
--
ALTER TABLE `record_student_attendance`
  ADD PRIMARY KEY (`attendR_ID`);

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
-- Indexes for table `ref_school_level`
--
ALTER TABLE `ref_school_level`
  ADD PRIMARY KEY (`slvl_ID`);

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
-- Indexes for table `semester_subject`
--
ALTER TABLE `semester_subject`
  ADD PRIMARY KEY (`semester_ID`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`user_ID`),
  ADD KEY `user_login_key` (`user_Name`),
  ADD KEY `user_email` (`user_Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guide_for_rating`
--
ALTER TABLE `guide_for_rating`
  MODIFY `gfr_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `page_content`
--
ALTER TABLE `page_content`
  MODIFY `page_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `record_student_attendance`
--
ALTER TABLE `record_student_attendance`
  MODIFY `attendR_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `record_student_contact`
--
ALTER TABLE `record_student_contact`
  MODIFY `rsc_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'contact_ID', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `record_student_details`
--
ALTER TABLE `record_student_details`
  MODIFY `rsd_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
-- AUTO_INCREMENT for table `ref_suffixname`
--
ALTER TABLE `ref_suffixname`
  MODIFY `suffix_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `ref_user_level`
--
ALTER TABLE `ref_user_level`
  MODIFY `ulevel_ID` tinyint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `room_section`
--
ALTER TABLE `room_section`
  MODIFY `rs_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semester_subject`
--
ALTER TABLE `semester_subject`
  MODIFY `semester_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `user_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
