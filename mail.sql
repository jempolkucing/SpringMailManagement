-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2013 at 11:15 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mail`
--

-- --------------------------------------------------------

--
-- Table structure for table `domains`
--

CREATE TABLE IF NOT EXISTS `domains` (
  `domain` varchar(50) NOT NULL,
  PRIMARY KEY (`domain`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domains`
--

INSERT INTO `domains` (`domain`) VALUES
('arsitek.itats.ac.id'),
('despro.itats.ac.id'),
('elektro.itats.ac.id'),
('geologi.itats.ac.id'),
('industri.itats.ac.id'),
('inf.itats.ac.id'),
('itats.ac.id'),
('kimia.itats.ac.id'),
('lingkungan.itats.ac.id'),
('mail.itats.ac.id'),
('mail.si.itats.ac.id'),
('mesin.itats.ac.id'),
('perkapalan.itats.ac.id'),
('pertambangan.itats.ac.id'),
('si.itats.ac.id'),
('sipil.itats.ac.id'),
('ti.itats.ac.id'),
('tk.itats.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `forwardings`
--

CREATE TABLE IF NOT EXISTS `forwardings` (
  `source` varchar(80) NOT NULL,
  `destination` text NOT NULL,
  PRIMARY KEY (`source`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `status`) VALUES
(1, 'M.Muslihul Arwani', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE IF NOT EXISTS `mhs` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `npm` varchar(30) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `tgllahir` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id`, `email`, `password`, `nama`, `npm`, `telp`, `tgllahir`, `jurusan`) VALUES
(1, 'wawau@mahasiswa.itats.ac.idaaii007', 'f2216eea562703e902aa6c70ab7ecd0a', 'waway', '06.2009.1.04861', '123456', '123456', 'Teknik Informatika'),
(6, 'vivin@mahasiswa.itats.ac.id@mahasiswa.itats.ac.idaaii007', 'f2216eea562703e902aa6c70ab7ecd0a', 'Vivin Koesmarini', '062009104963', '085648912795', '27 januari', 'Teknik Informatika'),
(5, 'zanni_adventure@mahasiswa.itats.ac.idaaii007', 'f2216eea562703e902aa6c70ab7ecd0a', 'Izzani Yahya', '06.2009.1.04940', '085230302031', '28/06/1991', 'Teknik Informatika'),
(76, 'zidny_hanif@mahasiswa.itats.ac.idaaii007', 'f2216eea562703e902aa6c70ab7ecd0a', 'zidny hanif', '06.2009.1.05203', '085731699509', '23-09-1990', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `tempmhs`
--

CREATE TABLE IF NOT EXISTS `tempmhs` (
  `npm` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgllahir` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
  `domain` varchar(128) NOT NULL DEFAULT '',
  `transport` varchar(128) NOT NULL DEFAULT '',
  UNIQUE KEY `domain` (`domain`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`domain`, `transport`) VALUES
('itats.ac.id', 'smtp:mail.itats.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nidn` int(30) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=316 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nama`, `nidn`, `telp`, `mail`, `jurusan`) VALUES
(1, 'admin@itats.ac.id', '21232f297a57a5a743894a0e4a801fc3', 'wawau', 1234, '1234', 'arwani@jempolkucing.com', 'informatika'),
(314, 'hasan@itats.ac.idaaii007', 'f2216eea562703e902aa6c70ab7ecd0a', 'hasan', 1234, '1234567', 'hasanfikri3@gmail.com', 'Teknik Informatika');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
