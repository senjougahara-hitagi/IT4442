<?php
include $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/ConnectionDB/ConnectionDB.php';
class User {
  private $username;
  private $password;
  private $user_id = 0;
  private $full_name;
  private $sex;
  private $email;
  private $address;
  private $phone_number;

  public function __construct($username, $password) {
    $sql_user = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
    $result_user = mysqli_query(ConnectionDB::getConnection(), $sql_user);

    if (mysqli_num_rows($result_user) == 1) {
      $this->username = $username;
      $this->password = $password;
      $this->user_id = mysqli_fetch_array($result_user, MYSQLI_ASSOC)['user_id'];

      $sql_info = "SELECT * FROM user_info WHERE user_id = '$this->user_id'";
      $result_info = mysqli_query(ConnectionDB::getConnection(), $sql_info);


      $row = mysqli_fetch_array($result_info, MYSQLI_ASSOC);

      $this->full_name = $row['full_name'];
      $this->sex = $row['sex'];
      $this->email = $row['email'];
      $this->address = $row['address'];
      $this->phone_number = $row['phone_number'];
    } else {
      echo '<script>alert("Login Fail !!!")</script>';
    }
  }

  public function getUserId() {
    return $this->user_id;
  }

  public function getUser() {
    return array(
                'user_id' => $this->user_id,
                'username' => $this->username,
                'password' => $this->password,
                'full_name' => $this->full_name,
                'sex' => $this->sex,
                'email' => $this->email,
                'address' => $this->address,
                'phone_number' => $this->phone_number);
  }
}
 ?>
