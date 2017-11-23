<?php
    include $_SERVER['DOCUMENT_ROOT'].'/IT4442/sp_20171/config/User/User.php';
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    	$username = $_POST['username'];
    	$password = $_POST['password'];

      $user_session = new User($username, $password);

      if($user_session->getUserId() != 0){
        $_SESSION['logged_in'] = true;
        $_SESSION['user'] = $user_session->getUser();
        header("Location: index.php");
      }
    }
?>

<html>
  <head>
  	<title>Login</title>
  </head>

  <body>
    <div class="container">
    <form action="" method="post">
    	<label for="username">Username: </label>
    	<input type="text" name="username" id="usr" placeholder="Enter your username">
    	<br>
    	<label for="password">Password: </label>
    	<input type="password" name="password" id="psw" placeholder="Enter your password">
    	<br>
    	<button type="submit" class="button">Login</button>
    </form>
  </body>
</html>
