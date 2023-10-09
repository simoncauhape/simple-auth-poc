# simple-auth-poc

Ce projet permet de s'initier à la gestion des utilisateurs en PHP. 

Les passwords sont hashés selon l'algorithme bcrypt et stockés en DB dans la table users. 

Lors de la connexion d'un utilisateur, on créé $_SESSION['authentified] = true ce qui nous permettra d'éventuellement limiter l'accès à certaines pages de l'application en fonction des "droits" de l'utilisateur.

A terme les droits pourront être gérés de façon plus précise par l'ajout de groupes (ex : admins, editeurs).

Il pourrait également être intéressant de stocker l'identifiant de session dans un cookie.