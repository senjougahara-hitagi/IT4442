<?php
  if(isset($_SESSION['logged_in'])){
?>
    <a href="profile.php">
      <input type="submit" style="margin-top:5px;height: 30px;font-size: 16px;" class="btn btn-success" value="Your Profile">
    </a>
    <a href="logout.php">
      <input type="submit" style="margin-top:5px;height: 30px;font-size: 16px;" class="btn btn-success" value="Logout">
    </a>
<?php
  } else {
?>
    <a href="login.php">
      <input type="submit" style="margin-top:5px;height: 30px;font-size: 16px;" class="btn btn-success" value="Login">
    </a>
    <a href="sign_up.php">
      <input type="submit" style="margin-top:5px;height: 30px;font-size: 16px;" class="btn btn-success" value="Sign up">
    </a>
<?php
  }
?>
