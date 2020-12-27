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
    <img src="assets/img/blog/<?php echo $author['avatar']; ?>" alt="<?php echo  $author['firstname']; ?><?php echo  $author['lastname'] ?>">
    <div class="media-body">
       <a href="#">
          <h4><?php echo  $author['firstname']; ?><?php echo  $author['lastname']; ?></h4>
       </a>
       <p><?php echo  $author['biography']; ?></p>
    </div>
 </div>
</div>
