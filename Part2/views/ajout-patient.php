<?php
include '../models/dbConnect.php';
include '../models/patients.php';
include '../controllers/patientsController.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="UTF-8" />
        <title>Page d'ajout de patient</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" />
        <link rel="stylesheet" href="../../assets/css/hospital.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        <script src="../../assets/js/hospital.js"></script>
    </head>
    <body class="patientsBG">
        <nav>
            <div class="nav-wrapper">
                <a href="../indexp2.php" class="brand-logo">E2NHospital Management</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="../indexp2.php">Accueil</a></li>
                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="../indexp2.php">Accueil</a></li>
        </ul>  
        <h1 class="patientsTitle">Formulaire d'ajout de nouveau patient</h1>
        <!-- Partie formulaire en Materialize -->
        <div class="patientformBG">
            <?php if($insertSuccess) {
                echo 'Le formulaire a été validé';
            } ?>
            <form class="col s12" method="POST" action="ajout-patient.php"> 
                <fieldset>
                    <legend>Identité du patient</legend>
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Prénom" id="firstname" name="firstname" type="text" class="validate">
                            <label for="firstname">Prénom</label>
                            <p class="error"><?= isset($formError['firstname']) ? $formError['firstname'] : '' ?></p>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="Nom" id="lastname" name="lastname" type="text" class="validate">
                            <label for="lastname">Nom</label>
                            <p class="error"><?= isset($formError['lastname']) ? $formError['lastname'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s2">
                            <input id="birthdate" name="birthdate" type="text" class="datepicker">
                            <label for="birthdate">Date de naissance</label>
                            <p class="error"><?= isset($formError['birthdate']) ? $formError['birthdate'] : '' ?></p>
                        </div>
                        <div class="input-field col s5">
                            <input id="phone" name="phone" type="text" class="validate">
                            <label for="phone">Numéro de téléphone</label>
                            <p class="error"><?= isset($formError['phone']) ? $formError['phone'] : '' ?></p>
                        </div>
                        <div class="input-field col s5">
                            <input id="mail" name="mail" type="text" class="validate">
                            <label for="mail">Adresse mail</label>
                            <p class="error"><?= isset($formError['mail']) ? $formError['mail'] : '' ?></p>
                        </div>
                    </div>
                    <input type="submit" name="submit" class="waves-effect waves-light btn btnColor" />
                </fieldset>
            </form>
        </div>
    </body>
</html>