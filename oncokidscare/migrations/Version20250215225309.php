<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250215225309 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE don_compagnie (don_id INT NOT NULL, compagnie_id INT NOT NULL, INDEX IDX_952E780E7B3C9061 (don_id), INDEX IDX_952E780E52FBE437 (compagnie_id), PRIMARY KEY(don_id, compagnie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE don_compagnie ADD CONSTRAINT FK_952E780E7B3C9061 FOREIGN KEY (don_id) REFERENCES don (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE don_compagnie ADD CONSTRAINT FK_952E780E52FBE437 FOREIGN KEY (compagnie_id) REFERENCES compagnie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE campagne ADD compagnie_id INT NOT NULL');
        $this->addSql('ALTER TABLE campagne ADD CONSTRAINT FK_539B5D1652FBE437 FOREIGN KEY (compagnie_id) REFERENCES compagnie (id)');
        $this->addSql('CREATE INDEX IDX_539B5D1652FBE437 ON campagne (compagnie_id)');
        $this->addSql('ALTER TABLE compagnie ADD donateur_id INT NOT NULL, ADD statut_validation VARCHAR(20) NOT NULL, ADD motif_rejet LONGTEXT DEFAULT NULL, CHANGE site_web site_web VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE compagnie ADD CONSTRAINT FK_A2620968A9C80E3 FOREIGN KEY (donateur_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A26209686C6E55B5 ON compagnie (nom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A262096826E94372 ON compagnie (siret)');
        $this->addSql('CREATE INDEX IDX_A2620968A9C80E3 ON compagnie (donateur_id)');
        $this->addSql('ALTER TABLE don DROP FOREIGN KEY FK_F8F081D952FBE437');
        $this->addSql('DROP INDEX IDX_F8F081D952FBE437 ON don');
        $this->addSql('ALTER TABLE don CHANGE mode_paiement mode_paiement VARCHAR(50) DEFAULT NULL, CHANGE compagnie_id campagne_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE don ADD CONSTRAINT FK_F8F081D916227374 FOREIGN KEY (campagne_id) REFERENCES campagne (id)');
        $this->addSql('CREATE INDEX IDX_F8F081D916227374 ON don (campagne_id)');
        $this->addSql('ALTER TABLE user ADD telephone VARCHAR(20) DEFAULT NULL, ADD donateur_type VARCHAR(20) DEFAULT NULL, DROP tel, CHANGE nom nom VARCHAR(255) DEFAULT NULL, CHANGE prenom prenom VARCHAR(255) DEFAULT NULL, CHANGE email email VARCHAR(180) NOT NULL, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE don_compagnie DROP FOREIGN KEY FK_952E780E7B3C9061');
        $this->addSql('ALTER TABLE don_compagnie DROP FOREIGN KEY FK_952E780E52FBE437');
        $this->addSql('DROP TABLE don_compagnie');
        $this->addSql('ALTER TABLE campagne DROP FOREIGN KEY FK_539B5D1652FBE437');
        $this->addSql('DROP INDEX IDX_539B5D1652FBE437 ON campagne');
        $this->addSql('ALTER TABLE campagne DROP compagnie_id');
        $this->addSql('ALTER TABLE compagnie DROP FOREIGN KEY FK_A2620968A9C80E3');
        $this->addSql('DROP INDEX UNIQ_A26209686C6E55B5 ON compagnie');
        $this->addSql('DROP INDEX UNIQ_A262096826E94372 ON compagnie');
        $this->addSql('DROP INDEX IDX_A2620968A9C80E3 ON compagnie');
        $this->addSql('ALTER TABLE compagnie DROP donateur_id, DROP statut_validation, DROP motif_rejet, CHANGE site_web site_web VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE don DROP FOREIGN KEY FK_F8F081D916227374');
        $this->addSql('DROP INDEX IDX_F8F081D916227374 ON don');
        $this->addSql('ALTER TABLE don CHANGE mode_paiement mode_paiement VARCHAR(50) NOT NULL, CHANGE campagne_id compagnie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE don ADD CONSTRAINT FK_F8F081D952FBE437 FOREIGN KEY (compagnie_id) REFERENCES compagnie (id)');
        $this->addSql('CREATE INDEX IDX_F8F081D952FBE437 ON don (compagnie_id)');
        $this->addSql('ALTER TABLE user ADD tel VARCHAR(20) NOT NULL, DROP telephone, DROP donateur_type, CHANGE email email VARCHAR(255) NOT NULL, CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE adresse adresse VARCHAR(255) NOT NULL');
    }
}
