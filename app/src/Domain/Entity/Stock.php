<?php

namespace App\Domain\Entity;

use Symfony\Component\Uid\UuidV6 as Uuid;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Stock
{

    #[ORM\Id]
    #[ORM\Column(type: 'uuid', unique: true)]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    private ?Uuid $id = null;

    /** One Product has One Stock. */
    #[OneToOne(targetEntity: Product::class, inversedBy: 'Stock')]
    #[JoinColumn(name: 'product_id', referencedColumnName: 'id')]
    private Product|null $product = null;


    #[ORM\Column(length: 255)]
    private ?int $counter = null;

    public function getId(): ?Uuid
    {
        return $this->id;
    }

    public function getCounter(): ?int
    {
        return $this->counter;
    }

    public function setCounter(int $counter): self
    {
        $this->counter = $counter;

        return $this;
    }

}
