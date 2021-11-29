<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211124104940 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE visites (id INT AUTO_INCREMENT NOT NULL, vst_praticien_id INT DEFAULT NULL, vst_motif_id INT DEFAULT NULL, vst_visiteur_id INT DEFAULT NULL, vst_datetime DATETIME DEFAULT NULL, vst_commentaire LONGTEXT DEFAULT NULL, vst_datevisite DATETIME DEFAULT NULL, INDEX IDX_470D3983F210BF63 (vst_praticien_id), INDEX IDX_470D398330E71ABC (vst_motif_id), INDEX IDX_470D3983452CCA99 (vst_visiteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE visites ADD CONSTRAINT FK_470D3983F210BF63 FOREIGN KEY (vst_praticien_id) REFERENCES praticien (id)');
        $this->addSql('ALTER TABLE visites ADD CONSTRAINT FK_470D398330E71ABC FOREIGN KEY (vst_motif_id) REFERENCES motif (id)');
        $this->addSql('ALTER TABLE visites ADD CONSTRAINT FK_470D3983452CCA99 FOREIGN KEY (vst_visiteur_id) REFERENCES visiteur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE visites');
    }
}
