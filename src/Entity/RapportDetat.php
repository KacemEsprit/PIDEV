<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\RapportDetatRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: RapportDetatRepository::class)]
class RapportDetat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(type: "date")]
    #[Assert\NotBlank]
    private ?\DateTimeInterface $dateRapport = null;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank]
    private ?int $age = null;

    #[ORM\Column(length: 10)]
    #[Assert\NotBlank]
    private ?string $sexe = null;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank]
    private ?int $tensionArterielle = null;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank]
    private ?int $pouls = null;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank]
    private ?float $temperature = null;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank]
    private ?int $saturationOxygene = null;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank]
    private ?float $imc = null;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank]
    private ?int $niveauDouleur = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank]
    private ?string $traitement = null;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank]
    private ?int $doseMedicament = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank]
    private ?string $frequenceTraitement = null;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank]
    private ?int $perteDeSang = null;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank]
    private ?int $tempsOperation = null;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank]
    private ?int $dureeSeance = null;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank]
    private ?float $filtrationSang = null;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank]
    private ?float $creatinine = null;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank]
    private ?int $scoreGlasgow = null;

    #[ORM\Column(type: "boolean")]
    #[Assert\NotNull]
    private ?bool $respirationAssistee = null;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $complications = null;

    #[ORM\ManyToOne(inversedBy: 'rapportDetats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $patient = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $medecin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPatient(): ?User
    {
        return $this->patient;
    }

    public function setPatient(?User $patient): static
    {
        $this->patient = $patient;
        return $this;
    }

    public function getMedecin(): ?User
    {
        return $this->medecin;
    }

    public function setMedecin(?User $medecin): self
    {
        $this->medecin = $medecin;
        return $this;
    }

    public function getDateRapport(): ?\DateTimeInterface
    {
        return $this->dateRapport;
    }

    public function setDateRapport(\DateTimeInterface $dateRapport): static
    {
        $this->dateRapport = $dateRapport;
        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;
        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): static
    {
        $this->sexe = $sexe;
        return $this;
    }

    public function getTensionArterielle(): ?int
    {
        return $this->tensionArterielle;
    }

    public function setTensionArterielle(int $tensionArterielle): static
    {
        $this->tensionArterielle = $tensionArterielle;
        return $this;
    }

    public function getPouls(): ?int
    {
        return $this->pouls;
    }

    public function setPouls(int $pouls): static
    {
        $this->pouls = $pouls;
        return $this;
    }

    public function getTemperature(): ?float
    {
        return $this->temperature;
    }

    public function setTemperature(float $temperature): static
    {
        $this->temperature = $temperature;
        return $this;
    }

    public function getSaturationOxygene(): ?int
    {
        return $this->saturationOxygene;
    }

    public function setSaturationOxygene(int $saturationOxygene): static
    {
        $this->saturationOxygene = $saturationOxygene;
        return $this;
    }

    public function getImc(): ?float
    {
        return $this->imc;
    }

    public function setImc(float $imc): static
    {
        $this->imc = $imc;
        return $this;
    }

    public function getNiveauDouleur(): ?int
    {
        return $this->niveauDouleur;
    }

    public function setNiveauDouleur(int $niveauDouleur): static
    {
        $this->niveauDouleur = $niveauDouleur;
        return $this;
    }

    public function getTraitement(): ?string
    {
        return $this->traitement;
    }

    public function setTraitement(string $traitement): static
    {
        $this->traitement = $traitement;
        return $this;
    }

    public function getDoseMedicament(): ?int
    {
        return $this->doseMedicament;
    }

    public function setDoseMedicament(int $doseMedicament): static
    {
        $this->doseMedicament = $doseMedicament;
        return $this;
    }

    public function getFrequenceTraitement(): ?string
    {
        return $this->frequenceTraitement;
    }

    public function setFrequenceTraitement(string $frequenceTraitement): static
    {
        $this->frequenceTraitement = $frequenceTraitement;
        return $this;
    }

    public function getPerteDeSang(): ?int
    {
        return $this->perteDeSang;
    }

    public function setPerteDeSang(int $perteDeSang): static
    {
        $this->perteDeSang = $perteDeSang;
        return $this;
    }

    public function getTempsOperation(): ?int
    {
        return $this->tempsOperation;
    }

    public function setTempsOperation(int $tempsOperation): static
    {
        $this->tempsOperation = $tempsOperation;
        return $this;
    }

    public function getDureeSeance(): ?int
    {
        return $this->dureeSeance;
    }

    public function setDureeSeance(int $dureeSeance): static
    {
        $this->dureeSeance = $dureeSeance;
        return $this;
    }

    public function getRespirationAssistee(): ?bool
    {
        return $this->respirationAssistee;
    }

    public function setRespirationAssistee(bool $respirationAssistee): static
    {
        $this->respirationAssistee = $respirationAssistee;
        return $this;
    }

    public function getComplications(): ?string
    {
        return $this->complications;
    }

    public function setComplications(?string $complications): static
    {
        $this->complications = $complications;
        return $this;
    }

    public function getFiltrationSang(): ?float
    {
        return $this->filtrationSang;
    }
    
    public function setFiltrationSang(float $filtrationSang): self
    {
        $this->filtrationSang = $filtrationSang;
        return $this;
    }
    
    public function getCreatinine(): ?float
    {
        return $this->creatinine;
    }
    
    public function setCreatinine(float $creatinine): self
    {
        $this->creatinine = $creatinine;
        return $this;
    }
    
    public function getScoreGlasgow(): ?int
    {
        return $this->scoreGlasgow;
    }
    
    public function setScoreGlasgow(int $scoreGlasgow): self
    {
        $this->scoreGlasgow = $scoreGlasgow;
        return $this;
    }


    



}
