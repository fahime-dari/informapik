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


-- Création de la table Message (=table contenant le message provenant du formulaire de contact)

CREATE TABLE Message(
   id_m INT AUTO_INCREMENT,
   contenu_m VARCHAR(1800),
   PRIMARY KEY(id_m)
);

-- Création de la table Utilisateurs (=table contenant les champs sur les utilisateurs)

CREATE TABLE utilisateurs(
   id_u INT AUTO_INCREMENT,
   username VARCHAR(255) ,
   password VARCHAR(255) ,
   PRIMARY KEY(id_u)
);

-- Création de la table Navbar (=table contenant les éléments de la barre de navigation)

CREATE TABLE navbar(
   id_nav INT AUTO_INCREMENT,
   logo_nav VARCHAR(90),
   texte_nav VARCHAR(500),
   lien_nav  VARCHAR(150),
   PRIMARY KEY(id_nav)
);
-- Création de la table Services (=table contenant les informations en général sur les entreprises)

CREATE TABLE services(
   id_services INT AUTO_INCREMENT,
   titre_services VARCHAR(50),
   texte_services VARCHAR(1200),
   PRIMARY KEY(id_services)
);

-- Création de la table Services_a (=table contenant les informations sur le service "Audit & Conseil")

CREATE TABLE services_a(
   id_a INT AUTO_INCREMENT,
   titre_a VARCHAR(150),
   texte_a VARCHAR(1200),
   PRIMARY KEY(id_a)
);

-- Création de la table Informapik (=table contenant les informations sur le service "Internet & Téléphonie")

CREATE TABLE services_i(
   id_i INT AUTO_INCREMENT,
   titre_i VARCHAR(150),
   texte_i VARCHAR(1200),
   PRIMARY KEY(id_i)
);

-- Création de la table Informapik (=table contenant les informations sur la rubrique en bas de page "Gestion de parc informatique")

CREATE TABLE services_r(
   id_r INT AUTO_INCREMENT,
   icone_r VARCHAR(150),
   titre_r VARCHAR(150),
   texte_r VARCHAR(1200),
   lien_r  VARCHAR(150),
   PRIMARY KEY(id_r)
);

-- Création de la table Informapik (=table contenant les informations sur la rubrique en bas de page "Logiciels")

CREATE TABLE services_l(
   id_l INT AUTO_INCREMENT,
   titre_l VARCHAR(150),
   icone_l VARCHAR(150),
   sous_titre_l VARCHAR(70),
   texte_l VARCHAR(500),
   lien_l  VARCHAR(150),
   PRIMARY KEY(id_l)
);

-- Création de la table Services_ad (=table contenant les éléments sur le service "Accès à distance")

CREATE TABLE services_ad(
   id_ad INT AUTO_INCREMENT,
   titre_ad VARCHAR(150),
   icone_ad VARCHAR(150),
   sous_titre_ad VARCHAR(70),
   texte_ad VARCHAR(500),
   lien_ad  VARCHAR(150),
   PRIMARY KEY(id_ad)
);


-- Création de la table Informapik (=table contenant les informations sur la rubrique en bas de page "Navigation")

CREATE TABLE footer_n(
   id_n INT AUTO_INCREMENT,
   titre_n VARCHAR(150),
   texte_n VARCHAR(1200),
   PRIMARY KEY(id_n)
);

-- Création de la table Informapik (=table contenant les informations sur la rubrique en bas de page "Contact")

CREATE TABLE footer_c(
   id_c INT AUTO_INCREMENT,
   titre_c VARCHAR(150),
   logo_c  VARCHAR(1200),
   lien_c  VARCHAR(1200),
   texte_c VARCHAR(1200),
   PRIMARY KEY(id_c)
);

-- Création de la table Informapik (=table contenant les informations sur la rubrique en bas de page "Suivez-nous")

CREATE TABLE footer_rs(
   id_rs INT AUTO_INCREMENT,
   titre_rs VARCHAR(150),
   des_rs  VARCHAR(150),
   logo_rs VARCHAR(1200),
   lien_rs VARCHAR(1200),
   PRIMARY KEY(id_rs)
);

-- Création de la table Informapik (=table contenant les informations sur la rubrique en bas de page qui contient le contenu juridique)

CREATE TABLE footer_m(
   id_m INT AUTO_INCREMENT,
   titre_m VARCHAR(150),
   lien_m VARCHAR(1200),
   PRIMARY KEY(id_m)
);

-- Création de la table Images (=table contenant les images du carousel décrivant les partenaires)

CREATE TABLE images(
   id_im INT AUTO_INCREMENT,
   lien_im VARCHAR(150),
   PRIMARY KEY(id_im)
);