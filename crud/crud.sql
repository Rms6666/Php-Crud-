-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2024 at 06:59 AM
-- Server version: 5.7.36
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `lastname`, `number`, `email`, `image`) VALUES
(14, 'radhe radhe', 'krishna11', '122222222222', 'radhe1222222@gmail.com', 'issue_0_1694661230_321x98.png'),
(13, 'radhe shyam', 'krishna', '12', 'radhe123@gmail.com', '4k-happy-diwali-wallpaper-preview.jpg'),
(12, 'HYYY', 'HYYY', '4545', 'radhe123@gmail.com', 'org chart_1 jun 22 .jpg'),
(6, 'radhe shyam', 'krishna11', '2343', 'radhe123@gmail.com', '4k-happy-diwali-wallpaper-preview.jpg'),
(7, 'radhe shyam', 'krishna', '222', 'radhe123@gmail.com', 'png-test-1.png'),
(8, 'radhe shyam', 'krishna', '12323', 'radhe123@gmail.com', 'images-2023-02-11T214345.713.jpeg'),
(15, 'radhe radhe', 'krishna11', '122222222222', 'radhe1222222@gmail.com', 'issue_0_1694661230_321x98.png'),
(16, 'HYYY', 'krishna11', '11111', 'radhe123@gmail.com', 'org chart_1 jun 22 .jpg'),
(17, 'radhe radhe', 'krishna', '1222', 'radhe12322222222222@gmail.com', 'download (1).png'),
(18, 'radhe radhe', 'krishna', '1222', 'radhe12322222222222@gmail.com', 'download (1).png'),
(19, 'radhe shyam', 'krishna', '11', 'radhe123@gmail.com', 'staff_1671530280_Teo_KK_e-sign_Transparent.png'),
(20, 'radhe shyam', 'krishna', '323', 'radhe123@gmail.com', 'WMI org chart_1 jun 22 .jpg'),
(21, 'radhe shyam', 'krishna', '323', 'radhe123@gmail.com', 'xero-logo.png'),
(23, 'rms', 'chavada', '8530412554', 'rms122@gmail.com', 'images-2023-02-11T214345.713.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
