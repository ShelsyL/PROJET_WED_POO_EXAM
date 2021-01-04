<?php
/*
./noyau/classes/ControleurGenerique.php
CONTROLEUR GENERIQUE
 */

namespace Noyau\Classes;

abstract class ControleurGenerique {

  protected $_gestionnaire;
  protected $_table;
  protected $_defaultValues = [
    'view' => 'index',
    'orderByField' => 'id', // Ordre par champs (id, name, ...)
    'orderBySens' => 'ASC',
    'limit' => 200,
    'offset' => 0
  ];

  public function __construct(){
    $gestionnaireName = '\App\Modeles\\'
                        . ucfirst($this->_table) // Majuscule
                        . 'Gestionnaire';
    $this->_gestionnaire = new $gestionnaireName();
  }

  public function showAction($data, string $field = 'id'){
    // supprime le dernier caractere (s)
    $r = substr($this->_table, 0, -1);
    $method = 'findOneBy' . ucfirst($field);
    $$r = $this->_gestionnaire->$method($data);
    include '../app/vues/' . $this->_table . './show.php';
  }

  public function indexAction(array $userData = []){
    $data = array_merge($this->_defaultValues, $userData);
    $r = $this->_table;
    $$r = $this->_gestionnaire->findAll($data);

    include '../app/vues/'. $this->_table .'/' . $data['view']. '.php';
  }
}
