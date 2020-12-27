<?php
/*
	./public/app/vues/posts/show.php
  DETAIL D'UN POST
  Variables disponibles :
    - $post : ARRAY(id, title, content, created_at, image, author_id, categorie_id)
    - $author: ARRAY(id, firstname, lastname, biography, avatar, created_at)
*/
?>
<div class="single-post">
   <div class="feature-img">
      <img class="img-fluid" src="assets/img/blog/<?php echo $post['image']; ?>" alt="">
   </div>
   <div class="blog_details">
      <h2><?php echo $post['title'] ?></h2>

      <!-- TAGS LIST -->
        <?php
       // On inclus le controleur tags
        include_once '../app/controleurs/tagsControleur.php';
      // On lance (la liste des tags qui correspondent au post) l'action indexByPostIdAction (index, car c'est une liste de chose mais par PostID)
        \App\Controleurs\TagsControleur\indexByPostIdAction($connexion, $post['id']); // On lui balance la connexion et le postId
      ?>

      <p class="excert"><?php echo $post['content'] ?></p>
   </div>
</div>

  <!-- AUTHOR DETAILS -->
  <!-- On va mettre un include directement de la vue -->
    <?php include '../app/vues/authors/show.php'; ?>
