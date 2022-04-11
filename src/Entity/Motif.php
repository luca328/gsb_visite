<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MotifRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MotifRepository::class)
 * @ApiResource
 */
class Motif
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
    private $mot_libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMotLibelle(): ?string
    {
        return $this->mot_libelle;
    }

    public function setMotLibelle(string $mot_libelle): self
    {
        $this->mot_libelle = $mot_libelle;

        return $this;
    }
}
