<?php
class FilmsDAO extends DAO{
    public function getAll(){
        // Requête SQL récupération d'information dans toutes les tables nécessaire
        $query = $this->_bdd->prepare("SELECT films.idFilm, films.titre, films.realisateur, films.affiche, films.annee, role.personnage, acteurs.nom, acteurs.prenom
        FROM films
        JOIN  role ON films.idFilm = role.idFilm
        JOIN acteurs ON role.idActeur = acteurs.idActeur");
        $query->execute();
        $films = array();
        
        $id = 0; // Variable nulle qui correspondra à l'ID du film une fois les informations reçues
        while($data = $query->fetch()){
            $acteur = new Acteurs($data['nom'], $data['prenom']); // Création d'un nouvel Acteur
            $role = new Roles($data["personnage"], $acteur); // Création d'un nouveau personnage
            if($data['idFilm'] != $id){
                /*
                * Création d'un nouveau film contenant les informations nécessaire à l'affichage
                * des infos dont on a besoin à savoir titre, année, affiches, acteurs et rôles.
                */
                $films[] = new Films($data["titre"], $data["realisateur"], $data["affiche"],  $data["annee"]);
                /* 
                * Mises à jours de la variable du film afin de mettre l'ID correspondant au film
                */
                $id = $data["idFilm"];
            }
            // On crée une variable qui retiens la dernière infos reçues dans $films
            $last = count($films) - 1;
            // On ajoute le role via la méthode addPersonnage de Films.php
            $films[$last]->addRole($role);
        }
        return ($films);
    }
    
    public function getSome($word){
        $query = $this->_bdd->prepare("SELECT * FROM films WHERE films.title LIKE '%:word%'")->fetch(PDO::FETCH_ASSOC);
        //$query->bindParam(':word', $word);
        $query->execute(array(':word' => $word));
        $films = array();
        while($data = $query->fetch()){
            $films[] = new Films($data);
        }
        return ($films);
    }
}
