<?php

class Ecurie
{
    /**
     * Propriétés
     *
     * @var String
     */

    private String $nom;
    private String $adresse;
    private String $rue;
    private String $codePostal;
    private String $ville;

    /**
     * Constructeur de la classe
     */

    public function __construct($nom, $adresse, $rue, $codePostal, $ville)
    {
        $this->setNom($nom)
            ->setAdresse($adresse)
            ->setRue($rue)
            ->setCodePostal($codePostal)
            ->setVille($ville);
    }

    /**
     * Retourne le nom
     *
     * @return String
     */

    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Retourne l'adresse
     *
     * @return String
     */

    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * Retourne la rue
     *
     * @return String
     */

    public function getRue(): string
    {
        return $this->rue;
    }

    /**
     * Retourne le code postal
     *
     * @return String
     */

    public function getCodePostal(): string
    {
        return $this->codePostal;
    }

    /**
     * Retourne la ville
     *
     * @return String
     */

    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * Set la valeur du nom
     */

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set la valeur de l'adresse
     */

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * Set la valeur de la rue
     */

    public function setRue($rue)
    {
        $this->rue = $rue;
        return $this;
    }

    /**
     * Set la valeur du code postal
     */

    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set la valeur de la ville
     */

    public function setVille($ville)
    {
        $this->ville = $ville;
        return $this;
    }

    /**
     * Fonction d'affichage
     * 
     * @return string
     */

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
