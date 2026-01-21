<?php
include "../model/db.php"; 
$success = "";
$error = "";

$guest = [
    'name'  => '',
    'email' => '',
    'phone' => ''
];




if (isset($_POST['update'])) {

    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])) {

        $guest['name']  = $_POST['name'];
        $guest['email'] = $_POST['email'];
        $guest['phone'] = $_POST['phone'];

        $success = "Profile Updated Successfully!";
    } else {
        $error = "All fields are required!";
    }
}
