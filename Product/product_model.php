<?php
//include $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/ConnectionDB/ConnectionDB.php';


class ProductModel
{
  private $result;
  public function __construct(){
    $argv = func_get_args();
    switch( func_num_args() ) {
        case 0:
            $query = "SELECT * FROM product ORDER BY name ASC";
            $this->result = mysqli_query(ConnectionDB::getConnection(), $query);
            break;
        case 1:
            $query = "SELECT * FROM product
            WHERE (`name` LIKE '%".$argv[0]."%')";
            $this->result = mysqli_query(ConnectionDB::getConnection(), $query);
     }
  }

  /*public function __construct($search_data) {
    $query = "SELECT * FROM product ORDER BY name ASC
              WHERE (`name` LIKE '%".$query."%')";
    $this->result = mysqli_query(ConnectionDB::getConnection(), $query);
  }
  */
  public function getResult() {
    return $this->result;
  }

}
?>
