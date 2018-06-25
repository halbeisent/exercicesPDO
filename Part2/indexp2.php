<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8" />
        <title>E2NHospital Management</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" />
        <link rel="stylesheet" href="../assets/css/hospital.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        <script src="../assets/js/hospital.js"></script>
    </head>
    <body class="homeBG">
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">E2NHospital Management</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="views/ajout-patient.php">Ajout de patient</a></li>
                    <li><a href="views/ajout-rendezvous.php">Ajout de rdv</a></li>
                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="views/ajout-patient.php">Ajout de patient</a></li>
            <li><a href="views/ajout-rendezvous.php">Ajout de rdv</a></li>
        </ul>
        <h1 class="homeTitle">E2NHospital</h1>
        <h2 class="homeTitle">Gestion des RDV et patients</h2>
    </body>
</html>