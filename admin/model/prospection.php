<?php

// Création de la classe Prospection


// Attributs 

private class prospection{
    private $nombre_produit;
    
// Constructeurs 

    public function __construct($n){
        $this->nombre_produit = $n;
    }

    // Getters 


    public getNombre_produit(){
       return $this->nombre_produit;
    }

    // Setters 

    public setNombre_produit($n){
        $this->nombre_produit = $n;
    }


    // Méthodes CRUD 

    // CREATE 
    public function create(){
    include '';
    $sql="INSERT INTO  prospection(nombre_produit) VALUES (:nombre_produit)";
    $stmt=$dbco->prepare($sql);
    $stmt-> bindParam(':nombre_produit',$this->nom_produit);
    $stmt->execute();
    }

    // RETRIEVE 
    public function retrieve($nombre_produit){
    include '';
    $sql="SELECT * FROM prospection where nombre_produit=:nombre_produit";
    $stmt->$dbco->prepare($sql);
    $stmt->bindParam('nombre_produit',$this->nombre_produit);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    print_r($result);
    }

    // UPDATE 

    public function update(){
        include '';
        $sql="UPDATE prospection nombre_produit=:nombre_produit where nombre_produit=:nombre_produit";
        $stmt=$dbco->prepare($sql);
        $stmt->bindParam('nombre_produit', $this->nombre_produit);
        $stmt->execute();
    }

    public function delete()
    {
        include '';
        $sql="DELETE * from prospection where nombre_produit=:nombre_produit";
    }

}














?>
