-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 02:10 PM
-- Server version: 11.5.2-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(155) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'shubhi', 'shubhi@gmail.com', '1313');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `course_desc` text NOT NULL,
  `course_author` varchar(255) NOT NULL,
  `course_duration` text NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_org_price` int(11) NOT NULL,
  `course_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_author`, `course_duration`, `course_price`, `course_org_price`, `course_img`) VALUES
(8, 'React', 'this is  best course for 2024', 'Sudesh Sahil', '10 days', 700, 1500, '../images/course_img/react.jpg'),
(9, 'Python', 'this is best skill', 'Arunay Mahesh', '10 days', 200, 1500, '../images/course_img/python.webp'),
(11, 'Django', 'This is a python framework for web development', 'Arunay Mahesh', '1 month', 700, 2000, '../images/course_img/dj.png'),
(12, 'PHP', 'Best for web development', 'Sudesh Sahil', '10 days', 700, 2000, '../images/course_img/php.jpg'),
(13, 'JAVA', 'learn java programming', 'Arunay Mahesh', '2 month', 460, 3900, '../images/course_img/java.jpg'),
(14, 'Bootstrap', 'best frontend framework', 'Sudesh Sahil', '10 days', 200, 1200, '../images/course_img/boot.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_content` text NOT NULL,
  `stu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_content`, `stu_id`) VALUES
(1, 'This is best plateform for skilled in technology', 8),
(2, 'better than offline', 5),
(4, 'best plateform', 9),
(5, 'good facility', 8),
(6, 'this is best plateform for online study. They will give lots of assignment so that you can feel confident about your skills you got or you learned from here, i really enjoy this course', 9);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` text NOT NULL,
  `lesson_desc` text NOT NULL,
  `lesson_link` text NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES
(1, 'introduction of react', 'cover basic react', '../lessionvid/banvid.mp4', 8, 'React'),
(2, 'introduction of python', 'basic python', '../lessionvid/banvid.mp4', 9, 'Python'),
(3, 'react routing', 'react routing cover', '../lessionvid/banvid.mp4', 8, 'React');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `occupation` text NOT NULL,
  `stu_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`, `occupation`, `stu_image`) VALUES
(5, 'aman', 'aman@gmail.com', '$2y$10$Cn7AbljVyU/.l0lbw4YzPO3p5nn.oMNpJBukLgK4F84XqZ.2BSYOy', 'web designing', '../images/stu_img/user-1.jpg'),
(8, 'karan', 'karan@gmail.com', '$2y$10$2kyqNtKzsXUtjvH2NVkXvO0fCr3/vZXeeWhttqM2bpFaLBYwoAt.C', 'web dev', '../images/stu_img/react.jpg'),
(9, 'vinay', 'vinay@gmail.com', '$2y$10$Ryo7iaIssnPa9c6XoWoMW.5VotjjyCSPjpB0aDnWtDB//5qeod7XC', 'web dev', '../images/stu_img/user-icon.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
