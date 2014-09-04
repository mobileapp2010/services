-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2014 at 02:30 AM
-- Server version: 5.5.37-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `educesof_powell`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `photo_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `comment` longtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `photo_id`, `user_id`, `comment`, `timestamp`) VALUES
(1, 41, 5, '"asdasdas"', '0000-00-00 00:00:00'),
(2, 41, 5, '"asdasdas"', '0000-00-00 00:00:00'),
(3, 41, 5, '"asdasdas"', '2014-09-02 19:56:22'),
(4, 41, 5, '"asdasdas"', '2014-09-02 20:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE IF NOT EXISTS `like` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='data' AUTO_INCREMENT=12 ;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`id`, `photo_id`, `user_id`, `timestamp`) VALUES
(6, 41, 6, '2014-09-04 00:51:15'),
(5, 42, 5, '2014-09-03 16:21:08'),
(8, 42, 6, '2014-09-04 00:51:20'),
(9, 43, 7, '2014-09-04 00:56:34'),
(10, 42, 7, '2014-09-04 00:56:36'),
(11, 41, 7, '2014-09-04 00:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `uploadImage`
--

CREATE TABLE IF NOT EXISTS `uploadImage` (
  `item_id` int(10) NOT NULL AUTO_INCREMENT,
  `item_uploadedBy` int(10) DEFAULT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_brand` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `item_commentsNumber` int(10) NOT NULL DEFAULT '0',
  `item_likesNumber` int(10) NOT NULL DEFAULT '0',
  `item_shareNumber` int(10) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=44 ;

--
-- Dumping data for table `uploadImage`
--

INSERT INTO `uploadImage` (`item_id`, `item_uploadedBy`, `item_name`, `item_brand`, `item_type`, `item_year`, `item_color`, `item_photo`, `timestamp`, `item_commentsNumber`, `item_likesNumber`, `item_shareNumber`) VALUES
(41, 5, 'Test', 'Nike', 'Sneakers', '2012', 'Black', 'http://educesoftware.com/monty/image/5404a3944bc0e.jpg', '2014-09-01 16:49:24', 1, 1, NULL),
(42, 5, 'Test', 'Nike', 'Sneakers', '2012', 'Black', 'http://educesoftware.com/monty/image/5404a3b0c3b55.jpg', '2014-09-01 16:49:52', 0, 3, NULL),
(43, 5, 'Yoooo', 'Jordan', 'Sneakers', '2013', 'Black', 'http://educesoftware.com/monty/image/5404a85c9b7ba.jpg', '2014-09-01 17:09:48', 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `biography` varchar(244) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `created_on`, `biography`, `profile_picture`) VALUES
(0, 'ggg', '2', '1em', '1', NULL, NULL, NULL),
(2, 'gggaasasa', '2', '1emsss', '1', NULL, NULL, NULL),
(3, 'test321', '123456', 'test@test.com', 'test', NULL, NULL, NULL),
(4, '1234', '123456', 'test12@test.com', 'test1234', '2014-08-31 17:01:51', NULL, NULL),
(5, 'testdev', '123456', 'testdev@test.com', 'testDev', '2014-08-31 17:04:59', NULL, NULL),
(6, 'CPowellCEO', 'test', 'powell7365@gmail.com', 'Christopher Powell', '2014-09-01 18:28:12', NULL, NULL),
(7, 'Jackie', 'test', 'jackiepipa@gmail.com', 'Jackie ', '2014-09-04 00:56:03', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
