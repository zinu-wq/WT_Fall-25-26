<!DOCTYPE html>
<html>
<head>
  <title>Guest Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f0f8ff;
      text-align: center;
    }

    h2 {
      color:#003366;
      margin-bottom: 30px;
    }

    button {
      width: 300px;
      padding: 12px;
      margin: 10px auto;
      display: block;
      background-color: #4e86bf;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: 0.3s;
    }

    button:hover {
      background-color: #0055aa;
    }
    #output {
      color: #003366;
      margin-top: 20px;
      font-size: 16px;
    }
  </style>
</head>
<body>

  <h2>Guest Dashboard</h2>
  <button onclick="gopage('room_booking.php')">Room Booking</button>
  <button onclick="gopage('payment.php')">payment</button>
  <button onclick="gopage('profile.php')">Profile</button>
  <button onclick="gopage('profile.php')">profile</button>
  <button onclick="gopage('review.php')">review</button>

  <div id="output"></div>
  <script>
    function gopage(page) {
      window.location.href=page;
    }
  </script>
</body>
</html>




  

 

       