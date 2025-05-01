<?php
require_once '../Model/ListerEtudiant.model.php';
require_once '../Model/SupprimerEtudiant.model.php';
require_once '../Model/enregistreEtudiant.model.php';
$Etudiants=getEtudiants();
require_once '../View/dashboard.view.php';
function saisiOblig($sms){
    do {
        echo $sms;
        $s=readline();
    } while ($s == " ");
    return $s;
}


// foreach ($Etudiants as $Etudiant) {
//     echo "Nom: " . ($Etudiant['nom']) . "\n";
//     echo "Prénom: " . ($Etudiant['prenom']) . "\n";
//     echo "Email: " . ($Etudiant['email']) . "\n";
//     echo "Matricule: " . ($Etudiant['matricule']) . "\n";
//     echo "photo:'" . ($Etudiant['photo']) . "' \n";
//     echo "************\n";
// }



?>