-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 25 fév. 2022 à 14:55
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vols`
--

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_vol` int(11) NOT NULL,
  `flight_type` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `dep_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `booking`
--

INSERT INTO `booking` (`id`, `id_user`, `id_vol`, `flight_type`, `origin`, `destination`, `dep_time`) VALUES
(7, 13, 6, '0', 'Chicago', 'Casablanca', '2022-02-24 00:00:00'),
(8, 13, 5, '0', 'Tanger', 'Greece', '2022-02-20 15:13:00'),
(9, 13, 3, '0', 'marrakech', 'Ibiza', '2022-02-19 11:06:00'),
(10, 13, 3, '0', 'marrakech', 'Ibiza', '2022-02-19 11:06:00'),
(11, 13, 9, '1', 'Italy', 'NewYork', '2022-03-06 15:52:00'),
(12, 13, 7, '1', 'marrakech', 'canada', '2022-02-19 16:48:00'),
(13, 15, 7, '1', 'marrakech', 'canada', '2022-02-19 16:48:00'),
(14, 15, 5, '0', 'Tanger', 'Greece', '2022-02-20 15:13:00'),
(23, 16, 3, '0', 'marrakech', 'bora bora', '2022-02-25 14:00:00'),
(24, 16, 7, '1', 'marrakech', 'canada', '2022-02-19 16:48:00'),
(25, 16, 3, '0', 'marrakech', 'bora bora', '2022-02-25 14:00:00'),
(30, 16, 5, '0', 'Tanger', 'Greece', '2022-02-20 15:13:00'),
(31, 16, 7, '1', 'marrakech', 'canada', '2022-02-19 16:48:00'),
(32, 17, 3, '0', 'marrakech', 'bora bora', '2022-02-25 14:00:00'),
(33, 17, 6, '0', 'Chicago', 'Casablanca', '2022-02-24 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `passenger`
--

CREATE TABLE `passenger` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `birthday` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `passenger`
--

INSERT INTO `passenger` (`id`, `user_id`, `reservation_id`, `fullname`, `birthday`) VALUES
(1, 27, 0, 'amg sou', '1994-03-03 10:29:00'),
(5, 27, 0, 'brahim h', '1991-04-20 10:34:00'),
(6, 16, 0, 'aicha n', '1968-04-27 23:59:00'),
(7, 16, 0, 'souma', '2022-02-15 14:20:00'),
(11, 16, 0, 'soma', '2022-02-12 14:31:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `role`) VALUES
(10, 'soma', 'soma', '$2y$12$cD8ckMcv2135vtwo0OswMeAzWBkaoUKgJoO8xn2P7NqUrSbljvcOK', 1),
(18, 'hello1', 'hello1', '$2y$12$nm7LTLRDTjTWjwzJLtBPu.FRc2W4YjT40ICi0/JgJcMmkidr7VHXS', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vols`
--

CREATE TABLE `vols` (
  `id` int(11) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `dep_time` datetime NOT NULL,
  `return_time` datetime NOT NULL,
  `seats` int(255) NOT NULL,
  `flighttype` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vols`
--

INSERT INTO `vols` (`id`, `origin`, `destination`, `dep_time`, `return_time`, `seats`, `flighttype`) VALUES
(3, 'marrakech', 'bora bora', '2022-02-25 14:00:00', '2022-02-23 22:35:00', 10, '0'),
(5, 'Tanger', 'Greece', '2022-02-20 15:13:00', '2022-03-27 09:13:00', 10, '0'),
(6, 'Chicago', 'Casablanca', '2022-02-24 00:00:00', '2022-02-26 06:51:00', 2, '0'),
(7, 'marrakech', 'canada', '2022-02-19 16:48:00', '0000-00-00 00:00:00', 20, '1'),
(9, 'Italy', 'NewYork', '2022-03-06 15:52:00', '0000-00-00 00:00:00', 20, '1'),
(10, 'Essaouira', 'Roma', '2022-02-25 00:40:00', '2023-04-24 02:41:00', 10, '0');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vols`
--
ALTER TABLE `vols`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `vols`
--
ALTER TABLE `vols`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
