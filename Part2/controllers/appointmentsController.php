<?php
$addAppointment = new appointmentsModel();

//Date
if (isset($_POST['appointmentDate'])) {
    $appointmentDate = $_POST['appointmentDate'];
    if (empty($appointmentDate)) {
        $formError['appointmentDate'] = 'Champ obligatoire';
    }
}

//Date
if (isset($_POST['appointmentTime'])) {
    $appointmentTime = $_POST['appointmentTime'];
    if (empty($appointmentTime)) {
        $formError['appointmentTime'] = 'Champ obligatoire';
    }
}

if (isset($_POST['submit'])) {
    $addAppointment->appointmentsModel();
}
?>

