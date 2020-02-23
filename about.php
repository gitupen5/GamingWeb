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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Styles Start -->
<style>
  .fa {
    padding: 10px;
    font-size: 30px;
    width: 50px;
    height: 50px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
}

body{
       background-color:#242422;
      
    }

    .body{
	font-family: 'Gothic A1', sans-serif;
    font-size:16px;
    
	}
	p{
	color:#6c6c6f;
	font-size:1em;
	}
	h1,h2,h3,h4,h5,h6{color:#323233;text-transform:uppercase;}
.navbar-brand  span{
	color: #fed136;
	font-size:25px;font-weight:700;letter-spacing:0.1em;
    font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;
}
.navbar-brand {
	color: #fff;
	font-size:25px;
    font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;
	font-weight:700;
	letter-spacing:0.1em;
}

.navbar-nav .nav-item .nav-link{
	padding: 1.1em 1em!important;
	font-size: 120%;
    font-weight: 500;
    letter-spacing: 1px;
    color: #fff;
   font-family: 'Gothic A1', sans-serif;
}
.navbar-nav .nav-item .nav-link:hover{color:#fed136;}
.navbar-expand-md .navbar-nav .dropdown-menu{
	border-top:3px solid #fed136;
}

</style>
<!-- Styles End -->

</head>

<body>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
	<div class="container">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><span>Viblight</span> Games</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Games.php">Games</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">Contacts</a>
      </li> 
    </ul>
  </div>
	</div>
</nav>
<!-- Section Contact -->
    <section class="my-5">
    <div class="py-5">
        <h3 class="py-3 display-4 text-center text-secondary"></h3>
    </div>
    <div class="text-center ">
    <h3 class="py-3 text-info">You can find us on most social media platforms. <br>
                Feel free to Follow us on Instagram or tweet at us! <br>
                Please only use email for business inquires, <br>
                or other important issues.<br></h3>
                    <!-- <a href="about.php" class="btn btn-success">Read More</a> -->
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-youtube"></a>

    </div>
              
</section>


<!-- Section Contact Us -->
<section class="my-5 text-light">
<div class="py-5">
        <h3 class="text-center text-secondary">Contact Us</h3>
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




<!-- Footer -->
<footer class="w-100 position-relative bg-dark text-white">
	<div class="container p-4">
		<div class="row">
			<div class="mb-4 mb-md-0 col-md-6 text-center text-md-left">
				<h3>Viblight Games, LLC.</h3>
				<p><a href="https://www.playstation.com/network/legal/privacy-policy/" target="_blank">Privacy Policy</a> | <a href="https://www.playstation.com/en-us/legal/terms-of-use/" target="_blank">Terms of Use</a></p>
				
				<p>&copy; 2020 Viblight Games LLC.</p>
			</div>
			<div class="d-flex justify-content-center justify-content-md-end align-items-center col-md-6">
				<a class="d-block mr-4" href="http://www.esrb.org/confirm/scea-confirmation.jsp" target="_blank">
					<img class="ib" src="https://s3.amazonaws.com/nd.images/uploads/esrb_privacy_policy_small.png">
				</a>
				<a class="d-block rating position-relative" href="http://www.esrb.org/" target="_blank">
					<img class="position-absolute object-fit w-100" src="https://s3.amazonaws.com/nd.images/uploads/esrb_rp_m.png">
				</a>
			</div>
		</div>
	</div>
</footer>

</body>