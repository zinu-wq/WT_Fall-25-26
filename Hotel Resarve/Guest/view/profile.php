<?php
include "../controller/profile_process.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Guest Profile</title>
  <link rel="stylesheet" href="../css/profile.css">
  <script src="../js/profile.js" defer></script>
</head>
<body>

<div class="profile-container">
  <h2>Guest Profile</h2>

  <form method="post" id="profileForm">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($guest['name']); ?>" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($guest['email']); ?>" required>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($guest['phone']); ?>" required>

    <button type="submit" name="update">Update Profile</button>
  </form>

  <div id="output">
      <?php if($success): ?>
          <div style="padding:10px;background:#e6f0ff;color:#003366;border-radius:10px;margin-top:10px;">
              <h3><?php echo $success; ?></h3>
              <p><b>Name:</b> <?php echo htmlspecialchars($guest['name']); ?></p>
              <p><b>Email:</b> <?php echo htmlspecialchars($guest['email']); ?></p>
              <p><b>Phone:</b> <?php echo htmlspecialchars($guest['phone']); ?></p>
          </div>
      <?php endif; ?>
      <?php if($error): ?>
          <p style="color:red;margin-top:10px;"><?php echo $error; ?></p>
      <?php endif; ?>
  </div>

</div>

</body>
</html>
