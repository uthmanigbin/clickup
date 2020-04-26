<?php include ("../../path.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="../img/logo-initials.png">
    <!-- Style -->
    <link rel="stylesheet" href="../css/style.css">
    <title>ClickUp News | Register</title>
  </head>
  <body class="page-template">

    <!-- Navigation -->
    <?php include (ROOT_PATH . "/app/includes/header.php"); ?>
    <!-- End Of Navigation -->

    <!-- Registration Form -->
    <div class="auth-content">
      <form action="register.php" method="post">
        <h2 class="form-title">Register</h2>

        <!--<div class="msg error">
          <li>Username required</li>
        </div>-->

        <div>
          <label>Username</label>
          <input type="text" name="username" class="text-input">
        </div>
        <div>
          <label>Email</label>
          <input type="email" name="email" class="text-input">
        </div>
        <div>
          <label>Password</label>
          <input type="password" name="password" class="text-input">
        </div>
        <div>
          <label>Confirim Password</label>
          <input type="password" name="passwordConf" class="text-input">
        </div>
        <div>
          <button type="submit" name="register-btn" class="btn btn-big">Register</button>
        </div>
        <p>Or <a href="<?php echo BASE_URL . '/assets/pages/login.php' ?>">Sign In</a></p>
      </form>
    </div>
   
  <!--JQUERY -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!--CUSTOM SCRIPT-->
    <script src="../js/script.js"></script>

  </body>
</html>
