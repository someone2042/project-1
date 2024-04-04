<?php
// Démarrage de la session
session_start();

// Récupération des données de la session
$nom = $_SESSION['nom'];
$filiere = $_SESSION['filiere'];
$ville = $_SESSION['ville'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Affichage des données</title>
</head>

<body>
    <h1>Vos informations</h1>
    <p>Nom: <?php echo $nom ?></p>
    <p>Filière: <?php echo $filiere ?></p>
    <p>Ville: <?php echo $ville ?></p>
    <a href="page3.php">Lien vers la page 3</a>
</body>

</html>