<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Notify</title>
  </head>
  <body>
    <div align="center">
      <?php
      session_start();
      if(isset($_SESSION['signup'])){
        if($_SESSION['signup'] == "signup_success"){
          echo "<h3> Bạn đã đăng ký thành công !!! </h3>";
        } else {
          if($_SESSION['signup'] == "re_password_wrong"){
            echo "<h3>Password bạn nhập không phù hợp hoặc nhập sai re-password !!!</h3>";
          }
          if($_SESSION['signup'] == "account_existed"){
            echo "<h3>Tên tài khoản đã được sử dụng !!!</h3>";
          }
          echo "<a href='sign_up.php'>Thử lại</a>";
        }
        unset($_SESSION['signup']);
      }

      if(isset($_SESSION['login'])){
        echo "<h3>Đăng nhập thất bại, hãy kiểm tra lại username và password !!!</h3>";
        echo "<a href='login.php'>Thử lại</a>";
        unset($_SESSION['login']);
      }

      if(isset($_SESSION['update'])){
        if($_SESSION['update'] == true)
          echo "<h3>Đã chỉnh sửa profile thành công !!!</h3>";
        else {
          echo "<h3>Chỉnh sửa profile thất bại !!!</h3>";
          echo "<a href='profile.php'>Thử lại</a>";
        }
        unset($_SESSION['update']);
      }
      ?>
      <a href="../index.php">Quay trở về trang chủ</a>
    </div>
  </body>
</html>
