<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    public const ROLE_ADMIN = 'ROLE_ADMIN';
    public const ROLE_MEDECIN = 'ROLE_MEDECIN';
    public const ROLE_PATIENT = 'ROLE_PATIENT';
    public const ROLE_DONATEUR = 'ROLE_DONATEUR';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $prenom = null;

    #[ORM\Column(length: 255, unique: true)]
    #[Assert\NotBlank]
    #[Assert\Email]
    private ?string $email = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank]
    private ?string $tel = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $adresse = null;

    
  
    #[ORM\Column(length: 20, nullable: true)]
    private ?string $donateurType = null;

    #[ORM\Column(length: 20)]
    private ?string $role = null;

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Publication::class, orphanRemoval: true)]
    private Collection $publications;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Comment::class, orphanRemoval: true)]
    private Collection $comments;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Like::class, orphanRemoval: true)]
    private Collection $likes;
    

    #[ORM\ManyToMany(targetEntity: ChatGroup::class, mappedBy: 'members')]
    private Collection $chatGroups;

    #[ORM\OneToMany(mappedBy: 'owner', targetEntity: ChatGroup::class)]
    private Collection $ownedGroups;

      /**
     * @var Collection<int, RapportDetat>
     */
    #[ORM\OneToMany(targetEntity: RapportDetat::class, mappedBy: 'patient', orphanRemoval: true)]
    private Collection $rapportDetats;

    public function __construct()
    {
        $this->publications = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->likes = new ArrayCollection();
        $this->chatGroups = new ArrayCollection();
        $this->ownedGroups = new ArrayCollection();
        $this->rapportDetats = new ArrayCollection();

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }
   
      public function getDonateurType(): ?string
    {
        return $this->donateurType;
    }

    public function setDonateurType(?string $donateurType): static
    {
        $this->donateurType = $donateurType;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): static
    {
        $this->tel = $tel;
        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        if (!in_array($role, [self::ROLE_ADMIN, self::ROLE_MEDECIN, self::ROLE_PATIENT, self::ROLE_DONATEUR])) {
            throw new \InvalidArgumentException('Invalid role');
        }
        $this->role = $role;
        return $this;
    }

    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }

    public function isMedecin(): bool
    {
        return $this->role === self::ROLE_MEDECIN;
    }

    public function isPatient(): bool
    {
        return $this->role === self::ROLE_PATIENT;
    }

    public function isDonateur(): bool
    {
        return $this->role === self::ROLE_DONATEUR;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function getRoles(): array
    {
        // Tous les utilisateurs ont au minimum ROLE_USER
        $roles = ['ROLE_USER'];
        
        // Ajouter le rôle spécifique de l'utilisateur
        if ($this->role) {
            $roles[] = $this->role;
        }

        return array_unique($roles);
    }

    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
    }

    public function getUserIdentifier(): string
    {
        return $this->email;
    }

    /**
     * @return Collection<int, Publication>
     */
    public function getPublications(): Collection
    {
        return $this->publications;
    }

    public function addPublication(Publication $publication): self
    {
        if (!$this->publications->contains($publication)) {
            $this->publications->add($publication);
            $publication->setUser($this);
        }
        return $this;
    }

    public function removePublication(Publication $publication): self
    {
        if ($this->publications->removeElement($publication)) {
            // set the owning side to null (unless already changed)
            if ($publication->getUser() === $this) {
                $publication->setUser(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, Comment>
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments->add($comment);
            $comment->setUser($this);
        }
        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getUser() === $this) {
                $comment->setUser(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, Like>
     */
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    public function addLike(Like $like): self
    {
        if (!$this->likes->contains($like)) {
            $this->likes->add($like);
            $like->setUser($this);
        }

        return $this;
    }

    public function removeLike(Like $like): self
    {
        if ($this->likes->removeElement($like)) {
            // set the owning side to null (unless already changed)
            if ($like->getUser() === $this) {
                $like->setUser(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection<int, ChatGroup>
     */
    public function getChatGroups(): Collection
    {
        return $this->chatGroups;
    }

    public function addChatGroup(ChatGroup $chatGroup): static
    {
        if (!$this->chatGroups->contains($chatGroup)) {
            $this->chatGroups->add($chatGroup);
            $chatGroup->addMember($this);
        }
        return $this;
    }

    public function removeChatGroup(ChatGroup $chatGroup): static
    {
        if ($this->chatGroups->removeElement($chatGroup)) {
            $chatGroup->removeMember($this);
        }
        return $this;
    }

    /**
     * @return Collection<int, ChatGroup>
     */
    public function getOwnedGroups(): Collection
    {
        return $this->ownedGroups;
    }

    public function addOwnedGroup(ChatGroup $ownedGroup): static
    {
        if (!$this->ownedGroups->contains($ownedGroup)) {
            $this->ownedGroups->add($ownedGroup);
            $ownedGroup->setOwner($this);
        }
        return $this;
    }

    public function removeOwnedGroup(ChatGroup $ownedGroup): static
    {
        if ($this->ownedGroups->removeElement($ownedGroup)) {
            // set the owning side to null (unless already changed)
            if ($ownedGroup->getOwner() === $this) {
                $ownedGroup->setOwner(null);
            }
        }
        return $this;
    }
    /**
     * @return Collection<int, RapportDetat>
     */
    public function getRapportDetats(): Collection
    {
        return $this->rapportDetats;
    }

    public function addRapportDetat(RapportDetat $rapportDetat): static
    {
        if (!$this->rapportDetats->contains($rapportDetat)) {
            $this->rapportDetats->add($rapportDetat);
            $rapportDetat->setPatient($this);
        }

        return $this;
    }

    public function removeRapportDetat(RapportDetat $rapportDetat): static
    {
        if ($this->rapportDetats->removeElement($rapportDetat)) {
            // set the owning side to null (unless already changed)
            if ($rapportDetat->getPatient() === $this) {
                $rapportDetat->setPatient(null);
            }
        }

        return $this;
    }
}