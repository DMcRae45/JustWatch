<?php
  Include 'include_header.php';
  Include 'include_navbar.php';

?>

<body>
  <h1 class="w3-xxlarge text-uppercase text-center" ><b>Our TV Shows</b></h5>
    <div class="d-flex align-content-start flex-wrap">

      <!-- This is a Prototype im working on -->
      <div class="card text-center" style="width:14rem">
        <img class="card-img-top" src="Images/ReadyPlayerOne.jpg" title="ReadyPlayerOne" alt="ReadyPlayerOne">
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">
              Ready Player One
            </button>
            <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Movie Title Here</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        movie description in here
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a class="btn btn-outline-success my-2 my-sm-0" href="play.php" role="button">Play</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!-- End of Prototype-->



    </div>
</body>
