<?php
include '../models/dbConnect.php';
include '../models/patients.php';
include '../controllers/patientsListController.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8" />
        <title>Liste des patients</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" />
        <link rel="stylesheet" href="../../assets/css/hospital.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        <script src="../../assets/js/hospital.js"></script>
    </head>
    <body class="patientsBG">
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">E2NHospital Management</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="indexp2.php">Accueil</a></li>
                    <li><a href="ajout-patient.php">Ajout de patient</a></li>
                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="indexp2.php">Accueil</a></li>
            <li><a href="ajout-patient.php">Ajout de patient</a></li>
        </ul>  
        <div class="row">
            <?php foreach ($patientsList as $patient) { ?>
                <div class="col s12 m4">
                    <div class="card blue-grey darken-1">
                         <div class="card-content white-text">
                            <span class="card-title">Patient n°<?= $patient->id; ?></span>
                            <p><ul>
                                <li>Nom: <?= $patient->lastname; ?></li>
                                <li>Prénom: <?= $patient->firstname; ?></li>
                                <li>Date de naissance: <?= $patient->birthdate; ?></li>
                                <li>Numéro de téléphone: <?= $patient->phone; ?></li>
                            </ul></p>
                        </div>
                        <div class="card-action">
                            <a href="#">Fiche patient</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </body>
</html>