<!DOCTYPE html>
<?php
/*
    Author: David McRae, Oliver Dickens
*/
include '../Controller/session.php';
include 'header.php';
include 'navbar.php';
//TODO: should we include a timeframe in the database for when new releases expire from this list?
?>
<body>
  <main>
  <div class="container text-center jumbotron mt-5">
    <h1>New Releases</h1><hr>
    <h3> Under Construction.<p>
        Please watch our old stock of <a href="movies.php">Movies</a>.
      </h3>
    </div>
  </main>
  </body>
<!-- </footer> -->
<footer>
  <?php
  include 'footer.php';
  include '../Controller/bootstrapScript.php';
  include '../Controller/ajaxScript.php';
  include '../Controller/navControl.js';
  ?>
</footer>

</html>
