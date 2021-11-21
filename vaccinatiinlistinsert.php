<?php

        session_start();

        $user="id17956073_imriaz";
        $password="F\!V/nD]3hEIdW8C";
        $db="id17956073_vaccinationc";
        $conn= mysqli_connect("localhost", $user ,$password, $db);
        mysqli_select_db($conn,$db);
        $Namvaccine_Name=$_POST['vaccine_Name'];
        $age_Group=$_POST['age_Group'];
        $vaccine_Dose=$_POST['vaccine_Dose'];
        $description=$_POST['description'];
        $image=$_POST['image'];
        
        

        $sql= "INSERT into vaccinelist(id, vaccine_Name, age_Group, vaccine_Dose, description, image) values('NULL','$Namvaccine_Name', '$age_Group', '$vaccine_Dose', '$description', '$image' )";
        $r = mysqli_query($conn,$sql);

        if($r > 0)
        {
            $_SESSION['reg_check'] = 'Vaccination Add Successful';
		
            header('Location: vaccinationlist.php');
        }
        else{
            die('Error in Vaccination Add!!');
        }

?>  