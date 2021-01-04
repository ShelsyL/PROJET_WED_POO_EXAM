<?php
/*
	./public/app/modeles/tagsModele.php
	MODELE DES TAGS
*/
namespace App\Modeles;
use \Noyau\Classes\App;
use \App\Modeles\Tag;
use \Noyau\Classes\GestionnaireGenerique;

class TagsGestionnaire extends GestionnaireGenerique {

	public function __construct(){
		$this->_table = 'tags';
    parent::__construc();
	}

	public function findAllByPostId(int $postId) :array {
		$sql = "SELECT *
	    		  FROM tags t
	          JOIN posts_has_tags pht ON t.id = pht.tag_id
	          WHERE pht.post_id = :postId
				    ORDER BY t.name ASC;";
	  // On a un paramètre extérieur, donc on doit faire un prepare

	  $rs = App::getConnexion()->prepare($sql);

	  $rs->bindValue(':postId', $postId, \PDO::PARAM_INT);
	  $rs->execute();
	  $tagsResult = $rs->fetchAll(\PDO::FETCH_ASSOC); // On retourne un tableau indéxé de tableau associatif

		return $this->fromAssocToObject($tagsResult);
	}
}
