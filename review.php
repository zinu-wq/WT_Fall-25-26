<!DOCTYPE html>
<html>
<head>
    <title>Guest Review Submission</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f0f8ff;
        }

        h2 {
            text-align: center;
            color: #003366;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            width: 320px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input, textarea, select, button {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #003366;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #0055aa;
        }

        #output {
            margin-top: 20px;
            text-align: center;
            font-size: 16px;
            color: #003366;
        }


        
    </style>
</head>
<body>

<h2>Submit Guest Review</h2>

<form method="post" id="reviewForm">
    Rating (1-5):
    <input type="number" name="rating" id="ratingInput" min="1" max="5" required>

    Comment:
    <textarea name="comment" id="commentInput" required></textarea>

    <button type="submit" name="submitBtn">Submit</button>
</form>



<?php
if(isset($_POST['submitBtn'])){
    $rating = htmlspecialchars($_POST['rating']);
    $comment = htmlspecialchars($_POST['comment']);
    echo "<div id='output'><h3>Review Submitted (Pending Approval)</h3></div>";
}
?>

<script>

const ratingInput = document.getElementById('ratingInput');
const commentInput = document.getElementById('commentInput');
const ratingPreview = document.getElementById('ratingPreview');
const commentPreview = document.getElementById('commentPreview');

ratingInput.addEventListener('input', function(){
    ratingPreview.innerText = ratingInput.value || '-';
});

commentInput.addEventListener('input', function(){
    commentPreview.innerText = commentInput.value || '-';
});
</script>

</body>
</html>
