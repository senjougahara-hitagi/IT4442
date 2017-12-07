<?php
  include $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/User/User.php';
  session_start();

  if(isset($_REQUEST['user_action'])){
    switch ($_REQUEST['user_action']) {
      case 'login':
        $user = new User();
        if($user->login($_POST['username'], $_POST['password'])){
          header("Location: ../index.php");
        } else {
          header('Location: ../view/notification.php');
        }
        break;

      case 'logout':
        unset ($_SESSION['user']);
        header("Location: ../index.php");
        break;

      case 'signup':
        $user = new User();
        $user->signup($_POST['username'], $_POST['password'], $_POST['re_password']);
        header('Location: ../view/notification.php');
        break;

      case 'profile':
        $fullname = $_POST['fullname'];
        $sex = $_POST['sex'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phonenum = $_POST['phonenum'];

        $_SESSION['user']->setProfile($fullname, $sex, $email, $address, $phonenum);
        header('Location: ../view/notification.php');
        break;

      default:
        break;
    }
  }
 ?>
