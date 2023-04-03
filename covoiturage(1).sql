-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 23 Février 2022 à 08:55
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `covoiturage`
--

-- --------------------------------------------------------

--
-- Structure de la table `cov`
--

CREATE TABLE `cov` (
  `idcov` int(11) NOT NULL,
  `Datedep` date NOT NULL,
  `Lieudep` varchar(30) NOT NULL,
  `Lieuarr` varchar(30) NOT NULL,
  `Nbplace` int(11) NOT NULL,
  `Choixvehicle` text NOT NULL,
  `iduscov` int(10) NOT NULL,
  `immatricu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `cov`
--

INSERT INTO `cov` (`idcov`, `Datedep`, `Lieudep`, `Lieuarr`, `Nbplace`, `Choixvehicle`, `iduscov`, `immatricu`) VALUES
(3, '2022-02-27', 'Melun', 'Gare de lyon', 7, 'martin', 5, 505051);

-- --------------------------------------------------------

--
-- Structure de la table `import_utilisateur`
--

CREATE TABLE `import_utilisateur` (
  `id` int(100) NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Mat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `import_utilisateur`
--

INSERT INTO `import_utilisateur` (`id`, `Nom`, `Prenom`, `Mail`, `Mat`) VALUES
(2, 'BEN CHOUCHANE', 'YOUSSEF', 'y.ben-chouchane@campussaintaspais.fr', '20'),
(3, 'BILUMBU', 'KATUVWA', 'k.bilumbu@campussaintaspais.fr', '21'),
(4, 'BOUAAZA', 'KAWTAR', 'k.bouaaza@campussaintaspais.fr', '22'),
(5, 'CHEVALIER', 'CORENTIN', 'c.chevalier@campussaintaspais.fr', '23'),
(6, 'CHIKHOUNE', 'AGHILES', 'a.chikhoune@campussaintaspais.fr', '24'),
(7, 'CHIKITOU', 'KILLIAN', 'k.chikitou@campussaintaspais.fr', '25'),
(8, 'COUSIN', 'TOM', 't.cousin@campussaintaspais.fr', '26'),
(9, 'DORLAC', 'HUGO', 'h.dorlac@campussaintaspais.fr', '27'),
(10, 'GIRARD', 'BAPTISTE', 'b.girard@campussaintaspais.fr', '28'),
(11, 'GUIROUS', 'ADAME', 'a.guirous@campussaintaspais.fr', '29'),
(12, 'HADJADJI', 'ILYES', 'i.hadjadji@campussaintaspais.fr', '30'),
(13, 'LEFEBVRE', 'ADRIEN', 'a.lefebvre@campussaintaspais.fr', '31'),
(14, 'MEDINA', 'MARYNE', 'm.medina@campussaintaspais.fr', '32'),
(15, 'NABBAT', 'SANA', 's.nabbat@campussaintaspais.fr', '33'),
(16, 'OMANGA', 'FRANCOIS', 'f.omanga@campussaintaspais.fr', '34'),
(17, 'RAMANANTSOA', 'RAPHAEL', 'r.ramanantsoa@campussaintaspais.fr', '35'),
(18, 'RAMARLINA', 'HANJA', 'h.ramarlina@campussaintaspais.fr', '36'),
(19, 'RAMAROKOTO', 'ANDY', 'a.ramarokoto@campussaintaspais.fr', '37'),
(20, 'RIVE', 'ANTHONY', 'a.rive@campussaintaspais.fr', '38'),
(21, 'YEO', 'EWAN', 'e.yeo@campussaintaspais.fr', '39');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_cov` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `Lieudep` varchar(100) DEFAULT NULL,
  `Lieuarr` varchar(100) NOT NULL,
  `idcond` int(100) NOT NULL,
  `Choix` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id`, `id_cov`, `id_utilisateur`, `Lieudep`, `Lieuarr`, `idcond`, `Choix`) VALUES
('2022-02-08 19:07:08', 1, 2, 'Lieusaint', 'Melun', 2, 'Accepter'),
('2022-02-20 21:22:03', 2, 17, 'Lieusaint', 'Gare de lyon', 17, 'Accepter'),
('2022-02-20 21:50:40', 1, 17, 'Lieusaint', 'Melun', 2, 'attente'),
('2022-02-21 09:50:37', 3, 5, 'Lieusaint', 'Gare de lyon', 5, 'attente'),
('2022-02-21 10:31:31', 1, 5, 'Lieusaint', 'Melun', 2, 'attente'),
('2022-02-21 10:47:12', 2, 5, 'Lieusaint', 'Gare de lyon', 17, 'Accepter');

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE `test` (
  `idbdd` int(200) NOT NULL,
  `ifvfg` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(100) NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `Mat` varchar(100) DEFAULT NULL,
  `utilisateurv` varchar(100) DEFAULT '',
  `admin` varchar(100) DEFAULT 'non'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `Nom`, `Prenom`, `Mail`, `mdp`, `Mat`, `utilisateurv`, `admin`) VALUES
(1, 'Admin', 'Admin', 'Admin@gmail.com', 'Admin', '1', 'véhiculé', 'Oui'),
(2, 'BEN CHOUCHANE', 'YOUSSEF', 'youhouuuuu.ben-chouchane@campussaintaspais.fr', 'NULL', '20', 'NULL', 'non'),
(3, 'BILUMBU', 'KATUVWA', 'kilogramme.bilumbu@campussaintaspais.fr', 'NULL', '21', 'NULL', 'non'),
(4, 'BOUAAZA', 'KAWTAR', 'katar.bouaaza@campussaintaspais.fr', 'NULL', '22', 'NULL', 'non'),
(5, 'CHEVALIER', 'CORENTIN', 'c.chevalier@campussaintaspais.fr', 'cor', '23', 'Passager', 'non'),
(6, 'CHIKHOUNE', 'AGHILES', 'a.chikhoune@campussaintaspais.fr', 'NULL', '24', 'NULL', 'non'),
(7, 'CHIKITOU', 'KILLIAN', 'k.chikitou@campussaintaspais.fr', 'NULL', '25', 'NULL', 'non'),
(8, 'COUSIN', 'TOM', 't.cousin@campussaintaspais.fr', 'NULL', '26', 'NULL', 'non'),
(9, 'DORLAC', 'HUGO', 'h.dorlac@campussaintaspais.fr', 'NULL', '27', 'NULL', 'non'),
(10, 'GIRARD', 'BAPTISTE', 'b.girard@campussaintaspais.fr', 'NULL', '28', 'NULL', 'non'),
(11, 'GUIROUS', 'ADAME', 'a.guirous@campussaintaspais.fr', 'NULL', '29', 'NULL', 'non'),
(12, 'HADJADJI', 'ILYES', 'i.hadjadji@campussaintaspais.fr', 'NULL', '30', 'NULL', 'non'),
(13, 'LEFEBVRE', 'ADRIEN', 'a.lefebvre@campussaintaspais.fr', 'NULL', '31', 'NULL', 'non'),
(14, 'MEDINA', 'MARYNE', 'm.medina@campussaintaspais.fr', 'NULL', '32', 'NULL', 'non'),
(15, 'NABBAT', 'SANA', 's.nabbat@campussaintaspais.fr', 'NULL', '33', 'NULL', 'non'),
(16, 'OMANGA', 'FRANCOIS', 'f.omanga@campussaintaspais.fr', 'NULL', '34', 'NULL', 'non'),
(17, 'RAMANANTSOA', 'RAPHAEL', 'r.ramanantsoa@campussaintaspais.fr', 'Raphael2110', '35', 'véhiculé', 'non'),
(18, 'RAMARLINA', 'HANJA', 'h.ramarlina@campussaintaspais.fr', 'NULL', '36', 'NULL', 'non'),
(19, 'RAMAROKOTO', 'ANDY', 'a.ramarokoto@campussaintaspais.fr', 'NULL', '37', 'NULL', 'non'),
(20, 'RIVE', 'ANTHONY', 'a.rive@campussaintaspais.fr', 'NULL', '38', 'NULL', 'non'),
(21, 'YEO', 'EWAN', 'e.yeo@campussaintaspais.fr', 'NULL', '39', 'NULL', 'non'),
(22, 'test', 'test', 'test@gmail.com', '', '80', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `idvehicule` int(11) NOT NULL,
  `immat` text NOT NULL,
  `Marque` text NOT NULL,
  `Modele` text NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`idvehicule`, `immat`, `Marque`, `Modele`, `iduser`) VALUES
(1, '1254989', 'peugeot', '206', 2),
(2, '16516', 'Renault', 'clio', 2),
(9, '1616116', 'Hyundai', 'iX5', 2),
(11, '61985', 'Nissan', 'Patrol', 2),
(12, '2191115191', 'Peugeot', '309', 2),
(21, '96448249', 'Nissan', 'Patrol', 1),
(22, '063145', 'Aston', 'martin', 17),
(25, '063145', 'peugeot', '406', 17);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cov`
--
ALTER TABLE `cov`
  ADD PRIMARY KEY (`idcov`);

--
-- Index pour la table `import_utilisateur`
--
ALTER TABLE `import_utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`idvehicule`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cov`
--
ALTER TABLE `cov`
  MODIFY `idcov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `import_utilisateur`
--
ALTER TABLE `import_utilisateur`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `idvehicule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
