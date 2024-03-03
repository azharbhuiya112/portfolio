<?php
include './config.php';
session_start();
if (isset($_SESSION["user"])) {
    header("Location:./admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../login.css">
  <title>LoginSystem</title>
</head>

<body>
  <div class="container">
    <input type="checkbox" id="register_toggle">
    <div class="slider">
      <form class="form" action="./login.php" method="post">
        <span class="title">Login</span>
        <div class="form_control">
          <input type="text" class="input" required="" name="username">
          <label class="label">Username</label>
        </div>
        <div class="form_control">
          <input type="password" class="input" required="" name="pswd">
          <label class="label">Password</label>
        </div>
        <button type="submit" name="login">Login</button>

        <span class="bottom_text">Don't have an account? <label for="register_toggle" class="swtich">Sign Up</label> </span>
      </form>
      
      <form class="form" action="./register.php" method="post">
        <span class="title">Sign Up</span>
        <div class="form_control">
          <input type="text" class="input" required="" name="username">
          <label class="label">Username</label>
        </div>
        <div class="form_control">
          <input type="email" class="input" required="" name="email">
          <label class="label">Email</label>
        </div>
        <div class="form_control">
          <input type="password" class="input" required="" name="pswd">
          <label class="label">Password</label>
        </div>
        <button type="submit" name="register">Sign Up</button>

        <span class="bottom_text">Already have an account? <label for="register_toggle" class="swtich">Sign In</label> </span>
      </form>


    </div>
  </div>
</body>

</html>