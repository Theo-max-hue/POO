<?php

class Manager extends Human
{

    private String $manage;

    public function __construct($nom, $adresse, $rue, $codePostal, $ville, $manage)
    {
        parent::__construct($nom, $adresse, $rue, $codePostal, $ville);
        $this->setManage($manage);
    }

    public function setManage($manage)
    {
        return $this->manage = $manage;
    }

    public function getManage(): string
    {
        return $this->manage;
    }

    public function __toString(): string
    {
        return parent::__toString() . "Manage : {$this->getManage()}\n";
    }
}
