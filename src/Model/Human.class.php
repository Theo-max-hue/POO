<?php

abstract class Human extends Ecurie
{

    public function __construct($nom, $adresse, $rue, $codePostal, $ville, Categorie $categorie)
    {
        parent::__construct($nom, $adresse, $rue, $codePostal, $ville);
        $this->setCategorie($categorie);
    }

    public function setCategorie(Categorie $categorie)
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function __toString(): string
    {
        return parent::__toString() . "Catégorie : {$this->getCategorie()}\n";
    }
}
