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
    <title>ClickUp News | Login</title>
  </head>
  <body class="page-template">

    <!-- Navigation -->
    <?php include (ROOT_PATH . "/app/includes/header.php"); ?>
    <!-- End Of Navigation -->

    <!-- login Form -->
    <div class="auth-content">
      <form action="login.php" method="post">
        <h2 class="form-title">Login</h2>

        <div>
          <label>Username</label>
          <input type="text" name="username" class="text-input">
        </div>
        <div>
          <label>Password</label>
          <input type="password" name="password" class="text-input">
        </div>
        <div>
          <button type="submit" name="login-btn" class="btn btn-big">Login</button>
        </div>
        <p>Or <a href="<?php echo BASE_URL . '/assets/pages/register.php' ?>">Sign Up</a></p>
      </form>
    </div>
   
  <!--JQUERY -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!--CUSTOM SCRIPT-->
    <script src="../js/script.js"></script>

  </body>
</html>
