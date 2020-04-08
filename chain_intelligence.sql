-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 06, 2020 at 06:28 PM
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
-- Database: `chain_intelligence`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`) VALUES
(1, 'Demo Blog 1', 'This is a demo blog. This is a demo blog. This is a demo blog. This is a demo blog.\r\nThis is a demo blog. This is a demo blog. This is a demo blog. This is a demo blog.\r\nThis is a demo blog. This is a demo blog. This is a demo blog. This is a demo blog.\r\nThis is a demo blog. This is a demo blog. This is a demo blog. This is a demo blog.\r\n\r\nThis is a demo blog. This is a demo blog. This is a demo blog. This is a demo blog.\r\nThis is a demo blog. This is a demo blog. This is a demo blog. This is a demo blog.\r\nThis is a demo blog. This is a demo blog. This is a demo blog. This is a demo blog.\r\nThis is a demo blog. This is a demo blog. This is a demo blog. This is a demo blog.\r\n\r\nThis is a demo blog. This is a demo blog. This is a demo blog. This is a demo blog.\r\nThis is a demo blog. This is a demo blog. This is a demo blog. This is a demo blog.\r\nThis is a demo blog. This is a demo blog. This is a demo blog. This is a demo blog.\r\nThis is a demo blog. This is a demo blog. This is a demo blog. This is a demo blog.\r\n\r\nThis is a demo blog. This is a demo blog. This is a demo blog. This is a demo blog.\r\nThis is a demo blog. This is a demo blog. This is a demo blog. This is a demo blog.\r\nThis is a demo blog. This is a demo blog. This is a demo blog. This is a demo blog.\r\nThis is a demo blog. This is a demo blog. This is a demo blog. This is a demo blog.');

-- --------------------------------------------------------

--
-- Table structure for table `coding`
--

CREATE TABLE `coding` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coding`
--

INSERT INTO `coding` (`id`, `topic`, `category`, `description`) VALUES
(1, 'C', 'Indroduction', '<pre>C is a procedural and structured programming language. It was developed by Denis Richie and\r\nBrian Kernighan at Bell Telecommunications Lab at the late 1970. It was mainly developed as\r\na system programming language. It is a very popular programming language to the programmers\r\nfor the last several decades.</pre>'),
(2, 'C', 'Variables and Keywords in C', '<pre>A variable in simple terms is a storage place which has some memory allocated to it. Basically, \r\na variable used to store some form of data. Different types of variables require different \r\namounts of memory, and have some specific set of operations which can be applied on them.</pre>'),
(3, 'C', 'Data types in C', '<pre>Each variable in C has an associated data type. Each data type requires different amounts of \r\nmemory and has some specific operations which can be performed over it. Let us briefly describe \r\nthem one by one:\r\n\r\nFollowing are the examples of some very common data types used in C:\r\n\r\n    char: The most basic data type in C. It stores a single character and requires a single \r\nbyte of memory in almost all compilers.\r\n    int: As the name suggests, an int variable is used to store an integer.\r\n    float: It is used to store decimal numbers (numbers with floating point value) with \r\nsingle precision.\r\n    double: It is used to store decimal numbers (numbers with floating point value) with \r\ndouble precision.</pre>'),
(4, 'C', 'hello world program in C', '<pre>#include &lt;stdio.h&gt;\r\n\r\nint main()\r\n{\r\n    printf(\"Hello, World!\");\r\n    return 0;\r\n}</pre>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coding`
--
ALTER TABLE `coding`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coding`
--
ALTER TABLE `coding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
