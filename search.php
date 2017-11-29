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
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/User/User.php';
    include_once $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/ConnectionDB/ConnectionDB.php';
    session_start();
    include("view/header.php");
    ?>

    <div class="container" style="width:700px;">
      <h3 align="center" style="font-size: 60px">Shop Products</h3><br/>

    <?php
    //$result = mysqli_query(ConnectionDB::getConnection(), $query);
    $query = $_GET[ 'query'];
    // gets value sent over search form

    $min_length = 1;
    // you can set minimum length of the query if you want

    if(strlen($query) >= $min_length) { // if query length is more or equal minimum length then

        //$query = htmlspecialchars($query);
        // changes characters used in html to their equivalents, for example: < to &gt;

        //$query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection

        $raw_results = mysqli_query(ConnectionDB::getConnection(), "SELECT *
                                                                    FROM product
                                                                    WHERE (`name` LIKE '%".$query."%')");
        //print_r($raw_results);

        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table

        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'

        if(mysqli_num_rows($raw_results) > 0) { // if one or more rows are returned do following
            while($row = mysqli_fetch_array($raw_results)){
    ?>
              <div class="col-md-6">
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
        } else { // if there is no matching rows do following
            echo "No results";
        }
    } else { // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
    ?>
    </div><br/>
  </body>
</html>
