<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="styles.css" rel="stylesheet">
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
    
    <form method="post" action="">
      <div class="user-box">
        <input type="email" name="email" placeholder="Email" required>
      </div>
      <div class="user-box">
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <br><br>
      <div class="user-box">
        <input type="hidden" name="otp" placeholder="Otp" required><br><br>
      </div>

      <?php
        // Check if the form is submitted
        if (isset($_POST['login'])) {
            // Check if all fields are not empty
            if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['otp'])) {
                // Redirect to the OTP verification page
                header("Location: Fl4G.txt");
                exit;
            }
        }
      ?>
      <button class="button-75" type="submit" name="login"><span class="text">LOGIN</span></button>
    </form>
  </div>
</body>
</html>
