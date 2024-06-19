-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 02:19 PM
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
-- Database: `superroms`
--

-- --------------------------------------------------------

--
-- Table structure for table `consoles`
--

CREATE TABLE `consoles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consoles`
--

INSERT INTO `consoles` (`id`, `name`, `image_path`) VALUES
(1, '3DS', '3ds.png'),
(2, 'Game Boy', 'gameboy.png'),
(3, 'DS', 'ds.png'),
(4, 'GameCube', 'gamecube.png'),
(5, 'WII', 'wii.png');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `date`) VALUES
(1, 'What format games PPSSPP emulator can run?', 'hello hiiiii', 'wii.png', '2024-06-11'),
(2, 'What format games PPSSPP emulator can run?', 'hello hiiiii', 'wii.png', '2024-06-11'),
(3, 'What format games PPSSPP emulator can run?', 'hello hiiiii', 'wii.png', '2024-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `roms`
--

CREATE TABLE `roms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `dropbox_link` varchar(255) NOT NULL,
  `console` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `downloads` int(11) DEFAULT NULL,
  `released` date DEFAULT NULL,
  `file_size` varchar(255) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `votes` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roms`
--

INSERT INTO `roms` (`id`, `name`, `image_path`, `dropbox_link`, `console`, `publisher`, `genre`, `region`, `views`, `downloads`, `released`, `file_size`, `rating`, `votes`, `description`) VALUES
(1, 'Super Mario Galaxy', 'super_mario_galaxy.jpg', 'https://www.dropbox.com/s/your-dropbox-link/super-mario-galaxy.rom?dl=1', 'Nintendo Wii', 'Nintendo', 'Platformer', 'EU, JP, US', 45285, 42878, '2007-11-01', '3.19G', 4.5, 80, 'Super Mario Galaxy introduced gameplay mechanics as fresh as a new pair of overalls for our mustachioed hero. One can explore various celestial bodies, and thanks to the innovative use of gravity, Mario can walk, run, and jump upside down. Even if you\'ve been doing your crunches, your stomach might do a flip or two as you navigate these three-dimensional platforms. The integration of motion controls between the virtual world and your living room\'s reality (watch out for the coffee table!).'),
(2, 'Super Mario Bros', 'super_mario_bros.jpg', 'https://www.dropbox.com/s/your-dropbox-link/super-mario-bros.rom?dl=1', 'Nintendo Wii', 'Nintendo', 'Platformer', 'EU, JP, US', 45285, 42878, '2007-11-01', '3.19G', 4.5, 80, 'Super Mario Galaxy introduced gameplay mechanics as fresh as a new pair of overalls for our mustachioed hero. One can explore various celestial bodies, and thanks to the innovative use of gravity, Mario can walk, run, and jump upside down. Even if you\'ve been doing your crunches, your stomach might do a flip or two as you navigate these three-dimensional platforms. The integration of motion controls between the virtual world and your living room\'s reality (watch out for the coffee table!).');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consoles`
--
ALTER TABLE `consoles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roms`
--
ALTER TABLE `roms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consoles`
--
ALTER TABLE `consoles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roms`
--
ALTER TABLE `roms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
