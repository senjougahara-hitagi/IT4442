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
    if($email != '') {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert(\"Invalid email format!!!\");</script>";
        $error = true;
      }
    }

    if($error == false){
      if($select_payment == 'deliver'){
        $_SESSION['oder_success'] = true;
        header("Location: ../index.php");
      }
      if($select_payment == 'card')
        $card = true;
    }
  }

  // Kiểm tra thẻ
  if(isset($_POST['bank'])){
    $error = false;
    $name = $_POST['ten_chu_the'];
    $ma_the = $_POST['ma_the'];
    $ngay_phat_hanh = $_POST['ngay_phat_hanh'];
    $bank_name = $_POST['bank_name'];

    // Kiểm tra độ dài mã thẻ đúng không?
    if($ma_the != ''){
      if(strlen($ma_the) != 16){
        echo "<script>alert(\"Mã thẻ lỗi!!!\");</script>";
        $error = true;
      }
    }
    // Kiểm tra xem người dùng nhập ngày phát hành không?
    if($ngay_phat_hanh != ''){
      $today = date("Y-m-d");

      if(strtotime($today) < strtotime($ngay_phat_hanh) ||
         strtotime($ngay_phat_hanh) < strtotime('-10 year', strtotime($today))){
        echo "<script>alert(\"Ngày phát hành không phù hợp !!!\");</script>";
        $error = true;
      }
    }

    if($error == false){
      $_SESSION['oder_success'] = true;
      header("Location: ../index.php");
    } else {
      $card = true;
    }
  }
 ?>
