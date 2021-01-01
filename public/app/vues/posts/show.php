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
      <h2><?php echo $post->getTitle(); ?></h2>
      <p class="excert"><?php echo $post->getContent(); ?></p>
   </div>
</div>

  <!-- AUTHOR DETAILS -->
  <!-- On va mettre un include directement de la vue -->
  <?php include '../app/vues/authors/show.php'; ?>
