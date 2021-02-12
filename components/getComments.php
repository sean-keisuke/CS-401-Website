<?php
function getCommentSection($con, $pageID)
{
    //read from database
    $query = "select * from comments c inner join users u on c.UserID = u.id where pageID = $pageID order by TimePosted desc";
    $result = mysqli_query($con, $query);

    if ($result) {
        if ($result && mysqli_num_rows($result) > 0) {
            $json = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $json;
        }
    }
}
