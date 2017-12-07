<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/User/User.php';
  session_start();
 ?>
<html>
	<head>
		<title>Profile page</title>
	</head>
	<body>
		<h1 align="center" style="margin-top: 100px">Your profile</h1>
		<form action="../User/UserController.php" method="post">
			<table align="center">
				<tr>
					<td>
						<label for="fullname">Fullname </label>
					</td>
					<td>
						<input type="text"
									 name="fullname"
									 id="fln"
									 value="<?php echo (isset($_SESSION['user']) && $_SESSION['user']->getFullname() != null)
									 										? $_SESSION['user']->getFullname()
																			: ''; ?>"
									 required>
					</td>
				</tr>
				<tr>
					<td>
						<label for="email">Email </label>
					</td>
					<td>
						<input type="text"
									 name="email"
			 					 	 id="eml"
									 value='<?php echo (isset($_SESSION['user']) && $_SESSION['user']->getEmail() != null)
															 ? $_SESSION['user']->getEmail()
															 : ''; ?>'
									 required>
					</td>
				</tr>
				<tr>
					<td>
						<label for="address">Address </label>
					</td>
					<td>
						<input type="text"
									 name="address"
									 id="add"
									 value='<?php echo (isset($_SESSION['user']) && $_SESSION['user']->getAddress() != null)
															 ? $_SESSION['user']->getAddress()
															 : ''; ?>'
									 required>
					</td>
				</tr>
				<tr>
					<td>
						<label for="phonenum">Phone number </label>
					</td>
					<td>
						<input type="number"
									 name="phonenum"
									 id="phn"
									 value='<?php echo (isset($_SESSION['user']) && $_SESSION['user']->getPhoneNumber() != null)
															 ? $_SESSION['user']->getPhoneNumber()
															 : ''; ?>'
									 required>
					</td>
				</tr>
				<tr>
					<td>
						<label for="sex">Sex </label>
					</td>
					<td>
						<input type="radio"
									 name="sex"
									 <?php echo (isset($_SESSION['user']) && $_SESSION['user']->getSex() != null && $_SESSION['user']->getSex() == 'Male')
															? 'checked'
															: ''; ?>
									 value="Male">Male
						<input type="radio"
									 name="sex"
									 <?php echo (isset($_SESSION['user']) && $_SESSION['user']->getSex() != null && $_SESSION['user']->getSex() == 'Female')
															? 'checked'
															: ''; ?>
									 value="Female">Female</br>
					</td>
				</tr>
				<tr>
					<td colspan="2" align='center'>
						<button type="submit"
										name="user_action"
										value="profile"
										style="margin-top:5px;height: 30px;font-size: 16px;"
										class="btn btn-primary">Update
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
