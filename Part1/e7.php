<?php
include 'Models/database.php';
include 'Models/organizedClientsList.php';
include 'Controllers/organizedClientsListController.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 7 Partie 1 PDO</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        <script src="assets/js/script.js"></script>
    </head>
    <body>
        <h1>Exercice 7 Partie 1 PDO</h1>
        <div class="rule">
            <p>Afficher tous les clients comme ceci :
            <ul>
                <li>Nom : Nom de famille du client</li>
                <li>Prénom : Prénom du client</li>
                <li>Date de naissance : Date de naissance du client</li>
                <li>Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)</li>
                <li>Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.</li>
            </ul></p>
    </div>
    <div class="answer">
        <div class="row">
            <?php foreach ($organizedClientsList AS $client) { ?>
                <div class="col s12 m4">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Client n°<?= $client['id']; ?></span>
                            <p><ul>
                                <li>Nom: <?= $client['lastName']; ?></li>
                                <li>Prénom: <?= $client['firstName']; ?></li>
                                <li>Date de naissance: <?= $client['birthDate']; ?></li>
                                <li>Carte de fidélité: <?= $client['condition']; ?></li>
                                <li>Numéro de carte: <?= $client['cardNumber']; ?></li>
                            </ul></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <a class="waves-effect waves-light btn" href="indexp1.php">Accueil Partie 1</a>
    <a class="waves-effect waves-light btn" href="e6.php">Exercice précédent</a>
    <a class="waves-effect waves-light btn" href="../indexp2.php">Partie suivante</a>
</body>
</html>