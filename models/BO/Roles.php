<?php
class Roles{
    private $_personnage;
    private $_acteur;
    
    function __construct($personnage, $acteur){
        $this->setPersonnage($personnage);
        $this->setActeurs($acteur);
    }
    
    function getPersonnage(){
        return $this->_personnage;
    }
    
    function getActeur(){
        return $this->_acteur;
    }
    
    function setPersonnage($_personnage){
        $this->_personnage = $_personnage;
    }
    
    function setActeurs($_acteurs){
        $this->_acteur = $_acteurs;
    }
}