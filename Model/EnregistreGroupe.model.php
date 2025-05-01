<?php

function createGroupe($nom, $description, $dateCreation, $photo) {
    // Chemin vers le fichier JSON
    $file = '../database/groupe.json';

    // Lire le contenu du fichier JSON
    $data = json_decode(file_get_contents($file), true);

    // Créer un nouvel étudiant
    $groupe = [
        'id' => time(), // un id unique simple
        'nom' => $nom,
        'description' => $description,
        'dateCreation' => $dateCreation, // format YYYY-MM-DD
    ];

    // Ajouter le nouvel étudiant au tableau
    $data[] = $groupe;

    // Écrire le tableau mis à jour dans le fichier JSON
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

    return $groupe;
}
function getGroupes() {
    // Chemin vers le fichier JSON
    $file = '../database/groupe.json';

    // Lire le contenu du fichier JSON
    $data = json_decode(file_get_contents($file), true);

    $groupes = [];
    foreach($data as $key => $value){
        if (strpos($value['nom'], 'GROUPE') !== false) {
            $groupes[] = $value;
        }
        
    }

    return $groupes;
}
function deleteGroupe($matricule) {
    // Chemin vers le fichier JSON
    $file = '../database/groupe.json';

    // Lire le contenu du fichier JSON
    $data = json_decode(file_get_contents($file), true);

    // Filtrer les données pour supprimer l'étudiant avec le matricule donné
    $data = array_filter($data, function($etudiant) use ($matricule) {
        return $etudiant['id'] !== $matricule;
    });

    // Réindexer le tableau
    $data = array_values($data);

    // Écrire le tableau mis à jour dans le fichier JSON
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
}

?>