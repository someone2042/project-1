<?php
// Démarrage de la session
session_start();

// Récupération des données du formulaire
$nom = $_POST['nom'];
$filiere = $_POST['filiere'];
$ville = $_POST['ville'];

// Stockage des données dans la session
$_SESSION['nom'] = $nom;
$_SESSION['filiere'] = $filiere;
$_SESSION['ville'] = $ville;

// Redirection vers la page suivante
header('Location: page2.php');
