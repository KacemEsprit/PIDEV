<?php

namespace App\Entity;

use App\Repository\DonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DonRepository::class)]
class Don
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $type_don = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $montant = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description_materiel = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_don = null;

    #[ORM\Column(length: 50)]
    private ?string $statut = null;

    #[ORM\Column(length: 50)]
    private ?string $mode_paiement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $preuve_don = null;

    #[ORM\ManyToOne(inversedBy: 'dons')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $donateur = null;

    #[ORM\ManyToMany(targetEntity: Compagnie::class, inversedBy: 'dons')]
    private Collection $compagnies;

    #[ORM\ManyToOne(targetEntity: Campagne::class, inversedBy: 'dons')]
    #[ORM\JoinColumn(name: 'campagne_id', referencedColumnName: 'id', nullable: true)]
    private ?Campagne $campagne = null;

    public function __construct()
    {
        $this->compagnies = new ArrayCollection();
        $this->date_don = new \DateTime();
        $this->statut = 'En attente';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeDon(): ?string
    {
        return $this->type_don;
    }

    public function setTypeDon(string $type_don): static
    {
        $this->type_don = $type_don;
        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(?string $montant): static
    {
        $this->montant = $montant;
        return $this;
    }

    public function getDescriptionMateriel(): ?string
    {
        return $this->description_materiel;
    }

    public function setDescriptionMateriel(?string $description_materiel): static
    {
        $this->description_materiel = $description_materiel;
        return $this;
    }

    public function getDateDon(): ?\DateTimeInterface
    {
        return $this->date_don;
    }

    public function setDateDon(\DateTimeInterface $date_don): static
    {
        $this->date_don = $date_don;
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

    public function getModePaiement(): ?string
    {
        return $this->mode_paiement;
    }

    public function setModePaiement(string $mode_paiement): static
    {
        $this->mode_paiement = $mode_paiement;
        return $this;
    }

    public function getPreuveDon(): ?string
    {
        return $this->preuve_don;
    }

    public function setPreuveDon(?string $preuve_don): static
    {
        $this->preuve_don = $preuve_don;
        return $this;
    }

    public function getDonateur(): ?User
    {
        return $this->donateur;
    }

    public function setDonateur(?User $donateur): static
    {
        $this->donateur = $donateur;
        return $this;
    }

    /**
     * @return Collection<int, Compagnie>
     */
    public function getCompagnies(): Collection
    {
        return $this->compagnies;
    }

    public function addCompagnie(Compagnie $compagnie): static
    {
        if (!$this->compagnies->contains($compagnie)) {
            $this->compagnies->add($compagnie);
        }
        return $this;
    }

    public function removeCompagnie(Compagnie $compagnie): static
    {
        $this->compagnies->removeElement($compagnie);
        return $this;
    }

    public function getCampagne(): ?Campagne
    {
        return $this->campagne;
    }

    public function setCampagne(?Campagne $campagne): static
    {
        $this->campagne = $campagne;
        return $this;
    }
}