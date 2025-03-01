<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217151642 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compagnie ADD statut_validation VARCHAR(20) NOT NULL, ADD motif_rejet LONGTEXT DEFAULT NULL, CHANGE site_web site_web VARCHAR(255) NOT NULL, CHANGE tel telephone VARCHAR(20) NOT NULL');
        $this->addSql('ALTER TABLE don CHANGE mode_paiement mode_paiement VARCHAR(50) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compagnie ADD tel VARCHAR(20) NOT NULL, DROP telephone, DROP statut_validation, DROP motif_rejet, CHANGE site_web site_web VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE don CHANGE mode_paiement mode_paiement VARCHAR(50) NOT NULL');
    }
}
