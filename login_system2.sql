-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2016 at 09:11 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login_system2`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `reviewstat` int(1) NOT NULL DEFAULT '0',
  `reviewin` varchar(150) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `firstname`, `middlename`, `lastname`, `email`, `reviewstat`, `reviewin`) VALUES
(1, '1', '1', '1', '1', '1', '1', 0, ''),
(2, '123', '123', '1231', '3121', '3121', '13123', 0, ''),
(3, 'girish', '1234', 'girish', 's', 'parmar', 'girish@gmail.com', 0, ''),
(4, 'jayshree', '1234', 'jayshree', 'g ', 'parmar', 'jayshree@gmail.com', 0, ''),
(5, 'malak', '1234', 'malak', 'g', 'parmar', 'malak.29@gmail.com', 1, '1234'),
(6, 'nihil', '1234', 'Nihil', 'P', 'P', 'nihil@gmail.com', 1, 'best website\r\n'),
(7, 'nino', '1234', 'Ninoshka', 'p', 'Pinto', 'nino@gmail.com', 0, ''),
(8, 'darsh', '00798', 'DARSH', 'JITU', 'parmar', 'dasfgf', 1, 'awesome .....'),
(9, 'sagar', 'chotu', 'sagar', 'k', 'makwana', 'sagar03.SM@gmail.com', 1, '2 reviews cant be sent');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
