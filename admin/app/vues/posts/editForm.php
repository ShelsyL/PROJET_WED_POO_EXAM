<?php
/*
  ./admin/app/vues/posts/editForm.php
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

<form action="posts/edit/<?php echo $post['postID']; ?>" method="post">
  <label for="title">Titre</label>
<input type="text" name="title" id="title" value="<?php echo $post['title']; ?>">
<label for="content">Contenu</label>
<textarea name="content" id="content"><?php echo $post['content']; ?></textarea>
<label for="">Image</label>
<input type="file" name="" value="">
<br />

<!-- AUTEURS -->
<div>
  <label for="author">Auteur</label>
  <select name="author" id="author">
    <?php foreach ($authors as $author): ?>
      <option value="<?php echo $author['id']; ?>" <?php if($author['id'] == $post['author_id']) {echo 'selected="selected"';}?>><?php echo $author['lastname']; ?></option>
    <?php endforeach; ?>
  </select>
</div>
<!-- /FIN AUTEURS -->

<!-- CATEGORIES -->
<div>
  <label for="categorie">Catégorie</label>
  <select name="categorie" id="categorie">
    <?php foreach ($categories as $categorie): ?>
      <option value="<?php echo $categorie['id']; ?>" <?php if($categorie['id'] == $post['categorie_id']) {echo 'selected="selected"';}?>><?php echo $categorie['name']; ?></option>
    <?php endforeach; ?>
  </select>
</div>
<!-- /FIN CATEGORIES -->

<!-- TAGS -->
<div>
  <label for="tags">Tags</label>
  <?php foreach ($tags as $tag): ?>
    <div>
      <input type="checkbox" name="tags[]" value="<?php echo $tag['id']; ?>" id="<?php echo $tag['name']; ?>" <?php if(in_array($tag['id'], $postTags)) {echo 'checked="checked"';} ?>>
      <label for="<?php echo $tag['name']; ?>"><?php echo $tag['name']; ?></label>
    </div>
  <?php endforeach; ?>
</div>
<!-- /FIN TAGS -->

<br />
<input type="submit">
</form>
