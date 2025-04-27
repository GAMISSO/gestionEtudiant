<?php
require_once '../Model/enregistreEtudiant.model.php';
// $name = $_POST['name'] ?? '';
// $email = $_POST['email'] ?? '';
// $prenom = $_POST['prenom'] ?? '';
// $photo = $_FILES['photo'] ?? null;


//mode console//
function saisiOblig($sms){
    do {
        echo $sms;
        $s=readline();
    } while ($s == " ");
    return $s;
}



?>