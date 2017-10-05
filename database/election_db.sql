-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2017 at 06:50 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_table`
--

CREATE TABLE `candidate_table` (
  `candidate_id` int(10) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `achievement` varchar(5000) NOT NULL,
  `platforms` varchar(5000) NOT NULL,
  `position_code` int(10) NOT NULL,
  `party_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_table`
--

INSERT INTO `candidate_table` (`candidate_id`, `student_id`, `achievement`, `platforms`, `position_code`, `party_id`) VALUES
(1, '14-037-027', 'expert in lol\r\nexpert in csgo\r\nexpert in dota 2\r\nexpert in battle realms\r\nexpert in dragon nest', 'free aircon sa hallway', 1, 1),
(2, '14-037-011', '1 kdrama in 1 day', 'korean subject in tup', 2, 1),
(3, '14-037-010', '0', 'hair color', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `college_table`
--

CREATE TABLE `college_table` (
  `college_code` varchar(50) NOT NULL,
  `CollegeName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_table`
--

INSERT INTO `college_table` (`college_code`, `CollegeName`) VALUES
('CAFA', 'College of Architecture and Fine Arts'),
('CIE', 'College of Industrial Education'),
('CIT', 'College of Industrial Technology'),
('CLA', 'College of Liberal Arts'),
('COE', 'College of Engineering'),
('COS', 'College of Science');

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `Course_Code` varchar(50) NOT NULL,
  `CourseName` varchar(150) NOT NULL,
  `College_Code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`Course_Code`, `CourseName`, `College_Code`) VALUES
('BFA', 'Bachelor of Fine Arts', 'CAFA'),
('BSCS', 'Bachelor of Science in Computer Science', 'COS'),
('BSEM', 'Bachelor of Science in Entrepreneurial Management', 'CLA'),
('BSFT', 'Bachelor of Science in Food Technology', 'CIT'),
('BSIT', 'Bachelor of Science in Information Technology', 'COS');

-- --------------------------------------------------------

--
-- Table structure for table `election_status_table`
--

CREATE TABLE `election_status_table` (
  `ElecStatus_ID` int(10) NOT NULL,
  `Election_Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election_status_table`
--

INSERT INTO `election_status_table` (`ElecStatus_ID`, `Election_Status`) VALUES
(1, 'Building'),
(2, 'Scheduled'),
(3, 'Running'),
(4, 'Completed'),
(5, 'Archived');

-- --------------------------------------------------------

--
-- Table structure for table `election_table`
--

CREATE TABLE `election_table` (
  `Election_ID` int(10) NOT NULL,
  `Elec_Title` varchar(250) NOT NULL,
  `Elec_Description` varchar(500) NOT NULL,
  `ElecStatus_ID` int(10) NOT NULL DEFAULT '1',
  `StartDate` varchar(100) NOT NULL,
  `EndDate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election_table`
--

INSERT INTO `election_table` (`Election_ID`, `Elec_Title`, `Elec_Description`, `ElecStatus_ID`, `StartDate`, `EndDate`) VALUES
(1, 'University Student Government Election', 'USG Election 2018', 1, '2017-09-21 08:00:00', '2017-09-23 08:00:00'),
(2, 'Compass Election', 'Compass Election 2018', 2, '2017-09-24 07:00:00', '2017-09-25 07:00:00'),
(3, 'COOP Election', 'COOP Election 2018', 3, '2017-09-25 10:00:00', '2017-09-29 23:00:00'),
(4, 'Election of the Century', 'Ano nauna Itlog o Manok', 5, '2017-09-25 00:00:00', '2017-09-28 00:00:00'),
(10, 'USG Election', 'University Student Government TUP-Manila Election', 1, '2030', '2018/02/23'),
(30, 'USG Election', 'University Student Government Election 2018', 1, '2018/02/22 00:00:00', '2018/02/23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'Star Guardian', 'Ezreal', 'Gay'),
(2, 'Star Guardian', 'Syndra', 'Awesome'),
(3, 'Project', 'project', 'Zed'),
(4, 'ad', 'ad', 'asd'),
(5, 'test', 'test', 'test'),
(6, 'test', 'test', 'test'),
(7, 'test', 'test', 'test'),
(8, 'test', 'test', 'test'),
(9, 'test', 'test', 'test'),
(10, 'test', 'test', 'test'),
(11, 'wtest', 'wtest', 'wtest'),
(12, 'create', 'create', 'create'),
(13, 'test13', 'test13', 'test13');

-- --------------------------------------------------------

--
-- Table structure for table `voter_table`
--

CREATE TABLE `voter_table` (
  `Voter_ID` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleInitial` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Course_Code` varchar(50) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter_table`
--

INSERT INTO `voter_table` (`Voter_ID`, `FirstName`, `MiddleInitial`, `LastName`, `Course_Code`, `Email`, `Password`) VALUES
('11', 'test123', 'test', 'test', 'Bachelor of Science in Information Technology', 'test', 'test'),
('12345', 'test123', 'test', 'test', 'BFA', 'test123', 'test'),
('123456', 'test', 'testtt', 'test', 'BSIT', 'testt', 'test'),
('14-037-011', 'Monique', 'R', 'Eusebio', 'BSIT', 'moniqueeusebio12@gmail.com', 'w@rpT3N!'),
('14-037-012', 'Loise Jiele', 'P', 'Tan', 'BSIT', 'loisejiele@gmail.com', 'w@rpT3N!'),
('14-037-027', 'Robert John ', 'J', 'Dela Cruz', 'BSIT', 'rj.dc15@gmail.com', 'w@rpT3N!');

-- --------------------------------------------------------

--
-- Table structure for table `vote_table`
--

CREATE TABLE `vote_table` (
  `Vote_ID` int(10) NOT NULL,
  `Voter_ID` varchar(100) NOT NULL,
  `Date_Time_Voted` varchar(100) NOT NULL DEFAULT 'Abstention',
  `Election_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote_table`
--

INSERT INTO `vote_table` (`Vote_ID`, `Voter_ID`, `Date_Time_Voted`, `Election_ID`) VALUES
(1, '14-037-027', 'Feb 20 2017: 10:51:55', 1),
(2, '14-037-027', 'Feb 20 2017: 10:51:55', 2),
(4, '14-037-011', 'Feb 20 2017: 11:01:34', 1),
(5, '14-037-011', 'Feb 20 2017: 11:01:34', 3),
(6, '14-037-010', 'Feb 20 2017: 11:05:41', 1),
(7, '14-037-027', 'Abstention', 1),
(8, '14-037-011', 'Abstention', 1),
(9, '14-037-012', 'Abstention', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `candidate_table`
--
ALTER TABLE `candidate_table`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `college_table`
--
ALTER TABLE `college_table`
  ADD PRIMARY KEY (`college_code`);

--
-- Indexes for table `course_table`
--
ALTER TABLE `course_table`
  ADD PRIMARY KEY (`Course_Code`);

--
-- Indexes for table `election_status_table`
--
ALTER TABLE `election_status_table`
  ADD PRIMARY KEY (`ElecStatus_ID`);

--
-- Indexes for table `election_table`
--
ALTER TABLE `election_table`
  ADD PRIMARY KEY (`Election_ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `voter_table`
--
ALTER TABLE `voter_table`
  ADD PRIMARY KEY (`Voter_ID`);

--
-- Indexes for table `vote_table`
--
ALTER TABLE `vote_table`
  ADD PRIMARY KEY (`Vote_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate_table`
--
ALTER TABLE `candidate_table`
  MODIFY `candidate_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `election_status_table`
--
ALTER TABLE `election_status_table`
  MODIFY `ElecStatus_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `election_table`
--
ALTER TABLE `election_table`
  MODIFY `Election_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `vote_table`
--
ALTER TABLE `vote_table`
  MODIFY `Vote_ID` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
