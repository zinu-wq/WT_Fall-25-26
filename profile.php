<!DOCTYPE html>
<html>
<head>
<title>Manage Profile</title>

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

input, textarea, button {
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

#preview {
    margin-top: 15px;
    background: #e0f0ff;
    padding: 10px;
    border-radius: 5px;
}
</style>
</head>

<body>

<h2>Manage Profile</h2>

<form method="post" id="profileForm">
    Preferred Floor:
    <input type="text" name="floor" id="floorInput">

    Special Request:
    <textarea name="request" id="requestInput"></textarea>

    <button type="submit" name="save">Save</button>
</form>

<?php
if(isset($_POST['save'])){
    $floor = htmlspecialchars($_POST['floor']);
    $request = htmlspecialchars($_POST['request']);
    echo "<div id='output'><h3>Profile Updated Successfully</h3></div>";
}
?>

<script>
// JS: Instant preview
const floorInput = document.getElementById('floorInput');
const requestInput = document.getElementById('requestInput');
const floorPreview = document.getElementById('floorPreview');
const requestPreview = document.getElementById('requestPreview');

floorInput.addEventListener('input', function(){
    floorPreview.innerText = floorInput.value || '-';
});

requestInput.addEventListener('input', function(){
    requestPreview.innerText = requestInput.value || '-';
});
</script>

</body>
</html>
