<?php
include "../controller/room_booking.php"; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Room Booking</title>
    <link rel="stylesheet" href="../css/room_booking.css">
    <script src="../js/room_booking.js"></script>
</head>
<body>

<h2>Room Booking</h2>

<form method="post">
    <label>Search Room Type</label>
    <select name="search_room" required>
        <option value="">Search Room Type</option>
        <option>Single</option>
        <option>Double</option>
        <option>Deluxe</option>
    </select>

    <label>Check-in Date</label>
    <input type="date" name="checkin" required>

    <label>Check-out Date</label>
    <input type="date" name="checkout" required>

    <label>Preferred Room</label>
    <select name="preference" required>
        <option value="">Preferred Room</option>
        <option>AC</option>
        <option>Non-AC</option>
        <option>Sea View</option>
    </select>

    <label>Payment Method</label>
    <select name="payment_method" required>
        <option value="">Select Payment Method</option>
        <option>Cash</option>
        <option>Card</option>
        <option>Online</option>
    </select>

    <label>Booking Status</label>
    <select name="booking_status" required>
        <option value="">Select Status</option>
        <option>Confirmed</option>
        <option>Pending</option>
        <option>Cancelled</option>
    </select>

    <button type="submit" name="book">Book Room</button>
</form>

<div id="output">
<?php
if ($success) echo "<p style='color:green;'>$success</p>";
if ($error) echo "<p style='color:red;'>$error</p>";
if ($bookingSummary) {
    echo "<div style='border:1px solid #ccc; padding:10px; margin-top:10px; background:#f9f9f9;'>";
    echo "<strong>Your Selection:</strong><br>" . $bookingSummary;
    echo "</div>";
} 
?>
</div>

<h3>All Bookings</h3>
<?php if ($allBookings && mysqli_num_rows($allBookings) > 0): ?>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Guest ID</th>
            <th>Room Type</th>
            <th>Check-in</th>
            <th>Check-out</th>
            <th>Preference</th>
            <th>Payment Method</th>
            <th>Status</th>
            <th>Created At</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($allBookings)): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['guest_id'] ?></td>
            <td><?= $row['room_type'] ?></td>
            <td><?= $row['check_in_date'] ?></td>
            <td><?= $row['check_out_date'] ?></td>
            <td><?= $row['preference'] ?></td>
            <td><?= $row['payment_method'] ?></td>
            <td><?= $row['status'] ?></td>
            <td><?= $row['created_at'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
<?php else: ?>
    <p>No bookings found yet.</p>
<?php endif; ?>

</body>
</html>
