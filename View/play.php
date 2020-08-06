
<?php
/*
    Description: this is the video player for movies and tv shows
*/

  Include 'include_header.php';
  Include '../Controller/getMovieByID.php';
?>

<?php
echo "
<body>
  <div class='main' id='main' style='margin-left:25%; margin-top:5%' >
      <div alt='Max-width 100%'>
        <h1>".$movieArray->Title."</h1>
        <video width='1000' height='500' src='".$movieArray->Video_link."' autoplay controls/>
      </div>
  </div>
</body>
";
?>
