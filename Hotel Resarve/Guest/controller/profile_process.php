<?php
session_start();
include "../model/db.php";

$success = $error = "";

// Dummy guest_id for demo (normally from session)
$guest_id = 1;

// Fetch guest data from DB
$result = mysqli_query($conn, "SELECT * FROM guests WHERE id=$guest_id");
if ($result && mysqli_num_rows($result) > 0) {
    $guest = mysqli_fetch_assoc($result);
} else {
    $guest = ['name'=>'','email'=>'','phone'=>''];
}

// Handle form submission
if (isset($_POST['update'])) {
    $name  = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    if ($name=="" || $email=="" || $phone=="") {
        $error = "All fields are required!";
    } else {
        $sql = "UPDATE guests SET name='$name', email='$email', phone='$phone' WHERE id=$guest_id";
        if (mysqli_query($conn, $sql)) {
            $success = "Profile Updated Successfully!";
            $guest['name'] = $name;
            $guest['email'] = $email;
            $guest['phone'] = $phone;
        } else {
            $error = "Update failed: " . mysqli_error($conn);
        }
    }
}
?>
