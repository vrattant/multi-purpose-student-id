-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2016 at 05:39 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `current_seller`
--

CREATE TABLE `current_seller` (
  `id` varchar(100) NOT NULL,
  `seller` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_seller`
--

INSERT INTO `current_seller` (`id`, `seller`) VALUES
('', ''),
('', ''),
('j_hostel', 'j');

-- --------------------------------------------------------

--
-- Table structure for table `current_student`
--

CREATE TABLE `current_student` (
  `id` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_student`
--

INSERT INTO `current_student` (`id`, `firstname`, `surname`) VALUES
('101412046', 'RAKESH', 'SINGH'),
('101412046', 'RAKESH', 'SINGH'),
('101412046', 'RAKESH', 'SINGH');

-- --------------------------------------------------------

--
-- Table structure for table `misc_student`
--

CREATE TABLE `misc_student` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `seller` varchar(100) NOT NULL,
  `DATE` date NOT NULL,
  `balance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `misc_student`
--

INSERT INTO `misc_student` (`id`, `name`, `surname`, `seller`, `DATE`, `balance`) VALUES
(101412046, 'RAKESH', 'SINGH', 'j', '2016-06-07', '35');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`) VALUES
(1, 'COLD DRINK', 35, 100),
(2, 'PIZZA', 40, 50),
(3, 'ICE TEA', 10, 100),
(4, 'COLD COFFEE', 20, 50),
(5, 'SAMOSA', 8, 50),
(6, 'BURGER', 25, 40);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`firstname`, `surname`, `id`, `username`, `password`, `password1`) VALUES
('NIKHIL', 'KUMAR', '101412033', '101412033', '1234', '12345'),
('RAKESH', 'SINGH', '101412046', '101412046', '1234', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `surname`, `id`, `username`, `password`) VALUES
('j', 'hostel', 'j_hostel', 'j_hostel', '1234'),
('vendor', '2', 'vendor_2', 'vendor_2', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
