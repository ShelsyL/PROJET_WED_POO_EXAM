<?php
/*
	./public/app/controleurs/PostsControleur.php
  Controleur des Posts
*/

namespace App\Controleurs;
use \App\Modeles\PostsGestionnaire;
use \App\Modeles\TagsGestionnaire;
use \App\Modeles\AuthorsGestionnaire;

class PostsControleur {

  public function indexAction() {
      // init data(def) view
      $postsTags = array();

      // On instancie (créer un nouveau objet) un objet de type PostsGestionnaire()
      $postsGest = new PostsGestionnaire();
      // On lance la méthode findAll de PostsGestionnaire que je met dans $postsData
      $postsData = $postsGest->findAllPost();

      foreach ($postsData as $post){
        //  Post / Tags / Authors
        $row = array();

        // post
        $row += [ "post" => $post ];

        // tags
        $idPost = $post->getID();
        $tags = $this->getTagsByIdPost($idPost);
        $row += [ "tags" => $tags ];

        // authors
        //$author_id = $post->getAuthorId();
        //$author = $this->getAuthorsById($connexion,$author_id);
        ///$row += [ "authors" => $author ];

        // push
        array_push($postsTags, $row);
      }

      // Je charge la vue posts/index dans $content
      GLOBAL $content;
      ob_start();
        include '../app/vues/posts/index.php';
      $content = ob_get_clean();
  }


  public function showAction(int $id) {
    // init data(def) view
    $post = new Post();
    $tags = array();
    $author = new Author();

    // POST
    // On instancie (créer un nouveau objet) un objet de type PostsGestionnaire()
    $postsGest = new PostsGestionnaire();
    // On lance la méthode findAll de PostsGestionnaire que je met dans $postData
    $post = $postsGest->findOneById($id);

    // TAGS
    $idPost = $post->getID();
    $tags = $this->getTagsByIdPost($idPost);

    // AUTHOR
    $autorId = $post->getID();
    $author = getAuthorsById($autorId );

    // VIEW
    $title = $post['title'];
    $this->renderPostView('show');
  }

  public function renderPostView($name){
    GLOBAL $content, $title;
    $title = $post->getTitle();
    ob_start();
      include '../app/vues/posts/'.$name.'.php';
    $content = ob_get_clean();
  }

  public function getTagsByIdPost($idPost){

    $tagsGest = new TagsGestionnaire();
    $tags = $tagsGest->findAllByPostId($idPost);
    return $tags;
}

  public function getAuthorsById($author_id){
    $authorGest = new AuthorsGestionnaire();
    $author = $authorGest->findOneAuthorById($author_id);
    return $author;
}

}
