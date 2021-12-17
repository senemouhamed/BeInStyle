<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211217112722 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE catalogue (id INT AUTO_INCREMENT NOT NULL, modele VARCHAR(255) NOT NULL, quantity INT NOT NULL, prix INT DEFAULT NULL, description LONGTEXT DEFAULT NULL, lastdate DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE catalogue_client (catalogue_id INT NOT NULL, client_id INT NOT NULL, INDEX IDX_7B3A9B3D4A7843DC (catalogue_id), INDEX IDX_7B3A9B3D19EB6921 (client_id), PRIMARY KEY(catalogue_id, client_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(90) NOT NULL, prenom VARCHAR(100) NOT NULL, email VARCHAR(255) DEFAULT NULL, phone VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employer (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, telephone VARCHAR(89) NOT NULL, adresse VARCHAR(87) NOT NULL, salaire INT NOT NULL, avance INT DEFAULT NULL, reste INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mesure_femme (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, epaule DOUBLE PRECISION DEFAULT NULL, mass_courte DOUBLE PRECISION DEFAULT NULL, mass_trois_quart DOUBLE PRECISION DEFAULT NULL, mass_longue DOUBLE PRECISION DEFAULT NULL, tour_de_masse DOUBLE PRECISION DEFAULT NULL, poitrine DOUBLE PRECISION DEFAULT NULL, taille DOUBLE PRECISION DEFAULT NULL, ceinture DOUBLE PRECISION DEFAULT NULL, anche DOUBLE PRECISION DEFAULT NULL, longueur_blouse DOUBLE PRECISION DEFAULT NULL, longueur_boubou DOUBLE PRECISION DEFAULT NULL, longueur_jupe DOUBLE PRECISION DEFAULT NULL, longueur_pagne DOUBLE PRECISION DEFAULT NULL, longueur_robr_trois_quart DOUBLE PRECISION DEFAULT NULL, longueur_robe_longue DOUBLE PRECISION DEFAULT NULL, jupe_courte DOUBLE PRECISION DEFAULT NULL, jupe_trois_quart DOUBLE PRECISION DEFAULT NULL, jupe_longue DOUBLE PRECISION DEFAULT NULL, INDEX IDX_36CC3BED19EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mesure_homme (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, epaul DOUBLE PRECISION DEFAULT NULL, mass_courte DOUBLE PRECISION DEFAULT NULL, mass_long DOUBLE PRECISION DEFAULT NULL, mass_trois_quart DOUBLE PRECISION DEFAULT NULL, tourde_mass DOUBLE PRECISION DEFAULT NULL, poigner DOUBLE PRECISION DEFAULT NULL, coup DOUBLE PRECISION DEFAULT NULL, poitrine DOUBLE PRECISION DEFAULT NULL, longueur_boub DOUBLE PRECISION DEFAULT NULL, demi_saison DOUBLE PRECISION DEFAULT NULL, trois_quart DOUBLE PRECISION DEFAULT NULL, ceinture DOUBLE PRECISION DEFAULT NULL, longueur_pantalon DOUBLE PRECISION DEFAULT NULL, cuisse DOUBLE PRECISION DEFAULT NULL, anche DOUBLE PRECISION DEFAULT NULL, INDEX IDX_E64165E819EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mesure_homme1 (id INT AUTO_INCREMENT NOT NULL, e INT DEFAULT NULL, mc INT DEFAULT NULL, ml INT DEFAULT NULL, mtq INT DEFAULT NULL, tm INT DEFAULT NULL, pg INT DEFAULT NULL, cou INT DEFAULT NULL, p INT DEFAULT NULL, lb INT DEFAULT NULL, ds INT DEFAULT NULL, tq INT DEFAULT NULL, c INT DEFAULT NULL, lp INT DEFAULT NULL, cu INT DEFAULT NULL, tha INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mesure_homme1_client (mesure_homme1_id INT NOT NULL, client_id INT NOT NULL, INDEX IDX_65750602D0F05EF (mesure_homme1_id), INDEX IDX_6575060219EB6921 (client_id), PRIMARY KEY(mesure_homme1_id, client_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sa_modele (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(50) NOT NULL, descriptionmodele LONGTEXT DEFAULT NULL, imagaemodele VARCHAR(255) NOT NULL, prix INT DEFAULT NULL, quantity INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE catalogue_client ADD CONSTRAINT FK_7B3A9B3D4A7843DC FOREIGN KEY (catalogue_id) REFERENCES catalogue (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE catalogue_client ADD CONSTRAINT FK_7B3A9B3D19EB6921 FOREIGN KEY (client_id) REFERENCES client (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mesure_femme ADD CONSTRAINT FK_36CC3BED19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE mesure_homme ADD CONSTRAINT FK_E64165E819EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE mesure_homme1_client ADD CONSTRAINT FK_65750602D0F05EF FOREIGN KEY (mesure_homme1_id) REFERENCES mesure_homme1 (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mesure_homme1_client ADD CONSTRAINT FK_6575060219EB6921 FOREIGN KEY (client_id) REFERENCES client (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE catalogue_client DROP FOREIGN KEY FK_7B3A9B3D4A7843DC');
        $this->addSql('ALTER TABLE catalogue_client DROP FOREIGN KEY FK_7B3A9B3D19EB6921');
        $this->addSql('ALTER TABLE mesure_femme DROP FOREIGN KEY FK_36CC3BED19EB6921');
        $this->addSql('ALTER TABLE mesure_homme DROP FOREIGN KEY FK_E64165E819EB6921');
        $this->addSql('ALTER TABLE mesure_homme1_client DROP FOREIGN KEY FK_6575060219EB6921');
        $this->addSql('ALTER TABLE mesure_homme1_client DROP FOREIGN KEY FK_65750602D0F05EF');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE catalogue');
        $this->addSql('DROP TABLE catalogue_client');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE employer');
        $this->addSql('DROP TABLE mesure_femme');
        $this->addSql('DROP TABLE mesure_homme');
        $this->addSql('DROP TABLE mesure_homme1');
        $this->addSql('DROP TABLE mesure_homme1_client');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE sa_modele');
        $this->addSql('DROP TABLE users');
    }
}
