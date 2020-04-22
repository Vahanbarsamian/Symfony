<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Class Dispose
 * 
 * @ORM\Entity(repositoryClass="App\Repository\DisposeRepository")
 * @UniqueEntity(fields = {"animal,personne"},message ="errorMessage")
 */
class Dispose
{

    /**
     * @var int $id
     * 
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var int $animal
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Animal", inversedBy="disposes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $animal;

    /**
     * @var int $personne
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Personne", inversedBy="disposes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $personne;

    /**
     * @var int $nb
     * 
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nb;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnimal(): ?Animal
    {
        return $this->animal;
    }

    public function setAnimal(?Animal $animal): self
    {
        $this->animal = $animal;

        return $this;
    }

    public function getPersonne(): ?Personne
    {
        return $this->personne;
    }

    public function setPersonne(?Personne $personne): self
    {
        $this->personne = $personne;

        return $this;
    }

    public function getNb(): ?int
    {
        return $this->nb;
    }

    public function setNb(?int $nb): self
    {
        $this->nb = $nb;

        return $this;
    }
}
