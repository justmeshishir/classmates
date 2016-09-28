-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2015 at 10:58 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `classmates`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE IF NOT EXISTS `tbl_answer` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cmsuser`
--

CREATE TABLE IF NOT EXISTS `tbl_cmsuser` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cmsuser`
--

INSERT INTO `tbl_cmsuser` (`id`, `username`, `password`) VALUES
(1, 'shishir', 'ccr1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_college`
--

CREATE TABLE IF NOT EXISTS `tbl_college` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `contact` int(11) NOT NULL,
  `website` text NOT NULL,
  `faculties` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_college`
--

INSERT INTO `tbl_college` (`id`, `name`, `location`, `contact`, `website`, `faculties`) VALUES
(1, 'Asia College of Higher Studies', 'Dhodidhara, Ktahmandu', 4438566, 'www.achsnepal.com', 'BSc CSIT'),
(3, 'Trinity International College', 'Dillibazar, Kathmandu', 4451614, 'www.trinitynepal.com', 'BSc, BSc CSIT, BBA'),
(5, 'Texas College', 'Mitrapark, Kathmandu', 4471776, '', 'BBA, BBS, BSW, BSc CSIT'),
(6, 'Bajra International COllege', 'Jorpati, Kathmandu', 4551155, 'www.bajracollege.edu.np', 'BBA, BBS, BIT'),
(7, 'Amrit Science College (ASCOL)', 'Lainchawr, Kathmandu', 434421, 'www.ascol.edu.np', 'BSc, BSc CSIT, BBA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discussion`
--

CREATE TABLE IF NOT EXISTS `tbl_discussion` (
  `id` int(11) NOT NULL,
  `created_by` text NOT NULL,
  `member` text NOT NULL,
  `created_date` datetime NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE IF NOT EXISTS `tbl_image` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `photo_thumb` varchar(100) NOT NULL,
  `photo_large` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`id`, `user_id`, `photo_thumb`, `photo_large`) VALUES
(1, 2, '2_thumb.jpg', '2.jpg'),
(2, 3, '3_thumb.jpg', '3.jpg'),
(3, 4, '4_thumb.jpg', '4.jpg'),
(4, 5, '5_thumb.jpg', '5.jpg'),
(6, 7, '7_thumb.jpg', '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_qa`
--

CREATE TABLE IF NOT EXISTS `tbl_qa` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_qa`
--

INSERT INTO `tbl_qa` (`id`, `question`, `answer`, `user_id`) VALUES
(4, 'fcscsdczzx xvx', 'dugfduyfvgdygdfygfdyvgfyv', 2),
(5, 'Who is Robin?', 'He is a Handsome man With good sense of humor', 2),
(6, 'uufuygfsyudfgsydfgyf', 'ghsdc gsdvgcdsv cghds vcgsdcvgsdhcvhgdsvcgsdh', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE IF NOT EXISTS `tbl_questions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_remembers`
--

CREATE TABLE IF NOT EXISTS `tbl_remembers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE IF NOT EXISTS `tbl_test` (
  `id` int(11) NOT NULL,
  `test_uploaded_by` text NOT NULL,
  `total_marks` int(11) NOT NULL,
  `obtained_marks` int(11) NOT NULL,
  `test_given_by` text NOT NULL,
  `test_given_date` datetime NOT NULL,
  `faculty` text NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upload`
--

CREATE TABLE IF NOT EXISTS `tbl_upload` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `upload` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_upload`
--

INSERT INTO `tbl_upload` (`id`, `user_id`, `description`, `upload`, `type`, `size`) VALUES
(3, 2, 'cjvsdjhcvjhsac', '89819-shishir_lab1.pdf', 'applicatio', 292653),
(4, 2, 'hello hi', '57724-Introduction_of_Management-_DAY_04.pptx', 'applicatio', 87853),
(5, 2, 'khvhasjvcas', '61026-Introduction_of_Management-_DAY_04.pptx', 'applicatio', 87853);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL,
  `type` enum('student','teacher') NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Gender` enum('male','female') NOT NULL,
  `college` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `type`, `fullname`, `email`, `username`, `password`, `Gender`, `college`, `faculty`, `phone`, `image`) VALUES
(2, 'teacher', 'adele', 'adele@yahoo.com', 'adele', 'adele', 'female', 'ACHS college', 'BSc.CSIT', 1234, ''),
(3, 'student', 'samir lama', 'samir@yahoo.com', 'samir', 'samir', 'male', 'ACHS college', 'BSc.CSIT', 12343, ''),
(4, 'student', 'abc', 'abc@gmail.com', 'abc', 'abc', 'male', 'ACHS college', 'BSc.CSIT', 2147483647, ''),
(5, 'student', 'basanta thapa', 'dudekush@yahoo.com', 'basanta', 'basanta', 'male', 'St. Xavier college', 'BSc.CSIT', 2147483647, ''),
(7, 'student', 'rabin', 'rabin.gaire@yahoo.com', 'rabin', 'rabin', 'male', 'ACHS college', 'BSc.CSIT', 12321434, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cmsuser`
--
ALTER TABLE `tbl_cmsuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_college`
--
ALTER TABLE `tbl_college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_discussion`
--
ALTER TABLE `tbl_discussion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_qa`
--
ALTER TABLE `tbl_qa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_remembers`
--
ALTER TABLE `tbl_remembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_upload`
--
ALTER TABLE `tbl_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_college`
--
ALTER TABLE `tbl_college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_discussion`
--
ALTER TABLE `tbl_discussion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_qa`
--
ALTER TABLE `tbl_qa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_remembers`
--
ALTER TABLE `tbl_remembers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_upload`
--
ALTER TABLE `tbl_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
