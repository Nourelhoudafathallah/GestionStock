-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 08 avr. 2019 à 22:05
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tech`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `sujet`, `message`) VALUES
(51, 'ines el 5ra', 'dfdsfsdf@kjsqfk.ff', 'dfsdfsf', 'dsfsdfsffsdf'),
(50, 'loulou', 'sirine.mekki@outlook.com', 'ssd', 'skdjlksjd'),
(48, 'loulou', 'loulou@exemple.fr', 'mon avis', 'voilÃ  mon avis'),
(47, 'ali ben ali', 'aliali@gmail.com', 'Ã©cran', 'les Ã©crans sont jolies :)'),
(46, 'sirine mekki', 'sirine.mekki@outlook.com', 'site web', 'trÃ¨s bon site');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `description` longtext NOT NULL,
  `type` varchar(255) NOT NULL,
  `marque` varchar(255) DEFAULT NULL,
  `prix` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `description`, `type`, `marque`, `prix`, `image`) VALUES
(65, 'loulou', 'skjclsqksj', 'imprimante', 'canon.jpg', '1250 dt', 'imp1.jpg'),
(66, 'loulou', 'ssd', 'ordinateur', 'canon.jpg', '1250 dt', 'imp2.jpg'),
(46, 'TABLETTE ASUS TRANSFORMER BOOK T101HA / ROSE GOLD', 'Ecran 10.1\" Tactile LED HD (1280x800) - Processeur Intel Cherry Trail Quad-Core Z8350, up to 1.92 GHz, 2 Mo de mÃ©moire cache - MÃ©moire 2 Go - ', 'ordinateur', 'asus.jpg', '629,000 TND', 'pc2.jpg'),
(47, 'LENOVO IDEAPAD 320-15ISK / I3 6Ãˆ GÃ‰N / 12 GO / ROUGE', 'cran 15.6\" LED Full HD - Processeur Intel Core I3-6006U 6Ã© GÃ©nÃ©ration, 2 GHz, 3 Mo de mÃ©moire cache - MÃ©moire 12 Go - Disque 1 To', 'ordinateur', 'lenovo.jpg', '1 143,000 TND', 'pc3.jpg'),
(49, 'TABLETTE SAMSUNG GALAXY TAB A 2016 SM-T585 / 10.1\" / 4G / NOIR', 'Ecran 10.1\" - RÃ©solution 1920 x 1200 - ARM Cortex-A53 Octo-Core, 1.6 GHz - Android Marshmallow 6.0 - RAM 2 Go - MÃ©moire 16 Go ', 'tablette', 'samsung.jpg', '854,000 TND', 'tab1.jpg'),
(50, 'TABLETTE LENOVO TAB4 TB-X304L / 10\" / 4G / NOIR', 'Ecran 10.1\" IPS HD - Processeur Qualcomm Snapdragon 425 Quad Core, up to 1.4 Ghz - RAM 2 Go - MÃ©moire 16 Go - Batterie 7000 mAh', 'tablette', 'lenovo.jpg', '555,000 TND', 'tb2.jpg'),
(51, 'TABLETTE HUAWEI MEDIAPAD T3 10\" / 4G / GOLD', 'Ecran 9.6\' IPS HD - RÃ©soluion 1280 x 800 - Processeur Qualcomm MSM8917, Quad Core A53, up to 1.4 Ghz - RAM 2 Go - MÃ©moire 16 Go ', 'tablette', 'huawei.jpg', '525,000 TND', 'tab3.jpg'),
(52, 'IMPRIMANTES LASER COULEUR ACULASER C9300TN', 'Imprimante Laser couleur A4 - RÃ©solution 1200 X 1200 dpi - Vitesse 30 ppm - MÃ©moire 256 Mo - Interface USB 2.0/Ethernet - Bac supplÃ©mentaire - ', 'imprimante', 'epson.jpg', '7 279,000 TND', 'imp1.jpg'),
(57, 'IMPRIMANTE CANON PIXMA IP7240 PHOTO', 'Imprimante Jet Dencre Canon Pixma iP7240 Photo - Interface Wifi / USB 2.0 - Vitesse impression A4: 15 ipm', 'imprimante', 'canon.jpg', '249,000 TND', 'imp2.jpg'),
(60, 'ECRAN LENOVO THINKCENTRE TINY-IN-ONE 24\" TACTILE FULL HD AVEC CAMÃ‰RA & HAUT PARLEUR', 'Ecran Lenovo 24\" Full HD - LED tactile avec technologie IPS - RÃ©solution Full HD  1920x1080 - Haut parleur intÃ©grÃ© 2W - 1x DisplayPort', 'ecran', 'lenovo.jpg', '849,000 TND', 'ec1.jpg'),
(61, 'ECRAN SAMSUNG 27\" FULL HD INCURVÃ‰ MULTIMÃ‰DIA', 'cran Samsung 27\" Full HD IncurvÃ© - RÃ©solution 1920 x 1080 pixels - LuminositÃ© 250 cd/mÂ² - Format 16:9 - Contraste 3000:1 - Courbure Ã©cran 1800 mm - Temps de rÃ©ponse 4(GtG)', 'ecran', 'samsung.jpg', '759,000 TND', 'ec2.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
