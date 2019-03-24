<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TruckRepository")
 */
class Truck
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Kenteken;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Merk;

    /**
     * @ORM\Column(type="integer")
     */
    private $Bouwjaar;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Logboek", mappedBy="TruckId")
     */
    private $logboeks;

    public function __construct()
    {
        $this->logboeks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKenteken(): ?string
    {
        return $this->Kenteken;
    }

    public function setKenteken(string $Kenteken): self
    {
        $this->Kenteken = $Kenteken;

        return $this;
    }

    public function getMerk(): ?string
    {
        return $this->Merk;
    }

    public function setMerk(string $Merk): self
    {
        $this->Merk = $Merk;

        return $this;
    }

    public function getBouwjaar(): ?int
    {
        return $this->Bouwjaar;
    }

    public function setBouwjaar(int $Bouwjaar): self
    {
        $this->Bouwjaar = $Bouwjaar;

        return $this;
    }

    /**
     * @return Collection|Logboek[]
     */
    public function getLogboeks(): Collection
    {
        return $this->logboeks;
    }

    public function addLogboek(Logboek $logboek): self
    {
        if (!$this->logboeks->contains($logboek)) {
            $this->logboeks[] = $logboek;
            $logboek->setTruckId($this);
        }

        return $this;
    }

    public function removeLogboek(Logboek $logboek): self
    {
        if ($this->logboeks->contains($logboek)) {
            $this->logboeks->removeElement($logboek);
            // set the owning side to null (unless already changed)
            if ($logboek->getTruckId() === $this) {
                $logboek->setTruckId(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->getKenteken();
    }
}
