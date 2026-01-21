<?php
include "db.php";

function getAllGuests($conn) {
    $sql = "SELECT * FROM guests";
    return mysqli_query($conn, $sql);
}


function getGuestById($conn, $id) {
    $sql = "SELECT * FROM guests WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($res);
}

function addGuest($conn, $name, $email, $phone) {
    $sql = "INSERT INTO guests (name, email, phone) 
            VALUES ('$name','$email','$phone')";
    return mysqli_query($conn, $sql);
}


function updateGuest($conn, $id, $name, $email, $phone) {
    $sql = "UPDATE guests SET 
            name='$name',
            email='$email',
            phone='$phone'
            WHERE id=$id";
    return mysqli_query($conn, $sql);
}

function deleteGuest($conn, $id) {
    $sql = "DELETE FROM guests WHERE id=$id";
    return mysqli_query($conn, $sql);
}

function isEmailExist($conn, $email, $excludeId=0) {
    $sql = "SELECT id FROM guests WHERE email='$email'";
    if($excludeId > 0) {
        $sql .= " AND id != $excludeId";
    }
    $res = mysqli_query($conn, $sql);
    return ($res && mysqli_num_rows($res) > 0) ? true : false;
}
?>
