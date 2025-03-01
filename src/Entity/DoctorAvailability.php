<?php

namespace App\Entity;

use App\Repository\DoctorAvailabilityRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DoctorAvailabilityRepository::class)]
class DoctorAvailability
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $doctor = null;

    #[ORM\Column(type: 'date')]
    #[Assert\NotBlank]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: 'integer')]
    private int $hour = 9; // Default to 9 AM

    #[ORM\Column(type: 'boolean')]
    private bool $isAvailable = true; // Default to available

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDoctor(): ?User
    {
        return $this->doctor;
    }

    public function setDoctor(User $doctor): self
    {
        $this->doctor = $doctor;
        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getHour(): int
    {
        return $this->hour;
    }

    public function setHour(int $hour): self
    {
        $this->hour = $hour;
        return $this;
    }

    public function isAvailable(): bool
    {
        return $this->isAvailable;
    }

    public function setAvailable(bool $isAvailable): self
    {
        $this->isAvailable = $isAvailable;
        return $this;
    }
}
