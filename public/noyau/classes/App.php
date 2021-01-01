<?php
/*
 * ./noyau/classes/App.php
 * Classe de l'application
 */

 namespace Noyau\Classes;

abstract class App {
  private static $_connexion = null, $_root, $_start = false, $_template;

   // GETTERS
   // Getter static qui seront lié à la classe et pas à un objet instancier
   public static function getConnexion(){
     return SELF::$_connexion; // C'est static donc SELF
   }
   public static function getRoot(){
     return SELF::$_root; // C'est static donc SELF
   }
   // public static function getTemplate(){
   //   return SELF::$_template;
   // }


   // SETTERS
   // Setter static qui seront lié à la classe et pas à un objet instancier
   private static function setConnexion(){
     $dsn = "mysql:host=".HOSTNAME.";dbname=".DBNAME;
     $param = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

   try {
     SELF::$_connexion = new \PDO($dsn,USERNAME,USERPWD,$param); // On définit la propriété connexion de la classe App comme étant égal à un objet de type PDO.

   }
   catch (\PDOException $e) {
     echo "Erreur! Problème de connexion à la DB");
     }
   }
   private static function setRoot(){
     $url = explode('index.php', $_SERVER['SCRIPT_NAME']); // On explose ce qu'on a dans l'URL
     SELF::$_root = 'http://'. $_SERVER['HTTP_HOST'] . $url[0]; // On définit la propriété root de la class App comme étant égal à 'http://'.$_SERVER['HTTP_HOST'].$url[0];
   }
   // private static function setTemplate(){
   //   if (!(isset($_SERVER['HTTP_X.....']
   // }

   // AUTRES METHODES
    public static function start() {
      if (SELF::$_start === false):
        session_start();
        SELF::setRoot();
        SELF::setConnexion();
        SELF::$_start = true;
      endif;
    }
    public static function close() {
      SELF::$_connexion = null; // Pour vider la connexion PDO
    }
 }
