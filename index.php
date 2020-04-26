<?php 
include ("path.php"); 
include (ROOT_PATH . "/app/database/db.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="assets/img/logo-initials.png">
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>ClickUp News | Home</title>
  </head>
  <body class="page-template">

    <!-- Navigation -->
    <header>
      <div class="logo">
        <h1 class="logo-text"><a href="index.php"><span>Click</span>Up</a></h1>      
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
        <li><a href="index.php">HOME</a></li>
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
                  <li><a href="#" class="logout">Logout</a></li>
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
    <!-- End Of Navigation -->

    <!-- Success Message -->
    <?php include (ROOT_PATH . "/app/includes/messages.php"); ?>
    <!-- End Of Success Message -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <!-- Post Slider-->
      <div class="post-slider">
        <h1 class="slider-title">Trending Posts</h1>
        <i class="fa fa-chevron-left prev"></i>
        <i class="fa fa-chevron-right next"></i>

        <div class="post-wrapper">
          <div class="post">
            <img src="assets/img/math.jpg" alt="" class="slider-image">
            <div class="post-info">
              <h4><a href="assets/pages/single.php">School is great but so is MATH</a></h4>
              <i class="fa fa-user">Uthman Igbin</i>
              &nbsp;
              <i class="fa fa-calender"> Oct 4, 2019</i>
            </div>
          </div>

          <div class="post">
            <img src="assets/img/english.jpg" alt="" class="slider-image">
            <div class="post-info">
              <h4><a href="assets/pages/single.php">School is great but so is ENGLISH</a></h4>
              <i class="fa fa-user">Uthman Igbin</i>
              &nbsp;
              <i class="fa fa-calender"> Oct 4, 2019</i>
            </div>
          </div>

          <div class="post">
            <img src="assets/img/science.png" alt="" class="slider-image">
            <div class="post-info">
              <h4><a href="assets/pages/single.php">School is great but so is SCIENCE</a></h4>
              <i class="fa fa-user">Uthman Igbin</i>
              &nbsp;
              <i class="fa fa-calender"> Oct 4, 2019</i>
            </div>
          </div>

          <div class="post">
            <img src="assets/img/biology.jpg" alt="" class="slider-image">
            <div class="post-info">
              <h4><a href="assets/pages/single.php">School is great but so is BIOLOGY</a></h4>
              <i class="fa fa-user">Uthman Igbin</i>
              &nbsp;
              <i class="fa fa-calender"> Oct 4, 2019</i>
            </div>
          </div>

          <div class="post">
            <img src="assets/img/pe.png" alt="" class="slider-image">
            <div class="post-info">
              <h4><a href="assets/pages/single.php">School is great but so is SPORTS</a></h4>
              <i class="fa fa-user">Uthman Igbin</i>
              &nbsp;
              <i class="fa fa-calender"> Oct 4, 2019</i>
            </div>
          </div>

        </div>
      </div>
      <!-- END OF Post Slider-->

      <!-- Content -->
      <div class="content clearfix">

        <!-- Main Content -->
        <div class="main-content">
          <h1 class="recent-post-title">Recent Posts</h1>

          <div class="post clearfix">
            <img src="assets/img/math.jpg" alt="" class="post-image">
            <div class="post-preview">
              <h2><a href="assets/pages/single.php">School is great but so is MATHS</a></h2>
              <i class="fa fa-user"> Uthman Igbin</i>
              &nbsp;
              <i class="fa fa-calender">Oct 4, 2019</i>
              <p class="preview-text">
                Lipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <a href="assets/pages/single.php" class="btn read-more">Read More</a>
            </div>
          </div>

          <div class="post clearfix">
            <img src="assets/img/science.png" alt="" class="post-image">
            <div class="post-preview">
              <h2><a href="assets/pages/single.php">School is great but so is SCIENCE</a></h2>
              <i class="fa fa-user"> Uthman Igbin</i>
              &nbsp;
              <i class="fa fa-calender">Oct 4, 2019</i>
              <p class="preview-text">
                Lipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <a href="assets/pages/single.php" class="btn read-more">Read More</a>
            </div>
          </div>

          <div class="post clearfix">
            <img src="assets/img/pe.png" alt="" class="post-image">
            <div class="post-preview">
              <h2><a href="assets/pages/single.php">School is great but so is SPORTS</a></h2>
              <i class="fa fa-user"> Uthman Igbin</i>
              &nbsp;
              <i class="fa fa-calender">Oct 4, 2019</i>
              <p class="preview-text">
                Lipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <a href="assets/pages/single.php" class="btn read-more">Read More</a>
            </div>
          </div>

          <div class="post clearfix">
            <img src="assets/img/english.jpg" alt="" class="post-image">
            <div class="post-preview">
              <h2><a href="assets/pages/single.php">School is great but so is ENGLISH</a></h2>
              <i class="fa fa-user"> Uthman Igbin</i>
              &nbsp;
              <i class="fa fa-calender">Oct 4, 2019</i>
              <p class="preview-text">
                Lipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <a href="assets/pages/single.php" class="btn read-more">Read More</a>
            </div>
          </div>

        </div>
        <!-- END OF Main Content -->

        <!-- SideBar -->
        <div class="sidebar">
          <div class="section search">
            <h2 class="section-title">Search</h2>
            <form action="blog-eng.php" method="post">
              <input type="text" name="search-term" class="text-input" placeholder="Search...">
            </form>
          </div>

          <div class="section topic">
            <h2 class="section-title">Topics</h2>
            <ul>
              <li><a href="#">School</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Quotes</a></li>
              <li><a href="#">Motivation</a></li>
              <li><a href="#">Life Lessons</a></li>
              <li><a href="#">Inspiration</a></li>
            </ul>
          </div>

        </div>
        <!-- END OF SideBar -->
      </div>
      <!-- END OF Content -->
    </div>
    <!-- END OF Page Wrapper -->

    <!-- Footer -->
    <?php include (ROOT_PATH . "/app/includes/footer.php"); ?>
    <!-- End Of Footer -->

    
  <!--JQUERY -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Slick Crousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!--CUSTOM SCRIPT-->
    <script src="assets/js/script.js"></script>

  </body>
</html>
