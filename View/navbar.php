<?php
/*
Description: Navigation bar at the top of each page.
Author: David McRae, Oliver Dickens
*/
?>
<nav class="navbar d-flex d-inline no-gutters row">
  <div class ="col" id="top">
      <a class="btn logo">JustWatch <i class="fas fa-angle-double-right"></i></a>

    <div class="sideBar row no-gutters justify-content-center" id="sideBar">
      <ul class="list-group col">

        <li class="list-group-item">
          <a href="movies.php" class="nav-link">
            <div class="fa-secondary fa-lg">
              <i class="fas fa-video fa-lg"></i>
              <span class="link-text">Movies</span>
            </div>
          </a>
        </li>

        <li class="list-group-item">
          <a href="adminNavigation.php" class="nav-link">
            <div class="fa-secondary fa-lg">
              <i class="fas fa-user-cog fa-lg"></i>
              <span class="link-text">Admin</span>
            </div>
          </a>
        </li>
        <li class="list-group-item">
          <a href="../index.php" class="nav-link">
            <div class="fa-secondary fa-lg">
              <i class="fas fa-sign-out-alt fa-lg"></i>
              <span class="link-text">Logout</span>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="col-10 row no-gutters justify-content-center mt-2">
    <form class="form-inline col-10" method="GET">
      <input class="form-control col-10" type="search" placeholder="Search by Title" name="filter">
      <button class="btn btn-danger col-2" type="submit">Search</button>
    </form>
  </div>

</nav>

<?php
/*
//TODO: possible nav bar extension or mini nav for mobiles
Description: Navigation bar for mobiles and smaller screens.
*/
/*
these are nav bar items not used atm
<li class="list-group-item">
  <a href="newReleases.php" class="nav-link">
    <div class="fa-secondary fa-lg">
      <i class="fas fa-star fa-lg"></i>
      <span class="link-text">New</span>
    </div>
  </a>
</li>
<li class="list-group-item">
  <a href="series.php" class="nav-link">
    <div class="fa-secondary fa-lg">
      <i class="fas fa-tv fa-lg"></i>
      <span class="link-text">Shows</span>
    </div>
  </a>
</li>

<li class="list-group-item">
  <a href="#" class="nav-link">
    <div class="fa-secondary fa-lg">
      <i class="fas fa-bookmark fa-lg"></i>
      <span class="link-text">Bookmarked</span>
    </div>
  </a>
</li>
*/
?>
