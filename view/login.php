<html>
  <head>
  	<title>Login</title>
  </head>
  <body>
    <h1 align="center" style="margin-top: 100px">Login</h1>
    <form action="../User/UserController.php" method="post">
      <table align='center'>
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
      	    <button type="submit"
                    name="user_action"
                    value="login"
                    style="margin-top:5px;height: 30px;font-size: 16px;"
                    class="button">Login
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
