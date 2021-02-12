<head>
    <link rel="stylesheet" type="text/css" href="/css/comments.css">
</head>
<div class="comment-section-container">
    <form method="POST" action="../components/comment_handler.php?page_id=<?php echo $page_id ?>&page_name=<?php echo $page_name ?>">
        <div class="create-comment-fields-container">
            <textarea name="comment" id="comment" placeholder="Add a Comment..." maxlength="500"></textarea>
        </div>
        <div class="comment-submit-container">
            <input type="submit" class="add-comment-button" value="COMMENT" />
        </div>
    </form>
    <?php if (count($comments) > 0) { ?>
        <div class="comments-container">
            <?php foreach ($comments as &$comment) {
            ?>
                <div class="single-comment-container">
                    <ul>
                        <span>User: <?php echo $comment["user_name"] ?></span>
                        <span>Comment: <?php echo $comment["CommentContent"]; ?></span>
                        <span>Time Posted: <?php echo $comment["TimePosted"]; ?></span>
                    </ul>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="no-comments-available">
            There are no comments available yet! Add your thoughts and start the conversation!
        </div>
    <?php } ?>
</div>