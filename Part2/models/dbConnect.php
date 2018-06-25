<?php

class database {

    public $dbConnect;

    public function __construct() {
        try {
            //J'essaie de me connecter à la base
            $this->dbConnect = new PDO('mysql:host=127.0.0.1;dbname=HospitalE2N;charset=utf8', 'e2nExoUser', 'E2n.2018');
            //J'active les messages d'erreur de PDO
            $this->dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $errorMessage) {
            die('Erreur : ' . $errorMessage->getMessage());
        }
    }

    public function __destruct() {
        $this->dbConnect = NULL;
    }

}
