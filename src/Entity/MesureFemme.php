<?php

namespace App\Entity;

use App\Repository\MesureFemmeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MesureFemmeRepository::class)
 */
class MesureFemme
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
    private $epaule;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $mass_courte;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $mass_trois_quart;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $mass_longue;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $tour_de_masse;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $poitrine;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $taille;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $ceinture;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $anche;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $longueur_blouse;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $longueur_boubou;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $longueur_jupe;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $longueur_pagne;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $longueur_robr_trois_quart;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $longueur_robe_longue;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $jupe_courte;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $jupe_trois_quart;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $jupe_longue;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="mesureFemmes")
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

    public function getEpaule(): ?float
    {
        return $this->epaule;
    }

    public function setEpaule(?float $epaule): self
    {
        $this->epaule = $epaule;

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

    public function getMassTroisQuart(): ?float
    {
        return $this->mass_trois_quart;
    }

    public function setMassTroisQuart(?float $mass_trois_quart): self
    {
        $this->mass_trois_quart = $mass_trois_quart;

        return $this;
    }

    public function getMassLongue(): ?float
    {
        return $this->mass_longue;
    }

    public function setMassLongue(?float $mass_longue): self
    {
        $this->mass_longue = $mass_longue;

        return $this;
    }

    public function getTourDeMasse(): ?float
    {
        return $this->tour_de_masse;
    }

    public function setTourDeMasse(?float $tour_de_masse): self
    {
        $this->tour_de_masse = $tour_de_masse;

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

    public function getTaille(): ?float
    {
        return $this->taille;
    }

    public function setTaille(?float $taille): self
    {
        $this->taille = $taille;

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

    public function getAnche(): ?float
    {
        return $this->anche;
    }

    public function setAnche(?float $anche): self
    {
        $this->anche = $anche;

        return $this;
    }

    public function getLongueurBlouse(): ?float
    {
        return $this->longueur_blouse;
    }

    public function setLongueurBlouse(?float $longueur_blouse): self
    {
        $this->longueur_blouse = $longueur_blouse;

        return $this;
    }

    public function getLongueurBoubou(): ?float
    {
        return $this->longueur_boubou;
    }

    public function setLongueurBoubou(?float $longueur_boubou): self
    {
        $this->longueur_boubou = $longueur_boubou;

        return $this;
    }

    public function getLongueurJupe(): ?float
    {
        return $this->longueur_jupe;
    }

    public function setLongueurJupe(?float $longueur_jupe): self
    {
        $this->longueur_jupe = $longueur_jupe;

        return $this;
    }

    public function getLongueurPagne(): ?float
    {
        return $this->longueur_pagne;
    }

    public function setLongueurPagne(?float $longueur_pagne): self
    {
        $this->longueur_pagne = $longueur_pagne;

        return $this;
    }

    public function getLongueurRobrTroisQuart(): ?float
    {
        return $this->longueur_robr_trois_quart;
    }

    public function setLongueurRobrTroisQuart(?float $longueur_robr_trois_quart): self
    {
        $this->longueur_robr_trois_quart = $longueur_robr_trois_quart;

        return $this;
    }

    public function getLongueurRobeLongue(): ?float
    {
        return $this->longueur_robe_longue;
    }

    public function setLongueurRobeLongue(?float $longueur_robe_longue): self
    {
        $this->longueur_robe_longue = $longueur_robe_longue;

        return $this;
    }

    public function getJupeCourte(): ?float
    {
        return $this->jupe_courte;
    }

    public function setJupeCourte(?float $jupe_courte): self
    {
        $this->jupe_courte = $jupe_courte;

        return $this;
    }

    public function getJupeTroisQuart(): ?float
    {
        return $this->jupe_trois_quart;
    }

    public function setJupeTroisQuart(?float $jupe_trois_quart): self
    {
        $this->jupe_trois_quart = $jupe_trois_quart;

        return $this;
    }

    public function getJupeLongue(): ?float
    {
        return $this->jupe_longue;
    }

    public function setJupeLongue(?float $jupe_longue): self
    {
        $this->jupe_longue = $jupe_longue;

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
