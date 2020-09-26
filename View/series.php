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
  include '../Controller/getAllSeries.php';
  include 'header.php';
  include 'navbar.php';
  ?>
<!-- </head> -->
<body>
  <main>
    <?php
      //Error Reporting for the users
        if(isset($_GET['error']))
          {
            $error = $_GET['error'];
            echo $error;
          }
          ?>
            <div class="container text-center">
              <h1>Series</h1><hr>

              <?php
              $rows = 0;
              $cols = 4;
              $counter = 1;
              $nbsp = $cols - ($rows % $cols);
              for ($i=0 ; $i < sizeof($seriesArray) ; $i++)
              {

                if(($counter % $cols) == 1)
                {
                  echo '<div class="row">';
                }
                echo "<div class='col'>"; // open col
                echo "<div class='card'>"; // Open card div
                echo "<div class='poster' >"; // Open card poster
                echo "<a href='play.php?id=".$seriesArray[$i]->series_ID."'> <img src='".$seriesArray[$i]->Image_link."'  alt='".$seriesArray[$i]->series_ID."' onerror=this.src='images/film.placeholder.poster.jpg'></a>"; // card image
                echo "</div>";// close poster
                //TODO: Expansion: add Bookmarked button to add to watch list
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
