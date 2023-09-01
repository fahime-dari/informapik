<?php

$username= "info";
$password="caribou";

    // Connexion à la BDD 
    $dbco = new PDO("mysql:host=localhost;dbname=informapik",$username,$password);

    // Validation du formulaire
    if (isset($_POST['username']) &&  isset($_POST['password'])) {
       $username=$_POST['username'];
       $password=$_POST['password'];

       $query = "SELECT * FROM utilisateurs WHERE username = :username";
       $stmt = $bdd->prepare($query);
       $stmt->bindParam(':username', $username);
       $stmt->execute();
       $user = $stmt->fetch(PDO::FETCH_ASSOC);

       if ($user && password_verify($password, $user['password'])) {
        // Identifiants valides, l'utilisateur est connecté
        $loggedUser = [
            'username' => $user['username'],
        ];
        echo "Bonjour " . $loggedUser['username'] . " et bienvenue sur le site !";
    } else {
        $errorMessage = "Identifiants invalides";
    }
    }
    
    ?>

   <!-- Formulaire HTML  -->
 
    <form action="index.html" method="post">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit">Envoyer</button>
    </form>
   
