<html>
	<head>
		<title>Sign up</title>
	</head>
	<body>
		<h1 align="center" style="margin-top: 100px">Sign up</h1>
		<form action="../User/UserController.php" method="post">
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
						<button type="submit"
										name="user_action"
										value="signup"
										style="margin-top:5px;height: 30px;font-size: 16px;"
										class="button">Sign up
						</button>
						<a href="../index.php">
							<input type="button" value="Back" style="margin-top:5px;height: 30px;font-size: 16px;">
						</a>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
