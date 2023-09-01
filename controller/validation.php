
<!DOCTYPE html>
<html>
    <FORM action="resultat.php" METHOD="POST">
        <?php
        session_start();
       
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           $nom=$_POST["nom"];
           $prenom=$_POST["prenom"];
           $entreprise=$_POST["entreprise"];
           $mail=$_POST["mail"];
           $numero=$_POST["numero"];
           $message=$_POST["message"];

           $_SESSION["nom"]=$_POST["nom"];
           $_SESSION["prenom"]=$_POST["prenom"];
           $_SESSION["entreprise"]=$_POST["entreprise"];
           $_SESSION["mail"]=$_POST["mail"];
           $_SESSION["numero"]=$_POST["numero"];
           $_SESSION["message"]=$_POST["message"];

    

       
           echo '<h2>Données confirmées:</h2>';
           echo '<p><strong>Nom:</strong> ' . $nom . '</p>';
           echo '<p><strong>Prénom:</strong> ' . $prenom . '</p>';
           echo '<p><strong>Entreprise:</strong> ' . $entreprise . '</p>';
           echo '<p><strong>E-mail:</strong> ' . $mail . '</p>';
           echo '<p><strong>Numéro:</strong> ' .  $numero . '</p>';
           echo '<p><strong>Message:</strong> ' . $message . '</p>';
            
        }


        // RegEx Nom 
        if (!preg_match('/^[A-Za-zÀ-ÖØ-öø-ÿ]+(?:[-\'\s][A-Za-zÀ-ÖØ-öø-ÿ]+)*$/', $nom)) {
            $nom="Nom incorrect";
        }

        // RegEx Prénom 
        if (preg_match('/^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/', $prenom)) {
            echo " ";
        }else{
            echo "Prénom incorrect. ";
        }

        // RegEx Entreprise
        if (preg_match('/^[A-Za-zÀ-ÖØ-öø-ÿ]+(?:[-\'\s][A-Za-zÀ-ÖØ-öø-ÿ]+)*$/', $nom)) {
            echo " ";
        }else{
            echo "Nom d'entreprise incorrect. ";
        }

        // RegEx E-mail 
        if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $mail)) {
            echo " ";
        }else{
            echo "E-mail incorrect. ";
        }

        // RegEx Numéro  
        if (preg_match('/^\+(?:[0-9] ?){6,14}[0-9]$/', $numero)) {
            echo " ";
        }else{
            echo "Numéro incorrect. ";
        }

        // RegEx Message 
        if (preg_match('/^[\s\S]*$/', $message)) {
            echo " ";
        }else{
            echo "Message incorrect. ";
        }
        
        
        ?>
        <input type="submit" value="Confirmer ?" id="confirmer"> 
    </form>
    
    <FORM action="saisie_contact.php" METHOD="POST">
        <input type="submit" value="retour ?" id="retour"> 
    </form> 
</html>