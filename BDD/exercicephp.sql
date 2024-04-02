-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 26 mars 2024 à 11:09
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `exercicephp`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE IF NOT EXISTS `actualites` (
  `id_actualite` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''actualité',
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Titre de l''actualité',
  `corp_texte` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Texte de l''actualité',
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Image de l''actualité',
  `date_publication` date NOT NULL COMMENT 'Date de la publication',
  `date_revision` date NOT NULL COMMENT 'Date de la dernière modification',
  `id_auteur` int NOT NULL COMMENT 'Identifiant de l''auteur',
  `tags` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tags de l''actualité',
  `sources` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Sources de l''actualité',
  PRIMARY KEY (`id_actualite`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id_actualite`, `titre`, `corp_texte`, `image`, `date_publication`, `date_revision`, `id_auteur`, `tags`, `sources`) VALUES
(1, 'Le Liban, terre de contrastes et de merveilles.', 'Le Liban, terre de contrastes et de merveilles, attire les voyageurs intrépides depuis des siècles. Niché entre la Méditerranée et les montagnes majestueuses, ce petit pays du Moyen-Orient offre une expérience de voyage inoubliable, mêlant histoire millénaire, culture vibrante et paysages à couper le souffle.\r\n\r\nDès que l\'on pose le pied sur le sol libanais, on est enveloppé par une atmosphère envoûtante, empreinte d\'une richesse culturelle qui transcende les époques. Les vestiges des civilisations anciennes se dressent fièrement à travers tout le pays, rappelant l\'importance stratégique de cette région depuis des millénaires. À Baalbek, les impressionnants temples romains, dont le Temple de Bacchus et le Temple de Jupiter, témoignent de la grandeur passée de l\'Empire romain. Dans la vallée de Qadisha, inscrite au patrimoine mondial de l\'UNESCO, les ermitages nichés dans les falaises offrent un témoignage saisissant de la foi et de la résilience des premiers chrétiens.\r\n\r\nMais le Liban ne se résume pas à son héritage antique. Sa capitale, Beyrouth, est une ville bouillonnante d\'énergie, où l\'Orient et l\'Occident se rencontrent dans un kaléidoscope de cultures, de langues et de saveurs. Flâner dans les rues animées du quartier de Hamra, déguster des mezze traditionnels dans les restaurants de Gemmayzeh, ou se promener le long de la Corniche au coucher du soleil, sont autant d\'expériences qui capturent l\'essence vibrante de la ville.\r\n\r\nOutre sa vie urbaine effervescente, le Liban offre également des trésors naturels d\'une beauté incomparable. Les côtes escarpées de la Méditerranée invitent à la détente sur des plages de sable doré, tandis que les montagnes du Mont-Liban offrent des paysages spectaculaires, propices à la randonnée et à l\'exploration. Au cœur des montagnes se cachent des villages pittoresques, où le temps semble s\'être arrêté, et où l\'accueil chaleureux des habitants vous fait sentir comme chez vous.\r\n\r\nMais au-delà de ses sites touristiques époustouflants, c\'est l\'âme même du Liban qui séduit les voyageurs. C\'est cette capacité à surmonter les épreuves, à célébrer la vie et à préserver son identité unique malgré les tumultes de l\'histoire qui rendent ce pays si fascinant. En voyageant au Liban, on découvre bien plus que des sites touristiques, on s\'imprègne d\'une culture riche et complexe, et on laisse une empreinte indélébile dans notre cœur.\r\n\r\nLe Liban est bien plus qu\'une destination de voyage, c\'est un voyage initiatique, une invitation à découvrir la beauté et la diversité du monde, sous un nouveau jour.', 'img/liban.jpg', '2024-02-28', '2024-02-28', 1, 'voyage, culture, pays', 'Louan Dahan'),
(2, 'Gotaga et l\'essor de l\'esport : Redéfinir les frontières du jeu compétitif', 'Dans le monde de l\'esport, où les compétitions de jeux vidéo attirent des millions de spectateurs et offrent des prix mirobolants, une figure s\'est imposée comme un pilier de cette industrie en pleine expansion : Gotaga. Ce Français, de son vrai nom Corentin Houssein, a non seulement élevé son nom au rang de légende dans le jeu Call of Duty, mais a également contribué à la popularisation et à la professionnalisation de l\'esport à l\'échelle mondiale.\r\n\r\nL\'ascension de Gotaga : un pionnier de l\'esport français\r\nGotaga a fait ses premiers pas dans l\'esport à un moment où cette industrie était encore en phase de développement. Il a su captiver l\'attention des fans grâce à ses compétences exceptionnelles dans Call of Duty, devenant rapidement l\'une des figures emblématiques de la scène française. Son charisme et son talent lui ont permis de conquérir un large public, faisant de lui l\'un des joueurs les plus suivis sur les plateformes de streaming telles que Twitch et YouTube.\r\n\r\nAu fil des années, Gotaga a étendu son influence au-delà des frontières nationales, devenant un ambassadeur de l\'esport français à l\'échelle internationale. Son parcours illustre parfaitement la montée en puissance de l\'esport en tant que phénomène mondial, où les joueurs peuvent non seulement acquérir une renommée considérable, mais également bâtir des carrières lucratives grâce à leur talent et à leur dévouement.\r\n\r\nL\'esport : une industrie en pleine expansion\r\nL\'histoire de Gotaga reflète également l\'évolution de l\'esport en tant qu\'industrie. Ce qui était autrefois considéré comme un simple divertissement de niche est désormais devenu un secteur économique florissant, attirant l\'attention des investisseurs, des sponsors et même des grandes marques. Les tournois d\'esport remplissent des stades entiers, tandis que les audiences en ligne rivalisent avec celles des événements sportifs traditionnels.\r\n\r\nL\'essor de l\'esport a également conduit à la création de ligues professionnelles, de structures d\'entraînement et de centres de formation spécialisés, où les joueurs peuvent perfectionner leurs compétences et se préparer aux rigueurs de la compétition de haut niveau. Des joueurs comme Gotaga ont contribué à élever le niveau de professionnalisme au sein de l\'industrie, montrant que l\'esport n\'est plus seulement un passe-temps, mais une véritable carrière.\r\n\r\nLes défis et les opportunités à venir\r\nMalgré son succès, l\'esport reste confronté à divers défis, notamment en ce qui concerne la réglementation, la reconnaissance officielle et la gestion des droits des joueurs. Cependant, ces défis sont largement compensés par les nombreuses opportunités offertes par cette industrie en plein essor. De nouveaux jeux continuent d\'émerger, attirant des millions de joueurs et offrant un terreau fertile pour l\'innovation et la croissance.\r\n\r\nEn fin de compte, l\'histoire de Gotaga est celle d\'un passionné qui a su transformer sa passion en une carrière florissante. Son parcours illustre parfaitement le potentiel de l\'esport à réunir les joueurs du monde entier, à repousser les limites de la compétition et à redéfinir ce que signifie être un athlète dans le 21e siècle. Et tandis que l\'esport continue de conquérir de nouveaux territoires, des figures comme Gotaga resteront à jamais gravées dans l\'histoire de cette industrie en pleine expansion.', 'img/goataga.png', '2024-02-28', '2024-02-28', 2, 'E-sport, Compétition, Jeux-vidéo', 'Tic et Tac');

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

DROP TABLE IF EXISTS `auteurs`;
CREATE TABLE IF NOT EXISTS `auteurs` (
  `id_auteur` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_auteur`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`id_auteur`, `nom`, `prenom`) VALUES
(1, 'Jeanne', 'Triomphe'),
(2, 'du Bourg-Palette', 'Sacha'),
(3, 'Olivé', 'Tom');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id_contact` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_contact`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id_contact`, `nom`, `prenom`, `mail`) VALUES
(2, 'Maillard', 'Lucas', 'lucas.maillard1.pro@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `url` text COLLATE utf8mb4_general_ci NOT NULL,
  `categorie_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
