<!-- Check thông tin nhập vào -->
<?php
  // Kiểm tra thông tin cá nhân khách hàng
  if(isset($_POST['Mua_hang'])){
    $error = false;
    $email = $_POST['email'];
    $select_payment = null;

    if(isset($_POST['select_payment']))
      $select_payment = $_POST['select_payment'];

    // Kiểm tra cú pháp email đúng không?
    if($email != ''){
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div align='center'>Invalid email format!!!</div><br>";
        $error = true;
      }
    }

    if($error == false){
      if($select_payment == 'deliver')
        echo "<script>alert(\"Đặt hàng thành công\");</script>";
      if($select_payment == 'card')
        $card = true;
    }
  }

  // Kiểm tra thẻ
  if(isset($_POST['bank'])){
    $error = false;;
    $name = $_POST['ten_chu_the'];
    $ma_the = $_POST['ma_the'];
    $ngay_phat_hanh = $_POST['ngay_phat_hanh'];
    $bank_name = $_POST['bank_name'];

    // Kiểm tra xem người dùng nhập tên chủ thẻ không?
    if($name == ''){
      echo "<div align='center'>Tên chủ thẻ bắt buộc phải nhập!!!</div><br>";
      $error = true;
    }
    // Kiểm tra xem người dùng nhập mã thẻ không?
    if($ma_the == ''){
      echo "<div align='center'>Mã thẻ bắt buộc phải nhập!!!</div><br>";
      $error = true;
    } else {
      // Kiểm tra độ dài mã thẻ đúng không?
      if(strlen($ma_the) != 16){
        echo "<div align='center'>Mã thẻ lỗi!!!</div><br>";
        $error = true;
      }
    }
    // Kiểm tra xem người dùng nhập ngày phát hành không?
    if($ngay_phat_hanh == ''){
      echo "<div align='center'>Ngày phát hành buộc phải nhập!!!</div><br>";
      $error = true;
    } else {
    }
    // Kiểm tra xem người dùng chọn tên ngân hàng không?
    if($bank_name == ''){
      echo "<div align='center'>Bắt buộc phải chọn một ngân hàng!!!</div><br>";
      $error = true;
    }

    if($error == false){
      echo "<script>alert(\"Đặt hàng thành công\");</script>";
    } else {
      $card = true;
    }
  }
 ?>
