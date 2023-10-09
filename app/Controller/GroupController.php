<?php
// GroupController.php

class GroupController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function createGroup($nom, $permissionId) {
        // Préparer la requête SQL
        $sql = "INSERT INTO groups (name, permission_id) VALUES (:nom, :permission)";
        $stmt = $this->pdo->prepare($sql);

        // Liage des paramètres
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':permission', $permissionId, PDO::PARAM_INT);

        // Exécuter la requête
        try {
            $stmt->execute();
            return true; // La création du groupe est réussie
        } catch (PDOException $e) {
            return "Erreur lors de la création du groupe : " . $e->getMessage();
        }
    }
}
?>
