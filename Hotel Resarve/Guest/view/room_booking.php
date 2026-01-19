<?php
include "../controller/room_booking.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Guest Room Booking</title>
    <link rel="stylesheet" href="../css/room_booking.css">
    <script src="../js/room_booking.js" defer></script>
</head>
<body>
<h2>Book a Room</h2>

<?php if($success) echo "<p style='color:green;'>$success</p>"; ?>
<?php if($error) echo "<p style='color:red;'>$error</p>"; ?>

<form method="post">
   
    <label>Search Room Type</label>
    <select name="search_room" required>
        <option value="">Select Room Type</option>
        <option value="Single">Single</option>
        <option value="Double">Double</option>
        <option value="Deluxe">Deluxe</option>
    </select>

   
    <label>Check-in Date</label>
    <input type="date" name="checkin" required>

    <label>Check-out Date</label>
    <input type="date" name="checkout" required>

   
    <label>Preferred Room</label>
    <select name="preference" required>
        <option value="">Select Preference</option>
        <option>AC</option>
        <option>Non-AC</option>
        <option>Sea View</option>
    </select>

    <label>Payment Method</label>
    <select name="payment_method" required>
        <option value="">Select Payment</option>
        <option>Cash</option>
        <option>Card</option>
        <option>Online</option>
    </select>

    <button type="submit" name="book">Book Room</button>
    <div id="output">
<?php

?>
</div>
</form>
</body>
</html>
