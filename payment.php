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
      // Biến $payment_method để lưu trữ trạng thái khi người dùng chọn phương thức thanh toán
      $payment_method = null;
      include("view/check_payment.php");
      switch ($payment_method) {
        case null:
          include("view/form_input_info.php");
          break;
        case 'card':
          include("view/form_input_card.php");
          break;
        default:
          break;
      }
    ?>
  </body>
</html>
