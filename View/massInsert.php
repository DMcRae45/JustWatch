
<?php
Require '../Model/connection.php';
$dir    = 'Movies';
$files = scandir($dir);

// remove file extension
for ($i=0 ; $i < sizeof($files) ; $i++)
{
  //$noExtension = rtrim($files[$i], ".jpg, .png");

  $titleNoSpaces = strtok($files[$i], '_');
  $title = preg_replace('/(?<!\ )[A-Z]/', ' $0', $titleNoSpaces);
  $year = trim(strrev(strstr(strrev((strstr($files[$i], '_'))), '.')), '_.');

  $video = "Movies/".$files[$i];
  $image = "Images/film.placeholder.poster.jpg";
  $description = "Awaiting Description";
  $genre = "genre";

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
    echo $count."Rows effected";
  }
  else
  {
    echo "Insert Failed";
  }

}


?>
