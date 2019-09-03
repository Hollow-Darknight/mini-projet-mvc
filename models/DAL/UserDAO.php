<?php
class userDAO extends DAO{

    public function addUser($data){
        $valeurs = ['mail' => $data->getEmail(), 'pass' => $data->getPassword()];
        $requete = 'INSERT INTO user (email, password) VALUES (:mail, :pass)';
        $insert = $this->_bdd->prepare($requete);
        $result = $insert->execute($valeurs);
        return $result;
    }
    
    public function userConnection($user){
        $query = $this->_bdd->prepare('SELECT * FROM user WHERE user.email = :user');
        $query->execute(array(':user' => $user->getEmail()));
        $data = $query->fetch();
        if(password_verify($user->getPassword(), $data['password'])){
            $utilisateur = new User($data['email'], null);
            return $utilisateur;
        } else{
            return false;
        }
    }
}