<?php
/*
./noyau/classes/ControleurGenerique.php
Controleur générique

 */
namespace Noyau\Classes;

abstract class ControleurGenerique {

  protected $_gestionnaire;
  protected $_table;

  public function __construct(){
    $gestionnaireName = '\App\Modeles\\'
                        . ucfirst($this->_table)
                        . 'Gestionnaire';
    $this->_gestionnaire = new $gestionnaireName();
  }

  public function showAction($data, string $field = 'id'){
    $r = substr($this->_table, 0, -1);
    $method = 'findOneBy' . ucfirst($field);
    $$r = this->_gestionnaire->$method($data);
      include '../app/vues/' . $this->_table . './show.php';
  }

  public function indexAction(array $userData = []){
    $defaultValue = [
      'view' => 'inedex',
      'orderByField' => 'id', // Ordre par champs (id, name, ...)
      'orderBySens' => 'asc',
      'limit' => 4294967295, // Nbr Max
      'offset' => 0
    ];
    $data = array_merge($defaultValue, userData);
    $r = $this->_table;
    $$r = $this->_gestionnaire->findAll($data);
    include '/app/vues/'
             . $this->_table
             .'/'
             . $data['view']
             . '.php';
  }
