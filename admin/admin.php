<?php
session_start();

// Vérification de l'envoi du formulaire de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des informations du formulaire
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    // Connexion à la base de données
    $servername = "localhost";
    $usernameDB = "info";
    $passwordDB = "caribou";
    $database = "informapik";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $usernameDB, $passwordDB);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête pour vérifier les identifiants dans la base de données
        $query = "SELECT * FROM utilisateurs WHERE username = :username AND password = :password";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $hashedPassword = hash('sha256', $password); // Utilisation du hachage SHA-256 pour le mot de passe
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();
        $result = $stmt->fetchAll();

        if (count($result) == 1) {
            // Authentification réussie
            $_SESSION["admin"] = true;
            header("Location: dashboard.php"); // Rediriger vers la page d'administration
            exit();
        } else {
            // Identifiants invalides
            $errorMessage = "Identifiants incorrects. Veuillez réessayer.";
        }

        $stmt->closeCursor();
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace de connexion</title>
</head>
<body>
    <h1>Bonjour, veuillez vous connecter :</h1>

    <?php if (isset($errorMessage)) : ?>
        <p><?php echo $errorMessage; ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <input type="text" name="username" autocomplete="off" required>
        <br>
        <input type="password" name="password" autocomplete="off" required>
        <br>
        <input type="submit" name="valider">
    </form>
</body>
</html>