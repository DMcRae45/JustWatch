<html>
<?php
/*
Authors: David McRae & Oliver Dickens
*/
include '../Controller/session.php';
include 'header.php';
include 'navbar.php';
?>
<body>
  <div class='page-header text-center'>
    <h1>Admin Screen</h1>
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
  </div>
</body>

<?php
include 'footer.php';
include '../Controller/bootstrapScript.php';
include '../Controller/ajaxScript.php';
include '../Controller/navControl.js';
?>
</html>
