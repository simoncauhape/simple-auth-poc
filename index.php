<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Application</title>
    <style>
        /* Styles CSS pour la navbar (à placer dans un fichier CSS externe de préférence) */
        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <a href="index.php">Accueil</a>
        <a href="app/Vue/user.php">Inscription</a>
        <a href="app/Vue/connexion.php">Connexion</a>
        <a href="app/Vue/acces.php">Acces</a>
        <a href="app/Vue/linkUser.php">Link User and Group</a>
        <!-- Ajoutez d'autres liens de navigation ici selon les besoins de votre application -->
    </div>

    <!-- Le reste du contenu de votre page index.php irait ici -->

</body>

</html>
