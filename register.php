<?php
// Inclure le fichier de connexion à la base de données
include "dbconnect.php";

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $mdp = $_POST["mdp"];
    $mdpconfirm = $_POST["mdpconfirm"];

    // Vérifier si les mots de passe correspondent
    if ($mdp === $mdpconfirm) {
        

        // Préparer la requête SQL d'insertion
        $sql = "INSERT INTO user (nom, mdp) VALUES ('$nom', '$mdp')";

        // Exécuter la requête
        if ($conn->query($sql) === TRUE) {
            echo "Inscription réussie!";
            header("Location: login.php");
        } else {
            echo "Erreur lors de l'inscription: " . $conn->error;
        }
    } else {
        echo "Les mots de passe ne correspondent pas.";
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>



<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"><title>Register - Brand</title><link rel="icon" type="image/png" sizes="180x180" href="./assets/img/menu.png"><link rel="icon" type="image/png" sizes="180x180" href="/assets/img/menu.png"><link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css"><link rel="manifest" href="/manifest.json"><link rel="stylesheet" href="/assets/css/styles.min.css"></head><body class="bg-gradient-primary"><div class="container"><div class="card shadow-lg o-hidden border-0 my-5"><div class="card-body p-0"><div class="row"><div class="col-lg-5 d-none d-lg-flex"><div class="flex-grow-1 bg-register-image" style="background-image: url(./assets/img/dogs/sary.jpg);--bs-warning: #ef0707;--bs-warning-rgb: 239,7,7;"></div></div><div class="col-lg-7"><div class="p-5"><div class="text-center"><h4 class="text-dark mb-4">Creer votre Compte</h4></div><form action="register.php" method="post" class="user"><div class="row mb-3"><div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Votre Nom" name="nom"></div></div><div class="mb-3"></div><div class="row mb-3"><div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Mot de Passe" name="mdp"><input class="form-control form-control-user" type="password" id="examplePasswordInput-1" placeholder="Confirmez votre mot de passe" name="mdpconfirm" style="padding-bottom: 15px;margin-top: 17px;"></div></div><hr><button class="btn btn-primary" type="submit" style="margin-left: 55px;">Enregistrer</button><hr></form><div class="text-center"></div><div class="text-center"><a class="small" href="login.php">Avez vous deja une comptet? Se connecter!</a></div></div></div></div></div></div></div><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script><script src="./assets/js/script.min.js"></script></body></html>