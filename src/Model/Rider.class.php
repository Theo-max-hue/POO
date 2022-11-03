<?php

class Rider extends Human
{
    private String $typeJeu;

    public function __construct(String $typeJeu)
    {
        $this->settypeJeu($typeJeu);
    }

    public function settypeJeu(String $typeJeu)
    {
        $this->typeJeu = $typeJeu;
        return $this;
    }

    public function gettypeJeu(): String
    {
        return $this->typeJeu;
    }

    public function __toString(): string
    {
        return parent::__toString() . "Type de jeu : {$this->getCategorie()}\n";
    }
}
