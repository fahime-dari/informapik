<?php

// Créer la classe Footer_m

private class FooterM{
    private $id_m;
    private $titre_m;
    private $lien_m;
    
    // Constructeurs

    public function __construct($id_m, $titre_m, $lien_m)
    {
        $this->id_m = $id_m;
        $this->titre_m = $titre_m;
        $this->lien_m = $lien_m;
    }
    
    // Getters
    public function getIdM()
    {
        return $this->id_m;
    }
    
    public function getTitreM()
    {
        return $this->titre_m;
    }
    
    public function getLienM()
    {
        return $this->lien_m;
    }
    
    // Setters
    public function setIdM($id_m)
    {
        $this->id_m = $id_m;
    }
    
    public function setTitreM($titre_m)
    {
        $this->titre_m = $titre_m;
    }
    
    public function setLienM($lien_m)
    {
        $this->lien_m = $lien_m;
    }
    
    // Méthodes CRUD
    
    // CREATE
     function create()
    {
        include 'connexion.php';
        $sql="INSERT INTO footer_m (titre_m, lien_m) VALUES (:titre_m, :lien_m)";
        $stmt=$dbco->prepare($sql);
        $stmt-> bindParam(':titre_m',$this->titre_m);
        $stmt-> bindParam(':lien_m',$this->lien_m);
        $stmt-> execute();
    }
    
    // RETRIEVE 
    public function retrieve($id_m)
    {
        include 'connexion.php';
           $req = "SELECT * from footer_m where id_m=:id_m";
           $stmt=$dbco->prepare($req);
           $stmt->bindParam(':id_m',$this->id_m);
           $stmt->execute();
           $result = $stmt->fetch(PDO::FETCH_ASSOC);
           print_r($result);
    }
    
    // UPDATE
    function update()
    {
        include 'connexion.php';
        $sql="UPDATE footer_m set titre_m=:titre_m, lien_m=:lien_m where id_m=:id_m";
        $stmt=$dbco->prepare($sql);
        $stmt->bindParam('id_m',$this->id_m);
        $stmt-> bindParam(':titre_m',$this->titre_m);
        $stmt-> bindParam(':lien_m',$this->lien_m);
        $stmt-> execute();
    }
    
     // DELETE 
    function delete()
    {
        include 'connexion.php';
        $sql="DELETE * FROM footer_m where id_m=:id_m";
        $stmt=$dbco->prepare($sql);
        $stmt-> bindParam(':id_m',$this->id_m);
        $stmt-> execute();
    }
}


