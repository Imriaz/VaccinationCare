<?php
  session_start();
  $host = 'localhost';
  $user = 'id17956073_imriaz';
  $password ='F\!V/nD]3hEIdW8C';
  $db   = 'id17956073_vaccinationc';
  $conn = new mysqli($host, $user, $password, $db);

  
  if(!isset($_SESSION['chlid_ID']) AND !isset( $_SESSION['child_FullName']) AND !isset( $_SESSION['Guardian_Name'])){
		header("location:login.php");
      }

?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo  $_SESSION['child_FullName']; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/profile-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
		href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <Style>
     /*-------------Bar start--------------*/
.Menu
{
	background: rgb(82, 126, 173);
	text-align: center;
}
.Menu ul
{
	display: inline-flex;
	list-style: none;
	color: #fff;
}

.Menu ul li
{
	width: 130px;
	margin: 10px;
	padding: 10px;
}

.Menu ul li a
{
	text-decoration: none;
	color: #fff;
}
.active,.Menu ul li:hover
{
   background: #234363;
   border-radius: 50px;
}
.Menu .fa
{
	margin-right: 8px;
}
.sub-menu-1
{
	display: none;

}
.Menu ul li:hover .sub-menu-1
{
	display: block;
	position: absolute;
	background: rgb(82, 126, 173);
	margin-top: 15px;
	margin-left: -15px;
	z-index: 2;
}
.Menu ul li:hover .sub-menu-1 ul
{
	display: block;
	margin: 10px;

}
.Menu ul li:hover .sub-menu-1 ul li
{
	width: 150px;
	padding: 10px;
	border-bottom: 1px dotted #fff;
	background: transparent;
	border-radius: 0;
	text-align: left;

}
.Menu ul li:hover .sub-menu-1 ul li:last-child
{
	border-bottom: none;
	
}
.Menu ul li:hover .sub-menu-1 ul li a:hover
{
	color: #b2ff00;
	
}
   /*-------------Bar end..............*/

   body {
    background-image: url(image/p1.jpg);
    background-repeat: no-repeat;
    background-size: cover; 
    background-color: #ededed;

}  
</Style>
</head>
<body>

<header class="site-headers">
<nav class="navbar navbar-expand-lg">		
			<div class="Menu bg-info container-fluid">
            <a class="navbar-brand" href="index.html"><h1><p style="color:white">Vaccination Care</p></h1></a>
				<ul>
					<li class="active"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a></i></li>
					<li><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>Gallary</a>
						<div class="sub-menu-1">
							<ul>
								<li><a href="photos.html">Photos</a></li>
								<li><a href="videos.html">Videos</a></li>							
							</ul>						
						</div>
					</li>
					<li><a href="vaccinelistread.php"><i class="fa fa-stethoscope" aria-hidden="true"></i>Campaign</a></li>
					<li><a href="about.html"><i class="fa fa-user" aria-hidden="true"></i>About</a></li>
					<li><a href="feedback.php"><i class="fa fa-phone" aria-hidden="true"></i>Contact Us</a></li>
                    <li><a href="login.php"><i class="fa fa-id-badge" aria-hidden="true"></i>Logout</a>
					</li>				
				</ul>
			</div>
		</nav>
	</header>
<div class="card mx-auto shadow">
    <div class="card-body">
        <div class="form-group">
            <h5>Child Name</h5>
            <p><?php echo $_SESSION['child_FullName']; ?></p>
        </div>
        <div class="form-group">
            <h5>Guardian Name</h5>
            <p><?php echo $_SESSION['Guardian_Name']; ?></p>
        </div>
        <div class="form-group">
            <h5>Child Birthday</h5>
            <p><?php echo $_SESSION['child_birthday']; ?></p>
        </div>
        <div class="form-group">
            <h5>Guardian Email</h5>
            <p><?php echo $_SESSION['Guardian_Email']; ?></p>
        </div>
        <div class="form-group">
            <h5>Address</h5>
            <p><?php echo $_SESSION['child_Address']; ?></p>
        </div>
        <div class="form-group">
            <h5>Phone</h5>
            <p><?php echo $_SESSION['Guardian_Phone']; ?></p>
        </div>
        <button class="m-2 btn btn-primary" onclick="window.location.href='profileupdate.php'">Update Profile Info</button>
        <button class="m-2 btn btn-danger" onclick="window.location.href='profiledelete.php'">Delete Account</button>		
    </div>  
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>