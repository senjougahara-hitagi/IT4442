$(".submit_btn").on("click", function(){
  $.ajax({
    type: 'post',
    url: 'php/comment_controller.php',
    data:{
        addToComments: 'yes',
        productId: productId,
        comment: $("#now_comment").val()
    },
    success:function(response) {
        $("#now_comment").val("");
        $.ajax({
            type: 'post',
            url: 'php/comment_controller.php',
            data:{
                showPrevComment: 'yes',
                productId: productId
            },
            success:function(response) {
                $('#prev_comment_header').text("Nhận xét (có )");
                $('#prev_comment').html(response);
            }
        });
    }
  });
});
