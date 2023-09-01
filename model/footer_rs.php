<?php

private class FooterRS
{
    private $id_rs;
    private $titre_rs;
    private $des_rs;
    private $logo_rs;
    private $lien_rs;
    
    // Constructeurs

    public function __construct($id_rs, $titre_rs, $des_rs, $logo_rs, $lien_rs)
    {
        $this->id_rs = $id_rs;
        $this->titre_rs = $titre_rs;
        $this->des_rs = $des_rs;
        $this->logo_rs = $logo_rs;
        $this->lien_rs = $lien_rs;
    }
    
    // Getters  
    public function getIdRs()
    {
        return $this->id_rs;
    }
    
    public function getTitreRs()
    {
        return $this->titre_rs;
    }
    
    public function getDesRs()
    {
        return $this->des_rs;
    }
    
    public function getLogoRs()
    {
        return $this->logo_rs;
    }
    
    public function getLienRs()
    {
        return $this->lien_rs;
    }
    
    // Setters
    public function setIdRs($id_rs)
    {
        $this->id_rs = $id_rs;
    }
    
    public function setTitreRs($titre_rs)
    {
        $this->titre_rs = $titre_rs;
    }
    
    public function setDesRs($des_rs)
    {
        $this->des_rs = $des_rs;
    }
    
    public function setLogoRs($logo_rs)
    {
        $this->logo_rs = $logo_rs;
    }
    
    public function setLienRs($lien_rs)
    {
        $this->lien_rs = $lien_rs;
    }
    
    // CRUD
    
    // CREATE
    public function create()
    {
        include 'connexion.php';
           $sql="INSERT INTO footer_rs (titre_rs, des_rs, logo_rs, lien_rs) VALUES (:titre_rs, :des_rs, :logo_rs, :lien_rs)";
           $stmt=$dbco->prepare($sql);
           $stmt-> bindParam(':titre_rs',$this->titre_rs);
           $stmt-> bindParam(':des_rs',$this->des_rs);
           $stmt-> bindParam(':logo_rs',$this-> logo_rs);
           $stmt-> bindParam(':lien_rs',$this->lien_rs);
           $stmt-> execute();
    }
    
    // RETRIEVE
    public function retrieve($id_rs)
    {
        include 'connexion.php';
        $req = "SELECT * from footer_rs where id_rs=:id_rs";
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
           $sql="UPDATE footer_rs set titre_description=:titre_description, des_rs=:des_rs, logo_rs=:logo_rs, lien_rs=lien_rs where id_rs=:id_rs";
           $stmt=$dbco->prepare($sql);
           $stmt->bindParam('id_rs',$this->id_rs);
           $stmt-> bindParam(':des_rs',$this->des_rs);
           $stmt-> bindParam(':logo_rs',$this->logo_rs);
           $stmt-> bindParam(':lien_rs',$this->lien_rs);
           $stmt-> execute();
    }
    
    // DELETE
    public function delete()
    {
        include 'connexion.php';
        $sql="DELETE * FROM footer_rs where id_rs=:id_rs";
        $stmt=$dbco->prepare($sql);
        $stmt-> bindParam(':id_rs',$this->id_rs);
        $stmt-> execute();
    }
}
