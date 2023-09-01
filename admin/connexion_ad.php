<?php
// Informations de connexion à la base de données
$host = "localhost";
$dbName = "informapik";
$username = "info";
$password = "caribou";

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $username, $password);

    // Configuration des attributs de PDO pour gérer les erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupération des champs rentrés dans le formulaire
    $usernameInput = $_POST["pseudo"];
    $passwordInput = $_POST["mdp"];

    // Requête pour vérifier les champs dans la table "utilisateurs"
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE username = :pseudo AND password = :mdp");
    $stmt->bindParam(":pseudo", $usernameInput);
    $stmt->bindParam(":mdp", $passwordInput);
    $stmt->execute();

    // Vérification du résultat de la requête
    if ($stmt->rowCount() > 0) {
        echo 'Bienvenue !';
        // L'utilisateur existe dans la table
        // Faire les actions nécessaires pour l'authentification réussie
    } else {
        echo'Identifiants incorrects.';
        // L'utilisateur n'existe pas dans la table ou les identifiants sont invalides
        // Gérer l'erreur ou afficher un message d'erreur approprié
    }
} catch (PDOException $e) {
    // Gestion des erreurs de connexion à la base de données
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>