
<!DOCTYPE html>
<html>
<head>
  <title>Guest Dashboard</title>

  <link rel="stylesheet" href="../css/dashboard.css">
<head>

<body>

  <div class="header">
    <h2>Hotel Management System</h2>

    <div class="header-right">
      <div class="toggle" onclick="toggleMode()">Dark Mode</div>
      <div class="logout" onclick="goPage('logout.php')">Logout</div>
    </div>
  </div>

  <div class="container">

    <div class="sidebar">
      <h3>Guest Menu</h3>

      <button class="active" onclick="setActive(this); goPage('room_booking.php')">Room</button>
      <button onclick="setActive(this); goPage('profile.php')">Profile</button>
      <button onclick="setActive(this); goPage('review.php')">Review</button>
    </div>

    <div class="main">
      <div class="dashboard">
        <h2>Welcome, Guest</h2>
        <p>Select an option from the menu</p>
      </div>
    </div>

  </div>
  <script src="../js/script.js"></script>
</body>
</html>
