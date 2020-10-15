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
      <ul class='pagination justify-content-center'>
        <li class='page-item'>
          ";
          if($page == 1)
          {
            echo "
            <a class='page-link btn disabled' href='movies.php?page=".($page -1)."' aria-label='nob'>
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
          // TODO check maximum number of pages
        echo "
        </li>
        <li class='page-item'><a class='page-link' href='movies.php?page=1'>1</a></li>
        <li class='page-item'><a class='page-link' href='movies.php?page=".$page."'>".$page."</a></li>
        <li class='page-item'><a class='page-link' href='movies.php?page=".($page +1)."'>".($page +1)."</a></li>
        <li class='page-item'><a class='page-link' href='movies.php?page=".($page +2)."'>".($page +2)."</a></li>
        <li class='page-item'><a class='page-link' href='movies.php?page=".($page +3)."'>".($page +3)."</a></li>
        <li class='page-item'><a class='page-link' href='movies.php?page=".($page +4)."'>".($page +4)."</a></li>
        <li class='page-item'><a class='page-link' href='movies.php?page=".($page +5)."'>".($page +5)."</a></li>
        <li class='page-item'>
        ";
        if($page >= 8)
        {
          echo "
          <a class='page-link btn disabled' href='movies.php?page=".($page +1)."' aria-label='Next'>
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
