<?php

// Créer la classe Informapik

private class Informapik{
    private $titre_description;
    private $description;



   // Constructeurs

        function __construct($t,$d){
        $this->titre_description= $t;
        $this->description= $d;
        }  
    // Getters 

    public function getTitre_description(){
        return $this->titre_description;
    }

    public function getDescription(){
        return $this->description;
    }
    
    // Setters 

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
           include '';
           $sql="INSERT INTO informapik (titre_description, texte_description) VALUES (:titre_description, :texte_description)";
           $stmt=$dbco->prepare($sql);
           $stmt-> bindParam(':titre_description',$this->titre_description);
           $stmt-> bindParam(':texte_description',$this->texte_description);
           $stmt-> execute();
       }
   
       //RETRIEVE 
       public function retrieve($titre_description)
       {
           include '';
           $req = "SELECT * from informapik where titre_descriptiont=:titre_description";
           $stmt=$dbco->prepare($req);
           $stmt->bindParam(':nom_contact',$this->nom_contact);
           $stmt->execute();
           $result = $stmt->fetch(PDO::FETCH_ASSOC);
           print_r($result);
       }
   
       // UPDATE
       function update()
       {
           include '';
           $sql="UPDATE informapik set texte_description=:texte_description where titre_description=:titre_description";
           $stmt=$dbco->prepare($sql);
           $stmt-> bindParam(':texte_description',$this->texte_description);
           $stmt-> execute();
       }
   
       // DELETE 
       function delete()
       {
           include '';
           $sql="DELETE * FROM informapik where titre_description=:titre_description";
           $stmt=$dbco->prepare($sql);
           $stmt-> bindParam(':titre_description',$this->titre_description);
           $stmt-> execute();
           
       }



}




