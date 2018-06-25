<?php
include 'Models/database.php';
include 'Models/scheduledShows.php';
include 'Controllers/showScheduleController.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 6 Partie 1 PDO</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        <script src="assets/js/script.js"></script>
    </head>
    <body>
        <h1>Exercice 6 Partie 1 PDO</h1>
        <div class="rule">
            <p>Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.</p>
        </div>
        <div class="answer">
            <?php foreach ($scheduledShowsList AS $scheduledShow) { ?>
                <ul>
                    <li><?= $scheduledShow['title']; ?> par <?= $scheduledShow['performer']; ?>, le <?= $scheduledShow['date']; ?> à <?= $scheduledShow['startTime']; ?>.</li>
                </ul>
            <?php } ?>
        </div>
        <a class="waves-effect waves-light btn" href="indexp1.php">Accueil Partie 1</a>
        <a class="waves-effect waves-light btn" href="e5.php">Exercice précédent</a>
        <a class="waves-effect waves-light btn" href="e7.php">Exercice suivant</a>
    </body>
</html>