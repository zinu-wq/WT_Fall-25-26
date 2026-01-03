<!DOCTYPE html>
<html>
<head>
    <title>Booking Status</title>

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
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input, select, button {
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

<h2>Booking Status</h2>

<?php
// Default status
$status = "Pending";

// Handle Cancel Booking
if(isset($_POST['cancel'])){
    $status = "Cancelled";
    $message = "Your booking has been cancelled!";
}

// Handle Status Update (for demo)
if(isset($_POST['update'])){
    $status = $_POST['status'];
}

echo "<div id='output'>";
echo "<h3>Current Status: <b id='statusText'>$status</b></h3>";
echo "<p id='msg'>";
if(isset($message)) echo $message;
echo "</p>";
echo "</div>";
?>

<!-- Cancel Booking Form -->
<form method="post" id="cancelForm">
    <button type="button" id="cancelBtn">Cancel Booking</button>
</form>

<!-- Optional: simulate status update -->
<form method="post" id="updateForm">
    <select name="status" id="statusSelect">
        <option>Pending</option>
        <option>Confirmed</option>
        <option>Cancelled</option>
        <option>Completed</option>
    </select>
    <button type="button" id="updateBtn">Update Status</button>
</form>

<script>
// JS: Cancel Booking
document.getElementById('cancelBtn').addEventListener('click', function(){
    document.getElementById('statusText').innerText = 'Cancelled';
    document.getElementById('msg').innerText = 'Your booking has been cancelled!';
    document.getElementById('cancelForm').submit();
});

// JS: Update Status from dropdown
document.getElementById('updateBtn').addEventListener('click', function(){
    var selected = document.getElementById('statusSelect').value;
    document.getElementById('statusText').innerText = selected;
    document.getElementById('msg').innerText = '';
    document.getElementById('updateForm').submit();
});
</script>

</body>
</html>
