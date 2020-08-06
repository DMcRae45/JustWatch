
<?php
/*
    Description: this is the video player for movies and tv shows
*/

  Include 'include_header.php';
  Include 'include_navbar.php';
?>

<?php
echo "
<body>
  <div class='main' id='main' style='margin-left:25%; margin-top:5%' >
      <div alt='Max-width 100%'>
        <h1 class='w3-xxxlarge w3-text-white'><b>Movie Title Here</b></h5>
        <video width='1000' height='500'  src='Movies/PlayerOne.mp4' autoplay controls>
          <source src='Movies/PlayerOne.mp4' type='video/mp4'>
        </video>
      </div>
  </div>
</body>
";
?>
