<?php
session_start();
include 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account Login</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
        <div class = "r-side">
          <div class = "y-side">
            <h1 style="margin-left: 20px; margin-top: 15px; color: black;">BRAVO WINE POINT</h1>
            <h2>Customer Login</h2>
            <?php login(); ?>
            <form method="post" action="#">
              <label>Email</label>
              <input type="text" name="email" placeholder="Email" required style="float: right;" />
              <div></div><br>
              <label>Password </label>
              <input type="password" name="pword" style="float: right;"/>
              <br>
              <label> </label>
              <input type="submit" name="login" value="Login" style="float: right;"/>

            </form>
          </div>

        </div>

    </div>
  </body>
</html>
