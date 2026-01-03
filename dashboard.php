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
      color: black;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: 0.3s;
    }

    button:hover {
      background-color: #0055aa;
    }

    #error {
      color: red;
      margin-top: 20px;
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

  

  <script>
    function handleDashboard() {
    
      let name = document.getElementById("name").value.trim();
      let email = document.getElementById("email").value.trim();
      let phone = document.getElementById("phone").value.trim();

      let errorDiv = document.getElementById("error");
      let outputDiv = document.getElementById("output");

      errorDiv.innerHTML = "";

      outputDiv.innerHTML = "";

      
      if (name === "" || email === "" || phone === "") {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
      }

      let phoneRegex = /^[0-9]{7,15}$/;
      if (!phoneRegex.test(phone)) {
        errorDiv.innerHTML = "Phone must be numeric and 7-15 digits.";
        return false;
      }

      // Dashboard Buttons
      outputDiv.innerHTML = `
        <h3>Welcome</h3>
        <button onclick="goPage('room_booking.php')">Room Booking</button>
        <button onclick="goPage('payment.php')">Payment</button>
        <button onclick="goPage('booking_status.php')">Booking Status</button>
        <button onclick="goPage('profile.php')">Profile</button>
        <button onclick="goPage('review.php')">Review</button>
      `;

      
      document.getElementById("guestForm").style.display = "none";

      return false;
    }

    function goPage(page) {
      window.location.href = page;
    }
  </script>

</body>
</html>
