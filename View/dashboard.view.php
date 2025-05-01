<?php
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestion Scolaire</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

<header>
  <h1>Gestion Scolaire</h1>
</header>

<nav>
    <button class="tab active" data-target="enregistrer">Enregistrer Étudiant</button>
    <button class="tab" data-target="liste-etudiants">Liste Étudiants</button>
    <button class="tab" data-target="liste-groupes">Liste Groupes</button>
</nav>

<main>
  <!-- Enregistrer un étudiant -->
  <section id="enregistrer" class="section active">
    <div class="card">
      <h2>Ajouter un étudiant</h2>
      <form action="traitement.php" method="POST" enctype="multipart/form-data">
        <input type="text" placeholder="Nom" id="nom" name="nom" required>
        <input type="text" placeholder="Prénom" id="prenom" name="prenom" required>
        <input type="email" placeholder="Email" id="email" name="email" required>
        <input type="file" accept="image/*" id="photo" name="photo" required>
        <button type="submit" class="submit">Ajouter Étudiant</button>
      </form>
      <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $email = $_POST["email"];
                $photo = $_FILES["photo"]; // $_FILES est utilisé pour les fichiers

                if ($nom == "" || $prenom == "" || $email == "" || $photo == "") {
                    echo "<p class='error'>Tous les champs sont obligatoires.</p>";
                } else {
                    // Appel de la fonction pour enregistrer l'étudiant
                    createEtudiant($nom, $prenom, $email, $photo);
                }
            }
        ?>
      
    </div>
  </section>

  <!-- Liste des étudiants -->
  <section id="liste-etudiants" class="section">
    <div class="card">
        <h2>Liste des Étudiants</h2>
        <table class="tableau">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>email</th>
                    <th>matricule</th>
                </tr>
            </thead>
            <?php foreach ($Etudiants as $Etudiant) :?>
            <tbody>
                <tr>
                    <td><?= $Etudiant["nom"] ?></td>
                    <td><?= $Etudiant["email"] ?></td>
                    <td><?= $Etudiant["matricule"] ?></td>
                    <td>
                         <button type="submit" class="delete">Supprimer</button>
                         <button type="submit" class="addGroupe">Ajouter à un groupe</button>
                    </td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
  </section>

  <!-- Liste des groupes -->
  <section id="liste-groupes" class="section">
    <div class="card">
        <h2>Liste des Groupes</h2>
        <table class="tableau">
            <thead>
                <tr>
                    <th>Nom du Groupe</th>
                    <th>Nombre d'Étudiants</th>
                    <th>Date de Réunion</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td>Groupe A</td>
                    <td>25</td>
                    <td>2025-06-01</td>
                </tr>
            </tbody>
        </table>

    </div>
  </section>
</main>

<script src="js/main.js"></script>

</body>
</html>
