<?php

namespace App\Entity;

use App\Repository\SubscriberRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubscriberRepository::class)]
class Subscriber
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToMany(targetEntity: Newsletter::class, inversedBy: 'subscribers')]
    private Collection $email;

    public function __construct()
    {
        $this->email = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Newsletter>
     */
    public function getEmail(): Collection
    {
        return $this->email;
    }

    public function addEmail(Newsletter $email): static
    {
        if (!$this->email->contains($email)) {
            $this->email->add($email);
        }

        return $this;
    }

    public function removeEmail(Newsletter $email): static
    {
        $this->email->removeElement($email);

        return $this;
    }
}
