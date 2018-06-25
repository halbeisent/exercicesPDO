<?php

/*
 * On crée une classe addPatientsModel qui hérite de la clase database
 * La méthode magique construct nous permet de se connecter à la base de données en appelant la méthode magique construct du parent
 * La méthode magique destruct nous permet de se déconnecter de la base de données en appelant la méthode magique destruct du parent
 */

class appointmentsModel extends database {

    public function __construct() {
        //On appelle le construct du parent
        parent::__construct();
    }

    /**
     * Je crée ma méthode qui va écrire dans ma table patients
     */
    public function appointmentsModel() {
        $addPatient = $this->dbConnect->prepare('INSERT INTO `appointments`(`dateHour`) VALUES(:appointmentTime)');
        $addPatient->execute(array(
            'appointmentTime' => $_POST['appointmentDate'] . ' ' . $_POST['appointmentTime']
        ));
    }

    public function showAppointments() {
        $showPatientsQuery = 'SELECT `id`, `dateHour`, `firstname`, `birthdate`, `phone`, `mail` FROM `patients`';
        $runQuery = $this->dbConnect->query($showPatientsQuery);
        $queryResults = $runQuery->fetchAll(PDO::FETCH_OBJ);
        return $queryResults;
    }

    /*
     * On créé une méthode pour afficher la liste des clients 
     */

    public function __destruct() {
        parent::__destruct();
    }

}

?>
