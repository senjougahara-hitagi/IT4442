<!DOCTYPE html>
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
        include("form_view/form_input_info.php");
      else {
        include("form_view/form_input_card.php");
      }
    ?>

  </body>
</html>
