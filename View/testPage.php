<!DOCTYPE html>
<?php
/*
idea is for this to eventually be our index page, currently heavily messing with css
*/
?>
<html>
<head>
  <!-- bootstrap Css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <title>Burner Movies</title>
</head>
<body id ="testPage">
    <header class="showcase">
    <style>
      <?php include '../Model/Theme.css'; ?>
    </style>
    <div class = "showcase-top">
      <img src="Images/temporary_logo.png" alt="BurnerMovies">
    </div>
    <div class = "showcase-2">
        <a class='btn btn-outline-primary' href='login.php'>Sign In</a>
    </div>
  </header>

    <!-- </footer> -->
  <?php
    include 'include_footer.php';
    include '../Controller/bootstrapScript.php';
  ?>
</body>
</html>
