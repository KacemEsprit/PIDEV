<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250301004632 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE campagne (id INT AUTO_INCREMENT NOT NULL, compagnie_id INT NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, objectif NUMERIC(10, 2) NOT NULL, montant_collecte NUMERIC(10, 2) NOT NULL, statut VARCHAR(50) NOT NULL, INDEX IDX_539B5D1652FBE437 (compagnie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chat_group (id INT AUTO_INCREMENT NOT NULL, owner_id INT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(1000) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', is_public TINYINT(1) NOT NULL, theme VARCHAR(50) DEFAULT NULL, icon VARCHAR(255) DEFAULT NULL, guidelines LONGTEXT DEFAULT NULL, sort_order INT NOT NULL, INDEX IDX_6CBDA95E7E3C61F9 (owner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chat_group_user (chat_group_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_6338C89FCA760E77 (chat_group_id), INDEX IDX_6338C89FA76ED395 (user_id), PRIMARY KEY(chat_group_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, patient_id INT NOT NULL, status VARCHAR(255) NOT NULL, date_commande DATETIME NOT NULL, quantite_total INT NOT NULL, montant_total DOUBLE PRECISION NOT NULL, INDEX IDX_6EEAA67D6B899279 (patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, publication_id INT NOT NULL, user_id INT NOT NULL, contenu_com VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', voice_url VARCHAR(255) DEFAULT NULL, type VARCHAR(20) NOT NULL, duration INT DEFAULT NULL, INDEX IDX_9474526C38B217A7 (publication_id), INDEX IDX_9474526CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compagnie (id INT AUTO_INCREMENT NOT NULL, donateur_id INT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, tel VARCHAR(20) NOT NULL, email VARCHAR(255) NOT NULL, site_web VARCHAR(255) NOT NULL, siret VARCHAR(14) NOT NULL, description LONGTEXT DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, date_creation DATETIME NOT NULL, statut_juridique VARCHAR(100) NOT NULL, statut_validation VARCHAR(20) NOT NULL, motif_rejet LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_A26209686C6E55B5 (nom), UNIQUE INDEX UNIQ_A262096826E94372 (siret), INDEX IDX_A2620968A9C80E3 (donateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE doctor_availability (id INT AUTO_INCREMENT NOT NULL, doctor_id INT NOT NULL, date DATE NOT NULL, hour INT NOT NULL, is_available TINYINT(1) NOT NULL, INDEX IDX_155FB69F87F4FB17 (doctor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE don (id INT AUTO_INCREMENT NOT NULL, donateur_id INT NOT NULL, campagne_id INT DEFAULT NULL, type_don VARCHAR(50) NOT NULL, montant NUMERIC(10, 2) DEFAULT NULL, description_materiel LONGTEXT DEFAULT NULL, date_don DATETIME NOT NULL, statut VARCHAR(50) NOT NULL, mode_paiement VARCHAR(50) DEFAULT NULL, preuve_don VARCHAR(255) DEFAULT NULL, INDEX IDX_F8F081D9A9C80E3 (donateur_id), INDEX IDX_F8F081D916227374 (campagne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE don_compagnie (don_id INT NOT NULL, compagnie_id INT NOT NULL, INDEX IDX_952E780E7B3C9061 (don_id), INDEX IDX_952E780E52FBE437 (compagnie_id), PRIMARY KEY(don_id, compagnie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE group_message (id INT AUTO_INCREMENT NOT NULL, chat_group_id INT NOT NULL, sender_id INT NOT NULL, content LONGTEXT DEFAULT NULL, voice_url VARCHAR(255) DEFAULT NULL, type VARCHAR(20) NOT NULL, duration INT DEFAULT NULL, sent_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_30BD6473CA760E77 (chat_group_id), INDEX IDX_30BD6473F624B39D (sender_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_commande (id INT AUTO_INCREMENT NOT NULL, commande_id INT NOT NULL, medicament_id INT NOT NULL, quantite INT NOT NULL, INDEX IDX_3170B74B82EA2E54 (commande_id), INDEX IDX_3170B74BAB0D61F7 (medicament_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medicament (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, quantite_stock INT NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publication (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, contenu LONGTEXT NOT NULL, date_pb DATETIME NOT NULL, is_anonymous TINYINT(1) NOT NULL, image_urls JSON NOT NULL COMMENT \'(DC2Type:json)\', category VARCHAR(50) NOT NULL, view_count INT NOT NULL, status VARCHAR(20) DEFAULT \'pending\' NOT NULL, INDEX IDX_AF3C6779A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publication_like (id INT AUTO_INCREMENT NOT NULL, publication_id INT NOT NULL, user_id INT NOT NULL, comment_id INT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_A79BC17E38B217A7 (publication_id), INDEX IDX_A79BC17EA76ED395 (user_id), INDEX IDX_A79BC17EF8697D13 (comment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rapport_detat (id INT AUTO_INCREMENT NOT NULL, patient_id INT NOT NULL, medecin_id INT NOT NULL, date_rapport DATE NOT NULL, age INT NOT NULL, sexe VARCHAR(10) NOT NULL, tension_arterielle INT NOT NULL, pouls INT NOT NULL, temperature DOUBLE PRECISION NOT NULL, saturation_oxygene INT NOT NULL, imc DOUBLE PRECISION NOT NULL, niveau_douleur INT NOT NULL, traitement VARCHAR(50) NOT NULL, dose_medicament INT NOT NULL, frequence_traitement VARCHAR(50) NOT NULL, perte_de_sang INT NOT NULL, temps_operation INT NOT NULL, duree_seance INT NOT NULL, filtration_sang DOUBLE PRECISION NOT NULL, creatinine DOUBLE PRECISION NOT NULL, score_glasgow INT NOT NULL, respiration_assistee TINYINT(1) NOT NULL, complications LONGTEXT DEFAULT NULL, INDEX IDX_FE2C17306B899279 (patient_id), INDEX IDX_FE2C17304F31A84 (medecin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendezvous (id INT AUTO_INCREMENT NOT NULL, doctor_id INT NOT NULL, patient_id INT NOT NULL, date_time DATETIME NOT NULL, status VARCHAR(50) NOT NULL, INDEX IDX_C09A9BA887F4FB17 (doctor_id), INDEX IDX_C09A9BA86B899279 (patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE report (id INT AUTO_INCREMENT NOT NULL, rendezvous_id INT NOT NULL, doctor_id INT NOT NULL, content LONGTEXT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_C42F77843345E0A3 (rendezvous_id), INDEX IDX_C42F778487F4FB17 (doctor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, tel VARCHAR(20) NOT NULL, adresse VARCHAR(255) NOT NULL, donateur_type VARCHAR(20) DEFAULT NULL, role VARCHAR(20) NOT NULL, password VARCHAR(255) NOT NULL, picture VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE campagne ADD CONSTRAINT FK_539B5D1652FBE437 FOREIGN KEY (compagnie_id) REFERENCES compagnie (id)');
        $this->addSql('ALTER TABLE chat_group ADD CONSTRAINT FK_6CBDA95E7E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE chat_group_user ADD CONSTRAINT FK_6338C89FCA760E77 FOREIGN KEY (chat_group_id) REFERENCES chat_group (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE chat_group_user ADD CONSTRAINT FK_6338C89FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D6B899279 FOREIGN KEY (patient_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C38B217A7 FOREIGN KEY (publication_id) REFERENCES publication (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE compagnie ADD CONSTRAINT FK_A2620968A9C80E3 FOREIGN KEY (donateur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE doctor_availability ADD CONSTRAINT FK_155FB69F87F4FB17 FOREIGN KEY (doctor_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE don ADD CONSTRAINT FK_F8F081D9A9C80E3 FOREIGN KEY (donateur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE don ADD CONSTRAINT FK_F8F081D916227374 FOREIGN KEY (campagne_id) REFERENCES campagne (id)');
        $this->addSql('ALTER TABLE don_compagnie ADD CONSTRAINT FK_952E780E7B3C9061 FOREIGN KEY (don_id) REFERENCES don (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE don_compagnie ADD CONSTRAINT FK_952E780E52FBE437 FOREIGN KEY (compagnie_id) REFERENCES compagnie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE group_message ADD CONSTRAINT FK_30BD6473CA760E77 FOREIGN KEY (chat_group_id) REFERENCES chat_group (id)');
        $this->addSql('ALTER TABLE group_message ADD CONSTRAINT FK_30BD6473F624B39D FOREIGN KEY (sender_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74B82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74BAB0D61F7 FOREIGN KEY (medicament_id) REFERENCES medicament (id)');
        $this->addSql('ALTER TABLE publication ADD CONSTRAINT FK_AF3C6779A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE publication_like ADD CONSTRAINT FK_A79BC17E38B217A7 FOREIGN KEY (publication_id) REFERENCES publication (id)');
        $this->addSql('ALTER TABLE publication_like ADD CONSTRAINT FK_A79BC17EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE publication_like ADD CONSTRAINT FK_A79BC17EF8697D13 FOREIGN KEY (comment_id) REFERENCES comment (id)');
        $this->addSql('ALTER TABLE rapport_detat ADD CONSTRAINT FK_FE2C17306B899279 FOREIGN KEY (patient_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE rapport_detat ADD CONSTRAINT FK_FE2C17304F31A84 FOREIGN KEY (medecin_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE rendezvous ADD CONSTRAINT FK_C09A9BA887F4FB17 FOREIGN KEY (doctor_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE rendezvous ADD CONSTRAINT FK_C09A9BA86B899279 FOREIGN KEY (patient_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE report ADD CONSTRAINT FK_C42F77843345E0A3 FOREIGN KEY (rendezvous_id) REFERENCES rendezvous (id)');
        $this->addSql('ALTER TABLE report ADD CONSTRAINT FK_C42F778487F4FB17 FOREIGN KEY (doctor_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE campagne DROP FOREIGN KEY FK_539B5D1652FBE437');
        $this->addSql('ALTER TABLE chat_group DROP FOREIGN KEY FK_6CBDA95E7E3C61F9');
        $this->addSql('ALTER TABLE chat_group_user DROP FOREIGN KEY FK_6338C89FCA760E77');
        $this->addSql('ALTER TABLE chat_group_user DROP FOREIGN KEY FK_6338C89FA76ED395');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D6B899279');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C38B217A7');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CA76ED395');
        $this->addSql('ALTER TABLE compagnie DROP FOREIGN KEY FK_A2620968A9C80E3');
        $this->addSql('ALTER TABLE doctor_availability DROP FOREIGN KEY FK_155FB69F87F4FB17');
        $this->addSql('ALTER TABLE don DROP FOREIGN KEY FK_F8F081D9A9C80E3');
        $this->addSql('ALTER TABLE don DROP FOREIGN KEY FK_F8F081D916227374');
        $this->addSql('ALTER TABLE don_compagnie DROP FOREIGN KEY FK_952E780E7B3C9061');
        $this->addSql('ALTER TABLE don_compagnie DROP FOREIGN KEY FK_952E780E52FBE437');
        $this->addSql('ALTER TABLE group_message DROP FOREIGN KEY FK_30BD6473CA760E77');
        $this->addSql('ALTER TABLE group_message DROP FOREIGN KEY FK_30BD6473F624B39D');
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74B82EA2E54');
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74BAB0D61F7');
        $this->addSql('ALTER TABLE publication DROP FOREIGN KEY FK_AF3C6779A76ED395');
        $this->addSql('ALTER TABLE publication_like DROP FOREIGN KEY FK_A79BC17E38B217A7');
        $this->addSql('ALTER TABLE publication_like DROP FOREIGN KEY FK_A79BC17EA76ED395');
        $this->addSql('ALTER TABLE publication_like DROP FOREIGN KEY FK_A79BC17EF8697D13');
        $this->addSql('ALTER TABLE rapport_detat DROP FOREIGN KEY FK_FE2C17306B899279');
        $this->addSql('ALTER TABLE rapport_detat DROP FOREIGN KEY FK_FE2C17304F31A84');
        $this->addSql('ALTER TABLE rendezvous DROP FOREIGN KEY FK_C09A9BA887F4FB17');
        $this->addSql('ALTER TABLE rendezvous DROP FOREIGN KEY FK_C09A9BA86B899279');
        $this->addSql('ALTER TABLE report DROP FOREIGN KEY FK_C42F77843345E0A3');
        $this->addSql('ALTER TABLE report DROP FOREIGN KEY FK_C42F778487F4FB17');
        $this->addSql('DROP TABLE campagne');
        $this->addSql('DROP TABLE chat_group');
        $this->addSql('DROP TABLE chat_group_user');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE compagnie');
        $this->addSql('DROP TABLE doctor_availability');
        $this->addSql('DROP TABLE don');
        $this->addSql('DROP TABLE don_compagnie');
        $this->addSql('DROP TABLE group_message');
        $this->addSql('DROP TABLE ligne_commande');
        $this->addSql('DROP TABLE medicament');
        $this->addSql('DROP TABLE publication');
        $this->addSql('DROP TABLE publication_like');
        $this->addSql('DROP TABLE rapport_detat');
        $this->addSql('DROP TABLE rendezvous');
        $this->addSql('DROP TABLE report');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
