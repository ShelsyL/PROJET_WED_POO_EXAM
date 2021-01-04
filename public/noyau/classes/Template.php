<?php

namespace Noyau\Classes;

abstract class Template {

  private static $_zone = null;

  // GETTERS
    // Getter avec parametre $zone qui récupere la valeur de la clé donné en parametre (ex: $_zone est 'content', il recupere la valeur dont la cle est 'content')
  public static function getZone(string $zone)
  {
    // return SELF::$_zone['content'];
    return SELF::$_zone[$zone];
  }

  // SETTERS
  public static function setZone(string $zone, string $content = 'valeur par defaut')
  {
    SELF::$_zone[$zone] = $content;
  }

  public static function startZone()
  {
    ob_start();
  }

  public static function stopZone(string $zone)
  {
    SELF::setZone($zone, ob_get_clean());
  }

  public static function addZones($zones)
  {
    foreach ($zones as $zone) :
      SELF::setZone($zone);
    endforeach;
  }
}
