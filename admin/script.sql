-- Création de la BDD

CREATE DATABASE informapik;

-- Création de la table Contact (=table du formulaire)

CREATE TABLE contact(
   id_c INT AUTO_INCREMENT,
   nom_c VARCHAR(40) ,
   prenom_c VARCHAR(40) ,
   entreprise_c VARCHAR(30) ,
   mail_c VARCHAR(55) ,
   numero_c VARCHAR(10),
   PRIMARY KEY(id_c)
);

-- Création de la table Produit (=table contenant toutes les infos sur les produits) 

CREATE TABLE produit(
   id_produit INT AUTO_INCREMENT,
   nom_produit VARCHAR(50) ,
   description_produit VARCHAR(1500) ,
   PRIMARY KEY(id_produit)
);


-- Création de la table Prospection (=table contenant combien de services le prospect est intéressé)

CREATE TABLE Prospection(
   id_p INT AUTO_INCREMENT,
   id_c INT,
   PRIMARY KEY(id_prospect)
);

-- Création de la table Informapik (=table contenant toutes les infos sur l'entreprise)

CREATE TABLE informapik(
   id_description INT AUTO_INCREMENT,
   titre_description VARCHAR(50),
   texte_description VARCHAR(1200),
   PRIMARY KEY(id_descrption)
);


-- Création de la table Message 

CREATE TABLE Message(
   id_m INT AUTO_INCREMENT,
   contenu_m VARCHAR(1800),
   PRIMARY KEY(id_m)
);

-- Création de la table Services (=table contenant toutes les services proposés par l'entreprise)

CREATE TABLE services(
   id_services INT AUTO_INCREMENT,
   titre_services VARCHAR(50),
   texte_services VARCHAR(1200),
   PRIMARY KEY(id_services)
);

-- Création de la table Services_a (=table contenant le contenu des services de la page "Audit & Conseil")

CREATE TABLE services_a(
   id_a INT AUTO_INCREMENT,
   titre_a VARCHAR(150),
   texte_a VARCHAR(1200),
   PRIMARY KEY(id_a)
);


-- Création de la table Services_r (=table contenant le contenu de la page de la rubrique "Gestion de parc informatique")


CREATE TABLE services_r(
   id_r INT AUTO_INCREMENT,
   icone_r VARCHAR(150),
   titre_r VARCHAR(150),
   texte_r VARCHAR(1200),
   lien_r  VARCHAR(150),
   PRIMARY KEY(id_r)
);

-- Création de la table Services_l (=table contenant de la page de la rubrique "Gestion de parc informatique")

CREATE TABLE services_l(
   id_l INT AUTO_INCREMENT,
   titre_l VARCHAR(150),
   icone_l VARCHAR(150),
   sous_titre_l VARCHAR(70),
   texte_l VARCHAR(500),
   lien_l  VARCHAR(150),
   PRIMARY KEY(id_l)
);

-- Création de la table Services_ad (=table contenant de la page de la rubrique "Accès à distance")


CREATE TABLE services_ad(
   id_ad INT AUTO_INCREMENT,
   titre_ad VARCHAR(150),
   icone_ad VARCHAR(150),
   sous_titre_ad VARCHAR(70),
   texte_ad VARCHAR(500),
   lien_ad  VARCHAR(150),
   PRIMARY KEY(id_ad)
);

-- Création de la table Services_i (=table contenant le contenu des services de la page "Internet & Téléphonie")

CREATE TABLE services_i(
   id_i INT AUTO_INCREMENT,
   titre_i VARCHAR(150),
   texte_i VARCHAR(1200),
   PRIMARY KEY(id_i)
);


-- Création de la table Footer_n (=table contenant le contenu du bas de page de la rubrique "Navigation")

CREATE TABLE footer_n(
   id_n INT AUTO_INCREMENT,
   titre_n VARCHAR(150),
   texte_n VARCHAR(1200),
   PRIMARY KEY(id_n)
);

-- Création de la table Footer_c (=table contenant le contenu du bas de page de la rubrique "Contact")


CREATE TABLE footer_c(
   id_c INT AUTO_INCREMENT,
   titre_c VARCHAR(150),
   logo_c  VARCHAR(1200),
   lien_c  VARCHAR(1200),
   texte_c VARCHAR(1200),
   PRIMARY KEY(id_c)
);

-- Création de la table Footer_rs (=table contenant le contenu du bas de page de la rubrique "Suivez-nous" (=réseaux sociaux))


CREATE TABLE footer_rs(
   id_rs INT AUTO_INCREMENT,
   titre_rs VARCHAR(150),
   des_rs  VARCHAR(150),
   logo_rs VARCHAR(1200),
   lien_rs VARCHAR(1200),
   PRIMARY KEY(id_rs)
);

-- Création de la table Footer_m (=table contenant le contenu du bas de page contenant les mentions, le "copyright" et la pol. de confidentialité)


CREATE TABLE footer_m(
   id_m INT AUTO_INCREMENT,
   titre_m VARCHAR(150),
   lien_m VARCHAR(1200),
   PRIMARY KEY(id_m)
);

-- Création de la table Navbar (=table contenant les infos de la barre de navigation)

CREATE TABLE navbar(
   id_nav INT AUTO_INCREMENT,
   logo_nav VARCHAR(90),
   texte_nav VARCHAR(500),
   lien_nav  VARCHAR(150),
   PRIMARY KEY(id_nav)
);

-- Création de la table Images (=table contenant le lien des images)

CREATE TABLE images(
   id_im INT AUTO_INCREMENT,
   lien_im VARCHAR(150),
   PRIMARY KEY(id_im)
);


-- Création de la table Utilisateurs (=table contenant toutes les identifiants pour se connecter à l'espace administrateur)


CREATE TABLE utilisateurs(
   id INT AUTO_INCREMENT,
   username VARCHAR(255),
   password VARCHAR(255),
   PRIMARY KEY(id)
);
