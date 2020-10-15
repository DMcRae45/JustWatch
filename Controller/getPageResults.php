<?php
/*
    Description: Action to get all movies from the database.

    Author: David McRae
 */


Include '../Model/JustWatchMethods.php';

$movies = pageResults();
$movieArray = json_decode($movies);
?>
