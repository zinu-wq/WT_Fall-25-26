<?php
include "../model/db.php";

$success = "";
$error = "";
$bookingSummary = ""; 

//  booking submission
if (isset($_POST['book'])) {
    $guest_id = 1; 
    $search = $_POST['search_room'] ?? '';
    $checkin = $_POST['checkin'] ?? '';
    $checkout = $_POST['checkout'] ?? '';
    $pref = $_POST['preference'] ?? '';
    $payment = $_POST['payment_method'] ?? '';
    $status = $_POST['booking_status'] ?? '';

    if (empty($search) || empty($checkin) || empty($checkout) || empty($pref) || empty($payment) || empty($status)) {
        $error = "Please fill all fields!";
    } else {
        $sql = "INSERT INTO room_bookings 
                (guest_id, room_type, check_in_date, check_out_date, preference, payment_method, status)
                VALUES ('$guest_id','$search','$checkin','$checkout','$pref','$payment','$status')";

        if (mysqli_query($conn, $sql)) {
            $success = "Room booked successfully!";

            // Store submitted values for output display
            $bookingSummary = "
                Room Type: $search<br>
                Check-in: $checkin<br>
                Check-out: $checkout<br>
                Preference: $pref<br>
                Payment: $payment<br>
                Status: $status
            ";
        } else {
            $error = "Booking failed: " . mysqli_error($conn);
        }
    }
}

// Fetch  bookings + guest name
$allBookings = mysqli_query($conn, "
    SELECT rb.*, g.name AS guest_name
    FROM room_bookings rb
    LEFT JOIN guests g ON rb.guest_id = g.id
    ORDER BY rb.id DESC
");
if (!$allBookings) {
    $error = "Failed to fetch bookings: " . mysqli_error($conn);
}
