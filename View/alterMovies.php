<?php

/*
    Description: User interface used to manage and alter movies listed on the site.

    Author: David McRae
*/
include '../Controller/session.php';

//Error Reporting for the users
if(isset($_GET['error']))
{
  $error = $_GET['error'];
  echo $error;
}

if(!isset($_SESSION['username']))
{
  // Customer has tried to access this page
  header("Location: index.php?error=oops");
}
else
{
  include '../Controller/getAllMovies.php';
  include 'include_header.php';

echo "
<html>
<head>
<title>Burn - Alter Movies</title>
</head>
<body>
<br>
<div class='container'>
  <div class='page-header'>
    <h3>Alter Movie Records</h3>
  </div>";

if (isset($_GET['id']))
{
  $movieid = $_GET['id'];
  include '../Controller/getMovieByID.php';

  echo "<a class='btn btn-outline-info' href='alterMovies.php'>Return</a><br><br>";
  echo "<form class='form-group needs-validation' method='POST' action='../Controller/attemptUpdateMovie.php?movieid=".$movieid."' enctype='multipart/form-data' novalidate>
          <div class='row'>
            <div class='col-md-4'>
              <div class='card form-group input-group' form-group-lg>
                <img src='".$movieArray->Image_link."' class='card-img-top' alt='Movie Poster' onerror=this.src='images/film.placeholder.poster.jpg'>
                <input class='btn btn-dark inputfile' type='file' name='image_link' required/>
              </div>
            </div>";

            echo "<div class='col-md-8'>
                      <div class='input-group'>
                        <div class='input-group-prepend'>
                          <span class='input-group-text' id='inputGroupPrepend'>Video</span>
                        </div>";
                  echo "<input class='form-control' type='text' name='video' placeholder='Please enter path to mp4 file' value='".$movieArray->Video_link."' required>
                      </div>
                    </div>";

          echo "<div class='form-group input-group' form-group-lg>
                  <div class='input-group-prepend'>
                    <span class='input-group-text' id='inputGroupPrepend'>Movie ID</span>
                  </div>
                  <input class='form-control' type='text' name='index' value='".$movieArray->Movie_ID."' readonly>
                </div>";


          echo "<div class='form-group input-group' form-group-lg>
                  <div class='input-group-prepend'>
                    <span class='input-group-text' id='inputGroupPrepend'>Title</span>
                  </div>
                  <input class='form-control' type='text' name='title' placeholder='Title' value='".$movieArray->Title."' required>
                </div>
              </div>
            </div>";

          echo "<div class='form-group input-group'>
            <div class='input-group-prepend'>
              <span class='input-group-text' id='inputGroupPrepend'>Decription</span>
            </div>
              </br>
              <textarea class='form-control' type='text' name='description' placeholder='Description' rows='5' required>".$movieArray->Description."</textarea>
          </div>";

          echo "<div class='form-group input-group' form-group-lg>
            <div class='input-group-prepend'>
              <span class='input-group-text' id='inputGroupPrepend'>Genre</span>
            </div>
              <input class='form-control' type='text' name='genre' placeholder='Genre' value='".$movieArray->Genre."' required>
          </div>";

          echo "<button class='form-control' type='submit' name='updateMovieSubmit'>Update Movie</button>
      </div>
    </form>";
}
else
{
  echo "
  <table class='table border border-dark text-center mt-4'>
    <thead class='thead-dark'>
        <tr>
          <th scope='col'>Movie ID</th>
          <th scope='col' class='text-left'>Title</th>
          <th scope='col'>Alter Movie</th>
        </tr>
      </thead>";

      for ($i=0 ; $i < sizeof($movieArray) ; $i++)
      {
      //echo "<div class='border border-success'>";
      echo "<tr>";
        echo "<td>".$movieArray[$i]->Movie_ID."</td>";
        echo "<td class='text-left'>".$movieArray[$i]->Title."</td>";
        echo "<td><a class='btn btn-warning' href='?id=".$movieArray[$i]->Movie_ID."'>Alter</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}
echo "</div></div>";
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
?>
