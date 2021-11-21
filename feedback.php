<?php
    session_start();
	
	if(isset($_SESSION['feedback_check']))
	{
		echo $_SESSION['feedback_check'];
		unset($_SESSION['feedback_check']);
    }
    /*if($_POST['user_Password']!==$_POST['confirmpassword']) {
        echo "Your passwords did not match";
        } else {
        // success page here
        }*/
?>

<Style>
 
.container button{
	background-color: #4CAF50; /* Green */
	border: none;
  	color: white;
  	padding: 15px 32px;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 16px;

}

</Style>

<!DOCTYPE html>
<html>

<head>
	<title>Vaccination Care</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css"
		href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<!-------------Bar Start-------------->
	<header class="site-headers">
		<nav class="navbar navbar-expand-lg">
			<div class="Menu bg-info container-fluid">
				<a class="navbar-brand" href="index.html">
					<h1>
						<p style="color:white">Vaccination Care</p>
					</h1>
				</a>
				<ul>
					<li class="active"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a></i>
					</li>
					<li><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>Gallary</a>
						<div class="sub-menu-1">
							<ul>
								<li><a href="photos.html">Photos</a></li>
								<li><a href="videos.html">Videos</a></li>
							</ul>
						</div>
					</li>
					<li><a href="vaccinelistread.php"><i class="fa fa-stethoscope" aria-hidden="true"></i>Campaign</a>
					</li>
					<li><a href="about.html"><i class="fa fa-user" aria-hidden="true"></i>About</a></li>
					<li><a href="feedback.php"><i class="fa fa-phone" aria-hidden="true"></i>Contact</a></li>
					<li><a href="#"><i class="fa fa-id-badge" aria-hidden="true"></i>My Account</a>

						<div class="sub-menu-1">
							<ul>
								<li><a href="login.php">Login</a></li>
								<li><a href="registration.php">SignUp</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</header>
		<!-------------Bar end-------------->
<body>

	<div class="container">
		<div class="reg-form">
			<div class="card w-50 mt-5 mx-auto shadow">
				<div class="card-header">
					<center><h3>Tell us what you've to say</h3></center>
				</div>
				<div class="card-body">
				<form action="feedbackinsert.php" method="post">
            <div class="container">

                <input class="form-control mt-1" type="text"  name="name" placeholder="Your Name">
				<input class="form-control mt-1"  type="email" name="email" placeholder="Your Email">
				<input class="form-control mt-1 input-lg"  type="text" name="Feedback" placeholder="Your Feedback">
                <center> <button type="submit" class = "mt-3">Send</button></center>
				</div>
				
				<!-- <div class="card-footer">
                <div class="container">
                <div class="child-reg-text mx-auto text center">

                <p>To Go Home<a href="index.html"><b>Here</b></a></p>

                </div>
                </div>
                </div> -->
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
			crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
			integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
			crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
			integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
			crossorigin="anonymous"></script>
</body>
</html>