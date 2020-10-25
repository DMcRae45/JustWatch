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
      echo "<div class='videoPlayer' id='videoPlayer'>
        <video width='1000' height='500' src='".$movieArray->Video_link."' type='video/mp4' autoplay controls/>
      </div>";
      echo "<h1 class='movieTitle'>".$movieArray->Title."</h1><br>";
    ?>
  </div>

  <div class="playMovieDescription">
<?php
  echo "<h5 class='movieTitle'>".$movieArray->Year."</h5>";
  echo "<h5 class='movieTitle'>".$movieArray->Genre."</h5>";
  echo "<h5 class='movieTitle'>".nl2br($movieArray->Description)."</h5>";
?>
</div>
</main>
</body>
<footer>
      <?php

      include '../Controller/bootstrapScript.php';
      include '../Controller/ajaxScript.php';
      include '../Controller/navControl.js';
        ?>
</footer>
</html>
