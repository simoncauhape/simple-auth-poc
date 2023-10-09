<?php
session_start();

// Vérifiez si l'utilisateur est authentifié et a le groupe d'administrateurs (groupe ID = 1)
if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_group']) || $_SESSION['user_group'] !== 1) {
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'acces refuse'));
    exit();
}

header('Content-Type: application/json');
echo json_encode($_SESSION);

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
    $password = '1234'; 

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
