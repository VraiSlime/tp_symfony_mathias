<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231002121642 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bien (id INT AUTO_INCREMENT NOT NULL, type_bien_id_id INT NOT NULL, user_id_id INT DEFAULT NULL, description LONGTEXT NOT NULL, image_path VARCHAR(255) NOT NULL, nbr_traveller INT NOT NULL, INDEX IDX_45EDC386DC6717EE (type_bien_id_id), INDEX IDX_45EDC3869D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facturation (id INT AUTO_INCREMENT NOT NULL, fisrtname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, prix_total INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE infrastructure (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, bien_id_id INT NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, prix_total INT NOT NULL, nbr_enfant INT NOT NULL, nbr_adult INT NOT NULL, nbr_baby INT NOT NULL, INDEX IDX_42C849559D86650F (user_id_id), INDEX IDX_42C84955C164C1CB (bien_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE taxe (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_bien (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC386DC6717EE FOREIGN KEY (type_bien_id_id) REFERENCES type_bien (id)');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC3869D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849559D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955C164C1CB FOREIGN KEY (bien_id_id) REFERENCES bien (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC386DC6717EE');
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC3869D86650F');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849559D86650F');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C164C1CB');
        $this->addSql('DROP TABLE bien');
        $this->addSql('DROP TABLE facturation');
        $this->addSql('DROP TABLE infrastructure');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE taxe');
        $this->addSql('DROP TABLE type_bien');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
