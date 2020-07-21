
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}
.in {
    margin-top: 100px;
    margin-bottom: 10px;
    margin-right: 500px;
    margin-left: 500px;
}
</style>
</head>
<title>Prototype</title>
<body class = "in">

<h2>Kampung Tanjung Bundong</h2>

<form action="auth.php" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input  name="username" type="text" placeholder="Enter Username"required>

    <label for="psw"><b>Password</b></label>
    <input name="password" type="password" placeholder="Enter Password"  required>
        
    <button type="submit" value="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
<?php
     session_start();
    if(isset($_SESSION['eroor'])){
        echo'<script>alert("wrong input)</script>';
    }
    ?>
</body>
</html>
