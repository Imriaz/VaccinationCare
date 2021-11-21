<?php
    $host = 'localhost';
  $user = 'id17956073_imriaz';
  $password ='F\!V/nD]3hEIdW8C';
  $db   = 'id17956073_vaccinationc';
  $conn = new mysqli($host, $user, $password, $db);

  session_start();
  if(!isset($_SESSION['Guardian_Phone'])){
		header("location:login.php");
      }
  if(isset($_GET['logout']) AND $_GET['logout'] == 'user-logout'){
        session_destroy();
        setcookie('user_re_log','',time() - (60*60*24*365));
        header("location:login.php");
    }
    

  

?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo  $_SESSION['child_FullName']; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/profile-style.css">

    <link rel="stylesheet" type="text/css" href="profile.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&display=swap" rel="stylesheet">
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
				<ul>
					<li class="active"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a></i></li>
					<li><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>Gallary</a>
						<div class="sub-menu-1">
							<ul>
								<li><a href="#">Photos</a></li>
								<li><a href="#">Videos</a></li>
							</ul>							
						</div>
					</li>
					<li><a href=""><i class="fa fa-stethoscope" aria-hidden="true"></i>Campaign</a></li>
					<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>About</a></li>
					<li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>Contact Us</a></li>
					<li><a href="index.html"><i class="fa fa-id-badge" aria-hidden="true"></i>Logout</a>
					</li>				
				</ul>
			</div>
		</nav>
	</header>
<div class="card mx-auto shadow">
    <div class="card-body">
        <div class="form-group">
            <h5>Vaccine Name</h5>
            <p><?php echo $_SESSION['V_name']; ?></p>
        </div>
        <div class="form-group">
            <h5>Vaccine Date </h5>
            <p><?php echo $_SESSION['V_strt_time']; ?></p>
        </div>
        <div class="form-group">
            <h5>Dose</h5>
            <p><?php echo $_SESSION['V_Dose']; ?></p>
        </div>
        <div class="form-group">
            <h5>Price</h5>
            <p><?php echo $_SESSION['V_price']; ?></p>
        </div>
        <div class="form-group">
            <h5>Place</h5>
            <p><?php echo $_SESSION['V_place']; ?></p>
        </div>	
    </div> 
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>