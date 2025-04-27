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
