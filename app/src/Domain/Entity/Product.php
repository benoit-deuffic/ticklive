<?php

namespace App\Domain\Entity;

use Symfony\Component\Uid\UuidV6 as Uuid;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{

    #[ORM\Id]
    #[ORM\Column(type: 'uuid', unique: true)]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    private ?Uuid $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $info = null;

    #[ORM\Column(length: 255)]
    private ?float $price = null;

    #[ORM\Column(length: 255)]
    private ?int $vat_code = null;

    #[ORM\Column(type: 'json')]
    private ?string $is_food = null;

    #[OneToOne(targetEntity: Stock::class, mappedBy: 'stock')]
    private Stock|null $stock = null;

    public function getId(): ?Uuid
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(string $info): self
    {
        $this->info = $info;

        return $this;
    }
    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }
    public function getVatCode(): ?int
    {
        return $this->vat_code;
    }

    public function setVatCode(int $code): self
    {
        $this->vat_code = $code;

        return $this;
    }

    public function getIsFood(): ?string
    {
        return $this->is_food;
    }

    public function setIsFood(string $is_food ): self
    {
        $this->is_food = $is_food;

        return $this;
    }
}
