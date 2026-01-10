<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
#[ORM\Table(name: '`Product`')]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $label = null;

    #[ORM\Column]
    private ? double $Price = null;

    #[ORM\Column]
    private ?int $quantity = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getlabel(): ?string
    {
        return $this->label;
    }

    public function setlabel(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getPrice(): ?double
    {
        return $this->Price;
    }

    public function setPrice(double $Price): static
    {
        $this->Price = $Price;

        return $this;
    }

    public function getquantity(): ?int
    {
        return $this->quantity;
    }

    public function setquantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}
