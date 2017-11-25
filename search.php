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
    <br />

    <?php
    if(isset($_SESSION['user'])){
      echo '<h2>Xin chào ' . $_SESSION['user']['full_name'] . '</h2>';

      if(!isset($_SESSION['user']['full_name']) ||
         !isset($_SESSION['user']['sex']) ||
         !isset($_SESSION['user']['email']) ||
         !isset($_SESSION['user']['address']) ||
         !isset($_SESSION['user']['phone_number']))
        echo '<h3>Bạn chưa update profile, làm ơn hãy update để chúng tôi có thể phục vụ bạn tốt nhất !!!</h3>';
    } ?>

    <div align='center'>

      <a href="cart_controller.php"><input type="submit" name="go_to_cart" style="margin-top:5px;height: 30px;font-size: 16px;" class="btn btn-success" value="My cart" /></a>

      <?php include("header.php"); ?>

      <form action="search.php" method="GET">
        <input type="text" name="query" style="margin-top:5px;height: 30px;font-size: 16px;"/>
        <input type="submit" name="search_products" style="margin-top:5px;height: 30px;font-size: 16px;" class="btn btn-success" value="Search" />
        <a href="index.php">
          <input type="button" style="margin-top:5px;height: 30px;font-size: 16px;" class="btn btn-success" value="Back"/>
        </a>
      </form>

    </div>

    <div class="container" style="width:700px;">
      <h3 align="center" style="font-size: 60px">Shop Products</h3><br />
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/ConnectionDB/ConnectionDB.php';
    include $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/Cart/Cart.php';
    //include $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/index.php';
    //$result = mysqli_query(ConnectionDB::getConnection(), $query);
    $query = $_GET[ 'query'];
    // gets value sent over search form

    $min_length = 1;
    // you can set minimum length of the query if you want

    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then

        //$query = htmlspecialchars($query);
        // changes characters used in html to their equivalents, for example: < to &gt;

        //$query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection

        $raw_results = mysqli_query(ConnectionDB::getConnection(), "SELECT * FROM product
            WHERE (`name` LIKE '%".$query."%')");
        //print_r($raw_results);

        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table

        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'

        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following

            while($row = mysqli_fetch_array($raw_results)){
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
        else{ // if there is no matching rows do following
            echo "No results";
        }

    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>
 <div style="clear:both"></div>
    </div>
    <br />
  </body>
</html>
