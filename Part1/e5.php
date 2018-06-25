<?php
include 'Models/database.php';
include 'Models/clientsNameBeginsWithM.php';
include 'Controllers/clientNameBeginsWithMController.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 5 Partie 1 PDO</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        <script src="assets/js/script.js"></script>
    </head>
    <body>
        <h1>Exercice 5 Partie 1 PDO</h1>
        <div class="rule">
            <div class="row">
                <p>Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M". Les afficher comme ceci :
                <ul>
                    <li>Nom : Nom du client</li>
                    <li>Prénom : Prénom du client</li>
                </ul>
                Trier les noms par ordre alphabétique.
                </p>
            </div>
            <div class="answer">
                <div class="row">
                    <?php foreach ($clientsNameBeginsWithMList AS $client) { ?>
                        <div class="col s12 m4">
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title">Client n°<?= $client['id']; ?></span>
                                    <p><ul>
                                        <li>Nom: <?= $client['lastName']; ?></li>
                                        <li>Prénom: <?= $client['firstName']; ?></li>
                                    </ul></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <a class="waves-effect waves-light btn" href="indexp1.php">Accueil Partie 1</a>
            <a class="waves-effect waves-light btn" href="e4.php">Exercice précédent</a>
            <a class="waves-effect waves-light btn" href="e6.php">Exercice suivant</a>
    </body>
</html>