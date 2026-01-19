<?php
if (isset($_POST['submitBtn'])) {
    $rating  = $_POST['rating'] ?? '';
    $comment = $_POST['comment'] ?? '';

    echo "<h3>Review Submitted</h3>";
    echo "<p><b>Rating:</b> $rating</p>";
    echo "<p><b>Comment:</b> $comment</p>";
    echo "<p>Status: <b>Pending Approval</b></p>";
}
?>
