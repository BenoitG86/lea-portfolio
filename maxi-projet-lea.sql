-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 juin 2024 à 11:24
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `maxi-projet-lea`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(80) NOT NULL,
  `mail_user` varchar(80) NOT NULL,
  `phone_user` int(20) NOT NULL,
  `comment_user` text NOT NULL,
  `dateComment_user` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_user`, `name_user`, `mail_user`, `phone_user`, `comment_user`, `dateComment_user`) VALUES
(5, '', 'salut@gmail.fr', 708070807, 'salut', '2024-06-26 07:35:51'),
(7, 'Jean Géraldino', 'dfh@voila.fr', 707070707, 'dfghydft test final', '2024-06-26 07:44:07'),
(9, 'Jean Gérard', 'jeangerard@gmail.fr', 707070707, 'Coucou les coupaings', '2024-06-27 07:24:49'),
(10, 'Jean Gérard', 'jeangerard@gmail.fr', 707070707, 'Je suis un commentaire', '2024-06-27 09:01:28');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id_projet` int(11) NOT NULL,
  `name_projet` varchar(80) NOT NULL,
  `img_projet` varchar(80) NOT NULL,
  `descr_projet` text NOT NULL,
  `link_projet` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id_projet`, `name_projet`, `img_projet`, `descr_projet`, `link_projet`) VALUES
(1, 'Projet de calculatrice', 'img/calculatrice.png', 'Projet d\'une calculatrice simple en HTML5 / CSS / JavaScript', 'https://benoitg86.github.io/calculator-js/'),
(17, 'Projet de carousel', 'img/carousel.png', 'Projet de carousel simple en javascript avec un défilement d\'une extrémité à l\'autre', 'https://benoitg86.github.io/carousel-js/');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id_projet`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
