<html>
<?php
  /*
      Authors: David McRae, Oliver Dickens
   */
    include '../Controller/session.php';
    include 'header.php';
?>
  <body>
    <div class="container text-center jumbotron mt-5">
    <h1>User log in</h1><hr>
    <?php //Error Reporting for the user
    if(isset($_GET['error']))
    {
      $error = $_GET['error'];
      echo $error;
    }
    ?>
    <?php echo '<form class="form-group needs-validation" action="../Controller/attemptLogin.php" method="POST" novalidate>'?>

      <div class="form-group">
          <input class="form-control" type="text" id="username" name="username" placeholder="Username" required>
          <div class="invalid-feedback">
            You cannot Leave This field Empty.
          </div>
      </div>
      <div class="form-group">
          <input class="form-control" type="password" id="password" name="password" autocomplete="off" placeholder="Password" required>
          <div class="invalid-feedback">
            You cannot Leave This field Empty.
          </div>
      </div>
        <hr><button class="form-control" type="submit" name="LoginSubmit" value="Login">Login</button>
    </form>
</div>
<?php
require '../Controller/bootstrapScript.php';
require '../Controller/ValidateEmptyFields.js';
?>
</body>
</html>
