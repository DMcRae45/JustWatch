<?php
/*
    Description: Customer login form

    Author: David McRae, Oliver Dickens
 */
 include '../Controller/session.php';
?>
<html>
  <?php
    include 'include_header.php';
  ?>
<title>Burn - Login</title>

<body>

<div class="container margin-top:5%">

  <div class="container">

    <?php
    //Error Reporting for the user
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

        <button class="form-control" type="submit" name="LoginSubmit" value="Login">Login</button>

    </form>

</div>
</div><!-- end of container-->
<!-- <footer> -->
      <?php include 'include_footer.php'; ?>
<!-- </footer> -->

<?php
require '../Controller/bootstrapScript.php';
require '../Controller/ValidateEmptyFields.js';
?>
</body>
</html>
