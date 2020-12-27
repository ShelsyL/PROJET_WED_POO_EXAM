<?php
/*
	./public/app/vues/posts/indexByPostId.php
  TAGS PAR POST
    Variables disponibles :
    	- $tags: ARRAY(ARRAY(id, name))
*/
  ?>

      <ul class="blog-info-link mt-3 mb-4">
       <?php foreach ($tags as $tag): ?>
            <li><a href="#"><i class="fa fa-user"></i> <?php echo $tag['name'] ?></a></li>
       <?php endforeach; ?>
     </ul>
