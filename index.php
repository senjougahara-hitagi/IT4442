<!-- Hiển thị giao diện danh mục hàng hóa -->
<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/ConnectionDB/ConnectionDB.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/User/User.php';

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
    <script src="lib/jquery.min.js"></script>
    <script src="lib/bootstrap.min.js"></script>
    <script src="main.js"></script>
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
            <div class="col-md-6 ">
              <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; float: left;" align="center">
                <img src="img/<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                <button data-id = "<?php echo $row["id"]; ?>"
                        data-name = "<?php echo $row["name"]; ?>"
                        data-price = "<?php echo $row["price"]; ?>"
                        data-quantity = "1"
                        style="margin-top:5px;"
                        class="btn btn-success buy_btn">Add to Cart
                </button>
              </div>
            </div>
            <?php
          }
        }
      ?>
    </div>
    <br />
  </body>
</html>
