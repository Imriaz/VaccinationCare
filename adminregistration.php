<?php
    session_start();
	
	if(isset($_SESSION['reg_check']))
	{
		echo $_SESSION['reg_check'];
		unset($_SESSION['reg_check']);
    }
    /*if($_POST['user_Password']!==$_POST['confirmpassword']) {
        echo "Your passwords did not match";
        } else {
        // success page here
        }*/
?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/profile-style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&display=swap" rel="stylesheet">
    <title>Sign Up</title>
<style>   
Body {  
    
    font-family: Calibri, Helvetica, sans-serif;  
    background-color: #a19ae8;
    background-image: url(image/bg.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    
  }  
  button {   
         background-color: #052c52;   
         width: 100%;  
          color: #e0deec;
          border-radius: 10px;   
          padding: 15px;   
          margin: 10px 0px;   
          border: none;   
          cursor: pointer;   
           }   
   form {   
          border: 400px ; 
          border-top-width: 80px; 
          border-radius: 10px;
         
      }   
   input[type=text], input[type=password], input[type=email] {   
          width: 100%;   
          margin: 8px 0;  
          padding: 12px 20px;   
          display: inline-block;   
          border: 2px #dfeadf;   
          box-sizing: border-box;
          border-radius: 3px;
         
      }  
   button:hover {   
          opacity: 0.7;   
      }   
  .cancelbtn {   
          width: auto;   
          padding: 10px 18px;  
          margin: 10px 5px;  
      }    
   .container {   
          padding: 400px;
          padding-top: 50px;
           
      }
  .container h1 {
          text-align: center;
  
     }  
  
  
</style> 
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

	    			</li>
					
				</ul>
			</div>
		</nav>


	</header>



    <div>
        <form action="adminregistrationinsert.php" method="post">
            <div class="container">
                <h1>SignUp</h1>
                <p></p>

                <label for="FirstName"><b>First Name </b></label>
                <input type="text" name="FirstName" placeholder="Enter your First name" required><br>

                <label for="LastName"><b>Last Name </b></label>
                <input type="text" name="LastName" placeholder="Enter your last name" required><br>

                <label for="Email"><b>Email </b></label>
                <input type="email" name="Email" placeholder="Enter your Email" required><br>

                <label for="Password"><b>Password </b></label>
                <input type="password" name="Password" placeholder="Enter your Password" required><br>

                <label for="Phone"><b>Phone </b></label>
                <input type="text" name="Phone" placeholder="Enter your Phone Number" required><br>

				
                
                <button type="submit">SignUp</button>
            </div>
        </form>
    </div>
</body>
</html>