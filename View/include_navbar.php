<?php

/*
    Description: Dundee Picture House Navigation bar at the top of each page.

    Author: David McRae, Brad Mair, Aaron Hay
    Reference: Bootstrap
*/
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a href="index.php"><img src="images/DPH.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

<<<<<<< HEAD

          <nav class="navbar navbar-light primaryDark justify-content-between">
            <a class="navbar-brand"><img src="Images/fire.png" width="50px" height="50px" class="rounded-circle"></a>
            <a class="navbar-brand primaryColour">Burner Movies</a>

            <li class="nav-item tertiaryColour">
              <a class="nav-link" href="../View/movies.php">Movies</a><!---to be set up-->
            </li>
            <li class="nav-item tertiaryColour">
              <a class="nav-link" href="../View/series.php">Series</a><!---to be set up-->
            </li>
            <li class="nav-item tertiaryColour">
              <a class="nav-link " href="../View/somepagehere.php">Genre</a><!---to be set up-->
            </li>

            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </nav>

=======
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Movies <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown active">

            <?php
                if(!isset($_SESSION['LoggedIn']))
                {
                    echo '<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>';
                }
                if(isset($_SESSION['LoggedIn']))
                {
                    echo '<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION['username'].'</a>';
                }
            ?>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <?php
                if(!isset($_SESSION['LoggedIn']))
                {
                  echo '<a class="dropdown-item" href="customerLogin.php">Login</a>';
                  echo '<div class="dropdown-divider"></div>';  // divider between menu items
                  echo '<a class="dropdown-item" href="registerCustomer.php">Register</a>';
                }
                if(isset($_SESSION['LoggedIn']) && isset($_SESSION['firstname']))
                {
                  echo "<a class='dropdown-item' href='userTicket.php'>My Tickets</a>";
                  echo '<div class="dropdown-divider"></div>';
                  echo '<a class="dropdown-item" href="../Controller/attempt_logout.php">LogOut</a>';
                }
                if(isset($_SESSION['jobrole']))
                {
                  echo "<a class='dropdown-item' href='insertMovie.php'>Insert Movie</a>";
                  echo "<a class='dropdown-item' href='alterMovies.php'>Update Movie</a>";
                  echo "<a class='dropdown-item' href='removeMovie.php'>Remove Movie</a>";
                  echo '<div class="dropdown-divider"></div>';
                  echo "<a class='dropdown-item' href='insertShowing.php'>Insert Showing</a>";
                  echo '<div class="dropdown-divider"></div>';
                  echo "<a class='dropdown-item' href='manageEmployees.php'>Manage Employees</a>";
                  echo "<a class='dropdown-item' href='registerEmployee.php'>Register New Employee</a>";
                  echo '<div class="dropdown-divider"></div>';
                  echo '<a class="dropdown-item" href="../Controller/attempt_logout.php">LogOut</a>';
                }
            ?>
            </div>
        </li>
    </ul>

    <form action='searchResults.php' method='post' class="form-inline my-2 my-lg-0">
      <div class='input-group input-group-sm'>
        <input type='text' class='form-control' placeholder="Movie search..." aria-label='Small' aria-describedby='inputGroup-sizing-sm' id='searchTitle' name='searchTitle'>
        <div class='input-group-append'>
          <button id='search-by-title-button' name='search-by-title-button' type='submit' class='btn btn-outline-info'>Search</button>
        </div>
>>>>>>> 60bc3deec3a41cbde155a4566a516234231d8004
      </div>
    </form>
  </div>
</nav>
