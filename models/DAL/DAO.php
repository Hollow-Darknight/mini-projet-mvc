<?php
abstract class DAO{
    protected $_bdd;
    
    public function __construct(){
        try{
            $this->setBdd(SPDO::getInstance());
            $this->_bdd->query("SET NAMES UTF8");
        } catch(Exception $e){
            echo "Problème de connexion à la base de donnée...";
            die();
        }
    }
    
    public function setBdd($_bdd){
        $this->_bdd = $_bdd;
    }
}