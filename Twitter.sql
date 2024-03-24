-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : dim. 24 mars 2024 à 22:34
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Twitter`
--

-- --------------------------------------------------------

--
-- Structure de la table `tweet`
--

CREATE TABLE `tweet` (
  `id` int(11) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tweet`
--

INSERT INTO `tweet` (`id`, `contenu`, `user_id`) VALUES
(1, 'Moustillon le GOAT', 1),
(2, 'Toujours bon de rappeler que Moustillon est le GOAT', 1),
(4, 'uwu ', 1),
(5, 'AHAHAHAHHAHAHAHHAHA CA MARCHE JE PEUX ENFIN PWEETER', 1),
(6, 'AHAHAHAHHAHAHAHAHA JE PEUX SUPPRIMER DES PWEETS MTN', 1),
(7, 'uuuo\r\n', 2),
(8, 'Rien que ça pweet à l\'iim', 5),
(10, 'Miaou', 6),
(12, 'Rebonjour', 1),
(13, 'bonjour tout le monde !', 7);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `mail`, `password`, `createdAt`) VALUES
(1, 'Powai', 'kilian.dlcsr92@gmail.com', 'uwu', '2024-03-20 14:47:21'),
(2, 'Kilou', 'kilou@gmail.com', 'uwu', '2024-03-20 14:48:47'),
(5, 'iim', 'iim@imm.fr', 'iim', '2024-03-21 22:25:05'),
(6, 'Criminou', 'criminou@miaou.chat', 'criminou', '2024-03-24 19:29:06');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tweet`
--
ALTER TABLE `tweet`
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
-- AUTO_INCREMENT pour la table `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
