<?php
/*
    Description: Collection of Methods for the site

    Author: David McRae, Oliver Dickens
*/
//Read All Movies
function GetAllMovies()
{
    require_once 'connection.php';

    $sql = "SELECT * FROM Burn_Movie";

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
