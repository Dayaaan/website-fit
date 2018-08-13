-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 13 août 2018 à 17:58
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `coachtessier`
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
  `other` text NOT NULL,
  `goal` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `coaching_form`
--

INSERT INTO `coaching_form` (`id`, `lastname`, `firstname`, `age`, `email`, `gender`, `weight`, `height`, `nb_training`, `other`, `goal`, `created_at`) VALUES
(2, 'Jason', 'Bonneaux', 25, 'bonneauxJ@gmail.com', 'man', 70, 170, 2, 'aucunes', 'Bonjour,\r\n\r\nJe souhaiterais prendre du muscle et sécher . ', '2018-08-13 19:12:02'),
(3, 'Alice', 'Chollet', 42, 'chollet_alice@hotmail.com', 'woman', 65, 155, 4, 'asthme ', 'Je voudrais perdre du poids .', '2018-08-13 19:13:05');

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
(2, 'Lacroix', 'Alexandre', 'lacroixalexandre@yahoo.fr', 'Bonjour \r\n\r\nFaites vous des coachings privé sur Clisson ?\r\n\r\nCordialement Lacroix', '2018-08-13 19:14:26');

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
(6, 'Tessier', 'Adrien', 'tessieradrien@gmail.com', '$2y$10$gqBlrK9bsEsWKW7LkxgNme0oL8upJRHmkK5MX0ZZeXOeTdF2b7lwC', '2018-07-06 23:46:34', '2018-07-06 23:46:34', 'admin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
