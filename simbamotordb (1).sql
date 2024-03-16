-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 07:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simbamotordb`
--

-- --------------------------------------------------------

--
-- Table structure for table `carloans`
--

CREATE TABLE `carloans` (
  `LoanID` int(11) NOT NULL,
  `CarID` int(11) DEFAULT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `Status` varchar(150) NOT NULL,
  `LoanAmount` decimal(10,2) DEFAULT NULL,
  `hireDate` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carloans`
--

INSERT INTO `carloans` (`LoanID`, `CarID`, `CustomerID`, `Status`, `LoanAmount`, `hireDate`) VALUES
(7, 12, 16, 'Pending', 500.00, '2024-03-12'),
(8, 13, 16, 'Approved', 300.00, '2024-03-12'),
(9, 11, 16, 'Pending', 400.00, '2024-03-13'),
(10, 12, 17, 'Pending', 500.00, '2024-03-14'),
(11, 6, 18, 'Approved', 200.00, '2024-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `CarID` int(11) NOT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `Make` varchar(50) DEFAULT NULL,
  `Model` varchar(50) DEFAULT NULL,
  `Type` varchar(11) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Image_name` varchar(255) NOT NULL,
  `video_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`CarID`, `CategoryID`, `Make`, `Model`, `Type`, `Price`, `Image_name`, `video_name`) VALUES
(4, 4, 'Simba Car 1', 'Make 1', 'sale', 13700.00, 'car-1.jpg', 'car-1.mp4'),
(5, 4, 'Simba Car 2', 'Make 2', 'sale', 35400.00, 'car-2.jpg', 'car-4.mp4'),
(6, 4, 'Simba Car 3', 'Make 3', 'hire', 200.00, 'car-3.jpg', 'car-3.mp4'),
(7, 4, 'Simba Car 4', 'Make 4', 'sale', 36300.00, 'car-4.jpg', 'car-4.mp4'),
(8, 4, 'Simba Car 5', 'Make 5', 'sale', 29400.00, 'car-5.jpg', 'car-5.mp4'),
(9, 4, 'Simba Car 6', 'Make 6', 'sale', 28800.00, 'car-6.jpg', 'car-2.mp4'),
(10, 4, 'Simba Car 7', 'Make 7', 'hire', 100.00, 'car-7.jpg', 'car-2.mp4'),
(11, 4, 'Simba Car 8', 'Make 8', 'hire', 400.00, 'car-8.jpg', 'car-1.mp4'),
(12, 4, 'Simba Car 9', 'Make 9', 'hire', 500.00, 'car-9.jpg', 'car-5.mp4'),
(13, 4, 'Simba Car 10', 'Make 10', 'hire', 300.00, 'car-10.jpg', 'car-3.mp4'),
(14, 4, 'Simba Car 11', 'Make 11', 'hire', 300.00, 'car-11.jpg', 'car-1.mp4'),
(15, 4, 'Simba Car 12', 'Make 12', 'sale', 25800.00, 'car-12.jpg', 'car-2.mp4'),
(16, 4, 'Simba Car 13', 'Make 13', 'hire', 400.00, 'car-13.jpeg', 'car-2.mp4'),
(17, 4, 'Simba Car 14', 'Make 14', 'sale', 14300.00, 'car-14.jpeg', 'car-5.mp4'),
(18, 4, 'Simba Car 15', 'Make 15', 'sale', 49300.00, 'car-15.jpeg', 'car-1.mp4'),
(19, 4, 'Simba Car 16', 'Make 16', 'hire', 0.04, 'car-16.jpeg', 'car-1.mp4'),
(20, 4, 'Simba Car 17', 'Make 17', 'sale', 37400.00, 'car-17.jpeg', 'car-4.mp4'),
(21, 4, 'Simba Car 18', 'Make 18', 'sale', 19200.00, 'car-18.jpeg', 'car-2.mp4'),
(22, 4, 'Simba Car 19', 'Make 19', 'sale', 29800.00, 'car-19.jpeg', 'car-2.mp4'),
(23, 4, 'Simba Car 20', 'Make 20', 'sale', 18500.00, 'car-20.jpeg', 'car-1.mp4'),
(24, 4, 'Simba Car 21', 'Make 21', 'hire', 400.00, 'car-21.jpeg', 'car-2.mp4'),
(25, 4, 'Simba Car 22', 'Make 22', 'sale', 48500.00, 'car-22.jpeg', 'car-2.mp4'),
(26, 4, 'Simba Car 23', 'Make 23', 'sale', 45000.00, 'car-23.jpeg', 'car-1.mp4'),
(27, 4, 'Simba Car 24', 'Make 24', 'hire', 200.00, 'car-24.jpeg', 'car-1.mp4'),
(28, 4, 'Simba Car 25', 'Make 25', 'hire', 300.00, 'car-25.jpeg', 'car-2.mp4'),
(29, 2, 'Simba Bus 1', 'Make 1', 'hire', 290.00, 'bus-1.jpeg', 'bus-1.mp4'),
(30, 2, 'Simba Bus 2', 'Make 2', 'sale', 44000.00, 'bus-2.jpeg', 'bus-1.mp4'),
(31, 2, 'Simba Bus 3', 'Make 3', 'hire', 208.00, 'bus-3.jpeg', 'bus-2.mp4'),
(32, 2, 'Simba Bus 4', 'Make 4', 'hire', 443.00, 'bus-4.jpeg', 'bus-3.mp4'),
(33, 2, 'Simba Bus 5', 'Make 5', 'sale', 15100.00, 'bus-5.jpeg', 'bus-4.mp4'),
(34, 2, 'Simba Bus 6', 'Make 6', 'sale', 42600.00, 'bus-6.jpeg', 'bus-3.mp4'),
(35, 2, 'Simba Bus 7', 'Make 7', 'hire', 234.00, 'bus-7.jpeg', 'bus-5.mp4'),
(36, 2, 'Simba Bus 8', 'Make 8', 'sale', 18900.00, 'bus-8.jpeg', 'bus-5.mp4'),
(37, 2, 'Simba Bus 9', 'Make 9', 'sale', 19100.00, 'bus-9.jpeg', 'bus-3.mp4'),
(38, 2, 'Simba Bus 10', 'Make 10', 'hire', 461.00, 'bus-10.jpeg', 'bus-5.mp4'),
(39, 2, 'Simba Bus 11', 'Make 11', 'hire', 196.00, 'bus-11.jpeg', 'bus-1.mp4'),
(40, 1, 'Simba Lorry 1', 'Make 1', 'hire', 224.00, 'lorry-1.jpeg', 'lorry-2.mp4'),
(41, 1, 'Simba Lorry 2', 'Make 2', 'sale', 14200.00, 'lorry-2.jpeg', 'lorry-1.mp4'),
(42, 1, 'Simba Lorry 3', 'Make 3', 'sale', 38400.00, 'lorry-3.jpeg', 'lorry-5.mp4'),
(43, 1, 'Simba Lorry 4', 'Make 4', 'hire', 444.00, 'lorry-4.jpeg', 'lorry-5.mp4'),
(44, 1, 'Simba Lorry 5', 'Make 5', 'sale', 43700.00, 'lorry-5.jpeg', 'lorry-4.mp4'),
(45, 1, 'Simba Lorry 6', 'Make 6', 'sale', 19600.00, 'lorry-6.jpeg', 'lorry-2.mp4'),
(46, 1, 'Simba Lorry 7', 'Make 7', 'sale', 39100.00, 'lorry-7.jpeg', 'lorry-1.mp4'),
(47, 1, 'Simba Lorry 8', 'Make 8', 'hire', 182.00, 'lorry-8.jpeg', 'lorry-5.mp4'),
(48, 1, 'Simba Lorry 9', 'Make 9', 'hire', 332.00, 'lorry-9.jpeg', 'lorry-4.mp4'),
(49, 1, 'Simba Lorry 10', 'Make 10', 'hire', 139.00, 'lorry-10.jpeg', 'lorry-1.mp4'),
(50, 1, 'Simba Lorry 11', 'Make 11', 'hire', 364.00, 'lorry-11.jpeg', 'lorry-2.mp4'),
(51, 1, 'Simba Lorry 12', 'Make 12', 'sale', 41800.00, 'lorry-12.jpeg', 'lorry-4.mp4'),
(52, 1, 'Simba Lorry 13', 'Make 13', 'sale', 48100.00, 'lorry-13.jpeg', 'lorry-5.mp4'),
(53, 1, 'Simba Lorry 14', 'Make 14', 'sale', 48500.00, 'lorry-14.jpeg', 'lorry-3.mp4'),
(54, 3, 'Simba Tractor 1', 'Make 1', 'sale', 49600.00, 'tractor-1.jpeg', 'tractor-4.mp4'),
(55, 3, 'Simba Tractor 2', 'Make 2', 'sale', 26000.00, 'tractor-2.jpeg', 'tractor-1.mp4'),
(56, 3, 'Simba Tractor 3', 'Make 3', 'hire', 412.00, 'tractor-3.jpeg', 'tractor-5.mp4'),
(57, 3, 'Simba Tractor 4', 'Make 4', 'hire', 233.00, 'tractor-4.jpeg', 'tractor-5.mp4'),
(58, 3, 'Simba Tractor 5', 'Make 5', 'sale', 46200.00, 'tractor-5.jpeg', 'tractor-2.mp4'),
(59, 3, 'Simba Tractor 6', 'Make 6', 'hire', 295.00, 'tractor-6.jpeg', 'tractor-1.mp4'),
(60, 3, 'Simba Tractor 7', 'Make 7', 'hire', 404.00, 'tractor-7.jpeg', 'tractor-3.mp4'),
(61, 3, 'Simba Tractor 8', 'Make 8', 'hire', 319.00, 'tractor-8.jpeg', 'tractor-5.mp4'),
(62, 3, 'Simba Tractor 9', 'Make 9', 'sale', 48100.00, 'tractor-9.jpeg', 'tractor-1.mp4'),
(63, 3, 'Simba Tractor 10', 'Make 10', 'sale', 23700.00, 'tractor-10.jpeg', 'tractor-1.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `carsales`
--

CREATE TABLE `carsales` (
  `SaleID` int(11) NOT NULL,
  `CarID` int(11) DEFAULT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `Status` varchar(150) NOT NULL,
  `SaleAmount` decimal(10,2) DEFAULT NULL,
  `SaleDate` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carsales`
--

INSERT INTO `carsales` (`SaleID`, `CarID`, `CustomerID`, `Status`, `SaleAmount`, `SaleDate`) VALUES
(9, 8, 16, 'Approved', 29400.00, '2024-03-12'),
(10, 8, 16, 'Approved', 29400.00, '2024-03-12'),
(11, 17, 16, 'Pending', 14300.00, '2024-03-12'),
(12, 30, 16, 'Pending', 44000.00, '2024-03-12'),
(13, 30, 17, 'Pending', 44000.00, '2024-03-12'),
(14, 33, 17, 'Pending', 15100.00, '2024-03-12'),
(15, 34, 17, 'Pending', 42600.00, '2024-03-12'),
(16, 36, 17, 'Pending', 18900.00, '2024-03-12'),
(17, 54, 16, 'Pending', 49600.00, '2024-03-13'),
(18, 9, 16, 'Pending', 28800.00, '2024-03-13'),
(19, 4, 17, 'Approved', 13700.00, '2024-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`) VALUES
(1, 'Commercial'),
(2, 'Passenger'),
(3, 'Agricultural'),
(4, 'Personal');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `Name`, `Email`, `Phone`, `image`, `nationality`, `Password`) VALUES
(16, 'Lawrence Gichero', 'lawrence@gmail.com', '0786554434', '30742001db105b360642_img_20230928_081110_812 (2).jpg', 'kenyan', '$2y$10$OcyK/dKj5gkD27lKEKyuvO09YI5D0qd7VV9P8C7qQdwcEn/lpPOu6'),
(17, 'Valentine omonya', 'valomosh254@gmail.com', '0761833220', '28a6cde1c01040db12bb_img_20230628_110735.jpg', 'kenyan', '$2y$10$3F6NVG8/wRq0V6Iv4QIUU.k1/iAwt7gajQJlZo6XAVPoM/o3mHtMe'),
(18, 'CLAYSTONE', 'admin@mail.com', '0768133220', 'a3729af2f4ce5c39ecf2_original-21267376cde0a756eeddf7a855bc2a5d.png', 'kenyan', '$2y$10$gz0j0M44emn.Cq62sT5W2eze.3xtRGvmPmuesImauozOAtV.1CQ1K');

-- --------------------------------------------------------

--
-- Table structure for table `devsteam`
--

CREATE TABLE `devsteam` (
  `MemberID` int(11) NOT NULL,
  `MemberName` varchar(255) DEFAULT NULL,
  `MemberRole` varchar(255) DEFAULT NULL,
  `MemberImg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `devsteam`
--

INSERT INTO `devsteam` (`MemberID`, `MemberName`, `MemberRole`, `MemberImg`) VALUES
(5, 'Lucy Philip ', 'Senior Developer ', '../images/uploads/member_JLIXA65jVU_woman.png'),
(6, 'Claystone Barongo', 'Project Manager ', '../images/uploads/member_wOs0UjILKk_man.png'),
(7, '  Ryan Kiplangat ', 'Database Administrator ', '../images/uploads/member_P0cAJTuiKl_man.png'),
(8, 'Bethuel Maluti ', 'Front Developer ', '../images/uploads/member_b5M4EmJc7L_man.png'),
(9, '  Samson Mulwa ', 'Network Administrator ', '../images/uploads/member_3Jl5mzweth_man.png'),
(10, 'Wanjiru Anabel ', 'UI/UX Designer ', '../images/uploads/member_9NC2wmbsu3_woman.png'),
(11, '  Everlyne Nyambura ', 'Group Co-Ordinator ', '../images/uploads/member_jbdQsDRCO3_woman.png'),
(12, '  Valentine Mutinda ', 'Backend Developer ', '../images/uploads/member_Jc8X7an1he_man (2).png'),
(13, '  Mercy Jemutai ', 'Security Administrator', '../images/uploads/member_HtpLcNV4G3_woman.png'),
(14, 'Lawrence Gichero ', 'Web Administrator ', '../images/uploads/member_43Mct6rFvI_man (2).png'),
(15, '  Moses Otieno ', 'API Integrations ', '../images/uploads/member_Qd6p12PoEf_man (2).png'),
(16, '  Hillary Odoo ', 'Algorithms Designer ', '../images/uploads/member_X8wQH9SdW5_man (2).png'),
(17, '  EddyCollins Muthomi ', 'System Designer ', '../images/uploads/member_dKNtiConXM_man (2).png'),
(18, '  Daniel Sila ', 'Technical Support ', '../images/uploads/member_BHT2FQx8fg_man (2).png'),
(19, '  Fredrick Otieno ', 'System Testing ', '../images/uploads/member_9e7OIUEa4Y_man (2).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carloans`
--
ALTER TABLE `carloans`
  ADD PRIMARY KEY (`LoanID`),
  ADD KEY `CarID` (`CarID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`CarID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `carsales`
--
ALTER TABLE `carsales`
  ADD PRIMARY KEY (`SaleID`),
  ADD KEY `CarID` (`CarID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `devsteam`
--
ALTER TABLE `devsteam`
  ADD PRIMARY KEY (`MemberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carloans`
--
ALTER TABLE `carloans`
  MODIFY `LoanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `CarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `carsales`
--
ALTER TABLE `carsales`
  MODIFY `SaleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `devsteam`
--
ALTER TABLE `devsteam`
  MODIFY `MemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carloans`
--
ALTER TABLE `carloans`
  ADD CONSTRAINT `carloans_ibfk_1` FOREIGN KEY (`CarID`) REFERENCES `cars` (`CarID`),
  ADD CONSTRAINT `carloans_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`);

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoryID`);

--
-- Constraints for table `carsales`
--
ALTER TABLE `carsales`
  ADD CONSTRAINT `carsales_ibfk_1` FOREIGN KEY (`CarID`) REFERENCES `cars` (`CarID`),
  ADD CONSTRAINT `carsales_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
