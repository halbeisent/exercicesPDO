<?php
include 'Models/database.php';
include 'Models/showTypes.php';
include 'Controllers/showTypesController.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 2 Partie 1 PDO</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        <script src="assets/js/script.js"></script>
    </head>
    <body>
        <h1>Exercice 2 Partie 1 PDO</h1>
        <div class="rule">
            <p>Afficher tous les types de spectacles possibles. </p>
        </div>
        <div class="answer">
            <select>
                <?php foreach ($showTypeList AS $showType) { ?>
                    <option value="<?= $showType->id; ?>"><?= $showType->type; ?></option>
                <?php } ?>
            </select>
        </div>
        <a class="waves-effect waves-light btn" href="indexp1.php">Accueil Partie 1</a>
        <a class="waves-effect waves-light btn" href="e1.php">Exercice précédent</a>
        <a class="waves-effect waves-light btn" href="e3.php">Exercice suivant</a>
        <script src="../assets/js/script.js"></script>
    </body>
</html>