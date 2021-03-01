<?php

namespace App\Entity;

use App\Repository\AdherentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdherentsRepository::class)
 */
class Adherents
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="bigint")
     */
    private $dossier;

    /**
     * @ORM\Column(type="bigint")
     */
    private $FreqenceMensuelle;

    /**
     * @ORM\Column(type="bigint")
     */
    private $NbPassage;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    /**
     * @ORM\Column(type="bigint")
     */
    private $Adulte;

    /**
     * @ORM\Column(type="bigint")
     */
    private $Enfant;

    /**
     * @ORM\Column(type="bigint")
     */
    private $Colis;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Paye;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hygiene;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Lessive;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Couches;

    /**
     * @ORM\Column(type="date")
     */
    private $Annee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Observation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getDossier(): ?string
    {
        return $this->dossier;
    }

    public function setDossier(string $dossier): self
    {
        $this->dossier = $dossier;

        return $this;
    }

    public function getFreqenceMensuelle(): ?string
    {
        return $this->FreqenceMensuelle;
    }

    public function setFreqenceMensuelle(string $FreqenceMensuelle): self
    {
        $this->FreqenceMensuelle = $FreqenceMensuelle;

        return $this;
    }

    public function getNbPassage(): ?string
    {
        return $this->NbPassage;
    }

    public function setNbPassage(string $NbPassage): self
    {
        $this->NbPassage = $NbPassage;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getAdulte(): ?string
    {
        return $this->Adulte;
    }

    public function setAdulte(string $Adulte): self
    {
        $this->Adulte = $Adulte;

        return $this;
    }

    public function getEnfant(): ?string
    {
        return $this->Enfant;
    }

    public function setEnfant(string $Enfant): self
    {
        $this->Enfant = $Enfant;

        return $this;
    }

    public function getColis(): ?string
    {
        return $this->Colis;
    }

    public function setColis(string $Colis): self
    {
        $this->Colis = $Colis;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->Telephone;
    }

    public function setTelephone(string $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getPaye(): ?string
    {
        return $this->Paye;
    }

    public function setPaye(string $Paye): self
    {
        $this->Paye = $Paye;

        return $this;
    }

    public function getHygiene(): ?string
    {
        return $this->hygiene;
    }

    public function setHygiene(string $hygiene): self
    {
        $this->hygiene = $hygiene;

        return $this;
    }

    public function getLessive(): ?string
    {
        return $this->Lessive;
    }

    public function setLessive(string $Lessive): self
    {
        $this->Lessive = $Lessive;

        return $this;
    }

    public function getCouches(): ?string
    {
        return $this->Couches;
    }

    public function setCouches(string $Couches): self
    {
        $this->Couches = $Couches;

        return $this;
    }

    public function getAnnee(): ?\DateTimeInterface
    {
        return $this->Annee;
    }

    public function setAnnee(\DateTimeInterface $Annee): self
    {
        $this->Annee = $Annee;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->Observation;
    }

    public function setObservation(string $Observation): self
    {
        $this->Observation = $Observation;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
