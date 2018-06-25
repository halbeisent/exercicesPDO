<?php

class database {

    public $colyseumDatabase;

    public function __construct() {
        try {
            $this->colyseumDatabase = new PDO('mysql:host=127.0.0.1;dbname=colyseum;charset=utf8', 'e2nExoUser', 'E2n.2018');
        } catch (Exception $errorMessage) {
            die('Erreur : ' . $errorMessage->getMessage());
        }
    }

    public function __destruct() {
        $this->colyseumDatabase = NULL;
    }

}
