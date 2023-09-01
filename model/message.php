<?php

// Créer la classe Message

// Attributs 

class message{
    private $contenu_m;

    // Constructeurs 

    function __construct($c){
        $this->contenu_m=$c;
    }

    // Getters 

    public function getContenu_m(){
        return $this->contenu_m;
    }

    // Setters

    public function setContenu_m($c)
    {
        $this->contenu_m= $c;
    }

    // Méthodes CRUD 

    // CREATE

    public function create()
    {
        include 'connexion.php';
        $sql="INSERT INTO message (contenu_m) VALUES (:contenu_m)";
        $stmt=$dbco->prepare($sql);
        $stmt->bindParam('contenu_m',$this->contenu_m);
        $stmt->execute();
    }
    

    // RETRIEVE

    public function retrieve($contenu_m)
    {
        include 'connexion.php';
        $req="SELECT * from message where contenu_m=:contenu_m";
        $stmt=$dbco->prepare($req);
        $stmt->bindParam(':contenu_m',$this->contenu_m);
        $stmt->execute();
        $result=stmt->fetch(PDO::FETCH_ASSOC);
        print_r($result);
    }

    // UPDATE 

    function update()
    {
        include 'connexion.php';
        $sql="UPDATE message contenu_m=:contenu_m where contenu_m=:contenu_m";
        $stmt->bindParam('contenu_m,',$this->contenu_m);
        $stmt->execute();
    }

    // DELETE

    function delete()
    {
        include 'connexion.php';
        $sql="DELETE FROM message where contenu_m=:contenu_m";
        $stmt=$dbco->prepare($sql);
        $stmt->bindParam(':contenu_m',$this->contenu_m);
        $stmt->execute();
    }

}



?>