<?php
/*
    Description: this is the video player for movies and tv shows
*/
  Include '../Controller/session.php';
  Include 'include_header.php';
  Include '../Controller/getMovieByID.php';
?>
<body>
<?php
echo "
  <div class='main' id='main' style='margin-left:25%; margin-top:5%' >
      <div alt='Max-width 100%'>
        <h1>".$movieArray->Title."</h1>
        <video width='1000' height='500' src='".$movieArray->Video_link."' autoplay controls/>
      </div>
  </div>
";
?>
<!-- </footer> -->
  <?php
  include 'include_footer.php';
  include '../Controller/bootstrapScript.php';
  ?>
</body>
</html>
