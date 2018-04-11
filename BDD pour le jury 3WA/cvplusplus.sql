-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 11 avr. 2018 à 08:56
-- Version du serveur :  5.7.20-18-log
-- Version de PHP :  7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cvplusplus`
--

-- --------------------------------------------------------

--
-- Structure de la table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `informatics` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other_sector_1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_sector_1_content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_sector_2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_sector_2_content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `other_sector_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_sector_3_content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `education`
--

INSERT INTO `education` (`id`, `informatics`, `other_sector_1`, `other_sector_1_content`, `other_sector_2`, `other_sector_2_content`, `user_id`, `other_sector_3`, `other_sector_3_content`) VALUES
(1, 'sdfsd', 'fhhsh', 'shsh', 'sdhdh', 'shdhh', NULL, 'dfgjdj', 'shdhshsh'),
(2, 'sdfsd', 'leila abuladze', 'shsh', 'sdhdh', 'shdhh', 2, 'dfgjdj', 'shdhshsh'),
(9, 'Now let’s try to add some custom view to the PDF file. To achieve this, first create a twig file in views folder. I will use template.html.twig and add the following code in it:', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'sfhjsfgjsfjgsf', 'sfgj', 'sfgjsfgjsfg', NULL, NULL, NULL, NULL, NULL),
(26, 'sfhjsfgjsfjgsf', 'sfgj', 'sfgjsfgjsfg', NULL, NULL, NULL, NULL, NULL),
(32, 'sfhjsfgjsfjgsf', 'sfgj', 'sfgjsfgjsfg', NULL, NULL, NULL, NULL, NULL),
(46, 'zrtjzrtjzrtjzrtj', 'zrtjzrtjzr', 'zrtjzrtjzrtjzr', NULL, NULL, NULL, NULL, NULL),
(53, 'Alerts are created with the .alert class, followed by one of the four contextual classes', NULL, NULL, NULL, NULL, NULL, 'Diplomatie', NULL),
(54, 'qsfb qdgb nqdfb sgbs fn h', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'azergztr zrth zrth zrthynujj l ol tu:thk; gk;', 'TV', 'z th rthyhy etyj etyh gbghhnn eyhety uj u', NULL, NULL, NULL, NULL, NULL),
(57, 'azergztr zrth zrth zrthynujj l ol tu:thk; gk;', 'TV', 'z th rthyhy etyj etyh gbghhnn eyhety uj u', NULL, NULL, NULL, NULL, NULL),
(58, 'zrhj lizet    àzeoijgijzo z tije^zoifgj i', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'rtj uy yui ikilp:pmfuk ejetyejtyj tj tj', 'TV', 'etyju tuj uj u j_itek etyj uj uj u', NULL, NULL, NULL, NULL, NULL),
(65, 'rtj uy yui ikilp:pmfuk ejetyejtyj tj tj', 'TV', 'etyju tuj uj u j_itek etyj uj uj u', NULL, NULL, NULL, NULL, NULL),
(66, 'rtj uy yui ikilp:pmfuk ejetyejtyj tj tj', 'TV', 'etyju tuj uj u j_itek etyj uj uj u', NULL, NULL, NULL, NULL, NULL),
(67, 'Développeur/Intégrateur d\'applications web / 3WAcademy', 'Histoire', 'DESC/Sorbonne, Université Paris-III', 'Audio-visuel', 'Formation tournage/montage vidéo/Maestro TV', NULL, 'Diplomatie', 'Relations Internationales/ Université d\'Etat de Géorgie'),
(69, 'aergargaergaergaergaergaerg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'zeqfqzfqzfeqzfeqzfzqzeqfqzfqzfeqzfeqzfzqzeqfqzfqzfeqzfeqzfzqzeqfqzfqzfeqzfeqzfzqzeqfqzfqzfeqzfeqzfzq', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'Développeur intégrateur d\'applications web / 3W Academy / Avril 2017', 'TV', 'Audiovisuel: Tournage/montage vidéo/ 2013', 'Histoire', 'Etudes Européennes/Paris III, Sorbonne Nouvelle/ 2004-2006', NULL, 'Diplomatie', 'Relations Internationales, français/anglais - l\'Université d\'Etat de Tbilissi / 1997-2001');

-- --------------------------------------------------------

--
-- Structure de la table `entity_header`
--

CREATE TABLE `entity_header` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `zip` int(11) NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `skills_id` int(11) DEFAULT NULL,
  `education_id` int(11) DEFAULT NULL,
  `experience_id` int(11) DEFAULT NULL,
  `works_id` int(11) DEFAULT NULL,
  `hobby_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `entity_header`
--

INSERT INTO `entity_header` (`id`, `title`, `firstName`, `name`, `address`, `zip`, `city`, `telephone`, `email`, `user_id`, `skills_id`, `education_id`, `experience_id`, `works_id`, `hobby_id`, `date`, `image_id`, `slug`, `published`) VALUES
(63, 'Chef de projet', 'Giorgi', 'briacci', '654 rue des vermicelles', 75017, 'Paris', '63264898', 'briacc0@yahoo.fr', 8, 65, 65, 64, 65, 63, '2018-03-01 10:11:55', NULL, 'chef-de-projet-giorgi-briacci', 0),
(64, 'Chef de projet', 'Giorgi', 'briacci', '654 rue des vermicelles', 75017, 'Paris', '63264858', 'briaccu@yahoo.fr', 8, 66, 66, 65, 66, 64, '2018-03-01 10:14:36', NULL, 'chef-de-projet-giorgi-briacci-1', 0),
(65, 'Intégrateur', 'Curlito', 'Vitaelli', '25 rue de la Joie', 75895, 'Paris', '670616165', 'curlitovitaelli@yahoo.fr', 9, 67, 67, 66, 67, 65, '2018-03-01 10:46:02', 12, 'integrateur-curlito-vitaelli', 0),
(66, 'Chef de projet', 'wxcvnwcvnwcvnwcvn', 'testosteron', 'wcvnwcvnwcvnwcnvwc', 75015, 'Paris', '0645987868', NULL, 11, 69, 69, 68, 69, 67, '2018-03-06 13:04:40', 14, 'chef-de-projet-wxcvnwcvnwcvnwcvn-testosteron', NULL),
(68, 'Data-scientist', 'Louis', 'DAUVERGNE', '2 bis boulevard Voltaire', 92600, 'Asnières sur Seine', '0676426474', NULL, 13, 71, 71, 70, 71, 69, '2018-03-08 20:29:15', 16, 'data-scientist-louis-dauvergne', NULL),
(80, 'Développeur web polyvalent', 'Alexandre', 'sherozia', '36 rue la Condamine', 75017, 'Paris', '0670611199', 'alexandresherozia@yahoo.fr', 12, 83, 83, 82, 83, 81, '2018-03-27 10:20:43', 18, 'developpeur-web-polyvalent-alexandre-sherozia', 1);

-- --------------------------------------------------------

--
-- Structure de la table `entity_skills`
--

CREATE TABLE `entity_skills` (
  `id` int(11) NOT NULL,
  `languages` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sector1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `sector1Content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sector2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sector2Content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sector3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sector3Content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `entity_skills`
--

INSERT INTO `entity_skills` (`id`, `languages`, `sector1`, `user_id`, `sector1Content`, `sector2`, `sector2Content`, `sector3`, `sector3Content`) VALUES
(1, 'html', 'www.php.net', 2, NULL, NULL, NULL, NULL, NULL),
(2, 'html', 'php', 2, NULL, NULL, NULL, NULL, NULL),
(9, 'HTML/CSS, PHP POO, Javascript, JQuery, Bootstrap, MySQL, Doctrine2', 'Design', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'HTML/CSS, PHP POO, Javascript, JQuery, Bootstrap, MySQL, Doctrine2', 'zrtzrt', NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'HTML/CSS, PHP POO, Javascript, JQuery, Bootstrap, MySQL, Doctrine2, Ajax', 'Design', NULL, 'Photoshop, Illustrator', NULL, NULL, NULL, NULL),
(54, 'qqdfg afge aeg ae gaerg aerg aerg', 'Design', NULL, 'qgf eh qdfb qdfb qdfb qdbq', NULL, NULL, NULL, NULL),
(55, 'zergeg ege', 'Data-Mining', NULL, 'J\'au un sérieux savoir dans ce domaine', NULL, NULL, NULL, NULL),
(57, 'zergeg ege', 'Data-Mining', NULL, 'J\'au un sérieux savoir dans ce domaine', NULL, NULL, NULL, NULL),
(58, 'zepk ppoztopzpt', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'dg gjkj ttrr dgh  pmp fhh', 'Data-Mining', NULL, 'zeg zetg thy _j i;o pdhaz z gj, jb;i ul ololrgj kry u', NULL, NULL, NULL, NULL),
(65, 'dg gjkj ttrr dgh  pmp fhh', 'Data-Mining', NULL, 'zeg zetg thy _j i;o pdhaz z gj, jb;i ul ololrgj kry u', NULL, NULL, NULL, NULL),
(66, 'dg gjkj ttrr dgh  pmp fhh', 'Data-Mining', NULL, 'zeg zetg thy _j i;o pdhaz z gj, jb;i ul ololrgj kry u', NULL, NULL, NULL, NULL),
(67, 'Php, html, css, Javascript, Jquery, MySql, Symfony 3, Doctrine, React.js', 'Graphisme', NULL, 'InDesign, Photoshop, Illustrator, After Effects, Premiere Pro, 3Ds Max, Cubase', 'Langues', 'Anglais, Russe, Géorgien', NULL, NULL),
(69, 'gaergaerg rgvergeegaerg', 'aergaegaergaerg', NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'zaezaezaezaezaeazeazezaeazeazeazeazeazeazeazeazeazeazeazeazeaze', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'html, css, php, POO, mySql, Javascript, Twig', 'Frameworks/ORM', NULL, 'Symfony, Silex, Doctrine2, Redbeans', 'Librairies', 'JQuery, React.js, Bootstrap', 'Langues', 'Anglais, russe, géorgien');

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `informatics` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_sector_1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_sector_1_content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_sector_2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_sector_2_content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_sector_3` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_sector_3_content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`id`, `informatics`, `other_sector_1`, `other_sector_1_content`, `other_sector_2`, `other_sector_2_content`, `other_sector_3`, `other_sector_3_content`, `user_id`) VALUES
(1, 'dssdh', 'jlutuiltli', 'fgdghgj', 'FqfQF', 'DFHDH', 'fghdghkkg', 'fgkgkdgkg', 2),
(8, 'Now let’s try to add some custom view to the PDF file. To achieve this, first create a twig file in views folder. I will use template.html.twig and add the following code in it:', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'zrtjzrtjzrtjzrtj', 'zrtj', 'zrtjzrtjzr', NULL, NULL, NULL, NULL, NULL),
(52, 'Alerts are created with the .alert class, followed by one of the four contextual classes', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'qdfb sdsgb qdfb qdb qdb', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'egzt ztg yfhfyhsdbvdf z gzt zthrh yhz hrrjtujuju', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'egzt ztg yfhfyhsdbvdf z gzt zthrh yhz hrrjtujuju', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'kjhrhui iuaergiuaerg p apaeuiu u u  ooiaerig', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'écé(tvlmkh kjh kjh ahjopazijo jkgntjk njktnjn', 'Motion Design', 'aerg rt zg aliha y ouygrf oouyg y  yguy gy ug g yr', NULL, NULL, NULL, NULL, NULL),
(64, 'écé(tvlmkh kjh kjh ahjopazijo jkgntjk njktnjn', 'Motion Design', 'aerg rt zg aliha y ouygrf oouyg y  yguy gy ug g yr', NULL, NULL, NULL, NULL, NULL),
(65, 'écé(tvlmkh kjh kjh ahjopazijo jkgntjk njktnjn', 'Motion Design', 'aerg rt zg aliha y ouygrf oouyg y  yguy gy ug g yr', NULL, NULL, NULL, NULL, NULL),
(66, 'Free-lance en développement web/Agence webReactor', 'Audiovisuel', 'Cameraman/monteur vidéo chez Maestro TV', 'Motion design', 'Réalisation d\'effets spéciaux/Logiciel After Effects', NULL, NULL, NULL),
(68, 'aaergaergaegraergaergaerg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'zeqfqzfqzfeqzfeqzfzqzeqfqzfqzfeqzfeqzfzqzeqfqzfqzfeqzfeqzfzqzeqfqzfqzfeqzfeqzfzq', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'Développeur intégrateur pour des projets personnels', 'Motion design', 'Production des reportages pour chaînes TV, montage/caméra, habillage graphique sur After  effects/Premiere pro', 'Audiovisuel', 'Envoyé-reporter en France pour Maestro TV (Géorgie) /caméra/montage/son', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `slug`) VALUES
(2, 'dudu', 'dudu', 'sandrosherozia@gmail.com', 'sandrosherozia@gmail.com', 1, NULL, '$2y$13$Y0OKIH0ndWDyly3jDvm/XO/ccy9hd36WaXFIvx25W9LTS0K4XTECO', '2018-02-11 13:12:25', NULL, NULL, 'a:0:{}', 'dudu'),
(3, 'jujubaba', 'jujubaba', 'jujubaba@yahoo.fr', 'jujubaba@yahoo.fr', 1, NULL, '$2y$13$4XVvJJtmBhvokHLUMamf5e6DJnL5yuY5/bK6kIjlHsEGXiLl2s9Im', '2018-01-24 15:34:52', NULL, NULL, 'a:0:{}', 'jujubaba'),
(6, 'babala', 'babala', 'babala@yahoo.fr', 'babala@yahoo.fr', 1, NULL, '$2y$13$1FdpjC42FKK1b/8qkP8gbud2vfKYfHp/9rcB5UVOd0E6XFQjFV9i6', '2018-03-01 10:30:53', '3MTsDAHrVdWZLslnQ3n_ROLsuPDKckiEcw1Z2Hr63mg', NULL, 'a:0:{}', 'babala'),
(7, 'kokoloko', 'kokoloko', 'kokoloko@yahoo.fr', 'kokoloko@yahoo.fr', 1, NULL, '$2y$13$ab3Vv5ZQFmirMMtGBO7d8OtY000aR1NuF/.NCtkIoKH7MOa0B2sni', '2018-02-28 23:10:57', NULL, NULL, 'a:0:{}', 'kokoloko'),
(9, 'Sandrozia', 'sandrozia', 'sandrozia@gmail.com', 'sandrozia@gmail.com', 1, NULL, '$2y$13$.pGY4qDDGed6Ff11mLWKNez1Q85TljIDp9xg4Iwb7F/7Kp1B5Zzv2', '2018-03-01 10:36:45', NULL, NULL, 'a:0:{}', 'sandrozia'),
(12, 'Sandro', 'sandro', 'alexandresherozia@yahoo.fr', 'alexandresherozia@yahoo.fr', 1, NULL, '$2y$13$Yuv3gyjygJQeb3hrEje5tuvfpYi5AbPeQqZi5YwntHcsv9ClIjhtC', '2018-04-11 08:55:38', NULL, NULL, 'a:0:{}', 'sandro'),
(13, 'LouiFi', 'louifi', 'iamlouisdauvergne@gmail.com', 'iamlouisdauvergne@gmail.com', 1, NULL, '$2y$13$EHNUFLWLp8sB/BQbcUCYO.T2agX1wYiHvNZxrZAktG5dVGirDHos6', '2018-03-08 20:16:11', NULL, NULL, 'a:0:{}', 'louifi');

-- --------------------------------------------------------

--
-- Structure de la table `hobby`
--

CREATE TABLE `hobby` (
  `id` int(11) NOT NULL,
  `area_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area_2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `area_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `area_4` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `hobby`
--

INSERT INTO `hobby` (`id`, `area_1`, `content_1`, `area_2`, `content_2`, `area_3`, `content_3`, `area_4`, `content_4`, `user_id`, `date`) VALUES
(7, 'Musique', 'The wrapper itself is configured by the following special options that can be passed to the constructor, set as object properties or via setOptions():', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-11 13:15:57'),
(44, 'Musique', 'zrtjzrtjzrtjzr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-14 16:52:30'),
(51, 'Musique', 'Alerts are created with the .alert class, followed by one of the four contextual classes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-21 16:09:57'),
(52, 'Musique', 'qfb qdbsfgb qdb qdfbqdbgb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-28 15:32:29'),
(53, 'jaba juba', 'rt y nn teyn unj et nen dnf hfn ehn n netyn tey u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-28 15:38:44'),
(55, 'jaba juba', 'rt y nn teyn unj et nen dnf hfn ehn n netyn tey u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-28 15:42:05'),
(56, 'jaba juba', 'je suis le principal jujubaba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-28 15:49:24'),
(62, 'Musique', 'jhuirhiughruih  guezroi  ierauuripaiuu&u u uii uhfbjkfbiar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-01 10:10:54'),
(63, 'Musique', 'jhuirhiughruih  guezroi  ierauuripaiuu&u u uii uhfbjkfbiar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-01 10:11:55'),
(64, 'Musique', 'jhuirhiughruih  guezroi  ierauuripaiuu&u u uii uhfbjkfbiar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-01 10:14:36'),
(65, 'Musique', 'Guitare, chant. Production des compositions musicales pour des films indépendants', 'Cinéma', 'Documentaires scientifiques', 'Sport', 'Foot, Natation', NULL, NULL, NULL, '2018-03-01 10:46:02'),
(67, 'oui j\'aime touuuuuuut', 'aefbqdfbsbdfhnnsgbqdfbqdfdfb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-06 13:04:40'),
(69, 'azdzad', 'azdzadzadzadazdzazdzadzadzadazdzazdzadzadzadazdzazdzadzadzadazdzazdzadzadzadazdzazdzadzadzadazdzazdzadzadzadazdzazdzadzadzadazdzazdzadzadzadazdzazdzadzadzadazdza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-08 20:29:15'),
(81, 'Musique', 'Chant, guitare', 'Cinéma', 'Fictions, makings-off, documentaires', 'Sport', 'Foot, natation, skis', 'Lecture', 'Sciences, nouvelles technologies', NULL, '2018-03-27 10:20:43');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `image_name`, `updated_at`) VALUES
(7, 'mr.Tombeur_formation.jpg', '2018-03-05 08:57:23'),
(8, 'mr.Tombeur.jpg', '2018-02-24 20:53:16'),
(9, 'favicon.ico', '2018-03-05 08:57:48'),
(10, 'mr.Tombeur_loisirs.jpg', '2018-02-28 15:38:44'),
(11, 'manpencil.png', '2018-02-28 15:53:46'),
(12, 'bonhomme.png', '2018-03-01 20:19:09'),
(14, 'bonhomme.png', '2018-03-06 13:04:40'),
(16, 'ico.jpg', '2018-03-08 20:29:15'),
(18, 'profil_2_150.jpg', '2018-03-27 21:23:56');

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `collection` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` int(11) DEFAULT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `imageUrl` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id`, `collection`, `title`, `user`, `code`, `description`, `imageUrl`) VALUES
(1, 'coll: base de donnée', 'titre 1', 1, '5456', 'Pour rappel, un interclassement (ou collation en Anglais) est un ensemble de règles permettant la comparaison de caractères dans un jeu. Ce paramètre influe donc sur le résultat des tris. MySQL vous propose plusieurs interclassements pour l\'UTF-8. La plupart sont spécifiques à certaines langues, comme utf8_esperanto_ci qui est prévu pour l\'Esperanto. Si vous ne travaillez pas dans l\'une de ces langues, comme c\'est le cas pour le Français, il vous reste 3 autres options :\r\nutf8_bin. Cet interclassement compare les codes des caractères. Il est donc très rapide, mais pas forcément très précis. Comme les codes des majuscules sont plus petits que ceux des minuscules (A = 65, a = 97), les enregistrements comportant du texte en majuscules se retrouveront placés avant les textes écrit en minuscules, ce qui ne correspondra pas forcément aux attentes de l\'utilisateur.\r\nutf8_general_ci. Cet interclassement fonctionne de façon très simple. Il supprime les accents et converti le texte en minuscules. Il est donc assez rapide.\r\nutf8_unicode_ci est plus précis car il supporte les caractères multiples comme le e dans l\'o. En contrepartie, il peut s\'avérer un peu plus lent.\r\nDonc à priori, pour le Français, on peut utiliser utf8_bin sur une colonne où tout le texte est soit en minuscules, soit en majuscules de façon à obtenir les meilleures performances. Si on n\'est pas sur de la casse des caractères, il faut utiliser utf8_general_ci. Enfin, si vous travaillez avec plusieurs langues différentes, utf8_unicode_ci sera alors peut-être plus adapté.\r\nLangue\r\nFrançais', NULL),
(4, 'collect-2', 'fos bundle', 2, '65', 'Everything works, but if you go to /register... it looks awful. Well, of course it looks awful! FOSUserBundle has no idea how the page should be styled. But don\'t worry: we can get this looking much better, very quickly.\r\n\r\nFirst, on the web debug toolbar, find the template icon and click it. This will show you all the templates used to render this page... which is a beautiful cheat sheet for knowing what templates you can override!\r\n\r\nCorrecting the Base Layout \r\nThe one I\'m interested in is layout.html.twig, which lives in FOSUserBundle.\r\n\r\nIn my editor, I\'ll press Shift+Shift to open that file. Ok, every Twig template in FOSUserBundle extends this layout.html.twig file. For example, see the \"Logged in as\" text? That\'s coming from here.\r\n\r\nBut, we want all of FOSUserBundle\'s templates to instead extend our base.html.twig template. How can we do that?\r\n\r\nOverriding the Layout \r\nBy overriding layout.html.twig. Let\'s see how. First, to override any template from a bundle, just go to app/Resources, then create a directory with the same name as the bundle: FOSUserBundle. Inside, create one more directory: views.\r\n\r\nIn this case, the layout.html.twig template lives right the root of the views/ directory in the bundle. So that\'s where we need to create our\'s. Inside, extend the normal base.html.twig.', NULL),
(5, 'collect_15', '456', 2, '65', 'srheyjtrukryukryukruyk', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `header_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `url_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `work`
--

INSERT INTO `work` (`id`, `url_1`, `description_1`, `url_2`, `description_2`, `url_3`, `description_3`, `user_id`) VALUES
(1, 'https://getbootstrap.com/docs/4.0/components/card/#titles-text-and-links', 'srghshtrth', 'https://getbootstrap.com/docs/4.0/components/card/#titles-text-and-links', 'qehqeh', 'https://getbootstrap.com/docs/4.0/components/card/#titles-text-and-links', 'etukjyjzrjrzj', 2),
(2, 'https://getbootstrap.com/docs/4.0/components/card/#titles-text-and-links', 'srghshtrth', 'https://getbootstrap.com/docs/4.0/components/card/#titles-text-and-links', 'qehqeh', 'https://getbootstrap.com/docs/4.0/components/card/#titles-text-and-links', 'etukjyjzrjrzj', 2),
(9, 'http://localhost:8000/tuto/web/app_dev.php/addForm', 'The wrapper itself is configured by the following special options that can be passed to the constructor, set as object properties or via setOptions():', NULL, NULL, NULL, NULL, NULL),
(46, 'http://www.cvplus.space', 'zrtjzrtjzrtjzrtjzr', NULL, NULL, NULL, NULL, NULL),
(53, 'http://localhost:8000/tuto/web/app', 'Alerts are created with the .alert class, followed by one of the four contextual classes', NULL, NULL, NULL, NULL, NULL),
(54, 'http://www.cvplus.space', 'q fdg qdgqfgsdg stbfsynu', NULL, NULL, NULL, NULL, NULL),
(55, 'http://localhost:8000/tuto/web/app', 'zetg yb uet euj ethjg,khi,hlmmdfg  rhyjukik', NULL, NULL, NULL, NULL, NULL),
(57, 'http://localhost:8000/tuto/web/app', 'zetg yb uet euj ethjg,khi,hlmmdfg  rhyjukik', NULL, NULL, NULL, NULL, NULL),
(58, 'http://localhost:8000/tuto/web/app_dev.php/edit/curriculum/13', 'az jhu i aia oifgg hgiaroaeuhgu piuaher', NULL, NULL, NULL, NULL, NULL),
(64, 'http://www.cvplus.space', 'étg t yh juik mp ezh ta  aer gth yhh u', NULL, NULL, NULL, NULL, NULL),
(65, 'http://www.cvplus.space', 'étg t yh juik mp ezh ta  aer gth yhh u', NULL, NULL, NULL, NULL, NULL),
(66, 'http://www.cvplus.space', 'étg t yh juik mp ezh ta  aer gth yhh u', NULL, NULL, NULL, NULL, NULL),
(67, 'http://www.cvplus.space', 'j\'ai absolument rien foutu pour ce site, alors que les autres bossaient', 'http://www.webreactor.space', 'Portfolio personnel/site vitrine', NULL, NULL, NULL),
(69, 'http://cvplusplus.space', 'aergaergaergaergaergaergaerg', NULL, NULL, NULL, NULL, NULL),
(71, 'http://okoadz.fr', 'zeqfqzfqzfeqzfeqzfzqzeqfqzfqzfeqzfeqzfzqzeqfqzfqzfeqzfeqzfzqzeqfqzfqzfeqzfeqzfzq', NULL, NULL, NULL, NULL, NULL),
(83, 'http://webreactor.space', 'Portfolio / site vitrine destiné à présenter mes travaux et projets à venir', 'http://cvplusplus.space', 'Platforme de création des CVs en ligne/ Symfony, Twig, JQuery...(en cours d\'amélioration)', 'https://github.com/AlexandreSherozia', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entity_header`
--
ALTER TABLE `entity_header`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_AABF164C989D9B62` (`slug`),
  ADD UNIQUE KEY `UNIQ_AABF164C7FF61858` (`skills_id`),
  ADD UNIQUE KEY `UNIQ_AABF164C2CA1BD71` (`education_id`),
  ADD UNIQUE KEY `UNIQ_AABF164C46E90E27` (`experience_id`),
  ADD UNIQUE KEY `UNIQ_AABF164CF6CB822A` (`works_id`),
  ADD UNIQUE KEY `UNIQ_AABF164C322B2123` (`hobby_id`),
  ADD UNIQUE KEY `UNIQ_AABF164C3DA5256D` (`image_id`);

--
-- Index pour la table `entity_skills`
--
ALTER TABLE `entity_skills`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479989D9B62` (`slug`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Index pour la table `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_7B00651C2EF91FD8` (`header_id`);

--
-- Index pour la table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT pour la table `entity_header`
--
ALTER TABLE `entity_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT pour la table `entity_skills`
--
ALTER TABLE `entity_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `hobby`
--
ALTER TABLE `hobby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `entity_header`
--
ALTER TABLE `entity_header`
  ADD CONSTRAINT `FK_AABF164C2CA1BD71` FOREIGN KEY (`education_id`) REFERENCES `education` (`id`),
  ADD CONSTRAINT `FK_AABF164C322B2123` FOREIGN KEY (`hobby_id`) REFERENCES `hobby` (`id`),
  ADD CONSTRAINT `FK_AABF164C3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `FK_AABF164C46E90E27` FOREIGN KEY (`experience_id`) REFERENCES `experience` (`id`),
  ADD CONSTRAINT `FK_AABF164C7FF61858` FOREIGN KEY (`skills_id`) REFERENCES `entity_skills` (`id`),
  ADD CONSTRAINT `FK_AABF164CF6CB822A` FOREIGN KEY (`works_id`) REFERENCES `work` (`id`);

--
-- Contraintes pour la table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `FK_7B00651C2EF91FD8` FOREIGN KEY (`header_id`) REFERENCES `entity_header` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
