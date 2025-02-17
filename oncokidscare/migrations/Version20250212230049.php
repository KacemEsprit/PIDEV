<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250212230049 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE campagne (id INT AUTO_INCREMENT NOT NULL, compagnie_id INT NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, objectif NUMERIC(10, 2) NOT NULL, montant_collecte NUMERIC(10, 2) NOT NULL, statut VARCHAR(50) NOT NULL, INDEX IDX_539B5D1652FBE437 (compagnie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, publication_id INT NOT NULL, user_id INT NOT NULL, contenu_com VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_9474526C38B217A7 (publication_id), INDEX IDX_9474526CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compagnie (id INT AUTO_INCREMENT NOT NULL, donateur_id INT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(20) NOT NULL, email VARCHAR(255) NOT NULL, site_web VARCHAR(255) DEFAULT NULL, siret VARCHAR(14) NOT NULL, description LONGTEXT DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, date_creation DATETIME NOT NULL, statut_juridique VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_A26209686C6E55B5 (nom), UNIQUE INDEX UNIQ_A262096826E94372 (siret), INDEX IDX_A2620968A9C80E3 (donateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE don (id INT AUTO_INCREMENT NOT NULL, donateur_id INT NOT NULL, campagne_id INT DEFAULT NULL, type_don VARCHAR(50) NOT NULL, montant NUMERIC(10, 2) DEFAULT NULL, description_materiel LONGTEXT DEFAULT NULL, date_don DATETIME NOT NULL, statut VARCHAR(50) NOT NULL, mode_paiement VARCHAR(50) NOT NULL, preuve_don VARCHAR(255) DEFAULT NULL, INDEX IDX_F8F081D9A9C80E3 (donateur_id), INDEX IDX_F8F081D916227374 (campagne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE don_compagnie (don_id INT NOT NULL, compagnie_id INT NOT NULL, INDEX IDX_952E780E7B3C9061 (don_id), INDEX IDX_952E780E52FBE437 (compagnie_id), PRIMARY KEY(don_id, compagnie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `like` (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, publication_id INT DEFAULT NULL, comment_id INT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_AC6340B3A76ED395 (user_id), INDEX IDX_AC6340B338B217A7 (publication_id), INDEX IDX_AC6340B3F8697D13 (comment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publication (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, titre VARCHAR(255) DEFAULT NULL, contenu LONGTEXT NOT NULL, date_pb DATETIME NOT NULL, is_anonymous TINYINT(1) NOT NULL, image_urls JSON NOT NULL COMMENT \'(DC2Type:json)\', category VARCHAR(50) DEFAULT NULL, tags LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', view_count INT NOT NULL, is_moderated TINYINT(1) NOT NULL, is_pinned TINYINT(1) NOT NULL, last_edit_date DATETIME DEFAULT NULL, INDEX IDX_AF3C6779A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, role VARCHAR(20) NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, telephone VARCHAR(20) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, donateur_type VARCHAR(20) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE campagne ADD CONSTRAINT FK_539B5D1652FBE437 FOREIGN KEY (compagnie_id) REFERENCES compagnie (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C38B217A7 FOREIGN KEY (publication_id) REFERENCES publication (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE compagnie ADD CONSTRAINT FK_A2620968A9C80E3 FOREIGN KEY (donateur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE don ADD CONSTRAINT FK_F8F081D9A9C80E3 FOREIGN KEY (donateur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE don ADD CONSTRAINT FK_F8F081D916227374 FOREIGN KEY (campagne_id) REFERENCES campagne (id)');
        $this->addSql('ALTER TABLE don_compagnie ADD CONSTRAINT FK_952E780E7B3C9061 FOREIGN KEY (don_id) REFERENCES don (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE don_compagnie ADD CONSTRAINT FK_952E780E52FBE437 FOREIGN KEY (compagnie_id) REFERENCES compagnie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `like` ADD CONSTRAINT FK_AC6340B3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `like` ADD CONSTRAINT FK_AC6340B338B217A7 FOREIGN KEY (publication_id) REFERENCES publication (id)');
        $this->addSql('ALTER TABLE `like` ADD CONSTRAINT FK_AC6340B3F8697D13 FOREIGN KEY (comment_id) REFERENCES comment (id)');
        $this->addSql('ALTER TABLE publication ADD CONSTRAINT FK_AF3C6779A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE campagne DROP FOREIGN KEY FK_539B5D1652FBE437');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C38B217A7');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CA76ED395');
        $this->addSql('ALTER TABLE compagnie DROP FOREIGN KEY FK_A2620968A9C80E3');
        $this->addSql('ALTER TABLE don DROP FOREIGN KEY FK_F8F081D9A9C80E3');
        $this->addSql('ALTER TABLE don DROP FOREIGN KEY FK_F8F081D916227374');
        $this->addSql('ALTER TABLE don_compagnie DROP FOREIGN KEY FK_952E780E7B3C9061');
        $this->addSql('ALTER TABLE don_compagnie DROP FOREIGN KEY FK_952E780E52FBE437');
        $this->addSql('ALTER TABLE `like` DROP FOREIGN KEY FK_AC6340B3A76ED395');
        $this->addSql('ALTER TABLE `like` DROP FOREIGN KEY FK_AC6340B338B217A7');
        $this->addSql('ALTER TABLE `like` DROP FOREIGN KEY FK_AC6340B3F8697D13');
        $this->addSql('ALTER TABLE publication DROP FOREIGN KEY FK_AF3C6779A76ED395');
        $this->addSql('DROP TABLE campagne');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE compagnie');
        $this->addSql('DROP TABLE don');
        $this->addSql('DROP TABLE don_compagnie');
        $this->addSql('DROP TABLE `like`');
        $this->addSql('DROP TABLE publication');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
