-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 10:33 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooddonation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `save_life_date` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `blood_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `gender`, `email`, `city`, `dob`, `contact_no`, `save_life_date`, `password`, `blood_group`) VALUES
(1, 'tamim', 'Male', 'fstamim74@gamil.com', 'Jafarabad', '1972-09-20', '01689648688', '0', '1234567', 'A-'),
(2, 'Fahim', 'Male', 'fstamim74@gamil.com', 'Gwadar', '1974-08-16', '01689648688', '0', '123456789', 'A+'),
(3, 'Fahim', 'Fe-male', 'jawad04091@gmail.com', 'Gwadar', '1998-02-04', '01689648688', '0', 'e10adc3949ba59abbe56e057f20f883e', 'A-'),
(4, '  Tamim', 'Male', 'zstaheri1999@gmail.com', 'Gwadar', '1974-02-16', '01689648688', '0', 'fcea920f7412b5da7be0cf42b8c93759', 'A+'),
(5, '      tamim', 'Male', 'fstamim@gamil.com', 'Jafarabad', '1972-10-15', '01689648688', '0', 'e10adc3949ba59abbe56e057f20f883e', 'A-'),
(6, '  Tamim', 'Male', 'fstamim7@gamil.com', 'Kalat', '1975-01-18', '01689648688', '0', 'fcea920f7412b5da7be0cf42b8c93759', 'A+'),
(7, '      tamim', 'Male', 'fstamim744@gamil.com', 'Kalat', '1975-02-20', '01689648688', '0', 'fcea920f7412b5da7be0cf42b8c93759', 'A+'),
(8, '  tamim', 'Fe-male', 'fstamim74454@gamil.com', 'Jhal Magsi', '1973-04-16', '01689648688', '0', '25d55ad283aa400af464c76d713c07ad', 'A-'),
(9, '  Tamim', 'Male', 'fstamim7444@gamil.com', 'Jafarabad', '1976-01-16', '01689648688', '0', 'e10adc3949ba59abbe56e057f20f883e', 'A+'),
(10, '          Tamim', 'Male', 'tamim@gmail.com', 'Bagh', '1972-10-20', '  01689648688', '20-05-30', '1234567', 'A+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
