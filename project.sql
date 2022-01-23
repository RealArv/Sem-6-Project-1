-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 23, 2022 at 07:32 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'arvind', 'arv@gmail.com', 'arv', 'test'),
(2, 'vipin', 'vipinoom@lol.com', 'vipinsa', 'belle'),
(5, 'anuroop', 'whitefang@qwe', 'whitefang', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

DROP TABLE IF EXISTS `demo`;
CREATE TABLE IF NOT EXISTS `demo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(333) NOT NULL,
  `password` varchar(333) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `password`) VALUES
(8, 'Arvind', 'arv'),
(9, 'Vipin', 'vip');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(500) NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`) VALUES
(7, 'Arvind', 'arvindmenon0103@gmail.com', 'Love the app\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `form2`
--

DROP TABLE IF EXISTS `form2`;
CREATE TABLE IF NOT EXISTS `form2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `lecture` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `bday` varchar(200) NOT NULL,
  `hours` varchar(200) NOT NULL,
  `about` varchar(200) NOT NULL,
  `quiz` varchar(200) NOT NULL,
  `goal1` varchar(300) NOT NULL,
  `goal2` varchar(300) NOT NULL,
  `publish_date` varchar(200) NOT NULL,
  `author` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name_file` varchar(200) NOT NULL,
  `verified` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `downloads` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `form2`
--

INSERT INTO `form2` (`id`, `name`, `lecture`, `email`, `phone`, `subject`, `bday`, `hours`, `about`, `quiz`, `goal1`, `goal2`, `publish_date`, `author`, `name_file`, `verified`, `size`, `downloads`) VALUES
(34, 'Psychology in animals', '4', 'gerrard87@hotmail.com', '9578365332', 'Biology', '2016-05-17', '10-20', 'I like animals and I like psychology. I think you can fill in the blanks.', 'No', 'You will know about animal behaviour', 'Understand psychology to an extent ', '12/10/2015', 'Arvind', 'Unravel - E Minor - MN0191735.pdf', 'NO', '1624378', '20'),
(46, 'DNA fingerprinting', '12', 'vipi@123.com', '8778665456', 'Biology', '1987-07-03', 'Below 10', 'Love Biology', 'No', 'You will know the basics of DNA fingerprinting', '', '18-01-2022', 'Arvind', 'Arvind.pdf', 'NO', '73339', '0'),
(39, 'Metaverse basics', '10', 'jos12@gmail.com', '9625272765', 'Maths', '2019-07-19', '20-30', 'Demo', 'No', 'Basics of Metaverse', '', '17-01-2022', 'Joseph', 'Arvind.pdf', 'NO', '73339', '3'),
(47, 'Aerodynamics for class 12th', '11', 'anuroop@123.com', '9262722456', 'Physics', '1992-06-17', '10-20', 'Love to share', 'No', 'Aerodynamics basics', '', '18-01-2022', 'Arvind', 'FRONT SHEET.pdf', 'NO', '92230', '0');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `f_name`, `username`, `password`) VALUES
(1, 'Arvind', 'arv', 'test'),
(42, 'Vipin', 'vypin', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `prof`
--

DROP TABLE IF EXISTS `prof`;
CREATE TABLE IF NOT EXISTS `prof` (
  `p_id` int NOT NULL AUTO_INCREMENT,
  `prof_name` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `prof_email` varchar(150) NOT NULL,
  `prof_DOB` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prof_exp` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prof_quali` varchar(400) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `country` varchar(50) NOT NULL,
  `about` varchar(400) NOT NULL,
  `days` varchar(40) NOT NULL,
  `name_file` varchar(100) NOT NULL,
  `verification` varchar(200) NOT NULL,
  `size` varchar(100) NOT NULL,
  `verified` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Language` varchar(100) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `prof`
--

INSERT INTO `prof` (`p_id`, `prof_name`, `subject`, `prof_email`, `prof_DOB`, `prof_exp`, `prof_quali`, `occupation`, `country`, `about`, `days`, `name_file`, `verification`, `size`, `verified`, `Language`) VALUES
(1, 'Gerald', 'IT', 'gera@qwe.com', '12/10/1981', '12-25', 'Harvard', 'Developer', 'Afganistan', 'I love to teach', 'Tuesday', 'uploads_photo/prof_5.jpg', 'https://www.linkedin.com/in/arvind-1/', '138479', 'YES', 'English'),
(2, 'Blake Lively', 'Physics', 'blake21@hi.com', '1982-02-12', '12-25', 'Stanford', 'Researcher', 'United States of America', 'Spare time hobby', 'Wednesday', 'uploads_photo/prof_8.jpg', 'https://www.linkedin.com/in/arvind-1/', '283233', 'NO', 'English'),
(56, 'Rick Ashtley', 'Psychology', 'rick@123.com', '1960-01-14', '5-12', 'Cambridge', 'Consulting', 'Bangladesh', 'Nothing much', 'Sunday', 'uploads_photo/prof_3.jpg', 'https://www.linkedin.com/in/arvind-1/', '12667', 'NO', 'English'),
(57, 'Arvind', 'Acting', 'asd@asd', '1970-01-12', '3-5', 'Waterloo Uni', 'Actor', 'India', 'Hey there', 'Friday', 'uploads_photo/rsz_prof_1.jpg', 'https://www.linkedin.com/in/arvind-1/', '108247', 'YES', 'English');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
