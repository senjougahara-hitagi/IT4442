<?php
  if(isset($_SESSION['user'])){
    echo '<h2>Xin chào ' . $_SESSION['user']->getFullname() . '</h2>';
  }
?>
  <div align='center'>
    <a href="cart_controller.php">
      <input type="submit"
             name="go_to_cart"
             style="margin-top:5px;height: 30px;font-size: 16px;"
             class="btn btn-success"
             value="My cart" />
    </a>
<?php
    if(isset($_SESSION['user'])){
?>
      <a href="view/profile.php">
        <input type="submit"
               style="margin-top:5px;height: 30px;font-size: 16px;"
               class="btn btn-success"
               value="Your Profile">
      </a>
      <a href="User/UserController.php?user_action=logout">
        <input type="submit"
               value="Logout"
               style="margin-top:5px;height: 30px;font-size: 16px;"
               class="btn btn-success">
      </a>
<?php
    } else {
?>
      <a href="view/login.php">
        <input type="submit"
               style="margin-top:5px;height: 30px;font-size: 16px;"
               class="btn btn-success"
               value="Login">
      </a>
      <a href="view/sign_up.php">
        <input type="submit"
               style="margin-top:5px;height: 30px;font-size: 16px;"
               class="btn btn-success"
               value="Sign up">
      </a>
<?php
    }
?>
    <form action="search.php" method="GET">
      <input type="text" name="query" style="margin-top:5px;height: 30px;font-size: 16px;"/>
      <input type="submit" name="search_products" style="margin-top:5px;height: 30px;font-size: 16px;" class="btn btn-success" value="Search" />
    </form>
  </div>
