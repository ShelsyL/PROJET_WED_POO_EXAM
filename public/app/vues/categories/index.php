<?php
/*
	./public/app/vues/categories/index.php
	Variables disponibles :
    	- $categories : ARRAY(ARRAY(id, name, created_at))
*/
?>

<!-- LISTE DES CATEGORIES et leurs ID -->
<aside class="single_sidebar_widget post_category_widget">
    <h4 class="widget_title">Category</h4>
    <ul class="list cat-list">

      <?php foreach ($categories as $category): ?>
        <li>
            <a href="#" class="d-flex">
              <p><?php echo $category->getName(); ?></p>
              <p>(<?php echo $category->getId(); ?>)</p>
            </a>
        </li>
      <?php endforeach; ?>

    </ul>
</aside>
