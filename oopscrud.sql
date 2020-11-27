-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 06:31 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oopscrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile_Number` varchar(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` enum('M','F') NOT NULL,
  `Deleted` int(11) NOT NULL,
  `Added_On` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Added_By` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `First_Name`, `Last_Name`, `E_mail`, `Mobile_Number`, `A_ddress`, `D_ob`, `G_ender`, `Deleted`, `Added_On`, `Added_By`) VALUES
(90, 'shivam', 'patel', 'shivam@gmail.com', '748898454', 'vadodara', '2020-11-14', 'M', 1, '2020-11-26 17:27:52', 0),
(91, 'dhruvalkumar', 'sharma', 'dhruvalsharma1231@gmail.com', '0635114873', '5/355 Satyam Apartment, OPP. ITI Road Gorwa', '2020-11-14', 'M', 1, '2020-11-26 17:27:52', 0),
(92, 'Manvi ', 'Sharma', 'manvisharma@gmail.com', '3928493849', '5/355 Satyam Apartment, OPP. ITI Road Gorwa', '2020-11-04', 'F', 1, '2020-11-26 17:27:52', 0),
(93, 'dhruvalkumar', 'sharma', 'dhruvalsharma1231@gmail.com', '0635114873', '5/355 Satyam Apartment, OPP. ITI Road Gorwa', '2020-11-06', 'M', 1, '2020-11-26 17:27:52', 0),
(94, 'dhruvalkumar', 'sharma', 'dhruvalsharma1231@gmail.com', '0635114873', '5/355 Satyam Apartment, OPP. ITI Road Gorwa', '2020-11-13', 'M', 1, '2020-11-26 17:27:52', 0),
(95, 'dhruvalsharma', '', 'dhruvalsharma1231@gmail.com', '0635114873', 'D1,D2 Gokul Garden, Opp Skyview building,\nViman Nagar', '2020-11-22', 'M', 1, '2020-11-26 17:27:52', 0),
(96, 'dhruval', 'sharma', 'dhruvalsharma1231@gmail.com', '0635114873', '5/355 Satyam Apartment, OPP. ITI Road Gorwa   ', '2020-11-29', 'M', 1, '2020-11-26 17:27:52', 0),
(97, 'karan', 'sharma', 'karansharma@gmail.com', '7834783478', 'Abhi park, vadodara', '2020-09-18', 'M', 0, '2020-11-26 17:27:52', 0),
(98, 'mahi', 'patel', 'mahi@gmail.com', '9833434378', 'Anand', '2020-08-22', 'M', 0, '2020-11-26 17:27:52', 0),
(99, 'mannu ', 'sharma', 'mannu@gmail.com', '9834344567', 'Anand,Gujarat', '2018-11-23', 'F', 0, '2020-11-26 17:27:52', 0),
(100, 'Jinal', 'sharma', 'jinal@gmail.com', '8984547894', 'Ahmedabad,Gujarat  ', '2013-11-22', 'F', 0, '2020-11-26 17:27:52', 0),
(101, 'Akashdsfd', 'singh', 'akash@gmail.com', '9845434455', 'Vadodara,Gujarat                   ', '2020-05-29', 'M', 1, '2020-11-26 17:27:52', 0),
(102, 'jesi', 'acharya', 'jesi@gmail.com', '984337844', 'Siddhpur, Gujarat', '2011-12-01', 'F', 0, '2020-11-26 17:27:52', 0),
(103, 'kiran', 'sharma', 'kiran@gmail.com', '9849834898', 'Jaipur, Rajasthan ', '2001-08-01', 'F', 0, '2020-11-26 17:27:52', 0),
(104, 'babita', 'sharma', 'sharma@gmail.com', '9834859984', 'Mumbai, Maharshtra ', '2020-10-28', 'F', 1, '2020-11-26 17:27:52', 0),
(105, 'satyam', 'patel', 'satyam@gmail.com', '9834347898', 'Siddhpur, Gujarat', '1999-12-26', 'M', 1, '2020-11-26 17:27:52', 0),
(106, 'dinesh', 'sharma', 'dineshsharma@gmail.com', '0990556566', 'Nadiad, Gujarat', '1994-04-02', 'M', 1, '2020-11-26 17:27:52', 0),
(107, 'dhruvalkumar', 'sharma', 'dhruvalsharma1231@gmail.com', '0635114873', '5/355 Satyam Apartment, OPP. ITI Road Gorwa', '2020-11-29', 'M', 1, '2020-11-26 17:27:52', 0),
(108, 'dhruvalkumar', 'sharma', 'dhruvalsharma1231@gmail.com', '0635114873', '5/355 Satyam Apartment, OPP. ITI Road Gorwa', '2020-11-22', 'M', 1, '2020-11-26 17:27:52', 0),
(109, 'dhruvalkumar', 'sharma', 'dhruvalsharma1231@gmail.com', '0635114873', '5/355 Satyam Apartment, OPP. ITI Road Gorwa', '2020-11-20', 'F', 1, '2020-11-26 17:27:52', 0),
(110, 'dhruvalkumar', 'sharma', 'dhruvalsharma1231@gmail.com', '0635114873', '5/355 Satyam Apartment, OPP. ITI Road Gorwa', '2020-11-22', 'M', 1, '2020-11-26 17:27:52', 0),
(111, 'dhruvalkumar', 'sharma', 'dhruvalsharma1231@gmail.com', '0635114873', '5/355 Satyam Apartment, OPP. ITI Road Gorwa', '2020-11-14', 'M', 1, '2020-11-26 17:27:52', 0),
(112, 'sunny', 'patel', 'sunny@gmail.com', '9045454545', 'Vadodara, Gujarat', '2020-11-01', 'M', 1, '2020-11-26 17:27:52', 0),
(161, 'dhruvalkumar', 'sharma', 'dhruvalsharma1231@gmail.com', '0635114873', '5/355 Satyam Apartment, OPP. ITI Road Gorwa', '2020-11-07', 'F', 1, '2020-11-26 17:27:52', 0),
(124, 'Akashsdfdf', 'singh', 'akash@gmail.com', '9845434455', 'Vadodara,Gujarat                ', '2020-05-29', 'M', 1, '2020-11-26 17:27:52', 0),
(125, 'Akashsdfdfsdfsd', 'singh', 'akash@gmail.com', '9845434455', 'Vadodara,Gujarat                 ', '2020-05-29', 'M', 1, '2020-11-26 17:27:52', 0),
(162, 'dhruvalkumar', 'sharma', 'dhruvalsharma1231@gmail.com', '0635114873', '5/355 Satyam Apartment, OPP. ITI Road Gorwa', '2020-11-15', 'M', 1, '2020-11-26 17:27:52', 0),
(126, 'Akash', 'singh', 'akash@gmail.com', '9845434455', 'Vadodara,Gujarat                  ', '2020-05-29', 'M', 1, '2020-11-26 17:27:52', 0),
(127, 'Akashdsfd', 'singh', 'akash@gmail.com', '9845434455', 'Vadodara,Gujarat                   ', '2020-05-29', 'M', 1, '2020-11-26 17:27:52', 0),
(128, 'Akashdf', 'singh', 'akash@gmail.com', '9845434455', 'Siddhpur, Gujarat', '2020-05-29', 'M', 0, '2020-11-26 17:27:52', 0),
(129, 'Akash', 'singh', 'akash@gmail.com', '9845434455', 'Vadodara,Gujarat                     ', '2020-05-29', 'M', 1, '2020-11-26 17:27:52', 0),
(130, 'Akash', 'singh', 'akash@gmail.com', '9845434455', 'Vadodara,Gujarat                     ', '2020-05-29', 'M', 1, '2020-11-26 17:27:52', 0),
(131, 'Akash', 'singh', 'akash@gmail.com', '9845434455', 'Vadodara,Gujarat                     ', '2020-05-29', 'M', 1, '2020-11-26 17:27:52', 0),
(159, 'dhruvalkumar', 'sharma', 'dhruvalsharma1231@gmail.com', '0635114873', '5/355 Satyam Apartment, OPP. ITI Road Gorwa', '2020-11-22', 'M', 1, '2020-11-26 17:27:52', 0),
(160, 'dhruvalkumar', 'sharma', 'dhruvalsharma1231@gmail.com', '0635114873', '5/355 Satyam Apartment, OPP. ITI Road Gorwa', '2020-11-29', 'F', 1, '2020-11-26 17:27:52', 0),
(163, 'dhruvalkumar', 'sharma', 'dhruvalsharma1231@gmail.com', '0635114873', '5/355 Satyam Apartment, OPP. ITI Road Gorwa', '2020-11-20', 'F', 1, '2020-11-26 17:29:31', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
