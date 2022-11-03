<?php

class Manager extends Human{
    
    private String $manage;

    public function __construct($nom, $adresse, $rue, $codePostal, $ville, $manage)
    {
        parent::__construct($nom, $adresse, $rue, $codePostal, $ville);
        $this->setManage($manage);
    }
}