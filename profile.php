<?php
	include $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/User/User.php';
	session_start();

 	if ($_SERVER["REQUEST_METHOD"] == "POST"){
 		$userId = $_SESSION['user']->getUserId();

 		$fullname = $_POST['fullname'];
 		$sex = $_POST['sex'];
 		$email = $_POST['email'];
 		$address = $_POST['address'];
 		$phonenum = $_POST['phonenum'];

		$query = mysqli_query(ConnectionDB::getConnection(),
													"UPDATE user_info
													 SET full_name = '$fullname', sex = '$sex', email = '$email', address = '$address', phone_number = '$phonenum'
													 WHERE user_id = '$userId'");
		if ($query == true) {
			header('Location: index.php');
		}

 	}
?>
<html>
	<head>
		<title>Profile page</title>
	</head>
	<body>

		<form action="" method="post">
			<label for="fullname">Fullname: </label>
			<input type="text" name="fullname" id="fln" required>
			<br>
			<label for="email">Email: </label>
			<input type="text" name="email" id="eml" required>
			<br>
			<label for="address">Address: </label>
			<input type="text" name="address" id="add" required>
			<br>
			<label for="phonenum">Phone number: </label>
			<input type="number" name="phonenum" id="phn" required>
			<br>
			<label for="sex">Sex: </label>
				<input type="radio" name="sex" value="Male">Male
				<input type="radio" name="sex" value="Female">Female</br>
			<button type="submit" class="btn btn-primary">Update</button>
		</form>
	</body>
</html>
