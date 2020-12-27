<?php
/*
	./public/app/vues/tags/index.php
  LISTE DES TAGS 
    Variables disponibles :
    	- $tags: ARRAY(ARRAY(id, name))
*/
  ?>

<aside class="single_sidebar_widget tag_cloud_widget">
    <h4 class="widget_title">Tag Clouds</h4>
    <ul class="list">

      <?php foreach ($tags as $tag): ?>
        <li>
            <a href="#"><?php echo $tag['name']; ?></a>
        </li>
      <?php endforeach; ?>

    </ul>
</aside>
