<?php
/*
    Description: Employee navigation to maintain the Cinema booking system

    Author: David McRae
*/
include '../Controller/session.php';
include 'header.php';
include 'navbar.php';
//TODO: remove movie is not set up yet
?>
<html>

<body>
      <div class='page-header text-center mt-4'>
        <h1 class='primaryDark'>Admin Screen</h1>
      </div>
      <div class='container mt-5 mb-5'>
        <div class='row'>
          <div class='col-md-6 mt-5'>
            <a class='btn btn-outline-primary btn-block' href='insertMovie.php'>Add Movie</a>
          </div>
          <div class='col-md-6 mt-5'>
            <a class='btn btn-outline-success btn-block' href='alterMovies.php'>Alter Movie</a>
          </div>
        </div>
        <div class='row'>
          <div class='col-md-6 mt-5'>
            <a class='btn btn-outline-danger btn-block' href='removeMovie.php'>Remove Movie</a>
          </div>
        </div>
      </div>
</body>

<?php
include 'footer.php';
include '../Controller/bootstrapScript.php';
?>
</html>
