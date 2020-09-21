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
  <div>
    <?php
    echo "
      <div class='main' id='main' style='margin-left:25%; margin-top:15%' >
          <div alt='Max-width 100% '>
            <h1 class='primaryDark'>".$movieArray->Title."</h1>
            <video width='1000' height='500' src='".$movieArray->Video_link."' autoplay controls/>
          </div>
      </div>
    ";
    ?>
</div>
</body>
<footer>
      <?php
        include 'footer.php';
        include '../Controller/bootstrapScript.php';
        ?>
</footer>
</html>
