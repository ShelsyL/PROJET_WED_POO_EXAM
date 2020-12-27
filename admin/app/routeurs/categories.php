<?php
/*
  ./admin/app/routeurs/categories.php
 */

 include '../app/controleurs/categoriesControleur.php';
 use \App\Controleurs\CategoriesControleur;


 switch ($_GET['categories']) {

   case 'index':
   // LISTE DES CATEGORIES
   // PATTERN: index.php?categories=index
   // CTRL: catgeoriesControleur
   // ACTION: index
     CategoriesControleur\indexAction($connexion);
     break;


     case 'addForm':
     // AJOUT CATEGORIE : FORMULAIRE
     // PATTERN: index.php?categories=addForm
     // CTRL: catgeoriesControleur
     // ACTION: addForm
       CategoriesControleur\addFormAction($connexion);
       break;


       case 'add':
       // AJOUT CATEGORIE : INSERT - Pour le slug
       // PATTERN: index.php?categories=add
       // CTRL: catgeoriesControleur
       // ACTION: add
         CategoriesControleur\addAction($connexion, [
           'name' => $_POST['name']
         ]);
         break;


         case 'delete':
         // SUPPRESION CATEGORIE
         // PATTERN: index.php?categories=delete&id=x
         // CTRL: catgeoriesControleur
         // ACTION: delete
           CategoriesControleur\deleteAction($connexion, $_GET['id']);
           break;


           case 'editForm':
           // MODIFICATION D'UNE CATEGORIE: FORMULAIRE (on va sur le formulaire de modification)
           // PATTERN: index.php?categories=editForm&id=x
           // CTRL: catgeoriesControleur
           // ACTION: editForm
             CategoriesControleur\editFormAction($connexion, $_GET['id']);
             break;


             case 'edit':
             // MODIFICATION D'UNE CATEGORIE: UPDATE (on envois la modification vers le formulaire général)
             // PATTERN: index.php?categories=edit&id=x
             // CTRL: catgeoriesControleur
             // ACTION: edit
               CategoriesControleur\editAction($connexion,[ // On envois ces données vers editAction
                 'id'    => $_GET['id'], // On a construit notre $_GET['id'] dans le htaccess
                 'name'  => $_POST['name'] // POST => Envoyé par le formulaire
               ]);
               break;

}
