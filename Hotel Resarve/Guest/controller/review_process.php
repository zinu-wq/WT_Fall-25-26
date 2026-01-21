<?php
include "../model/db.php"; 

$success = "";
$error = "";
$reviewSummary = "";

if (isset($_POST['submitBtn'])) {
    $guest_id = 1; 
    $rating  = $_POST['rating'] ?? '';
    $comment = $_POST['comment'] ?? '';

    if (empty($rating) || empty($comment)) {
        $error = "Please fill all fields!";
    } elseif ($rating < 1 || $rating > 5) {
        $error = "Rating must be between 1 and 5!";
    } else {
        $sql = "INSERT INTO guest_reviews (guest_id, rating, comment)
                VALUES ('$guest_id', '$rating', '$comment')";
        
        if (mysqli_query($conn, $sql)) {
            $success = "Review submitted successfully!";
            $reviewSummary = "
                Rating: $rating<br>
                Comment: $comment<br>
                Status: Pending Approval
            ";
        } else {
            $error = "Submission failed: " . mysqli_error($conn);
        }
    }
}

$allReviews = mysqli_query($conn, "
    SELECT gr.*, g.name AS guest_name
    FROM guest_reviews gr
    LEFT JOIN guests g ON gr.guest_id = g.id
    ORDER BY gr.id DESC
");
if (!$allReviews) {
    $error = "Failed to fetch reviews: " . mysqli_error($conn);
}
