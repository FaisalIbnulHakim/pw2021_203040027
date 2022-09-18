-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 08:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_203040027`
--

-- --------------------------------------------------------

--
-- Table structure for table `figure`
--

CREATE TABLE `figure` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `anime` varchar(80) NOT NULL,
  `produksi` varchar(80) NOT NULL,
  `harga` varchar(80) NOT NULL,
  `gambar` varchar(80) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `figure`
--

INSERT INTO `figure` (`id`, `nama`, `anime`, `produksi`, `harga`, `gambar`, `gender`) VALUES
(1, 'Rimuru Tempest', 'Tensei Shitara Slime Datta Ken', 'Phat!', 'IDR 2,600,000', 'rimuru.jpg', 'man'),
(2, 'Sakurajima Mai', 'Seishun Buta Yarou wa Bunny Girl Senpai', 'ANIPLEX+', 'IDR 2,850,000', 'mai.jpg', 'women'),
(3, 'Kaori Miyazono', 'Shigatsu wa Kimi no Uso', 'ANIPLEX+', 'IDR 2,250,000', 'kaori.jpg', 'women'),
(4, 'Nezuko Kamado', 'Kimetsu no Yaiba', 'Good Smile Company', 'IDR 500,000', 'nezuko.jpg', 'women'),
(5, 'Eris Boreas Greyrat', 'Mushoku Tensei: Isekai Ittara Honki Dasu', 'Union Creative', 'IDR 2,310,000', 'eris.jpg', 'women'),
(6, 'Megumin', 'Kono Subarashii Sekai ni Shukufuku wo!', 'Chara Ani', 'IDR 2,800,000', 'megumin.jpg', 'women'),
(7, 'Senku Ishigami', 'Dr. Stone', 'Bandai Spirits', 'IDR 760,000', 'senku.jpg', 'man'),
(8, 'Naofumi Iwatani', 'Tate no Yuusha no Nariagari', 'Good Smile Company', 'IDR 520,000', 'naofumi.jpg', 'man'),
(9, 'Kurumi Tokisaki', 'Date A Live', 'Alter', 'IDR 2,650,000', 'kurumi.jpg', 'women'),
(10, 'Aliceliese Lou Nebulis IX', 'Kimi to Boku no Saigo no Senjou', 'F:NEX', 'IDR 4,150,000', 'alice.jpg', 'women'),
(14, 'Hinata Shoyo', 'Haikyuu', 'Orange Rouge', 'IDR 490,000', 'shoyo.jpg', 'man');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `figure`
--
ALTER TABLE `figure`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `figure`
--
ALTER TABLE `figure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
