-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2016 at 02:32 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c_labs`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_user`
--

CREATE TABLE IF NOT EXISTS `new_user` (
  `name` varbinary(100) NOT NULL,
  `email` varbinary(100) NOT NULL,
  `contact` varbinary(11) NOT NULL,
  `address` varbinary(100) NOT NULL,
  `password` varbinary(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_user`
--

INSERT INTO `new_user` (`name`, `email`, `contact`, `address`, `password`) VALUES
('0', '0', '2147483647', '0', '1234'),
('dharam', 'chandeldharmendra15@gmail.com', '2147483647', 'j 842 vit mens hostel', '1234'),
('sidh', 'dhammucool15@gmail.com', '8680897975', 'j 842 vit mens hostel', '1234'),
('savan', 'chandeldharmendra15@gmail.com', '08680897975', 'j 842 vit mens hostel', '$1$11a98374$p3lKHcW0tuaYL9btMSKxL1'),
('', 'chandeldharmendra15@gmail.com', '08680897975', 'j 842 vit mens hostel', '$1$11a98374$vQn1a94ihN6nF1zCudSBm/'),
('', 'chandeldharmendra15@gmail.com', '08680897975', 'j 842 vit mens hostel', '$1$11a98374$vQn1a94ihN6nF1zCudSBm/'),
('', 'chandeldharmendra15@gmail.com', '8680897975', 'j 842 vit mens hostel', '$1$11a98374$vQn1a94ihN6nF1zCudSBm/'),
('hd13eTZy9kvLXZmTmHFAXXICszYHc1dabu+ZwLbGuws=', 'chandeldharmendra15@gmail.com', '9889046611', 'j 842 vit vellore', '$1$11a98374$vQn1a94ihN6nF1zCudSBm/'),
('hd13eTZy9kvLXZmTmHFAXXICszYHc1dabu+ZwLbGuws=', 'btcN9eKMwh6mMIRJfJvsi4skDf41CjE7mBEkXzCRaww=', 'xXwnZpaA9yz', '+eRv0rwR24YsemgP7riQs6FvvWgbrLmLgZjv0gBUJFw=', '$1$11a98374$/Vn4/9g642FpbvTsE0z911'),
('YLFZSUm4GjR5po1WnyJD8ydmXEM0tU6G3g3R655f038=', 'btcN9eKMwh6mMIRJfJvsi4skDf41CjE7mBEkXzCRaww=', 'lMV8zNAT1+0', '+eRv0rwR24YsemgP7riQs6FvvWgbrLmLgZjv0gBUJFw=', '$1$11a98374$vlO.PUNcDKmQe78jGlcOw1'),
('K+7MErvgi75B/lPMCGsW6KIR1QgmUy1sEzf2ZucOzUQ=', 'btcN9eKMwh6mMIRJfJvsi4skDf41CjE7mBEkXzCRaww=', 'xXwnZpaA9yz', '+eRv0rwR24YsemgP7riQs6FvvWgbrLmLgZjv0gBUJFw=', 'K+7MErvgi75B/lPMCGsW6KIR1QgmUy1sEzf2ZucOzUQ='),
('YLFZSUm4GjR5po1WnyJD8ydmXEM0tU6G3g3R655f038=', 'btcN9eKMwh6mMIRJfJvsi4skDf41CjE7mBEkXzCRaww=', 'xXwnZpaA9yz', '+eRv0rwR24YsemgP7riQs6FvvWgbrLmLgZjv0gBUJFw=', '$1$11a98374$/Vn4/9g642FpbvTsE0z911'),
('1uyrNdibLmYmRrlr/NovLyUXSC52sebK1C/AutQaeKc=', 'btcN9eKMwh6mMIRJfJvsi4skDf41CjE7mBEkXzCRaww=', 'lMV8zNAT1+0', '+eRv0rwR24YsemgP7riQs6FvvWgbrLmLgZjv0gBUJFw=', '$1$11a98374$z6ZZrf0AtUALiawKOYZRI1'),
('2Jwgjqn5dovricbDcA+b7PFCLfpGTltN614PhGs5HwM=', 'C0Sf9AqUWYZMMjqXfcUq5Ruqs0r7D4wGv70tmp/qAmo=', 'fGBsvh6bexk', 'RMSZ4pVilzMVLvsnpoA75+pOTnuMN+wUMeTwagKMqz8=', '$1$11a98374$aKsXuM3FJSO3awDLLs7h60');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
