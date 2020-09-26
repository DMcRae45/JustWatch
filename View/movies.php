<!DOCTYPE html>
<?php
/*
    Description: JustWatch Movies for free viewing.
    Author: David McRae, Oliver Dickens
*/

?>
<html>
<!--<head>-->
  <?php
  include '../Controller/session.php';
  include '../Controller/getAllMovies.php';
  include 'header.php';
  include 'navbar.php';
  ?>
<!-- </head> -->
<body>
  <main>
    <?php
    //TODO: wire up a page counter for easy switching
    //TODO: Sort by year(first showing current year when pressed then reverses to oldest when pressed again) and genre options?

    ?>
    <?php
      //Error Reporting for the users
        if(isset($_GET['error']))
          {
            $error = $_GET['error'];
            echo $error;
          }
          ?>
            <div class="container text-center">
              <h1>Movies</h1><hr>

              <?php
              $rows = 0;
              $cols = 4;
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
                echo "<a href='play.php?id=".$movieArray[$i]->Movie_ID."'> <img src='".$movieArray[$i]->Image_link."'  alt='Poster' onerror=this.src='images/film.placeholder.poster.jpg'></a>"; // card image
                echo "</div>";// close poster
                //TODO: Expansion: add Bookmark button to add to watch
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
        </main>
    </body>
</html>
