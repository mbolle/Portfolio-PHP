<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <title>Portfolio</title>
    </head>
    <body>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <div class="container">        
            <div class="row">
                <div class="col-md-12">          
                    <div class="jumbotron jumbotron-fluid d-none d-sm-block">
                        <div class="container">
                            <h2 class="jumbotron-text text-center"><strong><i>Homepage</i></strong></h2>
                        </div>
                    </div>
                </div>   
            </div>

            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand " href="Homepage.php">Portfolio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPortfolio">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarPortfolio">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="Homepage.php">Homepage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Professional.php">Professional profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="InteractionDesign.php">Interaction Design</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="skills.php">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Projects.php">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About me.php">About me</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div id="content">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="container">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#Homepage" data-slide-to="0" class="active"></li>
                  <li data-target="#Homepage" data-slide-to="1"></li>
                  <li data-target="#Homepage" data-slide-to="2"></li>
                </ul>
              
                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="Fotos/Setup.jpg" alt="Game" width="100%">
                    <div class="carousel-caption">
                        <h3>My Game Setup</h3>
                        <p></p>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img src="Fotos/Mama.jpg" alt="Me and Mama" width="100%">
                    <div class="carousel-caption">
                        <h3>My mother and me</h3>
                        <p></p>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img src="Fotos/Drawing.jpg" alt="My art" width="100%">
                    <div class="carousel-caption">
                        <h3>Work in Progress</h3>
                        <p></p>
                      </div>
                  </div>
                </div>
              
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="Homepage.html" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="Homepage.html" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>

                </div>
            </div>
            

            <br><br>

            <div id="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="card ">
                                <div class="card-body justify-content-center">
                                    <h5 class="card-title"><strong>I Am Melanie <br> Welcome To My Portfolio</strong></h5>
                                    <p class="card-text"><i>“Dont be a lady, be a legend”</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div id="footer">
            <div class="row">
                <div class="col-12 text-light text-center">
                    @2021 Melanie Bolle
                </div>
            </div>
        </div>
    </div>
  
    </body>
</html>