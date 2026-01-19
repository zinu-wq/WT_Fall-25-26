<!DOCTYPE html>
<html>
<head>
    <title>Guest Review Submission</title>
    <link rel="stylesheet" href="../css/review.css">
    <script src="../js/review.js" defer></script>
</head>
<body>

<h2>Submit Guest Review</h2>

<form method="post"  id="reviewForm">
    <label>Rating (1-5):</label>
    <input type="number" name="rating" id="ratingInput" min="1" max="5" required>

    <label>Comment:</label>
    <textarea name="comment" id="commentInput" required></textarea>

    <button type="submit" name="submitBtn">Submit</button>
</form>

<!-- Output will appear here -->
<div id="output">
<?php
include '../controller/review_process.php';
?>
</div>

</body>
</html>
