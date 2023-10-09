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


// Récupérer les utilisateurs depuis la base de données
$sqlUsers = "SELECT id, login FROM users";
$stmtUsers = $pdo->prepare($sqlUsers);
$stmtUsers->execute();
$users = $stmtUsers->fetchAll(PDO::FETCH_ASSOC);

// Récupérer les groupes depuis la base de données
$sqlGroups = "SELECT id, name FROM `groups`"; // Utilisation de backticks autour du nom de la table
$stmtGroups = $pdo->prepare($sqlGroups);
$stmtGroups->execute();
$groups = $stmtGroups->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Utilisateur au Groupe</title>
</head>

<body>
    <h1>Ajouter Utilisateur au Groupe</h1>

    <form method="post" action="../Controller/LinkUserToGroup.php">
        <label for="utilisateur">Utilisateur :</label>
        <select id="utilisateur" name="utilisateur" required>
            <?php
            // Générer les options du menu déroulant pour les utilisateurs
            foreach ($users as $user) {
                echo '<option value="' . $user['id'] . '">' . $user['login'] . '</option>';
            }
            ?>
        </select><br>

        <label for="groupe">Groupe :</label>
        <select id="groupe" name="groupe" required>
            <?php
            foreach ($groups as $group) {
                echo '<option value="' . $group['id'] . '">' . $group['name'] . '</option>';
            }
            ?>
        </select><br>

        <button type="submit">Ajouter Utilisateur au Groupe</button>
    </form>
</body>

</html>
