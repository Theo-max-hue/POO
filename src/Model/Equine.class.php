<?php

abstract class Equine extends Animal
{
    private String $id;
    private String $couleur;
    private int $eau;
    private int $compteur = 0;

    public function __construct(String $couleur, int $eau)
    {
        $this->setId($nom, $couleur)
            ->setCouleur($couleur)
            ->setEau($eau);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function getEau()
    {
        return $this->eau;
    }

    public function setId($nom, $couleur): string
    {
        return $this->id = "000-" . substr($nom, 0, 1) . "-" . substr($couleur, 0, 1) . "-" . $this->compteur++;
    }

    public function setCouleur($couleur): string
    {
        if ($couleur != "Alzan" && $couleur != "Bai" && $couleur != "Pie" && $couleur != "Grey" && $couleur != "White") {
            echo "Les couleurs dispos sont Alzan, Bai, Pie, Grey ou White";
        }
        return $this->$couleur;
    }

    public function setEau($eau): int
    {
        return $this->$eau;
    }

    public function setCategory()
    {
    }

    public function setRider()
    {
    }

    public function __toString()
    {
        return $this->id;
    }
}
