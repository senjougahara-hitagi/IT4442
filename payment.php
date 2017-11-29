<!DOCTYPE html>
<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/User/User.php';
  session_start();
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Payment</title>
  </head>
  <body>
    <?php
      // Biến $card để lưu trữ trạng thái khi người dùng chọn thanh toán bằng thẻ
      $card = false;
      include("check.php");
      if($card == false)
        include("view/form_input_info.php");
      else {
        include("view/form_input_card.php");
      }
    ?>

  </body>
</html>
