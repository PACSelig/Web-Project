<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IWTracker | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/login.css">
  <!-- ****** faviconit.com favicons ****** -->
  <link rel="shortcut icon" href="../images/favicon.ico">
  <link rel="icon" sizes="16x16 32x32 64x64" href="../images/favicon.ico">
  <link rel="icon" type="image/png" sizes="196x196" href="../images/favicon-192.png">
  <link rel="icon" type="image/png" sizes="160x160" href="../images/favicon-160.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../images/favicon-96.png">
  <link rel="icon" type="image/png" sizes="64x64" href="../images/favicon-64.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16.png">
  <link rel="apple-touch-icon" href="../images/favicon-57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../images/favicon-114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../images/favicon-72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../images/favicon-144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../images/favicon-60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../images/favicon-120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../images/favicon-76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../images/favicon-152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon-180.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="msapplication-TileImage" content="../images/favicon-144.png">
  <meta name="msapplication-config" content="../images/browserconfig.xml">
  <!-- ****** faviconit.com favicons ****** -->
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet" />
  <meta name="theme-color" content="#2f2f2f" />
</head>

<body>
  <div id="bg-image"></div>
  <div id="loginContainer">
    <div id="loginMenu">
      <div id="loginTextBorder">
        <h5 id="loginText">Login</h5>
      </div>
      <form method="post" id="login">
        <?php 
        $submitted = false;
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        unset($_POST);
        if(isset($user)){
          if(submitted == true && $user != "Admin"){
            echo '<h3 class="errorText">* Incorrect username. Please try again.</h3>';
          }
        }

        echo '<input type="text" style="text-indent: 8px;" name="user" id="username" placeholder="Username" required minlength="5" maxlength="30">';

        if(isset($pass)){
          if(submitted == true && $pass != "Password"){
            echo '<h3 class="errorText">* Incorrect password. Please try again.</h3>';
          }
        }
        ?>
          <input type="password" style="text-indent: 8px;" name="pass" id="password" placeholder="Password" required minlength="5" maxlength="30">
          <input type="checkbox" name="remember Me" id="rememberMe">
          <p id="rememberMeText">Remember this computer?</p>
          <input type="submit" id="submitBtn" onClick="<?php $submitted = true; ?>" value="Login">
      </form>
      <?php
        if($user == "Admin"){
          if($pass == "Password"){
            header("Location: index.php");
            exit;
          }
        }
      ?>
    </div>
  </div>
</body>

</html>