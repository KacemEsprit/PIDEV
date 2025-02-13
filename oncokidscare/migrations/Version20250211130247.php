<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250211130247 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE campagne (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, objectif NUMERIC(10, 2) NOT NULL, montant_collecte NUMERIC(10, 2) NOT NULL, statut VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compagnie (id INT AUTO_INCREMENT NOT NULL, donateur_id INT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(20) NOT NULL, email VARCHAR(255) NOT NULL, site_web VARCHAR(255) DEFAULT NULL, siret VARCHAR(14) NOT NULL, description LONGTEXT DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, date_creation DATETIME NOT NULL, statut_juridique VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_A26209686C6E55B5 (nom), UNIQUE INDEX UNIQ_A262096826E94372 (siret), INDEX IDX_A2620968A9C80E3 (donateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE don (id INT AUTO_INCREMENT NOT NULL, donateur_id INT NOT NULL, campagne_id INT DEFAULT NULL, type_don VARCHAR(50) NOT NULL, montant NUMERIC(10, 2) DEFAULT NULL, description_materiel LONGTEXT DEFAULT NULL, date_don DATETIME NOT NULL, statut VARCHAR(50) NOT NULL, mode_paiement VARCHAR(50) NOT NULL, preuve_don VARCHAR(255) DEFAULT NULL, INDEX IDX_F8F081D9A9C80E3 (donateur_id), INDEX IDX_F8F081D916227374 (campagne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE don_compagnie (don_id INT NOT NULL, compagnie_id INT NOT NULL, INDEX IDX_952E780E7B3C9061 (don_id), INDEX IDX_952E780E52FBE437 (compagnie_id), PRIMARY KEY(don_id, compagnie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE compagnie ADD CONSTRAINT FK_A2620968A9C80E3 FOREIGN KEY (donateur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE don ADD CONSTRAINT FK_F8F081D9A9C80E3 FOREIGN KEY (donateur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE don ADD CONSTRAINT FK_F8F081D916227374 FOREIGN KEY (campagne_id) REFERENCES campagne (id)');
        $this->addSql('ALTER TABLE don_compagnie ADD CONSTRAINT FK_952E780E7B3C9061 FOREIGN KEY (don_id) REFERENCES don (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE don_compagnie ADD CONSTRAINT FK_952E780E52FBE437 FOREIGN KEY (compagnie_id) REFERENCES compagnie (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compagnie DROP FOREIGN KEY FK_A2620968A9C80E3');
        $this->addSql('ALTER TABLE don DROP FOREIGN KEY FK_F8F081D9A9C80E3');
        $this->addSql('ALTER TABLE don DROP FOREIGN KEY FK_F8F081D916227374');
        $this->addSql('ALTER TABLE don_compagnie DROP FOREIGN KEY FK_952E780E7B3C9061');
        $this->addSql('ALTER TABLE don_compagnie DROP FOREIGN KEY FK_952E780E52FBE437');
        $this->addSql('DROP TABLE campagne');
        $this->addSql('DROP TABLE compagnie');
        $this->addSql('DROP TABLE don');
        $this->addSql('DROP TABLE don_compagnie');
    }
}
