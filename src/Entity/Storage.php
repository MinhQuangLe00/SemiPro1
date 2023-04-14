<?php

namespace App\Entity;

use App\Repository\StorageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StorageRepository::class)]
class Storage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Quantity = null;

    #[ORM\Column]
    private ?int $ProductType = null;

    #[ORM\Column(length: 255)]
    private ?string $ProductDetail = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getProductType(): ?int
    {
        return $this->ProductType;
    }

    public function setProductType(int $ProductType): self
    {
        $this->ProductType = $ProductType;

        return $this;
    }

    public function getProductDetail(): ?string
    {
        return $this->ProductDetail;
    }

    public function setProductDetail(string $ProductDetail): self
    {
        $this->ProductDetail = $ProductDetail;

        return $this;
    }
}
