<?php

// On instancie l'objet addPatient qui aura comme classe patients.
$addPatient = new patients();

//Je déclare mes variables qui vont contenir mes RegEx
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-]+$/';
$regexAddress = '/^[0-9]{1,4}[, ][a-zA-Z àáâãäåçèéêëìíîïðòóôõöùúûüýÿ-]+$/';
$regexEmail = '/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/';
$regexPhone = '/^[0-9]{10,10}$/';
$regexBirthdate = '/^(0[1-9]|([1-2][0-9])|3[01])/(0[1-9]|1[012])/((19|20)[0-9]{2})$/';
$formError = array();
$insertSuccess = false;

//Si le post est existe alors
if (isset($_POST['lastname'])) {
    // Je stocke le contenu du POST dans une variable en convertissant les balises HTML
    $addPatient->lastname = htmlspecialchars($_POST['lastname']);
    // Si le contenu de ma variable ne matche pas avec ma RegEx
    if (!preg_match($regexName, $addPatient->lastname)) {
        // J'affiche l'erreur
        $formError['lastname'] = 'Le nom saisi est invalide';
    }
    // Si le post lastname n'est pas existe (donc vide)
    if (empty($addPatient->lastname)) {
        // J'affiche l'erreur
        $formError['lastname'] = 'Champ obligatoire';
    }
}

// Si le post est existe alors
if (isset($_POST['firstname'])) {
    // Je stocke le contenu du POST dans une variable en convertissant les balises HTML
    $addPatient->firstname = htmlspecialchars($_POST['firstname']);
    // Si la variable firstname ne correspond pas à la regex
    if (!preg_match($regexName, $addPatient->firstname)) {
        // J'affiche l'erreur
        $formError['firstname'] = 'Le prénom saisi est invalide';
    }
    // Si le post est vide
    if (empty($addPatient->firstname)) {
        // J'affiche le message d'erreur
        $formError['firstname'] = 'Champ obligatoire';
    }
}

//Date de naissance
if (isset($_POST['birthdate'])) {
    $addPatient->birthdate = $_POST['birthdate'];
    /*if (!preg_match($regexBirthdate, $addPatient->birthdate)) {
        // J'affiche l'erreur
        $formError['birthdate'] = 'La date saisie est invalide';
    } else {
        $addPatient->birthdate = date_format($_POST['birthdate'], 'Y/m/d');
    }*/
    if (empty($addPatient->birthdate)) {
        $formError['birthdate'] = 'Champ obligatoire';
    }
}

//Télephone
if (isset($_POST['phone'])) {
    $addPatient->phone = $_POST['phone'];
    if (!preg_match($regexPhone, $addPatient->phone)) {
        // J'affiche l'erreur
        $formError['phone'] = 'Le numéro de téléphone saisi est invalide';
    }
    if (empty($addPatient->phone)) {
        $formError['phone'] = 'Champ obligatoire';
    }
}

//E-mail
if (isset($_POST['mail'])) {
    $addPatient->mail = $_POST['mail'];
    if (!preg_match($regexEmail, $addPatient->mail)) {
        // J'affiche l'erreur
        $formError['mail'] = 'Le mail saisi est invalide';
    }
    if (empty($addPatient->mail)) {
        $formError['mail'] = 'Champ obligatoire';
    }
}

if (isset($_POST['submit']) && count($formError) == 0) {
    if (!$addPatient->addPatient()) {
        $formError['queryError'] = 'L\'envoi du formulaire a échoué, merci de réessayer ultérieurement';
    } else {
        $insertSuccess = true;
    }
}
?>