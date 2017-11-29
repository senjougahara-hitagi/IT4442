$(document).ready(function(){
  $('body').on('click', '.buy_btn', function(){
    var productId       = $(this).attr('data-id');
    var productQuantity = $(this).attr('data-quantity');
    var productName     = $(this).attr('data-name');
    var productPrice    = $(this).attr('data-price');
    $.ajax({
      type: 'post',
      url: 'Cart/CartController.php',
      data:{
          addToCart: 'yes',
          id: productId,
          name: productName,
          price: productPrice,
          quantity: productQuantity
      },
      success:function(response) {
          alert(productQuantity + " " + productName + " has been added !!!");
      }
    });
  });
});
