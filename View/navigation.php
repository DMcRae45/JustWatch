<?php

/*
    Description: Dundee Picture House Navigation bar at the top of each page.

    Author: David McRae, Brad Mair, Aaron Hay
    Reference: Bootstrap
*/
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a href="index.php"><img src=""></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">


    <form action='searchResults.php' method='post' class="form-inline my-2 my-lg-0">
      <div class='input-group input-group-sm'>
        <input type='text' class='form-control' placeholder="Movie search..." aria-label='Small' aria-describedby='inputGroup-sizing-sm' id='searchTitle' name='searchTitle'>
        <div class='input-group-append'>
          <button id='search-by-title-button' name='search-by-title-button' type='submit' class='btn btn-outline-info'>Search</button>
        </div>

      </div>
    </form>

  </div>
</nav>
