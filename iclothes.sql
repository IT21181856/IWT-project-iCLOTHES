-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 05:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iclothes`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`, `telephone`) VALUES
(3, 'Rowoon Smith', 'rowoon@gmail.com', 'I need to purchase ordinary fabrics', '1234567890'),
(4, 'sadgjshd', 'asanka@gmail.com', 'sadagdfhfgj', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `designer`
--

CREATE TABLE `designer` (
  `D_ID` varchar(100) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designer`
--

INSERT INTO `designer` (`D_ID`, `NAME`, `DESCRIPTION`, `EMAIL`) VALUES
('d123', 'Neha Fernando', 'Fashion Designer', 'nehafernando@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `dorder`
--

CREATE TABLE `dorder` (
  `CUSTOMER_ID` varchar(60) NOT NULL,
  `CUSTOMER_NAME` varchar(89) NOT NULL,
  `CUSTOMER_CONTACT_NUMBER` int(10) NOT NULL,
  `CUSTOMER_ADDRESS` varchar(100) NOT NULL,
  `DESIGNER_ID` varchar(90) NOT NULL,
  `DESIGNER_NAME` varchar(89) NOT NULL,
  `DESCRIPTION` varchar(200) NOT NULL,
  `ORDER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dorder`
--

INSERT INTO `dorder` (`CUSTOMER_ID`, `CUSTOMER_NAME`, `CUSTOMER_CONTACT_NUMBER`, `CUSTOMER_ADDRESS`, `DESIGNER_ID`, `DESIGNER_NAME`, `DESCRIPTION`, `ORDER_ID`) VALUES
('c0001', 'asanka', 779888420, 'colombo', 'd001', 'akila', 'asdfgh', 2),
('0009', 'PERERA', 987654321, 'COLOMBO', '6767', 'AKILA', 'NOTHING', 4),
('sakk', 'AFg', 0, 'pkekgkg', 'megsdf', 'lsdkflkkf', 'knegnnsm ejknscmZX c akwjfks', 5),
('C0004', 'Akila', 1234567890, 'Matara', 'd009', 'AKILA', 'Wedding saree with purls', 6);

-- --------------------------------------------------------

--
-- Table structure for table `fabrics`
--

CREATE TABLE `fabrics` (
  `ID` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fabrics`
--

INSERT INTO `fabrics` (`ID`, `Name`, `Description`) VALUES
('FF009', 'ICE COOL', 'COOL'),
('FO00004', 'COTTON', 'SMOOTH'),
('OF003', 'SILCK', 'SMOOTH'),
('OF9090', 'CULTURAL', 'Great');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`username`, `email`, `feedback`, `date`, `ID`) VALUES
('Asanaka Ranaweera', 'asanka@gmail.com', 'QWERTYUIOP', '2022-05-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE `men` (
  `ID` varchar(50) NOT NULL,
  `NAME` varchar(10) NOT NULL,
  `MATERIAL` varchar(20) NOT NULL,
  `PRICE` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`ID`, `NAME`, `MATERIAL`, `PRICE`) VALUES
('M002', 'T shirt', 'Linen', '2000.00'),
('M003', 'Skirt', 'Silk', '4000.00'),
('M004', 'Trouser', 'Denim', '6000.00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` char(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `CardType` varchar(100) NOT NULL,
  `CardNumber` varchar(16) NOT NULL,
  `NameOfCard` varchar(70) NOT NULL,
  `CVV` int(11) NOT NULL,
  `ins` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`ID`, `Name`, `Email`, `Mobile`, `Address`, `CardType`, `CardNumber`, `NameOfCard`, `CVV`, `ins`) VALUES
(1, 'Jayani Siva', 'jayani@gmail.com', '0771111111', 'Matara', 'Visa', '1234567890098765', 'jayani', 1234, 'no special instructions'),
(2, 'Sachini Tharuka', 'sach@gmail.com', '0771111112', 'Colombo', 'Master Card', '2154789635487126', 'sachini', 7890, 'Deliver as soon as possible'),
(4, 'Nelum Kumari', 'nelum@gmail.com', '0112345678', 'Kadawatha', 'American Express', '5478951236958471', 'nelim', 4567, 'home deliver'),
(5, 'Rowoon Smith', 'rowoon@yahoo.com', '0998765434', 'SK', 'Visa', '7841596321874596', 'rowoon', 5678, 'as soon as possible'),
(8, 'Nick Samuel', 'nick@gmail.com', '0998765434', 'UK', 'Visa', '5548871123669958', 'nick', 4567, 'not delay'),
(9, 'Asanka Idunil', 'indunil@gmail.com', '4763928347', 'J ela', 'Master Card', '5544778811229966', 'asanka', 7653, 'Please do not be delay'),
(10, 'dev', 'dev@gmail.com', '0779888420', 'Colombo', 'Master Card', '2211885544776633', 'devvvvv', 3467, 'no need'),
(11, 'Rowoon Smith', 'sach@gmail.com', '0779448594', 'Galle', 'American Express', '7744885599554433', 'woo', 5678, 'not ');

-- --------------------------------------------------------

--
-- Table structure for table `rdetails`
--

CREATE TABLE `rdetails` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phoneNumber` int(15) NOT NULL,
  `referenceNumber` varchar(15) NOT NULL,
  `type` varchar(10) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `UID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rdetails`
--

INSERT INTO `rdetails` (`username`, `email`, `password`, `phoneNumber`, `referenceNumber`, `type`, `reason`, `date`, `UID`) VALUES
('ASANKA', 'asanka@gmail.com', '', 987654321, '1232355', 'return', 'ASANKA AYYA', '2022-05-17', 2),
('sachini@gmail.com', 'asanka@gmail.com', '', 987654321, '1232355', 'return', 'MLSDGJHsdkjGHKSDHGsj', '2022-05-17', 3),
('sachini', 'sachini@gmail.com', '', 998765543, '12345', 'return', 'not the ordered onr', '2022-05-25', 4);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `firstname`, `lastname`, `email`, `password`, `usertype`) VALUES
(1, 'Sachini', 'Kandambige', 'sachini@gmail.com', 'Sachini123', 'customer'),
(2, 'Akila', 'Elladeniya', 'akila@gmail.com', 'akila123', 'admin'),
(3, 'Praveen', 'Madanayake', 'praveen@gmail.com', 'sidath123', 'admin'),
(4, 'Dhananjaya', 'Kumara', 'dhananjaya@gmail.com', 'Dhananjaya123', 'admin'),
(5, 'Asanka', 'Ranaweera', 'asanka@gmail.com', 'Asanka123', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `full_name` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `full_name`, `gender`, `age`, `address`) VALUES
(3, 'admin', '123', 'angel jude', 'male', 24, 'himamaylan city'),
(4, 'sidath', '1234', 'praveen', 'male', 23, '223/1 Eshwara Rd Heegoda Urubokka Srilanka, Matara');

-- --------------------------------------------------------

--
-- Table structure for table `warehousedata`
--

CREATE TABLE `warehousedata` (
  `productname` varchar(199) NOT NULL,
  `quantity` int(200) NOT NULL,
  `price` int(200) NOT NULL,
  `date` date NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warehousedata`
--

INSERT INTO `warehousedata` (`productname`, `quantity`, `price`, `date`, `ID`) VALUES
('SFSFHD', 12, 34567, '2022-05-25', 1),
('SFSFHD', 12, 300000, '2022-05-18', 2);

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `ID` varchar(100) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `MATERIAL` varchar(100) NOT NULL,
  `PRICE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`ID`, `NAME`, `MATERIAL`, `PRICE`) VALUES
('F001', 'Frock', 'Silk', '4000.00'),
('F002', 'Trouser', 'Linen', '3000'),
('FOO5', 'EFJOJSOIG', ';KEG;K', '499999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designer`
--
ALTER TABLE `designer`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `dorder`
--
ALTER TABLE `dorder`
  ADD PRIMARY KEY (`ORDER_ID`);

--
-- Indexes for table `fabrics`
--
ALTER TABLE `fabrics`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rdetails`
--
ALTER TABLE `rdetails`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `warehousedata`
--
ALTER TABLE `warehousedata`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dorder`
--
ALTER TABLE `dorder`
  MODIFY `ORDER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rdetails`
--
ALTER TABLE `rdetails`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `warehousedata`
--
ALTER TABLE `warehousedata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
