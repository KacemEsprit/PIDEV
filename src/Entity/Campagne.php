<?php

namespace App\Entity;

use App\Repository\CampagneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CampagneRepository::class)]
class Campagne
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le titre de la campagne est obligatoire")]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "La description de la campagne est obligatoire")]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotNull(message: "La date de début est obligatoire")]
    private ?\DateTimeInterface $date_debut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotNull(message: "La date de fin est obligatoire")]
    #[Assert\GreaterThan(propertyPath: "date_debut", message: "La date de fin doit être postérieure à la date de début")]
    private ?\DateTimeInterface $date_fin = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    #[Assert\NotNull(message: "L'objectif de collecte est obligatoire")]
    #[Assert\Positive(message: "L'objectif doit être un montant positif")]
    private ?string $objectif = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $montant_collecte = '0.00';

    #[ORM\Column(length: 50)]
    private ?string $statut = 'En préparation';

    #[ORM\OneToMany(mappedBy: 'campagne', targetEntity: Don::class)]
    private Collection $dons;

    #[ORM\ManyToOne(inversedBy: 'campagnes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Compagnie $compagnie = null;

    public function __construct()
    {
        $this->dons = new ArrayCollection();
        $this->montant_collecte = '0.00';
        $this->statut = 'En préparation';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): static
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): static
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getObjectif(): ?string
    {
        return $this->objectif;
    }

    public function setObjectif(string $objectif): static
    {
        $this->objectif = $objectif;

        return $this;
    }

    public function getMontantCollecte(): ?string
    {
        return $this->montant_collecte;
    }

    public function setMontantCollecte(string $montant_collecte): static
    {
        $this->montant_collecte = $montant_collecte;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * @return Collection<int, Don>
     */
    public function getDons(): Collection
    {
        return $this->dons;
    }

    public function addDon(Don $don): static
    {
        if (!$this->dons->contains($don)) {
            $this->dons->add($don);
            $don->setCampagne($this);
        }

        return $this;
    }

    public function removeDon(Don $don): static
    {
        if ($this->dons->removeElement($don)) {
            // set the owning side to null (unless already changed)
            if ($don->getCampagne() === $this) {
                $don->setCampagne(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->titre;
    }

    public function getCompagnie(): ?Compagnie
    {
        return $this->compagnie;
    }

    public function setCompagnie(?Compagnie $compagnie): static
    {
        $this->compagnie = $compagnie;

        return $this;
    }
}
