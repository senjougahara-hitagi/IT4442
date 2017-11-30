<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/ConnectionDB/ConnectionDB.php';
class User {
  private $user_id = null;
  private $username = null;
  private $full_name = null;
  private $sex = null;
  private $email = null;
  private $address = null;
  private $phone_number = null;

  public function __construct(){
    if(isset($_SESSION['user']))
      return $_SESSION['user'];
  }

  public function login($username, $password) {
    $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
    $result = mysqli_query(ConnectionDB::getConnection(), $sql);

    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $this->username = $row['username'];
      $this->user_id = $row['user_id'];

      $this->getProfile();

      $_SESSION['user'] = $this;

      return true;
    } else {
      $_SESSION['login'] = fail;
      return false;
    }
  }

  public function logout() {
    if(isset($_SESSION['user'])) {
      unset($_SESSION['user']);
    }
  }

  private function getProfile() {
    $sql = "SELECT * FROM user_info WHERE user_id = '$this->user_id'";
    $result = mysqli_query(ConnectionDB::getConnection(), $sql);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if($row != null) {
      $this->full_name = $row['full_name'];
      $this->sex = $row['sex'];
      $this->email = $row['email'];
      $this->address = $row['address'];
      $this->phone_number = $row['phone_number'];
      return true;
    } else {
      return false;
    }
  }

  public function signup($username, $password, $re_password) {
    if($password != $re_password || strlen($password) < 6 ) {
      $_SESSION['signup'] = "re_password_wrong";
      return false;
    }

    $sql = "SELECT * FROM user WHERE username = '$username'";
  	$result = mysqli_query(ConnectionDB::getConnection(), $sql);

  	if (mysqli_num_rows($result) == 0) {
  		$sql = "INSERT INTO user(username, password) VALUES ('$username', '$password')";
      $_SESSION['signup'] = "signup_success";
			return mysqli_query(ConnectionDB::getConnection(), $sql);
  	} else {
      $_SESSION['signup'] = "account_existed";
  		return false;
  	}
  }

  public function setProfile($full_name, $sex, $email, $address, $phone_number) {
    if($this->getProfile()) {
      $sql = "UPDATE user_info
              SET full_name = '$full_name', sex = '$sex', email = '$email', address = '$address', phone_number = '$phone_number'
              WHERE user_id = '$this->user_id'";
    } else {
      $sql = "INSERT INTO user_info(user_id, full_name, sex, email, address, phone_number)
              VALUES ('$this->user_id', '$full_name', '$sex', '$email', '$address', '$phone_number')";
    }

    $query = mysqli_query(ConnectionDB::getConnection(), $sql);

    $this->getProfile();
    if($query)
      $_SESSION['update'] = true;
    else {
      $_SESSION['update'] = false;
    }
		return $query;
  }

  public function getUserId() {
    return $this->user_id;
  }

  public function getUsername() {
    return $this->username;
  }

  public function getFullname() {
    return $this->full_name;
  }

  public function getSex() {
    return $this->sex;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getAddress() {
    return $this->address;
  }

  public function getPhoneNumber() {
    return $this->phone_number;
  }
}
 ?>
