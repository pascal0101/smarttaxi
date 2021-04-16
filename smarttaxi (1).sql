-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 13 Septembre 2018 à 11:27
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `smarttaxi`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pascal', 'pascaldaf2016@gmail.com', 'pascal', NULL, '2018-08-17 14:44:01', '2018-08-17 14:44:01'),
(2, 'pascal', 'dangote2018@gmail.com', '$2y$10$buYCu8H1lgLI764YsfFZfOPL6cEWvcCAkzOup8tg78zDhH7K1GeWm', 'I8kmPB1vZYjojmy4YCnhYrb5zYN6kSRoaaiRVulKRX4SULKt8CI1RGIRgwMn', '2018-08-17 15:07:08', '2018-08-17 15:07:08');

-- --------------------------------------------------------

--
-- Structure de la table `agences`
--

CREATE TABLE `agences` (
  `id` int(10) NOT NULL,
  `NomAgen` varchar(100) DEFAULT NULL,
  `TelephonAg` int(11) DEFAULT NULL,
  `Email` varchar(25) DEFAULT NULL,
  `codeAgen` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `agences`
--

INSERT INTO `agences` (`id`, `NomAgen`, `TelephonAg`, `Email`, `codeAgen`) VALUES
(3, 'Taxis-Bleus', 91428199, 'taxisbleus@gmail.com', 'AG001');

-- --------------------------------------------------------

--
-- Structure de la table `attributions`
--

CREATE TABLE `attributions` (
  `CodeChauffTaxi` int(11) NOT NULL,
  `CodeTaxi` int(11) NOT NULL,
  `dateAttrib` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `attributions`
--

INSERT INTO `attributions` (`CodeChauffTaxi`, `CodeTaxi`, `dateAttrib`) VALUES
(36, 3, '2018-09-12 13:49:05'),
(35, 3, '2018-09-12 13:48:36'),
(27, 2, '2018-09-09 03:33:07'),
(28, 2, '2018-09-09 03:40:37'),
(29, 2, '2018-09-09 03:41:45'),
(34, 2, '2018-09-09 04:06:44'),
(37, 3, '2018-09-12 13:49:23'),
(38, 3, '2018-09-13 09:17:02');

-- --------------------------------------------------------

--
-- Structure de la table `chauffeurs`
--

CREATE TABLE `chauffeurs` (
  `id` int(11) NOT NULL,
  `NomchauffTaxi` varchar(100) NOT NULL,
  `PrechauffTaxi` varchar(15) DEFAULT NULL,
  `AdrChauffTaxi` varchar(25) DEFAULT NULL,
  `CategoriPermis` varchar(4) NOT NULL,
  `Numero` varchar(15) DEFAULT NULL,
  `Sexe` char(1) NOT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Identifiant` varchar(100) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `permis` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chauffeurs`
--

INSERT INTO `chauffeurs` (`id`, `NomchauffTaxi`, `PrechauffTaxi`, `AdrChauffTaxi`, `CategoriPermis`, `Numero`, `Sexe`, `Password`, `Identifiant`, `photo`, `permis`) VALUES
(16, 'AVOUSSOU', 'JUNIOR', 'lome-togo', 'A', '91428199', 'M', 'PASCAL', 'AVOUSSOUJUNIOR', 'image/FBwItDi43M4aEGeFd6VuivZJireQXwAz6BQaYkwZ.png', 'image/cDmRPpBloFz1eJLqkyLdmQgOx8JyMDWDgFUW6X6d.pdf'),
(28, 'carlos', 'carlos', 'lome-togo', 'A1', '91428199', 'M', 'pascal', 'pascaldaf2016@gmail.com', 'image/XKzR1PRjtsABAHLSKuswZciRDG5omRm0UgdkbKyo.png', 'image/au1C5S704y61u4ZuuQVDlLCggbZvckpRIq35W3VP.pdf'),
(29, 'ABOUKI', 'pascal', 'lome-togo', 'A1', '91428199', 'M', 'pascal', 'pascaldaf2016@gmail.com', 'image/yhkf3MRkkgCTWRIDgPtWsOuvZ7ydkE0MgX76SNJu.png', 'image/Hnpbcc9zssPFNd8ao8f4O0EP81gn9FWhrVLC9MJa.pdf'),
(35, 'doro', 'doro', 'lome-togo', 'B', '91428199', 'M', 'pascal', 'pascaldaf2016@gmail.com', 'image/akrTuWNMlHaRnAcnmdhZ8hJ5SEw6EcQSqQC5dDzP.png', 'image/VCWGdUiHIJGLOLfmxiSpteKctvHnh6c96bDRlnzN.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `CodeUtilisat` int(11) NOT NULL,
  `CodePassager` int(11) NOT NULL,
  `CodeTaxi` int(11) NOT NULL,
  `DateComm` datetime DEFAULT NULL,
  `LieuArriv` varchar(25) DEFAULT NULL,
  `LibBaga` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `journal`
--

CREATE TABLE `journal` (
  `IdJournal` int(11) NOT NULL,
  `CodeUtilisat` int(11) NOT NULL,
  `Libjournal` varchar(10) DEFAULT NULL,
  `datejournal` datetime DEFAULT NULL,
  `HeureJournal` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `CodeAgen` varchar(10) NOT NULL,
  `NomManag` varchar(10) DEFAULT NULL,
  `PrenomManag` varchar(100) NOT NULL,
  `sexe` char(1) DEFAULT NULL,
  `TelephonManag` varchar(12) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `AdressManag` varchar(25) DEFAULT NULL,
  `Password` varchar(100) NOT NULL,
  `etat` tinyint(1) DEFAULT '1',
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `managers`
--

INSERT INTO `managers` (`id`, `CodeAgen`, `NomManag`, `PrenomManag`, `sexe`, `TelephonManag`, `Email`, `AdressManag`, `Password`, `etat`, `photo`) VALUES
(9, 'AG001', 'azerty', 'azerty', 'M', '91428199', 'carlos2020@gmail.com', 'lome-togo', 'carlos20', 1, 'image/deG6b89qfa2twSpG0HmXujD8rOVXuwJWFtZaSnp8.png');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `passagers`
--

CREATE TABLE `passagers` (
  `CodePassager` int(11) NOT NULL,
  `NomPass` varchar(10) DEFAULT NULL,
  `PrenPass` varchar(25) DEFAULT NULL,
  `SexePass` varchar(10) DEFAULT NULL,
  `AdrPass` varchar(25) DEFAULT NULL,
  `Email` varchar(25) DEFAULT NULL,
  `Numero` varchar(12) DEFAULT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `passagers`
--

INSERT INTO `passagers` (`CodePassager`, `NomPass`, `PrenPass`, `SexePass`, `AdrPass`, `Email`, `Numero`, `username`, `password`) VALUES
(9, 'OHIU', 'Leleda', 'F', 'Agoè', 'lo@gmail.com', '92121313', 'lele123', '1234567'),
(10, 'ABOUKI', 'Komi', 'M', 'zon&#39;go', 'carlos@gmail.com', '92341245', 'Abouki12', '1234567');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `CodeUtilisat` int(11) NOT NULL,
  `CodePassager` int(11) NOT NULL,
  `CodeTaxi` int(11) NOT NULL,
  `LieuDepaRes` char(1) DEFAULT NULL,
  `LieuArrvRes` char(1) DEFAULT NULL,
  `HeurDep` char(1) DEFAULT NULL,
  `DateReserv` char(1) DEFAULT NULL,
  `LibBaga` char(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `taxis`
--

CREATE TABLE `taxis` (
  `CodeTaxi` int(11) NOT NULL,
  `CodeAgen` varchar(20) NOT NULL,
  `CodeTypCon` varchar(20) NOT NULL,
  `LibTaxi` varchar(25) DEFAULT NULL,
  `Nbrplace` int(11) DEFAULT NULL,
  `ImmaTaxi` varchar(8) DEFAULT NULL,
  `CoulTaxi` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `taxis`
--

INSERT INTO `taxis` (`CodeTaxi`, `CodeAgen`, `CodeTypCon`, `LibTaxi`, `Nbrplace`, `ImmaTaxi`, `CoulTaxi`) VALUES
(3, 'AG001', 'Taxi Mixte', 'toyota', 5, 'CA-7712', 'Jaune');

-- --------------------------------------------------------

--
-- Structure de la table `type_taxi`
--

CREATE TABLE `type_taxi` (
  `CodeTypCon` int(11) NOT NULL,
  `LibTypCon` varchar(254) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pascal', 'pascaldaf2016@gmail.com', '$2y$10$cn5JAbb.Ug3c2b16SKeZAeYj/AVIZOHkWGG2jHZx.l4KQ1kLkevHy', 'GNdEnZ0GM7enCksh42L6yOnNNXQawRil0pQLQS2XzqcTDio2hSJb5hsBfP7A', '2018-08-17 09:48:03', '2018-08-17 09:48:03'),
(2, 'carlos', 'carlos@gmail.com', 'carlos', 'carlos', '2018-09-03 22:00:00', '2018-09-05 22:00:00'),
(3, 'pascal', 'pascaldaf2020@gmail.com', '$2y$10$lj2c25NveAlF3n.n1w9fWeupoKbOY0/D.mhyZkz7EyMSKavdRP2Nm', 'mL63ZJXgLZvLtxNlKhlUqphuGgiWfdN5VWRduA4WPqJWtqm7ilc1qiL351Y5', '2018-09-12 09:13:05', '2018-09-12 09:13:05'),
(4, 'carlos', 'carlos10@gmail.com', '$2y$10$vwXK1/roY74Psn40UBF7D.A3LW7sTHIDIQl55BaUan50JLMqgSfH.', 'opH8Zq6Uhvin0ck8d1TU2ANs7lud8JeHOOQEYwhQrAGoyYQx8GFW4QNAHF9a', '2018-09-12 09:18:40', '2018-09-12 09:18:40'),
(5, 'carlos', 'carlos200@mail.com', '$2y$10$jVl3u8XVfOAeCB7vr6.yVOxVz2FbVxUTMcxDCAEfmXHRk1b5mZlRS', 'RsbKsnKQIk5r8J1l2zl8fN9gIDW9sxtF1FyvBJfrBtkAourN3cAv9Kq5c3pf', '2018-09-12 09:50:41', '2018-09-12 09:50:41'),
(6, 'carlos100', 'carlos100@gmail.com', '$2y$10$MIQStnIUNKKcwmiyWCf9UuglP2/zTnL/mhpI9f5STgOcoAxgup7Bi', NULL, '2018-09-12 10:00:11', '2018-09-12 10:00:11'),
(7, 'ABOUKI', 'pascaldaf2000@gmail.com', '$2y$10$AI6zv5YecHSqchs5fXFEwuWjSFHf0q8sIiEG66wT0HJSbnPOs8ak2', 'uffx7mOIJL3l9BUjLAF2TPI0Iahb8vi59nDE8QWDdZHcQRnIqP2FvUpcmbXg', '2018-09-12 16:58:32', '2018-09-12 16:58:32'),
(8, 'azerty', 'carlos2020@gmail.com', '$2y$10$at8mm0GuoKaAaKgyWbKq4OrRDGUxJN0NYGTENlE4lsmBEYJigpOG2', NULL, '2018-09-13 07:27:27', '2018-09-13 07:27:27');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `CodeUtilisat` int(11) NOT NULL,
  `NomUtilisat` varchar(10) DEFAULT NULL,
  `PrenomUtilsat` varchar(15) DEFAULT NULL,
  `Username` varchar(10) DEFAULT NULL,
  `Pass` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Index pour la table `agences`
--
ALTER TABLE `agences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `attributions`
--
ALTER TABLE `attributions`
  ADD PRIMARY KEY (`CodeChauffTaxi`,`CodeTaxi`),
  ADD KEY `FK_association4` (`CodeTaxi`);

--
-- Index pour la table `chauffeurs`
--
ALTER TABLE `chauffeurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`CodeUtilisat`,`CodePassager`,`CodeTaxi`),
  ADD KEY `FK_PEUT_ETRE_COMMANDER` (`CodeTaxi`);

--
-- Index pour la table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`IdJournal`),
  ADD KEY `FK_association3` (`CodeUtilisat`);

--
-- Index pour la table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_association5` (`CodeAgen`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `passagers`
--
ALTER TABLE `passagers`
  ADD PRIMARY KEY (`CodePassager`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`CodeUtilisat`,`CodePassager`,`CodeTaxi`),
  ADD KEY `FK_PEUT_ETRE_RESERVER` (`CodeTaxi`);

--
-- Index pour la table `taxis`
--
ALTER TABLE `taxis`
  ADD PRIMARY KEY (`CodeTaxi`),
  ADD KEY `FK_association6` (`CodeAgen`),
  ADD KEY `FK_association7` (`CodeTypCon`);

--
-- Index pour la table `type_taxi`
--
ALTER TABLE `type_taxi`
  ADD PRIMARY KEY (`CodeTypCon`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`CodeUtilisat`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `agences`
--
ALTER TABLE `agences`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `chauffeurs`
--
ALTER TABLE `chauffeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `journal`
--
ALTER TABLE `journal`
  MODIFY `IdJournal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `passagers`
--
ALTER TABLE `passagers`
  MODIFY `CodePassager` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `taxis`
--
ALTER TABLE `taxis`
  MODIFY `CodeTaxi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `CodeUtilisat` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
