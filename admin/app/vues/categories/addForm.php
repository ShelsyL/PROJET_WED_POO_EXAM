<?php
/*
  ./admin/app/vues/categories/addForm.php
  Variables disponibles: /
 */
 ?>

 <h1><?php echo $title; ?></h1>
 <div><a href="categories">Retour sur la liste des catégories</a></div>

<form action="categories/add/insert" method="post">
  <div>
    <label for="name">Titre</label>
    <input type="text" name="name" value="name" id="name">
  </div>
  <div><input type="submit" /></div>
</form>
