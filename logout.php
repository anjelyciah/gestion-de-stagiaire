<?php
// Démarrez la session (si elle n'est pas déjà démarrée)
session_start();

// Détruisez toutes les variables de session
$_SESSION = array();

// Détruisez la session
session_destroy();


// Redirigez vers la page de connexion (ou une
header("Location: login.php");
exit;