<?php

    // Création de la classe Contact 

    // Attributs 

    class contact{
        private $nom_c;
        private $prenom_c;
        private $entreprise_c;
        private $email_c;
        private $numero_c;

    // Constructeurs 

     function __construct($n,$p,$en,$em,$num){
        $this->nom_c = $n;
        $this->prenom_c = $p;
        $this->entreprise_c = $en;
        $this->email_c = $em;
        $this->numero_c = $num;


    }


    
    // Getters

    public function getNom_c()
    {
        return $this->nom_c;
    }

    public function getPrenom_c()
    {
        return $this->prenom_c;
    }

    public function getEntreprise_c() 
    {
        return $this->entreprise_c;
    }

    public function getEmail_c()
    {
        return $this->email_c;
    }

    public function getNumero_c()
    {
        return $this->numero_c;
    }

    // Setters

    public function setNom_c($n)
    {
        $this->nom_c = $n;
    }


    public function setPrenom_c($p)
    {
        $this->prenom_c = $p;
    }


    public function setEntreprise_c($en)
    {
        $this->entreprise_c = $en;
    }


    public function setEmail_c($em)
    {
        $this->email_c = $em;
    }


    public function setNumero_c($num)
    {
        $this->numero_c = $num;
    }



    // Méthodes CRUD 

    // CREATE
    public function create()
	{
		include 'connexion.php';
		$sql="INSERT INTO contact (nom_c, prenom_c, entreprise_c, mail_c, numero_c) VALUES (:nom_c, :prenom_c, :entreprise_c, :email_c, :numero_c)";
        $stmt=$dbco->prepare($sql);
		$stmt-> bindParam(':nom_c',$this->nom_c);
		$stmt-> bindParam(':prenom_c',$this->prenom_c);
		$stmt-> bindParam(':entreprise_c',$this->entreprise_c);
		$stmt-> bindParam(':email_c',$this->email_c);
		$stmt-> bindParam(':numero_c',$this->numero_c);
		$stmt-> execute();
	}

    //RETRIEVE 
    public function retrieve($nom_c)
    {
        include 'connexion.php';
        $req = "SELECT * from contact where nom_c=:nom_c";
        $stmt=$dbco->prepare($req);
        $stmt->bindParam(':nom_c',$this->nom_c);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        print_r($result);
    }

    // UPDATE
    function update()
    {
		include 'connexion.php';
		$sql="UPDATE contact set prenom_c=:prenom_c, entreprise_c=:entreprise_c, email_c=:email_c, numero_c=:numero_c where nom_c=:nom_c";
        $stmt=$dbco->prepare($sql);
		$stmt-> bindParam(':nom_c',$this->nom_c);
		$stmt-> bindParam(':prenom_c',$this->prenom_c);
		$stmt-> bindParam(':entreprise_c',$this->entreprise_c);
		$stmt-> bindParam(':email_c',$this->email_c);
		$stmt-> bindParam(':numero_c',$this->numero_c);
		$stmt-> execute();
	}

    // DELETE 
    function delete()
    {
        include 'connexion.php';
		$sql="DELETE FROM contact where nom_c=:nom_c";
        $stmt=$dbco->prepare($sql);
		$stmt-> bindParam(':nom_c',$this->nom_c);
		$stmt-> execute();
    }

    }
?>