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
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer les données du formulaire
        $userId = $_POST['utilisateur'];
        $groupId = $_POST['groupe'];

        // Insérer l'association utilisateur-groupe dans la table users_groups
        $sql = "INSERT INTO users_groups (id_user, id_group) VALUES (:userId, :groupId)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->bindParam(':groupId', $groupId, PDO::PARAM_INT);

        try {
            $stmt->execute();
            // Rediriger l'utilisateur vers une page de confirmation ou une autre page appropriée
            header('Location: ../Vue/linkUser.php');
            exit();
        } catch (PDOException $e) {
            // Gérer les erreurs d'insertion
            echo "Erreur lors de l'ajout de l'utilisateur au groupe : " . $e->getMessage();
        }
    }
?>
