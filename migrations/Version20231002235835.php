<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231002235835 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849559D86650F');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C164C1CB');
        $this->addSql('DROP INDEX IDX_42C849559D86650F ON reservation');
        $this->addSql('DROP INDEX IDX_42C84955C164C1CB ON reservation');
        $this->addSql('ALTER TABLE reservation ADD user_id INT NOT NULL, ADD bien_id INT NOT NULL, DROP user_id_id, DROP bien_id_id');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955BD95B80F FOREIGN KEY (bien_id) REFERENCES bien (id)');
        $this->addSql('CREATE INDEX IDX_42C84955A76ED395 ON reservation (user_id)');
        $this->addSql('CREATE INDEX IDX_42C84955BD95B80F ON reservation (bien_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A76ED395');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955BD95B80F');
        $this->addSql('DROP INDEX IDX_42C84955A76ED395 ON reservation');
        $this->addSql('DROP INDEX IDX_42C84955BD95B80F ON reservation');
        $this->addSql('ALTER TABLE reservation ADD user_id_id INT NOT NULL, ADD bien_id_id INT NOT NULL, DROP user_id, DROP bien_id');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849559D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955C164C1CB FOREIGN KEY (bien_id_id) REFERENCES bien (id)');
        $this->addSql('CREATE INDEX IDX_42C849559D86650F ON reservation (user_id_id)');
        $this->addSql('CREATE INDEX IDX_42C84955C164C1CB ON reservation (bien_id_id)');
    }
}
