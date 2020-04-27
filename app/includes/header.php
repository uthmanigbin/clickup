<header>
    <!--NAVIGATION-->
      <div class="logo">
        <h1 class="logo-text"><a href="<?php echo BASE_URL . '/index.php' ?>"><span>Click</span>Up</a></h1>      
        <!--<ul class="language">
          <li><a href="index.php"><img src="assets/img/eng-flag.png"></a>
            <ul>
              <li><a href="#"><img src="assets/img/est-flag.png"></a></li>
              <li><a href="#"><img src="assets/img/rus-flag.jpg"></a></li>
            </ul>
          </li>
        </ul>-->
      </div>
      <i class="fa fa-bars menu-toggle"></i>
      <ul class="nav">
        <li><a href="<?php echo BASE_URL . '/index.php' ?>">HOME</a></li>
        <li><a href="#">POLITICS</a></li>
        <li><a href="#">SPORTS</a></li>
        <li><a href="#">LIVE</a></li>
        <li><a href="#">CORONA VIRUS</a></li>
        <li><a href="#">CONTACT</a></li>

        <?php if (isset($_SESSION['id'])): ?>
          <li>
            <a href="#">
              <i class="fa fa-user"></i>
              <?php echo $_SESSION['username']; ?>
              <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
            </a>
            <ul>
                <ul>
                  <?php if($_SESSION['admin']): ?>
                    <li><a href="<?php echo BASE_URL . '/assets/admin/dashboard.php' ?>">Dashboard</a></li>
                  <?php endif; ?>
                  <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
                </ul>
              </li>
            </ul>
          </li>
        <?php else: ?>
          <li><a href="<?php echo BASE_URL . '/assets/pages/register.php' ?>">SIGN-UP</a></li>
          <li><a href="<?php echo BASE_URL . '/assets/pages/login.php' ?>">LOGIN</a></li>
        <?php endif; ?>   
      </ul>  
</header>
<!--END OF NAVIGATION-->