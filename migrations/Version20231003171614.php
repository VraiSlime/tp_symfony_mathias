<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231003171614 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bien CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC386A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_45EDC386A76ED395 ON bien (user_id)');
        $this->addSql('ALTER TABLE bien RENAME INDEX fk_45edc38695b4d7fa TO IDX_45EDC38695B4D7FA');
        $this->addSql('ALTER TABLE reservation ADD acces_piscine TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC386A76ED395');
        $this->addSql('DROP INDEX IDX_45EDC386A76ED395 ON bien');
        $this->addSql('ALTER TABLE bien CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE bien RENAME INDEX idx_45edc38695b4d7fa TO FK_45EDC38695B4D7FA');
        $this->addSql('ALTER TABLE reservation DROP acces_piscine');
    }
}
