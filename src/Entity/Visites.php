<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\VisitesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VisitesRepository::class)
 * @ApiResource
 */
class Visites
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $vst_datetime;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $vst_commentaire;

    /**
     * @ORM\ManyToOne(targetEntity=Praticien::class, inversedBy="pra_visites")
     */
    private $vst_praticien;

    /**
     * @ORM\ManyToOne(targetEntity=Motif::class)
     */
    private $vst_motif;

    /**
     * @ORM\ManyToOne(targetEntity=Visiteur::class, inversedBy="vis_visites")
     */
    private $vst_visiteur;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $vst_datevisite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVstDatetime(): ?\DateTimeInterface
    {
        return $this->vst_datetime;
    }

    public function setVstDatetime(?\DateTimeInterface $vst_datetime): self
    {
        $this->vst_datetime = $vst_datetime;

        return $this;
    }

    public function getVstCommentaire(): ?string
    {
        return $this->vst_commentaire;
    }

    public function setVstCommentaire(?string $vst_commentaire): self
    {
        $this->vst_commentaire = $vst_commentaire;

        return $this;
    }

    public function getVstPraticien(): ?praticien
    {
        return $this->vst_praticien;
    }

    public function setVstPraticien(?praticien $vst_praticien): self
    {
        $this->vst_praticien = $vst_praticien;

        return $this;
    }

    public function getVstMotif(): ?Motif
    {
        return $this->vst_motif;
    }

    public function setVstMotif(?Motif $vst_motif): self
    {
        $this->vst_motif = $vst_motif;

        return $this;
    }

    public function getVstVisiteur(): ?Visiteur
    {
        return $this->vst_visiteur;
    }

    public function setVstVisiteur(?Visiteur $vst_visiteur): self
    {
        $this->vst_visiteur = $vst_visiteur;

        return $this;
    }

    public function getVstDatevisite(): ?\DateTimeInterface
    {
        return $this->vst_datevisite;
    }

    public function setVstDatevisite(?\DateTimeInterface $vst_datevisite): self
    {
        $this->vst_datevisite = $vst_datevisite;

        return $this;
    }
}
