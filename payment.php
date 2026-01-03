<!DOCTYPE html>
<html>
<head>
    
    <title>Participant Registration</title>

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
            width: 300px;
            margin: 0 auto;
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

<h2>Payment</h2>

<form method="post">
Payment Method:
<select name="method">
  <option>Card</option>
  <option>Mobile Wallet</option>
  <option>Cash</option>
</select>

<input type="submit" name="pay" value="Pay Now">
</form>

<?php
if (isset($_POST['pay'])) {

    $method = $_POST['method'];
    $status = "Paid";
    $receipt_id = rand(10000,99999);

    echo "<div id='output'>";
    echo "<h3>Payment Receipt</h3>";
    echo "Receipt ID: <b>$receipt_id</b><br>";
    echo "Payment Method: <b>$method</b><br>";
    echo "Payment Status: <b>$status</b><br>";
    echo "<br><b>Payment completed successfully.</b>";
    echo "</div>";
}
?>


</body>
</html>
