<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250302234020 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comment_report (id INT AUTO_INCREMENT NOT NULL, comment_id INT NOT NULL, reporter_id INT NOT NULL, reason VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_E3C2F96F8697D13 (comment_id), INDEX IDX_E3C2F96E1CFE6F5 (reporter_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comment_report ADD CONSTRAINT FK_E3C2F96F8697D13 FOREIGN KEY (comment_id) REFERENCES comment (id)');
        $this->addSql('ALTER TABLE comment_report ADD CONSTRAINT FK_E3C2F96E1CFE6F5 FOREIGN KEY (reporter_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment ADD reported TINYINT(1) DEFAULT 0 NOT NULL, ADD report_reason VARCHAR(50) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment_report DROP FOREIGN KEY FK_E3C2F96F8697D13');
        $this->addSql('ALTER TABLE comment_report DROP FOREIGN KEY FK_E3C2F96E1CFE6F5');
        $this->addSql('DROP TABLE comment_report');
        $this->addSql('ALTER TABLE comment DROP reported, DROP report_reason');
    }
}
