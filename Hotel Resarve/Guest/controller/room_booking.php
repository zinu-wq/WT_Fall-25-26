<?php

include "../model/db.php"; // DB connection

$success = "";
$error   = "";

// Handle form submission
if (isset($_POST['book'])) {
    $guest_id  = 1; // Normally from session
    $room_type = $_POST['search_room'] ?? '';
    $checkin   = $_POST['checkin'] ?? '';
    $checkout  = $_POST['checkout'] ?? '';
    $pref      = $_POST['preference'] ?? '';
    $payment   = $_POST['payment_method'] ?? '';

    // Validation
    if (empty($room_type) || empty($checkin) || empty($checkout) || empty($pref) || empty($payment)) {
        $error = "Please fill all fields!";
    } else {
        // Insert booking
        $sql = "INSERT INTO room_bookings 
                (guest_id, room_type, check_in_date, check_out_date, preference, payment_method, status)
                VALUES ('$guest_id','$room_type','$checkin','$checkout','$pref','$payment','Pending')";

        if (mysqli_query($conn, $sql)) {
            $success = "Room booked successfully!";
        } else {
            $error = "Booking failed: " . mysqli_error($conn);
        }
    }
}
?>
