-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 28, 2016 at 04:02 PM
-- Server version: 5.5.45
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `cookies`
--

CREATE TABLE IF NOT EXISTS `cookies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `weight` decimal(10,3) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `cookies`
--

INSERT INTO `cookies` (`id`, `title`, `weight`, `cost`, `description`) VALUES
(1, 'small', '0.100', '0.99', 'Doughnuts are usually deep-fried from a flour dough, and typically either ring-shaped or without a hole, and often filled. Other types of batters can also be used, and various toppings and flavorings are used for different types, such as sugar, chocolate, or maple glazing. In addition to flour, doughnuts may also include such ingredients as water, leavening, eggs, milk, sugar, oil/shortening, natural flavors and/or artificial flavors.'),
(2, 'XXS-Small', '0.200', '1.99', 'XXS-Small donut.'),
(3, 'XS-small', '0.300', '2.99', 'XS-Small donut.'),
(4, 'middle', '0.400', '3.99', 'Middle donut.'),
(5, 'big', '0.500', '4.99', 'Big donut.'),
(18, 'XL', '0.600', '5.99', 'XL-size donut'),
(19, 'XXL', '0.700', '6.99', 'xxl-size donut.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
