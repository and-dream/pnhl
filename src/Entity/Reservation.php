<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $Username = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Classe $Lesson = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?User
    {
        return $this->Username;
    }

    public function setUsername(?User $Username): static
    {
        $this->Username = $Username;

        return $this;
    }

    public function getLesson(): ?Classe
    {
        return $this->Lesson;
    }

    public function setLesson(?Classe $Lesson): static
    {
        $this->Lesson = $Lesson;

        return $this;
    }
}
