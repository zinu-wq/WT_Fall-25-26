<!DOCTYPE html>
<html>
<head>
    <title>Room Booking</title>

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
            color: #003366;
        }

        #error {
            margin-top: 10px;
            text-align: center;
            color: red;
        }
    </style>
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

    <!-- Check-in & Check-out -->
    <label>Check-in Date</label>
    <input type="date" name="checkin" required>

    <label>Check-out Date</label>
    <input type="date" name="checkout" required>

    <!-- Preferred Room -->
    <select name="preference" required>
        <option value="">Preferred Room</option>
        <option>AC</option>
        <option>Non-AC</option>
        <option>Sea View</option>
    </select>

    <button type="submit" name="book">Book Room</button>
</form>



<?php
if (isset($_POST['book'])) {
    $search = isset($_POST['search']) ? $_POST['search'] : '';
    $checkin = isset($_POST['checkin']) ? $_POST['checkin'] : '';
    $checkout = isset($_POST['checkout']) ? $_POST['checkout'] : '';
    $pref = isset($_POST['preference']) ? $_POST['preference'] : '';

    echo "<div id='output'>";
    echo "<h3>Room Booking Details</h3>";
    echo "Searched Room: <b>" . ($search ? $search : "Not searched") . "</b><br>";
    echo "Check-in Date: <b>$checkin</b><br>";
    echo "Check-out Date: <b>$checkout</b><br>";
    echo "Preferred Room: <b>$pref</b><br>";
    echo "<br><b>Your booking request has been submitted successfully!</b>";
    echo "</div>";
}
?>
<script>

// JS: Instant preview
const searchInput = document.getElementById('searchInput');
const checkinInput = document.getElementById('checkinInput');
const checkoutInput = document.getElementById('checkoutInput');
const prefInput = document.getElementById('prefInput');

const searchPreview = document.getElementById('searchPreview');
const checkinPreview = document.getElementById('checkinPreview');
const checkoutPreview = document.getElementById('checkoutPreview');
const prefPreview = document.getElementById('prefPreview');

searchInput.addEventListener('input', () => {
    searchPreview.innerText = searchInput.value || '-';
});

checkinInput.addEventListener('input', () => {
    checkinPreview.innerText = checkinInput.value || '-';
});

checkoutInput.addEventListener('input', () => {
    checkoutPreview.innerText = checkoutInput.value || '-';
});

prefInput.addEventListener('input', () => {
    prefPreview.innerText = prefInput.value || '-';
});
</script>

</body>
</html>
