-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 07:00 AM
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
-- Database: `pw_tubes_203040027`
--

-- --------------------------------------------------------

--
-- Table structure for table `gaminggear`
--

CREATE TABLE `gaminggear` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gaminggear`
--

INSERT INTO `gaminggear` (`id`, `nama`, `deskripsi`, `harga`, `tipe`, `gambar`) VALUES
(1, 'Corsair Hs70 Pro', 'Frequency Response: 20 Hz – 20 kHz | Headphone Sensitivity: 111dB (+/-3dB) | Headphone Type: Wireless | Microphone Frequency Response: 100Hz to 10kHz | Microphone Sensitivity: -40dB (+/-3dB)', 'Rp 1,400,000', 'Headset', 'hd1.png'),
(2, 'Razer Nari Ultimate', 'Frequency Response: 20 Hz – 20 kHz | Headphone Sensitivity: 107dB (+/-3dB) | Headphone Type: Wireless USB Transceiver / 3.5mm Analog | Microphone Frequency Response: 100Hz to 6.5kHz | Microphone Sensitivity: -42dB (+/-3dB)', 'Rp 3,299,000', 'Headset', 'hd2.png'),
(3, 'Sennheiser Gsp 350', 'Frequency Response: 15 Hz - 26 KHz | Headphone Sensitivity: 113dB | Headphone Type: USB | Microphone Frequency Response: 10Hz to 15kHz | Microphone Sensitivity: -41dB', 'Rp 1,790,000', 'Headset', 'hd3.png'),
(4, 'Steelseries Arctis 7', 'Frequency Response: 20 Hz – 22 kHz | Headphone Sensitivity: 98dB | Headphone Type: Wireless USB and Wired analog options Single 3.5mm | Microphone Frequency Response: 100Hz to 6.5kHz | Microphone Sensitivity: -48dB', 'Rp 2,285,000', 'Headset', 'hd4.png'),
(5, 'Corsair K68 RGB', 'Height: 455 mm | Width: 170 mm | Depth: 39 mm | Weight: 1.12 kg | Cable: NA | Connection Type: USB 2.0 Type-A | USB Protocol: USB 2.0 | Backlighting: RGB', 'Rp 1,299,000', 'Keyboard', 'ky1.png'),
(6, 'Logitech G Pro X Keyboard', 'Height: 34 mm | Width: 361 mm | Depth: 153 mm | Weight: 0,98 kg | Cable: 1.8 m | Connection Type: USB 2.0 | USB Protocol: USB 2.0 | Backlighting: RGB', 'Rp 1,549,000', 'Keyboard', 'ky2.png'),
(7, 'Logitech G213 Prodigy', 'Height: 218 mm | Width: 452 mm | Depth: 33 mm | Weight: 1 kg | Cable: 1.8 m | Connection Type: USB 2.0 | USB Protocol: USB 2.0 | Backlighting: RGB (5 Zona)s', 'Rp 619,000', 'Keyboard', 'ky3.png'),
(8, 'Steelseries Apex Pro TKL', 'Height: 40.44 mm | Width: 139.26 mm | Depth: 355.44 mm | Weight: 1 kg | Cable: 2,1 m | Connection Type:  USB Passthrough Port | USB Protocol: USB 2.0 | Backlighting: RGB', 'Rp 2,920,000', 'Keyboard', 'ky4.png'),
(9, 'Razer Taipan', 'Length: 124 mm | Width: 63 mm | Height: 36 mm | Weight: 95 g | Cable-Length: NA | DPI: 8,200 | Mouse Backlighting: NA', 'Rp 800,000', 'Mouse', 'ms1.png'),
(10, 'Corsair Iron Claw RGB', 'Length: 130 mm | Width: 80 mm | Height: 45 mm | Weight: 105 g | Cable-Length: 1,8 m | DPI: 18,000 | Mouse Backlighting: 1 RGB Zones', 'Rp 799,000', 'Mouse', 'ms2.png'),
(11, 'Corsair Nightsword RGB', 'Length: 129 mm | Width: 86 mm | Height: 43.8 mm | Weight: 119 g | Cable-Length: 1,8 m | DPI: 18,000 | Mouse Backlighting: 4 RGB Zones', 'Rp 1,269,000', 'Mouse', 'ms3.png'),
(12, 'Steelseries Rival 600', 'Length: 131 mm | Width: 62 mm | Height: 27 mm | Weight: 128 g | Cable-Length: 2 m | DPI: 12,000 | Mouse Backlighting: 8 RGB Zones', 'Rp 1,250,000', 'Mouse', 'ms4.png'),
(15, 'Logitech G600 MMO Gaming Mouse', 'Length : 5m', 'Rp 1,200,000', 'mouse', 'ms5.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gaminggear`
--
ALTER TABLE `gaminggear`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gaminggear`
--
ALTER TABLE `gaminggear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
