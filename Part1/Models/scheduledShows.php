<?php
/*
 * On crée une classe client qui hérite de la clase database
 * La méthode magique construct nous permet de se connecter à la base de données en appelant la méthode magique construct du parent
 * La méthode magique destruct nous permet de se déconnecter de la base de données en appelant la méthode magique destruct du parent
 */
class scheduledShows extends database {
/*
 * Création des attributs qui correspondent à chacun des champs de la table clients
 * On les initialise par rapport à leur type
 */
    public $id = 0;
    public $title = '';
    public $performer = '';
    public $date = '1970-01-01';
    public $duration = '00:00:00';
    public $startTime = '00:00:00';

    public function __construct() {
        //On appelle le construct du parent
        parent::__construct();
    }

    /*
     *On créé une méthode pour afficher la liste des clients 
     */
    public function scheduledShowsList() {
        $listQuery = 'SELECT `title`, `performer`, `date`, `startTime` FROM `shows` ORDER BY `title`';
        $queryResult = $this->colyseumDatabase->query($listQuery);
        $queryResultList = $queryResult->fetchAll(PDO::FETCH_ASSOC);
        return $queryResultList;
    }

    public function __destruct() {
        parent::__destruct();
    }

}

?>
