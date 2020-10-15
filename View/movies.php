<!DOCTYPE html>
<html>
<!--<head>-->
  <?php
/*
    Description: JustWatch Movies for free viewing.
    Author: David McRae, Oliver Dickens
*/
  include '../Controller/session.php';

  if(!isset($_GET['filter']))
  {
    include '../Controller/getAllMovies.php';
  }
  else
  {
    $movieFilter = $_GET['filter'];
    include '../Controller/getMoviesByFilter.php';
  }
  include 'header.php';
  include 'navbar.php';
  ?>
<!-- </head> -->
<body>
  <div class="container mt-5">
    <div class="row">
      <form class="form-inline col justify-content-center" method="GET">
        <div class='form-group input-group '>
          <div class='input-group-prepend'>
            <span class='input-group-text' id='inputGroupPrepend'>Order By</span>
          </div>
          <select class='custom-select' name='orderBy'>
            <option value=''>Order By</option>
            <option value='year'>year</option>
            <option value='alphabetical'>alphabetical</option>
          </select>
            <button class="btn btn-danger" type="submit">sort</button>
        </div>
      </form>
    </div>
  </div>
    <?php
      //Error Reporting for the users
        if(isset($_GET['error']))
          {
            $error = $_GET['error'];
            echo $error;
          }
          ?>
            <div class="container text-center mt-2">
              <h1>Movies</h1><hr>
              <?php
                // USE THIS VERSION FROM NOW ON
              $rows = 0;
              $cols = 10;
              $counter = 1;
              $nbsp = $cols - ($rows % $cols);
              for ($i=0 ; $i < sizeof($movieArray) ; $i++)
              {

                if(($counter % $cols) == 1)
                {
                  echo '<div class="row">';
                }
                echo "<div class='col'>"; // open col
                echo "<div class='card'>"; // Open card div
                echo "<div class='poster' >"; // Open card poster
                echo "<a href='play.php?id=".$movieArray[$i]->Movie_ID."'> <img src='".$movieArray[$i]->Image_link."'  alt='".$movieArray[$i]->Movie_ID."' onerror=this.src='images/film.placeholder.poster.jpg'></a>"; // card image
                echo "</div>";// close poster
                //TODO: Expansion: add Bookmarked button to add to watch list
                echo "<div class='card-bottom'>";
                echo "<class='movieTitle'>".$movieArray[$i]->Title."<br>";
                echo "<class='movieTitle'>".$movieArray[$i]->Year."";
                echo "</div>";// close card-bottom
                echo "</div>";// close card
                echo "</div>";// close col

                if(($counter % $cols) == 0)
                {
                  echo '</div>';
                }
                $counter++;
              }

              if($nbsp > 0)
              {
                for ($i = 0; $i < $nbsp; $i++)
                {
                  echo'<div class="col-md-4">&nbsp;</div>';
                }
              }
              echo '</div></div><br>';
              ?>

          <?php
          include 'footer.php';
          include '../Controller/bootstrapScript.php';
          include '../Controller/ajaxScript.php';
          include '../Controller/navControl.js';
          ?>
    </body>
</html>
