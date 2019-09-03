<?php
class Films{
    private $_titre;
    private $_realisateur;
    private $_affiche;
    private $_annee;
    private $_roles=array();
    
    function __construct($titre, $realisateur, $affiche, $annee){
        $this->setTitre($titre);
        $this->setRealisateur($realisateur);
        $this->setAffiche($affiche);
        $this->setAnnee($annee);
    }
    
    function getTitre(){
        return $this->_titre;
    }
    
    function getRealisateur(){
        return $this->_realisateur;
    }
    
    function getAffiche(){
        return $this->_affiche;
    }
    
    function getAnnee(){
        return $this->_annee;
    }
    
    function getPersonnages(){
        return $this->_personnages;
    }
    
    function getRoles(){
        return $this->_roles;
    }
    
    function setTitre($_titre){
        $this->_titre = $_titre;
    }
    
    function setRealisateur($_realisateur){
        $this->_realisateur =$_realisateur;
    }
    
    function setAffiche($_affiche){
        $this->_affiche = $_affiche;
    }
    
    function setAnnee($_annee){
        $this->_annee = $_annee;
    }
    
    function setPersonnages($_personnages){
        $this->_personnages = $_personnages;
    }
   
    function addRole($role){
        $this->_roles[] = $role;
    }
}