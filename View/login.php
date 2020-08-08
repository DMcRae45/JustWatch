<?php
  /*
      Description: Customer login form
      Author: David McRae, Oliver Dickens
   */
    include '../Controller/session.php';
    include 'include_header.php';
    //include 'include_navbar.php';
    //TODO: fix this page casue if we include navbar the username div cuts off
?>
<html>
  <body>
      <header class="showcase" style='margin-top:15%'>
        <div class="container">
          <div class="container">
            <h1 class='primaryDark'>Sign In</h1>
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

<?php
require '../Controller/bootstrapScript.php';
require '../Controller/ValidateEmptyFields.js';
?>
</body>
<footer>
      <?php include 'include_footer.php'; ?>
</footer>
</html>
