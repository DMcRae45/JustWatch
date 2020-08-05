<?php
/*
    Description: Action to get all movies from the database.

    Author: David McRae
 */


Include '../Model/BurnMethods.php';

$movies = GetAllMovies();
$movieArray = json_decode($movies);
?>
