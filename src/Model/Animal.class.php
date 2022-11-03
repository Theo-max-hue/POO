<?php

abstract class Animal
{
    private String $nom;
    private int $age;
    private String $sexe;

    public function __construct(String $nom, int $age, String $sexe)
    {
        $this->setNom($nom)
            ->setAge($age)
            ->setSexe($sexe);
    }

    public function getNom(): String
    {
        return $this->nom;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getSexe(): String
    {
        return $this->sexe;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
        return $this;
    }

    public function __toString(): string
    {
        return "Détail de l'animal :\n
        Nom : {$this->getNom()}\n
        Age : {$this->getAge()}\n
        Sexe : {$this->getSexe()}\n";
    }
}
