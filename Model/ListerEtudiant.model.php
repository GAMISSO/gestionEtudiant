<?php

function getEtudiants() {
    // Chemin vers le fichier JSON
    $file = '../database/users.json';

    $Etudiants = [];
    // Lire le contenu du fichier JSON
    $data = json_decode(file_get_contents($file), true);
    foreach($data as $key => $value){
        if (strpos($value['matricule'], 'ETU') !== false) {
            $Etudiants[] = $value;
        }
        
    }

    return $Etudiants;
}

?>