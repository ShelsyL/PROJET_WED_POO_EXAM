<?php
/*
./noyau/classes/ModeleGenerique.php
Modèle générique avec un hydrateur
Cette classe générique n'est liée qu'au Modele, elle n'hydratera pas un gestionnaire ni un controleur.
 */

namespace Noyau\Classes;

abstract class ModeleGenerique {

  // CONSTRUCTEUR
  public function __construct(array $data = null){
    if ($data):
      $this->hydrater($data);
    endif;
  }

  // AUTRES METHODES
  public function hydrater(array $data = null){
    if ($data):
      foreach ($data as $propriete =>$valeur):
        $nomMethode = 'set' . ucfirst($propriete);
        if (method_exists($this, $nomMethode)):
          $this->$nomMethode($valeur);
        endif;
      endforeach;
    endif;
  }


  // Exemple d'utilisation:
  //  $data = author [k = 'id' v=123, k='name' v ='toto', ...]
  //
  //  foreach. id -> name -> ...
  //  setId -> setName ....
  //  setId(123)
  //  setName(toto);
}
