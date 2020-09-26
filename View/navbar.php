<?php
/*
Description: Navigation bar at the top of each page.
Author: David McRae, Oliver Dickens
*/
?>
<nav class="navbar d-flex d-inline no-gutters row">
  <div class ="col-2" id="top">
    <a class="btn logo" >JustWatch <i class="fas fa-angle-double-right"></i></a>
  </div>
  <div class="col-10 row no-gutters justify-content-center">
    <form class="form-inline col-10">
      <input class="form-control col-10" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-danger col-2" type="submit">Search</button>
    </form>
  </div>
  <div class="sideBar row no-gutters justify-content-center" id="sideBar">
    <ul class="list-group col-2">
    <li class="list-group-item">
      <a href="newReleases.php" class="nav-link">
        <div class="fa-secondary fa-lg">
          <i class="fas fa-star fa-lg"></i>
          <span class="link-text">New</span>
        </div>
      </a>
    </li>
    <li class="list-group-item">
      <a href="movies.php" class="nav-link">
        <div class="fa-secondary fa-lg">
          <i class="fas fa-video fa-lg"></i>
          <span class="link-text">Movies</span>
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

</nav>
