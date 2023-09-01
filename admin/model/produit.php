<?php 

// Création de la classe Produit

// Attributs 

class produit{
    private $nom_produit;
    private $description_produit;


// Constructeurs 

function __construct($n, $des){
    $this->nom_produit=$n;
    $this->description_produit=$des;

}

// Getters

public function getNom_produit()
    {
        return $this->nom_produit;
    }

    public function getDescription_produit()
    {
        return $this->description_produit;
    }

 // Setters
   
   public function setNom_produit($n)
   {
       $this->nom_produit = $n;
   }


   public function setDescription_produit($des)
   {
       $this->description_produit = $des;
   }


   
    // Méthodes CRUD 

    // CREATE

    public function create()
	{
		include '';
		$sql="INSERT INTO produit(nom_produit, description_produit) VALUES (:nom_produit, :description_produit)";
        $stmt=$dbco->prepare($sql);
		$stmt-> bindParam(':nom_produit',$this->nom_produit);
		$stmt-> bindParam(':description_produit',$this->description_produit);
		$stmt-> execute();
	}

    // RETRIEVE 

    public function retrieve($nom_produit)
    {
        include '';
        $req = "SELECT * from produit where nom_produit=:nom_produit";
        $stmt=$dbco->prepare($req);
        $stmt->bindParam(':nom_produit',$this->nom_produit);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        print_r($result);
    }

    // UPDATE

    function update()
    {
		include '';
		$sql="UPDATE produit set nom_produit=:nom_produit, description_produit=:description_produit where nom_produit=:nom_produit";
        $stmt=$dbco->prepare($sql);
		$stmt-> bindParam(':nom_produit',$this->nom_produit);
		$stmt-> bindParam(':description_produit',$this->description_produit);
		$stmt-> execute();
	}

    // DELETE 

    function delete()
    {
        include '';
		$sql="DELETE FROM produit where nom_produit=:nom_produit";
        $stmt=$dbco->prepare($sql);
		$stmt-> bindParam(':nom_produit',$this->nom_produit);
		$stmt-> execute();
        
    }


}

?>