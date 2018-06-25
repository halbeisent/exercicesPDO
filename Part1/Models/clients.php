<?php
/*
 * On crée une classe client qui hérite de la clase database
 * La méthode magique construct nous permet de se connecter à la base de données en appelant la méthode magique construct du parent
 * La méthode magique destruct nous permet de se déconnecter de la base de données en appelant la méthode magique destruct du parent
 */
class clients extends database {
/*
 * Création des attributs qui correspondent à chacun des champs de la table clients
 * On les initialise par rapport à leur type
 */
    public $id = 0;
    public $lastName = '';
    public $firstName = '';
    public $birthDate = '01/01/2000';
    public $card = false;
    public $cardNumber = 0;

    public function __construct() {
        //On appelle le construct du parent
        parent::__construct();
    }

    /*
     *On créé une méthode pour afficher la liste des clients 
     */
    public function clientsList() {
        $listQuery = 'SELECT `id`, `lastName`, `firstName`, `birthDate`, `card`, `cardNumber` FROM `clients`';
        $queryResult = $this->colyseumDatabase->query($listQuery);
        $queryResultList = $queryResult->fetchAll(PDO::FETCH_ASSOC);
        return $queryResultList;
    }

    public function __destruct() {
        parent::__destruct();
    }

}

?>
