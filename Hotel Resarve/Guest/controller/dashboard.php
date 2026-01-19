<?php
session_start();
$guest_name = $_SESSION['guest_name'] ?? 'Guest';
$page = $_GET['page'] ?? 'dashboard';

if($page == 'room_booking'){
    include '../php/room_booking.php';  // PHP controller include
} elseif($page == 'payment'){
    include '../php/payment.php';
} elseif($page == 'booking_status'){
    include '../php/booking_status.php';
} elseif($page == 'profile'){
    include '../php/profile.php';
} elseif($page == 'review'){
    include '../php/review.php';
} else {
    echo "<p>Select an option from the menu</p>";
}
?>
