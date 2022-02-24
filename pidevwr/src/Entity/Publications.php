<?php

namespace App\Entity;

use App\Repository\PublicationsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PublicationsRepository::class)
 */
class Publications
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
    private $titrePub;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contenuPub;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datePub;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $autheurPub;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $imagePub;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbrLikes;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbrDislikes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitrePub(): ?string
    {
        return $this->titrePub;
    }

    public function setTitrePub(?string $titrePub): self
    {
        $this->titrePub = $titrePub;

        return $this;
    }

    public function getContenuPub(): ?string
    {
        return $this->contenuPub;
    }

    public function setContenuPub(?string $contenuPub): self
    {
        $this->contenuPub = $contenuPub;

        return $this;
    }

    public function getDatePub(): ?\DateTimeInterface
    {
        return $this->datePub;
    }

    public function setDatePub(?\DateTimeInterface $datePub): self
    {
        $this->datePub = $datePub;

        return $this;
    }

    public function getAutheurPub(): ?string
    {
        return $this->autheurPub;
    }

    public function setAutheurPub(?string $autheurPub): self
    {
        $this->autheurPub = $autheurPub;

        return $this;
    }

    public function getImagePub()
    {
        return $this->imagePub;
    }

    public function setImagePub($imagePub): self
    {
        $this->imagePub = $imagePub;

        return $this;
    }

    public function getNbrLikes(): ?int
    {
        return $this->nbrLikes;
    }

    public function setNbrLikes(?int $nbrLikes): self
    {
        $this->nbrLikes = $nbrLikes;

        return $this;
    }

    public function getNbrDislikes(): ?int
    {
        return $this->nbrDislikes;
    }

    public function setNbrDislikes(?int $nbrDislikes): self
    {
        $this->nbrDislikes = $nbrDislikes;

        return $this;
    }
}
