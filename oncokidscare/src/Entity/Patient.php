<?php

namespace App\Entity;

use App\Enum\SexEnum;
use App\Repository\PatientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    private ?string $useremail = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $userimage = null;

    #[ORM\Column]
    private ?int $usertelephone = null;

    #[ORM\Column]
    private ?int $age = null;

    #[ORM\Column(enumType: SexEnum::class)]
    private ?SexEnum $sex = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getUseremail(): ?string
    {
        return $this->useremail;
    }

    public function setUseremail(string $useremail): static
    {
        $this->useremail = $useremail;

        return $this;
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

    public function getUserimage(): ?string
    {
        return $this->userimage;
    }

    public function setUserimage(string $userimage): static
    {
        $this->userimage = $userimage;

        return $this;
    }

    public function getUsertelephone(): ?int
    {
        return $this->usertelephone;
    }

    public function setUsertelephone(int $usertelephone): static
    {
        $this->usertelephone = $usertelephone;

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

    public function getSex(): ?SexEnum
    {
        return $this->sex;
    }

    public function setSex(SexEnum $sex): static
    {
        $this->sex = $sex;

        return $this;
    }
}
