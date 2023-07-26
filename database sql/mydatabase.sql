-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2023 at 10:21 AM
-- Server version: 5.7.42-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `network_devices`
--

CREATE TABLE `network_devices` (
  `id` int(11) NOT NULL,
  `ticket_number` varchar(50) NOT NULL,
  `device_type` enum('access_point','client','switch') NOT NULL,
  `jenis_gangguan` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `lantai` varchar(50) NOT NULL,
  `ap_name` varchar(50) DEFAULT NULL,
  `ap_serial_number` varchar(50) DEFAULT NULL,
  `new_ap_serial` varchar(50) DEFAULT NULL,
  `deskripsi_gangguan` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `user_pn` varchar(255) DEFAULT NULL,
  `nama_switch` varchar(255) DEFAULT '',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `network_devices`
--

INSERT INTO `network_devices` (`id`, `ticket_number`, `device_type`, `jenis_gangguan`, `lokasi`, `lantai`, `ap_name`, `ap_serial_number`, `new_ap_serial`, `deskripsi_gangguan`, `status`, `user_pn`, `nama_switch`, `timestamp`) VALUES
(6, 'TLKM-00001', 'access_point', 'AP Rusak', 'Bri 1 Sudirman', '10', 'BR1-WS-AP03_LT017_SW01', 'FGH01234', '-', 'AP rusak akan di lakukan penggantian', 'Pending', NULL, '', '2023-07-24 00:23:39'),
(7, 'TLKM-00002', 'client', 'Lambat', 'Bri 1 Sudirman', '10', NULL, NULL, NULL, 'jauh dari AP\r\nsolusi, membesarkan power di Aksess Point', 'Close', '0012345', '', '2023-07-24 00:24:22'),
(8, 'TLKM-00003', 'switch', 'Switch Rusak', 'Bri 1 Sudirman', '10', NULL, NULL, NULL, 'Rusak, akan di lakukan penggantian Switch', 'Pending', NULL, 'SW0911', '2023-07-24 00:25:23');

--
-- Triggers `network_devices`
--
DELIMITER $$
CREATE TRIGGER `generate_ticket_number` BEFORE INSERT ON `network_devices` FOR EACH ROW BEGIN
  DECLARE max_ticket_number VARCHAR(50);
  SET max_ticket_number = (SELECT MAX(ticket_number) FROM `network_devices`);
  IF max_ticket_number IS NULL THEN
    SET NEW.ticket_number = 'TLKM-00001';
  ELSE
    SET NEW.ticket_number = CONCAT('TLKM-', LPAD(SUBSTRING(max_ticket_number, 6) + 1, 5, '0'));
  END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `network_devices`
--
ALTER TABLE `network_devices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `network_devices`
--
ALTER TABLE `network_devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
