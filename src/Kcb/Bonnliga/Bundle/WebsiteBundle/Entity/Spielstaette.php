<?php

namespace Kcb\Bonnliga\Bundle\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Spielstaette extends Location {

    /**
     * @ORM\Column(type="text")
     */
    protected $beschreibung;

    /**
     * @ORM\Column(type="text")
     */
    protected $oeffnungszeiten;

    /**
     * @ORM\Column(type="text")
     */
    protected $adresse;

    /**
     * @ORM\OneToMany(targetEntity="Turnier", mappedBy="spielstaette")
     */
    protected $turniere;

    public function __construct() {
        $this->platzierungen = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setBeschreibung($beschreibung) {
        $this->beschreibung = $beschreibung;
    }

    public function getBeschreibung() {
        return $this->beschreibung;
    }

    public function setOeffnungszeiten($oeffnungszeiten) {
        $this->oeffnungszeiten = $oeffnungszeiten;
    }

    public function getOeffnungszeiten() {
        return $this->oeffnungszeiten;
    }

}