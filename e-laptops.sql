-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 26 Ιαν 2022 στις 21:25:33
-- Έκδοση διακομιστή: 10.4.22-MariaDB
-- Έκδοση PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `e-laptops`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'georkofi', '4665'),
(6, 'test', 'pass');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `contact`
--

CREATE TABLE `contact` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `contact`
--

INSERT INTO `contact` (`id_user`, `name`, `lastname`, `email`, `telephone`, `phone`, `message`) VALUES
(1, 'Georgios', 'Kofidis', 'georkofi@gmail.com', '23210-9666', '69888888', 'test'),
(2, 'Georgios', 'Kofidis', 'georkofi@gmail.com', '23210-9666', '69888888', 'test'),
(3, 'Kostas', 'Kofidis', 'kostas@gmail.com', '210-11111', '69333333', 'testv2 '),
(4, 'Ioannis', 'Ioannidis', 'ioan@gmail.com', '210-5489465', '69777777', 'TEST ');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `laptops`
--

CREATE TABLE `laptops` (
  `id_laptop` int(11) NOT NULL,
  `laptop_name` varchar(100) NOT NULL,
  `cpu` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `storage` varchar(100) NOT NULL,
  `gpu` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `laptops`
--

INSERT INTO `laptops` (`id_laptop`, `laptop_name`, `cpu`, `ram`, `storage`, `gpu`, `cost`) VALUES
(1, 'KG-XPS 15 9510', 'i7 10700U', '16GB', '256GB SSD', 'RTX 3060 6GB', '1200$'),
(2, ' KG-EliteBook 855 G8 ', 'Ryzen 5', '16GB', '512GB SSD', 'Radeon Graphics', '1.319,00 €'),
(3, 'KG-Βook ', 'KG Max 10-core', '64 GB', '1 TB SSD', 'KG M1 Max 32-core', '4.719,00 €'),
(4, 'KG-VivoBook M513IA', 'AMD Ryzen 7 4700U 2 GHz', '8 GB', '512 GB SSD', 'AMD Radeon Graphics', '599,00 €\r\n');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Ευρετήρια για πίνακα `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_user`);

--
-- Ευρετήρια για πίνακα `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`id_laptop`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT για πίνακα `contact`
--
ALTER TABLE `contact`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
