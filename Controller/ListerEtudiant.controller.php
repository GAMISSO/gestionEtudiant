<?php
require_once '../Model/ListerEtudiant.model.php';
$Etudiants=getEtudiants();


foreach ($Etudiants as $Etudiant) {
    echo "Nom: " . ($Etudiant['nom']) . "\n";
    echo "Prénom: " . ($Etudiant['prenom']) . "\n";
    echo "Email: " . ($Etudiant['email']) . "\n";
    echo "Matricule: " . ($Etudiant['matricule']) . "\n";
    echo "photo:'" . ($Etudiant['photo']) . "' \n";
    echo "************\n";
}



?>