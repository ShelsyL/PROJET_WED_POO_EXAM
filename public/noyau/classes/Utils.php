<?php

/*
    ./noyau/classes/Utils.php
    Classes des utilitaires
  */

namespace Noyau\Classes;

abstract class Utils
{

  public static function slugify(string $str)
  {
    return trim(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), strtolower($str)), '-');
  }
}
