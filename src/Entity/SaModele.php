<?php

namespace App\Entity;

use App\Repository\SaModeleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SaModeleRepository::class)
 */
class SaModele
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $titre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionmodele;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagaemodele;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescriptionmodele(): ?string
    {
        return $this->descriptionmodele;
    }

    public function setDescriptionmodele(?string $descriptionmodele): self
    {
        $this->descriptionmodele = $descriptionmodele;

        return $this;
    }

    public function getImagaemodele(): ?string
    {
        return $this->imagaemodele;
    }

    public function setImagaemodele(string $imagaemodele): self
    {
        $this->imagaemodele = $imagaemodele;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(?int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
