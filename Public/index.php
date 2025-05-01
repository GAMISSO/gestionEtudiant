<?php
define("WEB_ROOT","http://localhost:80");
$page=isset($_GET["page"])?$_GET["page"]:"dashboard";

switch ($page) {
    case "dashboard":
        require_once "../Controller/ListerEtudiant.controller.php";
        break;
}

// require_once "../View/Menu.php";
// $choix = afficherMenu();
// while ($choix != 4) {
//     switch ($choix) {
//         case 1:
//             echo "Enregistrement d'un étudiant\n";
//             require_once "../View/EnregistreEtudiant.view.php";
//             saisiNom();
//             break;
//         case 2:
//             echo "Liste des étudiants\n";
//             require_once "../View/ListerEtudiant.view.php";
//             break;
//         case 3:
//             echo "Suppression d'un étudiant\n";
//             require_once "../View/SupprimerEtudiant.view.php";
//             break;
//         default:
//             echo "Choix invalide. Veuillez réessayer.\n";
//     }
//     $choix = afficherMenu();
// }
?>