<?php
require_once '../Controller/enregistreEtudiant.controller.php';

function saisiNom(){
    $nom=saisiOblig("Entrez votre nom : ");
    $prenom=saisiOblig("Entrez votre prenom : ");
    $email=saisiOblig("Entrez votre email : ");
    $photo=saisiOblig("Entrez le nom de votre photo : ");
    $Etudiant = createEtudiant($nom, $prenom, $email, $photo);
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enregistrement d'un étudiant</h1>
</body>
</html>
