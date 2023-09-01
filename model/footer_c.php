<?php

private class FooterC{
    private $id_c;
    private $titre_c;
    private $logo_c;
    private $lien_c;
    private $texte_c;
    
    // Constructeurs

    public function __construct($id_c, $titre_c, $logo_c, $lien_c, $texte_c)
    {
        $this->id_c = $id_c;
        $this->titre_c = $titre_c;
        $this->logo_c = $logo_c;
        $this->lien_c = $lien_c;
        $this->texte_c = $texte_c;
    }
    
    // Getters

    public function getIdC()
    {
        return $this->id_c;
    }
    
    public function getTitreC()
    {
        return $this->titre_c;
    }
    
    public function getLogoC()
    {
        return $this->logo_c;
    }
    
    public function getLienC()
    {
        return $this->lien_c;
    }
    
    public function getTexteC()
    {
        return $this->texte_c;
    }
    
    // Setters

    public function setIdC($id_c)
    {
        $this->id_c = $id_c;
    }
    
    public function setTitreC($titre_c)
    {
        $this->titre_c = $titre_c;
    }
    
    public function setLogoC($logo_c)
    {
        $this->logo_c = $logo_c;
    }
    
    public function setLienC($lien_c)
    {
        $this->lien_c = $lien_c;
    }
    
    public function setTexteC($texte_c)
    {
        $this->texte_c = $texte_c;
    }
    
    // CRUD
    
     // CREATE
    public function create()
    {
        include 'connexion.php';
           $sql="INSERT INTO footer_c (titre_c, logo_c, lien_c, texte_c) VALUES (:titre_c, :logo_c, :lien_c, :texte_c)";
           $stmt=$dbco->prepare($sql);
           $stmt-> bindParam(':titre_c',$this->titre_c);
           $stmt-> bindParam(':logo_c',$this->logo_c);
           $stmt-> bindParam(':lien_c',$this->lien_c);
           $stmt-> bindParam(':texte_c',$this->texte_c);
           $stmt-> execute();
    }
    
     // RETRIEVE
    public static function getById($id_c)
    {
        include 'connexion.php';
        $req = "SELECT * from footer_c where id_c=:id_c";
        $stmt=$dbco->prepare($req);
        $stmt->bindParam(':id_rs',$this->id_rs);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        print_r($result);
    }
    
    // UPDATE
    public function update()
    {
        include 'connexion.php';
        $sql="UPDATE footer_c set titre_c=:titre_c, logo_c=:logo_c, lien_c=:lien_c, texte_c=texte_c where id_c=:id_c";
        $stmt=$dbco->prepare($sql);
        $stmt->bindParam('id_c',$this->id_c);
        $stmt-> bindParam(':titre_c',$this-> titre_c);
        $stmt-> bindParam(':logo_c',$this->logo_c);
        $stmt-> bindParam(':lien_c',$this->lien_c);
        $stmt-> bindParam(':texte_c',$this->texte_c);
        $stmt-> execute();
    }
    
    // DELETE
    public function delete()
    {
        include 'connexion.php';
        $sql="DELETE * FROM footer_c where id_c=:id_c";
        $stmt=$dbco->prepare($sql);
        $stmt-> bindParam(':id_c',$this->id_c);
        $stmt-> execute();
    }

}