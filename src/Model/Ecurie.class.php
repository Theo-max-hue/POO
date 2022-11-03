<?php

class Ecurie
{

    private String $nom;
    private String $adresse;
    private String $rue;
    private String $codePostal;
    private String $ville;

    public function __construct($nom, $adresse, $rue, $codePostal, $ville)
    {
        $this->setNom($nom)
            ->setAdresse($adresse)
            ->setRue($rue)
            ->setCodePostal($codePostal)
            ->setVille($ville);
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getAdresse(): string
    {
        return $this->adresse;
    }

    public function getRue(): string
    {
        return $this->rue;
    }

    public function getCodePostal(): string
    {
        return $this->codePostal;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }

    public function setRue($rue)
    {
        $this->rue = $rue;
        return $this;
    }

    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
        return $this;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
        return $this;
    }

    public function __toString(): string
    {
        return "Détail de l'écurie :\n
        Nom : {$this->getNom()}\n
        Adresse : {$this->getAdresse()}\n
        Rue : {$this->getRue()}\n
        Code Postal : {$this->getCodePostal()}\n
        Ville : {$this->getVille()}\n";
    }
}
