<?php

        session_start();

        $user="id17956073_imriaz";
        $password="F\!V/nD]3hEIdW8C";
        $db="id17956073_vaccinationc";
        $conn= mysqli_connect("localhost", $user ,$password, $db);
        mysqli_select_db($conn,$db);
        $c_FullName=$_POST['child_FullName'];
        $G_Name=$_POST['Guardian_Name'];
        $c_birthday=$_POST['child_birthday'];
        $G_Email=$_POST['Guardian_Email'];
        $c_Password=$_POST['child_Password'];
        $c_Address=$_POST['child_Address'];
        $G_Phone=$_POST['Guardian_Phone'];
        $c_gender=$_POST['Gender'];

        

        $registration= "insert into child(child_ID, child_FullName, Guardian_Name, child_birthday, Guardian_Email, child_Password, child_Address, Guardian_Phone, Gender) values('NULL','$c_FullName', '$G_Name', '$c_birthday', '$G_Email', '$c_Password', '$c_Address', '$G_Phone','$c_gender' )";
        $r = mysqli_query($conn,$registration);

        if($r > 0)
        {
            $_SESSION['reg_check'] = 'Registration Successful';
		
            header('Location: login.php');
        }
        else{
            die('Error in registration!!');
        }

?>  