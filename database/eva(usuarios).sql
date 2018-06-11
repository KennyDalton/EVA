-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2018 at 01:50 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eva`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `lastname` varchar(100) NOT NULL,
  `tipo` enum('estudiante','docente','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `remember_token`, `lastname`, `tipo`) VALUES
(1, 'kenny', 'kennydaltonc@yahoo.com', '$2y$10$kqLoKKKA1tVaXN8JEMDfiuB0uaO6A6i8F0UWvq7NqUHVNUgfkPzuW', '2018-05-28 20:37:25', '2018-06-08 15:32:14', 'WhVFagOAk1OrYUCpmNHMRFnPwrY9za5cvAMxMLRw064qSgxIDRHlKlrSnE8d', '', 'estudiante'),
(2, 'pedro', 'pedro@yahoo.com', '$2y$10$Vv35eN8X4tEWZPloYH3Z0uSfmF/j7YGnNc25S8KNrANKCe6KHL09q', '2018-05-29 05:23:48', '2018-05-29 21:48:02', 'hs9T3ds3sdxFQwtpiX4hStQLvxiFlwS6JkFcvm2nYoktyhfxQRXajQ66WatY', '', 'estudiante'),
(4, 'adc', 'adca@ad.com', '$2y$10$dJsucdzTJe22UrQglkI/8.czrAF4WkxMUycRp2NpsW.vesTjWAhoy', '2018-05-29 20:59:20', '2018-05-29 20:59:58', 'XAk3ANIxYpuIzNRRwSxm3t3vDp9HXmwqrDguVTFSjqPO361iz1gxvv7OlG6J', 'adc', 'estudiante'),
(5, 'asdcas', 'asdc@hasdc.com', '$2y$10$1RAfNT05AOeEItcb5nPMbODrDOVXbGnv4x2BIO/r2aKy/Q.xMHjo2', '2018-05-29 21:00:35', '2018-05-29 21:02:04', 'mn7b1PZ4YVmvcBLEOUZkOhxVPFO1Fj1PrN5w3OHGzeBApUMJSmliI8h2wLC9', 'csdacasdc', 'docente'),
(6, 'asda', 'acadsdcas@dscas.com', '$2y$10$XpOJ6MQ8dwxUhMcGw.tJcOlSajqNK6lKVDY3C/gvfZvfvQeacLyMG', '2018-05-29 21:48:28', '2018-05-29 21:48:35', '1jYMU2drc4wKcyt78GHqVYQ1Nb9RjTKYwwkYe6b3DkcO6V525CIduqImnuiv', 'cdascas', 'docente'),
(7, 'Mauricio ', 'Quispe.Mau@institucion.org', '$2y$10$57Mt1PiukZLZQJzY2zn5Ae0WHYjroiEB3wGI7OfIX3kUs1BnAeN4O', '2018-05-31 11:24:02', '2018-06-08 15:41:18', 'wMns2tCxggtUo0pUenb2dLHvvjpCaQ7yPvzbLfRntj00T4dSONaPEFyU2KMU', 'Quispe', 'docente');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
