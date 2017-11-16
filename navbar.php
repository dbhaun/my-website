<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/haun.css">
        <link rel="stylesheet" type="text/css" href="css/david.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
     <nav class="navbar navbar-expand-md navbar-inverse fixed-top bg-inverse">
      <a class="navbar-brand" href="#">Fixed navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
        <nav class="nav navbar-default">
            <div class="container-fluid">
        <div>
            <div class="row">
            <img id="logo" src="http://davidbhaun.com/png/haun.png" alt="David B. Haun name">
        <div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="schools.php">Schools</a></li>
            <li><a href="colleges.php">Colleges</a></li>
            <li><div class="dropdown">
  <button>Apps</button>
  <div>
    <a href="styles.php">Styles</a>
    <a href="balls.php">Balls</a>
    <a href="weather.php">Weather</a>  
  </div>
</div></li>
            <li><a href="contact.php">Contact Me</a></li>
            <li><a href="links.php">Links</a></li>
            <li><a href="portlang.php">Portfolio</a></li>
        </ul>
            
        </div>
        </div>
    </div>
</div>
        </nav>
        <?php include("footer.php"); ?>
    </body>
</html>