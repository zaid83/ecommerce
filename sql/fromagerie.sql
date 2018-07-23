-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 22 Juillet 2018 à 20:51
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fromagerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL,
  `nom_categories` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id_categories`, `nom_categories`) VALUES
(1, 'Lait de Vache'),
(2, 'Lait de Brebis'),
(3, 'Lait de Chèvre');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom_client` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mail_client` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel_client` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mdp_client` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `adresse_client` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cp_client` int(5) NOT NULL,
  `ville_client` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `mail_client`, `tel_client`, `mdp_client`, `adresse_client`, `cp_client`, `ville_client`) VALUES
(1, 'Alexis', 'Specimen', 'belgiqueenforce@frite.fr', '0874784578', '86077f1397b6cd8ae45edf3e6b87b31c5930b38aeac798f7586eee76870dbd6d6544e58970c28fd20e88e6b799e69fc373a7b8b54bfe14ba064726f6d3166e5c', 'rue de Caroline Fourest', 90784, 'Choux de Bruxelles'),
(23, 'Mythos', 'Felix', 'admin@mythomane.fr', '0648487841', 'c12d0f82023778a5fbc839ff89490d81af663f5344631816505ad70992abd457f8785cf900935d40ebded81862a4d67cca0e54d80d19964207a47aca8531c429', 'rue de la forteresse', 6500, 'Menton'),
(24, 'Etchebest', 'Gregory', 'commandant@cuistot.fr', '0666666666', 'e458e5817a5c7c5a5f1f95973bb67171a0bd5d98153eadb1a4e3d3db51835b10f5c828529a66a1ac7686f1d7c3150b52810a0a048af7fac773229cea66954aed', 'Rue de la Licorne', 13000, 'Licorne city');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id_commande` int(11) NOT NULL,
  `date_commande` date NOT NULL,
  `prix_total` float NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_facture` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commande_articles`
--

CREATE TABLE `commande_articles` (
  `id_fromage` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL,
  `qtite_articles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id_facture` int(11) NOT NULL,
  `prix_ht` float NOT NULL,
  `adresse_facturation` text COLLATE utf8_unicode_ci NOT NULL,
  `id_commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fromage`
--

CREATE TABLE `fromage` (
  `id_fromage` int(11) NOT NULL,
  `nom_fromage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img_fromage` text COLLATE utf8_unicode_ci NOT NULL,
  `descrip_fromage` text COLLATE utf8_unicode_ci NOT NULL,
  `prix_fromage` float NOT NULL,
  `id_pays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fromage`
--

INSERT INTO `fromage` (`id_fromage`, `nom_fromage`, `img_fromage`, `descrip_fromage`, `prix_fromage`, `id_pays`) VALUES
(1, 'Serra da Estrela', 'https://i1.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/portugal-cheese-serra-da-estrela.png?resize=245%2C186&ssl=1', 'L’histoire du fromage Serra da Estrela remonte au 16ème siècle et est étroitement liée à l’histoire des villes de montagne, des bergers et de la vie de montagne. Avec une pâte à la fois sèche et huileuse, une couleur jaune et une saveur intense, le fromage Serra da Estrela est fabriqué exclusivement avec du lait de brebis Bordaleira. La production de ce fromage appétisant doit respecter des règles rigoureuses. Principalement réalisé entre novembre et mars, il doit maturer pendant au moins trente jours. La texture de la pâte varie en fonction de l’âge, d’un semi-liquide très doux quand il est jeune, jusqu’à un solide plus tranchant lorsqu’il est plus vieux. Vous devriez certainement l’essayer : le Serra da Estrela est délicieux avec un morceau de pain.', 15, 1),
(2, 'Manchego', 'https://i1.wp.com/europeisnotdead.com/wp-content/uploads/2017/03/spain-cheese-manchego.png?resize=245%2C186&ssl=1', 'La région de La Mancha en Espagne n’est pas seulement celle du héros littéraire Don Quichotte, mais aussi celle d’où est originaire un légendaire fromage espagnol. Le Manchego est en Espagne ce qu’est le cheddar en Angleterre, ou le camembert en France – la coqueluche à la fois des connaisseurs et des novices. Fabriqué à partir du lait de mouton Manchego, qui paissent sur les plaines du centre-sud de l’Espagne, sa texture et sa saveur varient en fonction de sa durée de maturation : du demi-curado salé et lisse à un curado cristallisé et épicé. Il est souvent servi seul, en triangles coupés fins, ce qui permet de faire ressortir sa saveur pure. Les amoureux de l’histoire apprécieront : on pense qu’une version semblable de ce fromage était produite dès l’âge de bronze à partir de la même race de moutons. Des milliers d’années plus tard, le Manchego est devenu le fromage espagnol le plus célèbre dans le pays comme à l’étranger.', 17, 2);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id_pays` int(11) NOT NULL,
  `nom_pays` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`id_pays`, `nom_pays`) VALUES
(1, 'Portugal'),
(2, 'France'),
(3, 'Espagne'),
(4, 'Islande'),
(5, 'Irlande'),
(6, 'Royaume Uni'),
(7, 'Norvege'),
(8, 'Suede'),
(9, 'Finlande'),
(10, 'Danemark'),
(11, 'Pays Bas'),
(12, 'Belgique'),
(13, 'Allemagne'),
(14, 'Autriche'),
(15, 'Suisse'),
(16, 'Italie'),
(17, 'Malte'),
(18, 'République Cheque'),
(19, 'Slovaquie '),
(20, 'Pologne'),
(21, 'Lithuanie');

-- --------------------------------------------------------

--
-- Structure de la table `pays_fromage`
--

CREATE TABLE `pays_fromage` (
  `id_categories` int(11) NOT NULL,
  `id_fromage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id_commande`),
  ADD UNIQUE KEY `commandes_facture0_AK` (`id_facture`),
  ADD KEY `commandes_client0_FK` (`id_client`);

--
-- Index pour la table `commande_articles`
--
ALTER TABLE `commande_articles`
  ADD PRIMARY KEY (`id_fromage`,`id_commande`),
  ADD KEY `Contient_commandes1_FK` (`id_commande`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id_facture`),
  ADD UNIQUE KEY `facture_commandes0_AK` (`id_commande`);

--
-- Index pour la table `fromage`
--
ALTER TABLE `fromage`
  ADD PRIMARY KEY (`id_fromage`),
  ADD KEY `fromage_pays0_FK` (`id_pays`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id_pays`);

--
-- Index pour la table `pays_fromage`
--
ALTER TABLE `pays_fromage`
  ADD PRIMARY KEY (`id_categories`,`id_fromage`),
  ADD KEY `provenir_fromage1_FK` (`id_fromage`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id_facture` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `fromage`
--
ALTER TABLE `fromage`
  MODIFY `id_fromage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id_pays` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_client0_FK` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `commandes_facture1_FK` FOREIGN KEY (`id_facture`) REFERENCES `facture` (`id_facture`);

--
-- Contraintes pour la table `commande_articles`
--
ALTER TABLE `commande_articles`
  ADD CONSTRAINT `Contient_commandes1_FK` FOREIGN KEY (`id_commande`) REFERENCES `commandes` (`id_commande`),
  ADD CONSTRAINT `Contient_fromage0_FK` FOREIGN KEY (`id_fromage`) REFERENCES `fromage` (`id_fromage`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_commandes0_FK` FOREIGN KEY (`id_commande`) REFERENCES `commandes` (`id_commande`);

--
-- Contraintes pour la table `fromage`
--
ALTER TABLE `fromage`
  ADD CONSTRAINT `fromage_pays0_FK` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id_pays`);

--
-- Contraintes pour la table `pays_fromage`
--
ALTER TABLE `pays_fromage`
  ADD CONSTRAINT `provenir_categories0_FK` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`),
  ADD CONSTRAINT `provenir_fromage1_FK` FOREIGN KEY (`id_fromage`) REFERENCES `fromage` (`id_fromage`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
