<?php
  session_start();
  
  $host = 'localhost';
  $user = 'id17956073_imriaz';
  $pass ='F\!V/nD]3hEIdW8C';
  $db   = 'id17956073_vaccinationc';
  $conn = new mysqli($host, $user, $pass, $db);
        

?>

<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
<header class="site-headers ">
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
    <div class='container'>
        <form action="profileupdateprocess.php" method="POST">
                <?php
                        $current_user = $_SESSION['Guardian_Email'];
                        $sql = ("SELECT * FROM child WHERE Guardian_Email = '$current_user'");
                        
                        $res = mysqli_query($conn, $sql);

                        if($res){
                            if(mysqli_num_rows($res)>0){
                                while($row = mysqli_fetch_array($res)){
                                        ?>
                <div>
                <h1>Upadate Profile Info</h1>
                <p></p>

                <label for="child_FullName"><b>Child Full Name </b></label>
                <input type="text" name="child_FullName" value = "<?php echo $row['child_FullName']; ?>" placeholder="Enter Child Full Name" required><br>

                <label for="Guardian_Name"><b>Guardian Name </b></label>
                <input type="text" name="Guardian_Name" value = "<?php echo $row['Guardian_Name']; ?>" placeholder="Enter Guardian Name" required><br><br>

                <label for="child_birthday"><b>Child Birthday</b></label>
                <input type="date" value = "<?php echo $row['child_birthday']; ?>" name="child_birthday" ><br><br>

                
                <label for="Guardian_Email"><b>Guardian Email </b></label>
                <input type="email" name="Guardian_Email" value = "<?php echo $row['Guardian_Email']; ?>" placeholder="Enter Guardian Email" required><br>

                <label for="child_Password"><b>Password </b></label>
                <input type="password" name="child_Password" value = "<?php echo $row['child_Password']; ?>" placeholder="Enter Password" required><br>

                <label for="child_Address"><b>Address </b></label>
                <input type="text" name="child_Address" value = "<?php echo $row['child_Address']; ?>" placeholder="Enter Child Address" required><br><br>

                <label for="Guardian_Phone"><b>Phone </b></label>
                <input type="tel" id="phone" name="Guardian_Phone" value = "<?php echo $row['Guardian_Phone']; ?>" placeholder="Enter Phone Number" required><br><br>

                <label for="Gender"><b>Gender  : </b></label>
                <input type="radio" name="Gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="<?php echo $row['Gender']; ?>">Female
                <input type="radio" name="Gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="<?php echo $row['Gender']; ?>">Male
                <br>
                <br>
                <button type="submit" name="Update">Update</button>
            </div>

<?php

                                }
                            }    
                        }
                ?>


        </form>
    </div>
</body>
</html>