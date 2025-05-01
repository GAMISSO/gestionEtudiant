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
      <?php createEtudiant($nom, $prenom, $email, $photo); ?>
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
                    <td><?php $Etudiant["nom"] ?></td>
                    <td><?php $Etudiant["email"] ?></td>
                    <td><?php $Etudiant["matricule"] ?></td>
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
