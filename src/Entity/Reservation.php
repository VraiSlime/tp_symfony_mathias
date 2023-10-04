<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column]
    private ?int $prixTotal = null;

    #[ORM\Column]
    private ?int $nbrEnfant = null;

    #[ORM\Column]
    private ?int $nbrAdult = null;

    #[ORM\Column]
    private ?int $nbrBaby = null;

    #[ORM\Column(type: "boolean", nullable: true)]
    private ?bool $accesPiscine = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: "user_id", nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: "bien_id", nullable: false)]
    private ?Bien $bien = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;
        return $this;
    }

    public function getPrixTotal(): ?int
    {
        return $this->prixTotal;
    }

    public function setPrixTotal(int $prixTotal): self
    {
        $this->prixTotal = $prixTotal;
        return $this;
    }

    public function getNbrEnfant(): ?int
    {
        return $this->nbrEnfant;
    }

    public function setNbrEnfant(int $nbrEnfant): self
    {
        $this->nbrEnfant = $nbrEnfant;
        return $this;
    }

    public function getNbrAdult(): ?int
    {
        return $this->nbrAdult;
    }

    public function setNbrAdult(int $nbrAdult): self
    {
        $this->nbrAdult = $nbrAdult;
        return $this;
    }

    public function getNbrBaby(): ?int
    {
        return $this->nbrBaby;
    }

    public function setNbrBaby(int $nbrBaby): self
    {
        $this->nbrBaby = $nbrBaby;
        return $this;
    }

    public function getAccesPiscine(): ?bool
    {
        return $this->accesPiscine;
    }

    public function setAccesPiscine(?bool $accesPiscine): self
    {
        $this->accesPiscine = $accesPiscine;
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

    public function getBien(): ?Bien
    {
        return $this->bien;
    }

    public function setBien(?Bien $bien): self
    {
        $this->bien = $bien;
        return $this;
    }
}
