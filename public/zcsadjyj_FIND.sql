-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 16 jan. 2023 à 21:44
-- Version du serveur : 10.3.37-MariaDB
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `zcsadjyj_FIND`
--

-- --------------------------------------------------------

--
-- Structure de la table `chants_corporations`
--

CREATE TABLE `chants_corporations` (
  `id_corporation` int(11) NOT NULL,
  `nom_chant` varchar(100) NOT NULL,
  `texte_chant` varchar(10000) NOT NULL,
  `auteur` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `chants_corporations`
--

INSERT INTO `chants_corporations` (`id_corporation`, `nom_chant`, `texte_chant`, `auteur`) VALUES
(1, 'Rouie', 'Depuis mon baptême, la révélation<br />\r\nLa Filière que j’aime, qui domine le con<br />\r\nLe con de ta mère par devant derrière<br />\r\nPar l’interfilière, toujours il prend cher<br />\r\n<br />\r\nHabitant du côté d’la Seine<br />\r\nJe n’ai jamais touché ton hymen<br />\r\nJe remplace par un verre de bière<br />\r\nJe suis fier d’être interfilière<br />\r\nEt je suis fier (ter) d’être interfilière<br />\r\nEt je suis fier (ter) de r’tourner ta mère<br />\r\n<br />\r\nEté comme hiver, ta mère ou ton père<br />\r\nCraignant l’adultère, c’est nous qu’elle préfère<br />\r\nNon l’interfilière ne se laisse pas faire<br />\r\nC’est une vraie guerrière toujours volontaire<br />\r\n', '?');

-- --------------------------------------------------------

--
-- Structure de la table `codes`
--

CREATE TABLE `codes` (
  `id_corporation` int(11) NOT NULL,
  `annee` int(4) NOT NULL,
  `nom_fichier` varchar(100) NOT NULL,
  `chemin_fichier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `codes`
--

INSERT INTO `codes` (`id_corporation`, `annee`, `nom_fichier`, `chemin_fichier`) VALUES
(30, 2011, 'Syllabus de Calotte', 'Syllabus-Calotte-Enghiennoise-LLN-2011.pdf'),
(31, 2010, 'Syllabus de Calotte', 'Syllabus-Calotte-Psycho-LLN-2010.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `corporations`
--

CREATE TABLE `corporations` (
  `id_corporation` int(11) NOT NULL,
  `pays` varchar(20) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `type_corporation` varchar(50) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `abreviation` varchar(20) DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `resume_corporation` varchar(10000) NOT NULL,
  `photo_profil_corpo` varchar(1000) NOT NULL,
  `avance` varchar(7) NOT NULL DEFAULT 'avanceN'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `corporations`
--

INSERT INTO `corporations` (`id_corporation`, `pays`, `ville`, `type_corporation`, `nom`, `abreviation`, `date_creation`, `resume_corporation`, `photo_profil_corpo`, `avance`) VALUES
(1, 'France', 'Paris', 'filiere_falucharde', 'Interfilière', 'IF', '2007-01-05', 'L’interfilière a pour vocation d’officier l’impétrance et le baptême de toutes les filières non représentées par une croix propre à Paris. Longtemps présentée comme la filière poubelle de la faluche Parisienne, aujourd’hui elle est plus empreinte à une Filière à part entière puisque on y retrouve une uniformité et une camaraderie commune à n’importe quelle filière falucharde.', 'IF.png', 'avanceO'),
(2, 'France', 'Paris', 'filiere_falucharde', 'Ingénieur Puceau Parisien', 'IPP', NULL, '', 'IPP.png', 'avanceN'),
(4, 'France', 'Paris', 'filiere_falucharde', 'Paramédical', 'Paramed', NULL, '', 'ROSE.png', 'avanceN'),
(12, 'France', 'Paris', 'filiere_falucharde', 'Jaune', 'Jaune', '1998-08-02', 'test', 'JAUNE.png', 'avanceN'),
(14, 'France', 'Paris', 'association_falucharde', 'Association Lutecienne Falucharde', 'ALF', '2000-02-02', 'Asso Paris', 'ALF.png', 'avanceN'),
(17, 'France', 'Paris', 'association_falucharde', 'Dimanche Soir Paillard', 'DSP', '2000-02-02', 'DSP...', '62d0087b004f9.jpg', 'avanceN'),
(18, 'Belgique', 'Namur', 'regionale_calotte', 'Régionale-Tournai-Mouscron', 'RTM', '1982-01-01', 'Plus vieille..', '62d04a73a2f9a.jpg', 'avanceN'),
(19, 'Belgique', 'Namur', 'regionale_calotte', 'Chimacienne', '/', '1982-02-02', 'Escaverge...', '62d04fc265bd6.jpg', 'avanceN'),
(20, 'France', 'Paris', 'corporation', 'Assas', '/', '1998-08-02', '...', '62d05482a70c0.jpg', 'avanceN'),
(21, 'Belgique', 'Louvain-la-Neuve', 'cercle_calotte', 'Cercle Philo', 'FLTR', '1998-08-02', 'Philo..;', '62d055610969b.jpg', 'avanceN'),
(22, 'Belgique', 'Louvain-la-Neuve', 'regionale_calotte', 'Binchoise', '/', '1998-08-02', 'berk', '62d055bccab4a.jpg', 'avanceN'),
(23, 'France', 'Namur', 'cercle_penne', 'Cercle Espena Math', 'CEM', '1998-08-02', 'youp', '62d055e16675c.jpg', 'avanceN'),
(24, 'Belgique', 'Liège', 'regionale_penne', 'Visetoise', '/', '1998-08-02', 'oie', '62d056152c215.jpg', 'avanceN'),
(25, 'Belgique', 'Namur', 'cercle', 'FNDP Pharmacie', 'Pharma', '1998-08-02', 'vrai cercle', '62d0564d3b9ab.jpg', 'avanceN'),
(26, 'Belgique', 'Liège', 'regionale', 'Liegeoise', 'LIG', '1998-08-02', 'ouep', '62d0567fc28fe.jpg', 'avanceN'),
(27, 'Belgique', 'National Belgique', 'ordre', 'Ordre Rabelaisien de Belgique', 'ORB', '1998-08-02', 'bbb', '62d056b7f3483.jpg', 'avanceN'),
(29, 'France', 'Lille', 'filiere_falucharde', 'Jaune', '/', '1998-08-02', 'irwinn...', '62d15dfdac712.jpg', 'avanceN'),
(30, 'Belgique', 'Louvain-la-Neuve', 'regionale_calotte', 'Enghiennoise', '/', '1998-08-02', 'il a fait..', '62d15eac06569.jpg', 'avanceN'),
(31, 'Belgique', 'Louvain-la-Neuve', 'cercle_calotte', 'Psychologie', 'Psycho', '1998-08-02', 'c..', '62d6f3c527e1c.jpg', 'avanceN');

-- --------------------------------------------------------

--
-- Structure de la table `couleur_etude`
--

CREATE TABLE `couleur_etude` (
  `matiere` varchar(20) NOT NULL,
  `signification` varchar(50) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `pays` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `couleur_etude`
--

INSERT INTO `couleur_etude` (`matiere`, `signification`, `nom`, `pays`) VALUES
('Satin', 'vert clair', 'Administration Économique et Sociale (AES)', 'France'),
('Satin', 'bleu', 'Architecture, Beaux-arts, Audio-visuel, Arts', 'France'),
('Satin', 'bleu', 'Arts du spectacle', 'France'),
('Velours', 'Violet', 'Chirurgie Dentaire', 'France'),
('Satin', 'marron', 'Classes préparatoires', 'France'),
('Satin', 'suivant l\'UFR de rattachement', 'Communication', 'France'),
('Satin', 'rouge', 'Droit', 'France'),
('Satin', 'blanc', 'DUT & BTS', 'France'),
('Satin', 'bleu & noir', 'Écoles d\'ingénieurs', 'France'),
('Satin', 'vert & rouge', 'Écoles de commerce, gestion, communication, journalisme', 'France'),
('Satin', 'vert foncé', 'Filières sportives', 'France'),
('Satin', 'aux couleurs de la discipline étudiée', 'IUP', 'France'),
('Satin', 'jaune', 'Lettres, Langues, Sciences humaines et sciences sociales', 'France'),
('Velours', 'Rouge', 'Médecine', 'France'),
('Satin', 'aux couleurs de la filière étudiée', 'MEEF', 'France'),
('Satin', 'argenté', 'Musique, Musicologie', 'France'),
('Velours', 'Bleu', 'Ostéopathie', 'France'),
('Velours', 'Rose', 'Paramédical', 'France'),
('Velours', 'Vert', 'Pharmacie', 'Belgique'),
('Velours', 'Vert', 'Pharmacie, Préparateur en pharmacie', 'France'),
('Velours', 'Marron', 'Prépas santé', 'France'),
('Velours', 'Fuschia', 'Sage-femme', 'France'),
('Satin', 'violet', 'Sciences économiques, Gestion, IAE', 'France'),
('Satin', 'bleu & rouge', 'Sciences politiques', 'France'),
('Satin', 'aux couleurs de la filière étudiée', 'Second degré', 'France'),
('Velours', 'bordeaux', 'Vétérinaire', 'France'),
('Satin', 'saumon', 'Œnologie', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `couvre_chef`
--

CREATE TABLE `couvre_chef` (
  `id_corporation` int(11) NOT NULL,
  `faluche` varchar(3) NOT NULL,
  `calotte` varchar(3) NOT NULL,
  `penne` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `couvre_chef`
--

INSERT INTO `couvre_chef` (`id_corporation`, `faluche`, `calotte`, `penne`) VALUES
(1, 'oui', 'non', 'non'),
(18, 'non', 'oui', 'non'),
(21, 'non', 'oui', 'non'),
(23, 'non', 'non', 'oui'),
(27, 'oui', 'oui', 'oui'),
(30, 'non', 'oui', 'non');

-- --------------------------------------------------------

--
-- Structure de la table `historique_comite`
--

CREATE TABLE `historique_comite` (
  `id_corporation` int(11) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `surnom` varchar(20) NOT NULL,
  `fonction` varchar(50) NOT NULL,
  `date_debut` int(11) NOT NULL,
  `date_fin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `historique_comite`
--

INSERT INTO `historique_comite` (`id_corporation`, `prenom`, `nom`, `surnom`, `fonction`, `date_debut`, `date_fin`) VALUES
(1, 'Edwin', 'Boin', 'Kharadot', 'GC', 2020, 2022),
(1, 'Gabriel', 'Atta', 'SenseiCancer', 'GM', 2020, 2022),
(1, 'Marine', 'Marquetty', '?', 'GC', 2020, 2022),
(1, 'Raphael', 'Sammartino', 'jsaisplus', 'GC', 2019, 2020),
(2, 'fzr', 'fezr', 'afz', 'GC', 2018, 2020),
(1, 'test', 'test', 'test', 'GM', 2019, 2020),
(1, 'test', 'test', 'test', 'GC', 2019, 2020),
(1, 'reussi?', 'reussi?', 'reussi?', 'GM', 2022, 2023),
(1, 'reussi?', 'reussi?', 'reussi?', 'GC', 2022, 2023),
(1, 'testic', 'testic', 'testic', 'GM', 2018, 2019);

-- --------------------------------------------------------

--
-- Structure de la table `infos_corporations`
--

CREATE TABLE `infos_corporations` (
  `id_corporation` int(1) NOT NULL,
  `type_info` varchar(20) NOT NULL,
  `titre_information` varchar(200) NOT NULL,
  `text_info` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `infos_corporations`
--

INSERT INTO `infos_corporations` (`id_corporation`, `type_info`, `titre_information`, `text_info`) VALUES
(1, 'particularite', '1', 'okaay'),
(1, 'particularite', '2', 'testdeux'),
(1, 'anecdote', 'Créatrice de Croix', 'L’Interfilière a créé les croix Dentaire, Sage-Femme, Jaunes, Créteil avec l’aide des autres croix Parisiennes et a re-réintronisé la croix Sciences.');

-- --------------------------------------------------------

--
-- Structure de la table `photos_corporations`
--

CREATE TABLE `photos_corporations` (
  `id_corporation` int(11) NOT NULL,
  `nom_photo` varchar(100) NOT NULL,
  `type_photo` varchar(30) NOT NULL,
  `date_photo` int(11) NOT NULL,
  `chemin_fichier` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `photos_corporations`
--

INSERT INTO `photos_corporations` (`id_corporation`, `nom_photo`, `type_photo`, `date_photo`, `chemin_fichier`) VALUES
(1, 'Croix GC', 'decorum', 2020, '62c60cb68395a.jpg'),
(1, 'DT IF', 'pins', 2017, '62c60d271b523.jpg'),
(1, 'IF', 'pins', 2018, '62c60d465dc04.jpg'),
(10, 'rgs', 'pins', 2017, '62c884cb41eeb.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `pins`
--

CREATE TABLE `pins` (
  `nom` varchar(80) NOT NULL,
  `signification` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `pays` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `pins`
--

INSERT INTO `pins` (`nom`, `signification`, `type`, `pays`) VALUES
('@', 'Arts numériques', 'discipline', 'France'),
('Abeille', 'Travail et minutie associative', 'asso', 'France'),
('AES', 'Administration Économique et Sociale', 'discipline', 'France'),
('Ânkh', 'Sage-femme', 'discipline', 'France'),
('Anneaux olympiques', 'Excellence sportive universitaire', 'decerne_croix', 'France'),
('Bacchus', 'Dignité dans l’ivresse (retournable et retirable)', 'decerne_croix', 'France'),
('Bacchus troué', 'Personne abstème', 'symbole', 'France'),
('Beta', 'Bac ES', 'bac', 'France'),
('Bouteille de Bordeaux', 'Cuite certifiée (possibilité de coefficient multiplicateur si récidive)', 'decerne_croix', 'France'),
('Bouteille de Champagne', 'Coma éthylique certifié', 'decerne_croix', 'France'),
('BTS', 'BTS', 'discipline', 'France'),
('Caducée de Mercure', 'Écoles de commerce, gestion, Communication, journalisme', 'discipline', 'France'),
('Caducée de Mercure2', 'Kiné', 'discipline', 'France'),
('Caducée de Mercure3', 'Sciences économiques et gestion', 'discipline', 'France'),
('Caducée de pharmacie', 'Pharmacie', 'discipline', 'France'),
('Caducée infirmier', 'Infirmier', 'discipline', 'France'),
('Caducée médecine', 'Médecine', 'discipline', 'France'),
('Caducée Mercure', 'Communication', 'discipline', 'France'),
('Carotte', 'Acte valereux et digne du grand baisouillard qu\'il est', 'potager', 'France'),
('Casque de Périclès', 'Histoire', 'discipline', 'France'),
('Chameau à l’endroit', 'Célibataire', 'symbole', 'France'),
('Chameau à l’envers', 'Cœur pris dans l’antichambre du mariage', 'symbole', 'France'),
('Chope de bière', 'Amour de la bière', 'symbole', 'France'),
('Chouette', 'Oiseau de nuit', 'decerne_croix', 'France'),
('Chouette bicéphale', 'Classes préparatoires', 'discipline', 'France'),
('Ciseaux', 'Paramédical', 'discipline', 'France'),
('Clap de cinéma', 'Audiovisuel', 'discipline', 'France'),
('Clé de sol', 'Digne chanteur de paillarde', 'decerne_croix', 'France'),
('Cochon à l\'endroit', 'N\'a pas été intégré', 'symbole', 'France'),
('Cochon à l\'envers', 'A été intégré', 'symbole', 'France'),
('Coq', 'Filières sportives', 'discipline', 'France'),
('Coq1', 'Grande gueule sachant l\'ouvrir', 'decerne_croix', 'France'),
('Cor de chasse', 'Grand chasseur devant l\'éternel', 'decerne_croix', 'France'),
('DUT', 'DUT', 'discipline', 'France'),
('Épée', 'Fin baiseur', 'decerne_partenaire', 'France'),
('Épi de blé', 'Radin', 'symbole', 'France'),
('Épi de blé croisé faucille', 'Chanceux aux examens', 'symbole', 'France'),
('Epsilon', 'Bac S', 'bac', 'France'),
('Équerre & Compas', 'Architecture', 'discipline', 'France'),
('Étoile & Foudre', 'Écoles d’ingénieurs', 'discipline', 'France'),
('étoile dorée', 'année d\'étude', 'cursus', 'France'),
('Fer à cheval', 'Chanceux', 'symbole', 'France'),
('Feuille de vigne', 'Perte de la virginité masculine', 'symbole', 'France'),
('Flèche', 'Éjaculateur précoce', 'decerne_partenaire', 'France'),
('Fourchette', 'Amour des plaisirs de la table', 'symbole', 'France'),
('Fourchette sur ruban bleu', 'Cordon bleu', 'decerne_croix', 'France'),
('Glaive & Balance', 'Droit', 'discipline', 'France'),
('Globe', 'Géographie', 'discipline', 'France'),
('Grappe de raisin', 'Œnologie', 'discipline', 'France'),
('Grappe de raisin1', 'Amour du bon vin', 'symbole', 'France'),
('Grenouille', 'Sociologie', 'discipline', 'France'),
('Hache', 'Prise de guerre (Acte exceptionnel sans vandalisme)', 'decerne_croix', 'France'),
('IAE', 'IAE', 'discipline', 'France'),
('Initiales de la filière', 'Sciences social', 'discipline', 'France'),
('IUP', 'IUP', 'discipline', 'France'),
('Lettre \"C\'', 'Capacitaire', 'bac', 'France'),
('Lettre \"i\" après le bac principal', 'Bac international', 'bac', 'France'),
('Lettre ou initiales correspondantes', 'Autres bacs', 'bac', 'France'),
('Lettres DAE', 'DAEU', 'bac', 'France'),
('Lime', 'Acte laborieux et difficile', 'decerne_partenaire', 'France'),
('Livre ouvert & Plume', 'Lettres', 'discipline', 'France'),
('Livre ouvert & Plume2', 'Langues', 'discipline', 'France'),
('Lyre', 'Musique, Musicologie', 'discipline', 'France'),
('Lyre1', 'Amour des arts musicaux', 'symbole', 'France'),
('Mammouth', 'Gardien des traditions', 'decerne_croix', 'France'),
('Masque de comédie', 'Arts du spectacle', 'discipline', 'France'),
('Masque de comédie1', 'Amour des arts de la scène et du cinéma', 'symbole', 'France'),
('MEEF', 'MEEF', 'discipline', 'France'),
('MIASHS', 'MIASHS', 'discipline', 'France'),
('Molaire', 'Chirurgie dentaire', 'discipline', 'France'),
('Mortier & Pilon', 'Préparateurs en pharmacie', 'discipline', 'France'),
('Navet', 'Pour l\'enculage', 'potager', 'France'),
('Pachyderme (Pachy)', 'Personne lourde', 'decerne_croix', 'France'),
('Palette & Pinceau', 'Beaux-arts, Arts plastiques', 'discipline', 'France'),
('Palette vernie', 'Amour des arts plastiques', 'symbole', 'France'),
('Palmes croisées de chêne & de laurier + initiales de la filière', 'Sciences', 'discipline', 'France'),
('Parapluie', 'Sciences politiques', 'discipline', 'France'),
('Pendu', 'Marié(e) ou pacsé(e)', 'symbole', 'France'),
('Pensée', 'Experte', 'decerne_partenaire', 'France'),
('Phi', 'Bac L', 'bac', 'France'),
('Phi2', 'Philosophie', 'discipline', 'France'),
('Plume', 'Amour des arts littéraires', 'symbole', 'France'),
('Poireau', 'Pour une pipe dûment accomplie', 'potager', 'France'),
('Poule', 'Personne très chaude', 'decerne_croix', 'France'),
('Psy', 'Psychologie', 'discipline', 'France'),
('Rose', 'Perte de la virginité féminine', 'symbole', 'France'),
('Singe', 'Quémandeur d’insignes\r\n(Empêche de recevoir tout autre insigne)', 'decerne_croix', 'France'),
('Sou troué', 'Nuit passée au poste pour motif étudiant', 'decerne_croix', 'France'),
('Sphénoïde', 'Ostéopathie', 'discipline', 'France'),
('Sphinx', 'Polyglotte (Langue des signes incluse)', 'symbole', 'France'),
('Squelette a l\'endroit', 'Amour de l\'anatomie', 'symbole', 'France'),
('Tête de cheval', 'Vétérinaire', 'discipline', 'France'),
('Tête de mort sur fémurs croisés', 'PACES', 'discipline', 'France'),
('Tête de sphinx', 'Archéologie', 'discipline', 'France'),
('Une betterave', 'Pour un cunnilingus', 'potager', 'France'),
('Volant', 'Conducteur de fin de soirée', 'decerne_croix', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `revision_code`
--

CREATE TABLE `revision_code` (
  `numero_question` int(11) NOT NULL,
  `solution` varchar(100) NOT NULL,
  `reponse` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `revision_code`
--

INSERT INTO `revision_code` (`numero_question`, `solution`, `reponse`) VALUES
(1, 'MÃ©decine', 'Lettres, Langues, Sciences humaines et sciences sociales'),
(2, 'MEEF', 'Sage-femme'),
(3, 'Second degrÃ©', 'PrÃ©pas santÃ©'),
(4, 'PrÃ©pas santÃ©', 'Å’nologie'),
(5, 'Droit', 'Droit');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `pays` varchar(30) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `photo_ville` varchar(1000) NOT NULL,
  `avance` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`pays`, `ville`, `photo_ville`, `avance`) VALUES
('France', 'Lille', '62c8abf69afbf.jpg', 'avanceN'),
('France', 'Paris', '62c8ac0021e51.jpg', 'avanceM'),
('France', 'Tours', '62c8ac079ff52.jpg', 'avanceN'),
('France', 'Marseille', '62cdb3d5260c4.jpg', 'avanceN'),
('France', 'Créteil', '62d00a0c2d80c.jpg', 'avanceN'),
('Belgique', 'Namur', '62d0472b32997.jpg', 'avanceN'),
('Belgique', 'Charleroi', '62d04742ead20.jpg', 'avanceN'),
('Belgique', 'Liège', '62d04750bb14a.jpg', 'avanceN'),
('Belgique', 'Louvain-la-Neuve', '62d0550815a47.jpg', 'avanceN'),
('France', 'National France', '62d142c915dbc.jpg', 'avanceM'),
('Belgique', 'National Belgique', '62d142d6489b2.jpg', 'avanceN'),
('France', 'test', '62dfb2bf4e499.jpg', 'avanceN');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `codes`
--
ALTER TABLE `codes`
  ADD UNIQUE KEY `chemin_fichier` (`chemin_fichier`);

--
-- Index pour la table `corporations`
--
ALTER TABLE `corporations`
  ADD PRIMARY KEY (`id_corporation`),
  ADD UNIQUE KEY `id_corporation` (`id_corporation`);

--
-- Index pour la table `couleur_etude`
--
ALTER TABLE `couleur_etude`
  ADD UNIQUE KEY `discipline` (`nom`);

--
-- Index pour la table `couvre_chef`
--
ALTER TABLE `couvre_chef`
  ADD UNIQUE KEY `id_corporation` (`id_corporation`);

--
-- Index pour la table `infos_corporations`
--
ALTER TABLE `infos_corporations`
  ADD UNIQUE KEY `titre_information` (`titre_information`);

--
-- Index pour la table `pins`
--
ALTER TABLE `pins`
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Index pour la table `revision_code`
--
ALTER TABLE `revision_code`
  ADD UNIQUE KEY `numero_question` (`numero_question`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD UNIQUE KEY `photo_ville` (`photo_ville`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `corporations`
--
ALTER TABLE `corporations`
  MODIFY `id_corporation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
