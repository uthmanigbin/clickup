<?php 
include ("../../path.php"); 
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
    <link rel="shortcut icon" href="../img/logo-initials.png">
    <!-- Style -->
    <link rel="stylesheet" href="../css/style.css">
    <title>ClickUp | Post</title>
  </head>
  <body class="page-template">

    <!-- FaceBook Page Plugin SDK -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
    <!-- END OF FaceBook Page Plugin SDK -->

    <!-- Navigation -->
    <?php include (ROOT_PATH . "/app/includes/header.php"); ?>
    <!-- End Of Navigation -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <!-- Content -->
      <div class="content clearfix">

        <!-- Main Content -->
        <div class="main-content-wrapper">
          <div class="main-content single">
            <h1 class="post-title">This is the title of the post</h1>

            <div class="post-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur.</p>
              <p>Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
        <!-- END OF Main Content -->

        <!-- SideBar -->
        <div class="sidebar single">

          <!-- FaceBook Page Plugin -->
          <!--<div class="fb-page" data-href="https://www.facebook.com/togopilasesindus/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/togopilasesindus/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/togopilasesindus/">Tallinna Õismäe Gümnaasiumi Õpilasesindus</a></blockquote></div>-->
          <!-- END OF FaceBook Page Plugin -->

          <div class="section popular">
            <h2 class="section-title">Popular</h2>

            <div class="post clearfix">
              <img src="../img/math.jpg">
              <a href="#" class="title"><h4>How to overcome your fear of Maths</h4></a>
            </div>

            <div class="post clearfix">
              <img src="../img/english.jpg">
              <a href="#" class="title"><h4>How to overcome your fear of ENGLISH</h4></a>
            </div>

            <div class="post clearfix">
              <img src="../img/science.png">
              <a href="#" class="title"><h4>How to overcome your fear of SCIENCE</h4></a>
            </div>

            <div class="post clearfix">
              <img src="../img/biology.jpg">
              <a href="#" class="title"><h4>How to overcome your fear of BIOLOGY</h4></a>
            </div>

            <div class="post clearfix">
              <img src="../img/pe.png">
              <a href="#" class="title"><h4>How to overcome your fear of SPORTS</h4></a>
            </div>

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
    <script src="../js/script.js"></script>

  </body>
</html>
