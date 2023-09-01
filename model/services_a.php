<?php  

// Création de la classe Services_a

// Attributs 

class services_a{
    private $id_a;
    private $titre_a;
    private $texte_a;


// Constructeurs 

function __construct($id, $ti, $txt){
    $this->id_a=$n;
    $this->titre_a=$ti;
    $this->texte_a=$txt;
}

// Getters

public function getId_a()
    {
        return $this->id_a;
    }

    public function Titre_a()
    {
        return $this->titre_a;
    }

    public function texte_a()
    {
        return $this->texte_a;
    }

 // Setters
   
   public function setId_a($id)
   {
       $this->nom_produit = $n;
   }


   public function seTitre_a($ti)
   {
       $this->titre_a = $ti;
   }

   public function seTexte_a($txt)
   {
       $this->texte_a = $txt;
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