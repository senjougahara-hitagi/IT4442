<?php
	include $_SERVER['DOCUMENT_ROOT'].'/IT4442/sp_20171/config/ConnectionDB/ConnectionDB.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
  	$username = $_POST['username'];
  	$password = $_POST['password'];
  	$sql = "SELECT * FROM user WHERE username = '$username'";
  	$result = mysqli_query(ConnectionDB::getConnection(), $sql);

  	$count = mysqli_num_rows($result);
  	if ($count == 0) {
  		$sql = "INSERT INTO user(username, password) VALUES ('$username', '$password')";
  		mysqli_query(ConnectionDB::getConnection(), $sql);
			header('Location: index.php');
  	} else {
  		echo 'Account existed.';
  	}
  }
?>

<html>
	<head>
		<title>Sign up</title>
	</head>

	<body>
		<form action="" method="post">
			<p>Sign up</p>
			<label for="username">Username: </label>
			<input type="text" name="username" id="usr" placeholder="Enter your username">
			<br>
			<label for="password">Password: </label>
			<input type="password" name="password" id="psw" placeholder="Enter your password">
			<br>
			<input type="submit" value="Sign up"/>
		</form>
		<a href="index.php"><button>Back</button></a>
	</body>
</html>
