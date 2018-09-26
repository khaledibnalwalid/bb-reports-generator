-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 16, 2018 at 02:50 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `generator`
--

-- --------------------------------------------------------

--
-- Table structure for table `bugs`
--

CREATE TABLE `bugs` (
  `ID` int(3) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `BugGroup` int(3) NOT NULL DEFAULT '1',
  `ReportFile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bugs`
--

INSERT INTO `bugs` (`ID`, `Name`, `BugGroup`, `ReportFile`) VALUES
(1, 'Bypass Cors', 1, 'bypass_cors'),
(2, 'Click Jacking', 1, 'clickjacking'),
(3, 'CRLF', 1, 'crlf'),
(4, 'CSRF', 1, 'csrf'),
(5, 'Directory Listing', 1, 'dir_listing'),
(6, 'FPD', 1, 'fpd'),
(7, 'IDOR', 1, 'idor'),
(8, 'LFI', 1, 'lfi'),
(9, 'Missing session invalidation after change pass', 8, 'missing_after_change'),
(10, 'Open redirect', 1, 'open_redirect'),
(11, 'PHP Info', 1, 'phpinfo'),
(12, 'Pixel Flood', 1, 'pixel_flood'),
(13, 'Referer Leakage', 8, 'ref_leackage'),
(14, 'Full account takeover', 5, 'no_rate_full_account'),
(15, 'Login page', 5, 'no_rate_login'),
(16, 'Registration page', 5, 'no_rate_reg'),
(17, 'Reset page', 5, 'no_rate_reset'),
(18, 'Mobile verification ( spam sms )', 5, 'no_rate_mob'),
(19, 'S3 Bucket ( Read )', 7, 's3_read'),
(20, 'S3 Bucket ( Copy files )', 7, 's3_copy'),
(21, 'S3 Bucket ( Full Access )', 7, 's3_full'),
(22, 'Users information', 3, 'wp_user_info'),
(23, 'Yoast SEO Xss', 3, 'wp_yoast_xss'),
(24, 'xmlrpc file', 3, 'wp_xmlrpc'),
(25, 'Bridge theme dom Xss', 3, 'wp_bridge_xss'),
(26, 'Reset password not expire', 8, 'reset_not_expire');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`ID`, `Name`) VALUES
(1, 'Public'),
(2, 'XSS'),
(3, 'WordPress'),
(4, 'Drupal'),
(5, 'No Rate Limit'),
(6, 'SQL'),
(7, 'S3 Bucket'),
(8, 'Password Function');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bugs`
--
ALTER TABLE `bugs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `bug_with_Group` (`BugGroup`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bugs`
--
ALTER TABLE `bugs`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bugs`
--
ALTER TABLE `bugs`
  ADD CONSTRAINT `bug_with_Group` FOREIGN KEY (`BugGroup`) REFERENCES `groups` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
