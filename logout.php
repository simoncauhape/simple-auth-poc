<?php
session_start();
$_SESSION['authentified'] = false;
header('location: connexion.php');