<?php
include 'Models/database.php';
include 'Models/clientsFidelity.php';
include 'Controllers/clientFidelityController.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 4 Partie 1 PDO</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        <script src="assets/js/script.js"></script>
    </head>
    <body>
        <h1>Exercice 4 Partie 1 PDO</h1>
        <div class="rule">
            <p>N'afficher que les clients possédant une carte de fidélité.</p>
        </div>
        <div class="answer">
            <table>
                <thead>
                <th>id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Nombre de cartes</th>
                <th>Numéro de carte</th>
                </thead>
                <tbody>
                    <?php foreach ($clientsFidelityList AS $client) { ?>
                        <tr>
                            <td><?= $client['id']; ?></td><td><?= $client['lastName']; ?></td><td><?= $client['firstName']; ?></td><td><?= $client['birthDate']; ?></td><td><?= $client['card']; ?></td><td><?= $client['cardNumber']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a class="waves-effect waves-light btn" href="indexp1.php">Accueil Partie 1</a>
        <a class="waves-effect waves-light btn" href="e3.php">Exercice précédent</a>
        <a class="waves-effect waves-light btn" href="e5.php">Exercice suivant</a>
    </body>
</html>