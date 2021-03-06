-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 20, 2020 at 07:38 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `id` int(100) NOT NULL AUTO_INCREMENT,
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
(5, 'anuroop', 'whitefang@qwe', 'whitefang', 'qwe'),
(10, 'asd', 'asd@asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(500) NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`) VALUES
(1, 'asdasd', 'asdasd@sadas', 'asdasdas'),
(2, 'asdas', 'asd@sada', 'asda@asda'),
(3, 'asdas', 'asdasd@sfdadsd', 'asdas'),
(4, 'asdad', 'asdas@sad', 'asdasdasda'),
(5, 'asd', 'asdas@dasd', 'asdasda'),
(6, 'asdasd', 'asd@asdasd', 'asdas');

-- --------------------------------------------------------

--
-- Table structure for table `form2`
--

DROP TABLE IF EXISTS `form2`;
CREATE TABLE IF NOT EXISTS `form2` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
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
  `author` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name_file` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `downloads` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `form2`
--

INSERT INTO `form2` (`id`, `name`, `lecture`, `email`, `phone`, `subject`, `bday`, `hours`, `about`, `quiz`, `goal1`, `goal2`, `author`, `name_file`, `size`, `downloads`) VALUES
(34, 'Psychology in animals', '4', 'gerrard87@hotmail.com', '9578365332', 'Biology', '2016-05-17', '10-20', 'I like animals and I like psychology. I think you can fill in the blanks.', 'No', 'You will know about animal behaviour', 'Understand psychology to an extent ', 'Gerrard Mattew', 'Unravel - E Minor - MN0191735.pdf', '1624378', '0'),
(38, 'asd', 'asd', 'asd', 'asd', 'Chemistry', '2020-10-15', '20-30', 'asd', 'Yes', 'dasd', 'asd', 'asd', 'IMCA-156 Arvind K Menon.docx', '197667', '0');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `f_name`, `username`, `password`) VALUES
(1, 'arv', 'arv', 'test'),
(42, 'vypin beach', 'vypin', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `prof`
--

DROP TABLE IF EXISTS `prof`;
CREATE TABLE IF NOT EXISTS `prof` (
  `p_id` int(200) NOT NULL AUTO_INCREMENT,
  `prof_name` varchar(100) NOT NULL,
  `prof_email` varchar(150) NOT NULL,
  `prof_DOB` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prof_exp` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prof_quali` varchar(400) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `about` varchar(400) NOT NULL,
  `days` varchar(40) NOT NULL,
  `name_file` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `verified` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Language` varchar(100) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `prof`
--

INSERT INTO `prof` (`p_id`, `prof_name`, `prof_email`, `prof_DOB`, `prof_exp`, `prof_quali`, `Phone`, `country`, `about`, `days`, `name_file`, `size`, `verified`, `Language`) VALUES
(46, '', '', '', '', '', '', 'Afganistan', '', 'select', 'uploads_photo/003.jpg', '138479', 'No', ''),
(45, '', '', '', '', '', '', 'Afganistan', '', 'select', 'uploads_photo/003.jpg', '138479', 'No', ''),
(47, '', '', '', '', '', '', 'Afganistan', '', 'select', 'uploads_photo/003.jpg', '138479', 'No', ''),
(48, '', '', '', 'Below 10', 'asd', '', 'Afganistan', '', 'select', 'uploads_photo/003.jpg', '138479', 'No', ''),
(49, '', '', '', '', '', '', 'Afganistan', '', 'select', 'uploads_photo/003.jpg', '138479', 'No', ''),
(50, '', '', '', '', '', '', 'Afganistan', '', 'select', 'uploads_photo/003.jpg', '138479', 'No', ''),
(51, 'asd', 'asd', '', '', 'sdf', 'asd', 'Afganistan', '', 'select', 'uploads_photo/003.jpg', '138479', 'No', 'asd'),
(52, '', '', '', '', '', '', 'Afganistan', '', 'select', 'uploads_photo/003.jpg', '138479', 'No', ''),
(53, '', '', '', '', '', '', 'Afganistan', '', 'select', 'uploads_photo/003.jpg', '138479', 'No', ''),
(54, '', '', '', '', '', '', 'Afganistan', '', 'select', 'uploads_photo/508284.jpg', '380747', 'No', '');

-- --------------------------------------------------------

--
-- Table structure for table `prof2`
--

DROP TABLE IF EXISTS `prof2`;
CREATE TABLE IF NOT EXISTS `prof2` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(100) NOT NULL,
  `lang` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `bdate` varchar(200) NOT NULL,
  `quali` varchar(200) NOT NULL,
  `exp` varchar(200) NOT NULL,
  `about` varchar(400) NOT NULL,
  `photo` varchar(200) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
