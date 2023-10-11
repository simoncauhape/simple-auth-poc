<?php
session_start();
var_dump($_SESSION);
// Avant d'accéder aux informations de l'utilisateur
if (isset($_SESSION['authentified']) && $_SESSION['authentified'] === true) {
    $user_data = unserialize($_SESSION['user_data']);
    $user_id = $user_data['user_id'];
    $user_group = $user_data['user_group'];
    
    // Maintenant, vous avez accès aux informations de l'utilisateur ($user_id et $user_group)
} else {
    // L'utilisateur n'est pas authentifié
    // Gérer la redirection ou l'affichage d'un message d'erreur
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acces</title>
</head>
<body>
<?php
    $host = 'localhost'; 
    $dbname = 'users_management'; 
    $username = 'root'; 
    $password = ''; 

    try {
        
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
        // Configurer PDO pour lever des exceptions en cas d'erreur SQL
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
        exit();
    }
    ?>

    <form method="post" action="../Controller/createGroup.php">
        <label for="nom">Nom du Groupe :</label>
        <input type="text" id="nom" name="nom" required><br>

        <button type="submit">Créer Groupe</button>
    </form>

</body>
</html>
