<!DOCTYPE html>
<html>
<?php
/*
    Description: this is the video player for movies and tv shows
*/
  Include '../Controller/session.php';
  Include 'header.php';
  Include 'navbar.php';
  Include '../Controller/getEpisode.php';
?>
<body>
  <main>
      <div class="playMovie">
      <?php
      echo "<h5 class='movieTitle'>".$seriesArray->Series_Name."</h5>";
      echo "<h5 class='movieTitle'>".$seriesArray->Season_ID."</h5>";

      echo "
      <div class='videoPlayer' id='videoPlayer'>
        <video width='1000' height='500' src='".$seriesArray->Video_link."' type='video/mp4' autoplay controls/>
      </div>";
      echo "<h1 class='movieTitle'>".$seriesArray->Episode_Name."</h1><br>";
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
