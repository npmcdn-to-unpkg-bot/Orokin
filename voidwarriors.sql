-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 10 Septembre 2016 à 17:22
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `voidwarriors`
--

-- --------------------------------------------------------

--
-- Structure de la table `a_dmad_hybrid_auth_phinxlog`
--

DROP TABLE IF EXISTS `a_dmad_hybrid_auth_phinxlog`;
CREATE TABLE `a_dmad_hybrid_auth_phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `a_dmad_hybrid_auth_phinxlog`
--

INSERT INTO `a_dmad_hybrid_auth_phinxlog` (`version`, `migration_name`, `start_time`, `end_time`) VALUES
(20150813000000, 'CreateSocialProfiles', '2016-08-29 07:18:04', '2016-08-29 07:18:04');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `roles`
--

INSERT INTO `roles` (`id`, `nom`) VALUES
(1, 'Initié'),
(2, 'Warchief'),
(3, 'Highlord'),
(5, 'Test');

-- --------------------------------------------------------

--
-- Structure de la table `social_profiles`
--

DROP TABLE IF EXISTS `social_profiles`;
CREATE TABLE `social_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  `profile_url` varchar(255) DEFAULT NULL,
  `website_url` varchar(255) DEFAULT NULL,
  `photo_url` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `birth_day` varchar(255) DEFAULT NULL,
  `birth_month` varchar(255) DEFAULT NULL,
  `birth_year` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `social_profiles`
--

INSERT INTO `social_profiles` (`id`, `user_id`, `provider`, `identifier`, `profile_url`, `website_url`, `photo_url`, `display_name`, `description`, `first_name`, `last_name`, `gender`, `language`, `age`, `birth_day`, `birth_month`, `birth_year`, `email`, `email_verified`, `phone`, `address`, `country`, `region`, `city`, `zip`, `created`, `modified`) VALUES
(13, 27, 'Steam', '76561198095877817', 'http://steamcommunity.com/profiles/76561198095877817/', '', 'http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/e3/e307bc88c82303451456831196a8df71dd1cc37b_full.jpg', 'Neptius', 'No information given.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-08-29 22:21:44', '2016-09-10 16:41:10'),
(14, 28, 'Steam', '76561198031046603', 'http://steamcommunity.com/profiles/76561198031046603/', '', 'http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/9c/9ce6a72d9763a4c22d6e1d4783cc4aaf304af7d0_full.jpg', 'cob_metallica', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-08-30 09:02:12', '2016-08-30 09:02:12'),
(15, 29, 'Steam', '76561198094053571', 'http://steamcommunity.com/profiles/76561198094053571/', '', 'http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/99/99cf305bda682d83e8ac3cb8f79a3c87e1b60924_full.jpg', 'Marcus-Brutus', 'No information given.', '', '', '', '', '', '', '', '', '', '', '', '', '', 'La Rochelle, Poitou-Charentes, France', '', '', '2016-08-30 16:28:22', '2016-08-30 16:28:22'),
(16, 30, 'Steam', '76561198094004442', 'http://steamcommunity.com/profiles/76561198094004442/', '', 'http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/3e/3ef05ce7f8087657da7d5e35b73899611b666ce4_full.jpg', 'Dels', 'No information given.', 'DELVER Sébastien', '', '', '', '', '', '', '', '', '', '', '', '', 'Midi-Pyrenees, France', '', '', '2016-08-30 17:12:52', '2016-08-30 17:12:52'),
(17, 31, 'Steam', '76561198043962326', 'http://steamcommunity.com/profiles/76561198043962326/', '', 'http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/24/242313675f76045cf601c671686d4b7ab67ffbe4_full.jpg', '(H)Ero-Mate #Team Scout Mom', 'Une page FB dédié à l\'hérésie.\n<br>\n<br> <a class="bb_link" href="http://www.facebook.com/Pervers.Sans.Frontiere.Psf?ref=hl" target="_blank" rel="noreferrer" >PerverSansFrontière</a> \n<br>', 'Sergent Bob', '', '', '', '', '', '', '', '', '', '', '', '', 'Ales, Languedoc-Roussillon, France', '', '', '2016-08-30 22:19:18', '2016-08-30 22:19:18');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(10) NOT NULL DEFAULT '1',
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_active` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `role_id`, `admin`, `email`, `last_active`) VALUES
(27, 2, 1, NULL, '2016-09-10 16:41:12'),
(28, 1, 0, NULL, '0000-00-00 00:00:00'),
(29, 1, 0, NULL, '0000-00-00 00:00:00'),
(30, 1, 0, NULL, '0000-00-00 00:00:00'),
(31, 1, 0, NULL, '0000-00-00 00:00:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `social_profiles`
--
ALTER TABLE `social_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `social_profiles`
--
ALTER TABLE `social_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
