<?php
	include $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/ConnectionDB/ConnectionDB.php';

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
		<h1 align="center" style="margin-top: 100px">Sign up</h1>
		<form action="" method="post">
			<table align='center'>
				<tr>
					<td><label for="username">Username: </label></td>
					<td><input type="text" name="username" id="usr" placeholder="Enter your username"></td>
				</tr>
				<tr>
					<td><label for="password">Password: </label></td>
					<td><input type="password" name="password" id="psw" placeholder="Enter your password"></td>
				</tr>
				<tr>
					<td colspan="2" align='center'>
						<input type="submit" value="Sign up" style="margin-top:5px;height: 30px;font-size: 16px;">
						<a href="index.php"><button style="margin-top:5px;height: 30px;font-size: 16px;">Back</button></a>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
