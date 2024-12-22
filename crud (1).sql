  -- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2024 at 11:31 AM
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
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(255) NOT NULL,
  `cityid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`, `cityid`) VALUES
(1, 'Ahmedabad', '9'),
(2, 'Junagadh', '9'),
(3, 'Surat', '9'),
(4, 'Vadodara', '9'),
(5, 'Bhavnagar', '9'),
(6, 'Jamnagar', '9'),
(7, 'Gandhinagar', '9'),
(8, 'Anand', '9'),
(9, 'Rajahmundry', '1'),
(10, 'Guntur', '1'),
(11, 'Tirupati', '1'),
(12, 'Anantapur', '1'),
(13, 'Chittoor', '1'),
(14, 'Kamle', '2'),
(15, 'Kra Daadi', '2'),
(16, 'Zemithang', '2'),
(17, 'Tawang', '2'),
(18, 'Thingbu', '2'),
(19, 'Seppa', '2'),
(20, 'Dirang', '2'),
(21, 'Bomdila', '2'),
(22, 'Bilaspur', '3'),
(23, 'Bijapur', '3'),
(24, 'Dantewada', '3'),
(25, 'Dhamtari', '3'),
(26, 'Durg', '3'),
(27, 'Ballari', '4'),
(28, 'Belagavi', '4'),
(29, 'Kalaburagi', '4'),
(30, 'Bangalore', '4'),
(31, 'Bidar', '4'),
(32, 'Agartala', '6'),
(33, 'Dharmanagar', '6'),
(34, 'Belonia', '6'),
(35, 'Jirania', '6'),
(36, 'Udaipur', '6'),
(37, 'Bhubaneswar', '7'),
(38, 'Sambalpur', '7'),
(39, 'Rourkela', '7'),
(40, 'Cuttack', '7'),
(41, 'Berhampur', '7'),
(42, 'Bilaspur', '8'),
(43, 'Chamba', '8'),
(44, 'Hamirpur', '8'),
(45, 'Kullu', '8'),
(46, 'Lahaul and Spiti', '8'),
(47, 'Abbottabad', '10'),
(48, 'Bajaur Agency', '10'),
(49, 'Bannu', '10'),
(50, 'Buner', '10'),
(51, 'Chitral', '10'),
(52, 'Abbasiaabad', '11'),
(53, 'Abdullah Town', '11'),
(54, 'Abpara', '11'),
(55, 'Akrala', '11'),
(56, 'Ara', '11'),
(57, 'Ladakh', '12'),
(58, 'Chandigarh.', '12'),
(59, 'Puducherry.', '12'),
(60, 'Delhi.', '12'),
(61, 'Andaman and Nicobar Islands', '12'),
(62, 'Gilgit', '13'),
(63, 'Skardu', '13'),
(64, 'Khaplu', '13'),
(65, 'Dambudas', '13'),
(66, 'Baltistan', '13'),
(67, 'Quetta', '14'),
(68, 'Turbat', '14'),
(69, 'Khuzdar', '14'),
(70, 'Hub', '14'),
(71, 'Gwadar', '14'),
(72, 'Xiamen', '15'),
(73, 'Zhangzhou', '15'),
(74, 'Quanzhou', '15'),
(75, 'Sanming', '15'),
(76, 'Putian', '15'),
(77, 'Foshan', '16'),
(78, 'Shenzhen', '16'),
(79, 'Shantou', '16'),
(80, 'Maoming', '16'),
(81, 'Zhaoqing', '16'),
(82, 'Nanning', '17'),
(83, 'Liuzhou', '17'),
(84, 'Guilin', '17'),
(85, 'Beihai', '17'),
(86, 'Guangxi', '17'),
(87, 'Wenchang', '18'),
(88, 'Sansha', '18'),
(89, 'Qionghai', '18'),
(90, 'Wanning', '18'),
(91, 'Wuzhishan\r\n', '18'),
(92, 'Nanjing.', '19'),
(93, 'Suzhou', '19'),
(94, 'Wuxi.', '19'),
(95, 'Xuzhou', '19'),
(96, 'Changzhou', '19'),
(97, 'Calgary', '20'),
(98, 'Lethbridge', '20'),
(99, 'Edmonton', '20'),
(100, 'Grande Prairie', '20'),
(101, 'Red Deer', '20'),
(102, 'Barkerville', '21'),
(103, 'Burnaby', '21'),
(104, 'Campbell River', '21'),
(105, 'Chilliwack', '21'),
(106, 'Dawson Creek.\r\n', '21'),
(107, 'Bathurst', '22'),
(108, 'Brunswick\'s ', '22'),
(109, 'Campbellton', '22'),
(110, 'Dieppe', '22'),
(111, 'Edmundston', '22'),
(112, 'Glace Bay', '23'),
(113, 'Halifax', '23'),
(114, '\r\nLiverpool', '23'),
(115, 'Bedford', '23'),
(116, 'Canso', '23'),
(117, 'Yellowknife', '24'),
(118, 'Fort Smith', '24'),
(119, 'Inuvik', '24'),
(120, 'Fort Simpson', '24'),
(121, 'Tuktoyaktuk', '24'),
(122, 'L\'Aquila', '25'),
(123, 'Chieti', '25'),
(124, 'Pescara', '25'),
(125, 'Atri', '25'),
(126, 'Anversa degli Abruzzi', '25');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cid`, `country`) VALUES
(1, 'India'),
(2, 'Pakistan'),
(3, 'China'),
(4, 'Canada'),
(5, 'Italy');

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
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `lastname`, `number`, `email`, `password`, `gender`, `hobby`, `country`, `state`, `city`, `image`) VALUES
(2, 'RAMESH', 'CHAVADA', '5555558555', 'newuser123@gmail.com', '', 'male', 'travel,coding,game', '1', '9', '2', '783px-Test-Logo.svg.png'),
(3, 'hiiii', 'CHAVADA', '55555', 'radhekrishna200234@gmail.com', '', 'female', 'travel,coding,game', '1', '9', '5', '4k-happy-diwali-wallpaper-preview.jpg'),
(4, 'RAMESH', 'CHAVADA', '5555558555', 'radheshyam3540@gmail.com', '', 'male', 'travel,coding,game', '1', '3', '23', 'png-test-1.png'),
(5, 'Radhe', 'Krishna', '5555558555', 'radhe@gmail.com', '123rt', 'male', 'travel,coding,game', '1', '9', '8', 'xero-logo.png'),
(6, 'RAMESH', 'CHAVADA', '111111111111', 'radhe11@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'male', 'travel,coding,game', '1', '9', '8', '4k-happy-diwali-wallpaper-preview.jpg'),
(7, 'RAMESH', 'CHAVADA', '5555558555', 'radhe22@gmail.com', '22', 'male', 'travel,coding', '1', '9', '1', '4k-happy-diwali-wallpaper-preview.jpg'),
(10, 'RAMESH', 'CHAVADA', '9874', 'rms123@gmail.com', 'rms@123', 'male', 'travel,coding', '1', '9', '2', '4k-happy-diwali-wallpaper-preview.jpg'),
(11, 'RAMESH', 'CHAVADA', '5555558555', 'radhekrishna15@gmail.com', '15', 'male', 'travel,coding', '1', '9', '8', 'Logo-Test.png'),
(12, 'RAMESH', 'CHAVADA', '111111111111', 'new15@gmail.com', '15', 'male', 'coding', '1', '9', '4', 'png-test-1.png'),
(13, 'RAMESH', 'CHAVADA', '55555', 'ladli14@gmail.com', '14', 'male', 'travel,coding', '1', '9', '2', '783px-Test-Logo.svg.png'),
(14, 'RAMESH', 'CHAVADA', '654', 'radhika16@gmail.com', '16', 'male', 'travel,coding', '1', '9', '2', 'download.png'),
(15, 'tets', 'test', '98465', 'test12@gmail.com', '121212', 'male', 'coding', '1', '9', '4', '1675301912_1c13b7b80ca85b732378ab3fd7678667.png'),
(16, 'RAMESH', 'CHAVADA', '62648', 'number123@gmail.com', '123', 'female', 'travel,coding', '1', '9', '8', '260663710.jpg'),
(17, 'RAMESH', 'CHAVADA', '5555558555', 'radhe0000@gmaail.com', '1212', 'male', 'travel,coding,game', '1', '9', '8', '783px-Test-Logo.svg.png'),
(18, 'RAMESH', 'CHAVADA', '5555558555', 'radhekrishna1212@gmail.com', '123', 'male', 'travel,coding,game', '1', '9', '1', 'xero-logo.png'),
(19, 'RAMESH', 'CHAVADA', '5555558555', 'newuser12312@gmail.com', '1212', 'female', 'coding', '1', '9', '1', '1627978351_a2b4873e0b64708d0f5ccc706fb90813.png'),
(20, 'hyyy', 'hyy', '123', 'newuser123123@gmail.com', '123123', 'male', 'coding', '2', '11', '54', '783px-Test-Logo.svg.png'),
(21, 'RAMESH', 'CHAVADA', '111111111111', 'radhekrishna2121@gmail.com', '2121', 'female', 'travel,coding', '1', '9', '8', '1627978351_a2b4873e0b64708d0f5ccc706fb90813.png'),
(22, 'hy', 'hy', '12', 'newuser1212@gmail.com', '1212', 'female', 'travel,coding', '1', '2', '21', '1672735727_e10f92d865133bb8563d40b0cd47e99f.jpeg'),
(23, 'moj', 'masti', '99999', 'radhe1212@gmail.com', '1212', 'female', 'travel,coding', '1', '1', '12', '1627978351_a2b4873e0b64708d0f5ccc706fb90813.png'),
(24, 'one', 'one', '11', 'one11@gmail.com', '11', 'male', 'coding', '2', '13', '66', '1627978351_a2b4873e0b64708d0f5ccc706fb90813.png'),
(25, 'two', 'two', '22', 'two@gmail.com', '22', 'male', 'coding,game', '3', '15', '74', '783px-Test-Logo.svg.png'),
(26, 'two', 'two', '22', 'two1@gmail.com', '1212', 'male', 'coding,game', '3', '18', '89', '783px-Test-Logo.svg.png');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`, `sid`) VALUES
(1, 'Andhra Pradesh', '1'),
(2, 'Arunachal Pradesh', '1'),
(3, 'Chhattisgarh', '1'),
(4, 'Karnataka', '1'),
(5, 'Manipur', '1'),
(6, 'Tripura', '1'),
(7, 'Odisha', '1'),
(8, 'Himachal', '1'),
(9, 'Gujarat', '1'),
(10, 'Pakhtunkhwa', '2'),
(11, 'Islamabad', '2'),
(12, 'territories', '2'),
(13, 'Baltistan', '2'),
(14, 'Balochistan', '2'),
(15, 'Fujian', '3'),
(16, 'Guangdong', '3'),
(17, 'Guangxi', '3'),
(18, 'Hainan', '3'),
(19, 'Jiangsu', '3'),
(20, 'Alberta', '4'),
(21, 'British Columbia', '4'),
(22, 'New Brunswick', '4'),
(23, 'Nova Scotia', '4'),
(24, 'Northwest Territories.', '4'),
(25, 'Abruzzo', '5'),
(26, 'Liguria', '5'),
(27, 'Sicilia', '5'),
(28, 'Campania', '5'),
(29, 'Lazio', '5'),
(30, 'Saitu', '5'),
(31, 'Imphal', '5'),
(32, 'Ukhurl', '5'),
(33, 'Thoubal', '5'),
(34, 'Moirang', '5');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
