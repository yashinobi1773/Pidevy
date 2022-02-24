<?php

namespace App\Entity;

use App\Repository\MatchsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MatchsRepository::class)
 */
class Matchs
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
    private $dateMatch;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $refMatch;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $scoreA;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $scoreB;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateMatch(): ?\DateTimeInterface
    {
        return $this->dateMatch;
    }

    public function setDateMatch(?\DateTimeInterface $dateMatch): self
    {
        $this->dateMatch = $dateMatch;

        return $this;
    }

    public function getRefMatch(): ?string
    {
        return $this->refMatch;
    }

    public function setRefMatch(?string $refMatch): self
    {
        $this->refMatch = $refMatch;

        return $this;
    }

    public function getScoreA(): ?int
    {
        return $this->scoreA;
    }

    public function setScoreA(?int $scoreA): self
    {
        $this->scoreA = $scoreA;

        return $this;
    }

    public function getScoreB(): ?int
    {
        return $this->scoreB;
    }

    public function setScoreB(?int $scoreB): self
    {
        $this->scoreB = $scoreB;

        return $this;
    }
}
