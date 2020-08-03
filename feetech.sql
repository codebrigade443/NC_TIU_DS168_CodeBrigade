-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 05:52 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feetech`
--

-- --------------------------------------------------------

--
-- Table structure for table `sutdentdetails`
--

CREATE TABLE `sutdentdetails` (
  `slno` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `htno` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `doa` varchar(255) NOT NULL,
  `sc` varchar(255) NOT NULL,
  `lca` varchar(255) NOT NULL,
  `cc` varchar(255) NOT NULL,
  `gc` varchar(255) NOT NULL,
  `payment` bigint(255) NOT NULL,
  `mobile` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sutdentdetails`
--

INSERT INTO `sutdentdetails` (`slno`, `name`, `htno`, `fname`, `mname`, `dob`, `doa`, `sc`, `lca`, `cc`, `gc`, `payment`, `mobile`, `email`, `password`, `role`) VALUES
(1, 'Sravya', '101', 'f1', 'm1', '07/06/1994', '01/01/2017', 'B.Sc', '01/05/2020', '1', 'Good Student', 0, 0, '', '', 0),
(2, 'Yashita', '102', 'f1', 'm1', '07/06/1994', '01/01/2017', 'B.Com - General', '01/05/2020', '1', 'Good Student', 0, 0, '', '', 0),
(3, 's2', '106', 'f1', 'm1', '07/06/1994', '01/01/2017', 'B.Com - General', '01/05/2020', '1', 'Good Student', 0, 0, '', '', 0),
(4, 's3', '107', 'f1', 'm1', '07/06/1994', '01/01/2017', 'B.Com - Honours', '01/05/2020', '1', 'Good Student', 0, 0, '', '', 0),
(5, 's4', '108', 'f1', 'm1', '07/06/1994', '01/01/2017', 'B.Com - General', '01/05/2020', '1', 'Good Student', 0, 0, '', '', 0),
(6, 's5', '109', 'f1', 'm1', '07/06/1994', '01/01/2017', 'B.Com - General', '01/05/2020', '1', 'Good Student', 0, 0, '', '', 0),
(7, 's6', '110', 'f1', 'm1', '07/06/1994', '01/01/2017', 'B.Com - General', '01/05/2020', '1', 'Good Student', 0, 0, '', '', 0),
(8, 's7', '111', 'f1', 'm1', '07/06/1994', '01/01/2017', 'B.Com - General', '01/05/2020', '1', 'Good Student', 0, 0, '', '', 0),
(9, 's8', '112', 'f1', 'm1', '07/06/1994', '01/01/2017', 'B.Com - General', '01/05/2020', '1', 'Good Student', 0, 0, '', '', 0),
(10, 's9', '113', 'f1', 'm1', '07/06/1994', '01/01/2017', 'B.Com - General', '01/05/2020', '1', 'Good Student', 0, 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_data`
--

CREATE TABLE `users_data` (
  `sno` bigint(100) NOT NULL,
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `year` int(10) NOT NULL,
  `pd` bigint(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_data`
--

INSERT INTO `users_data` (`sno`, `id`, `name`, `mobile`, `email`, `role`, `password`, `fathername`, `year`, `pd`, `course`) VALUES
(1, '101', 'Sravya', 6309613108, 'sravya@gamil.com', 1, 'e10adc3949ba59abbe56e057f20f883e', '', 3, 25000, 'B.Com'),
(5, '102', 'Yashita', 1234567890, 'yashitha@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', '', 3, 25000, 'B.Com'),
(6, '103', 'HArshith', 912837456, 'harshitha@gail,com', 1, 'e10adc3949ba59abbe56e057f20f883e', '', 2, 25000, 'B.Com'),
(7, '104', 'Singhra', 1209348756, '1@1', 1, 'e10adc3949ba59abbe56e057f20f883e', '', 1, 25000, 'B.Com'),
(11, '123', 'Chivukula Teja', 917993939789, 'Chivukulateja@outlook.com', 1, 'e10adc3949ba59abbe56e057f20f883e', '', 3, 25000, 'B.Sc'),
(12, '125', 'Chivukula Teja', 917993939789, 'Chivukulateja@outlook.com', 1, '827ccb0eea8a706c4c34a16891f84e7b', '', 2, 25000, 'B.Sc'),
(8, '130', 'demo', 917993939789, 'Chivukulateja@outlook.com', 1, 'e10adc3949ba59abbe56e057f20f883e', '', 1, 25000, 'B.Sc'),
(9, '131', 'Chivukula Teja', 917993939789, 'Chivukulateja@outlook.com', 1, 'e10adc3949ba59abbe56e057f20f883e', '', 1, 25000, 'B.Sc'),
(10, '133', 'Chivukula Teja', 917993939789, 'Chivukulateja@outlook.com', 1, 'e10adc3949ba59abbe56e057f20f883e', '', 1, 25000, 'B.Sc'),
(13, '190', 'Chivukula Teja', 917993939789, 'Chivukulateja@outlook.com', 1, '827ccb0eea8a706c4c34a16891f84e7b', '', 2, 25000, 'B.Sc'),
(2, '201', 'hema', 1234509876, 'hema@gmail.com', 2, 'e10adc3949ba59abbe56e057f20f883e', '', 2, 25000, 'B.Com'),
(3, '202', 'Chivukula Teja', 917993939789, 'Chivukulateja@outlook.com', 2, 'e10adc3949ba59abbe56e057f20f883e', '', 3, 25000, 'B.Com'),
(4, '203', 'Mounika', 1234567890, 'mounika@gmail.com', 2, 'e10adc3949ba59abbe56e057f20f883e', '', 2, 25000, 'B.Com'),
(14, '900', 'Chivukula Teja', 917993939789, 'Chivukulateja@outlook.com', 1, '827ccb0eea8a706c4c34a16891f84e7b', '', 1, 25000, 'B.Sc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sutdentdetails`
--
ALTER TABLE `sutdentdetails`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `users_data`
--
ALTER TABLE `users_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sutdentdetails`
--
ALTER TABLE `sutdentdetails`
  MODIFY `slno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_data`
--
ALTER TABLE `users_data`
  MODIFY `sno` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
