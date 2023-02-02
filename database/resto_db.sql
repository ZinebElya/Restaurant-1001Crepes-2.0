-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : database:3306
-- Généré le :  jeu. 02 fév. 2023 à 10:54
-- Version du serveur :  10.4.2-MariaDB-1:10.4.2+maria~bionic
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `resto_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients_messages`
--

CREATE TABLE `clients_messages` (
  `id` int(11) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Prenom` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Sujet` enum('Suggestions','Renseignements','Reservations','Reclamations','Autres') NOT NULL,
  `Message` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients_messages`
--

INSERT INTO `clients_messages` (`id`, `Date`, `Prenom`, `Nom`, `Email`, `Sujet`, `Message`) VALUES
(1, '2023-02-01', 'zineb', 'elya', 'zineb.elya@mail.com', 'Suggestions', 'Reservation pour 2 le 02/02'),
(2, '2023-02-01', 'aaa', 'bbb', 'bbb@mail.com', 'Suggestions', 'les heures d&#39;ouvertures'),
(3, '2023-02-01', 'ddd', 'ccc', 'ccc@gmail.com', 'Suggestions', 'tout va bien'),
(4, '2023-02-01', 'test', 'connex', 'test@mail.com', 'Suggestions', 'test mysqli'),
(5, '2023-02-02', 'Adam', 'Achar', 'adam@mail.com', 'Renseignements', 'reservation pour 4 le 04/04'),
(6, '2023-02-02', 'Samy', 'Samito', 'samy@mail.com', 'Reservations', 'Je veux juste me plaindre');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients_messages`
--
ALTER TABLE `clients_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients_messages`
--
ALTER TABLE `clients_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
