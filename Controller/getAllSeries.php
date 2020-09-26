<?php
/*
    Description: Action to get all movies from the database.

    Author: Oliver Dickens
 */


Include '../Model/JustWatchMethods.php';

$series = GetAllSeries();
$seriesArray = json_decode($series);
?>
