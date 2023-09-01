<?php

// Créer la classe Informapik

private class Informapik{
    private $id_description;
    private $titre_description;
    private $description;


   // Constructeurs

        function __construct($i,$t,$d){
        $this->id_description= $i;
        $this->titre_description= $t;
        $this->description= $d;
        } 
        
    
    // Getters 

    public function getId_description(){
        return $this->id_description;
    }

    public function getTitre_description(){
        return $this->titre_description;
    }

    public function getDescription(){
        return $this->description;
    }
    
    // Setters 

    public function setId_description(){
        return $this->id_description;
    }

    public function setTitre_description($t)
    {
        $this->titre_description = $t;
    }

    public function setDescription($d)
    {
        $this->description = $d;
    }

       // CREATE
       public function create()
       {
           include 'connexion.php';
           $sql="INSERT INTO informapik (titre_description, texte_description) VALUES (:titre_description, :texte_description)";
           $stmt=$dbco->prepare($sql);
           $stmt-> bindParam(':titre_description',$this->titre_description);
           $stmt-> bindParam(':texte_description',$this->texte_description);
           $stmt-> execute();
       }
   
       // RETRIEVE 
       public function retrieve($id_description)
       {
           include 'connexion.php';
           $req = "SELECT * from informapik where id_description=:id_description";
           $stmt=$dbco->prepare($req);
           $stmt->bindParam(':id_description',$this->id_description);
           $stmt->execute();
           $result = $stmt->fetch(PDO::FETCH_ASSOC);
           print_r($result);
       }
       
       // UPDATE
       function update()
       {
           include 'connexion.php';
           $sql="UPDATE informapik set titre_description=:titre_description, texte_description=:texte_description where id_description=:id_description";
           $stmt=$dbco->prepare($sql);
           $stmt->bindParam('id_description',$this->id_description);
           $stmt-> bindParam(':titre_description',$this->titre_description);
           $stmt-> bindParam(':texte_description',$this->texte_description);
           $stmt-> execute();
       }
   
       // DELETE 
       function delete()
       {
           include 'connexion.php';
           $sql="DELETE * FROM informapik where id_description=:id_description";
           $stmt=$dbco->prepare($sql);
           $stmt-> bindParam(':id_description',$this->id_description);
           $stmt-> execute();
           
       }



}




