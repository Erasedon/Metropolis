-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 18 mars 2022 à 14:12
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `metropolis`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

DROP TABLE IF EXISTS `appartenir`;
CREATE TABLE IF NOT EXISTS `appartenir` (
  `id_category` int(11) NOT NULL,
  `id_visuel` int(11) NOT NULL,
  PRIMARY KEY (`id_category`,`id_visuel`),
  KEY `appartenir_audovisuel0_FK` (`id_visuel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `appartenir`
--

INSERT INTO `appartenir` (`id_category`, `id_visuel`) VALUES
(1, 1),
(8, 2),
(1, 3),
(19, 4);

-- --------------------------------------------------------

--
-- Structure de la table `audiovisuel`
--

DROP TABLE IF EXISTS `audiovisuel`;
CREATE TABLE IF NOT EXISTS `audiovisuel` (
  `id_visuel` int(11) NOT NULL AUTO_INCREMENT,
  `titre_visuel` varchar(255) NOT NULL,
  `bande_visuel` varchar(255) NOT NULL,
  `img_visuel` varchar(255) NOT NULL,
  `type_visuel` varchar(255) NOT NULL,
  `synonyme_visuel` varchar(255) NOT NULL,
  `info_visuel` varchar(3000) NOT NULL,
  PRIMARY KEY (`id_visuel`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `audiovisuel`
--

INSERT INTO `audiovisuel` (`id_visuel`, `titre_visuel`, `bande_visuel`, `img_visuel`, `type_visuel`, `synonyme_visuel`, `info_visuel`) VALUES
(1, 'Avatar', 'assets/img/pexels-tima.mp4', 'assets/img/1.jpg', 'films', 'efzzzzgzggzrv', 'erezrezfzrvrgrbrbrb b'),
(2, 'jumanji', '', 'assets/img/2.jpg', 'series', 'efkvlstest2', 'erezreztest2rbrbrb b'),
(3, 'Rick & morty', '', 'assets/img/3.jpg', 'dessin animé', 'efkvlstest3', 'erfvfvfddvvezreztest3'),
(4, 'Scary Movie ', '', 'assets/img/4.jpg', 'Films', 'Scary Movie humour trop bien', 'Scary Movie humour trop bien resumer');

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id_avis` int(11) NOT NULL AUTO_INCREMENT,
  `titre_avis` varchar(255) NOT NULL,
  `descriptif_avis` varchar(3000) NOT NULL,
  `notes_avis` varchar(255) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_visuel` int(11) NOT NULL,
  PRIMARY KEY (`id_avis`),
  KEY `avis_users_FK` (`id_users`),
  KEY `avis_audovisuel0_FK` (`id_visuel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

DROP TABLE IF EXISTS `avoir`;
CREATE TABLE IF NOT EXISTS `avoir` (
  `id_users` int(11) NOT NULL,
  `id_role` int(11) NOT NULL DEFAULT '3',
  PRIMARY KEY (`id_role`,`id_users`),
  KEY `Avoir_users0_FK` (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avoir`
--

INSERT INTO `avoir` (`id_users`, `id_role`) VALUES
(1, 3),
(3, 1),
(10, 3),
(35, 3),
(36, 3),
(38, 3);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `nom_category` varchar(255) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `nom_category`) VALUES
(1, 'Action'),
(2, 'Sciences-Fictions'),
(3, 'Comédie\r\n'),
(4, 'Fantaisie'),
(5, 'Criminalité'),
(6, 'Drame'),
(7, 'Musique'),
(8, 'Aventure'),
(9, 'Histoire '),
(10, 'Thriller'),
(11, 'Animation'),
(12, ' Famille'),
(13, ' Mystère'),
(14, 'Biographie '),
(15, 'Film Noir'),
(16, ' Romantique'),
(17, ' Guerre '),
(18, ' occidentale'),
(19, 'Horreur'),
(20, 'Musicale'),
(21, ' Sportif'),
(22, 'Humour');

-- --------------------------------------------------------

--
-- Structure de la table `creer`
--

DROP TABLE IF EXISTS `creer`;
CREATE TABLE IF NOT EXISTS `creer` (
  `id_equipe` int(11) NOT NULL,
  `id_visuel` int(11) NOT NULL,
  PRIMARY KEY (`id_equipe`,`id_visuel`),
  KEY `creer_audovisuel0_FK` (`id_visuel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `id_equipe` int(11) NOT NULL AUTO_INCREMENT,
  `nom_equipe` varchar(255) NOT NULL,
  `prenom_equipe` varchar(255) NOT NULL,
  `role_equipe` varchar(255) NOT NULL,
  `img_equipe` varchar(255) NOT NULL,
  PRIMARY KEY (`id_equipe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

DROP TABLE IF EXISTS `favoris`;
CREATE TABLE IF NOT EXISTS `favoris` (
  `id_visuel` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  PRIMARY KEY (`id_visuel`,`id_users`),
  KEY `favoris_users0_FK` (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nom_role` varchar(255) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `nom_role`) VALUES
(1, 'administrateur'),
(2, 'moderateur'),
(3, 'client');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo_users` varchar(50) NOT NULL,
  `email_users` varchar(255) NOT NULL,
  `mdp_users` varchar(255) NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `pseudo_users`, `email_users`, `mdp_users`) VALUES
(1, 'yanistest', 'yanistest@gmail.com', 'azerty11234*'),
(2, 'yanistest2', 'yanistest2@gmail.com', 'azerty1234*'),
(3, 'Erasedon', 'yanis.pirlet@gmail.com', 'Mdptest1234'),
(10, 'yanis', 'test@email.fr', '$2y$10$tizxt0Tir49UAjCOKHA3bO0Hf0qtLhpkDgVvpSq/cYV3hNr3Bjd7O'),
(21, 'test3', 'yanistest3@gmail.com', 'Azerty11235'),
(25, 'test4', 'yanistest4@gmail.com', 'Azerty18234*'),
(29, 'test', 'test@test.fr', 'Test7894'),
(30, 'test1', 'test1@gmail.com', 'Azerty8974*'),
(31, 'Test8', 'test8@gmail.com', '$2y$10$FP4xYrFeFCZH729F9R/YO./XODjPE6o77dxSHr825I3rNEEzPrVDu'),
(35, 'test10', 'test10@gmail.com', '$2y$10$1VxsU7RybArXJU4YUDQBueOMNXKVWOFpZc5631hrWRJpBbWWJ4Fum'),
(36, 'testlocal', 'testlocal', '$2y$10$8DAxwBI2O528H1Ym.ZTrPOZ/CxDOuowDHjWjko2UQuk8X6wHJ.eKW'),
(37, 'meteno', 'teddy@hemonet.fr', '$2y$10$Sndw6BjHamFoPyB0FiEQuuwuUrWuRgQv1pcZylLxfmt3MpodZL99.'),
(38, 'ge', 'fv@egrge.revg', '$2y$10$Fax1a6EJtmJqoSMwI1qvAeFyrG9lT6bX3qysZR4CBg0RdJigRYPcG');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD CONSTRAINT `appartenir_audovisuel0_FK` FOREIGN KEY (`id_visuel`) REFERENCES `audiovisuel` (`id_visuel`),
  ADD CONSTRAINT `appartenir_category_FK` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_audovisuel0_FK` FOREIGN KEY (`id_visuel`) REFERENCES `audiovisuel` (`id_visuel`),
  ADD CONSTRAINT `avis_users_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Contraintes pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `Avoir_role_FK` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `Avoir_users0_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Contraintes pour la table `creer`
--
ALTER TABLE `creer`
  ADD CONSTRAINT `creer_audovisuel0_FK` FOREIGN KEY (`id_visuel`) REFERENCES `audiovisuel` (`id_visuel`),
  ADD CONSTRAINT `creer_equipe_FK` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`);

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `favoris_audovisuel_FK` FOREIGN KEY (`id_visuel`) REFERENCES `audiovisuel` (`id_visuel`),
  ADD CONSTRAINT `favoris_users0_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
