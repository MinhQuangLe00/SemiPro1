<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrdersRepository::class)]
class Orders
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $AppleProduct = null;

    #[ORM\Column]
    private ?int $ProductType = null;

    #[ORM\Column]
    private ?int $Quantity = null;

    #[ORM\Column]
    private ?int $Customer = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAppleProduct(): ?int
    {
        return $this->AppleProduct;
    }

    public function setAppleProduct(int $AppleProduct): self
    {
        $this->AppleProduct = $AppleProduct;

        return $this;
    }

    public function getProductType(): ?int
    {
        return $this->ProductType;
    }

    public function setProductType(int $ProductType): self
    {
        $this->ProductType = $ProductType;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }

    public function setQuantity(int $Quantity): self
    {
        $this->Quantity = $Quantity;

        return $this;
    }

    public function getCustomer(): ?int
    {
        return $this->Customer;
    }

    public function setCustomer(int $Customer): self
    {
        $this->Customer = $Customer;

        return $this;
    }
}
