<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id_user;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $id_role;

    #[ORM\Column(type: 'string', length: 255)]
    private $Mail;

    #[ORM\Column(type: 'string', length: 255)]
    private $Password;

    #[ORM\Column(type: 'datetime_immutable')]
    private $created_at;

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }


    public function getIdRole(): ?int
    {
        return $this->id_role;
    }

    public function setIdRole(?int $id_role): self
    {
        $this->id_role = $id_role;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->Mail;
    }

    public function setMail(string $Mail): self
    {
        $this->Mail = $Mail;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
}
