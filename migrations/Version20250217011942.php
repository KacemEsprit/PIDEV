<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217011942 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rapport_detat (id INT AUTO_INCREMENT NOT NULL, patient_id INT NOT NULL, medecin_id INT NOT NULL, date_rapport DATE NOT NULL, age INT NOT NULL, sexe VARCHAR(10) NOT NULL, tension_arterielle INT NOT NULL, pouls INT NOT NULL, temperature DOUBLE PRECISION NOT NULL, saturation_oxygene INT NOT NULL, imc DOUBLE PRECISION NOT NULL, niveau_douleur INT NOT NULL, traitement VARCHAR(50) NOT NULL, dose_medicament INT NOT NULL, frequence_traitement VARCHAR(50) NOT NULL, perte_de_sang INT NOT NULL, temps_operation INT NOT NULL, duree_seance INT NOT NULL, filtration_sang DOUBLE PRECISION NOT NULL, creatinine DOUBLE PRECISION NOT NULL, score_glasgow INT NOT NULL, respiration_assistee TINYINT(1) NOT NULL, complications LONGTEXT DEFAULT NULL, INDEX IDX_FE2C17306B899279 (patient_id), INDEX IDX_FE2C17304F31A84 (medecin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rapport_detat ADD CONSTRAINT FK_FE2C17306B899279 FOREIGN KEY (patient_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE rapport_detat ADD CONSTRAINT FK_FE2C17304F31A84 FOREIGN KEY (medecin_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DA76ED395');
        $this->addSql('ALTER TABLE medicament_commande DROP FOREIGN KEY FK_81D516D182EA2E54');
        $this->addSql('ALTER TABLE medicament_commande DROP FOREIGN KEY FK_81D516D1AB0D61F7');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE medicament');
        $this->addSql('DROP TABLE medicament_commande');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, date_commande DATETIME NOT NULL, etat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, quantite_totale INT NOT NULL, montant_totale DOUBLE PRECISION NOT NULL, INDEX IDX_6EEAA67DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE medicament (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, quantite_stock INT NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE medicament_commande (medicament_id INT NOT NULL, commande_id INT NOT NULL, INDEX IDX_81D516D1AB0D61F7 (medicament_id), INDEX IDX_81D516D182EA2E54 (commande_id), PRIMARY KEY(medicament_id, commande_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE medicament_commande ADD CONSTRAINT FK_81D516D182EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE medicament_commande ADD CONSTRAINT FK_81D516D1AB0D61F7 FOREIGN KEY (medicament_id) REFERENCES medicament (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rapport_detat DROP FOREIGN KEY FK_FE2C17306B899279');
        $this->addSql('ALTER TABLE rapport_detat DROP FOREIGN KEY FK_FE2C17304F31A84');
        $this->addSql('DROP TABLE rapport_detat');
    }
}
