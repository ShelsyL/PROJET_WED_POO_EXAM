<?php
/*
  ./public/app/vues/authors/show.php
  Variables disponibles :
  - $authors: ARRAY(id, firstname, lastname, avatar, biography)
*/
?>

<!-- AUTHOR DETAILS -->
<div class="blog-author">
 <div class="media align-items-center">
    <img src="assets/img/blog/<?php echo $author->getAvatar(); ?>" alt="<?php echo  $author->getFirstname();  ?><?php echo  $author->getLastName(); ?>">
    <div class="media-body">
       <a href="#">
          <h4><?php echo  $author->getFirstname(); ?><?php echo  $author->getLastName(); ?></h4>
       </a>
       <p><?php echo  $author->getBiography(); ?></p>
    </div>
 </div>
</div>
