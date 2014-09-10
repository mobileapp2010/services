-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 09, 2014 at 11:37 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `photo_id`, `user_id`, `comment`, `timestamp`) VALUES
(1, 41, 5, '"asdasdas"', '0000-00-00 00:00:00'),
(2, 41, 5, '"asdasdas"', '0000-00-00 00:00:00'),
(3, 41, 5, '"asdasdas"', '2014-09-02 19:56:22'),
(4, 41, 5, '"asdasdas"', '2014-09-02 20:04:56'),
(5, 41, 5, 'hi', '2014-09-08 14:58:49'),
(6, 41, 5, 'hi', '2014-09-08 14:59:19'),
(7, 42, 5, 'testcomment', '2014-09-08 17:10:37'),
(8, 42, 5, 'hi', '2014-09-09 16:09:42');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='data' AUTO_INCREMENT=25 ;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`id`, `photo_id`, `user_id`, `timestamp`) VALUES
(19, 41, 6, '2014-09-07 14:52:34'),
(5, 42, 5, '2014-09-03 16:21:08'),
(18, 42, 6, '2014-09-07 06:10:54'),
(9, 43, 7, '2014-09-04 00:56:34'),
(10, 42, 7, '2014-09-04 00:56:36'),
(11, 41, 7, '2014-09-04 00:56:39'),
(12, 41, 5, '2014-09-04 16:14:49'),
(20, 43, 6, '2014-09-07 14:52:39'),
(21, 44, 6, '2014-09-07 15:02:33'),
(22, 45, 6, '2014-09-07 15:13:53'),
(23, 46, 6, '2014-09-07 22:02:42'),
(24, 46, 5, '2014-09-09 16:22:18');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=47 ;

--
-- Dumping data for table `uploadImage`
--

INSERT INTO `uploadImage` (`item_id`, `item_uploadedBy`, `item_name`, `item_brand`, `item_type`, `item_year`, `item_color`, `item_photo`, `timestamp`, `item_commentsNumber`, `item_likesNumber`, `item_shareNumber`) VALUES
(41, 5, 'Test', 'Nike', 'Sneakers', '2012', 'Black', 'http://educesoftware.com/monty/image/5404a3944bc0e.jpg', '2014-09-01 16:49:24', 3, 2, NULL),
(42, 5, 'Test', 'Nike', 'Sneakers', '2012', 'Black', 'http://educesoftware.com/monty/image/5404a3b0c3b55.jpg', '2014-09-01 16:49:52', 2, 3, NULL),
(43, 5, 'Yoooo', 'Jordan', 'Sneakers', '2013', 'Black', 'http://educesoftware.com/monty/image/5404a85c9b7ba.jpg', '2014-09-01 17:09:48', 0, 2, NULL),
(44, 6, 'Converse 2.0', 'Converse', 'Casual', '2012', 'Purple', 'http://educesoftware.com/monty/image/540c736ce90c7.jpg', '2014-09-07 15:02:04', 0, 1, NULL),
(45, 6, 'Jordan 13', 'Jordan', 'Sneakers', '2010', 'Blue', 'http://educesoftware.com/monty/image/540c76210cdd5.jpg', '2014-09-07 15:13:37', 0, 1, NULL),
(46, 6, 'Nike Fly', 'Nike', 'Sneakers', '2012', 'Orange', 'http://educesoftware.com/monty/image/540cd5f263524.jpg', '2014-09-07 22:02:26', 0, 2, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

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
(7, 'Jackie', 'test', 'jackiepipa@gmail.com', 'Jackie ', '2014-09-04 00:56:03', NULL, NULL),
(12, 'Cpow1', 'test', 'guiltless2011@gmail.com', 'cpow', '2014-09-07 05:37:11', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
