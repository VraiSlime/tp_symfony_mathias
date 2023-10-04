<?php

namespace App\Entity;

use App\Entity\User;
use App\Entity\TypeBien;
use App\Entity\Reservation;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\BienRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: BienRepository::class)]
class Bien
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $image_path = null;

    #[ORM\Column(type: "integer")]
    private ?int $nbr_traveller = null;

    #[ORM\OneToMany(mappedBy: "bien", targetEntity: Reservation::class)]
    private Collection $reservations;

    #[ORM\ManyToOne(inversedBy: "biens")]
    #[ORM\JoinColumn(name: "type_bien_id", referencedColumnName: "id", nullable: false)]
    private ?TypeBien $type_bien = null;

    #[ORM\ManyToOne(inversedBy: "biens")]
    #[ORM\JoinColumn(name: "user_id", referencedColumnName: "id", nullable: true)]
    private ?User $user = null;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getDescription(): ?string
    {
        return $this->description;
    }
    
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }
    
    public function getImagePath(): ?string
    {
        return $this->image_path;
    }
    
    public function setImagePath(string $image_path): self
    {
        $this->image_path = $image_path;
        return $this;
    }
    
    public function getNbrTraveller(): ?int
    {
        return $this->nbr_traveller;
    }
    
    public function setNbrTraveller(int $nbr_traveller): self
    {
        $this->nbr_traveller = $nbr_traveller;
        return $this;
    }
    
    /**
     * @return Collection|Reservation[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }
    
    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setBien($this);
        }
    
        return $this;
    }
    
    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getBien() === $this) {
                $reservation->setBien(null);
            }
        }
    
        return $this;
    }
    
    public function getTypeBien(): ?TypeBien
    {
        return $this->type_bien;
    }
    
    public function setTypeBien(?TypeBien $type_bien): self
    {
        $this->type_bien = $type_bien;
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
}
