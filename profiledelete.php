<?php
  $host = 'localhost';
  $user = 'id17956073_imriaz';
  $pass ='F\!V/nD]3hEIdW8C';
  $db   = 'id17956073_vaccinationc';
  $conn = new mysqli($host, $user, $pass, $db);

if (isset($_POST["delete"])){

      $user  = $_POST['username'];
      $pass  = $_POST['password'];
	  
      if(empty($user)){
        $user_valid = "<p style ='color:#CC3C39;'>Username/Email Required</p>";
       }
       if(empty($pass)){
        $pass_valid = "<p style ='color:#CC3C39;'>Password Required</p>";
       }
    
       if(empty($user)||empty($pass)){
        $valid =  "<p style ='color:#CC3C39;'>All fields are required<button style='color:red;' class='close' data-dissmiss='alert'>&times;</button></p>";
       }
       if ($user && $pass){
	     $sql= ("DELETE FROM child WHERE Guardian_Email = '$user' AND child_Password = '$pass' ");
	     $res = mysqli_query($conn, $sql);
	     if (mysqli_affected_rows( $conn) == 1){
             echo "your account has been deleted";  
             mysqli_close($conn);
             header("location:login.php");
             exit;
         }
         else {
             echo "invalid username and password";
          }
	  } 		  
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/all.min.css">
  
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
   .bg-success {
    background-image: url(image/p1.jpg);
    background-repeat: no-repeat;
    background-size: cover;  
    background-color: #212522!important;
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
					</div>
					</li>					
				</ul>
			</div>
		</nav>
	</header>   
</body>
<body class="bg-success">
  <br>
  <div class="container ">
    <div style="width: 420px;" class="card mx-auto mt-5">
      <div class="card-header">
       <center> <h2>Delete Your Profile</h2></center>
      </div>
      <div class="card-body">
      <div class="form">
        <form action="<?php $_SERVER['PHP_SELF']?>" method = "POST">
        <?php

          if (isset($valid)) {
            echo $valid;
          }

        ?>
        <div class="form-group">
          <input  class="form-control" type="text" placeholder="Enter your Email" name="username">
          <?php 

          if (isset($user_valid)) {
            echo $user_valid;
          }

        ?>
        </div>
        <div class="form-group">
          <input  class="form-control" type="password"  placeholder="Password" name="password">
          <?php 

          if (isset($pass_valid)) {
            echo $pass_valid;
          }

        ?>
        </div>
        <div class="form-group">
        <input class="btn btn-danger" type="submit" value="Delete" name="delete">
        </div>
        </form>
      </div>
     </div>
    </div>
  </div>
<br>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>