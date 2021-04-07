<?php

namespace App\Entity;

use App\Repository\ChiffresRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChiffresRepository::class)
 */
class Chiffres
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $etudiants;

    /**
     * @ORM\Column(type="integer")
     */
    private $enseignants;

    /**
     * @ORM\Column(type="integer")
     */
    private $departements;

    /**
     * @ORM\Column(type="integer")
     */
    private $labo;

    /**
     * @ORM\Column(type="integer")
     */
    private $doctorant;

    /**
     * @ORM\Column(type="integer")
     */
    private $DUT;

    /**
     * @ORM\Column(type="integer")
     */
    private $laureats;

    /**
     * @ORM\Column(type="integer")
     */
    private $partenaires;

    /**
     * @ORM\Column(type="integer")
     */
    private $centreRecherches;

    /**
     * @ORM\Column(type="integer")
     */
    private $fi;

    /**
     * @ORM\Column(type="integer")
     */
    private $lp;

    /**
     * @ORM\Column(type="integer")
     */
    private $lu;

    /**
     * @ORM\Column(type="integer")
     */
    private $mu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtudiants(): ?int
    {
        return $this->etudiants;
    }

    public function setEtudiants(int $etudiants): self
    {
        $this->etudiants = $etudiants;

        return $this;
    }

    public function getEnseignants(): ?int
    {
        return $this->enseignants;
    }

    public function setEnseignants(int $enseignants): self
    {
        $this->enseignants = $enseignants;

        return $this;
    }

    public function getDepartements(): ?int
    {
        return $this->departements;
    }

    public function setDepartements(int $departements): self
    {
        $this->departements = $departements;

        return $this;
    }

    public function getLabo(): ?int
    {
        return $this->labo;
    }

    public function setLabo(int $labo): self
    {
        $this->labo = $labo;

        return $this;
    }

    public function getDoctorant(): ?int
    {
        return $this->doctorant;
    }

    public function setDoctorant(int $doctorant): self
    {
        $this->doctorant = $doctorant;

        return $this;
    }

    public function getDUT(): ?int
    {
        return $this->DUT;
    }

    public function setDUT(int $DUT): self
    {
        $this->DUT = $DUT;

        return $this;
    }

    public function getLaureats(): ?int
    {
        return $this->laureats;
    }

    public function setLaureats(int $laureats): self
    {
        $this->laureats = $laureats;

        return $this;
    }

    public function getPartenaires(): ?int
    {
        return $this->partenaires;
    }

    public function setPartenaires(int $partenaires): self
    {
        $this->partenaires = $partenaires;

        return $this;
    }

    public function getCentreRecherches(): ?int
    {
        return $this->centreRecherches;
    }

    public function setCentreRecherches(int $centreRecherches): self
    {
        $this->centreRecherches = $centreRecherches;

        return $this;
    }

    public function getFi(): ?int
    {
        return $this->fi;
    }

    public function setFi(int $fi): self
    {
        $this->fi = $fi;

        return $this;
    }

    public function getLp(): ?int
    {
        return $this->lp;
    }

    public function setLp(int $lp): self
    {
        $this->lp = $lp;

        return $this;
    }

    public function getLu(): ?int
    {
        return $this->lu;
    }

    public function setLu(int $lu): self
    {
        $this->lu = $lu;

        return $this;
    }

    public function getMu(): ?int
    {
        return $this->mu;
    }

    public function setMu(int $mu): self
    {
        $this->mu = $mu;

        return $this;
    }
}
