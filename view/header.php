<header class="header">
  <div class="over-lay">
    <div>
        <!--logo-->
        <div class="big-logo">
            <a href="index.php">
                <span id="name">XYZ Wear</span>
                <span>Shop</span>
                <sup>tm</sup>
            </a>
        </div>
        <!--menu-->
        <div class="menu">
            <ul class="list-inline">
                <li>
                  <a href="index.php">
                    <input type="button" style="margin-top:5px;height: 30px;font-size: 16px;" class="btn btn-success" value="Home"/>
                  </a>
                </li>
                <li>
                  <a href="cart.php">
                    <input type="submit"
                           name="go_to_cart"
                           style="margin-top:5px;height: 30px;font-size: 16px;"
                           class="btn btn-success"
                           value="My cart" />
                  </a>
                </li>
                <?php
                    if(isset($_SESSION['user'])){
                ?>
                      <li>
                        <a href="view/profile.php">
                          <input type="submit"
                                 style="margin-top:5px;height: 30px;font-size: 16px;"
                                 class="btn btn-success"
                                 value="Your Profile">
                        </a>
                      </li>
                      <li>
                        <a href="User/UserController.php?user_action=logout">
                          <input type="submit"
                                 value="Logout"
                                 style="margin-top:5px;height: 30px;font-size: 16px;"
                                 class="btn btn-success">
                        </a>
                      </li>
                <?php
                    } else {
                ?>
                      <li>
                        <a href="view/login.php">
                          <input type="submit"
                                 style="margin-top:5px;height: 30px;font-size: 16px;"
                                 class="btn btn-success"
                                 value="Login">
                        </a>
                      </li>
                      <li>
                        <a href="view/sign_up.php">
                          <input type="submit"
                                 style="margin-top:5px;height: 30px;font-size: 16px;"
                                 class="btn btn-success"
                                 value="Sign up">
                        </a>
                      </li>
                <?php
                    }
                ?>
                <li>
                  <form action="index.php" method="GET">
                    <input type="text" name="query" style="margin-top:5px;height: 30px;font-size: 16px;"/>
                    <input type="submit" name="search_products" style="margin-top:5px;height: 30px;font-size: 16px;" class="btn btn-success" value="Search" />
                  </form>
                </li>
                <li>
                  <?php
                    if(isset($_SESSION['user'])){
                      echo '<a href="view/profile.php">
              								<h2 id="username">Xin chào ' . $_SESSION['user']->getFullname() . '</h2>
              							</a>';
                    }
                  ?>
                </li>
            </ul>
        </div>
    </div>
  </div>
</header>
