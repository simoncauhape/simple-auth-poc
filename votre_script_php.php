<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accès</title>
</head>
<body>
    <!-- Votre contenu HTML -->

    <script>
        // Faites une requête vers votre script PHP qui renvoie les données de session
        fetch('app/Vue/acces.php')
            .then(response => response.json()) // Analysez la réponse JSON
            .then(data => {
                console.log(data); // Affichez les données de session dans la console
            })
            .catch(error => {
                console.error('Erreur:', error); // Affichez les erreurs s'il y en a
            });
    </script>
</body>
</html>
