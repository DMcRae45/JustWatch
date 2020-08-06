<?php
/*
    Description: Employee navigation to maintain the Cinema booking system

    Author: David McRae
*/
include '../Controller/session.php';
include 'include_header.php';

?>
<html>
<head>
<title>Burn - Admin</title>
</head>

<body>

  <div class='page-header text-center mt-4'>
      <h1>Navigation</h1>
  </div>

<div class='container mt-5 mb-5'>
  <!-- Manager Access Required -->
  <div class='row'>
    <div class='col-md-6 mt-5'>
      <a class='btn btn-outline-success btn-block' href='insertMovie.php'>Add Movie</a>
    </div>

    <!-- Supervisor Access Required -->
    <div class='col-md-6 mt-5'>
      <a class='btn btn-outline-success btn-block' href='alterMovies.php'>Alter Movie</a>
    </div>
  </div>

</div>


<!-- <footer> -->
<?php include 'include_footer.php'; ?>
<!-- </footer> -->
<!-- <Script> -->
<?php
include '../Controller/bootstrapScript.php';
?>
<!-- </Script> -->

</body>
</html>
