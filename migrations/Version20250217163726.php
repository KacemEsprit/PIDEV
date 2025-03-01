<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217163726 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE doctor_availability (id INT AUTO_INCREMENT NOT NULL, doctor_id INT NOT NULL, date DATE NOT NULL, hour INT NOT NULL, is_available TINYINT(1) NOT NULL, INDEX IDX_155FB69F87F4FB17 (doctor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendezvous (id INT AUTO_INCREMENT NOT NULL, doctor_id INT NOT NULL, patient_id INT NOT NULL, date_time DATETIME NOT NULL, status VARCHAR(50) NOT NULL, INDEX IDX_C09A9BA887F4FB17 (doctor_id), INDEX IDX_C09A9BA86B899279 (patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE report (id INT AUTO_INCREMENT NOT NULL, rendezvous_id INT NOT NULL, doctor_id INT NOT NULL, content LONGTEXT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_C42F77843345E0A3 (rendezvous_id), INDEX IDX_C42F778487F4FB17 (doctor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE doctor_availability ADD CONSTRAINT FK_155FB69F87F4FB17 FOREIGN KEY (doctor_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE rendezvous ADD CONSTRAINT FK_C09A9BA887F4FB17 FOREIGN KEY (doctor_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE rendezvous ADD CONSTRAINT FK_C09A9BA86B899279 FOREIGN KEY (patient_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE report ADD CONSTRAINT FK_C42F77843345E0A3 FOREIGN KEY (rendezvous_id) REFERENCES rendezvous (id)');
        $this->addSql('ALTER TABLE report ADD CONSTRAINT FK_C42F778487F4FB17 FOREIGN KEY (doctor_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE doctor_availability DROP FOREIGN KEY FK_155FB69F87F4FB17');
        $this->addSql('ALTER TABLE rendezvous DROP FOREIGN KEY FK_C09A9BA887F4FB17');
        $this->addSql('ALTER TABLE rendezvous DROP FOREIGN KEY FK_C09A9BA86B899279');
        $this->addSql('ALTER TABLE report DROP FOREIGN KEY FK_C42F77843345E0A3');
        $this->addSql('ALTER TABLE report DROP FOREIGN KEY FK_C42F778487F4FB17');
        $this->addSql('DROP TABLE doctor_availability');
        $this->addSql('DROP TABLE rendezvous');
        $this->addSql('DROP TABLE report');
    }
}
