<?php

namespace App\Entity;

use App\Repository\MesureHomme1Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MesureHomme1Repository::class)
 */
class MesureHomme1
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $E;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $MC;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ML;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $MTQ;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $TM;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $PG;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Cou;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $P;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $LB;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $DS;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $TQ;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $C;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $LP;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Cu;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $THA;

    /**
     * @ORM\ManyToMany(targetEntity=Client::class, inversedBy="mesureHomme1s")
     */
    private $client;

    public function __construct()
    {
        $this->client = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getE(): ?int
    {
        return $this->E;
    }

    public function setE(?int $E): self
    {
        $this->E = $E;

        return $this;
    }

    public function getMC(): ?int
    {
        return $this->MC;
    }

    public function setMC(?int $MC): self
    {
        $this->MC = $MC;

        return $this;
    }

    public function getML(): ?int
    {
        return $this->ML;
    }

    public function setML(?int $ML): self
    {
        $this->ML = $ML;

        return $this;
    }

    public function getMTQ(): ?int
    {
        return $this->MTQ;
    }

    public function setMTQ(?int $MTQ): self
    {
        $this->MTQ = $MTQ;

        return $this;
    }

    public function getTM(): ?int
    {
        return $this->TM;
    }

    public function setTM(?int $TM): self
    {
        $this->TM = $TM;

        return $this;
    }

    public function getPG(): ?int
    {
        return $this->PG;
    }

    public function setPG(?int $PG): self
    {
        $this->PG = $PG;

        return $this;
    }

    public function getCou(): ?int
    {
        return $this->Cou;
    }

    public function setCou(?int $Cou): self
    {
        $this->Cou = $Cou;

        return $this;
    }

    public function getP(): ?int
    {
        return $this->P;
    }

    public function setP(?int $P): self
    {
        $this->P = $P;

        return $this;
    }

    public function getLB(): ?int
    {
        return $this->LB;
    }

    public function setLB(?int $LB): self
    {
        $this->LB = $LB;

        return $this;
    }

    public function getDS(): ?int
    {
        return $this->DS;
    }

    public function setDS(?int $DS): self
    {
        $this->DS = $DS;

        return $this;
    }

    public function getTQ(): ?int
    {
        return $this->TQ;
    }

    public function setTQ(?int $TQ): self
    {
        $this->TQ = $TQ;

        return $this;
    }

    public function getC(): ?int
    {
        return $this->C;
    }

    public function setC(?int $C): self
    {
        $this->C = $C;

        return $this;
    }

    public function getLP(): ?int
    {
        return $this->LP;
    }

    public function setLP(?int $LP): self
    {
        $this->LP = $LP;

        return $this;
    }

    public function getCu(): ?int
    {
        return $this->Cu;
    }

    public function setCu(?int $Cu): self
    {
        $this->Cu = $Cu;

        return $this;
    }

    public function getTHA(): ?int
    {
        return $this->THA;
    }

    public function setTHA(?int $THA): self
    {
        $this->THA = $THA;

        return $this;
    }

    /**
     * @return Collection|Client[]
     */
    public function getClient(): Collection
    {
        return $this->client;
    }

    public function addClient(Client $client): self
    {
        if (!$this->client->contains($client)) {
            $this->client[] = $client;
        }

        return $this;
    }

    public function removeClient(Client $client): self
    {
        $this->client->removeElement($client);

        return $this;
    }
}
