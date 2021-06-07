drop database if exists filelec;
create database filelec;
use filelec;

--
-- Base de données :  `filelec`
--

-- --------------------------------------------------------

--
-- Structure de la table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `date` datetime DEFAULT NULL,
    `prenom` varchar(50) NOT NULL,
    `nom` varchar (50) NOT NULL,
    `email` varchar(100) NOT NULL,
    `telephone` int(10) NOT NULL,
    `Ville` varchar(15) DEFAULT NULL,
    `CodePOSTAL` int(5) DEFAULT NULL,
    `adresse` varchar(100) NOT NULL,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `accounts`
--

INSERT INTO `accounts` (`id`, `date`, `prenom`, `nom`, `email`, `telephone`, `Ville`, `CodePOSTAL`, `adresse`, `password`) VALUES
(1, NULL, 'Elliott', 'Thiery', 'e@gmail.com', 707070707, 'Paris', 75011, '8 Avenue de la Republique', 'azerty'),
(2, NULL, 'Nathan', 'Wendling', 'n@gmail.com', 606060606, 'Paris', 75011, '8 Avenue de la Republique', 'azerty'),
(20, '2021-04-19 22:54:39', 'na', 'we', 'na@gmail.com', 123456788, 'pap', 78541, '01 rue du du ', 'f15779c65bf7141196d01ae83f19ac83'),
(21, '2021-04-19 22:56:50', 'aze', 'aze', 'aze@gmail.com', 123456777, 'plasi', 78541, '12 zaer', 'ab4f63f9ac65152575886860dde480a1'),
(22, '2021-04-19 22:58:07', 'nathan', 'wendling', 'nathan@g.com', 123456666, 'pl', 54741, '12 triyuuyt', 'ab4f63f9ac65152575886860dde480a1'),
(23, '2021-04-19 23:03:49', 'q', 'q', 'q@gmail.com', 123455555, 'q', 54213, 'q', 'ab4f63f9ac65152575886860dde480a1'),
(24, '2021-04-20 13:39:23', 'c', 'c', 'c@gmail.com', 123456789, 'c', 52141, 'c', '4a8a08f09d37b73795649038408b5f33'),
(25, '2021-04-20 13:40:17', 'd', 'd', 'd@gmail.com', 223456789, 'd', 58741, 'd', '8277e0910d750195b448797616e091ad'),
(26, '2021-04-20 14:40:19', 'Thomas', 'Bigou', 'thomas@gmail.com', 453210451, 'Paris', 75011, '11 rue de la maison', 'ab4f63f9ac65152575886860dde480a1');

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
    `IdAdmins` int(11) NOT NULL,
    `AdminUser` varchar(60) DEFAULT NULL,
    `AdminPass` varchar(60) DEFAULT NULL,
    PRIMARY KEY (`IdAdmins`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`IdAdmins`, `AdminUser`, `AdminPass`) VALUES
(1, 'Elliott', 'azerty'),
(2, 'Nathan', 'azerty');

-- --------------------------------------------------------

--
-- Structure de la table `bonlivraison`
--

DROP TABLE IF EXISTS `bonlivraison`;
CREATE TABLE IF NOT EXISTS `bonlivraison` (
    `IdBonL` int(11) NOT NULL AUTO_INCREMENT,
    `IdProduit` int(11) NOT NULL,
    `idaccount` int(255) NOT NULL,
    `DateLivraison` date DEFAULT NULL,
    `Adresse` varchar(75) DEFAULT NULL,
    PRIMARY KEY (`IdBonL`),
    KEY `IdProduit` (`IdProduit`),
    KEY `idaccount` (`idaccount`)
    ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bonlivraison`
--

INSERT INTO `bonlivraison` (`IdBonL`, `IdProduit`, `idaccount`, `DateLivraison`, `Adresse`) VALUES
(1, 5, 18, '2020-05-12', '8 Avenue de la Republique'),
(2, 2, 19, '2020-05-15', '8 Rue du dromadaire'),
(3, 5, 17, '2020-12-01', '8 Avenue de la Republique'),
(4, 0, 0, '2021-01-29', '8 Avenue de la Republique');

-- --------------------------------------------------------

--
-- Structure de la table `categorieprod`
--

DROP TABLE IF EXISTS `categorieprod`;
CREATE TABLE IF NOT EXISTS `categorieprod` (
    `IdCatProd` int(11) NOT NULL,
    `TypeProd` varchar(90) DEFAULT NULL,
    `MarqueProd` varchar(85) DEFAULT NULL,
    `IdProduit` int(11) NOT NULL,
    PRIMARY KEY (`IdCatProd`),
    KEY `IdProduit` (`IdProduit`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `entrepot`
--

DROP TABLE IF EXISTS `entrepot`;
CREATE TABLE IF NOT EXISTS `entrepot` (
    `IdEntrepot` int(11) NOT NULL,
    `StockProduit` int(6) DEFAULT NULL,
    PRIMARY KEY (`IdEntrepot`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `moyenpaiement`
--

DROP TABLE IF EXISTS `moyenpaiement`;
CREATE TABLE IF NOT EXISTS `moyenpaiement` (
    `IdPaiement` int(11) NOT NULL,
    `TypePaiement` varchar(20) DEFAULT NULL,
    `DatePaiement` date DEFAULT NULL,
    `IdCommande` int(11) NOT NULL,
    PRIMARY KEY (`IdPaiement`),
    KEY `IdCommande` (`IdCommande`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
    `IdPanier` int(11) NOT NULL,
    `NbArticle` int(2) DEFAULT NULL,
    `PrixTotal` int(4) DEFAULT NULL,
    `id` int(11) NOT NULL,
    `IdCommande` int(11) NOT NULL,
    PRIMARY KEY (`IdPanier`),
    KEY `id` (`id`),
    KEY `IdCommande` (`IdCommande`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `photoprod`
--

DROP TABLE IF EXISTS `photoprod`;
CREATE TABLE IF NOT EXISTS `photoprod` (
    `IdPhoto` int(11) NOT NULL,
    `CheminPhoto` varchar(120) DEFAULT NULL,
    `IdProduit` int(11) NOT NULL,
    PRIMARY KEY (`IdPhoto`),
    KEY `IdProduit` (`IdProduit`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `description` varchar(200) NOT NULL,
    `libelle` varchar(200) NOT NULL,
    `price` decimal(7,2) NOT NULL,
    `img` text NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `description`, `libelle`, `price`, `img`) VALUES
(1, 'GPS Garming Europeen', 'GPS Garming', 240, './assets/img/gps1.png'),
(2, 'Prise 12v bluetooth', '12v Bluetooth', 38, './assets/img/son_12v.png'),
(3, 'argent, 14Pouces25', 'ARGO Enjoliveurs',18 , './assets/img/enjoliveurs.png'),
(4, '130mm, 5.25Pouce, Puissance: 250W', 'PIONEER TS-G130C', 47, './assets/img/enceinte.png'),
(5, 'XL, DIN EN 20471:2013, 1, jaune, Polyester', 'SafetyJacket Pro', 47, './assets/img/gilet.png'),
(6, 'avant et arriere, avec capteur, Nbre de senseurs/palpeurs: 8', 'VALEO Radar de recul ', 142, './assets/img/radar_recul.png'),
(7, 'Autoradio de qualite premium', 'Autoradio Green', 154, './assets/img/autoradio.png');



--
-- Déchargement des données de la table `products`
--


--
-- Déclencheurs `products`
--


