-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2016 at 08:56 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fast`
--

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE IF NOT EXISTS `website` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`Name`, `Email`, `Comment`) VALUES
('mashooque', 'mashooque@gmail.com', 'Hi mashooque ali '),
('Majid', 'majid@gmail.com', 'The oldest classical Greek and Latin writing had little or no space between words, and could be written in boustrophedon (alternating directions). Over time, text direction (left to right) became standardized, and word dividers and terminal punctuation became common. The first way to divide sentences into groups was the original paragraphos, similar to an underscore at the beginning of the new group.[3] The Greek paragraphos evolved into the pilcrow (Â¶), which in English manuscripts in the Middle Ages can be seen inserted inline between sentences. The hedera leaf (e.g. â˜™) has also been used in the same way.'),
('Mansoor Ghoto', 'mansooralighk91@nu.edu.pk', 'The oldest classical Greek and Latin writing had little or no space between words, and could be written in boustrophedon (alternating directions). Over time, text direction (left to right) became standardized, and word dividers and terminal punctuation became common. The first way to divide '),
('Aamir Ali ', 'k122239@nu.du.pk', 'The Moon is a barren, rocky world without air and water. It has dark lava plain on its surface. The Moon is filled wit craters. It has no light of its own. It gets its light from the Sun. The Moo keeps changing its shape as it moves round the Earth. It spins on its axis in 27.3 days stars were named after the Edwin Aldrin were the first ones to set their foot on the Moon on 21 July 1969 They reached the Moon in their space craft named Apollo II.'),
('mashooque 1', 'k122249@nu.edu.pk', 'hi,dflgg'),
('Mashooque Ali Ghoto', 'k122249@nu.edu.pk', 'hi Ghoto .mashooque ali gagdjfhf'),
('Majid khan', 'k12223999@nu.edu.pk', 'hifiigigigiigigigiigigiigigigiibibkiiibjbjgjdjfjvfn ffljdbgkvjrnv'),
('danish panhwar', 'danish@gmail.com', 'ap ki wbsite ache nahe ha\r\n'),
('danish', 'danish123@gmail.com', 'hi danish !!!!!!!!!!!!!!!!!!!!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
