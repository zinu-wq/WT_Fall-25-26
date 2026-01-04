<!DOCTYPE html>
<html>
<head>
  <title>Guest Dashboard</title>

  <style>
    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      min-height: 100vh;
      margin: 0;
      background: linear-gradient(135deg, #e6f0ff, #f9fbff);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .dashboard {
      background: #ffffff;
      padding: 40px;
      border-radius: 15px;
      width: 420px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    h2 {
      color: #003366;
      margin-bottom: 25px;
      letter-spacing: 1px;
    }

    button {
      width: 100%;
      padding: 14px;
      margin: 12px 0;
      background: linear-gradient(135deg, #4e86bf, #6fa8dc);
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    button:hover {
      background: linear-gradient(135deg, #0055aa, #003366);
      transform: translateY(-3px);
      box-shadow: 0 8px 15px rgba(0, 85, 170, 0.3);
    }

    button:active {
      transform: translateY(0);
      box-shadow: none;
    }

    #output {
      margin-top: 20px;
      font-size: 15px;
      color: #003366;
    }
  </style>
</head>

<body>

  <div class="dashboard">
    <h2>Guest Dashboard</h2>

    <button onclick="gopage('room_booking.php')">Room Booking</button>
    <button onclick="gopage('payment.php')">Payment</button>
    <button onclick="gopage('booking_status.php')">Booking Status</button>
    <button onclick="gopage('profile.php')">Profile</button>
    <button onclick="gopage('review.php')">Review</button>

    <div id="output"></div>
  </div>

  <script>
    function gopage(page) {
      window.location.href = page;
    }
  </script>

</body>
</html>
