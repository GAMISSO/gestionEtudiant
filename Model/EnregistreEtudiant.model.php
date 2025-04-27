<?php

function createEtudiant($nom, $prenom, $email, $photo) {
    // Chemin vers le fichier JSON
    $file = '../database/users.json';

    // Lire le contenu du fichier JSON
    $data = json_decode(file_get_contents($file), true);

    // Simuler une donnée venant d’un formulaire
    $newEtudiant = [
        'id' => time(), // un id unique simple
        'matricule' => 'ETU' . time(), // un matricule unique simple
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'photo'=> 'photo.png', // Remplacez par le nom de la photo téléchargée
    ];

    // Ajouter le nouvel étudiant au tableau
    $data[] = $newEtudiant;

    // Écrire le tableau mis à jour dans le fichier JSON
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
}





?>