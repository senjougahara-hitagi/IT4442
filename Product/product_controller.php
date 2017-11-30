<?php
  include $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/Product/product_view.php';
  include $_SERVER['DOCUMENT_ROOT'].'/IT4442/it4442/Product/product_model.php';
  //class ProductController(
  if($flag == 1) $product_model = new ProductModel();
  else $product_model = new ProductModel($_GET['query']);
  $product_view = new ProductView();
  $product_view->output($product_model->getResult());
  //)
?>
