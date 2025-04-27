<?php
    function afficherMenu() {
    echo "========================== MENU ==========================\n";
    echo "1- Enregistrer un étudiant\n";
    echo "2- Lister les étudiants\n";
    echo "3- Supprimer un étudiant\n";
    echo "4- Quitter\n";
    echo "===========================================================\n";
    $choix = readline("Choisissez une option: ");
    return $choix;
    }
?>