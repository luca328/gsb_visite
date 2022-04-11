<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PraticienRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PraticienRepository::class)
 * @ApiResource
 */
class Praticien
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pra_nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pra_prenom;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $pra_tel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pra_mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pra_rue;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pra_codePostal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pra_ville;

    /**
     * @ORM\Column(type="integer")
     */
    private $pra_coefNotoriete;

    /**
     * @ORM\OneToMany(targetEntity=Visites::class, mappedBy="vst_praticien")
     */
    private $pra_visites;

    /**
     * @ORM\ManyToMany(targetEntity=Visiteur::class, inversedBy="praticiens")
     */
    private $praticien_visiteur;

    public function __construct()
    {
        $this->pra_visites = new ArrayCollection();
        $this->praticien_visiteur = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPraNom(): ?string
    {
        return $this->pra_nom;
    }

    public function setPraNom(?string $pra_nom): self
    {
        $this->pra_nom = $pra_nom;

        return $this;
    }

    public function getPraPrenom(): ?string
    {
        return $this->pra_prenom;
    }

    public function setPraPrenom(?string $pra_prenom): self
    {
        $this->pra_prenom = $pra_prenom;

        return $this;
    }

    public function getPraTel(): ?string
    {
        return $this->pra_tel;
    }

    public function setPraTel(?string $pra_tel): self
    {
        $this->pra_tel = $pra_tel;

        return $this;
    }

    public function getPraMail(): ?string
    {
        return $this->pra_mail;
    }

    public function setPraMail(?string $pra_mail): self
    {
        $this->pra_mail = $pra_mail;

        return $this;
    }

    public function getPraRue(): ?string
    {
        return $this->pra_rue;
    }

    public function setPraRue(string $pra_rue): self
    {
        $this->pra_rue = $pra_rue;

        return $this;
    }

    public function getPraCodePostal(): ?string
    {
        return $this->pra_codePostal;
    }

    public function setPraCodePostal(string $pra_codePostal): self
    {
        $this->pra_codePostal = $pra_codePostal;

        return $this;
    }

    public function getPraVille(): ?string
    {
        return $this->pra_ville;
    }

    public function setPraVille(string $pra_ville): self
    {
        $this->pra_ville = $pra_ville;

        return $this;
    }

    public function getPraCoefNotoriete(): ?int
    {
        return $this->pra_coefNotoriete;
    }

    public function setPraCoefNotoriete(int $pra_coefNotoriete): self
    {
        $this->pra_coefNotoriete = $pra_coefNotoriete;

        return $this;
    }

    /**
     * @return Collection|Visites[]
     */
    public function getPraVisites(): Collection
    {
        return $this->pra_visites;
    }

    public function addPraVisite(Visites $praVisite): self
    {
        if (!$this->pra_visites->contains($praVisite)) {
            $this->pra_visites[] = $praVisite;
            $praVisite->setVstPraticien($this);
        }

        return $this;
    }

    public function removePraVisite(Visites $praVisite): self
    {
        if ($this->pra_visites->removeElement($praVisite)) {
            // set the owning side to null (unless already changed)
            if ($praVisite->getVstPraticien() === $this) {
                $praVisite->setVstPraticien(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Visiteur[]
     */
    public function getPraticienVisiteur(): Collection
    {
        return $this->praticien_visiteur;
    }

    public function addPraticienVisiteur(Visiteur $praticienVisiteur): self
    {
        if (!$this->praticien_visiteur->contains($praticienVisiteur)) {
            $this->praticien_visiteur[] = $praticienVisiteur;
        }

        return $this;
    }

    public function removePraticienVisiteur(Visiteur $praticienVisiteur): self
    {
        $this->praticien_visiteur->removeElement($praticienVisiteur);

        return $this;
    }
}
