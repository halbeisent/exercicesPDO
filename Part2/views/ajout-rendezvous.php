<?php
include '../models/dbConnect.php';
include '../models/patients.php';
include '../controllers/patientsListController.php';
include '../models/appointmentsModel.php';
include '../controllers/appointmentsController.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8" />
        <title>Page d'ajout de RDV</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" />
        <link rel="stylesheet" href="../../assets/css/hospital.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        <script src="../../assets/js/hospital.js"></script>
    </head>
    <body class="appointmentsBG">
        <nav>
            <div class="nav-wrapper">
                <a href="indexp2.php" class="brand-logo">E2NHospital Management</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="../indexp2.php">Accueil</a></li>
                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="../indexp2.php">Accueil</a></li>
        </ul>  
        <h1 class="appointmentsTitle">Formulaire d'ajout de nouveau RDV</h1>
        <!-- Partie formulaire en Materialize -->
        <div class="appointmentsFormBG">
            <form class="col s12" method="POST" action="ajout-rendezvous.php">
                <div class="row">
                    <div class="input-field col s12">
                        <select id="patientSelector">
                            <option value="0" disabled selected>Veuillez choisir un patient svp</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label for="patientSelector">Sélection de patient</label>
                    </div>
                </div>
                <div class="row">
                    <input id="appointmentDate" name="appointmentDate" type="text" class="datepicker">
                    <label for="appointmentDate">Date du rdv</label>
                </div>
                <div class="row">
                    <input id="appointmentTime" name="appointmentTime" type="text" class="timepicker">
                    <label for="appointmentTime">Heure du rdv</label>
                </div>
                <input type="submit" name="submit" class="waves-effect waves-light btn" />
        </div>
    </div>
</body>
</html>