<?php

namespace App\Entity;

use App\Repository\CorporationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CorporationsRepository::class)]
class Corporations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Abreviation = null;

    #[ORM\Column(length: 255)]
    private ?string $VilleCorpo = null;

    #[ORM\Column(length: 255)]
    private ?string $CountryCorpo = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Logo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Resume = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getAbreviation(): ?string
    {
        return $this->Abreviation;
    }

    public function setAbreviation(?string $Abreviation): self
    {
        $this->Abreviation = $Abreviation;

        return $this;
    }

    public function getVilleCorpo(): ?string
    {
        return $this->VilleCorpo;
    }

    public function setVilleCorpo(string $VilleCorpo): self
    {
        $this->VilleCorpo = $VilleCorpo;

        return $this;
    }

    public function getCountryCorpo(): ?string
    {
        return $this->CountryCorpo;
    }

    public function setCountryCorpo(string $CountryCorpo): self
    {
        $this->CountryCorpo = $CountryCorpo;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(?\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->Logo;
    }

    public function setLogo(?string $Logo): self
    {
        $this->Logo = $Logo;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->Resume;
    }

    public function setResume(?string $Resume): self
    {
        $this->Resume = $Resume;

        return $this;
    }
}
