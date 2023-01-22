<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230120000839 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ville (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, blason VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE chants_corporations');
        $this->addSql('DROP TABLE codes');
        $this->addSql('DROP TABLE corporations');
        $this->addSql('DROP TABLE couleur_etude');
        $this->addSql('DROP TABLE couvre_chef');
        $this->addSql('DROP TABLE historique_comite');
        $this->addSql('DROP TABLE infos_corporations');
        $this->addSql('DROP TABLE photos_corporations');
        $this->addSql('DROP TABLE pins');
        $this->addSql('DROP TABLE revision_code');
        $this->addSql('DROP TABLE villes');
        $this->addSql('ALTER TABLE chicken ADD test VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chants_corporations (id_corporation INT NOT NULL, nom_chant VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, texte_chant VARCHAR(10000) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, auteur VARCHAR(30) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE codes (id_corporation INT NOT NULL, annee INT NOT NULL, nom_fichier VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, chemin_fichier VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX chemin_fichier (chemin_fichier)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE corporations (id_corporation INT AUTO_INCREMENT NOT NULL, pays VARCHAR(20) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ville VARCHAR(20) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, type_corporation VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, nom VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, abreviation VARCHAR(20) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, date_creation DATE DEFAULT NULL, resume_corporation VARCHAR(10000) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, photo_profil_corpo VARCHAR(1000) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, avance VARCHAR(7) CHARACTER SET utf8 DEFAULT \'avanceN\' NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX id_corporation (id_corporation), PRIMARY KEY(id_corporation)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE couleur_etude (matiere VARCHAR(20) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, signification VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, nom VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, pays VARCHAR(10) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX discipline (nom)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE couvre_chef (id_corporation INT NOT NULL, faluche VARCHAR(3) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, calotte VARCHAR(3) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, penne VARCHAR(3) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX id_corporation (id_corporation)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE historique_comite (id_corporation INT NOT NULL, prenom VARCHAR(20) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, nom VARCHAR(20) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, surnom VARCHAR(20) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, fonction VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, date_debut INT NOT NULL, date_fin INT NOT NULL) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE infos_corporations (id_corporation INT NOT NULL, type_info VARCHAR(20) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, titre_information VARCHAR(200) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, text_info VARCHAR(20000) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX titre_information (titre_information)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE photos_corporations (id_corporation INT NOT NULL, nom_photo VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, type_photo VARCHAR(30) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, date_photo INT NOT NULL, chemin_fichier VARCHAR(1000) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE pins (nom VARCHAR(80) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, signification VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, type VARCHAR(30) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, pays VARCHAR(10) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX nom (nom)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE revision_code (numero_question INT NOT NULL, solution VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, reponse VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX numero_question (numero_question)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE villes (pays VARCHAR(30) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ville VARCHAR(30) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, photo_ville VARCHAR(1000) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, avance VARCHAR(7) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX photo_ville (photo_ville)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE ville');
        $this->addSql('ALTER TABLE chicken DROP test');
    }
}
