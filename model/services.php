<?php  

// Création de la classe Services

// Attributs 

class services{
    private $id_services;
    private $titre_services;
    private $texte_services;


// Constructeurs 

function __construct($id_s, $t_s, $tx_s){
    $this->id_services=$id_s;
    $this->titre_services=$t_s;
    $this->texte_services=$tx_s;
}

// Getters

public function getId_services()
    {
        return $this->id_services;
    }

    public function getTitre_services()
    {
        return $this->titre_services;
    }

    public function getTexte_services()
    {
        return $this->texte_services;
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