<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250209221323 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE don ADD campagne_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE don ADD CONSTRAINT FK_F8F081D916227374 FOREIGN KEY (campagne_id) REFERENCES campagne (id)');
        $this->addSql('CREATE INDEX IDX_F8F081D916227374 ON don (campagne_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE don DROP FOREIGN KEY FK_F8F081D916227374');
        $this->addSql('DROP INDEX IDX_F8F081D916227374 ON don');
        $this->addSql('ALTER TABLE don DROP campagne_id');
    }
}
