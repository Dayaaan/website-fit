-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 29 juil. 2018 à 00:27
-- Version du serveur :  10.1.33-MariaDB
-- Version de PHP :  7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `axelfit`
--

-- --------------------------------------------------------

--
-- Structure de la table `coaching_form`
--

CREATE TABLE `coaching_form` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `nb_training` int(11) NOT NULL,
  `nb_year` int(11) NOT NULL,
  `other` text NOT NULL,
  `goal` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `coaching_form`
--

INSERT INTO `coaching_form` (`id`, `lastname`, `firstname`, `age`, `email`, `gender`, `weight`, `height`, `nb_training`, `nb_year`, `other`, `goal`, `created_at`) VALUES
(1, 'dqzf', 'fesfes', 20180711, 'fesfe', 'man', 25, 165, 2, 8, 'fesfse', 'fesfs', '2018-07-25 19:10:16'),
(2, 'dayan', 'Martin', 20180703, 'admin@gmail.com', 'man', 25, 165, 1, 2, 'fefe', 'fefe', '2018-07-25 23:13:44'),
(3, 'fefe', 'fefz', 25, 'fsef', 'woman', 0, 0, 5, 1, 'fesfs', 'fesfs', '2018-07-27 20:37:44');

-- --------------------------------------------------------

--
-- Structure de la table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact_form`
--

INSERT INTO `contact_form` (`id`, `lastname`, `firstname`, `email`, `message`, `created_at`) VALUES
(76, 'Daniel', 'Jacques', 'Danieljacques@gmail.com', 'Super Site', '2018-07-23 00:40:51'),
(77, 'sasasa', 'fezz', 'fzefz', 'fdf', '2018-07-25 18:00:05'),
(78, 'jean', 'jean', 'jean', 'jean', '2018-07-25 18:11:45'),
(79, 'Camille', 'Camille', 'Camille', 'Camille', '2018-07-25 18:13:57'),
(80, 'Philippe', 'Philippe', 'Philippe', 'alert(\"allo\");', '2018-07-25 18:14:37'),
(83, 'fefe', 'fefe', 'fefe', 'fefe', '2018-07-25 18:16:01'),
(84, 'alert(\"toto\")', 'alert(\"toto\")', 'alert(\"toto\")', 'alert(\"toto\")', '2018-07-25 18:16:48'),
(85, 'Jean Philippe mouloud', 'Jean Philippe mouloud', 'Jean Philippe mouloud', 'Jean Philippe mouloud', '2018-07-25 21:55:39');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `lastname`, `firstname`, `email`, `password`, `created_at`, `updated_at`, `role`) VALUES
(6, 'Chlo&eacute;', 'root', 'admin@gmail.com', '$2y$10$gKl6wBoCZCNM9uhPxwXj4.TIZI4wmqKyxCXR0H5bFk7s5Rsw6/1h2', '2018-07-06 23:46:34', '2018-07-06 23:46:34', 'admin'),
(7, 'Jean', 'Jean', 'jean@gmail.com', '$2y$10$eUV0LKbdjMfbPk9.BgJiu.ziD7zMX8rhhUaTVhn.MqK7ke7uxQ4Ji', '2018-07-12 01:17:22', '2018-07-12 01:17:22', 'guest'),
(8, 'Albert', 'Albert', 'Albert@gmail.com', '$2y$10$jTKjx8H1dAP3N61sIGzNieBgVhQDwR6SxrZow4We.ghW8M87QxwHW', '2018-07-12 11:30:26', '2018-07-12 11:30:26', 'guest'),
(9, 'Astride', 'Chlo&eacute;', 'chloe@gmail.com', '$2y$10$JGvqHxnbYU6B/EuMI7GYfOF7GfXOdeuTsbw0Gwd4xoMcImVnAP6.a', '2018-07-13 19:35:38', '2018-07-13 19:35:38', 'guest'),
(12, 'Chlo&eacute;', 'Chlo&eacute;', 'Chlo&eacute;', '$2y$10$AbVJpKX/iHDow5fp/uxFEuiTm5VvzUc/S5Fsvo7GyxNInx2l27lmO', '2018-07-22 19:21:45', '2018-07-22 19:21:45', 'guest'),
(13, 'Chlo&eacute;', 'Chlo&eacute;', 'Chlo&eacute;', '$2y$10$xbyCHEpgVc5F21FQ6zYmkesYnM0sqQaZtm.lGf8S2ch8y9rbHqpum', '2018-07-22 19:23:35', '2018-07-22 19:23:35', 'guest'),
(14, 'sacha', 'sacha', 'SACHAsacha', '$2y$10$pi2V/nUSS1zTG06Xw2Z4LuDg/WzUB142OQPhJd9RYmnWKCTjWm/ue', '2018-07-22 19:29:31', '2018-07-22 19:29:31', 'guest'),
(16, 'ordinateur', 'ordinateur', 'ordinateur', '$2y$10$E5bfO.D20G5ZuzKfFUth8OxzzCDShaW3HGrBiYm.OBLD.FkXPhQWC', '2018-07-23 14:21:01', '2018-07-23 14:21:01', 'guest'),
(17, 'ordinateur', 'ordinateur', 'ordinateur', '$2y$10$./uhnrHfRRSMobYuhf9eie7w5Ot9yPO920HWW9zgzDS1huHFMp7XG', '2018-07-23 14:36:22', '2018-07-23 14:36:22', 'guest');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `coaching_form`
--
ALTER TABLE `coaching_form`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `coaching_form`
--
ALTER TABLE `coaching_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
