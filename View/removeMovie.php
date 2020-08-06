<?php
include '../Controller/session.php';
if(isset($_SESSION['username']))
{
  include '../Controller/getAllMovies.php';
  include 'include_header.php';

echo "
<html>
<head>
<title>Burn - Remove Movies</title>
</head>

<body>
  <div class='container primaryDark'>
    <div class='page-header'>
        <h1>Remove a Movie</h1>
    </div>
    <div class='container'>
  ";

    echo "
    <table class='table border border-dark text-center mt-4'>
      <thead class='thead-dark'>
        <tr>
          <th scope='col'>Movie ID</th>
          <th scope='col'>Title</th>
          <th scope='col'>Delete Movie</th>
        </tr>
      </thead>";

        for ($i=0 ; $i < sizeof($movieArray) ; $i++)
        {
          //echo "<div class='border border-success'>";
          echo "<tr>";
          echo "<td>".$movieArray[$i]->Movie_ID."</td>";
          echo "<td>".$movieArray[$i]->Title."</td>";
          echo "<td><a class='btn btn-danger text-light' data-toggle='modal' data-target='#delete".$movieArray[$i]->Movie_ID."Modal'>DELETE</a></td>";
          echo "</tr>";
          echo "<div class='modal fade' id='delete".$movieArray[$i]->Movie_ID."Modal' tabindex='-1' role='dialog' aria-labelledby='deleteModalLabel' aria-hidden='true'>
                  <div class='modal-dialog' role='document'>
                    <div class='modal-content bg-dark'>
                      <div class='modal-header'>
                        <h5 class='modal-title' id='deleteModalLabel'>Are You Sure?</h5>
                        <button type='button' class='close btn btn-dark' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                      </div>
                      <div class='modal-body'>
                        <p>Are you sure you want to delete ".$movieArray[$i]->Title."?<p>
                      </div>
                      <div class='modal-footer'>
                        <button type='button' class='btn btn-outline-warning' data-dismiss='modal'>No!</button>
                        <a class='btn btn-outline-danger' role='button' href='../Controller/attemptRemoveMovie.php?id=".$movieArray[$i]->Movie_ID."'>DELETE</a>
                      </div>
                    </div>
                  </div>
                </div>";
        }
      echo "
      </table>
    </div>
  </div>
  ";
// <footer>
  include 'include_footer.php';
// </footer>
// <Script>
  include '../Controller/bootstrapScript.php';
// </Script>
echo "
</body>
</html>
";
}
elseif(isset($_SESSION['jobrole']))
{
  header("Location: index.php?error=ACCESS DENIED MANAGER REQUIRED");
}
else
{
  header("Location: index.php?error=ACCESS DENIED");
}
?>
