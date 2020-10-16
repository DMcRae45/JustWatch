
<?php
Require '../Model/connection.php';
$dir    = 'Movies';
$files = scandir($dir);

// remove file extension
for ($i=0 ; $i < sizeof($files) ; $i++)
{
  // Remove file extension -> "Bloodshot_2020.mp4" = "Bloodshot_2020"
  //$noExtension = rtrim($files[$i], ".jpg, .png, .mp4");

  // Find everything before the first "_" -> "Bloodshot_2020.mp4" = "Bloodshot"
  $titleNoSpaces = strtok($files[$i], '_');

  //Insert a " " before all Uppercase letters  ->  "LordOfTheRings" = " Lord Of The Rings"
  //$title = preg_replace('/(?<!\ )[A-Z]/', ' $0', $titleNoSpaces);
  // if string begins with a " " remove it.  ->  " Lord Of The Rings" = "Lord Of The Rings"
  // if($title[0] == ' ');
  // {
  //   $title = ltrim($title, $str[0]);
  // }

  //Insert a " " before all Uppercase letters Ignoring the first one  ->  "LordOfTheRings" = "Lord Of The Rings"
  $title = preg_replace('/(?<! )(?<!^)[A-Z]/',' $0', $titleNoSpaces);

  //get the info inbetween the "_" and the "." -> "bloodshot_2020.mp4" = "2020"
  $year = trim(strrev(strstr(strrev((strstr($files[$i], '_'))), '.')), '_.');

  $video = "Movies/".$files[$i];
  $image = "Images/".$noExtension.".jpg";
  $description = "Awaiting Description";
  $genre = "TODO";

  $query = $connection->prepare
  ("

  INSERT INTO Movie (Title, Video_link, Image_link, Description, Genre, Year)
  VALUES (:title, :video, :image, :description, :genre, :year)

  ");

  $success = $query->execute
  ([
    'title' => $title,
    'video' => $video,
    'image' => $image,
    'description' => $description,
    'genre' => $genre,
    'year' => $year
  ]);

  $count = $query->rowCount();
  if($count > 0)
  {
    echo $count."Rows effected"."</br>";
  }
  else
  {
    echo "Inserting".$title." Failed"."</br>";
  }

}


?>
