<?php
class ProductView
{
  public function output($result){
  ?>
  <div class="container" style="width:700px;">
      <h3 align="center" style="font-size: 60px">Shop Products</h3><br />
      <?php
       include_once $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/Cart/Cart.php';
       if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) 
        {
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
  <?php
  }
}
?>