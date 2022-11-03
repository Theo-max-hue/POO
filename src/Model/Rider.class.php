<?php

class Rider extends Human
{
    private String $typeJeu;

    public function __construct($nom, $adresse, $rue, $codePostal, $ville, $typeJeu)
    {
        parent::__construct($nom, $adresse, $rue, $codePostal, $ville);
        $this->setTypeJeu($typeJeu);
    }

    public function setTypeJeu(String $typeJeu)
    {
        $this->typeJeu = $typeJeu;
        return $this;
    }

    public function getTypeJeu(): String
    {
        return $this->typeJeu;
    }

    public function __toString(): string
    {
        return parent::__toString() . "Type de jeu : {$this->getTypeJeu()}\n";
    }
}
