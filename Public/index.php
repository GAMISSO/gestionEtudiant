<?php
// define("WEB_ROOT","http://localhost:80");
// $page=isset($_GET["page"])?$_GET["page"]:"dashboard";

// switch ($page) {
//     case "dashboard":
//         require_once "View/dashboard.view.php";
//         break;
//     case "enregistrerEtudiant":
//         require_once "View/enregistrerEtudiant.view.php";
//         break;
//     case "listerEtudiant":
//         require_once "View/listerEtudiant.view.php";
//         break;
//     default:
//         require_once "View/404.view.php";
//         break;
// }

require_once "../View/Menu.php";
$choix = afficherMenu();
while ($choix != 4) {
    switch ($choix) {
        case 1:
            echo "Enregistrement d'un étudiant\n";
            require_once "../View/EnregistreEtudiant.view.php";
            saisiNom();
            break;
        case 2:
            echo "Liste des étudiants\n";
            require_once "../View/ListerEtudiant.view.php";
            break;
        case 3:
            echo "Suppression d'un étudiant\n";
            require_once "../View/SupprimerEtudiant.view.php";
            break;
        default:
            echo "Choix invalide. Veuillez réessayer.\n";
    }
    $choix = afficherMenu();
}
?>