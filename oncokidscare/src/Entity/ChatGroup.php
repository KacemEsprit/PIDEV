<?php

namespace App\Entity;

use App\Repository\ChatGroupRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChatGroupRepository::class)]
class ChatGroup
{
    public const THEME_PSYCHOLOGIQUE = 'psychologique';
    public const THEME_TIPS = 'tips';
    public const THEME_CANCER_FIGHTERS = 'cancer_fighters';
    public const THEME_ACTIVITIES = 'activities';
    public const THEME_FAMILY = 'family';
    public const THEME_GENERAL = 'general';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'chatGroups')]
    private Collection $members;

    #[ORM\OneToMany(mappedBy: 'chatGroup', targetEntity: GroupMessage::class)]
    private Collection $messages;

    #[ORM\ManyToOne(inversedBy: 'ownedGroups')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $owner = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: 'boolean')]
    private bool $isPublic = false;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $theme = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $icon = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $guidelines = null;

    #[ORM\Column]
    private int $sortOrder = 0;

    public function __construct()
    {
        $this->members = new ArrayCollection();
        $this->messages = new ArrayCollection();
        $this->createdAt = new \DateTimeImmutable();
    }





    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getMembers(): Collection
    {
        return $this->members;
    }

    public function addMember(User $member): static
    {
        if (!$this->members->contains($member)) {
            $this->members->add($member);
        }
        return $this;
    }

    public function removeMember(User $member): static
    {
        $this->members->removeElement($member);
        return $this;
    }

    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(GroupMessage $message): static
    {
        if (!$this->messages->contains($message)) {
            $this->messages->add($message);
            $message->setChatGroup($this);
        }
        return $this;
    }

    public function removeMessage(GroupMessage $message): static
    {
        if ($this->messages->removeElement($message)) {
            if ($message->getChatGroup() === $this) {
                $message->setChatGroup(null);
            }
        }
        return $this;
    }

    public function getOwner(): ?User
    {
        return $this->owner;
    }

    public function setOwner(?User $owner): static
    {
        $this->owner = $owner;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function isPublic(): bool
    {
        return $this->isPublic;
    }

    public function setIsPublic(bool $isPublic): static
    {
        $this->isPublic = $isPublic;
        return $this;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(?string $theme): static
    {
        $this->theme = $theme;
        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(?string $icon): static
    {
        $this->icon = $icon;
        return $this;
    }

    public function getGuidelines(): ?string
    {
        return $this->guidelines;
    }

    public function setGuidelines(?string $guidelines): static
    {
        $this->guidelines = $guidelines;
        return $this;
    }

    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder): static
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    public function getThemeIcon(): string
    {
        return match($this->theme) {
            self::THEME_PSYCHOLOGIQUE => 'fa-brain',
            self::THEME_TIPS => 'fa-lightbulb',
            self::THEME_CANCER_FIGHTERS => 'fa-fist-raised',
            self::THEME_ACTIVITIES => 'fa-gamepad',
            self::THEME_FAMILY => 'fa-users',
            default => 'fa-comments'
        };
    }

    public function getThemeColor(): string
    {
        return match($this->theme) {
            self::THEME_PSYCHOLOGIQUE => '#9C27B0',
            self::THEME_TIPS => '#FF9800',
            self::THEME_CANCER_FIGHTERS => '#F44336',
            self::THEME_ACTIVITIES => '#2196F3',
            self::THEME_FAMILY => '#795548',
            default => '#607D8B'
        };
    }
}