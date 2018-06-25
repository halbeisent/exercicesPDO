<?php

/*
 * On crée une classe availableShows qui hérite de la clase database
 * La méthode magique construct nous permet de se connecter à la base de données en appelant la méthode magique construct du parent
 * La méthode magique destruct nous permet de se déconnecter de la base de données en appelant la méthode magique destruct du parent
 */

class showTypes extends database {

    public $id = 0;
    public $type = '';

    public function __construct() {
        parent::__construct();
    }

    /**
     * méthode qui permet de récupérer la liste des types de spectacles
     * @return array
     */
    public function getShowTypeList() {
        $showTypeListQuery = 'SELECT `id`, `type` FROM `showTypes`';
        $queryResult = $this->colyseumDatabase->query($showTypeListQuery);
        $queryResultList = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return $queryResultList;
    }

    public function __destruct() {
        parent::__destruct();
    }

}

?>
