<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220427212016 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE article_id_article_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE category_id_category_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE matter_id_matter_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE personnal_data_id_personnal_data_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE role_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE transaction_id_transaction_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE article (id_article INT NOT NULL, name VARCHAR(255) NOT NULL, description TEXT NOT NULL, file VARCHAR(255) NOT NULL, volume VARCHAR(255) NOT NULL, PRIMARY KEY(id_article))');
        $this->addSql('CREATE TABLE category (id_category INT NOT NULL, name VARCHAR(255) NOT NULL, code VARCHAR(255) NOT NULL, PRIMARY KEY(id_category))');
        $this->addSql('CREATE TABLE matter (id_matter INT NOT NULL, code VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_matter))');
        $this->addSql('CREATE TABLE personnal_data (id_personnal_data INT NOT NULL, id_info_perso INT NOT NULL, name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, postal_code VARCHAR(255) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, theme INT NOT NULL, PRIMARY KEY(id_personnal_data))');
        $this->addSql('CREATE TABLE role (id INT NOT NULL, code VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE transaction (id_transaction INT NOT NULL, product_price DOUBLE PRECISION DEFAULT NULL, total DOUBLE PRECISION DEFAULT NULL, validation_date TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, paiment_validation TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, delivery TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, paiment_mode VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id_transaction))');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, role_id INT DEFAULT NULL, mail VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, token VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_8D93D649D60322AC ON "user" (role_id)');
        $this->addSql('COMMENT ON COLUMN "user".created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE "user" ADD CONSTRAINT FK_8D93D649D60322AC FOREIGN KEY (role_id) REFERENCES role (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "user" DROP CONSTRAINT FK_8D93D649D60322AC');
        $this->addSql('DROP SEQUENCE article_id_article_seq CASCADE');
        $this->addSql('DROP SEQUENCE category_id_category_seq CASCADE');
        $this->addSql('DROP SEQUENCE matter_id_matter_seq CASCADE');
        $this->addSql('DROP SEQUENCE personnal_data_id_personnal_data_seq CASCADE');
        $this->addSql('DROP SEQUENCE role_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE transaction_id_transaction_seq CASCADE');
        $this->addSql('DROP SEQUENCE "user_id_seq" CASCADE');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE matter');
        $this->addSql('DROP TABLE personnal_data');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE transaction');
        $this->addSql('DROP TABLE "user"');
    }
}
