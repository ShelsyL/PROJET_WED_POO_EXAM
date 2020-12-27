<?php
/*
  ./admin/app/vues/categories/editForm.php
  Variables disponibles:
  - $categories ARRAY (id, name, created_at)
 */
?>

<h1><?php echo $title; ?></h1>
<div><a href="categories">Retour sur la liste des catégories</a></div>

<form action="categories/edit/<?php echo $categorie['id']; ?>" method="post" class="edit">
 <div>
   <label for="name">Titre</label>
   <input type="text" name="name" id="name" value="<?php echo $categorie['name']; ?>" />
 </div>
 <div><input type="submit" /></div>
</form>
