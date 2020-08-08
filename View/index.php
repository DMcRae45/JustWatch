<!DOCTYPE html>
<?php
/*
    Description: Burner Movies for free viewing.
    Author: David McRae, Oliver Dickens
*/
include '../Controller/session.php';
include 'include_header.php';
?>
<html>
<!--<head>-->

  <body>
    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-start">
                    <div class="col-lg-10 col-md-10">
                      <img src="Images/logo.png" alt="BurnerMovies">
                        <div class="slider_text">
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                               This site is for personal use
                               only and as such is restricted
                               to saved users only.
                            </h3>
                            <a class="boxed-btn3 wow fadeInLeft"  data-wow-duration="1s" data-wow-delay=".2s" href="login.php">Sign In Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- </footer> -->
    <?php
    include 'include_footer.php';
    ?>
</body>
</html>
