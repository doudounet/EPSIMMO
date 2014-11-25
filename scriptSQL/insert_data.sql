-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 25 Novembre 2014 à 17:05
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `epsimmo`
--
CREATE DATABASE IF NOT EXISTS `epsimmo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `epsimmo`;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `datenaissance`, `idsecret`, `secret`, `email`, `tel`, `addresse`, `asup`, `cp`, `ville`, `idtype`, `mdp`) VALUES
(1, 'Mantovani', 'Ludovic', '1990-04-08', 1, 'Tag', 'ludovic.mantov@gmail.com', '0671526211', '92 Allée George Sand', 'app 132', '59000', 'Lille', 1, 'coucou');

--
-- Contenu de la table `connexion`
--

INSERT INTO `connexion` (`id`, `iduser`, `datecon`, `vernav`) VALUES
(1, 1, '2014-11-25', 'Firefox');

--
-- Contenu de la table `secret`
--

INSERT INTO `secret` (`id`, `intitule`) VALUES
(1, 'Nom de ton premiers animal de compagnie'),
(3, 'Nom de jeune fille de votre mère');

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id`, `intitule`) VALUES
(1, 'admin'),
(2, 'client');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
