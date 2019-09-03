<?php
class Acteurs{
    private $_nom;
    private $_prenom;
    
    function __construct($prenom, $nom){
        $this->setNom($nom);
        $this->setPrenom($prenom);
    }
    
    function getNom(){
        return $this->_nom;
    }
    
    function getPrenom(){
        return $this->_prenom;
    }
    
    function setNom($_nom){
        $this->_nom = $_nom;
    }
    
    function setPrenom($_prenom){
        $this->_prenom = $_prenom;
    }
}