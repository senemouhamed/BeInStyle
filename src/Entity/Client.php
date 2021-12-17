<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    
     /**
      * @var String

      */
      private $name;
    /**
     * @ORM\Column(type="string", length=90)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $phone;

    /**
     * @ORM\ManyToMany(targetEntity=Catalogue::class, mappedBy="client")
     */
    private $catalogues;

    /**
     * @ORM\OneToMany(targetEntity=MesureHomme::class, mappedBy="client")
     */
    private $mesureHommes;

    /**
     * @ORM\OneToMany(targetEntity=MesureFemme::class, mappedBy="client")
     */
    private $mesureFemmes;

    /**
     * @ORM\ManyToMany(targetEntity=MesureHomme1::class, mappedBy="client")
     */
    private $mesureHomme1s;

   

    public function __construct()
    {
        $this->catalogues = new ArrayCollection();
        $this->mesureHommes = new ArrayCollection();
        $this->mesureFemmes = new ArrayCollection();
        $this->mesureHomme1s = new ArrayCollection();
       
    }

    public function getId(): ?int
    {
        return $this->id;
    }
     /**
     * Set name
     *
     * @param string $name
     *
     * @return Client
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return Collection|Catalogue[]
     */
    public function getCatalogues(): Collection
    {
        return $this->catalogues;
    }

    public function addCatalogue(Catalogue $catalogue): self
    {
        if (!$this->catalogues->contains($catalogue)) {
            $this->catalogues[] = $catalogue;
            $catalogue->addClient($this);
        }

        return $this;
    }

    public function removeCatalogue(Catalogue $catalogue): self
    {
        if ($this->catalogues->removeElement($catalogue)) {
            $catalogue->removeClient($this);
        }

        return $this;
    }

    /**
     * @return Collection|MesureHomme[]
     */
    public function getMesureHommes(): Collection
    {
        return $this->mesureHommes;
    }

    public function addMesureHomme(MesureHomme $mesureHomme): self
    {
        if (!$this->mesureHommes->contains($mesureHomme)) {
            $this->mesureHommes[] = $mesureHomme;
            $mesureHomme->setClient($this);
        }

        return $this;
    }

    public function removeMesureHomme(MesureHomme $mesureHomme): self
    {
        if ($this->mesureHommes->removeElement($mesureHomme)) {
            // set the owning side to null (unless already changed)
            if ($mesureHomme->getClient() === $this) {
                $mesureHomme->setClient(null);
            }
        }

        return $this;
    }
  
     /**
     * Generates the magic method
     * 
     */
    public function __toString(){
        // to show the name of the Category in the select
        return (String) $this->name;
        // to show the id of the Category in the select
        // return $this->id;
    }

    /**
     * @return Collection|MesureFemme[]
     */
    public function getMesureFemmes(): Collection
    {
        return $this->mesureFemmes;
    }

    public function addMesureFemme(MesureFemme $mesureFemme): self
    {
        if (!$this->mesureFemmes->contains($mesureFemme)) {
            $this->mesureFemmes[] = $mesureFemme;
            $mesureFemme->setClient($this);
        }

        return $this;
    }

    public function removeMesureFemme(MesureFemme $mesureFemme): self
    {
        if ($this->mesureFemmes->removeElement($mesureFemme)) {
            // set the owning side to null (unless already changed)
            if ($mesureFemme->getClient() === $this) {
                $mesureFemme->setClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MesureHomme1[]
     */
    public function getMesureHomme1s(): Collection
    {
        return $this->mesureHomme1s;
    }

    public function addMesureHomme1(MesureHomme1 $mesureHomme1): self
    {
        if (!$this->mesureHomme1s->contains($mesureHomme1)) {
            $this->mesureHomme1s[] = $mesureHomme1;
            $mesureHomme1->addClient($this);
        }

        return $this;
    }

    public function removeMesureHomme1(MesureHomme1 $mesureHomme1): self
    {
        if ($this->mesureHomme1s->removeElement($mesureHomme1)) {
            $mesureHomme1->removeClient($this);
        }

        return $this;
    }
}
