<?php
if(!isset($_GET['page']))
{
  $page = 1;
}
else
{
  $page = $_GET['page'];
}
    echo "
    <div>
      <ul class='pagination'>
        <li class='page-item'>
          ";
          if($page < 2)
          {
            echo "
            <a class='page-link disabled' href='movie.php?page=".($page -1)."' aria-label='nob'>
            <span>Previous</span>
            </a>
            ";
          }
          else
          {
            echo "
            <a class='page-link' href='movies.php?page=".($page -1)."' aria-label='Dick'>
            <span>Previous</span>
            </a>
            ";
          }
        echo "
        </li>
        <li class='page-item'><a class='page-link' href='movies.php?page=".($page -5)."'>".($page -5)."</a></li>
        <li class='page-item'><a class='page-link' href='movies.php?page=".($page -2)."'>".($page -2)."</a></li>
        <li class='page-item'><a class='page-link' href='#'>".$page."</a></li>
        <li class='page-item'><a class='page-link' href='movies.php?page=".($page +2)."'>".($page +2)."</a></li>
        <li class='page-item'><a class='page-link' href='movies.php?page=".($page +5)."'>".($page +5)."</a></li>
        <li class='page-item'>
        ";
        if($page > 8)
        {
          echo "
          <a class='page-link disabled' href='#' aria-label='Next'>
            <span>Next</span>
          </a>
          ";
        }
        else
        {
          echo "
          <a class='page-link' href='movies.php?page=".($page +1)."' aria-label='Next'>
            <span>Next</span>
          </a>
          ";
        }
        echo "
        </li>
      </ul>
    </div>
    ";
  ?>
