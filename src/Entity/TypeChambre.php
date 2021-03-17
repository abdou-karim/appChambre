<?php

namespace App\Entity;

use App\Repository\TypeChambreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeChambreRepository::class)
 */
class TypeChambre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity=Chambre::class, mappedBy="idTypeChambre")
     */
    private $chambres;

    public function __construct()
    {
        $this->chambres = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }
/**
 * Transform to string
 * 
 * @return string
 */

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function __toString()
{
    return (string) $this->getLibelle();
}
    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|Chambre[]
     */
    public function getChambres(): Collection
    {
        return $this->chambres;
    }

    public function addChambre(Chambre $chambre): self
    {
        if (!$this->chambres->contains($chambre)) {
            $this->chambres[] = $chambre;
            $chambre->setIdTypeChambre($this);
        }

        return $this;
    }

    public function removeChambre(Chambre $chambre): self
    {
        if ($this->chambres->contains($chambre)) {
            $this->chambres->removeElement($chambre);
            // set the owning side to null (unless already changed)
            if ($chambre->getIdTypeChambre() === $this) {
                $chambre->setIdTypeChambre(null);
            }
        }

        return $this;
    }

}
