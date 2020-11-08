<!DOCTYPE html>
<html>
<?php
/*
Description: Burner Movies for free viewing.
Author: David McRae, Oliver Dickens
*/
include 'Controller/session.php';
include 'View/header.php';
?>

<body bg-black>
  <div class="container text-center">
      <h1>JustWatch</h1>
      <a class="cd-btn mt-2" href="View/login.php" data-type="page-transition">Login</a>
    </div>
  </body>
  </html>
<style>
body
{
  background-color: #23232e;
  color: #ffffff;
}
.container {
  padding-top: 15%;
  letter-spacing: 1px;
}
.cd-btn {
  display: inline-block;
  padding: 1.4em 1.6em;
  margin-bottom: 2em;
  border-radius: 50em;
  background-color: #141418;
  color: #ffffff;
  font-weight: bold;
  font-size: 1.3rem;
  letter-spacing: 1px;
  text-transform: uppercase;
}
.cd-btn:hover {
  background-color: #323c50;
  color: #ffffff;
}

</style>
