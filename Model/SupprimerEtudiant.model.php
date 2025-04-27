<?php
    function deleteEtudiant($id) {
        // Suppression de l'étudiant
        $file = '../database/users.json';
        $data = json_decode(file_get_contents($file), true);

        // Supprimer l'étudiant de la liste
        foreach ($data as $key => $etudiant) {
            if ($etudiant['id'] == $id) {
                unset($data[$key]);//effacer l'étudiant de la liste data l'étudiant ===> $key
                break;
            }
        }

        // Enregistrer les modifications dans le fichier JSON
        file_put_contents($file, json_encode(array_values($data)));
    }

    function getIdForEtudiant($nom, $prenom) {
        // Récupération de l'ID de l'étudiant
        $file = '../database/users.json';

        // Lire le contenu du fichier JSON
        $data = json_decode(file_get_contents($file), true);
        foreach($data as $key => $value){
            if (strpos($value['nom'], $nom) !== false && strpos($value['prenom'], $prenom) !== false) {
                return $value['id'];
            }
            
        }
    }
    // function getEtudiantById($id) {
    //     // Récupération de l'étudiant par ID
    //     $query = "SELECT * FROM etudiants WHERE id = :id";
    //     $stmt = $this->db->prepare($query);
    //     $stmt->bindParam(':id', $id);
    //     $stmt->execute();
        
    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }

?>