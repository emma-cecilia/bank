-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 16 Janvier 2018 à 08:44
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ub_banque`
--
CREATE DATABASE IF NOT EXISTS `ub_banque` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ub_banque`;

-- --------------------------------------------------------

--
-- Structure de la table `administrateurs`
--

CREATE TABLE IF NOT EXISTS `administrateurs` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `email_admin` varchar(100) DEFAULT NULL,
  `motdePass_admin` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `administrateurs`
--

INSERT INTO `administrateurs` (`id_admin`, `email_admin`, `motdePass_admin`) VALUES
(1, 'pmebiama@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id_cl` int(11) NOT NULL AUTO_INCREMENT,
  `numero_matricule_cl` varchar(150) DEFAULT NULL,
  `nom_cl` varchar(150) DEFAULT NULL,
  `prenom_cl` varchar(150) DEFAULT NULL,
  `date_naissance_cl` date DEFAULT NULL,
  `email_cl` varchar(150) DEFAULT NULL,
  `motdePass_cl` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_cl`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id_cl`, `numero_matricule_cl`, `nom_cl`, `prenom_cl`, `date_naissance_cl`, `email_cl`, `motdePass_cl`) VALUES
(1, 'ABV12', 'VICENTE', 'CALDERON', '1990-01-15', 'vicent@gmail.com', '1230'),
(2, 'AFHB102', 'ZINGOULA', 'GRACE', '2018-01-16', 'grace@gmail.com', '1230');

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE IF NOT EXISTS `comptes` (
  `id_comp` int(11) NOT NULL AUTO_INCREMENT,
  `numero_comp` varchar(150) DEFAULT NULL,
  `solde_comp` int(11) DEFAULT NULL,
  `type_comp` varchar(150) DEFAULT NULL,
  `date_creation_comp` date DEFAULT NULL,
  `id_emp` int(11) NOT NULL,
  `id_cl` int(11) NOT NULL,
  PRIMARY KEY (`id_comp`),
  KEY `FK_comptes_id_emp` (`id_emp`),
  KEY `FK_comptes_id_cl` (`id_cl`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `comptes`
--

INSERT INTO `comptes` (`id_comp`, `numero_comp`, `solde_comp`, `type_comp`, `date_creation_comp`, `id_emp`, `id_cl`) VALUES
(1, '8F5F', 500000, 'Epargne', '2018-01-15', 1, 1),
(2, '4', 10000, 'Epargne', '2018-01-16', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE IF NOT EXISTS `employes` (
  `id_emp` int(11) NOT NULL AUTO_INCREMENT,
  `numero_matricule_emp` varchar(150) DEFAULT NULL,
  `nom_emp` varchar(100) DEFAULT NULL,
  `prenom_emp` varchar(150) DEFAULT NULL,
  `date_naissance_emp` date DEFAULT NULL,
  `email_emp` varchar(150) DEFAULT NULL,
  `motdePass_emp` varchar(150) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_emp`),
  KEY `FK_employes_id_admin` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `employes`
--

INSERT INTO `employes` (`id_emp`, `numero_matricule_emp`, `nom_emp`, `prenom_emp`, `date_naissance_emp`, `email_emp`, `motdePass_emp`, `id_admin`) VALUES
(1, 'ADC10', 'NGANGA', 'GUICHEL', '1995-01-15', 'gi@gmail.com', '1230', 1);

-- --------------------------------------------------------

--
-- Structure de la table `operations`
--

CREATE TABLE IF NOT EXISTS `operations` (
  `id_op` int(11) NOT NULL AUTO_INCREMENT,
  `type_op` varchar(150) DEFAULT NULL,
  `somme_op` int(11) DEFAULT NULL,
  `date_op` date DEFAULT NULL,
  `id_comp` int(11) NOT NULL,
  PRIMARY KEY (`id_op`),
  KEY `FK_operations_id_comp` (`id_comp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `operations`
--

INSERT INTO `operations` (`id_op`, `type_op`, `somme_op`, `date_op`, `id_comp`) VALUES
(1, 'depot', 100000, '2018-01-15', 1),
(2, 'retrait', 500000, '2000-04-04', 1),
(3, 'depot', 100000, '2018-01-16', 2),
(4, 'depot', 100000, '2018-01-16', 2),
(5, 'depot', 100000, '2018-01-16', 2);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD CONSTRAINT `FK_comptes_id_cl` FOREIGN KEY (`id_cl`) REFERENCES `clients` (`id_cl`),
  ADD CONSTRAINT `FK_comptes_id_emp` FOREIGN KEY (`id_emp`) REFERENCES `employes` (`id_emp`);

--
-- Contraintes pour la table `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `FK_employes_id_admin` FOREIGN KEY (`id_admin`) REFERENCES `administrateurs` (`id_admin`);

--
-- Contraintes pour la table `operations`
--
ALTER TABLE `operations`
  ADD CONSTRAINT `FK_operations_id_comp` FOREIGN KEY (`id_comp`) REFERENCES `comptes` (`id_comp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
