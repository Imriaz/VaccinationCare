<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="style.css">
  
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="vaccineread.css">
</head>
<body>

   <!-------------Bar Start-------------->
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
    </body>
  </header>

      
<div class= "row mx-4">   
<?php

$conn = mysqli_connect("localhost", "id17956073_imriaz", "F\!V/nD]3hEIdW8C", "id17956073_vaccinationc");
if($conn-> connect_error){
    die("Connection failed :". $conn-> connect_error);
}

			$sql = "SELECT vaccine_Name, age_Group, vaccine_Dose, description, image from vaccinelist";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			while( $record = mysqli_fetch_assoc($resultset) ) {
			?>
                <div class="col mb-5">
                <div class="card">
                    <img src="<?php echo $record['image']; ?>" class="card-image" alt="..." />
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $record['vaccine_Name']; ?></h3>
                        <h5 class="card-title"><?php echo $record['age_Group']; ?></h5>
                        <h5 class="card-title"><?php echo $record['vaccine_Dose']; ?></h5>
                        <p class="card-text"><?php echo $record['description']; ?></p>

                    </div>
                </div>
      </div>

<?php } ?>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>