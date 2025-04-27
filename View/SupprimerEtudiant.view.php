<?php
require_once "../Controller/SupprimerEtudiant.controller.php";
$nom=readline("Entrez le nom de l'étudiant à supprimer : ");
$prenom=readline("Entrez le prenom de l'étudiant à supprimer : ");
$id=getIdForEtudiant($nom,$prenom);
deleteEtudiant($id);
?>