<?php
/*
	./public/app/vues/posts/index.php
	Variables disponibles :
    	- $posts : ARRAY(ARRAY(id, title, content, created_at, image, author_id, categorie_id))
*/
use \Noyau\Classes\Template;
?>

<?php
//Template::startZone();
?>

<div class="blog_left_sidebar">

<!-- LISTE DES ARTICLES/POSTS -->
  <?php
    foreach ($posts as $post):
      $created_at = strtotime($post->getCreated_at()); // On transforme la date en champs de type date
      ?>

    <?php //var_dump($post); ?>

    <article class="blog_item">
        <div class="blog_item_img">
            <img class="card-img rounded-0" src="assets/img/blog/<?php echo $post->getImage(); ?>" alt="">
            <a href="#" class="blog_item_date">
                <h3><?php echo date('d', $created_at) ?></h3>
                <p><?php echo date('M', $created_at) ?></p>
            </a>
        </div>

        <div class="blog_details">
            <a class="d-inline-block" href="posts/<?php echo $post->getId(); ?>/<?php echo \Noyau\Classes\Utils::slugify($post->getTitle()); ?>">
                <h2><?php echo $post->getTitle();?></h2>
            </a>
            <p><?php echo $post->getContent(); ?></p>

            <!-- <ul class="blog-info-link">
                <li>
                  <a href="#">
                    <?php //foreach ($tags as $tag): ?>
                       <i class="fa fa-user"></i><?php //echo $tag['name']; ?>
                    <?php //endforeach; ?>
                  </a>
                </li>
            </ul> -->

            <!-- TAGS LIST -->
              <?php
             // On inclus le controleur tags
            // On lance (la liste des tags qui correspondent au post) l'action indexByPostIdAction (index, car c'est une liste de chose mais par PostID)
            //$tagsCtlr = new \App\Controleurs\TagsControleur();
            //$tagsCtlr->showAction($post->getId()); // On lui balance la connexion et le postId
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

<?php //Template::stopZone('content');
?>
