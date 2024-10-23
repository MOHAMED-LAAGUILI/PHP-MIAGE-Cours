-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 13 mai 2023 à 13:10
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `miage`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `filiere` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `image` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `filiere`, `email`, `image`) VALUES
(7, 'eza', 'Samadi', '', 'jlailamoh@gmail.com', '../images/img.png'),
(8, 'image', 'aprï¿½s', 'TS2 SR', 'jlailamoh@gmail.com', '../images/hgfhgfhhhh.jpg'),
(11, 'dty', 'dghrtrhyrgt', 'ghgfyert', 'anas@gmail.com', '../images/dfghfehdfh.jpg'),
(12, 'hj', 'fjh', 'hgjrtrzeterzt', 'demos@softaculous.com', '../images/OIP.jpg'),
(15, 'dryuhdryuh', 'hj', 'fdjhhgfghfghfgh', 'admin@gmail.com', '../images/tÃ©lÃ©charger.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `idEtudiant` int(11) NOT NULL,
  `idModule` int(11) NOT NULL,
  `dateExam` date NOT NULL,
  `note` float NOT NULL,
  `observation` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `exam`
--

INSERT INTO `exam` (`id`, `idEtudiant`, `idModule`, `dateExam`, `note`, `observation`) VALUES
(4, 8, 3, '2023-04-12', 14, ' observation here'),
(6, 7, 3, '2023-04-11', 14, ' '),
(8, 7, 3, '2023-04-11', 14, ' ');

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `coeff` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`id`, `nom`, `coeff`) VALUES
(3, 'SGBD II', 3),
(4, 'JAVA', 5);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `typeU` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `email`, `pass`, `typeU`) VALUES
(1, 'ahmed nali', 'ahmed@gmail.com', 'e19d5cd5af0378da05f63f891c7467af', 'Etudiant'),
(2, 'admin', 'admin@gmail.com', 'e19d5cd5af0378da05f63f891c7467af', 'Admin'),
(3, 'anas', 'anas@gmail.com', 'e19d5cd5af0378da05f63f891c7467af', 'Etudiant'),
(4, 'mohamed', 'mohamedchahidi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Etudiant');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEtudiant` (`idEtudiant`,`idModule`),
  ADD KEY `idModule` (`idModule`);

--
-- Index pour la table `modules`
--
ALTER TABLE `modules`
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
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`idEtudiant`) REFERENCES `etudiant` (`id`),
  ADD CONSTRAINT `exam_ibfk_2` FOREIGN KEY (`idModule`) REFERENCES `modules` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
