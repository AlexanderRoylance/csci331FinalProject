-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2024 at 01:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs2_skins`
--

-- --------------------------------------------------------

--
-- Table structure for table `skins`
--

CREATE TABLE `skins` (
  `Name` varchar(32) NOT NULL,
  `Collection` varchar(32) NOT NULL,
  `Date` varchar(32) NOT NULL,
  `Rarity` varchar(32) NOT NULL,
  `Weapon` varchar(32) NOT NULL,
  `Type` varchar(32) NOT NULL,
  `PriceLow` float NOT NULL,
  `PriceHigh` float NOT NULL,
  `ImgID` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skins`
--

INSERT INTO `skins` (`Name`, `Collection`, `Date`, `Rarity`, `Weapon`, `Type`, `PriceLow`, `PriceHigh`, `ImgID`) VALUES
('Integrale', '2018 Inferno Collection', '09/01/2018', 'Classified', 'SG 553', 'Rifle', 3.56, 78.86, '1.1'),
('Twin Turbo', '2018 Inferno Collection', '09/01/2018', 'Classified', 'Dual Barettas', 'Pistol', 0.9, 5.76, '1.2'),
('Safety Net', '2018 Inferno Collection', '09/01/2018', 'Restricted', 'AK-47', 'Rifle', 2.04, 7.33, '1.3'),
('Vino Primo', '2018 Inferno Collection', '09/01/2018', 'Restricted', 'P250', 'Pistol', 0.73, 7.1, '1.4'),
('Fade', '2018 Inferno Collection', '09/01/2018', 'Restricted', 'MP7', 'SMG', 3.6, 7.27, '1.5'),
('Check Engine', '2018 Inferno Collection', '09/01/2018', 'Mil-spec', 'USP-S', 'Pistol', 0.3, 1.37, '1.6'),
('Converter', '2018 Inferno Collection', '09/01/2018', 'Mil-spec', 'M4A4', 'Rifle', 0.39, 1.66, '1.7'),
('Hand Brake', '2018 Inferno Collection', '09/01/2018', 'Mil-spec', 'SSG 08', 'Sniper Rifle', 0.24, 0.87, '1.8'),
('Brake Light', '2018 Inferno Collection', '09/01/2018', 'Mil-spec', 'Sawed-Off', 'Shotgun', 0.53, 0.85, '1.9'),
('High Beam', '2018 Inferno Collection', '09/01/2018', 'Industrial', 'Glock-18', 'Pistol', 0.1, 0.39, '1.10'),
('Nitro', '2018 Inferno Collection', '09/01/2018', 'Industrial', 'R8 Revolver', 'Pistol', 0.04, 0.32, '1.11'),
('Calf Skin', '2018 Inferno Collection', '09/01/2018', 'Industrial', 'MAC-10', 'SMG', 0.04, 0.21, '1.12'),
('Candy Apple', '2018 Inferno Collection', '09/01/2018', 'Industrial', 'PP-Bizon', 'SMG', 0.05, 0.4, '1.13'),
('Dirty Drop', '2018 Inferno Collection', '09/01/2018', 'Consumer', 'MP5-SD', 'SMG', 0.01, 3.8, '1.14'),
('Slide', '2018 Inferno Collection', '09/01/2018', 'Consumer', 'MP9', 'SMG', 0.01, 1.33, '1.15'),
('Sweeper', '2018 Inferno Collection', '09/01/2018', 'Consumer', 'AUG', 'Rifle', 0.01, 0.14, '1.16'),
('Mudder', '2018 Inferno Collection', '09/01/2018', 'Consumer', 'UMP-45', 'SMG', 0.01, 0.53, '1.17'),
('Rust Coat', '2018 Inferno Collection', '09/01/2018', 'Consumer', 'MAG-7', 'Shotgun', 0.01, 0.22, '1.18'),
('Control Panel', '2018 Nuke Collection', '09/01/2018', 'Classified', 'M4A1-S', 'Rifle', 3.26, 49.6, '2.1'),
('Remote Control', '2018 Nuke Collection', '09/01/2018', 'Classified', 'Tec-9', 'Pistol', 0.93, 6, '2.2'),
('Nuclear Garden', '2018 Nuke Collection', '09/01/2018', 'Restricted', 'Glock-18', 'Pistol', 0.87, 5.91, '2.3'),
('Core Breach', '2018 Nuke Collection', '09/01/2018', 'Restricted', 'MAG-7', 'Shotgun', 0.66, 5.99, '2.4'),
('Random Access', '2018 Nuke Collection', '09/01/2018', 'Restricted', 'AUG', 'Rifle', 0.79, 4.67, '2.5'),
('Acheron', '2018 Nuke Collection', '09/01/2018', 'Mil-spec', 'AWP', 'Sniper Rifle', 0.22, 2.18, '2.6'),
('Exchanger', '2018 Nuke Collection', '09/01/2018', 'Mil-spec', 'P250', 'Pistol', 0.09, 0.6, '2.7'),
('Co-Processor', '2018 Nuke Collection', '09/01/2018', 'Mil-spec', 'MP5-SD', 'SMG', 0.11, 0.77, '2.8'),
('Facility Negative', '2018 Nuke Collection', '09/01/2018', 'Mil-spec', 'P90', 'SMG', 0.1, 1.05, '2.9'),
('Cold Fusion', '2018 Nuke Collection', '09/01/2018', 'Industrial', 'Galil AR', 'Rifle', 0.04, 1.84, '2.10'),
('Bulkhead', '2018 Nuke Collection', '09/01/2018', 'Industrial', 'Negev', 'Machine Gun', 0.03, 0.59, '2.11'),
('Motherboard', '2018 Nuke Collection', '09/01/2018', 'Industrial', 'MP7', 'SMG', 0.04, 4, '2.12'),
('Mainframe', '2018 Nuke Collection', '09/01/2018', 'Industrial', 'M4A4', 'Rifle', 0.04, 0.24, '2.13'),
('Mandrel', '2018 Nuke Collection', '09/01/2018', 'Consumer', 'Nova', 'Shotgun', 0.01, 0.04, '2.14'),
('Coolant', '2018 Nuke Collection', '09/01/2018', 'Consumer', 'Five-SeveN', 'Pistol', 0.01, 0.3, '2.15'),
('Facility Dark', '2018 Nuke Collection', '09/01/2018', 'Consumer', 'UMP-45', 'SMG', 0.01, 0.03, '2.16'),
('Facility Drive', '2018 Nuke Collection', '09/01/2018', 'Consumer', 'P250', 'Pistol', 0.01, 0.08, '2.17'),
('Facility Sketch', '2018 Nuke Collection', '09/01/2018', 'Consumer', 'PP-Bizon', 'SMG', 0.01, 0.91, '2.18'),
('Franklin', 'Bank Collection', '05/01/2014', 'Classified', 'P250', 'Pistol', 0.51, 1.95, '3.1'),
('Emerald Pinstripe', 'Bank Collection', '05/01/2014', 'Restricted', 'AK-47', 'Rifle', 1.82, 11.39, '3.2'),
('Tuxedo', 'Bank Collection', '05/01/2014', 'Mil-spec', 'CZ75-Auto', 'Pistol', 0.28, 1.2, '3.3'),
('Tuxedo', 'Bank Collection', '05/01/2014', 'Mil-spec', 'Galil AR', 'Rifle', 0.27, 2.2, '3.4'),
('Meteorite', 'Bank Collection', '05/01/2014', 'Mil-spec', 'Desert Eagle', 'Pistol', 0.45, 1.33, '3.5'),
('Green Apple', 'Bank Collection', '05/01/2014', 'Industrial', 'G3SG1', 'Sniper Rifle', 0.06, 0.39, '3.6'),
('Death Rattle', 'Bank Collection', '05/01/2014', 'Industrial', 'Glock-18', 'Pistol', 0.05, 0.59, '3.7'),
('Silver', 'Bank Collection', '05/01/2014', 'Industrial', 'MAC-10', 'SMG', 0.12, 0.27, '3.8'),
('Caged Steel', 'Bank Collection', '05/01/2014', 'Industrial', 'Nova', 'Shotgun', 0.07, 0.29, '3.9'),
('Carbon Fiber', 'Bank Collection', '05/01/2014', 'Industrial', 'UMP-45', 'SMG', 0.09, 0.28, '3.10'),
('Bone Mask', 'Bank Collection', '05/01/2014', 'Consumer', 'R8 Revolver', 'Pistol', 0.01, 0.07, '3.11'),
('Forest DDPAT', 'Bank Collection', '05/01/2014', 'Consumer', 'MP7', 'SMG', 0.01, 0.06, '3.12'),
('Forest DDPAT', 'Bank Collection', '05/01/2014', 'Consumer', 'Sawed-Off', 'Shotgun', 0.01, 0.06, '3.13'),
('Urban DDPAT', 'Bank Collection', '05/01/2014', 'Consumer', 'Tec-9', 'Pistol', 0.01, 0.15, '3.14'),
('Army Sheen', 'Bank Collection', '05/01/2014', 'Consumer', 'Negev', 'Machine Gun', 0.01, 0.02, '3.15'),
('Army Sheen', 'Bank Collection', '05/01/2014', 'Consumer', 'SG 553', 'Rifle', 0.02, 0.02, '3.16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
