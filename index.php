<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <link href="css/style.css" rel="Stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Viblight Games</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Games</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Downloads</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="about.php">Contacts</a>
      </li>

      
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/ac3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/AC2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/gow1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center ">About Us</h3>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="img/gtav2.jpg" class="img-fluid aboutimg" alt="">
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-4">Grand Theft Auto V</h2>
                <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Molestias saepe eius provident nobis, laborum ullam rem minus fugiat officiis aliquam?</p>
                    <a href="about.php" class="btn btn-success">Read More</a>
            </div>
        </div>
    </div>

</section>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center ">Our Services</h3>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-mg-4 col-12 ">
            <div class="card" >
                <img class="card-img-top" src="img/honey.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Honey</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-mg-4 col-12 ">
            <div class="card" >
                <img class="card-img-top" src="img/honey.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Honey</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-mg-4 col-12 ">
            <div class="card" >
                <img class="card-img-top" src="img/honey.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Honey</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="my-5">
<div class="py-5">
        <h3 class="text-center ">Our Gallary</h3>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-mg-4 col-12 ">
                <img src="img/gta3.jpg" class = "img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-mg-4 col-12 ">
                <img src="img/gta4.jpg" class = "img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-mg-4 col-12 ">
                <img src="img/gta5.jpg" class = "img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-mg-4 col-12 ">
                <img src="img/gta6.jpg" class = "img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-mg-4 col-12 ">
                <img src="img/gta7.jpg" class = "img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-mg-4 col-12 ">
                <img src="img/gtav2.jpg" class = "img-fluid pb-4">
            </div>
        </div>
    </div>
</section>

<section class="my-5">
<div class="py-5">
        <h3 class="text-center ">Our Gallary</h3>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" class="form-control">
            </div>

            <div class="form-group">
                <label>Email Id</label>
                <input type="text" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" class="form-control">
            </div>

            <div class="form-group">
                <label>Comments</label>
                <textarea class="form-control" name="comments"  ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</section>

<footer >
    <p class="p-3 bg-dark text-white text-center">
        Copyright © 2020 All rights reserved | This site is made by ♥ Upendra Kumar</p>
</footer>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>