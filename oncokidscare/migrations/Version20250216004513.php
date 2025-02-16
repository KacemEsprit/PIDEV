<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250216004513 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande_medicament (id INT AUTO_INCREMENT NOT NULL, commande_id INT NOT NULL, medicament_id INT NOT NULL, quantite INT NOT NULL, INDEX IDX_25E5EDC82EA2E54 (commande_id), INDEX IDX_25E5EDCAB0D61F7 (medicament_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande_medicament ADD CONSTRAINT FK_25E5EDC82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE commande_medicament ADD CONSTRAINT FK_25E5EDCAB0D61F7 FOREIGN KEY (medicament_id) REFERENCES medicament (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande_medicament DROP FOREIGN KEY FK_25E5EDC82EA2E54');
        $this->addSql('ALTER TABLE commande_medicament DROP FOREIGN KEY FK_25E5EDCAB0D61F7');
        $this->addSql('DROP TABLE commande_medicament');
    }
}
