<?php
class ConnectionDB {
  private static $instance = NULL;

  private function __construct() {}

  private function __clone() {}

  public static function getConnection() {
    if (!isset(self::$instance)) {
      include 'config.php';

      self::$instance = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
      mysqli_query(self::$instance, "SET NAMES 'utf8'");
    }
    return self::$instance;
  }
}
?>
