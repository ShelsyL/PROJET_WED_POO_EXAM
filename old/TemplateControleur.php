<?php
/*
	./public/app/controleurs/PostsControleur.php
  Controleur des Posts
*/

namespace App\Controleurs;
use \App\Modeles\TagsGestionnaire;
use \App\Modeles\CategoriesGestionnaire;

class TemplateControleur {

  public static function load() {
     $categories = SELF::loadCategories();
     $tags = SELF::loadTags();

     require_once '../app/vues/template/index.php';
  }

  private static function loadCategories(){
    $catGest = new CategoriesGestionnaire();
    $categories = $catGest->findAll();
    return $categories;
  }

  private static function loadTags(){
    $tagGest = new TagsGestionnaire();
    $tags = $tagGest->findAll();
    return $tags;
  }

}
