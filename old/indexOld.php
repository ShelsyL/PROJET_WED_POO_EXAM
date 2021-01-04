<?php
/*
	./public/app/vues/posts/index.php
  LISTE DES POSTS
	Variables disponibles :
      -$post : OBJET Post (id, title, content, created_at, image, author_id, categorie_id)
)
*/
?>

<div class="blog_left_sidebar">

<!-- LISTE DES POSTS -->
  <?php
    foreach ($postsTags as $postTag):

      $post = $postTag['post'];
      $tags = $postTag['tags'];

      $created_at = strtotime($post->getCreated_at()); // On transforme la date en champs de type date
      ?>

    <?php //var_dump($post); ?>

    <article class="blog_item">
        <div class="blog_item_img">
            <img class="card-img rounded-0" src="assets/img/blog/<?php echo $post->getImage(); ?>" alt="">
            <a href="#" class="blog_item_date">
              <!-- DATE DU POST-->
                <h3><?php echo date('d', $created_at) ?></h3>
                <p><?php echo date('M', $created_at) ?></p>
            </a>
        </div>

        <div class="blog_details">

          <!-- LIEN DU POST -->
            <a class="d-inline-block" href="posts/<?php echo $post->getId();?>/<?php echo \Noyau\Classes\Utils::slugify($post->getTitle()); ?>">
            <!-- TITRE DU POST -->
                <h2><?php echo $post->getTitle(); ?></h2>
            </a>

            <!-- CONTENT DU POST -->
            <p><?php echo $post->getContent(); ?></p>

            <!-- TAG(S) DU POST -->
            <?php
              foreach($tags as $tag){
                echo $tag->getName();
              }
            ?>
        </div>
    </article>
  <?php endforeach; ?>

    <nav class="blog-pagination justify-content-center d-flex">
        <ul class="pagination">
            <li class="page-item">
                <a href="#" class="page-link" style="width: auto; padding: 0 1em;">More posts</a>
            </li>
        </ul>
    </nav>
</div>
