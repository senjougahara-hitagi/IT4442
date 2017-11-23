<?php
class ConnectionDB {
  private static $instance = NULL;

  private function __construct() {}

  private function __clone() {}

  public static function getConnection() {
    if (!isset(self::$instance)) {
      $dbhost = "localhost";
      $dbuser = "root";
      $dbpass = "";
      $dbname = "sp_20171";

      self::$instance = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    }
    return self::$instance;
  }
}
?>
