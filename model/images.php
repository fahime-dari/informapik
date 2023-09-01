<?php
// Créer la classe Images

private class Image{
    private $id_im;
    private $lien_im;
    
    // Constructeurs

    public function __construct($id_im, $l_im)
    {
        $this->id_im = $id_im;
        $this->lien_im = $l_im;
    }
    
    // Getters

    public function getIdIm()
    {
        return $this->id_im;
    }
    
    public function getLienIm()
    {
        return $this->$l_im;
    }
    
    // Setters
    
    public function setIdIm($id_im)
    {
        $this->id_im = $id_im;
    }
    
    public function setLienIm($l_im)
    {
        $this->lien_im = $l_im;
    }
    
    // CRUD
    
    // Create
    public function create()
    {
        include 'connexion.php';
        $sql="INSERT INTO images (lien_im) VALUES (:lien_im)";
        $stmt=$dbco->prepare($sql);
        $stmt-> bindParam(':lien_im',$this->lien_im);
        $stmt-> execute();
    }
    
     // RETRIEVE 
    public function retrieve($id_im)
    {
        
        include 'connexion.php';
        $req = "SELECT * from images where id_im=:id_im";
        $stmt=$dbco->prepare($req);
        $stmt->bindParam(':id_im',$this->id_im);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        print_r($result);
    }
    
    // UPDATE
    public function update()
    {
        include 'connexion.php';
           $sql="UPDATE images set lien_im=:lien_im where id_im=:id_im";
           $stmt=$dbco->prepare($sql);
           $stmt->bindParam('id_im',$this->id_im);
           $stmt-> bindParam(':lien_im',$this->lien_im);
           $stmt-> execute();
    }
    
    // DELETE 
    public function delete()
    {
        include 'connexion.php';
        $sql="DELETE * FROM informapik where id_im=:id_im";
        $stmt=$dbco->prepare($sql);
        $stmt-> bindParam(':id_im',$this->id_im);
        $stmt-> execute();
    }
}
