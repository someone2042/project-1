<?php
// Démarrage de la session
session_start();

// Récupération des données de la session
$nom = $_POST['nom'];
$filiere = $_POST['filiere'];
$ville = $_POST['ville'];
$code_postal = $_POST['code_postal'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Affichage des données</title>
</head>

<body>
    <td>Vos informations</td>
    <table border="1">
        <tr>
            <th>nom</th>
            <th>adress</th>
            <th>ville</th>
            <th>code postal</th>
        </tr>
        <tr>
            <td><?php echo $nom ?></td>
            <td><?php echo $filiere ?></td>
            <td><?php echo $ville ?></td>
            <td><?php echo $code_postal ?></td>
        </tr>
    </table>
    <a href="index.php">Lien vers la page 3</a>
</body>

</html>