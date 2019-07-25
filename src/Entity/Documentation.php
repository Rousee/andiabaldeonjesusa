<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="DocumentationRepository")
 */
class Documentation
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $surname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $grade;

    /**
     * @ORM\Column(type="integer")
     */
    private $article;

    /**
     * @ORM\Column(type="integer")
     */
    private $book;

    /**
     * @ORM\Column(type="integer")
     */
    private $projects;

    /**
     * @ORM\Column(type="integer")
     */
    private $advice;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(string $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function getArticle(): ?int
    {
        return $this->article;
    }

    public function setArticle(int $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getBook(): ?int
    {
        return $this->book;
    }

    public function setBook(int $book): self
    {
        $this->book = $book;

        return $this;
    }

    public function getProjects(): ?int
    {
        return $this->projects;
    }

    public function setProjects(int $projects): self
    {
        $this->projects = $projects;

        return $this;
    }

    public function getAdvice(): ?int
    {
        return $this->advice;
    }

    public function setAdvice(int $advice): self
    {
        $this->advice = $advice;

        return $this;
    }
}
