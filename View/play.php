<!DOCTYPE html>
<html>
<?php
/*
    Description: this is the video player for movies and tv shows
*/
  Include '../Controller/session.php';
  Include 'header.php';
  Include 'navbar.php';
  Include '../Controller/getMovieByID.php';
?>
<body>
  <main>
      <div class="playMovie">
    <?php

      echo "<h1 class='movieTitle'>".$movieArray->Title."</h1>";
      echo "<div class='videoPlayer' id='videoPlayer'>
      <video width='1000' height='500' src='".$movieArray->Video_link."' autoplay controls/></div>";
    ?>
  </div>
</main>
</body>
<footer>
      <?php
      include 'footer.php';
      include '../Controller/bootstrapScript.php';
      include '../Controller/ajaxScript.php';
      include '../Controller/navControl.js';
        ?>
</footer>
</html>
