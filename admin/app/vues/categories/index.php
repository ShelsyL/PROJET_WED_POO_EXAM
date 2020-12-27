<?php
/*
  ./admin/app/vues/categories/index.php
  Variables disponibles:
    - $categories ARRAY(ARRAY(id, namen created_at))
 */

 ?>
 <div class="jumbotron">
   <h1><?php echo $title; ?></h1> <!-- Gestion des catégories -->
   <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
 </div>
 <div class="">
     <a href="categories/add/form">Add a category</a>
 </div>
 <table class="table table-striped">
   <thead>
     <tr>
       <th>ID</th>
       <th>Name</th>
       <th>Created_at</th>
       <th>Actions</th>
     </tr>
   </thead>
   <tbody>
     <!-- Boucle pour les catégories -->
     <?php foreach ($categories as $categorie): ?>
       <tr>
         <td><?php echo $categorie['id']; ?></td>
         <td><?php echo $categorie['name']; ?></td>
         <td><?php echo $categorie['created_at']; ?></td>
         <td>
           <!-- On met une class pour pouvoir faire une confirmation avec le fichier public/www/js/app.js -->
           <a href="categories/edit/form/<?php echo $categorie['id']; ?>" class="edit">Edit</a> | <!-- Besoin d'un id pour savoir lequel editer -->
           <a href="categories/delete/<?php echo $categorie['id']; ?>"    class="delete">Delete</a> <!-- Besoin d'un id pour savoir lequel supprimer -->
         </td>
       </tr>
     <?php endforeach; ?>
   </tbody>
 </table>
