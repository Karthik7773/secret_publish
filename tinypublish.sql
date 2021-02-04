-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2021 at 06:28 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tinypublish`
--

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `pid` int(20) NOT NULL,
  `useremail` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `test` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`pid`, `useremail`, `title`, `test`) VALUES
(1, 'sukka@', 'pink', 'bbk kbkbk kbk  kbfkb kkf'),
(5, 'sukka@gmail.com', 'shrutha my love', 'i loved u so much but I missed u baby ðŸ˜¢ðŸ˜¢ðŸ˜¢ðŸ˜­ðŸ˜­ bro i liove u\r\npandari nath bhat'),
(6, 'shiva@gmail.com', 'Shiva', 'Being smart is better then anything......\r\nright ....'),
(7, 'sukka@gmail.com', 'shrutha my love', 'i loved u so much but I missed u baby ðŸ˜¢ðŸ˜¢ðŸ˜¢ðŸ˜­ðŸ˜­ bro i liove u\r\npandari nath bhat');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `uid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `useremail` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `test` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`uid`, `username`, `useremail`, `title`, `test`) VALUES
(4, 'sukka', 'sukka@gmail.com', 'pandari', 'i loved u so much but I missed u baby ðŸ˜¢ðŸ˜¢ðŸ˜¢ðŸ˜­ðŸ˜­ bro i liove u\r\npandari nath bhat'),
(5, 'shiva', 'shiva@gmail.com', 'Shiva', 'Being smart is better then anything......\r\nright ....');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `useremail` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `useremail`, `contact`, `password`) VALUES
(1, 'sukka', 'sukka@gmail.com', 1234567890, 'sukka12'),
(2, 'shiva', 'shiva@gmail.com', 1234567890, 'shiva12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `public`
--
ALTER TABLE `public`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
