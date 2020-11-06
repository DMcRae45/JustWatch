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
    <div class="container text-center mt-5 mb-3 pt-3">
      <?php
      echo "<h1 class='movieTitle'>".$movieArray->Title."</h1><br>";
      ?>
    </div>
    <div class="playMovie">
      <?php
      echo "<div class='videoPlayer' id='videoPlayer'>
      <video width='1000' height='500' src='".$movieArray->Video_link."' type='video/mp4' autoplay controls/>
      </div>";
      ?>
    </div>
        <div class="container mt-5 mb-5 pt-3">
      <div class="row">
        <div class="descriptionBox col-12">
          <div class="descriptionCard col-3">
            <?php echo "<div class='poster'>"; ?>
              <?php echo "<img src='".$movieArray->Image_link."' onerror=this.src='Images/film.placeholder.poster.jpg'></a>"; // card image?>
              <?php echo "</div>"; ?>
            </div>
            <div class="descriptionCard col-6">
              <?php echo "<div class='card-body'>"; ?>
                <?php echo "<h2 class='movieTitle'>".$movieArray->Title."";?>
                <?php echo "<h6 class='movieTitle text-muted'>".nl2br($movieArray->Description)."</h5>";?>
                <?php echo "<h6 class='movieTitle'><b>Year: </b>".$movieArray->Year."";?>
                <?php echo "<h6 class='movieTitle'><b>Genre: </b>".$movieArray->Genre."";?>

                <?php echo "</div>"; ?>
              </div>
            </div>
          </div>
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
