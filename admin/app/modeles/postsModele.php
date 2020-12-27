<?php
/*
    ./app/modeles/postsModele.php
    Modèle des posts
 */
namespace App\Modeles\PostsModele;


function findAll(\PDO $connexion) :array {
  $sql = "SELECT *, posts.id as postID
          FROM posts
          JOIN authors ON posts.author_id = authors.id
          ORDER BY posts.id DESC
          LIMIT 5;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}



function findOneById(\PDO $connexion, int $id) {
  $sql = "SELECT *, posts.id AS postID
          FROM posts
          JOIN authors ON posts.author_id = authors.id
          WHERE posts.id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_STR);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}



function insert(\PDO $connexion, array $data) :int {
  $sql = "INSERT INTO posts
          SET title        = :title,
              content      = :content,
              author_id    = :author,
              categorie_id = :categorie;";
              // created_at   = NOW();
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':title',    $data['title'],    \PDO::PARAM_STR);
  $rs->bindValue(':content',  $data['content'],  \PDO::PARAM_STR);
  $rs->bindValue(':author',   $data['author'],   \PDO::PARAM_INT);
  $rs->bindValue(':categorie', $data['categorie'], \PDO::PARAM_INT);
  $rs->execute();
  return $connexion->lastInsertId();
}



function insertTagById(\PDO $connexion, array $data) {
  $sql = "INSERT INTO posts_has_tags
          SET post_id = :post,
              tag_id = :tag;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':post', $data['postID'],  \PDO::PARAM_INT);
  $rs->bindValue(':tag',  $data['tagID'],   \PDO::PARAM_INT);
  return $rs->execute();
}



function deletePostsHasTagsByPostId(\PDO $connexion, int $postID) :bool {
  $sql = "DELETE FROM posts_has_tags
          WHERE post_id = :post";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':post', $postID, \PDO::PARAM_INT);
  return $rs->execute();
}



function deleteOneById(\PDO $connexion, int $id) :bool {
  $sql = "DELETE FROM posts
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  return intval($rs->execute());
}



function findTagsByPostId(\PDO $connexion, int $postID) :array {
  $sql = "SELECT tag_id FROM posts_has_tags
          WHERE post_id = :post;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':post', $postID, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_COLUMN);
}



function updateOneById(\PDO $connexion, int $id, array $data) :bool {
  $sql = "UPDATE posts
          SET title        = :title,
              content      = :content,
              author_id    = :author,
              categorie_id = :categorie
          WHERE id         = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':title',    $data['title'],    \PDO::PARAM_STR);
  $rs->bindValue(':content',  $data['content'],  \PDO::PARAM_STR);
  $rs->bindValue(':author',   $data['author'],   \PDO::PARAM_STR);
  $rs->bindValue(':categorie', $data['categorie'], \PDO::PARAM_STR);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  return intval($rs->execute());
}
