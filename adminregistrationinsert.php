<?php

        session_start();

        $user="id17956073_imriaz";
        $password="F\!V/nD]3hEIdW8C";
        $db="id17956073_vaccinationc";
        $conn= mysqli_connect("localhost", $user ,$password, $db);
        mysqli_select_db($conn,$db);
        $FirstName=$_POST['FirstName'];
        $LastName=$_POST['LastName'];
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        $Phone=$_POST['Phone'];
        

        $adminregistration= "insert into admin(FirstName, LastName, Email, Password, Phone) values('$FirstName', '$LastName', '$Email', '$Password', '$Phone')";
        $r = mysqli_query($conn,$adminregistration);

        if($r > 0)
        {
            $_SESSION['reg_check'] = 'Admin Registration Successful';
		
            header('Location: adminlogin.php');
        }
        else{
            die('Error in Admin Registration!!');
        }

?>  