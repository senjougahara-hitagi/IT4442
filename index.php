<!-- Hiển thị giao diện danh mục hàng hóa -->
<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/ConnectionDB/ConnectionDB.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/Cart/Cart.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/User/User.php';

  $cart = new Cart();

  // session_unset();

  if(isset($_POST["add_to_cart"])) {
    $id = $_GET["id"];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $cart->add($id, $name, $price, $quantity);

    echo '<script>alert("'.$quantity.' '.$name.' added")</script>';
    // echo '<script>window.location="index.php"</script>';
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title> Shopping Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="lib/bootstrap.min.css">
    <script src="lib/jquery.min.js"></script>
    <script src="lib/bootstrap.min.js"></script>
  </head>
  <body>
    <?php include("view/header.php"); ?>

    <div class="container" style="width:700px;">
      <h3 align="center" style="font-size: 60px">Shop Products</h3><br />
      <?php
        $query = "SELECT * FROM product ORDER BY id ASC";
        $result = mysqli_query(ConnectionDB::getConnection(), $query);
        if(mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_array($result)) {
      ?>
      <div class="col-md-4">
        <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; float: left;" align="center">
            <img src="img/<?php echo $row["image"]; ?>" class="img-responsive" /><br />
            <h4 class="text-info"><?php echo $row["name"]; ?></h4>
            <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
            <input type="hidden" name="name" value="<?php echo $row["name"]; ?>" />
            <input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />
            <input type="hidden" name="quantity" value='1'/>
            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
          </div>
        </form>
      </div>
      <?php
          }
        }
      ?>
    </div>
    <br />
  </body>
</html>
