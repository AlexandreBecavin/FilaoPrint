<?php

namespace App\Entity;

use App\Repository\TransactionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TransactionRepository::class)]
class Transaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id_transaction;

    #[ORM\Column(type: 'float', nullable: true)]
    private $product_price;

    #[ORM\Column(type: 'float', nullable: true)]
    private $total;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $validation_date;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $paiment_validation;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $delivery;

    #[ORM\Column(type: 'string', length: 255)]
    private $paiment_mode;

    #[ORM\Column(type: 'string', length: 255)]
    private $status;

    public function getIdTransaction(): ?int
    {
        return $this->id_transaction;
    }

    public function getProductPrice(): ?float
    {
        return $this->product_price;
    }

    public function setProductPrice(?float $product_price): self
    {
        $this->product_price = $product_price;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(?float $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getValidationDate(): ?\DateTimeInterface
    {
        return $this->validation_date;
    }

    public function setValidationDate(?\DateTimeInterface $validation_date): self
    {
        $this->validation_date = $validation_date;

        return $this;
    }

    public function getPaimentValidation(): ?\DateTimeInterface
    {
        return $this->paiment_validation;
    }

    public function setPaimentValidation(?\DateTimeInterface $paiment_validation): self
    {
        $this->paiment_validation = $paiment_validation;

        return $this;
    }

    public function getDelivery(): ?\DateTimeInterface
    {
        return $this->delivery;
    }

    public function setDelivery(?\DateTimeInterface $delivery): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    public function getPaimentMode(): ?string
    {
        return $this->paiment_mode;
    }

    public function setPaimentMode(string $paiment_mode): self
    {
        $this->paiment_mode = $paiment_mode;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
