-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 22 mai 2022 à 12:03
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site`
--

-- --------------------------------------------------------

--
-- Structure de la table `année`
--

DROP TABLE IF EXISTS `année`;
CREATE TABLE IF NOT EXISTS `année` (
  `année_etude` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nb_inscrits` int NOT NULL,
  PRIMARY KEY (`année_etude`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `année`
--

INSERT INTO `année` (`année_etude`, `nb_inscrits`) VALUES
('L1', 0),
('L2', 0),
('L3', 0),
('M1', 0),
('M2', 0);

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE IF NOT EXISTS `evenements` (
  `numE` int NOT NULL AUTO_INCREMENT,
  `evenement` varchar(500) NOT NULL,
  `titreE` varchar(60) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`numE`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`numE`, `evenement`, `titreE`, `img`) VALUES
(1, 'Algeria Disrupt est la première édition de « Algeria Disrupt : the annual startup conference » organisée, au CIC : Centre International des Conférences, par le ministère de la micro entreprise, start up et de l’économie de la connaissance en collaboration avec le club CELEC et avec l’aide et la participation du Micro Club.', 'Algeria Disrupt', '../photo/Calendar_ima63ge.png'),
(2, 'Pionnier du développement vidéoludique et première initiative à introduire ce domaine en Algérie, Algeria Game Challenge, anciennement nommé «XNA» d’après le Framework de Microsoft, est un concours de développement de jeux vidéo destiné aux passionnés du domaine vidéoludique aux quatre coins du pays. Ce concours vise à lancer les participants dans un processus d’exploration du métier de développeur de jeux vidéo, afin d’attirer les investisseurs dans ce secteur.', 'Algeria Game Challenge (AGC)', '../photo/img2.png'),
(3, 'Le premier épisode de la série de hackathon présenté par Major League Hacking et ayant lieu du 18 octobre au 24 octobre, une semaine durant laquelle est présentée une série de workshops, talks et autres activités. Micro Club, unique représentant de l’USTHB et l’Algérie jusqu’à présent, y participe en tant que Guilde (ou communauté locale). En plus de la centaine (+100) de workshop présentés par MLH, des workshops supplémentaires organisés par les membres du club en tant que MLH Localhost officie', 'Local Hack Day', '../photo/img3.png');

-- --------------------------------------------------------

--
-- Structure de la table `facultés`
--

DROP TABLE IF EXISTS `facultés`;
CREATE TABLE IF NOT EXISTS `facultés` (
  `fac` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nb_inscrits` int NOT NULL,
  PRIMARY KEY (`fac`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `facultés`
--

INSERT INTO `facultés` (`fac`, `nb_inscrits`) VALUES
('Faculté des Sciences Biologiques', 0),
('Faculté de Chimie', 0),
('Faculté de Physique', 0),
('Faculté de Génie Civil', 0),
('Faculté de génie électrique', 0),
('Faculté d informatique', 0),
('Faculté des Mathématiques', 0),
('Faculté de Génie Mécanique et Génie de Procédés', 0),
('Faculté des Sciences de la terre et Aménagement du Territoire', 0);

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
--

DROP TABLE IF EXISTS `inscriptions`;
CREATE TABLE IF NOT EXISTS `inscriptions` (
  `mat` varchar(12) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tel` int NOT NULL,
  `année` varchar(2) NOT NULL,
  `specialite` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `faculte` varchar(30) NOT NULL,
  `motif` varchar(100) NOT NULL,
  `objectif` varchar(100) NOT NULL,
  PRIMARY KEY (`mat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
