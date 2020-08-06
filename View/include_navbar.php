<?php

/*
    Description: Navigation bar at the top of each page.

    Author: David McRae, Oliver Dickens
    Reference: Bootstrap
*/
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a href="index.php"><img src="images/fire.png" class="rounded-circle" style="width: 50px; height: 50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent ">

    <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
            <a class="nav-link" href="movies.php">Movies<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="series.php">Series<span class="sr-only"></span></a>
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

  <div class='col-md-6 mt-5'>
    <a class='btn btn-outline-warning' href='adminNavigation.php'>Admin</a>
    </div>

</nav>
