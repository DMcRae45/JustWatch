<!---This is a Prototype Navbar im working on david -------------------------->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script>

<link rel="stylesheet" type="text/css" href="../Model/theme.css">

  <section id="nav-bar" rel="">

    <nav class="navbar navbar-expand-lg primaryDark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand"><img src="Images/fire.png" width="50px" height="50px" class="rounded-circle"></a>
        <h3 class="w3-xxlarge primaryColour"><b>Burner Movies</b></h3>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

          <li class="nav-item tertiaryColour">
            <a class="nav-link" href="../View/movies.php">Movies</a><!---to be set up-->
          </li>
          <li class="nav-item tertiaryColour">
            <a class="nav-link" href="../View/series.php">Series</a><!---to be set up-->
          </li>
          <li class="nav-item tertiaryColour">
            <a class="nav-link " href="../View/somepagehere.php">Genre</a><!---to be set up-->
          </li>


        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </section>
