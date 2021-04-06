$(function () {
  $(".delete-comment-btn").click(function () {
    var page_name = $("#page_name").val();
    var comment_id = $(this).siblings("#comment_id").val();
    var comment_user = $(this).siblings("#comment_user").val();
    var url = `../components/delete_comment_handler.php?page_name=${page_name}&comment_id=${comment_id}&UserID=${comment_user}`;
    console.log(url);
    $.ajax({
      url,
      success: function () {
        $(`.comment_${comment_id}`).remove();
        // alert("Comment Deleted");
      },
    });
  });
});

