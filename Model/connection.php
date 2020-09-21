<?php
/*
    Description: Database Connection and Log in Credentials to the sites database.

    Author: David McRae
 */
try
{
  // RPi Credentials
  //$host ='localhost';
  //$dbname = 'MovieDB';
  //$un = 'Pi';
  //$pw = '#R_pi';

  // for use if you copy database to be on localhost
  $host ='localhost';
  $dbname = 'Burner';
  $un = 'root';
  $pw = '';

  $connection = new PDO ("mysql:host=$host;dbname=$dbname;charset=UTF8",$un,$pw);
}
catch (PDOException $ex)
{
  Die("Connection Failed");
}
?>
