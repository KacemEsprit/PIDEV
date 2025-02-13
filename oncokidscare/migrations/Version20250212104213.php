<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250212104213 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, patient_id INT NOT NULL, date_commande DATETIME NOT NULL, etat VARCHAR(255) NOT NULL, quantite_total INT NOT NULL, montant_total DOUBLE PRECISION NOT NULL, INDEX IDX_6EEAA67D6B899279 (patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande_medicament (commande_id INT NOT NULL, medicament_id INT NOT NULL, INDEX IDX_25E5EDC82EA2E54 (commande_id), INDEX IDX_25E5EDCAB0D61F7 (medicament_id), PRIMARY KEY(commande_id, medicament_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_commande (id INT AUTO_INCREMENT NOT NULL, commande_id INT NOT NULL, medicament_id INT DEFAULT NULL, quantite INT NOT NULL, prix DOUBLE PRECISION NOT NULL, INDEX IDX_3170B74B82EA2E54 (commande_id), INDEX IDX_3170B74BAB0D61F7 (medicament_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medicament (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, quantite_stock INT NOT NULL, prix DOUBLE PRECISION NOT NULL, is_deleted TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D6B899279 FOREIGN KEY (patient_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commande_medicament ADD CONSTRAINT FK_25E5EDC82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_medicament ADD CONSTRAINT FK_25E5EDCAB0D61F7 FOREIGN KEY (medicament_id) REFERENCES medicament (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74B82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74BAB0D61F7 FOREIGN KEY (medicament_id) REFERENCES medicament (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE chat_group DROP FOREIGN KEY FK_6CBDA95E7E3C61F9');
        $this->addSql('ALTER TABLE chat_group ADD CONSTRAINT FK_6CBDA95E7E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE group_message DROP FOREIGN KEY FK_30BD6473F624B39D');
        $this->addSql('ALTER TABLE group_message DROP FOREIGN KEY FK_30BD6473CA760E77');
        $this->addSql('ALTER TABLE group_message ADD CONSTRAINT FK_30BD6473F624B39D FOREIGN KEY (sender_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE group_message ADD CONSTRAINT FK_30BD6473CA760E77 FOREIGN KEY (chat_group_id) REFERENCES chat_group (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D6B899279');
        $this->addSql('ALTER TABLE commande_medicament DROP FOREIGN KEY FK_25E5EDC82EA2E54');
        $this->addSql('ALTER TABLE commande_medicament DROP FOREIGN KEY FK_25E5EDCAB0D61F7');
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74B82EA2E54');
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74BAB0D61F7');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE commande_medicament');
        $this->addSql('DROP TABLE ligne_commande');
        $this->addSql('DROP TABLE medicament');
        $this->addSql('ALTER TABLE chat_group DROP FOREIGN KEY FK_6CBDA95E7E3C61F9');
        $this->addSql('ALTER TABLE chat_group ADD CONSTRAINT FK_6CBDA95E7E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE group_message DROP FOREIGN KEY FK_30BD6473CA760E77');
        $this->addSql('ALTER TABLE group_message DROP FOREIGN KEY FK_30BD6473F624B39D');
        $this->addSql('ALTER TABLE group_message ADD CONSTRAINT FK_30BD6473CA760E77 FOREIGN KEY (chat_group_id) REFERENCES chat_group (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE group_message ADD CONSTRAINT FK_30BD6473F624B39D FOREIGN KEY (sender_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
