<?php
/*
    Description: Navigation bar at the top of each page.
    Author: David McRae, Oliver Dickens
*/
include 'include_header.php';
//TODO: when screen size set to phone screen nav disappears
//TODO:code up years and genre
//TODO: login displays when mange is pressed
?>
<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="movies.php">
                                    <img src="Images/temporary_logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block text-center">
                                <nav>
                                    <ul id="navigation">
                                      <li class="nav-item active">
                                        <a class="nav-link" href="movies.php">Movies<span class="sr-only">(current)</span></a>
                                      </li>
                                      <li class="nav-item active">
                                        <a class="nav-link" href="series.php">Tv-Shows<span class="sr-only"></span></a>
                                      </li>
                                        <li><a href="#">Genre <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="#">Comedy</a></li>
                                                <li><a href="#">Horror</a></li>
                                                <li><a href="#">Action</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="#">Year <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="#">2020</a></li>
                                                <li><a href="#">2019</a></li>
                                                <li><a href="#">2018</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown active">
                                          <ul class="submenu">
                                              <li><a href='insertMovie.php'>Insert Movie</a></li>
                                              <li><a href='alterMovies.php'>Update Movie</a></li>
                                              <li><a href='removeMovie.php'>Remove Movie</a></li>
                                              <li><a href="#"></a></li>
                                              <li><a  href="../Controller/attemptLogout.php">LogOut</a></li>
                                          </ul>
                                            <?php
                                                if(!isset($_SESSION['LoggedIn']))
                                                {
                                                    echo '<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>';
                                                }
                                                if(isset($_SESSION['LoggedIn']))
                                                {
                                                    echo '<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION['username'].'</a>';
                                                }
                                            ?>

                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <?php
                                                if(!isset($_SESSION['username']))
                                                {
                                                  echo '<a class="dropdown-item" href="login.php">Login</a>';
                                                }
                                                if(isset($_SESSION['username']))
                                                {
                                                  echo "<a class='dropdown-item' href='insertMovie.php'>Insert Movie</a>";
                                                  echo "<a class='dropdown-item' href='alterMovies.php'>Update Movie</a>";
                                                  echo "<a class='dropdown-item' href='removeMovie.php'>Remove Movie</a>";
                                                  echo '<div class="dropdown-divider"></div>';
                                                  echo '<a class="dropdown-item" href="../Controller/attemptLogout.php">LogOut</a>';
                                                }
                                            ?>
                                            </div>
                                        </li>

                                        <li class="nav-item active">
                                          <a class="nav-link" href="testPage.php">TestingPage<span class="sr-only"></span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-2 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-end">
                                <a href="adminNavigation.php" data-scroll-nav="0" class="say_hi">Admin</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

  </body>

  <?php
  /*  //TODO:Clean up "if" code above works correctly as unsure if id="navbarDropdown" is required below
This is our old nav-ive hopefully set to hidden correctly, ive included the sessions below into the code above

<nav class="mb-2 navbar navbar-expand-lg navbar-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent ">
      <ul class="navbar-nav mr-auto">

          <li class="nav-item active">
            <a class="nav-link" href="movies.php">Movies<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
              <a class="nav-link" href="series.php">Series<span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="testPage.php">TestNewIndexPage<span class="sr-only"></span></a>
          </li>

          <li class="nav-item dropdown active">

              <?php
                  if(!isset($_SESSION['LoggedIn']))
                  {
                      echo '<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>';
                  }
                  if(isset($_SESSION['LoggedIn']))
                  {
                      echo '<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION['username'].'</a>';
                  }
              ?>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
                  if(!isset($_SESSION['username']))
                  {
                    echo '<a class="dropdown-item" href="login.php">Login</a>';
                  }
                  if(isset($_SESSION['username']))
                  {
                    echo "<a class='dropdown-item' href='insertMovie.php'>Insert Movie</a>";
                    echo "<a class='dropdown-item' href='alterMovies.php'>Update Movie</a>";
                    echo "<a class='dropdown-item' href='removeMovie.php'>Remove Movie</a>";
                    echo '<div class="dropdown-divider"></div>';
                    echo '<a class="dropdown-item" href="../Controller/attemptLogout.php">LogOut</a>';
                  }
              ?>
              </div>
          </li>
      </ul>
    </div>
  </nav>

*/
?>
