<!DOCTYPE html>
<html>
<head>
    <title>Guest Review Submission</title>
    <link rel="stylesheet" href="../css/review.css">
    <script src="../js/review.js" defer></script>
</head>
<body>

<h2>Submit Guest Review</h2>

<form method="post" id="reviewForm">
    <label>Rating (1-5):</label>
    <input type="number" name="rating" id="ratingInput" min="1" max="5" required>

    <label>Comment:</label>
    <textarea name="comment" id="commentInput" required></textarea>

    <button type="submit" name="submitBtn">Submit</button>
</form>

<div id="output">
<?php
include '../controller/review_process.php';

if ($success) echo "<p style='color:green;'>$success</p>";
if ($error) echo "<p style='color:red;'>$error</p>";

if ($reviewSummary) {
    echo "<div style='border:1px solid #ccc; padding:10px; margin-top:10px; background:#f9f9f9;'>";
    echo "<strong>Your Review:</strong><br>" . $reviewSummary;
    echo "</div>";
}
?>
</div>


<h3>All Reviews</h3>
<?php if ($allReviews && mysqli_num_rows($allReviews) > 0): ?>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Guest</th>
            <th>Rating</th>
            <th>Comment</th>
            <th>Status</th>
            <th>Created At</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($allReviews)): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['guest_name'] ?? 'Guest Unknown' ?></td>
            <td><?= $row['rating'] ?></td>
            <td><?= $row['comment'] ?></td>
            <td><?= $row['status'] ?></td>
            <td><?= $row['created_at'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
<?php else: ?>
    <p>No reviews submitted yet.</p>
<?php endif; ?>

</body>
</html>
