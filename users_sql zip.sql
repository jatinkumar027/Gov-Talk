-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2020 at 11:50 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('pragya', '8888'),
('jatin kumar', '94152634258954685281xuplq45sss'),
('pragya', '0000'),
('pragya', '0000'),
('pragya', '0000'),
('pragya', '0000'),
('amon', '12345'),
('pragya', '0000'),
('pragya', '0000'),
('pragya', '0000'),
('pragya', '0000'),
('pragya', '0000'),
('pragya', '0000'),
('pragya', '0000'),
('pragya', '0000'),
('pragya', '0000'),
('pragya', '0000'),
('pragya', '0000'),
('pragya', '0000'),
('pragya', '0000'),
('an', '0000'),
('an', '0000'),
('pragya', '0000'),
('pragya', '0000'),
('pragya', '0000'),
('pragya', '0000'),
('anusha', '8888');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
