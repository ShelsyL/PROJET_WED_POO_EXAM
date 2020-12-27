<?php
/*
  ./admin/app/vues/posts/addForm.php
  Variables disponibles:
    -$authors: ARRAY(ARRAY(id, firstname, lastname, biography, avatar, created_at))
    -$categories: ARRAY(ARRAY(id, name, created_at))
*/
 ?>

 <!-- STYLE -->
 <style>
 h1 {
   padding-top: 6rem;
 }
 </style>
 <!-- /FIN DE STYLE -->

<h1 ><?php echo $title ?></h1>
<div><a href="posts">Retour vers la liste des posts</a></div>

<form action="posts/add/insert" method="post">
  <fieldset>

    <!-- DONEES DU POST -->
    <legend style="padding-top: 1em;">Données du posts</legend>
    <div>
      <label style="padding-top: 1em;" for="title">Titre</label>
      <input type="text" name="title" id="title" />
    </div>
    <div>
      <label style="padding-top: 1em;" for="content">Texte</label>
      <textarea name="content" id="content"></textarea>
    </div>
    <div>
      <label style="padding-top: 1em;" for="">Media</label>
      <input type="" name="" id="" />
    </div>

    <!-- MENU DEROULANT DYNAMIQUE - AUTEURS-->
    <div>
      <label style="padding-top: 1.5em;" for="author">Auteur</label>
        <select name="author" id="author">
          <?php foreach ($authors as $author): ?>
            <option value="<?php echo $author['id']; ?>"><?php echo $author['firstname']; ?> <?php echo $author['lastname'] ?></option>
          <?php endforeach; ?>
        </select>
    </div>
    <!-- /FIN MENU DEROULANT DYNAMIQUE -->
  </fieldset>


  <fieldset>
    <legend style="padding-top: 1.5em;">Catégorie</legend>
    <!-- LISTE DYNAMIQUE DE CHECKBOXES - CATEGORIES-->
    <div>
      <?php foreach ($categories as $categorie): ?>
        <div>
          <input type="checkbox" name="<?php echo $categorie['name']; ?>" id="<?php echo $categorie['id']; ?>">
          <label for="<?php echo $categorie['id']; ?>"><?php echo $categorie['name']; ?></label>
        </div>
      <?php endforeach; ?>
    </div>
    <!-- /FIN LISTE DYNAMIQUE DE CHECKBOXES -->
  </fieldset>

  <fieldset>
<!-- LISTE DES TAGS -->
<legend style="padding-top: 1.5em;">Tags</legend>
<?php foreach ($tags as $tag): ?>
  <div>
    <input type="checkbox" name="tags[]" value="<?php echo $tag['id']; ?>" id="<?php echo $tag['name']; ?>">
    <label for="<?php echo $tag['name']; ?>"><?php echo $tag['name']; ?></label>
  </div>
<?php endforeach; ?>
</div>
<!-- /FIN LISTE DES TAGS -->
  </fieldset>

<div>
  <input type="submit" />
</div>
</form>
