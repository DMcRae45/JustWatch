<?php
/*
    Description: Burner Movies for free viewing.
    Author: David McRae, Oliver Dickens
*/
?>
<html>
<!--<head>-->
  <?php
  include '../Controller/session.php';
  include '../Controller/getAllMovies.php';
  include 'include_header.php';
  ?>
<!-- </head> -->
<title>Burner - Home</title>
<body>
<?php
  //Error Reporting for the users
  if(isset($_GET['error']))
  {
    $error = $_GET['error'];
    echo $error;
  }
?>
<div class="container">
<?php
$rows = 0;
$cols = 3;
$counter = 1;
$nbsp = $cols - ($rows % $cols);
    for ($i=0 ; $i < sizeof($movieArray) ; $i++)
    {

      if(($counter % $cols) == 1)
      {
        echo '<div class="row">';
      }

      // TODO: fix the single / double quote symbols - Davids Job

      echo "<div class='col-md-4 mt-4'>"; // open col
        echo '<div class="card">'; // Open card div
          echo '<a href="play.php?id='.$movieArray[$i]->Movie_ID.'"> <img src="'.$movieArray[$i]->Image_link.'" class="card-img-top homePage" alt="Movie Poster" style="height: 30rem" onerror=this.src="images/film.placeholder.poster.jpg"></a>'; // card image
          echo '<div class="card-body">';// open card body
            echo '<h5 class="card-title">'.$movieArray[$i]->Title.'</h5>'; // card title
          echo '</div>';// close card body
          echo '<ul class="list-group list-group-flush">'; // start list inside the card
            echo '<li class="list-group-item">Genre: <text>'.$movieArray[$i]->Genre.'</text></li>';
          echo ' </ul>'; // end list in the card
          echo "<a class='btn btn-info' href='play.php?id=".$movieArray[$i]->Movie_ID ."'>Play</a>"; // more info button
        echo ' </div>';// close card
      echo ' </div>';// close col


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

<!-- </footer> -->
  <?php
  include 'include_footer.php';
  include '../Controller/bootstrapScript.php';
  ?>
</body>
</html>
