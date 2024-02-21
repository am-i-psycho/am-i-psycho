<?php
session_start();

if (!isset($_SESSION['otp'])) {
    header("Location: index.html");
    exit;
}

if(isset($_POST['verify'])) {
    $user_otp = $_POST['otp'];

    if ($user_otp == $_SESSION['otp']) {
        echo "Zpaze_CTF{Y0u_h4v3_g0t_y0uR_Fl4g_g0_and_submit}";
        
        session_unset();
        session_destroy();
    } else {
        echo "Invalid OTP, please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>OTP Verification Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="otp.css" rel="stylesheet">
</head>

<body>
  <div class="login-box">
    <form class="form" method="post" action="">
      <div class="title">OTP Verification Code</div>
      <p class="message">We have sent a verification code to your EMAIL</p>
      <div class="inputs">
        <input id="otpInput" type="text" name="otp" maxlength="4" placeholder="Enter OTP">
      </div>
      <br><br>
      <button class="button-75" type="submit" name="verify"><span class="text">VERIFY</span></button>
    </form>
  </div>
</body>

</html>
