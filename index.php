<!-- Hiển thị giao diện danh mục hàng hóa -->
<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/ConnectionDB/ConnectionDB.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/User/User.php';
  static $flag = 1;
  session_start();
  // session_unset();
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Shopping Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="lib/bootstrap.min.css">
    <link rel="stylesheet" href="lib/main.css">
    <script src="lib/jquery.min.js"></script>
    <script src="lib/bootstrap.min.js"></script>
    <script src="lib/main.js"></script>
  </head>
  <body>
    <?php
      include("view/header.php");
      if(isset($_SESSION['oder_success'])){
        unset($_SESSION['cart']);
        unset($_SESSION['oder_success']);
        echo "<script>alert(\"Đặt hàng thành công\");</script>";
      }
    ?>

    <div class="content">
      <div class="over-lay">
        <div class="container">
          <div class="row">
            <?php include("Product/product_controller.php"); ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
