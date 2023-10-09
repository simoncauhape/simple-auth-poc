<?php

require_once __DIR__ . '/GroupController.php';
require_once '../Vue/acces.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer le nom du groupe depuis le formulaire
    $nom = $_POST['nom'];

    // Insérer le groupe dans la table groups
    $sql = "INSERT INTO `groups` (`name`) VALUES (:nom)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);

    try {
        $stmt->execute();
        echo "Le groupe a été créé avec succès.";
    } catch (PDOException $e) {
        echo "Erreur lors de la création du groupe : " . $e->getMessage();
    }
}
?>
