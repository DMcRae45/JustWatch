
<?php
$dir    = 'Images';
$files = scandir($dir);

echo "Hello";
echo "</br>";

echo "Before </br>";
for ($i=0 ; $i < sizeof($files) ; $i++)
{
  echo $files[$i]."</br>";
}

for ($i=0 ; $i < sizeof($files) ; $i++)
{

  $files[$i] = str_replace('.', '_', $files[$i]);

}

  echo "After </br>";
  for ($i=0 ; $i < sizeof($files) ; $i++)
  {
    echo $files[$i]."</br>";
  }
?>
