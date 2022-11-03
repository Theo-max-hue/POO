<?php

abstract class Equine extends Animal
{
    private String $id;
    private String $couleur;
    private int $eau;
    private int $compteur = 0;

    public function __construct(String $couleur, int $eau, String $nom)
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

    /**
     * On va créer l'id du canasson dans la fonction setId en récupérant ce qu'il faut du nom et de la couleur
     */

    public function setId($nom, $couleur): string
    {
        return $this->id = "000-" . substr($nom, 0, 1) . "-" . substr($couleur, 0, 1) . "-" . $this->compteur++;
    }

    /**
     * Dans la fonction setCouleur je teste bien si la couleur rentrée fait partie de celles possibles
     */

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

    public function setRider()
    {
    }

    public function __toString()
    {
        return $this->id;
    }
}
