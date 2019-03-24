<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LogboekRepository")
 */
class Logboek
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Brief_nr;

    /**
     * @ORM\Column(type="date")
     */
    private $Datum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Lading;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Laadplaats;

    /**
     * @ORM\Column(type="time")
     */
    private $Vertrektijd;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Bestemming;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Evenement;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="logboeks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ChaffeurId;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="logboeks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $UserId;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Truck", inversedBy="logboeks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $TruckId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBriefNr(): ?int
    {
        return $this->Brief_nr;
    }

    public function setBriefNr(int $Brief_nr): self
    {
        $this->Brief_nr = $Brief_nr;

        return $this;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->Datum;
    }

    public function setDatum(\DateTimeInterface $Datum): self
    {
        $this->Datum = $Datum;

        return $this;
    }

    public function getLading(): ?string
    {
        return $this->Lading;
    }

    public function setLading(string $Lading): self
    {
        $this->Lading = $Lading;

        return $this;
    }

    public function getLaadplaats(): ?string
    {
        return $this->Laadplaats;
    }

    public function setLaadplaats(string $Laadplaats): self
    {
        $this->Laadplaats = $Laadplaats;

        return $this;
    }

    public function getVertrektijd(): ?\DateTimeInterface
    {
        return $this->Vertrektijd;
    }

    public function setVertrektijd(\DateTimeInterface $Vertrektijd): self
    {
        $this->Vertrektijd = $Vertrektijd;

        return $this;
    }

    public function getBestemming(): ?string
    {
        return $this->Bestemming;
    }

    public function setBestemming(string $Bestemming): self
    {
        $this->Bestemming = $Bestemming;

        return $this;
    }

    public function getEvenement(): ?string
    {
        return $this->Evenement;
    }

    public function setEvenement(string $Evenement): self
    {
        $this->Evenement = $Evenement;

        return $this;
    }

    public function getChaffeurId(): ?User
    {
        return $this->ChaffeurId;
    }

    public function setChaffeurId(?User $ChaffeurId): self
    {
        $this->ChaffeurId = $ChaffeurId;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->UserId;
    }

    public function setUserId(?User $UserId): self
    {
        $this->UserId = $UserId;

        return $this;
    }

    public function getTruckId(): ?Truck
    {
        return $this->TruckId;
    }

    public function setTruckId(?Truck $TruckId): self
    {
        $this->TruckId = $TruckId;

        return $this;
    }
}
