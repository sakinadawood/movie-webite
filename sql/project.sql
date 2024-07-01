-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 09:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartoon`
--

CREATE TABLE `cartoon` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `cinema_date` date DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `ticket_id` int(255) DEFAULT NULL,
  `rating` decimal(3,1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'on'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartoon`
--

INSERT INTO `cartoon` (`movie_id`, `title`, `description`, `release_date`, `cinema_date`, `duration`, `type`, `ticket_id`, `rating`, `image`, `link`, `status`) VALUES
(2, 'croods', 'abssssasasasaassa', '2024-02-27', '2024-02-27', 45, 'action', 15968083, NULL, 'uploads/17078075864602am2croods.jpg', 'http://localhost/E-project/admin/movieticket.php', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `release_date` date NOT NULL,
  `cinema_date` date NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `ticket_id` int(255) NOT NULL,
  `rating` decimal(3,1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'on'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `description`, `release_date`, `cinema_date`, `duration`, `type`, `ticket_id`, `rating`, `image`, `link`, `status`) VALUES
(8, 'abc', 'fgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfg', '2024-02-11', '2024-02-11', 26, 'action', 672860375, NULL, 'uploads/17077141971702am2blood-shot.jpg', 'http://localhost/E-project/admin/movieticket.php', 'on'),
(10, 'batman', 'sdffffffffffffffffffffffff', '2024-02-28', '2024-02-29', 25, 'action', 1683246115, NULL, 'uploads/17076881375702pm2bat-man.jpg', 'http://localhost/E-project/admin/movieticket.php', 'off'),
(11, 'ghi', 'gdgdgdgdgdgdgdgdgdgdgdgdgdgdgdgdgdgdgdgd', '2024-02-28', '2024-02-11', 35, 'action', 1562984411, NULL, 'uploads/17077116353502am2end-game.jpg', 'http://localhost/E-project/admin/movieticket.php', 'on'),
(12, 'hij', 'hfdiufdhjfdskjfdkjfdskjfdskjfdj', '2024-02-11', '2024-02-11', 30, 'horror', 1458437902, NULL, 'uploads/17077112460602am2theatre-dead.jpg', 'http://localhost/E-project/admin/movieticket.php', 'on'),
(13, 'Love-roise', 'aijhfdsuhfdshfdsfdskjfdsfdsjhfdsjhfdsdkjfds', '2024-02-12', '2024-02-12', 40, 'romance', 770011694, NULL, 'uploads/17077113020202am2love-roise.jpg', 'http://localhost/E-project/admin/movieticket.php', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `showtimes`
--

CREATE TABLE `showtimes` (
  `showtime_id` int(11) NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `theater_id` int(11) DEFAULT NULL,
  `show_date` date DEFAULT NULL,
  `show_time` time DEFAULT NULL,
  `ticket_price` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theaters`
--

CREATE TABLE `theaters` (
  `theater_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(255) NOT NULL,
  `tickets` int(255) NOT NULL,
  `price` int(255) NOT NULL DEFAULT 500
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `tickets`, `price`) VALUES
(15968083, 494, 500),
(223931320, 555, 0),
(254281079, 255, 1000),
(264090414, 255, 0),
(314038733, 255, 0),
(364962444, 255, 0),
(468911353, 300, 0),
(670300148, 500, 0),
(672860375, 500, 500),
(770011694, 278, 700),
(887789606, 400, 0),
(925977796, 255, 0),
(968417235, 255, 1000),
(1446718865, 255, 500),
(1458437902, 500, 600),
(1562984411, 3, 300),
(1568477502, 355, 500),
(1683246115, 255, 500),
(1734339337, 255, 900),
(1768312032, 300, 1000),
(1993144100, 200, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `role`) VALUES
(1, 'usman1', '123', 'usmantss2004@outlook.com', 'user'),
(2, 'hamas', '123', 'hamas123@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_ticket`
--

CREATE TABLE `user_ticket` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `tickets` int(255) NOT NULL,
  `ticket_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartoon`
--
ALTER TABLE `cartoon`
  ADD PRIMARY KEY (`movie_id`),
  ADD UNIQUE KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`),
  ADD UNIQUE KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `showtimes`
--
ALTER TABLE `showtimes`
  ADD PRIMARY KEY (`showtime_id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `theater_id` (`theater_id`);

--
-- Indexes for table `theaters`
--
ALTER TABLE `theaters`
  ADD PRIMARY KEY (`theater_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_ticket`
--
ALTER TABLE `user_ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user_id`),
  ADD KEY `ticketss` (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartoon`
--
ALTER TABLE `cartoon`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `showtimes`
--
ALTER TABLE `showtimes`
  MODIFY `showtime_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theaters`
--
ALTER TABLE `theaters`
  MODIFY `theater_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1993144101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_ticket`
--
ALTER TABLE `user_ticket`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cartoon`
--
ALTER TABLE `cartoon`
  ADD CONSTRAINT `key` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `ticket` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `showtimes`
--
ALTER TABLE `showtimes`
  ADD CONSTRAINT `showtimes_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`),
  ADD CONSTRAINT `showtimes_ibfk_2` FOREIGN KEY (`theater_id`) REFERENCES `theaters` (`theater_id`);

--
-- Constraints for table `user_ticket`
--
ALTER TABLE `user_ticket`
  ADD CONSTRAINT `ticketss` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
