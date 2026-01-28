<?php

namespace App\Reservation\Domain;


class Reservation
{
    private ?int $id = null;

    private ?int $resource_id = null;

    private ?\DateTimeImmutable $date_from = null;

    private ?\DateTimeImmutable $date_to = null;

    private ?string $status = null;

    private ?\DateTimeImmutable $created_at = null;
}
