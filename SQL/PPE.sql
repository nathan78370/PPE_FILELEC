drop database if exists Filelec;
create database Filelec;
use Filelec;

create table client
(
idC int (5)  auto_increment,
PrenomC varchar(50),
NomC varchar (50),
NomSoc varchar(50),
MailC varchar(50),
mdpC varchar(50), 
AdrC varchar (50) ,
Ville varchar (50) ,
CP varchar (5) ,
Pays varchar (25) ,
TypeC enum ('Particulier', 'Professionnel') ,
QualifClient enum ('Client Grand Courant', 'Client Courant', 'Prospect'),
primary key (idC)
);

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
(1, 'Yassine', 'Test');


create table bonFabrication 
(
idB int(4),
dateBon date ,
primary key (idB)
);

create table type
(
idT int(4) auto_increment,
Libelle enum("Autoradio", "GPS", "Aide à la conduite", "Haut-parleurs", "Kit mains-libre", "Amplificateur") ,
primary key (idT)
);

create table equipement
(
idE int (8) auto_increment,
QteE int (5) ,
NomE varchar (100) ,
Descr varchar (2500) ,
Prix float (7) ,
DateCrea date ,
Image varchar(100),
idB int (4) ,
idT int(4) ,
primary key (idE),
foreign key (idB) references bonFabrication (idB),
foreign key (idT) references type (idT)
);

create table commande
(
numC int(8) auto_increment,
DHC datetime ,
DLS date ,
Etat enum ('en cours de preparation', 'en cours de livraison', 'livrer', 'annuler') ,
PrixSansLivraison float (7),
FraisLivraison float (7),
PrixAvecLivraison float (7),
idC int (5) ,
primary key (numC),
foreign key (idC) references client (idC)
);

create table facture
(
idF int (5) auto_increment,
DHF datetime ,
idC int (5),
primary key (idF),
foreign key (idC) references client (idC)
);

create table ligneCommande /*panier*/
(
idCo int (5) auto_increment,
numC int(5) ,
idE int (8) ,
Image varchar (100),
NomE varchar (100),
Descr varchar (2500),
QteE int (5),
primary key (idCo, idE),
foreign key (numC) references commande (numC),
foreign key (idE) references equipement (idE)
);

/*create table ligneFabrication ;
(
QteF int (5),
idE int (5) ,
idB int (4) ,
primary key (idE, idB),
foreign key (idE) references equipement (idE),
foreign key (idB) references bonFabrication (idB)
);*/

/*create table ligneFacture
(
QteFac int (5),
idF int (5) ,
primary key (idE, idF),
foreign key (idF) references facture (idF)
);*/

insert into client values
	(1, null, null, 'Cabestan','enissa999@gmail.com','azerty','Iris testt','Paris','75017','France','Professionnel', 'Client Courant'),
	(2, "Yassine","test",null,"enissay999@gmail.com","azerty","Iris test", "Paris", "75017", "France", "Particulier", 'Prospect');

insert into bonFabrication values
	(1, "2018-12-22"),
	(2, "2018-12-22"),
	(3, "2018-12-22"),
	(4, "2018-12-22"),
	(5, "2018-12-22"),
	(6, "2018-12-22"),
	(7, "2018-12-22"),
	(8, "2018-12-22"),
	(9, "2018-12-22"),
	(10, "2018-12-22"),
	(11, "2018-12-22"),
	(12, "2018-12-22"),
	(13, "2018-12-22"),
	(14, "2018-12-22"),
	(15, "2018-12-22"),
	(16, "2018-12-22"),
	(17, "2018-12-22"),
	(18, "2018-12-22"),
	(19, "2018-12-22"),
	(20, "2018-12-22"),
	(21, "2018-12-22"),
	(22, "2018-12-22"),
	(23, "2018-12-22"),
	(24, "2018-12-22");

insert into type values
	(1, "Autoradio"),
	(2, "GPS"),
	(3, "Aide à la conduite"),
	(4, "Haut-parleurs"),
	(5, "Kit mains-libre"),
	(6, "Amplificateur");

insert into equipement values

	-- Autoradio
	(1, "200", "TOKAI LAR-15B", "Téléphonie mains-libres via Bluetooth", "19.99", "2018-12-22","Images/achat/TOKAI_LAR-15B.jpg", 1, 1),
	(2, "200", "PIONEER MVH-S110UB", "Contrôle de l’autoradio à partir d’un smartphone", "39.99", "2018-12-22","Images/achat/PIONEER_MVH-S110UB.jpg", 2, 1),
	(3, "200", "SONY WX-920BT", "Téléphonie mains-libres via Bluetooth et commande vocale SIRI", "199.99", "2018-12-22","Images/achat/SONY_WX-920BT.jpg", 3, 1),
	(4, "200", "JVC KW-V420BT", "Téléphonie mains-libre via Bluetooth et commande vocale SIRI", "399.00", "2018-12-22","Images/achat/JVC_KW-V420BT.jpg", 4, 1),

	-- GPS
	(5, "200", "MAPPY ULTI E538", "Limitation de vitesse et mode de visualisation Realview", "79.99", "2018-12-22","Images/achat/MAPPY_ULTI_E538.jpg", 5, 2),
	(6, "200", "GARMIN DRIVE 51 LMT-S SE", "Alerte les zones de danger et carte de l'Europe (15 pays) gratuits à vie", "129.99", "2018-12-22","Images/achat/GARMIN_DRIVE_51_LMT-S_SE.jpg", 6, 2),
	(7, "200", "POIDS LOURD SNOOPER PL6600", "Guidage prenant en compte le gabarit", "599.00", "2018-12-22","Images/achat/POIDS_LOURD_SNOOPER_PL6600.jpg", 7, 2),
	(8, "200", "PIONEER AVIC-F88DAB", "Carte de l'Europe (45 pays) et info trafic, Compatible AppleCarPlay et Android Auto", "1299.00", "2018-12-22","Images/achat/PIONEER_AVIC-F88DAB.jpg", 8, 2),

	-- Aide à la conduite
	(9, "200", "CAMERA DE RECUL BEEPER RWEC100X-RF", "Angle de vue 140° horizontale", "199.99", "2018-12-22","Images/achat/CAMERA_DE_RECUL_BEEPER_RWEC100X-RF.jpg", 9, 3),
	(10, "200", "CAMERA DE RECUL BEEPERRWEC200X-BL", "Angle de vue 140° horizontale", "359.00", "2018-12-22","Images/achat/CAMERA_DE_RECUL_BEEPERRWEC200X-BL.jpg", 10, 3),
	(11, "200", "CAMERA EMBARQUEE NEXTBASE NBDVR-101 HD", "Angle de vue 120°, sortie audio AV et microphone intégré", "89.99", "2018-12-22","Images/achat/CAMERA_EMBARQUEE_NEXTBASE_NBDVR-101_HD.jpg", 11, 3),
	(12, "200", "CAMERA DE RECUL + ECRAN BEEPER RW037-P", "Angle de vue 150° horizontale", "89.99", "2018-12-22","Images/achat/CAMERA_DE_RECUL_+_ECRAN_BEEPER_RW037-P.jpg", 12, 3),

	-- Haut-parleurs
	(13, "200", "PIONEER Ts-13020 I", "Diamètre 13cm et puissance 130 Watt", "22.99", "2018-12-22","Images/achat/PIONEER_Ts-13020_I.jpg", 13, 4),
	(14, "200", "FOCAL 130 AC", "Diamètre 13 cm et puissance 100 Watts", "89.99", "2018-12-22","Images/achat/FOCAL_130_AC.jpg", 14, 4),
	(15, "200", "MTX T6S652", "Diamètre 16.5 cm et puissance 400 Watts", "129.99", "2018-12-22","Images/achat/MTX_T6S652.jpg", 16, 4),
	(16, "200", "FOCAL PS 165 F3", "Diamètre 16.5 cm et puissance 160 Watts", "399.00", "2018-12-22","Images/achat/FOCAL_PS_165_F3.jpg", 16, 4),

	-- Kit mains-libre
	(17, "200", "SUPERTOOTH BUDDY NOIR", "Connexion simultané de 2 téléphones , reconnexion automatique au téléphone", "35.99", "2018-12-22","Images/achat/SUPERTOOTH_BUDDY_NOIR.jpg", 17, 5),
	(18, "200", "PARROT NEO 2 HD", "Connexion simultané de 2 téléphone, applications smartphones dédiées avec fonctions exclusives", "79.99", "2018-12-22","Images/achat/PARROT_NEO_2_HD.jpg", 18, 5),
	(19, "200", "PARROT MKI9200", "Diffusion vocale et musicale sur les haut-parleurs, télécommande sans fil positionnable au volant, connexion simultané de 2 téléphones", "249.00", "2018-12-22","Images/achat/PARROT_MKI9200.jpg", 19, 5),
	(20, "200", "PARROT MKI9000", "diffusion vocale et musicale sur les haut-parleurs, connexion simultanée de 2 téléphones, conversations de qualité grâce au double microphones", "169.99", "2018-12-22","Images/achat/PARROT_MKI9000.jpg", 20, 5),

	-- Amplificateur
	(21, "200", "MTX RFL4001D", "Puissance maximale 12 000 W, dimensions en cm : 20.4 x 62.6 x 5.9", "999.00", "2018-12-22","Images/achat/MTX_RFL4001D.jpg", 21, 6),
	(22, "200", "JBL GX-A3001", "Puissance maximale 415 W, dimensions en cm : 10.8 x 33.6 x 25", "149.99", "2018-12-22","Images/achat/JBL_GX-A3001.jpg", 22, 6),
	(23, "200", "MTX TR275", "Puissance 660 W, dimensions en cm : 14.2 x 13.4 x 5.1", "275", "2018-12-22","Images/achat/MTX_TR275.jpg", 23, 6),
	(24, "200", "CALIBEER CA75.2", "Puissance maximale 150 W, dimensions en cm : 3.8 x 7.8 x 10", "42.99", "2018-12-22","Images/achat/CALIBEER_CA75.2.jpg", 24, 6);