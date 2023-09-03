-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2023 at 06:00 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`name`, `id`, `password`) VALUES
('admin', 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `sl` int NOT NULL,
  `uname` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `sid` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `university` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `sem1` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `sem2` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `sem3` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `sem4` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `sem5` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `sem6` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `sem7` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `sem8` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `trai_1_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `trai_1_det` text COLLATE utf8mb4_general_ci NOT NULL,
  `trai_2_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `trai_2_det` text COLLATE utf8mb4_general_ci NOT NULL,
  `min_project_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `min_project_det` text COLLATE utf8mb4_general_ci NOT NULL,
  `mega_project_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `mega_project_det` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`sl`, `uname`, `sid`, `university`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`, `trai_1_name`, `trai_1_det`, `trai_2_name`, `trai_2_det`, `min_project_name`, `min_project_det`, `mega_project_name`, `mega_project_det`) VALUES
(4, 'Ranit Roy', '213040', 'TECHNO INDIA UNIVERSITY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'sanskar debnath', '2130401060', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `student_id` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `subject_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `marks_obtained` float NOT NULL,
  `semester` varchar(5) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`student_id`, `subject_name`, `marks_obtained`, `semester`) VALUES
('0381', 'Mathematics_II', 30, '2'),
('0381', 'Physics_II', 20, '2'),
('0381', 'Chemistry_II', 22, '2'),
('0381', 'Object_Oriented_Programming', 25, '2'),
('0381', 'Data_Structures', 37, '2'),
('0381', 'Communication_Skills_II', 24, '2'),
('2130401060', 'Mathematics_I', 40, '1'),
('2130401060', 'Physics_I', 40, '1'),
('2130401060', 'Chemistry_I', 30, '1'),
('2130401060', 'Introduction_to_Programming', 32, '1'),
('2130401060', 'Engineering_Drawing', 32, '1'),
('2130401060', 'Communication_Skills_I', 31, '1'),
('2130401060', 'Mathematics_III', 32, '3'),
('2130401060', 'Computer_Organization_and_Architecture', 33, '3'),
('2130401060', 'Theory_of_Computation', 31, '3'),
('2130401060', 'Operating_Systems', 31, '3'),
('2130401060', 'Database_Management_Systems', 30, '3'),
('2130401060', 'Software_Engineering', 25, '3'),
('2130401060', 'Communication_Skills_III', 28, '3'),
('2130401060', 'Mathematics_IV', 10, '4'),
('2130401060', 'Design_and_Analysis_of_Algorithms', 20, '4'),
('2130401060', 'Compiler_Design', 30, '4'),
('2130401060', 'Computer_Networks', 40, '4'),
('2130401060', 'Artificial_Intelligence', 0, '4'),
('2130401060', 'Web_Technologies', 10, '4'),
('2130401060', 'Communication_Skills_IV', 20, '4'),
('2130401060', 'Research_Project', 50, '8'),
('2130401060', 'Seminar', 50, '8'),
('2130401060', 'Major_Project', 50, '8'),
('2130401060', 'Mathematics_II', 32, '2'),
('2130401060', 'Physics_II', 32, '2'),
('2130401060', 'Chemistry_II', 3, '2'),
('2130401060', 'Object_Oriented_Programming', 2, '2'),
('2130401060', 'Data_Structures', 3, '2'),
('2130401060', 'Communication_Skills_II', 3, '2'),
('543', 'Mathematics_III', 4, '3'),
('543', 'Computer_Organization_and_Architecture', 5, '3'),
('543', 'Theory_of_Computation', 5, '3'),
('543', 'Operating_Systems', 4, '3'),
('543', 'Database_Management_Systems', 1, '3'),
('543', 'Software_Engineering', 1, '3'),
('543', 'Communication_Skills_III', 4, '3');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `sid` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `urn` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `registration` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `branch` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `number` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `course` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `acc_session` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `sid`, `urn`, `registration`, `email`, `branch`, `dob`, `gender`, `address`, `number`, `course`, `acc_session`) VALUES
('sanskar debnath', '2130401060', '123456', '020728 of 2021-2022', 'sanskardebnath2019@gmail.com', 'COMPUTER SCIENCE AND ENGINEERING', '2002-03-10', 'Male', 'south majlishpur', '2130401050', 'BACHELOR IN TECHNOLOGY', '20-24');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int NOT NULL,
  `branch` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `semester` int NOT NULL,
  `subject_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `branch`, `semester`, `subject_name`) VALUES
(1, 'Computer Science', 1, 'Mathematics I'),
(2, 'Computer Science', 1, 'Physics I'),
(3, 'Computer Science', 1, 'Chemistry I'),
(4, 'Computer Science', 1, 'Introduction to Programming'),
(5, 'Computer Science', 1, 'Engineering Drawing'),
(6, 'Computer Science', 1, 'Communication Skills I'),
(7, 'Computer Science', 2, 'Mathematics II'),
(8, 'Computer Science', 2, 'Physics II'),
(9, 'Computer Science', 2, 'Chemistry II'),
(10, 'Computer Science', 2, 'Object Oriented Programming'),
(11, 'Computer Science', 2, 'Data Structures'),
(12, 'Computer Science', 2, 'Communication Skills II'),
(13, 'Computer Science', 3, 'Mathematics III'),
(14, 'Computer Science', 3, 'Computer Organization and Architecture'),
(15, 'Computer Science', 3, 'Theory of Computation'),
(16, 'Computer Science', 3, 'Operating Systems'),
(17, 'Computer Science', 3, 'Database Management Systems'),
(18, 'Computer Science', 3, 'Software Engineering'),
(19, 'Computer Science', 3, 'Communication Skills III'),
(20, 'Computer Science', 4, 'Mathematics IV'),
(21, 'Computer Science', 4, 'Design and Analysis of Algorithms'),
(22, 'Computer Science', 4, 'Compiler Design'),
(23, 'Computer Science', 4, 'Computer Networks'),
(24, 'Computer Science', 4, 'Artificial Intelligence'),
(25, 'Computer Science', 4, 'Web Technologies'),
(26, 'Computer Science', 4, 'Communication Skills IV'),
(27, 'Computer Science', 5, 'Software Project Management'),
(28, 'Computer Science', 5, 'Advanced Computer Networks'),
(29, 'Computer Science', 5, 'Distributed Systems'),
(30, 'Computer Science', 5, 'Information Security'),
(31, 'Computer Science', 5, 'Cloud Computing'),
(32, 'Computer Science', 5, 'Data Mining and Warehousing'),
(33, 'Computer Science', 5, 'Communication Skills V'),
(34, 'Computer Science', 6, 'Mobile Application Development'),
(35, 'Computer Science', 6, 'Internet of Things'),
(36, 'Computer Science', 6, 'Big Data Analytics'),
(37, 'Computer Science', 6, 'Machine Learning'),
(38, 'Computer Science', 6, 'Blockchain Technology'),
(39, 'Computer Science', 6, 'Natural Language Processing'),
(40, 'Computer Science', 6, 'Communication Skills VI'),
(41, 'Computer Science', 7, 'Cyber Security'),
(42, 'Computer Science', 7, 'Robotics'),
(43, 'Computer Science', 7, 'Neural Networks and Deep Learning'),
(44, 'Computer Science', 7, 'Computer Vision'),
(45, 'Computer Science', 7, 'Bioinformatics'),
(46, 'Computer Science', 7, 'High Performance Computing'),
(47, 'Computer Science', 7, 'Communication Skills VII'),
(48, 'Computer Science', 8, 'Research Project'),
(49, 'Computer Science', 8, 'Seminar'),
(50, 'Computer Science', 8, 'Major Project'),
(51, 'Civil Engineering', 1, 'Engineering Mechanics'),
(52, 'Civil Engineering', 1, 'Mathematics-I'),
(53, 'Civil Engineering', 1, 'Physics'),
(54, 'Civil Engineering', 1, 'Chemistry'),
(55, 'Civil Engineering', 1, 'Basic Electrical & Electronics Engineering'),
(56, 'Civil Engineering', 1, 'Introduction to Sustainable Engineering'),
(57, 'Civil Engineering', 2, 'Mathematics-II'),
(58, 'Civil Engineering', 2, 'Fluid Mechanics'),
(59, 'Civil Engineering', 2, 'Building Technology & Materials'),
(60, 'Civil Engineering', 2, 'Engineering Geology'),
(61, 'Civil Engineering', 2, 'Surveying'),
(62, 'Civil Engineering', 2, 'Environmental Science & Engineering'),
(63, 'Civil Engineering', 3, 'Structural Analysis - I'),
(64, 'Civil Engineering', 3, 'Building Planning & Drawing'),
(65, 'Civil Engineering', 3, 'Geotechnical Engineering - I'),
(66, 'Civil Engineering', 3, 'Water Resources Engineering - I'),
(67, 'Civil Engineering', 3, 'Transportation Engineering - I'),
(68, 'Civil Engineering', 3, 'Construction Materials and Management'),
(69, 'Civil Engineering', 4, 'Structural Analysis - II'),
(70, 'Civil Engineering', 4, 'Design of Reinforced Concrete Structures'),
(71, 'Civil Engineering', 4, 'Design of Steel Structures'),
(72, 'Civil Engineering', 4, 'Geotechnical Engineering - II'),
(73, 'Civil Engineering', 4, 'Water Resources Engineering - II'),
(74, 'Civil Engineering', 4, 'Transportation Engineering - II'),
(75, 'Civil Engineering', 5, 'Advanced Structural Analysis'),
(76, 'Civil Engineering', 5, 'Design of Pre-stressed Concrete Structures'),
(77, 'Civil Engineering', 5, 'Design of Masonry Structures'),
(78, 'Civil Engineering', 5, 'Remote Sensing & GIS Applications'),
(79, 'Civil Engineering', 5, 'Environmental Impact Assessment'),
(80, 'Civil Engineering', 5, 'Advanced Construction Technology'),
(81, 'Civil Engineering', 6, 'Finite Element Method'),
(82, 'Civil Engineering', 6, 'Earthquake Resistant Design of Structures'),
(83, 'Civil Engineering', 6, 'Project Planning & Management'),
(84, 'Civil Engineering', 6, 'Advanced Geotechnical Engineering'),
(85, 'Civil Engineering', 6, 'Irrigation Engineering'),
(86, 'Civil Engineering', 6, 'Advanced Transportation Engineering'),
(87, 'Civil Engineering', 7, 'Hydrology and Water Resource Systems'),
(88, 'Civil Engineering', 7, 'Urban Planning and Design'),
(89, 'Civil Engineering', 7, 'Environmental Pollution Control Engineering'),
(90, 'Civil Engineering', 7, 'Advanced Concrete Technology'),
(91, 'Civil Engineering', 7, 'Repair and Rehabilitation of Structures'),
(92, 'Civil Engineering', 7, 'Pavement Design and Management'),
(93, 'Civil Engineering', 8, 'Advanced Foundation Engineering'),
(94, 'Civil Engineering', 8, 'Coastal Engineering'),
(95, 'Civil Engineering', 8, 'Ground Improvement Techniques'),
(96, 'Civil Engineering', 8, 'Advanced Structural Dynamics'),
(97, 'Civil Engineering', 8, 'Infrastructure Planning and Management'),
(98, 'Civil Engineering', 8, 'Professional Ethics and Disaster Management'),
(99, 'Mechanical Engineering', 1, 'Mathematics - I'),
(100, 'Mechanical Engineering', 1, 'Engineering Physics'),
(101, 'Mechanical Engineering', 1, 'Engineering Chemistry'),
(102, 'Mechanical Engineering', 1, 'Basic Electrical Engineering'),
(103, 'Mechanical Engineering', 1, 'Mechanics'),
(104, 'Mechanical Engineering', 1, 'Introduction to Manufacturing Process'),
(105, 'Mechanical Engineering', 2, 'Mathematics - II'),
(106, 'Mechanical Engineering', 2, 'Engineering Drawing'),
(107, 'Mechanical Engineering', 2, 'Applied Thermodynamics'),
(108, 'Mechanical Engineering', 2, 'Strength of Materials'),
(109, 'Mechanical Engineering', 2, 'Introduction to Electronics'),
(110, 'Mechanical Engineering', 2, 'Workshop Practice'),
(111, 'Mechanical Engineering', 3, 'Mathematics - III'),
(112, 'Mechanical Engineering', 3, 'Fluid Mechanics'),
(113, 'Mechanical Engineering', 3, 'Machine Design - I'),
(114, 'Mechanical Engineering', 3, 'Mechanical Measurements and Control'),
(115, 'Mechanical Engineering', 3, 'Material Science and Metallurgy'),
(116, 'Mechanical Engineering', 3, 'Manufacturing Technology - I'),
(117, 'Mechanical Engineering', 4, 'Mathematics - IV'),
(118, 'Mechanical Engineering', 4, 'Thermodynamics'),
(119, 'Mechanical Engineering', 4, 'Machine Design - II'),
(120, 'Mechanical Engineering', 4, 'Heat Transfer'),
(121, 'Mechanical Engineering', 4, 'Industrial Engineering'),
(122, 'Mechanical Engineering', 4, 'Manufacturing Technology - II'),
(123, 'Mechanical Engineering', 5, 'Mechatronics'),
(124, 'Mechanical Engineering', 5, 'Dynamics of Machinery'),
(125, 'Mechanical Engineering', 5, 'Production Planning and Control'),
(126, 'Mechanical Engineering', 5, 'Automobile Engineering'),
(127, 'Mechanical Engineering', 5, 'Finite Element Analysis'),
(128, 'Mechanical Engineering', 5, 'Computer Aided Design'),
(129, 'Mechanical Engineering', 6, 'Refrigeration and Air Conditioning'),
(130, 'Mechanical Engineering', 6, 'Energy Conversion Systems'),
(131, 'Mechanical Engineering', 6, 'Metrology and Quality Control'),
(132, 'Mechanical Engineering', 6, 'Mechatronics and Robotics'),
(133, 'Mechanical Engineering', 6, 'Operations Research'),
(134, 'Mechanical Engineering', 6, 'Elective - I'),
(135, 'Mechanical Engineering', 7, 'Design of Machine Elements'),
(136, 'Mechanical Engineering', 7, 'Power Plant Engineering'),
(137, 'Mechanical Engineering', 7, 'Renewable Energy Sources and Systems'),
(138, 'Mechanical Engineering', 7, 'Industrial Tribology and Maintenance Engineering'),
(139, 'Mechanical Engineering', 7, 'Elective - II'),
(140, 'Mechanical Engineering', 7, 'Elective - III'),
(141, 'Mechanical Engineering', 8, 'Project Work'),
(142, 'Electrical Engineering', 1, 'Mathematics - I'),
(143, 'Electrical Engineering', 1, 'Engineering Physics'),
(144, 'Electrical Engineering', 1, 'Fundamentals of Electrical Engineering'),
(145, 'Electrical Engineering', 1, 'Introduction to Programming in C'),
(146, 'Electrical Engineering', 2, 'Mathematics - II'),
(147, 'Electrical Engineering', 2, 'Engineering Chemistry'),
(148, 'Electrical Engineering', 2, 'Network Analysis and Synthesis'),
(149, 'Electrical Engineering', 2, 'Data Structures and Algorithms'),
(150, 'Electrical Engineering', 3, 'Electromagnetic Theory'),
(151, 'Electrical Engineering', 3, 'Digital Electronics'),
(152, 'Electrical Engineering', 3, 'Control Systems Engineering'),
(153, 'Electrical Engineering', 3, 'Electrical Machines - I'),
(154, 'Electrical Engineering', 4, 'Signals and Systems'),
(155, 'Electrical Engineering', 4, 'Analog and Digital Communication'),
(156, 'Electrical Engineering', 4, 'Power Electronics'),
(157, 'Electrical Engineering', 4, 'Electrical Machines - II'),
(158, 'Electrical Engineering', 5, 'Power System Analysis'),
(159, 'Electrical Engineering', 5, 'Microprocessors and Microcontrollers'),
(160, 'Electrical Engineering', 5, 'Renewable Energy Systems'),
(161, 'Electrical Engineering', 5, 'High Voltage Engineering'),
(162, 'Electrical Engineering', 6, 'Electric Drives'),
(163, 'Electrical Engineering', 6, 'Industrial Automation'),
(164, 'Electrical Engineering', 6, 'Energy Audit and Management'),
(165, 'Electrical Engineering', 6, 'Power System Protection'),
(166, 'Electrical Engineering', 7, 'Advanced Control Systems'),
(167, 'Electrical Engineering', 7, 'Electric Power Quality'),
(168, 'Electrical Engineering', 7, 'Advanced Power Electronics'),
(169, 'Electrical Engineering', 7, 'Smart Grids'),
(170, 'Electrical Engineering', 8, 'Digital Signal Processing'),
(171, 'Electrical Engineering', 8, 'Fuzzy Logic and Neural Networks'),
(172, 'Electrical Engineering', 8, 'Electric Vehicle Technology'),
(173, 'Electrical Engineering', 8, 'Power System Operation and Control');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`uname`),
  ADD UNIQUE KEY `sl` (`sl`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`,`email`,`urn`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `sl` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
