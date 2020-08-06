<?php
/*
    Description: Collection of Methods for the site

    Author: David McRae, Oliver Dickens
*/

//Create User
function CreateUser()
{
  Require 'connection.php';

  if (isset($_POST["registerSubmit"]))
  {
    $name = (filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
    $username = (filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
    $password = (filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
    $passwordConfirm = (filter_input(INPUT_POST, 'passwordConfirm', FILTER_SANITIZE_STRING));

    // Error checking variables
    $Error = false;
    $nameError;
    $usernameError;
    $passwordError;
    $passwordConfirmError;

    if (!preg_match("/^[a-zA-Z ]*$/",$name))
    {
      $Error = true;
      $nameError = ":Your name can only contain letters";
    }

    if(!preg_match("/^[a-zA-Z0-9]*$/", $username))//Username Must be letters & Numbers
    {
      $Error = true;
      $usernameError = ":Username Must Contain only letters and numbers";
    }

    if(!empty($password) && $password == $passwordConfirm) // Password & PasswordConfirm Must Match
    {
      if(strlen($password) <= '8')// Passowrd must be Atleast 8 characters
      {
        $Error = true;
        $passwordError = ":Password Must be Atleast 8 characters Long";
      }
      elseif(!preg_match("#[0-9]+#",$password)) // Password must contain a number
      {
        $Error = true;
        $passwordError = ":Your Password Must Contain At Least 1 Number!";
      }
      elseif(!preg_match("#[A-Z]+#",$password)) // Password Must contain an Uppercase letter
      {
        $Error = true;
        $passwordError = ":Your Password Must Contain At Least 1 Capital Letter!";
      }
      elseif(!preg_match("#[a-z]+#",$password))// Password Must Conatain a Lowercase letter
      {
        $Error = true;
        $passwordError = ":Your Password Must Contain At Least 1 Lowercase Letter!";
      }
      else// No password errors have Occured
      {
        $PasswordError = ":Password Is Acceptable";
      }
    }
  }
  if(!empty($password) && $password != $passwordConfirm) // Password and PasswordConfirm do NOT Match
  {
    $Error = true;
    $passwordConfirmError = ":Please Check You've Confirmed Your Password!";
  }
  if(empty($password)) // Password Is Empty
  {
    $Error = true;
    $passwordError = ":Please enter a password";
  }

  if($Error == true) // An Error Has Occured
  {
    $errorString = $nameError.$usernameError.$passwordError.$passwordConfirmError;
    header('Location: ../View/register.php?error='.$errorString);
  }
  else // Continue with the Registration
  {
    //Hash the password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Create SQL Template
    $query = $conncetion->prepare
    ("

    INSERT INTO burn_user (Name, Username, Password)
    VALUES( :Name, :username, :password)

    ");

    $success = $query->execute
    ([
      'firstName' => $firstName,
      'username' => $username,
      'password' => $password
    ]);

    $count = $query->rowCount();
    if($count > 0)
    {
      echo "Insert Successful";
      header('Location: ../View/register.php?error=user created');
    }
    else
    {
      echo "Insert Failed";
      echo $query -> errorInfo()[2];
    }
  }
}

//Login User
function AttemptLogin()
{
  Require 'connection.php';

  if (isset($_POST["LoginSubmit"]))
  {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM burn_user WHERE Username = :username";

    $stmt = $connection->prepare($sql);
    $success = $stmt->execute(['username' => $username]);

    if($success && $stmt->rowCount() > 0)
    {
      $result = $stmt->fetch();

      if ($result && password_verify($password, $result['Password']))
      {
        $_SESSION['LoggedIn'] = true;
        $_SESSION['userid'] = $result['User_ID'];
        $_SESSION['username'] = $result['Username'];
        header("Location:../View/adminNavigation.php");
      }
      else
      {
        // Password is incorrect
        $invalidError = "Invalid Credentials";
        header('location: ../View/Login.php?error='.$invalidError);
      }
    }
    else
    {
      // no records found
      $invalidError = "Invalid Credentials";
      header('location: ../View/Login.php?error='.$invalidError);
    }
  }
}

//Logout User
function AttemptLogOut()
{
    session_start(); // Start Session / Resume Current Session
    session_destroy(); // Destroy Session
    header("Location: ../View/index.php"); // Redirect to index page
}

//Read All Movies
function GetAllMovies()
{
    require_once 'connection.php';

    $sql = "SELECT * FROM burn_movie";

    $stmt = $connection->prepare($sql);
    $result = $stmt->fetch();
    $success = $stmt->execute();

    if($success && $stmt->rowCount() > 0)
    {
      //  convert to JSON
      $rows = array();
      while($r = $stmt->fetch())
      {
        $rows[] = $r;
      }
      return json_encode($rows);
    }
}

//Insert new Movie to database
function AttemptInsertMovie()
{
    Require 'connection.php';

    // Checks if submit button has been pressed
    if (isset($_POST['insertMovieSubmit']))
    {

        $file = $_FILES['image_link'];

        $fileName = $_FILES['image_link']['name'];
        $fileTmpName = $_FILES['image_link']['tmp_name'];
        $fileSize = $_FILES['image_link']['size'];
        $fileError = $_FILES['image_link']['error'];
        $fileType = $_FILES['image_link']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        // Checks if file is an allowed type
        if (in_array($fileActualExt, $allowed))
        {
            // Checks there are no errors
            if ($fileError === 0)
            {
                // Checks file size is below stated value
                if ($fileSize < 1000000)
                {
                    // Gives file a unique id to stop overwriting of files with same name
                    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                    // Determines file location
                    $fileDestination = '../View/images/' . $fileNameNew;
                    // Sends file to specified location
                    move_uploaded_file($fileTmpName, $fileDestination);

                    // Once complete carry out the INSERT statement to database
                    $title = (filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
                    $video = (filter_input(INPUT_POST, 'video', FILTER_SANITIZE_STRING));
                    $image = $fileDestination;
                    $description = (filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING));
                    $genre = (filter_input(INPUT_POST, 'genre', FILTER_SANITIZE_STRING));


                    $Error = false;
                    $videoError;
                    $descriptionError;
                    $genreError;

                    if(!preg_match("/^[a-zA-Z ]*$/",$genre))
                    {
                      $Error = true;
                      $genreError = ":Genre can only contain letters.";
                    }

                    if($Error == true) // An Error Has Occured
                    {
                      $errorString = $videoError.$genreError;
                      header('Location: ../View/insertMovie.php?error='.$errorString);
                    }
                    else
                    {

                    $query = $connection->prepare
                    ("

                    INSERT INTO burn_movie (Title, Video_link, Image_link, Description, Genre)
                    VALUES (:title, :video, :image, :description, :genre)

                    ");

                    $success = $query->execute
                    ([
                      'title' => $title,
                      'video' => $video,
                      'image' => $image,
                      'description' => $description,
                      'genre' => $genre
                    ]);

                    $count = $query->rowCount();
                    if($count > 0)
                    {
                      $validError = "Success";
                      header('location: ../View/insertMovie.php?error='.$validError);
                    }
                    else
                    {
                      $invalidError = "Insert Failed";
                      header('location: ../View/insertMovie.php?error='.$invalidError);
                    }
                  }
                }
                else
                {
                    $invalidError = "Your file is too big!";
                    header('location: ../View/insertMovie.php?error='.$invalidError);
                }
            }
            else
            {
                $invalidError = "There was an error uploading your file!";
                header('location: ../View/insertMovie.php?error='.$invalidError);
            }
        }
        else
        {
            $invalidError = "You cannot upload files of this type!";
            header('location: ../View/insertMovie.php?error='.$invalidError);
        }
    }
}

// Attempt to update a movies details
function AttemptUpdateMovie()
{
    Require 'connection.php';
    // Checks if submit button has been pressed
    if (isset($_POST['updateMovieSubmit']))
    {
      $movieid = (filter_input(INPUT_POST, 'index', FILTER_SANITIZE_STRING));
      $movieEncode = getMovieByID($movieid);
      $movie_details = json_decode($movieEncode);
      $file = $_FILES['image_link'];

      // Checks there are no errors
      if ($_FILES['image_link']['error'] === 0)
      {
        $fileName = $_FILES['image_link']['name'];
        $fileTmpName = $_FILES['image_link']['tmp_name'];
        $fileError = $_FILES['image_link']['error'];
        $fileType = $_FILES['image_link']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        if (in_array($fileActualExt, $allowed))
        {
          $newImage = True;
        }
      }
      else
      {
        $oldImage = $movie_details->Image_link;
      }
        // Checks if file is an allowed type
        if (isset($newImage) || isset($oldImage))
        {
          // Checks there are no errors
          if ($fileError === 0)
          {
          // Checks file size is below stated value
          if ($_FILES['image_link']['size'] < 1000000 || isset($oldImage))
          {
            if (!isset($oldImage))
            {
              try
              {
                unlink($movie_details->Image_link);
              }
              catch (Exception $e)
              {
                $validError = ":FATAL ERROR REMOVING OLD IMAGE";
                header('location: ../View/alterMovies.php?error='.$invalidError);
              }
              // Gives file a unique id to stop overwriting of files with same name
              $fileNameNew = uniqid('', true) . "." . $fileActualExt;
              // Determines file location
              $fileDestination = '../View/images/' . $fileNameNew;
              // Sends file to specified location
              move_uploaded_file($fileTmpName, $fileDestination);
            }
            else
            {
              $fileDestination = $oldImage;
            }
              // Once complete carry out the INSERT statement to database
              $title = (filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
              $video = (filter_input(INPUT_POST, 'video', FILTER_SANITIZE_STRING));
              $image = $fileDestination;
              $description = (filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING));
              $genre = (filter_input(INPUT_POST, 'genre', FILTER_SANITIZE_STRING));

              $Error = false;
              $videoError;
              $descriptionError;
              $genreError;

              if(!preg_match("/^[a-zA-Z ]*$/",$genre))
              {
                $Error = true;
                $genreError = ":Genre can only contain letters.";
              }

              if($Error == true) // An Error Has Occured
              {
                $errorString = $videoError.$genreError;
                header('Location: ../View/insertMovie.php?error='.$errorString);
              }
              else
              {

              $query = $connection->prepare
              ("

              UPDATE burn_movie SET
              Title = :title,
              Video_link = :video,
              Image_link = :image,
              Description =:description,
              Genre = :genre
              WHERE Movie_ID = ".$movieid."

              ");

              $success = $query->execute
              ([
                'title' => $title,
                'video' => $video,
                'image' => $image,
                'description' => $description,
                'genre' => $genre
              ]);

              $count = $query->rowCount();
              if($count > 0)
              {
                $validError = "Success";
                header('location: ../View/alterMovies.php?error='.$validError);
              }
              else
              {
                $invalidError = "Insert Failed";
                header('location: ../View/alterMovies.php?error='.$invalidError);
                echo $query -> errorInfo()[2];
              }
            }
          }
          else
          {
            $invalidError = "Your file is too big!";
            header('location: ../View/alterMovies.php?error='.$invalidError);
          }
        }
        else
        {
            $invalidError = "File was too large!";
            header('location: ../View/alterMovies.php?error='.$invalidError);
        }
      }
        else
        {
          $invalidError = "You cannot upload files of this type!";
          header('location: ../View/alterMovies.php?error='.$invalidError);
        }
    }
}

//Delete Movie from database
function RemoveMovieByID($movieid)
{
  require 'connection.php';

  $stmt = $connection->prepare
  (
    "DELETE FROM burn_movie WHERE Movie_ID = :movieid"
  );

  $success = $stmt->execute
  ([
    'movieid' => $movieid
  ]);

  if($success && $stmtMovie->rowCount() > 0)
  {
    header('location: ../View/removeMovie.php');
  }
  else
  {
    header('location: ../View/removeMovie.php?error=FAILED');
  }
}

//Read Movie by ID index
function getMovieByID($movieid)
{
  require 'connection.php';

  $query = $connection->prepare
  ("
    SELECT * FROM burn_movie WHERE Movie_ID = :movieid LIMIT 1
  ");

  $success = $query->execute
  ([
    'movieid' => $movieid
  ]);

  if($success && $query->rowCount() > 0)
  {
    $row = $query->fetch();
    return json_encode($row);
  }
  else
  {
    echo "Unable to find Movie";
  }
}
