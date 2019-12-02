<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EcoleDocRepository")
 */
class EcoleDoc
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\These", mappedBy="ecoleDoc" )
     *@ORM\JoinColumn(nullable=true)
     */
    private $theses;

    public function __construct()
    {
        $this->theses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * @return Collection|These[]
     */
    public function getTheses(): Collection
    {
        return $this->theses;
    }

    public function addThesis(These $thesis): self
    {
        if (!$this->theses->contains($thesis)) {
            $this->theses[] = $thesis;
            $thesis->setEcoleDoc($this);
        }

        return $this;
    }

    public function removeThesis(These $thesis): self
    {
        if ($this->theses->contains($thesis)) {
            $this->theses->removeElement($thesis);
            // set the owning side to null (unless already changed)
            if ($thesis->getEcoleDoc() === $this) {
                $thesis->setEcoleDoc(null);
            }
        }

        return $this;
    }
}
