<!DOCTYPE html>
<html lang="en">
<head>
  <title>Webleb</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="styles.css" rel="stylesheet">
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
    <!-- admin@zpaze.tech -->
    <form method="post" action="">
      <div class="user-box">
        <input type="email" name="email" placeholder="Email">
      </div>
      <div class="user-box">
        <input type="password" name="pass" placeholder="Password">
      </div>

      <?php
        session_start();

        if(isset($_POST['login'])) {
          $email = base64_encode($_POST['email']);
          $password = base64_encode($_POST['pass']);

          $encodedUsername = "YWRtaW5AenBhemUudGVjaA==";
          $encodedPassword = "Y1NmMyRZSFZAakZiOGJ2ag==";

          if ($email == $encodedUsername && $password == $encodedPassword) {
            $otp = 4572;
            $_SESSION['otp'] = $otp;

            header("Location: otp_verification.php");
            exit;
          } else {
            echo "<p style='color: red;'>Invalid email or password.</p>";
          }
        }
      ?>
      <button class="button-75" type="submit" name="login"><span class="text">LOGIN</span></button>
    </form>
  </div>
</body>
</html>
