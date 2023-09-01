<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Validation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
  </head>
  <body>
    <?php
     try 
     {
     
       

       $username= "info";
       $password="caribou";
       $dbname="informapik";

      // Chaîne de connexion 

       $dbco = new PDO("mysql:host=localhost;dbname=informapik",$username,$password);

      //  Mode d'erreur sur Exception 

       $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // Définir les variables

       $nom=$_POST["nom"];
       $prenom=$_POST["prenom"];
       $entreprise=$_POST["entreprise"];
       $email=$_POST["email"];
       $numero=$_POST["numero"];
       $message=$_POST["message"];


      // Ligne de commande MySQL 

       $sql="INSERT INTO contact(message_id, nom, prenom, entreprise, email, numero, message_util) VALUES (".$nom.",".$prenom.",".$entreprise.",".$email.",".$numero.",".$message.")";
       $stmt=$dbco->prepare($sql);
      

       echo "Merci pour votre message !";
     }
     catch(PDOexception $e)
     {
        echo "Erreur :".$e->getMessage();
     }

     exit;

    ?>
  <p>Vous validez ?</p>
  </body>
</html>
  