<?php
class User{
    private $_email;
    private $_password;
    
    public function __construct($email, $password){
        $this->setEmail($email);
        $this->setPassword($password);
    }
    
    public function getEmail(){
        return $this->_email;
    }
    
    public function getPassword(){
        return $this->_password;
    }
    
    public function setEmail($_email){
        $this->_email = $_email;
    }
    
    public function setPassword($_password){
       $this->_password = $_password;
    }
}