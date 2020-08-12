-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 12 août 2020 à 17:48
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `recipes`
--

-- --------------------------------------------------------

--
-- Structure de la table `ravioles`
--

CREATE TABLE `ravioles` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `ingredient` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ravioles`
--

INSERT INTO `ravioles` (`id`, `title`, `ingredient`, `description`, `picture`) VALUES
(1, 'salade de raviole au saumon', 'saumon', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda at atque, culpa debitis dolores et expedita in inventore ipsam minima, molestias optio possimus qui quo recusandae reiciendis sit sunt totam.', 'image2.jpg'),
(3, 'gratin de Ravioles', 'aubergine', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda at atque', 'image1.jpg'),
(4, 'soupe de raviole', 'raviole', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda at atque, culpa debitis dolores et expedita in inventore ipsam minima, molestias optio possimus', 'image3.jpg'),
(5, 'soupe de ravioles au courgettes', 'courgette', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda at atque, culpa debitis dolores et expedita in inventore ipsam minima, molestias optio possimus qui quo recusandae reiciendis sit sunt totam.', 'image4.jpg'),
(6, 'ravioles au saumon', 'saumon', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae earum enim nobis quas ratione ullam voluptate voluptates. Aut corporis similique unde? Adipisci atque modi nemo quam recusandae soluta totam!', 'image5.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ravioles`
--
ALTER TABLE `ravioles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ravioles`
--
ALTER TABLE `ravioles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
