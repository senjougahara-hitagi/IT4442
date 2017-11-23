<?php
    include $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/User/User.php';
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
    <h1 align="center" style="margin-top: 100px">Login</h1>
    <div class="container" align='center'>
      <form action="" method="post">
        <table>
          <tr>
            <td>
              <label for="username">Username: </label>
            </td>
          	<td>
              <input type="text" name="username" id="usr" placeholder="Enter your username">
            </td>
          </tr>
          <tr>
            <td>
              <label for="password">Password: </label>
            </td>
            <td>
              <input type="password" name="password" id="psw" placeholder="Enter your password">
            </td>
          </tr>
        	<tr>
        	  <td colspan="2" align="center">
        	    <button type="submit" style="margin-top:5px;height: 30px;font-size: 16px;" class="button">Login</button>
        	  </td>
        	</tr>
        </table>
      </form>
    </div>
  </body>
</html>
