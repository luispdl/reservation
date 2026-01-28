<?php

namespace App\Reservation\Domain;

use App\Reservation\Domain\Repository\ReservationRepository;
use App\Resource\Domain\Resource;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Clock\DatePoint;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::GUID)]
    private ?string $uuid = null;

    #[ORM\Column]
    #[ORM\ManyToOne(targetEntity: Resource::class, inversedBy: 'reservations')]
    private ?int $resource_id = null;

    #[ORM\Column(type: 'date_point')]
    private ?DatePoint $date_from = null;

    #[ORM\Column(type: 'date_point')]
    private ?DatePoint $date_to = null;

    #[ORM\Column(length: 255)]
    private ?string $state = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): static
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getResourceId(): ?int
    {
        return $this->resource_id;
    }

    public function setResourceId(int $resource_id): static
    {
        $this->resource_id = $resource_id;

        return $this;
    }

    public function getDateFrom(): ?DatePoint
    {
        return $this->date_from;
    }

    public function setDateFrom(DatePoint $date_from): static
    {
        $this->date_from = $date_from;

        return $this;
    }

    public function getDateTo(): ?DatePoint
    {
        return $this->date_to;
    }

    public function setDateTo(DatePoint $date_to): static
    {
        $this->date_to = $date_to;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): static
    {
        $this->state = $state;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }
}
