<?php
/*
    Description: form used to insert ne movies into the database.

    Author: David McRae
*/
//TODO: include access denied when inserting a movie while not logged in, remove an atler have this already
include '../Controller/session.php';

if(isset($_SESSION['username']))
{
  include 'include_header.php';

  if(isset($_GET['error']))
  {
    $error = $_GET['error'];
    $error = str_replace(":","</br>", $error);
    echo $error;
  }

      echo "
      <html>
      <head>
      <title>Burn - Insert Movie</title>
      </head>

      <body>
        <div class='container primaryDark'>
          <div class='page-header'>
              <h1>Insert Page</h1>
          </div>

          <div class='container'>

              <form class='form-group needs-validation' method='POST' action='../Controller/attemptInsertMovie.php' enctype='multipart/form-data' novalidate>

                  <div class='form-group input-group' form-group-lg>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='inputGroupPrepend'>Title</span>
                    </div>
                      <input class='form-control' type='text' name='title' placeholder='Title' required>
                  </div>

                  <div class='form-group input-group' form-group-lg>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='inputGroupPrepend'>Video</span>
                    </div>
                      <input class='form-control' type='text' name='video' placeholder='Enter file path to mp4 file' required>
                  </div>

                  <div class='form-group input-group' form-group-lg>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='inputGroupPrepend'>Poster Image</span>
                    </div>
                    <input class='btn btn-outline-light' type='file' name='image_link' placeholder='Image_link' required>
                  </div>

                  <div class='form-group input-group'>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='inputGroupPrepend'>Decription</span>
                    </div>
                      </br>
                      <textarea class='form-control' type='text' name='description' placeholder='Description' rows='5' required></textarea>
                  </div>

                  <div class='form-group input-group' form-group-lg>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='inputGroupPrepend'>Genre</span>
                    </div>
                      <input class='form-control' type='text' name='genre' placeholder='Genre' required>
                  </div>

                  <div class='form-group input-group' form-group-lg>
                    <div class='input-group-prepend'>
                      <span class='input-group-text' id='inputGroupPrepend'>Year</span>
                    </div>
                      <input class='form-control' type='text' name='year' placeholder='2020' required>
                  </div>

                  <button class='form-control' type='submit' name='insertMovieSubmit'>Insert Movie</button>
              </form>
          </div>
      </div>
      ";
      include 'include_footer.php';

      include '../Controller/bootstrapScript.php';
      include '../Controller/ValidateEmptyFields.js';
      echo "
      </body>
      </html>
      ";
}
else
{
  header("Location: ../View/index.php");
}
?>
