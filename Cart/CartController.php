<?php
  include 'Cart.php';
  session_start();

  $cart = new Cart();
  if($_POST) {
    $id = $_POST["id"];
    if(isset($_POST["addToCart"])) {
      $name = $_POST['name'];
      $price = $_POST['price'];
      $quantity = $_POST['quantity'];

      $cart->add($id, $name, $price, $quantity);
    } else {
      if($_POST["submit"] == "Edit"){
        $quantity = $_POST["quantity"];
        $cart->edit($id, $quantity);
      }
      if($_POST["submit"] == "Remove"){
          $cart->delete($id);
      }
      header("Location: ../cart.php");
    }
  }
 ?>
