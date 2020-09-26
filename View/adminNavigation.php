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
  <main>
  <div class="container text-center">
    <h1>Admin Screen</h1><hr>
    <div class='container mt-5 mb-5'>
          <h4>Manage Movies</h4><hr>
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

    <div class='container mt-5 mb-5'>
              <h4>Manage Series</h4><hr>
      <div class='row'>
        <div class='col-md-6 mt-5'>
          <a class='btn btn-outline-primary btn-block' href='#'>Add Series</a>
        </div>
        <div class='col-md-6 mt-5'>
          <a class='btn btn-outline-primary btn-block' href='#'>Add Episode</a>
        </div>
      </div>
      <div class='row'>
        <div class='col-md-6 mt-5'>
          <a class='btn btn-outline-success btn-block' href='#'>Alter Series</a>
        </div>
        <div class='col-md-6 mt-5'>
          <a class='btn btn-outline-danger btn-block' href='#'>Remove Series</a>
        </div>
      </div>
    </div>
  </div>
</main>
</body>

<?php
include 'footer.php';
include '../Controller/bootstrapScript.php';
include '../Controller/ajaxScript.php';
include '../Controller/navControl.js';
?>
</html>
