-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 10:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `FirstName`, `LastName`, `Email`, `Password`, `Phone`) VALUES
(1, 'Admin', 'Vai', 'admin@mail.com', '123456', '+8801401298280');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `child_ID` int(10) NOT NULL,
  `child_FullName` varchar(20) NOT NULL,
  `Guardian_Name` varchar(20) NOT NULL,
  `child_birthday` varchar(20) NOT NULL,
  `Guardian_Email` varchar(50) NOT NULL,
  `child_Password` varchar(20) NOT NULL,
  `child_Address` varchar(200) NOT NULL,
  `Guardian_Phone` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`child_ID`, `child_FullName`, `Guardian_Name`, `child_birthday`, `Guardian_Email`, `child_Password`, `child_Address`, `Guardian_Phone`, `Gender`) VALUES
(1, 'user', 'user Mother', '2021-11-21', 'user1@gmail.com', '12345', 'Dhaka', '+8801401298280', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `Feedback` varchar(1000) DEFAULT NULL,
  `F_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `name`, `Feedback`, `F_ID`) VALUES
('user1@gmail.com', 'user', 'You are doing great. Please keep up the great work!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vaccinelist`
--

CREATE TABLE `vaccinelist` (
  `id` int(11) NOT NULL,
  `vaccine_Name` varchar(255) NOT NULL,
  `age_Group` varchar(255) NOT NULL,
  `vaccine_Dose` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccinelist`
--

INSERT INTO `vaccinelist` (`id`, `vaccine_Name`, `age_Group`, `vaccine_Dose`, `description`, `image`) VALUES
(2, 'Influenza  vaccine', 'Age range: 6 months to 9 years of age. these who have two dose in the past 9 years children of age or older, will only need 1 dose per year.', 'Total doses of vaccine is 2.', 'Influenza vaccines, also known as flu shots, are vaccines that protect against infection by influenza viruses.', 'https://getindianews.com/wp-content/uploads/2020/07/download.jpg'),
(3, 'Hepatitis B vaccine', 'Age range: Infants at birth and for children up to 18 years.', 'Total doses of this vaccine is 3.', 'Every person may be at some risk for a hepatitis B infection during their lifetime, so getting the hepatitis B vaccine should be considered by all people. ', 'https://gloveclinic.com/wp-content/uploads/2020/04/16-HepB-vaccine-720x438.jpg'),
(4, 'Rubella vaccine', 'Age range: around 9 months to 15 months of age, with a second dose at 15 months to 6 years of age, with at least 4 weeks between the doses.', 'Total doses of this vaccine is 2.', 'Rubella vaccine is a vaccine used to prevent rubella. Effectiveness begins about two weeks after a single dose and around 95% of people become immune.', 'https://i0.wp.com/post.medicalnewstoday.com/wp-content/uploads/sites/3/2021/07/GettyImages-462718546_header-1024x575.jpg?w=1155&h=1528');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`child_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `vaccinelist`
--
ALTER TABLE `vaccinelist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `child_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `F_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vaccinelist`
--
ALTER TABLE `vaccinelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
