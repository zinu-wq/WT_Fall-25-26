<?php
include "../controller/profile_process.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Guest Profile</title>
  <link rel="stylesheet" href="../css/profile.css">
 
</head>
<body>

<div class="profile-container">
  <h2>Guest Profile</h2>

  <div class="profile-flex">

    <div class="form-box">
      <form method="post" action="" id="profileForm">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($guest['name']); ?>" required>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($guest['email']); ?>" required>

        <label>Phone:</label>
        <input type="text" name="phone" value="<?php echo htmlspecialchars($guest['phone']); ?>" required>

        <button type="submit" name="update">Update Profile</button>
      </form>
    </div>

    
    <div class="output-box">
      <?php if($success): ?>
        <div class="success-box">
          <h3><?php echo $success; ?></h3>
          <p><b>Name:</b> <?php echo htmlspecialchars($guest['name']); ?></p>
          <p><b>Email:</b> <?php echo htmlspecialchars($guest['email']); ?></p>
          <p><b>Phone:</b> <?php echo htmlspecialchars($guest['phone']); ?></p>
        </div>
      <?php endif; ?>

      <?php if($error): ?>
        <p class="error"><?php echo $error; ?></p>
      <?php endif; ?>
    </div>

  </div>
</div>
