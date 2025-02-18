<?php

namespace App\Entity;

use App\Repository\PublicationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PublicationRepository::class)]
class Publication
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

  
    #[ORM\Column(type: Types::TEXT)]
    private ?string $contenu = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datePb = null;

    #[ORM\Column(type: 'boolean')]
    private bool $isAnonymous = false;

    #[ORM\Column(type: 'json')]
    private array $imageUrls = [];

 #[ORM\Column(length: 50)]
#[Assert\NotBlank(message: "Veuillez sélectionner une catégorie")]
#[Assert\Choice([
    'Témoignage',
    'Question médicale',
    'Conseil',
    'Autre'
])]
private ?string $category = null;

    #[ORM\Column(type: 'integer')]
    private int $viewCount = 0;

    #[ORM\OneToMany(mappedBy: 'publication', targetEntity: Like::class, orphanRemoval: true)]
    private Collection $likes;



  

    #[ORM\Column(type: 'string', length: 20, options: ['default' => 'pending'])]
    private string $status = 'pending';

    #[ORM\ManyToOne(inversedBy: 'publications')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\OneToMany(mappedBy: 'publication', targetEntity: Comment::class, orphanRemoval: true)]
    private Collection $comments;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->likes = new ArrayCollection();
        $this->imageUrls = [];
        $this->datePb = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;
        return $this;
    }

    public function getDatePb(): ?\DateTimeInterface
    {
        return $this->datePb;
    }

    public function setDatePb(\DateTimeInterface $datePb): self
    {
        $this->datePb = $datePb;
        return $this;
    }

    public function isIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function setIsAnonymous(bool $isAnonymous): self
    {
        $this->isAnonymous = $isAnonymous;
        return $this;
    }

public function getImageUrls(): array
{
    return $this->imageUrls;
}

public function setImageUrls(array $imageUrls): self
{
    $this->imageUrls = $imageUrls;
    return $this;
}

public function addImageUrl(string $imageUrl): self
{
    if (!in_array($imageUrl, $this->imageUrls)) {
        $this->imageUrls[] = $imageUrl;
    }
    return $this;
}

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;
        return $this;
    }



    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    public function incrementViewCount(): self
    {
        $this->viewCount++;
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
            $this->likes[] = $like;
            $like->setPublication($this);
        }

        return $this;
    }

    public function removeLike(Like $like): self
    {
        if ($this->likes->removeElement($like)) {
            if ($like->getPublication() === $this) {
                $like->setPublication(null);
            }
        }

        return $this;
    }

    public function isLikedByUser(User $user): bool
    {
        foreach ($this->likes as $like) {
            if ($like->getUser() === $user) {
                return true;
            }
        }
        return false;
    }



    public function getLikeCount(): int
    {
        return $this->likes->count();
    }



  
 

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
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
            $comment->setPublication($this);
        }
        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            if ($comment->getPublication() === $this) {
                $comment->setPublication(null);
            }
        }
        return $this;
    }
}