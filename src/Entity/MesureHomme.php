<?php

namespace App\Entity;

use App\Repository\MesureHommeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MesureHommeRepository::class)
 */
class MesureHomme
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
     * @ORM\Column(type="float", nullable=true)
     */
    private $epaul;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $mass_courte;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $mass_long;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $mass_trois_quart;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $tourde_mass;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $poigner;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $coup;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $poitrine;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $longueur_boub;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $demi_saison;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $trois_quart;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $ceinture;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $longueur_pantalon;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $cuisse;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $anche;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="mesureHommes")
     */
    private $client;
    
   
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
    public function getEpaul(): ?float
    {
        return $this->epaul;
    }

    public function setEpaul(?float $epaul): self
    {
        $this->epaul = $epaul;

        return $this;
    }

    public function getMassCourte(): ?float
    {
        return $this->mass_courte;
    }

    public function setMassCourte(?float $mass_courte): self
    {
        $this->mass_courte = $mass_courte;

        return $this;
    }

    public function getMassLong(): ?float
    {
        return $this->mass_long;
    }

    public function setMassLong(?float $mass_long): self
    {
        $this->mass_long = $mass_long;

        return $this;
    }

    public function getMassTroisQuart(): ?float
    {
        return $this->mass_trois_quart;
    }

    public function setMassTroisQuart(?float $mass_trois_quart): self
    {
        $this->mass_trois_quart = $mass_trois_quart;

        return $this;
    }

    public function getTourdeMass(): ?float
    {
        return $this->tourde_mass;
    }

    public function setTourdeMass(?float $tourde_mass): self
    {
        $this->tourde_mass = $tourde_mass;

        return $this;
    }

    public function getPoigner(): ?float
    {
        return $this->poigner;
    }

    public function setPoigner(?float $poigner): self
    {
        $this->poigner = $poigner;

        return $this;
    }

    public function getCoup(): ?float
    {
        return $this->coup;
    }

    public function setCoup(?float $coup): self
    {
        $this->coup = $coup;

        return $this;
    }

    public function getPoitrine(): ?float
    {
        return $this->poitrine;
    }

    public function setPoitrine(?float $poitrine): self
    {
        $this->poitrine = $poitrine;

        return $this;
    }

    public function getLongueurBoub(): ?float
    {
        return $this->longueur_boub;
    }

    public function setLongueurBoub(?float $longueur_boub): self
    {
        $this->longueur_boub = $longueur_boub;

        return $this;
    }

    public function getDemiSaison(): ?float
    {
        return $this->demi_saison;
    }

    public function setDemiSaison(?float $demi_saison): self
    {
        $this->demi_saison = $demi_saison;

        return $this;
    }

    public function getTroisQuart(): ?float
    {
        return $this->trois_quart;
    }

    public function setTroisQuart(?float $trois_quart): self
    {
        $this->trois_quart = $trois_quart;

        return $this;
    }

    public function getCeinture(): ?float
    {
        return $this->ceinture;
    }

    public function setCeinture(?float $ceinture): self
    {
        $this->ceinture = $ceinture;

        return $this;
    }

    public function getLongueurPantalon(): ?float
    {
        return $this->longueur_pantalon;
    }

    public function setLongueurPantalon(?float $longueur_pantalon): self
    {
        $this->longueur_pantalon = $longueur_pantalon;

        return $this;
    }

    public function getCuisse(): ?float
    {
        return $this->cuisse;
    }

    public function setCuisse(?float $cuisse): self
    {
        $this->cuisse = $cuisse;

        return $this;
    }

    public function getAnche(): ?float
    {
        return $this->anche;
    }

    public function setAnche(?float $anche): self
    {
        $this->anche = $anche;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

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
 
}
