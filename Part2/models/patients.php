<?php

/*
 * On crée une classe patients qui hérite de la clase database
 * La méthode magique construct nous permet de se connecter à la base de données en appelant la méthode magique construct du parent
 * La méthode magique destruct nous permet de se déconnecter de la base de données en appelant la méthode magique destruct du parent
 */

class patients extends database {
    
    public $id = 0;
    public $lastname = '';
    public $firstname = '';
    public $birthdate = '01/01/2001';
    public $phone = '0607080910';
    public $mail = '';
            


    public function __construct() {
        //On appelle le construct du parent
        parent::__construct();
    }

    /**
     * Je crée ma méthode qui va écrire dans ma table patients
     */
    public function addPatient() {
        //J'insère les valeurs du POST dans les champs de ma table via les marqueurs nominatifs
        $addPatient = $this->dbConnect->prepare('INSERT INTO `patients`(`lastname`, `firstname`, `birthdate`, `phone`, `mail`) VALUES (:lastname, :firstname, :birthdate, :phone, :mail)');
        $addPatient->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $addPatient->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $addPatient->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $addPatient->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $addPatient->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        return $addPatient->execute();
    }

    public function showPatients() {
        $showPatientsQuery = 'SELECT `id`, `lastname`, `firstname`, `birthdate`, `phone`, `mail` FROM `patients`';
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
