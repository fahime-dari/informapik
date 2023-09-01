
<?php

        include ('/code/model/contact.php');
        include ('/code/model/message.php');
        session_start();
        $contact1= new contact($_SESSION["nom"], $_SESSION["prenom"], $_SESSION["entreprise"], $_SESSION["mail"], $_SESSION["numero"]); 
        $message1= new message($_SESSION["message"]);
        $contact1->create();
        $message1->create();
        

        $heure=date("H:i:s");   
        $message = "Il est actuellement ".$heure.".";
        echo "La création a bien été effectuée à ".$heure.".";


?>







