-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 12:14 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labourchauraha`
--
CREATE DATABASE IF NOT EXISTS `labourchauraha` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `labourchauraha`;

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `name` varchar(20) NOT NULL,
  `aadhar` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `labourers`
--

CREATE TABLE `labourers` (
  `name` varchar(20) NOT NULL,
  `aadhar` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `skills` varchar(30) NOT NULL,
  `money` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `selected`
--

CREATE TABLE `selected` (
  `name` varchar(20) NOT NULL,
  `aadhar` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `skills` varchar(30) NOT NULL,
  `money` int(10) NOT NULL,
  `eaadhar` varchar(20) NOT NULL,
  `ephone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`aadhar`),
  ADD UNIQUE KEY `aadhar` (`aadhar`);

--
-- Indexes for table `labourers`
--
ALTER TABLE `labourers`
  ADD PRIMARY KEY (`aadhar`),
  ADD UNIQUE KEY `aadhar` (`aadhar`);
